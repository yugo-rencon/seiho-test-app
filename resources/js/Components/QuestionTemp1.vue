<template>
    <div :id="`q${props.questionNumber}`" class="h-0 scroll-mt-24"></div>
    <div
        v-if="!shouldHideByPaywall && (!props.learningMode || Number(props.questionNumber) === Number(effectiveStudyQuestion))"
        class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-sm md:shadow-md"
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
                <span class="mr-2 inline-block whitespace-nowrap">問題{{ props.questionNumber }}</span>
                <span v-if="props.questionTitle">
                    {{ props.questionTitle }}
                </span>
            </h2>
        </div>
        <p v-if="props.note" class="mb-3 text-sm text-gray-500">
            {{ props.note }}
        </p>

        <div v-if="props.learningMode" class="mb-4 rounded-xl border border-violet-200 bg-white p-4 shadow-sm">
            <p class="text-sm font-bold text-gray-800">{{ props.answerPrompt }}</p>
            <p class="mt-1 text-xs leading-5 text-gray-500">選択すると、正誤と解説が表示されます。</p>
            <div class="mt-3 grid grid-cols-3 gap-2 sm:max-w-md">
                <button
                    v-for="label in availableLabels"
                    :key="label"
                    type="button"
                    class="min-h-12 rounded-lg border-2 bg-white px-4 py-2 text-base font-bold transition focus:outline-none focus:ring-2 focus:ring-violet-400 focus:ring-offset-2"
                    :class="answerButtonClass(label)"
                    :disabled="hasAnswered"
                    @click="selectAnswer(label)"
                >
                    {{ label }}
                </button>
            </div>
            <div
                v-if="hasAnswered"
                class="mt-4 flex flex-wrap items-center justify-between gap-3 rounded-lg border px-4 py-3"
                :class="isCorrect ? 'border-emerald-200 bg-emerald-50 text-emerald-800' : 'border-rose-200 bg-rose-50 text-rose-800'"
                role="status"
                aria-live="polite"
            >
                <p class="text-base font-extrabold">
                    <span class="mr-1" aria-hidden="true">{{ isCorrect ? '○' : '×' }}</span>
                    {{ isCorrect ? '正解です！' : `不正解です。正解は「${props.correctAnswer}」です。` }}
                </p>
                <button type="button" class="text-xs font-bold underline underline-offset-2" @click="resetAnswer">
                    もう一度解く
                </button>
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
        <section v-else-if="hasAnswered" class="my-5 overflow-hidden rounded-xl border border-violet-200 bg-white shadow-sm">
            <div class="flex items-center gap-3 border-b border-violet-100 bg-violet-50 px-4 py-3">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-violet-600 text-sm font-extrabold text-white">解</span>
                <div>
                    <h3 class="text-base font-extrabold text-gray-800">解説</h3>
                    <p class="text-xs text-gray-500">各選択肢のポイントを確認しましょう</p>
                </div>
            </div>
            <div class="divide-y divide-gray-100 px-4">
                <div
                    v-for="(content, index) in props.contents"
                    :key="`explanation-${index}`"
                    class="grid grid-cols-[2.5rem_minmax(0,1fr)] items-start gap-2 py-3 text-sm leading-7 text-gray-800 md:text-[15px]"
                    :class="getLabel(index) === props.correctAnswer ? 'bg-emerald-50/60 -mx-4 px-4' : ''"
                >
                    <span
                        class="inline-flex h-7 w-7 items-center justify-center rounded-full font-extrabold"
                        :class="getLabel(index) === props.correctAnswer ? 'bg-emerald-600 text-white' : 'bg-gray-100 text-gray-700'"
                    >
                        {{ getLabel(index) }}
                    </span>
                    <div class="jp-kagi-tight min-w-0" v-html="formatContentHtml(content)"></div>
                </div>
            </div>
        </section>
        <RelatedProblems :items="props.relatedProblems" :is-daigaku="isDaigaku" :context-title="props.title" :current-question-number="props.questionNumber" />
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
        studySession?.markAnswered?.(Number(props.questionNumber), true);
    }
};

const resetAnswer = (): void => {
    selectedAnswer.value = "";
    emit("answered", Number(props.questionNumber), false);
    studySession?.markAnswered?.(Number(props.questionNumber), false);
};

const answerButtonClass = (label: string): string => {
    if (!hasAnswered.value) return "border-violet-200 text-violet-700 hover:border-violet-400 hover:bg-violet-50";
    if (label === props.correctAnswer) return "border-emerald-500 bg-emerald-50 text-emerald-700";
    if (label === selectedAnswer.value) return "border-rose-500 bg-rose-50 text-rose-700";
    return "border-gray-200 text-gray-400 opacity-60";
};

watch(() => props.learningMode, resetAnswer);

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
