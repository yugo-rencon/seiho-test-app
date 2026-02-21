<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->text('admin_note')->nullable()->after('status');
            $table->timestamp('handled_at')->nullable()->after('admin_note');
            $table->foreignId('handled_by')->nullable()->after('handled_at')->constrained('users')->nullOnDelete();

            $table->index('handled_by');
            $table->index('handled_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropIndex(['handled_by']);
            $table->dropIndex(['handled_at']);
            $table->dropConstrainedForeignId('handled_by');
            $table->dropColumn(['admin_note', 'handled_at']);
        });
    }
};

