<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('preferred_test_mode', 10)->default('browse');
            $table->timestamps();
        });

        Schema::create('study_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('exam_key', 80);
            $table->unsignedSmallInteger('attempt_no')->default(1);
            $table->string('status', 20)->default('in_progress');
            $table->unsignedSmallInteger('current_question_no')->default(1);
            $table->unsignedSmallInteger('answered_count')->default(0);
            $table->unsignedSmallInteger('score')->default(0);
            $table->unsignedSmallInteger('max_score')->default(100);
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'exam_key', 'attempt_no']);
            $table->index(['user_id', 'exam_key', 'status']);
        });

        Schema::create('study_attempt_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('study_attempt_id')->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger('question_no');
            $table->string('selected_answer', 100);
            $table->boolean('is_correct');
            $table->unsignedSmallInteger('points_awarded')->default(0);
            $table->timestamp('answered_at')->nullable();
            $table->timestamps();

            $table->unique(['study_attempt_id', 'question_no']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_attempt_answers');
        Schema::dropIfExists('study_attempts');
        Schema::dropIfExists('user_preferences');
    }
};
