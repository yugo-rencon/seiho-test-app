<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { computed, ref } from "vue";
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

const today = new Date().toISOString().slice(0, 10);
const selectedCalendarMonth = ref(props.monthlySummaries[0]?.month || today.slice(0, 7));
const studyLogForm = useForm({
    studied_on: today,
    category: "英語",
    set_count: 1,
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

const calendarMonthOptions = computed(() => {
    return props.monthlySummaries.map((summary) => ({
        value: summary.month,
        label: summary.month_label,
    }));
});

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
            day,
            summary: dailySummaryByDay.value[date],
        });
    }

    return cells;
});

const submitStudyLog = () => {
    studyLogForm.post(route("admin.personal.studyLogs.store"), {
        preserveScroll: true,
        onSuccess: () => {
            studyLogForm.defaults({
                studied_on: today,
                category: studyLogForm.category,
                set_count: 1,
            });
            studyLogForm.reset("set_count");
        },
    });
};
</script>

<template>
    <AdminLayout title="個人管理">
        <div class="mx-auto max-w-7xl px-3 py-6 sm:px-5 sm:py-8">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">Personal Admin</p>
                    <h1 class="mt-1 text-2xl font-bold text-gray-900">個人管理</h1>
                </div>
                <Link :href="route('admin.index')" class="inline-flex items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-600 transition hover:bg-gray-50"> 管理画面に戻る </Link>
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

                <section v-if="activeStudyTab === 'record'" class="mb-6 rounded-xl border border-gray-100 bg-white p-5 shadow-sm">
                    <div class="mb-4">
                        <h2 class="text-base font-bold text-gray-900">学習記録を追加</h2>
                    </div>
                    <form class="grid gap-4 md:grid-cols-[1fr_1fr_1fr_auto]" @submit.prevent="submitStudyLog">
                        <label class="block">
                            <span class="text-xs font-semibold text-gray-500">日付</span>
                            <input v-model="studyLogForm.studied_on" type="date" class="mt-1 w-full rounded-lg border-gray-200 text-sm shadow-sm focus:border-gray-400 focus:ring-gray-400" />
                            <span v-if="studyLogForm.errors.studied_on" class="mt-1 block text-xs text-rose-600">
                                {{ studyLogForm.errors.studied_on }}
                            </span>
                        </label>

                        <label class="block">
                            <span class="text-xs font-semibold text-gray-500">カテゴリー</span>
                            <select v-model="studyLogForm.category" class="mt-1 w-full rounded-lg border-gray-200 text-sm shadow-sm focus:border-gray-400 focus:ring-gray-400">
                                <option value="英語">英語</option>
                                <option value="学び">学び</option>
                            </select>
                            <span v-if="studyLogForm.errors.category" class="mt-1 block text-xs text-rose-600">
                                {{ studyLogForm.errors.category }}
                            </span>
                        </label>

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
                </section>

                <div v-if="activeStudyTab === 'summary'" class="mb-6 grid gap-3 sm:grid-cols-2">
                    <div class="rounded-xl border border-orange-100 bg-orange-50/70 p-4 shadow-sm">
                        <p class="text-xs font-semibold text-orange-700">英語 累計</p>
                        <p class="mt-1 text-2xl font-bold text-orange-950">{{ stats.english_duration }}</p>
                    </div>
                    <div class="rounded-xl border border-sky-100 bg-sky-50/80 p-4 shadow-sm">
                        <p class="text-xs font-semibold text-sky-700">学び 累計</p>
                        <p class="mt-1 text-2xl font-bold text-sky-950">{{ stats.learning_duration }}</p>
                    </div>
                </div>

                <section v-if="activeStudyTab === 'daily'" class="mb-6 rounded-xl border border-gray-100 bg-white p-3 shadow-sm sm:p-5">
                    <div class="flex items-center justify-between gap-3">
                        <h2 class="text-base font-bold text-gray-900">日別詳細</h2>
                        <select
                            v-model="selectedCalendarMonth"
                            class="rounded-lg border-gray-200 py-1.5 pl-3 pr-8 text-xs font-semibold text-gray-700 shadow-sm focus:border-gray-400 focus:ring-gray-400 sm:text-sm"
                        >
                            <option v-for="month in calendarMonthOptions" :key="month.value" :value="month.value">
                                {{ month.label }}
                            </option>
                        </select>
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
                                class="min-h-[4.25rem] p-1 sm:min-h-[5.25rem] sm:p-2"
                                :class="cell.empty ? 'bg-gray-50/60' : 'bg-white'"
                            >
                                <template v-if="!cell.empty">
                                    <div class="text-xs font-bold text-gray-800 sm:text-sm">{{ cell.day }}</div>
                                    <div v-if="cell.summary" class="mt-1 space-y-1">
                                        <div class="rounded bg-orange-50 px-1 py-0.5 text-right font-semibold text-orange-900">
                                            英 {{ cell.summary.english_sets }}
                                        </div>
                                        <div class="rounded bg-sky-50 px-1 py-0.5 text-right font-semibold text-sky-900">
                                            学 {{ cell.summary.learning_sets }}
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
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
    </AdminLayout>
</template>
