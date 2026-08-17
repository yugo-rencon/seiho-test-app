<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";

const props = defineProps({ books: { type: Array, default: () => [] }, stats: { type: Object, required: true } });
const filter = ref("all");
const deleteForm = useForm({});
const statusLabels = { want: "読みたい", reading: "読書中", finished: "読了" };
const visibleBooks = computed(() => filter.value === "all" ? props.books : props.books.filter((book) => book.status === filter.value));
const formatNumber = (value) => Number(value || 0).toLocaleString();
const remove = (book) => { if (window.confirm(`「${book.title}」を削除しますか？`)) deleteForm.delete(route("admin.englishBooks.delete", book.id), { preserveScroll: true }); };
</script>

<template>
    <EnglishBooksLayout title="洋書の本棚">
        <div class="mx-auto max-w-7xl px-4 py-8 pb-16 sm:px-8 sm:py-14 sm:pb-20">
            <div class="mb-9 flex flex-wrap items-end justify-between gap-5">
                <div class="max-w-2xl"><p class="text-xs font-bold tracking-[0.18em] text-[#b65b3d]">わたしの読書記録</p><h1 class="mt-3 font-serif text-4xl font-bold tracking-tight text-[#25323a] sm:text-5xl">英語で読む、<br class="sm:hidden" />自分だけの本棚。</h1><p class="mt-4 text-sm leading-7 text-[#74665e]">読み終えた物語も、いつか出会いたい一冊も。英語読書の軌跡を、気軽に残していきましょう。</p></div>
                <Link :href="route('admin.englishBooks.catalog')" class="rounded-full bg-[#25323a] px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-[#c96b48]">本を探す</Link>
            </div>

            <div class="mb-10 grid grid-cols-2 overflow-hidden rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] shadow-[0_8px_30px_rgba(72,55,40,0.06)] sm:mb-12 sm:grid-cols-4">
                <div class="border-b border-r border-[#ded7ca] p-4 sm:border-b-0 sm:p-5"><p class="text-xs font-bold tracking-wider text-[#8b7568]">読了した本</p><p class="mt-2 font-serif text-2xl font-bold text-[#25323a] sm:text-3xl">{{ stats.finished_count }}<span class="ml-1 text-base">冊</span></p></div>
                <div class="border-b border-[#ded7ca] p-4 sm:border-b-0 sm:border-r sm:p-5"><p class="text-xs font-bold tracking-wider text-[#8b7568]">読了した語数</p><p class="mt-2 break-all font-serif text-2xl font-bold text-[#25323a] sm:text-3xl">{{ formatNumber(stats.total_words) }}</p></div>
                <div class="border-r border-[#ded7ca] p-4 sm:p-5"><p class="text-xs font-bold tracking-wider text-[#8b7568]">いま読んでいる本</p><p class="mt-2 font-serif text-2xl font-bold text-[#c96b48] sm:text-3xl">{{ stats.reading_count }}<span class="ml-1 text-base">冊</span></p></div>
                <div class="p-5"><p class="text-xs font-bold tracking-wider text-[#8b7568]">これから読みたい本</p><p class="mt-2 font-serif text-3xl font-bold text-[#25323a]">{{ stats.want_count }}<span class="ml-1 text-base">冊</span></p></div>
            </div>

            <div class="mb-5 flex flex-wrap items-center justify-between gap-3"><h2 class="font-serif text-2xl font-bold text-[#25323a]">わたしの本棚 <span class="ml-2 text-sm font-sans font-medium text-[#8b7568]">{{ visibleBooks.length }}冊</span></h2><div class="flex flex-wrap gap-2"><button v-for="item in [{ key: 'all', label: 'すべて' }, { key: 'reading', label: '読書中' }, { key: 'want', label: '読みたい' }, { key: 'finished', label: '読了' }]" :key="item.key" type="button" class="rounded-full px-4 py-2 text-sm font-semibold transition" :class="filter === item.key ? 'bg-[#25323a] text-white' : 'bg-[#fbf9f4] text-[#74665e] ring-1 ring-[#ded7ca] hover:bg-[#eee7db]'" @click="filter = item.key">{{ item.label }}</button></div></div>
            <div v-if="visibleBooks.length" class="grid gap-4 md:grid-cols-2"><article v-for="book in visibleBooks" :key="book.id" class="flex min-w-0 gap-3 rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] p-3.5 shadow-[0_5px_18px_rgba(72,55,40,0.05)] transition hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(72,55,40,0.10)] sm:gap-4 sm:p-4"><Link :href="route('admin.englishBooks.show', book.id)" class="flex min-w-0 flex-1 gap-3 sm:gap-4"><div class="flex h-28 w-[4.5rem] shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-indigo-100 to-violet-200 text-center text-xs font-bold text-indigo-500 sm:h-32 sm:w-20"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="h-full w-full object-cover" /><span v-else>BOOK</span></div><div class="min-w-0 flex-1"><span class="rounded-full px-2 py-0.5 text-xs font-bold" :class="book.status === 'finished' ? 'bg-emerald-100 text-emerald-700' : book.status === 'reading' ? 'bg-amber-100 text-amber-700' : 'bg-slate-100 text-slate-600'">{{ statusLabels[book.status] }}</span><h2 class="mt-2 line-clamp-2 break-words font-bold leading-5 text-gray-900 hover:text-[#c96b48]">{{ book.title }}</h2><p v-if="book.author" class="mt-0.5 truncate text-sm text-gray-500">{{ book.author }}</p><div class="mt-3 flex flex-wrap gap-x-3 gap-y-1 text-xs text-gray-500"><span v-if="book.difficulty">難易度 {{ book.difficulty }}/5</span><span v-if="book.word_count">{{ formatNumber(book.word_count) }}語</span><span v-if="book.page_count">{{ book.page_count }}ページ</span><span v-if="book.rating">{{ '★'.repeat(book.rating) }}</span><span v-if="book.finished_on">読了 {{ book.finished_on }}</span></div><p v-if="book.memo" class="mt-3 line-clamp-2 break-words text-sm text-gray-600">{{ book.memo }}</p></div></Link><div class="flex shrink-0 flex-col items-end gap-2 text-xs"><Link :href="route('admin.englishBooks.edit', book.id)" class="h-fit text-[#c96b48] hover:text-[#ad5637]">編集</Link><button type="button" class="h-fit text-rose-500 hover:text-rose-700" @click="remove(book)">削除</button></div></article></div>
            <div v-else class="rounded-2xl border border-dashed border-[#cfc3b3] bg-[#fbf9f4] py-16 text-center text-sm text-[#74665e]">まだ本がありません。最初の一冊を登録して、本棚を始めましょう。</div>
        </div>
    </EnglishBooksLayout>
</template>
