<script setup>
import { Link, Head } from "@inertiajs/vue3";
import { ref } from "vue";

const openGoogleForm = () => {
    const googleFormUrl =
        "https://docs.google.com/forms/d/e/1FAIpQLSdYvdwHrldz56rBizNEgfUx9o5e9WdME_OwXpdjyv7oWlW3mQ/viewform?usp=header";
    window.open(googleFormUrl, "_blank");
};

const isMenuOpen = ref(false);

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
    if (!isMenuOpen.value) openSubjects.value.clear();
};

const openSubjects = ref(new Set());

const toggleSubject = (key) => {
    if (openSubjects.value.has(key)) {
        openSubjects.value.delete(key);
    } else {
        openSubjects.value.add(key);
    }
};

const subjects = [
    {
        name: "生命保険総論",
        key: "souron",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        name: "生命保険計理",
        key: "keiri",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        name: "危険選択",
        key: "kiken",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        name: "約款と法律",
        key: "yakkan",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        name: "生命保険会計",
        key: "kaikei",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        name: "生命保険商品と営業",
        key: "eigyo",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        name: "生命保険と税法",
        key: "zeihou",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        name: "資産運用",
        key: "sisan",
        tests: {
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
];

defineProps({
    title: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head :title="title">
        <link rel="icon" href="/images/rencon3.png" sizes="32x32" />
    </Head>
    <div
        class="scroll-smooth min-h-screen bg-gradient-to-br from-gray-50 via-white to-purple-50"
    >
        <!-- ナビゲーションバー - モダンデザイン -->
        <header
            class="sticky top-0 z-30 bg-white/80 backdrop-blur-lg border-b border-gray-100 shadow-sm"
        >
            <div
                class="container mx-auto flex justify-between items-center px-6 md:px-8 lg:px-16 py-4"
            >
                <Link
                    :href="route('tests.index')"
                    class="flex items-center gap-3 group"
                >
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-xl blur opacity-30 group-hover:opacity-50 transition-opacity"
                        ></div>
                        <img
                            src="/images/rencon3.png"
                            alt="生保講座 過去問解説 ロゴ"
                            width="40"
                            height="40"
                            class="relative w-10 h-10"
                        />
                    </div>
                    <span
                        class="text-xl font-black bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600"
                    >
                        生保講座過去問解説
                    </span>
                </Link>

                <button
                    @click="toggleMenu"
                    class="md:hidden p-2 rounded-xl hover:bg-gray-100 transition-colors"
                >
                    <svg
                        class="w-6 h-6 text-gray-700"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </button>
            </div>
        </header>

        <slot />

        <!-- サイドメニュー - モダンデザイン -->
        <transition name="fade">
            <div
                v-if="isMenuOpen"
                class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"
                @click="toggleMenu"
            >
                <aside
                    class="fixed top-0 right-0 w-80 h-full bg-gradient-to-b from-gray-900 via-gray-900 to-indigo-950 shadow-2xl z-50 overflow-y-auto"
                    @click.stop
                >
                    <!-- ヘッダー -->
                    <div
                        class="relative bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-6 px-6"
                    >
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-2xl font-black">メニュー</h2>
                                <p class="text-sm text-indigo-100 mt-1">
                                    科目から選択
                                </p>
                            </div>
                            <button
                                @click="toggleMenu"
                                class="p-2 hover:bg-white/20 rounded-xl transition-colors"
                            >
                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- メニュー本体 -->
                    <div class="px-4 py-6 space-y-2">
                        <div
                            v-for="subject in subjects"
                            :key="subject.key"
                            class="rounded-2xl overflow-hidden"
                        >
                            <button
                                @click="toggleSubject(subject.key)"
                                class="w-full flex justify-between items-center font-bold text-white py-4 px-5 hover:bg-white/10 transition-all duration-300 rounded-2xl"
                                :class="
                                    openSubjects.has(subject.key)
                                        ? 'bg-white/10'
                                        : ''
                                "
                            >
                                <span class="text-base">{{
                                    subject.name
                                }}</span>
                                <div class="flex items-center gap-2">
                                    <span
                                        class="text-xs text-gray-400 bg-white/10 px-2 py-1 rounded-full"
                                    >
                                        {{
                                            Object.keys(subject.tests).length
                                        }}年度分
                                    </span>
                                    <svg
                                        class="w-5 h-5 text-indigo-400 transition-transform duration-300"
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
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 9l-7 7-7-7"
                                        ></path>
                                    </svg>
                                </div>
                            </button>

                            <!-- 年度ごとの試験 -->
                            <transition name="slide-down">
                                <div
                                    v-if="openSubjects.has(subject.key)"
                                    class="px-3 pb-3 space-y-3"
                                >
                                    <div
                                        v-for="(
                                            forms, yearLabel
                                        ) in subject.tests"
                                        :key="yearLabel"
                                        class="bg-white/5 rounded-xl p-3"
                                    >
                                        <div
                                            class="text-white font-bold text-sm mb-2 px-2 flex items-center gap-2"
                                        >
                                            <div
                                                class="w-2 h-2 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full"
                                            ></div>
                                            {{ yearLabel }}
                                        </div>

                                        <ul class="space-y-1">
                                            <li
                                                v-for="form in forms"
                                                :key="form"
                                            >
                                                <Link
                                                    :href="
                                                        route(
                                                            `${
                                                                subject.key
                                                            }${yearLabel.replace(
                                                                '年度',
                                                                ''
                                                            )}${form}`
                                                        )
                                                    "
                                                    class="flex justify-between items-center px-3 py-2.5 text-gray-300 hover:text-white hover:bg-white/10 rounded-lg transition-all duration-200 text-sm group"
                                                >
                                                    <span class="font-medium"
                                                        >フォーム{{
                                                            form.toUpperCase()
                                                        }}</span
                                                    >
                                                    <svg
                                                        class="w-4 h-4 text-indigo-400 group-hover:translate-x-1 transition-transform"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        viewBox="0 0 24 24"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 5l7 7-7 7"
                                                        ></path>
                                                    </svg>
                                                </Link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </transition>
                        </div>
                    </div>

                    <!-- フッター -->
                    <div class="px-6 py-6 border-t border-white/10">
                        <button
                            @click="toggleMenu"
                            class="w-full py-3 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl transition-all duration-300"
                        >
                            閉じる
                        </button>
                    </div>
                </aside>
            </div>
        </transition>

        <!-- フッター - モダンデザイン -->
        <footer class="bg-white border-t border-gray-100 mt-20">
            <div class="container mx-auto px-6 py-12">
                <div
                    class="flex flex-col md:flex-row md:justify-between md:items-center space-y-8 md:space-y-0"
                >
                    <!-- 左：ロゴとサイト名 -->
                    <div
                        class="flex items-center justify-center md:justify-start space-x-3"
                    >
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-xl blur opacity-30"
                            ></div>
                            <img
                                src="/images/rencon3.png"
                                alt="れんこん"
                                class="relative w-10 h-10 object-contain"
                            />
                        </div>
                        <div class="flex flex-col text-left">
                            <span
                                class="text-base font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600"
                            >
                                生保講座過去問解説
                            </span>
                            <span class="text-xs text-gray-500 mt-1">
                                ※本サイトは非公式です
                            </span>
                        </div>
                    </div>

                    <!-- 中央：リンク -->
                    <nav class="flex justify-center items-center space-x-6">
                        <button
                            @click="openGoogleForm"
                            class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors duration-200 flex items-center gap-2 group"
                        >
                            <svg
                                class="w-4 h-4 group-hover:scale-110 transition-transform"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                ></path>
                            </svg>
                            お問い合わせ
                        </button>

                        <div class="w-px h-4 bg-gray-300"></div>

                        <Link
                            :href="route('policy')"
                            class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors duration-200 flex items-center gap-2 group"
                        >
                            <svg
                                class="w-4 h-4 group-hover:scale-110 transition-transform"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                ></path>
                            </svg>
                            プライバシーポリシー
                        </Link>
                    </nav>

                    <!-- 右：コピーライト + 応援リンク -->
                    <div class="text-center md:text-right">
                        <div class="text-sm text-gray-500 font-medium">
                            © 2026 生保講座過去問解説
                        </div>

                        <div class="mt-2 text-xs text-gray-500">
                            運営継続の励みになります。無理のない範囲で
                            <a
                                href="https://buymeacoffee.com/rencon"
                                target="_blank"
                                rel="noopener"
                                class="underline underline-offset-2 hover:text-indigo-600 transition-colors"
                            >
                                コーヒー1杯分の応援
                            </a>
                            をしていただけると嬉しいです ☕
                        </div>
                    </div>
                </div>

                <!-- 下：免責文 -->
                <div class="mt-10 pt-8 border-t border-gray-100">
                    <div class="max-w-4xl mx-auto">
                        <div
                            class="bg-gradient-to-r from-gray-50 to-purple-50 rounded-2xl p-6 border border-gray-100"
                        >
                            <div class="flex items-start gap-3">
                                <svg
                                    class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                                <div
                                    class="text-xs text-gray-600 leading-relaxed space-y-1"
                                >
                                    <p>
                                        当サイトは受験者の学習支援を目的としたものであり、生命保険協会等の公式機関とは一切関係ありません。
                                    </p>
                                    <p>
                                        問題文等の転載は行っておらず、独自に作成した解説コンテンツを掲載しています。
                                    </p>
                                    <p>
                                        内容の正確性・完全性は保証されませんのでご了承ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
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
    transition: all 0.3s ease;
    max-height: 500px;
    overflow: hidden;
}
.slide-down-enter-from,
.slide-down-leave-to {
    max-height: 0;
    opacity: 0;
}
</style>
