<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({ title: { type: String, required: true } });

</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen max-w-full overflow-x-hidden bg-[#f6f2ea] text-[#25323a]">
        <header class="border-b border-[#ded7ca] bg-[#fbf9f4]/95 backdrop-blur">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-x-4 gap-y-3 px-4 py-3 sm:px-8 sm:py-4">
                <Link :href="route('admin.englishBooks.index')" class="group flex min-w-0 items-center gap-2.5 sm:gap-3">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-sm bg-[#b65b3d] text-xs font-black text-white shadow-sm transition group-hover:-rotate-3">洋書</span>
                    <span>
                        <span class="block font-serif text-lg font-bold leading-none tracking-tight text-[#25323a]">洋書の本棚</span>
                        <span class="mt-1 hidden text-[10px] font-bold tracking-[0.14em] text-[#8b7568] sm:block">英語で読む時間を、もっと身近に</span>
                    </span>
                </Link>
                <nav class="order-3 flex w-full min-w-0 items-center justify-between border-t border-[#e6dfd3] pt-3 text-xs font-bold sm:order-none sm:w-auto sm:justify-end sm:gap-4 sm:border-0 sm:pt-0 sm:text-sm">
                    <Link :href="route('admin.englishBooks.index')" class="text-[#74665e] transition hover:text-[#c96b48]">本棚</Link>
                    <Link :href="route('admin.englishBooks.catalog')" class="text-[#74665e] transition hover:text-[#c96b48]">本を探す</Link>
                    <Link :href="route('admin.index')" class="text-[#74665e] transition hover:text-[#c96b48]">管理画面</Link>
                </nav>
            </div>
        </header>

        <main class="min-w-0 max-w-full overflow-x-hidden"><slot /></main>

        <footer class="border-t border-[#ded7ca] px-5 py-8 text-center text-xs font-medium tracking-wide text-[#8b7568]">
            洋書の本棚 — あなたの読書の記録
        </footer>
    </div>
</template>

<style scoped>
:global(html),
:global(body) {
    max-width: 100%;
    overflow-x: hidden;
}
</style>
