<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import SisterSiteLinks from "@/Components/SisterSiteLinks.vue";

const IPPAN_YEARS = [2025, 2024, 2023, 2022, 2021];
const IPPAN_PERIODS = [
    {
        id: "h1",
        months: "1-6",
        label: "1月〜6月実施",
        forms: ["a", "b", "c", "d", "e"],
        note: "フォームA / フォームB / フォームC / フォームD / フォームE",
    },
    {
        id: "h2",
        months: "7-12",
        label: "7月〜12月実施",
        forms: ["a", "b", "c", "d", "e"],
        note: "フォームA / フォームB / フォームC / フォームD / フォームE",
    },
];

const activePeriodId = ref(IPPAN_PERIODS[0].id);
const activePeriod = computed(
    () => IPPAN_PERIODS.find((period) => period.id === activePeriodId.value) ?? IPPAN_PERIODS[0],
);
const page = usePage();
const hasPremium = computed(() => page.props.auth?.hasPremiumIppan === true);
const pricingHref = computed(() =>
    route("pricing", { scope: "ippan", return_to: String(page.url ?? "/ippan") }),
);

const CIRCLE_NUMBERS = { a: "①", b: "②", c: "③", d: "④", e: "⑤" };

const getFormLabel = (year, periodId, form) => {
    if (year === 2021 && periodId === "h2") {
        return `フォーム${CIRCLE_NUMBERS[form]}`;
    }
    return `フォーム${form.toUpperCase()}`;
};

const getFormHref = (year, period, form) => {
    return route("ippan.test", {
        year,
        months: period.months,
        form,
    });
};
</script>

<template>
    <SeihoTestLayout title="生命保険一般課程 過去問解説" brand-name="生命保険一般課程 過去問解説">
        <div class="container mx-auto m-10 max-w-6xl px-5 sm:px-6">
            <div class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white p-6 shadow-sm sm:rounded-3xl sm:p-8">
                <div
                    class="absolute -right-24 -top-24 hidden h-56 w-56 rounded-full bg-gradient-to-br from-pink-50 to-fuchsia-50 opacity-35 blur-3xl md:block"
                />

                <div class="relative">
                    <h1 class="sr-only">生命保険一般課程 過去問解説</h1>
                    <div
                        v-if="!hasPremium"
                        class="mb-5 rounded-xl border border-pink-100 bg-pink-50/50 px-3 py-2 text-left text-[12px] leading-5 text-fuchsia-700 sm:px-4 sm:py-2.5 sm:text-center"
                    >
                        <span class="block font-semibold tracking-wide">
                            生命保険一般課程の過去問解説ページです。
                        </span>
                        <span class="mt-0.5 block text-[11px] font-medium text-fuchsia-700/90">
                            2025年1月〜6月実施フォームAを無料でお試しいただけます。
                            <Link
                                :href="pricingHref"
                                class="ml-1 hidden font-semibold text-fuchsia-700 underline decoration-fuchsia-300 underline-offset-2 transition hover:text-fuchsia-800 md:inline"
                            >
                                ▶ すべての解説をまとめて閲覧
                            </Link>
                        </span>
                        <Link
                            :href="pricingHref"
                            class="mt-1 inline-block text-xs font-semibold text-fuchsia-700 underline decoration-fuchsia-300 underline-offset-2 transition hover:text-fuchsia-800 md:hidden"
                        >
                            ▶ すべての解説をまとめて閲覧
                        </Link>
                    </div>

                    <div
                        v-if="hasPremium"
                        class="mb-5 inline-flex w-fit items-center gap-2 rounded-full border border-pink-300 bg-gradient-to-r from-pink-50 to-fuchsia-50 px-4 py-2 text-xs font-semibold text-fuchsia-800 shadow-sm max-sm:gap-1.5 max-sm:px-3 max-sm:py-1.5"
                    >
                        <img src="/images/bolt.svg" alt="" class="h-3.5 w-3.5" />
                        <span>プレミアムユーザー</span>
                        <span class="rounded-full bg-pink-200/70 px-2 py-0.5 text-[10px] font-bold text-fuchsia-900 max-sm:px-1.5 max-sm:text-[9px]">
                            ALL ACCESS
                        </span>
                    </div>

                    <SisterSiteLinks current-site="ippan" />

                    <p class="mb-3 text-xs font-semibold text-gray-500">試験期間を選択してください</p>
                    <div class="flex flex-wrap gap-2">
                        <button
                            v-for="period in IPPAN_PERIODS"
                            :key="period.id"
                            type="button"
                            @click="activePeriodId = period.id"
                            class="rounded-full border px-4 py-2 text-[13px] font-semibold transition-colors sm:text-sm"
                            :class="
                                activePeriodId === period.id
                                    ? 'border-transparent bg-gradient-to-r from-pink-400 to-fuchsia-400 text-white shadow'
                                    : 'border-gray-200 bg-white text-gray-700 hover:border-pink-200'
                            "
                        >
                            {{ period.label }}
                        </button>
                    </div>


                    <div class="mt-6 divide-y divide-gray-100 rounded-2xl border border-gray-100 bg-white">
                        <div v-for="year in IPPAN_YEARS" :key="`${activePeriod.id}-${year}`" class="p-4 md:p-6">
                            <div class="flex items-center gap-2">
                                <div class="text-base font-bold text-gray-900 sm:text-lg">
                                    {{ year }}年
                                </div>
                                <span
                                    v-if="Number(year) === 2025 && !hasPremium"
                                    class="inline-flex items-center rounded-full border border-pink-300 bg-pink-50 px-2.5 py-1 text-xs font-semibold text-fuchsia-700"
                                >
                                    2025年1月〜6月 フォームA無料
                                </span>
                            </div>

                            <div class="mt-3 grid grid-cols-2 gap-2 sm:mt-4 sm:flex sm:flex-wrap sm:gap-3">
                                <template v-for="form in activePeriod.forms" :key="`${activePeriod.id}-${year}-${form}`">
                                    <Link
                                        v-if="getFormHref(year, activePeriod, form)"
                                        :href="getFormHref(year, activePeriod, form)"
                                        class="inline-flex w-full items-center justify-center whitespace-nowrap rounded-full border border-pink-200 bg-white px-2 py-1.5 text-[12px] font-semibold text-fuchsia-700 transition hover:bg-pink-50 sm:w-auto sm:px-4 sm:py-2 sm:text-sm"
                                    >
                                        {{ getFormLabel(year, activePeriod.id, form) }}
                                    </Link>
                                    <span
                                        v-else
                                        class="inline-flex w-full cursor-not-allowed items-center justify-center whitespace-nowrap rounded-full border border-gray-200 bg-gray-50 px-2 py-1.5 text-[12px] font-semibold text-gray-500 sm:w-auto sm:px-4 sm:py-2 sm:text-sm"
                                    >
                                        {{ getFormLabel(year, activePeriod.id, form) }}
                                    </span>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </SeihoTestLayout>
</template>
