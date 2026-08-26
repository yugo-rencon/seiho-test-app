<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import SisterSiteLinks from "@/Components/SisterSiteLinks.vue";

const OUYOU_VISIBLE_YEARS = [2026, 2025, 2024, 2023, 2022, 2021];
const OUYOU_PERIODS = [
    {
        id: "apr-aug",
        label: "4月〜7月実施",
        forms: ["a", "b"],
        note: "フォームA / フォームB",
    },
    {
        id: "sep-mar",
        label: "8月〜3月実施",
        forms: ["a", "b", "c", "d"],
        note: "フォームA / フォームB / フォームC / フォームD",
    },
];

const activePeriodId = ref(OUYOU_PERIODS[0].id);
const activePeriod = computed(
    () => OUYOU_PERIODS.find((period) => period.id === activePeriodId.value) ?? OUYOU_PERIODS[0],
);
const visibleYears = computed(() =>
    activePeriod.value.id === "apr-aug"
        ? OUYOU_VISIBLE_YEARS
        : OUYOU_VISIBLE_YEARS.filter((year) => Number(year) !== 2026),
);
const page = usePage();
const hasPremium = computed(() => page.props.auth?.hasPremiumOuyou === true);
const pricingHref = computed(() =>
    route("pricing", { scope: "ouyou", return_to: String(page.url ?? "/ouyou") }),
);
const periodRouteKeyMap = {
    "apr-aug": "h1",
    "sep-mar": "h2",
};
const getOuyouRoute = (year, periodId, form) => {
    const period = periodRouteKeyMap[periodId] ?? "h1";
    return route("ouyou.test", {
        year: Number(year),
        period,
        form: String(form).toLowerCase(),
    });
};

const getFormLabel = (year, periodId, form) => {
    const numericYear = Number(year);
    const formKey = String(form).toLowerCase();

    if (periodId === "apr-aug" && (numericYear === 2021 || numericYear === 2022)) {
        if (formKey === "a") return "フォーム①";
        if (formKey === "b") return "フォーム②";
    }

    return `フォーム${formKey.toUpperCase()}`;
};
</script>

<template>
    <SeihoTestLayout title="生命保険応用課程 過去問解説" brand-name="生命保険応用課程 過去問解説">
        <div class="container mx-auto m-10 max-w-6xl px-5 sm:px-6">
            <div class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white p-6 shadow-sm sm:rounded-3xl sm:p-8">
                <div
                    class="absolute -right-24 -top-24 hidden h-56 w-56 rounded-full bg-gradient-to-br from-amber-100 to-orange-100 opacity-40 blur-3xl md:block"
                />

                <div class="relative">
                    <h1 class="sr-only">生命保険応用課程 過去問解説</h1>
                    <div
                        v-if="!hasPremium"
                        class="mb-4 rounded-xl border border-amber-200 bg-amber-50/80 px-3 py-2 text-center text-amber-800 sm:mb-5 sm:px-4 sm:py-3"
                    >
                        <p class="text-[13px] font-bold tracking-wide sm:text-sm">
                            生命保険応用課程の過去問解説サイト
                        </p>
                        <div class="mt-1 flex flex-wrap items-center justify-center gap-1.5 sm:gap-3">
                            <span class="min-w-0 text-center text-[10px] font-semibold text-amber-700/90 sm:text-xs">
                                ユーザー登録者数1000名突破！
                            </span>
                            <Link
                                :href="pricingHref"
                                class="inline-flex shrink-0 items-center gap-1 rounded-full border border-amber-200 bg-white px-2.5 py-1 text-[11px] font-bold text-amber-700 shadow-sm transition hover:border-amber-300 hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-1 sm:px-3 sm:text-xs"
                            >
                                すべての解説を見る <span aria-hidden="true">▶</span>
                            </Link>
                        </div>
                    </div>

                    <div
                        v-if="hasPremium"
                        class="mb-5 inline-flex w-fit items-center gap-2 rounded-full border border-amber-300 bg-gradient-to-r from-amber-50 to-orange-50 px-4 py-2 text-xs font-semibold text-amber-800 shadow-sm max-sm:gap-1.5 max-sm:px-3 max-sm:py-1.5"
                    >
                        <img src="/images/bolt.svg" alt="" class="h-3.5 w-3.5" />
                        <span>プレミアムユーザー</span>
                        <span class="rounded-full bg-amber-200/70 px-2 py-0.5 text-[10px] font-bold text-amber-900 max-sm:px-1.5 max-sm:text-[9px]">
                            ALL ACCESS
                        </span>
                    </div>

                    <SisterSiteLinks current-site="ouyou" class="mb-4" />

                    <p class="mb-3 text-xs font-semibold text-gray-500">試験期間を選択してください</p>
                    <div class="flex flex-wrap gap-2">
                        <button
                            v-for="period in OUYOU_PERIODS"
                            :key="period.id"
                            type="button"
                            @click="activePeriodId = period.id"
                            class="rounded-full border px-4 py-2 text-[13px] font-semibold transition-colors sm:text-sm"
                            :class="
                                activePeriodId === period.id
                                    ? 'border-transparent bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow'
                                    : 'border-gray-200 bg-white text-gray-700 hover:border-amber-300'
                            "
                        >
                            {{ period.label }}
                        </button>
                    </div>


                    <div class="mt-6 divide-y divide-gray-100 rounded-2xl border border-gray-100 bg-white">
                        <div v-for="year in visibleYears" :key="year" class="p-4 md:p-6">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-bold text-gray-900 sm:text-lg">
                                    {{ `${year}年` }}
                                </div>
                                <span
                                    v-if="Number(year) === 2026 && !hasPremium"
                                    class="inline-flex items-center rounded-full border border-amber-300 bg-amber-50 px-2.5 py-1 text-xs font-semibold text-amber-700"
                                >
                                    2026年4月〜7月 フォームA無料
                                </span>
                            </div>
                            <p
                                v-if="Number(year) === 2021"
                                class="mt-1 text-[11px] text-gray-500"
                            >
                                {{
                                    activePeriod.id === "apr-aug"
                                        ? "※2021年度は4月〜5月実施です。"
                                        : "※2021年度は8月〜1月実施です。"
                                }}
                            </p>

                            <div class="mt-3 grid grid-cols-2 gap-2 sm:mt-4 sm:flex sm:flex-wrap sm:gap-3">
                                <a
                                    v-for="form in activePeriod.forms"
                                    :key="`${year}-${form}`"
                                    :href="getOuyouRoute(year, activePeriod.id, form)"
                                    class="inline-flex w-full items-center justify-center whitespace-nowrap rounded-full border border-amber-200 bg-white px-2 py-1.5 text-[12px] font-semibold text-amber-700 transition hover:bg-amber-50 sm:w-auto sm:px-4 sm:py-2 sm:text-sm"
                                >
                                    {{ getFormLabel(year, activePeriod.id, form) }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </SeihoTestLayout>
</template>
