<script setup>
import { onMounted, ref } from "vue";

const STORAGE_KEY = "incident-banner:question-31-access:2026-11";
const isVisible = ref(false);

onMounted(() => {
    try {
        isVisible.value = window.localStorage.getItem(STORAGE_KEY) !== "dismissed";
    } catch {
        isVisible.value = true;
    }
});

const dismiss = () => {
    isVisible.value = false;

    try {
        window.localStorage.setItem(STORAGE_KEY, "dismissed");
    } catch {
        // ストレージを利用できない環境でも、表示中のバナーは閉じられるようにする。
    }
};
</script>

<template>
    <aside
        v-if="isVisible"
        class="border-b border-amber-200 bg-amber-50 text-amber-950"
        aria-label="復旧のお知らせ"
    >
        <div class="mx-auto flex max-w-7xl items-start gap-2 px-4 py-2.5 sm:items-center sm:px-6 lg:px-8">
            <svg
                class="hidden h-5 w-5 shrink-0 text-amber-600 sm:block"
                aria-hidden="true"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M10.3 3.8 2.2 18a2 2 0 0 0 1.7 3h16.2a2 2 0 0 0 1.7-3L13.7 3.8a2 2 0 0 0-3.4 0Z" />
            </svg>

            <p class="min-w-0 flex-1 text-[13px] leading-6 sm:text-sm sm:leading-relaxed">
                <strong class="mr-1 whitespace-nowrap font-bold">【復旧済み】</strong>
                <span class="sm:hidden">一部の解説を閲覧できない不具合は復旧しました。ご迷惑をおかけし、申し訳ございません。</span>
                <span class="hidden sm:inline">一部の解説を閲覧できない不具合が発生していました。現在は復旧しています。ご迷惑をおかけし、申し訳ございません。</span>
            </p>

            <button
                type="button"
                class="-mr-1 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full text-amber-800 transition hover:bg-amber-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-600"
                aria-label="復旧のお知らせを閉じる"
                @click="dismiss"
            >
                <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                </svg>
            </button>
        </div>
    </aside>
</template>
