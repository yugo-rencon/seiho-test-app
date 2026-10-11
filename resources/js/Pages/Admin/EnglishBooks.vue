<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";

const props = defineProps({ books: { type: Array, default: () => [] }, stats: { type: Object, required: true } });
const filter = ref("all");
const genreFilter = ref("all");
const japaneseOnly = ref(false);
const deleteForm = useForm({});
const statusLabels = { want: "読みたい", reading: "読書中", finished: "読了" };
const genres = computed(() => [...new Set(props.books.map((book) => book.genre).filter(Boolean))].sort());
const visibleBooks = computed(() => props.books.filter((book) => (!japaneseOnly.value || book.is_japanese_author) && (filter.value === "all" || book.status === filter.value) && (genreFilter.value === "all" || book.genre === genreFilter.value)));
const formatNumber = (value) => Number(value || 0).toLocaleString();
const remove = (book) => { if (window.confirm(`「${book.title}」を本棚から外しますか？\n本のデータベースには残ります。`)) deleteForm.delete(route("admin.englishBooks.delete", book.id), { preserveScroll: true }); };
</script>

<template>
    <EnglishBooksLayout title="わたしの本棚">
        <div class="mx-auto max-w-7xl px-4 py-8 pb-16 sm:px-8 sm:py-12 sm:pb-20">
            <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="text-xs font-bold tracking-[0.14em] text-[#167a55]">READING LOG</p>
                    <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-[#202522] sm:text-4xl">わたしの本棚</h1>
                    <p class="mt-2 text-sm leading-6 text-[#657069]">読みたい本、読んでいる本、読み終えた本。</p>
                </div>
                <Link :href="route('admin.englishBooks.catalog.create')" class="inline-flex items-center gap-2 rounded-md bg-[#167a55] px-4 py-2.5 text-sm font-bold text-white transition hover:bg-[#106443]">本を登録 <span aria-hidden="true">→</span></Link>
            </div>

            <div class="mb-10 grid grid-cols-2 border-y border-[#dfe4e0] sm:mb-12 sm:grid-cols-4">
                <div class="border-b border-r border-[#dfe4e0] py-4 pr-4 sm:border-b-0 sm:px-5"><p class="text-xs font-bold tracking-wider text-[#748078]">読了した本</p><p class="mt-2 text-3xl font-extrabold text-[#202522]">{{ stats.finished_count }}<span class="ml-1 text-sm">冊</span></p></div>
                <div class="border-b border-[#dfe4e0] py-4 pl-4 sm:border-b-0 sm:border-r sm:px-5"><p class="text-xs font-bold tracking-wider text-[#748078]">読了した語数</p><p class="mt-2 break-all text-3xl font-extrabold text-[#202522]">{{ formatNumber(stats.total_words) }}</p></div>
                <div class="border-r border-[#dfe4e0] py-4 pr-4 sm:px-5"><p class="text-xs font-bold tracking-wider text-[#748078]">いま読んでいる本</p><p class="mt-2 text-3xl font-extrabold text-[#167a55]">{{ stats.reading_count }}<span class="ml-1 text-sm">冊</span></p></div>
                <div class="py-4 pl-4 sm:px-5"><p class="text-xs font-bold tracking-wider text-[#748078]">これから読みたい本</p><p class="mt-2 text-3xl font-extrabold text-[#202522]">{{ stats.want_count }}<span class="ml-1 text-sm">冊</span></p></div>
            </div>

            <div class="mb-5 flex flex-wrap items-end justify-between gap-3"><h2 class="text-2xl font-extrabold tracking-tight text-[#202522]">わたしの本棚 <span class="ml-2 text-sm font-medium text-[#748078]">{{ visibleBooks.length }}冊</span></h2><div class="flex flex-wrap gap-1"><button v-for="item in [{ key: 'all', label: 'すべて' }, { key: 'reading', label: '読書中' }, { key: 'want', label: '読みたい' }, { key: 'finished', label: '読了' }]" :key="item.key" type="button" class="border-b-2 px-3 py-2 text-sm font-bold transition" :class="filter === item.key ? 'border-[#167a55] text-[#167a55]' : 'border-transparent text-[#748078] hover:border-[#b9c9c0] hover:text-[#202522]'" @click="filter = item.key">{{ item.label }}</button></div></div>
            <div v-if="genres.length" class="mb-5 flex flex-wrap items-center gap-2"><span class="text-xs font-bold text-[#8b7568]">ジャンル</span><button type="button" class="rounded-full px-3 py-1.5 text-xs font-semibold transition" :class="genreFilter === 'all' ? 'bg-[#c96b48] text-white' : 'bg-white text-[#74665e] ring-1 ring-[#ded7ca]'" @click="genreFilter = 'all'">すべて</button><button v-for="genre in genres" :key="genre" type="button" class="rounded-full px-3 py-1.5 text-xs font-semibold transition" :class="genreFilter === genre ? 'bg-[#c96b48] text-white' : 'bg-white text-[#74665e] ring-1 ring-[#ded7ca]'" @click="genreFilter = genre">{{ genre }}</button></div>
            <label class="mb-5 mt-5 flex items-center gap-2 text-sm font-semibold text-[#74665e]"><input v-model="japaneseOnly" type="checkbox" class="rounded border-[#d6cec1] text-[#c96b48] focus:ring-[#c96b48]" />日本人作家のみ</label>
            <div v-if="visibleBooks.length" class="grid gap-3 md:grid-cols-2"><article v-for="book in visibleBooks" :key="book.id" class="flex min-w-0 gap-3 border border-[#dfe4e0] bg-white p-3 transition hover:border-[#8fbaaa] sm:gap-4 sm:p-4"><Link :href="route('admin.englishBooks.show', book.id)" class="flex min-w-0 flex-1 gap-3 sm:gap-4"><div class="flex h-28 w-[4.5rem] shrink-0 items-center justify-center overflow-hidden rounded bg-[#eef3f0] text-center text-xs font-bold text-[#748078] sm:h-32 sm:w-20"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="h-full w-full object-cover" /><span v-else>BOOK</span></div><div class="min-w-0 flex-1"><div class="flex flex-wrap gap-1.5"><span class="rounded px-2 py-0.5 text-xs font-bold" :class="book.status === 'finished' ? 'bg-emerald-100 text-emerald-700' : book.status === 'reading' ? 'bg-[#e5f3ed] text-[#167a55]' : 'bg-slate-100 text-slate-600'">{{ statusLabels[book.status] }}</span><span v-if="book.genre" class="rounded bg-[#f1f4f2] px-2 py-0.5 text-xs font-bold text-[#657069]">{{ book.genre }}</span></div><p v-if="book.reading_order" :aria-label="`読み始めた順番 ${book.reading_order}冊目`" class="mt-3 text-sm font-medium tabular-nums text-[#748078]">{{ book.reading_order }}冊目</p><h2 class="mt-2 line-clamp-2 break-words font-bold leading-5 text-[#202522] hover:text-[#167a55]">{{ book.title }}</h2><p v-if="book.author" class="mt-0.5 truncate text-sm text-[#657069]">{{ book.author }}</p><div class="mt-3 flex flex-wrap gap-x-3 gap-y-1 text-xs text-[#657069]"><span v-if="book.difficulty">難易度 {{ Number(book.difficulty).toFixed(1) }}</span><span v-if="book.interest_rating">面白さ {{ '★'.repeat(book.interest_rating) }}</span><span v-if="book.recommendation_rating">おすすめ {{ '★'.repeat(book.recommendation_rating) }}</span><span v-if="book.word_count">{{ formatNumber(book.word_count) }}語<span v-if="book.word_count_estimated">（推定）</span></span><span v-if="book.page_count">{{ book.page_count }}ページ</span><span>読書時間 {{ book.reading_duration }}</span></div><p v-if="book.started_on || book.finished_on" class="mt-2 text-xs leading-5 text-[#748078]"><template v-if="book.started_on && book.finished_on">読書期間 {{ book.started_on }} 〜 {{ book.finished_on }}</template><template v-else-if="book.started_on">読書期間 {{ book.started_on }} 〜</template><template v-else>読了 {{ book.finished_on }}</template></p></div></Link><div class="flex shrink-0 flex-col items-end gap-2 text-xs"><Link :href="route('admin.englishBooks.edit', book.id)" class="h-fit font-bold text-[#167a55] hover:text-[#106443]">記録を編集</Link><button type="button" class="h-fit text-[#8a4a43] hover:text-rose-700" @click="remove(book)">本棚から外す</button></div></article></div>
            <div v-else class="rounded-2xl border border-dashed border-[#cfc3b3] bg-[#fbf9f4] py-16 text-center text-sm text-[#74665e]">{{ books.length ? '条件に一致する本がありません。' : 'まだ本がありません。最初の一冊を登録して、本棚を始めましょう。' }}</div>
        </div>
    </EnglishBooksLayout>
</template>
