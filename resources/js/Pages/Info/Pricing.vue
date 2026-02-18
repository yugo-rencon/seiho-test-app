<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const props = defineProps({
    returnTo: {
        type: String,
        default: null,
    },
});

const page = usePage();
const hasPremium = computed(() => page.props.auth?.hasPremium === true);
const isPurchaseEnabled = computed(
    () => page.props.features?.premiumPurchaseEnabled === true,
);

const plans = [
    {
        key: "premium",
        name: "プレミアムプラン（買い切り）",
        price: "¥1,980",
        note: "有料",
        description: "全科目・全年度・全フォームの解説を一括で解放できます。",
        features: [
            "全科目・全年度・全フォームを閲覧可能",
            "広告なし。勉強の邪魔を一切しません",
            "今後の追加コンテンツも閲覧可",
        ],
        cta: "プレミアムプランを始める",
        href: "billing.checkout",
        highlighted: true,
        badge: "おすすめ",
    },
    {
        key: "free",
        name: "フリープラン（一部無料）",
        price: "¥0",
        note: "無料",
        description: "全8科目の2024年度フォームA〜Cを無料公開しています。",
        features: ["全8科目 2024年度 フォームA〜C"],
        cta: "無料で見る",
        href: "tests.index",
    },
];
</script>

<template>
    <SeihoTestLayout title="料金">
        <div class="container mx-auto px-5 sm:px-6 max-w-5xl py-8 md:py-20">
            <section class="text-center">
                <p class="text-sm font-semibold text-purple-700">Pricing</p>
                <h1 class="mt-3 text-3xl md:text-5xl font-bold text-gray-900">
                    料金プラン
                </h1>
            </section>

            <section class="mt-10 grid gap-6 md:grid-cols-2">
                <div
                    v-for="plan in plans"
                    :key="plan.key"
                    class="relative flex h-full flex-col rounded-2xl border bg-white p-6 shadow-sm"
                    :class="
                        plan.highlighted
                            ? 'border-purple-200 ring-1 ring-purple-100'
                            : 'border-gray-100'
                    "
                >
                    <div
                        v-if="plan.badge || (plan.key === 'premium' && hasPremium)"
                        class="absolute -top-3 right-6 rounded-full border border-purple-200 bg-purple-50 px-3 py-1 text-xs font-semibold text-purple-700"
                    >
                        {{ plan.key === "premium" && hasPremium ? "購入済み" : plan.badge }}
                    </div>

                    <div class="flex-1">
                        <div class="text-sm font-semibold text-purple-700">
                            {{ plan.note }}
                        </div>
                        <h2
                            class="mt-2 text-xl font-bold text-gray-900"
                            :class="plan.highlighted ? 'text-2xl font-extrabold' : ''"
                        >
                            {{ plan.name }}
                        </h2>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ plan.description }}
                        </p>

                        <div class="mt-5 flex items-end gap-2">
                            <div
                                class="text-4xl font-bold tracking-tight text-gray-900"
                            >
                                {{ plan.price }}
                            </div>
                            <div class="pb-1 text-xs text-gray-500">
                                {{ plan.note }}
                            </div>
                        </div>

                        <ul class="mt-5 space-y-3 text-sm text-gray-600">
                            <li
                                v-for="feature in plan.features"
                                :key="feature"
                                class="flex items-start gap-2"
                            >
                                <span
                                    class="mt-1 h-2 w-2 rounded-full bg-purple-400"
                                ></span>
                                <span>{{ feature }}</span>
                            </li>
                        </ul>
                        <p
                            v-if="plan.key === 'free'"
                            class="mt-3 text-xs text-gray-500"
                        >
                            ※2023年度以前は冒頭5問まで公開しています。
                        </p>
                    </div>

                    <div class="mt-8">
                        <Link
                            v-if="plan.key === 'premium' && !hasPremium && isPurchaseEnabled"
                            :href="
                                route(
                                    plan.href,
                                    props.returnTo
                                        ? { return_to: props.returnTo }
                                        : {},
                                )
                            "
                            class="inline-flex w-full items-center justify-center gap-2 rounded-full px-5 py-3 text-base font-semibold transition"
                            :class="
                                plan.highlighted
                                    ? 'bg-purple-600 text-white hover:bg-purple-500 shadow-sm'
                                    : 'border border-purple-200 bg-white text-purple-700 hover:bg-purple-50'
                            "
                        >
                            {{ plan.cta }}
                                </Link>
                        <button
                            v-else-if="
                                plan.key === 'premium' &&
                                !hasPremium &&
                                !isPurchaseEnabled
                            "
                            type="button"
                            disabled
                            class="inline-flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-full border border-purple-200 bg-purple-50 px-5 py-3 text-base font-semibold text-purple-700"
                        >
                            プレミアム機能は現在準備中です。4月より正式リリース予定です。
                        </button>
                        <button
                            v-else-if="plan.key === 'premium' && hasPremium"
                            type="button"
                            disabled
                            class="inline-flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-full border border-purple-200 bg-purple-50 px-5 py-3 text-base font-semibold text-purple-700"
                        >
                            購入済み
                        </button>
                    </div>
                </div>
            </section>

            <section class="mt-10 border-t border-gray-100 pt-8 text-base text-gray-600">
                <h2 class="text-lg font-bold text-gray-900">ご注意</h2>
                <ul class="mt-3 list-disc list-inside space-y-2">
                    <li>問題文は掲載していません。解説のみを提供します。</li>
                    <li>内容は随時更新される場合があります。</li>
                    <li>追加課金なしの買い切りプランです。</li>
                    <li>決済は世界基準のStripeを利用しており安全です。</li>
                </ul>
            </section>
        </div>
    </SeihoTestLayout>
</template>
