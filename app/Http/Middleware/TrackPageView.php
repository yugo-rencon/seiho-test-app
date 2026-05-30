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

        try {
            DB::table('page_views')->insert([
                'user_id' => $request->user()?->id,
                'session_id' => $request->hasSession() ? (string) $request->session()->getId() : null,
                'path' => '/'.ltrim($request->path(), '/'),
                'scope' => $this->detectScope($request),
                'viewed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Throwable $e) {
            // Ignore tracking failures to keep page delivery stable.
        }

        return $response;
    }

    private function shouldTrack(Request $request, Response $response): bool
    {
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

        return match (true) {
            str_starts_with($path, '/daigaku') => 'daigaku',
            str_starts_with($path, '/ippan') => 'ippan',
            str_starts_with($path, '/senmon') => 'senmon',
            str_starts_with($path, '/ouyou') => 'ouyou',
            default => 'seiho',
        };
    }
}
