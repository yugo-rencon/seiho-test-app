<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed, onMounted, ref, watch } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import { EXAM_FORMS, INDEX_SECTIONS } from "@/constants/subjects";
import PremiumPromoCard from "@/Pages/Index/PremiumPromoCard.vue";
import SectionHeader from "@/Pages/Index/SectionHeader.vue";
import SubjectTabs from "@/Pages/Index/SubjectTabs.vue";
import YearBlock from "@/Pages/Index/YearBlock.vue";

// 科目タブ・年度/フォーム情報は constants 側に集約して再利用する
const sections = INDEX_SECTIONS;
const forms = EXAM_FORMS;
const activeSectionId = ref(sections[0]?.id ?? "");

// 現在選択中の科目オブジェクト（タイトル/年度/routePrefix など）を取得
const activeSection = computed(() =>
    sections.find((section) => section.id === activeSectionId.value),
);
const page = usePage();
const hasPremium = computed(() => page.props.auth?.hasPremium === true);
const isLoggedIn = computed(() => !!page.props.auth?.user);

// 「本番の点数を記録」リンク先:
// マイページを開くと同時に、対象科目の入力モーダルを開けるよう open_subject を付与
const mypageInputHref = computed(() => {
    if (!activeSection.value) return route("mypage");
    return `${route("mypage", { open_subject: activeSection.value.id })}#score-input`;
});

const isValidSectionId = (id) => sections.some((section) => section.id === id);

onMounted(() => {
    const params = new URLSearchParams(window.location.search);
    const subject = params.get("subject");
    if (subject && isValidSectionId(subject)) {
        activeSectionId.value = subject;
    }
});

watch(activeSectionId, (nextId) => {
    if (!nextId || !isValidSectionId(nextId)) return;
    const url = new URL(window.location.href);
    url.searchParams.set("subject", nextId);
    window.history.replaceState({}, "", url.toString());
});
</script>

<template>
    <SeihoTestLayout title="生命保険講座過去問解説">
        <!-- 科目タブ -->
        <div id="index" class="container mx-auto px-5 sm:px-6 m-10 max-w-6xl">
            <div
                class="bg-white/80 backdrop-blur-sm p-6 md:p-8 rounded-2xl sm:rounded-3xl shadow-md border border-gray-100 relative overflow-hidden"
            >
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full filter blur-3xl opacity-30 -mr-32 -mt-32"
                ></div>

                <div class="relative">
                    <!-- 非プレミアム向けの実績バナー -->
                    <div
                        v-if="!hasPremium"
                        class="mb-5 rounded-full border border-purple-200 bg-purple-100 px-3 py-1.5 text-center text-[11px] font-semibold text-purple-800"
                    >
                        <span class="font-bold">累計</span>
                        <span class="mx-0.5 text-rose-600 font-black">70万</span>
                        <span class="font-bold">PV突破！</span>
                        多くの受験生に選ばれている、合格特化型の過去問解説サイト
                    </div>

                    <!-- プレミアム会員向けの状態表示 -->
                    <div
                        v-if="hasPremium"
                        class="mb-5 inline-flex w-fit items-center gap-2 rounded-full border border-amber-300 bg-gradient-to-r from-amber-50 to-yellow-50 px-4 py-2 text-xs font-semibold text-amber-800 shadow-sm max-sm:gap-1.5 max-sm:px-3 max-sm:py-1.5"
                    >
                        <img src="/images/bolt.svg" alt="" class="h-3.5 w-3.5" />
                        <span>プレミアムユーザー</span>
                        <span class="rounded-full bg-amber-200/70 px-2 py-0.5 text-[10px] font-bold text-amber-900 max-sm:px-1.5 max-sm:text-[9px]">
                            ALL ACCESS
                        </span>
                    </div>
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

                        <!-- 非プレミアム時のみ購入導線カードを表示 -->
                        <div v-if="!hasPremium" class="mt-6 w-full">
                            <PremiumPromoCard />
                        </div>

                        <div
                            class="mt-6 divide-y divide-gray-100 border border-gray-100 rounded-2xl bg-white"
                        >
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
