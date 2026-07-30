<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import { EXAM_FORMS, INDEX_SECTIONS } from "@/constants/subjects";
import SectionHeader from "@/Pages/Index/SectionHeader.vue";
import SubjectTabs from "@/Pages/Index/SubjectTabs.vue";
import YearBlock from "@/Pages/Index/YearBlock.vue";
import SisterSiteLinks from "@/Components/SisterSiteLinks.vue";

// 科目タブ・年度/フォーム情報は constants 側に集約して再利用する
const sections = INDEX_SECTIONS;
const forms = EXAM_FORMS;
const defaultSectionId = sections.find((section) => section.id === "souron")?.id ?? sections[0]?.id ?? "";
const activeSectionId = ref(defaultSectionId);

// 現在選択中の科目オブジェクト（タイトル/年度/routePrefix など）を取得
const activeSection = computed(() =>
    sections.find((section) => section.id === activeSectionId.value),
);
const page = usePage();
const hasPremium = computed(() => page.props.auth?.hasPremium === true);
const isLoggedIn = computed(() => !!page.props.auth?.user);

// 「本番の点数を記録」リンク先:
// 該当セクション（#score-input）へ遷移
const mypageInputHref = computed(() => {
    return `${route("mypage")}#score-input`;
});
const pricingHref = computed(() =>
    route("pricing", { scope: "seiho", return_to: String(page.url ?? "/") }),
);

</script>

<template>
    <SeihoTestLayout title="生命保険講座過去問解説">
        <!-- 科目タブ -->
        <div id="index" class="container mx-auto px-5 sm:px-6 m-10 max-w-6xl">
            <div
                class="bg-white p-6 md:p-8 rounded-2xl sm:rounded-3xl shadow-sm md:shadow-md md:bg-white/80 md:backdrop-blur-sm border border-gray-100 relative overflow-hidden"
            >
                <div
                    class="absolute top-0 right-0 hidden w-64 h-64 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full filter blur-3xl opacity-30 -mr-32 -mt-32 md:block"
                ></div>

                <div class="relative">
                    <h1 class="sr-only">生命保険講座過去問解説</h1>
                    <div
                        v-if="!hasPremium"
                        class="mb-4 rounded-2xl border border-purple-100 bg-purple-50/70 px-3 py-2 text-center text-purple-800 sm:mb-5 sm:px-4 sm:py-3"
                    >
                        <p class="text-[13px] font-bold tracking-wide sm:text-sm">
                            生命保険講座の過去問解説サイト
                        </p>
                        <div class="mt-1 flex flex-wrap items-center justify-center gap-1.5 sm:gap-3">
                            <span class="min-w-0 text-center text-[10px] font-semibold text-purple-700/90 sm:text-xs">
                                プレミアムプランは累計700名以上が利用！
                            </span>
                            <Link
                                :href="pricingHref"
                                class="inline-flex shrink-0 items-center gap-1 rounded-full border border-purple-200 bg-white px-2.5 py-1 text-[11px] font-bold text-purple-700 shadow-sm transition hover:border-purple-300 hover:bg-purple-100 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-offset-1 sm:px-3 sm:text-xs"
                            >
                                すべての解説を見る <span aria-hidden="true">▶</span>
                            </Link>
                        </div>
                    </div>

                    <!-- プレミアム会員向けの状態表示 -->
                    <div
                        v-if="hasPremium"
                        class="mb-5 inline-flex w-fit items-center gap-2 rounded-full border border-purple-300 bg-gradient-to-r from-purple-50 to-indigo-50 px-4 py-2 text-xs font-semibold text-purple-800 shadow-sm max-sm:gap-1.5 max-sm:px-3 max-sm:py-1.5"
                    >
                        <img src="/images/bolt.svg" alt="" class="h-3.5 w-3.5" />
                        <span>プレミアムユーザー</span>
                        <span class="rounded-full bg-purple-200/70 px-2 py-0.5 text-[10px] font-bold text-purple-900 max-sm:px-1.5 max-sm:text-[9px]">
                            ALL ACCESS
                        </span>
                    </div>

                    <SisterSiteLinks current-site="seiho" class="mb-4" />
                    <p class="mb-3 text-xs font-semibold text-gray-500">
                        科目を選択してください
                    </p>
                    <!-- 科目タブ（共通化コンポーネント） -->
                    <SubjectTabs v-model="activeSectionId" :sections="sections" />

                    <div v-if="activeSection" class="mt-8">
                        <!-- 科目タイトル・実施時期・マイページ入力導線 -->
                        <SectionHeader
                            :section="activeSection"
                            :is-logged-in="isLoggedIn"
                            :mypage-input-href="mypageInputHref"
                        />

                        <div class="mt-6 divide-y divide-gray-100 border border-gray-100 rounded-2xl bg-white">
                            <!-- 年度ブロック（2024/2023/2022/2021） -->
                            <YearBlock
                                v-for="year in activeSection.years"
                                :key="year"
                                :year="year"
                                :route-prefix="activeSection.routePrefix"
                                :current-subject-id="activeSection.id"
                                :forms="forms"
                                :has-premium="hasPremium"
                            />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </SeihoTestLayout>
</template>

<style scoped></style>
