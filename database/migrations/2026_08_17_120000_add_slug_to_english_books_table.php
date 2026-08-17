<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('english_books', 'slug')) {
            Schema::table('english_books', function (Blueprint $table) {
                $table->string('slug')->nullable()->unique()->after('title');
            });
        }

        DB::table('english_books')->orderBy('id')->each(function (object $book) {
            $slug = Str::slug($book->title) ?: "book-{$book->id}";
            $candidate = $slug;
            $suffix = 2;
            while (DB::table('english_books')->where('slug', $candidate)->where('id', '!=', $book->id)->exists()) {
                $candidate = "{$slug}-{$suffix}";
                $suffix += 1;
            }
            DB::table('english_books')->where('id', $book->id)->update(['slug' => $candidate]);
        });

    }

    public function down(): void
    {
        if (Schema::hasColumn('english_books', 'slug')) {
            Schema::table('english_books', function (Blueprint $table) {
                $table->dropUnique(['slug']);
                $table->dropColumn('slug');
            });
        }
    }
};
