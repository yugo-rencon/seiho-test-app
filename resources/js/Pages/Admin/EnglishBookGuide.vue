<script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";

const props = defineProps({ book: { type: Object, required: true }, guideHtml: { type: String, required: true } });
const amazonHost = computed(() => {
    try { return new URL(props.book.amazon_url).hostname.replace(/^www\./, ''); } catch { return 'Amazon'; }
});
</script>

<template>
    <EnglishBooksLayout :title="`${book.title} の読書記録`">
        <div class="min-h-screen bg-[#f7f7f6] py-7 sm:py-12">
            <div class="mx-auto max-w-3xl px-4 sm:px-8">
                <Link :href="route('admin.englishBooks.show', book.id)" class="inline-flex items-center gap-2 text-sm font-medium text-[#767676] transition hover:text-[#333]">← 本の詳細に戻る</Link>
                <article class="mt-5 bg-white px-6 py-9 shadow-[0_1px_3px_rgba(0,0,0,0.07)] sm:mt-7 sm:px-12 sm:py-14">
                    <p class="text-xs font-semibold tracking-[0.14em] text-[#41c9a4]">READING LOG</p>
                    <h1 class="mt-4 break-words text-3xl font-bold leading-tight tracking-tight text-[#222] sm:text-4xl">{{ book.title }}</h1>
                    <p v-if="book.author" class="mt-3 text-base text-[#767676]">{{ book.author }}</p>
                    <div class="note-prose prose prose-slate mt-10 max-w-none prose-headings:font-bold prose-headings:tracking-tight prose-headings:text-[#333] prose-h2:mt-12 prose-h2:border-b prose-h2:border-[#e8e8e8] prose-h2:pb-3 prose-h3:mt-8 prose-p:leading-8 prose-p:text-[#444] prose-li:my-1 prose-li:text-[#444] prose-a:text-[#30a987] prose-a:no-underline hover:prose-a:underline prose-strong:text-[#333] prose-code:rounded prose-code:bg-[#f3f3f3] prose-code:px-1 prose-code:py-0.5 prose-code:text-[#555] prose-code:before:content-none prose-code:after:content-none" v-html="guideHtml"></div>
                    <a v-if="book.amazon_url" :href="book.amazon_url" target="_blank" rel="noopener noreferrer sponsored" class="mt-12 flex overflow-hidden rounded-lg border border-[#dedede] bg-[#fafafa] text-left no-underline transition hover:border-[#bdbdbd] hover:bg-white">
                        <div class="min-w-0 flex-1 px-5 py-5 sm:px-6"><p class="text-xs font-medium text-[#888]">{{ amazonHost }}</p><p class="mt-2 line-clamp-2 text-base font-bold leading-6 text-[#333]">{{ book.title }}</p><p v-if="book.author" class="mt-1 line-clamp-1 text-sm text-[#777]">{{ book.author }}</p><span class="mt-5 inline-flex rounded-md bg-[#333] px-4 py-2 text-sm font-bold text-white">Amazonで見る ↗</span></div>
                        <div class="flex w-28 shrink-0 items-center justify-center border-l border-[#dedede] bg-white p-3 sm:w-36"><img v-if="book.cover_image_url" :src="book.cover_image_url" :alt="`${book.title} の表紙`" class="max-h-40 w-auto max-w-full object-contain" /><span v-else class="text-xs font-bold text-[#aaa]">BOOK</span></div>
                    </a>
                    <div class="mt-14 border-t border-[#eeeeee] pt-5 text-xs text-[#999]">この本の読書記録</div>
                </article>
            </div>
        </div>
    </EnglishBooksLayout>
</template>
