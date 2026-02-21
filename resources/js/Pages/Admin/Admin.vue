<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
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
    filters: {
        type: Object,
        required: true,
    },
});

const q = ref(props.filters?.q ?? "");
const activeTab = ref("dashboard");

const submitSearch = () => {
    router.get(
        route("admin.index"),
        { q: q.value },
        { preserveState: true, replace: true },
    );
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

            <div class="mb-5 flex items-center gap-2">
                <button
                    type="button"
                    class="rounded-full px-4 py-1.5 text-sm font-semibold transition"
                    :class="
                        activeTab === 'dashboard'
                            ? 'bg-purple-600 text-white'
                            : 'bg-white text-gray-600 border border-gray-200 hover:bg-gray-50'
                    "
                    @click="activeTab = 'dashboard'"
                >
                    ダッシュボード
                </button>
                <button
                    type="button"
                    class="rounded-full px-4 py-1.5 text-sm font-semibold transition"
                    :class="
                        activeTab === 'users'
                            ? 'bg-purple-600 text-white'
                            : 'bg-white text-gray-600 border border-gray-200 hover:bg-gray-50'
                    "
                    @click="activeTab = 'users'"
                >
                    ユーザー管理
                </button>
                <Link
                    :href="route('admin.contacts.index')"
                    class="rounded-full border border-gray-200 bg-white px-4 py-1.5 text-sm font-semibold text-gray-600 transition hover:bg-gray-50"
                >
                    問い合わせ管理
                </Link>
            </div>

            <div
                v-if="activeTab === 'dashboard'"
                class="grid gap-3 sm:grid-cols-3 mb-6"
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
                            <Link
                                as="button"
                                method="post"
                                :href="
                                    route('admin.users.togglePremium', {
                                        user: admin.id,
                                    })
                                "
                                class="rounded-lg border border-purple-200 px-2 py-1 text-[11px] font-semibold text-purple-700 hover:bg-purple-50"
                            >
                                {{
                                    admin.is_premium
                                        ? "未購入に戻す"
                                        : "購入済みにする"
                                }}
                            </Link>
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
                            <th class="px-3 py-2">最終購入日時</th>
                            <th class="px-3 py-2">操作</th>
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
                            <td class="px-3 py-2 text-gray-600">
                                {{ user.last_paid_at || "-" }}
                            </td>
                            <td class="px-3 py-2">
                                <Link
                                    as="button"
                                    method="post"
                                    :href="
                                        route('admin.users.togglePremium', {
                                            user: user.id,
                                        })
                                    "
                                    class="rounded-lg border border-purple-200 px-3 py-1.5 text-xs font-semibold text-purple-700 hover:bg-purple-50"
                                >
                                    {{
                                        user.is_premium
                                            ? "未購入に戻す"
                                            : "購入済みにする"
                                    }}
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="users.data.length === 0">
                            <td
                                colspan="5"
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
                        最終購入日時: {{ user.last_paid_at || "-" }}
                    </div>

                    <div class="mt-3">
                        <Link
                            as="button"
                            method="post"
                            :href="
                                route('admin.users.togglePremium', {
                                    user: user.id,
                                })
                            "
                            class="w-full rounded-lg border border-purple-200 px-3 py-2 text-xs font-semibold text-purple-700 hover:bg-purple-50"
                        >
                            {{
                                user.is_premium
                                    ? "未購入に戻す"
                                    : "購入済みにする"
                            }}
                        </Link>
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
