<template>
    <div
        v-for="questionNo in questionNumbersInBlock"
        :key="`anchor-${questionNo}`"
        :id="`q${questionNo}`"
        class="h-0 scroll-mt-24"
    ></div>
    <div
        v-if="!shouldHideByPaywall"
        class="scroll-mt-24"
        :class="[
          props.learningMode ? 'space-y-2' : 'bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-sm md:shadow-md',
          { 'is-daigaku': isDaigaku, 'is-senmon': isSenmon, 'is-ouyou': isOuyou, 'is-ippan': isIppan, 'is-seiho': isSeiho },
        ]"
    >

        <!-- 問題番号 -->
        <div v-if="!props.learningMode" class="flex items-start gap-2 my-4">
            <div
                class="w-1.5 h-6 rounded-full"
                :class="
                    isDaigaku
                        ? 'bg-gradient-to-b from-blue-400 to-cyan-400'
                        : isSenmon
                            ? 'bg-gradient-to-b from-emerald-400 to-lime-400'
                            : isOuyou
                                ? 'bg-gradient-to-b from-amber-400 to-orange-400'
                            : isIppan
                                ? 'bg-gradient-to-b from-pink-400 to-fuchsia-400'
                                : isSeiho
                                    ? 'bg-gradient-to-b from-violet-400 to-indigo-400'
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
        <p v-if="!props.learningMode && props.note" class="mb-3 text-sm text-gray-500">
            {{ props.note }}
        </p>

      <div v-if="props.learningMode" class="grid gap-2">
        <article
          v-for="(content, index) in props.contents"
          v-show="Number(effectiveStudyQuestion) === blockStartQuestion + index"
          :key="`study-${index}`"
          class="rounded-lg border border-gray-200 bg-white px-4 py-5 sm:px-6"
        >
          <div class="flex items-start gap-2">
            <h2 class="flex min-w-0 items-start gap-2 text-base font-bold text-gray-700">
              <span class="shrink-0 whitespace-nowrap text-xs font-normal text-gray-500">問{{ blockStartQuestion + index }}</span>
              <span v-if="props.questionTitle" class="min-w-0">{{ props.questionTitle }}</span>
            </h2>
          </div>
          <p class="mt-4 text-sm font-bold text-gray-800">語群から答えを1つ選んでください</p>
          <div class="mt-3 grid grid-cols-2 gap-2 sm:grid-cols-5">
            <button
              v-for="choice in props.choiceOptions"
              :key="`${index}-${choice.label}`"
              type="button"
              class="min-h-12 rounded-md border px-3 py-2 text-left text-sm transition focus:outline-none focus:ring-2 focus:ring-violet-400 focus:ring-offset-2"
              :class="studyChoiceClass(index, choice.label)"
              :disabled="Boolean(selectedAnswers[index])"
              @click="answerQuestion(index, choice.label)"
            >
              <span class="font-bold">{{ choice.label }}.</span>
              <span class="ml-1">{{ choice.text }}</span>
            </button>
          </div>
          <div v-if="selectedAnswers[index]" class="mt-3 flex flex-wrap items-center justify-between gap-x-4 gap-y-2 border-t border-gray-200 pt-3 text-base" role="status">
            <p class="flex flex-wrap items-center gap-x-2 text-gray-800">
              <span class="font-semibold" :class="isAnswerCorrect(index) ? 'text-emerald-700' : 'text-rose-700'">{{ isAnswerCorrect(index) ? '○' : '×' }}</span>
              <span class="font-semibold">{{ isAnswerCorrect(index) ? '正解' : '不正解' }}</span>
              <template v-if="!isAnswerCorrect(index)"><span class="text-gray-300">｜</span><span class="text-sm text-gray-500">正解</span><span>{{ props.labels[index] }}. {{ normalizeBiArrow(content) }}</span></template>
            </p>
            <button type="button" class="shrink-0 text-xs text-gray-400 hover:text-gray-800" @click="resetAnswer(index)">選び直す</button>
          </div>
        </article>
      </div>

      <div v-else class="grid gap-2">
        <div v-for="(content, index) in props.contents" :key="index"
             class="grid gap-2 text-sm leading-6 text-gray-800 select-none md:text-[15px] grid-cols-[2em_1fr]">
          <span class="font-semibold">{{ props.labels[index] }}：</span>
          <p class="jp-kagi-tight">{{ normalizeBiArrow(content) }}</p>
        </div>
      </div>
      <RelatedProblems v-if="!props.learningMode"
        :items="props.relatedProblems"
        :is-daigaku="isDaigaku"
        :context-title="props.title"
        :current-question-number="relatedCurrentQuestionNumber"
      />
      <div v-if="!props.learningMode" class="flex justify-end text-gray-400 text-xxs lg:text-xs">
        {{ props.title }}
      </div>
      <div v-if="!props.learningMode" class="flex justify-end text-gray-400 text-xxs lg:text-xs">
        {{ props.subject }}
      </div>
    </div>
    <PaywallNotice v-else-if="shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
    import { computed, inject, ref, watch } from "vue";
    import { usePage } from "@inertiajs/vue3";
    import PaywallNotice from "./PaywallNotice.vue";
    import RelatedProblems from "./RelatedProblems.vue";
    import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear, requiresIppanFreeLogin } from "@/utils/paywall";

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
        isDraft: {
            type: Boolean,
            default: false,
        },
        learningMode: {
            type: Boolean,
            default: false,
        },
        choiceOptions: {
            type: Array,
            default: () => [],
        },
        studyQuestion: {
            type: Number,
            default: 0,
        },
    })
    const emit = defineEmits(["answered"]);
    const studySession: any = inject("studySession", null);
    const effectiveStudyQuestion = computed(() => studySession?.currentQuestion?.value ?? props.studyQuestion);

    const selectedAnswers = ref(Array(props.contents.length).fill(''));

    function answerQuestion(index, label) {
        if (selectedAnswers.value[index]) return;
        selectedAnswers.value[index] = label;
        selectedAnswers.value = [...selectedAnswers.value];
        emit('answered', blockStartQuestion.value + index, true);
        studySession?.markAnswered?.(blockStartQuestion.value + index, true, isAnswerCorrect(index), label);
    }

    function studyChoiceClass(index, label) {
        if (!selectedAnswers.value[index]) return 'border-gray-300 bg-white text-gray-800 hover:border-violet-400 hover:bg-violet-50';
        if (label === props.labels[index]) return 'border-emerald-500 bg-white text-emerald-700';
        if (label === selectedAnswers.value[index]) return 'border-rose-500 bg-white text-rose-700';
        return 'border-gray-200 bg-white text-gray-500';
    }

    function isAnswerCorrect(index) {
        return selectedAnswers.value[index] === props.labels[index];
    }

    function resetAnswer(index) {
        selectedAnswers.value[index] = '';
        selectedAnswers.value = [...selectedAnswers.value];
        emit('answered', blockStartQuestion.value + index, false);
        studySession?.markAnswered?.(blockStartQuestion.value + index, false, false, '');
    }

    const page = usePage();
const isDaigaku = computed(() => /(?:^|\/)daigaku(?:\/|$)/.test(String(page.url ?? "")));
const isSenmon = computed(() => /(?:^|\/)senmon(?:\/|$)/.test(String(page.url ?? "")));
const isOuyou = computed(() => /(?:^|\/)ouyou(?:\/|$)/.test(String(page.url ?? "")));
const isIppan = computed(() => /(?:^|\/)ippan(?:\/|$)/.test(String(page.url ?? "")));
const isSeiho = computed(() => !isDaigaku.value && !isSenmon.value && !isOuyou.value && !isIppan.value);

    const rangeStartQuestion = computed(() => {
        const range = String(props.questionRange ?? "").trim();
        const normalized = range
            .replace(/[０-９]/g, (char) => String.fromCharCode(char.charCodeAt(0) - 0xfee0))
            .replace(/〜|~|－|–|—/g, "-");
        const matched = normalized.match(/^(\d+)/);
        return matched ? Number(matched[1]) : 0;
    });


    const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

    const blockStartQuestion = computed(() => {
        if (rangeStartQuestion.value > 0) {
            return rangeStartQuestion.value;
        }

        return (Number(props.questionNumber) - 1) * 5 + 1;
    });

    watch(
        [() => props.learningMode, () => studySession?.savedAnswers?.value],
        ([learningMode, savedAnswers]) => {
            selectedAnswers.value = props.contents.map((_, index) => {
                if (!learningMode) return '';
                return String(savedAnswers?.[blockStartQuestion.value + index]?.selected_answer ?? '');
            });
        },
        { immediate: true, deep: true },
    );

    const blockEndQuestion = computed(() => {
        const range = String(props.questionRange ?? "").trim();
        const normalized = range
            .replace(/[０-９]/g, (char) => String.fromCharCode(char.charCodeAt(0) - 0xfee0))
            .replace(/〜|~|－|–|—/g, "-");
        const matched = normalized.match(/^\d+\s*-\s*(\d+)$/);

        if (matched) {
            return Number(matched[1]);
        }

        return blockStartQuestion.value + 4;
    });

    const questionNumbersInBlock = computed(() => {
        return Array.from(
            { length: Math.max(0, blockEndQuestion.value - blockStartQuestion.value + 1) },
            (_, i) => blockStartQuestion.value + i,
        );
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
        const requiresLogin = requiresIppanFreeLogin(page.props);
        const isPaid = isPaidYear(props.subject, props.title);
        const isUnlocked = hasPremiumAccess(page.props);
        return (
            (requiresLogin || (isPaid && !isUnlocked)) &&
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
