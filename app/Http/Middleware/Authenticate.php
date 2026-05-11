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

            if ($scope !== 'seiho') {
                $query['scope'] = $scope;
            }

            return route('login', $query);
        }
    }

    private function resolveScope($request): string
    {
        $scope = (string) $request->query('scope', '');
        if (in_array($scope, ['seiho', 'daigaku', 'ippan', 'senmon', 'ouyou'], true)) {
            return $scope;
        }

        $returnTo = (string) $request->query('return_to', '');
        foreach (['daigaku', 'ippan', 'senmon', 'ouyou'] as $pathScope) {
            if (str_starts_with($returnTo, "/{$pathScope}")) {
                return $pathScope;
            }
        }

        foreach (['daigaku', 'ippan', 'senmon', 'ouyou'] as $pathScope) {
            if (str_starts_with((string) $request->path(), $pathScope)) {
                return $pathScope;
            }
        }

        $refererPath = (string) parse_url((string) $request->headers->get('referer'), PHP_URL_PATH);
        foreach (['daigaku', 'ippan', 'senmon', 'ouyou'] as $pathScope) {
            if (str_starts_with($refererPath, "/{$pathScope}")) {
                return $pathScope;
            }
        }

        return 'seiho';
    }
}
