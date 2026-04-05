<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import AdSenseUnit from "@/Components/AdSenseUnit.vue";
import SisterSiteLinks from "@/Components/SisterSiteLinks.vue";

const DAIGAKU_FORMS = ["a", "b", "c"];
const DAIGAKU_VISIBLE_YEARS = [2025, 2024, 2023, 2022, 2021];
const SHIKUMI_VISIBLE_YEARS = [2025, 2024, 2023, 2022, 2021];
const DAIGAKU_SECTIONS = [
    {
        id: "shikumi-kojin",
        title: "生命保険のしくみと個人保険商品",
        description: "大学課程試験の解説を年度・フォーム別に順次公開します。",
        years: SHIKUMI_VISIBLE_YEARS,
    },
    {
        id: "fp",
        title: "ファイナンシャルプランニングとコンプライアンス",
        buttonTitle: "ファイナンシャルプランニング",
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
const page = usePage();
const hasPremium = computed(() => page.props.auth?.hasPremiumDaigaku === true);
const pricingHref = computed(() =>
    route("daigaku.pricing", { return_to: String(page.url ?? "/daigaku") }),
);

const getDaigakuRoute = (sectionId, year, form) => {
    const sectionRoutePrefix = {
        "shikumi-kojin": "shikumi-kojin",
        fp: "fp",
        "tax-sozoku": "zei",
        "sisan-unyou": "sisan",
        "houjin-consulting": "kigyo",
        "social-security": "syakai",
    };

    const routePrefix = sectionRoutePrefix[sectionId];
    if (!routePrefix) return null;

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
        "daigaku.shikumi-kojin2022a",
        "daigaku.shikumi-kojin2022b",
        "daigaku.shikumi-kojin2022c",
        "daigaku.shikumi-kojin2021a",
        "daigaku.shikumi-kojin2021b",
        "daigaku.shikumi-kojin2021c",
        "daigaku.fp2025a",
        "daigaku.fp2025b",
        "daigaku.fp2025c",
        "daigaku.fp2024a",
        "daigaku.fp2024b",
        "daigaku.fp2024c",
        "daigaku.fp2023a",
        "daigaku.fp2023b",
        "daigaku.fp2023c",
        "daigaku.fp2022a",
        "daigaku.fp2022b",
        "daigaku.fp2022c",
        "daigaku.fp2021a",
        "daigaku.fp2021b",
        "daigaku.fp2021c",
        "daigaku.zei2025a",
        "daigaku.zei2025b",
        "daigaku.zei2025c",
        "daigaku.zei2024a",
        "daigaku.zei2024b",
        "daigaku.zei2024c",
        "daigaku.zei2023a",
        "daigaku.zei2023b",
        "daigaku.zei2023c",
        "daigaku.zei2022a",
        "daigaku.zei2022b",
        "daigaku.zei2022c",
        "daigaku.zei2021a",
        "daigaku.zei2021b",
        "daigaku.zei2021c",
        "daigaku.sisan2025a",
        "daigaku.sisan2025b",
        "daigaku.sisan2025c",
        "daigaku.sisan2024a",
        "daigaku.sisan2024b",
        "daigaku.sisan2024c",
        "daigaku.sisan2023a",
        "daigaku.sisan2023b",
        "daigaku.sisan2023c",
        "daigaku.sisan2022a",
        "daigaku.sisan2022b",
        "daigaku.sisan2022c",
        "daigaku.sisan2021a",
        "daigaku.sisan2021b",
        "daigaku.sisan2021c",
        "daigaku.kigyo2025a",
        "daigaku.kigyo2025b",
        "daigaku.kigyo2025c",
        "daigaku.kigyo2024a",
        "daigaku.kigyo2024b",
        "daigaku.kigyo2024c",
        "daigaku.kigyo2023a",
        "daigaku.kigyo2023b",
        "daigaku.kigyo2023c",
        "daigaku.kigyo2022a",
        "daigaku.kigyo2022b",
        "daigaku.kigyo2022c",
        "daigaku.kigyo2021a",
        "daigaku.kigyo2021b",
        "daigaku.kigyo2021c",
        "daigaku.syakai2025a",
        "daigaku.syakai2025b",
        "daigaku.syakai2025c",
        "daigaku.syakai2024a",
        "daigaku.syakai2024b",
        "daigaku.syakai2024c",
        "daigaku.syakai2023a",
        "daigaku.syakai2023b",
        "daigaku.syakai2023c",
        "daigaku.syakai2022a",
        "daigaku.syakai2022b",
        "daigaku.syakai2022c",
        "daigaku.syakai2021a",
        "daigaku.syakai2021b",
        "daigaku.syakai2021c",
    ]);

    const routeName = `daigaku.${routePrefix}${Number(year)}${String(form).toLowerCase()}`;
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
                        v-if="!hasPremium"
                        class="mb-4 rounded-xl border border-indigo-200 bg-indigo-50/80 px-3 py-2 text-left text-[12px] leading-5 text-indigo-800 sm:mb-5 sm:px-4 sm:py-2.5 sm:text-center"
                    >
                        <span class="block font-semibold tracking-wide">
                            生命保険大学課程の過去問解説ページです。
                        </span>
                        <span class="mt-0.5 block text-[11px] font-medium text-indigo-700/90">
                             最新年度フォームAからお試しください。
                            <Link
                                v-if="!hasPremium"
                                :href="pricingHref"
                                class="ml-1 hidden font-semibold text-blue-700 underline decoration-blue-300 underline-offset-2 transition hover:text-blue-800 md:inline"
                            >
                                ▶ すべての解説をまとめて閲覧
                            </Link>
                        </span>
                        <Link
                            v-if="!hasPremium"
                            :href="pricingHref"
                            class="mt-1 inline-block text-[11px] font-semibold text-blue-700 underline decoration-blue-300 underline-offset-2 transition hover:text-blue-800 md:hidden"
                        >
                            ▶ すべての解説をまとめて閲覧
                        </Link>
                    </div>

                    <div
                        v-if="hasPremium"
                        class="mb-5 inline-flex w-fit items-center gap-2 rounded-full border border-sky-300 bg-gradient-to-r from-sky-50 to-cyan-50 px-4 py-2 text-xs font-semibold text-sky-800 shadow-sm max-sm:gap-1.5 max-sm:px-3 max-sm:py-1.5"
                    >
                        <img src="/images/bolt.svg" alt="" class="h-3.5 w-3.5" />
                        <span>プレミアムユーザー</span>
                        <span class="rounded-full bg-sky-200/70 px-2 py-0.5 text-[10px] font-bold text-sky-900 max-sm:px-1.5 max-sm:text-[9px]">
                            ALL ACCESS
                        </span>
                    </div>

                    <SisterSiteLinks current-site="daigaku" class="mb-4" />

                    <p class="mb-3 text-xs font-semibold text-gray-500">科目を選択してください</p>
                    <div class="flex flex-wrap gap-2">
                        <button
                            v-for="section in DAIGAKU_SECTIONS"
                            :key="section.id"
                            type="button"
                            @click="activeSectionId = section.id"
                            class="rounded-full border px-4 py-2 text-[13px] font-semibold transition-colors sm:text-sm"
                            :class="[
                                activeSectionId === section.id
                                    ? 'border-transparent bg-gradient-to-r from-blue-500 to-cyan-500 text-white shadow'
                                    : 'border-gray-200 bg-white text-gray-700 hover:border-blue-300'
                            ]"
                        >
                            {{ section.buttonTitle ?? section.title }}
                        </button>
                    </div>

                    <div v-if="activeSection" class="mt-8">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 h-8 w-1.5 rounded-full bg-gradient-to-b from-indigo-500 to-cyan-500"></div>
                            <div class="min-w-0">
                                <h2 class="text-xl font-bold text-gray-900 sm:text-2xl">{{ activeSection.title }}</h2>
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
                                        v-if="!hasPremium && Number(year) === 2025"
                                        class="inline-flex items-center rounded-full border border-blue-300 bg-blue-50 px-2.5 py-1 text-xs font-semibold text-blue-700"
                                    >
                                        最新年度フォームA・無料
                                    </span>
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

            <div v-if="!hasPremium" class="mt-6">
                <AdSenseUnit ad-slot="5135479704" />
            </div>
        </div>
    </SeihoTestLayout>
</template>
