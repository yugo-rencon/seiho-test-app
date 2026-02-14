<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head>
        <link rel="icon" type="image/svg+xml" href="/images/rencon-favicon.svg" />
        <link rel="apple-touch-icon" href="/images/rencon-favicon.svg" />
    </Head>
    <div class="min-h-screen flex flex-col justify-center items-center px-4 bg-gray-100">
        <!-- ロゴ非表示 -->

        <div class="mb-4 flex justify-center">
            <Link
                :href="route('tests.index')"
                class="flex items-center gap-3 rounded-full bg-white px-4 py-2 shadow-sm ring-1 ring-purple-100 hover:ring-purple-200"
            >
                <img
                    src="/images/rencon-favicon.svg"
                    alt="生保講座 過去問解説 ロゴ"
                    class="h-10 w-10"
                />
                <span class="text-sm font-semibold text-gray-800">生保講座過去問解説</span>
            </Link>
        </div>
        <div
            class="w-full sm:max-w-md px-6 py-5 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
