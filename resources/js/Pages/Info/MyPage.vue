<script setup>
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { computed, onMounted, ref, watch } from 'vue';
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const page = usePage();
const user = page.props?.auth?.user || null;
const flashStatus = computed(() => page.props?.flash?.status ?? null);
const props = defineProps({
  passScore: {
    type: Number,
    required: false,
    default: null,
  },
  subjects: {
    type: Array,
    required: true,
  },
  results: {
    type: Object,
    required: true,
  },
  hasPremium: {
    type: Boolean,
    required: true,
  },
});

const localResults = ref({ ...props.results });
const isModalOpen = ref(false);
const formSubjectKey = ref(props.subjects[0]?.key || '');
const formScore = ref('');
const formError = ref('');
const resultForm = useForm({
  subject_key: '',
  score: null,
});

watch(
  () => props.results,
  (nextResults) => {
    localResults.value = { ...nextResults };
  },
  { deep: true },
);

const openModal = (subjectKey) => {
  formError.value = '';
  resultForm.clearErrors();
  formSubjectKey.value = subjectKey || props.subjects[0]?.key || '';
  const existingScore =
    localResults.value?.[formSubjectKey.value]?.score ?? '';
  formScore.value = existingScore === null ? '' : String(existingScore);
  isModalOpen.value = true;
};

const closeModal = () => {
  isModalOpen.value = false;
};

const saveResult = () => {
  if (!formSubjectKey.value) {
    formError.value = '科目を選択してください。';
    return;
  }

  const isEmpty = formScore.value === '' || formScore.value === null;
  if (!isEmpty) {
    const score = Number(formScore.value);
    if (Number.isNaN(score) || score < 0 || score > 100) {
      formError.value = '0〜100の点数を入力してください。';
      return;
    }
    resultForm.score = score;
  } else {
    resultForm.score = null;
  }

  resultForm.subject_key = formSubjectKey.value;

  resultForm.post(route('mypage.results'), {
    preserveScroll: true,
    onSuccess: () => {
      if (isEmpty) {
        const next = { ...localResults.value };
        delete next[formSubjectKey.value];
        localResults.value = next;
      } else {
        localResults.value = {
          ...localResults.value,
          [formSubjectKey.value]: {
            score: Number(formScore.value),
          },
        };
      }
      closeModal();
    },
    onError: () => {
      formError.value =
        resultForm.errors.score ||
        resultForm.errors.subject_key ||
        '保存に失敗しました。';
    },
  });
};

onMounted(() => {
  const params = new URLSearchParams(window.location.search);
  const openSubject = params.get('open_subject');
  if (!openSubject) return;
  if (!props.subjects.some((subject) => subject.key === openSubject)) return;
  openModal(openSubject);
});

const passScoreForm = useForm({
  pass_score: props.passScore ?? '',
});
const isPassScoreModalOpen = ref(false);

const openPassScoreModal = () => {
  passScoreForm.pass_score = props.passScore ?? '';
  passScoreForm.clearErrors();
  isPassScoreModalOpen.value = true;
};

const closePassScoreModal = () => {
  isPassScoreModalOpen.value = false;
};

const updatePassScore = () => {
  passScoreForm.post(route('mypage.passScore'), {
    preserveScroll: true,
    onSuccess: () => {
      closePassScoreModal();
    },
  });
};

const hasPassScore = computed(() => props.passScore !== null);

const scoredSubjects = computed(() => {
  return props.subjects.map((subject) => {
    const score = localResults.value?.[subject.key]?.score ?? null;
    const passed = hasPassScore.value && score !== null && score >= props.passScore;
    return { ...subject, score, passed };
  });
});

const passedCount = computed(
  () => scoredSubjects.value.filter((s) => s.passed).length,
);
const allSubjectsPassed = computed(() => passedCount.value === 8);

const totalScore = computed(
  () =>
    scoredSubjects.value
      .map((s) => (s.score ?? 0))
      .reduce((a, b) => a + b, 0),
);

const allScored = computed(
  () => scoredSubjects.value.filter((s) => s.score !== null).length === 8,
);

const excellent = computed(
  () =>
    allScored.value &&
    passedCount.value === 8 &&
    totalScore.value >= 720,
);

const totalTargetScore = 720;
const remainingToTarget = computed(() =>
  Math.max(0, totalTargetScore - totalScore.value),
);
const scoreTargetReached = computed(() => remainingToTarget.value === 0);
</script>

<template>
  <SeihoTestLayout title="マイページ">
    <Head title="マイページ" />

    <div class="mx-auto w-full max-w-3xl px-6 py-10">
      <div
        v-if="flashStatus"
        class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700"
      >
        {{ flashStatus }}
      </div>

      <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">マイページ</h1>
        <p class="mt-2 text-sm text-gray-500">
          登録状況の確認や進捗管理ができます。
        </p>
      </div>

      <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">
        <div class="text-sm text-gray-500">ログイン中のユーザー</div>
        <div class="mt-1 text-lg font-semibold text-gray-800">
          {{ user?.email || '未ログイン' }}
        </div>

        <div class="mt-6 border-t border-gray-100 pt-4">
          <div class="text-sm text-gray-500">購入状況</div>
          <div
            class="mt-1 text-sm font-semibold"
            :class="props.hasPremium ? 'text-emerald-700' : 'text-gray-700'"
          >
            {{ props.hasPremium ? 'プレミアムプラン購入済み' : 'プレミアムプラン未購入' }}
          </div>
          <p class="mt-2 text-xs text-gray-500">
            {{ props.hasPremium ? '全ての解説を閲覧できます。' : 'プレミアムプランで全ての解説を閲覧できます。' }}
          </p>
          <div
            v-if="!props.hasPremium"
            class="mt-3"
          >
            <Link
              :href="route('pricing')"
              class="inline-flex items-center justify-center rounded-full bg-purple-600 px-4 py-2 text-xs font-semibold text-white hover:bg-purple-700 transition"
            >
              料金プランを見る
            </Link>
          </div>
        </div>
      </div>

      <div id="score-input" class="mt-8 rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between">
          <div>
            <div class="flex items-center gap-2">
              <div class="text-sm text-gray-500">進捗</div>
              <span
                v-if="allSubjectsPassed"
                class="inline-flex items-center rounded-full bg-sky-50 px-2 py-0.5 text-xs font-semibold text-sky-700"
              >
                全科目合格達成
              </span>
            </div>
            <div class="mt-1 text-lg font-semibold text-gray-800">
              {{ passedCount }}/8
            </div>
          </div>
          <div class="text-right">
            <div class="text-xs text-gray-500">合格基準</div>
            <div class="mt-1 flex items-center justify-end gap-2">
              <span
                class="text-sm font-semibold"
                :class="hasPassScore ? 'text-gray-700' : 'text-amber-700'"
              >
                {{ hasPassScore ? `${passScore} 点` : '未入力' }}
              </span>
              <button
                type="button"
                class="rounded-full border border-purple-200 bg-white px-3 py-1 text-xs font-semibold text-purple-700 hover:bg-purple-50 transition"
                @click="openPassScoreModal"
              >
                {{ hasPassScore ? '変更' : '入力' }}
              </button>
            </div>
            <div
              v-if="!hasPassScore"
              class="mt-1 text-xs text-amber-700"
            >
              合格基準を入力してください
            </div>
          </div>
        </div>

        <div class="mt-4 h-2 w-full rounded-full bg-gray-100">
          <div
            class="h-2 rounded-full bg-purple-500"
            :style="{ width: `${(passedCount / 8) * 100}%` }"
          ></div>
        </div>

        <div class="mt-4 text-sm text-gray-700">
          合計 {{ totalScore }} / 800 点
          <span
            v-if="excellent"
            class="ml-2 inline-flex items-center rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-semibold text-emerald-700"
          >
            優秀賞対象
          </span>
        </div>
        <div
          class="mt-2 inline-flex items-center rounded-lg px-3 py-1.5 text-sm font-semibold"
          :class="scoreTargetReached ? 'bg-emerald-50 text-emerald-700' : 'bg-amber-50 text-amber-700'"
        >
          <template v-if="scoreTargetReached">
            優秀賞基準（720点）到達
          </template>
          <template v-else>
            優秀賞基準（720点）まであと {{ remainingToTarget }} 点
          </template>
        </div>
        <div
          v-if="remainingToTarget === 0 && passedCount < 8"
          class="mt-1 text-xs text-amber-700"
        >
          720点に到達していますが、優秀賞は全8科目の合格が必要です
        </div>

        <div class="mt-5 space-y-2">
          <div
            v-for="subject in scoredSubjects"
            :key="subject.key"
            class="flex items-center justify-between rounded-xl border border-gray-100 px-4 py-2.5 hover:bg-gray-50 transition cursor-pointer"
            @click="openModal(subject.key)"
          >
            <div class="text-sm font-semibold text-gray-800">
              {{ subject.name }}
            </div>
            <div class="grid grid-cols-[72px_64px] items-center gap-2">
              <div class="text-right text-sm text-gray-600 tabular-nums">
                <span v-if="subject.score !== null">
                  {{ subject.score }} 点
                </span>
                <span v-else class="text-gray-400">未入力</span>
              </div>
              <span
                v-if="subject.score !== null && hasPassScore"
                class="inline-flex justify-center rounded-full px-2 py-0.5 text-xs font-semibold"
                :class="
                  subject.passed
                    ? 'bg-emerald-50 text-emerald-700'
                    : 'bg-rose-50 text-rose-700'
                "
              >
                {{ subject.passed ? '合格' : '不合格' }}
              </span>
              <span
                v-else-if="subject.score !== null"
                class="inline-flex justify-center rounded-full bg-gray-100 px-2 py-0.5 text-xs font-semibold text-gray-500"
              >
                判定なし
              </span>
              <span v-else class="h-6"></span>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-8 flex justify-center">
        <Link
          :href="route('logout')"
          method="post"
          as="button"
          class="inline-flex items-center justify-center rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition"
        >
          ログアウト
        </Link>
      </div>
    </div>

    <div
      v-if="isModalOpen"
      class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 px-4"
      @click.self="closeModal"
    >
      <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl">
        <div class="flex items-center justify-between">
          <div class="text-lg font-semibold text-gray-900">結果を入力</div>
        </div>

        <div class="mt-4 space-y-4">
          <div class="text-sm font-semibold text-gray-800">
            {{ props.subjects.find((s) => s.key === formSubjectKey)?.name }}
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700">
              点数（0〜100）
            </label>
            <input
              v-model="formScore"
              type="number"
              min="0"
              max="100"
              inputmode="numeric"
              class="mt-1 w-full rounded-lg border border-gray-200 px-3 py-2 text-base sm:text-sm focus:border-purple-500 focus:ring-purple-500"
            />
            <p class="mt-1 text-xs text-gray-500">
              空欄で保存すると「未入力」に戻せます。
            </p>
          </div>

          <div
            v-if="formError"
            class="rounded-lg border border-rose-100 bg-rose-50 px-3 py-2 text-sm text-rose-700"
          >
            {{ formError }}
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-3">
          <button
            type="button"
            class="rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition"
            @click="closeModal"
          >
            キャンセル
          </button>
          <button
            type="button"
            class="rounded-full bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700 transition"
            @click="saveResult"
            :disabled="resultForm.processing"
          >
            保存
          </button>
        </div>
      </div>
    </div>

    <div
      v-if="isPassScoreModalOpen"
      class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 px-4"
      @click.self="closePassScoreModal"
    >
      <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl">
        <div class="flex items-center justify-between">
          <div class="text-lg font-semibold text-gray-900">合格基準を変更</div>
        </div>

        <div class="mt-4 space-y-4">
          <div>
            <label class="block text-sm font-semibold text-gray-700">
              合格基準（0〜100）
            </label>
            <input
              v-model="passScoreForm.pass_score"
              type="number"
              min="0"
              max="100"
              inputmode="numeric"
              class="mt-1 w-full rounded-lg border border-gray-200 px-3 py-2 text-base sm:text-sm focus:border-purple-500 focus:ring-purple-500"
            />
          </div>

          <div
            v-if="passScoreForm.errors.pass_score"
            class="rounded-lg border border-rose-100 bg-rose-50 px-3 py-2 text-sm text-rose-700"
          >
            {{ passScoreForm.errors.pass_score }}
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-3">
          <button
            type="button"
            class="rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition"
            @click="closePassScoreModal"
          >
            キャンセル
          </button>
          <button
            type="button"
            class="rounded-full bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700 transition"
            @click="updatePassScore"
            :disabled="passScoreForm.processing"
          >
            更新
          </button>
        </div>
      </div>
    </div>
  </SeihoTestLayout>
</template>
