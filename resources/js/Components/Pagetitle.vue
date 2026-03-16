<script setup lang="ts">
interface Props {
  title: string
  description: string
}
const props = defineProps<Props>()
</script>

<template>
  <div class="max-w-4xl mx-auto bg-white p-6 md:p-8 rounded-xl shadow-sm md:shadow-md relative overflow-hidden">
    <div class="relative z-10">
      <div class="flex items-center gap-3 mb-3">
        <div class="w-1.5 h-8 bg-gradient-to-b from-blue-500 to-purple-500 rounded-full"></div>
        <h1 class="text-xl font-extrabold text-gray-800 leading-tight">{{ props.title }}</h1>
      </div>
      <p class="text-gray-600 font-extrabold text-base mt-2">{{ props.description }}</p>
    </div>
  </div>
</template>
