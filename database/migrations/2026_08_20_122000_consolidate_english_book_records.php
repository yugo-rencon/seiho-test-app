<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('ALTER TABLE english_books MODIFY difficulty DECIMAL(2, 1) UNSIGNED NULL');

        Schema::table('english_books', function (Blueprint $table) {
            $table->string('status', 20)->default('want')->after('page_count');
            $table->date('started_on')->nullable()->after('status');
            $table->date('finished_on')->nullable()->after('started_on');
            $table->unsignedTinyInteger('interest_rating')->nullable()->after('difficulty');
            $table->unsignedTinyInteger('recommendation_rating')->nullable()->after('interest_rating');
            $table->text('book_overview')->nullable()->after('page_count');
            $table->text('english_difficulty_note')->nullable()->after('book_overview');
            $table->text('memo')->nullable()->after('english_difficulty_note');
            $table->index(['status', 'finished_on']);
        });

        DB::table('english_book_shelves')->orderBy('id')->each(function (object $shelf): void {
            DB::table('english_books')->where('id', $shelf->english_book_id)->update([
                'status' => $shelf->status,
                'started_on' => $shelf->started_on,
                'finished_on' => $shelf->finished_on,
                'interest_rating' => $shelf->rating,
                'memo' => $shelf->memo,
            ]);
        });

        Schema::dropIfExists('english_book_shelves');
    }

    public function down(): void
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

        Schema::table('english_books', function (Blueprint $table) {
            $table->dropIndex(['status', 'finished_on']);
            $table->dropColumn(['status', 'started_on', 'finished_on', 'interest_rating', 'recommendation_rating', 'book_overview', 'english_difficulty_note', 'memo']);
        });

        DB::statement('ALTER TABLE english_books MODIFY difficulty TINYINT UNSIGNED NULL');
    }
};
