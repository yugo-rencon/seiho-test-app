<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <!-- 非プレミアム時だけ表示する購入導線 -->
    <Link
        :href="route('pricing')"
        class="group block w-full rounded-xl border border-rose-300 bg-rose-50/70 p-3 text-xs text-gray-700 transition hover:-translate-y-0.5 hover:bg-rose-100 hover:shadow-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-rose-300"
    >
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-2">
                    <span
                        class="rounded-full border border-rose-200 bg-white px-2 py-0.5 text-[11px] font-semibold text-rose-700"
                    >
                        プレミアム
                    </span>
                    <span class="font-semibold text-gray-900"
                        >全ての解説が 1,980円</span
                    >
                </div>
                <div class="mt-2 text-[11px] text-gray-600">
                    全科目・全年度・全フォームの解説を一括解放。一度の購入でずっと見放題
                </div>
            </div>
            <span
                class="hidden items-center gap-1.5 rounded-full border border-rose-200 bg-white py-0.5 pl-2 pr-4 text-[10px] font-bold text-rose-700 shadow sm:inline-flex"
            >
                <img src="/images/bolt.svg" alt="" class="h-3 w-3" />
                購入して解放
            </span>
        </div>
        <span
            class="mt-3 inline-flex w-full items-center justify-center gap-1.5 rounded-full border border-rose-200 bg-white py-1 pl-3 pr-4 text-[11px] font-bold text-rose-700 shadow sm:hidden"
        >
            <img src="/images/bolt.svg" alt="" class="h-3 w-3" />
            購入して解放
        </span>
    </Link>
</template>
