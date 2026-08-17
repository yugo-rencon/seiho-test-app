<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";

defineProps({ books: { type: Array, default: () => [] } });
const shelfForm = useForm({});
const addToShelf = (book) => shelfForm.post(route("admin.englishBooks.shelf.store", book.id));
</script>

<template>
    <EnglishBooksLayout title="本を探す">
        <div class="mx-auto max-w-7xl px-4 py-8 pb-16 sm:px-8 sm:py-14 sm:pb-20">
            <div class="flex flex-wrap items-end justify-between gap-5"><div><p class="text-xs font-bold tracking-[0.16em] text-[#b65b3d]">洋書カタログ</p><h1 class="mt-2 font-serif text-4xl font-bold text-[#25323a]">本を探す</h1><p class="mt-3 text-sm text-[#74665e]">気になる一冊を見つけて、あなたの本棚に加えましょう。</p></div><Link :href="route('admin.englishBooks.catalog.create')" class="w-full rounded-full bg-[#25323a] px-5 py-3 text-center text-sm font-bold text-white hover:bg-[#c96b48] sm:w-auto">+ 本を登録する</Link></div>
            <div v-if="books.length" class="mt-8 grid gap-4 sm:mt-10 md:grid-cols-2"><article v-for="book in books" :key="book.id" class="flex min-w-0 gap-3 rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] p-3.5 shadow-[0_5px_18px_rgba(72,55,40,0.05)] sm:gap-4 sm:p-4"><div class="flex h-28 w-[4.5rem] shrink-0 items-center justify-center overflow-hidden rounded-lg bg-[#eee7db] text-xs font-bold text-[#8b7568] sm:h-32 sm:w-20"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="h-full w-full object-cover" /><span v-else>洋書</span></div><div class="min-w-0 flex-1"><h2 class="line-clamp-2 break-words font-bold leading-5 text-[#25323a]">{{ book.title }}</h2><p v-if="book.author" class="mt-1 truncate text-sm text-[#74665e]">{{ book.author }}</p><p class="mt-3 flex flex-wrap gap-x-2 gap-y-1 text-xs text-[#8b7568]"><span v-if="book.difficulty">難易度 {{ book.difficulty }}/5</span><span v-if="book.word_count">{{ Number(book.word_count).toLocaleString() }}語</span><span v-if="book.page_count">{{ book.page_count }}ページ</span></p><div class="mt-4 flex flex-wrap items-center gap-x-3 gap-y-2 text-sm font-bold"><button v-if="!book.on_shelf" type="button" class="text-[#b65b3d] hover:text-[#8f4029]" @click="addToShelf(book)">本棚に追加</button><span v-else class="text-emerald-700">本棚に追加済み</span><Link :href="route('admin.englishBooks.catalog.edit', book.id)" class="text-[#74665e] hover:text-[#25323a]">本の情報を編集</Link></div></div></article></div>
            <div v-else class="mt-10 rounded-2xl border border-dashed border-[#cfc3b3] bg-[#fbf9f4] py-16 text-center text-sm text-[#74665e]">カタログにはまだ本がありません。</div>
        </div>
    </EnglishBooksLayout>
</template>
