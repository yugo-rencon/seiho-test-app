<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_attempts', function (Blueprint $table) {
            $table->json('previous_incorrect_questions')->nullable()->after('max_score');
        });
    }

    public function down(): void
    {
        Schema::table('study_attempts', function (Blueprint $table) {
            $table->dropColumn('previous_incorrect_questions');
        });
    }
};
