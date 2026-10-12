<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('english_books')->whereNotNull('words_per_page')->whereNotNull('page_count')->update([
            'words_per_page' => DB::raw('ROUND(words_per_page)'),
            'word_count' => DB::raw('page_count * ROUND(words_per_page)'),
        ]);
        DB::statement('ALTER TABLE english_books MODIFY words_per_page INT UNSIGNED NULL');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE english_books MODIFY words_per_page DECIMAL(8, 2) UNSIGNED NULL');
    }
};
