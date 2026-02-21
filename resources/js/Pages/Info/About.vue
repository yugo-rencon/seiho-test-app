<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const showPricingModal = ref(false);
</script>

<template>
    <SeihoTestLayout title="このサイトについて">
        <section class="container mx-auto max-w-4xl px-5 sm:px-6 py-12 sm:py-16">
            <p class="text-xs font-bold tracking-widest text-purple-600 uppercase">About</p>
            <h1 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">このサイトについて</h1>

            <div class="mt-8 space-y-4">
                <section class="rounded-2xl border border-gray-200 bg-white p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-gray-900">1. サイトの目的</h2>
                    <p class="mt-4 text-sm sm:text-base text-gray-700 leading-relaxed">
                        生保講座過去問解説は、生命保険講座の受験対策を効率化するための学習支援サイトです。
                        年度・フォーム単位で解説を整理し、短時間でも復習しやすい構成を重視しています。
                    </p>
                </section>

                <section class="rounded-2xl border border-gray-200 bg-white p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-gray-900">2. 当サイトの立ち位置</h2>
                    <p class="mt-4 text-sm sm:text-base text-gray-700 leading-relaxed">
                        当サイトは、受験者の学習を支援することのみを目的とした非公式サイトです。
                        生命保険協会および関連団体を代表するものではありません。
                        各種制度や運用については、公式情報を必ず確認してください。
                    </p>
                </section>

                <section class="rounded-2xl border border-purple-100 bg-purple-50 p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-gray-900">3. 提供している主な機能</h2>
                    <ul class="mt-4 space-y-2 text-sm sm:text-base text-gray-700">
                        <li>・年度・フォームごとの過去問解説</li>
                        <li>・無料公開範囲とプレミアム範囲の明確化</li>
                        <li>・マイページでの点数記録と進捗管理</li>
                        <li>・スマホでも見やすい学習導線</li>
                    </ul>
                </section>
            </div>

            <div class="mt-8 flex flex-wrap gap-3">
                <Link
                    :href="route('tests.index')"
                    class="inline-flex items-center rounded-full bg-purple-500 px-6 py-3 text-sm font-semibold text-white hover:bg-purple-600 transition"
                >
                    解説一覧を見る
                </Link>
                <button
                    type="button"
                    class="inline-flex items-center rounded-full border border-purple-200 px-6 py-3 text-sm font-semibold text-purple-700 hover:bg-purple-50 transition"
                    @click="showPricingModal = true"
                >
                    料金プランを見る
                </button>
            </div>

            <section class="mt-10 pt-4 text-xs text-gray-500 border-t border-gray-100">
                最終更新日：2026年2月16日
            </section>
        </section>

        <transition name="fade">
            <div
                v-if="showPricingModal"
                class="fixed inset-0 z-[70] flex items-center justify-center bg-black/40 px-6"
                @click.self="showPricingModal = false"
            >
                <div
                    class="w-full max-w-md rounded-2xl border border-purple-100 bg-white p-6 shadow-xl"
                >
                    <h3 class="text-lg font-bold text-gray-900">プレミアム機能は現在準備中です。</h3>
                    <p class="mt-2 text-sm text-gray-600">4月より正式リリース予定です。</p>
                    <div class="mt-5 flex justify-end">
                        <button
                            type="button"
                            class="rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700"
                            @click="showPricingModal = false"
                        >
                            閉じる
                        </button>
                    </div>
                </div>
            </div>
        </transition>
    </SeihoTestLayout>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
