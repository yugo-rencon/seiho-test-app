<script setup>
import { Head, Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

defineProps({ title: { type: String, required: true } });

const page = usePage();
const isShelfPage = computed(() => String(page.url ?? "").split("?")[0].startsWith("/admin/english-books") && !isCatalogPage.value);
const isCatalogPage = computed(() => String(page.url ?? "").startsWith("/admin/english-books/catalog"));
</script>

<template>
    <Head :title="title" />

    <div class="english-books-theme min-h-screen max-w-full overflow-x-hidden bg-white text-[#202522]">
        <header class="border-b border-[#dfe4e0] bg-white">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-x-5 gap-y-3 px-4 py-4 sm:px-8 sm:py-5">
                <Link :href="route('admin.englishBooks.index')" class="group flex min-w-0 items-center gap-2.5 sm:gap-3">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded bg-[#167a55] text-[11px] font-black tracking-tight text-white">洋書</span>
                    <span>
                        <span class="block text-lg font-extrabold leading-none tracking-tight text-[#202522]">洋書の本棚</span>
                        <span class="mt-1 hidden text-[10px] font-bold tracking-[0.12em] text-[#748078] sm:block">READING LOG</span>
                    </span>
                </Link>
                <nav class="order-3 flex w-full min-w-0 items-center gap-5 border-t border-[#edf0ee] pt-3 text-sm font-bold sm:order-none sm:w-auto sm:border-0 sm:pt-0" aria-label="洋書管理">
                    <Link :href="route('admin.englishBooks.index')" class="border-b-2 py-2 transition" :class="isShelfPage ? 'border-[#167a55] text-[#167a55]' : 'border-transparent text-[#657069] hover:border-[#b9c9c0] hover:text-[#202522]'">わたしの本棚</Link>
                    <Link :href="route('admin.englishBooks.catalog')" class="border-b-2 py-2 transition" :class="isCatalogPage ? 'border-[#167a55] text-[#167a55]' : 'border-transparent text-[#657069] hover:border-[#b9c9c0] hover:text-[#202522]'">本のデータベース</Link>
                </nav>
            </div>
        </header>

        <main class="min-w-0 max-w-full overflow-x-hidden"><slot /></main>

        <footer class="border-t border-[#dfe4e0] px-5 py-7 text-center text-xs font-medium tracking-wide text-[#748078]">
            洋書の本棚 <span class="mx-1.5 text-[#b8c1bb]">/</span> Reading log
        </footer>
    </div>
</template>

<style scoped>
:global(html),
:global(body) {
    max-width: 100%;
    overflow-x: hidden;
}

.english-books-theme {
    font-family: -apple-system, BlinkMacSystemFont, "Hiragino Sans", "Yu Gothic", "Noto Sans JP", sans-serif;
}

.english-books-theme :deep(.font-serif) {
    font-family: inherit;
}
</style>
