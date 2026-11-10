<script setup>
defineProps({
    // 科目タブ一覧（constants/subjects.js から受け取る）
    sections: {
        type: Array,
        required: true,
    },
    // 現在選択中の科目ID（v-model）
    modelValue: {
        type: String,
        required: true,
    },
});

const emit = defineEmits(["update:modelValue"]);
</script>

<template>
    <div class="subject-tabs-scroll -mx-6 flex snap-x snap-mandatory gap-3 overflow-x-auto px-6 pb-2 sm:mx-0 sm:grid sm:grid-cols-4 sm:overflow-visible sm:px-0 sm:pb-0">
        <button
            v-for="section in sections"
            :key="section.id"
            type="button"
            @click="emit('update:modelValue', section.id)"
            class="flex min-h-20 w-44 shrink-0 snap-start flex-col rounded-xl border px-4 py-3 text-left transition sm:w-auto"
            :class="[
                modelValue === section.id
                    ? 'border-transparent bg-gradient-to-br from-indigo-500 to-purple-500 text-white shadow-sm'
                    : 'border-gray-200 bg-white text-gray-700 hover:border-purple-300 hover:bg-purple-50/40',
            ]"
        >
            <span class="text-sm font-bold leading-snug">{{ section.title }}</span>
            <span
                class="mt-2 text-[10px] font-medium"
                :class="modelValue === section.id ? 'text-purple-100' : 'text-gray-400'"
            >
                {{ section.period }}
            </span>
        </button>
    </div>
</template>

<style scoped>
.subject-tabs-scroll {
    scrollbar-width: none;
    -webkit-overflow-scrolling: touch;
}

.subject-tabs-scroll::-webkit-scrollbar {
    display: none;
}
</style>
