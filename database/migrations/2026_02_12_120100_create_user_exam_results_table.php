<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_exam_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('subject_key', 20);
            $table->unsignedTinyInteger('score');
            $table->timestamps();

            $table->unique(['user_id', 'subject_key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_exam_results');
    }
};
