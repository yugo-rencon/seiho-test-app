<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const props = defineProps({
    returnTo: {
        type: String,
        default: null,
    },
    scope: {
        type: String,
        default: "seiho",
    },
});

const page = usePage();
const validScopes = ["seiho", "daigaku", "ippan", "senmon", "ouyou"];
const currentScope = computed(() =>
    validScopes.includes(props.scope) ? props.scope : "seiho",
);
const isBasicExamScope = computed(() =>
    ["ippan", "senmon", "ouyou"].includes(currentScope.value),
);
const hasPremium = computed(() =>
    currentScope.value === "daigaku"
        ? page.props.auth?.hasPremiumDaigaku === true
        : currentScope.value === "ippan"
          ? page.props.auth?.hasPremiumIppan === true
          : currentScope.value === "senmon"
            ? page.props.auth?.hasPremiumSenmon === true
            : currentScope.value === "ouyou"
              ? page.props.auth?.hasPremiumOuyou === true
              : page.props.auth?.hasPremiumSeiho === true,
);
const hasBasicPremium = computed(() =>
    page.props.auth?.hasPremiumBasic === true ||
    (page.props.auth?.hasPremiumIppan === true &&
        page.props.auth?.hasPremiumSenmon === true &&
        page.props.auth?.hasPremiumOuyou === true),
);

const scopeTheme = computed(() => {
    if (currentScope.value === "ippan") {
        return {
            brandName: "生命保険一般課程 過去問解説",
            pricingText: "text-fuchsia-700",
            cardActive: "border-pink-200 ring-1 ring-pink-100",
            badge: "border-pink-200 bg-pink-50 text-fuchsia-700",
            accentText: "text-fuchsia-700",
            dot: "bg-pink-400",
            primaryButton: "bg-gradient-to-r from-pink-500 to-fuchsia-500 text-white hover:from-pink-400 hover:to-fuchsia-400 shadow-sm",
            secondaryButton: "border border-pink-200 bg-white text-fuchsia-700 hover:bg-pink-50",
            disabledButton: "border border-pink-200 bg-pink-50 text-fuchsia-700",
        };
    }

    if (currentScope.value === "senmon") {
        return {
            brandName: "生命保険専門課程 過去問解説",
            pricingText: "text-emerald-700",
            cardActive: "border-emerald-200 ring-1 ring-emerald-100",
            badge: "border-emerald-200 bg-emerald-50 text-emerald-700",
            accentText: "text-emerald-700",
            dot: "bg-emerald-400",
            primaryButton: "bg-gradient-to-r from-emerald-500 to-lime-500 text-white hover:from-emerald-400 hover:to-lime-400 shadow-sm",
            secondaryButton: "border border-emerald-200 bg-white text-emerald-700 hover:bg-emerald-50",
            disabledButton: "border border-emerald-200 bg-emerald-50 text-emerald-700",
        };
    }

    if (currentScope.value === "ouyou") {
        return {
            brandName: "生命保険応用課程 過去問解説",
            pricingText: "text-amber-700",
            cardActive: "border-amber-200 ring-1 ring-amber-100",
            badge: "border-amber-200 bg-amber-50 text-amber-700",
            accentText: "text-amber-700",
            dot: "bg-amber-400",
            primaryButton: "bg-gradient-to-r from-amber-500 to-orange-500 text-white hover:from-amber-400 hover:to-orange-400 shadow-sm",
            secondaryButton: "border border-amber-200 bg-white text-amber-700 hover:bg-amber-50",
            disabledButton: "border border-amber-200 bg-amber-50 text-amber-700",
        };
    }

    return {
        brandName: "生保講座過去問解説",
        pricingText: "text-purple-700",
        cardActive: "border-purple-200 ring-1 ring-purple-100",
        badge: "border-purple-200 bg-purple-50 text-purple-700",
        accentText: "text-purple-700",
        dot: "bg-purple-400",
        primaryButton: "bg-purple-600 text-white hover:bg-purple-500 shadow-sm",
        secondaryButton: "border border-purple-200 bg-white text-purple-700 hover:bg-purple-50",
        disabledButton: "border border-purple-200 bg-purple-50 text-purple-700",
    };
});

const scopePlan = computed(() => {
    if (currentScope.value === "ippan") {
        return {
            price: "¥980",
            description: "生命保険一般課程の全ての解説を解放できます。",
            features: [
                "生命保険一般課程 全50解説を閲覧可能",
                "購入後すぐ、利用期限なしで見放題",
                "今後追加される解説も追加料金なしで閲覧可能",
            ],
            freeDescription: "生命保険一般課程の2025年1月〜6月実施フォームAを無料公開しています。",
            freeFeatures: ["生命保険一般課程 2025年1月〜6月 フォームA"],
        };
    }

    if (currentScope.value === "senmon") {
        return {
            price: "¥980",
            description: "生命保険専門課程の全ての解説を解放できます。",
            features: [
                "生命保険専門課程 全30解説を閲覧可能",
                "購入後すぐ、利用期限なしで見放題",
                "今後追加される解説も追加料金なしで閲覧可能",
            ],
            freeDescription: "生命保険専門課程の2025年4月〜8月実施フォームAを無料公開しています。",
            freeFeatures: ["生命保険専門課程 2025年4月〜8月 フォームA"],
        };
    }

    if (currentScope.value === "ouyou") {
        return {
            price: "¥980",
            description: "生命保険応用課程の全ての解説を解放できます。",
            features: [
                "生命保険応用課程 全30解説を閲覧可能",
                "購入後すぐ、利用期限なしで見放題",
                "今後追加される解説も追加料金なしで閲覧可能",
            ],
            freeDescription: "生命保険応用課程の2025年4月〜7月実施フォームAを無料公開しています。",
            freeFeatures: ["生命保険応用課程 2025年4月〜7月 フォームA"],
        };
    }

    return {
        price: "¥1,980",
        description: "全科目・全年度・全フォームの解説を一括で解放",
        features: [
            "全科目・全年度・全フォームの解説を閲覧可能",
            "購入後すぐ、利用期限なしで見放題",
            "今後追加される解説も追加料金なしで閲覧可能",
        ],
        freeDescription: "各科目の最新年度フォームAを無料公開しています。",
        freeFeatures: ["生命保険計理を除く最新年度の科目 フォームA"],
    };
});
const freeRouteName = computed(() => {
    if (currentScope.value === "ippan") return "ippan.index";
    if (currentScope.value === "senmon") return "senmon.index";
    if (currentScope.value === "ouyou") return "ouyou.index";
    return "tests.index";
});
const tokushoRouteName = computed(() => {
    if (currentScope.value === "ippan") return "ippan.tokusho";
    if (currentScope.value === "senmon") return "senmon.tokusho";
    if (currentScope.value === "ouyou") return "ouyou.tokusho";
    return "tokusho";
});

const plans = computed(() => [
    {
        key: "premium",
        name: "プレミアムプラン",
        price: scopePlan.value.price,
        note: "買い切り・追加料金なし",
        description: scopePlan.value.description,
        features: scopePlan.value.features,
        cta: "プレミアムプランを始める",
        href: "billing.checkout",
        scope: currentScope.value,
        highlighted: true,
        badge: "おすすめ",
    },
    isBasicExamScope.value
        ? {
              key: "basic_bundle",
              name: "一般・専門・応用セット",
              price: "¥1,980",
              note: "買い切り・追加料金なし",
              description: "一般／専門／応用課程の全ての解説を解放できます。",
              features: [
                  "一般課程 全50解説を閲覧可能",
                  "専門課程 全30解説を閲覧可能",
                  "応用課程 全30解説を閲覧可能",
                  "個別購入より960円お得",
              ],
              cta: "一般・専門・応用セットで始める",
              href: "billing.checkout",
              scope: "basic",
              highlighted: false,
              badge: "おすすめセット",
          }
        : null,
].filter(Boolean));
</script>

<template>
    <SeihoTestLayout title="料金" :brand-name="scopeTheme.brandName" :site-scope="currentScope">
        <div class="container mx-auto px-5 sm:px-6 max-w-5xl py-8 md:py-20">
            <section class="text-center">
                <p class="text-sm font-semibold" :class="scopeTheme.pricingText">Pricing</p>
                <h1 class="mt-3 text-3xl md:text-5xl font-bold text-gray-900">
                    料金プラン
                </h1>
            </section>

            <section
                class="mt-10 grid gap-6"
                :class="plans.length === 1 ? 'mx-auto max-w-3xl' : 'md:grid-cols-2'"
            >
                <div
                    v-for="plan in plans"
                    :key="plan.key"
                    class="relative flex h-full flex-col rounded-2xl border bg-white p-6 shadow-sm"
                    :class="
                        plan.key === 'basic_bundle'
                            ? 'border-cyan-200 ring-1 ring-cyan-100'
                            : plan.highlighted
                            ? scopeTheme.cardActive
                            : 'border-gray-100'
                    "
                >
                    <div
                        v-if="plan.badge || (plan.key === 'premium' && hasPremium)"
                        class="absolute -top-3 right-6 rounded-full border px-3 py-1 text-xs font-semibold"
                        :class="plan.key === 'basic_bundle' ? 'border-cyan-200 bg-cyan-50 text-cyan-700' : scopeTheme.badge"
                    >
                        {{
                            (plan.key === "premium" && hasPremium) ||
                            (plan.key === "basic_bundle" && hasBasicPremium)
                                ? "購入済み"
                                : plan.badge
                        }}
                    </div>

                    <div class="flex-1">
                        <div
                            class="font-semibold"
                            :class="
                                plan.key === 'premium' || plan.key === 'basic_bundle'
                                    ? [
                                          'inline-flex rounded-full border px-3 py-1 text-sm font-bold',
                                          plan.key === 'basic_bundle'
                                              ? 'border-cyan-200 bg-cyan-50 text-cyan-700'
                                              : scopeTheme.badge,
                                      ]
                                    : ['text-sm', scopeTheme.accentText]
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
                            <div
                                class="text-4xl font-bold tracking-tight"
                                :class="plan.key === 'basic_bundle' ? 'text-cyan-700' : 'text-gray-900'"
                            >
                                {{ plan.price }}
                                <span v-if="plan.key === 'premium' || plan.key === 'basic_bundle'" class="text-sm font-bold text-gray-500">（税込）</span>
                            </div>
                        </div>
                        <p
                            v-if="plan.key === 'premium' || plan.key === 'basic_bundle'"
                            class="mt-3 inline-flex items-center rounded-full border border-emerald-200 bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700"
                        >
                            <span aria-hidden="true" class="mr-1">✓</span>多くの受験者にご利用いただいています！
                        </p>
                        <div
                            v-if="plan.key === 'premium' || plan.key === 'basic_bundle'"
                            class="relative mt-4 rounded-lg border border-slate-100 bg-slate-50/80 px-3 pb-2.5 pt-5"
                        >
                            <span class="absolute -top-2.5 left-3 rounded-full border border-slate-200 bg-white px-2 py-0.5 text-[10px] font-bold text-slate-500">対応決済</span>
                            <div class="flex flex-wrap items-center gap-1.5">
                                <span class="rounded border border-blue-100 bg-blue-50 px-1.5 py-0.5 text-[10px] font-extrabold italic tracking-wide text-blue-700">VISA</span>
                                <span class="rounded border border-red-100 bg-red-50 px-1.5 py-0.5 text-[10px] font-extrabold tracking-tight text-red-600">Mastercard</span>
                                <span class="rounded border border-sky-100 bg-sky-50 px-1.5 py-0.5 text-[10px] font-extrabold tracking-tight text-sky-700">AMEX</span>
                                <span class="rounded border border-emerald-100 bg-emerald-50 px-1.5 py-0.5 text-[10px] font-extrabold tracking-wide text-emerald-700">JCB</span>
                                <span class="rounded border border-slate-200 bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-800">Apple Pay</span>
                                <span class="rounded border border-slate-200 bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-700">G Pay</span>
                                <span class="rounded border border-violet-100 bg-violet-50 px-1.5 py-0.5 text-[10px] font-bold text-violet-700">Link</span>
                            </div>
                        </div>

                        <ul class="mt-5 space-y-3 text-sm text-gray-600">
                            <li
                                v-for="feature in plan.features"
                                :key="feature"
                                class="flex items-start gap-2"
                            >
                                <span
                                    class="mt-1 h-2 w-2 rounded-full"
                                    :class="plan.key === 'basic_bundle' ? 'bg-cyan-400' : scopeTheme.dot"
                                ></span>
                                <span>{{ feature }}</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <Link
                            v-if="
                                (plan.key === 'premium' && !hasPremium) ||
                                (plan.key === 'basic_bundle' && !hasBasicPremium)
                            "
                            :href="
                                route(
                                    plan.href,
                                    {
                                        ...(props.returnTo ? { return_to: props.returnTo } : {}),
                                        scope: plan.scope,
                                    },
                                )
                            "
                            class="inline-flex w-full items-center justify-center gap-2 rounded-full px-5 py-3 text-base font-semibold transition"
                            :class="
                                plan.highlighted
                                    ? scopeTheme.primaryButton
                                    : plan.key === 'basic_bundle'
                                      ? 'border border-cyan-200 bg-cyan-600 text-white hover:bg-cyan-500 shadow-sm'
                                    : scopeTheme.secondaryButton
                            "
                        >
                            {{ plan.cta }}
                        </Link>
                        <button
                            v-else-if="
                                (plan.key === 'premium' && hasPremium) ||
                                (plan.key === 'basic_bundle' && hasBasicPremium)
                            "
                            type="button"
                            disabled
                            class="inline-flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-full px-5 py-3 text-base font-semibold"
                            :class="plan.key === 'basic_bundle' ? 'border border-cyan-200 bg-cyan-50 text-cyan-700' : scopeTheme.disabledButton"
                        >
                            購入済み
                        </button>
                    </div>
                </div>
            </section>

            <section class="mx-auto mt-5 max-w-3xl rounded-xl border border-gray-200 bg-slate-100 px-4 py-4 text-sm font-medium leading-relaxed text-gray-700 shadow-sm">
                <div class="flex flex-wrap items-center gap-2">
                    <p class="font-bold text-gray-900">カード情報は当サイトに一切保存されません</p>
                    <span class="inline-flex items-center rounded-full border border-slate-200 bg-white px-2.5 py-1 text-[11px] font-bold leading-none text-slate-500 shadow-sm">
                        Powered by <span class="ml-1 text-[#635bff]">Stripe</span>
                    </span>
                </div>
                <p class="mt-1">
                    決済は、世界中の企業で利用されるStripeを通じて安全に暗号化して処理されます。
                </p>
            </section>

            <div class="mt-5 text-center text-sm text-gray-600">
                一部無料でご利用いただけます。
                <Link
                    :href="route(freeRouteName)"
                    class="font-semibold underline underline-offset-4"
                    :class="scopeTheme.accentText"
                >
                    無料で見る
                </Link>
            </div>

            <section class="mx-auto mt-10 max-w-3xl border-t border-gray-100 pt-8 text-base text-gray-600">
                <h2 class="text-lg font-bold text-gray-900">ご注意</h2>
                <ul class="mt-3 list-disc list-inside space-y-2">
                    <li>問題文は掲載しておりません。</li>
                    <li>内容は随時更新される場合があります。</li>
                    <li>プレミアムの同時利用は2端末までです。</li>
                    <li>決済はStripeを利用しています。カード情報はStripeが安全に管理し、当サイト運営者が確認することはできません。</li>
                </ul>
                <div class="mt-4 flex flex-wrap gap-x-5 gap-y-2 text-sm font-semibold">
                    <Link :href="route(tokushoRouteName)" class="text-gray-700 underline underline-offset-4 hover:text-gray-900">
                        特商法に基づく表記
                    </Link>
                    <Link :href="route('contact.index')" class="text-gray-700 underline underline-offset-4 hover:text-gray-900">
                        お問い合わせ
                    </Link>
                </div>
            </section>
        </div>
    </SeihoTestLayout>
</template>
