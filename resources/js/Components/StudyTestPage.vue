<script setup>
import DraftNotice from "@/Components/DraftNotice.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import { usePage } from "@inertiajs/vue3";
import axios from "axios";
import { computed, nextTick, onBeforeUnmount, onMounted, provide, ref, watch } from "vue";

const props = defineProps({
    title: { type: String, required: true },
    subject: { type: String, required: true },
    examKey: { type: String, required: true },
    initialStudyState: { type: Object, default: null },
    studyEnabled: { type: Boolean, default: false },
    questionCount: { type: Number, default: 50 },
    maxScore: { type: Number, default: 100 },
    scoreSections: { type: Array, required: true },
    nextRoute: { type: String, default: "" },
    isDraft: { type: Boolean, default: false },
});

const page = usePage();
const isLoggedIn = computed(() => Boolean(page.props.auth?.user));
const questionMenu = ref(null);
const questions = computed(() => Array.from({ length: props.questionCount }, (_, index) => index + 1));
const initialAnswers = Object.fromEntries((props.initialStudyState?.attempt?.answers ?? []).map((answer) => [Number(answer.question_no), answer]));
const initialAnsweredCount = Object.keys(initialAnswers).length;
const initialAttemptCompleted = props.initialStudyState?.attempt?.status === "completed";
const initialAttemptScore = Number(props.initialStudyState?.attempt?.score ?? 0);
const initialQuestionNumber = Number(props.initialStudyState?.attempt?.current_question_no ?? 1);
const initialResumeQuestion = questions.value.find((questionNumber) => !initialAnswers[questionNumber]) ?? initialQuestionNumber;

const displayMode = ref(props.studyEnabled && props.initialStudyState?.preferred_test_mode === "study" ? "study" : "browse");
const currentIndex = ref(0);
const answeredQuestions = ref(new Set());
const correctQuestions = ref(new Set());
const savedAnswers = ref({});
const hasPendingSavedProgress = ref(initialAnsweredCount > 0);
const resultDismissed = ref(Boolean(props.initialStudyState?.attempt));
const showResumeNotice = ref(initialAnsweredCount > 0);
const currentQuestion = computed(() => questions.value[currentIndex.value]);
const currentAnswered = computed(() => answeredQuestions.value.has(currentQuestion.value));
const isComplete = computed(() => answeredQuestions.value.size === props.questionCount);
const shouldShowResult = computed(() => isComplete.value && !resultDismissed.value);

const questionPoint = (questionNumber) => {
    const section = props.scoreSections.find(({ start, end }) => questionNumber >= start && questionNumber <= end);
    return Number(section?.points ?? 0);
};

const score = computed(() => [...correctQuestions.value].reduce((total, questionNumber) => total + questionPoint(questionNumber), 0));

const sectionScores = computed(() =>
    props.scoreSections.map((section) => ({
        ...section,
        score: [...correctQuestions.value].filter((questionNumber) => questionNumber >= section.start && questionNumber <= section.end).reduce((total, questionNumber) => total + questionPoint(questionNumber), 0),
        max: (section.end - section.start + 1) * Number(section.points),
    })),
);

const markAnswered = (questionNumber, answered, correct = false, selectedAnswer = "") => {
    const normalizedQuestionNumber = Number(questionNumber);
    const startsNewAttempt = hasPendingSavedProgress.value;
    if (startsNewAttempt) {
        hasPendingSavedProgress.value = false;
        savedAnswers.value = {};
    }

    const nextAnswered = new Set(startsNewAttempt ? [] : answeredQuestions.value);
    const nextCorrect = new Set(startsNewAttempt ? [] : correctQuestions.value);
    if (answered) {
        nextAnswered.add(normalizedQuestionNumber);
        if (correct) nextCorrect.add(normalizedQuestionNumber);
        else nextCorrect.delete(normalizedQuestionNumber);
    } else {
        nextAnswered.delete(normalizedQuestionNumber);
        nextCorrect.delete(normalizedQuestionNumber);
    }

    answeredQuestions.value = nextAnswered;
    correctQuestions.value = nextCorrect;
    showResumeNotice.value = false;
    if (nextAnswered.size === props.questionCount) resultDismissed.value = false;

    const nextSavedAnswers = { ...savedAnswers.value };
    if (answered) {
        nextSavedAnswers[normalizedQuestionNumber] = {
            selected_answer: selectedAnswer,
            is_correct: Boolean(correct),
            points_awarded: correct ? questionPoint(normalizedQuestionNumber) : 0,
        };
    } else {
        delete nextSavedAnswers[normalizedQuestionNumber];
    }
    savedAnswers.value = nextSavedAnswers;

    if (!isLoggedIn.value) return;
    const storeAnswer = () =>
        axios.put(route("studyProgress.answers.store", [props.examKey, normalizedQuestionNumber]), {
            selected_answer: selectedAnswer,
            is_correct: Boolean(correct),
            points_awarded: correct ? questionPoint(normalizedQuestionNumber) : 0,
            question_count: props.questionCount,
            max_score: props.maxScore,
        });
    const request = answered ? (startsNewAttempt ? axios.delete(route("studyProgress.reset", props.examKey)).then(storeAnswer) : storeAnswer()) : axios.delete(route("studyProgress.answers.delete", [props.examKey, normalizedQuestionNumber]));
    request.catch((error) => console.error("学習回答の保存に失敗しました。", error));
};

provide("studySession", { currentQuestion, markAnswered, savedAnswers });

watch(displayMode, (mode) => {
    if (!props.studyEnabled || !isLoggedIn.value) return;
    axios.patch(route("studyPreferences.update"), { preferred_test_mode: mode }).catch((error) => console.error("表示モードの保存に失敗しました。", error));
});

watch(currentIndex, (index) => {
    if (!isLoggedIn.value) return;
    axios.patch(route("studyProgress.update", props.examKey), { current_question_no: questions.value[index] }).catch((error) => console.error("学習位置の保存に失敗しました。", error));
});

const moveTo = async (index) => {
    showResumeNotice.value = false;
    currentIndex.value = index;
    resultDismissed.value = true;
    questionMenu.value?.removeAttribute("open");
    await nextTick();
    window.scrollTo({ top: 0, left: 0, behavior: "auto" });
};

const showStudyResult = async () => {
    resultDismissed.value = false;
    await nextTick();
    window.scrollTo({ top: 0, left: 0, behavior: "auto" });
};

const closeMenuOnOutsideClick = (event) => {
    const menu = questionMenu.value;
    if (menu?.hasAttribute("open") && !menu.contains(event.target)) menu.removeAttribute("open");
};

onMounted(() => document.addEventListener("pointerdown", closeMenuOnOutsideClick));
onBeforeUnmount(() => document.removeEventListener("pointerdown", closeMenuOnOutsideClick));

const resumeStudy = () => {
    savedAnswers.value = initialAnswers;
    answeredQuestions.value = new Set(Object.keys(initialAnswers).map(Number));
    correctQuestions.value = new Set(
        Object.entries(initialAnswers)
            .filter(([, answer]) => answer.is_correct)
            .map(([questionNumber]) => Number(questionNumber)),
    );
    hasPendingSavedProgress.value = false;
    const resumeIndex = questions.value.indexOf(initialResumeQuestion);
    currentIndex.value = resumeIndex >= 0 ? resumeIndex : 0;
    resultDismissed.value = !initialAttemptCompleted;
    showResumeNotice.value = false;
};

const startNewStudy = () => {
    hasPendingSavedProgress.value = false;
    savedAnswers.value = {};
    answeredQuestions.value = new Set();
    correctQuestions.value = new Set();
    currentIndex.value = 0;
    resultDismissed.value = true;
    showResumeNotice.value = false;
    if (isLoggedIn.value) {
        axios.delete(route("studyProgress.reset", props.examKey)).catch((error) => console.error("学習データのリセットに失敗しました。", error));
    }
};
</script>

<template>
    <SeihoTestLayout v-if="!studyEnabled" :title="title">
        <section class="bg-[#fdfbff] py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />
            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <slot :learning-mode="false" />
            </div>
            <TestNavigationButtons v-if="nextRoute" :next-route="nextRoute" />
        </section>
    </SeihoTestLayout>

    <SeihoTestLayout v-else :title="title">
        <section class="bg-white px-4 py-6 text-gray-800 sm:px-6 sm:py-9">
            <header class="mx-auto max-w-4xl">
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">{{ title }}</h1>
                <p class="mt-1.5 text-sm text-gray-500">{{ subject }}</p>
            </header>

            <div v-if="studyEnabled" class="mx-auto mt-6 max-w-4xl border-b border-gray-200 pb-3 sm:mt-8">
                <div class="flex items-end justify-between gap-6">
                    <p v-if="displayMode === 'study' && !showResumeNotice" class="text-sm font-semibold text-gray-900">
                        <span class="mr-1.5 text-xs font-normal text-gray-500">問題</span>{{ currentQuestion }} <span class="ml-1 font-normal text-gray-400">/ {{ questionCount }}</span>
                    </p>
                    <span v-else></span>
                    <div class="flex items-center gap-5" role="group" aria-label="表示モードを選択">
                        <button
                            type="button"
                            class="border-b-2 px-0.5 pb-1.5 text-sm transition"
                            :class="displayMode === 'browse' ? 'border-gray-900 font-semibold text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-800'"
                            :aria-pressed="displayMode === 'browse'"
                            @click="displayMode = 'browse'"
                        >
                            閲覧モード
                        </button>
                        <button
                            type="button"
                            class="border-b-2 px-0.5 pb-1.5 text-sm transition"
                            :class="displayMode === 'study' ? 'border-violet-600 font-semibold text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-800'"
                            :aria-pressed="displayMode === 'study'"
                            @click="displayMode = 'study'"
                        >
                            学習モード
                        </button>
                    </div>
                </div>
                <div v-if="displayMode === 'study' && !showResumeNotice && !shouldShowResult" class="mt-2.5 flex items-center" :class="isComplete && resultDismissed ? 'justify-between' : 'justify-end'">
                    <button v-if="isComplete && resultDismissed" type="button" class="inline-flex min-h-10 items-center text-sm font-medium text-gray-600 underline decoration-gray-300 underline-offset-4 hover:text-gray-950" @click="showStudyResult">採点結果</button>
                    <details ref="questionMenu" class="relative z-20">
                        <summary class="flex cursor-pointer list-none items-center gap-1.5 py-1 text-sm text-gray-600 hover:text-gray-950 focus:outline-none focus-visible:underline">
                            <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="4" y="4" width="6" height="6" rx="1" />
                                <rect x="14" y="4" width="6" height="6" rx="1" />
                                <rect x="4" y="14" width="6" height="6" rx="1" />
                                <rect x="14" y="14" width="6" height="6" rx="1" />
                            </svg>
                            問題一覧 <span aria-hidden="true" class="text-xs">▼</span>
                        </summary>
                        <div class="absolute right-0 mt-2 w-[calc(100vw-2rem)] max-w-96 rounded-sm border border-gray-300 bg-white p-4 shadow-md">
                            <div class="mb-3 flex items-center justify-between gap-3">
                                <p class="text-base font-semibold text-gray-900">問題を選択</p>
                                <p class="flex items-center gap-3 text-sm text-gray-500">
                                    <span><span class="text-[#3f806d]">●</span> 正解</span>
                                    <span><span class="text-[#b5535c]">●</span> 不正解</span>
                                </p>
                            </div>
                            <div class="grid max-h-[32rem] grid-cols-5 gap-2 overflow-y-auto pr-1">
                                <button
                                    v-for="(questionNumber, index) in questions"
                                    :key="questionNumber"
                                    type="button"
                                    class="relative min-h-11 rounded-sm border text-base font-semibold transition"
                                    :class="[
                                        currentIndex === index ? 'ring-2 ring-violet-400 ring-offset-1' : '',
                                        correctQuestions.has(questionNumber)
                                            ? 'border-[#bad8ce] bg-[#f3f8f6] text-[#286653] hover:bg-[#eaf3ef]'
                                            : answeredQuestions.has(questionNumber)
                                              ? 'border-[#e4c9cc] bg-[#fbf5f5] text-[#9f3f49] hover:bg-[#f7ebec]'
                                              : 'border-gray-200 bg-white text-gray-700 hover:border-violet-300 hover:bg-violet-50',
                                    ]"
                                    @click="moveTo(index)"
                                >
                                    {{ questionNumber }}<span v-if="answeredQuestions.has(questionNumber)" class="absolute right-1.5 top-1.5 h-1 w-1 rounded-full" :class="correctQuestions.has(questionNumber) ? 'bg-[#3f806d]' : 'bg-[#b5535c]'"></span>
                                </button>
                            </div>
                        </div>
                    </details>
                </div>
            </div>

            <div v-if="displayMode === 'study' && showResumeNotice && !shouldShowResult" class="mx-auto mt-8 max-w-4xl border-y border-gray-200 py-7 text-center">
                <h2 class="text-lg font-semibold text-gray-900">前回の学習が残っています</h2>
                <p class="mt-2 text-sm text-gray-500">{{ initialAttemptCompleted ? `全${questionCount}問回答済み・${initialAttemptScore}点` : `${initialAnsweredCount} / ${questionCount}問回答済み・問${initialResumeQuestion}から再開できます` }}</p>
                <div class="mt-5 flex flex-col justify-center gap-3 sm:flex-row">
                    <button type="button" class="rounded-sm bg-violet-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-violet-700" @click="resumeStudy">{{ initialAttemptCompleted ? "採点結果を見る" : "続きから始める" }}</button>
                    <button type="button" class="rounded-sm border border-gray-300 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:border-gray-500" @click="startNewStudy">新しく始める</button>
                </div>
            </div>

            <DraftNotice v-if="isDraft" />
            <div v-if="displayMode !== 'study' || (!showResumeNotice && !shouldShowResult)" class="mx-auto max-w-4xl" :class="studyEnabled ? 'mt-4' : 'mt-6'">
                <div :class="displayMode === 'browse' ? 'space-y-2' : ''">
                    <slot :learning-mode="studyEnabled && displayMode === 'study'" />
                </div>
            </div>

            <div v-if="displayMode === 'study' && !showResumeNotice && !shouldShowResult" class="mx-auto mt-4 flex max-w-4xl items-center justify-center gap-6 pt-2 sm:gap-14">
                <button type="button" class="inline-flex min-h-11 items-center px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-950 disabled:cursor-not-allowed disabled:opacity-30" :disabled="currentIndex === 0" @click="moveTo(currentIndex - 1)">← 前の問題</button>
                <button v-if="currentIndex < questionCount - 1" type="button" class="inline-flex min-h-11 items-center px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-950" @click="moveTo(currentIndex + 1)">次の問題へ →</button>
            </div>

            <section v-if="displayMode === 'study' && shouldShowResult" class="mx-auto mt-8 max-w-2xl" aria-live="polite">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-950">学習結果</h2>
                    <p class="mt-1 text-sm text-gray-500">{{ answeredQuestions.size }}問回答・{{ correctQuestions.size }}問正解</p>
                </div>

                <div class="mt-5 rounded-sm bg-[#f7f6f3] px-5 py-5 sm:px-6">
                    <div class="flex flex-wrap items-end justify-between gap-3">
                        <p class="text-sm font-medium text-gray-600">今回の得点</p>
                        <p class="whitespace-nowrap text-4xl font-semibold leading-none tracking-tight text-gray-950">
                            {{ score }}<span class="ml-1 text-base font-normal tracking-normal text-gray-500">/ {{ maxScore }}点</span>
                        </p>
                    </div>
                    <div class="mt-4 h-1 bg-gray-300" aria-label="得点率">
                        <div class="h-full bg-violet-600 transition-all" :style="{ width: `${Math.min(100, (score / maxScore) * 100)}%` }"></div>
                    </div>
                </div>

                <div class="mt-7">
                    <h3 class="text-sm font-semibold text-gray-900">配点別の結果</h3>
                    <div class="mt-3 border-y border-gray-200">
                        <div class="grid grid-cols-[1fr_auto_auto] gap-4 bg-gray-50 px-3 py-2 text-xs text-gray-500" aria-hidden="true"><span>問題</span><span>得点</span><span class="w-4"></span></div>
                        <details v-for="section in sectionScores" :key="section.label" class="group border-t border-gray-100">
                            <summary class="grid min-h-12 cursor-pointer list-none grid-cols-[1fr_auto_auto] items-center gap-4 px-3 py-3 text-sm hover:bg-gray-50">
                                <span class="text-gray-700">{{ section.label }}</span>
                                <span class="font-medium text-gray-900"
                                    >{{ section.score }}<span class="ml-1 font-normal text-gray-400">/ {{ section.max }}点</span></span
                                >
                                <svg aria-hidden="true" class="h-4 w-4 text-gray-400 transition-transform duration-200 group-open:rotate-180 group-open:text-gray-700" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 7.5 5 5 5-5" />
                                </svg>
                            </summary>
                            <div class="border-t border-gray-100 bg-gray-50 px-3 py-3">
                                <p class="mb-2 text-xs text-gray-500">問題番号を選ぶと見直すことができます</p>
                                <div class="grid grid-cols-5 gap-2 sm:grid-cols-10">
                                    <button
                                        v-for="questionNumber in questions.slice(section.start - 1, section.end)"
                                        :key="questionNumber"
                                        type="button"
                                        class="min-h-12 rounded-sm border bg-white px-2 py-2 text-base font-semibold transition hover:border-gray-400 hover:bg-gray-50"
                                        :class="correctQuestions.has(questionNumber) ? 'border-[#bad8ce] text-[#286653]' : 'border-[#e4c9cc] text-[#9f3f49]'"
                                        @click="moveTo(questionNumber - 1)"
                                    >
                                        {{ questionNumber }} <span aria-hidden="true">{{ correctQuestions.has(questionNumber) ? "○" : "×" }}</span>
                                    </button>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>

                <div class="mt-5 flex justify-center">
                    <button type="button" class="inline-flex min-h-11 items-center px-3 text-sm font-medium text-gray-700 underline decoration-gray-300 underline-offset-4 hover:text-gray-950" @click="resultDismissed = true">問題を見直す</button>
                </div>
            </section>

            <TestNavigationButtons v-if="nextRoute" :next-route="nextRoute" />
        </section>
    </SeihoTestLayout>
</template>
