<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('study_attempts')) {
            return;
        }

        DB::table('study_attempts')
            ->orderBy('user_id')
            ->orderBy('exam_key')
            ->orderByDesc('attempt_no')
            ->orderByDesc('id')
            ->get(['id', 'user_id', 'exam_key'])
            ->groupBy(fn ($attempt) => "{$attempt->user_id}:{$attempt->exam_key}")
            ->each(function ($attempts): void {
                $oldAttemptIds = $attempts->skip(1)->pluck('id');

                if ($oldAttemptIds->isNotEmpty()) {
                    DB::table('study_attempts')->whereIn('id', $oldAttemptIds)->delete();
                }
            });
    }

    public function down(): void
    {
        // 削除した過去の学習履歴は復元できないため、ロールバック処理はありません。
    }
};
