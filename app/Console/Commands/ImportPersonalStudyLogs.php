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
        $skipped = 0;
        $sourceFile = str_replace(base_path() . DIRECTORY_SEPARATOR, '', $path);

        DB::transaction(function () use ($file, &$headers, &$imported, &$skipped, $sourceFile) {
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

                $setCount = (int) ($data['セット数'] ?? 0);
                $studiedOn = Carbon::createFromFormat('Y/m/d', (string) $data['日付'])->toDateString();

                PersonalStudyLog::updateOrCreate(
                    [
                        'source_file' => $sourceFile,
                        'source_row_number' => $index + 1,
                    ],
                    [
                        'studied_on' => $studiedOn,
                        'category' => (string) $data['カテゴリー'],
                        'set_count' => $setCount,
                        'minutes' => $setCount * 15,
                        'hours' => (float) ($data['学習時間（h)'] ?? 0),
                        'set_label' => $row[0] ?? null,
                        'raw_payload' => $data,
                    ],
                );

                $imported++;
            }
        });

        $this->info("Imported {$imported} study logs. Skipped {$skipped} rows.");

        return self::SUCCESS;
    }
}
