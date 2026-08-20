<script setup>
import { Link } from "@inertiajs/vue3";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";
const props = defineProps({ book: { type: Object, required: true } });
const statusLabels = { want: "読みたい", reading: "読書中", finished: "読了" };
const formatNumber = (value) => Number(value || 0).toLocaleString();
</script>

<template>
  <EnglishBooksLayout :title="`${book.title} — 洋書の本棚`">
    <div class="mx-auto max-w-4xl px-4 py-8 pb-16 sm:px-8 sm:py-14 sm:pb-20">
      <Link :href="route('admin.englishBooks.index')" class="text-sm font-bold text-[#74665e] transition hover:text-[#c96b48]">← わたしの本棚に戻る</Link>
      <article class="mt-8 rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] p-5 shadow-[0_8px_30px_rgba(72,55,40,0.06)] sm:p-9">
        <Link v-if="book.has_guide" :href="route('admin.englishBooks.guide', book.id)" class="mb-6 inline-flex rounded-full border border-[#c96b48] px-4 py-2 text-sm font-bold text-[#b65b3d] transition hover:bg-[#f9ede7]">この本の読書記録を見る</Link>
        <div class="flex flex-col gap-7 sm:flex-row sm:gap-10">
          <div class="mx-auto flex h-64 w-40 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-indigo-100 to-violet-200 text-sm font-bold text-indigo-400 shadow-md sm:mx-0 sm:h-72 sm:w-44"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="h-full w-full object-cover" /><span v-else>BOOK</span></div>
          <div class="min-w-0 flex-1">
            <span class="rounded-full px-2.5 py-1 text-xs font-bold" :class="book.status === 'finished' ? 'bg-emerald-100 text-emerald-700' : book.status === 'reading' ? 'bg-amber-100 text-amber-700' : 'bg-slate-100 text-slate-600'">{{ statusLabels[book.status] }}</span>
            <h1 class="mt-4 break-words font-serif text-3xl font-bold leading-tight text-[#25323a] sm:text-4xl">{{ book.title }}</h1>
            <p v-if="book.author" class="mt-3 text-lg text-[#74665e]">{{ book.author }}</p>
            <span v-if="book.genre" class="mt-3 inline-flex rounded-full bg-[#f3ede3] px-2.5 py-1 text-xs font-bold text-[#74665e]">{{ book.genre }}</span>
            <div class="mt-6 flex flex-wrap items-center gap-3">
              <a v-if="book.amazon_url" :href="book.amazon_url" target="_blank" rel="noopener noreferrer sponsored" class="inline-flex rounded-full border border-[#d6cec1] px-4 py-2.5 text-sm font-bold text-[#74665e] transition hover:border-[#c96b48] hover:text-[#b65b3d]">Amazonで見る ↗</a>
              <Link :href="route('admin.englishBooks.edit', book.id)" class="inline-flex rounded-full bg-[#c96b48] px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#ad5637]">この本を編集</Link>
            </div>
          </div>
        </div>
        <dl class="mt-9 grid grid-cols-2 overflow-hidden rounded-xl border border-[#ded7ca] sm:grid-cols-5">
          <div v-if="book.difficulty" class="border-b border-r border-[#ded7ca] p-4 sm:border-b-0"><dt class="text-xs font-bold tracking-wider text-[#8b7568]">難易度</dt><dd class="mt-2 font-serif text-xl font-bold text-[#25323a]">{{ Number(book.difficulty).toFixed(1) }}</dd></div>
          <div v-if="book.interest_rating" class="border-b border-[#ded7ca] p-4 sm:border-b-0 sm:border-r"><dt class="text-xs font-bold tracking-wider text-[#8b7568]">面白さ</dt><dd class="mt-2 text-xl tracking-wider text-[#c96b48]">{{ '★'.repeat(book.interest_rating) }}</dd></div>
          <div v-if="book.recommendation_rating" class="border-b border-r border-[#ded7ca] p-4 sm:border-b-0 sm:border-r"><dt class="text-xs font-bold tracking-wider text-[#8b7568]">おすすめ度</dt><dd class="mt-2 text-xl tracking-wider text-[#c96b48]">{{ '★'.repeat(book.recommendation_rating) }}</dd></div>
          <div v-if="book.word_count" class="border-b border-[#ded7ca] p-4 sm:border-b-0 sm:border-r"><dt class="text-xs font-bold tracking-wider text-[#8b7568]">語数</dt><dd class="mt-2 font-serif text-xl font-bold text-[#25323a]">{{ formatNumber(book.word_count) }}</dd></div>
          <div v-if="book.page_count" class="p-4"><dt class="text-xs font-bold tracking-wider text-[#8b7568]">ページ数</dt><dd class="mt-2 font-serif text-xl font-bold text-[#25323a]">{{ book.page_count }}</dd></div>
        </dl>
        <div class="mt-7 rounded-xl bg-[#f9ede7] p-5"><p class="text-xs font-bold uppercase tracking-wider text-[#8b7568]">Reading time</p><div class="mt-2 flex items-end justify-between gap-3"><p class="font-serif text-2xl font-bold text-[#25323a]">{{ book.reading_duration }}</p><p class="text-xs font-semibold text-[#8b7568]">{{ book.reading_log_count }}回記録</p></div></div>
        <div v-if="book.started_on || book.finished_on" class="mt-7 rounded-xl bg-[#f3ede3] p-5"><p class="text-xs font-bold uppercase tracking-wider text-[#8b7568]">Reading dates</p><p class="mt-2 text-sm font-semibold text-[#3d4b52]"><span v-if="book.started_on">読み始め: {{ book.started_on }}</span><span v-if="book.started_on && book.finished_on" class="mx-2 text-[#b9aa9a]">—</span><span v-if="book.finished_on">読了: {{ book.finished_on }}</span></p></div>
        <section v-if="book.book_overview || book.english_difficulty_note || book.memo" class="mt-7 space-y-5 rounded-xl bg-white/60 p-5 ring-1 ring-[#ded7ca]"><div v-if="book.book_overview"><h2 class="text-sm font-bold text-[#3d4b52]">どんな本？</h2><p class="mt-2 whitespace-pre-wrap text-sm leading-7 text-[#3d4b52]">{{ book.book_overview }}</p></div><div v-if="book.english_difficulty_note"><h2 class="text-sm font-bold text-[#3d4b52]">英語の難しさ</h2><p class="mt-2 whitespace-pre-wrap text-sm leading-7 text-[#3d4b52]">{{ book.english_difficulty_note }}</p></div><div v-if="book.memo"><h2 class="text-sm font-bold text-[#3d4b52]">感想</h2><p class="mt-2 whitespace-pre-wrap text-sm leading-7 text-[#3d4b52]">{{ book.memo }}</p></div></section>
      </article>
    </div>
  </EnglishBooksLayout>
</template>
