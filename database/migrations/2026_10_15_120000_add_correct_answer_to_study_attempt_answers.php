<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_attempt_answers', function (Blueprint $table) {
            $table->string('correct_answer', 100)->nullable()->after('selected_answer');
        });
    }

    public function down(): void
    {
        Schema::table('study_attempt_answers', function (Blueprint $table) {
            $table->dropColumn('correct_answer');
        });
    }
};
