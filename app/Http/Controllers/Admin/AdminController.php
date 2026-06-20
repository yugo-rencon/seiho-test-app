<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    private const INTERNAL_USER_IDS = [1, 2, 3, 4, 5];

    public function index(Request $request): Response
    {
        $purchaseScope = (string) $request->query('purchase_scope', 'all');
        $purchaseState = (string) $request->query('purchase_state', 'all');
        $userSearch = trim((string) $request->query('user_search', ''));

        $allowedScopes = ['all', 'seiho', 'daigaku', 'ouyou', 'senmon', 'ippan', 'basic'];
        if (!in_array($purchaseScope, $allowedScopes, true)) {
            $purchaseScope = 'all';
        }

        $allowedStates = ['all', 'purchased', 'unpurchased'];
        if (!in_array($purchaseState, $allowedStates, true)) {
            $purchaseState = 'all';
        }

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
            ->when($userSearch !== '', function ($query) use ($userSearch) {
                $escapedSearch = str_replace(['\\', '%', '_'], ['\\\\', '\\%', '\\_'], $userSearch);
                $query->where('users.email', 'like', "%{$escapedSearch}%");
            })
            ->when($purchaseState === 'purchased', function ($query) {
                $query->whereRaw('COALESCE(purchase_summary.paid_count, 0) > 0');
            })
            ->when($purchaseState === 'unpurchased', function ($query) {
                $query->whereRaw('COALESCE(purchase_summary.paid_count, 0) = 0');
            })
            ->when($purchaseScope !== 'all', function ($query) use ($purchaseScope) {
                $columnMap = [
                    'seiho' => 'seiho_paid_count',
                    'daigaku' => 'daigaku_paid_count',
                    'ouyou' => 'ouyou_paid_count',
                    'senmon' => 'senmon_paid_count',
                    'ippan' => 'ippan_paid_count',
                    'basic' => 'basic_paid_count',
                ];
                $column = $columnMap[$purchaseScope] ?? null;
                if ($column) {
                    $query->whereRaw("COALESCE(purchase_summary.{$column}, 0) > 0");
                }
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
                'users.is_seiho_premium',
                'users.is_daigaku_premium',
                DB::raw('COALESCE(purchase_summary.ippan_paid_count, 0) as ippan_paid_count'),
                DB::raw('COALESCE(purchase_summary.senmon_paid_count, 0) as senmon_paid_count'),
                DB::raw('COALESCE(purchase_summary.ouyou_paid_count, 0) as ouyou_paid_count'),
                DB::raw('COALESCE(purchase_summary.basic_paid_count, 0) as basic_paid_count'),
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

        $salesSince = Carbon::create(2026, 1, 1)->startOfDay();

        $daigakuPriceSwitchAt = '2026-05-30 17:34:32';
        $basicExamPriceSwitchAt = '2026-06-18 00:00:00';
        $basicBundlePriceSwitchAt = '2026-06-18 00:00:00';

        $scopePriceCaseSql = 'CASE COALESCE(purchases.scope, "seiho")
            WHEN "seiho" THEN 1980
            WHEN "daigaku" THEN CASE
                WHEN purchases.paid_at < "'.$daigakuPriceSwitchAt.'" THEN 980
                ELSE 1480
            END
            WHEN "ouyou" THEN CASE
                WHEN purchases.paid_at < "'.$basicExamPriceSwitchAt.'" THEN 480
                ELSE 980
            END
            WHEN "senmon" THEN CASE
                WHEN purchases.paid_at < "'.$basicExamPriceSwitchAt.'" THEN 480
                ELSE 980
            END
            WHEN "ippan" THEN CASE
                WHEN purchases.paid_at < "'.$basicExamPriceSwitchAt.'" THEN 480
                ELSE 980
            END
            WHEN "basic" THEN CASE
                WHEN purchases.paid_at < "'.$basicBundlePriceSwitchAt.'" THEN 980
                ELSE 1980
            END
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

        $monthlySalesByScope = (clone $salesBaseQuery)
            ->selectRaw('DATE_FORMAT(purchases.paid_at, "%Y-%m") as month')
            ->selectRaw('COALESCE(purchases.scope, "seiho") as scope')
            ->selectRaw('COUNT(*) as sales_count')
            ->selectRaw("COALESCE(SUM({$scopePriceCaseSql}), 0) as total_amount")
            ->groupBy('month', 'scope')
            ->orderBy('month')
            ->get();

        $dailySalesByScope = (clone $salesBaseQuery)
            ->selectRaw('DATE(purchases.paid_at) as day')
            ->selectRaw('COALESCE(purchases.scope, "seiho") as scope')
            ->selectRaw('COUNT(*) as sales_count')
            ->selectRaw("COALESCE(SUM({$scopePriceCaseSql}), 0) as total_amount")
            ->groupBy('day', 'scope')
            ->orderBy('day')
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

        $todayStart = Carbon::today();
        $todayEnd = Carbon::today()->endOfDay();
        $yesterdayStart = Carbon::yesterday()->startOfDay();
        $yesterdayEnd = Carbon::yesterday()->endOfDay();
        $last7daysStart = Carbon::today()->subDays(6)->startOfDay();

        $buildPeriodSummary = function ($from, $to) use ($salesBaseQuery, $scopePriceCaseSql) {
            $row = (clone $salesBaseQuery)
                ->whereBetween('purchases.paid_at', [$from, $to])
                ->selectRaw('COUNT(*) as sales_count')
                ->selectRaw("COALESCE(SUM({$scopePriceCaseSql}), 0) as total_amount")
                ->first();

            return [
                'salesCount' => (int) ($row->sales_count ?? 0),
                'totalAmount' => (int) ($row->total_amount ?? 0),
            ];
        };

        $recentSales = [
            'today' => $buildPeriodSummary($todayStart, $todayEnd),
            'yesterday' => $buildPeriodSummary($yesterdayStart, $yesterdayEnd),
            'last7days' => $buildPeriodSummary($last7daysStart, $todayEnd),
        ];

        $adsenseRevenue = [
            'summary' => [
                'totalAmount' => 0,
                'monthAmount' => 0,
                'todayAmount' => 0,
                'entriesCount' => 0,
            ],
            'monthly' => collect(),
            'daily' => collect(),
        ];

        if (Schema::hasTable('adsense_revenues')) {
            $adsenseBaseQuery = DB::table('adsense_revenues');

            $adsenseSummary = (clone $adsenseBaseQuery)
                ->selectRaw('COALESCE(SUM(amount_yen), 0) as total_amount')
                ->selectRaw('COUNT(*) as entries_count')
                ->first();

            $adsenseMonthAmount = (clone $adsenseBaseQuery)
                ->whereBetween('revenue_date', [$startOfMonth->toDateString(), $endOfMonth->toDateString()])
                ->sum('amount_yen');

            $adsenseTodayAmount = (clone $adsenseBaseQuery)
                ->where('revenue_date', $todayStart->toDateString())
                ->sum('amount_yen');

            $adsenseRevenue = [
                'summary' => [
                    'totalAmount' => (int) ($adsenseSummary->total_amount ?? 0),
                    'monthAmount' => (int) $adsenseMonthAmount,
                    'todayAmount' => (int) $adsenseTodayAmount,
                    'entriesCount' => (int) ($adsenseSummary->entries_count ?? 0),
                ],
                'monthly' => (clone $adsenseBaseQuery)
                    ->selectRaw('DATE_FORMAT(revenue_date, "%Y-%m") as month')
                    ->selectRaw('COALESCE(SUM(amount_yen), 0) as total_amount')
                    ->selectRaw('COUNT(*) as entries_count')
                    ->groupBy('month')
                    ->orderByDesc('month')
                    ->get()
                    ->map(function ($row) {
                        return [
                            'month' => (string) $row->month,
                            'totalAmount' => (int) $row->total_amount,
                            'entriesCount' => (int) $row->entries_count,
                        ];
                    })
                    ->values(),
                'daily' => (clone $adsenseBaseQuery)
                    ->select('id', 'revenue_date', 'amount_yen', 'memo', 'updated_at')
                    ->orderByDesc('revenue_date')
                    ->limit(60)
                    ->get()
                    ->map(function ($row) {
                        return [
                            'id' => (int) $row->id,
                            'date' => (string) $row->revenue_date,
                            'amountYen' => (int) $row->amount_yen,
                            'memo' => (string) ($row->memo ?? ''),
                            'updatedAt' => (string) $row->updated_at,
                        ];
                    })
                    ->values(),
            ];
        }

        $pageViewsSince = Carbon::now()->subDays(30)->startOfDay();
        $topPageViews = collect();
        $dailyPageViews = collect();
        $premiumUsageToday = [
            'summary' => [
                'views' => 0,
                'users' => 0,
                'sessions' => 0,
                'premiumViews' => 0,
                'blockedViews' => 0,
            ],
            'scopeSummary' => collect(),
            'users' => collect(),
        ];
        $pageViewSummary = [
            'today' => ['views' => 0, 'uniqueSessions' => 0],
            'yesterday' => ['views' => 0, 'uniqueSessions' => 0],
            'last7days' => ['views' => 0, 'uniqueSessions' => 0],
            'last30days' => ['views' => 0, 'uniqueSessions' => 0],
            'total' => ['views' => 0, 'uniqueSessions' => 0],
        ];

        if (Schema::hasTable('page_views')) {
            $pageViewsBaseQuery = function () {
                return DB::table('page_views')
                    ->where('path', 'not like', '/admin%')
                    ->where('path', 'not like', '/daigaku/admin%');
            };

            $buildPageViewSummary = function ($from = null, $to = null) use ($pageViewsBaseQuery) {
                $query = $pageViewsBaseQuery();
                if ($from !== null && $to !== null) {
                    $query->whereBetween('viewed_at', [$from, $to]);
                } elseif ($from !== null) {
                    $query->where('viewed_at', '>=', $from);
                } elseif ($to !== null) {
                    $query->where('viewed_at', '<=', $to);
                }

                $row = $query
                    ->selectRaw('COUNT(*) as views')
                    ->selectRaw('COUNT(DISTINCT session_id) as unique_sessions')
                    ->first();

                return [
                    'views' => (int) ($row->views ?? 0),
                    'uniqueSessions' => (int) ($row->unique_sessions ?? 0),
                ];
            };

            $pageViewSummary = [
                'today' => $buildPageViewSummary($todayStart, $todayEnd),
                'yesterday' => $buildPageViewSummary($yesterdayStart, $yesterdayEnd),
                'last7days' => $buildPageViewSummary($last7daysStart, $todayEnd),
                'last30days' => $buildPageViewSummary($pageViewsSince, $todayEnd),
                'total' => $buildPageViewSummary(),
            ];

            $topPageViews = $pageViewsBaseQuery()
                ->where('viewed_at', '>=', $pageViewsSince)
                ->select('path')
                ->selectRaw('COUNT(*) as views')
                ->selectRaw('COUNT(DISTINCT session_id) as unique_sessions')
                ->groupBy('path')
                ->orderByDesc('views')
                ->limit(20)
                ->get();

            $dailyPageViews = $pageViewsBaseQuery()
                ->where('viewed_at', '>=', $pageViewsSince)
                ->selectRaw('DATE(viewed_at) as day')
                ->selectRaw('COUNT(*) as views')
                ->selectRaw('COUNT(DISTINCT session_id) as unique_sessions')
                ->groupBy('day')
                ->orderByDesc('day')
                ->limit(30)
                ->get();
        }

        if (Schema::hasTable('premium_access_logs')) {
            $premiumLogsBaseQuery = function () {
                return DB::table('premium_access_logs')
                    ->where('path', 'not like', '/admin%')
                    ->where('path', 'not like', '/daigaku/admin%');
            };

            $summaryRow = $premiumLogsBaseQuery()
                ->whereBetween('checked_at', [$todayStart, $todayEnd])
                ->selectRaw('COUNT(*) as views')
                ->selectRaw('COUNT(DISTINCT user_id) as users')
                ->selectRaw('COUNT(DISTINCT session_id) as sessions')
                ->selectRaw('SUM(CASE WHEN has_premium = 1 THEN 1 ELSE 0 END) as premium_views')
                ->selectRaw('SUM(CASE WHEN premium_session_allowed = 0 THEN 1 ELSE 0 END) as blocked_views')
                ->first();

            $scopeSummary = $premiumLogsBaseQuery()
                ->whereBetween('checked_at', [$todayStart, $todayEnd])
                ->whereIn('scope', ['seiho', 'daigaku'])
                ->select('scope')
                ->selectRaw('COUNT(*) as views')
                ->selectRaw('COUNT(DISTINCT user_id) as users')
                ->selectRaw('COUNT(DISTINCT session_id) as sessions')
                ->selectRaw('SUM(CASE WHEN has_premium = 1 THEN 1 ELSE 0 END) as premium_views')
                ->selectRaw('SUM(CASE WHEN premium_session_allowed = 0 THEN 1 ELSE 0 END) as blocked_views')
                ->groupBy('scope')
                ->get()
                ->keyBy('scope');

            $premiumUsageToday = [
                'summary' => [
                    'views' => (int) ($summaryRow->views ?? 0),
                    'users' => (int) ($summaryRow->users ?? 0),
                    'sessions' => (int) ($summaryRow->sessions ?? 0),
                    'premiumViews' => (int) ($summaryRow->premium_views ?? 0),
                    'blockedViews' => (int) ($summaryRow->blocked_views ?? 0),
                ],
                'scopeSummary' => collect(['seiho', 'daigaku'])->map(function ($scope) use ($scopeSummary) {
                    $row = $scopeSummary->get($scope);

                    return [
                        'scope' => $scope,
                        'views' => (int) ($row->views ?? 0),
                        'users' => (int) ($row->users ?? 0),
                        'sessions' => (int) ($row->sessions ?? 0),
                        'premiumViews' => (int) ($row->premium_views ?? 0),
                        'blockedViews' => (int) ($row->blocked_views ?? 0),
                    ];
                })->values(),
                'users' => $premiumLogsBaseQuery()
                    ->join('users', 'users.id', '=', 'premium_access_logs.user_id')
                    ->whereBetween('premium_access_logs.checked_at', [$todayStart, $todayEnd])
                    ->select('premium_access_logs.user_id', 'users.email')
                    ->selectRaw('GROUP_CONCAT(DISTINCT premium_access_logs.scope ORDER BY premium_access_logs.scope SEPARATOR ",") as scopes')
                    ->selectRaw('MAX(premium_access_logs.checked_at) as last_seen_at')
                    ->groupBy('premium_access_logs.user_id', 'users.email')
                    ->orderByDesc('last_seen_at')
                    ->limit(50)
                    ->get(),
            ];
        }

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
            'monthlySalesByScope' => $monthlySalesByScope->map(function ($row) {
                return [
                    'month' => (string) $row->month,
                    'scope' => (string) $row->scope,
                    'salesCount' => (int) $row->sales_count,
                    'totalAmount' => (int) $row->total_amount,
                ];
            })->values(),
            'dailySalesByScope' => $dailySalesByScope->map(function ($row) {
                return [
                    'day' => (string) $row->day,
                    'scope' => (string) $row->scope,
                    'salesCount' => (int) $row->sales_count,
                    'totalAmount' => (int) $row->total_amount,
                ];
            })->values(),
            'recentSales' => $recentSales,
            'adsenseRevenue' => $adsenseRevenue,
            'pageViewsSince' => $pageViewsSince->toDateString(),
            'topPageViews' => $topPageViews->map(function ($row) {
                return [
                    'path' => (string) $row->path,
                    'views' => (int) $row->views,
                    'uniqueSessions' => (int) $row->unique_sessions,
                ];
            })->values(),
            'pageViewSummary' => $pageViewSummary,
            'dailyPageViews' => $dailyPageViews->map(function ($row) {
                return [
                    'day' => (string) $row->day,
                    'views' => (int) $row->views,
                    'uniqueSessions' => (int) $row->unique_sessions,
                ];
            })->values(),
            'premiumUsageToday' => [
                'summary' => $premiumUsageToday['summary'],
                'scopeSummary' => $premiumUsageToday['scopeSummary'],
                'users' => $premiumUsageToday['users']->map(function ($row) {
                    return [
                        'userId' => (int) $row->user_id,
                        'email' => (string) $row->email,
                        'scopes' => collect(explode(',', (string) ($row->scopes ?? '')))->filter()->values()->all(),
                        'lastSeenAt' => (string) $row->last_seen_at,
                    ];
                })->values(),
            ],
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
                'purchase_scope' => $purchaseScope,
                'purchase_state' => $purchaseState,
                'user_search' => $userSearch,
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

    public function updateAdminPurchaseScopes(Request $request, int $userId): RedirectResponse
    {
        $scopeInputs = $request->input('scopes', []);
        $allowedScopes = ['seiho', 'daigaku', 'ippan', 'senmon', 'ouyou', 'basic'];

        if (!is_array($scopeInputs)) {
            return back()->with('status', '更新データが不正です。');
        }

        $normalized = [];
        foreach ($allowedScopes as $scope) {
            $normalized[$scope] = (bool) ($scopeInputs[$scope] ?? false);
        }

        $adminUser = DB::table('users')
            ->where('id', $userId)
            ->where('is_admin', 1)
            ->first();

        if (!$adminUser) {
            return back()->with('status', '管理者ユーザーが見つかりません。');
        }

        DB::transaction(function () use ($userId, $normalized) {
            DB::table('users')
                ->where('id', $userId)
                ->update([
                    'is_seiho_premium' => $normalized['seiho'] ? 1 : 0,
                    'is_daigaku_premium' => $normalized['daigaku'] ? 1 : 0,
                    'is_premium' => ($normalized['seiho'] || $normalized['daigaku']) ? 1 : 0,
                    'updated_at' => now(),
                ]);

            foreach (['ippan', 'senmon', 'ouyou', 'basic'] as $scope) {
                if ($normalized[$scope]) {
                    $existsPaid = DB::table('purchases')
                        ->where('user_id', $userId)
                        ->where('scope', $scope)
                        ->where('status', 'paid')
                        ->exists();

                    if (!$existsPaid) {
                        $productId = $this->ensureScopeProduct($scope);
                        DB::table('purchases')->insert([
                            'user_id' => $userId,
                            'product_id' => $productId,
                            'stripe_session_id' => sprintf('admin-manual-%s-%d-%s', $scope, $userId, now()->format('YmdHisv')),
                            'stripe_payment_intent_id' => null,
                            'status' => 'paid',
                            'scope' => $scope,
                            'paid_at' => now(),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                } else {
                    DB::table('purchases')
                        ->where('user_id', $userId)
                        ->where('scope', $scope)
                        ->where('status', 'paid')
                        ->update([
                            'status' => 'canceled',
                            'paid_at' => null,
                            'updated_at' => now(),
                        ]);
                }
            }
        });

        return back()->with('status', '管理者ユーザーの購入状態を更新しました。');
    }

    public function storeAdsenseRevenue(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'revenue_date' => ['required', 'date'],
            'amount_yen' => ['required', 'integer', 'min:0', 'max:10000000'],
            'memo' => ['nullable', 'string', 'max:255'],
        ]);

        DB::table('adsense_revenues')->upsert(
            [
                'revenue_date' => Carbon::parse($validated['revenue_date'])->toDateString(),
                'amount_yen' => (int) $validated['amount_yen'],
                'memo' => $validated['memo'] ?? null,
                'created_by' => $request->user()?->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['revenue_date'],
            ['amount_yen', 'memo', 'updated_at'],
        );

        return back()->with('status', 'AdSense売上を登録しました。');
    }

    public function deleteAdsenseRevenue(int $adsenseRevenueId): RedirectResponse
    {
        DB::table('adsense_revenues')
            ->where('id', $adsenseRevenueId)
            ->delete();

        return back()->with('status', 'AdSense売上を削除しました。');
    }

    private function ensureScopeProduct(string $scope): int
    {
        $productId = DB::table('products')
            ->where('scope', $scope)
            ->where('active', 1)
            ->value('id');

        if ($productId) {
            return (int) $productId;
        }

        return (int) DB::table('products')->insertGetId([
            'name' => match ($scope) {
                'daigaku' => '生命保険大学課程 プレミアムプラン（買い切り）',
                'ippan' => '生命保険一般課程 プレミアムプラン（買い切り）',
                'senmon' => '生命保険専門課程 プレミアムプラン（買い切り）',
                'ouyou' => '生命保険応用課程 プレミアムプラン（買い切り）',
                'basic' => '一般・専門・応用セット（買い切り）',
                default => '生保講座 プレミアムプラン（買い切り）',
            },
            'price' => match ($scope) {
                'daigaku' => 1480,
                'ippan' => 980,
                'senmon', 'ouyou' => 980,
                'basic' => 1980,
                default => 1980,
            },
            'currency' => 'jpy',
            'stripe_product_id' => null,
            'stripe_price_id' => null,
            'scope' => $scope,
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
