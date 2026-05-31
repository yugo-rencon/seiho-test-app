<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('page_views', function (Blueprint $table) {
            $table->string('full_path', 512)->nullable()->after('path');
            $table->index('full_path');
        });
    }

    public function down(): void
    {
        Schema::table('page_views', function (Blueprint $table) {
            $table->dropIndex(['full_path']);
            $table->dropColumn('full_path');
        });
    }
};
