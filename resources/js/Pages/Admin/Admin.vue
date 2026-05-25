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

const purchaseScope = ref(props.filters?.purchase_scope ?? "all");
const purchaseState = ref(props.filters?.purchase_state ?? "all");
const activeTab = ref("dashboard");
const salesTab = ref("overview");
const page = usePage();

const purchaseScopeOptions = [
    { value: "all", label: "全科目" },
    { value: "seiho", label: "生保講座" },
    { value: "daigaku", label: "生保大学" },
    { value: "ouyou", label: "応用課程" },
    { value: "senmon", label: "専門課程" },
    { value: "ippan", label: "一般課程" },
    { value: "basic", label: "セット" },
];

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
    { key: "h1", label: "4-7月",  forms: ["a", "b"] },
    { key: "h2", label: "8-3月", forms: ["a", "b", "c", "d"] },
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
    const releasedByGroup = {
        seiho: "border border-violet-500 bg-gradient-to-br from-violet-400 to-violet-600 text-white shadow-[inset_0_1px_0_rgba(255,255,255,0.35),0_2px_6px_rgba(139,92,246,0.35)]",
        daigaku: "border border-blue-500 bg-gradient-to-br from-blue-400 to-blue-600 text-white shadow-[inset_0_1px_0_rgba(255,255,255,0.35),0_2px_6px_rgba(59,130,246,0.35)]",
        ouyou: "border border-amber-500 bg-gradient-to-br from-amber-400 to-orange-500 text-white shadow-[inset_0_1px_0_rgba(255,255,255,0.35),0_2px_6px_rgba(245,158,11,0.35)]",
        senmon: "border border-emerald-500 bg-gradient-to-br from-emerald-400 to-emerald-600 text-white shadow-[inset_0_1px_0_rgba(255,255,255,0.35),0_2px_6px_rgba(16,185,129,0.35)]",
        ippan: "border border-fuchsia-500 bg-gradient-to-br from-fuchsia-400 to-fuchsia-600 text-white shadow-[inset_0_1px_0_rgba(255,255,255,0.35),0_2px_6px_rgba(217,70,239,0.35)]",
    };
    const pendingReleasedByGroup = {
        seiho: "border border-violet-400 bg-violet-400 text-white shadow-sm",
        daigaku: "border border-blue-400 bg-blue-400 text-white shadow-sm",
        ouyou: "border border-amber-400 bg-amber-400 text-white shadow-sm",
        senmon: "border border-emerald-400 bg-emerald-400 text-white shadow-sm",
        ippan: "border border-fuchsia-400 bg-fuchsia-400 text-white shadow-sm",
    };

    if (pending && released)  return pendingReleasedByGroup[releaseGroup.value] ?? pendingReleasedByGroup.seiho;
    if (pending && !released) return "border border-rose-500 bg-rose-500 text-white shadow-sm";
    if (released)             return releasedByGroup[releaseGroup.value] ?? releasedByGroup.seiho;
    return "border border-slate-200 bg-slate-100 text-slate-500 hover:bg-slate-200";
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
        {
            purchase_scope: purchaseScope.value,
            purchase_state: purchaseState.value,
        },
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

const registrationSourceLabel = (user) => {
    if (user.registered_scope === "daigaku") return "生保大学";
    if (user.registered_scope === "ippan") return "一般課程";
    if (user.registered_scope === "senmon") return "専門課程";
    if (user.registered_scope === "ouyou") return "応用課程";
    if (user.registered_scope === "seiho") return "生保講座";
    return "-";
};

const registrationSourceClass = (user) => {
    if (user.registered_scope === "daigaku") return "bg-blue-50 text-blue-700";
    if (user.registered_scope === "ippan") return "bg-fuchsia-50 text-fuchsia-700";
    if (user.registered_scope === "senmon") return "bg-emerald-50 text-emerald-700";
    if (user.registered_scope === "ouyou") return "bg-amber-50 text-amber-700";
    if (user.registered_scope === "seiho") return "bg-violet-50 text-violet-700";
    return "bg-gray-100 text-gray-600";
};

const purchaseProductOptions = [
    { key: "seiho", label: "生保講座", countKey: "seiho_paid_count", className: "bg-violet-50 text-violet-700" },
    { key: "daigaku", label: "生保大学", countKey: "daigaku_paid_count", className: "bg-blue-50 text-blue-700" },
    { key: "ippan", label: "一般課程", countKey: "ippan_paid_count", className: "bg-fuchsia-50 text-fuchsia-700" },
    { key: "senmon", label: "専門課程", countKey: "senmon_paid_count", className: "bg-emerald-50 text-emerald-700" },
    { key: "ouyou", label: "応用課程", countKey: "ouyou_paid_count", className: "bg-amber-50 text-amber-700" },
    { key: "basic", label: "一般・専門・応用セット", countKey: "basic_paid_count", className: "bg-cyan-100 text-cyan-700" },
];

const purchasedProducts = (user) =>
    purchaseProductOptions.filter((product) => Number(user?.[product.countKey]) > 0);

const paginationLabel = (label) => {
    const value = String(label);
    if (value.includes("&laquo;")) return "前へ";
    if (value.includes("&raquo;")) return "次へ";
    return value;
};

const goToPage = (url) => {
    if (!url) return;
    router.visit(url, {
        preserveState: true,
        preserveScroll: true,
    });
};

const formatYen = (value) => {
    const amount = Number(value ?? 0);
    return new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "JPY",
        maximumFractionDigits: 0,
    }).format(Number.isFinite(amount) ? amount : 0);
};

const scopeLabel = (scope) => {
    if (scope === "seiho") return "生保講座";
    if (scope === "daigaku") return "生保大学";
    if (scope === "ippan") return "一般課程";
    if (scope === "senmon") return "専門課程";
    if (scope === "ouyou") return "応用課程";
    if (scope === "basic") return "一般・専門・応用セット";
    return scope || "-";
};

const scopeClass = (scope) => {
    if (scope === "seiho") return "bg-violet-50 text-violet-700";
    if (scope === "daigaku") return "bg-blue-50 text-blue-700";
    if (scope === "ouyou") return "bg-amber-50 text-amber-700";
    if (scope === "senmon") return "bg-emerald-50 text-emerald-700";
    if (scope === "ippan") return "bg-fuchsia-50 text-fuchsia-700";
    if (scope === "basic") return "bg-cyan-100 text-cyan-700";
    return "bg-gray-100 text-gray-600";
};

const releaseTheme = {
    seiho: {
        activeButton: "border-violet-500 bg-gradient-to-br from-violet-500 to-indigo-500 text-white shadow-md ring-1 ring-violet-300/60",
        activeTab: "border-violet-200 bg-violet-50 text-violet-700",
        progressBar: "bg-gradient-to-r from-violet-500 to-indigo-500",
    },
    daigaku: {
        activeButton: "border-blue-500 bg-gradient-to-br from-blue-500 to-cyan-500 text-white shadow-md ring-1 ring-blue-300/60",
        activeTab: "border-blue-200 bg-blue-50 text-blue-700",
        progressBar: "bg-gradient-to-r from-blue-500 to-cyan-500",
    },
    ouyou: {
        activeButton: "border-amber-500 bg-gradient-to-br from-amber-500 to-orange-500 text-white shadow-md ring-1 ring-amber-300/60",
        activeTab: "border-amber-200 bg-amber-50 text-amber-700",
        progressBar: "bg-gradient-to-r from-amber-500 to-orange-500",
    },
    senmon: {
        activeButton: "border-emerald-500 bg-gradient-to-br from-emerald-500 to-teal-500 text-white shadow-md ring-1 ring-emerald-300/60",
        activeTab: "border-emerald-200 bg-emerald-50 text-emerald-700",
        progressBar: "bg-gradient-to-r from-emerald-500 to-teal-500",
    },
    ippan: {
        activeButton: "border-fuchsia-500 bg-gradient-to-br from-fuchsia-500 to-pink-500 text-white shadow-md ring-1 ring-fuchsia-300/60",
        activeTab: "border-fuchsia-200 bg-fuchsia-50 text-fuchsia-700",
        progressBar: "bg-gradient-to-r from-fuchsia-500 to-pink-500",
    },
};

const currentReleaseTheme = computed(() => releaseTheme[releaseGroup.value] ?? releaseTheme.seiho);

const maxSalesCount = (rows) => {
    const list = Array.isArray(rows) ? rows : [];
    return list.reduce((max, row) => Math.max(max, Number(row?.salesCount ?? 0)), 0);
};

const barWidthPercent = (value, max) => {
    const v = Number(value ?? 0);
    const m = Number(max ?? 0);
    if (!Number.isFinite(v) || !Number.isFinite(m) || m <= 0) return 0;
    return Math.max(0, Math.min(100, (v / m) * 100));
};

const totalSalesCount = computed(() => Number(props.stats?.salesInsights?.salesCount ?? 0));

const ratioPercent = (value, total) => {
    const v = Number(value ?? 0);
    const t = Number(total ?? 0);
    if (!Number.isFinite(v) || !Number.isFinite(t) || t <= 0) return 0;
    return Math.round((v / t) * 1000) / 10;
};

const maxWeekdayCount = computed(() => maxSalesCount(props.stats?.salesInsights?.weekdaySales));
const peakWeekday = computed(() => {
    const rows = props.stats?.salesInsights?.weekdaySales ?? [];
    if (!rows.length) return null;
    return rows.reduce((a, b) => (Number(a.salesCount ?? 0) >= Number(b.salesCount ?? 0) ? a : b));
});

const hourlySalesBy2Hours = computed(() => {
    const rows = props.stats?.salesInsights?.hourlySales ?? [];
    const hourMap = new Map(rows.map((row) => [Number(row.hour), Number(row.salesCount ?? 0)]));

    const bins = [];
    for (let h = 0; h < 24; h += 2) {
        const count = (hourMap.get(h) ?? 0) + (hourMap.get(h + 1) ?? 0);
        bins.push({
            hourRange: `${h}〜${h + 2}`,
            salesCount: count,
        });
    }
    return bins;
});

const maxHourly2hCount = computed(() => maxSalesCount(hourlySalesBy2Hours.value));

const peakHour2h = computed(() => {
    const rows = hourlySalesBy2Hours.value;
    if (!rows.length) return null;
    return rows.reduce((a, b) => (Number(a.salesCount ?? 0) >= Number(b.salesCount ?? 0) ? a : b));
});
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
                    :class="isActiveMenu('sales')
                        ? 'border-purple-200 bg-purple-50 text-purple-700'
                        : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                    @click="activeTab = 'sales'"
                >
                    売上分析
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
                class="mb-4 grid grid-cols-2 gap-2.5 sm:mb-6 sm:gap-3 lg:grid-cols-4"
            >
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">総ユーザー数</p>
                    <p class="mt-1 text-xl font-bold text-gray-900 sm:text-2xl">
                        {{ stats.totalUsers }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">今月の新規登録数</p>
                    <p class="mt-1 text-xl font-bold text-gray-900 sm:text-2xl">
                        {{ stats.newUsersThisMonth }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">生保講座 売上件数</p>
                    <p class="mt-1 text-xl font-bold text-indigo-700 sm:text-2xl">
                        {{ stats.seihoSalesCount }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">生保大学 売上件数</p>
                    <p class="mt-1 text-xl font-bold text-blue-700 sm:text-2xl">
                        {{ stats.daigakuSalesCount }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">一般課程 売上件数</p>
                    <p class="mt-1 text-xl font-bold text-fuchsia-700 sm:text-2xl">
                        {{ stats.ippanSalesCount }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">専門課程 売上件数</p>
                    <p class="mt-1 text-xl font-bold text-emerald-700 sm:text-2xl">
                        {{ stats.senmonSalesCount }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">応用課程 売上件数</p>
                    <p class="mt-1 text-xl font-bold text-amber-700 sm:text-2xl">
                        {{ stats.ouyouSalesCount }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3 sm:p-4">
                    <p class="text-[11px] leading-tight text-gray-500 sm:text-xs">
                        <span class="sm:hidden">セット 売上件数</span>
                        <span class="hidden sm:inline">一般・専門・応用セット 売上件数</span>
                    </p>
                    <p class="mt-1 text-xl font-bold text-cyan-700 sm:text-2xl">
                        {{ stats.basicSalesCount }}
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

            <div
                v-if="activeTab === 'sales'"
                class="mt-6 rounded-xl border border-gray-100 bg-white p-4"
            >
                <div class="mb-3 flex flex-wrap items-end justify-between gap-2">
                    <h2 class="text-sm font-semibold text-gray-900">売上分析</h2>
                    <p class="text-xs text-gray-500">対象: {{ stats.salesInsights?.fromDate }} 以降</p>
                </div>

                <div class="mb-4 flex flex-wrap gap-2">
                    <button
                        v-for="tab in [
                            { key: 'overview', label: '概要' },
                            { key: 'scope', label: '商品別' },
                            { key: 'monthly', label: '月次' },
                            { key: 'weekday', label: '曜日' },
                            { key: 'hourly', label: '時間帯' },
                        ]"
                        :key="`sales-${tab.key}`"
                        type="button"
                        class="rounded-lg border px-3 py-1.5 text-xs font-semibold transition"
                        :class="salesTab === tab.key
                            ? 'border-purple-200 bg-purple-50 text-purple-700'
                            : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                        @click="salesTab = tab.key"
                    >
                        {{ tab.label }}
                    </button>
                </div>

                <div v-if="salesTab === 'overview'" class="space-y-3">
                    <div class="grid gap-3 sm:grid-cols-2">
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">売上件数</p>
                            <p class="mt-2 text-3xl font-extrabold text-slate-900">{{ stats.salesInsights?.salesCount ?? 0 }}</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">売上合計</p>
                            <p class="mt-2 text-3xl font-extrabold text-slate-900">{{ formatYen(stats.salesInsights?.totalAmount) }}</p>
                        </div>
                    </div>

                    <div class="grid gap-3 md:grid-cols-3">
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">今日</p>
                            <div class="mt-2 flex items-end justify-between">
                                <p class="text-lg font-bold text-slate-900">{{ formatYen(stats.salesInsights?.recentSales?.today?.totalAmount) }}</p>
                                <p class="text-xs font-semibold text-slate-500">{{ stats.salesInsights?.recentSales?.today?.salesCount ?? 0 }}件</p>
                            </div>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">昨日</p>
                            <div class="mt-2 flex items-end justify-between">
                                <p class="text-lg font-bold text-slate-900">{{ formatYen(stats.salesInsights?.recentSales?.yesterday?.totalAmount) }}</p>
                                <p class="text-xs font-semibold text-slate-500">{{ stats.salesInsights?.recentSales?.yesterday?.salesCount ?? 0 }}件</p>
                            </div>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">直近7日</p>
                            <div class="mt-2 flex items-end justify-between">
                                <p class="text-lg font-bold text-slate-900">{{ formatYen(stats.salesInsights?.recentSales?.last7days?.totalAmount) }}</p>
                                <p class="text-xs font-semibold text-slate-500">{{ stats.salesInsights?.recentSales?.last7days?.salesCount ?? 0 }}件</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="salesTab === 'scope'" class="mt-2 rounded-lg border border-gray-100">
                    <div class="rounded-lg border border-gray-100">
                        <div class="border-b border-gray-100 px-3 py-2 text-xs font-semibold text-gray-700">商品別売上</div>
                        <div>
                            <table class="min-w-full text-xs">
                                <thead class="bg-gray-50 text-left text-gray-500">
                                    <tr>
                                        <th class="px-3 py-2">商品</th>
                                        <th class="px-3 py-2">件数</th>
                                        <th class="px-3 py-2">売上</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="row in stats.salesInsights?.scopeBreakdown ?? []"
                                        :key="`scope-${row.scope}`"
                                        class="border-t border-gray-100"
                                    >
                                        <td class="px-3 py-2 text-gray-700">
                                            <span class="rounded-full px-2 py-1 text-xs font-semibold" :class="scopeClass(row.scope)">
                                                {{ scopeLabel(row.scope) }}
                                            </span>
                                        </td>
                                        <td class="px-3 py-2 text-gray-700">{{ row.salesCount }}</td>
                                        <td class="px-3 py-2 text-gray-700">{{ formatYen(row.totalAmount) }}</td>
                                    </tr>
                                    <tr v-if="(stats.salesInsights?.scopeBreakdown ?? []).length === 0">
                                        <td colspan="3" class="px-3 py-5 text-center text-gray-500">データがありません。</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div v-if="salesTab === 'monthly'" class="mt-2 rounded-lg border border-gray-100">
                    <div class="rounded-lg border border-gray-100">
                        <div class="border-b border-gray-100 px-3 py-2 text-xs font-semibold text-gray-700">月次売上</div>
                        <div>
                            <table class="min-w-full text-xs">
                                <thead class="bg-gray-50 text-left text-gray-500">
                                    <tr>
                                        <th class="px-3 py-2">月</th>
                                        <th class="px-3 py-2">件数</th>
                                        <th class="px-3 py-2">売上</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="row in stats.salesInsights?.monthlySales ?? []"
                                        :key="`month-${row.month}`"
                                        class="border-t border-gray-100"
                                    >
                                        <td class="px-3 py-2 text-gray-700">{{ row.month }}</td>
                                        <td class="px-3 py-2 text-gray-700">{{ row.salesCount }}</td>
                                        <td class="px-3 py-2 text-gray-700">{{ formatYen(row.totalAmount) }}</td>
                                    </tr>
                                    <tr v-if="(stats.salesInsights?.monthlySales ?? []).length === 0">
                                        <td colspan="3" class="px-3 py-5 text-center text-gray-500">データがありません。</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div v-if="salesTab === 'weekday'" class="mt-2 rounded-lg border border-gray-100 p-3">
                    <div class="rounded-lg border border-gray-100 p-3">
                        <div class="mb-2 flex items-center justify-between text-xs">
                            <span class="font-semibold text-gray-700">曜日別売上件数</span>
                            <span v-if="peakWeekday" class="rounded-full bg-indigo-50 px-2 py-1 font-semibold text-indigo-700">
                                ピーク: {{ peakWeekday.day }}曜 {{ peakWeekday.salesCount }}件
                            </span>
                        </div>
                        <div class="space-y-2">
                            <div
                                v-for="row in stats.salesInsights?.weekdaySales ?? []"
                                :key="`weekday-${row.day}`"
                                class="grid grid-cols-[2rem_1fr_5rem_3rem] items-center gap-2"
                            >
                                <div class="text-xs text-gray-600">{{ row.day }}</div>
                                <div class="h-3 rounded bg-gray-100">
                                    <div
                                        class="h-3 rounded bg-indigo-500"
                                        :style="{ width: `${barWidthPercent(row.salesCount, maxWeekdayCount)}%` }"
                                    ></div>
                                </div>
                                <div class="text-right text-[11px] text-gray-500">{{ ratioPercent(row.salesCount, totalSalesCount) }}%</div>
                                <div class="text-right text-xs text-gray-700">{{ row.salesCount }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="salesTab === 'hourly'" class="mt-2 rounded-lg border border-gray-100 p-3">
                    <div class="rounded-lg border border-gray-100 p-3">
                        <div class="mb-2 flex items-center justify-between text-xs">
                            <span class="font-semibold text-gray-700">時間帯（2h）</span>
                            <span v-if="peakHour2h" class="rounded-full bg-emerald-50 px-2 py-1 font-semibold text-emerald-700">
                                {{ peakHour2h.hourRange }}時・{{ peakHour2h.salesCount }}件
                            </span>
                        </div>
                        <div class="space-y-1.5">
                            <div
                                v-for="row in hourlySalesBy2Hours"
                                :key="`hour-${row.hourRange}`"
                                class="grid grid-cols-[4rem_1fr_5rem_3rem] items-center gap-2"
                            >
                                <div class="text-xs text-gray-600">{{ row.hourRange }}時</div>
                                <div class="h-3 rounded bg-gray-100">
                                    <div
                                        class="flex h-3 items-center justify-end rounded bg-emerald-500 pr-1"
                                        :style="{ width: `${barWidthPercent(row.salesCount, maxHourly2hCount)}%` }"
                                    >
                                        <span v-if="row.salesCount > 0" class="text-[9px] font-semibold leading-none text-white">{{ row.salesCount }}</span>
                                    </div>
                                </div>
                                <div class="text-right text-[11px] text-gray-500">{{ ratioPercent(row.salesCount, totalSalesCount) }}%</div>
                                <div class="text-right text-xs text-gray-700">{{ row.salesCount }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <template v-if="activeTab === 'users'">
            <form
                @submit.prevent="submitSearch"
                class="mb-4 grid gap-2 md:grid-cols-[1.2fr_1fr_auto]"
            >
                <select
                    v-model="purchaseScope"
                    class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-800 focus:border-purple-300 focus:outline-none"
                >
                    <option
                        v-for="option in purchaseScopeOptions"
                        :key="option.value"
                        :value="option.value"
                    >
                        {{ option.label }}
                    </option>
                </select>
                <select
                    v-model="purchaseState"
                    class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-800 focus:border-purple-300 focus:outline-none"
                >
                    <option value="all">購入状況: すべて</option>
                    <option value="purchased">購入あり</option>
                    <option value="unpurchased">未購入</option>
                </select>
                <button
                    type="submit"
                    class="whitespace-nowrap rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-500"
                >
                    絞り込み
                </button>
            </form>

            <div class="overflow-x-auto rounded-xl border border-gray-100 bg-white hidden md:block">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 text-left text-gray-600">
                        <tr>
                            <th class="px-3 py-2">ID</th>
                            <th class="px-3 py-2">メール</th>
                            <th class="px-3 py-2">登録経由</th>
                            <th class="px-3 py-2">購入商品</th>
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
                                    :class="registrationSourceClass(user)"
                                >
                                    {{ registrationSourceLabel(user) }}
                                </span>
                            </td>
                            <td class="px-3 py-2 text-gray-700">
                                <div class="flex max-w-[340px] flex-wrap gap-1.5">
                                    <span
                                        v-for="product in purchasedProducts(user)"
                                        :key="`${user.id}-${product.key}`"
                                        class="rounded-full px-2 py-1 text-xs font-semibold"
                                        :class="product.className"
                                    >
                                        {{ product.label }}
                                    </span>
                                    <span
                                        v-if="purchasedProducts(user).length === 0"
                                        class="rounded-full bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-600"
                                    >
                                        未購入
                                    </span>
                                </div>
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
                                colspan="6"
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
                    class="rounded-xl border border-gray-100 bg-white p-2.5"
                >
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-1.5">
                            <p class="text-xs text-gray-500">ID: {{ user.id }}</p>
                            <span
                                class="rounded-full px-2 py-0.5 text-[10px] font-semibold"
                                :class="registrationSourceClass(user)"
                            >
                                {{ registrationSourceLabel(user) }}
                            </span>
                        </div>
                        <span
                            class="rounded-full px-2 py-0.5 text-[10px] font-semibold"
                            :class="purchasedProducts(user).length > 0 ? 'bg-emerald-50 text-emerald-700' : 'bg-gray-100 text-gray-600'"
                        >
                            {{ purchasedProducts(user).length > 0 ? "購入あり" : "未購入" }}
                        </span>
                    </div>
                    <p class="mt-1 text-sm font-semibold leading-snug text-gray-900 break-all">
                        {{ user.email }}
                    </p>

                    <div class="mt-1.5 grid gap-0.5 text-[11px] text-gray-600">
                        <p>登録日: {{ formatDateTime(user.created_at) }}</p>
                        <p>最終購入: {{ formatDateTime(user.last_paid_at) }}</p>
                    </div>
                    <div v-if="purchasedProducts(user).length > 0" class="mt-1.5 flex flex-wrap gap-1">
                        <span
                            v-for="product in purchasedProducts(user)"
                            :key="`mobile-${user.id}-${product.key}`"
                            class="rounded-full px-2 py-0.5 text-[11px] font-semibold"
                            :class="product.className"
                        >
                            {{ product.label }}
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

            <div
                v-if="users.links && users.links.length > 3"
                class="mt-4 flex flex-col gap-3 rounded-xl border border-gray-100 bg-white px-4 py-3 sm:flex-row sm:items-center sm:justify-between"
            >
                <p class="text-xs text-gray-500">
                    {{ users.from ?? 0 }}〜{{ users.to ?? 0 }}件 / 全{{ users.total ?? 0 }}件
                </p>
                <div class="flex flex-wrap gap-1">
                    <button
                        v-for="link in users.links"
                        :key="`${link.label}-${link.url}`"
                        type="button"
                        class="min-w-[2.25rem] rounded-lg border px-3 py-1.5 text-xs font-semibold transition"
                        :class="[
                            link.active
                                ? 'border-purple-500 bg-purple-600 text-white'
                                : link.url
                                  ? 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'
                                  : 'cursor-not-allowed border-gray-100 bg-gray-50 text-gray-300',
                        ]"
                        :disabled="!link.url"
                        @click="goToPage(link.url)"
                    >
                        {{ paginationLabel(link.label) }}
                    </button>
                </div>
            </div>
            </template>

            <!-- リリース管理タブ -->
            <template v-if="activeTab === 'releases'">
                <!-- 全体進捗 -->
                <div class="mb-4 rounded-2xl border border-slate-200 bg-gradient-to-b from-white to-slate-50/60 px-5 py-4 shadow-sm">
                    <div class="mb-2 flex flex-wrap items-center justify-between gap-2">
                        <span class="text-sm font-semibold text-slate-800">全コース合計</span>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-700">
                            進捗 {{ totalStats.total === 0 ? 0 : Math.round(totalStats.released / totalStats.total * 100) }}%
                        </span>
                    </div>
                    <div class="mb-2 flex flex-wrap items-center gap-3 text-xs text-slate-600">
                        <span class="rounded-md bg-white px-2 py-1 ring-1 ring-slate-200">完成 <b class="text-slate-900">{{ totalStats.released }}</b></span>
                        <span class="rounded-md bg-white px-2 py-1 ring-1 ring-slate-200">全体 <b class="text-slate-900">{{ totalStats.total }}</b></span>
                        <span class="rounded-md bg-white px-2 py-1 ring-1 ring-slate-200">残り <b class="text-slate-900">{{ totalStats.total - totalStats.released }}</b></span>
                    </div>
                    <div class="h-2.5 w-full overflow-hidden rounded-full bg-slate-200">
                        <div
                            class="h-full rounded-full bg-gradient-to-r from-slate-500 to-slate-700 transition-all duration-300"
                            :style="{ width: `${totalStats.total === 0 ? 0 : Math.round(totalStats.released / totalStats.total * 100)}%` }"
                        />
                    </div>
                </div>
                <!-- コース選択 -->
                <div class="mb-3 flex flex-wrap gap-2">
                    <button
                        v-for="({ key, label }) in [
                            { key: 'seiho',   label: '生保講座' },
                            { key: 'daigaku', label: '生保大学' },
                            { key: 'ouyou',   label: '応用課程' },
                            { key: 'senmon',  label: '専門課程' },
                            { key: 'ippan',   label: '一般課程' },
                        ]"
                        :key="key"
                        type="button"
                        class="flex items-center gap-2 rounded-xl border px-4 py-2 text-sm font-semibold transition"
                        :class="releaseGroup === key
                            ? releaseTheme[key].activeButton
                            : 'border-slate-200 bg-white text-slate-600 hover:border-slate-300 hover:bg-slate-50'"
                        @click="releaseGroup = key"
                    >
                        {{ label }}
                    </button>
                </div>

                <!-- 選択中コースの進捗バー -->
                <div class="mb-4 rounded-xl border border-slate-200 bg-white px-4 py-3">
                    <div class="mb-2 flex flex-wrap items-center justify-between gap-2">
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-700">
                            進捗 {{ groupStats[releaseGroup].total === 0 ? 0 : Math.round(groupStats[releaseGroup].released / groupStats[releaseGroup].total * 100) }}%
                        </span>
                    </div>
                    <div class="mb-2 flex flex-wrap items-center gap-3 text-xs text-slate-600">
                        <span class="rounded-md bg-white px-2 py-1 ring-1 ring-slate-200">完成 <b class="text-slate-900">{{ groupStats[releaseGroup].released }}</b></span>
                        <span class="rounded-md bg-white px-2 py-1 ring-1 ring-slate-200">全体 <b class="text-slate-900">{{ groupStats[releaseGroup].total }}</b></span>
                        <span class="rounded-md bg-white px-2 py-1 ring-1 ring-slate-200">残り <b class="text-slate-900">{{ groupStats[releaseGroup].total - groupStats[releaseGroup].released }}</b></span>
                    </div>
                    <div class="h-2.5 w-full overflow-hidden rounded-full bg-slate-200">
                        <div
                            class="h-full rounded-full transition-all duration-300"
                            :class="currentReleaseTheme.progressBar"
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
                            class="rounded-xl border px-3 py-1.5 text-sm font-semibold transition"
                            :class="releaseSeihoTab === s.key
                                ? currentReleaseTheme.activeTab
                                : 'border-slate-200 bg-white text-slate-600 hover:bg-slate-50'"
                            @click="releaseSeihoTab = s.key"
                        >{{ s.label }}</button>
                    </div>
                    <div v-if="activeSeihoSubject" class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50 text-left text-slate-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th v-for="f in SEIHO_FORMS" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="year in SEIHO_YEARS" :key="year" class="border-t border-slate-100 hover:bg-slate-50/70">
                                        <td class="border-r border-slate-100 px-4 py-2.5 font-bold text-slate-800">{{ year }}</td>
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
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50 text-left text-slate-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th class="px-4 py-2.5 font-semibold">月</th>
                                        <th v-for="f in IPPAN_FORMS" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="year in IPPAN_YEARS" :key="year">
                                        <tr v-for="(period, pIdx) in IPPAN_PERIODS" :key="`${year}-${period.key}`" class="border-t border-slate-100 hover:bg-slate-50/70">
                                            <td v-if="pIdx === 0" :rowspan="IPPAN_PERIODS.length" class="align-middle border-r border-slate-100 px-4 py-2.5 font-bold text-slate-800">{{ year }}</td>
                                            <td class="whitespace-nowrap border-r border-slate-100 px-4 py-2.5 text-slate-500">{{ period.label }}</td>
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
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50 text-left text-slate-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th class="px-4 py-2.5 font-semibold">月</th>
                                        <th v-for="f in ['a','b','c','d']" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="year in SENMON_YEARS" :key="year">
                                        <tr v-for="(period, pIdx) in SENMON_PERIODS" :key="`${year}-${period.key}`" class="border-t border-slate-100 hover:bg-slate-50/70">
                                            <td v-if="pIdx === 0" :rowspan="SENMON_PERIODS.length" class="align-middle border-r border-slate-100 px-4 py-2.5 font-bold text-slate-800">{{ year }}</td>
                                            <td class="whitespace-nowrap border-r border-slate-100 px-4 py-2.5 text-slate-500">{{ period.label }}</td>
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
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50 text-left text-slate-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th class="px-4 py-2.5 font-semibold">月</th>
                                        <th v-for="f in ['a','b','c','d']" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="year in OUYOU_YEARS" :key="year">
                                        <tr v-for="(period, pIdx) in OUYOU_PERIODS" :key="`${year}-${period.key}`" class="border-t border-slate-100 hover:bg-slate-50/70">
                                            <td v-if="pIdx === 0" :rowspan="OUYOU_PERIODS.length" class="align-middle border-r border-slate-100 px-4 py-2.5 font-bold text-slate-800">{{ year }}</td>
                                            <td class="whitespace-nowrap border-r border-slate-100 px-4 py-2.5 text-slate-500">{{ period.label }}</td>
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
                            class="rounded-xl border px-3 py-1.5 text-sm font-semibold transition"
                            :class="releaseDaigakuTab === s.key
                                ? currentReleaseTheme.activeTab
                                : 'border-slate-200 bg-white text-slate-600 hover:bg-slate-50'"
                            @click="releaseDaigakuTab = s.key"
                        >{{ s.label }}</button>
                    </div>
                    <div v-if="activeDaigakuSubject" class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50 text-left text-slate-600">
                                    <tr>
                                        <th class="px-4 py-2.5 font-semibold">年度</th>
                                        <th v-for="f in DAIGAKU_FORMS" :key="f" class="px-4 py-2.5 font-semibold text-center uppercase">{{ f }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="year in DAIGAKU_YEARS" :key="year" class="border-t border-slate-100 hover:bg-slate-50/70">
                                        <td class="border-r border-slate-100 px-4 py-2.5 font-bold text-slate-800">{{ year }}</td>
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

                <div class="mt-3 px-1 text-sm text-slate-400">
                    ✓ = 公開中　– = 非公開　クリックで切り替え
                </div>

                <!-- 保存バー -->
                <div
                    v-if="hasPending"
                    class="mt-4 flex flex-col gap-2 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 sm:flex-row sm:items-center sm:justify-between"
                >
                    <span class="text-sm font-medium text-slate-700">
                        {{ Object.keys(pendingChanges).length }}件の未保存の変更があります
                    </span>
                    <div class="flex gap-2">
                        <button
                            type="button"
                            class="flex-1 rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-sm font-semibold text-slate-600 hover:bg-slate-100 sm:flex-none"
                            @click="resetReleases"
                        >リセット</button>
                        <button
                            type="button"
                            class="flex-1 rounded-lg bg-slate-900 px-4 py-1.5 text-sm font-semibold text-white hover:bg-slate-800 sm:flex-none"
                            @click="saveReleases"
                        >保存する</button>
                    </div>
                </div>
            </template>
        </div>
    </AdminLayout>
</template>
