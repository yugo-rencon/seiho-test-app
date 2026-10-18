<template>
    <div
        v-for="item in hiddenItems"
        :key="`hidden-${item.questionNo}`"
        :id="`q${item.questionNo}`"
        class="h-0 scroll-mt-24"
    ></div>
    <template v-if="props.learningMode && visibleItems.length > 0">
        <article
            v-for="item in visibleItems"
            v-show="Number(effectiveStudyQuestion) === Number(item.questionNo)"
            :key="`study-${item.questionNo}`"
            :id="`q${item.questionNo}`"
            class="scroll-mt-24 rounded-lg border border-gray-200 bg-white px-4 py-5 sm:px-6"
            :class="{ 'is-daigaku': isDaigaku, 'is-senmon': isSenmon, 'is-ouyou': isOuyou, 'is-ippan': isIppan, 'is-seiho': isSeiho }"
        >
            <div class="flex items-start gap-2">
                <h2 class="flex min-w-0 items-start gap-2 text-base font-bold leading-tight text-gray-700">
                    <span class="shrink-0 whitespace-nowrap text-xs font-normal text-gray-500">問{{ item.questionNo }}</span>
                    <span v-if="item.questionTitle" class="min-w-0">{{ item.questionTitle }}</span>
                </h2>
            </div>
            <div
                class="mt-4 border-t border-gray-100 pt-4"
            >
                <template v-if="!selectedAnswers[item.questionNo] || choicesFor(item).length">
                    <p class="text-sm font-bold text-gray-800">{{ choicesFor(item).length ? '最も適切な組み合わせを1つ選んでください' : '文章の内容が正しいか、誤っているかを選んでください' }}</p>
                </template>
                <div v-if="choicesFor(item).length" class="mt-3 grid grid-cols-1 gap-2 sm:grid-cols-2">
                    <button
                        v-for="choice in choicesFor(item)"
                        :key="choice.label"
                        type="button"
                        class="rounded-md border bg-white px-3 text-left font-bold transition focus:outline-none focus:ring-2 focus:ring-violet-400 focus:ring-offset-2"
                        :class="[trueFalseButtonClass(item, choice.label), 'min-h-12 py-2 text-sm']"
                        :disabled="Boolean(selectedAnswers[item.questionNo])"
                        @click="answerTrueFalse(item, choice.label)"
                    ><span class="font-extrabold">{{ choice.label }}.</span><span class="ml-1">{{ choice.text }}</span></button>
                </div>
                <div v-else class="grid grid-cols-2 gap-2 sm:max-w-sm" :class="selectedAnswers[item.questionNo] ? '' : 'mt-3'">
                    <button
                        v-for="choice in ['正', '誤']"
                        :key="choice"
                        type="button"
                        class="rounded-md border bg-white px-4 font-extrabold transition focus:outline-none focus:ring-2 focus:ring-violet-400 focus:ring-offset-2"
                        :class="[trueFalseButtonClass(item, choice), selectedAnswers[item.questionNo] ? 'min-h-9 py-1 text-sm' : 'min-h-12 py-2 text-base']"
                        :disabled="Boolean(selectedAnswers[item.questionNo])"
                        @click="answerTrueFalse(item, choice)"
                    >{{ choice }}</button>
                </div>
                <div v-if="selectedAnswers[item.questionNo]" class="mt-3 flex flex-wrap items-center justify-between gap-x-4 gap-y-2 border-t border-gray-200 pt-3 text-base" role="status">
                    <p class="flex flex-wrap items-center gap-x-2 text-gray-800">
                        <span class="font-semibold" :class="isTrueFalseCorrect(item) ? 'text-emerald-700' : 'text-rose-700'">{{ isTrueFalseCorrect(item) ? '○' : '×' }}</span>
                        <span class="font-semibold">{{ isTrueFalseCorrect(item) ? '正解' : '不正解' }}</span>
                        <template v-if="!isTrueFalseCorrect(item)"><span class="text-gray-300">｜</span><span class="text-sm text-gray-500">正解</span><span>{{ correctAnswerFor(item) }}</span></template>
                    </p>
                    <button v-if="!studySession?.attemptCompleted?.value" type="button" class="shrink-0 text-xs text-gray-400 hover:text-gray-800" @click="resetTrueFalse(item)">選び直す</button>
                </div>
            </div>
            <section v-if="selectedAnswers[item.questionNo] && !choicesFor(item).length" class="my-5 border-t border-gray-200 pt-4">
                <h3 class="text-sm font-bold text-gray-900">解説</h3>
                <div class="mt-2 text-sm leading-7 text-gray-800 md:text-[15px]" v-html="formatContent(item)"></div>
            </section>
        </article>
    </template>
    <template v-else-if="visibleItems.length > 0">
        <template v-for="(item, index) in visibleItems" :key="index">
            <div
                :id="`q${item.questionNo}`"
                class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-sm md:shadow-md scroll-mt-24"
                :class="{ 'is-daigaku': isDaigaku, 'is-senmon': isSenmon, 'is-ouyou': isOuyou, 'is-ippan': isIppan, 'is-seiho': isSeiho }"
            >
                <div class="flex items-start gap-2 my-4">
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
                    <span class="mr-2 inline-block whitespace-nowrap">問題{{ item.questionNo }}</span>
                    <span v-if="item.questionTitle">
                        {{ item.questionTitle }}
                    </span>
                </h2>
            </div>
                <p v-if="item.note" class="mb-3 text-sm text-gray-500">
                    {{ item.note }}
                </p>

                <div class="grid gap-2">
                    <div
                        class="grid grid-cols-[2em_minmax(0,1fr)] gap-1 text-sm leading-6 text-gray-800 select-none md:text-[15px]"
                    >
                        <span class="font-semibold">{{ item.label }}：</span>
                        <div class="jp-kagi-tight min-w-0" v-html="formatContent(item)"></div>
                    </div>
                </div>
                <RelatedProblems
                    :items="item.relatedProblems"
                    :is-daigaku="isDaigaku"
                    :context-title="props.title"
                    :current-question-number="item.questionNo"
                />
                <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
                    {{ props.title }}
                </div>
                <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
                    {{ props.subject }}
                </div>
            </div>
        </template>
    </template>
    <PaywallNotice v-if="!props.learningMode && shouldShowPaywallNotice" />
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
        type: Number,
        required: true,
    },
    questionTitle: {
        type: [Array, String],
        default: "",
    },
    contents: {
        type: Array,
        default: () => [],
    },
    items: {
        type: Array,
        default: () => [],
    },
    labels: {
        type: Array,
        default: () => [],
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
    notes: {
        type: Array,
        default: () => [],
    },
    relatedProblems: {
        type: Array,
        default: () => [],
    },
    useAnswerLabelForAll: {
        type: Boolean,
        default: false,
    },
    applyChoicePrefix: {
        type: Boolean,
        default: true,
    },
    isDraft: {
        type: Boolean,
        default: false,
    },
    learningMode: {
        type: Boolean,
        default: false,
    },
    correctAnswers: {
        type: Array,
        default: () => [],
    },
    choiceOptionsByQuestion: {
        type: Object,
        default: () => ({}),
    },
});

const emit = defineEmits(["answered"]);
const studySession: any = inject("studySession", null);
const effectiveStudyQuestion = computed(() => studySession?.currentQuestion?.value ?? 0);
const selectedAnswers = ref({});

const choicesFor = (item: any): any[] => {
    const choices = props.choiceOptionsByQuestion?.[item.questionNo];
    if (Array.isArray(choices) && choices.length) return choices;
    if (['ア', 'イ', 'ウ', 'エ', 'オ'].includes(String(item.label ?? ''))) {
        return ['ア', 'イ', 'ウ', 'エ', 'オ'].map((label) => ({ label, text: '' }));
    }
    return [];
};

const correctAnswerFor = (item: any): string => {
    const index = Number(item.questionNo) - Number(props.questionNumber);
    return String(props.correctAnswers[index] ?? "");
};

const isTrueFalseCorrect = (item: any): boolean => selectedAnswers.value[item.questionNo] === correctAnswerFor(item);

const answerTrueFalse = (item: any, choice: string): void => {
    if (selectedAnswers.value[item.questionNo]) return;
    selectedAnswers.value = { ...selectedAnswers.value, [item.questionNo]: choice };
    emit("answered", Number(item.questionNo), true);
    studySession?.markAnswered?.(Number(item.questionNo), true, isTrueFalseCorrect(item), choice, correctAnswerFor(item));
};

const resetTrueFalse = (item: any): void => {
    const next = { ...selectedAnswers.value };
    delete next[item.questionNo];
    selectedAnswers.value = next;
    emit("answered", Number(item.questionNo), false);
    studySession?.markAnswered?.(Number(item.questionNo), false, false, "");
};

const trueFalseButtonClass = (item: any, choice: string): string => {
    const selected = selectedAnswers.value[item.questionNo];
    if (!selected) return "border-gray-300 text-gray-800 hover:border-violet-400 hover:bg-violet-50";
    if (choice === correctAnswerFor(item)) return "border-emerald-500 text-emerald-700";
    if (choice === selected) return "border-rose-500 text-rose-700";
    return "border-gray-200 text-gray-500";
};

watch(
    [() => props.learningMode, () => studySession?.savedAnswers?.value],
    ([learningMode, savedAnswers]) => {
        if (!learningMode) {
            selectedAnswers.value = {};
            return;
        }

        selectedAnswers.value = Object.fromEntries(
            Object.entries(savedAnswers ?? {}).map(([questionNumber, answer]: [string, any]) => [
                questionNumber,
                String(answer?.selected_answer ?? ""),
            ]),
        );
    },
    { immediate: true, deep: true },
);

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
    // 新形式(items)があれば最優先。なければ従来の3配列から合成。
    if (props.items.length > 0) {
        return props.items.map((item: any, index: number) => ({
            content: item?.content ?? "",
            // 既定は従来互換（前半10問のみ「解」）。
            // useAnswerLabelForAll を有効にすると、label 未指定時は全問「解」。
            label: item?.label ?? (props.useAnswerLabelForAll ? "解" : (index < 10 ? "解" : getLabel(index))),
            note: item?.note ?? getNote(index),
            questionNo: Number(props.questionNumber) + index,
            questionTitle: item?.questionTitle ?? getQuestionTitle(index),
            relatedProblems: item?.relatedProblems ?? getRelatedProblems(index),
        }));
    }

    return props.contents.map((content: any, index: number) => ({
        content,
        label: getLabel(index),
        note: getNote(index),
        questionNo: Number(props.questionNumber) + index,
        questionTitle: getQuestionTitle(index),
        relatedProblems: getRelatedProblems(index),
    }));
});

const visibleItems = computed(() => {
    if (!isLockedContext.value) return normalizedItems.value;
    return normalizedItems.value.filter((item: any) => Number(item.questionNo) < paywallStartQuestion.value);
});

const hiddenItems = computed(() => {
    if (!isLockedContext.value) return [];
    return normalizedItems.value.filter((item: any) => Number(item.questionNo) >= paywallStartQuestion.value);
});

const shouldShowPaywallNotice = computed(() => {
    if (!isLockedContext.value) return false;
    if (normalizedItems.value.length === 0) return false;

    const firstQuestion = Number(normalizedItems.value[0].questionNo);
    const lastQuestion = Number(normalizedItems.value[normalizedItems.value.length - 1].questionNo);

    return paywallStartQuestion.value >= firstQuestion && paywallStartQuestion.value <= lastQuestion;
});


const getLabel = (index: number) => {
    // 互換対応:
    // - labels が20件: そのまま使う（従来）
    // - labels が10件: 問31〜40は「解」、問41〜50は labels[0..9]
    if (props.labels.length >= 20) {
        return props.labels[index] ?? "";
    }

    if (props.labels.length >= 10) {
        return index < 10 ? "解" : (props.labels[index - 10] ?? "");
    }

    return props.labels[index] ?? "";
};

const getNote = (index: number) => {
    // 問題ごとの注記（notes）があれば優先。なければ従来のnoteを先頭のみ表示。
    if (props.notes[index]) return props.notes[index];
    if (index === 0) return props.note;
    return "";
};

const getQuestionTitle = (index: number) => {
    if (Array.isArray(props.questionTitle)) return props.questionTitle[index] ?? "";
    return props.questionTitle ?? "";
};

const getRelatedProblems = (index: number) => {
    const value = props.relatedProblems?.[index];
    return Array.isArray(value) ? value : [];
};

const normalizeBiArrowHtml = (value: unknown): string => {
    return formatInlineContentHtml(value);
};

const formatContent = (item: { label: string; content: string }) => {
    const raw = String(item?.content ?? "");
    const label = String(item?.label ?? "");

    if (!props.applyChoicePrefix) {
        return normalizeBiArrowHtml(raw);
    }

    // 択一ラベルは、label に応じて接頭辞を自動付与する
    if (label === "ア" || label === "イ") {
        if (/^\s*A[-－]/.test(raw)) return normalizeBiArrowHtml(raw);
        return normalizeBiArrowHtml(`A-${raw}`);
    }

    if (label === "ウ" || label === "エ") {
        if (/^\s*B[-－]/.test(raw)) return normalizeBiArrowHtml(raw);
        return normalizeBiArrowHtml(`B-${raw}`);
    }

    if (label === "オ") {
        // オは定型を優先（入力を短くするため content は空でも可）
        if (raw.trim() === "" || /A・Bともに正しい/.test(raw) || /^\s*C[-－]/.test(raw)) {
            return normalizeBiArrowHtml("C（A・Bともに正しい）");
        }

        return normalizeBiArrowHtml(`C-${raw}`);
    }

    return normalizeBiArrowHtml(raw);
};

</script>
