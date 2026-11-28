<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
  record: {
    type: Object,
    default: null,
  },
  scope: { type: String, default: 'seiho' },
  exams: { type: Array, default: null },
  selectedExam: { type: Object, default: null },
});

const correctCount = computed(() => props.record?.answers.filter((answer) => answer.is_correct).length ?? 0);
const isIppan = computed(() => props.scope === 'ippan');
const mypageRouteName = computed(() => ['ippan', 'senmon'].includes(props.scope) ? `${props.scope}.mypage` : 'mypage');
const studyRecordsRouteName = computed(() => `${mypageRouteName.value}.studyRecords`);
const selectExam = (key) => router.get(route(studyRecordsRouteName.value), { exam: key }, { preserveState: true });
const formatDate = (value) => {
  if (!value) return '';
  return new Intl.DateTimeFormat('ja-JP', {
    year: 'numeric',
    month: 'numeric',
    day: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
  }).format(new Date(value));
};
</script>

<template>
    <Head title="演習履歴" />

    <main class="mx-auto w-full max-w-3xl px-5 py-7 sm:px-6">
      <Link :href="route(exams ? mypageRouteName : studyRecordsRouteName)" class="inline-flex items-center gap-1 text-xs text-slate-500 hover:text-slate-900">
        ← {{ exams ? 'マイページに戻る' : '演習履歴に戻る' }}
      </Link>

      <template v-if="exams">
        <h1 class="mt-4 text-xl font-bold text-slate-950">演習履歴</h1>
        <label v-if="selectedExam" class="mt-3 block text-xs font-semibold text-slate-600">
          試験
          <select :value="selectedExam.exam_key" class="mt-1 block min-h-11 w-full rounded-lg bg-white text-sm text-slate-900" :class="isIppan ? 'border-pink-200 focus:border-fuchsia-500 focus:ring-fuchsia-500' : 'border-slate-300'" @change="selectExam($event.target.value)">
            <option v-for="exam in exams" :key="exam.exam_key" :value="exam.exam_key">
              {{ isIppan ? '' : exam.subject_label + ' ' }}{{ exam.period_label }} フォーム{{ exam.form }}
            </option>
          </select>
        </label>
      </template>

      <template v-if="record">
      <div class="mt-4 flex flex-wrap items-start justify-between gap-3 border-b border-slate-200 pb-4">
        <div>
          <p class="text-xs font-semibold" :class="isIppan ? 'text-fuchsia-700' : 'text-violet-700'">{{ record.subject_label }}</p>
          <h2 class="mt-1 text-xl font-bold tracking-tight text-slate-950">{{ record.period_label }} フォーム{{ record.form }}</h2>
          <p class="mt-1.5 text-[11px] text-slate-500">
            {{ record.status === 'completed' ? `完了日時 ${formatDate(record.completed_at)}` : `開始日時 ${formatDate(record.started_at)}` }}
          </p>
        </div>
        <Link
          v-if="record.is_latest"
          :href="record.exam_href"
          class="inline-flex min-h-9 items-center justify-center rounded-md px-3 py-1.5 text-xs font-semibold text-white transition"
          :class="isIppan ? 'bg-fuchsia-700 hover:bg-fuchsia-800' : 'bg-violet-600 hover:bg-violet-700'"
        >
          {{ record.status === 'completed' ? '問題を見直す' : '続きを学習' }}
        </Link>
      </div>

      <div class="mt-4 grid grid-cols-3 divide-x divide-slate-200 rounded-lg border border-slate-200 bg-white px-2 py-3 text-center">
        <div class="px-2">
          <p class="text-[11px] text-slate-500">得点</p>
          <p class="mt-0.5 text-lg font-semibold text-slate-950">{{ record.score }}<span class="ml-1 text-xs font-normal text-slate-400">/ {{ record.max_score }}点</span></p>
        </div>
        <div class="px-2">
          <p class="text-[11px] text-slate-500">正解</p>
          <p class="mt-0.5 text-lg font-semibold text-slate-950">{{ correctCount }}<span class="ml-1 text-xs font-normal text-slate-400">問</span></p>
        </div>
        <div class="px-2">
          <p class="text-[11px] text-slate-500">回答</p>
          <p class="mt-0.5 text-lg font-semibold text-slate-950">{{ record.answered_count }}<span class="ml-1 text-xs font-normal text-slate-400">/ {{ record.question_count }}問</span></p>
        </div>
      </div>

      <section class="mt-6">
        <div class="flex items-end justify-between gap-3">
          <div>
            <h2 class="text-sm font-semibold text-slate-900">問題別の回答</h2>
            <p class="mt-0.5 text-[11px] text-slate-500">自分の回答、正答、獲得点を確認できます。</p>
          </div>
          <div class="flex gap-3 text-xs text-slate-500"><span><span class="text-emerald-600">●</span> 正解</span><span><span class="text-rose-500">●</span> 不正解</span></div>
        </div>

        <div v-if="record.answers.length" class="mt-3 overflow-hidden rounded-lg border border-slate-200 bg-white">
          <div class="grid grid-cols-[3.5rem_1fr_1fr_3.5rem] gap-2 bg-slate-50 px-3 py-2 text-[11px] font-medium text-slate-500 sm:grid-cols-[4.5rem_1fr_1fr_4rem]">
            <span>問題</span><span>自分の回答</span><span>正答</span><span class="text-right">得点</span>
          </div>
          <div
            v-for="answer in record.answers"
            :key="answer.question_no"
            class="grid min-h-10 grid-cols-[3.5rem_1fr_1fr_3.5rem] items-center gap-2 border-t border-slate-100 px-3 py-2 text-xs sm:grid-cols-[4.5rem_1fr_1fr_4rem]"
          >
            <span class="font-semibold" :class="answer.is_correct ? 'text-emerald-700' : 'text-rose-700'">問{{ answer.question_no }}</span>
            <span class="font-semibold text-slate-800">{{ answer.selected_answer }}</span>
            <span :class="answer.correct_answer ? 'font-semibold text-slate-800' : 'text-[11px] text-slate-400'">{{ answer.correct_answer || '記録なし' }}</span>
            <span class="text-right font-medium text-slate-700">{{ answer.points_awarded }}点</span>
          </div>
        </div>

        <div v-else class="mt-3 rounded-lg border border-dashed border-slate-200 bg-white px-5 py-7 text-center text-sm text-slate-500">
          まだ回答はありません。
        </div>
      </section>
      </template>
      <div v-else class="mt-4 rounded-lg border border-slate-200 bg-white p-5 text-sm text-slate-600">
        <p>{{ selectedExam ? 'この試験の成績はまだありません。' : '保存された成績はまだありません。' }}</p>
        <Link v-if="selectedExam?.study_enabled" :href="selectedExam.exam_href" class="mt-3 inline-block font-semibold underline">学習を始める</Link>
      </div>
    </main>
</template>
