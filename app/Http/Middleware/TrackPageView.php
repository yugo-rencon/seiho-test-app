<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class TrackPageView
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (!$this->shouldTrack($request, $response)) {
            return $response;
        }

        static $pageViewsTableExists = null;
        static $hasFullPathColumn = null;

        if ($pageViewsTableExists === null) {
            try {
                $pageViewsTableExists = Schema::hasTable('page_views');
            } catch (\Throwable $e) {
                $pageViewsTableExists = false;
            }
        }

        if (!$pageViewsTableExists) {
            return $response;
        }

        if ($hasFullPathColumn === null) {
            try {
                $hasFullPathColumn = Schema::hasColumn('page_views', 'full_path');
            } catch (\Throwable $e) {
                $hasFullPathColumn = false;
            }
        }

        try {
            $insert = [
                'user_id' => $request->user()?->id,
                'session_id' => $request->hasSession() ? (string) $request->session()->getId() : null,
                'path' => '/'.ltrim($request->path(), '/'),
                'scope' => $this->detectScope($request),
                'viewed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];

            if ($hasFullPathColumn) {
                $insert['full_path'] = mb_substr((string) $request->getRequestUri(), 0, 512);
            }

            DB::table('page_views')->insert($insert);
        } catch (\Throwable $e) {
            // Ignore tracking failures to keep page delivery stable.
        }

        return $response;
    }

    private function shouldTrack(Request $request, Response $response): bool
    {
        if ($request->user()?->is_admin) {
            return false;
        }

        if (!$request->isMethod('GET')) {
            return false;
        }

        if ($request->ajax() || $request->expectsJson()) {
            return false;
        }

        if ($response->getStatusCode() !== 200) {
            return false;
        }

        if ($request->is('admin*') || $request->is('daigaku/admin*')) {
            return false;
        }

        if ($request->is('stripe/webhook')) {
            return false;
        }

        return true;
    }

    private function detectScope(Request $request): string
    {
        $path = '/'.ltrim($request->path(), '/');
        $scope = (string) $request->query('scope', '');

        if ($path === '/pricing' && in_array($scope, ['seiho', 'daigaku', 'ippan', 'senmon', 'ouyou'], true)) {
            return $scope;
        }

        if ($path === '/pricing') {
            $returnTo = (string) $request->query('return_to', '');
            return match (true) {
                str_starts_with($returnTo, '/daigaku') => 'daigaku',
                str_starts_with($returnTo, '/ippan') => 'ippan',
                str_starts_with($returnTo, '/senmon') => 'senmon',
                str_starts_with($returnTo, '/ouyou') => 'ouyou',
                default => 'seiho',
            };
        }

        return match (true) {
            str_starts_with($path, '/daigaku') => 'daigaku',
            str_starts_with($path, '/ippan') => 'ippan',
            str_starts_with($path, '/senmon') => 'senmon',
            str_starts_with($path, '/ouyou') => 'ouyou',
            default => 'seiho',
        };
    }
}
