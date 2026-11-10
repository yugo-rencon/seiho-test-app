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
    <div class="subject-tabs-scroll -mx-6 flex gap-2 overflow-x-auto pb-2 pl-6 pr-2 sm:mx-0 sm:grid sm:grid-cols-4 sm:overflow-visible sm:pb-0 sm:pl-0 sm:pr-0">
        <button
            v-for="section in sections"
            :key="section.id"
            type="button"
            @click="emit('update:modelValue', section.id)"
            class="flex min-h-16 w-auto shrink-0 flex-col whitespace-nowrap rounded-lg border px-3 py-2 text-left transition"
            :class="[
                modelValue === section.id
                    ? 'border-transparent bg-gradient-to-br from-indigo-500 to-purple-500 text-white shadow-sm'
                    : 'border-gray-200 bg-white text-gray-700 hover:border-purple-300 hover:bg-purple-50/40',
            ]"
        >
            <span class="text-[13px] font-bold leading-snug">{{ section.title }}</span>
            <span
                class="mt-1.5 text-[9.5px] font-medium"
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
    will-change: scroll-position;
    -webkit-overflow-scrolling: touch;
}

.subject-tabs-scroll::-webkit-scrollbar {
    display: none;
}
</style>
