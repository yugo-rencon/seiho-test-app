<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed, onBeforeUnmount, onMounted, ref } from "vue";

const props = defineProps({
    // 右上リンクの出し分けに使用
    isAuthenticated: { type: Boolean, default: false },
    isAdmin: { type: Boolean, default: false },
    brandName: { type: String, default: "生保講座過去問解説" },
    mobileBrandName: { type: String, default: "" },
    homeRouteName: { type: String, default: "tests.index" },
    logoSrc: { type: String, default: "/images/rencon-favicon.svg" },
    isHengaku: { type: Boolean, default: false },
    isDaigaku: { type: Boolean, default: false },
    isSenmon: { type: Boolean, default: false },
    isOuyou: { type: Boolean, default: false },
    isIppan: { type: Boolean, default: false },
    hasPremium: { type: Boolean, default: false },
    hideAuthUi: { type: Boolean, default: false },
});

defineEmits(["open-menu"]);
const page = usePage();
const studyMenu = ref(null);
const userName = computed(() => page.props?.auth?.user?.name ?? "管理者");
const closeStudyMenuOnOutsideClick = (event) => {
    if (studyMenu.value?.hasAttribute("open") && !studyMenu.value.contains(event.target)) {
        studyMenu.value.removeAttribute("open");
    }
};
onMounted(() => document.addEventListener("pointerdown", closeStudyMenuOnOutsideClick));
onBeforeUnmount(() => document.removeEventListener("pointerdown", closeStudyMenuOnOutsideClick));
const mypageRouteName = computed(() => {
    if (props.isHengaku) return "hengaku.mypage";
    if (props.isDaigaku) return "daigaku.mypage";
    if (props.isIppan) return "ippan.mypage";
    if (props.isSenmon) return "senmon.mypage";
    if (props.isOuyou) return "ouyou.mypage";
    return "mypage";
});
const studyRecordsRouteName = computed(() => props.isIppan ? "ippan.mypage.studyRecords" : "mypage.studyRecords");
// 現在表示中のルート判定（アクティブ色に利用）
const isActive = (name) => route().current(name);
</script>

<template>
    <header
        class="sticky top-0 z-30 border-b border-gray-100 bg-white shadow-sm md:bg-white/80 md:backdrop-blur-lg"
    >
        <div class="mx-auto w-full max-w-6xl px-6">
            <div class="flex items-center justify-between py-2.5">
                <Link :href="route(homeRouteName)" class="flex min-w-0 items-center gap-3">
                    <img
                        :src="logoSrc"
                        :alt="`${brandName} ロゴ`"
                        width="40"
                        height="40"
                        class="h-10 w-10"
                    />
                    <span
                        class="max-w-[calc(100vw-9rem)] truncate bg-clip-text text-base font-black leading-tight text-transparent sm:max-w-none sm:text-xl"
                        :class="
                            isDaigaku
                                ? 'bg-gradient-to-r from-blue-600 to-cyan-500'
                                : isSenmon
                                  ? 'bg-gradient-to-r from-emerald-600 to-lime-500'
                                  : isOuyou
                                    ? 'bg-gradient-to-r from-amber-600 to-orange-500'
                                  : isIppan
                                    ? 'bg-gradient-to-r from-pink-500 to-fuchsia-500'
                                  : isHengaku
                                      ? 'bg-gradient-to-r from-teal-600 to-cyan-600'
                                      : 'bg-gradient-to-r from-indigo-600 to-purple-600'
                        "
                    >
                        <span class="sm:hidden">{{ mobileBrandName || brandName }}</span>
                        <span class="hidden sm:inline">{{ brandName }}</span>
                    </span>
                </Link>

                <!-- PCヘッダー右側（ログイン/マイページ/管理） -->
                <div
                    v-if="!hideAuthUi && (isAdmin || isAuthenticated)"
                    class="hidden items-center gap-4 text-[13px] font-medium tracking-[0.01em] md:flex"
                >
                    <Link
                        v-if="isAdmin"
                        :href="route(isDaigaku ? 'daigaku.admin.index' : 'admin.index')"
                        class="py-1 text-amber-700 transition-colors hover:text-amber-800"
                    >
                        管理
                    </Link>
                    <template v-if="isAuthenticated">
                        <Link
                            v-if="isAdmin && !isDaigaku && !isIppan && !isSenmon && !isOuyou"
                            :href="route('mypage.studyRecords')"
                            class="py-1 transition-colors"
                            :class="
                                isActive('mypage.studyRecords*')
                                    ? 'pointer-events-none text-purple-700'
                                    : 'text-gray-700 hover:text-purple-700'
                            "
                            :aria-current="isActive('mypage.studyRecords*') ? 'page' : null"
                        >
                            演習履歴
                        </Link>
                        <Link
                            v-if="!(isAdmin && isIppan)"
                            :href="route(mypageRouteName)"
                            class="py-1 transition-colors"
                            :class="
                                    isActive(mypageRouteName)
                                        ? isDaigaku
                                            ? 'pointer-events-none text-blue-700'
                                            : isSenmon
                                              ? 'pointer-events-none text-emerald-700'
                                              : isOuyou
                                                ? 'pointer-events-none text-amber-700'
                                              : isIppan
                                                ? 'pointer-events-none text-fuchsia-700'
                                              : 'pointer-events-none text-purple-700'
                                        : isDaigaku
                                          ? 'text-gray-700 hover:text-blue-700'
                                          : isSenmon
                                            ? 'text-gray-700 hover:text-emerald-700'
                                            : isOuyou
                                              ? 'text-gray-700 hover:text-amber-700'
                                            : isIppan
                                              ? 'text-gray-700 hover:text-fuchsia-700'
                                            : 'text-gray-700 hover:text-purple-700'
                            "
                            :aria-current="isActive(mypageRouteName) ? 'page' : null"
                        >
                            マイページ
                        </Link>
                        <details v-if="isAdmin && isIppan" ref="studyMenu" class="group relative">
                            <summary class="flex h-9 w-9 cursor-pointer list-none items-center justify-center rounded-full border border-pink-100 bg-pink-50 text-fuchsia-600 transition hover:border-pink-200 hover:bg-pink-100" aria-label="学習メニューを開く" title="学習メニュー">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 19a7 7 0 0 1 14 0"/><circle cx="12" cy="8" r="4"/></svg>
                            </summary>

                            <div class="absolute right-0 top-full z-40 mt-2 w-72 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-xl">
                                <div class="border-b border-gray-100 px-5 py-4">
                                    <p class="text-xs text-gray-500">学習履歴管理</p>
                                    <p class="mt-0.5 truncate text-sm font-semibold text-gray-900">{{ userName }}</p>
                                </div>
                                <div class="grid grid-cols-2 gap-2 p-3">
                                    <Link :href="route(studyRecordsRouteName)" class="flex min-h-20 flex-col items-center justify-center gap-2 rounded-lg px-3 py-3 text-center text-xs font-semibold text-gray-700 transition hover:bg-pink-50 hover:text-fuchsia-700">
                                        <svg class="h-7 w-7 text-fuchsia-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M5 4h14v16H5z"/><path d="M8 8h8M8 12h8M8 16h5"/></svg>
                                        演習履歴
                                    </Link>
                                    <Link :href="route(mypageRouteName)" class="flex min-h-20 flex-col items-center justify-center gap-2 rounded-lg px-3 py-3 text-center text-xs font-semibold text-gray-700 transition hover:bg-pink-50 hover:text-fuchsia-700">
                                        <svg class="h-7 w-7 text-fuchsia-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="8" r="4"/><path d="M5 20a7 7 0 0 1 14 0"/></svg>
                                        マイページ
                                    </Link>
                                </div>
                            </div>
                        </details>
                    </template>
                </div>

                <!-- モバイルではログイン状態にかかわらずメニューを表示する -->
                <div class="flex shrink-0 items-center md:hidden">
                    <button
                        class="rounded-xl p-2 transition-colors hover:bg-gray-100"
                        aria-label="メニューを開く"
                        @click="$emit('open-menu')"
                    >
                        <svg
                            class="h-6 w-6 text-gray-700"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M4 6h16M4 12h16M4 18h16"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </header>
</template>
