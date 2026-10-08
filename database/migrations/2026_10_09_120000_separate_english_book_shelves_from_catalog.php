<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('english_book_shelves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('english_book_id')->constrained('english_books')->cascadeOnDelete();
            $table->string('status', 20)->default('want');
            $table->unsignedInteger('reading_order')->nullable();
            $table->date('started_on')->nullable();
            $table->date('finished_on')->nullable();
            $table->decimal('difficulty', 2, 1)->unsigned()->nullable();
            $table->unsignedTinyInteger('interest_rating')->nullable();
            $table->unsignedTinyInteger('recommendation_rating')->nullable();
            $table->text('book_overview')->nullable();
            $table->text('english_difficulty_note')->nullable();
            $table->text('memo')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'english_book_id']);
            $table->index(['user_id', 'status']);
        });

        $ownerId = DB::table('users')->where('is_admin', true)->orderBy('id')->value('id');

        if ($ownerId) {
            DB::table('english_books')->orderBy('id')->each(function (object $book) use ($ownerId): void {
                DB::table('english_book_shelves')->insert([
                    'user_id' => $ownerId,
                    'english_book_id' => $book->id,
                    'status' => $book->status,
                    'reading_order' => $book->reading_order,
                    'started_on' => $book->started_on,
                    'finished_on' => $book->finished_on,
                    'difficulty' => $book->difficulty,
                    'interest_rating' => $book->interest_rating,
                    'recommendation_rating' => $book->recommendation_rating,
                    'book_overview' => $book->book_overview,
                    'english_difficulty_note' => $book->english_difficulty_note,
                    'memo' => $book->memo,
                    'created_at' => $book->created_at,
                    'updated_at' => $book->updated_at,
                ]);
            });
        }

        Schema::table('english_books', function (Blueprint $table) {
            $table->dropIndex(['status', 'finished_on']);
            $table->dropColumn(['status', 'reading_order', 'started_on', 'finished_on', 'difficulty', 'interest_rating', 'recommendation_rating', 'book_overview', 'english_difficulty_note', 'memo']);
        });
    }

    public function down(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->string('status', 20)->default('want');
            $table->unsignedInteger('reading_order')->nullable();
            $table->date('started_on')->nullable();
            $table->date('finished_on')->nullable();
            $table->decimal('difficulty', 2, 1)->unsigned()->nullable();
            $table->unsignedTinyInteger('interest_rating')->nullable();
            $table->unsignedTinyInteger('recommendation_rating')->nullable();
            $table->text('book_overview')->nullable();
            $table->text('english_difficulty_note')->nullable();
            $table->text('memo')->nullable();
            $table->index(['status', 'finished_on']);
        });

        $ownerId = DB::table('users')->where('is_admin', true)->orderBy('id')->value('id');
        if ($ownerId) {
            DB::table('english_book_shelves')->where('user_id', $ownerId)->orderBy('id')->each(function (object $shelf): void {
                DB::table('english_books')->where('id', $shelf->english_book_id)->update((array) collect($shelf)->only(['status', 'reading_order', 'started_on', 'finished_on', 'difficulty', 'interest_rating', 'recommendation_rating', 'book_overview', 'english_difficulty_note', 'memo'])->all());
            });
        }

        Schema::dropIfExists('english_book_shelves');
    }
};
