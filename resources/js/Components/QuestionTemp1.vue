<template>
    <div :id="`q${props.questionNumber}`" class="h-0 scroll-mt-24"></div>
    <div
        v-if="!shouldHideByPaywall && (!props.learningMode || Number(props.questionNumber) === Number(effectiveStudyQuestion))"
        class="rounded-lg border border-gray-200 bg-white px-4 py-3 sm:px-6"
        :class="{ 'is-daigaku': isDaigaku, 'is-senmon': isSenmon, 'is-ouyou': isOuyou, 'is-ippan': isIppan, 'is-seiho': isSeiho }"
    >
        <div class="flex items-start gap-2 my-4">
            <div
                v-if="!props.learningMode"
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
            <h2 class="flex min-w-0 items-start gap-2 text-base font-bold leading-tight text-gray-700">
                <span v-if="props.learningMode" class="shrink-0 whitespace-nowrap text-xs font-normal text-gray-500">問{{ props.questionNumber }}</span>
                <span v-else class="shrink-0 whitespace-nowrap">問題{{ props.questionNumber }}</span>
                <span v-if="props.questionTitle" class="min-w-0">
                    {{ props.questionTitle }}
                </span>
            </h2>
        </div>
        <p v-if="props.note" class="mb-3 text-sm text-gray-500">
            {{ props.note }}
        </p>

        <div
            v-if="props.learningMode"
            class="mb-4 border-t border-gray-100 pt-4"
        >
            <template v-if="!hasAnswered">
                <p class="text-sm font-bold text-gray-800">{{ props.answerPrompt }}</p>
            </template>
            <div class="grid grid-cols-3 gap-2 sm:max-w-md" :class="hasAnswered ? '' : 'mt-3'">
                <button
                    v-for="label in availableLabels"
                    :key="label"
                    type="button"
                    class="rounded-md border bg-white px-3 font-bold transition focus:outline-none focus:ring-2 focus:ring-violet-400 focus:ring-offset-2"
                    :class="[answerButtonClass(label), hasAnswered ? 'min-h-9 py-1 text-sm' : 'min-h-12 py-2 text-base']"
                    :disabled="hasAnswered"
                    @click="selectAnswer(label)"
                >
                    {{ label }}
                </button>
            </div>
            <div v-if="hasAnswered" class="mt-3 flex flex-wrap items-center justify-between gap-x-4 gap-y-2 border-t border-gray-200 pt-3 text-base" role="status" aria-live="polite">
                <p class="flex flex-wrap items-center gap-x-2 text-gray-800">
                    <span class="font-semibold" :class="isCorrect ? 'text-emerald-700' : 'text-rose-700'">{{ isCorrect ? '○' : '×' }}</span>
                    <span class="font-semibold">{{ isCorrect ? '正解' : '不正解' }}</span>
                    <template v-if="!isCorrect"><span class="text-gray-300">｜</span><span class="text-sm text-gray-500">正解</span><span>{{ props.correctAnswer }}</span></template>
                </p>
                <button type="button" class="shrink-0 text-xs text-gray-400 hover:text-gray-800" @click="resetAnswer">選び直す</button>
            </div>
        </div>

        <div v-if="!props.learningMode" class="grid gap-1.5">
            <div
                v-for="(content, index) in props.contents"
                :key="index"
                class="grid grid-cols-[2em_minmax(0,1fr)] items-start gap-1 border-b border-gray-100 pb-1.5 text-sm leading-6 text-gray-800 select-none md:text-[15px]"
            >
                <span class="pt-[1px] font-semibold text-gray-900">{{ getLabel(index) }}：</span>
                <div class="jp-kagi-tight min-w-0" v-html="formatContentHtml(content)"></div>
            </div>
        </div>
        <section v-else-if="hasAnswered" class="my-5 border-t border-gray-200 pt-4">
            <h3 class="text-sm font-bold text-gray-900">解説</h3>
            <div class="mt-2 divide-y divide-gray-100">
                <div
                    v-for="(content, index) in props.contents"
                    :key="`explanation-${index}`"
                    class="grid grid-cols-[2rem_minmax(0,1fr)] items-start gap-2 py-2 text-sm leading-7 text-gray-800 md:text-[15px]"
                >
                    <span
                        class="font-bold"
                        :class="getLabel(index) === props.correctAnswer ? 'text-emerald-700' : 'text-gray-700'"
                    >
                        {{ getLabel(index) }}：
                    </span>
                    <div class="jp-kagi-tight min-w-0" v-html="formatContentHtml(content)"></div>
                </div>
            </div>
        </section>
        <RelatedProblems :items="props.relatedProblems" :is-daigaku="isDaigaku" :context-title="props.title" :current-question-number="props.questionNumber" />
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
import { formatInlineContentHtml } from "@/utils/formatContentHtml";

const props = defineProps({
    questionNumber: {
        type: [Number, String],
        required: true,
    },
    questionTitle: {
        type: String,
        default: "",
    },
    contents: {
        type: Array,
        required: true,
    },
    title: {
        type: String,
        default: "",
    },
    subject: {
        type: String,
        default: "",
    },
    note: {
        type: String,
        default: "",
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
    correctAnswer: {
        type: String,
        default: "",
    },
    studyQuestion: {
        type: Number,
        default: 0,
    },
    answerPrompt: {
        type: String,
        default: "正しい選択肢を1つ選んでください",
    },
});
const emit = defineEmits(["answered"]);
const studySession: any = inject("studySession", null);
const effectiveStudyQuestion = computed(() => studySession?.currentQuestion?.value ?? props.studyQuestion);
const labels = ref(["ア", "イ", "ウ", "エ"]);
const selectedAnswer = ref("");
const availableLabels = computed(() => labels.value.slice(0, props.contents.length));
const hasAnswered = computed(() => selectedAnswer.value !== "");
const isCorrect = computed(() => selectedAnswer.value === props.correctAnswer);

const selectAnswer = (label: string): void => {
    if (!hasAnswered.value) {
        selectedAnswer.value = label;
        emit("answered", Number(props.questionNumber), true);
        studySession?.markAnswered?.(Number(props.questionNumber), true, isCorrect.value, label);
    }
};

const resetAnswer = (): void => {
    selectedAnswer.value = "";
    emit("answered", Number(props.questionNumber), false);
    studySession?.markAnswered?.(Number(props.questionNumber), false, false, "");
};

const answerButtonClass = (label: string): string => {
    if (!hasAnswered.value) return "border-gray-300 text-gray-800 hover:border-violet-400 hover:bg-violet-50";
    if (label === props.correctAnswer) return "border-emerald-500 text-emerald-700";
    if (label === selectedAnswer.value) return "border-rose-500 text-rose-700";
    return "border-gray-200 text-gray-500";
};

watch(
    [() => props.learningMode, () => studySession?.savedAnswers?.value?.[Number(props.questionNumber)]?.selected_answer],
    ([learningMode, savedAnswer]) => {
        selectedAnswer.value = learningMode ? String(savedAnswer ?? "") : "";
    },
    { immediate: true },
);

const page = usePage();
const isDaigaku = computed(() => /(?:^|\/)daigaku(?:\/|$)/.test(String(page.url ?? "")));
const isSenmon = computed(() => /(?:^|\/)senmon(?:\/|$)/.test(String(page.url ?? "")));
const isOuyou = computed(() => /(?:^|\/)ouyou(?:\/|$)/.test(String(page.url ?? "")));
const isIppan = computed(() => /(?:^|\/)ippan(?:\/|$)/.test(String(page.url ?? "")));
const isSeiho = computed(() => !isDaigaku.value && !isSenmon.value && !isOuyou.value && !isIppan.value);


const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

const shouldHideByPaywall = computed(() => {
    const requiresLogin = requiresIppanFreeLogin(page.props);
    const isPaid = isPaidYear(props.subject, props.title);
    const isUnlocked = hasPremiumAccess(page.props);
    return (requiresLogin || (isPaid && !isUnlocked))
        && Number(props.questionNumber) >= paywallStartQuestion.value;
});

const shouldShowPaywallNotice = computed(() => {
    return shouldHideByPaywall.value
        && Number(props.questionNumber) === paywallStartQuestion.value;
});


const getLabel = (index: number): string => {
    return labels.value[index] ?? `${index + 1}`;
};

const formatContentHtml = (value: unknown): string => {
    return formatInlineContentHtml(value);
};
</script>
