<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    // 右上リンクの出し分けに使用
    isAuthenticated: { type: Boolean, default: false },
    isAdmin: { type: Boolean, default: false },
    brandName: { type: String, default: "生保講座過去問解説" },
    homeRouteName: { type: String, default: "tests.index" },
    logoSrc: { type: String, default: "/images/rencon-favicon.svg" },
    isDaigaku: { type: Boolean, default: false },
});

defineEmits(["open-menu", "open-pricing-modal"]);

// 現在表示中のルート判定（アクティブ色に利用）
const isActive = (name) => route().current(name);
</script>

<template>
    <header
        class="sticky top-0 z-30 border-b border-gray-100 bg-white shadow-sm md:bg-white/80 md:backdrop-blur-lg"
    >
        <div class="mx-auto w-full max-w-6xl px-6">
            <div class="flex items-center justify-between py-2.5">
                <Link :href="route(homeRouteName)" class="flex items-center gap-3">
                    <img
                        :src="logoSrc"
                        :alt="`${brandName} ロゴ`"
                        width="40"
                        height="40"
                        class="h-10 w-10"
                    />
                    <span
                        class="bg-clip-text text-xl font-black text-transparent"
                        :class="
                            isDaigaku
                                ? 'bg-gradient-to-r from-blue-600 to-cyan-500'
                                : 'bg-gradient-to-r from-indigo-600 to-purple-600'
                        "
                    >
                        {{ brandName }}
                    </span>
                </Link>

                <!-- PCヘッダー右側（ログイン/マイページ/管理） -->
                <div
                    v-if="!isDaigaku"
                    class="hidden items-center gap-4 text-[13px] font-medium tracking-[0.01em] md:flex"
                >
                    <Link
                        v-if="isAdmin"
                        :href="route('admin.index')"
                        class="py-1 text-amber-700 transition-colors hover:text-amber-800"
                    >
                        管理
                    </Link>
                    <template v-if="isAuthenticated">
                        <Link
                            :href="route('mypage')"
                            class="py-1 transition-colors"
                            :class="
                                isActive('mypage')
                                    ? 'pointer-events-none text-purple-700'
                                    : 'text-gray-700 hover:text-purple-700'
                            "
                            :aria-current="isActive('mypage') ? 'page' : null"
                        >
                            マイページ
                        </Link>
                    </template>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="py-1 text-gray-700 transition-colors hover:text-purple-700"
                        >
                            ログイン
                        </Link>
                    </template>
                </div>

                <button
                    v-if="!isDaigaku"
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

            <!-- PCナビゲーション -->
            <nav
                v-if="!isDaigaku"
                class="hidden items-center justify-center gap-4 pb-2 text-sm font-semibold text-gray-700 md:flex"
            >
                <Link
                    :href="route('tests.index')"
                    class="border-b-2 px-3 py-1 transition-colors hover:text-purple-900"
                    :class="
                        isActive('tests.index')
                            ? 'border-purple-500 text-purple-900'
                            : 'border-transparent'
                    "
                >
                    解説一覧
                </Link>
                <button
                    type="button"
                    class="border-b-2 px-3 py-1 transition-colors hover:text-purple-900"
                    @click="$emit('open-pricing-modal')"
                    :class="
                        isActive('pricing')
                            ? 'border-purple-500 text-purple-900'
                            : 'border-transparent'
                    "
                >
                    料金
                </button>
            </nav>
        </div>
    </header>
</template>
