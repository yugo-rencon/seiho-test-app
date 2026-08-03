<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    // constants/subjects.js で定義した科目オブジェクト
    section: {
        type: Object,
        required: true,
    },
    // ログイン状態で文言を出し分けるために使用
    isLoggedIn: {
        type: Boolean,
        default: false,
    },
    // マイページ（科目入力モーダル直リンク）
    mypageInputHref: {
        type: String,
        required: true,
    },
    score: {
        type: Number,
        default: null,
    },
    showScoreStatus: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <div class="flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
        <div>
            <div class="space-y-2">
                <div class="flex items-center gap-2 md:gap-3">
                    <div class="h-8 w-1.5 rounded-full bg-gradient-to-b from-indigo-500 to-purple-500"></div>
                    <h2 class="text-2xl font-bold text-gray-900">
                        {{ section.title }}
                    </h2>

                    <Link
                        v-if="showScoreStatus"
                        :href="mypageInputHref"
                        class="inline-flex items-center gap-1 rounded-full text-xs font-bold transition md:ml-2"
                        :class="
                            score !== null
                                ? 'border border-purple-100 bg-purple-50 px-2.5 py-1 text-purple-700 hover:border-purple-200 hover:bg-purple-100'
                                : 'border border-purple-300 bg-white px-3 py-1.5 text-purple-700 shadow-sm hover:border-purple-400 hover:bg-purple-50 hover:shadow'
                        "
                    >
                        <span v-if="score !== null" class="inline-flex items-center gap-1">
                            <span aria-hidden="true" class="text-[11px]">✓</span>
                            <span>{{ score }}点</span>
                        </span>
                        <span v-else>点数未入力 <span aria-hidden="true">→</span></span>
                    </Link>
                    <Link
                        v-else
                        :href="mypageInputHref"
                        class="hidden items-center gap-1.5 text-[11px] font-semibold text-purple-700 underline decoration-2 decoration-purple-500 underline-offset-2 transition hover:text-purple-800 hover:decoration-[3px] hover:decoration-purple-700 md:ml-3 md:inline-flex"
                    >
                        <span>
                            {{
                                isLoggedIn
                                    ? "本番試験の点数を記録して進捗管理"
                                    : "本番試験の点数を記録して進捗管理（要ログイン）"
                            }}
                        </span>
                    </Link>
                </div>

                <Link
                    v-if="!showScoreStatus"
                    :href="mypageInputHref"
                    class="inline-flex items-center gap-1.5 self-center text-[11px] font-semibold text-purple-700 underline decoration-2 decoration-purple-500 underline-offset-2 transition hover:text-purple-800 hover:decoration-[3px] hover:decoration-purple-700 md:hidden"
                >
                    <span>
                        {{
                            isLoggedIn
                                ? "本番試験の点数を記録して進捗管理"
                                : "本番試験の点数を記録して進捗管理（要ログイン）"
                        }}
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>
