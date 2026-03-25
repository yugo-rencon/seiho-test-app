<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            $scope = $this->resolveScope($request);
            $query = [
                'return_to' => $request->getRequestUri(),
            ];

            if ($scope === 'daigaku') {
                $query['scope'] = 'daigaku';
            }

            return route('login', $query);
        }
    }

    private function resolveScope($request): string
    {
        $scope = (string) $request->query('scope', '');
        if (in_array($scope, ['seiho', 'daigaku'], true)) {
            return $scope;
        }

        $returnTo = (string) $request->query('return_to', '');
        if (str_starts_with($returnTo, '/daigaku')) {
            return 'daigaku';
        }

        if (str_starts_with((string) $request->path(), 'daigaku')) {
            return 'daigaku';
        }

        $refererPath = (string) parse_url((string) $request->headers->get('referer'), PHP_URL_PATH);
        if (str_starts_with($refererPath, '/daigaku')) {
            return 'daigaku';
        }

        return 'seiho';
    }
}
