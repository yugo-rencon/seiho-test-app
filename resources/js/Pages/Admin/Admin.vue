<script setup>
import { Head, Link, router, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import AdminLayout from "@/Layouts/AdminLayout.vue";

const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    stats: {
        type: Object,
        required: true,
    },
    admins: {
        type: Array,
        required: true,
    },
    newContactCount: {
        type: Number,
        default: 0,
    },
    filters: {
        type: Object,
        required: true,
    },
    releasedKeys: {
        type: Object,
        default: () => ({}),
    },
});

const q = ref(props.filters?.q ?? "");
const activeTab = ref("dashboard");
const page = usePage();

// リリース管理
// 生保講座 (8科目, 年度×フォームa/b/c)
const SEIHO_SUBJECTS = [
    { key: "souron",  label: "生命保険総論" },
    { key: "keiri",   label: "生命保険計理" },
    { key: "kiken",   label: "危険選択" },
    { key: "yakkan",  label: "約款と法律" },
    { key: "kaikei",  label: "生命保険会計" },
    { key: "eigyo",   label: "生命保険商品と営業" },
    { key: "zeihou",  label: "生命保険と税法" },
    { key: "sisan",   label: "資産の運用" },
];
const SEIHO_YEARS = [2025, 2024, 2023, 2022, 2021, 2020];
const SEIHO_FORMS = ["a", "b", "c"];

// 一般課程
const IPPAN_PERIODS = [
    { key: "h1", label: "1-6月" },
    { key: "h2", label: "7-12月" },
];
const IPPAN_YEARS  = [2025, 2024, 2023];
const IPPAN_FORMS  = ["a", "b", "c", "d", "e"];

// 専門課程
const SENMON_PERIODS = [
    { key: "h1", label: "4-8月",  forms: ["a", "b"] },
    { key: "h2", label: "9-3月", forms: ["a", "b", "c", "d"] },
];
const SENMON_YEARS = [2025, 2024, 2023];

// 応用課程
const OUYOU_PERIODS = [
    { key: "h1", label: "4-8月",  forms: ["a", "b"] },
    { key: "h2", label: "9-3月", forms: ["a", "b", "c", "d"] },
];
const OUYOU_YEARS = [2025, 2024, 2023];

// 生保大学
const DAIGAKU_SUBJECTS = [
    { key: "shikumi", label: "生命保険のしくみと個人保険商品" },
    { key: "fp",      label: "FPとコンプライアンス" },
    { key: "zei",     label: "生命保険と税法" },
    { key: "sisan",   label: "資産の運用" },
    { key: "kigyo",   label: "企業保険・団体保険" },
    { key: "syakai",  label: "社会保障と生命保険" },
];
const DAIGAKU_YEARS = [2025, 2024, 2023, 2022, 2021];
const DAIGAKU_FORMS = ["a", "b", "c"];

// タブ状態
const releaseGroup = ref("seiho");          // "seiho" | "ippan" | "senmon" | "ouyou" | "daigaku"
const releaseSeihoTab   = ref("souron");
const releaseDaigakuTab = ref("shikumi");

const activeSeihoSubject   = computed(() => SEIHO_SUBJECTS.find((s) => s.key === releaseSeihoTab.value));
const activeDaigakuSubject = computed(() => DAIGAKU_SUBJECTS.find((s) => s.key === releaseDaigakuTab.value));

const isReleased = (testKey) => !!props.releasedKeys?.[testKey];

const toggleRelease = (testKey) => {
    router.post(
        route("admin.releases.toggle", { testKey }),
        {},
        { preserveState: true, preserveScroll: true },
    );
};
const isDaigakuAdmin = computed(() => String(page.url ?? "").startsWith("/daigaku"));
const adminIndexRoute = computed(() => (isDaigakuAdmin.value ? "daigaku.admin.index" : "admin.index"));
const adminContactsRoute = computed(() =>
    isDaigakuAdmin.value ? "daigaku.admin.contacts.index" : "admin.contacts.index",
);

const isActiveMenu = (key) => activeTab.value === key;

const submitSearch = () => {
    router.get(
        route(adminIndexRoute.value),
        { q: q.value },
        { preserveState: true, replace: true },
    );
};

const formatDateTime = (value) => {
    if (!value) return "-";
    const date = new Date(value);
    if (Number.isNaN(date.getTime())) return "-";
    return date.toLocaleString("ja-JP", {
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
        hour: "2-digit",
        minute: "2-digit",
    });
};
</script>

<template>
    <AdminLayout title="管理画面">

        <div class="container mx-auto max-w-6xl px-5 py-8">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-900">管理者画面</h1>
                <p class="mt-1 text-sm text-gray-500">
                    ユーザーの情報を管理できます。
                </p>
            </div>

            <div class="mb-2">
                <p class="text-xs font-semibold tracking-wide text-gray-500">
                    管理メニュー
                </p>
            </div>

            <div class="mb-5 flex flex-wrap items-center gap-2">
                <button
                    type="button"
                    class="rounded-lg border px-4 py-2 text-sm font-semibold transition"
                    :class="isActiveMenu('dashboard')
                        ? 'border-purple-200 bg-purple-50 text-purple-700'
                        : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                    @click="activeTab = 'dashboard'"
                >
                    ダッシュボード
                </button>
                <button
                    type="button"
                    class="rounded-lg border px-4 py-2 text-sm font-semibold transition"
                    :class="isActiveMenu('users')
                        ? 'border-purple-200 bg-purple-50 text-purple-700'
                        : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                    @click="activeTab = 'users'"
                >
                    ユーザー管理
                </button>
                <button
                    type="button"
                    class="rounded-lg border px-4 py-2 text-sm font-semibold transition"
                    :class="isActiveMenu('releases')
                        ? 'border-purple-200 bg-purple-50 text-purple-700'
                        : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                    @click="activeTab = 'releases'"
                >
                    リリース管理
                </button>
                <Link
                    :href="route(adminContactsRoute)"
                    class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-600 transition hover:bg-gray-50"
                >
                    問い合わせ管理
                    <span
                        v-if="newContactCount > 0"
                        class="inline-flex min-w-[1.25rem] items-center justify-center rounded-full bg-rose-500 px-1.5 py-0.5 text-[11px] font-bold leading-none text-white"
                    >
                        {{ newContactCount }}
                    </span>
                </Link>
            </div>

            <div
                v-if="activeTab === 'dashboard'"
                class="mb-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-4"
            >
                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <p class="text-xs text-gray-500">総ユーザー数</p>
                    <p class="mt-1 text-2xl font-bold text-gray-900">
                        {{ stats.totalUsers }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <p class="text-xs text-gray-500">今月の新規登録数</p>
                    <p class="mt-1 text-2xl font-bold text-gray-900">
                        {{ stats.newUsersThisMonth }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <p class="text-xs text-gray-500">生保講座 売上件数</p>
                    <p class="mt-1 text-2xl font-bold text-indigo-700">
                        {{ stats.seihoSalesCount }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <p class="text-xs text-gray-500">生保大学 売上件数</p>
                    <p class="mt-1 text-2xl font-bold text-blue-700">
                        {{ stats.daigakuSalesCount }}
                    </p>
                </div>
            </div>
            <div
                v-if="activeTab === 'dashboard'"
                class="rounded-xl border border-gray-100 bg-white p-4"
            >
                <h2 class="text-sm font-semibold text-gray-900">管理者ユーザー</h2>
                <div v-if="admins.length" class="mt-3 space-y-2">
                    <div
                        v-for="admin in admins"
                        :key="`admin-${admin.id}`"
                        class="flex items-center justify-between rounded-lg border border-amber-100 bg-amber-50/40 px-3 py-2"
                    >
                        <div class="min-w-0">
                            <p class="truncate text-sm font-semibold text-gray-900">
                                {{ admin.email }}
                            </p>
                            <p class="text-xs text-gray-500">ID: {{ admin.id }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span
                                class="rounded-full px-2 py-1 text-xs font-semibold"
                                :class="
                                    admin.is_premium
                                        ? 'bg-emerald-50 text-emerald-700'
                                        : 'bg-gray-100 text-gray-600'
                                "
                            >
                                {{ admin.is_premium ? "プレミアム有効" : "プレミアム無効" }}
                            </span>
                        </div>
                    </div>
                </div>
                <p v-else class="mt-2 text-sm text-gray-500">
                    管理者ユーザーは登録されていません。
                </p>
            </div>

            <template v-if="activeTab === 'users'">
            <form
                @submit.prevent="submitSearch"
                class="mb-4 flex flex-col gap-2 sm:flex-row"
            >
                <input
                    v-model="q"
                    type="text"
                    placeholder="メールアドレスで検索"
                    class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm focus:border-purple-300 focus:outline-none"
                />
                <button
                    type="submit"
                    class="whitespace-nowrap rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-500 sm:w-auto"
                >
                    検索
                </button>
            </form>

            <div class="overflow-x-auto rounded-xl border border-gray-100 bg-white hidden md:block">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 text-left text-gray-600">
                        <tr>
                            <th class="px-3 py-2">ID</th>
                            <th class="px-3 py-2">メール</th>
                            <th class="px-3 py-2">プレミアム</th>
                            <th class="px-3 py-2">生保講座</th>
                            <th class="px-3 py-2">生保大学</th>
                            <th class="px-3 py-2">登録日</th>
                            <th class="px-3 py-2">最終購入日時</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="user in users.data"
                            :key="user.id"
                            class="border-t border-gray-100"
                        >
                            <td class="px-3 py-2 text-gray-700">
                                {{ user.id }}
                            </td>
                            <td class="px-3 py-2 text-gray-700">
                                {{ user.email }}
                            </td>
                            <td class="px-3 py-2 text-gray-700">
                                <span
                                    class="rounded-full px-2 py-1 text-xs font-semibold"
                                    :class="
                                        user.is_premium
                                            ? 'bg-emerald-50 text-emerald-700'
                                            : 'bg-gray-100 text-gray-600'
                                    "
                                >
                                    {{ user.is_premium ? "有効" : "無効" }}
                                </span>
                            </td>
                            <td class="px-3 py-2 text-gray-700">
                                <span
                                    class="rounded-full px-2 py-1 text-xs font-semibold"
                                    :class="
                                        user.seiho_paid_count > 0
                                            ? 'bg-indigo-50 text-indigo-700'
                                            : 'bg-gray-100 text-gray-600'
                                    "
                                >
                                    {{ user.seiho_paid_count > 0 ? "購入済み" : "未購入" }}
                                </span>
                            </td>
                            <td class="px-3 py-2 text-gray-700">
                                <span
                                    class="rounded-full px-2 py-1 text-xs font-semibold"
                                    :class="
                                        user.daigaku_paid_count > 0
                                            ? 'bg-blue-50 text-blue-700'
                                            : 'bg-gray-100 text-gray-600'
                                    "
                                >
                                    {{ user.daigaku_paid_count > 0 ? "購入済み" : "未購入" }}
                                </span>
                            </td>
                            <td class="px-3 py-2 text-gray-600">
                                {{ formatDateTime(user.created_at) }}
                            </td>
                            <td class="px-3 py-2 text-gray-600">
                                {{ formatDateTime(user.last_paid_at) }}
                            </td>
                        </tr>
                        <tr v-if="users.data.length === 0">
                            <td
                                colspan="7"
                                class="px-3 py-8 text-center text-sm text-gray-500"
                            >
                                データがありません。
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="space-y-3 md:hidden">
                <div
                    v-for="user in users.data"
                    :key="`mobile-${user.id}`"
                    class="rounded-xl border border-gray-100 bg-white p-4"
                >
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <p class="text-xs text-gray-500">ID: {{ user.id }}</p>
                            <p class="mt-1 text-sm font-semibold text-gray-900 break-all">
                                {{ user.email }}
                            </p>
                        </div>
                        <span
                            class="rounded-full px-2 py-1 text-xs font-semibold"
                            :class="
                                user.is_premium
                                    ? 'bg-emerald-50 text-emerald-700'
                                    : 'bg-gray-100 text-gray-600'
                            "
                        >
                            {{ user.is_premium ? "有効" : "無効" }}
                        </span>
                    </div>

                    <div class="mt-3 text-xs text-gray-600">
                        登録日: {{ formatDateTime(user.created_at) }}
                    </div>
                    <div class="mt-1 text-xs text-gray-600">
                        最終購入日時: {{ formatDateTime(user.last_paid_at) }}
                    </div>
                    <div class="mt-2 flex flex-wrap gap-2">
                        <span
                            class="rounded-full px-2 py-1 text-xs font-semibold"
                            :class="
                                user.seiho_paid_count > 0
                                    ? 'bg-indigo-50 text-indigo-700'
                                    : 'bg-gray-100 text-gray-600'
                            "
                        >
                            生保講座: {{ user.seiho_paid_count > 0 ? "購入済み" : "未購入" }}
                        </span>
                        <span
                            class="rounded-full px-2 py-1 text-xs font-semibold"
                            :class="
                                user.daigaku_paid_count > 0
                                    ? 'bg-blue-50 text-blue-700'
                                    : 'bg-gray-100 text-gray-600'
                            "
                        >
                            生保大学: {{ user.daigaku_paid_count > 0 ? "購入済み" : "未購入" }}
                        </span>
                    </div>
                </div>

                <div
                    v-if="users.data.length === 0"
                    class="rounded-xl border border-gray-100 bg-white px-3 py-8 text-center text-sm text-gray-500"
                >
                    データがありません。
                </div>
            </div>
            </template>

            <!-- リリース管理タブ -->
            <template v-if="activeTab === 'releases'">
                <!-- コース選択 -->
                <div class="mb-5 flex flex-wrap gap-2">
                    <button
                        type="button"
                        class="rounded-lg border-2 px-4 py-2 text-sm font-bold transition"
                        :class="releaseGroup === 'seiho'
                            ? 'border-purple-500 bg-purple-500 text-white'
                            : 'border-gray-200 bg-white text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                        @click="releaseGroup = 'seiho'"
                    >生保講座</button>
                    <button
                        type="button"
                        class="rounded-lg border-2 px-4 py-2 text-sm font-bold transition"
                        :class="releaseGroup === 'daigaku'
                            ? 'border-blue-500 bg-blue-500 text-white'
                            : 'border-gray-200 bg-white text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                        @click="releaseGroup = 'daigaku'"
                    >生保大学</button>
                    <button
                        type="button"
                        class="rounded-lg border-2 px-4 py-2 text-sm font-bold transition"
                        :class="releaseGroup === 'ouyou'
                            ? 'border-amber-500 bg-amber-500 text-white'
                            : 'border-gray-200 bg-white text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                        @click="releaseGroup = 'ouyou'"
                    >応用課程</button>
                    <button
                        type="button"
                        class="rounded-lg border-2 px-4 py-2 text-sm font-bold transition"
                        :class="releaseGroup === 'senmon'
                            ? 'border-emerald-500 bg-emerald-500 text-white'
                            : 'border-gray-200 bg-white text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                        @click="releaseGroup = 'senmon'"
                    >専門課程</button>
                    <button
                        type="button"
                        class="rounded-lg border-2 px-4 py-2 text-sm font-bold transition"
                        :class="releaseGroup === 'ippan'
                            ? 'border-fuchsia-500 bg-fuchsia-500 text-white'
                            : 'border-gray-200 bg-white text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                        @click="releaseGroup = 'ippan'"
                    >一般課程</button>
                </div>

                <!-- 生保講座：科目タブ × 年度×フォーム -->
                <template v-if="releaseGroup === 'seiho'">
                    <div class="mb-3 flex flex-wrap gap-2">
                        <button
                            v-for="s in SEIHO_SUBJECTS" :key="s.key"
                            type="button"
                            class="rounded-lg border px-3 py-1.5 text-sm font-semibold transition"
                            :class="releaseSeihoTab === s.key
                                ? 'border-purple-400 bg-purple-100 text-purple-800'
                                : 'border-gray-200 bg-white text-gray-500 hover:bg-gray-50'"
                            @click="releaseSeihoTab = s.key"
                        >{{ s.label }}</button>
                    </div>
                    <div v-if="activeSeihoSubject" class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-gray-100 text-left text-gray-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th v-for="f in SEIHO_FORMS" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="year in SEIHO_YEARS" :key="year" class="border-t border-gray-100 hover:bg-gray-50">
                                        <td class="px-4 py-2.5 font-bold text-gray-800 border-r border-gray-100">{{ year }}</td>
                                        <td v-for="f in SEIHO_FORMS" :key="f" class="px-4 py-2.5 text-center">
                                            <button type="button"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold transition"
                                                :class="isReleased(`seiho-${activeSeihoSubject.key}-${year}-${f}`) ? 'bg-emerald-500 text-white hover:bg-emerald-600' : 'bg-gray-200 text-gray-400 hover:bg-gray-300'"
                                                @click="toggleRelease(`seiho-${activeSeihoSubject.key}-${year}-${f}`)"
                                            >{{ isReleased(`seiho-${activeSeihoSubject.key}-${year}-${f}`) ? '✓' : '–' }}</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </template>

                <!-- 一般課程：年度×期×フォーム -->
                <template v-if="releaseGroup === 'ippan'">
                    <div class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-gray-100 text-left text-gray-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th class="px-4 py-2.5 font-semibold">月</th>
                                        <th v-for="f in IPPAN_FORMS" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="year in IPPAN_YEARS" :key="year">
                                        <tr v-for="(period, pIdx) in IPPAN_PERIODS" :key="`${year}-${period.key}`" class="border-t border-gray-100 hover:bg-gray-50">
                                            <td v-if="pIdx === 0" :rowspan="IPPAN_PERIODS.length" class="px-4 py-2.5 font-bold text-gray-800 align-middle border-r border-gray-100">{{ year }}</td>
                                            <td class="px-4 py-2.5 text-gray-500 whitespace-nowrap border-r border-gray-100">{{ period.label }}</td>
                                            <td v-for="f in IPPAN_FORMS" :key="f" class="px-4 py-2.5 text-center">
                                                <button type="button"
                                                    class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold transition"
                                                    :class="isReleased(`ippan-${year}-${period.key}-${f}`) ? 'bg-emerald-500 text-white hover:bg-emerald-600' : 'bg-gray-200 text-gray-400 hover:bg-gray-300'"
                                                    @click="toggleRelease(`ippan-${year}-${period.key}-${f}`)"
                                                >{{ isReleased(`ippan-${year}-${period.key}-${f}`) ? '✓' : '–' }}</button>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </template>

                <!-- 専門課程：年度×期×フォーム -->
                <template v-if="releaseGroup === 'senmon'">
                    <div class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-gray-100 text-left text-gray-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th class="px-4 py-2.5 font-semibold">月</th>
                                        <th v-for="f in ['a','b','c','d']" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="year in SENMON_YEARS" :key="year">
                                        <tr v-for="(period, pIdx) in SENMON_PERIODS" :key="`${year}-${period.key}`" class="border-t border-gray-100 hover:bg-gray-50">
                                            <td v-if="pIdx === 0" :rowspan="SENMON_PERIODS.length" class="px-4 py-2.5 font-bold text-gray-800 align-middle border-r border-gray-100">{{ year }}</td>
                                            <td class="px-4 py-2.5 text-gray-500 whitespace-nowrap border-r border-gray-100">{{ period.label }}</td>
                                            <td v-for="f in period.forms" :key="f" class="px-4 py-2.5 text-center">
                                                <button type="button"
                                                    class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold transition"
                                                    :class="isReleased(`senmon-${year}-${period.key}-${f}`) ? 'bg-emerald-500 text-white hover:bg-emerald-600' : 'bg-gray-200 text-gray-400 hover:bg-gray-300'"
                                                    @click="toggleRelease(`senmon-${year}-${period.key}-${f}`)"
                                                >{{ isReleased(`senmon-${year}-${period.key}-${f}`) ? '✓' : '–' }}</button>
                                            </td>
                                            <td v-for="_ in (4 - period.forms.length)" :key="_" class="px-4 py-2.5" />
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </template>

                <!-- 応用課程：年度×期×フォーム -->
                <template v-if="releaseGroup === 'ouyou'">
                    <div class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-gray-100 text-left text-gray-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th class="px-4 py-2.5 font-semibold">月</th>
                                        <th v-for="f in ['a','b','c','d']" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="year in OUYOU_YEARS" :key="year">
                                        <tr v-for="(period, pIdx) in OUYOU_PERIODS" :key="`${year}-${period.key}`" class="border-t border-gray-100 hover:bg-gray-50">
                                            <td v-if="pIdx === 0" :rowspan="OUYOU_PERIODS.length" class="px-4 py-2.5 font-bold text-gray-800 align-middle border-r border-gray-100">{{ year }}</td>
                                            <td class="px-4 py-2.5 text-gray-500 whitespace-nowrap border-r border-gray-100">{{ period.label }}</td>
                                            <td v-for="f in period.forms" :key="f" class="px-4 py-2.5 text-center">
                                                <button type="button"
                                                    class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold transition"
                                                    :class="isReleased(`ouyou-${year}-${period.key}-${f}`) ? 'bg-emerald-500 text-white hover:bg-emerald-600' : 'bg-gray-200 text-gray-400 hover:bg-gray-300'"
                                                    @click="toggleRelease(`ouyou-${year}-${period.key}-${f}`)"
                                                >{{ isReleased(`ouyou-${year}-${period.key}-${f}`) ? '✓' : '–' }}</button>
                                            </td>
                                            <td v-for="_ in (4 - period.forms.length)" :key="_" class="px-4 py-2.5" />
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </template>

                <!-- 生保大学：科目タブ × 年度×フォーム -->
                <template v-if="releaseGroup === 'daigaku'">
                    <div class="mb-3 flex flex-wrap gap-2">
                        <button
                            v-for="s in DAIGAKU_SUBJECTS" :key="s.key"
                            type="button"
                            class="rounded-lg border px-3 py-1.5 text-sm font-semibold transition"
                            :class="releaseDaigakuTab === s.key
                                ? 'border-blue-400 bg-blue-100 text-blue-800'
                                : 'border-gray-200 bg-white text-gray-500 hover:bg-gray-50'"
                            @click="releaseDaigakuTab = s.key"
                        >{{ s.label }}</button>
                    </div>
                    <div v-if="activeDaigakuSubject" class="rounded-xl border border-gray-200 bg-white overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-gray-100 text-left text-gray-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th v-for="f in DAIGAKU_FORMS" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="year in DAIGAKU_YEARS" :key="year" class="border-t border-gray-100 hover:bg-gray-50">
                                        <td class="px-4 py-2.5 font-bold text-gray-800 border-r border-gray-100">{{ year }}</td>
                                        <td v-for="f in DAIGAKU_FORMS" :key="f" class="px-4 py-2.5 text-center">
                                            <button type="button"
                                                class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold transition"
                                                :class="isReleased(`daigaku-${activeDaigakuSubject.key}-${year}-${f}`) ? 'bg-emerald-500 text-white hover:bg-emerald-600' : 'bg-gray-200 text-gray-400 hover:bg-gray-300'"
                                                @click="toggleRelease(`daigaku-${activeDaigakuSubject.key}-${year}-${f}`)"
                                            >{{ isReleased(`daigaku-${activeDaigakuSubject.key}-${year}-${f}`) ? '✓' : '–' }}</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </template>

                <div class="mt-3 text-sm text-gray-400 px-1">
                    ✓ = 公開中　– = 非公開　クリックで切り替え
                </div>
            </template>
        </div>
    </AdminLayout>
</template>
