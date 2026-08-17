<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { computed, ref, watch } from "vue";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { repaymentPlan } from "@/data/personalRepayments";

const props = defineProps({
    stats: {
        type: Object,
        required: true,
    },
    monthlySummaries: {
        type: Array,
        default: () => [],
    },
    dailySummaries: {
        type: Array,
        default: () => [],
    },
    studyLogsByDay: {
        type: Object,
        default: () => ({}),
    },
    exerciseStats: {
        type: Object,
        default: () => ({
            walking_count: 0,
            running_count: 0,
            strength_training_count: 0,
            streak_count: 0,
            streak_until: null,
        }),
    },
    exerciseMonthlySummaries: {
        type: Array,
        default: () => [],
    },
    exerciseLogsByDay: {
        type: Object,
        default: () => ({}),
    },
});

const activeTab = ref("english");
const activeStudyTab = ref("daily");
const activeExerciseTab = ref("daily");

const tabs = [
    { key: "english", label: "英語" },
    { key: "exercise", label: "運動" },
    { key: "learning", label: "学び" },
    { key: "repayment", label: "返済" },
];

const studyTabs = [
    { key: "daily", label: "日別" },
    { key: "record", label: "記録" },
];

const exerciseTabs = [
    { key: "daily", label: "日別" },
    { key: "summary", label: "記録" },
];

const learningSubcategories = [
    { value: "DS検定", label: "DS検定" },
    { value: "E資格", label: "E資格" },
];

const exerciseActivities = [
    { value: "ウォーキング", label: "ウォーキング", shortLabel: "walk", accent: "bg-emerald-400", activeClass: "bg-white text-emerald-950 shadow-sm ring-1 ring-emerald-100", inactiveClass: "text-emerald-700 hover:bg-white/70 hover:text-emerald-900", badgeClass: "bg-emerald-50 text-emerald-800", cardClass: "border-emerald-100 bg-emerald-50/75 text-emerald-950" },
    { value: "ランニング", label: "ランニング", shortLabel: "run", accent: "bg-sky-400", activeClass: "bg-white text-sky-950 shadow-sm ring-1 ring-sky-100", inactiveClass: "text-sky-700 hover:bg-white/70 hover:text-sky-900", badgeClass: "bg-sky-50 text-sky-800", cardClass: "border-sky-100 bg-sky-50/75 text-sky-950" },
    { value: "筋トレ", label: "筋トレ", shortLabel: "筋トレ", accent: "bg-rose-400", activeClass: "bg-white text-rose-950 shadow-sm ring-1 ring-rose-100", inactiveClass: "text-rose-700 hover:bg-white/70 hover:text-rose-900", badgeClass: "bg-rose-50 text-rose-800", cardClass: "border-rose-100 bg-rose-50/75 text-rose-950" },
];
const exerciseStartedOnLabel = "2026/07/21";

const formatLocalDate = (date) => {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, "0");
    const day = String(date.getDate()).padStart(2, "0");

    return `${year}-${month}-${day}`;
};

const formatDateParts = (year, month, day) => {
    return `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
};

const parseDateParts = (date) => {
    const [year, month, day] = String(date || today).split("-").map(Number);

    return { year, month, day };
};

const today = formatLocalDate(new Date());
const selectedCalendarMonth = ref(props.monthlySummaries[0]?.month || today.slice(0, 7));
const selectedCalendarDay = ref(today);
const studyLogForm = useForm({
    studied_on: today,
    category: "英語",
    subcategory: "DS検定",
    set_count: 1,
});
const deleteStudyLogForm = useForm({});
const exerciseLogForm = useForm({
    exercised_on: today,
    activity: "ウォーキング",
    memo: "",
});
const deleteExerciseLogForm = useForm({});
const pendingDeleteLog = ref(null);
const pendingDeleteDateLabel = ref("");
const datePickerOpen = ref(false);
const recordCalendarMonth = ref(today.slice(0, 7));
const exerciseDatePickerOpen = ref(false);
const exerciseRecordCalendarMonth = ref(today.slice(0, 7));
const selectedExerciseMonth = ref(props.exerciseMonthlySummaries[0]?.month || today.slice(0, 7));
const selectedExerciseDay = ref(today);

const formatDateLabel = (date) => {
    return String(date || today).replaceAll("-", "/");
};

const formatYen = (amount) => {
    return new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "JPY",
        maximumFractionDigits: 0,
    }).format(amount || 0);
};

const repaymentItems = repaymentPlan.items;
const repaymentRegisteredTotal = computed(() => repaymentItems.reduce((total, item) => total + item.amount, 0));
const repaymentRemaining = computed(() => Math.max(repaymentPlan.totalAmount - repaymentRegisteredTotal.value, 0));
const repaymentProgressRate = computed(() => {
    if (!repaymentPlan.totalAmount) {
        return 0;
    }

    return Math.min(100, Math.round((repaymentRegisteredTotal.value / repaymentPlan.totalAmount) * 100));
});

const addDays = (date, amount) => {
    const { year, month, day } = parseDateParts(date);
    const nextDate = new Date(Date.UTC(year, month - 1, day + amount));

    return formatDateParts(nextDate.getUTCFullYear(), nextDate.getUTCMonth() + 1, nextDate.getUTCDate());
};

const moveMonth = (monthValue, amount) => {
    const [year, month] = monthValue.split("-").map(Number);
    const nextDate = new Date(Date.UTC(year, month - 1 + amount, 1));

    return formatDateParts(nextDate.getUTCFullYear(), nextDate.getUTCMonth() + 1, 1).slice(0, 7);
};

const fillCalendarTrailingCells = (cells, keyPrefix) => {
    const remaining = cells.length % 7;

    if (remaining === 0) {
        return cells;
    }

    for (let i = remaining; i < 7; i += 1) {
        cells.push({ key: `${keyPrefix}-trailing-${i}`, empty: true });
    }

    return cells;
};

const setStudyDate = (date) => {
    studyLogForm.studied_on = date || today;
    recordCalendarMonth.value = studyLogForm.studied_on.slice(0, 7);
    datePickerOpen.value = false;
};

const openDatePicker = () => {
    recordCalendarMonth.value = String(studyLogForm.studied_on || today).slice(0, 7);
    datePickerOpen.value = !datePickerOpen.value;
};

const adjustStudyDate = (amount) => {
    setStudyDate(addDays(studyLogForm.studied_on, amount));
};

const moveRecordCalendarMonth = (amount) => {
    recordCalendarMonth.value = moveMonth(recordCalendarMonth.value, amount);
};

const setExerciseDate = (date) => {
    exerciseLogForm.exercised_on = date || today;
    selectedExerciseDay.value = exerciseLogForm.exercised_on;
    selectedExerciseMonth.value = exerciseLogForm.exercised_on.slice(0, 7);
    exerciseRecordCalendarMonth.value = exerciseLogForm.exercised_on.slice(0, 7);
    exerciseDatePickerOpen.value = false;
};

const openExerciseDatePicker = () => {
    exerciseRecordCalendarMonth.value = String(exerciseLogForm.exercised_on || today).slice(0, 7);
    exerciseDatePickerOpen.value = !exerciseDatePickerOpen.value;
};

const adjustExerciseDate = (amount) => {
    setExerciseDate(addDays(exerciseLogForm.exercised_on, amount));
};

const moveExerciseRecordCalendarMonth = (amount) => {
    exerciseRecordCalendarMonth.value = moveMonth(exerciseRecordCalendarMonth.value, amount);
};

const studyDateLabel = computed(() => {
    return formatDateLabel(studyLogForm.studied_on || today);
});

const setStudySetCount = (count) => {
    studyLogForm.set_count = Math.min(96, Math.max(1, Number(count) || 1));
};

const adjustStudySetCount = (amount) => {
    setStudySetCount(studyLogForm.set_count + amount);
};

const dailySummaryByDay = computed(() => {
    return Object.fromEntries(props.dailySummaries.map((summary) => [summary.day, summary]));
});

const exerciseSummaryByDay = computed(() => {
    return Object.fromEntries(
        Object.entries(props.exerciseLogsByDay).map(([day, logs]) => [day, logs.filter((log) => log.completed)]),
    );
});

const exerciseActivityByValue = computed(() => {
    return Object.fromEntries(exerciseActivities.map((activity) => [activity.value, activity]));
});

const selectedDayLogs = computed(() => {
    return props.studyLogsByDay[selectedCalendarDay.value] || [];
});

const currentStudyCategory = computed(() => {
    return activeTab.value === "learning" ? "学び" : "英語";
});

const currentStudyTheme = computed(() => {
    if (currentStudyCategory.value === "学び") {
        return {
            label: "学び",
            totalLabel: "学び 累計",
            duration: props.stats.learning_duration,
            colorClass: "border-sky-100 bg-sky-50/80 text-sky-950",
            labelClass: "text-sky-700",
            cellClass: "bg-sky-50 text-sky-900",
        };
    }

    return {
        label: "英語",
        totalLabel: "英語 累計",
        duration: props.stats.english_duration,
        colorClass: "border-orange-100 bg-orange-50/70 text-orange-950",
        labelClass: "text-orange-700",
        cellClass: "bg-orange-50 text-orange-900",
    };
});

const selectedCurrentStudyDayLogs = computed(() => {
    return selectedDayLogs.value.filter((log) => log.category === currentStudyCategory.value);
});

const selectedExerciseDayLogs = computed(() => {
    return props.exerciseLogsByDay[selectedExerciseDay.value] || [];
});

const selectedStudyDateLogs = computed(() => {
    return props.studyLogsByDay[studyLogForm.studied_on || today] || [];
});

const selectedStudyDateSummary = computed(() => {
    return selectedStudyDateLogs.value.reduce(
        (summary, log) => {
            if (log.category === "英語") {
                summary.english += Number(log.set_count) || 0;
            }

            if (log.category === "学び") {
                summary.learning += Number(log.set_count) || 0;

                if (log.subcategory === "DS検定") {
                    summary.ds += Number(log.set_count) || 0;
                }

                if (log.subcategory === "E資格") {
                    summary.e += Number(log.set_count) || 0;
                }
            }

            return summary;
        },
        { english: 0, learning: 0, ds: 0, e: 0 },
    );
});

const selectedCurrentStudyDateSetCount = computed(() => {
    return currentStudyCategory.value === "学び"
        ? selectedStudyDateSummary.value.learning
        : selectedStudyDateSummary.value.english;
});

const selectedStudyCategorySetCount = computed(() => {
    return selectedStudyDateLogs.value
        .filter((log) => log.category === studyLogForm.category)
        .filter((log) => studyLogForm.category !== "学び" || log.subcategory === studyLogForm.subcategory)
        .reduce((total, log) => total + (Number(log.set_count) || 0), 0);
});

const selectedDayLabel = computed(() => {
    return selectedCalendarDay.value.replaceAll("-", "/");
});

const pendingDeleteMessage = computed(() => {
    if (!pendingDeleteLog.value) {
        return "";
    }

    const categoryLabel = pendingDeleteLog.value.subcategory
        ? `${pendingDeleteLog.value.category} ${pendingDeleteLog.value.subcategory}`
        : pendingDeleteLog.value.category;

    return `${pendingDeleteDateLabel.value || selectedDayLabel.value}の${categoryLabel} ${pendingDeleteLog.value.set_count}セット`;
});

const calendarMonthOptions = computed(() => {
    return props.monthlySummaries.map((summary) => ({
        value: summary.month,
        label: summary.month_label,
    }));
});

const exerciseMonthOptions = computed(() => {
    const months = props.exerciseMonthlySummaries.map((summary) => ({
        value: summary.month,
        label: summary.month_label,
    }));

    if (!months.some((month) => month.value === today.slice(0, 7))) {
        months.unshift({
            value: today.slice(0, 7),
            label: today.slice(0, 7).replace("-", "/"),
        });
    }

    return months;
});

const selectedCalendarMonthIndex = computed(() => {
    return calendarMonthOptions.value.findIndex((month) => month.value === selectedCalendarMonth.value);
});

const selectedExerciseMonthIndex = computed(() => {
    return exerciseMonthOptions.value.findIndex((month) => month.value === selectedExerciseMonth.value);
});

const setCalendarMonth = (month) => {
    selectedCalendarMonth.value = month;

    const firstDayInMonth = props.dailySummaries.find((summary) => summary.day.startsWith(month));
    selectedCalendarDay.value = firstDayInMonth?.day || `${month}-01`;
    studyLogForm.studied_on = selectedCalendarDay.value;
};

const moveCalendarMonth = (amount) => {
    const nextIndex = selectedCalendarMonthIndex.value + amount;

    if (nextIndex < 0 || nextIndex >= calendarMonthOptions.value.length) {
        return;
    }

    setCalendarMonth(calendarMonthOptions.value[nextIndex].value);
};

const setExerciseMonth = (month) => {
    selectedExerciseMonth.value = month;

    const firstDayInMonth = Object.keys(props.exerciseLogsByDay)
        .sort()
        .find((day) => day.startsWith(month));
    selectedExerciseDay.value = firstDayInMonth || `${month}-01`;
    exerciseLogForm.exercised_on = selectedExerciseDay.value;
};

const moveExerciseMonth = (amount) => {
    const nextIndex = selectedExerciseMonthIndex.value + amount;

    if (nextIndex < 0 || nextIndex >= exerciseMonthOptions.value.length) {
        return;
    }

    setExerciseMonth(exerciseMonthOptions.value[nextIndex].value);
};

const calendarCells = computed(() => {
    const [year, month] = selectedCalendarMonth.value.split("-").map(Number);
    const firstDate = new Date(Date.UTC(year, month - 1, 1));
    const lastDate = new Date(Date.UTC(year, month, 0));
    const cells = [];

    for (let i = 0; i < firstDate.getUTCDay(); i += 1) {
        cells.push({ key: `empty-${i}`, empty: true });
    }

    for (let day = 1; day <= lastDate.getUTCDate(); day += 1) {
        const date = formatDateParts(year, month, day);
        cells.push({
            key: date,
            date,
            day,
            summary: dailySummaryByDay.value[date],
        });
    }

    return fillCalendarTrailingCells(cells, "calendar");
});

const exerciseCalendarCells = computed(() => {
    const [year, month] = selectedExerciseMonth.value.split("-").map(Number);
    const firstDate = new Date(Date.UTC(year, month - 1, 1));
    const lastDate = new Date(Date.UTC(year, month, 0));
    const cells = [];

    for (let i = 0; i < firstDate.getUTCDay(); i += 1) {
        cells.push({ key: `exercise-empty-${i}`, empty: true });
    }

    for (let day = 1; day <= lastDate.getUTCDate(); day += 1) {
        const date = formatDateParts(year, month, day);
        cells.push({
            key: `exercise-${date}`,
            date,
            day,
            logs: exerciseSummaryByDay.value[date] || [],
        });
    }

    return fillCalendarTrailingCells(cells, "exercise-calendar");
});

const recordCalendarCells = computed(() => {
    const [year, month] = recordCalendarMonth.value.split("-").map(Number);
    const firstDate = new Date(Date.UTC(year, month - 1, 1));
    const lastDate = new Date(Date.UTC(year, month, 0));
    const cells = [];

    for (let i = 0; i < firstDate.getUTCDay(); i += 1) {
        cells.push({ key: `record-empty-${i}`, empty: true });
    }

    for (let day = 1; day <= lastDate.getUTCDate(); day += 1) {
        const date = formatDateParts(year, month, day);
        cells.push({
            key: `record-${date}`,
            date,
            day,
        });
    }

    return fillCalendarTrailingCells(cells, "record-calendar");
});

const exerciseRecordCalendarCells = computed(() => {
    const [year, month] = exerciseRecordCalendarMonth.value.split("-").map(Number);
    const firstDate = new Date(Date.UTC(year, month - 1, 1));
    const lastDate = new Date(Date.UTC(year, month, 0));
    const cells = [];

    for (let i = 0; i < firstDate.getUTCDay(); i += 1) {
        cells.push({ key: `exercise-record-empty-${i}`, empty: true });
    }

    for (let day = 1; day <= lastDate.getUTCDate(); day += 1) {
        const date = formatDateParts(year, month, day);
        cells.push({
            key: `exercise-record-${date}`,
            date,
            day,
        });
    }

    return fillCalendarTrailingCells(cells, "exercise-record-calendar");
});

const submitStudyLog = () => {
    studyLogForm.post(route("admin.personal.studyLogs.store"), {
        preserveScroll: true,
        onSuccess: () => {
            studyLogForm.defaults({
                studied_on: studyLogForm.studied_on,
                category: studyLogForm.category,
                subcategory: studyLogForm.subcategory,
                set_count: studyLogForm.set_count,
            });
        },
    });
};

const submitExerciseLog = () => {
    exerciseLogForm.post(route("admin.personal.exerciseLogs.store"), {
        preserveScroll: true,
        onSuccess: () => {
            selectedExerciseDay.value = exerciseLogForm.exercised_on;
            selectedExerciseMonth.value = exerciseLogForm.exercised_on.slice(0, 7);
            exerciseLogForm.defaults({
                exercised_on: exerciseLogForm.exercised_on,
                activity: exerciseLogForm.activity,
                memo: "",
            });
            exerciseLogForm.memo = "";
        },
    });
};

watch(
    [() => studyLogForm.studied_on, () => studyLogForm.category, () => studyLogForm.subcategory, () => activeTab.value],
    () => {
        studyLogForm.category = currentStudyCategory.value;

        if (studyLogForm.category === "学び" && !studyLogForm.subcategory) {
            studyLogForm.subcategory = "DS検定";
        }

        setStudySetCount(selectedStudyCategorySetCount.value || 1);
    },
    { immediate: true },
);

const selectCalendarDay = (date) => {
    selectedCalendarDay.value = date;
    studyLogForm.studied_on = date;
};

const selectExerciseDay = (date) => {
    selectedExerciseDay.value = date;
    exerciseLogForm.exercised_on = date;
};

const deleteExerciseLog = (log) => {
    deleteExerciseLogForm.delete(route("admin.personal.exerciseLogs.delete", log.id), {
        preserveScroll: true,
    });
};

const openDeleteStudyLogModal = (log, dateLabel = selectedDayLabel.value) => {
    pendingDeleteLog.value = log;
    pendingDeleteDateLabel.value = dateLabel;
};

const closeDeleteStudyLogModal = () => {
    if (deleteStudyLogForm.processing) {
        return;
    }

    pendingDeleteLog.value = null;
    pendingDeleteDateLabel.value = "";
};

const deleteStudyLog = () => {
    if (!pendingDeleteLog.value) {
        return;
    }

    deleteStudyLogForm.delete(route("admin.personal.studyLogs.delete", pendingDeleteLog.value.id), {
        preserveScroll: true,
        onSuccess: () => {
            pendingDeleteLog.value = null;
            pendingDeleteDateLabel.value = "";
        },
    });
};
</script>

<template>
    <AdminLayout title="個人管理">
        <div class="mx-auto max-w-7xl px-3 py-6 sm:px-5 sm:py-8">
            <div class="mb-6 flex items-end justify-between gap-3">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">Personal Admin</p>
                    <h1 class="mt-1 text-2xl font-bold text-gray-900">個人管理</h1>
                </div>
                <Link :href="route('admin.index')" class="inline-flex shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-semibold text-gray-600 transition hover:bg-gray-50 sm:px-4 sm:text-sm"> 管理画面に戻る </Link>
            </div>

            <div class="mb-6 flex flex-wrap gap-2 border-b border-gray-200">
                <button
                    v-for="tab in tabs"
                    :key="tab.key"
                    type="button"
                    class="-mb-px rounded-t-lg border px-4 py-2 text-sm font-semibold transition"
                    :class="activeTab === tab.key ? 'border-gray-200 border-b-white bg-white text-gray-900' : 'border-transparent text-gray-500 hover:bg-white hover:text-gray-700'"
                    @click="activeTab = tab.key"
                >
                    {{ tab.label }}
                </button>
            </div>

            <div v-if="activeTab === 'english' || activeTab === 'learning'">
                <div class="mb-4 grid grid-cols-2 overflow-hidden rounded-lg border border-gray-200 bg-white text-xs font-semibold shadow-sm sm:flex sm:w-fit">
                    <button
                        v-for="tab in studyTabs"
                        :key="tab.key"
                        type="button"
                        class="border-r border-gray-200 px-2 py-2 transition last:border-r-0 sm:px-5"
                        :class="activeStudyTab === tab.key
                            ? 'bg-gray-900 text-white'
                            : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700'"
                        @click="activeStudyTab = tab.key"
                    >
                        {{ tab.label }}
                    </button>
                </div>

                <section v-if="activeStudyTab === 'record'" class="mb-5 rounded-xl border border-gray-100 bg-white p-3 shadow-sm sm:p-4">
                    <div class="rounded-xl border p-3" :class="currentStudyTheme.colorClass">
                        <div class="flex flex-wrap items-baseline justify-between gap-2">
                            <p class="text-[11px] font-bold" :class="currentStudyTheme.labelClass">{{ currentStudyTheme.totalLabel }}</p>
                            <p class="text-xl font-bold">{{ currentStudyTheme.duration }}</p>
                        </div>
                        <div v-if="currentStudyCategory === '学び'" class="mt-2 flex flex-wrap gap-1.5">
                            <span
                                v-for="breakdown in stats.learning_breakdown"
                                :key="breakdown.label"
                                class="inline-flex items-center gap-1 rounded-full bg-white/75 px-2 py-1 text-[11px] font-bold text-sky-800 ring-1 ring-sky-100"
                            >
                                <span>{{ breakdown.label }}</span>
                                <span class="text-sky-950">{{ breakdown.duration }}</span>
                            </span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h2 class="text-sm font-bold text-gray-900">月別{{ currentStudyTheme.label }}時間</h2>
                        <div class="mt-2 overflow-auto rounded-lg border border-gray-100">
                            <table class="w-full table-fixed divide-y divide-gray-100 text-[10px] sm:text-sm">
                                <colgroup>
                                    <col class="w-[34%] sm:w-auto" />
                                    <col class="w-[66%] sm:w-auto" />
                                </colgroup>
                                <thead class="bg-gray-50 text-left text-xs font-semibold text-gray-500">
                                    <tr>
                                        <th class="whitespace-nowrap px-1.5 py-2 sm:px-4 sm:py-3">月</th>
                                        <th class="whitespace-nowrap px-1 py-2 text-right sm:px-4 sm:py-3" :class="currentStudyTheme.labelClass">{{ currentStudyTheme.label }}</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 bg-white">
                                    <tr v-for="summary in monthlySummaries" :key="summary.month">
                                        <td class="whitespace-nowrap px-1.5 py-2 font-semibold text-gray-900 sm:px-4 sm:py-3">{{ summary.month_label }}</td>
                                        <td class="whitespace-nowrap px-1 py-2 text-right font-semibold sm:px-4 sm:py-3" :class="currentStudyTheme.labelClass">
                                            {{ currentStudyCategory === '学び' ? summary.learning_duration : summary.english_duration }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section v-if="activeStudyTab === 'daily'" class="mb-6 rounded-xl border border-gray-100 bg-white p-3 shadow-sm sm:p-5">
                    <div class="sm:flex sm:justify-end">
                        <div class="grid grid-cols-[2.75rem_1fr_2.75rem] overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm sm:w-[22rem]">
                            <button
                                type="button"
                                class="border-r border-gray-200 bg-gray-50 px-2 py-2 text-sm font-bold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300"
                                :disabled="selectedCalendarMonthIndex >= calendarMonthOptions.length - 1"
                                @click="moveCalendarMonth(1)"
                            >
                                前
                            </button>
                            <select
                                :value="selectedCalendarMonth"
                                class="border-0 py-2 text-center text-sm font-bold text-gray-900 shadow-none focus:border-0 focus:ring-0"
                                @change="setCalendarMonth($event.target.value)"
                            >
                                <option v-for="month in calendarMonthOptions" :key="month.value" :value="month.value">
                                    {{ month.label }}
                                </option>
                            </select>
                            <button
                                type="button"
                                class="border-l border-gray-200 bg-gray-50 px-2 py-2 text-sm font-bold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300"
                                :disabled="selectedCalendarMonthIndex <= 0"
                                @click="moveCalendarMonth(-1)"
                            >
                                次
                            </button>
                        </div>
                    </div>

                    <div class="mt-3 overflow-hidden rounded-lg border border-gray-100">
                        <div class="grid grid-cols-7 bg-gray-50 text-center text-[10px] font-semibold text-gray-500 sm:text-xs">
                            <div v-for="dayName in ['日', '月', '火', '水', '木', '金', '土']" :key="dayName" class="py-2">
                                {{ dayName }}
                            </div>
                        </div>
                        <div class="grid grid-cols-7 divide-x divide-y divide-gray-100 bg-white text-[10px] sm:text-xs">
                            <div
                                v-for="cell in calendarCells"
                                :key="cell.key"
                                class="h-[3.75rem] p-0.5 sm:h-[4.5rem] sm:p-1.5"
                                :class="[
                                    cell.empty ? 'bg-gray-50/60' : 'bg-white',
                                    selectedCalendarDay === cell.date ? 'bg-gray-100 shadow-[inset_0_0_0_1px_rgba(107,114,128,0.28)]' : '',
                                ]"
                            >
                                <button
                                    v-if="!cell.empty"
                                    type="button"
                                    class="flex h-full w-full flex-col items-start justify-start overflow-hidden rounded text-left transition hover:bg-gray-50"
                                    @click="selectCalendarDay(cell.date)"
                                >
                                    <div class="w-full text-xs font-bold text-gray-800 sm:text-sm">{{ cell.day }}</div>
                                    <div v-if="cell.summary" class="mt-0.5 w-full space-y-0.5">
                                        <div v-if="currentStudyCategory === '英語' && cell.summary.english_sets > 0" class="whitespace-nowrap rounded bg-orange-50 px-1 py-0 text-left text-[9px] font-semibold leading-4 text-orange-900 sm:text-xs">
                                            英語 {{ cell.summary.english_sets }}
                                        </div>
                                        <div v-if="currentStudyCategory === '学び' && cell.summary.learning_sets > 0" class="whitespace-nowrap rounded bg-sky-50 px-1 py-0 text-left text-[9px] font-semibold leading-4 text-sky-900 sm:text-xs">
                                            学び {{ cell.summary.learning_sets }}
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 rounded-lg border border-gray-100 bg-gray-50 p-3">
                        <div class="flex items-center justify-between gap-3">
                            <h3 class="text-sm font-bold text-gray-900">{{ selectedDayLabel }}</h3>
                            <p class="text-xs font-semibold text-gray-500">{{ selectedCurrentStudyDayLogs.length }}件</p>
                        </div>

                        <form class="mt-3 rounded-lg border border-gray-100 bg-white p-3" @submit.prevent="submitStudyLog">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <p class="text-xs font-bold text-gray-500">この日に{{ currentStudyTheme.label }}を記録</p>
                                <p class="text-xs font-semibold text-gray-400">{{ selectedDayLabel }}</p>
                            </div>

                            <div class="mt-2 grid gap-2 md:grid-cols-[1fr_1fr_auto] md:items-end">
                                <div v-if="currentStudyCategory === '学び'" class="block">
                                    <span class="text-[11px] font-bold text-gray-500">分類</span>
                                    <div class="mt-1 grid grid-cols-2 gap-1 rounded-lg border border-sky-100 bg-sky-50/80 p-1 shadow-sm">
                                        <button
                                            v-for="subcategory in learningSubcategories"
                                            :key="subcategory.value"
                                            type="button"
                                            class="rounded-md px-3 py-2 text-sm font-bold transition"
                                            :class="studyLogForm.subcategory === subcategory.value
                                                ? 'bg-white text-sky-950 shadow-sm ring-1 ring-sky-100'
                                                : 'text-sky-700 hover:bg-white/70'"
                                            @click="studyLogForm.subcategory = subcategory.value"
                                        >
                                            {{ subcategory.label }}
                                        </button>
                                    </div>
                                    <span v-if="studyLogForm.errors.subcategory" class="mt-1 block text-xs text-rose-600">
                                        {{ studyLogForm.errors.subcategory }}
                                    </span>
                                </div>

                                <div class="block">
                                    <span class="text-[11px] font-bold text-gray-500">セット数</span>
                                    <div class="mt-1 flex overflow-hidden rounded-lg border border-gray-200 shadow-sm">
                                        <button type="button" class="w-9 border-r border-gray-200 bg-gray-50 text-base font-semibold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300" :disabled="studyLogForm.set_count <= 1" @click="adjustStudySetCount(-1)">
                                            -
                                        </button>
                                        <input v-model.number="studyLogForm.set_count" type="number" min="1" max="96" step="1" class="w-full border-0 py-1.5 text-center text-sm font-semibold shadow-none focus:border-0 focus:ring-0" @blur="setStudySetCount(studyLogForm.set_count)" />
                                        <button type="button" class="w-9 border-l border-gray-200 bg-gray-50 text-base font-semibold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300" :disabled="studyLogForm.set_count >= 96" @click="adjustStudySetCount(1)">
                                            +
                                        </button>
                                    </div>
                                    <div class="mt-1.5 grid grid-cols-5 gap-1.5">
                                        <button
                                            v-for="count in [2, 4, 6, 8, 10]"
                                            :key="count"
                                            type="button"
                                            class="rounded-md border px-2 py-1.5 text-xs font-semibold transition"
                                            :class="studyLogForm.set_count === count ? 'border-gray-900 bg-gray-900 text-white' : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                                            @click="setStudySetCount(count)"
                                        >
                                            {{ count }}
                                        </button>
                                    </div>
                                    <span v-if="studyLogForm.errors.set_count" class="mt-1 block text-xs text-rose-600">
                                        {{ studyLogForm.errors.set_count }}
                                    </span>
                                    <span v-if="studyLogForm.errors.studied_on" class="mt-1 block text-xs text-rose-600">
                                        {{ studyLogForm.errors.studied_on }}
                                    </span>
                                </div>

                                <div class="flex items-end">
                                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-lg bg-gray-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-gray-700 disabled:cursor-not-allowed disabled:opacity-60 md:w-auto" :disabled="studyLogForm.processing">
                                        {{ studyLogForm.processing ? "保存中" : "保存" }}
                                    </button>
                                </div>
                            </div>

                            <div class="mt-3 flex items-center justify-between rounded-lg border px-3 py-2" :class="currentStudyTheme.colorClass">
                                <p class="text-[11px] font-bold" :class="currentStudyTheme.labelClass">{{ currentStudyTheme.label }}</p>
                                <p class="text-sm font-bold">{{ selectedCurrentStudyDateSetCount }}セット</p>
                            </div>
                        </form>

                        <div v-if="selectedCurrentStudyDayLogs.length > 0" class="mt-3 space-y-2">
                            <div
                                v-for="log in selectedCurrentStudyDayLogs"
                                :key="log.id"
                                class="flex items-center justify-between gap-3 rounded-lg border border-gray-100 bg-white px-3 py-2"
                            >
                                <div>
                                    <p
                                        class="text-sm font-bold"
                                        :class="log.category === '英語' ? 'text-orange-900' : 'text-sky-900'"
                                    >
                                        {{ log.category }}<span v-if="log.subcategory"> {{ log.subcategory }}</span> {{ log.set_count }}セット
                                    </p>
                                    <p class="mt-0.5 text-xs text-gray-500">{{ log.duration }}</p>
                                </div>
                                <button
                                    type="button"
                                    class="rounded-md border border-rose-200 bg-white px-3 py-1.5 text-xs font-bold text-rose-600 transition hover:bg-rose-50 disabled:cursor-not-allowed disabled:opacity-60"
                                    :disabled="deleteStudyLogForm.processing"
                                    @click="openDeleteStudyLogModal(log)"
                                >
                                    削除
                                </button>
                            </div>
                        </div>
                        <p v-else class="mt-3 text-sm text-gray-500">この日の記録はありません。</p>
                    </div>
                </section>

            </div>

            <div v-if="activeTab === 'exercise'">
                <div class="mb-4 grid grid-cols-2 overflow-hidden rounded-lg border border-gray-200 bg-white text-xs font-semibold shadow-sm sm:flex sm:w-fit">
                    <button
                        v-for="tab in exerciseTabs"
                        :key="tab.key"
                        type="button"
                        class="border-r border-gray-200 px-2 py-2 transition last:border-r-0 sm:px-5"
                        :class="activeExerciseTab === tab.key
                            ? 'bg-gray-900 text-white'
                            : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700'"
                        @click="activeExerciseTab = tab.key"
                    >
                        {{ tab.label }}
                    </button>
                </div>

                <section v-if="activeExerciseTab === 'summary'" class="mb-5 rounded-xl border border-gray-100 bg-white p-3 shadow-sm sm:p-4">
                    <div class="mb-3 flex items-center justify-between rounded-lg border border-gray-100 bg-gray-50 px-3 py-2 text-gray-900">
                        <p class="text-[11px] font-bold text-gray-500">開始日</p>
                        <p class="text-sm font-bold">{{ exerciseStartedOnLabel }}</p>
                    </div>
                    <div class="mb-3 rounded-xl border border-violet-100 bg-violet-50/80 px-3 py-3">
                        <div class="flex items-end justify-between gap-3">
                            <div>
                                <p class="text-[11px] font-bold text-violet-700">連続記録</p>
                                <p class="mt-1 text-2xl font-black text-violet-950">{{ exerciseStats.streak_count }}日</p>
                            </div>
                            <p v-if="exerciseStats.streak_until" class="pb-1 text-[11px] font-semibold text-violet-500">
                                {{ String(exerciseStats.streak_until).replaceAll("-", "/") }} まで
                            </p>
                        </div>
                    </div>
                    <div class="grid gap-2 sm:grid-cols-3">
                        <div class="flex items-center justify-between rounded-lg border px-3 py-2" :class="exerciseActivities[0].cardClass">
                            <p class="text-[11px] font-bold">ウォーキング</p>
                            <p class="text-sm font-bold">{{ exerciseStats.walking_count }}日</p>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border px-3 py-2" :class="exerciseActivities[1].cardClass">
                            <p class="text-[11px] font-bold">ランニング</p>
                            <p class="text-sm font-bold">{{ exerciseStats.running_count }}日</p>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border px-3 py-2" :class="exerciseActivities[2].cardClass">
                            <p class="text-[11px] font-bold">筋トレ</p>
                            <p class="text-sm font-bold">{{ exerciseStats.strength_training_count }}日</p>
                        </div>
                    </div>
                </section>

                <section v-if="activeExerciseTab === 'daily'" class="mb-6 rounded-xl border border-gray-100 bg-white p-3 shadow-sm sm:p-5">
                    <div class="sm:flex sm:justify-end">
                        <div class="grid grid-cols-[2.75rem_1fr_2.75rem] overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm sm:w-[22rem]">
                            <button
                                type="button"
                                class="border-r border-gray-200 bg-gray-50 px-2 py-2 text-sm font-bold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300"
                                :disabled="selectedExerciseMonthIndex >= exerciseMonthOptions.length - 1"
                                @click="moveExerciseMonth(1)"
                            >
                                前
                            </button>
                            <select
                                :value="selectedExerciseMonth"
                                class="border-0 py-2 text-center text-sm font-bold text-gray-900 shadow-none focus:border-0 focus:ring-0"
                                @change="setExerciseMonth($event.target.value)"
                            >
                                <option v-for="month in exerciseMonthOptions" :key="month.value" :value="month.value">
                                    {{ month.label }}
                                </option>
                            </select>
                            <button
                                type="button"
                                class="border-l border-gray-200 bg-gray-50 px-2 py-2 text-sm font-bold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300"
                                :disabled="selectedExerciseMonthIndex <= 0"
                                @click="moveExerciseMonth(-1)"
                            >
                                次
                            </button>
                        </div>
                    </div>

                    <div class="mt-3 overflow-hidden rounded-lg border border-gray-100">
                        <div class="grid grid-cols-7 bg-gray-50 text-center text-[10px] font-semibold text-gray-500 sm:text-xs">
                            <div v-for="dayName in ['日', '月', '火', '水', '木', '金', '土']" :key="`exercise-${dayName}`" class="py-2">
                                {{ dayName }}
                            </div>
                        </div>
                        <div class="grid grid-cols-7 divide-x divide-y divide-gray-100 bg-white text-[10px] sm:text-xs">
                            <div
                                v-for="cell in exerciseCalendarCells"
                                :key="cell.key"
                                class="h-[3.75rem] p-0.5 sm:h-[4.5rem] sm:p-1.5"
                                :class="[
                                    cell.empty ? 'bg-gray-50/60' : 'bg-white',
                                    selectedExerciseDay === cell.date ? 'bg-gray-100 shadow-[inset_0_0_0_1px_rgba(107,114,128,0.28)]' : '',
                                ]"
                            >
                                <button
                                    v-if="!cell.empty"
                                    type="button"
                                    class="flex h-full w-full flex-col items-start justify-start overflow-hidden rounded text-left transition hover:bg-gray-50"
                                    @click="selectExerciseDay(cell.date)"
                                >
                                    <div class="w-full text-xs font-bold text-gray-800 sm:text-sm">{{ cell.day }}</div>
                                    <div v-if="cell.logs.length > 0" class="mt-0.5 w-full space-y-0.5">
                                        <div
                                            v-for="log in cell.logs"
                                            :key="`exercise-cell-${log.id}`"
                                            class="w-full truncate rounded px-0.5 py-0 text-left text-[7px] font-semibold leading-4 sm:px-1 sm:text-xs"
                                            :class="exerciseActivityByValue[log.activity]?.badgeClass || 'bg-gray-50 text-gray-700'"
                                        >
                                            {{ log.activity }}
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 rounded-lg border border-gray-100 bg-gray-50 p-3">
                        <div class="flex items-center justify-between gap-3">
                            <h3 class="text-sm font-bold text-gray-900">{{ selectedExerciseDay.replaceAll("-", "/") }}</h3>
                            <p class="text-xs font-semibold text-gray-500">{{ selectedExerciseDayLogs.length }}件</p>
                        </div>

                        <form class="mt-3 rounded-lg border border-gray-100 bg-white p-3" @submit.prevent="submitExerciseLog">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <p class="text-xs font-bold text-gray-500">この日に記録</p>
                                <p class="text-xs font-semibold text-gray-400">{{ selectedExerciseDay.replaceAll("-", "/") }}</p>
                            </div>
                            <div class="mt-2 grid grid-cols-3 gap-1 rounded-lg border border-gray-200 bg-gray-50 p-1 shadow-sm">
                                <button
                                    v-for="activity in exerciseActivities"
                                    :key="activity.value"
                                    type="button"
                                    class="flex items-center justify-center gap-1.5 rounded-md px-0.5 py-2 text-[10px] font-bold leading-tight transition focus:outline-none focus:ring-2 focus:ring-gray-300 sm:px-3 sm:text-sm"
                                    :class="exerciseLogForm.activity === activity.value
                                        ? activity.activeClass
                                        : activity.inactiveClass"
                                    @click="exerciseLogForm.activity = activity.value"
                                >
                                    <span class="hidden h-2 w-2 rounded-full min-[390px]:inline-block" :class="activity.accent"></span>
                                    {{ activity.label }}
                                </button>
                            </div>
                            <span v-if="exerciseLogForm.errors.activity" class="mt-1 block text-xs text-rose-600">
                                {{ exerciseLogForm.errors.activity }}
                            </span>
                            <span v-if="exerciseLogForm.errors.exercised_on" class="mt-1 block text-xs text-rose-600">
                                {{ exerciseLogForm.errors.exercised_on }}
                            </span>
                            <button type="submit" class="mt-2 inline-flex w-full items-center justify-center rounded-lg bg-gray-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-gray-700 disabled:cursor-not-allowed disabled:opacity-60 sm:w-auto" :disabled="exerciseLogForm.processing">
                                {{ exerciseLogForm.processing ? "保存中" : "実施で保存" }}
                            </button>
                        </form>

                        <div v-if="selectedExerciseDayLogs.length > 0" class="mt-3 space-y-2">
                            <div
                                v-for="log in selectedExerciseDayLogs"
                                :key="`exercise-log-${log.id}`"
                                class="flex items-center justify-between gap-3 rounded-lg border border-gray-100 bg-white px-3 py-2"
                            >
                                <p class="text-sm font-bold text-gray-900">{{ log.activity }}</p>
                                <button
                                    type="button"
                                    class="rounded-md border border-rose-200 bg-white px-3 py-1.5 text-xs font-bold text-rose-600 transition hover:bg-rose-50 disabled:cursor-not-allowed disabled:opacity-60"
                                    :disabled="deleteExerciseLogForm.processing"
                                    @click="deleteExerciseLog(log)"
                                >
                                    削除
                                </button>
                            </div>
                        </div>
                        <p v-else class="mt-3 text-sm text-gray-500">この日の運動記録はありません。</p>
                    </div>
                </section>
            </div>

            <section v-if="activeTab === 'repayment'" class="space-y-5">
                <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-gray-400">Repayment</p>
                            <h2 class="mt-2 text-2xl font-black text-gray-950">返済管理</h2>
                            <p class="mt-2 text-sm leading-6 text-gray-500">返済日と金額を静的データで管理しています。</p>
                        </div>
                        <div class="inline-flex w-fit items-center rounded-full border border-gray-200 bg-gray-50 px-3 py-1.5 text-xs font-bold text-gray-500">
                            {{ repaymentItems.length }}件返済
                        </div>
                    </div>

                    <div class="mt-5 grid gap-3 sm:grid-cols-3">
                        <div class="rounded-2xl bg-violet-50/80 p-4">
                            <p class="text-xs font-bold text-violet-500">返済済み合計</p>
                            <p class="mt-2 text-2xl font-black text-violet-950">{{ formatYen(repaymentRegisteredTotal) }}</p>
                        </div>
                        <div class="rounded-2xl bg-gray-50 p-4">
                            <p class="text-xs font-bold text-gray-500">返済総額</p>
                            <p class="mt-2 text-2xl font-black text-gray-950">{{ formatYen(repaymentPlan.totalAmount) }}</p>
                        </div>
                        <div class="rounded-2xl bg-amber-50/80 p-4">
                            <p class="text-xs font-bold text-amber-600">差額</p>
                            <p class="mt-2 text-2xl font-black text-amber-950">{{ formatYen(repaymentRemaining) }}</p>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="flex items-center justify-between text-xs font-bold text-gray-500">
                            <span>返済済み / 返済総額</span>
                            <span>{{ repaymentProgressRate }}%</span>
                        </div>
                        <div class="mt-2 h-2 overflow-hidden rounded-full bg-gray-100">
                            <div class="h-full rounded-full bg-gradient-to-r from-violet-500 to-purple-500" :style="{ width: `${repaymentProgressRate}%` }"></div>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm sm:p-6">
                    <div class="flex items-center justify-between gap-3">
                        <div>
                            <h3 class="text-lg font-black text-gray-950">返済データ</h3>
                            <p class="mt-1 text-sm text-gray-500">画像の内容を元に返済履歴を管理しています。</p>
                        </div>
                        <p class="text-sm font-bold text-gray-400">合計 {{ formatYen(repaymentRegisteredTotal) }}</p>
                    </div>

                    <div class="mt-4 overflow-hidden rounded-2xl border border-gray-100">
                        <div
                            v-for="(item, index) in repaymentItems"
                            :key="`${item.date}-${item.amount}`"
                            class="grid grid-cols-[1fr_auto] items-center gap-4 border-b border-gray-100 bg-white px-4 py-3 last:border-b-0"
                            :class="index % 2 === 1 ? 'bg-gray-50/60' : ''"
                        >
                            <div>
                                <p class="text-sm font-black text-gray-900">{{ formatDateLabel(item.date) }}</p>
                                <p class="mt-0.5 text-xs font-semibold text-gray-400">返済日</p>
                            </div>
                            <p class="text-right text-base font-black text-gray-950">{{ formatYen(item.amount) }}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div
            v-if="pendingDeleteLog"
            class="fixed inset-0 z-50 flex items-end justify-center bg-gray-950/35 px-4 py-5 sm:items-center"
            @click.self="closeDeleteStudyLogModal"
        >
            <div class="w-full max-w-sm rounded-2xl border border-gray-100 bg-white p-5 shadow-2xl">
                <div class="flex items-start gap-3">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-rose-50 text-sm font-bold text-rose-600">
                        削
                    </div>
                    <div class="min-w-0">
                        <h2 class="text-base font-bold text-gray-900">学習記録を削除</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            {{ pendingDeleteMessage }}を削除します。この操作は元に戻せません。
                        </p>
                    </div>
                </div>

                <div class="mt-5 grid grid-cols-2 gap-2">
                    <button
                        type="button"
                        class="rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-bold text-gray-700 transition hover:bg-gray-50 disabled:cursor-not-allowed disabled:opacity-60"
                        :disabled="deleteStudyLogForm.processing"
                        @click="closeDeleteStudyLogModal"
                    >
                        キャンセル
                    </button>
                    <button
                        type="button"
                        class="rounded-lg bg-rose-600 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-rose-500 disabled:cursor-not-allowed disabled:opacity-60"
                        :disabled="deleteStudyLogForm.processing"
                        @click="deleteStudyLog"
                    >
                        {{ deleteStudyLogForm.processing ? "削除中" : "削除する" }}
                    </button>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
