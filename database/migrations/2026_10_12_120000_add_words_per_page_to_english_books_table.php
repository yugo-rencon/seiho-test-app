<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->unsignedDecimal('words_per_page', 8, 2)->nullable()->after('page_count');
        });

        DB::table('english_books')
            ->whereNotNull('word_count')
            ->whereNotNull('page_count')
            ->where('page_count', '>', 0)
            ->update([
                'words_per_page' => DB::raw('ROUND(word_count / page_count, 2)'),
                'word_count_estimated' => false,
            ]);
    }

    public function down(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->dropColumn('words_per_page');
        });
    }
};
