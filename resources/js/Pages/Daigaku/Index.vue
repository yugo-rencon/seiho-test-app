<script setup>
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const DAIGAKU_FORMS = ["a", "b", "c"];
const DAIGAKU_VISIBLE_YEARS = [2025, 2024, 2023];
const DAIGAKU_SECTIONS = [
    {
        id: "shikumi-kojin",
        title: "生命保険のしくみと個人保険商品",
        description: "大学課程試験の解説を年度・フォーム別に順次公開します。",
        years: DAIGAKU_VISIBLE_YEARS,
    },
    {
        id: "fp-compliance",
        title: "ファイナンシャルプランニングとコンプライアンス",
        description: "大学課程試験の解説を年度・フォーム別に順次公開します。",
        years: DAIGAKU_VISIBLE_YEARS,
    },
    {
        id: "tax-sozoku",
        title: "生命保険と税・相続",
        description: "大学課程試験の解説を年度・フォーム別に順次公開します。",
        years: DAIGAKU_VISIBLE_YEARS,
    },
    {
        id: "sisan-unyou",
        title: "資産運用知識",
        description: "大学課程試験の解説を年度・フォーム別に順次公開します。",
        years: DAIGAKU_VISIBLE_YEARS,
    },
    {
        id: "houjin-consulting",
        title: "企業向け保険商品とコンサルティング",
        description: "大学課程試験の解説を年度・フォーム別に順次公開します。",
        years: DAIGAKU_VISIBLE_YEARS,
    },
    {
        id: "social-security",
        title: "社会保障制度",
        description: "大学課程試験の解説を年度・フォーム別に順次公開します。",
        years: DAIGAKU_VISIBLE_YEARS,
    },
];

const activeSectionId = ref(DAIGAKU_SECTIONS[0]?.id ?? "");
const activeSection = computed(() =>
    DAIGAKU_SECTIONS.find((section) => section.id === activeSectionId.value),
);

const getDaigakuRoute = (sectionId, year, form) => {
    if (sectionId !== "shikumi-kojin") return null;

    const publishedRouteNames = new Set([
        "daigaku.shikumi-kojin2025a",
        "daigaku.shikumi-kojin2025b",
        "daigaku.shikumi-kojin2025c",
        "daigaku.shikumi-kojin2024a",
        "daigaku.shikumi-kojin2024b",
        "daigaku.shikumi-kojin2024c",
        "daigaku.shikumi-kojin2023a",
        "daigaku.shikumi-kojin2023b",
        "daigaku.shikumi-kojin2023c",
    ]);

    const routeName = `daigaku.shikumi-kojin${Number(year)}${String(form).toLowerCase()}`;
    if (publishedRouteNames.has(routeName)) {
        return route(routeName);
    }

    return null;
};

const isYearPreparing = (sectionId, year) => {
    let publishedCount = 0;
    for (const form of DAIGAKU_FORMS) {
        if (getDaigakuRoute(sectionId, year, form)) {
            publishedCount += 1;
        }
    }
    return publishedCount === 0;
};
</script>

<template>
    <SeihoTestLayout title="生命保険大学課程 過去問解説">
        <div class="container mx-auto m-10 max-w-6xl px-5 sm:px-6">
            <div class="relative overflow-hidden rounded-2xl border border-gray-100 bg-white p-6 shadow-sm sm:rounded-3xl sm:p-8">
                <div
                    class="absolute -right-24 -top-24 hidden h-56 w-56 rounded-full bg-gradient-to-br from-indigo-100 to-cyan-100 opacity-40 blur-3xl md:block"
                />

                <div class="relative">
                    <div
                        class="mb-4 rounded-xl border border-indigo-200 bg-indigo-50/80 px-3 py-2 text-left text-[12px] leading-5 text-indigo-800 sm:mb-5 sm:px-4 sm:py-2.5 sm:text-center"
                    >
                        <span class="block font-semibold tracking-wide">
                            生命保険大学課程試験の過去問解説ページです。
                        </span>
                        <span class="mt-0.5 block text-[11px] font-medium text-indigo-700/90">
                            科目・年度・フォームごとに順次公開していきます。
                        </span>
                    </div>

                    <p class="mb-3 text-xs font-semibold text-gray-500">科目を選択してください</p>
                    <div class="flex flex-wrap gap-2">
                        <button
                            v-for="section in DAIGAKU_SECTIONS"
                            :key="section.id"
                            type="button"
                            @click="activeSectionId = section.id"
                            class="rounded-full border px-4 py-2 font-semibold transition-colors"
                            :class="[
                                section.title === 'ファイナンシャルプランニングとコンプライアンス' ? 'text-[13px] sm:text-sm' : 'text-sm',
                                activeSectionId === section.id
                                    ? 'border-transparent bg-gradient-to-r from-blue-500 to-cyan-500 text-white shadow'
                                    : 'border-gray-200 bg-white text-gray-700 hover:border-blue-300'
                            ]"
                        >
                            {{ section.title }}
                        </button>
                    </div>

                    <div v-if="activeSection" class="mt-8">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 h-8 w-1.5 rounded-full bg-gradient-to-b from-indigo-500 to-cyan-500"></div>
                            <div class="min-w-0">
                                <h2 class="text-2xl font-bold text-gray-900">{{ activeSection.title }}</h2>
                            </div>
                        </div>
                        <p class="mt-3 text-sm text-gray-600">{{ activeSection.description }}</p>

                        <div class="mt-6 divide-y divide-gray-100 rounded-2xl border border-gray-100 bg-white">
                            <div
                                v-for="year in activeSection.years"
                                :key="year"
                                class="p-4 md:p-6"
                            >
                                <div class="flex items-center gap-2">
                                    <div class="text-base font-bold text-gray-900 sm:text-lg">{{ year }}年度</div>
                                    <span
                                        v-if="isYearPreparing(activeSection.id, year)"
                                        class="inline-flex items-center rounded-full border border-gray-300 bg-gray-50 px-2 py-0.5 text-[11px] font-semibold text-gray-600"
                                    >
                                        準備中
                                    </span>
                                </div>

                                <div class="mt-3 grid grid-cols-3 gap-2 sm:mt-4 sm:flex sm:flex-wrap sm:gap-3">
                                    <a
                                        v-for="form in DAIGAKU_FORMS"
                                        :key="`${year}-${form}`"
                                        :href="getDaigakuRoute(activeSection.id, year, form) ?? undefined"
                                        class="inline-flex w-full items-center justify-center whitespace-nowrap rounded-full border px-2 py-1.5 text-[12px] font-semibold sm:w-auto sm:px-4 sm:py-2 sm:text-sm"
                                        :class="
                                            getDaigakuRoute(activeSection.id, year, form)
                                                ? 'border-blue-200 bg-white text-blue-700 transition hover:bg-blue-50'
                                                : 'cursor-not-allowed border-gray-200 bg-gray-50 text-gray-500'
                                        "
                                    >
                                        フォーム{{ form.toUpperCase() }}
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </SeihoTestLayout>
</template>
