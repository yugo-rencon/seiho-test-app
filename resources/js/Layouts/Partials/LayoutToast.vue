<script setup>
const props = defineProps({
    // 親レイアウトから受け取る表示状態・文言・見た目タイプ
    show: { type: Boolean, default: false },
    message: { type: String, default: "" },
    type: { type: String, default: "info" },
});

defineEmits(["close"]);

const iconByType = {
    success: "✓",
    already: "★",
    auth: "✓",
    cancel: "!",
    info: "i",
};
</script>

<template>
    <transition name="fade">
        <div
            v-if="show && message"
            class="fixed left-1/2 top-20 z-50 w-[min(94vw,760px)] -translate-x-1/2 rounded-2xl px-5 py-4 text-sm shadow-[0_18px_40px_-12px_rgba(0,0,0,0.45)]"
            :class="
                type === 'success'
                    ? 'border-2 border-purple-400 bg-purple-50 text-purple-900'
                    : type === 'already'
                      ? 'border-2 border-purple-400 bg-purple-100 text-purple-900'
                    : type === 'auth'
                      ? 'border-2 border-purple-400 bg-purple-50 text-purple-900'
                    : type === 'cancel'
                      ? 'border-2 border-purple-300 bg-purple-50 text-purple-900'
                      : 'border-2 border-purple-200 bg-white text-gray-700'
            "
        >
            <div class="flex items-center gap-3">
                <span
                    class="inline-flex h-7 w-7 shrink-0 items-center justify-center rounded-full text-sm font-black"
                    :class="
                        type === 'success'
                            ? 'bg-purple-600 text-white'
                            : type === 'already'
                              ? 'bg-purple-700 text-white'
                            : type === 'auth'
                              ? 'bg-purple-600 text-white'
                            : type === 'cancel'
                              ? 'bg-purple-200 text-purple-800'
                              : 'bg-purple-100 text-purple-700'
                    "
                    >{{ iconByType[type] ?? "i" }}</span
                >
                <div class="flex-1">
                    <p
                        class="font-semibold text-base"
                        :class="
                            type === 'success' || type === 'already' || type === 'auth'
                                ? 'text-purple-900'
                                : 'text-gray-700'
                        "
                    >
                        {{ message }}
                    </p>
                </div>
                <button
                    type="button"
                    class="self-center inline-flex h-8 w-8 items-center justify-center rounded-md text-base font-semibold text-gray-500 transition hover:bg-black/5 hover:text-gray-700"
                    aria-label="閉じる"
                    @click="$emit('close')"
                >
                    ×
                </button>
            </div>
        </div>
    </transition>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
