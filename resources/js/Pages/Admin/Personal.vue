<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { computed, ref, watch } from "vue";
import AdminLayout from "@/Layouts/AdminLayout.vue";

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
});

const activeTab = ref("study");
const activeStudyTab = ref("record");

const tabs = [
    { key: "study", label: "学習" },
    { key: "repayment", label: "返済" },
];

const studyTabs = [
    { key: "record", label: "記録" },
    { key: "summary", label: "累計" },
    { key: "daily", label: "日別" },
    { key: "monthly", label: "月別" },
];

const studyCategories = [
    { value: "英語", label: "英語", accent: "bg-orange-400" },
    { value: "学び", label: "学び", accent: "bg-sky-400" },
];

const learningSubcategories = [
    { value: "DS検定", label: "DS検定" },
    { value: "E資格", label: "E資格" },
];

const formatLocalDate = (date) => {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, "0");
    const day = String(date.getDate()).padStart(2, "0");

    return `${year}-${month}-${day}`;
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
const pendingDeleteLog = ref(null);
const pendingDeleteDateLabel = ref("");
const datePickerOpen = ref(false);
const recordCalendarMonth = ref(today.slice(0, 7));

const formatDateLabel = (date) => {
    return String(date || today).replaceAll("-", "/");
};

const addDays = (date, amount) => {
    const [year, month, day] = String(date || today).split("-").map(Number);
    const nextDate = new Date(year, month - 1, day);
    nextDate.setDate(nextDate.getDate() + amount);

    return formatLocalDate(nextDate);
};

const moveMonth = (monthValue, amount) => {
    const [year, month] = monthValue.split("-").map(Number);
    const nextDate = new Date(year, month - 1 + amount, 1);

    return `${nextDate.getFullYear()}-${String(nextDate.getMonth() + 1).padStart(2, "0")}`;
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

const selectedDayLogs = computed(() => {
    return props.studyLogsByDay[selectedCalendarDay.value] || [];
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

const selectedCalendarMonthIndex = computed(() => {
    return calendarMonthOptions.value.findIndex((month) => month.value === selectedCalendarMonth.value);
});

const setCalendarMonth = (month) => {
    selectedCalendarMonth.value = month;

    const firstDayInMonth = props.dailySummaries.find((summary) => summary.day.startsWith(month));
    selectedCalendarDay.value = firstDayInMonth?.day || `${month}-01`;
};

const moveCalendarMonth = (amount) => {
    const nextIndex = selectedCalendarMonthIndex.value + amount;

    if (nextIndex < 0 || nextIndex >= calendarMonthOptions.value.length) {
        return;
    }

    setCalendarMonth(calendarMonthOptions.value[nextIndex].value);
};

const calendarCells = computed(() => {
    const [year, month] = selectedCalendarMonth.value.split("-").map(Number);
    const firstDate = new Date(year, month - 1, 1);
    const lastDate = new Date(year, month, 0);
    const cells = [];

    for (let i = 0; i < firstDate.getDay(); i += 1) {
        cells.push({ key: `empty-${i}`, empty: true });
    }

    for (let day = 1; day <= lastDate.getDate(); day += 1) {
        const date = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
        cells.push({
            key: date,
            date,
            day,
            summary: dailySummaryByDay.value[date],
        });
    }

    return cells;
});

const recordCalendarCells = computed(() => {
    const [year, month] = recordCalendarMonth.value.split("-").map(Number);
    const firstDate = new Date(year, month - 1, 1);
    const lastDate = new Date(year, month, 0);
    const cells = [];

    for (let i = 0; i < firstDate.getDay(); i += 1) {
        cells.push({ key: `record-empty-${i}`, empty: true });
    }

    for (let day = 1; day <= lastDate.getDate(); day += 1) {
        const date = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
        cells.push({
            key: `record-${date}`,
            date,
            day,
        });
    }

    return cells;
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

watch(
    [() => studyLogForm.studied_on, () => studyLogForm.category, () => studyLogForm.subcategory],
    () => {
        if (studyLogForm.category === "学び" && !studyLogForm.subcategory) {
            studyLogForm.subcategory = "DS検定";
        }

        setStudySetCount(selectedStudyCategorySetCount.value || 1);
    },
    { immediate: true },
);

const selectCalendarDay = (date) => {
    selectedCalendarDay.value = date;
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

            <div v-if="activeTab === 'study'">
                <div class="mb-4 grid grid-cols-4 overflow-hidden rounded-lg border border-gray-200 bg-white text-xs font-semibold shadow-sm sm:flex sm:w-fit">
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
                    <div class="mb-3">
                        <h2 class="text-base font-bold text-gray-900">学習記録を編集</h2>
                    </div>
                    <form class="grid gap-3 md:grid-cols-[1fr_1fr_1fr_auto]" @submit.prevent="submitStudyLog">
                        <label class="block">
                            <span class="text-xs font-semibold text-gray-500">日付</span>
                            <div class="mt-1">
                                <div class="grid grid-cols-[2.75rem_1fr_2.75rem] overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                                    <button
                                        type="button"
                                        class="border-r border-gray-200 bg-gray-50 text-lg font-bold text-gray-500 transition hover:bg-gray-100"
                                        @click="adjustStudyDate(-1)"
                                    >
                                        -
                                    </button>
                                    <button
                                        type="button"
                                        class="px-3 py-2.5 text-center text-sm font-bold text-gray-900 transition hover:bg-gray-50"
                                        @click="openDatePicker"
                                    >
                                        {{ studyDateLabel }}
                                    </button>
                                    <button
                                        type="button"
                                        class="border-l border-gray-200 bg-gray-50 text-lg font-bold text-gray-500 transition hover:bg-gray-100"
                                        @click="adjustStudyDate(1)"
                                    >
                                        +
                                    </button>
                                </div>

                                <div
                                    v-if="datePickerOpen"
                                    class="mt-2 rounded-2xl border border-gray-100 bg-white p-3 shadow-lg"
                                >
                                    <div class="flex items-center justify-between gap-2">
                                        <button
                                            type="button"
                                            class="h-9 w-9 rounded-lg border border-gray-200 bg-white text-sm font-bold text-gray-600 transition hover:bg-gray-50"
                                            @click="moveRecordCalendarMonth(-1)"
                                        >
                                            -
                                        </button>
                                        <p class="text-sm font-bold text-gray-900">{{ recordCalendarMonth.replace("-", "/") }}</p>
                                        <button
                                            type="button"
                                            class="h-9 w-9 rounded-lg border border-gray-200 bg-white text-sm font-bold text-gray-600 transition hover:bg-gray-50"
                                            @click="moveRecordCalendarMonth(1)"
                                        >
                                            +
                                        </button>
                                    </div>

                                    <div class="mt-3 grid grid-cols-7 text-center text-[10px] font-bold text-gray-400">
                                        <div v-for="dayName in ['日', '月', '火', '水', '木', '金', '土']" :key="`record-${dayName}`" class="py-1">
                                            {{ dayName }}
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-7 gap-1 text-center text-xs">
                                        <div v-for="cell in recordCalendarCells" :key="cell.key">
                                            <button
                                                v-if="!cell.empty"
                                                type="button"
                                                class="h-8 w-full rounded-lg font-bold transition"
                                                :class="[
                                                    studyLogForm.studied_on === cell.date
                                                        ? 'bg-gray-900 text-white shadow-sm'
                                                        : cell.date === today
                                                            ? 'bg-gray-100 text-gray-900 hover:bg-gray-200'
                                                            : 'text-gray-600 hover:bg-gray-50',
                                                ]"
                                                @click="setStudyDate(cell.date)"
                                            >
                                                {{ cell.day }}
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mt-3 grid grid-cols-2 gap-2">
                                        <button
                                            type="button"
                                            class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-bold text-gray-600 transition hover:bg-gray-50"
                                            @click="datePickerOpen = false"
                                        >
                                            閉じる
                                        </button>
                                        <button
                                            type="button"
                                            class="rounded-lg bg-gray-900 px-3 py-2 text-xs font-bold text-white transition hover:bg-gray-700"
                                            @click="setStudyDate(today)"
                                        >
                                            今日
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <span v-if="studyLogForm.errors.studied_on" class="mt-1 block text-xs text-rose-600">
                                {{ studyLogForm.errors.studied_on }}
                            </span>
                        </label>

                        <div class="block">
                            <span class="text-xs font-semibold text-gray-500">カテゴリー</span>
                            <div class="mt-1 grid grid-cols-2 gap-2 rounded-xl border border-gray-200 bg-gray-50 p-1 shadow-sm">
                                <button
                                    v-for="category in studyCategories"
                                    :key="category.value"
                                    type="button"
                                    class="flex items-center justify-center gap-2 rounded-lg px-3 py-2.5 text-sm font-bold transition"
                                    :class="studyLogForm.category === category.value
                                        ? 'bg-white text-gray-900 shadow-sm ring-1 ring-gray-200'
                                        : 'text-gray-500 hover:bg-white/70 hover:text-gray-700'"
                                    @click="studyLogForm.category = category.value"
                                >
                                    <span class="h-2.5 w-2.5 rounded-full" :class="category.accent"></span>
                                    {{ category.label }}
                                </button>
                            </div>
                            <span v-if="studyLogForm.errors.category" class="mt-1 block text-xs text-rose-600">
                                {{ studyLogForm.errors.category }}
                            </span>
                        </div>

                        <div v-if="studyLogForm.category === '学び'" class="block">
                            <span class="text-xs font-semibold text-gray-500">分類</span>
                            <div class="mt-1 grid grid-cols-2 gap-2 rounded-xl border border-sky-100 bg-sky-50/80 p-1 shadow-sm">
                                <button
                                    v-for="subcategory in learningSubcategories"
                                    :key="subcategory.value"
                                    type="button"
                                    class="rounded-lg px-3 py-2.5 text-sm font-bold transition"
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

                        <label class="block">
                            <span class="text-xs font-semibold text-gray-500">セット数</span>
                            <div class="mt-1 flex overflow-hidden rounded-lg border border-gray-200 shadow-sm">
                                <button type="button" class="w-11 border-r border-gray-200 bg-gray-50 text-lg font-semibold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300" :disabled="studyLogForm.set_count <= 1" @click="adjustStudySetCount(-1)">
                                    -
                                </button>
                                <input v-model.number="studyLogForm.set_count" type="number" min="1" max="96" step="1" class="w-full border-0 text-center text-sm font-semibold shadow-none focus:border-0 focus:ring-0" @blur="setStudySetCount(studyLogForm.set_count)" />
                                <button type="button" class="w-11 border-l border-gray-200 bg-gray-50 text-lg font-semibold text-gray-600 transition hover:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-300" :disabled="studyLogForm.set_count >= 96" @click="adjustStudySetCount(1)">
                                    +
                                </button>
                            </div>
                            <div class="mt-2 grid grid-cols-4 gap-1.5">
                                <button
                                    v-for="count in [1, 2, 4, 8]"
                                    :key="count"
                                    type="button"
                                    class="rounded-md border px-2 py-1 text-xs font-semibold transition"
                                    :class="studyLogForm.set_count === count ? 'border-gray-900 bg-gray-900 text-white' : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                                    @click="setStudySetCount(count)"
                                >
                                    {{ count }}
                                </button>
                            </div>
                            <span v-if="studyLogForm.errors.set_count" class="mt-1 block text-xs text-rose-600">
                                {{ studyLogForm.errors.set_count }}
                            </span>
                        </label>

                        <div class="flex items-end">
                            <button type="submit" class="inline-flex w-full items-center justify-center rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-gray-700 disabled:cursor-not-allowed disabled:opacity-60 md:w-auto" :disabled="studyLogForm.processing">
                                {{ studyLogForm.processing ? "保存中" : "保存" }}
                            </button>
                        </div>
                    </form>

                    <div class="mt-3 grid grid-cols-2 gap-2">
                            <div class="rounded-lg border border-orange-100 bg-orange-50/80 px-3 py-2">
                                <p class="text-[11px] font-bold text-orange-700">英語</p>
                                <p class="mt-0.5 text-lg font-bold text-orange-950">{{ selectedStudyDateSummary.english }}セット</p>
                            </div>
                            <div class="rounded-lg border border-sky-100 bg-sky-50/90 px-3 py-2">
                                <p class="text-[11px] font-bold text-sky-700">学び</p>
                                <p class="mt-0.5 text-lg font-bold text-sky-950">{{ selectedStudyDateSummary.learning }}セット</p>
                            </div>
                    </div>
                </section>

                <div v-if="activeStudyTab === 'summary'" class="mb-6 grid gap-3 sm:grid-cols-2">
                    <div class="rounded-xl border border-orange-100 bg-orange-50/70 p-4 shadow-sm">
                        <p class="text-xs font-semibold text-orange-700">英語 累計</p>
                        <p class="mt-1 text-2xl font-bold text-orange-950">{{ stats.english_duration }}</p>
                    </div>
                    <div class="rounded-xl border border-sky-100 bg-sky-50/80 p-4 shadow-sm">
                        <p class="text-xs font-semibold text-sky-700">学び 累計</p>
                        <p class="mt-1 text-2xl font-bold text-sky-950">{{ stats.learning_duration }}</p>
                        <div class="mt-3 grid grid-cols-2 gap-2">
                            <div
                                v-for="breakdown in stats.learning_breakdown"
                                :key="breakdown.label"
                                class="rounded-lg border border-sky-100 bg-white/70 px-3 py-2"
                            >
                                <p class="text-[11px] font-bold text-sky-600">{{ breakdown.label }}</p>
                                <p class="mt-0.5 text-sm font-bold text-sky-950">{{ breakdown.duration }}</p>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <div v-if="cell.summary.english_sets > 0" class="whitespace-nowrap rounded bg-orange-50 px-1 py-0 text-left text-[9px] font-semibold leading-4 text-orange-900 sm:text-xs">
                                            英語 {{ cell.summary.english_sets }}
                                        </div>
                                        <div v-if="cell.summary.learning_sets > 0" class="whitespace-nowrap rounded bg-sky-50 px-1 py-0 text-left text-[9px] font-semibold leading-4 text-sky-900 sm:text-xs">
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
                            <p class="text-xs font-semibold text-gray-500">{{ selectedDayLogs.length }}件</p>
                        </div>
                        <div v-if="selectedDayLogs.length > 0" class="mt-3 space-y-2">
                            <div
                                v-for="log in selectedDayLogs"
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

                <section v-if="activeStudyTab === 'monthly'" class="mb-6 rounded-xl border border-gray-100 bg-white p-3 shadow-sm sm:p-5">
                    <h2 class="text-base font-bold text-gray-900">月別学習時間</h2>
                    <div class="mt-3 overflow-auto rounded-lg border border-gray-100">
                        <table class="w-full table-fixed divide-y divide-gray-100 text-[10px] sm:text-sm">
                            <colgroup>
                                <col class="w-[26%] sm:w-auto" />
                                <col class="w-[37%] sm:w-auto" />
                                <col class="w-[37%] sm:w-auto" />
                            </colgroup>
                            <thead class="bg-gray-50 text-left text-xs font-semibold text-gray-500">
                                <tr>
                                    <th class="whitespace-nowrap px-1.5 py-2 sm:px-4 sm:py-3">月</th>
                                    <th class="whitespace-nowrap bg-orange-50/80 px-1 py-2 text-right text-orange-700 sm:px-4 sm:py-3">英語</th>
                                    <th class="whitespace-nowrap bg-sky-50/80 px-1 py-2 text-right text-sky-700 sm:px-4 sm:py-3">学び</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 bg-white">
                                <tr v-for="summary in monthlySummaries" :key="summary.month">
                                    <td class="whitespace-nowrap px-1.5 py-2 font-semibold text-gray-900 sm:px-4 sm:py-3">{{ summary.month_label }}</td>
                                    <td class="whitespace-nowrap bg-orange-50/40 px-1 py-2 text-right font-semibold text-orange-900 sm:px-4 sm:py-3">{{ summary.english_duration }}</td>
                                    <td class="whitespace-nowrap bg-sky-50/50 px-1 py-2 text-right font-semibold text-sky-900 sm:px-4 sm:py-3">{{ summary.learning_duration }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>

            <section v-if="activeTab === 'repayment'" class="rounded-xl border border-gray-100 bg-white p-8 text-center shadow-sm">
                <h2 class="text-lg font-bold text-gray-900">返済</h2>
                <p class="mt-2 text-sm text-gray-500">返済管理のデータと表示項目は未設定です。</p>
                <div class="mx-auto mt-5 max-w-md rounded-lg border border-dashed border-gray-200 bg-gray-50 p-4 text-left text-sm text-gray-500">
                    <p class="font-semibold text-gray-700">今後追加する候補</p>
                    <p class="mt-2 leading-6">返済先、返済予定日、返済額、残高、ステータス、メモなどをDBで管理できます。</p>
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
