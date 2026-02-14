<template>
    <div
        v-if="!shouldHideByPaywall"
        class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-md"
    >
        <div class="flex items-center gap-2 my-4">
            <div class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"></div>
            <h2 class="text-base font-bold text-gray-800">
                問題{{ props.questionNumber }}
            </h2>
        </div>

      <div class="grid gap-2">
        <div v-for="(content, index) in props.contents" :key="index"
             class="grid gap-2 text-gray-700 select-none grid-cols-[2em_1fr]">
          <span class="font-semibold">{{ getLabel(index) }}：</span>
          <!-- <p>{{ content }}</p> -->
          <p v-html="content"></p>
        </div>
      </div>
      <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
        {{ props.title }}
      </div>
      <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
        {{ props.subject }}
      </div>
    </div>
    <PaywallNotice v-else-if="Number(props.questionNumber) === 6" />
  </template>

  <script setup lang="ts">
  import { computed, ref } from 'vue'
  import { usePage } from '@inertiajs/vue3'
  import PaywallNotice from './PaywallNotice.vue'

  const props = defineProps({
    questionNumber: {
      type: [Number, String],
      required: true,
    },
    questionTitle: {
      type: String,
      default: '',
    },
    contents: {
      type: Array,
      required: true,
    },
    title: {
      type: String,
      default: '',
    },
    subject: {
      type: String,
      default: '',
    },
  })
  const labels = ref(['ア', 'イ', 'ウ'])

  const page = usePage()

  const shouldHideByPaywall = computed(() => {
    const year = Number(String(props.subject ?? '').slice(0, 4))
    const isPaid = !(year === 2024 && props.title === '生命保険総論')
    const isUnlocked = page.props.auth?.hasPremium === true
    return isPaid && !isUnlocked && Number(props.questionNumber) > 5
  })

  const getLabel = (index: number): string => {
        return labels.value[index]; // その他の場合はlabelsを使用
  }
  </script>
