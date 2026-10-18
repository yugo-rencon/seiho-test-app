<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('study_attempts')
            ->whereNotExists(function ($query) {
                $query->selectRaw('1')
                    ->from('study_attempt_answers')
                    ->whereColumn('study_attempt_answers.study_attempt_id', 'study_attempts.id');
            })
            ->delete();
    }

    public function down(): void
    {
        // 回答のない仮記録のみを削除するため、復元対象はありません。
    }
};
