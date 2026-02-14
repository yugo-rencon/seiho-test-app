<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Stripe\Exception\ApiErrorException;
use Stripe\StripeClient;

class BillingController extends Controller
{
    public function checkout(Request $request)
    {
        $stripeSecret = config('services.stripe.secret');
        $priceId = config('services.stripe.price_premium');
        $user = $request->user();
        $returnTo = $this->sanitizeReturnTo($request->query('return_to'));

        // 既購入ユーザーはStripeへ遷移させない
        if ($user && $user->hasPremiumAccess()) {
            return redirect($returnTo ?: route('mypage'))
                ->with('status', 'プレミアムプランを購入済みです。');
        }

        if (!$stripeSecret || !$priceId) {
            return back()->withErrors([
                'stripe' => 'Stripe設定が不足しています。',
            ]);
        }

        try {
            $stripe = new StripeClient($stripeSecret);
            $customerId = $this->resolveStripeCustomerId($stripe, $user);

            $session = $stripe->checkout->sessions->create([
                'mode' => 'payment',
                'line_items' => [
                    [
                        'price' => $priceId,
                        'quantity' => 1,
                    ],
                ],
                'customer' => $customerId,
                'client_reference_id' => (string) $user->id,
                'metadata' => [
                    'user_id' => (string) $user->id,
                    'plan' => 'premium',
                ],
                'success_url' => $this->appendQueryToUrl(
                    $returnTo ? url($returnTo) : route('mypage'),
                    ['checkout' => 'success', 'session_id' => '{CHECKOUT_SESSION_ID}'],
                ),
                'cancel_url' => $this->appendQueryToUrl(
                    $returnTo ? url($returnTo) : route('pricing'),
                    ['checkout' => 'cancel'],
                ),
            ]);

            return Inertia::location($session->url);
        } catch (ApiErrorException $e) {
            return back()->withErrors([
                'stripe' => '決済ページの作成に失敗しました。時間をおいて再度お試しください。',
            ]);
        }
    }

    private function resolveStripeCustomerId(StripeClient $stripe, $user): string
    {
        if (!empty($user->stripe_customer_id)) {
            return (string) $user->stripe_customer_id;
        }

        $customer = $stripe->customers->create([
            'email' => $user->email,
            'metadata' => [
                'user_id' => (string) $user->id,
            ],
        ]);

        $user->stripe_customer_id = (string) $customer->id;
        $user->save();

        return (string) $customer->id;
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

    private function appendQueryToUrl(string $url, array $query): string
    {
        $separator = str_contains($url, '?') ? '&' : '?';
        return $url . $separator . http_build_query($query);
    }
}
