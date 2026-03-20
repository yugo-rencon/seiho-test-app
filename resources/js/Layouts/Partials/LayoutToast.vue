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
            class="fixed left-1/2 top-20 z-50 w-[min(94vw,680px)] -translate-x-1/2 rounded-2xl border px-4 py-3 text-sm shadow-[0_18px_45px_-20px_rgba(0,0,0,0.5)] backdrop-blur-sm sm:px-5 sm:py-4"
            :class="
                type === 'success'
                    ? 'border-emerald-200 bg-emerald-50/95 text-emerald-900'
                    : type === 'already'
                      ? 'border-amber-200 bg-amber-50/95 text-amber-900'
                    : type === 'auth'
                      ? 'border-sky-200 bg-sky-50/95 text-sky-900'
                    : type === 'cancel'
                      ? 'border-rose-200 bg-rose-50/95 text-rose-900'
                      : 'border-slate-200 bg-white/95 text-slate-700'
            "
        >
            <div class="flex items-center gap-3">
                <span
                    class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full text-sm font-black ring-1"
                    :class="
                        type === 'success'
                            ? 'bg-emerald-600 text-white ring-emerald-300'
                            : type === 'already'
                              ? 'bg-amber-500 text-white ring-amber-300'
                            : type === 'auth'
                              ? 'bg-sky-600 text-white ring-sky-300'
                            : type === 'cancel'
                              ? 'bg-rose-500 text-white ring-rose-300'
                              : 'bg-slate-100 text-slate-700 ring-slate-200'
                    "
                    >{{ iconByType[type] ?? "i" }}</span
                >
                <div class="flex-1">
                    <p
                        class="font-semibold text-[15px] leading-6 sm:text-base"
                        :class="
                            type === 'success' || type === 'already' || type === 'auth'
                                ? 'text-current'
                                : 'text-slate-700'
                        "
                    >
                        {{ message }}
                    </p>
                </div>
                <button
                    type="button"
                    class="self-center inline-flex h-8 w-8 items-center justify-center rounded-lg text-base font-semibold text-slate-500 transition hover:bg-black/5 hover:text-slate-700"
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
    transition: opacity 0.2s ease, transform 0.2s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
    transform: translate(-50%, -8px);
}
</style>
