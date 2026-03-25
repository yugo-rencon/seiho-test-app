<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const authUi = computed(() => {
    const url = String(page.url ?? '');
    const query = url.includes('?') ? url.split('?')[1] : '';
    const params = new URLSearchParams(query);
    const scope = params.get('scope');
    const returnTo = params.get('return_to') ?? '';
    const isDaigaku = scope === 'daigaku' || returnTo.startsWith('/daigaku');

    return {
        isDaigaku,
        brandName: isDaigaku ? '生命保険大学課程 過去問解説' : '生保講座過去問解説',
        homeRoute: isDaigaku ? 'daigaku.index' : 'tests.index',
        logoSrc: isDaigaku
            ? '/images/rencon-favicon-daigaku.svg?v=daigaku'
            : '/images/rencon-favicon.svg?v=seiho',
        ringClass: isDaigaku ? 'ring-blue-100 hover:ring-blue-200' : 'ring-purple-100 hover:ring-purple-200',
    };
});
</script>

<template>
    <Head>
        <link rel="icon" type="image/svg+xml" :href="authUi.logoSrc" />
        <link rel="apple-touch-icon" :href="authUi.logoSrc" />
    </Head>
    <div class="min-h-screen flex flex-col justify-center items-center px-4 bg-gray-100">
        <!-- ロゴ非表示 -->

        <div class="mb-4 flex justify-center">
            <Link
                :href="route(authUi.homeRoute)"
                class="flex items-center gap-3 rounded-full bg-white px-4 py-2 shadow-sm ring-1"
                :class="authUi.ringClass"
            >
                <img
                    :src="authUi.logoSrc"
                    :alt="`${authUi.brandName} ロゴ`"
                    class="h-10 w-10"
                />
                <span class="text-sm font-semibold text-gray-800">{{ authUi.brandName }}</span>
            </Link>
        </div>
        <div
            class="w-full sm:max-w-md px-6 py-5 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
