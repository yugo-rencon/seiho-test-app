<template>
    <div
        v-for="item in hiddenItems"
        :key="`hidden-${item.questionNo}`"
        :id="`q${item.questionNo}`"
        class="h-0 scroll-mt-24"
    ></div>
    <template v-if="visibleItems.length > 0">
        <div
            v-for="(item, index) in visibleItems"
            :key="index"
            :id="`q${item.questionNo}`"
            v-show="!props.learningMode || Number(effectiveStudyQuestion) === Number(item.questionNo)"
            class="scroll-mt-24 rounded-lg border bg-white px-4 py-3 sm:px-6"
            :class="props.learningMode ? 'border-gray-200' : 'border-gray-300 shadow-sm md:shadow-md'"
        >
            <!-- 問題番号 -->
            <div class="flex items-start gap-2 my-4">
                <div v-if="!props.learningMode"
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
                    <span :class="props.learningMode ? 'shrink-0 text-xs font-normal text-gray-500' : 'mr-2 inline-block whitespace-nowrap'">問{{ item.questionNo }}</span>
                    <span v-if="item.questionTitle">
                        {{ item.questionTitle }}
                    </span>
                </h2>
            </div>
            <p v-if="item.note" class="mb-3 text-xs text-gray-500">
                {{ item.note }}
            </p>
            <div v-if="props.learningMode" class="mb-4 border-t border-gray-100 pt-4">
                <p class="text-sm font-bold text-gray-800">{{ props.answerPrompt }}</p>
                <div class="mt-3 grid gap-2 sm:grid-cols-3">
                    <button
                        v-for="choice in choicesFor(item)"
                        :key="choice.label"
                        type="button"
                        class="grid min-h-12 grid-cols-[1.75rem_minmax(0,1fr)] items-center rounded-md border bg-white px-3 py-2 text-left text-sm transition focus:outline-none focus:ring-2 focus:ring-violet-400 focus:ring-offset-2"
                        :class="answerButtonClass(item, choice.label)"
                        :disabled="Boolean(selectedAnswers[item.questionNo])"
                        @click="selectAnswer(item, choice.label)"
                    >
                        <span class="font-bold">{{ choice.label }}</span>
                        <span class="min-w-0 leading-6">{{ choice.text }}</span>
                    </button>
                </div>
                <div v-if="selectedAnswers[item.questionNo]" class="mt-3 flex flex-wrap items-center justify-between gap-x-4 gap-y-2 border-t border-gray-200 pt-3 text-base" role="status" aria-live="polite">
                    <p class="flex flex-wrap items-center gap-x-2 text-gray-800">
                        <span class="font-semibold" :class="isCorrect(item) ? 'text-emerald-700' : 'text-rose-700'">{{ isCorrect(item) ? '○' : '×' }}</span>
                        <span class="font-semibold">{{ isCorrect(item) ? '正解' : '不正解' }}</span>
                        <template v-if="!isCorrect(item)"><span class="text-gray-300">｜</span><span class="text-sm text-gray-500">正解</span><span>{{ item.label }}</span></template>
                    </p>
                    <button v-if="!studySession?.attemptCompleted?.value" type="button" class="shrink-0 text-xs text-gray-400 hover:text-gray-800" @click="resetAnswer(item)">選び直す</button>
                </div>
            </div>

            <!-- 回答 -->
            <div v-if="!props.learningMode || selectedAnswers[item.questionNo]" class="mt-4 mb-3 inline-flex flex-wrap items-center gap-2 text-gray-700 select-none">
                <div class="inline-flex h-8 items-center gap-2 rounded-full border border-gray-200 bg-gray-50 px-3">
                    <span class="font-bold text-base text-gray-900">
                        {{ item.label }}
                    </span>
                    <span class="text-gray-400">:</span>
                    <p class="text-base font-semibold text-gray-700" v-html="formatInlineContentHtml(item.content.answer)"></p>
                </div>
            </div>
            <!-- 解説 -->
            <div
                v-if="(!props.learningMode || selectedAnswers[item.questionNo]) && !shouldHideExplanation(item.questionNo)"
                class="my-4 p-4 border border-gray-200 rounded-md"
            >
                <template v-if="isStructuredExplanation(item.content.explanation)">
                    <div
                        class="question-temp4-structured text-sm sm:text-base leading-relaxed text-gray-800"
                        :class="{ 'is-daigaku': isDaigaku, 'is-senmon': isSenmon, 'is-ouyou': isOuyou, 'is-ippan': isIppan, 'is-seiho': isSeiho }"
                    >
                        <template
                            v-for="(part, partIndex) in item.content.explanation"
                            :key="`visible-${item.questionNo}-${partIndex}`"
                        >
                            <p v-if="part.type === 'blockTitle'" class="calc-block-title">
                                {{ part.value }}
                            </p>
                            <p
                                v-else-if="part.type === 'text'"
                                class="calc-text jp-kagi-tight"
                                v-html="formatInlineContentHtml(toText(part.value))"
                            ></p>
                            <div v-else-if="part.type === 'kv'" class="calc-kv">
                                <span class="calc-kv-label">{{ part.label }}</span>
                                <span class="calc-kv-sep">:</span>
                                <span class="calc-kv-value">{{ part.value }}</span>
                            </div>
                            <div v-else-if="part.type === 'formula'" class="calc-line">
                                {{ toText(part.value) }}
                            </div>
                            <div v-else-if="part.type === 'formulaBlock'" class="calc-formula-block">
                                <div
                                    v-for="(line, lineIndex) in toLines(part.value)"
                                    :key="`visible-${item.questionNo}-${partIndex}-${lineIndex}`"
                                    class="calc-formula-block-line"
                                    v-html="formatInlineContentHtml(line)"
                                ></div>
                            </div>
                            <p v-else-if="part.type === 'result'" class="calc-result">
                                {{ toText(part.value) }}
                            </p>
                            <p
                                v-else-if="part.type === 'note'"
                                class="calc-note jp-kagi-tight"
                                v-html="formatInlineContentHtml(toText(part.value))"
                            ></p>
                            <div
                                v-else-if="part.type === 'tex'"
                                class="calc-tex"
                                v-html="renderKatex(toText(part.value), part.displayMode ?? false)"
                            ></div>
                        </template>
                    </div>
                </template>
                <div
                    v-else
                    class="question-temp4-explanation jp-kagi-tight text-sm sm:text-base leading-relaxed text-gray-800"
                    :class="{ 'is-daigaku': isDaigaku, 'is-senmon': isSenmon, 'is-ouyou': isOuyou, 'is-ippan': isIppan, 'is-seiho': isSeiho }"
                    v-html="formatInlineContentHtml(item.content.explanation)"
                ></div>
            </div>
            <div
                v-else-if="!props.learningMode"
                class="my-4 rounded-md border border-dashed border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500"
            >
                解説はプレミアムプランで閲覧できます。
            </div>
            <RelatedProblems v-if="!props.learningMode"
                :items="item.relatedProblems"
                :is-daigaku="isDaigaku"
                :context-title="props.title"
                :current-question-number="item.questionNo"
            />

            <!-- タイトルと科目 -->
            <div v-if="!props.learningMode" class="flex justify-end text-gray-400 text-xxs lg:text-xs">
                {{ props.title }}
            </div>
            <div v-if="!props.learningMode" class="flex justify-end text-gray-400 text-xxs lg:text-xs">
                {{ props.subject }}
            </div>
        </div>
    </template>
    <PaywallNotice v-if="!props.learningMode && shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
import { computed, inject, ref, watch, type PropType } from "vue";
import { usePage } from "@inertiajs/vue3";
import katex from "katex";
import PaywallNotice from "./PaywallNotice.vue";
import RelatedProblems from "./RelatedProblems.vue";
import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear, requiresIppanFreeLogin } from "@/utils/paywall";
import { formatInlineContentHtml } from "@/utils/formatContentHtml";

type ExplanationType = "blockTitle" | "text" | "kv" | "formula" | "formulaBlock" | "result" | "note" | "tex";
type ExplanationPart = {
    type: ExplanationType;
    value: string | string[];
    label?: string;
    displayMode?: boolean;
};

type CalcContent = {
    title?: string;
    questionTitle?: string;
    note?: string;
    answer: string;
    explanation: string | ExplanationPart[];
    relatedProblems?: { label?: string; href?: string }[];
};

const props = defineProps({
    questionNumber: {
        type: Number,
        required: true,
    },
    contents: {
        type: Array as PropType<CalcContent[]>,
        required: true,
    },
    questionTitle: {
        type: [Array, String] as PropType<string[] | string>,
        default: "",
    },
    labels: {
        type: Array as PropType<string[]>,
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
    hideFromQuestion: {
        type: Number as PropType<number | null>,
        default: null,
    },
    hideToQuestion: {
        type: Number as PropType<number | null>,
        default: null,
    },
    relatedProblems: {
        type: Array as PropType<Array<Array<{ label?: string; href?: string }>>>,
        default: () => [],
    },
    learningMode: {
        type: Boolean,
        default: false,
    },
    choiceOptions: {
        type: Array as PropType<Array<{ label: string; text: string }>>,
        default: () => [],
    },
    choiceOptionsByQuestion: {
        type: Object as PropType<Record<number, Array<{ label: string; text: string }>>>,
        default: () => ({}),
    },
    answerPrompt: {
        type: String,
        default: "最も適切な選択肢を1つ選んでください",
    },
    studyQuestion: {
        type: Number,
        default: 0,
    },
});

const studySession: any = inject("studySession", null);
const effectiveStudyQuestion = computed(() => studySession?.currentQuestion?.value ?? props.studyQuestion);
const selectedAnswers = ref<Record<number, string>>({});

const choicesFor = (item: any) => props.choiceOptionsByQuestion?.[item.questionNo] ?? props.choiceOptions;
const isCorrect = (item: any) => selectedAnswers.value[item.questionNo] === item.label;
const selectAnswer = (item: any, label: string) => {
    if (selectedAnswers.value[item.questionNo]) return;
    selectedAnswers.value = { ...selectedAnswers.value, [item.questionNo]: label };
    studySession?.markAnswered?.(Number(item.questionNo), true, label === item.label, label, item.label);
};
const resetAnswer = (item: any) => {
    const next = { ...selectedAnswers.value };
    delete next[item.questionNo];
    selectedAnswers.value = next;
    studySession?.markAnswered?.(Number(item.questionNo), false, false, "");
};
const answerButtonClass = (item: any, label: string) => {
    const selected = selectedAnswers.value[item.questionNo];
    if (!selected) return "border-gray-300 text-gray-800 hover:border-violet-400 hover:bg-violet-50";
    if (label === item.label) return "border-emerald-500 text-emerald-700";
    if (label === selected) return "border-rose-500 text-rose-700";
    return "border-gray-200 text-gray-500";
};

const page = usePage();
const isDaigaku = computed(() => /(?:^|\/)daigaku(?:\/|$)/.test(String(page.url ?? "")));
const isSenmon = computed(() => /(?:^|\/)senmon(?:\/|$)/.test(String(page.url ?? "")));
const isOuyou = computed(() => /(?:^|\/)ouyou(?:\/|$)/.test(String(page.url ?? "")));
const isIppan = computed(() => /(?:^|\/)ippan(?:\/|$)/.test(String(page.url ?? "")));
const isSeiho = computed(() => !isDaigaku.value && !isSenmon.value && !isOuyou.value && !isIppan.value);

const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

const isLockedContext = computed(() => {
    return requiresIppanFreeLogin(page.props)
        || (isPaidYear(props.subject, props.title) && !hasPremiumAccess(page.props));
});

const normalizedItems = computed(() => {
    return props.contents.map((content, index) => ({
        content,
        label: props.labels[index] ?? "",
        questionNo: Number(props.questionNumber) + index,
        questionTitle: getQuestionTitle(index, content),
        note: content?.note ?? (index === 0 ? props.note : ""),
        relatedProblems: content?.relatedProblems ?? getRelatedProblems(index),
    }));
});

const visibleItems = computed(() => {
    if (!isLockedContext.value) return normalizedItems.value;
    return normalizedItems.value.filter(
        (item) => Number(item.questionNo) < paywallStartQuestion.value,
    );
});

const hiddenItems = computed(() => {
    if (!isLockedContext.value) return [];
    return normalizedItems.value.filter(
        (item) => Number(item.questionNo) >= paywallStartQuestion.value,
    );
});

const shouldShowPaywallNotice = computed(() => {
    if (!isLockedContext.value) return false;
    if (normalizedItems.value.length === 0) return false;

    const firstQuestion = Number(normalizedItems.value[0].questionNo);
    const lastQuestion = Number(
        normalizedItems.value[normalizedItems.value.length - 1].questionNo,
    );

    return (
        paywallStartQuestion.value >= firstQuestion &&
        paywallStartQuestion.value <= lastQuestion
    );
});

const shouldHideExplanation = (questionNo: number): boolean => {
    if (props.hideFromQuestion == null) return false;
    const hideTo = props.hideToQuestion ?? props.hideFromQuestion;
    return questionNo >= props.hideFromQuestion && questionNo <= hideTo;
};

const getRelatedProblems = (index: number) => {
    const value = props.relatedProblems?.[index];
    return Array.isArray(value) ? value : [];
};

const isStructuredExplanation = (
    explanation: CalcContent["explanation"],
): explanation is ExplanationPart[] => {
    return Array.isArray(explanation);
};

const toText = (value: string | string[]): string => {
    return Array.isArray(value) ? value.join("\n") : value;
};

const toLines = (value: string | string[]): string[] => {
    if (Array.isArray(value)) return value;
    return String(value ?? "")
        .split("\n")
        .map((line) => line.trimEnd())
        .filter((line) => line !== "");
};

const renderKatex = (value: string, displayMode = true): string => {
    return katex.renderToString(value, {
        displayMode,
        throwOnError: false,
        strict: "ignore",
    });
};

const getQuestionTitle = (index: number, content: CalcContent): string => {
    if (content?.title) return content.title;
    if (content?.questionTitle) return content.questionTitle;
    if (Array.isArray(props.questionTitle)) return props.questionTitle[index] ?? "";
    return props.questionTitle ?? "";
};

watch(
    [() => props.learningMode, () => studySession?.savedAnswers?.value],
    ([learningMode, savedAnswers]) => {
        if (!learningMode) {
            selectedAnswers.value = {};
            return;
        }
        selectedAnswers.value = Object.fromEntries(
            normalizedItems.value
                .map((item) => [item.questionNo, String(savedAnswers?.[item.questionNo]?.selected_answer ?? "")])
                .filter(([, answer]) => answer !== ""),
        );
    },
    { immediate: true, deep: true },
);
</script>
