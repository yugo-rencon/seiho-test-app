<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_premium')->default(false)->after('is_admin');
        });

        DB::statement("
            UPDATE users
            SET is_premium = 1
            WHERE EXISTS (
                SELECT 1
                FROM purchases
                WHERE purchases.user_id = users.id
                  AND purchases.status = 'paid'
            )
        ");
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_premium');
        });
    }
};

