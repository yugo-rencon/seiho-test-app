<script setup>
import DraftNotice from "@/Components/DraftNotice.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import { usePage } from "@inertiajs/vue3";
import axios from "axios";
import { computed, onBeforeUnmount, onMounted, provide, ref, watch } from "vue";

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
const initialAnswers = Object.fromEntries(
    (props.initialStudyState?.attempt?.answers ?? []).map((answer) => [Number(answer.question_no), answer]),
);
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
const showResult = ref(false);
const resultDismissed = ref(Boolean(props.initialStudyState?.attempt));
const showResumeNotice = ref(initialAnsweredCount > 0);
const currentQuestion = computed(() => questions.value[currentIndex.value]);
const currentAnswered = computed(() => answeredQuestions.value.has(currentQuestion.value));
const isComplete = computed(() => answeredQuestions.value.size === props.questionCount);
const shouldShowResult = computed(() => showResult.value || (isComplete.value && !resultDismissed.value));

const questionPoint = (questionNumber) => {
    const section = props.scoreSections.find(({ start, end }) => questionNumber >= start && questionNumber <= end);
    return Number(section?.points ?? 0);
};

const score = computed(() =>
    [...correctQuestions.value].reduce((total, questionNumber) => total + questionPoint(questionNumber), 0),
);

const sectionScores = computed(() =>
    props.scoreSections.map((section) => ({
        ...section,
        score: [...correctQuestions.value]
            .filter((questionNumber) => questionNumber >= section.start && questionNumber <= section.end)
            .reduce((total, questionNumber) => total + questionPoint(questionNumber), 0),
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
    const storeAnswer = () => axios.put(route("studyProgress.answers.store", [props.examKey, normalizedQuestionNumber]), {
        selected_answer: selectedAnswer,
        is_correct: Boolean(correct),
        points_awarded: correct ? questionPoint(normalizedQuestionNumber) : 0,
        question_count: props.questionCount,
        max_score: props.maxScore,
    });
    const request = answered
        ? (startsNewAttempt ? axios.delete(route("studyProgress.reset", props.examKey)).then(storeAnswer) : storeAnswer())
        : axios.delete(route("studyProgress.answers.delete", [props.examKey, normalizedQuestionNumber]));
    request.catch((error) => console.error("学習回答の保存に失敗しました。", error));
};

provide("studySession", { currentQuestion, markAnswered, savedAnswers });

watch(displayMode, (mode) => {
    if (!props.studyEnabled || !isLoggedIn.value) return;
    axios.patch(route("studyPreferences.update"), { preferred_test_mode: mode })
        .catch((error) => console.error("表示モードの保存に失敗しました。", error));
});

watch(currentIndex, (index) => {
    if (!isLoggedIn.value) return;
    axios.patch(route("studyProgress.update", props.examKey), { current_question_no: questions.value[index] })
        .catch((error) => console.error("学習位置の保存に失敗しました。", error));
});

const moveTo = (index) => {
    showResumeNotice.value = false;
    currentIndex.value = index;
    showResult.value = false;
    resultDismissed.value = true;
    questionMenu.value?.removeAttribute("open");
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
        Object.entries(initialAnswers).filter(([, answer]) => answer.is_correct).map(([questionNumber]) => Number(questionNumber)),
    );
    hasPendingSavedProgress.value = false;
    const resumeIndex = questions.value.indexOf(initialResumeQuestion);
    currentIndex.value = resumeIndex >= 0 ? resumeIndex : 0;
    showResumeNotice.value = false;
};

const startNewStudy = () => {
    hasPendingSavedProgress.value = false;
    savedAnswers.value = {};
    answeredQuestions.value = new Set();
    correctQuestions.value = new Set();
    currentIndex.value = 0;
    showResult.value = false;
    resultDismissed.value = true;
    showResumeNotice.value = false;
    if (isLoggedIn.value) {
        axios.delete(route("studyProgress.reset", props.examKey))
            .catch((error) => console.error("学習データのリセットに失敗しました。", error));
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
                        <button type="button" class="border-b-2 px-0.5 pb-1.5 text-sm transition" :class="displayMode === 'browse' ? 'border-gray-900 font-semibold text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-800'" :aria-pressed="displayMode === 'browse'" @click="displayMode = 'browse'">閲覧</button>
                        <button type="button" class="border-b-2 px-0.5 pb-1.5 text-sm transition" :class="displayMode === 'study' ? 'border-violet-600 font-semibold text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-800'" :aria-pressed="displayMode === 'study'" @click="displayMode = 'study'">学習</button>
                    </div>
                </div>
                <div v-if="displayMode === 'study' && !showResumeNotice" class="mt-2.5 h-0.5 overflow-hidden bg-gray-200" aria-label="学習進捗">
                    <div class="h-full bg-violet-600 transition-all duration-300" :style="{ width: `${((currentIndex + 1) / questionCount) * 100}%` }"></div>
                </div>
                <div v-if="displayMode === 'study' && !showResumeNotice" class="mt-1.5 flex justify-end">
                    <details ref="questionMenu" class="relative z-20">
                        <summary class="flex cursor-pointer list-none items-center gap-1.5 py-1 text-sm text-gray-600 hover:text-gray-950 focus:outline-none focus-visible:underline">
                            <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="6" height="6" rx="1"/><rect x="14" y="4" width="6" height="6" rx="1"/><rect x="4" y="14" width="6" height="6" rx="1"/><rect x="14" y="14" width="6" height="6" rx="1"/></svg>
                            問題一覧 <span aria-hidden="true" class="text-xs">▼</span>
                        </summary>
                        <div class="absolute right-0 mt-2 w-72 rounded-sm border border-gray-300 bg-white p-3 shadow-md sm:w-80">
                            <div class="mb-2 flex items-center justify-between"><p class="text-sm font-semibold text-gray-900">問題を選択</p><p class="text-xs text-gray-500">● 回答済み</p></div>
                            <div class="grid max-h-72 grid-cols-5 gap-1.5 overflow-y-auto pr-1">
                                <button v-for="(questionNumber, index) in questions" :key="questionNumber" type="button" class="relative min-h-9 rounded-sm border text-sm font-semibold transition" :class="currentIndex === index ? 'border-violet-600 bg-violet-600 text-white' : answeredQuestions.has(questionNumber) ? 'border-emerald-200 bg-emerald-50 text-emerald-800 hover:bg-emerald-100' : 'border-gray-200 bg-white text-gray-700 hover:border-violet-300 hover:bg-violet-50'" @click="moveTo(index)">
                                    {{ questionNumber }}<span v-if="answeredQuestions.has(questionNumber)" class="absolute right-1 top-1 h-1.5 w-1.5 rounded-full" :class="currentIndex === index ? 'bg-white' : 'bg-emerald-500'"></span>
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
                    <button type="button" class="rounded-sm bg-violet-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-violet-700" @click="resumeStudy">続きから始める</button>
                    <button type="button" class="rounded-sm border border-gray-300 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:border-gray-500" @click="startNewStudy">新しく始める</button>
                </div>
            </div>

            <DraftNotice v-if="isDraft" />
            <div
                v-if="displayMode !== 'study' || (!showResumeNotice && !shouldShowResult)"
                class="mx-auto max-w-4xl"
                :class="studyEnabled ? 'mt-4' : 'mt-6'"
            >
                <div :class="displayMode === 'browse' ? 'space-y-2' : ''">
                    <slot :learning-mode="studyEnabled && displayMode === 'study'" />
                </div>
            </div>

            <div v-if="displayMode === 'study' && !showResumeNotice && !shouldShowResult" class="mx-auto mt-4 flex max-w-4xl items-center justify-center gap-12 pt-2 sm:gap-20">
                <button type="button" class="py-2 text-sm font-medium text-gray-600 hover:text-gray-950 disabled:cursor-not-allowed disabled:opacity-30" :disabled="currentIndex === 0" @click="moveTo(currentIndex - 1)">← 前の問題</button>
                <p v-if="currentAnswered && currentIndex === questionCount - 1" class="text-sm font-medium text-gray-700">学習完了です</p>
                <button v-if="currentIndex < questionCount - 1" type="button" class="py-2 text-sm font-medium text-gray-600 hover:text-gray-950" @click="moveTo(currentIndex + 1)">次の問題へ →</button>
            </div>

            <div v-if="displayMode === 'study' && !showResumeNotice && !shouldShowResult" class="mx-auto mt-1 flex max-w-4xl justify-center py-2">
                <button type="button" class="px-2 py-2 text-sm text-gray-500 underline decoration-gray-300 underline-offset-4 hover:text-gray-950 disabled:cursor-not-allowed disabled:opacity-40" :disabled="answeredQuestions.size === 0" @click="showResult = true; resultDismissed = false">途中結果を見る（{{ answeredQuestions.size }} / {{ questionCount }}問回答）</button>
            </div>

            <section v-if="displayMode === 'study' && shouldShowResult" class="mx-auto mt-7 max-w-2xl border border-gray-200 bg-white" aria-live="polite">
                <div class="border-t-4 border-violet-600 px-5 pb-5 pt-4 sm:px-7">
                    <div class="flex items-start justify-between gap-6">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-950">{{ isComplete ? '学習結果' : '途中結果' }}</h2>
                            <p class="mt-1.5 text-sm text-gray-500">{{ answeredQuestions.size }}問回答・{{ correctQuestions.size }}問正解</p>
                        </div>
                        <p class="whitespace-nowrap text-4xl font-semibold tracking-tight text-gray-950">{{ score }}<span class="ml-1 text-sm font-normal text-gray-500">/ {{ maxScore }}点</span></p>
                    </div>
                    <div class="mt-4 h-1.5 overflow-hidden bg-gray-200" aria-label="得点率">
                        <div class="h-full bg-violet-600 transition-all" :style="{ width: `${Math.min(100, (score / maxScore) * 100)}%` }"></div>
                    </div>
                </div>

                <div class="border-t border-gray-200 px-5 py-4 sm:px-7">
                    <h3 class="text-xs font-medium text-gray-500">配点別の結果</h3>
                    <dl class="mt-2 space-y-3.5">
                        <div v-for="section in sectionScores" :key="section.label">
                            <div class="flex items-center justify-between text-sm">
                                <dt class="text-gray-700">{{ section.label }}</dt>
                                <dd class="font-medium text-gray-900">{{ section.score }}<span class="ml-1 font-normal text-gray-400">/ {{ section.max }}点</span></dd>
                            </div>
                            <div class="mt-1.5 h-1 bg-gray-100">
                                <div class="h-full bg-gray-500" :style="{ width: `${Math.min(100, (section.score / section.max) * 100)}%` }"></div>
                            </div>
                        </div>
                    </dl>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3 border-t border-gray-200 bg-gray-50 px-5 py-4 sm:px-7">
                    <p v-if="!isComplete" class="text-xs text-gray-500">未回答は0点として計算</p><span v-else></span>
                    <button type="button" class="border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:border-gray-500 hover:text-gray-950" @click="showResult = false; resultDismissed = true">{{ isComplete ? '問題を見直す' : '問題に戻る' }}</button>
                </div>
            </section>

            <TestNavigationButtons v-if="nextRoute" :next-route="nextRoute" />
        </section>
    </SeihoTestLayout>
</template>
