<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

defineEmits(["back"]);

const page = usePage();
const pricingHref = computed(() => route("pricing", { return_to: page.url }));
</script>

<template>
    <section class="mx-auto max-w-2xl rounded-xl border border-violet-100 bg-white px-5 py-7 text-center shadow-sm sm:px-8 sm:py-9" aria-labelledby="study-paywall-title">
        <div class="mx-auto flex h-11 w-11 items-center justify-center rounded-full bg-violet-50 text-violet-600">
            <svg aria-hidden="true" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5 8V6a5 5 0 0 1 10 0v2h.5A1.5 1.5 0 0 1 17 9.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 3 16.5v-7A1.5 1.5 0 0 1 4.5 8H5Zm2 0h6V6a3 3 0 1 0-6 0v2Z" clip-rule="evenodd" />
            </svg>
        </div>

        <h2 id="study-paywall-title" class="mt-4 text-xl font-bold tracking-tight text-gray-950">ここから先は</h2>

        <div class="mx-auto mt-5 max-w-sm border-y border-gray-100 py-4">
            <p class="text-xs font-medium text-gray-500">買い切り</p>
            <p class="mt-1 text-2xl font-semibold tracking-tight text-gray-950">¥2,480</p>
            <p class="mt-3 text-sm text-gray-600">一度の購入で、全科目・全年度の解説が見放題</p>
            <p class="mt-1 text-xs text-gray-500"><span class="font-semibold text-violet-700">全144解説</span>が閲覧可能（今後の追加コンテンツを含む）</p>
        </div>

        <div class="mt-5 flex flex-col items-center gap-3">
            <Link :href="pricingHref" class="inline-flex min-h-12 w-full max-w-sm items-center justify-center rounded-lg bg-violet-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-violet-700">
                全ての解説を解放
            </Link>
            <button type="button" class="inline-flex min-h-10 items-center px-3 text-sm text-gray-500 hover:text-gray-900" @click="$emit('back')">
                前の問題に戻る
            </button>
        </div>
    </section>
</template>
