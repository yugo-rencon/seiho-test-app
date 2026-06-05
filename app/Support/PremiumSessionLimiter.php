<?php

namespace App\Support;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class PremiumSessionLimiter
{
    private const DEVICE_COOKIE_NAME = 'premium_device_id';
    private const DEVICE_COOKIE_MINUTES = 60 * 24 * 365;
    private const MAX_ACTIVE_DEVICES = 2;
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
        $deviceHash = $this->deviceHash($request);
        if (!$deviceHash) {
            return;
        }

        $cacheKey = $this->cacheKey($user);
        $devices = $this->activeDevices((array) Cache::get($cacheKey, []));
        unset($devices[$deviceHash]);

        Cache::put($cacheKey, $devices, $this->cacheTtl());
    }

    private function checkAndTouch(Request $request): bool
    {
        /** @var User|null $user */
        $user = $request->user();
        if (!$user || !$user->hasAnyPremiumAccess()) {
            return true;
        }

        $deviceHash = $this->deviceHash($request) ?? $this->newDeviceHash($request);

        $cacheKey = $this->cacheKey($user);
        $devices = $this->activeDevices((array) Cache::get($cacheKey, []));
        $now = now()->timestamp;

        if (isset($devices[$deviceHash])) {
            $devices[$deviceHash]['last_seen_at'] = $now;
            $devices[$deviceHash]['ip'] = (string) $request->ip();
            $devices[$deviceHash]['user_agent'] = substr((string) $request->userAgent(), 0, 255);
            Cache::put($cacheKey, $devices, $this->cacheTtl());

            return true;
        }

        if (count($devices) >= self::MAX_ACTIVE_DEVICES) {
            return false;
        }

        $devices[$deviceHash] = [
            'last_seen_at' => $now,
            'ip' => (string) $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ];
        Cache::put($cacheKey, $devices, $this->cacheTtl());

        return true;
    }

    /**
     * @param array<string, mixed> $devices
     * @return array<string, array{last_seen_at: int, ip?: string, user_agent?: string}>
     */
    private function activeDevices(array $devices): array
    {
        $cutoff = Carbon::now()->subDays(self::ACTIVE_WINDOW_DAYS)->timestamp;
        $active = [];

        foreach ($devices as $deviceHash => $device) {
            if (!is_array($device)) {
                continue;
            }

            $lastSeenAt = (int) ($device['last_seen_at'] ?? 0);
            if ($lastSeenAt < $cutoff) {
                continue;
            }

            $active[(string) $deviceHash] = [
                'last_seen_at' => $lastSeenAt,
                'ip' => (string) ($device['ip'] ?? ''),
                'user_agent' => (string) ($device['user_agent'] ?? ''),
            ];
        }

        uasort($active, fn (array $a, array $b): int => $b['last_seen_at'] <=> $a['last_seen_at']);

        return $active;
    }

    private function cacheKey(User $user): string
    {
        return sprintf('premium_active_devices:%d', (int) $user->id);
    }

    private function deviceHash(Request $request): ?string
    {
        $deviceId = $request->cookie(self::DEVICE_COOKIE_NAME);
        if (!is_string($deviceId) || !$this->isValidDeviceId($deviceId)) {
            return null;
        }

        return hash('sha256', $deviceId);
    }

    private function newDeviceHash(Request $request): string
    {
        $deviceId = (string) Str::uuid();

        Cookie::queue(
            self::DEVICE_COOKIE_NAME,
            $deviceId,
            self::DEVICE_COOKIE_MINUTES,
            null,
            null,
            $request->isSecure(),
            true,
            false,
            'Lax',
        );

        return hash('sha256', $deviceId);
    }

    private function isValidDeviceId(string $deviceId): bool
    {
        return (bool) preg_match('/^[0-9a-fA-F-]{36}$/', $deviceId);
    }

    private function cacheTtl(): Carbon
    {
        return now()->addDays(self::ACTIVE_WINDOW_DAYS + 1);
    }
}
