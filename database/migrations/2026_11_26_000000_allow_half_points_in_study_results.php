<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_attempts', function (Blueprint $table) {
            $table->decimal('score', 6, 1)->unsigned()->default(0)->change();
        });
        Schema::table('study_attempt_answers', function (Blueprint $table) {
            $table->decimal('points_awarded', 5, 1)->unsigned()->default(0)->change();
        });
    }

    public function down(): void
    {
        Schema::table('study_attempt_answers', function (Blueprint $table) {
            $table->unsignedSmallInteger('points_awarded')->default(0)->change();
        });
        Schema::table('study_attempts', function (Blueprint $table) {
            $table->unsignedSmallInteger('score')->default(0)->change();
        });
    }
};
