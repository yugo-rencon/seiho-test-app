<script setup>
import { Link } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const props = defineProps({
    // 開閉状態（親のレイアウトで管理）
    open: { type: Boolean, default: false },
    isAuthenticated: { type: Boolean, default: false },
    hasPremium: { type: Boolean, default: false },
    isAdmin: { type: Boolean, default: false },
    subjects: { type: Array, default: () => [] },
});

const emit = defineEmits(["close"]);

// 科目アコーディオン開閉状態
const openSubjects = ref(new Set());
// 科目ごとの選択年度（例: 2024年度）
const activeYears = ref(new Map());

watch(
    () => props.open,
    (isOpen) => {
        if (!isOpen) {
            openSubjects.value.clear();
            activeYears.value.clear();
        }
    },
);

const isActive = (name) => route().current(name);

const closeMenu = () => emit("close");

// 科目アコーディオンを開閉。閉じる時は年度選択もリセット
const toggleSubject = (key) => {
    if (openSubjects.value.has(key)) {
        openSubjects.value.delete(key);
        activeYears.value.delete(key);
    } else {
        openSubjects.value.add(key);
    }
};

// 科目ごとの表示年度を切り替え
const setActiveYear = (subjectKey, yearLabel) => {
    activeYears.value.set(subjectKey, yearLabel);
};
</script>

<template>
    <transition name="fade">
        <div
            v-if="open"
            class="fixed inset-0 z-40 bg-black/30"
            @click="closeMenu"
        >
            <aside
                class="fixed right-0 top-0 z-50 h-full w-80 overflow-y-auto bg-white shadow-xl"
                @click.stop
            >
                <div class="border-b border-gray-100 px-6 py-5">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-bold text-gray-900">メニュー</h2>
                        <button
                            class="rounded-lg p-2 transition-colors hover:bg-gray-100"
                            @click="closeMenu"
                        >
                            <svg
                                class="h-5 w-5 text-gray-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M6 18L18 6M6 6l12 12"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="space-y-6 px-6 py-6">
                    <!-- ログイン状態で出し分ける上部リンク -->
                    <div class="space-y-2">
                        <Link
                            v-if="isAdmin"
                            :href="route('admin.index')"
                            class="block rounded-lg bg-amber-50 px-3 py-2 text-sm font-semibold text-amber-700 transition hover:bg-amber-100"
                            @click="closeMenu"
                        >
                            管理
                        </Link>
                        <template v-if="isAuthenticated">
                            <Link
                                :href="route('mypage')"
                                class="block rounded-lg px-3 py-2 text-sm font-semibold transition"
                                :class="
                                    isActive('mypage')
                                        ? 'pointer-events-none bg-purple-50 text-purple-700'
                                        : 'text-purple-700 hover:bg-purple-50'
                                "
                                :aria-current="isActive('mypage') ? 'page' : null"
                                @click="closeMenu"
                            >
                                マイページ
                            </Link>
                        </template>
                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="block rounded-lg px-3 py-2 text-sm font-semibold text-purple-700 transition hover:bg-purple-50"
                                @click="closeMenu"
                            >
                                ログイン
                            </Link>
                        </template>
                    </div>

                    <!-- 科目ナビ -->
                    <div class="border-t border-gray-100 pt-4">
                        <div class="mb-3 text-xs font-semibold text-gray-500">
                            試験科目
                        </div>
                        <div class="mb-3 overflow-hidden rounded-xl border border-gray-100">
                            <Link
                                :href="route('tests.index')"
                                class="flex w-full items-center justify-between px-4 py-3 text-sm font-semibold text-gray-800 transition-all duration-200 hover:bg-gray-50"
                                @click="closeMenu"
                            >
                                <span>解説一覧</span>
                                <svg
                                    class="h-4 w-4 text-purple-500"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M9 5l7 7-7 7"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                    />
                                </svg>
                            </Link>
                        </div>

                        <div
                            v-for="subject in subjects"
                            :key="subject.key"
                            class="overflow-hidden rounded-xl border border-gray-100"
                        >
                            <button
                                class="flex w-full items-center justify-between px-4 py-3 text-sm font-semibold text-gray-800 transition-all duration-200 hover:bg-gray-50"
                                :class="openSubjects.has(subject.key) ? 'bg-gray-50' : ''"
                                @click="toggleSubject(subject.key)"
                            >
                                <span>{{ subject.name }}</span>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="rounded-full bg-gray-100 px-2 py-1 text-[10px] text-gray-500"
                                    >
                                        {{ Object.keys(subject.tests).length }}年度分
                                    </span>
                                    <svg
                                        class="h-4 w-4 text-purple-500 transition-transform duration-200"
                                        :class="
                                            openSubjects.has(subject.key)
                                                ? 'rotate-180'
                                                : ''
                                        "
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            d="M19 9l-7 7-7-7"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                        />
                                    </svg>
                                </div>
                            </button>

                            <transition name="slide-down">
                                <div
                                    v-if="openSubjects.has(subject.key)"
                                    class="space-y-3 px-3 pb-3"
                                >
                                    <div class="flex flex-wrap gap-2 px-1">
                                        <button
                                            v-for="yearLabel in Object.keys(subject.tests)"
                                            :key="yearLabel"
                                            type="button"
                                            class="rounded-full border px-3 py-1.5 text-xs font-semibold transition-colors"
                                            :class="
                                                (activeYears.get(subject.key) ||
                                                    Object.keys(subject.tests)[0]) ===
                                                yearLabel
                                                    ? 'border-purple-200 bg-purple-100 text-purple-700'
                                                    : 'border-gray-200 bg-white text-gray-600 hover:border-purple-200'
                                            "
                                            @click="setActiveYear(subject.key, yearLabel)"
                                        >
                                            {{ yearLabel }}
                                        </button>
                                    </div>

                                    <div
                                        v-for="(forms, yearLabel) in subject.tests"
                                        v-show="
                                            (activeYears.get(subject.key) ||
                                                Object.keys(subject.tests)[0]) ===
                                            yearLabel
                                        "
                                        :key="yearLabel"
                                        class="rounded-lg bg-gray-50 p-3"
                                    >
                                        <div
                                            class="mb-2 flex items-center gap-2 px-2 text-xs font-semibold text-gray-700"
                                        >
                                            <div
                                                class="h-2 w-2 rounded-full bg-gradient-to-r from-indigo-400 to-purple-400"
                                            ></div>
                                            <span>{{ yearLabel }}</span>
                                            <span
                                                v-if="
                                                    !hasPremium &&
                                                    !(
                                                        yearLabel === '2024年度' &&
                                                        subject.key === 'souron'
                                                    )
                                                "
                                                class="ml-auto rounded-full border border-rose-200 bg-rose-50 px-2 py-0.5 text-[10px] font-semibold text-rose-700"
                                            >
                                                プレミアム
                                            </span>
                                        </div>

                                        <ul class="space-y-1">
                                            <li v-for="form in forms" :key="form">
                                                <Link
                                                    :href="
                                                        route(
                                                            `${subject.key}${yearLabel.replace('年度', '')}${form}`,
                                                        )
                                                    "
                                                    class="group flex items-center justify-between rounded-lg px-3 py-2 text-sm text-gray-600 transition-all duration-150 hover:bg-white hover:text-purple-700"
                                                    @click="closeMenu"
                                                >
                                                    <span
                                                        class="flex items-center gap-2 font-medium"
                                                    >
                                                        フォーム{{ form.toUpperCase() }}
                                                        <img
                                                            v-if="
                                                                !hasPremium &&
                                                                !(
                                                                    yearLabel ===
                                                                        '2024年度' &&
                                                                    subject.key ===
                                                                        'souron'
                                                                )
                                                            "
                                                            src="/images/lock_open.svg"
                                                            alt=""
                                                            class="h-4 w-4 opacity-60"
                                                        />
                                                        <span
                                                            v-if="
                                                                !hasPremium &&
                                                                !(
                                                                    yearLabel ===
                                                                        '2024年度' &&
                                                                    subject.key ===
                                                                        'souron'
                                                                )
                                                            "
                                                            class="rounded-full border border-purple-100 bg-purple-50 px-2 py-0.5 text-[10px] font-semibold text-purple-500"
                                                        >
                                                            冒頭5問公開中
                                                        </span>
                                                    </span>
                                                    <svg
                                                        class="h-4 w-4 text-indigo-400 transition-transform group-hover:translate-x-1"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        viewBox="0 0 24 24"
                                                    >
                                                        <path
                                                            d="M9 5l7 7-7 7"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                        />
                                                    </svg>
                                                </Link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </transition>
                        </div>
                    </div>

                    <!-- 下部の固定ページリンク -->
                    <div class="border-t border-gray-100 pt-4">
                        <div class="space-y-2">
                            <Link
                                :href="route('studyMethod')"
                                class="block rounded-lg px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-purple-50 hover:text-purple-700"
                                @click="closeMenu"
                            >
                                勉強法
                            </Link>
                            <Link
                                :href="route('pricing')"
                                class="block rounded-lg px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-purple-50 hover:text-purple-700"
                                @click="closeMenu"
                            >
                                料金
                            </Link>
                            <Link
                                :href="route('about')"
                                class="block rounded-lg px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-purple-50 hover:text-purple-700"
                                @click="closeMenu"
                            >
                                このサイトについて
                            </Link>
                            <Link
                                v-if="isAuthenticated"
                                :href="route('logout')"
                                method="post"
                                as="button"
                                class="block w-full rounded-lg px-3 py-2 text-left text-sm font-semibold text-gray-700 transition hover:bg-purple-50 hover:text-purple-700"
                                @click="closeMenu"
                            >
                                ログアウト
                            </Link>
                        </div>
                    </div>
                </div>

                <div class="border-t border-white/10 px-6 py-6">
                    <button
                        class="w-full rounded-xl bg-white/10 py-3 font-semibold text-white transition-all duration-300 hover:bg-white/20"
                        @click="closeMenu"
                    >
                        閉じる
                    </button>
                </div>
            </aside>
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

.slide-down-enter-active,
.slide-down-leave-active {
    max-height: 500px;
    overflow: hidden;
    transition: all 0.3s ease;
}
.slide-down-enter-from,
.slide-down-leave-to {
    max-height: 0;
    opacity: 0;
}
</style>
