<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personal_study_logs', function (Blueprint $table) {
            $table->string('subcategory', 100)->default('')->after('category');
        });

        Schema::table('personal_study_logs', function (Blueprint $table) {
            $table->dropUnique('personal_study_logs_studied_on_category_unique');
            $table->unique(['studied_on', 'category', 'subcategory'], 'personal_study_logs_day_category_subcategory_unique');
        });
    }

    public function down(): void
    {
        Schema::table('personal_study_logs', function (Blueprint $table) {
            $table->dropUnique('personal_study_logs_day_category_subcategory_unique');
            $table->unique(['studied_on', 'category'], 'personal_study_logs_studied_on_category_unique');
            $table->dropColumn('subcategory');
        });
    }
};
