<script setup>
import { Link } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import SisterSiteLinks from "@/Components/SisterSiteLinks.vue";
import { HENGAKU_PERIODS, hengakuYearsForPeriod, hengakuTestRoute } from "@/constants/hengaku";

const periods = HENGAKU_PERIODS;
const activePeriodId = ref(periods[0].id);
const activePeriod = computed(() => periods.find((period) => period.id === activePeriodId.value) ?? periods[0]);
const visibleYears = computed(() => hengakuYearsForPeriod(activePeriod.value.id));
</script>

<template>
    <SeihoTestLayout title="変額保険販売資格 過去問解説" site-scope="hengaku">
        <div class="container mx-auto my-10 max-w-6xl px-5 sm:px-6">
            <div class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white p-6 shadow-sm sm:rounded-3xl sm:p-8">
                <div class="pointer-events-none absolute -right-24 -top-24 hidden h-56 w-56 rounded-full bg-gradient-to-br from-teal-100 to-cyan-100 opacity-40 blur-3xl md:block" />
                <div class="relative">
                    <h1 class="sr-only">変額保険販売資格 過去問解説</h1>
                    <div class="mb-4 rounded-xl border border-teal-200 bg-teal-50/80 px-3 py-2 text-center text-teal-800 sm:mb-5 sm:px-4 sm:py-3">
                        <p class="text-[13px] font-bold tracking-wide sm:text-sm">
                            <span class="sm:hidden">変額保険の過去問解説サイト</span>
                            <span class="hidden sm:inline">変額保険販売資格の過去問解説サイト</span>
                        </p>
                        <div class="mt-1 flex flex-wrap items-center justify-center gap-1.5 sm:gap-3">
                            <span class="min-w-0 text-center text-[10px] font-semibold text-teal-700/90 sm:text-xs">
                                シリーズ累計ユーザー数 2,000名突破！
                            </span>
                            <a
                                href="#hengaku-period-label"
                                class="inline-flex shrink-0 items-center gap-1 rounded-full border border-teal-200 bg-white px-2.5 py-1 text-[11px] font-bold text-teal-700 shadow-sm transition hover:border-teal-300 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-1 sm:px-3 sm:text-xs"
                            >
                                すべての解説を見る <span aria-hidden="true">▶</span>
                            </a>
                        </div>
                    </div>
                    <SisterSiteLinks current-site="hengaku" class="mb-4" />

                    <p id="hengaku-period-label" class="mb-3 text-xs font-semibold text-gray-500">試験期間を選択してください</p>
                    <div class="flex flex-wrap gap-2" role="group" aria-labelledby="hengaku-period-label">
                        <button
                            v-for="period in periods" :key="period.id" type="button"
                            :aria-pressed="activePeriodId === period.id"
                            class="rounded-full border px-4 py-2 text-[13px] font-semibold transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-teal-500 focus-visible:ring-offset-2 sm:text-sm"
                            :class="activePeriodId === period.id ? 'border-transparent bg-gradient-to-r from-teal-600 to-cyan-600 text-white shadow' : 'border-gray-200 bg-white text-gray-700 hover:border-teal-300'"
                            @click="activePeriodId = period.id"
                        >{{ period.label }}</button>
                    </div>

                    <div class="mt-6 divide-y divide-gray-100 rounded-2xl border border-gray-100 bg-white">
                        <section v-for="year in visibleYears" :key="`${activePeriod.id}-${year}`" class="p-4 md:p-6">
                            <h2 class="text-base font-bold text-gray-900 sm:text-lg">{{ `${year}年` }}</h2>
                            <div class="mt-3 grid grid-cols-2 gap-2 sm:mt-4 sm:flex sm:flex-wrap sm:gap-3">
                                <template v-for="form in activePeriod.forms" :key="form">
                                    <Link
                                        :href="route(hengakuTestRoute(year, activePeriod.id, form))"
                                        class="inline-flex w-full items-center justify-center whitespace-nowrap rounded-full border border-teal-200 bg-white px-2 py-1.5 text-[12px] font-semibold text-teal-700 transition hover:bg-teal-50 sm:w-auto sm:px-4 sm:py-2 sm:text-sm">
                                        フォーム{{ form.toUpperCase() }}
                                    </Link>
                                </template>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </SeihoTestLayout>
</template>
