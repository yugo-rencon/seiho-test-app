<script setup>
import { Head, Link, router } from "@inertiajs/vue3";

defineProps({ title: { type: String, required: true } });

const logout = () => router.post(route("logout"));
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-[#f6f2ea] text-[#25323a]">
        <header class="border-b border-[#ded7ca] bg-[#fbf9f4]/95 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8">
                <Link :href="route('admin.englishBooks.index')" class="group flex items-center gap-3">
                    <span class="flex h-9 w-7 items-center justify-center rounded-sm bg-[#c96b48] text-[10px] font-black tracking-tight text-white shadow-sm transition group-hover:-rotate-3">EN</span>
                    <span>
                        <span class="block font-serif text-lg font-bold leading-none tracking-tight text-[#25323a]">The English Shelf</span>
                        <span class="mt-1 block text-[10px] font-bold uppercase tracking-[0.18em] text-[#8b7568]">your personal reading room</span>
                    </span>
                </Link>
                <nav class="flex items-center gap-3 text-sm font-semibold">
                    <Link :href="route('admin.index')" class="hidden text-[#74665e] transition hover:text-[#c96b48] sm:inline">管理画面</Link>
                    <button type="button" class="text-[#74665e] transition hover:text-[#c96b48]" @click="logout">ログアウト</button>
                </nav>
            </div>
        </header>

        <main><slot /></main>

        <footer class="border-t border-[#ded7ca] px-5 py-8 text-center text-xs font-medium tracking-wide text-[#8b7568]">
            THE ENGLISH SHELF — READ MORE, LIVE MORE.
        </footer>
    </div>
</template>
