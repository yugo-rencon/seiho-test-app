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
                                ? 'bg-gradient-to-b from-pink-400 to-fuchsia-400'
                                : 'bg-gradient-to-b from-purple-400 to-blue-400'
                    "
                ></div>
                <h2 class="text-base font-bold leading-tight text-gray-700">
                    <span class="mr-2 inline-block whitespace-nowrap">問{{ item.questionNo }}</span>
                    <span v-if="item.questionTitle">
                        {{ item.questionTitle }}
                    </span>
                </h2>
            </div>
            <p v-if="item.note" class="mb-3 text-xs text-gray-500">
                {{ item.note }}
            </p>

            <!-- 回答 -->
            <div class="mt-4 mb-3 inline-flex flex-wrap items-center gap-2 text-gray-700 select-none">
                <div class="inline-flex h-8 items-center gap-2 rounded-full border border-gray-200 bg-gray-50 px-3">
                    <span class="font-bold text-base text-gray-900">
                        {{ item.label }}
                    </span>
                    <span class="text-gray-400">:</span>
                    <p class="text-base font-semibold text-gray-700" v-html="item.content.answer"></p>
                </div>
            </div>
            <!-- 解説 -->
            <div
                v-if="!shouldHideExplanation(item.questionNo)"
                class="my-4 p-4 border border-gray-200 rounded-md"
            >
                <template v-if="isStructuredExplanation(item.content.explanation)">
                    <div
                        class="question-temp4-structured text-sm sm:text-base leading-relaxed text-gray-800"
                        :class="{ 'is-daigaku': isDaigaku, 'is-ippan': isIppan }"
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
                                class="calc-text"
                                v-html="toText(part.value)"
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
                                    v-html="line"
                                ></div>
                            </div>
                            <p v-else-if="part.type === 'result'" class="calc-result">
                                {{ toText(part.value) }}
                            </p>
                            <p
                                v-else-if="part.type === 'note'"
                                class="calc-note"
                                v-html="toText(part.value)"
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
                    class="question-temp4-explanation text-sm sm:text-base leading-relaxed text-gray-800"
                    :class="{ 'is-daigaku': isDaigaku, 'is-ippan': isIppan }"
                    v-html="item.content.explanation"
                ></div>
            </div>
            <div
                v-else
                class="my-4 rounded-md border border-dashed border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-500"
            >
                解説はプレミアムプランで閲覧できます。
            </div>
            <RelatedProblems
                :items="item.relatedProblems"
                :is-daigaku="isDaigaku"
                :context-title="props.title"
                :current-question-number="item.questionNo"
            />

            <!-- タイトルと科目 -->
            <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
                {{ props.title }}
            </div>
            <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
                {{ props.subject }}
            </div>
        </div>
    </template>
    <PaywallNotice v-if="shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
import { computed, type PropType } from "vue";
import { usePage } from "@inertiajs/vue3";
import katex from "katex";
import PaywallNotice from "./PaywallNotice.vue";
import RelatedProblems from "./RelatedProblems.vue";
import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

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
});

const page = usePage();
const isDaigaku = computed(() => String(page.url ?? "").startsWith("/daigaku"));
const isIppan = computed(() => String(page.url ?? "").startsWith("/ippan"));

const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

const isLockedContext = computed(() => {
    return isPaidYear(props.subject, props.title) && !hasPremiumAccess(page.props);
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
</script>
