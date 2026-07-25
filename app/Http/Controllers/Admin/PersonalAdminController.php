<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PersonalStudyLog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PersonalAdminController extends Controller
{
    public function index(): Response
    {
        $logs = PersonalStudyLog::query()
            ->select(['studied_on', 'category', 'set_count', 'minutes'])
            ->orderByDesc('studied_on')
            ->get();

        $englishMinutes = (int) $logs->where('category', '英語')->sum('minutes');
        $learningMinutes = (int) $logs->where('category', '学び')->sum('minutes');

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

        return Inertia::render('Admin/Personal', [
            'stats' => [
                'english_duration' => $this->formatDuration($englishMinutes),
                'learning_duration' => $this->formatDuration($learningMinutes),
            ],
            'monthlySummaries' => $monthlySummaries,
            'dailySummaries' => $dailySummaries,
        ]);
    }

    public function storeStudyLog(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'studied_on' => ['required', 'date'],
            'category' => ['required', 'string', 'in:英語,学び'],
            'set_count' => ['required', 'integer', 'min:1', 'max:96'],
        ]);

        $setCount = (int) $validated['set_count'];
        $minutes = $setCount * 15;

        PersonalStudyLog::create([
            'studied_on' => $validated['studied_on'],
            'category' => $validated['category'],
            'set_count' => $setCount,
            'minutes' => $minutes,
            'hours' => round($minutes / 60, 2),
            'set_label' => "{$setCount}セット",
            'source_file' => 'manual',
            'source_row_number' => null,
            'raw_payload' => [
                'input' => 'manual',
            ],
        ]);

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
