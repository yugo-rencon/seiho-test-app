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
     * 独自ドメインは許容し、主要メールサービスの明らかな綴り誤りだけを検知する。
     */
    private const MAJOR_EMAIL_DOMAINS = [
        'gmail.com',
        'icloud.com',
        'yahoo.co.jp',
        'yahoo.com',
        'yahoo.ne.jp',
        'ymail.ne.jp',
        'ybb.ne.jp',
        'docomo.ne.jp',
        'ezweb.ne.jp',
        'i.softbank.jp',
        'softbank.ne.jp',
        'au.com',
        'outlook.jp',
        'outlook.com',
        'hotmail.com',
        'hotmail.co.jp',
        'ymobile.ne.jp',
        'mineo.jp',
    ];

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
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:'.User::class,
                function ($attribute, $value, $fail) {
                    $suggestion = $this->suggestedEmailDomain($value);

                    if ($suggestion) {
                        $fail("メールアドレスのドメインを確認してください。「@{$suggestion}」の入力誤りではありませんか？");
                    }
                },
            ],
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

    private function suggestedEmailDomain(mixed $email): ?string
    {
        if (! is_string($email) || ! str_contains($email, '@')) {
            return null;
        }

        $domain = strtolower(substr(strrchr($email, '@'), 1));

        if (in_array($domain, self::MAJOR_EMAIL_DOMAINS, true)) {
            return null;
        }

        foreach (self::MAJOR_EMAIL_DOMAINS as $knownDomain) {
            if ($this->isLikelyDomainTypo($domain, $knownDomain)) {
                return $knownDomain;
            }
        }

        return null;
    }

    private function isLikelyDomainTypo(string $domain, string $knownDomain): bool
    {
        if ($this->isLikelyDomainPartTypo($domain, $knownDomain)) {
            return true;
        }

        $domainDotPosition = strrpos($domain, '.');
        $knownDomainDotPosition = strrpos($knownDomain, '.');

        if ($domainDotPosition === false || $knownDomainDotPosition === false) {
            return false;
        }

        $domainName = substr($domain, 0, $domainDotPosition);
        $domainSuffix = substr($domain, $domainDotPosition + 1);
        $knownDomainName = substr($knownDomain, 0, $knownDomainDotPosition);
        $knownDomainSuffix = substr($knownDomain, $knownDomainDotPosition + 1);

        return $this->isLikelyDomainPartTypo($domainName, $knownDomainName)
            && $this->isLikelyDomainPartTypo($domainSuffix, $knownDomainSuffix);
    }

    private function isLikelyDomainPartTypo(string $value, string $knownValue): bool
    {
        if (levenshtein($value, $knownValue) <= 1) {
            return true;
        }

        if (strlen($value) !== strlen($knownValue)) {
            return false;
        }

        for ($index = 0; $index < strlen($value) - 1; $index++) {
            if (
                $value[$index] !== $knownValue[$index]
                && $value[$index] === $knownValue[$index + 1]
                && $value[$index + 1] === $knownValue[$index]
                && substr($value, 0, $index) === substr($knownValue, 0, $index)
                && substr($value, $index + 2) === substr($knownValue, $index + 2)
            ) {
                return true;
            }
        }

        return false;
    }

    private function resolveRegistrationScope(?string $scope, ?string $returnTo): string
    {
        $allowedScopes = ['seiho', 'daigaku', 'ippan', 'senmon', 'ouyou'];
        if (in_array($scope, $allowedScopes, true)) {
            return $scope;
        }

        foreach (['daigaku', 'ippan', 'senmon', 'ouyou'] as $pathScope) {
            if ($returnTo && str_starts_with($returnTo, "/{$pathScope}")) {
                return $pathScope;
            }
        }

        return 'seiho';
    }
}
