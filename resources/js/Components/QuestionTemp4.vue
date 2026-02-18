<template>
    <template v-if="visibleItems.length > 0">
        <div
            v-for="(item, index) in visibleItems"
            :key="index"
            class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-md"
        >
            <!-- 問題番号 -->
            <div class="flex items-center gap-2 my-4">
                <div
                    class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"
                ></div>
                <h2 class="text-base font-bold text-gray-800">
                    問{{ item.questionNo }}
                </h2>
            </div>
            <p v-if="index === 0 && props.note" class="mb-3 text-xs text-gray-500">
                {{ props.note }}
            </p>

            <!-- 回答 -->
            <div class="mt-4 mb-3 inline-flex flex-wrap items-center gap-2 text-gray-700 select-none">
                <span
                    class="inline-flex h-8 items-center rounded-full border border-purple-200 bg-purple-50 px-3 text-xs font-semibold text-purple-700"
                >
                    正解
                </span>
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
                    <div class="question-temp4-structured text-sm sm:text-base leading-relaxed text-gray-800">
                        <template
                            v-for="(part, partIndex) in item.content.explanation"
                            :key="`visible-${item.questionNo}-${partIndex}`"
                        >
                            <p v-if="part.type === 'blockTitle'" class="calc-block-title">
                                {{ part.value }}
                            </p>
                            <p v-else-if="part.type === 'text'" class="calc-text">
                                {{ part.value }}
                            </p>
                            <div v-else-if="part.type === 'kv'" class="calc-kv">
                                <span class="calc-kv-label">{{ part.label }}</span>
                                <span class="calc-kv-sep">:</span>
                                <span class="calc-kv-value">{{ part.value }}</span>
                            </div>
                            <div v-else-if="part.type === 'formula'" class="calc-line">
                                {{ part.value }}
                            </div>
                            <p v-else-if="part.type === 'result'" class="calc-result">
                                {{ part.value }}
                            </p>
                            <p v-else-if="part.type === 'note'" class="calc-note">
                                {{ part.value }}
                            </p>
                            <div
                                v-else-if="part.type === 'tex'"
                                class="calc-tex"
                                v-html="renderKatex(part.value, part.displayMode ?? false)"
                            ></div>
                        </template>
                    </div>
                </template>
                <div
                    v-else
                    class="question-temp4-explanation text-sm sm:text-base leading-relaxed text-gray-800"
                    v-html="item.content.explanation"
                ></div>
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
    <div
        v-if="shouldShowPaywallNotice && firstLockedItem"
        class="relative overflow-hidden rounded-2xl border border-gray-200 bg-white px-6 py-3 shadow-sm opacity-65"
    >
        <div class="flex items-center gap-2 my-4">
            <div
                class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"
            ></div>
            <h2 class="text-base font-bold text-gray-800">
                問{{ firstLockedItem.questionNo }}
            </h2>
        </div>

        <div class="mt-4 mb-3 inline-flex flex-wrap items-center gap-2 text-gray-700 select-none">
            <span
                class="inline-flex h-8 items-center rounded-full border border-purple-200 bg-purple-50 px-3 text-xs font-semibold text-purple-700"
            >
                正解
            </span>
            <div class="inline-flex h-8 items-center gap-2 rounded-full border border-gray-200 bg-gray-50 px-3">
                <span class="font-bold text-base text-gray-900">{{ firstLockedItem.label }}</span>
                <span class="text-gray-400">:</span>
                <p class="text-base font-semibold text-gray-700" v-html="firstLockedItem.content.answer"></p>
            </div>
        </div>

        <div class="my-4 p-4 border border-gray-200 rounded-md">
            <template v-if="isStructuredExplanation(firstLockedItem.content.explanation)">
                <div class="question-temp4-structured text-sm sm:text-base leading-relaxed text-gray-800">
                    <template
                        v-for="(part, partIndex) in firstLockedItem.content.explanation"
                        :key="`locked-${firstLockedItem.questionNo}-${partIndex}`"
                    >
                        <p v-if="part.type === 'blockTitle'" class="calc-block-title">
                            {{ part.value }}
                        </p>
                        <p v-else-if="part.type === 'text'" class="calc-text">
                            {{ part.value }}
                        </p>
                        <div v-else-if="part.type === 'kv'" class="calc-kv">
                            <span class="calc-kv-label">{{ part.label }}</span>
                            <span class="calc-kv-sep">:</span>
                            <span class="calc-kv-value">{{ part.value }}</span>
                        </div>
                        <div v-else-if="part.type === 'formula'" class="calc-line">
                            {{ part.value }}
                        </div>
                        <p v-else-if="part.type === 'result'" class="calc-result">
                            {{ part.value }}
                        </p>
                        <p v-else-if="part.type === 'note'" class="calc-note">
                            {{ part.value }}
                        </p>
                        <div
                            v-else-if="part.type === 'tex'"
                            class="calc-tex"
                            v-html="renderKatex(part.value, part.displayMode ?? false)"
                        ></div>
                    </template>
                </div>
            </template>
            <div
                v-else
                class="question-temp4-explanation text-sm sm:text-base leading-relaxed text-gray-800"
                v-html="firstLockedItem.content.explanation"
            ></div>
        </div>

        <div
            class="pointer-events-none absolute inset-x-0 bottom-0 h-36 bg-gradient-to-b from-transparent via-white/95 to-white"
        ></div>
    </div>

    <PaywallNotice :class="shouldShowPaywallNotice && firstLockedItem ? '-mt-8' : ''" v-if="shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
import { computed, type PropType } from "vue";
import { usePage } from "@inertiajs/vue3";
import katex from "katex";
import PaywallNotice from "./PaywallNotice.vue";
import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

type ExplanationType = "blockTitle" | "text" | "kv" | "formula" | "result" | "note" | "tex";
type ExplanationPart = {
    type: ExplanationType;
    value: string;
    label?: string;
    displayMode?: boolean;
};

type CalcContent = {
    answer: string;
    explanation: string | ExplanationPart[];
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
});

const page = usePage();

const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

const isLockedContext = computed(() => {
    return isPaidYear(props.subject, props.title) && !hasPremiumAccess(page.props);
});

const normalizedItems = computed(() => {
    return props.contents.map((content, index) => ({
        content,
        label: props.labels[index] ?? "",
        questionNo: Number(props.questionNumber) + index,
    }));
});

const visibleItems = computed(() => {
    if (!isLockedContext.value) return normalizedItems.value;
    return normalizedItems.value.filter(
        (item) => Number(item.questionNo) < paywallStartQuestion.value,
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

const firstLockedItem = computed(() => {
    return (
        normalizedItems.value.find(
            (item) => Number(item.questionNo) >= paywallStartQuestion.value,
        ) ?? null
    );
});

const shouldHideExplanation = (questionNo: number): boolean => {
    if (props.hideFromQuestion == null) return false;
    const hideTo = props.hideToQuestion ?? props.hideFromQuestion;
    return questionNo >= props.hideFromQuestion && questionNo <= hideTo;
};

const isStructuredExplanation = (
    explanation: CalcContent["explanation"],
): explanation is ExplanationPart[] => {
    return Array.isArray(explanation);
};

const renderKatex = (value: string, displayMode = true): string => {
    return katex.renderToString(value, {
        displayMode,
        throwOnError: false,
        strict: "ignore",
    });
};
</script>
