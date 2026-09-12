<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->boolean('is_japanese_author')->default(false)->after('author');
        });
    }

    public function down(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->dropColumn('is_japanese_author');
        });
    }
};
