<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('UPDATE users SET pass_score = 60');
        DB::statement('ALTER TABLE users MODIFY pass_score TINYINT UNSIGNED NOT NULL DEFAULT 60');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE users MODIFY pass_score TINYINT UNSIGNED NULL DEFAULT NULL');
    }
};
