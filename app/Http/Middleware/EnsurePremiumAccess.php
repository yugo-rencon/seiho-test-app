<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePremiumAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->guest(route('login'));
        }

        $scope = str_starts_with((string) $request->path(), 'daigaku') ? 'daigaku' : 'seiho';

        if (!$user->hasPremiumAccess($scope)) {
            return redirect()->route('pricing');
        }

        return $next($request);
    }
}
