<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Webhook;
use UnexpectedValueException;

class StripeWebhookController extends Controller
{
    public function handle(Request $request): JsonResponse
    {
        $payload = $request->getContent();
        $signature = (string) $request->header('Stripe-Signature');
        $secret = config('services.stripe.webhook_secret');

        if (!$secret) {
            Log::warning('Stripe webhook secret is missing.');
            return response()->json(['message' => 'Webhook secret is not configured.'], 500);
        }

        try {
            $event = Webhook::constructEvent($payload, $signature, $secret);
        } catch (UnexpectedValueException|SignatureVerificationException $e) {
            return response()->json(['message' => 'Invalid webhook signature.'], 400);
        }

        DB::beginTransaction();

        try {
            $exists = DB::table('stripe_webhooks')
                ->where('event_id', $event->id)
                ->exists();

            if ($exists) {
                DB::commit();
                return response()->json(['received' => true, 'duplicate' => true]);
            }

            DB::table('stripe_webhooks')->insert([
                'event_id' => $event->id,
                'payload' => json_encode($event->toArray(), JSON_UNESCAPED_UNICODE),
                'processed_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if (
                $event->type === 'checkout.session.completed' ||
                $event->type === 'checkout.session.async_payment_succeeded'
            ) {
                $this->upsertPurchaseFromSession($event->data->object);
            }

            DB::table('stripe_webhooks')
                ->where('event_id', $event->id)
                ->update([
                    'processed_at' => now(),
                    'updated_at' => now(),
                ]);

            DB::commit();

            return response()->json(['received' => true]);
        } catch (\Throwable $e) {
            DB::rollBack();

            Log::error('Stripe webhook processing failed.', [
                'event_id' => $event->id ?? null,
                'type' => $event->type ?? null,
                'message' => $e->getMessage(),
            ]);

            return response()->json(['message' => 'Webhook handling failed.'], 500);
        }
    }

    private function upsertPurchaseFromSession($session): void
    {
        $metadataUserId = isset($session->metadata->user_id) ? (int) $session->metadata->user_id : 0;
        $referenceUserId = isset($session->client_reference_id) ? (int) $session->client_reference_id : 0;
        $userId = $metadataUserId > 0 ? $metadataUserId : $referenceUserId;

        if ($userId <= 0) {
            Log::warning('Stripe webhook: user_id not found in session.', [
                'session_id' => $session->id ?? null,
            ]);
            return;
        }

        // checkout.session の customer を users に同期しておく
        if (!empty($session->customer)) {
            DB::table('users')
                ->where('id', $userId)
                ->where(function ($query) use ($session) {
                    $query->whereNull('stripe_customer_id')
                        ->orWhere('stripe_customer_id', '!=', (string) $session->customer);
                })
                ->update([
                    'stripe_customer_id' => (string) $session->customer,
                    'updated_at' => now(),
                ]);
        }

        $scope = $this->sanitizeScope(isset($session->metadata->scope) ? (string) $session->metadata->scope : null);

        // 同一 customer の再決済でも確実に対象スコープをプレミアム化する
        if (($session->payment_status ?? null) === 'paid') {
            $update = [
                'updated_at' => now(),
            ];

            if ($scope === 'daigaku') {
                $update['is_daigaku_premium'] = 1;
            } else {
                $update['is_seiho_premium'] = 1;
            }

            DB::table('users')->where('id', $userId)->update($update);
            $this->syncAnyPremiumFlag($userId);
        }

        $priceId = $this->resolvePriceId($scope);
        $amount = isset($session->amount_total) ? (int) round($session->amount_total / 100) : 1980;
        $currency = isset($session->currency) ? strtolower((string) $session->currency) : 'jpy';

        $productId = DB::table('products')
            ->where('stripe_price_id', $priceId)
            ->where('scope', $scope)
            ->value('id');

        if (!$productId) {
            $productId = DB::table('products')->insertGetId([
                'name' => $scope === 'daigaku'
                    ? '生命保険大学課程 プレミアムプラン（買い切り）'
                    : '生保講座 プレミアムプラン（買い切り）',
                'price' => $amount,
                'currency' => $currency,
                'stripe_product_id' => null,
                'stripe_price_id' => $priceId,
                'scope' => $scope,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $status = ($session->payment_status ?? null) === 'paid' ? 'paid' : 'pending';
        $paidAt = $status === 'paid' ? now() : null;

        $existing = DB::table('purchases')
            ->where('stripe_session_id', $session->id)
            ->first();

        $payload = [
            'user_id' => $userId,
            'product_id' => $productId,
            'stripe_session_id' => $session->id,
            'stripe_payment_intent_id' => isset($session->payment_intent) ? (string) $session->payment_intent : null,
            'status' => $status,
            'paid_at' => $paidAt,
            'scope' => $scope,
            'updated_at' => now(),
        ];

        if ($existing) {
            DB::table('purchases')
                ->where('id', $existing->id)
                ->update($payload);
            return;
        }

        DB::table('purchases')->insert($payload + [
            'created_at' => now(),
        ]);
    }

    private function sanitizeScope(?string $scope): string
    {
        return in_array($scope, ['seiho', 'daigaku'], true) ? $scope : 'seiho';
    }

    private function resolvePriceId(string $scope): ?string
    {
        if ($scope === 'daigaku') {
            return config('services.stripe.price_daigaku_premium')
                ?: config('services.stripe.price_premium');
        }

        return config('services.stripe.price_seiho_premium')
            ?: config('services.stripe.price_premium');
    }

    private function syncAnyPremiumFlag(int $userId): void
    {
        DB::table('users')
            ->where('id', $userId)
            ->update([
                'is_premium' => DB::raw('CASE WHEN is_seiho_premium = 1 OR is_daigaku_premium = 1 THEN 1 ELSE 0 END'),
                'updated_at' => now(),
            ]);
    }
}
