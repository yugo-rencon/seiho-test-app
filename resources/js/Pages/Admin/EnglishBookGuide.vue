<script setup>
import { Link } from "@inertiajs/vue3";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";

defineProps({ book: { type: Object, required: true }, guideHtml: { type: String, required: true } });
</script>

<template>
    <EnglishBooksLayout :title="`${book.title} の学習ガイド`">
        <div class="mx-auto max-w-3xl px-4 py-8 pb-16 sm:px-8 sm:py-14 sm:pb-20">
            <Link :href="route('admin.englishBooks.show', book.id)" class="text-sm font-bold text-[#74665e] hover:text-[#c96b48]">← 本の詳細に戻る</Link>
            <article class="mt-8 rounded-2xl border border-[#ded7ca] bg-[#fbf9f4] p-6 shadow-[0_8px_30px_rgba(72,55,40,0.06)] sm:p-10"><p class="text-xs font-bold tracking-[0.16em] text-[#b65b3d]">学習ガイド</p><p class="mt-2 font-serif text-xl font-bold text-[#25323a]">{{ book.title }}</p><div class="prose prose-slate mt-8 max-w-none prose-headings:font-serif prose-headings:text-[#25323a] prose-a:text-[#b65b3d] prose-strong:text-[#25323a]" v-html="guideHtml"></div></article>
        </div>
    </EnglishBooksLayout>
</template>
