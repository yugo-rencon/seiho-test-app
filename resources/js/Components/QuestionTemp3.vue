<template>
    <div
        v-for="questionNo in questionNumbersInBlock"
        :key="`anchor-${questionNo}`"
        :id="`q${questionNo}`"
        class="h-0 scroll-mt-24"
    ></div>
    <div
        v-if="!shouldHideByPaywall"
        class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-sm md:shadow-md scroll-mt-24"
    >

        <!-- 問題番号 -->
        <div class="flex items-start gap-2 my-4">
            <div
                class="w-1.5 h-6 rounded-full"
                :class="
                    isDaigaku
                        ? 'bg-gradient-to-b from-blue-400 to-cyan-400'
                        : isIppan
                            ? 'bg-gradient-to-b from-rose-400 to-red-400'
                            : 'bg-gradient-to-b from-purple-400 to-blue-400'
                "
            ></div>
            <h2 class="text-base font-bold leading-tight text-gray-700">
                <span class="mr-2 inline-block whitespace-nowrap">問題{{ props.questionRange || getQuestionRange(props.questionNumber) }}</span>
                <span v-if="props.questionTitle">
                    {{ props.questionTitle }}
                </span>
            </h2>
        </div>
        <p v-if="props.note" class="mb-3 text-sm text-gray-500">
            {{ props.note }}
        </p>

      <div class="grid gap-2">
        <div v-for="(content, index) in props.contents" :key="index"
             class="grid gap-2 text-sm leading-6 text-gray-800 select-none md:text-[15px] grid-cols-[2em_1fr]">
          <span class="font-semibold">{{ props.labels[index] }}：</span>
          <p>{{ normalizeBiArrow(content) }}</p>
        </div>
      </div>
      <RelatedProblems
        :items="props.relatedProblems"
        :is-daigaku="isDaigaku"
        :context-title="props.title"
        :current-question-number="relatedCurrentQuestionNumber"
      />
      <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
        {{ props.title }}
      </div>
      <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
        {{ props.subject }}
      </div>
    </div>
    <PaywallNotice v-else-if="shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
    import { computed } from "vue";
    import { usePage } from "@inertiajs/vue3";
    import PaywallNotice from "./PaywallNotice.vue";
    import RelatedProblems from "./RelatedProblems.vue";
    import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

    const props = defineProps({
        questionNumber: {
            type: Number,
            required: true,
        },
        questionTitle: {
            type: String,
            default: '',
        },
        questionRange: {
            type: String,
            default: '',
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
        note: {
            type: String,
            default: '',
        },
        relatedProblems: {
            type: Array,
            default: () => [],
        },
    })

    const page = usePage();
    const isDaigaku = computed(() => String(page.url ?? "").startsWith("/daigaku"));
    const isIppan = computed(() => String(page.url ?? "").startsWith("/ippan"));

    const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

    const blockStartQuestion = computed(() => {
        return (Number(props.questionNumber) - 1) * 5 + 1;
    });

    const blockEndQuestion = computed(() => {
        return blockStartQuestion.value + 4;
    });

    const questionNumbersInBlock = computed(() => {
        return Array.from({ length: 5 }, (_, i) => blockStartQuestion.value + i);
    });

    const relatedCurrentQuestionNumber = computed(() => {
        const range = String(props.questionRange ?? "").trim();
        if (range !== "") {
            const normalized = range
                .replace(/[０-９]/g, (char) => String.fromCharCode(char.charCodeAt(0) - 0xfee0))
                .replace(/〜|~|－|–|—/g, "-");
            const matched = normalized.match(/^(\d+)\s*-\s*(\d+)$/);
            if (matched) {
                return Number(matched[1]);
            }
            const single = normalized.match(/^(\d+)$/);
            if (single) {
                return Number(single[1]);
            }
        }
        return blockStartQuestion.value;
    });

    const shouldHideByPaywall = computed(() => {
        const isPaid = isPaidYear(props.subject, props.title);
        const isUnlocked = hasPremiumAccess(page.props);
        return (
            isPaid &&
            !isUnlocked &&
            blockStartQuestion.value >= paywallStartQuestion.value
        );
    });

    const shouldShowPaywallNotice = computed(() => {
        if (!shouldHideByPaywall.value) return false;
        return (
            paywallStartQuestion.value >= blockStartQuestion.value &&
            paywallStartQuestion.value <= blockEndQuestion.value
        );
    });

    function getQuestionRange(questionNumber) {
        const start = (Number(questionNumber) - 1) * 5 + 1;
        const end = start + 4;
        return `${start}〜${end}`;
    }

    function normalizeBiArrow(value) {
        const raw = String(value ?? "");
        return raw.replace(/↔︎|↔|←→|⇔/g, " ⇔ ");
    }

</script>
