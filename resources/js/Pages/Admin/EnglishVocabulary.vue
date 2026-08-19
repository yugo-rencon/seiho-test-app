<script setup>
import { computed, ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import axios from "axios";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";

const props = defineProps({ books: { type: Array, default: () => [] }, entries: { type: Array, default: () => [] } });
const selectedBookId = ref('');
const form = useForm({ english_book_id: '', word: '', meaning: '', note: '' });
const deleteForm = useForm({});
const editingEntry = ref(null);
const translating = ref(false);
const translationError = ref('');
const visibleEntries = computed(() => selectedBookId.value === '' ? props.entries : props.entries.filter((entry) => entry.english_book_id === Number(selectedBookId.value)));
const save = () => form.post(editingEntry.value ? route('admin.englishBooks.vocabulary.update', editingEntry.value.id) : route('admin.englishBooks.vocabulary.store'), { preserveScroll: true, onSuccess: () => cancelEdit() });
const remove = (entry) => { if (window.confirm(`「${entry.word}」を単語帳から削除しますか？`)) deleteForm.delete(route('admin.englishBooks.vocabulary.delete', entry.id), { preserveScroll: true }); };
const edit = (entry) => { editingEntry.value = entry; Object.assign(form, { english_book_id: entry.english_book_id ? String(entry.english_book_id) : '', word: entry.word, meaning: entry.meaning, note: entry.note || '' }); window.scrollTo({ top: 0, behavior: 'smooth' }); };
const cancelEdit = () => { editingEntry.value = null; form.reset(); form.clearErrors(); translationError.value = ''; };
const translate = async () => {
    if (!form.word.trim()) return;
    translating.value = true;
    translationError.value = '';
    try {
        const { data } = await axios.post(route('admin.englishBooks.vocabulary.translate'), { text: form.word });
        form.meaning = data.translation || '';
    } catch (error) {
        translationError.value = error.response?.data?.message || '翻訳を取得できませんでした。';
    } finally {
        translating.value = false;
    }
};
</script>

<template>
    <EnglishBooksLayout title="単語帳 — 洋書の本棚">
        <div class="mx-auto max-w-5xl px-4 py-8 pb-16 sm:px-8 sm:py-14 sm:pb-20">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div><p class="text-xs font-bold tracking-[0.18em] text-[#b65b3d]">VOCABULARY</p><h1 class="mt-2 font-serif text-4xl font-bold text-[#25323a]">単語帳</h1><p class="mt-3 text-sm leading-6 text-[#74665e]">読書中に出会った言葉を、あとから何度でも見返せます。</p></div>
                <p class="rounded-full bg-[#f3ede3] px-4 py-2 text-sm font-bold text-[#74665e]">{{ entries.length }}語</p>
            </div>

            <section class="mt-9 rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] p-5 shadow-[0_8px_30px_rgba(72,55,40,0.06)] sm:p-7">
                <div class="flex items-center justify-between gap-3"><h2 class="font-serif text-xl font-bold text-[#25323a]">{{ editingEntry ? '単語を編集' : '単語を追加' }}</h2><button v-if="editingEntry" type="button" class="text-sm font-bold text-[#74665e] hover:text-[#25323a]" @click="cancelEdit">編集をやめる</button></div>
                <form class="mt-5 grid gap-4 sm:grid-cols-2" @submit.prevent="save">
                    <label><span class="text-sm font-bold text-[#3d4b52]">単語 *</span><div class="mt-1.5 flex gap-2"><input v-model="form.word" class="block min-w-0 flex-1 rounded-lg border-[#d6cec1] bg-white text-sm" placeholder="glance" @keydown.enter.prevent="translate" /><button type="button" :disabled="translating || !form.word.trim()" class="shrink-0 rounded-lg border border-[#c96b48] px-3 text-sm font-bold text-[#b65b3d] transition hover:bg-[#f9ede7] disabled:cursor-not-allowed disabled:opacity-40" @click="translate">{{ translating ? '翻訳中…' : '日本語訳を取得' }}</button></div><p v-if="form.errors.word" class="mt-1 text-xs text-rose-600">{{ form.errors.word }}</p><p v-if="translationError" class="mt-1 text-xs text-rose-600">{{ translationError }}</p></label>
                    <label><span class="text-sm font-bold text-[#3d4b52]">意味 *</span><input v-model="form.meaning" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" placeholder="ちらりと見る" /><p v-if="form.errors.meaning" class="mt-1 text-xs text-rose-600">{{ form.errors.meaning }}</p></label>
                    <label><span class="text-sm font-bold text-[#3d4b52]">本（任意）</span><select v-model="form.english_book_id" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm"><option value="">本を選ばない</option><option v-for="book in books" :key="book.id" :value="book.id">{{ book.title }}</option></select></label>
                    <label class="sm:col-span-2"><span class="text-sm font-bold text-[#3d4b52]">メモ（任意）</span><textarea v-model="form.note" rows="3" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" placeholder="印象に残った使われ方や、自分用の例文" /></label>
                    <div class="sm:col-span-2"><button type="submit" :disabled="form.processing" class="rounded-full bg-[#c96b48] px-6 py-3 text-sm font-bold text-white transition hover:bg-[#ad5637] disabled:opacity-50">{{ form.processing ? '保存中…' : editingEntry ? '変更を保存' : '単語帳に追加' }}</button></div>
                </form>
            </section>

            <section class="mt-10">
                <div class="flex flex-wrap items-center justify-between gap-3"><h2 class="font-serif text-2xl font-bold text-[#25323a]">登録した単語</h2><select v-model="selectedBookId" class="rounded-lg border-[#d6cec1] bg-white text-sm text-[#3d4b52]"><option value="">すべての本</option><option v-for="book in books" :key="book.id" :value="book.id">{{ book.title }}</option></select></div>
                <div v-if="visibleEntries.length" class="mt-5 overflow-hidden rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] shadow-[0_8px_30px_rgba(72,55,40,0.06)]">
                    <article v-for="entry in visibleEntries" :key="entry.id" class="flex gap-4 border-b border-[#e6dfd3] px-5 py-5 last:border-b-0 sm:px-7"><div class="min-w-0 flex-1"><div class="flex flex-wrap items-baseline gap-x-3 gap-y-1"><h3 class="text-lg font-bold text-[#25323a]">{{ entry.word }}</h3><p class="text-sm text-[#74665e]">{{ entry.meaning }}</p></div><p v-if="entry.book_title" class="mt-2 text-xs font-semibold text-[#a18e80]">{{ entry.book_title }}</p><p v-if="entry.note" class="mt-3 whitespace-pre-wrap text-sm leading-6 text-[#4c5a5f]">{{ entry.note }}</p></div><div class="flex shrink-0 flex-col items-end gap-2 text-xs font-bold"><button type="button" class="text-[#74665e] hover:text-[#25323a]" @click="edit(entry)">編集</button><button type="button" class="text-rose-500 hover:text-rose-700" @click="remove(entry)">削除</button></div></article>
                </div>
                <div v-else class="mt-5 rounded-2xl border border-dashed border-[#cfc3b3] bg-[#fbf9f4] py-16 text-center text-sm text-[#74665e]">まだ単語がありません。読書中に気になった言葉を残してみましょう。</div>
            </section>
        </div>
    </EnglishBooksLayout>
</template>
