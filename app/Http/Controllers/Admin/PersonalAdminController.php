<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PersonalExerciseLog;
use App\Models\PersonalStudyLog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class PersonalAdminController extends Controller
{
    public function index(): Response
    {
        $logs = PersonalStudyLog::query()
            ->select(['id', 'studied_on', 'category', 'subcategory', 'set_count', 'minutes'])
            ->orderByDesc('studied_on')
            ->get();

        $englishMinutes = (int) $logs->where('category', '英語')->sum('minutes');
        $learningMinutes = (int) $logs->where('category', '学び')->sum('minutes');
        $dsMinutes = (int) $logs
            ->where('category', '学び')
            ->where('subcategory', 'DS検定')
            ->sum('minutes');
        $eQualificationMinutes = (int) $logs
            ->where('category', '学び')
            ->where('subcategory', 'E資格')
            ->sum('minutes');

        $monthlySummaries = $logs
            ->groupBy(fn (PersonalStudyLog $log) => $log->studied_on->format('Y-m'))
            ->sortKeysDesc()
            ->map(function ($monthLogs, string $month) {
                $englishMinutes = (int) $monthLogs->where('category', '英語')->sum('minutes');
                $learningMinutes = (int) $monthLogs->where('category', '学び')->sum('minutes');

                return [
                    'month' => $month,
                    'month_label' => $monthLogs->first()->studied_on->format('Y/m'),
                    'english_duration' => $this->formatDuration($englishMinutes),
                    'learning_duration' => $this->formatDuration($learningMinutes),
                ];
            })
            ->values();

        $dailySummaries = $logs
            ->groupBy(fn (PersonalStudyLog $log) => $log->studied_on->format('Y-m-d'))
            ->sortKeysDesc()
            ->map(function ($dayLogs, string $day) {
                $englishSets = (int) $dayLogs->where('category', '英語')->sum('set_count');
                $learningSets = (int) $dayLogs->where('category', '学び')->sum('set_count');

                return [
                    'day' => $day,
                    'day_label' => $dayLogs->first()->studied_on->format('Y/m/d'),
                    'english_sets' => $englishSets,
                    'learning_sets' => $learningSets,
                ];
            })
            ->values();

        $studyLogsByDay = $logs
            ->groupBy(fn (PersonalStudyLog $log) => $log->studied_on->format('Y-m-d'))
            ->map(function ($dayLogs) {
                return $dayLogs
                    ->sortByDesc('id')
                    ->map(fn (PersonalStudyLog $log) => [
                        'id' => $log->id,
                        'category' => $log->category,
                        'subcategory' => $log->subcategory,
                        'set_count' => $log->set_count,
                        'duration' => $this->formatDuration($log->minutes),
                    ])
                    ->values();
            });

        $exerciseLogs = PersonalExerciseLog::query()
            ->select(['id', 'exercised_on', 'activity', 'completed', 'memo'])
            ->orderByDesc('exercised_on')
            ->get();

        $exerciseLogsByDay = $exerciseLogs
            ->groupBy(fn (PersonalExerciseLog $log) => $log->exercised_on->format('Y-m-d'))
            ->map(function ($dayLogs) {
                return $dayLogs
                    ->sortBy('activity')
                    ->map(fn (PersonalExerciseLog $log) => [
                        'id' => $log->id,
                        'activity' => $log->activity,
                        'completed' => $log->completed,
                        'memo' => $log->memo,
                    ])
                    ->values();
            });

        $exerciseMonthlySummaries = $exerciseLogs
            ->groupBy(fn (PersonalExerciseLog $log) => $log->exercised_on->format('Y-m'))
            ->sortKeysDesc()
            ->map(function ($monthLogs, string $month) {
                $walkingCount = $monthLogs->where('activity', 'ウォーキング')->where('completed', true)->count();
                $runningCount = $monthLogs->where('activity', 'ランニング')->where('completed', true)->count();
                $strengthTrainingCount = $monthLogs->where('activity', '筋トレ')->where('completed', true)->count();

                return [
                    'month' => $month,
                    'month_label' => $monthLogs->first()->exercised_on->format('Y/m'),
                    'walking_count' => $walkingCount,
                    'running_count' => $runningCount,
                    'strength_training_count' => $strengthTrainingCount,
                    'total_count' => $walkingCount + $runningCount + $strengthTrainingCount,
                ];
            })
            ->values();

        return Inertia::render('Admin/Personal', [
            'stats' => [
                'english_duration' => $this->formatDuration($englishMinutes),
                'learning_duration' => $this->formatDuration($learningMinutes),
                'learning_breakdown' => [
                    [
                        'label' => 'DS検定',
                        'duration' => $this->formatDuration($dsMinutes),
                    ],
                    [
                        'label' => 'E資格',
                        'duration' => $this->formatDuration($eQualificationMinutes),
                    ],
                ],
            ],
            'monthlySummaries' => $monthlySummaries,
            'dailySummaries' => $dailySummaries,
            'studyLogsByDay' => $studyLogsByDay,
            'exerciseStats' => [
                'walking_count' => $exerciseLogs->where('activity', 'ウォーキング')->where('completed', true)->count(),
                'running_count' => $exerciseLogs->where('activity', 'ランニング')->where('completed', true)->count(),
                'strength_training_count' => $exerciseLogs->where('activity', '筋トレ')->where('completed', true)->count(),
            ],
            'exerciseMonthlySummaries' => $exerciseMonthlySummaries,
            'exerciseLogsByDay' => $exerciseLogsByDay,
        ]);
    }

    public function storeStudyLog(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'studied_on' => ['required', 'date'],
            'category' => ['required', 'string', 'in:英語,学び'],
            'subcategory' => ['nullable', 'string', 'required_if:category,学び', 'in:DS検定,E資格'],
            'set_count' => ['required', 'integer', 'min:1', 'max:96'],
        ]);

        $setCount = (int) $validated['set_count'];
        $minutes = $setCount * 15;
        $subcategory = $validated['category'] === '学び'
            ? (string) $validated['subcategory']
            : '';

        DB::transaction(function () use ($validated, $setCount, $minutes, $subcategory) {
            $existingLogs = PersonalStudyLog::query()
                ->where('studied_on', $validated['studied_on'])
                ->where('category', $validated['category'])
                ->where('subcategory', $subcategory)
                ->orderBy('id')
                ->get();

            $payload = [
                'studied_on' => $validated['studied_on'],
                'category' => $validated['category'],
                'subcategory' => $subcategory,
                'set_count' => $setCount,
                'minutes' => $minutes,
                'hours' => round($minutes / 60, 2),
                'set_label' => "{$setCount}セット",
                'source_file' => 'manual',
                'source_row_number' => null,
                'raw_payload' => [
                    'input' => 'manual',
                    'mode' => 'overwrite',
                    'subcategory' => $subcategory,
                ],
            ];

            if ($existingLogs->isEmpty()) {
                PersonalStudyLog::create($payload);

                return;
            }

            $keeper = $existingLogs->first();
            $keeper->update($payload);

            $duplicateIds = $existingLogs
                ->skip(1)
                ->pluck('id');

            if ($duplicateIds->isNotEmpty()) {
                PersonalStudyLog::query()
                    ->whereIn('id', $duplicateIds)
                    ->delete();
            }
        });

        return back();
    }

    public function deleteStudyLog(PersonalStudyLog $studyLog): RedirectResponse
    {
        $studyLog->delete();

        return back();
    }

    public function storeExerciseLog(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'exercised_on' => ['required', 'date'],
            'activity' => ['required', 'string', 'in:ウォーキング,ランニング,筋トレ'],
            'memo' => ['nullable', 'string', 'max:1000'],
        ]);

        PersonalExerciseLog::updateOrCreate(
            [
                'exercised_on' => $validated['exercised_on'],
                'activity' => $validated['activity'],
            ],
            [
                'completed' => true,
                'memo' => $validated['memo'] ?? null,
            ],
        );

        return back();
    }

    public function deleteExerciseLog(PersonalExerciseLog $exerciseLog): RedirectResponse
    {
        $exerciseLog->delete();

        return back();
    }

    private function formatDuration(int $minutes): string
    {
        $hours = intdiv($minutes, 60);
        $remainingMinutes = $minutes % 60;

        if ($hours > 0 && $remainingMinutes > 0) {
            return "{$hours}時間{$remainingMinutes}分";
        }

        if ($hours > 0) {
            return "{$hours}時間";
        }

        return "{$remainingMinutes}分";
    }
}
