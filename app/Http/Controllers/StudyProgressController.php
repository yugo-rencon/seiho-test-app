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
            ->whereHas('answers')
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

    public function updateAttempt(Request $request, string $examKey): JsonResponse
    {
        $data = $request->validate([
            'current_question_no' => ['required', 'integer', 'min:1', 'max:500'],
        ]);

        $attempt = $this->findCurrentAttempt($request, $examKey);
        if (!$attempt || !$attempt->answers()->exists()) {
            return response()->json(['attempt' => null]);
        }

        $attempt->update(['current_question_no' => $data['current_question_no']]);

        return response()->json(['attempt' => $this->attemptPayload($attempt->fresh('answers'))]);
    }

    public function storeAnswer(Request $request, string $examKey, int $questionNo): JsonResponse
    {
        $data = $request->validate([
            'selected_answer' => ['required', 'string', 'max:100'],
            'correct_answer' => ['nullable', 'string', 'max:100'],
            'is_correct' => ['required', 'boolean'],
            'points_awarded' => ['required', 'integer', 'min:0', 'max:100'],
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

        return response()->json(['attempt' => $this->attemptPayload($attempt)]);
    }

    public function deleteAnswer(Request $request, string $examKey, int $questionNo): JsonResponse
    {
        $attempt = $this->findCurrentAttempt($request, $examKey);

        if ($attempt) {
            DB::transaction(function () use ($attempt, $questionNo) {
                $attempt->answers()->where('question_no', $questionNo)->delete();
                $this->refreshAttemptTotals($attempt, 50, 100);
            });
        }

        return response()->json(['attempt' => $attempt ? $this->attemptPayload($attempt->fresh('answers')) : null]);
    }

    public function resetAttempt(Request $request, string $examKey): JsonResponse
    {
        $attempt = $this->findCurrentAttempt($request, $examKey);

        if ($attempt) {
            $attempt = DB::transaction(function () use ($attempt, $request, $examKey) {
                if ($attempt->answers()->exists()) {
                    $nextAttemptNo = StudyAttempt::query()
                        ->where('user_id', $request->user()->id)
                        ->where('exam_key', $examKey)
                        ->max('attempt_no') + 1;

                    return StudyAttempt::create([
                        'user_id' => $request->user()->id,
                        'exam_key' => $examKey,
                        'attempt_no' => $nextAttemptNo,
                        'status' => 'in_progress',
                        'current_question_no' => 1,
                        'answered_count' => 0,
                        'score' => 0,
                        'max_score' => $attempt->max_score,
                        'started_at' => now(),
                    ]);
                }

                $attempt->update([
                    'status' => 'in_progress',
                    'current_question_no' => 1,
                    'answered_count' => 0,
                    'score' => 0,
                    'completed_at' => null,
                    'started_at' => now(),
                ]);

                return $attempt->fresh();
            });
        }

        return response()->json(['attempt' => $attempt ? $this->attemptPayload($attempt->fresh('answers')) : null]);
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
        $answeredCount = $attempt->answers()->count();
        $attempt->update([
            'answered_count' => $answeredCount,
            'score' => (int) $attempt->answers()->sum('points_awarded'),
            'max_score' => $maxScore,
            'status' => $answeredCount >= $questionCount ? 'completed' : 'in_progress',
            'completed_at' => $answeredCount >= $questionCount ? ($attempt->completed_at ?? now()) : null,
        ]);

        if ($answeredCount >= $questionCount) {
            $this->pruneAttemptHistory($attempt);
        }

        return $attempt->fresh('answers');
    }

    private function pruneAttemptHistory(StudyAttempt $attempt): void
    {
        $attempts = StudyAttempt::query()
            ->where('user_id', $attempt->user_id)
            ->where('exam_key', $attempt->exam_key)
            ->get(['id', 'attempt_no', 'status', 'score']);
        $recentIds = $attempts->sortByDesc('attempt_no')->take(3)->pluck('id');
        $bestId = $attempts
            ->where('status', 'completed')
            ->sort(fn ($a, $b) => $b->score <=> $a->score ?: $b->attempt_no <=> $a->attempt_no)
            ->first()?->id;
        $keepIds = $recentIds->when($bestId, fn ($ids) => $ids->push($bestId))->unique();

        StudyAttempt::query()
            ->where('user_id', $attempt->user_id)
            ->where('exam_key', $attempt->exam_key)
            ->whereNotIn('id', $keepIds)
            ->delete();
    }

    private function attemptPayload(StudyAttempt $attempt): array
    {
        return [
            'id' => $attempt->id,
            'attempt_no' => $attempt->attempt_no,
            'status' => $attempt->status,
            'current_question_no' => $attempt->current_question_no,
            'answered_count' => $attempt->answered_count,
            'score' => $attempt->score,
            'max_score' => $attempt->max_score,
            'completed_at' => $attempt->completed_at?->toISOString(),
            'answers' => $attempt->answers->map(fn ($answer) => [
                'question_no' => $answer->question_no,
                'selected_answer' => $answer->selected_answer,
                'correct_answer' => $answer->correct_answer,
                'is_correct' => $answer->is_correct,
                'points_awarded' => $answer->points_awarded,
            ])->values(),
        ];
    }
}
