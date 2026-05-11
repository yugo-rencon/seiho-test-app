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
    const currentScope = scope === 'daigaku' || returnTo.startsWith('/daigaku')
        ? 'daigaku'
        : scope === 'ippan' || returnTo.startsWith('/ippan')
          ? 'ippan'
          : scope === 'senmon' || returnTo.startsWith('/senmon')
            ? 'senmon'
            : scope === 'ouyou' || returnTo.startsWith('/ouyou')
              ? 'ouyou'
              : 'seiho';
    const sites = {
        seiho: {
            brandName: '生保講座過去問解説',
            homeRoute: 'tests.index',
            logoSrc: '/images/rencon-favicon.svg?v=seiho',
            ringClass: 'ring-purple-100 hover:ring-purple-200',
        },
        daigaku: {
            brandName: '生命保険大学課程 過去問解説',
            homeRoute: 'daigaku.index',
            logoSrc: '/images/rencon-favicon-daigaku.svg?v=daigaku',
            ringClass: 'ring-blue-100 hover:ring-blue-200',
        },
        ippan: {
            brandName: '生命保険一般課程 過去問解説',
            homeRoute: 'ippan.index',
            logoSrc: '/images/rencon-favicon-ippan.svg?v=ippan',
            ringClass: 'ring-fuchsia-100 hover:ring-fuchsia-200',
        },
        senmon: {
            brandName: '生命保険専門課程 過去問解説',
            homeRoute: 'senmon.index',
            logoSrc: '/images/rencon-favicon-senmon.svg?v=senmon',
            ringClass: 'ring-emerald-100 hover:ring-emerald-200',
        },
        ouyou: {
            brandName: '生命保険応用課程 過去問解説',
            homeRoute: 'ouyou.index',
            logoSrc: '/images/rencon-favicon-ouyou.svg?v=ouyou',
            ringClass: 'ring-amber-100 hover:ring-amber-200',
        },
    };

    return {
        currentScope,
        ...sites[currentScope],
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
