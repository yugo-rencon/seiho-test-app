<template>
  <div class="mx-auto mt-4 mb-4 max-w-4xl rounded-lg border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-800">
    <p class="font-semibold">この解説は作成中です</p>
    <p class="mt-1 text-xs text-amber-700">{{ detailMessage }}</p>
  </div>
</template>

<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();

const detailMessage = computed(() => {
  const url = String(page.url ?? "");

  if (url.startsWith("/senmon")) {
    return "内容は順次更新しております。専門課程試験の解説は6月ごろに公開予定です。";
  }

  if (url.startsWith("/ouyou")) {
    return "内容は順次更新しております。応用課程試験の解説は5月ごろに公開予定です。";
  }

  return "内容は順次更新します。";
});
</script>
