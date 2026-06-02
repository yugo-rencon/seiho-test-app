<?php

namespace App\Http\Middleware;

use App\Support\PremiumSessionLimiter;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        if (app()->environment('local')) {
            return null;
        }

        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $premiumSessionLimiter = app(PremiumSessionLimiter::class);
        $scope = match (true) {
            str_starts_with((string) $request->path(), 'daigaku') => 'daigaku',
            str_starts_with((string) $request->path(), 'ippan') => 'ippan',
            str_starts_with((string) $request->path(), 'senmon') => 'senmon',
            str_starts_with((string) $request->path(), 'ouyou') => 'ouyou',
            default => 'seiho',
        };
        $hasPremiumAccess = fn (string $targetScope): bool => (
            $request->user()?->hasPremiumAccess($targetScope) ?? false
        ) && $premiumSessionLimiter->allows($request);

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
                'hasPremium' => fn () => $hasPremiumAccess($scope),
                'hasPremiumSeiho' => fn () => $hasPremiumAccess('seiho'),
                'hasPremiumDaigaku' => fn () => $hasPremiumAccess('daigaku'),
                'hasPremiumIppan' => fn () => $hasPremiumAccess('ippan'),
                'hasPremiumSenmon' => fn () => $hasPremiumAccess('senmon'),
                'hasPremiumOuyou' => fn () => $hasPremiumAccess('ouyou'),
                'hasPremiumBasic' => fn () => $hasPremiumAccess('basic'),
                'premiumSessionLimitExceeded' => fn () => (
                    $request->user()?->hasAnyPremiumAccess() ?? false
                ) && !$premiumSessionLimiter->allows($request),
                'isAdmin' => fn () => $request->user()?->is_admin ?? false,
            ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
            'flash' => [
                'message' => fn() => $request->session()->get('message'),
                'status' => fn() => $request->session()->get('status'),
            ],
        ]);
    }
}
