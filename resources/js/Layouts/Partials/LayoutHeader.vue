<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

defineProps({
    // 右上リンクの出し分けに使用
    isAuthenticated: { type: Boolean, default: false },
    isAdmin: { type: Boolean, default: false },
    brandName: { type: String, default: "生保講座過去問解説" },
    homeRouteName: { type: String, default: "tests.index" },
    logoSrc: { type: String, default: "/images/rencon-favicon.svg" },
    isDaigaku: { type: Boolean, default: false },
    isSenmon: { type: Boolean, default: false },
    isOuyou: { type: Boolean, default: false },
    isIppan: { type: Boolean, default: false },
    hideAuthUi: { type: Boolean, default: false },
});

defineEmits(["open-menu"]);
const page = usePage();
const loginHref = computed(() => {
    if (!route().has("login")) return "#";
    const returnTo = String(page.url ?? "");
    if (returnTo.startsWith("/daigaku")) {
        return route("login", { scope: "daigaku", return_to: returnTo });
    }

    return route("login", { return_to: returnTo || "/tests" });
});

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
                                    ? 'bg-gradient-to-r from-rose-500 to-red-400'
                                  : 'bg-gradient-to-r from-indigo-600 to-purple-600'
                        "
                    >
                        {{ brandName }}
                    </span>
                </Link>

                <!-- PCヘッダー右側（ログイン/マイページ/管理） -->
                <div
                    v-if="!hideAuthUi"
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
                            :href="route(isDaigaku ? 'daigaku.mypage' : 'mypage')"
                            class="py-1 transition-colors"
                            :class="
                                    isActive('mypage')
                                        ? isDaigaku
                                            ? 'pointer-events-none text-blue-700'
                                            : isSenmon
                                              ? 'pointer-events-none text-emerald-700'
                                              : isOuyou
                                                ? 'pointer-events-none text-amber-700'
                                              : isIppan
                                                ? 'pointer-events-none text-rose-700'
                                              : 'pointer-events-none text-purple-700'
                                        : isDaigaku
                                          ? 'text-gray-700 hover:text-blue-700'
                                          : isSenmon
                                            ? 'text-gray-700 hover:text-emerald-700'
                                            : isOuyou
                                              ? 'text-gray-700 hover:text-amber-700'
                                            : isIppan
                                              ? 'text-gray-700 hover:text-rose-700'
                                            : 'text-gray-700 hover:text-purple-700'
                            "
                            :aria-current="isActive('mypage') ? 'page' : null"
                        >
                            マイページ
                        </Link>
                    </template>
                    <template v-else>
                        <Link
                            :href="loginHref"
                            class="py-1 text-gray-700 transition-colors"
                            :class="
                                isDaigaku
                                    ? 'hover:text-blue-700'
                                    : isSenmon
                                      ? 'hover:text-emerald-700'
                                      : isOuyou
                                        ? 'hover:text-amber-700'
                                      : isIppan
                                        ? 'hover:text-rose-700'
                                      : 'hover:text-purple-700'
                            "
                        >
                            ログイン
                        </Link>
                    </template>
                </div>

                <button
                    class="rounded-xl p-2 transition-colors hover:bg-gray-100 md:hidden"
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
    </header>
</template>
