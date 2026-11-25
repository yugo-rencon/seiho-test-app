<script setup>
import DraftNotice from "@/Components/DraftNotice.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import StudyPaywallNotice from "@/Components/StudyPaywallNotice.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import { usePage } from "@inertiajs/vue3";
import axios from "axios";
import { computed, nextTick, onBeforeUnmount, onMounted, provide, ref, watch } from "vue";
import { hasPremiumAccess } from "@/utils/paywall";

const props = defineProps({
    title: { type: String, required: true },
    subject: { type: String, required: true },
    examKey: { type: String, required: true },
    initialStudyState: { type: Object, default: null },
    studyEnabled: { type: Boolean, default: false },
    questionCount: { type: Number, default: 50 },
    maxScore: { type: Number, default: 100 },
    scoreSections: { type: Array, required: true },
    previewQuestionLimit: { type: Number, default: 0 },
    previousRoute: { type: String, default: "" },
    nextRoute: { type: String, default: "" },
    homeRoute: { type: String, default: "" },
    isDraft: { type: Boolean, default: false },
});

const page = usePage();
const isIppanStudyTheme = computed(() => props.examKey.startsWith("ippan-"));
const isLoggedIn = computed(() => Boolean(page.props.auth?.user));
const hasFullStudyAccess = computed(() => props.previewQuestionLimit <= 0 || hasPremiumAccess(page.props));
const questionMenu = ref(null);
const questionMenuButton = ref(null);
const isQuestionMenuOpen = ref(false);
const questions = computed(() => Array.from({ length: props.questionCount }, (_, index) => index + 1));
const questionGroups = computed(() => {
    const groupSize = 10;

    return Array.from({ length: Math.ceil(questions.value.length / groupSize) }, (_, index) => {
        const groupedQuestions = questions.value.slice(index * groupSize, (index + 1) * groupSize);

        return {
            start: groupedQuestions[0],
            end: groupedQuestions[groupedQuestions.length - 1],
            questions: groupedQuestions,
        };
    });
});
const initialAnswers = Object.fromEntries((props.initialStudyState?.attempt?.answers ?? []).map((answer) => [Number(answer.question_no), answer]));
const initialPreviousIncorrectQuestions = (props.initialStudyState?.attempt?.previous_incorrect_questions ?? []).map(Number);
const initialPreviousCorrectQuestions = (props.initialStudyState?.attempt?.previous_correct_questions ?? []).map(Number);
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
const previousIncorrectQuestions = ref(new Set(initialPreviousIncorrectQuestions));
const previousCorrectQuestions = ref(new Set(initialPreviousCorrectQuestions));
const hasPendingSavedProgress = ref(initialAnsweredCount > 0);
const resultDismissed = ref(Boolean(props.initialStudyState?.attempt));
const showStartNotice = ref(initialAnsweredCount === 0);
const showResumeNotice = ref(initialAnsweredCount > 0);
const attemptCompleted = ref(initialAttemptCompleted);
const showScoreDetails = ref(false);
let pendingAttemptReset = null;
const currentQuestion = computed(() => questions.value[currentIndex.value]);
const studyProgress = computed(() => Math.min(100, (currentQuestion.value / props.questionCount) * 100));
const currentAnswered = computed(() => answeredQuestions.value.has(currentQuestion.value));
const isComplete = computed(() => answeredQuestions.value.size === props.questionCount);
const shouldShowResult = computed(() => isComplete.value && !resultDismissed.value && hasFullStudyAccess.value);
const showStudyIntro = computed(() => showStartNotice.value || showResumeNotice.value);
const isStudyQuestionLocked = (questionNumber) => !hasFullStudyAccess.value && Number(questionNumber) > props.previewQuestionLimit;
const isCurrentStudyLocked = computed(() => isStudyQuestionLocked(currentQuestion.value));

const questionPoint = (questionNumber) => {
    const section = props.scoreSections.find(({ start, end }) => questionNumber >= start && questionNumber <= end);
    return Number(section?.points ?? 0);
};

const score = computed(() => [...correctQuestions.value].reduce((total, questionNumber) => total + questionPoint(questionNumber), 0));
const scoreRate = computed(() => props.maxScore
    ? Math.round((score.value / props.maxScore) * 1000) / 10
    : 0);
const answeredRows = computed(() => Object.entries(savedAnswers.value)
    .map(([questionNumber, answer]) => ({ questionNumber: Number(questionNumber), ...answer }))
    .sort((a, b) => a.questionNumber - b.questionNumber));

const sectionScores = computed(() =>
    props.scoreSections.map((section) => ({
        ...section,
        score: [...correctQuestions.value].filter((questionNumber) => questionNumber >= section.start && questionNumber <= section.end).reduce((total, questionNumber) => total + questionPoint(questionNumber), 0),
        max: (section.end - section.start + 1) * Number(section.points),
    })),
);

const markAnswered = (questionNumber, answered, correct = false, selectedAnswer = "", correctAnswer = "") => {
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
    if (nextAnswered.size === props.questionCount) {
        resultDismissed.value = false;
        attemptCompleted.value = true;
    }

    const nextSavedAnswers = { ...savedAnswers.value };
    if (answered) {
        nextSavedAnswers[normalizedQuestionNumber] = {
            selected_answer: selectedAnswer,
            correct_answer: correctAnswer,
            is_correct: Boolean(correct),
            points_awarded: correct ? questionPoint(normalizedQuestionNumber) : 0,
        };
    } else {
        delete nextSavedAnswers[normalizedQuestionNumber];
    }
    savedAnswers.value = nextSavedAnswers;
    showStartNotice.value = false;

    if (!isLoggedIn.value) return;
    const storeAnswer = () =>
        axios.put(route("studyProgress.answers.store", [props.examKey, normalizedQuestionNumber]), {
            selected_answer: selectedAnswer,
            correct_answer: correctAnswer,
            is_correct: Boolean(correct),
            points_awarded: correct ? questionPoint(normalizedQuestionNumber) : 0,
            question_count: props.questionCount,
            max_score: props.maxScore,
        });
    if (startsNewAttempt) {
        pendingAttemptReset = axios.delete(route("studyProgress.reset", props.examKey));
    }
    const request = answered
        ? (pendingAttemptReset ? pendingAttemptReset.then(storeAnswer) : storeAnswer())
        : axios.delete(route("studyProgress.answers.delete", [props.examKey, normalizedQuestionNumber]), {
            data: {
                question_count: props.questionCount,
                max_score: props.maxScore,
            },
        });
    request.catch((error) => console.error("学習回答の保存に失敗しました。", error));
};

provide("studySession", { currentQuestion, markAnswered, savedAnswers, attemptCompleted, previousIncorrectQuestions, previousCorrectQuestions });

watch(displayMode, (mode) => {
    isQuestionMenuOpen.value = false;
    if (!props.studyEnabled || !isLoggedIn.value) return;
    axios.patch(route("studyPreferences.update"), { preferred_test_mode: mode }).catch((error) => console.error("表示モードの保存に失敗しました。", error));
});

const moveTo = async (index) => {
    showStartNotice.value = false;
    showResumeNotice.value = false;
    const requestedQuestion = questions.value[index];
    const nextIndex = isStudyQuestionLocked(requestedQuestion) ? props.previewQuestionLimit : index;
    currentIndex.value = nextIndex;
    resultDismissed.value = true;
    isQuestionMenuOpen.value = false;
    await nextTick();
    window.scrollTo({ top: 0, left: 0, behavior: "auto" });
};

const showStudyResult = async () => {
    if (!hasFullStudyAccess.value) return;
    resultDismissed.value = false;
    await nextTick();
    window.scrollTo({ top: 0, left: 0, behavior: "auto" });
};

const reviewQuestionFromScore = async (questionNumber) => {
    showScoreDetails.value = false;
    await moveTo(Number(questionNumber) - 1);
};

const toggleQuestionMenu = async () => {
    isQuestionMenuOpen.value = !isQuestionMenuOpen.value;
    if (!isQuestionMenuOpen.value) return;
    await nextTick();
    questionMenu.value
        ?.querySelector(`[data-question-number="${currentQuestion.value}"]`)
        ?.scrollIntoView({ block: "nearest" });
};

const closeQuestionMenu = (restoreFocus = false) => {
    if (!isQuestionMenuOpen.value) return;
    isQuestionMenuOpen.value = false;
    if (restoreFocus) nextTick(() => questionMenuButton.value?.focus());
};

const closeScoreDetailsOnEscape = (event) => {
    if (event.key !== "Escape") return;
    if (isQuestionMenuOpen.value) closeQuestionMenu(true);
    else showScoreDetails.value = false;
};

watch([showScoreDetails, isQuestionMenuOpen], ([scoreDetailsVisible, questionMenuVisible]) => {
    document.body.style.overflow = scoreDetailsVisible || questionMenuVisible ? "hidden" : "";
});

onMounted(() => {
    document.addEventListener("keydown", closeScoreDetailsOnEscape);
});
onBeforeUnmount(() => {
    document.removeEventListener("keydown", closeScoreDetailsOnEscape);
    document.body.style.overflow = "";
});

const resumeStudy = () => {
    savedAnswers.value = initialAnswers;
    answeredQuestions.value = new Set(Object.keys(initialAnswers).map(Number));
    correctQuestions.value = new Set(
        Object.entries(initialAnswers)
            .filter(([, answer]) => answer.is_correct)
            .map(([questionNumber]) => Number(questionNumber)),
    );
    hasPendingSavedProgress.value = false;
    attemptCompleted.value = initialAttemptCompleted;
    const resumeIndex = questions.value.indexOf(initialResumeQuestion);
    currentIndex.value = resumeIndex >= 0 ? resumeIndex : 0;
    resultDismissed.value = !initialAttemptCompleted;
    showStartNotice.value = false;
    showResumeNotice.value = false;
};

const startNewStudy = () => {
    const answersToArchive = Object.keys(savedAnswers.value).length ? savedAnswers.value : initialAnswers;
    const shouldResetAttempt = Object.keys(answersToArchive).length > 0;
    previousIncorrectQuestions.value = new Set(
        Object.entries(answersToArchive)
            .filter(([, answer]) => !answer.is_correct)
            .map(([questionNumber]) => Number(questionNumber)),
    );
    previousCorrectQuestions.value = new Set(
        Object.entries(answersToArchive)
            .filter(([, answer]) => answer.is_correct)
            .map(([questionNumber]) => Number(questionNumber)),
    );
    hasPendingSavedProgress.value = false;
    savedAnswers.value = {};
    answeredQuestions.value = new Set();
    correctQuestions.value = new Set();
    attemptCompleted.value = false;
    currentIndex.value = 0;
    resultDismissed.value = true;
    showStartNotice.value = false;
    showResumeNotice.value = false;
    if (isLoggedIn.value && shouldResetAttempt) {
        pendingAttemptReset = axios.delete(route("studyProgress.reset", props.examKey));
        pendingAttemptReset.catch((error) => console.error("学習データのリセットに失敗しました。", error));
    }
};

</script>

<template>
    <SeihoTestLayout v-if="!studyEnabled" :title="title">
        <section class="py-10 text-gray-800" :class="homeRoute === 'ippan.index' ? 'bg-gray-100' : 'bg-[#fdfbff]'">
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />
            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <slot :learning-mode="false" />
            </div>
            <TestNavigationButtons v-if="previousRoute || nextRoute || homeRoute" :previous-route="previousRoute" :next-route="nextRoute" v-bind="homeRoute ? { homeRoute } : {}" />
        </section>
    </SeihoTestLayout>

    <SeihoTestLayout v-else :title="title" :hide-footer="displayMode === 'study'">
        <section class="text-gray-800" :class="isIppanStudyTheme ? 'bg-gray-100 px-2 pb-10 pt-3 sm:bg-white sm:px-6 sm:pb-24 sm:pt-5' : 'bg-white px-4 pb-10 pt-6 sm:px-6 sm:pb-24 sm:pt-9'">
            <header :class="isIppanStudyTheme ? 'mx-auto max-w-4xl pb-2 pt-3 sm:border-b sm:border-gray-200 sm:pb-4 sm:pt-0' : 'mx-auto max-w-4xl'">
                <h1 v-if="isIppanStudyTheme" class="sr-only">{{ title }}</h1>
                <div class="flex justify-between" :class="isIppanStudyTheme ? 'flex-col items-stretch gap-2 sm:flex-row sm:items-end sm:gap-4' : 'items-end gap-4'">
                    <h1 v-if="!isIppanStudyTheme" class="min-w-0 text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">{{ title }}</h1>
                    <p v-else class="hidden min-w-0 whitespace-nowrap text-base font-medium text-gray-500 sm:block">{{ subject }}</p>
                    <div class="flex shrink-0 items-center" :class="isIppanStudyTheme ? 'self-end gap-3 sm:gap-5' : 'gap-3 sm:gap-5'" role="group" aria-label="表示モードを選択">
                        <button
                            type="button"
                            class="border-b-2 px-0.5 pb-1 text-xs transition sm:text-sm"
                            :class="displayMode === 'browse' ? 'border-gray-900 font-semibold text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-800'"
                            :aria-pressed="displayMode === 'browse'"
                            @click="displayMode = 'browse'"
                        >
                            閲覧モード
                        </button>
                        <button
                            type="button"
                            class="relative whitespace-nowrap border-b-2 px-0.5 pb-1 text-xs transition sm:text-sm"
                            :class="displayMode === 'study' ? (isIppanStudyTheme ? 'border-fuchsia-500 font-semibold text-gray-900' : 'border-violet-600 font-semibold text-gray-900') : 'border-transparent text-gray-500 hover:text-gray-800'"
                            :aria-pressed="displayMode === 'study'"
                            @click="displayMode = 'study'"
                        >
                            <span>学習モード</span>
                            <span class="absolute -top-3 right-0 rounded-full px-1.5 py-0.5 text-[8px] font-bold leading-none tracking-wide sm:text-[9px]" :class="isIppanStudyTheme ? 'bg-pink-100 text-fuchsia-700' : 'bg-violet-100 text-violet-700'">NEW</span>
                        </button>
                    </div>
                </div>
                <p v-if="!isIppanStudyTheme" class="mt-1.5 text-sm text-gray-500">{{ subject }}</p>
            </header>

            <div
                v-if="displayMode === 'study' && !showStudyIntro && !shouldShowResult"
                class="mx-auto border-b border-gray-200 pb-3"
                :class="isIppanStudyTheme ? 'mt-3 flex max-w-4xl items-center justify-between gap-4 rounded-lg border-0 bg-white px-4 py-3 shadow-sm sm:mt-4 sm:rounded-none sm:border-b sm:px-0 sm:shadow-none' : 'mt-4 max-w-4xl sm:mt-5'"
            >
                <p class="flex items-center text-sm font-semibold text-gray-900" aria-live="polite">
                    <span class="mr-2 text-xs font-normal text-gray-500">問題</span>
                    <span class="inline-flex min-w-7 items-center justify-center px-1.5 py-0.5">{{ currentQuestion }}</span>
                    <span class="ml-1 font-normal text-gray-400">/ {{ questionCount }}</span>
                </p>
                <div v-if="!isIppanStudyTheme" class="mt-2 h-1.5 overflow-hidden rounded-full bg-gray-100" role="progressbar" aria-label="学習の進捗" :aria-valuenow="currentQuestion" aria-valuemin="1" :aria-valuemax="questionCount">
                    <div class="h-full rounded-full transition-[width] duration-300 ease-out" :class="isIppanStudyTheme ? 'bg-gradient-to-r from-pink-400 to-fuchsia-500' : 'bg-gradient-to-r from-violet-500 to-indigo-500'" :style="{ width: `${studyProgress}%` }"></div>
                </div>
                <div class="flex items-center justify-end gap-3" :class="isIppanStudyTheme ? '' : 'mt-2'">
                    <button
                        v-if="answeredQuestions.size"
                        type="button"
                        class="inline-flex min-h-9 items-center justify-center whitespace-nowrap rounded-md border px-2.5 py-1.5 text-xs font-semibold transition"
                        :class="isIppanStudyTheme ? 'border-fuchsia-400 text-fuchsia-700 hover:bg-pink-50' : 'border-violet-400 text-violet-700 hover:bg-violet-50'"
                        @click="showScoreDetails = true"
                    >
                        成績詳細
                    </button>
                    <button
                        ref="questionMenuButton"
                        type="button"
                        class="flex min-h-9 items-center gap-1.5 py-1 text-sm text-gray-600 transition hover:text-gray-950 focus:outline-none focus-visible:underline"
                        :aria-expanded="isQuestionMenuOpen"
                        aria-controls="study-question-menu"
                        @click="toggleQuestionMenu"
                    >
                            <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="4" y="4" width="6" height="6" rx="1" />
                                <rect x="14" y="4" width="6" height="6" rx="1" />
                                <rect x="4" y="14" width="6" height="6" rx="1" />
                                <rect x="14" y="14" width="6" height="6" rx="1" />
                            </svg>
                            問題一覧
                    </button>
                </div>
            </div>

            <div v-if="displayMode === 'study' && showStartNotice" class="mx-auto mt-6 max-w-xl rounded-xl border border-gray-200 bg-white px-5 py-7 text-center shadow-sm sm:mt-10 sm:px-8 sm:py-9">
                <p class="text-xs font-semibold tracking-wide" :class="isIppanStudyTheme ? 'text-fuchsia-600' : 'text-violet-600'">学習モード</p>
                <p v-if="isIppanStudyTheme" class="mt-2 text-sm font-semibold text-gray-600 sm:hidden">{{ subject }}</p>
                <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-950">問題演習を始める</h2>
                <div class="mt-5 flex items-center justify-center divide-x divide-gray-200 rounded-lg bg-gray-50 py-3 text-sm">
                    <p class="px-5"><span class="text-xl font-bold text-gray-950">{{ questionCount }}</span><span class="ml-1 text-gray-500">問</span></p>
                    <p class="px-5"><span class="text-xl font-bold text-gray-950">{{ maxScore }}</span><span class="ml-1 text-gray-500">点満点</span></p>
                </div>
                <button type="button" class="mt-6 inline-flex min-h-12 w-full items-center justify-center rounded-lg px-8 py-3 text-base font-semibold text-white focus:outline-none focus:ring-2 focus:ring-offset-2" :class="isIppanStudyTheme ? 'bg-fuchsia-600 hover:bg-fuchsia-700 focus:ring-pink-400' : 'bg-violet-600 hover:bg-violet-700 focus:ring-violet-400'" @click="startNewStudy">開始する</button>
            </div>

            <div v-if="displayMode === 'study' && showResumeNotice && !shouldShowResult" class="mx-auto mt-6 max-w-xl rounded-xl border border-gray-200 bg-white px-5 py-7 text-center shadow-sm sm:mt-10 sm:px-8 sm:py-9">
                <p class="text-xs font-semibold tracking-wide" :class="isIppanStudyTheme ? 'text-fuchsia-600' : 'text-violet-600'">前回の学習</p>
                <p v-if="isIppanStudyTheme" class="mt-2 text-sm font-semibold text-gray-600 sm:hidden">{{ subject }}</p>
                <template v-if="initialAttemptCompleted">
                    <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-950">{{ initialAttemptScore }}<span class="ml-1 text-base font-medium text-gray-500">/ {{ maxScore }}点</span></h2>
                    <p class="mt-2 text-sm text-gray-500">全{{ questionCount }}問 回答済み</p>
                </template>
                <template v-else>
                    <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-950">{{ initialAnsweredCount }}<span class="mx-1 text-base font-medium text-gray-400">/</span>{{ questionCount }}<span class="ml-1 text-base font-medium text-gray-500">問</span></h2>
                    <div class="mx-auto mt-4 h-1.5 max-w-sm overflow-hidden rounded-full bg-gray-100">
                        <div class="h-full rounded-full" :class="isIppanStudyTheme ? 'bg-fuchsia-500' : 'bg-violet-600'" :style="{ width: `${(initialAnsweredCount / questionCount) * 100}%` }"></div>
                    </div>
                    <p class="mt-3 text-sm text-gray-500">第{{ initialResumeQuestion }}問から再開</p>
                </template>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    <button type="button" class="min-h-12 rounded-lg px-5 py-3 text-sm font-semibold text-white" :class="isIppanStudyTheme ? 'bg-fuchsia-600 hover:bg-fuchsia-700' : 'bg-violet-600 hover:bg-violet-700'" @click="resumeStudy">{{ initialAttemptCompleted ? "結果を見る" : "続きから始める" }}</button>
                    <button type="button" class="min-h-12 rounded-lg border border-gray-300 bg-white px-5 py-3 text-sm font-semibold text-gray-700 hover:border-gray-400 hover:bg-gray-50" @click="startNewStudy">最初から始める</button>
                </div>
            </div>

            <DraftNotice v-if="isDraft" />
            <div v-if="displayMode !== 'study' || (!showStudyIntro && !shouldShowResult && !isCurrentStudyLocked)" class="mx-auto max-w-4xl" :class="studyEnabled ? (isIppanStudyTheme ? 'mt-3 sm:mt-7' : 'mt-4') : 'mt-6'">
                <div :class="displayMode === 'browse' ? 'space-y-2' : ''">
                    <slot :learning-mode="studyEnabled && displayMode === 'study'" />
                </div>
            </div>

            <div v-if="displayMode === 'study' && !showStudyIntro && isCurrentStudyLocked" class="mx-auto mt-4 max-w-4xl">
                <StudyPaywallNotice @back="moveTo(previewQuestionLimit - 1)" />
            </div>

            <div v-if="displayMode === 'study' && !showStudyIntro && !shouldShowResult && !isCurrentStudyLocked && currentAnswered && currentIndex < questionCount - 1" class="mx-auto mt-5 flex w-full max-w-4xl justify-center px-2 pt-2">
                <button type="button" class="inline-flex min-h-11 w-64 max-w-full items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-semibold text-gray-700 transition hover:border-gray-400 hover:bg-gray-50 hover:text-gray-950 sm:w-80 md:w-96" @click="moveTo(currentIndex + 1)">次の問題</button>
            </div>

            <div v-if="displayMode === 'study' && isComplete && resultDismissed && hasFullStudyAccess" class="mx-auto mt-4 flex w-full max-w-4xl justify-center px-2">
                <button type="button" class="inline-flex min-h-11 w-64 max-w-full items-center justify-center rounded-lg border bg-white px-5 py-2.5 text-sm font-semibold transition sm:w-80 md:w-96" :class="isIppanStudyTheme ? 'border-fuchsia-300 text-fuchsia-700 hover:bg-pink-50' : 'border-violet-300 text-violet-700 hover:bg-violet-50'" @click="showStudyResult">採点結果を見る</button>
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
                        <div class="h-full transition-all" :class="isIppanStudyTheme ? 'bg-fuchsia-500' : 'bg-violet-600'" :style="{ width: `${Math.min(100, (score / maxScore) * 100)}%` }"></div>
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
                                        class="inline-flex min-h-12 items-center justify-center gap-1 whitespace-nowrap rounded-sm border bg-white px-2 py-2 text-base font-semibold transition hover:border-gray-400 hover:bg-gray-50"
                                        :class="correctQuestions.has(questionNumber) ? 'border-[#a7e3d0] bg-[#f0fcf7] text-[#16856b]' : 'border-[#f2c5c8] bg-[#fff5f5] text-[#c45d68]'"
                                        @click="moveTo(questionNumber - 1)"
                                    >
                                        {{ questionNumber }} <span aria-hidden="true">{{ correctQuestions.has(questionNumber) ? "○" : "×" }}</span>
                                    </button>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>

            </section>

            <Teleport to="body">
                <div
                    v-if="isQuestionMenuOpen"
                    id="study-question-menu"
                    ref="questionMenu"
                    class="fixed inset-0 z-[90] overflow-y-auto bg-gray-100 text-gray-800"
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="question-menu-title"
                >
                    <header class="sticky top-0 z-10 border-b border-gray-200 bg-white/95 backdrop-blur">
                        <div class="mx-auto flex max-w-5xl items-center justify-between gap-4 px-4 py-3 sm:px-8 sm:py-5">
                            <div class="min-w-0">
                                <h2 id="question-menu-title" class="text-lg font-bold tracking-tight text-gray-950 sm:text-2xl">問題一覧</h2>
                                <p class="mt-0.5 truncate text-xs text-gray-500 sm:text-sm">{{ subject }}</p>
                            </div>
                            <button type="button" class="inline-flex min-h-11 shrink-0 items-center justify-center gap-1.5 rounded-lg border border-gray-300 bg-white px-3 text-sm font-semibold text-gray-600 shadow-sm transition hover:border-gray-400 hover:bg-gray-50 hover:text-gray-950" aria-label="問題一覧を閉じる" @click="closeQuestionMenu(true)">
                                <svg aria-hidden="true" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6 6 18" /></svg>
                                <span class="hidden sm:inline">閉じる</span>
                            </button>
                        </div>
                    </header>

                    <main class="mx-auto max-w-5xl px-3 py-4 sm:px-6 sm:py-8">
                        <section class="rounded-xl border border-gray-200 bg-white p-3 shadow-sm sm:p-6">
                            <div class="mb-4 flex flex-wrap items-start justify-between gap-3">
                                <p class="text-sm font-semibold text-gray-900">移動する問題を選択</p>
                                <div class="flex flex-wrap items-stretch justify-end gap-2 text-xs text-gray-500 sm:text-sm">
                                    <div class="rounded-lg bg-gray-50 px-3 py-2">
                                        <p class="mb-1 text-[10px] font-semibold tracking-wide text-gray-400">今回の結果</p>
                                        <div class="flex items-center gap-3">
                                            <span class="inline-flex items-center gap-1.5"><span class="h-3.5 w-5 rounded border border-[#a7e3d0] bg-[#f0fcf7]"></span>正解</span>
                                            <span class="inline-flex items-center gap-1.5"><span class="h-3.5 w-5 rounded border border-[#f2c5c8] bg-[#fff5f5]"></span>不正解</span>
                                        </div>
                                    </div>
                                    <div v-if="previousIncorrectQuestions.size || previousCorrectQuestions.size" class="rounded-lg border border-dashed border-gray-200 px-3 py-2">
                                        <p class="mb-1 text-[10px] font-semibold tracking-wide text-gray-400">前回の結果</p>
                                        <div class="flex items-center gap-3">
                                            <span v-if="previousCorrectQuestions.size" class="inline-flex items-center gap-1.5"><span class="h-3.5 w-5 rounded border border-dashed border-emerald-300 bg-white"></span>正解</span>
                                            <span v-if="previousIncorrectQuestions.size" class="inline-flex items-center gap-1.5"><span class="h-3.5 w-5 rounded border border-dashed border-rose-300 bg-white"></span>不正解</span>
                                        </div>
                                    </div>
                                    <span v-if="!hasFullStudyAccess" class="inline-flex items-center gap-1 text-gray-400">
                                        <svg aria-hidden="true" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5 8V6a5 5 0 0 1 10 0v2h.5A1.5 1.5 0 0 1 17 9.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 3 16.5v-7A1.5 1.5 0 0 1 4.5 8H5Zm2 0h6V6a3 3 0 1 0-6 0v2Z" clip-rule="evenodd" /></svg>
                                        有料
                                    </span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <details
                                    v-for="group in questionGroups"
                                    :key="group.start"
                                    class="group overflow-hidden rounded-lg border border-gray-200 bg-white"
                                    :open="group.questions.includes(currentQuestion)"
                                >
                                    <summary class="flex min-h-11 cursor-pointer list-none items-center justify-between gap-3 px-3 py-2 text-sm transition hover:bg-gray-50 [&::-webkit-details-marker]:hidden">
                                        <span class="font-semibold text-gray-800">問題 {{ group.start }}〜{{ group.end }}</span>
                                        <span class="flex items-center gap-2 text-xs text-gray-500">
                                            {{ group.questions.filter((questionNumber) => answeredQuestions.has(questionNumber)).length }} / {{ group.questions.length }}問
                                            <svg aria-hidden="true" class="h-4 w-4 transition-transform group-open:rotate-180" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m5 7.5 5 5 5-5" /></svg>
                                        </span>
                                    </summary>
                                    <div class="grid grid-cols-5 gap-2 border-t border-gray-100 bg-gray-50 p-3 sm:grid-cols-10">
                                        <button
                                            v-for="questionNumber in group.questions"
                                            :key="questionNumber"
                                            :data-question-number="questionNumber"
                                            type="button"
                                            class="relative min-h-10 rounded-md border text-sm font-semibold transition focus:outline-none focus:ring-2 focus:ring-offset-2"
                                            :class="[
                                                currentQuestion === questionNumber ? (isIppanStudyTheme ? 'ring-2 ring-fuchsia-500 ring-offset-1' : 'ring-2 ring-violet-500 ring-offset-1') : '',
                                                isStudyQuestionLocked(questionNumber)
                                                    ? 'border-gray-200 bg-gray-50 text-gray-400'
                                                    : correctQuestions.has(questionNumber)
                                                      ? 'border-[#a7e3d0] bg-[#f0fcf7] text-[#16856b]'
                                                      : answeredQuestions.has(questionNumber)
                                                        ? 'border-[#f2c5c8] bg-[#fff5f5] text-[#c45d68]'
                                                        : previousIncorrectQuestions.has(questionNumber)
                                                          ? 'border-dashed border-rose-300 bg-white text-rose-600'
                                                          : previousCorrectQuestions.has(questionNumber)
                                                            ? 'border-dashed border-emerald-300 bg-white text-emerald-700'
                                                        : 'border-gray-200 bg-white text-gray-700 hover:border-gray-400 hover:bg-white',
                                            ]"
                                            :aria-label="`第${questionNumber}問、${isStudyQuestionLocked(questionNumber) ? '要購入' : correctQuestions.has(questionNumber) ? '正解' : answeredQuestions.has(questionNumber) ? '不正解' : previousIncorrectQuestions.has(questionNumber) ? '前回不正解、今回は未回答' : previousCorrectQuestions.has(questionNumber) ? '前回正解、今回は未回答' : '未回答'}${currentQuestion === questionNumber ? '、現在表示中' : ''}`"
                                            @click="moveTo(questionNumber - 1)"
                                        >
                                            {{ questionNumber }}
                                            <svg v-if="isStudyQuestionLocked(questionNumber)" aria-label="要購入" class="absolute right-1 top-1 h-3 w-3 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5 8V6a5 5 0 0 1 10 0v2h.5A1.5 1.5 0 0 1 17 9.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 3 16.5v-7A1.5 1.5 0 0 1 4.5 8H5Zm2 0h6V6a3 3 0 1 0-6 0v2Z" clip-rule="evenodd" /></svg>
                                        </button>
                                    </div>
                                </details>
                            </div>
                        </section>
                    </main>
                </div>
            </Teleport>

            <Teleport to="body">
                <div
                    v-if="showScoreDetails"
                    class="fixed inset-0 z-[80] overflow-y-auto bg-gray-100 text-gray-800"
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="score-details-title"
                >
                    <header class="sticky top-0 z-10 border-b border-gray-200 bg-white/95 backdrop-blur">
                        <div class="mx-auto flex max-w-5xl items-center justify-between gap-5 px-4 py-3 sm:px-6 sm:py-3.5">
                            <div class="min-w-0">
                                <h2 id="score-details-title" class="text-lg font-bold tracking-tight text-gray-950 sm:text-xl">成績詳細</h2>
                                <p class="mt-0.5 truncate text-xs text-gray-500">{{ subject }}</p>
                            </div>
                            <button type="button" class="inline-flex min-h-11 shrink-0 items-center justify-center gap-1.5 rounded-lg border border-gray-300 bg-white px-3 text-sm font-semibold text-gray-600 shadow-sm transition hover:border-gray-400 hover:bg-gray-50 hover:text-gray-950" aria-label="成績詳細を閉じる" @click="showScoreDetails = false">
                                <svg aria-hidden="true" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6 6 18" /></svg>
                                <span class="hidden sm:inline">閉じる</span>
                            </button>
                        </div>
                    </header>

                    <main class="mx-auto max-w-5xl px-3 py-3 sm:px-6 sm:py-5">
                        <section class="rounded-xl bg-white p-4 shadow-sm sm:p-5">
                            <div class="flex items-end justify-between gap-3 sm:gap-4">
                                <div>
                                    <p class="text-xs text-gray-500">現在の成績</p>
                                    <p class="mt-0.5 text-xl font-bold text-gray-950">{{ answeredQuestions.size }}問中 {{ correctQuestions.size }}問正解</p>
                                </div>
                                <p class="text-3xl font-bold" :class="scoreRate >= 60 ? 'text-emerald-600' : 'text-rose-500'">{{ scoreRate }}<span class="ml-0.5 text-base">%</span></p>
                            </div>
                            <div class="relative mt-3 h-2 rounded-full bg-gray-100" aria-label="正答率">
                                <div class="h-full rounded-full transition-all" :class="isIppanStudyTheme ? 'bg-gradient-to-r from-pink-400 to-fuchsia-500' : 'bg-violet-600'" :style="{ width: `${scoreRate}%` }"></div>
                                <span class="absolute left-[60%] top-[-5px] h-6 w-px bg-gray-400" aria-hidden="true"></span>
                                <span class="absolute left-[60%] top-5 -translate-x-1/2 text-[10px] text-gray-500">60%</span>
                            </div>
                            <p class="mt-6 text-xs text-gray-500">得点 <span class="font-semibold text-gray-900">{{ score }} / {{ maxScore }}点</span></p>
                        </section>

                        <section class="mt-3 grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-5">
                            <div v-for="section in sectionScores" :key="section.label" class="rounded-lg border border-gray-200 bg-white px-3 py-2.5">
                                <p class="truncate text-[10px] font-medium text-gray-500 sm:text-xs">{{ section.label }}</p>
                                <p class="mt-1 text-lg font-bold leading-none text-gray-950">{{ section.score }}<span class="ml-1 text-[10px] font-normal text-gray-400">/ {{ section.max }}点</span></p>
                            </div>
                        </section>

                        <section class="mt-3 overflow-hidden rounded-xl border border-gray-200 bg-white sm:mt-4">
                            <div class="flex items-center justify-between gap-3 border-b border-gray-200 px-4 py-2.5">
                                <h3 class="text-sm font-bold text-gray-900">問題別の結果</h3>
                                <p class="text-xs text-gray-500">{{ answeredQuestions.size }} / {{ questionCount }}問</p>
                            </div>
                            <div v-if="answeredRows.length" class="divide-y divide-gray-100">
                                <button
                                    v-for="answer in answeredRows"
                                    :key="answer.questionNumber"
                                    type="button"
                                    class="grid w-full grid-cols-[3.5rem_1fr_auto] items-center gap-3 px-4 py-2.5 text-left transition hover:bg-gray-50 sm:grid-cols-[4rem_1fr_auto] sm:px-5 sm:py-2"
                                    @click="reviewQuestionFromScore(answer.questionNumber)"
                                >
                                    <span class="font-bold text-gray-900">問{{ answer.questionNumber }}</span>
                                    <span class="flex items-end gap-1 text-[10px] text-gray-400 sm:text-xs">
                                        <span class="whitespace-nowrap">教科書 p.</span>
                                        <span class="inline-block h-4 w-8 border-b border-gray-300" aria-label="教科書の参照ページは未登録"></span>
                                    </span>
                                    <span class="flex items-center gap-2">
                                        <span
                                            class="inline-flex min-w-[4rem] justify-center rounded-full px-2.5 py-1 text-xs font-bold"
                                            :class="answer.is_correct ? 'bg-emerald-50 text-emerald-700' : 'bg-rose-50 text-rose-600'"
                                        >{{ answer.is_correct ? '正解' : '不正解' }}</span>
                                        <svg aria-hidden="true" class="h-4 w-4 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg>
                                    </span>
                                </button>
                            </div>
                            <p v-else class="px-4 py-10 text-center text-sm text-gray-500">まだ回答はありません。</p>
                        </section>
                    </main>
                </div>
            </Teleport>

            <TestNavigationButtons v-if="displayMode === 'browse' && (previousRoute || nextRoute || homeRoute)" :previous-route="previousRoute" :next-route="nextRoute" v-bind="homeRoute ? { homeRoute } : {}" />
        </section>
    </SeihoTestLayout>
</template>
