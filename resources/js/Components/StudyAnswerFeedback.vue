<script setup>
import { onBeforeUnmount, watch } from "vue";

const props = defineProps({
    visible: { type: Boolean, default: false },
    correct: { type: Boolean, default: false },
    duration: { type: Number, default: 650 },
});

const emit = defineEmits(["dismissed"]);
let timer = null;

watch(
    () => props.visible,
    (visible) => {
        if (timer) window.clearTimeout(timer);
        if (visible) timer = window.setTimeout(() => emit("dismissed"), props.duration);
    },
);

onBeforeUnmount(() => {
    if (timer) window.clearTimeout(timer);
});
</script>

<template>
    <Teleport to="body">
        <Transition
            enter-active-class="transition duration-200 ease-out"
            enter-from-class="scale-95 opacity-0"
            enter-to-class="scale-100 opacity-100"
            leave-active-class="transition duration-200 ease-in"
            leave-from-class="scale-100 opacity-100"
            leave-to-class="scale-95 opacity-0"
        >
            <div v-if="visible" class="fixed inset-0 z-[100] flex items-center justify-center bg-gray-950/10 px-4" role="status" aria-live="assertive">
                <div class="flex min-w-52 flex-col items-center rounded-2xl border bg-white px-10 py-8 shadow-2xl" :class="correct ? 'border-emerald-200' : 'border-rose-200'">
                    <span class="flex h-20 w-20 items-center justify-center rounded-full text-6xl font-bold leading-none" :class="correct ? 'bg-emerald-50 text-emerald-600' : 'bg-rose-50 text-rose-600'">
                        {{ correct ? "○" : "×" }}
                    </span>
                    <span class="mt-4 text-2xl font-bold tracking-wide" :class="correct ? 'text-emerald-700' : 'text-rose-700'">
                        {{ correct ? "正解" : "不正解" }}
                    </span>
                </div>
            </div>
        </Transition>
    </Teleport>
</template>
