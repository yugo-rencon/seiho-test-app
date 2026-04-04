<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    brandName: { type: String, default: "生保講座過去問解説" },
    homeRouteName: { type: String, default: "tests.index" },
    logoSrc: { type: String, default: "/images/rencon-favicon.svg" },
    isDaigaku: { type: Boolean, default: false },
    isSenmon: { type: Boolean, default: false },
    isOuyou: { type: Boolean, default: false },
    isIppan: { type: Boolean, default: false },
    hidePricingUi: { type: Boolean, default: false },
});
</script>

<template>
    <footer class="border-t border-gray-100 bg-white">
        <div
            class="mx-auto w-full px-6 py-12"
            :class="isDaigaku ? 'max-w-5xl' : 'container'"
        >
            <!-- 上段: ブランド + 各リンクカテゴリ -->
            <div v-if="isDaigaku" class="md:flex md:items-start md:justify-between md:gap-16">
                <div
                    class="flex flex-col items-center justify-center gap-3 md:flex-row md:items-start md:justify-start md:gap-3"
                >
                    <img
                        :src="logoSrc"
                        alt="れんこん"
                        class="h-10 w-10 object-contain"
                    />
                    <div class="flex flex-col text-center md:text-left">
                        <span
                            class="bg-clip-text text-base font-bold text-transparent bg-gradient-to-r from-blue-600 to-cyan-500"
                        >
                            {{ brandName }}
                        </span>
                        <span class="mt-1 text-xs text-gray-500">
                            ※本サイトは非公式です
                        </span>
                        <span class="mt-3 text-xs text-gray-400">
                            © 2026 {{ brandName }}
                        </span>
                    </div>
                </div>

                <div class="mt-8 grid gap-8 sm:grid-cols-3 md:mt-0 md:shrink-0 md:gap-x-14">
                    <div class="text-center sm:text-left">
                        <div class="text-xs font-semibold text-gray-500">サイト</div>
                        <ul class="mt-3 inline-flex flex-col items-center space-y-2 text-sm sm:items-start">
                            <li>
                                <Link
                                    :href="route(homeRouteName)"
                                    class="text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    生命保険大学課程
                                </Link>
                            </li>
                            <li>
                                <Link
                                    :href="route('tests.index')"
                                    class="whitespace-nowrap text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    生命保険講座
                                </Link>
                            </li>
                            <li>
                                <Link
                                    v-if="!hidePricingUi"
                                    :href="route('daigaku.pricing')"
                                    class="text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    料金
                                </Link>
                            </li>
                            <li>
                                <Link
                                    v-if="hidePricingUi"
                                    :href="route('updateInfo')"
                                    class="text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    更新履歴
                                </Link>
                            </li>
                        </ul>
                    </div>

                    <div class="text-center sm:text-left">
                        <div class="text-xs font-semibold text-gray-500">サポート</div>
                        <ul class="mt-3 inline-flex flex-col items-center space-y-2 text-sm sm:items-start">
                            <li>
                                <Link
                                    :href="route(isDaigaku ? 'daigaku.contact.index' : 'contact.index')"
                                    class="text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    お問い合わせ
                                </Link>
                            </li>
                            <li>
                                <a
                                    href="https://buymeacoffee.com/rencon"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    応援する（寄付）
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="text-center sm:text-left">
                        <div class="text-xs font-semibold text-gray-500">法律</div>
                        <ul class="mt-3 inline-flex flex-col items-center space-y-2 text-sm sm:items-start">
                            <li>
                                <Link
                                    :href="route(isDaigaku ? 'daigaku.policy' : 'policy')"
                                    class="whitespace-nowrap text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    プライバシーポリシー
                                </Link>
                            </li>
                            <li>
                                <Link
                                    :href="route(isDaigaku ? 'daigaku.terms' : 'terms')"
                                    class="text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    利用規約
                                </Link>
                            </li>
                            <li>
                                <Link
                                    :href="route(isDaigaku ? 'daigaku.tokusho' : 'tokusho')"
                                    class="text-gray-600 transition-colors duration-200 hover:text-blue-600"
                                >
                                    特商法に基づく表記
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div v-else class="grid gap-8 md:grid-cols-4">
                <div
                    class="flex flex-col items-center justify-center gap-3 md:flex-row md:items-start md:justify-start md:gap-3"
                >
                    <img
                        :src="logoSrc"
                        alt="れんこん"
                        class="h-10 w-10 object-contain"
                    />
                    <div class="flex flex-col text-center md:text-left">
                        <span
                            class="bg-clip-text text-base font-bold text-transparent"
                            :class="
                                isDaigaku
                                    ? 'bg-gradient-to-r from-blue-600 to-cyan-500'
                                    : isSenmon
                                      ? 'bg-gradient-to-r from-emerald-600 to-lime-500'
                                      : isOuyou
                                        ? 'bg-gradient-to-r from-amber-600 to-orange-500'
                                      : isIppan
                                        ? 'bg-gradient-to-r from-rose-600 to-pink-500'
                                      : 'bg-gradient-to-r from-indigo-600 to-purple-600'
                            "
                        >
                            {{ brandName }}
                        </span>
                        <span class="mt-1 text-xs text-gray-500">
                            ※本サイトは非公式です
                        </span>
                        <span class="mt-3 text-xs text-gray-400">
                            © 2026 {{ brandName }}
                        </span>
                    </div>
                </div>

                <div class="mx-auto w-full max-w-xs text-center md:mx-0 md:max-w-none md:text-left">
                    <div class="text-xs font-semibold text-gray-500">サイト</div>
                    <ul
                        class="mt-3 inline-flex flex-col items-center space-y-2 text-sm md:items-start"
                    >
                        <li>
                            <Link
                                :href="route(homeRouteName)"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isDaigaku
                                        ? 'hover:text-blue-600'
                                        : isSenmon
                                          ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                生命保険講座
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('daigaku.index')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                生命保険大学課程
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('ippan.index')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                生命保険一般課程
                            </Link>
                        </li>
                        <li>
                            <Link
                                v-if="!hidePricingUi"
                                :href="isDaigaku ? route('daigaku.pricing') : route('pricing')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                料金
                            </Link>
                            <Link
                                v-else
                                :href="route('updateInfo')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                更新履歴
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route('updateInfo')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                更新履歴
                            </Link>
                        </li>
                    </ul>
                </div>

                <div class="mx-auto w-full max-w-xs text-center md:mx-0 md:max-w-none md:text-left">
                    <div class="text-xs font-semibold text-gray-500">
                        サポート
                    </div>
                    <ul
                        class="mt-3 inline-flex flex-col items-center space-y-2 text-sm md:items-start"
                    >
                        <li>
                            <Link
                                :href="route(isDaigaku ? 'daigaku.contact.index' : 'contact.index')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                お問い合わせ
                            </Link>
                        </li>
                        <li>
                            <a
                                href="https://buymeacoffee.com/rencon"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
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
                                :href="route(isDaigaku ? 'daigaku.policy' : 'policy')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                プライバシーポリシー
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route(isDaigaku ? 'daigaku.terms' : 'terms')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
                            >
                                利用規約
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="route(isDaigaku ? 'daigaku.tokusho' : 'tokusho')"
                                class="text-gray-600 transition-colors duration-200"
                                :class="
                                    isSenmon
                                        ? 'hover:text-emerald-600'
                                        : isOuyou
                                          ? 'hover:text-amber-600'
                                          : isIppan
                                            ? 'hover:text-rose-600'
                                          : 'hover:text-indigo-600'
                                "
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
                        class="rounded-2xl border border-gray-100 bg-gradient-to-r p-6"
                        :class="
                            isDaigaku
                                ? 'from-gray-50 to-blue-50'
                                : isSenmon
                                  ? 'from-gray-50 to-emerald-50'
                                  : isOuyou
                                    ? 'from-gray-50 to-amber-50'
                                  : isIppan
                                    ? 'from-gray-50 to-rose-50'
                                  : 'from-gray-50 to-purple-50'
                        "
                    >
                        <div class="flex items-start gap-3">
                            <svg
                                class="mt-0.5 h-5 w-5 shrink-0"
                                :class="
                                    isDaigaku
                                        ? 'text-blue-500'
                                        : isSenmon
                                          ? 'text-emerald-500'
                                          : isOuyou
                                            ? 'text-amber-500'
                                          : isIppan
                                            ? 'text-rose-500'
                                          : 'text-indigo-500'
                                "
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
