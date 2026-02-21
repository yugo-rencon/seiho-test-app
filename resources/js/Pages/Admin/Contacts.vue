<script setup>
import { Link, Head, router, useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const props = defineProps({
    contacts: { type: Object, required: true },
    filters: { type: Object, required: true },
    statusCounts: { type: Object, required: true },
});

const q = ref(props.filters?.q ?? "");
const status = ref(props.filters?.status ?? "all");

const submitSearch = () => {
    router.get(
        route("admin.contacts.index"),
        { q: q.value, status: status.value },
        { preserveState: true, replace: true },
    );
};

const setStatus = (contactId, nextStatus) => {
    router.post(
        route("admin.contacts.updateStatus", { contact: contactId }),
        { status: nextStatus },
        { preserveScroll: true },
    );
};

const noteForms = Object.fromEntries(
    (props.contacts?.data ?? []).map((contact) => [
        contact.id,
        useForm({ admin_note: contact.admin_note ?? "" }),
    ]),
);

const saveNote = (contactId) => {
    const form = noteForms[contactId];
    if (!form) return;
    form.post(route("admin.contacts.updateNote", { contact: contactId }), {
        preserveScroll: true,
    });
};

const statusLabel = (value) => {
    if (value === "in_progress") return "対応中";
    if (value === "done") return "対応済み";
    return "未対応";
};

const statusClass = (value) => {
    if (value === "in_progress") return "bg-blue-50 text-blue-700";
    if (value === "done") return "bg-emerald-50 text-emerald-700";
    return "bg-gray-100 text-gray-700";
};

const categoryLabel = (value) => {
    if (value === "bug") return "不具合";
    if (value === "request") return "要望";
    if (value === "feedback") return "感想";
    return "その他";
};
</script>

<template>
    <SeihoTestLayout title="問い合わせ管理">
        <Head title="問い合わせ管理" />

        <div class="container mx-auto max-w-6xl px-5 py-8">
            <div class="mb-6 flex items-center justify-between gap-3">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">問い合わせ管理</h1>
                    <p class="mt-1 text-sm text-gray-500">問い合わせの確認・対応状況・管理メモを更新できます。</p>
                </div>
                <Link
                    :href="route('admin.index')"
                    class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs font-semibold text-gray-700 hover:bg-gray-50"
                >
                    ユーザー管理へ戻る
                </Link>
            </div>

            <div class="mb-4 grid gap-2 sm:grid-cols-4">
                <div class="rounded-xl border border-gray-100 bg-white p-3">
                    <p class="text-xs text-gray-500">全件</p>
                    <p class="text-xl font-bold text-gray-900">{{ statusCounts.all }}</p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3">
                    <p class="text-xs text-gray-500">未対応</p>
                    <p class="text-xl font-bold text-gray-900">{{ statusCounts.new }}</p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3">
                    <p class="text-xs text-gray-500">対応中</p>
                    <p class="text-xl font-bold text-blue-700">{{ statusCounts.in_progress }}</p>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-3">
                    <p class="text-xs text-gray-500">対応済み</p>
                    <p class="text-xl font-bold text-emerald-700">{{ statusCounts.done }}</p>
                </div>
            </div>

            <form @submit.prevent="submitSearch" class="mb-4 flex flex-col gap-2 rounded-xl border border-gray-100 bg-white p-3 sm:flex-row">
                <input
                    v-model="q"
                    type="text"
                    placeholder="名前・メール・本文で検索"
                    class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm focus:border-purple-300 focus:outline-none"
                />
                <select
                    v-model="status"
                    class="rounded-lg border border-gray-200 px-3 py-2 text-sm focus:border-purple-300 focus:outline-none"
                >
                    <option value="all">すべて</option>
                    <option value="new">未対応</option>
                    <option value="in_progress">対応中</option>
                    <option value="done">対応済み</option>
                </select>
                <button
                    type="submit"
                    class="whitespace-nowrap rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-500"
                >
                    絞り込み
                </button>
            </form>

            <div class="space-y-3">
                <div
                    v-for="contact in contacts.data"
                    :key="contact.id"
                    class="rounded-xl border border-gray-100 bg-white p-4"
                >
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs text-gray-500">#{{ contact.id }}</span>
                            <span class="rounded-full bg-gray-100 px-2 py-1 text-xs font-semibold text-gray-700">
                                {{ categoryLabel(contact.category) }}
                            </span>
                            <span class="rounded-full px-2 py-1 text-xs font-semibold" :class="statusClass(contact.status)">
                                {{ statusLabel(contact.status) }}
                            </span>
                        </div>
                        <div class="text-xs text-gray-500">
                            受信: {{ contact.created_at || "-" }}
                        </div>
                    </div>

                    <div class="mt-3 space-y-1 text-sm">
                        <p><span class="text-gray-500">名前:</span> {{ contact.name || "-" }}</p>
                        <p><span class="text-gray-500">メール:</span> {{ contact.email }}</p>
                        <p><span class="text-gray-500">対象ページ:</span> {{ contact.page_url || "-" }}</p>
                        <p><span class="text-gray-500">会員:</span> {{ contact.user_email || "未ログイン" }}</p>
                        <p><span class="text-gray-500">対応者:</span> {{ contact.handler_email || "-" }}</p>
                        <p><span class="text-gray-500">対応日時:</span> {{ contact.handled_at || "-" }}</p>
                    </div>

                    <div class="mt-3 rounded-lg bg-gray-50 p-3 text-sm text-gray-800 whitespace-pre-wrap">
                        {{ contact.message }}
                    </div>

                    <div class="mt-3 flex flex-wrap gap-2">
                        <button
                            type="button"
                            class="rounded-lg border border-gray-200 px-3 py-1.5 text-xs font-semibold text-gray-700 hover:bg-gray-50"
                            @click="setStatus(contact.id, 'new')"
                        >
                            未対応
                        </button>
                        <button
                            type="button"
                            class="rounded-lg border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700 hover:bg-blue-50"
                            @click="setStatus(contact.id, 'in_progress')"
                        >
                            対応中
                        </button>
                        <button
                            type="button"
                            class="rounded-lg border border-emerald-200 px-3 py-1.5 text-xs font-semibold text-emerald-700 hover:bg-emerald-50"
                            @click="setStatus(contact.id, 'done')"
                        >
                            対応済み
                        </button>
                    </div>

                    <div class="mt-3">
                        <textarea
                            v-model="noteForms[contact.id].admin_note"
                            rows="3"
                            class="w-full rounded-lg border border-gray-200 px-3 py-2 text-sm focus:border-purple-300 focus:outline-none"
                            placeholder="管理者メモ（返信内容、対応履歴など）"
                        ></textarea>
                        <div class="mt-2 flex justify-end">
                            <button
                                type="button"
                                class="rounded-lg bg-purple-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-purple-500 disabled:opacity-60"
                                :disabled="noteForms[contact.id].processing"
                                @click="saveNote(contact.id)"
                            >
                                メモ保存
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    v-if="contacts.data.length === 0"
                    class="rounded-xl border border-gray-100 bg-white px-3 py-8 text-center text-sm text-gray-500"
                >
                    該当する問い合わせはありません。
                </div>
            </div>

            <div class="mt-5 flex flex-wrap items-center gap-2 text-sm">
                <Link
                    v-if="contacts.prev_page_url"
                    :href="contacts.prev_page_url"
                    class="rounded-lg border border-gray-200 bg-white px-3 py-1.5 text-gray-700 hover:bg-gray-50"
                >
                    前へ
                </Link>
                <Link
                    v-if="contacts.next_page_url"
                    :href="contacts.next_page_url"
                    class="rounded-lg border border-gray-200 bg-white px-3 py-1.5 text-gray-700 hover:bg-gray-50"
                >
                    次へ
                </Link>
            </div>
        </div>
    </SeihoTestLayout>
</template>
