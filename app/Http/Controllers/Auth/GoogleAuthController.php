<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class GoogleAuthController extends Controller
{
    public function redirect(Request $request): RedirectResponse
    {
        $returnTo = $this->sanitizeReturnTo($request->query('return_to'));
        $scope = $this->resolveRegistrationScope($request->query('scope'), $returnTo);
        $request->session()->put('auth_scope', $scope);
        $request->session()->put('auth_return_to', $returnTo);

        return Socialite::driver('google')->redirect();
    }

    public function callback(): RedirectResponse
    {
        $scope = $this->sanitizeScope(session('auth_scope'));
        $returnTo = $this->sanitizeReturnTo(session('auth_return_to'));

        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (Throwable) {
            return redirect()->route('login', $this->buildLoginQuery($scope, $returnTo))
                ->with('status', 'Googleログインに失敗しました。もう一度お試しください。');
        }

        $email = $googleUser->getEmail();
        if (! $email) {
            return redirect()->route('login', $this->buildLoginQuery($scope, $returnTo))
                ->with('status', 'Googleアカウントのメールアドレスを取得できませんでした。');
        }

        $user = User::where('google_id', $googleUser->getId())->first();

        if (! $user) {
            $user = User::where('email', $email)->first();
        }

        if ($user) {
            $needsUpdate = false;

            if (! $user->google_id) {
                $user->google_id = $googleUser->getId();
                $needsUpdate = true;
            }

            if (! $user->email_verified_at) {
                $user->email_verified_at = now();
                $needsUpdate = true;
            }

            if ($needsUpdate) {
                $user->save();
            }
        } else {
            $user = User::create([
                'email' => $email,
                'password' => Hash::make(Str::random(40)),
                'google_id' => $googleUser->getId(),
                'email_verified_at' => now(),
                'registered_scope' => $scope,
                'registered_return_to' => $returnTo,
            ]);
        }

        Auth::login($user, true);
        request()->session()->regenerate();

        if ($returnTo) {
            return redirect($returnTo)->with('status', 'ログインしました。');
        }

        return redirect()
            ->intended(RouteServiceProvider::HOME)
            ->with('status', 'ログインしました。');
    }

    private function sanitizeScope(?string $scope): string
    {
        return in_array($scope, ['seiho', 'daigaku'], true) ? $scope : 'seiho';
    }

    private function resolveRegistrationScope(?string $scope, ?string $returnTo): string
    {
        if ($scope === 'daigaku' || ($returnTo && str_starts_with($returnTo, '/daigaku'))) {
            return 'daigaku';
        }

        return 'seiho';
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

    private function buildLoginQuery(string $scope, ?string $returnTo): array
    {
        $query = ['scope' => $scope];
        if ($returnTo) {
            $query['return_to'] = $returnTo;
        }

        return $query;
    }
}
