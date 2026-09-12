<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->unsignedInteger('reading_order')->nullable()->after('status');
        });
    }

    public function down(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->dropColumn('reading_order');
        });
    }
};
