<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const pricingHref = computed(() =>
    route("pricing", { return_to: page.url }),
);
</script>

<template>
    <div class="mt-6 rounded-2xl border border-purple-200 bg-white/70 p-6 text-center shadow-sm">
        <div class="text-sm font-semibold text-purple-700">ここから先は有料です</div>
        <p class="mt-2 text-xs text-gray-600">
            続きを読むには購入が必要です。買い切りで全科目・全年度・全フォームの解説を閲覧できます。
        </p>
        <div class="mt-3 text-[11px] text-gray-500">
            一度の購入で、追加課金は一切ありません
        </div>
        <div class="mt-1 text-[11px] text-gray-500">
            全40フォームが今すぐあなたのものに
        </div>
        <div class="mt-4 flex justify-center">
            <Link
                :href="pricingHref"
                class="inline-flex items-center gap-2 rounded-full bg-purple-600 px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-purple-500 transition"
            >
                プレミアムプランで続きを読む
            </Link>
        </div>
    </div>
</template>
