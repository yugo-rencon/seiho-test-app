<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('english_vocabulary_entries');
    }

    public function down(): void
    {
        Schema::create('english_vocabulary_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('english_book_id')->nullable()->constrained()->nullOnDelete();
            $table->string('word');
            $table->string('meaning', 500);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }
};
