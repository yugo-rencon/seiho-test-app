<script setup>
import { Link } from "@inertiajs/vue3";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const faqs = [
    { question: "購入後、いつまで利用できますか？", answer: "購入済みの対象コンテンツは、利用期限なく閲覧できます。追加料金や月額料金はかかりません。" },
    { question: "今後追加される解説は見られますか？", answer: "購入した対象範囲に新しい解説を追加した場合は、追加料金なしで閲覧できます。ただし、次年度以降の試験について、解説の公開時期・対象科目・対象フォーム・更新頻度を保証するものではありません。" },
    { question: "来年度の試験の解説も必ず公開されますか？", answer: "いいえ。既存解説の修正・追加や新年度試験の解説追加は今後も検討・実施しますが、来年度を含む将来の試験の解説公開をお約束するものではありません。購入時点で公開済みの内容と、料金ページに記載の対象範囲をご確認ください。" },
    { question: "問題文も掲載されていますか？", answer: "問題文そのものは掲載せず、独自に作成した解説コンテンツを提供しています。" },
    { question: "解説内容に誤りを見つけた場合は？", answer: "お問い合わせフォームからご連絡ください。確認のうえ、必要に応じて修正します。制度や試験運用については、必ず公式情報もご確認ください。" },
];
</script>

<template>
    <SeihoTestLayout title="よくある質問">
        <section class="container mx-auto max-w-4xl px-5 py-12 sm:px-6 sm:py-16">
            <p class="text-xs font-bold uppercase tracking-widest text-purple-600">FAQ</p>
            <h1 class="mt-3 text-3xl font-bold text-gray-900 sm:text-4xl">よくある質問</h1>
            <p class="mt-4 text-sm leading-7 text-gray-600 sm:text-base">ご利用方法や解説の更新方針について、よくいただく質問をまとめました。</p>
            <div class="mt-9 space-y-4">
                <section v-for="faq in faqs" :key="faq.question" class="rounded-2xl border border-gray-200 bg-white p-5 sm:p-6">
                    <h2 class="text-base font-bold leading-7 text-gray-900">Q. {{ faq.question }}</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-700 sm:text-base">A. {{ faq.answer }}</p>
                </section>
            </div>
            <div class="mt-9 flex flex-wrap gap-3">
                <Link :href="route('pricing', { scope: 'seiho' })" class="inline-flex items-center rounded-full bg-purple-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-purple-700">料金ページを見る</Link>
                <Link :href="route('contact.index')" class="inline-flex items-center rounded-full border border-purple-200 px-5 py-3 text-sm font-semibold text-purple-700 transition hover:bg-purple-50">お問い合わせ</Link>
            </div>
        </section>
    </SeihoTestLayout>
</template>
