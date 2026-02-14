<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class GoogleAuthController extends Controller
{
    public function redirect(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(): RedirectResponse
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (Throwable) {
            return redirect()->route('login')->with('status', 'Googleログインに失敗しました。もう一度お試しください。');
        }

        $email = $googleUser->getEmail();
        if (! $email) {
            return redirect()->route('login')->with('status', 'Googleアカウントのメールアドレスを取得できませんでした。');
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
            ]);
        }

        Auth::login($user, true);
        request()->session()->regenerate();

        return redirect()
            ->intended(RouteServiceProvider::HOME)
            ->with('status', 'ログインしました。');
    }
}
