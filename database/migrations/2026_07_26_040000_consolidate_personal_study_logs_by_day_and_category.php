<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::transaction(function () {
            $groups = DB::table('personal_study_logs')
                ->select([
                    'studied_on',
                    'category',
                    DB::raw('MIN(id) as keeper_id'),
                    DB::raw('SUM(set_count) as total_sets'),
                    DB::raw('SUM(minutes) as total_minutes'),
                    DB::raw('COUNT(*) as row_count'),
                ])
                ->groupBy('studied_on', 'category')
                ->havingRaw('COUNT(*) > 1')
                ->get();

            foreach ($groups as $group) {
                $setCount = (int) $group->total_sets;
                $minutes = (int) $group->total_minutes;

                DB::table('personal_study_logs')
                    ->where('id', $group->keeper_id)
                    ->update([
                        'set_count' => $setCount,
                        'minutes' => $minutes,
                        'hours' => round($minutes / 60, 2),
                        'set_label' => "{$setCount}セット",
                        'source_file' => 'consolidated',
                        'source_row_number' => null,
                        'raw_payload' => json_encode([
                            'input' => 'migration',
                            'mode' => 'consolidated_by_day_category',
                            'merged_rows' => (int) $group->row_count,
                        ], JSON_UNESCAPED_UNICODE),
                        'updated_at' => now(),
                    ]);

                DB::table('personal_study_logs')
                    ->where('studied_on', $group->studied_on)
                    ->where('category', $group->category)
                    ->where('id', '!=', $group->keeper_id)
                    ->delete();
            }
        });

        Schema::table('personal_study_logs', function (Blueprint $table) {
            $table->unique(['studied_on', 'category'], 'personal_study_logs_studied_on_category_unique');
        });
    }

    public function down(): void
    {
        Schema::table('personal_study_logs', function (Blueprint $table) {
            $table->dropUnique('personal_study_logs_studied_on_category_unique');
        });
    }
};
