<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

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

// 現在URLから科目キーを推定（例: /keiri2024a -> keiri）
const currentSubject = computed(() => {
  const path = (page.url || "").split("?")[0];
  const matched = path.match(/^\/([a-z]+)\d{4}[abc]$/i);
  return matched?.[1] ?? null;
});

const withSubjectQuery = (href) => {
  if (!currentSubject.value) return href;
  const separator = href.includes("?") ? "&" : "?";
  return `${href}${separator}subject=${currentSubject.value}`;
};
</script>

<template>
  <div class="flex flex-col items-center mt-10 gap-6">
    <!-- 前の試験・次の試験ボタン -->
    <div v-if="previousRoute || nextRoute" class="flex flex-wrap justify-center gap-3">
      <Link
        v-if="previousRoute"
        :href="withSubjectQuery(route(previousRoute))"
        class="inline-flex min-w-[180px] justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-purple-200 text-purple-700 bg-white shadow-sm hover:bg-purple-50 transition"
      >
        前の試験へ
      </Link>

      <Link
        v-if="nextRoute"
        :href="withSubjectQuery(route(nextRoute))"
        class="inline-flex min-w-[180px] justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-purple-200 text-purple-700 bg-white shadow-sm hover:bg-purple-50 transition"
      >
        次の試験へ
      </Link>
    </div>

    <!-- 一覧画面に戻るボタン -->
    <Link
      :href="withSubjectQuery(route(homeRoute))"
      class="inline-flex min-w-[180px] justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-purple-200 text-purple-700 bg-white shadow-sm hover:bg-purple-50 transition"
    >
      一覧画面に戻る
    </Link>
  </div>
</template>
