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
const hasPremium = computed(() => page.props.auth?.hasPremiumDaigaku === true);

const plans = [
    {
        key: "premium",
        name: "プレミアム（買い切り）",
        price: "¥1,480",
        note: "買い切り・追加料金なし",
        description: "全科目・全年度・全フォームの解説を一括で解放できます。",
        features: [
            "全科目・全年度・全フォームの解説を閲覧可能",
            "購入後すぐ利用可能",
            "今後追加される解説も追加料金なしで閲覧可能",
        ],
        cta: "プレミアムプランを始める",
        href: "billing.checkout",
        highlighted: true,
        badge: "おすすめ",
    },
];
</script>

<template>
    <SeihoTestLayout title="生命保険大学課程 料金">
        <div class="container mx-auto px-5 sm:px-6 max-w-5xl py-8 md:py-20">
            <section class="text-center">
                <p class="text-sm font-semibold text-blue-700">Pricing</p>
                <h1 class="mt-3 text-3xl md:text-5xl font-bold text-gray-900">
                    料金プラン
                </h1>
            </section>

            <section class="mx-auto mt-6 max-w-3xl rounded-xl border border-gray-200 bg-slate-100 px-4 py-4 text-sm font-medium leading-relaxed text-gray-700 shadow-sm">
                <p class="font-bold text-gray-900">安心してお支払いできます</p>
                <p class="mt-1">
                    決済は多くのサービスで利用されているStripeを通じて行われ、カード情報は当サイトでは保存・管理しません。
                </p>
            </section>

            <section class="mx-auto mt-10 grid max-w-3xl gap-6">
                <div
                    v-for="plan in plans"
                    :key="plan.key"
                    class="relative flex h-full flex-col rounded-2xl border bg-white p-6 shadow-sm"
                    :class="
                        plan.highlighted
                            ? 'border-blue-200 ring-1 ring-blue-100'
                            : 'border-gray-100'
                    "
                >
                    <div
                        v-if="plan.badge || (plan.key === 'premium' && hasPremium)"
                        class="absolute -top-3 right-6 rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700"
                    >
                        {{ plan.key === "premium" && hasPremium ? "購入済み" : plan.badge }}
                    </div>

                    <div class="flex-1">
                        <div
                            class="font-semibold"
                            :class="
                                plan.key === 'premium'
                                    ? 'inline-flex rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-sm font-bold text-blue-700'
                                    : 'text-sm text-blue-700'
                            "
                        >
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
                            <div class="text-4xl font-bold tracking-tight text-gray-900">
                                {{ plan.price }}
                                <span v-if="plan.key === 'premium'" class="text-sm font-bold text-gray-500">（税込）</span>
                            </div>
                            <div class="pb-1 text-xs text-gray-500">
                                {{ plan.note }}
                            </div>
                        </div>
                        <p
                            v-if="plan.key === 'premium'"
                            class="mt-2 text-xs font-semibold text-gray-500"
                        >
                            プレミアムプランは、これまでに多くの方にご利用いただいています。
                        </p>
                        <p
                            v-if="plan.key === 'premium'"
                            class="mt-3 rounded-lg bg-gray-50 px-3 py-2 text-xs font-semibold leading-relaxed text-gray-600"
                        >
                            クレジットカード / Apple Pay / Google Pay / Linkに対応
                        </p>

                        <ul class="mt-5 space-y-3 text-sm text-gray-600">
                            <li
                                v-for="feature in plan.features"
                                :key="feature"
                                class="flex items-start gap-2"
                            >
                                <span class="mt-1 h-2 w-2 rounded-full bg-blue-400"></span>
                                <span>{{ feature }}</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <Link
                            v-if="plan.key === 'premium' && !hasPremium"
                            :href="
                                route(plan.href, {
                                    ...(props.returnTo ? { return_to: props.returnTo } : {}),
                                    scope: 'daigaku',
                                })
                            "
                            class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-blue-600 px-5 py-3 text-base font-semibold text-white shadow-sm transition hover:bg-blue-500"
                        >
                            {{ plan.cta }}
                        </Link>
                        <button
                            v-else-if="plan.key === 'premium' && hasPremium"
                            type="button"
                            disabled
                            class="inline-flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-5 py-3 text-base font-semibold text-blue-700"
                        >
                            購入済み
                        </button>
                    </div>
                </div>
            </section>

            <div class="mt-5 text-center text-sm text-gray-600">
                一部無料で確認できます。
                <Link
                    :href="route('daigaku.index')"
                    class="font-semibold text-blue-700 underline underline-offset-4"
                >
                    無料で見る
                </Link>
            </div>

            <section class="mx-auto mt-10 max-w-3xl border-t border-gray-100 pt-8 text-base text-gray-600">
                <h2 class="text-lg font-bold text-gray-900">ご注意</h2>
                <ul class="mt-3 list-disc list-inside space-y-2">
                    <li>問題文は掲載しておらず、解説のみを提供します。</li>
                    <li>内容は随時更新される場合があります。</li>
                    <li>プレミアムの同時利用は2端末までです。</li>
                    <li>決済はStripeを利用しています。カード情報はStripeが安全に管理し、当サイト運営者が確認することはありません。</li>
                </ul>
                <div class="mt-4 flex flex-wrap gap-x-5 gap-y-2 text-sm font-semibold">
                    <Link :href="route('daigaku.tokusho')" class="text-gray-700 underline underline-offset-4 hover:text-gray-900">
                        特商法に基づく表記
                    </Link>
                    <Link :href="route('daigaku.contact.index')" class="text-gray-700 underline underline-offset-4 hover:text-gray-900">
                        お問い合わせ
                    </Link>
                </div>
            </section>
        </div>
    </SeihoTestLayout>
</template>
