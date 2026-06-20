<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adsense_revenues', function (Blueprint $table) {
            $table->id();
            $table->date('revenue_date')->unique();
            $table->unsignedInteger('amount_yen');
            $table->string('memo', 255)->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->index();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adsense_revenues');
    }
};
