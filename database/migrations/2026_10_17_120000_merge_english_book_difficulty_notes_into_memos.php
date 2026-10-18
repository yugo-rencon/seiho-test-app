<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('english_book_shelves')
            ->whereNotNull('english_difficulty_note')
            ->whereRaw("TRIM(english_difficulty_note) <> ''")
            ->update([
                'memo' => DB::raw("CASE WHEN memo IS NULL OR TRIM(memo) = '' THEN CONCAT('英語の難しさ', CHAR(10), english_difficulty_note) ELSE CONCAT('英語の難しさ', CHAR(10), english_difficulty_note, CHAR(10), CHAR(10), '感想', CHAR(10), memo) END"),
                'english_difficulty_note' => null,
            ]);
    }

    public function down(): void
    {
        // 統合後の文章は元の二つの欄へ正確に分割できないため、そのまま保持します。
    }
};
