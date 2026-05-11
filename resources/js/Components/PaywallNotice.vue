<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const scope = computed(() => {
    const url = String(page.url ?? "");
    if (url.startsWith("/daigaku")) return "daigaku";
    if (url.startsWith("/ippan")) return "ippan";
    if (url.startsWith("/senmon")) return "senmon";
    if (url.startsWith("/ouyou")) return "ouyou";
    return "seiho";
});
const pricingHref = computed(() => {
    if (scope.value === "daigaku") {
        return route("daigaku.pricing", { return_to: page.url });
    }

    return route("pricing", {
        return_to: page.url,
        ...(scope.value !== "seiho" ? { scope: scope.value } : {}),
    });
});
const priceNumberText = computed(() =>
    ["ippan", "senmon", "ouyou"].includes(scope.value)
        ? "480"
        : scope.value === "daigaku"
          ? "980"
          : "1,980",
);
const unlockedCountText = computed(() => {
    if (scope.value === "daigaku") return "全90解説";
    if (scope.value === "ippan") return "全50解説";
    if (scope.value === "senmon" || scope.value === "ouyou") return "全30解説";
    return "全144解説";
});
const paywallText = computed(() => {
    if (scope.value === "daigaku") {
        return {
            lead: "一度の購入で、生保大学の全科目・全年度の解説が見放題",
            cta: "全ての解説を解放",
        };
    }

    if (scope.value === "ippan") {
        return {
            lead: "一度の購入で、生命保険一般課程の解説が見放題",
            cta: "一般課程の解説を解放",
        };
    }

    if (scope.value === "senmon") {
        return {
            lead: "一度の購入で、生命保険専門課程の解説が見放題",
            cta: "専門課程の解説を解放",
        };
    }

    if (scope.value === "ouyou") {
        return {
            lead: "一度の購入で、生命保険応用課程の解説が見放題",
            cta: "応用課程の解説を解放",
        };
    }

    return {
        lead: "一度の購入で、全科目・全年度の解説が見放題",
        cta: "全ての解説を解放",
    };
});
const tone = computed(() => {
    if (scope.value === "daigaku") {
        return {
              card: "border-blue-100",
              dash: "border-blue-200",
              title: "text-slate-900",
              text: "text-slate-600",
              priceSub: "text-slate-500",
              countAccent: "text-blue-700",
              cta: "bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-400 hover:to-cyan-400",
        };
    }

    if (scope.value === "ippan") {
        return {
            card: "border-pink-100",
            dash: "border-pink-200",
            title: "text-slate-900",
            text: "text-slate-600",
            priceSub: "text-slate-500",
            countAccent: "text-fuchsia-700",
            cta: "bg-gradient-to-r from-pink-500 to-fuchsia-500 hover:from-pink-400 hover:to-fuchsia-400",
        };
    }

    if (scope.value === "senmon") {
        return {
            card: "border-emerald-100",
            dash: "border-emerald-200",
            title: "text-slate-900",
            text: "text-slate-600",
            priceSub: "text-slate-500",
            countAccent: "text-emerald-700",
            cta: "bg-gradient-to-r from-emerald-500 to-lime-500 hover:from-emerald-400 hover:to-lime-400",
        };
    }

    if (scope.value === "ouyou") {
        return {
            card: "border-amber-100",
            dash: "border-amber-200",
            title: "text-slate-900",
            text: "text-slate-600",
            priceSub: "text-slate-500",
            countAccent: "text-amber-700",
            cta: "bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-400 hover:to-orange-400",
        };
    }

    return {
        card: "border-purple-100",
        dash: "border-purple-200",
        title: "text-slate-900",
        text: "text-slate-600",
        priceSub: "text-slate-500",
        countAccent: "text-purple-700",
        cta: "bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-400 hover:to-indigo-400",
    };
});
</script>

<script lang="ts">
export default {
    name: "PaywallNotice",
};
</script>

<template>
    <div id="paywall" class="relative mt-0 scroll-mt-24">
        <div class="rounded-2xl border bg-white px-5 py-4 text-center sm:px-8 sm:py-5" :class="tone.card">
            <div class="mx-auto flex max-w-3xl items-center gap-3">
                <span class="h-px flex-1 border-t border-dashed" :class="tone.dash"></span>
                <p class="text-base font-semibold tracking-tight sm:text-lg" :class="tone.title">ここから先は</p>
                <span class="h-px flex-1 border-t border-dashed" :class="tone.dash"></span>
            </div>
            <p class="mt-2 text-xs" :class="tone.priceSub">買い切り</p>
            <p class="mt-1 text-2xl font-semibold leading-none sm:text-3xl" :class="tone.title">
                ￥{{ priceNumberText }}
            </p>
            <p class="mt-2 text-xs" :class="tone.text">
                {{ paywallText.lead }}
            </p>
            <p class="mt-0.5 text-xs" :class="tone.priceSub">
                <span class="font-semibold" :class="tone.countAccent">{{ unlockedCountText }}</span
                >が閲覧可能（今後の追加コンテンツを含む）
            </p>
            <div class="mt-3 mb-1 flex justify-center">
                <Link
                    :href="pricingHref"
                    class="inline-flex min-w-[220px] items-center justify-center rounded-xl px-7 py-3 text-base font-semibold text-white transition"
                    :class="tone.cta"
                >
                    {{ paywallText.cta }}
                </Link>
            </div>
            <div class="mx-auto mt-5 flex max-w-3xl items-center gap-3">
                <span class="h-px flex-1 border-t border-dashed" :class="tone.dash"></span>
            </div>
        </div>
    </div>
</template>
