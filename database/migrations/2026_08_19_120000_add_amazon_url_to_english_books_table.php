<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->string('amazon_url', 2048)->nullable()->after('cover_url');
        });
    }

    public function down(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->dropColumn('amazon_url');
        });
    }
};
