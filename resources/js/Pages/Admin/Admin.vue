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
const userSearch = ref(props.filters?.user_search ?? "");
const purchaseDateFrom = ref(props.filters?.purchase_date_from ?? "");
const purchaseDateTo = ref(props.filters?.purchase_date_to ?? "");
const activeTab = ref("dashboard");
const salesTab = ref("overview");
const salesScopeFilter = ref("all");
const overviewPeriodFilter = ref(String(new Date().getFullYear()));
const dailyCalendarMonthKey = ref("");
const adminPurchaseSaving = ref({});
const adminPurchaseDrafts = ref({});
const page = usePage();

const currentYmd = () => {
    const today = new Date();
    const y = today.getFullYear();
    const m = `${today.getMonth() + 1}`.padStart(2, "0");
    const d = `${today.getDate()}`.padStart(2, "0");
    return `${y}-${m}-${d}`;
};

const currentYm = () => currentYmd().slice(0, 7);

const adsenseForm = ref({
    revenue_month: currentYm(),
    amount_yen: "",
});
const adsenseSaving = ref(false);

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
const adminPersonalRoute = computed(() => "admin.personal.index");

const isActiveMenu = (key) => activeTab.value === key;

const adminPurchaseRoute = computed(() =>
    isDaigakuAdmin.value
        ? "daigaku.admin.admins.purchaseScopes.update"
        : "admin.admins.purchaseScopes.update",
);

const adsenseStoreRoute = computed(() =>
    isDaigakuAdmin.value ? "daigaku.admin.adsenseRevenues.store" : "admin.adsenseRevenues.store",
);

const adsenseDeleteRoute = computed(() =>
    isDaigakuAdmin.value ? "daigaku.admin.adsenseRevenues.delete" : "admin.adsenseRevenues.delete",
);

const adminScopeKeys = ["seiho", "daigaku", "ouyou", "senmon", "ippan", "basic"];

const adminScopeOptions = [
    { key: "seiho", label: "生保講座", badgeClass: "bg-violet-50 text-violet-700" },
    { key: "daigaku", label: "生保大学", badgeClass: "bg-blue-50 text-blue-700" },
    { key: "ouyou", label: "応用課程", badgeClass: "bg-amber-50 text-amber-700" },
    { key: "senmon", label: "専門課程", badgeClass: "bg-emerald-50 text-emerald-700" },
    { key: "ippan", label: "一般課程", badgeClass: "bg-fuchsia-50 text-fuchsia-700" },
    { key: "basic", label: "セット", badgeClass: "bg-cyan-100 text-cyan-700" },
];

const adminInitialScopes = (admin) => ({
    seiho: !!admin.is_seiho_premium,
    daigaku: !!admin.is_daigaku_premium,
    ouyou: Number(admin.ouyou_paid_count ?? 0) > 0,
    senmon: Number(admin.senmon_paid_count ?? 0) > 0,
    ippan: Number(admin.ippan_paid_count ?? 0) > 0,
    basic: Number(admin.basic_paid_count ?? 0) > 0,
});

const ensureAdminDraft = (admin) => {
    const key = String(admin.id);
    if (!adminPurchaseDrafts.value[key]) {
        adminPurchaseDrafts.value[key] = adminInitialScopes(admin);
    }
    return adminPurchaseDrafts.value[key];
};

const isAdminScopeChecked = (admin, scopeKey) => {
    const draft = ensureAdminDraft(admin);
    return !!draft?.[scopeKey];
};

const setAdminScopeChecked = (admin, scopeKey, checked) => {
    const key = String(admin.id);
    const draft = ensureAdminDraft(admin);
    adminPurchaseDrafts.value = {
        ...adminPurchaseDrafts.value,
        [key]: {
            ...draft,
            [scopeKey]: !!checked,
        },
    };
};

const saveAdminScopes = (admin) => {
    const key = String(admin.id);
    const draft = ensureAdminDraft(admin);
    adminPurchaseSaving.value = { ...adminPurchaseSaving.value, [key]: true };

    router.post(
        route(adminPurchaseRoute.value, { userId: admin.id }),
        { scopes: draft },
        {
            preserveScroll: true,
            onSuccess: () => {
                activeTab.value = 'dashboard';
                router.visit(route(adminIndexRoute.value), {
                    preserveState: false,
                    preserveScroll: true,
                    replace: true,
                });
            },
            onFinish: () => {
                const next = { ...adminPurchaseSaving.value };
                delete next[key];
                adminPurchaseSaving.value = next;
            },
        },
    );
};

const submitSearch = () => {
    router.get(
        route(adminIndexRoute.value),
        {
            purchase_scope: purchaseScope.value,
            purchase_state: purchaseState.value,
            user_search: userSearch.value.trim(),
            purchase_date_from: purchaseDateFrom.value,
            purchase_date_to: purchaseDateTo.value,
        },
        { preserveState: true, replace: true },
    );
};

const resetSearch = () => {
    purchaseScope.value = "all";
    purchaseState.value = "all";
    userSearch.value = "";
    purchaseDateFrom.value = "";
    purchaseDateTo.value = "";
    submitSearch();
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

const formatNumber = (value) => {
    const amount = Number(value ?? 0);
    return new Intl.NumberFormat("ja-JP").format(Number.isFinite(amount) ? amount : 0);
};

const formatCalendarAmount = (value) => {
    const amount = Number(value ?? 0);
    if (!Number.isFinite(amount) || amount <= 0) return "0";
    return String(Math.round(amount));
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

const scopeShortLabel = (scope) => {
    if (scope === "seiho") return "講座";
    if (scope === "daigaku") return "大学";
    if (scope === "ippan") return "一般";
    if (scope === "senmon") return "専門";
    if (scope === "ouyou") return "応用";
    if (scope === "basic") return "セット";
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

const salesInsights = computed(() => props.stats?.salesInsights ?? {});
const examResultStats = computed(() => salesInsights.value?.examResultStats ?? {});
const examResultSummary = computed(() => examResultStats.value?.summary ?? {});
const examResultScopeSummary = computed(() => examResultStats.value?.scopeSummary ?? []);
const examResultSubjectSummary = computed(() => examResultStats.value?.subjectSummary ?? []);
const examResultRecentEntries = computed(() => examResultStats.value?.recentEntries ?? []);
const pageViewSummary = computed(() => salesInsights.value?.pageViewSummary ?? {});
const dailyPageViews = computed(() => salesInsights.value?.dailyPageViews ?? []);
const premiumUsageToday = computed(() => salesInsights.value?.premiumUsageToday ?? {});
const premiumUsageSummary = computed(() => premiumUsageToday.value?.summary ?? {});
const premiumUsageScopeSummary = computed(() => premiumUsageToday.value?.scopeSummary ?? []);
const premiumUsageUsers = computed(() => premiumUsageToday.value?.users ?? []);
const adsenseRevenue = computed(() => salesInsights.value?.adsenseRevenue ?? {});
const adsenseRevenueSummary = computed(() => adsenseRevenue.value?.summary ?? {});
const adsenseRevenueMonthly = computed(() => adsenseRevenue.value?.monthly ?? []);
const adsenseRevenueDaily = computed(() => adsenseRevenue.value?.daily ?? []);

const premiumUsageForScope = (scope) => {
    const row = premiumUsageScopeSummary.value.find((item) => item?.scope === scope);

    return row ?? {
        scope,
        views: 0,
        users: 0,
        sessions: 0,
        premiumViews: 0,
        blockedViews: 0,
    };
};

const subjectLabel = (scope, subjectKey) => {
    const source = scope === "daigaku" ? DAIGAKU_SUBJECTS : SEIHO_SUBJECTS;
    return source.find((subject) => subject.key === subjectKey)?.label ?? subjectKey;
};

const salesScopeOptions = [
    { value: "all", label: "全試験" },
    { value: "seiho", label: "生保講座" },
    { value: "daigaku", label: "生保大学" },
    { value: "ouyou", label: "応用課程" },
    { value: "senmon", label: "専門課程" },
    { value: "ippan", label: "一般課程" },
    { value: "basic", label: "セット" },
];

const groupSalesRows = (rows, keyName) => {
    const map = new Map();
    for (const row of rows ?? []) {
        const key = String(row?.[keyName] ?? "");
        if (!key) continue;
        const prev = map.get(key) ?? { [keyName]: key, salesCount: 0, totalAmount: 0 };
        prev.salesCount += Number(row?.salesCount ?? 0);
        prev.totalAmount += Number(row?.totalAmount ?? 0);
        map.set(key, prev);
    }
    return Array.from(map.values()).sort((a, b) => String(a[keyName]).localeCompare(String(b[keyName])));
};

const filteredScopeBreakdown = computed(() => {
    const rows = salesInsights.value?.scopeBreakdown ?? [];
    if (salesScopeFilter.value === "all") return rows;
    return rows.filter((row) => row.scope === salesScopeFilter.value);
});

const filteredDailySales = computed(() => {
    const rows = salesInsights.value?.dailySalesByScope ?? [];
    const targetRows = salesScopeFilter.value === "all"
        ? rows
        : rows.filter((row) => row.scope === salesScopeFilter.value);
    return groupSalesRows(targetRows, "day");
});

const monthlyBreakdownScopes = new Set(["seiho", "daigaku"]);

const monthlySalesWithBreakdown = computed(() => {
    const rows = salesInsights.value?.monthlySalesByScope ?? [];
    const targetRows = salesScopeFilter.value === "all"
        ? rows
        : rows.filter((row) => row.scope === salesScopeFilter.value);
    const scopeOrder = new Map(salesScopeOptions.map((option, index) => [option.value, index]));
    const map = new Map();

    for (const row of targetRows) {
        const month = String(row?.month ?? "");
        const scope = String(row?.scope ?? "");
        if (!month || !scope) continue;

        const entry = map.get(month) ?? {
            month,
            salesCount: 0,
            totalAmount: 0,
            breakdown: [],
        };

        const salesCount = Number(row?.salesCount ?? 0);
        const totalAmount = Number(row?.totalAmount ?? 0);

        entry.salesCount += Number.isFinite(salesCount) ? salesCount : 0;
        entry.totalAmount += Number.isFinite(totalAmount) ? totalAmount : 0;
        if (monthlyBreakdownScopes.has(scope)) {
            entry.breakdown.push({
                scope,
                salesCount: Number.isFinite(salesCount) ? salesCount : 0,
                totalAmount: Number.isFinite(totalAmount) ? totalAmount : 0,
            });
        }

        map.set(month, entry);
    }

    return Array.from(map.values())
        .map((row) => ({
            ...row,
            breakdown: row.breakdown.sort((a, b) => {
                const aOrder = scopeOrder.get(a.scope) ?? 999;
                const bOrder = scopeOrder.get(b.scope) ?? 999;
                if (aOrder !== bOrder) return aOrder - bOrder;
                return a.scope.localeCompare(b.scope);
            }),
        }))
        .sort((a, b) => a.month.localeCompare(b.month));
});

const overviewPeriodOptions = computed(() => {
    const years = new Set(
        (salesInsights.value?.yearlySalesByScope ?? [])
            .map((row) => Number(row?.year))
            .filter((year) => Number.isFinite(year)),
    );
    const currentYear = new Date().getFullYear();
    years.add(currentYear);

    return [
        ...Array.from(years)
            .sort((a, b) => b - a)
            .map((year) => ({ value: String(year), label: `${year}年` })),
        { value: "all", label: "全期間" },
    ];
});

const overviewPeriodScopeRows = computed(() => {
    if (overviewPeriodFilter.value === "all") {
        return salesInsights.value?.allTimeScopeBreakdown ?? [];
    }

    const year = Number(overviewPeriodFilter.value);
    return (salesInsights.value?.yearlySalesByScope ?? []).filter((row) => Number(row?.year) === year);
});

const filteredOverviewTotal = computed(() => {
    const rows = overviewPeriodScopeRows.value;
    const targetRows = salesScopeFilter.value === "all"
        ? rows
        : rows.filter((row) => row.scope === salesScopeFilter.value);

    return targetRows.reduce(
        (acc, row) => ({
            salesCount: acc.salesCount + Number(row?.salesCount ?? 0),
            totalAmount: acc.totalAmount + Number(row?.totalAmount ?? 0),
        }),
        { salesCount: 0, totalAmount: 0 },
    );
});

const overviewPeriodLabel = computed(() => {
    if (overviewPeriodFilter.value === "all") return "全期間";
    return `${overviewPeriodFilter.value}年`;
});

const filteredOverviewAdsenseAmount = computed(() => {
    if (salesScopeFilter.value !== "all") return 0;
    if (overviewPeriodFilter.value === "all") return Number(adsenseRevenueSummary.value?.totalAmount ?? 0);

    const yearPrefix = `${overviewPeriodFilter.value}-`;
    return adsenseRevenueMonthly.value.reduce((sum, row) => {
        const month = String(row?.month ?? "");
        if (!month.startsWith(yearPrefix)) return sum;
        return sum + Number(row?.totalAmount ?? 0);
    }, 0);
});

const filteredOverviewCombinedAmount = computed(() => (
    Number(filteredOverviewTotal.value?.totalAmount ?? 0) + filteredOverviewAdsenseAmount.value
));

const filteredRecentSales = computed(() => {
    if (salesScopeFilter.value === "all") return salesInsights.value?.recentSales ?? {};

    const rows = filteredDailySales.value;
    const byDay = new Map(rows.map((row) => [String(row.day), row]));
    const today = new Date();
    const asYmd = (d) => {
        const y = d.getFullYear();
        const m = `${d.getMonth() + 1}`.padStart(2, "0");
        const day = `${d.getDate()}`.padStart(2, "0");
        return `${y}-${m}-${day}`;
    };
    const sumDays = (days) =>
        days.reduce(
            (acc, dayKey) => {
                const row = byDay.get(dayKey);
                acc.salesCount += Number(row?.salesCount ?? 0);
                acc.totalAmount += Number(row?.totalAmount ?? 0);
                return acc;
            },
            { salesCount: 0, totalAmount: 0 },
        );

    const todayKey = asYmd(today);
    const yesterday = new Date(today);
    yesterday.setDate(yesterday.getDate() - 1);
    const yesterdayKey = asYmd(yesterday);

    return {
        today: sumDays([todayKey]),
        yesterday: sumDays([yesterdayKey]),
    };
});

const parseYmd = (value) => {
    const m = String(value ?? "").match(/^(\d{4})-(\d{2})-(\d{2})$/);
    if (!m) return null;
    return new Date(Number(m[1]), Number(m[2]) - 1, Number(m[3]));
};

const todayYmd = computed(() => currentYmd());

const submitAdsenseRevenue = () => {
    adsenseSaving.value = true;
    router.post(
        route(adsenseStoreRoute.value),
        {
            revenue_date: `${adsenseForm.value.revenue_month}-01`,
            amount_yen: Number(adsenseForm.value.amount_yen || 0),
            memo: "月次登録",
        },
        {
            preserveScroll: true,
            onFinish: () => {
                adsenseSaving.value = false;
            },
            onSuccess: () => {
                adsenseForm.value.amount_yen = "";
            },
        },
    );
};

const deleteAdsenseRevenue = (row) => {
    if (!window.confirm(`${String(row.date).slice(0, 7)} のAdSense売上を削除しますか？`)) return;
    router.delete(route(adsenseDeleteRoute.value, row.id), {
        preserveScroll: true,
    });
};

const dailyAvailableMonths = computed(() => {
    const rows = filteredDailySales.value ?? [];
    const set = new Set(
        rows
            .map((row) => String(row?.day ?? "").slice(0, 7))
            .filter((v) => /^\d{4}-\d{2}$/.test(v)),
    );
    return Array.from(set).sort();
});

const activeDailyMonthKey = computed(() => {
    const months = dailyAvailableMonths.value;
    if (!months.length) return "";
    if (months.includes(dailyCalendarMonthKey.value)) return dailyCalendarMonthKey.value;
    return months[months.length - 1];
});

const dailyCalendar = computed(() => {
    const rows = filteredDailySales.value ?? [];
    if (!rows.length) return null;
    const monthKey = activeDailyMonthKey.value;
    if (!monthKey) return null;
    const matched = monthKey.match(/^(\d{4})-(\d{2})$/);
    if (!matched) return null;
    const year = Number(matched[1]);
    const month = Number(matched[2]) - 1;
    const first = new Date(year, month, 1);
    const last = new Date(year, month + 1, 0);

    const monthRows = rows.filter((r) => String(r?.day ?? "").startsWith(`${monthKey}-`));
    const amountMap = new Map(monthRows.map((r) => [String(r.day), Number(r.totalAmount ?? 0)]));
    const maxAmount = Math.max(
        1,
        ...Array.from(amountMap.values()).map((v) => Number(v || 0)),
    );

    const cells = [];
    const startWeekday = first.getDay();
    for (let i = 0; i < startWeekday; i += 1) {
        cells.push({ empty: true });
    }

    for (let d = 1; d <= last.getDate(); d += 1) {
        const date = new Date(year, month, d);
        const ymd = `${year}-${`${month + 1}`.padStart(2, "0")}-${`${d}`.padStart(2, "0")}`;
        const amount = Number(amountMap.get(ymd) ?? 0);
        const intensity = Math.max(0, Math.min(1, amount / maxAmount));
        let level = 0;
        if (amount > 0) {
            if (intensity >= 0.75) level = 4;
            else if (intensity >= 0.5) level = 3;
            else if (intensity >= 0.25) level = 2;
            else level = 1;
        }
        cells.push({
            empty: false,
            day: d,
            ymd,
            amount,
            intensity,
            level,
            isToday: ymd === todayYmd.value,
        });
    }

    while (cells.length % 7 !== 0) {
        cells.push({ empty: true });
    }

    return {
        year,
        month: month + 1,
        cells,
        monthKey,
    };
});
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
                    :class="isActiveMenu('exam-results')
                        ? 'border-purple-200 bg-purple-50 text-purple-700'
                        : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'"
                    @click="activeTab = 'exam-results'"
                >
                    点数入力
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
                    問い合わせ
                    <span
                        v-if="newContactCount > 0"
                        class="inline-flex min-w-[1.25rem] items-center justify-center rounded-full bg-rose-500 px-1.5 py-0.5 text-[11px] font-bold leading-none text-white"
                    >
                        {{ newContactCount }}
                    </span>
                </Link>
                <Link
                    :href="route(adminPersonalRoute)"
                    class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-600 transition hover:bg-gray-50"
                >
                    個人管理
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
                <div class="flex flex-wrap items-start justify-between gap-2">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-900">管理者ユーザー</h2>
                        <p class="mt-1 text-xs text-gray-500">管理者ユーザーの購入状態もここで変更できます。</p>
                    </div>
                </div>
                <div v-if="admins.length" class="mt-3 space-y-3">
                    <div
                        v-for="admin in admins"
                        :key="`admin-${admin.id}`"
                        class="rounded-lg border border-amber-100 bg-amber-50/40 p-3"
                    >
                        <div class="flex flex-wrap items-start justify-between gap-2">
                            <div class="min-w-0">
                                <p class="break-all text-sm font-semibold text-gray-900">
                                    {{ admin.email }}
                                </p>
                                <p class="text-xs text-gray-500">ID: {{ admin.id }}</p>
                            </div>
                            <div class="flex shrink-0 items-center gap-2">
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
                                <button
                                    type="button"
                                    class="rounded-md border border-gray-200 bg-white px-3 py-1.5 text-xs font-semibold text-gray-700 hover:bg-gray-50 disabled:cursor-not-allowed disabled:opacity-60"
                                    :disabled="!!adminPurchaseSaving[String(admin.id)]"
                                    @click="saveAdminScopes(admin)"
                                >
                                    {{ adminPurchaseSaving[String(admin.id)] ? '保存中...' : '保存' }}
                                </button>
                            </div>
                        </div>

                        <div class="mt-3 grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-6">
                            <label
                                v-for="scope in adminScopeOptions"
                                :key="`${admin.id}-${scope.key}`"
                                class="flex cursor-pointer items-center gap-2 rounded-md border border-gray-200 bg-white px-2 py-1.5 text-xs"
                            >
                                <input
                                    :checked="isAdminScopeChecked(admin, scope.key)"
                                    type="checkbox"
                                    class="h-3.5 w-3.5 rounded border-gray-300 text-purple-600 focus:ring-purple-500"
                                    @change="setAdminScopeChecked(admin, scope.key, $event.target.checked)"
                                />
                                <span class="rounded-full px-1.5 py-0.5 font-semibold" :class="scope.badgeClass">{{ scope.label }}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <p v-else class="mt-2 text-sm text-gray-500">
                    管理者ユーザーは登録されていません。
                </p>
            </div>

            <div
                v-if="activeTab === 'exam-results'"
                class="mt-6 space-y-4"
            >
                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <div class="flex flex-wrap items-end justify-between gap-2">
                        <div>
                            <h2 class="text-sm font-semibold text-gray-900">点数入力状況</h2>
                            <p class="mt-1 text-xs text-gray-500">ユーザーが記録した本番試験の点数を確認できます。</p>
                        </div>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-3 lg:grid-cols-4">
                        <div class="rounded-xl bg-purple-50 p-4">
                            <p class="text-xs font-semibold text-purple-700">入力ユーザー</p>
                            <p class="mt-1 text-2xl font-bold text-gray-900">{{ formatNumber(examResultSummary.users) }}</p>
                        </div>
                        <div class="rounded-xl bg-gray-50 p-4">
                            <p class="text-xs font-semibold text-gray-500">入力件数</p>
                            <p class="mt-1 text-2xl font-bold text-gray-900">{{ formatNumber(examResultSummary.entries) }}</p>
                        </div>
                        <div class="rounded-xl bg-rose-50 p-4">
                            <p class="text-xs font-semibold text-rose-700">今日の入力</p>
                            <p class="mt-1 text-2xl font-bold text-gray-900">{{ formatNumber(examResultSummary.todayEntries) }}</p>
                        </div>
                        <div class="rounded-xl bg-blue-50 p-4">
                            <p class="text-xs font-semibold text-blue-700">平均点</p>
                            <p class="mt-1 text-2xl font-bold text-gray-900">
                                {{ examResultSummary.averageScore ?? '-' }}<span v-if="examResultSummary.averageScore !== null" class="ml-0.5 text-sm text-gray-500">点</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-4 lg:grid-cols-2">
                    <div class="rounded-xl border border-gray-100 bg-white p-4">
                        <h3 class="text-sm font-semibold text-gray-900">試験別</h3>
                        <div class="mt-3 space-y-2">
                            <div
                                v-for="row in examResultScopeSummary"
                                :key="`exam-scope-${row.scope}`"
                                class="flex items-center justify-between rounded-lg border border-gray-100 px-3 py-2"
                            >
                                <div>
                                    <span class="rounded-full px-2 py-1 text-xs font-semibold" :class="scopeClass(row.scope)">
                                        {{ scopeLabel(row.scope) }}
                                    </span>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p><span class="font-bold text-gray-900">{{ formatNumber(row.users) }}</span>人 / {{ formatNumber(row.entries) }}件</p>
                                    <p>平均 {{ row.averageScore ?? '-' }}点</p>
                                </div>
                            </div>
                            <p v-if="!examResultScopeSummary.length" class="text-sm text-gray-500">まだ入力はありません。</p>
                        </div>
                    </div>

                    <div class="rounded-xl border border-gray-100 bg-white p-4">
                        <h3 class="text-sm font-semibold text-gray-900">最近の入力</h3>
                        <div class="mt-3 space-y-2">
                            <div
                                v-for="entry in examResultRecentEntries"
                                :key="`exam-entry-${entry.id}`"
                                class="rounded-lg border border-gray-100 px-3 py-2"
                            >
                                <div class="flex items-start justify-between gap-3">
                                    <div class="min-w-0">
                                        <p class="truncate text-sm font-semibold text-gray-900">{{ subjectLabel(entry.scope, entry.subjectKey) }}</p>
                                        <p class="break-all text-xs text-gray-500">{{ entry.email }}</p>
                                    </div>
                                    <div class="shrink-0 text-right">
                                        <p class="text-sm font-bold text-rose-600">{{ entry.score }}点</p>
                                        <p class="text-[11px] text-gray-400">{{ formatDateTime(entry.updatedAt) }}</p>
                                    </div>
                                </div>
                                <div class="mt-1 flex flex-wrap items-center gap-2 text-[11px] text-gray-500">
                                    <span class="rounded-full px-2 py-0.5 font-semibold" :class="scopeClass(entry.scope)">{{ scopeShortLabel(entry.scope) }}</span>
                                    <span v-if="entry.examDate">受験日 {{ entry.examDate }}</span>
                                </div>
                            </div>
                            <p v-if="!examResultRecentEntries.length" class="text-sm text-gray-500">まだ入力はありません。</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <h3 class="text-sm font-semibold text-gray-900">科目別</h3>
                    <div class="mt-3 overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-100 text-left text-sm">
                            <thead>
                                <tr class="text-xs text-gray-500">
                                    <th class="whitespace-nowrap py-2 pr-4 font-semibold">試験</th>
                                    <th class="whitespace-nowrap py-2 pr-4 font-semibold">科目</th>
                                    <th class="whitespace-nowrap py-2 pr-4 text-right font-semibold">人数</th>
                                    <th class="whitespace-nowrap py-2 pr-4 text-right font-semibold">件数</th>
                                    <th class="whitespace-nowrap py-2 text-right font-semibold">平均点</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr
                                    v-for="row in examResultSubjectSummary"
                                    :key="`exam-subject-${row.scope}-${row.subjectKey}`"
                                    class="text-gray-700"
                                >
                                    <td class="whitespace-nowrap py-2 pr-4">
                                        <span class="rounded-full px-2 py-1 text-xs font-semibold" :class="scopeClass(row.scope)">
                                            {{ scopeShortLabel(row.scope) }}
                                        </span>
                                    </td>
                                    <td class="whitespace-nowrap py-2 pr-4 font-semibold text-gray-900">{{ subjectLabel(row.scope, row.subjectKey) }}</td>
                                    <td class="whitespace-nowrap py-2 pr-4 text-right">{{ formatNumber(row.users) }}</td>
                                    <td class="whitespace-nowrap py-2 pr-4 text-right">{{ formatNumber(row.entries) }}</td>
                                    <td class="whitespace-nowrap py-2 text-right">{{ row.averageScore ?? '-' }}点</td>
                                </tr>
                            </tbody>
                        </table>
                        <p v-if="!examResultSubjectSummary.length" class="py-4 text-sm text-gray-500">まだ入力はありません。</p>
                    </div>
                </div>
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
                            { key: 'adsense', label: '広告' },
                            { key: 'premium', label: '有料利用' },
                            { key: 'daily', label: '日次' },
                            { key: 'monthly', label: '月次' },
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

                <div v-if="salesTab === 'overview' || salesTab === 'daily'" class="mb-4 flex flex-wrap items-center gap-2">
                    <label for="sales-scope-filter" class="text-xs font-semibold text-gray-600">試験フィルター</label>
                    <select
                        id="sales-scope-filter"
                        v-model="salesScopeFilter"
                        class="min-w-[8.5rem] rounded-lg border border-gray-200 bg-white py-1.5 pl-2.5 pr-9 text-xs text-gray-700"
                    >
                        <option
                            v-for="option in salesScopeOptions"
                            :key="`sales-scope-${option.value}`"
                            :value="option.value"
                        >
                            {{ option.label }}
                        </option>
                    </select>
                    <template v-if="salesTab === 'overview'">
                        <label for="overview-period-filter" class="ml-0 text-xs font-semibold text-gray-600 sm:ml-2">期間</label>
                        <select
                            id="overview-period-filter"
                            v-model="overviewPeriodFilter"
                            class="min-w-[7rem] rounded-lg border border-gray-200 bg-white py-1.5 pl-2.5 pr-9 text-xs text-gray-700"
                        >
                            <option
                                v-for="option in overviewPeriodOptions"
                                :key="`overview-period-${option.value}`"
                                :value="option.value"
                            >
                                {{ option.label }}
                            </option>
                        </select>
                    </template>
                </div>

                <div v-if="salesTab === 'overview'" class="space-y-3">
                    <div class="grid gap-3 md:grid-cols-3">
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">{{ overviewPeriodLabel }} 売上件数</p>
                            <p class="mt-2 text-3xl font-extrabold text-slate-900">{{ filteredOverviewTotal.salesCount }}</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">{{ overviewPeriodLabel }} サイト売上</p>
                            <p class="mt-2 text-3xl font-extrabold text-slate-900">{{ formatYen(filteredOverviewTotal.totalAmount) }}</p>
                        </div>
                        <div v-if="salesScopeFilter === 'all'" class="rounded-xl border border-amber-100 bg-amber-50/60 p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-amber-700">{{ overviewPeriodLabel }} サイト＋広告</p>
                            <p class="mt-2 text-3xl font-extrabold text-slate-900">{{ formatYen(filteredOverviewCombinedAmount) }}</p>
                            <p class="mt-1 text-[11px] text-amber-700">広告 {{ formatYen(filteredOverviewAdsenseAmount) }} を含む</p>
                        </div>
                    </div>

                    <div class="grid gap-3 md:grid-cols-3">
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">今日</p>
                            <div class="mt-2 flex items-end justify-between">
                                <p class="text-lg font-bold text-slate-900">{{ formatYen(filteredRecentSales?.today?.totalAmount) }}</p>
                                <p class="text-xs font-semibold text-slate-500">{{ filteredRecentSales?.today?.salesCount ?? 0 }}件</p>
                            </div>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">昨日</p>
                            <div class="mt-2 flex items-end justify-between">
                                <p class="text-lg font-bold text-slate-900">{{ formatYen(filteredRecentSales?.yesterday?.totalAmount) }}</p>
                                <p class="text-xs font-semibold text-slate-500">{{ filteredRecentSales?.yesterday?.salesCount ?? 0 }}件</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div v-if="salesTab === 'adsense'" class="space-y-3">
                    <div class="grid gap-3 sm:grid-cols-2">
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">今年の広告売上</p>
                            <p class="mt-2 text-2xl font-extrabold text-slate-900">{{ formatYen(adsenseRevenueSummary?.yearAmount) }}</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">広告売上合計</p>
                            <p class="mt-2 text-2xl font-extrabold text-slate-900">{{ formatYen(adsenseRevenueSummary?.totalAmount) }}</p>
                        </div>
                    </div>

                    <div class="rounded-xl border border-amber-100 bg-amber-50/40 p-4">
                        <div class="mb-3">
                            <p class="text-xs font-semibold text-amber-900">Google AdSense 売上登録</p>
                            <p class="text-[11px] text-amber-700">年月と金額だけ登録します。同じ年月は上書きされます。</p>
                        </div>
                        <form class="grid gap-3 md:grid-cols-[10rem_10rem_auto]" @submit.prevent="submitAdsenseRevenue">
                            <div>
                                <label class="block text-[11px] font-semibold text-gray-600">年月</label>
                                <input
                                    v-model="adsenseForm.revenue_month"
                                    type="month"
                                    class="mt-1 w-full rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700"
                                    required
                                />
                            </div>
                            <div>
                                <label class="block text-[11px] font-semibold text-gray-600">金額（円）</label>
                                <input
                                    v-model="adsenseForm.amount_yen"
                                    type="number"
                                    min="0"
                                    inputmode="numeric"
                                    class="mt-1 w-full rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700"
                                    required
                                />
                            </div>
                            <div class="flex items-end">
                                <button
                                    type="submit"
                                    class="w-full rounded-lg bg-amber-500 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600 disabled:cursor-not-allowed disabled:opacity-50 md:w-auto"
                                    :disabled="adsenseSaving"
                                >
                                    {{ adsenseSaving ? '保存中' : '保存' }}
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="rounded-lg border border-gray-100">
                        <div class="border-b border-gray-100 px-3 py-2 text-xs font-semibold text-gray-700">月別広告売上</div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-xs">
                                <thead class="bg-gray-50 text-left text-gray-500">
                                    <tr>
                                        <th class="px-3 py-2">年月</th>
                                        <th class="px-3 py-2">広告売上</th>
                                        <th class="px-3 py-2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="row in adsenseRevenueDaily"
                                        :key="`adsense-month-${row.id}`"
                                        class="border-t border-gray-100"
                                    >
                                        <td class="whitespace-nowrap px-3 py-2 font-mono text-[11px] text-gray-700">{{ String(row.date).slice(0, 7) }}</td>
                                        <td class="whitespace-nowrap px-3 py-2 text-gray-700">{{ formatYen(row.amountYen) }}</td>
                                        <td class="whitespace-nowrap px-3 py-2 text-right">
                                            <button
                                                type="button"
                                                class="text-[11px] font-semibold text-rose-600 hover:text-rose-700"
                                                @click="deleteAdsenseRevenue(row)"
                                            >
                                                削除
                                            </button>
                                        </td>
                                    </tr>
                                    <tr v-if="adsenseRevenueDaily.length === 0">
                                        <td colspan="3" class="px-3 py-5 text-center text-gray-500">データがありません。</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div v-if="salesTab === 'pv'" class="space-y-3">
                    <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">今日のPV</p>
                            <p class="mt-2 text-2xl font-extrabold text-slate-900">{{ formatNumber(pageViewSummary?.today?.views) }}</p>
                            <p class="mt-1 text-xs text-slate-500">セッション {{ formatNumber(pageViewSummary?.today?.uniqueSessions) }}</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">昨日のPV</p>
                            <p class="mt-2 text-2xl font-extrabold text-slate-900">{{ formatNumber(pageViewSummary?.yesterday?.views) }}</p>
                            <p class="mt-1 text-xs text-slate-500">セッション {{ formatNumber(pageViewSummary?.yesterday?.uniqueSessions) }}</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">直近7日のPV</p>
                            <p class="mt-2 text-2xl font-extrabold text-slate-900">{{ formatNumber(pageViewSummary?.last7days?.views) }}</p>
                            <p class="mt-1 text-xs text-slate-500">セッション {{ formatNumber(pageViewSummary?.last7days?.uniqueSessions) }}</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">累計PV</p>
                            <p class="mt-2 text-2xl font-extrabold text-slate-900">{{ formatNumber(pageViewSummary?.total?.views) }}</p>
                            <p class="mt-1 text-xs text-slate-500">セッション {{ formatNumber(pageViewSummary?.total?.uniqueSessions) }}</p>
                        </div>
                    </div>

                    <div class="rounded-lg border border-gray-100">
                        <div class="flex items-center justify-between border-b border-gray-100 px-3 py-2">
                            <p class="text-xs font-semibold text-gray-700">人気ページ Top20</p>
                            <p class="text-[11px] text-gray-500">対象: {{ stats.salesInsights?.pageViewsSince }} 以降</p>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-xs">
                                <thead class="bg-gray-50 text-left text-gray-500">
                                    <tr>
                                        <th class="px-3 py-2">ページ</th>
                                        <th class="px-3 py-2">PV</th>
                                        <th class="px-3 py-2">セッション数</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="row in stats.salesInsights?.topPageViews ?? []"
                                        :key="`top-page-${row.path}`"
                                        class="border-t border-gray-100"
                                    >
                                        <td class="px-3 py-2 font-mono text-[11px] text-gray-700">{{ row.path }}</td>
                                        <td class="px-3 py-2 text-gray-700">{{ row.views }}</td>
                                        <td class="px-3 py-2 text-gray-700">{{ row.uniqueSessions }}</td>
                                    </tr>
                                    <tr v-if="(stats.salesInsights?.topPageViews ?? []).length === 0">
                                        <td colspan="3" class="px-3 py-5 text-center text-gray-500">データがありません（migration後に集計されます）。</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="rounded-lg border border-gray-100">
                        <div class="flex items-center justify-between border-b border-gray-100 px-3 py-2">
                            <p class="text-xs font-semibold text-gray-700">日別PV（直近30日）</p>
                            <p class="text-[11px] text-gray-500">対象: {{ stats.salesInsights?.pageViewsSince }} 以降</p>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-xs">
                                <thead class="bg-gray-50 text-left text-gray-500">
                                    <tr>
                                        <th class="px-3 py-2">日付</th>
                                        <th class="px-3 py-2">PV</th>
                                        <th class="px-3 py-2">セッション数</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="row in dailyPageViews"
                                        :key="`daily-pv-${row.day}`"
                                        class="border-t border-gray-100"
                                    >
                                        <td class="px-3 py-2 font-mono text-[11px] text-gray-700">{{ row.day }}</td>
                                        <td class="px-3 py-2 text-gray-700">{{ formatNumber(row.views) }}</td>
                                        <td class="px-3 py-2 text-gray-700">{{ formatNumber(row.uniqueSessions) }}</td>
                                    </tr>
                                    <tr v-if="dailyPageViews.length === 0">
                                        <td colspan="3" class="px-3 py-5 text-center text-gray-500">データがありません（migration後に集計されます）。</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div v-if="salesTab === 'premium'" class="rounded-xl border border-emerald-100 bg-emerald-50/40 p-4">
                    <div class="flex flex-col gap-1 sm:flex-row sm:items-end sm:justify-between">
                        <div>
                            <p class="text-xs font-semibold text-emerald-800">今日の有料会員利用</p>
                            <p class="text-[11px] text-emerald-700">今日アクセスした有料ユーザーだけを表示します。</p>
                        </div>
                    </div>

                    <div class="mt-3 grid gap-3 sm:grid-cols-3">
                        <div class="rounded-lg border border-emerald-100 bg-white p-3">
                            <p class="text-[11px] font-semibold tracking-wide text-slate-500">全体</p>
                            <p class="mt-1 text-2xl font-extrabold text-slate-900">{{ formatNumber(premiumUsageSummary?.users) }}</p>
                        </div>
                        <div class="rounded-lg border border-violet-100 bg-white p-3">
                            <p class="text-[11px] font-semibold tracking-wide text-violet-700">生保講座</p>
                            <p class="mt-1 text-2xl font-extrabold text-slate-900">{{ formatNumber(premiumUsageForScope('seiho').users) }}</p>
                        </div>
                        <div class="rounded-lg border border-blue-100 bg-white p-3">
                            <p class="text-[11px] font-semibold tracking-wide text-blue-700">生保大学</p>
                            <p class="mt-1 text-2xl font-extrabold text-slate-900">{{ formatNumber(premiumUsageForScope('daigaku').users) }}</p>
                        </div>
                    </div>

                    <div class="mt-3 rounded-lg border border-emerald-100 bg-white">
                        <div class="border-b border-emerald-50 px-3 py-2 text-xs font-semibold text-gray-700">利用ユーザー</div>
                        <div class="divide-y divide-emerald-50 md:hidden">
                            <div v-for="row in premiumUsageUsers" :key="`premium-user-card-${row.userId}`" class="p-3">
                                <p class="font-mono text-[11px] text-gray-500">ID {{ row.userId }}</p>
                                <p class="mt-1 break-all text-xs font-semibold leading-5 text-gray-800">{{ row.email }}</p>
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span
                                        v-for="scope in row.scopes"
                                        :key="`premium-user-card-${row.userId}-${scope}`"
                                        class="inline-flex rounded-full px-2 py-0.5 text-[11px] font-semibold"
                                        :class="scopeClass(scope)"
                                    >
                                        {{ scopeLabel(scope) }}
                                    </span>
                                </div>
                                <p class="mt-2 font-mono text-[10px] text-gray-500">最終利用 {{ row.lastSeenAt }}</p>
                            </div>
                            <div v-if="premiumUsageUsers.length === 0" class="px-3 py-5 text-center text-xs text-gray-500">
                                データがありません。
                            </div>
                        </div>
                        <table class="hidden min-w-full text-xs md:table">
                            <thead class="bg-gray-50 text-left text-gray-500">
                                <tr>
                                    <th class="px-3 py-2">ID</th>
                                    <th class="px-3 py-2">メール</th>
                                    <th class="px-3 py-2">利用範囲</th>
                                    <th class="px-3 py-2">最終利用</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row in premiumUsageUsers" :key="`premium-user-${row.userId}`" class="border-t border-gray-100">
                                    <td class="px-3 py-2 font-mono text-[11px] text-gray-500">{{ row.userId }}</td>
                                    <td class="px-3 py-2 text-gray-700">{{ row.email }}</td>
                                    <td class="px-3 py-2">
                                        <span
                                            v-for="scope in row.scopes"
                                            :key="`premium-user-${row.userId}-${scope}`"
                                            class="mr-1 inline-flex rounded-full px-2 py-0.5 text-[11px] font-semibold"
                                            :class="scopeClass(scope)"
                                        >
                                            {{ scopeLabel(scope) }}
                                        </span>
                                    </td>
                                    <td class="px-3 py-2 font-mono text-[11px] text-gray-500">{{ row.lastSeenAt }}</td>
                                </tr>
                                <tr v-if="premiumUsageUsers.length === 0">
                                    <td colspan="4" class="px-3 py-5 text-center text-gray-500">データがありません。</td>
                                </tr>
                            </tbody>
                        </table>
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

                <div v-if="salesTab === 'daily'" class="mt-2 rounded-lg border border-gray-100 p-3">
                    <div>
                        <div class="mb-3 flex items-center justify-between text-xs">
                            <span class="font-semibold text-gray-700">日次売上</span>
                            <span class="text-gray-500">表示: {{ salesScopeOptions.find((o) => o.value === salesScopeFilter)?.label ?? '全試験' }}</span>
                        </div>
                        <div v-if="dailyCalendar" class="rounded-lg border border-gray-100 p-2 sm:p-3">
                            <div class="mb-2 flex flex-wrap items-center justify-between gap-2">
                                <div class="shrink-0 whitespace-nowrap text-xs font-semibold text-gray-700">{{ dailyCalendar.year }}年{{ dailyCalendar.month }}月</div>
                                <div class="flex min-w-0 items-center gap-1.5">
                                    <button
                                        type="button"
                                        class="min-w-[3rem] whitespace-nowrap rounded border border-gray-200 bg-white px-2 py-1 text-[10px] text-gray-600 hover:bg-gray-50"
                                        :disabled="dailyAvailableMonths.indexOf(activeDailyMonthKey) <= 0"
                                        @click="dailyCalendarMonthKey = dailyAvailableMonths[Math.max(0, dailyAvailableMonths.indexOf(activeDailyMonthKey) - 1)]"
                                    >
                                        前月
                                    </button>
                                    <select
                                        v-model="dailyCalendarMonthKey"
                                        class="w-[6.75rem] rounded border border-gray-200 bg-white py-1 pl-2 pr-8 text-[10px] text-gray-700"
                                    >
                                        <option
                                            v-for="m in dailyAvailableMonths"
                                            :key="`month-opt-${m}`"
                                            :value="m"
                                        >
                                            {{ m }}
                                        </option>
                                    </select>
                                    <button
                                        type="button"
                                        class="min-w-[3rem] whitespace-nowrap rounded border border-gray-200 bg-white px-2 py-1 text-[10px] text-gray-600 hover:bg-gray-50"
                                        :disabled="dailyAvailableMonths.indexOf(activeDailyMonthKey) === -1 || dailyAvailableMonths.indexOf(activeDailyMonthKey) >= dailyAvailableMonths.length - 1"
                                        @click="dailyCalendarMonthKey = dailyAvailableMonths[Math.min(dailyAvailableMonths.length - 1, dailyAvailableMonths.indexOf(activeDailyMonthKey) + 1)]"
                                    >
                                        次月
                                    </button>
                                </div>
                            </div>
                            <div class="mb-1 grid grid-cols-7 gap-1 text-center text-[10px] text-gray-500">
                                <div>日</div><div>月</div><div>火</div><div>水</div><div>木</div><div>金</div><div>土</div>
                            </div>
                            <div class="grid grid-cols-7 gap-1">
                                <div
                                    v-for="(cell, idx) in dailyCalendar.cells"
                                    :key="`cal-${idx}`"
                                    class="relative min-h-[46px] overflow-hidden rounded border p-1"
                                    :class="cell.empty ? 'border-transparent bg-transparent' : cell.isToday ? 'border-2 border-blue-700 ring-2 ring-blue-200' : 'border-gray-100'"
                                    :style="!cell.empty ? {
                                        backgroundColor:
                                            cell.level === 4 ? '#7c3aed'
                                            : cell.level === 3 ? '#a78bfa'
                                            : cell.level === 2 ? '#ddd6fe'
                                            : cell.level === 1 ? '#f3f0ff'
                                            : '#ffffff',
                                    } : {}"
                                >
                                    <template v-if="!cell.empty">
                                        <div
                                            class="text-[10px] font-semibold"
                                            :class="cell.level >= 3 ? 'text-white' : 'text-gray-700'"
                                        >
                                            {{ cell.day }}
                                        </div>
                                        <div
                                            class="mt-0.5 whitespace-nowrap text-[9px] leading-4 sm:text-[10px]"
                                            :class="cell.level >= 3 ? 'text-white/90' : 'text-gray-600'"
                                        >
                                            {{ formatCalendarAmount(cell.amount) }}
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <p v-if="!dailyCalendar" class="py-5 text-center text-xs text-gray-500">データがありません。</p>
                    </div>
                </div>

                <div v-if="salesTab === 'monthly'" class="mt-2 rounded-lg border border-gray-100">
                    <div class="rounded-lg border border-gray-100">
                        <div class="flex items-center justify-between gap-2 border-b border-gray-100 px-3 py-2">
                            <p class="text-xs font-semibold text-gray-700">月次売上</p>
                            <p class="text-[11px] text-gray-500">表示: {{ salesScopeOptions.find((o) => o.value === salesScopeFilter)?.label ?? '全試験' }}</p>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-[30rem] text-[11px] sm:min-w-full sm:text-xs">
                                <thead class="bg-gray-50 text-left text-gray-500">
                                    <tr>
                                        <th class="whitespace-nowrap px-2 py-2 sm:px-3">月</th>
                                        <th class="whitespace-nowrap px-2 py-2 sm:px-3">件数</th>
                                        <th class="whitespace-nowrap px-2 py-2 sm:px-3">売上</th>
                                        <th class="whitespace-nowrap px-2 py-2 sm:px-3">内訳</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="row in monthlySalesWithBreakdown"
                                        :key="`month-${row.month}`"
                                        class="border-t border-gray-100"
                                    >
                                        <td class="whitespace-nowrap px-2 py-2 text-gray-700 sm:px-3">{{ row.month }}</td>
                                        <td class="whitespace-nowrap px-2 py-2 text-gray-700 sm:px-3">{{ row.salesCount }}</td>
                                        <td class="whitespace-nowrap px-2 py-2 text-gray-700 sm:px-3">{{ formatYen(row.totalAmount) }}</td>
                                        <td class="px-2 py-2 text-gray-700 sm:px-3">
                                            <div class="flex flex-wrap gap-x-2 gap-y-1">
                                                <span
                                                    v-for="item in row.breakdown"
                                                    :key="`month-${row.month}-${item.scope}`"
                                                    class="whitespace-nowrap"
                                                >
                                                    <span class="font-semibold text-gray-800">{{ scopeLabel(item.scope) }}</span>
                                                    {{ item.salesCount }}件 {{ formatYen(item.totalAmount) }}
                                                </span>
                                                <span v-if="row.breakdown.length === 0" class="text-gray-400">-</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr v-if="monthlySalesWithBreakdown.length === 0">
                                        <td colspan="4" class="px-3 py-5 text-center text-gray-500">データがありません。</td>
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
                class="mb-4 grid gap-2 md:grid-cols-[1.4fr_1fr_1fr_0.95fr_0.95fr_auto_auto]"
            >
                <input
                    v-model="userSearch"
                    type="search"
                    placeholder="メールアドレスで検索"
                    class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-800 focus:border-purple-300 focus:outline-none"
                />
                <select
                    v-model="purchaseScope"
                    @change="submitSearch"
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
                    @change="submitSearch"
                    class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-800 focus:border-purple-300 focus:outline-none"
                >
                    <option value="all">購入状況: すべて</option>
                    <option value="purchased">購入あり</option>
                    <option value="unpurchased">未購入</option>
                </select>
                <label class="flex min-w-0 flex-col gap-1 text-xs font-semibold text-gray-500">
                    購入日From
                    <input
                        v-model="purchaseDateFrom"
                        type="date"
                        class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm font-normal text-gray-800 focus:border-purple-300 focus:outline-none"
                    />
                </label>
                <label class="flex min-w-0 flex-col gap-1 text-xs font-semibold text-gray-500">
                    購入日To
                    <input
                        v-model="purchaseDateTo"
                        type="date"
                        class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm font-normal text-gray-800 focus:border-purple-300 focus:outline-none"
                    />
                </label>
                <button
                    type="submit"
                    class="whitespace-nowrap rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700"
                >
                    検索
                </button>
                <button
                    type="button"
                    class="whitespace-nowrap rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50"
                    @click="resetSearch"
                >
                    リセット
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
