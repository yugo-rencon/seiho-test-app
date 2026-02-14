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
    public function index(Request $request): Response
    {
        $q = trim((string) $request->query('q', ''));

        $purchaseSummary = DB::table('purchases')
            ->select(
                'user_id',
                DB::raw('MAX(CASE WHEN status = "paid" THEN paid_at ELSE NULL END) AS last_paid_at'),
                DB::raw('SUM(CASE WHEN status = "paid" THEN 1 ELSE 0 END) AS paid_count')
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
                'users.created_at',
                DB::raw('COALESCE(purchase_summary.last_paid_at, NULL) as last_paid_at'),
                DB::raw('COALESCE(purchase_summary.paid_count, 0) as paid_count')
            )
            ->where('users.is_admin', 0)
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
            'totalUsers' => DB::table('users')->where('is_admin', 0)->count(),
            'premiumUsers' => DB::table('users')->where('is_admin', 0)->where('is_premium', 1)->count(),
            'newUsersThisMonth' => DB::table('users')
                ->where('is_admin', 0)
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->count(),
        ];

        return Inertia::render('Admin/Admin', [
            'users' => $users,
            'admins' => $admins,
            'stats' => $stats,
            'filters' => [
                'q' => $q,
            ],
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
}
