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
    currentSubjectId: {
        type: String,
        required: true,
    },
    hasPremium: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <div class="p-5 md:p-6">
        <div class="flex items-center gap-3">
            <div class="text-lg font-bold text-gray-900">{{ year }}年度</div>
            <span
                v-if="!hasPremium && Number(year) === 2024"
                class="inline-flex items-center rounded-full border border-emerald-300 bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700"
            >
                最新年度・無料
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
            </Link>
        </div>
    </div>
</template>
