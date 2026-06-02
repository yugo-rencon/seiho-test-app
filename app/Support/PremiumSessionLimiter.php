<?php

namespace App\Support;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class PremiumSessionLimiter
{
    private const MAX_ACTIVE_SESSIONS = 2;
    private const ACTIVE_WINDOW_DAYS = 7;

    public function allows(Request $request): bool
    {
        if ($request->attributes->has('premium_session_allowed')) {
            return (bool) $request->attributes->get('premium_session_allowed');
        }

        $allowed = $this->checkAndTouch($request);
        $request->attributes->set('premium_session_allowed', $allowed);

        return $allowed;
    }

    public function forget(Request $request, User $user): void
    {
        $sessionHash = $this->sessionHash($request);
        if (!$sessionHash) {
            return;
        }

        $cacheKey = $this->cacheKey($user);
        $sessions = $this->activeSessions((array) Cache::get($cacheKey, []));
        unset($sessions[$sessionHash]);

        Cache::put($cacheKey, $sessions, $this->cacheTtl());
    }

    private function checkAndTouch(Request $request): bool
    {
        /** @var User|null $user */
        $user = $request->user();
        if (!$user || !$user->hasAnyPremiumAccess()) {
            return true;
        }

        $sessionHash = $this->sessionHash($request);
        if (!$sessionHash) {
            return false;
        }

        $cacheKey = $this->cacheKey($user);
        $sessions = $this->activeSessions((array) Cache::get($cacheKey, []));
        $now = now()->timestamp;

        if (isset($sessions[$sessionHash])) {
            $sessions[$sessionHash]['last_seen_at'] = $now;
            $sessions[$sessionHash]['ip'] = (string) $request->ip();
            $sessions[$sessionHash]['user_agent'] = substr((string) $request->userAgent(), 0, 255);
            Cache::put($cacheKey, $sessions, $this->cacheTtl());

            return true;
        }

        if (count($sessions) >= self::MAX_ACTIVE_SESSIONS) {
            return false;
        }

        $sessions[$sessionHash] = [
            'last_seen_at' => $now,
            'ip' => (string) $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ];
        Cache::put($cacheKey, $sessions, $this->cacheTtl());

        return true;
    }

    /**
     * @param array<string, mixed> $sessions
     * @return array<string, array{last_seen_at: int, ip?: string, user_agent?: string}>
     */
    private function activeSessions(array $sessions): array
    {
        $cutoff = Carbon::now()->subDays(self::ACTIVE_WINDOW_DAYS)->timestamp;
        $active = [];

        foreach ($sessions as $sessionHash => $session) {
            if (!is_array($session)) {
                continue;
            }

            $lastSeenAt = (int) ($session['last_seen_at'] ?? 0);
            if ($lastSeenAt < $cutoff) {
                continue;
            }

            $active[(string) $sessionHash] = [
                'last_seen_at' => $lastSeenAt,
                'ip' => (string) ($session['ip'] ?? ''),
                'user_agent' => (string) ($session['user_agent'] ?? ''),
            ];
        }

        uasort($active, fn (array $a, array $b): int => $b['last_seen_at'] <=> $a['last_seen_at']);

        return $active;
    }

    private function cacheKey(User $user): string
    {
        return sprintf('premium_active_sessions:%d', (int) $user->id);
    }

    private function sessionHash(Request $request): ?string
    {
        if (!$request->hasSession()) {
            return null;
        }

        return hash('sha256', (string) $request->session()->getId());
    }

    private function cacheTtl(): Carbon
    {
        return now()->addDays(self::ACTIVE_WINDOW_DAYS + 1);
    }
}
