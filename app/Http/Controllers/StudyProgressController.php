<?php

namespace App\Http\Controllers;

use App\Models\StudyAttempt;
use App\Models\UserPreference;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudyProgressController extends Controller
{
    public function show(Request $request, string $examKey): JsonResponse
    {
        $attempt = StudyAttempt::query()
            ->where('user_id', $request->user()->id)
            ->where('exam_key', $examKey)
            ->latest('attempt_no')
            ->with('answers')
            ->first();

        $preference = UserPreference::query()
            ->where('user_id', $request->user()->id)
            ->value('preferred_test_mode') ?? 'browse';

        return response()->json([
            'preferred_test_mode' => $preference,
            'attempt' => $attempt ? $this->attemptPayload($attempt) : null,
        ]);
    }

    public function updatePreference(Request $request): JsonResponse
    {
        $data = $request->validate([
            'preferred_test_mode' => ['required', Rule::in(['browse', 'study'])],
        ]);

        UserPreference::updateOrCreate(
            ['user_id' => $request->user()->id],
            ['preferred_test_mode' => $data['preferred_test_mode']],
        );

        return response()->json($data);
    }

    public function storeAnswer(Request $request, string $examKey, int $questionNo): JsonResponse
    {
        $data = $request->validate([
            'selected_answer' => ['required', 'string', 'max:100'],
            'correct_answer' => ['nullable', 'string', 'max:100'],
            'is_correct' => ['required', 'boolean'],
            'points_awarded' => ['required', 'numeric', 'multiple_of:0.5', 'min:0', 'max:100'],
            'max_score' => ['sometimes', 'integer', 'min:1', 'max:10000'],
            'question_count' => ['sometimes', 'integer', 'min:1', 'max:500'],
        ]);

        $attempt = DB::transaction(function () use ($request, $examKey, $questionNo, $data) {
            $attempt = $this->currentAttempt($request, $examKey);
            $attempt->answers()->updateOrCreate(
                ['question_no' => $questionNo],
                [
                    'selected_answer' => $data['selected_answer'],
                    'correct_answer' => $data['correct_answer'] ?? null,
                    'is_correct' => $data['is_correct'],
                    'points_awarded' => $data['points_awarded'],
                    'answered_at' => now(),
                ],
            );

            return $this->refreshAttemptTotals(
                $attempt,
                $data['question_count'] ?? 50,
                $data['max_score'] ?? 100,
            );
        });

        return response()->json(['saved' => true]);
    }

    public function deleteAnswer(Request $request, string $examKey, int $questionNo): JsonResponse
    {
        $data = $request->validate([
            'max_score' => ['sometimes', 'integer', 'min:1', 'max:10000'],
            'question_count' => ['sometimes', 'integer', 'min:1', 'max:500'],
        ]);
        $attempt = $this->findCurrentAttempt($request, $examKey);

        if ($attempt) {
            DB::transaction(function () use ($attempt, $questionNo, $data) {
                $attempt->answers()->where('question_no', $questionNo)->delete();
                $this->refreshAttemptTotals(
                    $attempt,
                    $data['question_count'] ?? 50,
                    $data['max_score'] ?? 100,
                );
            });
        }

        return response()->json(['saved' => true]);
    }

    public function resetAttempt(Request $request, string $examKey): JsonResponse
    {
        $attempt = $this->findCurrentAttempt($request, $examKey);

        if ($attempt) {
            $attempt = DB::transaction(function () use ($attempt, $request, $examKey) {
                if ($attempt->answers()->exists()) {
                    $previousIncorrectQuestions = $attempt->answers()
                        ->where('is_correct', false)
                        ->orderBy('question_no')
                        ->pluck('question_no')
                        ->map(fn ($questionNo) => (int) $questionNo)
                        ->values()
                        ->all();
                    $previousCorrectQuestions = $attempt->answers()
                        ->where('is_correct', true)
                        ->orderBy('question_no')
                        ->pluck('question_no')
                        ->map(fn ($questionNo) => (int) $questionNo)
                        ->values()
                        ->all();
                    $nextAttemptNo = StudyAttempt::query()
                        ->where('user_id', $request->user()->id)
                        ->where('exam_key', $examKey)
                        ->max('attempt_no') + 1;

                    $newAttempt = StudyAttempt::create([
                        'user_id' => $request->user()->id,
                        'exam_key' => $examKey,
                        'attempt_no' => $nextAttemptNo,
                        'status' => 'in_progress',
                        'current_question_no' => 1,
                        'answered_count' => 0,
                        'score' => 0,
                        'max_score' => $attempt->max_score,
                        'previous_incorrect_questions' => $previousIncorrectQuestions,
                        'previous_correct_questions' => $previousCorrectQuestions,
                        'started_at' => now(),
                    ]);

                    return $newAttempt;
                }

                $attempt->update([
                    'status' => 'in_progress',
                    'current_question_no' => 1,
                    'answered_count' => 0,
                    'score' => 0,
                    'completed_at' => null,
                    'started_at' => now(),
                ]);

                return $attempt;
            });
        }

        return response()->json(['reset' => true]);
    }

    private function currentAttempt(Request $request, string $examKey): StudyAttempt
    {
        return $this->findCurrentAttempt($request, $examKey) ?? StudyAttempt::firstOrCreate(
            [
                'user_id' => $request->user()->id,
                'exam_key' => $examKey,
                'attempt_no' => 1,
            ],
            [
                'status' => 'in_progress',
                'current_question_no' => 1,
                'answered_count' => 0,
                'score' => 0,
                'max_score' => 100,
                'started_at' => now(),
            ],
        );
    }

    private function findCurrentAttempt(Request $request, string $examKey): ?StudyAttempt
    {
        return StudyAttempt::query()
            ->where('user_id', $request->user()->id)
            ->where('exam_key', $examKey)
            ->latest('attempt_no')
            ->first();
    }

    private function refreshAttemptTotals(StudyAttempt $attempt, int $questionCount, int $maxScore): StudyAttempt
    {
        $totals = $attempt->answers()
            ->selectRaw('COUNT(*) as answered_count, COALESCE(SUM(points_awarded), 0) as score')
            ->first();
        $answeredCount = (int) $totals->answered_count;
        $attempt->update([
            'answered_count' => $answeredCount,
            'score' => (float) $totals->score,
            'max_score' => $maxScore,
            'status' => $answeredCount >= $questionCount ? 'completed' : 'in_progress',
            'completed_at' => $answeredCount >= $questionCount ? ($attempt->completed_at ?? now()) : null,
        ]);

        // 進行中は前回分を残し、完了した時点で今回の結果に置き換える。
        if ($answeredCount >= $questionCount) {
            $this->deleteOtherAttempts($attempt);
        }

        return $attempt;
    }

    private function deleteOtherAttempts(StudyAttempt $attempt): void
    {
        StudyAttempt::query()
            ->where('user_id', $attempt->user_id)
            ->where('exam_key', $attempt->exam_key)
            ->where('id', '!=', $attempt->id)
            ->delete();
    }

    private function attemptPayload(StudyAttempt $attempt): array
    {
        return [
            ...$this->attemptSummaryPayload($attempt),
            'answers' => $attempt->answers->map(fn ($answer) => [
                'question_no' => $answer->question_no,
                'selected_answer' => $answer->selected_answer,
                'correct_answer' => $answer->correct_answer,
                'is_correct' => $answer->is_correct,
                'points_awarded' => $answer->points_awarded,
            ])->values(),
        ];
    }

    private function attemptSummaryPayload(StudyAttempt $attempt): array
    {
        return [
            'id' => $attempt->id,
            'attempt_no' => $attempt->attempt_no,
            'status' => $attempt->status,
            'current_question_no' => $attempt->current_question_no,
            'answered_count' => $attempt->answered_count,
            'score' => $attempt->score,
            'max_score' => $attempt->max_score,
            'previous_incorrect_questions' => $attempt->previous_incorrect_questions ?? [],
            'previous_correct_questions' => $attempt->previous_correct_questions ?? [],
            'completed_at' => $attempt->completed_at?->toISOString(),
        ];
    }
}
