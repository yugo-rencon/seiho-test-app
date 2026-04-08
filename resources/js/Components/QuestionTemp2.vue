<template>
    <div
        v-for="item in hiddenItems"
        :key="`hidden-${item.questionNo}`"
        :id="`q${item.questionNo}`"
        class="h-0 scroll-mt-24"
    ></div>
    <template v-if="visibleItems.length > 0">
        <div v-if="showAd" class="mt-2 rounded-lg bg-white p-2 shadow-sm">
            <AdSenseUnit ad-slot="8570892917" />
        </div>
        <div v-for="(item, index) in visibleItems" :key="index" :id="`q${item.questionNo}`" class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-sm md:shadow-md scroll-mt-24">
            <div v-if="shouldShowSeihoAdBeforeItem(item.questionNo)" class="mb-2 rounded-lg bg-white p-2 shadow-sm">
                <AdSenseUnit ad-slot="8570892917" />
            </div>
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
                                ? 'bg-gradient-to-b from-rose-400 to-red-400'
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
                    class="grid gap-2 text-sm leading-6 text-gray-800 select-none md:text-[15px] grid-cols-[2em_1fr]"
                >
                    <span class="font-semibold">{{ item.label }}：</span>
                    <p v-html="formatContent(item)"></p>
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
    <PaywallNotice v-if="shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import AdSenseUnit from "./AdSenseUnit.vue";
import PaywallNotice from "./PaywallNotice.vue";
import RelatedProblems from "./RelatedProblems.vue";
import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

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
});

const page = usePage();
const isDaigaku = computed(() => String(page.url ?? "").startsWith("/daigaku"));
const isSenmon = computed(() => String(page.url ?? "").startsWith("/senmon"));
const isOuyou = computed(() => String(page.url ?? "").startsWith("/ouyou"));
const isIppan = computed(() => String(page.url ?? "").startsWith("/ippan"));
const isSeiho = computed(() => !isDaigaku.value && !isSenmon.value && !isOuyou.value && !isIppan.value);

const showAd = computed(() => {
    return (isDaigaku.value || isIppan.value || isOuyou.value || isSenmon.value) && !hasPremiumAccess(page.props);
});

const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

const isLockedContext = computed(() => {
    return isPaidYear(props.subject, props.title) && !hasPremiumAccess(page.props);
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

const shouldShowSeihoAdBeforeItem = (questionNo: number) => {
    return isSeiho.value && !hasPremiumAccess(page.props) && Number(questionNo) === 41;
};

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
    const raw = String(value ?? "");
    return raw.replace(/↔︎|↔|←→|⇔/g, " <strong>⇔</strong> ");
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
