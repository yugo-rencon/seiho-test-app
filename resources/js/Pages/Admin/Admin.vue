<script setup>
import { Head, Link, router, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

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
});

const q = ref(props.filters?.q ?? "");
const activeTab = ref("dashboard");
const page = usePage();
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
    <SeihoTestLayout title="管理画面">
        <Head title="管理画面" />

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
                class="mb-6 grid gap-3 sm:grid-cols-3 lg:grid-cols-5"
            >
                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <p class="text-xs text-gray-500">総ユーザー数</p>
                    <p class="mt-1 text-2xl font-bold text-gray-900">
                        {{ stats.totalUsers }}
                    </p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-4">
                    <p class="text-xs text-gray-500">プレミアムユーザー数</p>
                    <p class="mt-1 text-2xl font-bold text-purple-700">
                        {{ stats.premiumUsers }}
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
        </div>
    </SeihoTestLayout>
</template>
