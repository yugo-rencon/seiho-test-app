<script setup>
import { computed, ref } from "vue";
import { Link, useForm } from "@inertiajs/vue3";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";

const props = defineProps({ books: { type: Array, default: () => [] }, shelfBookIds: { type: Array, default: () => [] } });
const japaneseOnly = ref(false);
const sortBy = ref('author');
const visibleBooks = computed(() => props.books
    .filter((book) => !japaneseOnly.value || book.is_japanese_author)
    .slice()
    .sort((a, b) => String(sortBy.value === 'author' ? a.author || a.title : a.title).localeCompare(String(sortBy.value === 'author' ? b.author || b.title : b.title), 'ja')));
const shelfBookIds = computed(() => new Set(props.shelfBookIds.map(Number)));
const addForm = useForm({});
const duplicateForm = useForm({});
const addToShelf = (book) => addForm.post(route('admin.englishBooks.shelf.store', book.id));
const duplicate = (book) => duplicateForm.post(route('admin.englishBooks.catalog.duplicate', book.id));
</script>

<template>
    <EnglishBooksLayout title="本のデータベース">
        <div class="mx-auto max-w-7xl px-4 py-8 pb-16 sm:px-8 sm:py-12 sm:pb-20">
            <div class="flex flex-wrap items-end justify-between gap-5"><div><p class="text-xs font-bold tracking-[0.14em] text-[#167a55]">BOOK DATABASE</p><h1 class="mt-2 text-3xl font-extrabold tracking-tight text-[#202522] sm:text-4xl">本のデータベース</h1><p class="mt-3 text-sm text-[#657069]">タイトル・著者・ジャンル・表紙など、本そのものの情報を管理します。</p></div><Link :href="route('admin.englishBooks.catalog.create')" class="w-full rounded-md bg-[#167a55] px-5 py-3 text-center text-sm font-bold text-white transition hover:bg-[#106443] sm:w-auto">+ 本を登録する</Link></div>
            <div class="mb-5 mt-6 flex flex-wrap items-center justify-between gap-x-5 gap-y-3 border-y border-[#dfe4e0] py-3"><div class="flex flex-wrap items-center gap-x-5 gap-y-3"><label class="flex cursor-pointer items-center gap-2 text-sm font-semibold text-[#657069]"><input v-model="japaneseOnly" type="checkbox" class="cursor-pointer rounded border-[#b9c9c0] text-[#167a55] focus:ring-[#167a55]" />日本人作家のみ</label><label class="flex items-center gap-2 text-sm font-semibold text-[#657069]">並び順<select v-model="sortBy" class="rounded-md border-[#cbd5cf] bg-white py-1.5 text-sm"><option value="title">タイトル順</option><option value="author">著者順</option></select></label></div><p class="text-sm font-semibold text-[#657069]">登録済み {{ books.length }}冊 <span v-if="visibleBooks.length !== books.length" class="text-[#748078]">（表示 {{ visibleBooks.length }}冊）</span></p></div>
            <div v-if="visibleBooks.length" class="catalog-list mt-8 grid gap-3 sm:mt-10 md:grid-cols-2"><article v-for="book in visibleBooks" :key="book.id" class="flex min-w-0 gap-3 rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] p-3.5 shadow-[0_5px_18px_rgba(72,55,40,0.05)] sm:gap-4 sm:p-4"><div class="flex h-28 w-[4.5rem] shrink-0 items-center justify-center overflow-hidden rounded-lg bg-[#eee7db] text-xs font-bold text-[#8b7568] sm:h-32 sm:w-20"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="h-full w-full object-cover" /><span v-else>洋書</span></div><div class="min-w-0 flex-1"><h2 class="line-clamp-2 break-words font-bold leading-5 text-[#25323a]">{{ book.title }}</h2><p v-if="book.author" class="mt-1 truncate text-sm text-[#74665e]">{{ book.author }}</p><div class="mt-2 flex flex-wrap gap-1.5"><span v-if="book.genre" class="rounded-full bg-[#f3ede3] px-2 py-0.5 text-xs font-bold text-[#74665e]">{{ book.genre }}</span></div><p class="mt-3 flex flex-wrap gap-x-2 gap-y-1 text-xs text-[#8b7568]"><span v-if="book.word_count">{{ Number(book.word_count).toLocaleString() }}語</span><span v-if="book.page_count">{{ book.page_count }}ページ</span></p><div class="mt-4 flex flex-wrap items-center gap-x-3 gap-y-2 text-sm font-bold"><Link v-if="shelfBookIds.has(Number(book.id))" :href="route('admin.englishBooks.show', book.id)" class="text-[#b65b3d] hover:text-[#8f4029]">読書記録を見る</Link><button v-else type="button" :disabled="addForm.processing" class="text-[#b65b3d] hover:text-[#8f4029] disabled:opacity-50" @click="addToShelf(book)">本棚に追加</button><button type="button" :disabled="duplicateForm.processing" class="text-[#74665e] hover:text-[#25323a] disabled:opacity-50" @click="duplicate(book)">複製</button><Link :href="route('admin.englishBooks.catalog.edit', book.id)" class="text-[#74665e] hover:text-[#25323a]">データベースを編集</Link></div></div></article></div>
            <div v-else class="mt-10 rounded-2xl border border-dashed border-[#cfc3b3] bg-[#fbf9f4] py-16 text-center text-sm text-[#74665e]">{{ books.length ? '条件に一致する本がありません。' : 'まだ本が登録されていません。' }}</div>
        </div>
    </EnglishBooksLayout>
</template>

<style scoped>
.catalog-list > article {
    border-color: #dfe4e0;
    border-radius: 0;
    background: #fff;
    box-shadow: none;
}

.catalog-list > article:hover {
    border-color: #8fbaaa;
}

.catalog-list :deep(h2) { color: #202522; }
.catalog-list :deep(.text-\[\#b65b3d\]) { color: #167a55; }
</style>
