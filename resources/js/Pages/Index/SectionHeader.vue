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
});
</script>

<template>
    <div class="flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
        <div>
            <div class="space-y-2">
                <div class="flex items-center gap-2 md:gap-3">
                    <h2 class="text-xl font-bold text-gray-900">
                        {{ section.title }}
                    </h2>

                    <!-- PC用: マイページ入力導線 -->
                    <Link
                        :href="mypageInputHref"
                        class="hidden items-center gap-1.5 text-[11px] font-semibold text-purple-700 underline decoration-2 decoration-purple-500 underline-offset-2 transition hover:text-purple-800 hover:decoration-[3px] hover:decoration-purple-700 md:ml-3 md:inline-flex"
                    >
                        <span class="text-purple-600">📝</span>
                        <span>
                            {{
                                isLoggedIn
                                    ? "本番試験の点数を記録して進捗管理"
                                    : "本番試験の点数を記録して進捗管理（要ログイン）"
                            }}
                        </span>
                    </Link>
                </div>

                <!-- SP用: 改行して見やすく表示 -->
                <Link
                    :href="mypageInputHref"
                    class="inline-flex items-center gap-1.5 self-center text-[11px] font-semibold text-purple-700 underline decoration-2 decoration-purple-500 underline-offset-2 transition hover:text-purple-800 hover:decoration-[3px] hover:decoration-purple-700 md:hidden"
                >
                    <span class="text-purple-600">📝</span>
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
