<script setup>
import { Head, Link, router, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

defineProps({
    title: { type: String, required: true },
});

const page = usePage();
const isDaigakuAdmin = computed(() => String(page.url ?? "").startsWith("/daigaku"));

const logout = () => {
    router.post(route("logout"));
};
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-gray-50">
        <!-- 管理者トップバー -->
        <header class="border-b border-gray-200 bg-white">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-3">
                <div class="flex items-center gap-3">
                    <span class="rounded-md bg-gray-900 px-2 py-0.5 text-xs font-bold text-white">ADMIN</span>
                    <span class="text-sm font-semibold text-gray-700">管理者画面</span>
                </div>
                <div class="flex items-center gap-4">
                    <Link
                        :href="isDaigakuAdmin ? '/daigaku' : '/tests'"
                        class="text-xs text-gray-400 hover:text-gray-600"
                    >
                        サイトに戻る
                    </Link>
                    <button
                        type="button"
                        class="text-xs text-gray-400 hover:text-gray-600"
                        @click="logout"
                    >
                        ログアウト
                    </button>
                </div>
            </div>
        </header>

        <main>
            <slot />
        </main>
    </div>
</template>
