<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->string('genre', 50)->nullable()->after('author')->index();
        });
    }

    public function down(): void
    {
        Schema::table('english_books', function (Blueprint $table) {
            $table->dropIndex(['genre']);
            $table->dropColumn('genre');
        });
    }
};
