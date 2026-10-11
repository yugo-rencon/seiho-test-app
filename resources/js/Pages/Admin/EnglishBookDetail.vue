<script setup>
import { Link } from "@inertiajs/vue3";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";
const props = defineProps({ book: { type: Object, required: true } });
const statusLabels = { want: "読みたい", reading: "読書中", finished: "読了" };
const formatNumber = (value) => Number(value || 0).toLocaleString();
</script>

<template>
  <EnglishBooksLayout :title="`${book.title} — 読書記録`">
    <div class="mx-auto max-w-5xl px-4 py-8 pb-16 sm:px-8 sm:py-12 sm:pb-20">
      <Link :href="route('admin.englishBooks.index')" class="text-sm font-bold text-[#657069] transition hover:text-[#167a55]">← わたしの本棚に戻る</Link>
      <article class="mt-7 border border-[#dfe4e0] bg-white p-5 sm:p-8">
        <div class="flex flex-col gap-7 sm:flex-row sm:gap-9">
          <div class="mx-auto flex h-64 w-40 shrink-0 items-center justify-center overflow-hidden rounded bg-[#eef3f0] text-sm font-bold text-[#748078] sm:mx-0 sm:h-72 sm:w-44"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="h-full w-full object-cover" /><span v-else>BOOK</span></div>
          <div class="min-w-0 flex-1">
            <div class="flex flex-wrap items-center gap-2"><span class="rounded px-2 py-1 text-xs font-bold" :class="book.status === 'finished' ? 'bg-emerald-100 text-emerald-700' : book.status === 'reading' ? 'bg-[#e5f3ed] text-[#167a55]' : 'bg-slate-100 text-slate-600'">{{ statusLabels[book.status] }}</span><span v-if="book.genre" class="rounded bg-[#f1f4f2] px-2 py-1 text-xs font-bold text-[#657069]">{{ book.genre }}</span></div>
            <p v-if="book.reading_order" :aria-label="`読み始めた順番 ${book.reading_order}冊目`" class="mt-4 text-sm font-medium tabular-nums text-[#748078]">{{ book.reading_order }}冊目</p><h1 class="mt-3 break-words text-3xl font-extrabold leading-tight tracking-tight text-[#202522] sm:text-4xl">{{ book.title }}</h1>
            <p v-if="book.author" class="mt-3 text-lg font-medium text-[#657069]">{{ book.author }}</p>
            <div class="mt-7 flex flex-wrap items-center gap-2.5">
              <Link :href="route('admin.englishBooks.catalog.edit', book.id)" class="inline-flex rounded-md border border-[#cbd5cf] px-4 py-2.5 text-sm font-bold text-[#657069] transition hover:border-[#167a55] hover:text-[#167a55]">データベースを編集</Link>
              <a v-if="book.amazon_url" :href="book.amazon_url" target="_blank" rel="noopener noreferrer sponsored" class="inline-flex rounded-md border border-[#cbd5cf] px-4 py-2.5 text-sm font-bold text-[#657069] transition hover:border-[#167a55] hover:text-[#167a55]">Amazonで見る ↗</a>
              <a v-if="book.rakuten_url" :href="book.rakuten_url" target="_blank" rel="noopener noreferrer sponsored" class="inline-flex rounded-md border border-[#cbd5cf] px-4 py-2.5 text-sm font-bold text-[#657069] transition hover:border-[#167a55] hover:text-[#167a55]">楽天ブックスで見る ↗</a>
              <Link :href="route('admin.englishBooks.edit', book.id)" class="inline-flex rounded-md bg-[#167a55] px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#106443]">読書記録を編集</Link>
            </div>
          </div>
        </div>
        <dl class="mt-9 grid grid-cols-2 border-y border-[#dfe4e0] sm:grid-cols-5">
          <div v-if="book.difficulty" class="border-b border-r border-[#dfe4e0] py-4 pr-4 sm:border-b-0 sm:px-5"><dt class="text-xs font-bold tracking-wider text-[#748078]">難易度</dt><dd class="mt-2 text-xl font-extrabold text-[#202522]">{{ Number(book.difficulty).toFixed(1) }}</dd></div>
          <div v-if="book.interest_rating" class="border-b border-[#dfe4e0] py-4 pl-4 sm:border-b-0 sm:border-r sm:px-5"><dt class="text-xs font-bold tracking-wider text-[#748078]">面白さ</dt><dd class="mt-2 text-xl tracking-wider text-[#167a55]">{{ '★'.repeat(book.interest_rating) }}</dd></div>
          <div v-if="book.recommendation_rating" class="border-b border-r border-[#dfe4e0] py-4 pr-4 sm:border-b-0 sm:border-r sm:px-5"><dt class="text-xs font-bold tracking-wider text-[#748078]">おすすめ度</dt><dd class="mt-2 text-xl tracking-wider text-[#167a55]">{{ '★'.repeat(book.recommendation_rating) }}</dd></div>
          <div v-if="book.word_count" class="border-b border-[#dfe4e0] py-4 pl-4 sm:border-b-0 sm:border-r sm:px-5"><dt class="text-xs font-bold tracking-wider text-[#748078]">語数</dt><dd class="mt-2 text-xl font-extrabold text-[#202522]">{{ formatNumber(book.word_count) }}<span v-if="book.word_count_estimated" class="ml-1 text-xs font-semibold text-[#748078]">（推定）</span></dd></div>
          <div v-if="book.page_count" class="border-r border-[#dfe4e0] py-4 pr-4 sm:border-r-0 sm:px-5"><dt class="text-xs font-bold tracking-wider text-[#748078]">ページ数</dt><dd class="mt-2 text-xl font-extrabold text-[#202522]">{{ book.page_count }}</dd></div>
        </dl>
        <div class="mt-8 grid gap-0 border-y border-[#dfe4e0] sm:grid-cols-2"><div class="py-5 sm:border-r sm:border-[#dfe4e0] sm:pr-7"><p class="text-xs font-bold tracking-wider text-[#748078]">読書時間</p><div class="mt-2 flex items-end justify-between gap-3"><p class="text-2xl font-extrabold text-[#202522]">{{ book.reading_duration }}</p><p class="text-xs font-semibold text-[#748078]">{{ book.reading_log_count }}回記録</p></div></div><div v-if="book.started_on || book.finished_on" class="border-t border-[#dfe4e0] py-5 sm:border-t-0 sm:pl-7"><p class="text-xs font-bold tracking-wider text-[#748078]">読書期間</p><p class="mt-2 text-sm font-semibold text-[#3d4a42]"><span v-if="book.started_on">読み始め: {{ book.started_on }}</span><span v-if="book.started_on && book.finished_on" class="mx-2 text-[#aeb9b2]">—</span><span v-if="book.finished_on">読了: {{ book.finished_on }}</span></p></div></div>
        <section v-if="book.book_overview || book.english_difficulty_note || book.memo" class="mt-8 space-y-6 border-t border-[#dfe4e0] pt-7"><div v-if="book.book_overview"><h2 class="text-sm font-bold text-[#202522]">どんな本？</h2><p class="mt-2 whitespace-pre-wrap text-sm leading-7 text-[#3d4a42]">{{ book.book_overview }}</p></div><div v-if="book.english_difficulty_note"><h2 class="text-sm font-bold text-[#202522]">英語の難しさ</h2><p class="mt-2 whitespace-pre-wrap text-sm leading-7 text-[#3d4a42]">{{ book.english_difficulty_note }}</p></div><div v-if="book.memo"><h2 class="text-sm font-bold text-[#202522]">感想</h2><p class="mt-2 whitespace-pre-wrap text-sm leading-7 text-[#3d4a42]">{{ book.memo }}</p></div></section>
      </article>
    </div>
  </EnglishBooksLayout>
</template>
