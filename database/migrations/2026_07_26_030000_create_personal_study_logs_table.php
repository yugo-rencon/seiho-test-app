<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personal_study_logs', function (Blueprint $table) {
            $table->id();
            $table->date('studied_on');
            $table->string('category', 100);
            $table->unsignedSmallInteger('set_count')->default(0);
            $table->unsignedSmallInteger('minutes')->default(0);
            $table->decimal('hours', 6, 2)->default(0);
            $table->string('set_label', 50)->nullable();
            $table->string('source_file', 255)->nullable();
            $table->unsignedInteger('source_row_number')->nullable();
            $table->json('raw_payload')->nullable();
            $table->timestamps();

            $table->index(['studied_on', 'category']);
            $table->unique(['source_file', 'source_row_number'], 'personal_study_logs_source_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personal_study_logs');
    }
};
