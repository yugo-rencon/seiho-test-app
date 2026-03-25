<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $returnTo = $this->sanitizeReturnTo($request->input('return_to'));
        if ($returnTo) {
            return redirect($returnTo)->with('status', 'ログインしました。');
        }

        return redirect()
            ->intended(RouteServiceProvider::HOME)
            ->with('status', 'ログインしました。');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $redirectRoute = $this->resolveLogoutRedirectRoute($request);

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route($redirectRoute)->with('status', 'ログアウトしました。');
    }

    private function sanitizeReturnTo(?string $returnTo): ?string
    {
        if (!$returnTo) {
            return null;
        }

        if (!str_starts_with($returnTo, '/')) {
            return null;
        }

        if (str_starts_with($returnTo, '//')) {
            return null;
        }

        return $returnTo;
    }

    private function resolveLogoutRedirectRoute(Request $request): string
    {
        $returnTo = $this->sanitizeReturnTo($request->input('return_to'));
        if ($returnTo && Str::startsWith($returnTo, '/daigaku')) {
            return 'daigaku.index';
        }

        $refererPath = (string) parse_url((string) $request->headers->get('referer'), PHP_URL_PATH);
        if (Str::startsWith($refererPath, '/daigaku')) {
            return 'daigaku.index';
        }

        return 'tests.index';
    }
}
