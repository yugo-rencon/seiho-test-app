<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_attempts', function (Blueprint $table) {
            $table->json('previous_correct_questions')->nullable()->after('previous_incorrect_questions');
        });
    }

    public function down(): void
    {
        Schema::table('study_attempts', function (Blueprint $table) {
            $table->dropColumn('previous_correct_questions');
        });
    }
};
