<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personal_exercise_logs', function (Blueprint $table) {
            $table->id();
            $table->date('exercised_on');
            $table->string('activity', 100);
            $table->boolean('completed')->default(true);
            $table->text('memo')->nullable();
            $table->timestamps();

            $table->unique(['exercised_on', 'activity'], 'personal_exercise_logs_day_activity_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personal_exercise_logs');
    }
};
