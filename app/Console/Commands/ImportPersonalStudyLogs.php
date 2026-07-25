<?php

namespace App\Console\Commands;

use App\Models\PersonalStudyLog;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use SplFileObject;

class ImportPersonalStudyLogs extends Command
{
    protected $signature = 'personal:import-study-logs {path=yugo/学習ログ.csv}';

    protected $description = 'Import personal study logs from a CSV file.';

    public function handle(): int
    {
        $path = base_path((string) $this->argument('path'));

        if (! is_file($path)) {
            $this->error("CSV file not found: {$path}");

            return self::FAILURE;
        }

        $file = new SplFileObject($path);
        $file->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY);

        $headers = null;
        $imported = 0;
        $processed = 0;
        $skipped = 0;
        $sourceFile = str_replace(base_path() . DIRECTORY_SEPARATOR, '', $path);
        $groupedLogs = [];

        foreach ($file as $index => $row) {
            if (! is_array($row) || $row === [null]) {
                continue;
            }

            $row = array_map(fn ($value) => is_string($value) ? trim($value) : $value, $row);

            if ($headers === null) {
                $headers = $row;
                continue;
            }

            $data = array_combine($headers, array_pad($row, count($headers), null));

            if (! $data || empty($data['日付']) || empty($data['カテゴリー'])) {
                $skipped++;
                continue;
            }

            $category = (string) $data['カテゴリー'];

            if (! in_array($category, ['英語', '学び'], true)) {
                $skipped++;
                continue;
            }

            $setCount = (int) ($data['セット数'] ?? 0);

            if ($setCount < 1) {
                $skipped++;
                continue;
            }

            $studiedOn = Carbon::createFromFormat('Y/m/d', (string) $data['日付'])->toDateString();
            $groupKey = "{$studiedOn}|{$category}";

            if (! isset($groupedLogs[$groupKey])) {
                $groupedLogs[$groupKey] = [
                    'studied_on' => $studiedOn,
                    'category' => $category,
                    'set_count' => 0,
                    'source_rows' => [],
                ];
            }

            $groupedLogs[$groupKey]['set_count'] += $setCount;
            $groupedLogs[$groupKey]['source_rows'][] = $index + 1;
            $processed++;
        }

        DB::transaction(function () use ($groupedLogs, &$imported, $sourceFile) {
            foreach ($groupedLogs as $log) {
                $setCount = (int) $log['set_count'];
                $minutes = $setCount * 15;
                PersonalStudyLog::updateOrCreate(
                    [
                        'studied_on' => $log['studied_on'],
                        'category' => $log['category'],
                    ],
                    [
                        'set_count' => $setCount,
                        'minutes' => $minutes,
                        'hours' => round($minutes / 60, 2),
                        'set_label' => "{$setCount}セット",
                        'source_file' => $sourceFile,
                        'source_row_number' => null,
                        'raw_payload' => [
                            'input' => 'csv',
                            'mode' => 'grouped_by_day_category',
                            'source_rows' => $log['source_rows'],
                        ],
                    ],
                );

                $imported++;
            }
        });

        $this->info("Imported {$imported} grouped study logs from {$processed} rows. Skipped {$skipped} rows.");

        return self::SUCCESS;
    }
}
