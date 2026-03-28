<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const scope = computed(() =>
    String(page.url ?? "").startsWith("/daigaku") ? "daigaku" : "seiho",
);
const pricingHref = computed(() =>
    scope.value === "daigaku"
        ? route("daigaku.pricing", { return_to: page.url })
        : route("pricing", { return_to: page.url }),
);
const priceNumberText = computed(() => (scope.value === "daigaku" ? "980" : "1,980"));
const unlockedCountText = computed(() =>
    scope.value === "daigaku" ? "全54解説" : "全120解説",
);
const tone = computed(() =>
    scope.value === "daigaku"
        ? {
              card: "border-blue-100",
              dash: "border-blue-200",
              title: "text-slate-900",
              text: "text-slate-600",
              priceSub: "text-slate-500",
              countAccent: "text-blue-700",
              cta: "bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-400 hover:to-cyan-400",
          }
        : {
              card: "border-purple-100",
              dash: "border-purple-200",
              title: "text-slate-900",
              text: "text-slate-600",
              priceSub: "text-slate-500",
              countAccent: "text-purple-700",
              cta: "bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-400 hover:to-indigo-400",
          },
);
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
                一度の購入で、全科目・全年度の解説が見放題
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
                    全ての解説を解放
                </Link>
            </div>
            <div class="mx-auto mt-5 flex max-w-3xl items-center gap-3">
                <span class="h-px flex-1 border-t border-dashed" :class="tone.dash"></span>
            </div>
        </div>
    </div>
</template>
