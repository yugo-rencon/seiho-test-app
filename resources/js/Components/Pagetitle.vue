<script setup lang="ts">
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

interface Props {
  title: string
  description: string
}
const props = defineProps<Props>()
const page = usePage();
const isDaigaku = computed(() => String(page.url ?? "").startsWith("/daigaku"));
const isSenmon = computed(() => String(page.url ?? "").startsWith("/senmon"));
const isOuyou = computed(() => String(page.url ?? "").startsWith("/ouyou"));
const isIppan = computed(() => String(page.url ?? "").startsWith("/ippan"));
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
                ? 'bg-gradient-to-b from-rose-500 to-red-500'
                : 'bg-gradient-to-b from-blue-500 to-purple-500'
          "
        ></div>
        <h1 class="text-xl font-extrabold text-gray-800 leading-tight">{{ props.title }}</h1>
      </div>
      <p class="text-gray-600 font-extrabold text-base mt-2">{{ props.description }}</p>
    </div>
  </div>
</template>
