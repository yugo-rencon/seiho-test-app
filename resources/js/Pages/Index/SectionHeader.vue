<script setup>
defineProps({
    // constants/subjects.js で定義した科目オブジェクト
    section: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <div class="flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
        <div>
            <div class="space-y-2">
                <div class="flex items-center gap-2 md:gap-3">
                    <div class="h-8 w-1.5 rounded-full bg-gradient-to-b from-indigo-500 to-purple-500"></div>
                    <h2 class="text-2xl font-bold text-gray-900">
                        {{ section.title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</template>
