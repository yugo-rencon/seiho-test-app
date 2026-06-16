<?php

namespace App\Support;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserActivityLogger
{
    public function logLogin(Request $request, User $user, string $method = 'password'): void
    {
        if (!$this->hasTable('login_histories')) {
            return;
        }

        try {
            DB::table('login_histories')->insert([
                'user_id' => $user->id,
                'email' => $user->email,
                'login_method' => $method,
                'session_id' => $request->hasSession() ? (string) $request->session()->getId() : null,
                'ip' => (string) $request->ip(),
                'user_agent' => mb_substr((string) $request->userAgent(), 0, 512),
                'logged_in_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Throwable) {
            // Logging must never block login.
        }
    }

    public function logPremiumAccess(
        Request $request,
        ?User $user,
        string $scope,
        bool $hasPremium,
        bool $hasAnyPremium,
        bool $premiumSessionAllowed,
    ): void {
        if (!$user || $user->is_admin || !$this->hasTable('premium_access_logs')) {
            return;
        }

        if (!$request->isMethod('GET') || $request->ajax() || $request->expectsJson()) {
            return;
        }

        if ($request->is('admin*') || $request->is('daigaku/admin*')) {
            return;
        }

        try {
            DB::table('premium_access_logs')->insert([
                'user_id' => $user->id,
                'session_id' => $request->hasSession() ? (string) $request->session()->getId() : null,
                'path' => mb_substr('/'.ltrim($request->path(), '/'), 0, 512),
                'scope' => $scope,
                'has_premium' => $hasPremium,
                'has_any_premium' => $hasAnyPremium,
                'premium_session_allowed' => $premiumSessionAllowed,
                'blocked_reason' => $premiumSessionAllowed ? null : 'premium_session_limit',
                'ip' => (string) $request->ip(),
                'user_agent' => mb_substr((string) $request->userAgent(), 0, 512),
                'checked_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Throwable) {
            // Logging must never block page delivery.
        }
    }

    private function hasTable(string $table): bool
    {
        static $cache = [];

        if (array_key_exists($table, $cache)) {
            return $cache[$table];
        }

        try {
            return $cache[$table] = Schema::hasTable($table);
        } catch (\Throwable) {
            return $cache[$table] = false;
        }
    }
}
