<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Response;

class AdminDashboardCooldown
{
    private const COOLDOWN_HOURS = 6;

    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user || !(bool) $user->is_admin) {
            return $next($request);
        }

        // Restrict only dashboard page opens; keep POST actions unaffected.
        if (!$request->isMethod('GET')) {
            return $next($request);
        }

        if (!($request->is('admin') || $request->is('daigaku/admin'))) {
            return $next($request);
        }

        $cacheKey = sprintf('admin_dashboard_cooldown_until:%d', (int) $user->id);
        $cooldownUntil = Cache::get($cacheKey);

        if ($cooldownUntil) {
            $until = Carbon::createFromTimestamp((int) $cooldownUntil);
            if ($until->isFuture()) {
                return redirect()->route('tests.index')->with(
                    'status',
                    sprintf('管理画面は見過ぎ防止のため制限中です。次回は %s 以降に確認できます。', $until->format('Y-m-d H:i'))
                );
            }
        }

        $nextUntil = now()->addHours(self::COOLDOWN_HOURS);
        Cache::put($cacheKey, $nextUntil->timestamp, $nextUntil);

        return $next($request);
    }
}
