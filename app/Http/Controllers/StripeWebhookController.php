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

        // 同一 customer の再決済でも確実にプレミアム化する
        if (($session->payment_status ?? null) === 'paid') {
            DB::table('users')
                ->where('id', $userId)
                ->update([
                    'is_premium' => 1,
                    'updated_at' => now(),
                ]);
        }

        $priceId = config('services.stripe.price_premium');
        $amount = isset($session->amount_total) ? (int) round($session->amount_total / 100) : 1980;
        $currency = isset($session->currency) ? strtolower((string) $session->currency) : 'jpy';

        $productId = DB::table('products')
            ->where('stripe_price_id', $priceId)
            ->value('id');

        if (!$productId) {
            $productId = DB::table('products')->insertGetId([
                'name' => 'プレミアムプラン（買い切り）',
                'price' => $amount,
                'currency' => $currency,
                'stripe_product_id' => null,
                'stripe_price_id' => $priceId,
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
}
