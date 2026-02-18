<template>
    <template v-if="visibleItems.length > 0">
        <div
            v-for="(item, index) in visibleItems"
            :key="index"
            class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-md"
        >
            <div class="flex items-center gap-2 my-4">
                <div class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"></div>
                <h2 class="text-base font-bold text-gray-800">
                    問題{{ item.questionNo }}
                </h2>
            </div>
            <p v-if="item.note" class="mb-3 text-xs text-gray-500">
                {{ item.note }}
            </p>

            <div class="grid gap-2">
                <div class="grid gap-2 text-gray-700 select-none grid-cols-[2em_1fr]">
                    <span class="font-semibold">{{ item.label }}：</span>
                    <p v-html="formatContent(item)"></p>
                </div>
            </div>
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
import PaywallNotice from "./PaywallNotice.vue";
import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

const props = defineProps({
    questionNumber: {
        type: Number,
        required: true,
    },
    questionTitle: {
        type: Array,
        default: () => [],
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
});

const page = usePage();

const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

const isLockedContext = computed(() => {
    return isPaidYear(props.subject, props.title) && !hasPremiumAccess(page.props);
});

const normalizedItems = computed(() => {
    // 新形式(items)があれば最優先。なければ従来の3配列から合成。
    if (props.items.length > 0) {
        return props.items.map((item: any, index: number) => ({
            content: item?.content ?? "",
            label: item?.label ?? getLabel(index),
            note: item?.note ?? getNote(index),
            questionNo: Number(props.questionNumber) + index,
        }));
    }

    return props.contents.map((content: any, index: number) => ({
        content,
        label: getLabel(index),
        note: getNote(index),
        questionNo: Number(props.questionNumber) + index,
    }));
});

const visibleItems = computed(() => {
    if (!isLockedContext.value) return normalizedItems.value;
    return normalizedItems.value.filter(
        (item: any) => Number(item.questionNo) < paywallStartQuestion.value,
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

const getLabel = (index: number) => {
    // 互換対応:
    // - labels が20件: そのまま使う（従来）
    // - labels が10件: 問31〜40は「解」、問41〜50は labels[0..9]
    if (props.labels.length >= 20) {
        return props.labels[index] ?? "";
    }

    if (props.labels.length >= 10) {
        return index < 10 ? "解" : props.labels[index - 10] ?? "";
    }

    return props.labels[index] ?? "";
};

const getNote = (index: number) => {
    // 問題ごとの注記（notes）があれば優先。なければ従来のnoteを先頭のみ表示。
    if (props.notes[index]) return props.notes[index];
    if (index === 0) return props.note;
    return "";
};

const formatContent = (item: { label: string; content: string }) => {
    const raw = String(item?.content ?? "");
    const label = String(item?.label ?? "");

    // 択一ラベルは、label に応じて接頭辞を自動付与する
    if (label === "ア" || label === "イ") {
        if (/^\s*A[-－]/.test(raw)) return raw;
        return `A-${raw}`;
    }

    if (label === "ウ" || label === "エ") {
        if (/^\s*B[-－]/.test(raw)) return raw;
        return `B-${raw}`;
    }

    if (label === "オ") {
        // オは定型を優先（入力を短くするため content は空でも可）
        if (
            raw.trim() === "" ||
            /A・Bともに正しい/.test(raw) ||
            /^\s*C[-－]/.test(raw)
        ) {
            return "C（A・Bともに正しい）";
        }

        return `C-${raw}`;
    }

    return raw;
};
</script>
