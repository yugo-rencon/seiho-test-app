<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('english_books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('cover_url', 2048)->nullable();
            $table->string('status', 20)->default('want');
            $table->unsignedTinyInteger('difficulty')->nullable();
            $table->unsignedInteger('word_count')->nullable();
            $table->unsignedSmallInteger('page_count')->nullable();
            $table->date('started_on')->nullable();
            $table->date('finished_on')->nullable();
            $table->unsignedTinyInteger('rating')->nullable();
            $table->text('memo')->nullable();
            $table->timestamps();

            $table->index(['status', 'finished_on']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('english_books');
    }
};
