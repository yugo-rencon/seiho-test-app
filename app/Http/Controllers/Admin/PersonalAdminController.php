<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnglishBook;
use App\Models\EnglishBookShelf;
use App\Models\PersonalExerciseLog;
use App\Models\PersonalStudyLog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class PersonalAdminController extends Controller
{
    public function index(Request $request): Response
    {
        $logs = PersonalStudyLog::query()
            ->select(['id', 'studied_on', 'category', 'subcategory', 'set_count', 'minutes', 'raw_payload'])
            ->orderByDesc('studied_on')
            ->get();

        $englishBookShelves = EnglishBookShelf::query()
            ->with('book:id,title,author')
            ->where('user_id', $request->user()->id)
            ->orderByRaw("case status when 'reading' then 0 when 'want' then 1 when 'finished' then 2 else 3 end")
            ->orderByDesc('finished_on')
            ->orderBy('id')
            ->get();

        $englishBookTitleById = $englishBookShelves
            ->mapWithKeys(fn (EnglishBookShelf $shelf) => [
                $shelf->english_book_id => $shelf->book?->title,
            ])
            ->filter();

        $englishBookMinutesById = [];
        $englishBookLogCountsById = [];
        foreach ($logs->where('category', '英語') as $log) {
            $englishBookId = (int) data_get($log->raw_payload, 'english_book_id');

            if ($englishBookId <= 0) {
                continue;
            }

            $englishBookMinutesById[$englishBookId] = ($englishBookMinutesById[$englishBookId] ?? 0) + (int) $log->minutes;
            $englishBookLogCountsById[$englishBookId] = ($englishBookLogCountsById[$englishBookId] ?? 0) + 1;
        }

        $englishBooks = $englishBookShelves
            ->map(function (EnglishBookShelf $shelf) use ($englishBookMinutesById, $englishBookLogCountsById) {
                $minutes = $englishBookMinutesById[$shelf->english_book_id] ?? 0;

                return [
                    'id' => $shelf->id,
                    'english_book_id' => $shelf->english_book_id,
                    'title' => $shelf->book?->title ?? 'タイトル未設定',
                    'author' => $shelf->book?->author,
                    'status' => $shelf->status,
                    'status_label' => $this->englishBookStatusLabel($shelf->status),
                    'started_on' => $shelf->started_on?->format('Y-m-d'),
                    'finished_on' => $shelf->finished_on?->format('Y-m-d'),
                    'total_minutes' => $minutes,
                    'total_duration' => $this->formatDuration($minutes),
                    'log_count' => $englishBookLogCountsById[$shelf->english_book_id] ?? 0,
                ];
            })
            ->values();

        $englishMinutes = (int) $logs->where('category', '英語')->sum('minutes');
        $learningMinutes = (int) $logs->where('category', '学び')->sum('minutes');
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
            ->map(function ($dayLogs) use ($englishBookTitleById) {
                return $dayLogs
                    ->sortByDesc('id')
                    ->map(function (PersonalStudyLog $log) use ($englishBookTitleById) {
                        $englishBookId = (int) data_get($log->raw_payload, 'english_book_id') ?: null;

                        return [
                            'id' => $log->id,
                            'category' => $log->category,
                            'subcategory' => $log->subcategory,
                            'set_count' => $log->set_count,
                            'duration' => $this->formatDuration($log->minutes),
                            'english_book_id' => $englishBookId,
                            'english_book_title' => $englishBookId
                                ? (data_get($log->raw_payload, 'english_book_title') ?: $englishBookTitleById->get($englishBookId))
                                : null,
                        ];
                    })
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
        $completedExerciseDates = $exerciseLogs
            ->where('completed', true)
            ->pluck('exercised_on')
            ->map(fn (Carbon $date) => $date->format('Y-m-d'))
            ->unique()
            ->values();
        $exerciseStreak = $this->calculateDateStreak($completedExerciseDates->all());

        return Inertia::render('Admin/Personal', [
            'stats' => [
                'english_duration' => $this->formatDuration($englishMinutes),
                'learning_duration' => $this->formatDuration($learningMinutes),
                'learning_breakdown' => [
                    [
                        'label' => 'E資格',
                        'duration' => $this->formatDuration($eQualificationMinutes),
                    ],
                ],
            ],
            'monthlySummaries' => $monthlySummaries,
            'dailySummaries' => $dailySummaries,
            'studyLogsByDay' => $studyLogsByDay,
            'englishBooks' => $englishBooks,
            'exerciseStats' => [
                'walking_count' => $exerciseLogs->where('activity', 'ウォーキング')->where('completed', true)->count(),
                'running_count' => $exerciseLogs->where('activity', 'ランニング')->where('completed', true)->count(),
                'strength_training_count' => $exerciseLogs->where('activity', '筋トレ')->where('completed', true)->count(),
                'streak_count' => $exerciseStreak['count'],
                'streak_until' => $exerciseStreak['until'],
            ],
            'exerciseMonthlySummaries' => $exerciseMonthlySummaries,
            'exerciseLogsByDay' => $exerciseLogsByDay,
        ]);
    }

    private function calculateDateStreak(array $dates): array
    {
        $dateSet = collect($dates)
            ->filter()
            ->unique()
            ->values();

        if ($dateSet->isEmpty()) {
            return [
                'count' => 0,
                'until' => null,
            ];
        }

        $current = Carbon::createFromFormat('!Y-m-d', (string) $dateSet->max());
        $until = $current->toDateString();
        $count = 0;

        while ($dateSet->contains($current->toDateString())) {
            $count += 1;
            $current->subDay();
        }

        return [
            'count' => $count,
            'until' => $until,
        ];
    }

    public function storeStudyLog(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'studied_on' => ['required', 'date_format:Y-m-d'],
            'category' => ['required', 'string', 'in:英語,学び'],
            'subcategory' => ['nullable', 'string', 'required_if:category,学び', 'in:E資格'],
            'english_book_id' => ['nullable', 'integer', 'exists:english_books,id'],
            'set_count' => ['required', 'integer', 'min:1', 'max:96'],
        ]);

        $studiedOn = Carbon::createFromFormat('!Y-m-d', $validated['studied_on'])->toDateString();
        $setCount = (int) $validated['set_count'];
        $minutes = $setCount * 15;
        $englishBook = null;
        $englishBookId = null;

        if ($validated['category'] === '英語' && !empty($validated['english_book_id'])) {
            $englishBookId = (int) $validated['english_book_id'];
            $englishBook = EnglishBook::query()
                ->select(['id', 'title'])
                ->findOrFail($englishBookId);
        }

        $subcategory = match ($validated['category']) {
            '学び' => (string) $validated['subcategory'],
            '英語' => $englishBookId ? "洋書:{$englishBookId}" : '',
        };

        DB::transaction(function () use ($request, $validated, $studiedOn, $setCount, $minutes, $subcategory, $englishBook, $englishBookId) {
            if ($englishBookId) {
                $shelf = EnglishBookShelf::query()
                    ->firstOrCreate(
                        [
                            'user_id' => $request->user()->id,
                            'english_book_id' => $englishBookId,
                        ],
                        [
                            'status' => 'reading',
                            'started_on' => $studiedOn,
                        ],
                    );

                if (!$shelf->wasRecentlyCreated && $shelf->status === 'want') {
                    $shelf->update([
                        'status' => 'reading',
                        'started_on' => $shelf->started_on ?: $studiedOn,
                    ]);
                }
            }

            $existingLogs = PersonalStudyLog::query()
                ->where('studied_on', $studiedOn)
                ->where('category', $validated['category'])
                ->where('subcategory', $subcategory)
                ->orderBy('id')
                ->get();

            $payload = [
                'studied_on' => $studiedOn,
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
                    'english_book_id' => $englishBookId,
                    'english_book_title' => $englishBook?->title,
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
            'exercised_on' => ['required', 'date_format:Y-m-d'],
            'activity' => ['required', 'string', 'in:ウォーキング,ランニング,筋トレ'],
            'memo' => ['nullable', 'string', 'max:1000'],
        ]);

        $exercisedOn = Carbon::createFromFormat('!Y-m-d', $validated['exercised_on'])->toDateString();

        PersonalExerciseLog::updateOrCreate(
            [
                'exercised_on' => $exercisedOn,
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

    private function englishBookStatusLabel(?string $status): string
    {
        return match ($status) {
            'reading' => '読書中',
            'finished' => '読了',
            'want' => '未読',
            default => '未設定',
        };
    }
}
