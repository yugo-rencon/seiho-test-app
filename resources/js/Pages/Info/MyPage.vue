<script setup>
import axios from 'axios';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { computed, onUnmounted, ref, watch } from 'vue';
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const page = usePage();
const user = page.props?.auth?.user || null;
const flashStatus = computed(() => page.props?.flash?.status ?? null);
const props = defineProps({
  scope: {
    type: String,
    required: false,
    default: 'seiho',
  },
  scoreOnly: {
    type: Boolean,
    default: false,
  },
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
  hasPremiumSeiho: {
    type: Boolean,
    default: false,
  },
  hasPremiumDaigaku: {
    type: Boolean,
    default: false,
  },
  hasPremiumIppan: {
    type: Boolean,
    default: false,
  },
  hasPremiumSenmon: {
    type: Boolean,
    default: false,
  },
  hasPremiumOuyou: {
    type: Boolean,
    default: false,
  },
  hasPremiumBasic: {
    type: Boolean,
    default: false,
  },
  hasPurchasedIppan: {
    type: Boolean,
    default: false,
  },
  hasPurchasedSenmon: {
    type: Boolean,
    default: false,
  },
  hasPurchasedOuyou: {
    type: Boolean,
    default: false,
  },
  hasPurchasedBasic: {
    type: Boolean,
    default: false,
  },
  purchaseDates: {
    type: Object,
    default: () => ({}),
  },
});

const isDaigaku = computed(() => props.scope === 'daigaku');
const supportsScoreTracking = computed(() => ['seiho', 'daigaku'].includes(props.scope));
const currentSiteName = computed(() => {
  if (props.scope === 'daigaku') return '生保大学';
  if (props.scope === 'ippan') return '生命保険一般課程';
  if (props.scope === 'senmon') return '生命保険専門課程';
  if (props.scope === 'ouyou') return '生命保険応用課程';
  return '生保講座';
});
const mypageResultsRouteName = computed(() =>
  isDaigaku.value ? 'daigaku.mypage.results' : 'mypage.results',
);
const mypagePassScoreRouteName = computed(() =>
  isDaigaku.value ? 'daigaku.mypage.passScore' : 'mypage.passScore',
);
const contactRouteName = computed(() => {
  if (props.scope === 'daigaku') return 'daigaku.contact.index';
  if (props.scope === 'ippan') return 'ippan.contact.index';
  if (props.scope === 'senmon') return 'senmon.contact.index';
  if (props.scope === 'ouyou') return 'ouyou.contact.index';
  return 'contact.index';
});
const pricingHref = computed(() =>
  isDaigaku.value
    ? route('daigaku.pricing')
    : route('pricing', {
        ...(props.scope !== 'seiho' ? { scope: props.scope } : {}),
        return_to: page.url,
      }),
);
const purchaseStatuses = computed(() => [
  {
    key: 'seiho',
    label: '生保講座',
    active: props.hasPremiumSeiho,
    activeClass: 'text-purple-700',
    badgeClass: 'bg-purple-100 text-purple-700',
    statusText: 'プレミアム購入済み',
    badgeText: '有効',
    purchaseDate: props.purchaseDates?.seiho ?? null,
  },
  {
    key: 'daigaku',
    label: '生保大学',
    active: props.hasPremiumDaigaku,
    activeClass: 'text-blue-700',
    badgeClass: 'bg-blue-100 text-blue-700',
    statusText: 'プレミアム購入済み',
    badgeText: '有効',
    purchaseDate: props.purchaseDates?.daigaku ?? null,
  },
  {
    key: 'ippan',
    label: '生命保険一般課程',
    active: props.hasPurchasedIppan,
    activeClass: 'text-fuchsia-700',
    badgeClass: 'bg-pink-100 text-fuchsia-700',
    statusText: 'プレミアム購入済み',
    badgeText: '有効',
    purchaseDate: props.purchaseDates?.ippan ?? null,
  },
  {
    key: 'senmon',
    label: '生命保険専門課程',
    active: props.hasPurchasedSenmon,
    activeClass: 'text-emerald-700',
    badgeClass: 'bg-emerald-100 text-emerald-700',
    statusText: 'プレミアム購入済み',
    badgeText: '有効',
    purchaseDate: props.purchaseDates?.senmon ?? null,
  },
  {
    key: 'ouyou',
    label: '生命保険応用課程',
    active: props.hasPurchasedOuyou,
    activeClass: 'text-amber-700',
    badgeClass: 'bg-amber-100 text-amber-700',
    statusText: 'プレミアム購入済み',
    badgeText: '有効',
    purchaseDate: props.purchaseDates?.ouyou ?? null,
  },
  {
    key: 'basic',
    label: '一般・専門・応用セット',
    active: props.hasPurchasedBasic,
    activeClass: 'text-cyan-700',
    badgeClass: 'bg-cyan-100 text-cyan-700',
    statusText: 'プレミアム購入済み',
    badgeText: '有効',
    purchaseDate: props.purchaseDates?.basic ?? null,
  },
]);
const activePurchaseStatuses = computed(() =>
  purchaseStatuses.value.filter((status) => status.active),
);
const pricingButtonClass = computed(() => {
  if (props.scope === 'daigaku') return 'bg-blue-600 hover:bg-blue-700';
  if (props.scope === 'ippan') return 'bg-fuchsia-600 hover:bg-fuchsia-700';
  if (props.scope === 'senmon') return 'bg-emerald-600 hover:bg-emerald-700';
  if (props.scope === 'ouyou') return 'bg-amber-600 hover:bg-amber-700';
  return 'bg-purple-600 hover:bg-purple-700';
});
const formatDateLabel = (value) => {
  if (!value) return null;
  const [year, month, day] = String(value).split('-');
  if (!year || !month || !day) return value;
  return `${Number(year)}年${Number(month)}月${Number(day)}日`;
};

const localResults = ref({ ...props.results });
const localPassScore = ref(props.passScore);
const isModalOpen = ref(false);
const formSubjectKey = ref(props.subjects[0]?.key || '');
const formScore = ref('');
const formExamDate = ref('');
const isExamCalendarOpen = ref(false);
const calendarMonth = ref('');
const formError = ref('');
const isSavingResult = ref(false);
const isPassScoreModalOpen = ref(false);
const passScoreInput = ref(props.passScore ?? '');
const passScoreError = ref('');
const isSavingPassScore = ref(false);

const formatDate = (date) => {
  const year = date.getFullYear();
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const day = String(date.getDate()).padStart(2, '0');
  return `${year}-${month}-${day}`;
};

const parseDate = (value) => {
  if (!value) return null;
  const [year, month, day] = value.split('-').map(Number);
  if (!year || !month || !day) return null;
  return new Date(year, month - 1, day);
};

const displayedExamDate = computed(() => {
  const date = parseDate(formExamDate.value);
  if (!date) return '受験日を選択';
  return `${date.getFullYear()}年${date.getMonth() + 1}月${date.getDate()}日`;
});

const calendarBaseDate = computed(() => {
  const selectedDate = parseDate(calendarMonth.value || formExamDate.value);
  return selectedDate ?? new Date();
});

const calendarTitle = computed(() => {
  const date = calendarBaseDate.value;
  return `${date.getFullYear()}年${date.getMonth() + 1}月`;
});

const calendarDays = computed(() => {
  const base = calendarBaseDate.value;
  const year = base.getFullYear();
  const month = base.getMonth();
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0).getDate();
  const leadingBlankCount = firstDay.getDay();
  const days = [];

  for (let i = 0; i < leadingBlankCount; i += 1) {
    days.push(null);
  }

  for (let day = 1; day <= lastDay; day += 1) {
    const date = new Date(year, month, day);
    days.push({
      day,
      value: formatDate(date),
      isToday: formatDate(date) === formatDate(new Date()),
      isSelected: formatDate(date) === formExamDate.value,
    });
  }

  return days;
});

const openExamCalendar = () => {
  calendarMonth.value = formExamDate.value || formatDate(new Date());
  isExamCalendarOpen.value = true;
};

const moveCalendarMonth = (amount) => {
  const base = calendarBaseDate.value;
  const next = new Date(base.getFullYear(), base.getMonth() + amount, 1);
  calendarMonth.value = formatDate(next);
};

const selectExamDate = (value) => {
  formExamDate.value = value;
  isExamCalendarOpen.value = false;
};

const clearExamDate = () => {
  formExamDate.value = '';
  isExamCalendarOpen.value = false;
};

watch(
  () => props.results,
  (nextResults) => {
    localResults.value = { ...nextResults };
  },
  { deep: true },
);
watch(
  () => props.passScore,
  (nextPassScore) => {
    localPassScore.value = nextPassScore;
    passScoreInput.value = nextPassScore ?? '';
  },
);
watch(
  () => isModalOpen.value || isPassScoreModalOpen.value,
  (isOpen) => {
    if (typeof document === 'undefined') return;
    document.body.style.overflow = isOpen ? 'hidden' : '';
  },
);
onUnmounted(() => {
  if (typeof document === 'undefined') return;
  document.body.style.overflow = '';
});

const openPassScoreModal = () => {
  passScoreInput.value = localPassScore.value ?? '';
  passScoreError.value = '';
  isPassScoreModalOpen.value = true;
};

const closePassScoreModal = () => {
  isPassScoreModalOpen.value = false;
};

const updatePassScore = () => {
  passScoreError.value = '';
  const nextScore = Number(passScoreInput.value);

  if (Number.isNaN(nextScore) || nextScore < 0 || nextScore > 100) {
    passScoreError.value = '0〜100の点数を入力してください。';
    return;
  }

  isSavingPassScore.value = true;
  axios
    .post(
      route(mypagePassScoreRouteName.value),
      { pass_score: nextScore },
      {
        headers: {
          Accept: 'application/json',
        },
      },
    )
    .then((response) => {
      localPassScore.value = response?.data?.pass_score ?? nextScore;
      closePassScoreModal();
    })
    .catch((error) => {
      passScoreError.value =
        error?.response?.data?.errors?.pass_score?.[0] ||
        '保存に失敗しました。';
    })
    .finally(() => {
      isSavingPassScore.value = false;
    });
};

const openModal = (subjectKey) => {
  formError.value = '';
  formSubjectKey.value = subjectKey || props.subjects[0]?.key || '';
  const existingResult = localResults.value?.[formSubjectKey.value] ?? {};
  const existingScore = existingResult.score ?? '';
  formScore.value = existingScore === null ? '' : String(existingScore);
  formExamDate.value = existingResult.exam_date ?? '';
  isExamCalendarOpen.value = false;
  isModalOpen.value = true;
};

const closeModal = () => {
  isExamCalendarOpen.value = false;
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
    formScore.value = String(score);
  }
  isSavingResult.value = true;
  axios
    .post(
      route(mypageResultsRouteName.value),
      {
        subject_key: formSubjectKey.value,
        score: isEmpty ? null : Number(formScore.value),
        exam_date: isEmpty ? null : formExamDate.value || null,
      },
      {
        headers: {
          Accept: 'application/json',
        },
      },
    )
    .then(() => {
      if (isEmpty) {
        const next = { ...localResults.value };
        delete next[formSubjectKey.value];
        localResults.value = next;
      } else {
        localResults.value = {
          ...localResults.value,
          [formSubjectKey.value]: {
            score: Number(formScore.value),
            exam_date: formExamDate.value || null,
          },
        };
      }
      closeModal();
    })
    .catch((error) => {
      formError.value =
        error?.response?.data?.errors?.score?.[0] ||
        error?.response?.data?.errors?.exam_date?.[0] ||
        error?.response?.data?.errors?.subject_key?.[0] ||
        '保存に失敗しました。';
    })
    .finally(() => {
      isSavingResult.value = false;
    });
};

const hasPassScore = computed(() => localPassScore.value !== null);

const scoredSubjects = computed(() => {
  return props.subjects.map((subject) => {
    const result = localResults.value?.[subject.key] ?? {};
    const score = result.score ?? null;
    const examDate = result.exam_date ?? null;
    const passed = hasPassScore.value && score !== null && score >= localPassScore.value;
    return { ...subject, score, examDate, passed };
  });
});

const passedCount = computed(
  () => scoredSubjects.value.filter((s) => s.passed).length,
);
const recordedCount = computed(
  () => scoredSubjects.value.filter((s) => s.score !== null).length,
);
const totalSubjects = computed(() => props.subjects.length);
const allSubjectsPassed = computed(() => passedCount.value === totalSubjects.value);
const progressPercent = computed(() =>
  totalSubjects.value === 0
    ? 0
    : Math.round((passedCount.value / totalSubjects.value) * 100),
);
const progressCircleDashOffset = computed(() =>
  100 - progressPercent.value,
);

const totalScore = computed(
  () =>
    scoredSubjects.value
      .map((s) => (s.score ?? 0))
      .reduce((a, b) => a + b, 0),
);

const allScored = computed(
  () => scoredSubjects.value.filter((s) => s.score !== null).length === totalSubjects.value,
);

const excellent = computed(
  () =>
    !isDaigaku.value &&
    allScored.value &&
    passedCount.value === totalSubjects.value &&
    totalScore.value >= 720,
);

</script>

<template>
  <SeihoTestLayout :title="props.scoreOnly ? '試験結果を記録' : 'マイページ'">
    <Head :title="props.scoreOnly ? '試験結果を記録' : 'マイページ'" />

    <div class="mx-auto w-full max-w-3xl px-6 py-10">
      <div
        v-if="flashStatus"
        class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700"
      >
        {{ flashStatus }}
      </div>

      <div class="mb-6 border-b border-gray-200 pb-5">
        <h1 class="text-2xl font-bold tracking-normal text-gray-900">
          {{ props.scoreOnly ? '試験結果を記録' : 'マイページ' }}
        </h1>
        <p class="mt-2 text-sm text-gray-500">
          {{ props.scoreOnly ? '本番試験の点数を科目ごとに管理できます。' : '登録状況を確認できます。' }}
        </p>
      </div>

      <div v-if="!props.scoreOnly" class="space-y-4">
        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">
          <div class="flex flex-wrap items-start justify-between gap-3">
            <div>
              <div class="flex items-center gap-2">
                <div class="text-sm font-semibold text-gray-500">アカウント</div>
                <span class="inline-flex items-center rounded-full border border-purple-200 bg-gradient-to-r from-purple-50 to-blue-50 px-2 py-0.5 text-[11px] font-semibold text-purple-600">全試験共通</span>
              </div>
              <div class="no-data-detectors mt-1 break-all text-lg font-semibold text-gray-900">
                {{ user?.email || '未ログイン' }}
              </div>
            </div>
          </div>
        </div>

        <div
          class="rounded-2xl border border-purple-100 bg-gradient-to-br from-purple-50 via-white to-indigo-50 p-6 shadow-sm"
        >
          <div class="flex flex-wrap items-start justify-between gap-3">
            <div>
              <p class="text-xs font-bold uppercase tracking-wide text-purple-500">Current Plan</p>
              <h2 class="mt-1 text-xl font-bold text-gray-900">
                {{ props.hasPremium ? 'プレミアムプラン利用中' : '無料プラン' }}
              </h2>
              <p class="mt-2 text-sm leading-relaxed text-gray-600">
                {{ props.hasPremium ? '購入済みの試験の解説を、利用期限なしで閲覧できます。' : '無料公開中の解説を閲覧できます。' }}
              </p>
            </div>
            <span
              class="inline-flex items-center rounded-full px-3 py-1 text-xs font-bold"
              :class="props.hasPremium ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-600'"
            >
              {{ props.hasPremium ? '有効' : '無料' }}
            </span>
          </div>
        </div>

        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">
          <h2 class="text-sm font-bold text-gray-900">よく使うメニュー</h2>
          <div class="mt-4 grid gap-3 sm:grid-cols-2">
            <Link
              :href="route('tests.index')"
              class="rounded-xl border border-gray-100 bg-gray-50 px-4 py-3 transition hover:border-purple-100 hover:bg-purple-50"
            >
              <div class="text-sm font-bold text-gray-900">解説一覧を見る</div>
              <div class="mt-1 text-xs text-gray-500">科目・年度・フォームから解説を探せます。</div>
            </Link>
            <Link
              :href="route('results')"
              class="rounded-xl border border-gray-100 bg-gray-50 px-4 py-3 transition hover:border-purple-100 hover:bg-purple-50"
            >
              <div class="text-sm font-bold text-gray-900">試験結果を記録</div>
              <div class="mt-1 text-xs text-gray-500">点数・受験日を記録して合格状況を確認できます。</div>
            </Link>
            <Link
              :href="route(contactRouteName)"
              class="rounded-xl border border-gray-100 bg-gray-50 px-4 py-3 transition hover:border-purple-100 hover:bg-purple-50"
            >
              <div class="text-sm font-bold text-gray-900">お問い合わせ</div>
              <div class="mt-1 text-xs text-gray-500">誤記や不明点があればご連絡ください。</div>
            </Link>
            <Link
              :href="pricingHref"
              class="rounded-xl border border-gray-100 bg-gray-50 px-4 py-3 transition hover:border-purple-100 hover:bg-purple-50"
            >
              <div class="text-sm font-bold text-gray-900">料金プラン</div>
              <div class="mt-1 text-xs text-gray-500">購入済みプランや閲覧範囲を確認できます。</div>
            </Link>
          </div>
        </div>

        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">
          <div class="mb-3 text-sm font-bold text-gray-900">購入状況</div>
          <div v-if="activePurchaseStatuses.length" class="grid gap-2 sm:grid-cols-2">
            <div
              v-for="status in activePurchaseStatuses"
              :key="status.key"
              class="rounded-xl border border-gray-100 bg-gray-50 px-4 py-3"
            >
              <div class="flex items-center justify-between gap-3">
                <div>
                  <div class="text-xs font-semibold text-gray-500">{{ status.label }}</div>
                  <div
                    class="mt-0.5 text-sm font-semibold"
                    :class="status.activeClass"
                  >
                    {{ status.statusText }}
                  </div>
                </div>
                <span
                  class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-bold"
                  :class="status.badgeClass"
                >
                  {{ status.badgeText }}
                </span>
              </div>
              <div v-if="status.purchaseDate" class="mt-2 text-xs text-gray-500">
                購入日：{{ formatDateLabel(status.purchaseDate) }}
              </div>
            </div>
          </div>
          <div v-else class="rounded-lg border border-gray-100 bg-gray-50 px-4 py-3 text-sm font-semibold text-gray-500">
            購入済みの商品はありません。
          </div>
          <div v-if="!props.hasPremium" class="mt-3">
            <Link
              :href="pricingHref"
              class="inline-flex items-center justify-center rounded-full px-4 py-2 text-xs font-semibold text-white transition"
              :class="pricingButtonClass"
            >
              料金プランを見る
            </Link>
          </div>
        </div>
      </div>

      <div
        v-if="props.scoreOnly && supportsScoreTracking"
        id="score-input"
        class="rounded-lg border border-gray-200 bg-white"
        :class="props.scoreOnly ? '' : 'mt-8'"
      >
        <div class="border-b border-gray-200 p-5">
          <div
            class="relative mb-5 overflow-hidden rounded-2xl border p-4 transition sm:p-5"
            :class="
              allSubjectsPassed
                ? 'border-purple-200 bg-gradient-to-br from-purple-600 via-fuchsia-500 to-indigo-600 text-white shadow-lg shadow-purple-200/70'
                : 'border-purple-100 bg-gradient-to-br from-purple-50 via-white to-indigo-50'
            "
          >
            <div
              v-if="allSubjectsPassed"
              class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-white/15 blur-2xl"
            ></div>
            <div
              v-if="allSubjectsPassed"
              class="pointer-events-none absolute -bottom-12 -left-10 h-32 w-32 rounded-full bg-white/10 blur-2xl"
            ></div>

            <div class="relative flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
              <div>
                <div
                  v-if="allSubjectsPassed || excellent"
                  class="mb-3 flex flex-wrap items-center gap-2"
                >
                  <span
                    v-if="allSubjectsPassed"
                    class="inline-flex items-center rounded-full bg-white/20 px-3 py-1 text-xs font-bold text-white ring-1 ring-white/25"
                  >
                    全科目合格
                  </span>
                  <span
                    v-if="excellent"
                    class="inline-flex items-center rounded-full bg-amber-300 px-3 py-1 text-xs font-black text-amber-950 shadow-sm"
                  >
                    優秀賞対象
                  </span>
                </div>
                <div
                  class="text-sm font-bold"
                  :class="allSubjectsPassed ? 'text-white/90' : 'text-gray-900'"
                >
                  合格進捗
                </div>
                <div
                  class="mt-1"
                  :class="allSubjectsPassed ? 'text-2xl font-black leading-snug text-white sm:text-3xl' : 'text-sm text-gray-600'"
                >
                  <template v-if="allSubjectsPassed">
                    8科目すべて合格
                  </template>
                  <template v-else>
                    {{ passedCount }}科目 / {{ totalSubjects }}科目に合格
                  </template>
                </div>
                <p
                  v-if="excellent"
                  class="mt-2 text-sm font-semibold text-white/90"
                >
                  8科目の合計点が720点以上に到達しています。
                </p>
                <p
                  v-else-if="allSubjectsPassed"
                  class="mt-2 text-sm font-semibold text-white/85"
                >
                  おめでとうございます。全科目の合格条件を満たしています。
                </p>
              </div>
              <div
                class="relative shrink-0 self-center rounded-full"
                :class="allSubjectsPassed ? 'h-32 w-32 bg-white/10 p-2 shadow-2xl shadow-purple-950/20 ring-1 ring-white/20 sm:h-36 sm:w-36' : 'h-24 w-24'"
              >
                <svg class="h-full w-full -rotate-90" viewBox="0 0 36 36" aria-hidden="true">
                  <circle
                    cx="18"
                    cy="18"
                    r="15.9155"
                    fill="none"
                    :class="allSubjectsPassed ? 'stroke-white/20' : 'stroke-purple-100'"
                    stroke-width="3"
                  />
                  <circle
                    cx="18"
                    cy="18"
                    r="15.9155"
                    fill="none"
                    :class="allSubjectsPassed ? 'stroke-white' : 'stroke-purple-500'"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-dasharray="100"
                    :stroke-dashoffset="progressCircleDashOffset"
                  />
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                  <div
                    class="font-bold"
                    :class="allSubjectsPassed ? 'text-3xl text-white' : 'text-xl text-gray-900'"
                  >
                    {{ passedCount }}/{{ totalSubjects }}
                  </div>
                  <div
                    class="font-semibold"
                    :class="allSubjectsPassed ? 'mt-1 text-xs text-white/80' : 'text-[10px] text-gray-400'"
                  >
                    合格
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-3 gap-4">
            <div>
              <div class="text-xs font-medium text-gray-500">記録済み</div>
              <div class="mt-1 text-2xl font-semibold text-gray-900">
                {{ recordedCount }}<span class="ml-1 text-sm font-medium text-gray-400">/ {{ totalSubjects }}</span>
              </div>
            </div>
            <div>
              <div class="text-xs font-medium text-gray-500">合格</div>
              <div class="mt-1 text-2xl font-semibold text-gray-900">
                {{ passedCount }}<span class="ml-1 text-sm font-medium text-gray-400">/ {{ totalSubjects }}</span>
              </div>
            </div>
            <div>
              <div class="text-xs font-medium text-gray-500">合計点</div>
              <div class="mt-1 text-2xl font-semibold text-gray-900">
                {{ totalScore }}<span class="ml-1 text-sm font-medium text-gray-400">点</span>
              </div>
            </div>
          </div>

          <div class="mt-5 flex flex-col gap-3 border-t border-gray-100 pt-4 sm:flex-row sm:items-center sm:justify-between">
            <div class="space-y-2">
              <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
                <span>
                  合格基準:
                  <span class="font-semibold" :class="hasPassScore ? 'text-gray-900' : 'text-amber-700'">
                    {{ isDaigaku ? '60点' : hasPassScore ? `${localPassScore}点` : '未入力' }}
                  </span>
                </span>
                <button
                  v-if="!isDaigaku"
                  type="button"
                  class="rounded-full border border-gray-200 bg-white px-2.5 py-1 text-xs font-semibold text-gray-500 transition hover:border-purple-200 hover:bg-purple-50 hover:text-purple-700"
                  @click="openPassScoreModal"
                >
                  変更
                </button>
                <span v-if="!isDaigaku && !hasPassScore" class="text-xs text-amber-700">
                  先に基準点を入力してください
                </span>
              </div>
              <div
                v-if="!isDaigaku"
                class="text-xs font-medium text-gray-400"
              >
                優秀賞の目安：8科目の合計720点以上
              </div>
            </div>
          </div>
        </div>

        <div class="divide-y divide-gray-100">
          <div
            v-for="subject in scoredSubjects"
            :key="subject.key"
            class="group flex cursor-pointer items-center justify-between gap-3 px-5 py-3 transition hover:bg-gray-50"
            @click="openModal(subject.key)"
          >
            <div class="min-w-0">
              <div class="text-sm font-semibold leading-snug text-gray-900">
                {{ subject.name }}
              </div>
              <div
                v-if="subject.examDate"
                class="mt-1 text-xs font-medium text-gray-400"
              >
                受験日 {{ subject.examDate }}
              </div>
            </div>
            <div class="flex shrink-0 items-center gap-2">
              <div
                v-if="subject.score !== null"
                class="w-14 text-right text-sm text-gray-700 tabular-nums"
              >
                {{ subject.score }}点
              </div>
              <span
                v-if="subject.score !== null && hasPassScore"
                class="inline-flex w-14 justify-center rounded px-1.5 py-0.5 text-xs font-semibold"
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
                class="inline-flex w-14 justify-center rounded bg-gray-100 px-1.5 py-0.5 text-xs font-semibold text-gray-500"
              >
                判定なし
              </span>
              <span
                v-else
                class="inline-flex justify-center rounded-full border border-gray-200 bg-white px-3 py-1 text-xs font-semibold text-gray-600 shadow-sm transition group-hover:border-purple-200 group-hover:bg-purple-50 group-hover:text-purple-700"
              >
                点数を入力
              </span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div
      v-if="props.scoreOnly && supportsScoreTracking && isModalOpen"
      class="fixed inset-0 z-50 flex items-start justify-center overflow-y-auto overscroll-contain bg-black/30 px-4 py-6 sm:items-center"
      @click.self="closeModal"
    >
      <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-xl">
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
              class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-base sm:text-sm"
              :class="isDaigaku ? 'focus:border-blue-500 focus:ring-blue-500' : 'focus:border-gray-500 focus:ring-gray-500'"
            />
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700">
              受験日（任意）
            </label>
            <div class="relative mt-1">
              <button
                type="button"
                class="flex w-full items-center justify-between rounded-xl border border-purple-100 bg-purple-50/50 px-3 py-2.5 text-left text-sm font-semibold shadow-sm transition hover:border-purple-200 hover:bg-purple-50 focus:outline-none focus:ring-2 focus:ring-purple-100"
                :class="formExamDate ? 'text-gray-900' : 'text-gray-400'"
                @click="openExamCalendar"
              >
                <span>{{ displayedExamDate }}</span>
                <svg class="h-4 w-4 text-purple-400" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                  <path d="M6 3.5V6M14 3.5V6M4.5 8.5h11M5.5 5h9A1.5 1.5 0 0 1 16 6.5v8A1.5 1.5 0 0 1 14.5 16h-9A1.5 1.5 0 0 1 4 14.5v-8A1.5 1.5 0 0 1 5.5 5Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </button>

              <div
                v-if="isExamCalendarOpen"
                class="relative left-0 right-0 z-10 mt-2 rounded-2xl border border-purple-100 bg-white p-3 shadow-xl sm:absolute"
              >
                <div class="mb-3 flex items-center justify-between">
                  <button
                    type="button"
                    class="grid h-8 w-8 place-items-center rounded-full text-gray-500 transition hover:bg-purple-50 hover:text-purple-700"
                    @click="moveCalendarMonth(-1)"
                  >
                    ‹
                  </button>
                  <div class="text-sm font-bold text-gray-900">
                    {{ calendarTitle }}
                  </div>
                  <button
                    type="button"
                    class="grid h-8 w-8 place-items-center rounded-full text-gray-500 transition hover:bg-purple-50 hover:text-purple-700"
                    @click="moveCalendarMonth(1)"
                  >
                    ›
                  </button>
                </div>

                <div class="grid grid-cols-7 gap-1 text-center text-[11px] font-bold text-gray-400">
                  <div>日</div>
                  <div>月</div>
                  <div>火</div>
                  <div>水</div>
                  <div>木</div>
                  <div>金</div>
                  <div>土</div>
                </div>

                <div class="mt-1 grid grid-cols-7 gap-1">
                  <div
                    v-for="(date, index) in calendarDays"
                    :key="date?.value || `blank-${index}`"
                    class="aspect-square"
                  >
                    <button
                      v-if="date"
                      type="button"
                      class="h-full w-full rounded-xl text-sm font-semibold transition"
                      :class="[
                        date.isSelected
                          ? 'bg-purple-600 text-white shadow-sm'
                          : date.isToday
                            ? 'bg-purple-50 text-purple-700'
                            : 'text-gray-700 hover:bg-purple-50 hover:text-purple-700',
                      ]"
                      @click="selectExamDate(date.value)"
                    >
                      {{ date.day }}
                    </button>
                  </div>
                </div>

                <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-3">
                  <button
                    type="button"
                    class="text-xs font-semibold text-gray-400 transition hover:text-gray-600"
                    @click="clearExamDate"
                  >
                    クリア
                  </button>
                  <button
                    type="button"
                    class="text-xs font-semibold text-purple-600 transition hover:text-purple-700"
                    @click="isExamCalendarOpen = false"
                  >
                    閉じる
                  </button>
                </div>
              </div>
            </div>
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
            class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
            @click="closeModal"
          >
            キャンセル
          </button>
          <button
            type="button"
            class="rounded-md px-4 py-2 text-sm font-semibold text-white transition"
            :class="isDaigaku ? 'bg-blue-600 hover:bg-blue-700' : 'bg-gray-900 hover:bg-gray-800'"
            @click="saveResult"
            :disabled="isSavingResult"
          >
            保存
          </button>
        </div>
      </div>
    </div>

    <div
      v-if="props.scoreOnly && supportsScoreTracking && isPassScoreModalOpen"
      class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 px-4"
      @click.self="closePassScoreModal"
    >
      <div class="w-full max-w-sm rounded-2xl bg-white p-6 shadow-xl">
        <div class="text-lg font-bold text-gray-900">合格基準を変更</div>
        <p class="mt-1 text-sm leading-relaxed text-gray-500">
          入力した基準点以上を「合格」として判定します。
        </p>

        <div class="mt-5">
          <label class="block text-sm font-semibold text-gray-700">
            合格基準点
          </label>
          <div class="mt-1 flex items-center gap-2">
            <input
              v-model="passScoreInput"
              type="number"
              min="0"
              max="100"
              inputmode="numeric"
              class="w-full rounded-xl border border-purple-100 bg-purple-50/50 px-3 py-2.5 text-base font-semibold text-gray-900 shadow-sm transition focus:border-purple-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-purple-100"
            />
            <span class="text-sm font-semibold text-gray-500">点</span>
          </div>
        </div>

        <div
          v-if="passScoreError"
          class="mt-4 rounded-lg border border-rose-100 bg-rose-50 px-3 py-2 text-sm text-rose-700"
        >
          {{ passScoreError }}
        </div>

        <div class="mt-6 flex items-center justify-end gap-3">
          <button
            type="button"
            class="rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
            @click="closePassScoreModal"
          >
            キャンセル
          </button>
          <button
            type="button"
            class="rounded-md bg-gray-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-gray-800 disabled:cursor-not-allowed disabled:opacity-60"
            :disabled="isSavingPassScore"
            @click="updatePassScore"
          >
            保存
          </button>
        </div>
      </div>
    </div>

  </SeihoTestLayout>
</template>
