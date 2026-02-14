<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // default 60 を外し、未入力(NULL)を許可
        DB::statement('ALTER TABLE users MODIFY pass_score TINYINT UNSIGNED NULL DEFAULT NULL');
    }

    public function down(): void
    {
        DB::statement('UPDATE users SET pass_score = 60 WHERE pass_score IS NULL');
        DB::statement('ALTER TABLE users MODIFY pass_score TINYINT UNSIGNED NOT NULL DEFAULT 60');
    }
};
