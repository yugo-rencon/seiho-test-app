<template>
    <template v-if="!shouldHideByPaywall">
        <div  v-for="(content, index) in props.contents"
            :key="index"
            class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-md">

        <!-- 問題番号 -->
        <div class="flex items-center gap-2 my-4">
            <div class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"></div>
            <h2 class="text-base font-bold text-gray-800">
                問{{ index + props.questionNumber }}
            </h2>
        </div>

          <!-- 回答 -->
        <div class="grid gap-2 text-gray-700 select-none grid-cols-[2em_1fr]">
            <span class="font-semibold text-base">
            {{ props.labels[index] }}：
            </span>
            <p class="text-base" v-html="content.answer"></p>
        </div>
        <!-- 解説 -->
        <div
            v-if="!shouldHideExplanation(index)"
            class="my-4 p-4  border border-gray-200 rounded-md"
        >
            <div
                class="text-sm sm:text-base leading-relaxed text-gray-800 overflow-x-auto whitespace-nowrap"
                v-html="content.explanation">
            </div>
        </div>
        <div
            v-else
            class="my-4 rounded-md border border-dashed border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500"
        >
            解説はプレミアムプランで閲覧できます。
        </div>

        <!-- タイトルと科目 -->
        <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
            {{ props.title }}
        </div>
        <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
            {{ props.subject }}
        </div>
        </div>
    </template>
    <PaywallNotice v-else-if="Number(props.questionNumber) === 6" />
</template>

  <script setup lang="ts">
  import { computed } from "vue";
  import { usePage } from "@inertiajs/vue3";
  import PaywallNotice from "./PaywallNotice.vue";

  const props = defineProps({
    questionNumber: {
      type: Number,
      required: true,
    },
    contents: {
      type: Array,
      required: true,
    },
    labels: {
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
    hideFromQuestion: {
      type: Number,
      default: null,
    },
    hideToQuestion: {
      type: Number,
      default: null,
    },
  })

  const page = usePage();

  const shouldHideByPaywall = computed(() => {
    const year = Number(String(props.subject ?? "").slice(0, 4));
    const isPaid = !(year === 2024 && props.title === "生命保険総論");
    const isUnlocked = page.props.auth?.hasPremium === true;
    return isPaid && !isUnlocked && Number(props.questionNumber) > 5;
  });

  const shouldHideExplanation = (index: number): boolean => {
    if (props.hideFromQuestion == null) return false
    const questionNo = Number(props.questionNumber) + index
    const hideTo = props.hideToQuestion ?? props.hideFromQuestion
    return questionNo >= props.hideFromQuestion && questionNo <= hideTo
  }

  </script>
