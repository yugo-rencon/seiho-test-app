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
            $table->boolean('is_seiho_premium')->default(false)->after('is_premium');
            $table->boolean('is_daigaku_premium')->default(false)->after('is_seiho_premium');
        });

        DB::table('users')
            ->where('is_premium', 1)
            ->update([
                'is_seiho_premium' => 1,
                'updated_at' => now(),
            ]);

        Schema::table('products', function (Blueprint $table) {
            $table->string('scope', 20)->default('seiho')->after('stripe_price_id');
            $table->index(['scope', 'stripe_price_id']);
        });

        DB::table('products')->update([
            'scope' => 'seiho',
            'updated_at' => now(),
        ]);

        Schema::table('purchases', function (Blueprint $table) {
            $table->string('scope', 20)->default('seiho')->after('status');
            $table->index(['user_id', 'scope', 'status']);
        });

        DB::table('purchases')->update([
            'scope' => 'seiho',
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropIndex(['user_id', 'scope', 'status']);
            $table->dropColumn('scope');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropIndex(['scope', 'stripe_price_id']);
            $table->dropColumn('scope');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['is_seiho_premium', 'is_daigaku_premium']);
        });
    }
};
