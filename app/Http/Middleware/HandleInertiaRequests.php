<?php

namespace App\Http\Middleware;

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
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
                'hasPremium' => fn () => $request->user()?->hasPremiumAccess() ?? false,
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
            'features' => [
                'premiumPurchaseEnabled' => fn() => (bool) config('services.stripe.purchase_enabled'),
            ],
        ]);
    }
}
