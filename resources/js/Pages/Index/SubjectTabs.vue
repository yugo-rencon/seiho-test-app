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
    <div class="flex flex-wrap gap-2">
        <button
            v-for="section in sections"
            :key="section.id"
            type="button"
            @click="emit('update:modelValue', section.id)"
            class="px-4 py-2 rounded-full text-sm font-semibold border transition-colors"
            :class="
                modelValue === section.id
                    ? 'bg-gradient-to-r from-indigo-500 to-purple-500 text-white border-transparent shadow'
                    : 'bg-white text-gray-700 border-gray-200 hover:border-purple-300'
            "
        >
            {{ section.title }}
        </button>
    </div>
</template>
