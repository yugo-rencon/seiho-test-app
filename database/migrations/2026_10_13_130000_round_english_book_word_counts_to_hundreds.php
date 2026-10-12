<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('english_books')
            ->whereNotNull('page_count')
            ->whereNotNull('words_per_page')
            ->update(['word_count' => DB::raw('ROUND(page_count * words_per_page * 0.95, -2)')]);
    }

    public function down(): void
    {
        DB::table('english_books')
            ->whereNotNull('page_count')
            ->whereNotNull('words_per_page')
            ->update(['word_count' => DB::raw('ROUND(page_count * words_per_page * 0.95)')]);
    }
};
