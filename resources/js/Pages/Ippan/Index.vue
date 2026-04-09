<script setup>
import { Link } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import AdSenseUnit from "@/Components/AdSenseUnit.vue";
import SisterSiteLinks from "@/Components/SisterSiteLinks.vue";

const IPPAN_YEARS = [2025, 2024, 2023];
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

const getFormHref = (year, period, form) =>
    route("ippan.test", {
        year,
        months: period.months,
        form,
    });
</script>

<template>
    <SeihoTestLayout title="生命保険一般課程 過去問解説" brand-name="生命保険一般課程 過去問解説">
        <div class="container mx-auto m-10 max-w-6xl px-5 sm:px-6">
            <div class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white p-6 shadow-sm sm:rounded-3xl sm:p-8">
                <div
                    class="absolute -right-24 -top-24 hidden h-56 w-56 rounded-full bg-gradient-to-br from-pink-50 to-fuchsia-50 opacity-35 blur-3xl md:block"
                />

                <div class="relative">
                    <div
                        class="mb-5 rounded-xl border border-pink-100 bg-pink-50/50 px-3 py-2 text-left text-[12px] leading-5 text-fuchsia-700 sm:px-4 sm:py-2.5 sm:text-center"
                    >
                        <span class="block font-semibold tracking-wide">
                            生命保険一般課程の過去問解説ページです。
                        </span>
                        <span class="mt-0.5 block text-[11px] font-medium text-fuchsia-700/90">
                            試験期間・年度・フォーム別に順次公開していきます。
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
                                <span class="inline-flex items-center rounded-full border border-gray-300 bg-gray-50 px-2 py-0.5 text-[11px] font-semibold text-gray-600">
                                    準備中
                                </span>
                            </div>

                            <div class="mt-3 grid grid-cols-2 gap-2 sm:mt-4 sm:flex sm:flex-wrap sm:gap-3">
                                <template v-for="form in activePeriod.forms" :key="`${activePeriod.id}-${year}-${form}`">
                                    <Link
                                        v-if="getFormHref(year, activePeriod, form)"
                                        :href="getFormHref(year, activePeriod, form)"
                                        class="inline-flex w-full items-center justify-center whitespace-nowrap rounded-full border border-pink-200 bg-white px-2 py-1.5 text-[12px] font-semibold text-fuchsia-700 transition hover:bg-pink-50 sm:w-auto sm:px-4 sm:py-2 sm:text-sm"
                                    >
                                        フォーム{{ form.toUpperCase() }}
                                    </Link>
                                    <span
                                        v-else
                                        class="inline-flex w-full cursor-not-allowed items-center justify-center whitespace-nowrap rounded-full border border-gray-200 bg-gray-50 px-2 py-1.5 text-[12px] font-semibold text-gray-500 sm:w-auto sm:px-4 sm:py-2 sm:text-sm"
                                    >
                                        フォーム{{ form.toUpperCase() }}
                                    </span>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <AdSenseUnit ad-slot="5135479704" />
            </div>
        </div>
    </SeihoTestLayout>
</template>
