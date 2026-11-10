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
    <div class="grid grid-cols-6 gap-2 sm:flex sm:flex-wrap">
        <button
            v-for="section in sections"
            :key="section.id"
            type="button"
            @click="emit('update:modelValue', section.id)"
            class="col-span-2 min-h-12 min-w-0 whitespace-nowrap rounded-full border px-1 py-2 text-[11px] font-semibold leading-tight transition-colors sm:col-span-1 sm:min-h-0 sm:px-4 sm:text-sm sm:leading-normal"
            :class="[
                modelValue === section.id
                    ? 'bg-gradient-to-r from-indigo-500 to-purple-500 text-white border-transparent shadow'
                    : 'bg-white text-gray-700 border-gray-200 hover:border-purple-300',
            ]"
        >
            <span class="sm:hidden">{{ section.id === "eigyo" ? "商品と営業" : section.title }}</span>
            <span class="hidden sm:inline">{{ section.title }}</span>
        </button>
    </div>
</template>
