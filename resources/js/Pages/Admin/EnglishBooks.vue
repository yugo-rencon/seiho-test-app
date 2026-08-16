<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import AdminLayout from "@/Layouts/AdminLayout.vue";

const props = defineProps({ books: { type: Array, default: () => [] }, stats: { type: Object, required: true } });
const filter = ref("all");
const editingId = ref(null);
const statusLabels = { want: "読みたい", reading: "読書中", finished: "読了" };
const emptyBook = () => ({ title: "", author: "", cover_url: "", cover_image: null, status: "want", difficulty: null, word_count: null, page_count: null, started_on: "", finished_on: "", rating: null, memo: "" });
const form = useForm(emptyBook());
const deleteForm = useForm({});
const selectedCoverPreview = ref("");
const visibleBooks = computed(() => filter.value === "all" ? props.books : props.books.filter((book) => book.status === filter.value));
const formatNumber = (value) => Number(value || 0).toLocaleString();
const clearForm = () => { editingId.value = null; selectedCoverPreview.value = ""; form.reset(); form.clearErrors(); };
const editBook = (book) => { editingId.value = book.id; selectedCoverPreview.value = book.cover_image_url || ""; Object.assign(form, { ...emptyBook(), ...book, cover_image: null, started_on: book.started_on || "", finished_on: book.finished_on || "" }); window.scrollTo({ top: 0, behavior: "smooth" }); };
const selectCover = (event) => { const [file] = event.target.files; form.cover_image = file || null; selectedCoverPreview.value = file ? URL.createObjectURL(file) : ""; };
const save = () => {
    if (editingId.value) form.post(route("admin.englishBooks.update", editingId.value), { forceFormData: true, preserveScroll: true, onSuccess: clearForm });
    else form.post(route("admin.englishBooks.store"), { forceFormData: true, preserveScroll: true, onSuccess: clearForm });
};
const remove = (book) => { if (window.confirm(`「${book.title}」を削除しますか？`)) deleteForm.delete(route("admin.englishBooks.delete", book.id), { preserveScroll: true }); };
</script>

<template>
    <AdminLayout title="洋書管理">
        <div class="mx-auto max-w-6xl px-5 py-8 pb-24">
            <div class="mb-6 flex flex-wrap items-start justify-between gap-3">
                <div><p class="text-xs font-semibold tracking-wide text-indigo-600">PERSONAL LIBRARY</p><h1 class="mt-1 text-2xl font-bold text-gray-900">洋書管理</h1><p class="mt-1 text-sm text-gray-500">読書の履歴と、次に読みたい一冊を育てる本棚です。</p></div>
                <Link :href="route('admin.index')" class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-50">管理画面へ戻る</Link>
            </div>

            <div class="mb-6 grid grid-cols-2 gap-3 sm:grid-cols-4">
                <div class="rounded-xl border border-emerald-100 bg-emerald-50 p-4"><p class="text-xs font-semibold text-emerald-700">読了</p><p class="mt-1 text-2xl font-bold text-emerald-950">{{ stats.finished_count }}冊</p></div>
                <div class="rounded-xl border border-indigo-100 bg-indigo-50 p-4"><p class="text-xs font-semibold text-indigo-700">累計語数</p><p class="mt-1 text-2xl font-bold text-indigo-950">{{ formatNumber(stats.total_words) }}</p></div>
                <div class="rounded-xl border border-amber-100 bg-amber-50 p-4"><p class="text-xs font-semibold text-amber-700">読書中</p><p class="mt-1 text-2xl font-bold text-amber-950">{{ stats.reading_count }}冊</p></div>
                <div class="rounded-xl border border-slate-200 bg-white p-4"><p class="text-xs font-semibold text-slate-500">読みたい</p><p class="mt-1 text-2xl font-bold text-slate-900">{{ stats.want_count }}冊</p></div>
            </div>

            <section class="mb-8 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6">
                <div class="mb-4 flex items-center justify-between"><h2 class="font-bold text-gray-900">{{ editingId ? '本を編集' : '本を登録' }}</h2><button v-if="editingId" type="button" class="text-sm text-gray-500 hover:text-gray-700" @click="clearForm">キャンセル</button></div>
                <form class="grid gap-4 sm:grid-cols-2" @submit.prevent="save">
                    <label class="sm:col-span-2"><span class="text-sm font-medium text-gray-700">タイトル <span class="text-rose-500">*</span></span><input v-model="form.title" class="mt-1 block w-full rounded-lg border-gray-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="The Great Gatsby" /><p v-if="form.errors.title" class="mt-1 text-xs text-rose-600">{{ form.errors.title }}</p></label>
                    <label><span class="text-sm font-medium text-gray-700">著者</span><input v-model="form.author" class="mt-1 block w-full rounded-lg border-gray-300 text-sm" placeholder="F. Scott Fitzgerald" /></label>
                    <div>
                        <span class="text-sm font-medium text-gray-700">表紙画像</span>
                        <div class="mt-1 flex items-center gap-3">
                            <div class="flex h-20 w-14 shrink-0 items-center justify-center overflow-hidden rounded-md bg-indigo-50 text-[10px] font-bold text-indigo-400">
                                <img v-if="selectedCoverPreview" :src="selectedCoverPreview" alt="選択した表紙のプレビュー" class="h-full w-full object-cover" />
                                <span v-else>BOOK</span>
                            </div>
                            <label class="cursor-pointer rounded-lg border border-dashed border-indigo-300 bg-indigo-50 px-3 py-2 text-sm font-semibold text-indigo-700 hover:bg-indigo-100">
                                画像を選択
                                <input type="file" accept="image/jpeg,image/png,image/webp" class="sr-only" @change="selectCover" />
                            </label>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">JPG・PNG・WebP、5MBまで。登録済みの画像は新しい画像を選ぶと差し替わります。</p>
                        <p v-if="form.errors.cover_image" class="mt-1 text-xs text-rose-600">{{ form.errors.cover_image }}</p>
                    </div>
                    <label><span class="text-sm font-medium text-gray-700">表紙画像URL（任意）</span><input v-model="form.cover_url" type="url" class="mt-1 block w-full rounded-lg border-gray-300 text-sm" placeholder="https://..." /><p class="mt-1 text-xs text-gray-500">アップロード画像がある場合はそちらを表示します。</p></label>
                    <label><span class="text-sm font-medium text-gray-700">読書状況</span><select v-model="form.status" class="mt-1 block w-full rounded-lg border-gray-300 text-sm"><option value="want">読みたい</option><option value="reading">読書中</option><option value="finished">読了</option></select></label>
                    <label><span class="text-sm font-medium text-gray-700">難易度（1〜5）</span><select v-model="form.difficulty" class="mt-1 block w-full rounded-lg border-gray-300 text-sm"><option :value="null">未設定</option><option v-for="n in 5" :key="n" :value="n">{{ n }}</option></select></label>
                    <label><span class="text-sm font-medium text-gray-700">語数</span><input v-model.number="form.word_count" type="number" min="0" class="mt-1 block w-full rounded-lg border-gray-300 text-sm" placeholder="例: 47000" /></label>
                    <label><span class="text-sm font-medium text-gray-700">ページ数</span><input v-model.number="form.page_count" type="number" min="1" class="mt-1 block w-full rounded-lg border-gray-300 text-sm" placeholder="例: 180" /></label>
                    <label><span class="text-sm font-medium text-gray-700">読み始めた日</span><input v-model="form.started_on" type="date" class="mt-1 block w-full rounded-lg border-gray-300 text-sm" /></label>
                    <label><span class="text-sm font-medium text-gray-700">読了日</span><input v-model="form.finished_on" type="date" class="mt-1 block w-full rounded-lg border-gray-300 text-sm" /></label>
                    <label><span class="text-sm font-medium text-gray-700">評価（1〜5）</span><select v-model="form.rating" class="mt-1 block w-full rounded-lg border-gray-300 text-sm"><option :value="null">未設定</option><option v-for="n in 5" :key="n" :value="n">★ {{ n }}</option></select></label>
                    <label class="sm:col-span-2"><span class="text-sm font-medium text-gray-700">メモ</span><textarea v-model="form.memo" rows="3" class="mt-1 block w-full rounded-lg border-gray-300 text-sm" placeholder="読んでみたい理由、感想、気になった表現など"></textarea></label>
                    <div class="sm:col-span-2"><button type="submit" :disabled="form.processing" class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-bold text-white shadow-sm hover:bg-indigo-700 disabled:opacity-50">{{ editingId ? '更新する' : '本棚に追加する' }}</button></div>
                </form>
            </section>

            <div class="mb-4 flex flex-wrap gap-2"><button v-for="item in [{ key: 'all', label: 'すべて' }, { key: 'reading', label: '読書中' }, { key: 'want', label: '読みたい' }, { key: 'finished', label: '読了' }]" :key="item.key" type="button" class="rounded-full px-4 py-2 text-sm font-semibold" :class="filter === item.key ? 'bg-gray-900 text-white' : 'bg-white text-gray-600 ring-1 ring-gray-200 hover:bg-gray-50'" @click="filter = item.key">{{ item.label }}</button></div>
            <div v-if="visibleBooks.length" class="grid gap-4 md:grid-cols-2">
                <article v-for="book in visibleBooks" :key="book.id" class="flex gap-4 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm">
                    <div class="flex h-32 w-20 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-indigo-100 to-violet-200 text-center text-xs font-bold text-indigo-500"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="h-full w-full object-cover" /><span v-else>BOOK</span></div>
                    <div class="min-w-0 flex-1"><div class="flex items-start justify-between gap-2"><div><span class="rounded-full px-2 py-0.5 text-xs font-bold" :class="book.status === 'finished' ? 'bg-emerald-100 text-emerald-700' : book.status === 'reading' ? 'bg-amber-100 text-amber-700' : 'bg-slate-100 text-slate-600'">{{ statusLabels[book.status] }}</span><h2 class="mt-2 truncate font-bold text-gray-900">{{ book.title }}</h2><p v-if="book.author" class="mt-0.5 truncate text-sm text-gray-500">{{ book.author }}</p></div><div class="flex gap-2 text-xs"><button type="button" class="text-indigo-600 hover:text-indigo-800" @click="editBook(book)">編集</button><button type="button" class="text-rose-500 hover:text-rose-700" @click="remove(book)">削除</button></div></div><div class="mt-3 flex flex-wrap gap-x-3 gap-y-1 text-xs text-gray-500"><span v-if="book.difficulty">難易度 {{ book.difficulty }}/5</span><span v-if="book.word_count">{{ formatNumber(book.word_count) }}語</span><span v-if="book.page_count">{{ book.page_count }}ページ</span><span v-if="book.rating">{{ '★'.repeat(book.rating) }}</span><span v-if="book.finished_on">読了 {{ book.finished_on }}</span></div><p v-if="book.memo" class="mt-3 line-clamp-2 text-sm text-gray-600">{{ book.memo }}</p></div>
                </article>
            </div>
            <div v-else class="rounded-2xl border border-dashed border-gray-300 bg-white py-16 text-center text-sm text-gray-500">まだ本がありません。最初の一冊を登録して、本棚を始めましょう。</div>
        </div>
    </AdminLayout>
</template>
