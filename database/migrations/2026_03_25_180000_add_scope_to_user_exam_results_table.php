<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $tableName = 'user_exam_results';

        if (!Schema::hasColumn($tableName, 'scope')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->string('scope', 20)->default('seiho')->after('user_id');
            });
        }

        DB::table($tableName)->whereNull('scope')->update(['scope' => 'seiho']);

        // FK(user_id) が既存ユニーク索引に依存している環境があるため先に単独索引を用意する
        if (!$this->indexExists($tableName, 'user_exam_results_user_id_index')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->index('user_id', 'user_exam_results_user_id_index');
            });
        }

        if ($this->indexExists($tableName, 'user_exam_results_user_id_subject_key_unique')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropUnique('user_exam_results_user_id_subject_key_unique');
            });
        }

        if (!$this->indexExists($tableName, 'user_exam_results_user_id_scope_subject_key_unique')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->unique(['user_id', 'scope', 'subject_key']);
            });
        }

        if (!$this->indexExists($tableName, 'user_exam_results_scope_subject_key_index')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->index(['scope', 'subject_key']);
            });
        }
    }

    public function down(): void
    {
        $tableName = 'user_exam_results';

        if ($this->indexExists($tableName, 'user_exam_results_scope_subject_key_index')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropIndex('user_exam_results_scope_subject_key_index');
            });
        }

        if ($this->indexExists($tableName, 'user_exam_results_user_id_scope_subject_key_unique')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropUnique('user_exam_results_user_id_scope_subject_key_unique');
            });
        }

        if (!$this->indexExists($tableName, 'user_exam_results_user_id_subject_key_unique')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->unique(['user_id', 'subject_key']);
            });
        }

        if (Schema::hasColumn($tableName, 'scope')) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropColumn('scope');
            });
        }
    }

    private function indexExists(string $tableName, string $indexName): bool
    {
        $database = DB::getDatabaseName();

        return DB::table('information_schema.statistics')
            ->where('table_schema', $database)
            ->where('table_name', $tableName)
            ->where('index_name', $indexName)
            ->exists();
    }
};
