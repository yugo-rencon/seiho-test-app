<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const faqs = [
    { question: "購入後、いつまで利用できますか？", answer: "購入済みの対象コンテンツは、利用期限なく閲覧できます。追加料金や月額料金はかかりません。" },
    { question: "今後追加される解説は見られますか？", answer: "追加した解説は追加料金なしでご利用いただけます。来年度以降の試験についても、解説を作成・追加していく予定です。ただし、来年度以降の試験解説の追加・更新を毎年お約束するものではありません。あらかじめご了承ください。" },
    { question: "問題文も掲載されていますか？", answer: "問題文そのものは掲載せず、独自に作成した解説コンテンツを提供しています。" },
    { question: "解説内容に誤りを見つけた場合は？", answer: "お問い合わせフォームからご連絡ください。確認のうえ、必要に応じて修正します。制度や試験運用については、必ず公式情報もご確認ください。" },
];
const page = usePage();
const isHengaku = computed(() => String(page.url ?? "").startsWith("/hengaku"));
const pricingHref = computed(() =>
    isHengaku.value ? route("pricing", { scope: "hengaku", return_to: page.url }) : route("pricing", { scope: "seiho" }),
);
const contactHref = computed(() =>
    route(isHengaku.value ? "hengaku.contact.index" : "contact.index"),
);
</script>

<template>
    <SeihoTestLayout title="よくある質問">
        <section class="container mx-auto max-w-4xl px-5 py-12 sm:px-6 sm:py-16">
            <p class="text-xs font-bold uppercase tracking-widest" :class="isHengaku ? 'text-teal-600' : 'text-purple-600'">FAQ</p>
            <h1 class="mt-3 text-3xl font-bold text-gray-900 sm:text-4xl">よくある質問</h1>
            <p class="mt-4 text-sm leading-7 text-gray-600 sm:text-base">ご利用方法や解説の更新方針について、よくいただく質問をまとめました。</p>
            <div class="mt-9 space-y-4">
                <section v-for="faq in faqs" :key="faq.question" class="rounded-2xl border border-gray-200 bg-white p-5 sm:p-6">
                    <h2 class="text-base font-bold leading-7 text-gray-900">Q. {{ faq.question }}</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-700 sm:text-base">A. {{ faq.answer }}</p>
                </section>
            </div>
            <div class="mt-9 flex flex-wrap gap-3">
                <Link :href="pricingHref" class="inline-flex items-center rounded-full px-5 py-3 text-sm font-semibold text-white transition" :class="isHengaku ? 'bg-teal-600 hover:bg-teal-700' : 'bg-purple-600 hover:bg-purple-700'">料金ページを見る</Link>
                <Link :href="contactHref" class="inline-flex items-center rounded-full border px-5 py-3 text-sm font-semibold transition" :class="isHengaku ? 'border-teal-200 text-teal-700 hover:bg-teal-50' : 'border-purple-200 text-purple-700 hover:bg-purple-50'">お問い合わせ</Link>
            </div>
        </section>
    </SeihoTestLayout>
</template>
