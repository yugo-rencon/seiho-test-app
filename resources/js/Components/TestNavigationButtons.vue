<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import AdSenseUnit from "@/Components/AdSenseUnit.vue";

const props = defineProps({
  previousRoute: {
    type: String,
    default: null
  },
  nextRoute: {
    type: String,
    default: null
  },
  homeRoute: {
    type: String,
    default: 'tests.index'
  }
});

const page = usePage();
const isDaigaku = computed(() => String(page.url ?? "").startsWith("/daigaku"));
const isIppan = computed(() => String(page.url ?? "").startsWith("/ippan"));

const buttonClass = computed(() =>
  isDaigaku.value
    ? "inline-flex min-w-[180px] justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-sky-200 text-sky-700 bg-white shadow-sm hover:bg-sky-50 transition"
    : isIppan.value
      ? "inline-flex min-w-[180px] justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-rose-200 text-rose-700 bg-white shadow-sm hover:bg-rose-50 transition"
      : "inline-flex min-w-[180px] justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-purple-200 text-purple-700 bg-white shadow-sm hover:bg-purple-50 transition"
);

const isPaidCurrentPage = computed(() => {
  const path = (page.url || "").split("?")[0];

  // daigaku: /daigaku/shikumi-kojin2025a
  const daigakuMatched = path.match(/^\/daigaku\/[a-z-]+(\d{4})([abc])$/i);
  if (daigakuMatched) {
    const year = Number(daigakuMatched[1]);
    const form = daigakuMatched[2]?.toUpperCase();
    // 大学課程は2025フォームAのみ無料
    return !(year === 2025 && form === "A");
  }

  // seiho: /souron2024a
  const seihoMatched = path.match(/^\/([a-z]+)(\d{4})([abc])$/i);
  if (seihoMatched) {
    const year = Number(seihoMatched[2]);
    const form = String(seihoMatched[3] || "").toUpperCase();

    // 生命保険講座は2024フォームAのみ無料
    return !(year === 2024 && form === "A");
  }

  return false;
});

const showNavigationAd = computed(() => {
  const hasPremium = page.props?.auth?.hasPremium === true;
  // paywall が出る有料ページではナビ上広告を出さない（問21直前広告のみ）
  return !hasPremium && !isPaidCurrentPage.value;
});
</script>

<template>
  <div class="flex flex-col items-center mt-10 gap-6">
    <div v-if="showNavigationAd" class="w-full max-w-4xl rounded-lg bg-white p-2 shadow-sm">
      <AdSenseUnit ad-slot="8570892917" />
    </div>

    <!-- 前の試験・次の試験ボタン -->
    <div v-if="previousRoute || nextRoute" class="flex flex-wrap justify-center gap-3">
      <a
        v-if="previousRoute"
        :href="route(previousRoute)"
        :class="buttonClass"
      >
        前の試験へ
      </a>

      <a
        v-if="nextRoute"
        :href="route(nextRoute)"
        :class="buttonClass"
      >
        次の試験へ
      </a>
    </div>

    <!-- 一覧画面に戻るボタン -->
    <a
      :href="route(homeRoute)"
      :class="buttonClass"
    >
      一覧画面に戻る
    </a>
  </div>
</template>
