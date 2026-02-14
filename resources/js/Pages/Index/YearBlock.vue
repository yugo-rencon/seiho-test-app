<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    year: {
        type: Number,
        required: true,
    },
    routePrefix: {
        type: String,
        required: true,
    },
    forms: {
        type: Array,
        required: true,
    },
    hasPremium: {
        type: Boolean,
        default: false,
    },
    currentSubjectId: {
        type: String,
        required: true,
    },
});

// 総論2024年だけ無料。それ以外は非プレミアム時にロック表示。
const isLocked = (year, routePrefix, hasPremium) =>
    !hasPremium && !(year === 2024 && routePrefix === "souron");
</script>

<template>
    <div class="p-5 md:p-6">
        <div class="flex items-center gap-3">
            <div class="text-lg font-bold text-gray-900">{{ year }}年度</div>
            <span
                v-if="isLocked(year, routePrefix, hasPremium)"
                class="ml-2 rounded border border-rose-200 bg-rose-50 px-2 py-0.5 text-[10px] font-semibold text-rose-700"
            >
                プレミアム
            </span>
        </div>

        <div class="mt-4 flex flex-wrap gap-3">
            <!-- フォームA/B/Cボタン -->
            <Link
                v-for="form in forms"
                :key="form"
                :href="`${route(`${routePrefix}${year}${form}`)}?subject=${currentSubjectId}`"
                class="inline-flex items-center gap-2 rounded-full border border-purple-200 px-4 py-2 text-sm font-semibold text-purple-700 transition hover:bg-purple-50"
            >
                フォーム{{ form.toUpperCase() }}
                <img
                    v-if="isLocked(year, routePrefix, hasPremium)"
                    src="/images/lock_open.svg"
                    alt=""
                    class="h-4 w-4 opacity-60"
                />
                <span
                    v-if="isLocked(year, routePrefix, hasPremium)"
                    class="ml-1 rounded-full border border-purple-100 bg-purple-50 px-2 py-0.5 text-[10px] font-semibold text-purple-500"
                >
                    冒頭5問公開中
                </span>
            </Link>
        </div>
    </div>
</template>
