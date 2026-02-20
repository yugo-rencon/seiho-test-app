<template>
    <div v-if="showAdBeforeQuestion21" class="mt-2 rounded-lg bg-white p-2 shadow-sm">
        <AdSenseUnit slot="8570892917" />
    </div>
    <div
        v-if="!shouldHideByPaywall"
        class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-md"
    >
        <div class="flex items-center gap-2 my-4">
            <div class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"></div>
            <h2 class="flex items-center gap-2 text-base font-bold text-gray-800">
                問題{{ props.questionNumber }}
                <span v-if="props.questionTitle" class="text-base font-bold text-gray-800">
                    {{ props.questionTitle }}
                </span>
            </h2>
        </div>
        <p v-if="props.note" class="mb-3 text-xs text-gray-500">
            {{ props.note }}
        </p>

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
    <template v-else-if="shouldShowPaywallNotice">
        <!-- 最初にロックされる問題をうっすら見せる（続きを読む導線） -->
        <div
            class="relative overflow-hidden rounded-2xl border border-gray-200 bg-white px-6 py-3 shadow-sm opacity-65"
        >
            <div class="flex items-center gap-2 my-4">
                <div class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"></div>
                <h2 class="flex items-center gap-2 text-base font-bold text-gray-800">
                    問題{{ props.questionNumber }}
                    <span v-if="props.questionTitle" class="text-base font-bold text-gray-800">
                        {{ props.questionTitle }}
                    </span>
                </h2>
            </div>
            <div class="grid gap-2">
                <div
                    v-for="index in [0, 1]"
                    :key="index"
                    class="grid gap-2 text-gray-700 select-none grid-cols-[2em_1fr]"
                >
                    <span class="font-semibold">{{ getLabel(index) }}：</span>
                    <p v-html="props.contents?.[index] ?? ''"></p>
                </div>
            </div>
            <div
                class="pointer-events-none absolute inset-x-0 bottom-0 h-36 bg-gradient-to-b from-transparent via-white/95 to-white"
            ></div>
        </div>
        <PaywallNotice class="-mt-8" />
    </template>
  </template>

  <script setup lang="ts">
  import { computed, ref } from 'vue'
  import { usePage } from '@inertiajs/vue3'
  import PaywallNotice from './PaywallNotice.vue'
  import AdSenseUnit from './AdSenseUnit.vue'
  import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from '@/utils/paywall'

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
    note: {
      type: String,
      default: '',
    },
  })
  const labels = ref(['ア', 'イ', 'ウ'])

  const page = usePage()

  const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title))

  const shouldHideByPaywall = computed(() => {
    const isPaid = isPaidYear(props.subject, props.title)
    const isUnlocked = hasPremiumAccess(page.props)
    return isPaid && !isUnlocked && Number(props.questionNumber) >= paywallStartQuestion.value
  })

  const shouldShowPaywallNotice = computed(() => {
    return shouldHideByPaywall.value && Number(props.questionNumber) === paywallStartQuestion.value
  })

  const showAdBeforeQuestion21 = computed(() => {
    return !hasPremiumAccess(page.props) && Number(props.questionNumber) === 21
  })

  const getLabel = (index: number): string => {
        return labels.value[index]; // その他の場合はlabelsを使用
  }
  </script>
