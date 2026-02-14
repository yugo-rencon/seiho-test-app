<script setup>
import { ref, computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

// 更新履歴の全データ
const allUpdates = [
    {
        date: '2025.12.19',
        title: '2024年度 生命保険と税法 解説追加',
        description: '2024年度の『生命保険と税法』の解説を公開しました。フォームA・B・Cすべての解説をご用意しています。',
        badge: 'NEW',
        badgeColor: 'from-pink-500 to-red-500',
        category: 'コンテンツ追加'
    },
    {
        date: '2025.12.16',
        title: '2024年度 資産の運用 解説追加',
        description: '2024年度の『資産の運用』の解説を公開しました。フォームA・B・Cすべての解説をご用意しています。',
        badge: 'NEW',
        badgeColor: 'from-pink-500 to-red-500',
        category: 'コンテンツ追加'
    },
    {
        date: '2025.12.16',
        title: 'サイトリニューアル',
        description: 'ホーム画面のデザインを一新しました。また更新履歴一覧ページを新たに作成しました。',
        badge: 'INFO',
        badgeColor: 'from-purple-500 to-indigo-500',
        category: 'サイト改善'
    },
    {
        date: '2025.11.30',
        title: '生命保険会計 解説不備の訂正',
        description: '2022年度『生命保険会計』フォームC（問11,12,19）の解説に不備があったため内容を修正いたしました。',
        badge: 'UPDATE',
        badgeColor: 'from-blue-500 to-indigo-500',
        category: 'コンテンツ更新'
    },
    {
        date: '2025.11.30',
        title: '生命保険商品と営業 解説不備の訂正',
        description: '2021年度『生命保険商品と営業』フォームB・C（問21,24,25,26,28,29,30）の解説に不備があったため内容を修正いたしました。',
        badge: 'UPDATE',
        badgeColor: 'from-blue-500 to-indigo-500',
        category: 'コンテンツ更新'
    },
    // {
    //     date: '2024.11.20',
    //     title: '危険選択・約款と法律 2024年度版を追加',
    //     description: '10月〜11月実施の試験科目の最新解説を公開しました。全フォームの詳細な解説をご覧いただけます。',
    //     badge: 'NEW',
    //     badgeColor: 'from-pink-500 to-red-500',
    //     category: 'コンテンツ追加'
    // },
    // {
    //     date: '2024.10.10',
    //     title: 'サイトリニューアル',
    //     description: 'デザインを一新し、より使いやすいUIになりました。レスポンシブ対応も強化し、スマートフォンでも快適にご利用いただけます。',
    //     badge: 'INFO',
    //     badgeColor: 'from-purple-500 to-indigo-500',
    //     category: 'サイト改善'
    // },
    // {
    //     date: '2024.09.15',
    //     title: '生命保険総論・計理 2024年度版を追加',
    //     description: '8月〜9月実施の試験科目の最新解説を公開しました。フォームA・B・Cすべての詳細な解説をご用意しています。',
    //     badge: 'NEW',
    //     badgeColor: 'from-pink-500 to-red-500',
    //     category: 'コンテンツ追加'
    // },
    // {
    //     date: '2024.08.20',
    //     title: '検索機能を追加',
    //     description: '過去問を科目や年度から簡単に検索できる機能を追加しました。目的の問題により素早くアクセスできます。',
    //     badge: 'NEW',
    //     badgeColor: 'from-pink-500 to-red-500',
    //     category: 'サイト改善'
    // },
    // {
    //     date: '2024.07.05',
    //     title: '解説の詳細度を向上',
    //     description: '2023年度の全科目について、解説内容をより詳しく改訂しました。図表や補足説明を多数追加しています。',
    //     badge: 'UPDATE',
    //     badgeColor: 'from-blue-500 to-indigo-500',
    //     category: 'コンテンツ更新'
    // },
    // {
    //     date: '2024.06.01',
    //     title: 'お気に入り機能を実装',
    //     description: '気になる問題をお気に入りに登録できる機能を追加しました。後から見返したい問題を簡単に管理できます。',
    //     badge: 'NEW',
    //     badgeColor: 'from-pink-500 to-red-500',
    //     category: 'サイト改善'
    // },
    // {
    //     date: '2024.03.10',
    //     title: '2024年度試験対応ガイドを公開',
    //     description: '2024年度の試験に向けた学習ガイドと出題傾向分析を公開しました。効率的な学習計画の参考にしてください。',
    //     badge: 'INFO',
    //     badgeColor: 'from-purple-500 to-indigo-500',
    //     category: 'お知らせ'
    // },
    // {
    //     date: '2024.02.20',
    //     title: '生命保険と税法・資産の運用 2024年度版を追加',
    //     description: '2月〜3月実施の試験科目の最新解説を公開しました。税制改正に対応した内容となっています。',
    //     badge: 'NEW',
    //     badgeColor: 'from-pink-500 to-red-500',
    //     category: 'コンテンツ追加'
    // },
    // {
    //     date: '2024.01.15',
    //     title: 'モバイルアプリ版をリリース',
    //     description: 'iOS・Android向けのモバイルアプリをリリースしました。オフラインでも過去問を学習できます。',
    //     badge: 'NEW',
    //     badgeColor: 'from-pink-500 to-red-500',
    //     category: 'サイト改善'
    // }
];

// フィルター用のカテゴリー一覧
const categories = ['すべて', 'コンテンツ追加', 'コンテンツ更新', 'サイト改善', 'お知らせ'];
const selectedCategory = ref('すべて');

// フィルター済みの更新履歴
const filteredUpdates = computed(() => {
    if (selectedCategory.value === 'すべて') {
        return allUpdates;
    }
    return allUpdates.filter(update => update.category === selectedCategory.value);
});

// 年別にグループ化（新しい年が上）
const groupedByYear = computed(() => {
    const groups = {};
    filteredUpdates.value.forEach(update => {
        const year = update.date.split('.')[0];
        if (!groups[year]) {
            groups[year] = [];
        }
        groups[year].push(update);
    });
    // 年を降順（新しい年が上）にソートして配列として返す
    return Object.keys(groups)
        .sort((a, b) => Number(b) - Number(a))
        .map(year => ({
            year,
            updates: groups[year]
        }));
});
</script>

<template>
    <SeihoTestLayout title="更新履歴 - 生命保険講座過去問解説">
        <div id="update-info" class="container mx-auto px-5 sm:px-6 m-10 max-w-7xl">
            <div class="bg-white/80 backdrop-blur-sm p-6 md:p-8 rounded-2xl sm:rounded-3xl shadow-xl border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full filter blur-3xl opacity-30 -mr-32 -mt-32"></div>

                <div class="relative">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="h-8 w-1.5 bg-gradient-to-b from-indigo-500 to-purple-500 rounded-full"></div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h2 class="text-xl font-bold text-gray-900">
                                    更新履歴
                                </h2>
                                <span class="text-[11px] font-semibold text-purple-700 bg-purple-50 border border-purple-100 rounded-full px-2 py-0.5">
                                    最新情報
                                </span>
                            </div>
                            <p class="text-xs text-gray-500">
                                サイトの更新情報をお知らせします
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2">
                        <button
                            v-for="category in categories"
                            :key="category"
                            type="button"
                            @click="selectedCategory = category"
                            class="px-4 py-2 rounded-full text-sm font-semibold border transition-colors"
                            :class="
                                selectedCategory === category
                                    ? 'bg-gradient-to-r from-indigo-500 to-purple-500 text-white border-transparent shadow'
                                    : 'bg-white text-gray-700 border-gray-200 hover:border-purple-300'
                            "
                        >
                            {{ category }}
                        </button>
                    </div>

                    <div class="mt-8 space-y-10">
                        <div v-for="group in groupedByYear" :key="group.year">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="text-lg font-bold text-gray-900">
                                    {{ group.year }}年
                                </div>
                                <div class="h-px flex-1 bg-gradient-to-r from-purple-200 to-transparent"></div>
                            </div>

                            <div class="divide-y divide-gray-100 border border-gray-100 rounded-2xl bg-white">
                                <div v-for="(update, index) in group.updates" :key="index" class="p-5 md:p-6">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="text-sm font-bold text-indigo-600">{{ update.date }}</span>
                                        <span
                                            class="px-2 py-0.5 text-[10px] font-semibold text-white rounded-full"
                                            :class="`bg-gradient-to-r ${update.badgeColor}`"
                                        >
                                            {{ update.badge }}
                                        </span>
                                        <span class="px-2 py-0.5 text-[10px] font-semibold text-gray-600 bg-gray-100 rounded-full">
                                            {{ update.category }}
                                        </span>
                                    </div>

                                    <div class="mt-3 text-base font-bold text-gray-900">
                                        {{ update.title }}
                                    </div>
                                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                                        {{ update.description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex justify-center">
                        <Link
                            href="/"
                            class="inline-flex items-center gap-2 rounded-full border border-purple-200 px-5 py-2.5 text-sm font-semibold text-purple-700 hover:bg-purple-50 transition"
                        >
                            ホームに戻る
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </SeihoTestLayout>
</template>
