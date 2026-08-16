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
            $table->date('started_on')->nullable();
            $table->date('finished_on')->nullable();
            $table->unsignedTinyInteger('rating')->nullable();
            $table->text('memo')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'english_book_id']);
            $table->index(['user_id', 'status']);
        });

        $ownerId = DB::table('users')->where('is_admin', true)->orderBy('id')->value('id');

        if ($ownerId) {
            DB::table('english_books')->orderBy('id')->each(function (object $book) use ($ownerId) {
                DB::table('english_book_shelves')->insert([
                    'user_id' => $ownerId,
                    'english_book_id' => $book->id,
                    'status' => $book->status,
                    'started_on' => $book->started_on,
                    'finished_on' => $book->finished_on,
                    'rating' => $book->rating,
                    'memo' => $book->memo,
                    'created_at' => $book->created_at,
                    'updated_at' => $book->updated_at,
                ]);
            });
        }

        Schema::table('english_books', function (Blueprint $table) {
            $table->dropIndex(['status', 'finished_on']);
            $table->dropColumn(['status', 'started_on', 'finished_on', 'rating', 'memo']);
        });
    }

    public function down(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->string('status', 20)->default('want');
            $table->date('started_on')->nullable();
            $table->date('finished_on')->nullable();
            $table->unsignedTinyInteger('rating')->nullable();
            $table->text('memo')->nullable();
            $table->index(['status', 'finished_on']);
        });

        Schema::dropIfExists('english_book_shelves');
    }
};
