<script setup>
import { Link, router, usePage } from "@inertiajs/vue3";
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
const IPPAN_YEARS  = [2025, 2024, 2023, 2022, 2021];
const IPPAN_FORMS  = ["a", "b", "c", "d", "e"];

// 専門課程
const SENMON_PERIODS = [
    { key: "h1", label: "4-8月",  forms: ["a", "b"] },
    { key: "h2", label: "9-3月", forms: ["a", "b", "c", "d"] },
];
const SENMON_YEARS = [2025, 2024, 2023, 2022, 2021];

// 応用課程
const OUYOU_PERIODS = [
    { key: "h1", label: "4-8月",  forms: ["a", "b"] },
    { key: "h2", label: "9-3月", forms: ["a", "b", "c", "d"] },
];
const OUYOU_YEARS = [2025, 2024, 2023, 2022, 2021];

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

// 未保存の変更を溜めるオブジェクト { testKey: newBooleanState }
const pendingChanges = ref({});
const hasPending = computed(() => Object.keys(pendingChanges.value).length > 0);

// 実効値：pending があればそちら優先
const isReleased = (testKey) => {
    if (testKey in pendingChanges.value) return pendingChanges.value[testKey];
    return !!props.releasedKeys?.[testKey];
};

// pending 中かどうか
const isPending = (testKey) => testKey in pendingChanges.value;

// クリック時はローカル状態だけ変更
const toggleRelease = (testKey) => {
    const original = !!props.releasedKeys?.[testKey];
    if (testKey in pendingChanges.value) {
        const next = !pendingChanges.value[testKey];
        if (next === original) {
            // 元に戻ったので pending から除去
            const copy = { ...pendingChanges.value };
            delete copy[testKey];
            pendingChanges.value = copy;
        } else {
            pendingChanges.value = { ...pendingChanges.value, [testKey]: next };
        }
    } else {
        pendingChanges.value = { ...pendingChanges.value, [testKey]: !original };
    }
};

// まとめて保存
const saveReleases = () => {
    router.post(
        route("admin.releases.bulkUpdate"),
        { changes: pendingChanges.value },
        {
            preserveScroll: true,
            onSuccess: () => { pendingChanges.value = {}; },
        },
    );
};

// 変更を破棄
const resetReleases = () => { pendingChanges.value = {}; };

// コースごとの完成数/合計数
const groupStats = computed(() => {
    const count = (keys) => ({
        total: keys.length,
        released: keys.filter((k) => isReleased(k)).length,
    });

    const seihoKeys = SEIHO_SUBJECTS.flatMap((s) =>
        SEIHO_YEARS.flatMap((y) => SEIHO_FORMS.map((f) => `seiho-${s.key}-${y}-${f}`)),
    );
    const ippanKeys = IPPAN_YEARS.flatMap((y) =>
        IPPAN_PERIODS.flatMap((p) => IPPAN_FORMS.map((f) => `ippan-${y}-${p.key}-${f}`)),
    );
    const senmonKeys = SENMON_YEARS.flatMap((y) =>
        SENMON_PERIODS.flatMap((p) => p.forms.map((f) => `senmon-${y}-${p.key}-${f}`)),
    );
    const ouyouKeys = OUYOU_YEARS.flatMap((y) =>
        OUYOU_PERIODS.flatMap((p) => p.forms.map((f) => `ouyou-${y}-${p.key}-${f}`)),
    );
    const daigakuKeys = DAIGAKU_SUBJECTS.flatMap((s) =>
        DAIGAKU_YEARS.flatMap((y) => DAIGAKU_FORMS.map((f) => `daigaku-${s.key}-${y}-${f}`)),
    );

    return {
        seiho:   count(seihoKeys),
        ippan:   count(ippanKeys),
        senmon:  count(senmonKeys),
        ouyou:   count(ouyouKeys),
        daigaku: count(daigakuKeys),
    };
});

// 全コース合計
const totalStats = computed(() => {
    const all = Object.values(groupStats.value);
    return {
        total:    all.reduce((s, g) => s + g.total, 0),
        released: all.reduce((s, g) => s + g.released, 0),
    };
});

// トグルボタンのクラス（4状態）
const btnClass = (testKey) => {
    const released = isReleased(testKey);
    const pending  = isPending(testKey);
    if (pending && released)  return "bg-emerald-100 text-emerald-700 ring-2 ring-emerald-400";
    if (pending && !released) return "bg-rose-100 text-rose-500 ring-2 ring-rose-300";
    if (released)             return "bg-emerald-500 text-white hover:bg-emerald-600";
    return "bg-gray-200 text-gray-400 hover:bg-gray-300";
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

        <div class="container mx-auto max-w-6xl px-5 py-8 pb-24">
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
                <!-- 全体進捗 -->
                <div class="mb-4 rounded-xl border border-gray-200 bg-white px-5 py-3">
                    <div class="mb-1 flex justify-between text-xs text-gray-500">
                        <span class="font-semibold text-gray-700">全コース合計</span>
                        <span>完成 {{ totalStats.released }} / 全 {{ totalStats.total }} ページ　残り {{ totalStats.total - totalStats.released }} ページ</span>
                    </div>
                    <div class="h-2 w-full overflow-hidden rounded-full bg-gray-200">
                        <div
                            class="h-full rounded-full bg-indigo-500 transition-all duration-300"
                            :style="{ width: `${totalStats.total === 0 ? 0 : Math.round(totalStats.released / totalStats.total * 100)}%` }"
                        />
                    </div>
                </div>
                <!-- コース選択 -->
                <div class="mb-3 flex flex-wrap gap-2">
                    <button
                        v-for="({ key, label, activeClass }) in [
                            { key: 'seiho',   label: '生保講座', activeClass: 'border-purple-500 bg-purple-500 text-white'  },
                            { key: 'daigaku', label: '生保大学', activeClass: 'border-blue-500 bg-blue-500 text-white'      },
                            { key: 'ouyou',   label: '応用課程', activeClass: 'border-amber-500 bg-amber-500 text-white'    },
                            { key: 'senmon',  label: '専門課程', activeClass: 'border-emerald-500 bg-emerald-500 text-white' },
                            { key: 'ippan',   label: '一般課程', activeClass: 'border-fuchsia-500 bg-fuchsia-500 text-white' },
                        ]"
                        :key="key"
                        type="button"
                        class="flex items-center gap-2 rounded-lg border-2 px-4 py-2 text-sm font-bold transition"
                        :class="releaseGroup === key
                            ? activeClass
                            : 'border-gray-200 bg-white text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                        @click="releaseGroup = key"
                    >
                        {{ label }}
                    </button>
                </div>

                <!-- 選択中コースの進捗バー -->
                <div class="mb-4">
                    <div class="mb-1 flex justify-between text-xs text-gray-500">
                        <span>完成 {{ groupStats[releaseGroup].released }} / 全 {{ groupStats[releaseGroup].total }} ページ</span>
                        <span>残り {{ groupStats[releaseGroup].total - groupStats[releaseGroup].released }} ページ</span>
                    </div>
                    <div class="h-2 w-full overflow-hidden rounded-full bg-gray-200">
                        <div
                            class="h-full rounded-full bg-emerald-500 transition-all duration-300"
                            :style="{ width: `${groupStats[releaseGroup].total === 0 ? 0 : Math.round(groupStats[releaseGroup].released / groupStats[releaseGroup].total * 100)}%` }"
                        />
                    </div>
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
                                                :class="btnClass(`seiho-${activeSeihoSubject.key}-${year}-${f}`)"
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
                                                    :class="btnClass(`ippan-${year}-${period.key}-${f}`)"
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
                                                    :class="btnClass(`senmon-${year}-${period.key}-${f}`)"
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
                                                    :class="btnClass(`ouyou-${year}-${period.key}-${f}`)"
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
                                                :class="btnClass(`daigaku-${activeDaigakuSubject.key}-${year}-${f}`)"
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

                <!-- 保存バー -->
                <div
                    v-if="hasPending"
                    class="mt-4 flex flex-col gap-2 rounded-lg border border-amber-200 bg-amber-50 px-4 py-3 sm:flex-row sm:items-center sm:justify-between"
                >
                    <span class="text-sm font-medium text-amber-700">
                        {{ Object.keys(pendingChanges).length }}件の未保存の変更があります
                    </span>
                    <div class="flex gap-2">
                        <button
                            type="button"
                            class="flex-1 rounded-lg border border-gray-200 bg-white px-3 py-1.5 text-sm font-semibold text-gray-600 hover:bg-gray-50 sm:flex-none"
                            @click="resetReleases"
                        >リセット</button>
                        <button
                            type="button"
                            class="flex-1 rounded-lg bg-gray-900 px-4 py-1.5 text-sm font-semibold text-white hover:bg-gray-700 sm:flex-none"
                            @click="saveReleases"
                        >保存する</button>
                    </div>
                </div>
            </template>
        </div>
    </AdminLayout>
</template>
