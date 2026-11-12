<script setup lang="ts">
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

interface Props {
  title: string
  description: string
}
const props = defineProps<Props>()
const page = usePage();
const isDaigaku = computed(() => /(?:^|\/)daigaku(?:\/|$)/.test(String(page.url ?? "")));
const isSenmon = computed(() => /(?:^|\/)senmon(?:\/|$)/.test(String(page.url ?? "")));
const isOuyou = computed(() => /(?:^|\/)ouyou(?:\/|$)/.test(String(page.url ?? "")));
const isHengaku = computed(() => /(?:^|\/)hengaku(?:\/|$)/.test(String(page.url ?? "")));
const isIppan = computed(() => /(?:^|\/)ippan(?:\/|$)/.test(String(page.url ?? "")));

const daigakuExamPeriod = computed(() => {
  if (!isDaigaku.value) return "";

  const year = Number(props.description.match(/(\d{4})年度/)?.[1]);
  if (!year) return "";

  const url = String(page.url ?? "");
  if (/\/daigaku\/(?:shikumi-kojin|fp)\d{4}[abc](?:[/?#]|$)/.test(url)) {
    return `${year}年5月〜6月実施`;
  }
  if (/\/daigaku\/(?:zei|sisan)\d{4}[abc](?:[/?#]|$)/.test(url)) {
    return `${year}年9月〜10月実施`;
  }
  if (/\/daigaku\/(?:kigyo|syakai)\d{4}[abc](?:[/?#]|$)/.test(url)) {
    return `${year + 1}年1月〜2月実施`;
  }

  return "";
});
</script>

<template>
  <div class="max-w-4xl mx-auto bg-white p-6 md:p-8 rounded-xl shadow-sm md:shadow-md relative overflow-hidden">
    <div class="relative z-10">
      <div class="flex items-center gap-3 mb-3">
        <div
          class="w-1.5 h-8 rounded-full"
          :class="
            isDaigaku
              ? 'bg-gradient-to-b from-blue-500 to-cyan-500'
              : isSenmon
                ? 'bg-gradient-to-b from-emerald-500 to-lime-500'
                : isOuyou
                  ? 'bg-gradient-to-b from-amber-500 to-orange-500'
              : isIppan
                ? 'bg-gradient-to-b from-pink-500 to-fuchsia-500'
                : isHengaku
                  ? 'bg-gradient-to-b from-teal-500 to-cyan-500'
                  : 'bg-gradient-to-b from-blue-500 to-purple-500'
          "
        ></div>
        <h1 class="text-xl font-extrabold text-gray-800 leading-tight">
          <template v-if="isHengaku">
            <span class="md:hidden">{{ props.title }}</span>
            <span class="hidden md:inline">変額保険販売資格</span>
          </template>
          <template v-else>{{ props.title }}</template>
        </h1>
      </div>
      <p class="mt-2 flex flex-wrap items-baseline gap-2 text-gray-600">
        <span class="text-base font-extrabold">{{ props.description }}</span>
        <span v-if="daigakuExamPeriod" class="text-[10px] font-medium text-gray-500 sm:text-xs">
          （{{ daigakuExamPeriod }}）
        </span>
      </p>
    </div>
  </div>
</template>
