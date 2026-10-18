<script setup>
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const props = defineProps({
  studyRecords: {
    type: Array,
    default: () => [],
  },
});

const groupedStudyRecords = computed(() => {
  const groups = new Map();
  props.studyRecords.forEach((record) => {
    if (!groups.has(record.subject_key)) {
      groups.set(record.subject_key, {
        key: record.subject_key,
        label: record.subject_label,
        records: [],
      });
    }
    groups.get(record.subject_key).records.push(record);
  });
  return Array.from(groups.values());
});
const activeSubjectKey = ref('souron');
const activeGroup = computed(() =>
  groupedStudyRecords.value.find((group) => group.key === activeSubjectKey.value)
    ?? groupedStudyRecords.value[0]
    ?? null,
);
const activeYears = computed(() => {
  const years = new Map();
  activeGroup.value?.records.forEach((record) => {
    if (!years.has(record.year)) years.set(record.year, []);
    years.get(record.year).push(record);
  });
  return Array.from(years, ([year, records]) => ({ year, records }));
});
const historyCount = (group) => group.records.reduce((total, record) => total + record.attempts.length, 0);

</script>

<template>
  <SeihoTestLayout title="学習記録">
    <Head title="学習記録" />

    <main class="mx-auto w-full max-w-4xl px-6 py-10">
      <Link :href="route('mypage')" class="inline-flex items-center gap-1 text-sm text-slate-500 hover:text-slate-900">
        ← マイページに戻る
      </Link>

      <div class="mt-5 border-b border-slate-200 pb-5">
        <div class="flex flex-wrap items-center gap-3">
          <h1 class="text-2xl font-bold tracking-tight text-slate-950">学習記録</h1>
          <span class="rounded-full bg-violet-50 px-2.5 py-1 text-[11px] font-semibold text-violet-700">管理者のみ</span>
        </div>
        <p class="mt-2 text-sm text-slate-500">フォームを選ぶと、直近3回と最高得点の学習結果を確認できます。</p>
      </div>

      <div v-if="groupedStudyRecords.length" class="mt-7">
        <div class="grid grid-cols-2 gap-2 sm:grid-cols-4">
          <button
            v-for="group in groupedStudyRecords"
            :key="group.key"
            type="button"
            class="rounded-lg border px-3 py-3 text-left transition"
            :class="activeGroup?.key === group.key ? 'border-violet-400 bg-violet-50 text-violet-900 ring-1 ring-violet-300' : 'border-slate-200 bg-white text-slate-700 hover:border-violet-200 hover:bg-violet-50/40'"
            @click="activeSubjectKey = group.key"
          >
            <span class="block text-sm font-semibold">{{ group.label }}</span>
            <span class="mt-1 block text-[11px]" :class="activeGroup?.key === group.key ? 'text-violet-600' : 'text-slate-400'">
              {{ group.records.length }}フォーム<span v-if="historyCount(group)">・記録{{ historyCount(group) }}件</span>
            </span>
          </button>
        </div>

        <section v-if="activeGroup" class="mt-8">
          <div class="mb-3 flex items-center gap-3">
            <h2 class="text-base font-semibold text-slate-900">{{ activeGroup.label }}</h2>
            <span class="text-xs text-slate-400">{{ activeGroup.records.length }}フォーム</span>
          </div>

          <div class="space-y-3">
            <div v-for="yearGroup in activeYears" :key="yearGroup.year" class="grid gap-2 sm:grid-cols-[4.5rem_1fr] sm:items-start">
              <p class="pt-3 text-sm font-semibold text-slate-500">{{ yearGroup.year }}年度</p>
              <div class="grid gap-2 sm:grid-cols-3">
                <template v-for="record in yearGroup.records" :key="record.exam_key">
                  <details v-if="record.attempts.length" class="group overflow-hidden rounded-lg border border-slate-200 bg-white open:border-violet-200">
                    <summary class="flex min-h-14 cursor-pointer list-none items-center justify-between gap-2 px-3 py-2 transition hover:bg-violet-50/40">
                      <div class="flex items-center gap-2">
                        <span class="text-base font-semibold text-slate-900">{{ record.form }}</span>
                        <span class="text-[11px] text-slate-500">記録{{ record.attempts.length }}件</span>
                      </div>
                      <div class="flex items-center gap-2">
                        <span class="text-xs font-semibold" :class="record.attempts[0].status === 'completed' ? 'text-slate-800' : 'text-amber-700'">
                          {{ record.attempts[0].status === 'completed' ? `${record.attempts[0].score}点` : `${record.attempts[0].answered_count}/${record.question_count}問` }}
                        </span>
                        <span class="text-xs text-slate-400 transition-transform group-open:rotate-180">▼</span>
                      </div>
                    </summary>
                    <div class="divide-y divide-slate-100 border-t border-slate-100">
                      <Link v-for="attempt in record.attempts" :key="attempt.id" :href="attempt.href" class="flex items-center justify-between gap-2 px-3 py-3 text-xs transition hover:bg-violet-50/50">
                        <span class="font-semibold text-slate-700">第{{ attempt.attempt_no }}回</span>
                        <span v-if="attempt.is_best" class="rounded-full bg-violet-50 px-2 py-0.5 text-[10px] font-semibold text-violet-700">最高</span>
                        <span class="ml-auto text-slate-500">{{ attempt.status === 'completed' ? `${attempt.score}点` : `${attempt.answered_count}/${record.question_count}問` }}</span>
                        <span class="text-violet-700">詳細 →</span>
                      </Link>
                    </div>
                  </details>

                  <div v-else class="flex min-h-14 items-center justify-between gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2">
                    <span class="text-base font-semibold text-slate-900">{{ record.form }}</span>
                    <Link v-if="record.study_enabled" :href="record.exam_href" class="rounded-md bg-violet-600 px-3 py-1.5 text-[11px] font-semibold text-white hover:bg-violet-700">学習を始める</Link>
                    <span v-else class="text-[11px] font-medium text-slate-400">準備中</span>
                  </div>
                </template>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div v-else class="mt-7 rounded-xl border border-dashed border-slate-200 bg-white px-5 py-12 text-center">
        <p class="text-sm font-semibold text-slate-700">学習記録はまだありません</p>
        <p class="mt-1 text-xs text-slate-500">学習モードで回答すると、ここに進捗が表示されます。</p>
      </div>
    </main>
  </SeihoTestLayout>
</template>
