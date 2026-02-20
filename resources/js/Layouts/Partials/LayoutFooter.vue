<script setup>
import { Link } from "@inertiajs/vue3";

defineEmits(["open-pricing-modal"]);
</script>

<template>
    <footer class="border-t border-gray-100 bg-white">
        <div class="container mx-auto px-6 py-12">
            <!-- 上段: ブランド + 各リンクカテゴリ -->
            <div class="grid gap-8 md:grid-cols-4">
                <div
                    class="flex flex-col items-center justify-center gap-3 md:flex-row md:items-start md:justify-start md:gap-3"
                >
                    <img
                        src="/images/rencon-favicon.svg"
                        alt="れんこん"
                        class="h-10 w-10 object-contain"
                    />
                    <div class="flex flex-col text-center md:text-left">
                        <span
                            class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-base font-bold text-transparent"
                        >
                            生保講座過去問解説
                        </span>
                        <span class="mt-1 text-xs text-gray-500">
                            ※本サイトは非公式です
                        </span>
                        <span class="mt-3 text-xs text-gray-400">
                            © 2026 生保講座過去問解説
                        </span>
                    </div>
                </div>

                <div
                    class="mx-auto w-full max-w-xs text-center md:mx-0 md:max-w-none md:text-left"
                >
                    <div class="text-xs font-semibold text-gray-500">サイト</div>
                    <ul
                        class="mt-3 inline-flex flex-col items-center space-y-2 text-sm md:items-start"
                    >
                        <li>
                            <Link
                                :href="route('tests.index')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                解説一覧
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('study-method')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                勉強法
                            </Link>
                        </li>
                        <li>
                            <button
                                type="button"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                                @click="$emit('open-pricing-modal')"
                            >
                                料金
                            </button>
                        </li>
                        <li>
                            <Link
                                :href="route('updateInfo')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                更新履歴
                            </Link>
                        </li>
                    </ul>
                </div>

                <div
                    class="mx-auto w-full max-w-xs text-center md:mx-0 md:max-w-none md:text-left"
                >
                    <div class="text-xs font-semibold text-gray-500">
                        サポート
                    </div>
                    <ul
                        class="mt-3 inline-flex flex-col items-center space-y-2 text-sm md:items-start"
                    >
                        <li>
                            <Link
                                :href="route('contact.index')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                お問い合わせ
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('about')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                このサイトについて
                            </Link>
                        </li>
                        <li>
                            <a
                                href="https://buymeacoffee.com/rencon"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                応援する（寄付）
                            </a>
                        </li>
                    </ul>
                </div>

                <div
                    class="mx-auto w-full max-w-xs text-center md:mx-0 md:max-w-none md:text-left"
                >
                    <div class="text-xs font-semibold text-gray-500">法律</div>
                    <ul
                        class="mt-3 inline-flex flex-col items-center space-y-2 text-sm md:items-start"
                    >
                        <li>
                            <Link
                                :href="route('policy')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                プライバシーポリシー
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('terms')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                利用規約
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('tokusho')"
                                class="text-gray-600 transition-colors duration-200 hover:text-indigo-600"
                            >
                                特商法に基づく表記
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 下段: 免責・注意文 -->
            <div class="mt-10 border-t border-gray-100 pt-8">
                <div class="mx-auto max-w-4xl">
                    <div
                        class="rounded-2xl border border-gray-100 bg-gradient-to-r from-gray-50 to-purple-50 p-6"
                    >
                        <div class="flex items-start gap-3">
                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0 text-indigo-500"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                            </svg>
                            <div class="space-y-1 text-xs leading-relaxed text-gray-600">
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
</template>
