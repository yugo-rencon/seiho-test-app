<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('personal_study_logs')
            ->where('category', '学び')
            ->where('subcategory', 'DS検定')
            ->where('source_file', '!=', 'manual')
            ->update(['subcategory' => '']);
    }

    public function down(): void
    {
        //
    }
};
