<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    private const INTERNAL_USER_IDS = [1, 2, 3, 4, 5];

    public function index(Request $request): Response
    {
        $q = trim((string) $request->query('q', ''));

        $purchaseSummary = DB::table('purchases')
            ->select(
                'user_id',
                DB::raw('MAX(CASE WHEN status = "paid" THEN paid_at ELSE NULL END) AS last_paid_at'),
                DB::raw('SUM(CASE WHEN status = "paid" THEN 1 ELSE 0 END) AS paid_count'),
                DB::raw('SUM(CASE WHEN status = "paid" AND COALESCE(scope, "seiho") = "seiho" THEN 1 ELSE 0 END) AS seiho_paid_count'),
                DB::raw('SUM(CASE WHEN status = "paid" AND COALESCE(scope, "seiho") = "daigaku" THEN 1 ELSE 0 END) AS daigaku_paid_count'),
                DB::raw('SUM(CASE WHEN status = "paid" AND COALESCE(scope, "seiho") = "ippan" THEN 1 ELSE 0 END) AS ippan_paid_count'),
                DB::raw('SUM(CASE WHEN status = "paid" AND COALESCE(scope, "seiho") = "senmon" THEN 1 ELSE 0 END) AS senmon_paid_count'),
                DB::raw('SUM(CASE WHEN status = "paid" AND COALESCE(scope, "seiho") = "ouyou" THEN 1 ELSE 0 END) AS ouyou_paid_count'),
                DB::raw('SUM(CASE WHEN status = "paid" AND COALESCE(scope, "seiho") = "basic" THEN 1 ELSE 0 END) AS basic_paid_count')
            )
            ->groupBy('user_id');

        $users = DB::table('users')
            ->leftJoinSub($purchaseSummary, 'purchase_summary', function ($join) {
                $join->on('purchase_summary.user_id', '=', 'users.id');
            })
            ->select(
                'users.id',
                'users.email',
                'users.is_admin',
                'users.is_premium',
                'users.is_seiho_premium',
                'users.is_daigaku_premium',
                'users.registered_scope',
                'users.registered_return_to',
                'users.created_at',
                DB::raw('COALESCE(purchase_summary.last_paid_at, NULL) as last_paid_at'),
                DB::raw('COALESCE(purchase_summary.paid_count, 0) as paid_count'),
                DB::raw('COALESCE(purchase_summary.seiho_paid_count, 0) as seiho_paid_count'),
                DB::raw('COALESCE(purchase_summary.daigaku_paid_count, 0) as daigaku_paid_count'),
                DB::raw('COALESCE(purchase_summary.ippan_paid_count, 0) as ippan_paid_count'),
                DB::raw('COALESCE(purchase_summary.senmon_paid_count, 0) as senmon_paid_count'),
                DB::raw('COALESCE(purchase_summary.ouyou_paid_count, 0) as ouyou_paid_count'),
                DB::raw('COALESCE(purchase_summary.basic_paid_count, 0) as basic_paid_count')
            )
            ->where('users.is_admin', 0)
            ->whereNotIn('users.id', self::INTERNAL_USER_IDS)
            ->when($q !== '', function ($query) use ($q) {
                $query->where('email', 'like', "%{$q}%");
            })
            ->orderByDesc('users.id')
            ->paginate(30)
            ->withQueryString();

        $admins = DB::table('users')
            ->leftJoinSub($purchaseSummary, 'purchase_summary', function ($join) {
                $join->on('purchase_summary.user_id', '=', 'users.id');
            })
            ->select(
                'users.id',
                'users.email',
                'users.is_premium',
                DB::raw('COALESCE(purchase_summary.last_paid_at, NULL) as last_paid_at')
            )
            ->where('users.is_admin', 1)
            ->orderByDesc('users.id')
            ->get();

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        $stats = [
            'totalUsers' => DB::table('users')
                ->where('is_admin', 0)
                ->whereNotIn('id', self::INTERNAL_USER_IDS)
                ->count(),
            'newUsersThisMonth' => DB::table('users')
                ->where('is_admin', 0)
                ->whereNotIn('id', self::INTERNAL_USER_IDS)
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->count(),
            'seihoSalesCount' => DB::table('purchases')
                ->where('status', 'paid')
                ->whereNotIn('user_id', self::INTERNAL_USER_IDS)
                ->where(function ($query) {
                    $query->where('scope', 'seiho')->orWhereNull('scope');
                })
                ->count(),
            'daigakuSalesCount' => DB::table('purchases')
                ->where('status', 'paid')
                ->whereNotIn('user_id', self::INTERNAL_USER_IDS)
                ->where('scope', 'daigaku')
                ->count(),
            'ippanSalesCount' => DB::table('purchases')
                ->where('status', 'paid')
                ->whereNotIn('user_id', self::INTERNAL_USER_IDS)
                ->where('scope', 'ippan')
                ->count(),
            'senmonSalesCount' => DB::table('purchases')
                ->where('status', 'paid')
                ->whereNotIn('user_id', self::INTERNAL_USER_IDS)
                ->where('scope', 'senmon')
                ->count(),
            'ouyouSalesCount' => DB::table('purchases')
                ->where('status', 'paid')
                ->whereNotIn('user_id', self::INTERNAL_USER_IDS)
                ->where('scope', 'ouyou')
                ->count(),
            'basicSalesCount' => DB::table('purchases')
                ->where('status', 'paid')
                ->whereNotIn('user_id', self::INTERNAL_USER_IDS)
                ->where('scope', 'basic')
                ->count(),
        ];

        $salesSince = Carbon::create(2026, 4, 1)->startOfDay();

        $scopePriceCaseSql = 'CASE COALESCE(purchases.scope, "seiho")
            WHEN "seiho" THEN 1980
            WHEN "daigaku" THEN 980
            WHEN "ouyou" THEN 480
            WHEN "senmon" THEN 480
            WHEN "ippan" THEN 480
            WHEN "basic" THEN 980
            ELSE 1980
        END';

        $scopeOrder = ['seiho', 'daigaku', 'ouyou', 'senmon', 'ippan', 'basic'];

        $salesBaseQuery = DB::table('purchases')
            ->where('purchases.status', 'paid')
            ->whereNotIn('purchases.user_id', self::INTERNAL_USER_IDS)
            ->whereNotNull('purchases.paid_at')
            ->where('purchases.paid_at', '>=', $salesSince);

        $salesSummary = (clone $salesBaseQuery)
            ->selectRaw('COUNT(*) as sales_count')
            ->selectRaw("COALESCE(SUM({$scopePriceCaseSql}), 0) as total_amount")
            ->selectRaw('COUNT(DISTINCT purchases.user_id) as buyers_count')
            ->first();

        $salesByScope = (clone $salesBaseQuery)
            ->selectRaw('COALESCE(purchases.scope, "seiho") as scope')
            ->selectRaw('COUNT(*) as sales_count')
            ->selectRaw("COALESCE(SUM({$scopePriceCaseSql}), 0) as total_amount")
            ->groupBy('scope')
            ->get();

        $monthlySales = (clone $salesBaseQuery)
            ->selectRaw('DATE_FORMAT(purchases.paid_at, "%Y-%m") as month')
            ->selectRaw('COUNT(*) as sales_count')
            ->selectRaw("COALESCE(SUM({$scopePriceCaseSql}), 0) as total_amount")
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $weekdaySalesRaw = (clone $salesBaseQuery)
            ->selectRaw('DAYOFWEEK(purchases.paid_at) as weekday_mysql')
            ->selectRaw('COUNT(*) as sales_count')
            ->groupBy('weekday_mysql')
            ->get();

        $hourlySalesRaw = (clone $salesBaseQuery)
            ->selectRaw('HOUR(purchases.paid_at) as hour_of_day')
            ->selectRaw('COUNT(*) as sales_count')
            ->groupBy('hour_of_day')
            ->orderBy('hour_of_day')
            ->get();

        $scopeOrderMap = array_flip($scopeOrder);
        $scopeStatsMap = [];
        foreach ($salesByScope as $row) {
            $scopeKey = (string) $row->scope;
            $scopeStatsMap[$scopeKey] = [
                'scope' => $scopeKey,
                'salesCount' => (int) $row->sales_count,
                'totalAmount' => (int) $row->total_amount,
            ];
        }

        $weekdayMap = [1 => '日', 2 => '月', 3 => '火', 4 => '水', 5 => '木', 6 => '金', 7 => '土'];
        $weekdayCountMap = [];
        foreach ($weekdaySalesRaw as $row) {
            $weekdayCountMap[(int) $row->weekday_mysql] = (int) $row->sales_count;
        }

        $weekdaySales = collect([1, 2, 3, 4, 5, 6, 7])->map(function ($d) use ($weekdayMap, $weekdayCountMap) {
            return [
                'day' => $weekdayMap[$d],
                'salesCount' => $weekdayCountMap[$d] ?? 0,
            ];
        })->values();

        $hourCountMap = [];
        foreach ($hourlySalesRaw as $row) {
            $hourCountMap[(int) $row->hour_of_day] = (int) $row->sales_count;
        }

        $hourlySales = collect(range(0, 23))->map(function ($h) use ($hourCountMap) {
            return [
                'hour' => sprintf('%02d', $h),
                'salesCount' => $hourCountMap[$h] ?? 0,
            ];
        })->values();

        $stats['salesInsights'] = [
            'fromDate' => $salesSince->toDateString(),
            'salesCount' => (int) ($salesSummary->sales_count ?? 0),
            'totalAmount' => (int) ($salesSummary->total_amount ?? 0),
            'scopeBreakdown' => collect($scopeOrder)->map(function ($scope) use ($scopeStatsMap) {
                return $scopeStatsMap[$scope] ?? [
                    'scope' => $scope,
                    'salesCount' => 0,
                    'totalAmount' => 0,
                ];
            })->sortBy(function ($row) use ($scopeOrderMap) {
                return $scopeOrderMap[$row['scope']] ?? 999;
            })->values(),
            'monthlySales' => $monthlySales->map(function ($row) {
                return [
                    'month' => (string) $row->month,
                    'salesCount' => (int) $row->sales_count,
                    'totalAmount' => (int) $row->total_amount,
                ];
            })->values(),
            'weekdaySales' => $weekdaySales,
            'hourlySales' => $hourlySales,
        ];

        $newContactCount = DB::table('contacts')
            ->where('status', 'new')
            ->count();

        $releasedKeys = DB::table('test_releases')
            ->where('is_released', 1)
            ->pluck('is_released', 'test_key');

        return Inertia::render('Admin/Admin', [
            'users' => $users,
            'admins' => $admins,
            'stats' => $stats,
            'newContactCount' => $newContactCount,
            'filters' => [
                'q' => $q,
            ],
            'releasedKeys' => $releasedKeys,
        ]);
    }

    public function toggleUserPremium(Request $request, int $userId): RedirectResponse
    {
        $user = DB::table('users')->where('id', $userId)->first();

        if (!$user) {
            return back()->with('status', '対象ユーザーが見つかりませんでした。');
        }

        $nextPremium = !$user->is_premium;

        DB::table('users')
            ->where('id', $userId)
            ->update([
                'is_premium' => $nextPremium ? 1 : 0,
                'is_seiho_premium' => $nextPremium ? 1 : 0,
                'is_daigaku_premium' => $nextPremium ? 1 : 0,
                'updated_at' => now(),
            ]);

        if (!$nextPremium) {
            DB::table('purchases')
                ->where('user_id', $userId)
                ->where('status', 'paid')
                ->update([
                    'status' => 'canceled',
                    'paid_at' => null,
                    'updated_at' => now(),
                ]);
        }

        return back()->with('status', $nextPremium ? 'プレミアム有効化に更新しました。' : '未購入に更新しました。');
    }

    public function bulkUpdateReleases(Request $request): RedirectResponse
    {
        $changes = $request->input('changes', []);

        foreach ($changes as $testKey => $isReleased) {
            if (!preg_match('/^[a-z0-9\-]+$/', (string) $testKey)) {
                continue;
            }

            DB::table('test_releases')->upsert(
                [
                    'test_key'    => $testKey,
                    'is_released' => $isReleased ? 1 : 0,
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ],
                ['test_key'],
                ['is_released', 'updated_at'],
            );
        }

        return back();
    }
}
