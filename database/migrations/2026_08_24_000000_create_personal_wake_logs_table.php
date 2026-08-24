<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personal_wake_logs', function (Blueprint $table) {
            $table->id();
            $table->date('woke_on')->unique();
            $table->time('woke_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personal_wake_logs');
    }
};
