<template>
    <StudyAnswerFeedback :visible="feedbackVisible" :correct="isCorrect" @dismissed="dismissFeedback" />
    <div :id="`q${props.questionNumber}`" class="h-0 scroll-mt-24"></div>
    <div
        v-if="!shouldHideByPaywall && (!props.learningMode || Number(props.questionNumber) === Number(effectiveStudyQuestion))"
        :class="[
            isIppan && props.learningMode ? 'rounded-lg bg-white px-4 py-4 shadow-sm sm:px-0 sm:py-2 sm:shadow-none' : 'rounded-lg border border-gray-200 bg-white px-4 py-3 sm:px-6',
            { 'is-daigaku': isDaigaku, 'is-senmon': isSenmon, 'is-ouyou': isOuyou, 'is-ippan': isIppan, 'is-hengaku': isHengaku, 'is-seiho': isSeiho },
        ]"
    >
        <div class="flex items-start gap-2" :class="isIppan && props.learningMode ? 'mb-4 sm:mb-10' : 'my-4'">
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
                              : isHengaku
                                    ? 'bg-gradient-to-b from-teal-400 to-cyan-400'
                                : isSeiho
                                ? 'bg-gradient-to-b from-violet-400 to-indigo-400'
                                : 'bg-gradient-to-b from-purple-400 to-blue-400'
                "
            ></div>
            <h2 class="flex min-w-0 items-start gap-2 font-bold leading-tight" :class="isIppan && props.learningMode ? 'flex-col text-gray-950' : 'text-base text-gray-700'">
                <span v-if="props.learningMode" :class="isIppan ? 'text-xl font-bold sm:text-3xl' : 'shrink-0 whitespace-nowrap text-xs font-normal text-gray-500'">{{ isIppan ? `第${props.questionNumber}問` : `問${props.questionNumber}` }}</span>
                <span v-else class="shrink-0 whitespace-nowrap">問題{{ props.questionNumber }}</span>
                <span v-if="props.questionTitle" class="min-w-0" :class="isIppan && props.learningMode ? 'mt-2 text-sm font-medium text-gray-500 sm:text-base' : ''">
                    {{ props.questionTitle }}
                </span>
            </h2>
        </div>
        <p v-if="props.note" class="mb-3 text-sm text-gray-500">
            {{ props.note }}
        </p>

        <div
            v-if="props.learningMode"
            :class="isIppan ? 'rounded-lg border-0 bg-white p-0 sm:border sm:border-pink-100 sm:bg-pink-50/70 sm:p-7' : 'mb-4 border-t border-gray-100 pt-4'"
        >
            <p :class="isIppan ? 'text-sm font-semibold text-gray-600 sm:text-base' : 'text-sm font-bold text-gray-800'">{{ props.answerPrompt }}</p>
            <div class="mt-4 grid gap-3" :class="isIppan ? 'grid-cols-2 lg:grid-cols-4' : 'grid-cols-3 sm:max-w-md'">
                <button
                    v-for="label in availableLabels"
                    :key="label"
                    type="button"
                    class="relative min-h-12 border bg-white px-3 py-2 text-base font-bold transition focus:outline-none focus:ring-2 focus:ring-offset-2"
                    :class="[answerButtonClass(label), isIppan ? 'rounded-md focus:ring-pink-400 sm:min-h-14 sm:text-xl' : 'rounded-md focus:ring-violet-400']"
                    :disabled="hasAnswered"
                    @click="selectAnswer(label)"
                >
                    {{ label }}
                    <span
                        v-if="hasAnswered && (normalizedCorrectAnswers.includes(label) || selectedAnswer.split(',').includes(label))"
                        class="absolute -top-2 right-2 z-10 inline-flex items-center rounded-full px-1.5 py-0 text-[9px] font-bold leading-4 shadow-sm"
                        :class="normalizedCorrectAnswers.includes(label) ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700'"
                    >{{ selectedAnswer.split(',').includes(label) && normalizedCorrectAnswers.includes(label) ? 'あなたの回答・正解' : selectedAnswer.split(',').includes(label) ? 'あなたの回答' : '正解' }}</span>
                </button>
            </div>
            <button
                v-if="isMultipleAnswer && !hasAnswered"
                type="button"
                class="mt-3 inline-flex min-h-10 items-center justify-center rounded-md px-5 py-2 text-sm font-semibold text-white transition disabled:cursor-not-allowed disabled:bg-gray-300"
                :class="isIppan ? 'bg-fuchsia-600 hover:bg-fuchsia-700' : 'bg-violet-600 hover:bg-violet-700'"
                :disabled="draftAnswers.length !== normalizedCorrectAnswers.length"
                @click="submitMultipleAnswer"
            >
                回答する
            </button>
            <div v-if="hasAnswered" class="mt-3 flex justify-end border-t border-pink-100 pt-3">
                <button v-if="!studySession?.attemptCompleted?.value" type="button" class="shrink-0 text-xs text-gray-400 hover:text-gray-800" @click="resetAnswer">選び直す</button>
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
        <section v-else-if="hasAnswered" :id="`explanation-q${props.questionNumber}`" class="my-5 scroll-mt-24 border-t border-gray-200 pt-4">
            <h3 class="text-sm font-bold text-gray-900">解説</h3>
            <div class="mt-2 divide-y divide-gray-100">
                <div
                    v-for="(content, index) in props.contents"
                    :key="`explanation-${index}`"
                    class="grid grid-cols-[2rem_minmax(0,1fr)] items-start gap-2 py-2 text-sm leading-7 text-gray-800 md:text-[15px]"
                >
                    <span
                        class="font-bold"
                        :class="normalizedCorrectAnswers.includes(getLabel(index)) ? 'text-emerald-700' : 'text-gray-700'"
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
    <PaywallNotice v-else-if="!props.learningMode && shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
import { computed, inject, nextTick, ref, watch } from "vue";
import { usePage } from "@inertiajs/vue3";
import PaywallNotice from "./PaywallNotice.vue";
import RelatedProblems from "./RelatedProblems.vue";
import StudyAnswerFeedback from "./StudyAnswerFeedback.vue";
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
    correctAnswers: {
        type: Array,
        default: () => [],
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
const draftAnswers = ref<string[]>([]);
const feedbackVisible = ref(false);
const normalizedCorrectAnswers = computed(() =>
    (props.correctAnswers.length ? props.correctAnswers : [props.correctAnswer])
        .map((answer) => String(answer))
        .filter(Boolean)
        .sort(),
);
const isMultipleAnswer = computed(() => normalizedCorrectAnswers.value.length > 1);
const correctAnswerLabel = computed(() => normalizedCorrectAnswers.value.join("・"));
const availableLabels = computed(() => labels.value.slice(0, props.contents.length));
const hasAnswered = computed(() => selectedAnswer.value !== "");
const isCorrect = computed(() => selectedAnswer.value.split(",").filter(Boolean).sort().join(",") === normalizedCorrectAnswers.value.join(","));

const selectAnswer = (label: string): void => {
    if (hasAnswered.value) return;
    if (isMultipleAnswer.value) {
        draftAnswers.value = draftAnswers.value.includes(label)
            ? draftAnswers.value.filter((answer) => answer !== label)
            : [...draftAnswers.value, label].slice(-normalizedCorrectAnswers.value.length);
        return;
    }
    selectedAnswer.value = label;
    emit("answered", Number(props.questionNumber), true);
    studySession?.markAnswered?.(Number(props.questionNumber), true, isCorrect.value, label, correctAnswerLabel.value);
    feedbackVisible.value = true;
    scrollToExplanation();
};

const submitMultipleAnswer = (): void => {
    if (hasAnswered.value || draftAnswers.value.length !== normalizedCorrectAnswers.value.length) return;
    selectedAnswer.value = [...draftAnswers.value].sort().join(",");
    emit("answered", Number(props.questionNumber), true);
    studySession?.markAnswered?.(Number(props.questionNumber), true, isCorrect.value, selectedAnswer.value, correctAnswerLabel.value);
    feedbackVisible.value = true;
    scrollToExplanation();
};

const scrollToExplanation = async (): Promise<void> => {
    await nextTick();
    document.getElementById(`explanation-q${props.questionNumber}`)?.scrollIntoView({ behavior: "smooth", block: "start" });
};

const dismissFeedback = (): void => {
    feedbackVisible.value = false;
};

const resetAnswer = (): void => {
    selectedAnswer.value = "";
    draftAnswers.value = [];
    feedbackVisible.value = false;
    emit("answered", Number(props.questionNumber), false);
    studySession?.markAnswered?.(Number(props.questionNumber), false, false, "");
};

const answerButtonClass = (label: string): string => {
    if (!hasAnswered.value) {
        if (isIppan.value) {
            return draftAnswers.value.includes(label)
                ? "border-fuchsia-500 bg-pink-50 text-fuchsia-700"
                : "border-pink-200 text-gray-800 hover:border-fuchsia-400 hover:bg-pink-50";
        }
        return draftAnswers.value.includes(label)
            ? "border-violet-500 bg-violet-50 text-violet-700"
            : "border-gray-300 text-gray-800 hover:border-violet-400 hover:bg-violet-50";
    }
    if (normalizedCorrectAnswers.value.includes(label)) return "border-emerald-500 text-emerald-700";
    if (selectedAnswer.value.split(",").includes(label)) return "border-rose-500 text-rose-700";
    return "border-gray-200 text-gray-500";
};

watch(
    [() => props.learningMode, () => studySession?.savedAnswers?.value?.[Number(props.questionNumber)]?.selected_answer],
    ([learningMode, savedAnswer]) => {
        selectedAnswer.value = learningMode ? String(savedAnswer ?? "") : "";
        draftAnswers.value = selectedAnswer.value.split(",").filter(Boolean);
    },
    { immediate: true },
);

const page = usePage();
const isDaigaku = computed(() => /(?:^|\/)daigaku(?:\/|$)/.test(String(page.url ?? "")));
const isSenmon = computed(() => /(?:^|\/)senmon(?:\/|$)/.test(String(page.url ?? "")));
const isOuyou = computed(() => /(?:^|\/)ouyou(?:\/|$)/.test(String(page.url ?? "")));
const isHengaku = computed(() => /(?:^|\/)hengaku(?:\/|$)/.test(String(page.url ?? "")));
const isIppan = computed(() => /(?:^|\/)ippan(?:\/|$)/.test(String(page.url ?? "")));
const isSeiho = computed(() => !isDaigaku.value && !isSenmon.value && !isOuyou.value && !isIppan.value && !isHengaku.value);


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
