<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'string', 'max:255', 'confirmed', Rules\Password::defaults()],
        ]);

        $returnTo = $this->sanitizeReturnTo($request->input('return_to'));

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'registered_scope' => $this->resolveRegistrationScope($request->input('scope'), $returnTo),
            'registered_return_to' => $returnTo,
        ]);

        event(new Registered($user));

        Auth::login($user);

        if ($returnTo) {
            return redirect($returnTo)
                ->with('status', 'アカウントを作成してログインしました。');
        }

        return redirect(RouteServiceProvider::HOME)
            ->with('status', 'アカウントを作成してログインしました。');
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

    private function resolveRegistrationScope(?string $scope, ?string $returnTo): string
    {
        if ($scope === 'daigaku' || ($returnTo && str_starts_with($returnTo, '/daigaku'))) {
            return 'daigaku';
        }

        return 'seiho';
    }
}
