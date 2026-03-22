<script setup>
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
    <div class="p-4 md:p-6">
        <div class="flex flex-col items-start gap-2 sm:flex-row sm:items-center sm:gap-3">
            <div class="whitespace-nowrap text-base font-bold text-gray-900 sm:text-lg">{{ year }}年度</div>
            <span
                v-if="
                    !hasPremium &&
                    Number(year) === 2024 &&
                    currentSubjectId !== 'sisan' &&
                    currentSubjectId !== 'zeihou'
                "
                class="inline-flex items-center rounded-full border border-emerald-300 bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700"
            >
                最新年度フォームA・無料
            </span>
        </div>

        <div class="mt-3 grid grid-cols-3 gap-2 sm:mt-4 sm:flex sm:flex-wrap sm:gap-3">
            <!-- フォームA/B/Cボタン -->
            <a
                v-for="form in forms"
                :key="form"
                :href="`${route(`${routePrefix}${year}${form}`)}?subject=${currentSubjectId}`"
                class="inline-flex w-full items-center justify-center gap-1 rounded-full border border-purple-200 px-2 py-1.5 text-[12px] font-semibold text-purple-700 transition hover:bg-purple-50 sm:w-auto sm:gap-2 sm:px-4 sm:py-2 sm:text-sm"
            >
                フォーム{{ form.toUpperCase() }}
            </a>
        </div>
    </div>
</template>
