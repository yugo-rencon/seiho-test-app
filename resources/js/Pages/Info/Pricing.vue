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
            price: "¥480",
            description: "科目別ではなく、生命保険一般課程の対象年度・対象フォームの解説一式を解放できます。",
            features: [
                "生命保険一般課程 全50解説を閲覧可能",
                "広告なし。勉強の邪魔を一切しません",
                "今後の追加コンテンツも閲覧可",
            ],
            freeDescription: "生命保険一般課程の最新年度フォームAを無料公開しています。",
            freeFeatures: ["生命保険一般課程 最新年度 フォームA"],
        };
    }

    if (currentScope.value === "senmon") {
        return {
            price: "¥480",
            description: "科目別ではなく、生命保険専門課程の対象年度・対象フォームの解説一式を解放できます。",
            features: [
                "生命保険専門課程 全30解説を閲覧可能",
                "広告なし。勉強の邪魔を一切しません",
                "今後の追加コンテンツも閲覧可",
            ],
            freeDescription: "生命保険専門課程の最新年度フォームAを無料公開しています。",
            freeFeatures: ["生命保険専門課程 最新年度 フォームA"],
        };
    }

    if (currentScope.value === "ouyou") {
        return {
            price: "¥480",
            description: "科目別ではなく、生命保険応用課程の対象年度・対象フォームの解説一式を解放できます。",
            features: [
                "生命保険応用課程 全30解説を閲覧可能",
                "広告なし。勉強の邪魔を一切しません",
                "今後の追加コンテンツも閲覧可",
            ],
            freeDescription: "生命保険応用課程の最新年度フォームAを無料公開しています。",
            freeFeatures: ["生命保険応用課程 最新年度 フォームA"],
        };
    }

    return {
        price: "¥1,980",
        description: "全科目・全年度・全フォームの解説を一括で解放できます。",
        features: [
            "全科目・全年度・全フォームを閲覧可能",
            "広告なし。勉強の邪魔を一切しません",
            "今後の追加コンテンツも閲覧可",
        ],
        freeDescription: "全8科目の最新年度フォームAを無料公開しています。",
        freeFeatures: ["全8科目 最新年度 フォームA"],
    };
});
const freeRouteName = computed(() => {
    if (currentScope.value === "ippan") return "ippan.index";
    if (currentScope.value === "senmon") return "senmon.index";
    if (currentScope.value === "ouyou") return "ouyou.index";
    return "tests.index";
});

const plans = computed(() => [
    {
        key: "premium",
        name: "プレミアムプラン（買い切り）",
        price: scopePlan.value.price,
        note: "有料",
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
              name: "一般・専門・応用セット（買い切り）",
              price: "¥980",
              note: "セット販売",
              description: "科目別ではなく、一般課程・専門課程・応用課程の解説一式をまとめて解放できます。",
              features: [
                  "一般課程 全50解説を閲覧可能",
                  "専門課程 全30解説を閲覧可能",
                  "応用課程 全30解説を閲覧可能",
                  "個別購入より460円お得",
              ],
              cta: "一般・専門・応用セットで始める",
              href: "billing.checkout",
              scope: "basic",
              highlighted: false,
              badge: "おすすめセット",
          }
        : {
              key: "free",
              name: "フリープラン（一部無料）",
              price: "¥0",
              note: "無料",
              description: scopePlan.value.freeDescription,
              features: scopePlan.value.freeFeatures,
              cta: "無料で見る",
              href: freeRouteName.value,
          },
]);
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

            <section class="mt-10 grid gap-6 md:grid-cols-2">
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
                            class="text-sm font-semibold"
                            :class="plan.key === 'basic_bundle' ? 'text-cyan-700' : scopeTheme.accentText"
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
                                    class="mt-1 h-2 w-2 rounded-full"
                                    :class="plan.key === 'basic_bundle' ? 'bg-cyan-400' : scopeTheme.dot"
                                ></span>
                                <span>{{ feature }}</span>
                            </li>
                        </ul>
                        <p
                            v-if="plan.key === 'free'"
                            class="mt-3 text-xs text-gray-500"
                        >
                            ※最新年度以前は一部公開しています。
                        </p>
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
                        <Link
                            v-else
                            :href="route(plan.href)"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-full px-5 py-3 text-base font-semibold transition"
                            :class="scopeTheme.secondaryButton"
                        >
                            {{ plan.cta }}
                        </Link>
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
