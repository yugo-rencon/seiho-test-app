<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('premium_access_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('session_id')->nullable()->index();
            $table->string('path', 512);
            $table->string('scope', 32)->index();
            $table->boolean('has_premium')->default(false);
            $table->boolean('has_any_premium')->default(false);
            $table->boolean('premium_session_allowed')->default(true);
            $table->string('blocked_reason')->nullable();
            $table->string('ip', 45)->nullable();
            $table->string('user_agent', 512)->nullable();
            $table->timestamp('checked_at')->index();
            $table->timestamps();

            $table->index(['user_id', 'checked_at']);
            $table->index(['scope', 'has_premium']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('premium_access_logs');
    }
};
