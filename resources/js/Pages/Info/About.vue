<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const openFaq = ref(0);

const faqs = [
    {
        q: "生命保険講座とは何ですか？",
        a: "生命保険会社で実施される社内資格試験です。本サイトはその学習を支援するための非公式解説サイトです。",
    },
    {
        q: "無料で見られる範囲はどこですか？",
        a: "生命保険総論（2024年度フォームA〜C）は無料公開しています。他科目は冒頭5問まで無料です。",
    },
    {
        q: "プレミアムで何が解放されますか？",
        a: "全科目・全年度・全フォームの解説を閲覧できます。広告も非表示になります。",
    },
    {
        q: "スマホでも使えますか？",
        a: "はい。スマホ表示に対応しており、移動中の見直しにも使いやすいUIにしています。",
    },
];
</script>

<template>
    <SeihoTestLayout title="このサイトについて">
        <div class="bg-white border-b border-gray-100">
            <section class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-20">
                <p class="text-xs font-bold tracking-widest text-purple-600 uppercase">About</p>
                <h1 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">このサイトについて</h1>
                <p class="mt-5 max-w-3xl text-base sm:text-lg text-gray-600 leading-relaxed">
                    生保講座過去問解説は、生命保険講座の過去問対策を丁寧に支援する学習サイトです。
                    学習効率を上げるため、要点を短く・わかりやすくまとめています。
                </p>
            </section>
        </div>

        <div class="bg-gray-50">
            <section class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16">
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="rounded-2xl border border-gray-100 bg-white p-6 sm:p-7">
                        <h2 class="text-xl font-bold text-gray-900">サイトの目的</h2>
                        <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                            頻出論点の理解と復習をスムーズに行えるよう、年度・フォーム単位で整理して掲載しています。
                            「必要な解説にすぐ辿り着けること」を重視しています。
                        </p>
                    </article>

                    <article class="rounded-2xl border border-gray-100 bg-white p-6 sm:p-7">
                        <h2 class="text-xl font-bold text-gray-900">活用方法</h2>
                        <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                            まずは無料公開範囲で実際の解説を体験し、必要に応じてプレミアムで全解説を一括解放する使い方がおすすめです。
                            本番前の総復習にも向いています。
                        </p>
                    </article>
                </div>
            </section>
        </div>

        <div class="bg-white border-y border-gray-100">
            <section class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16">
                <p class="text-xs font-bold tracking-widest text-purple-600 uppercase">Features</p>
                <h2 class="mt-3 text-2xl sm:text-3xl font-bold text-gray-900">サイトの特徴</h2>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <article class="rounded-xl border border-gray-100 p-5">
                        <h3 class="font-bold text-gray-900">豊富な過去問</h3>
                        <p class="mt-2 text-sm text-gray-600">年度・フォーム別に整理。見たい解説へ最短で移動できます。</p>
                    </article>
                    <article class="rounded-xl border border-gray-100 p-5">
                        <h3 class="font-bold text-gray-900">丁寧な解説</h3>
                        <p class="mt-2 text-sm text-gray-600">長文より理解重視。間違えやすい論点を簡潔に解説します。</p>
                    </article>
                    <article class="rounded-xl border border-gray-100 p-5">
                        <h3 class="font-bold text-gray-900">いつでも学習</h3>
                        <p class="mt-2 text-sm text-gray-600">スマホ最適化で、移動中やスキマ時間にも活用できます。</p>
                    </article>
                    <article class="rounded-xl border border-gray-100 p-5">
                        <h3 class="font-bold text-gray-900">進捗管理</h3>
                        <p class="mt-2 text-sm text-gray-600">マイページで本番点数を記録し、合格状況を可視化できます。</p>
                    </article>
                </div>
            </section>
        </div>

        <div class="bg-gray-50">
            <section class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16">
                <p class="text-xs font-bold tracking-widest text-purple-600 uppercase">FAQ</p>
                <h2 class="mt-3 text-2xl sm:text-3xl font-bold text-gray-900">よくある質問</h2>
                <div class="mt-8 divide-y divide-gray-200 rounded-2xl border border-gray-100 bg-white">
                    <div v-for="(item, i) in faqs" :key="item.q" class="p-4 sm:p-5">
                        <button
                            type="button"
                            class="w-full text-left flex items-center justify-between gap-4"
                            @click="openFaq = openFaq === i ? -1 : i"
                        >
                            <span class="font-semibold text-gray-900">{{ item.q }}</span>
                            <span class="text-purple-600 text-lg">{{ openFaq === i ? "−" : "+" }}</span>
                        </button>
                        <p v-if="openFaq === i" class="mt-3 text-sm sm:text-base text-gray-600 leading-relaxed">
                            {{ item.a }}
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <div class="bg-gray-900">
            <section class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-white">さっそく過去問に取り組みましょう</h2>
                <p class="mt-4 text-gray-300 text-sm sm:text-base">
                    無料公開範囲からすぐに始められます。必要に応じてプレミアムで全解説を解放できます。
                </p>
                <div class="mt-7 flex flex-wrap justify-center gap-3">
                    <Link
                        :href="route('tests.index')"
                        class="inline-flex items-center rounded-full bg-purple-500 px-6 py-3 text-sm font-semibold text-white hover:bg-purple-600 transition"
                    >
                        解説一覧を見る
                    </Link>
                    <Link
                        :href="route('pricing')"
                        class="inline-flex items-center rounded-full border border-gray-500 px-6 py-3 text-sm font-semibold text-gray-200 hover:bg-gray-800 transition"
                    >
                        料金プランを見る
                    </Link>
                </div>
            </section>
        </div>
    </SeihoTestLayout>
</template>
