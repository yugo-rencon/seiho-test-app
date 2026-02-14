<script setup>
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
</script>

<template>
    <SeihoTestLayout title="特商法に基づく表記">
        <div class="container mx-auto px-5 sm:px-6 max-w-4xl py-12 md:py-16">
            <section class="border-b border-gray-100 pb-8">
                <p class="text-sm font-semibold text-purple-700">Legal</p>
                <h1 class="mt-3 text-3xl md:text-4xl font-bold text-gray-900">
                    特定商取引法に基づく表記
                </h1>
                <p class="mt-4 text-base text-gray-600">
                    有料コンテンツ提供に関する表示です。内容は運営方針に合わせて更新してください。
                </p>
            </section>

            <section class="mt-8 space-y-5 text-sm text-gray-700 leading-relaxed">
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">販売事業者名</div>
                    <div>（例）〇〇〇〇</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">運営責任者</div>
                    <div>（例）〇〇 〇〇</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">所在地</div>
                    <div>（例）東京都〇〇区〇〇</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">お問い合わせ先</div>
                    <div>（例）メールアドレス / フォームURL</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">販売価格</div>
                    <div>各商品ページに表示</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">商品代金以外の必要料金</div>
                    <div>インターネット接続料金等はお客様のご負担となります。</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">引き渡し時期</div>
                    <div>決済完了後、直ちに閲覧可能</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">お支払い方法</div>
                    <div>クレジットカード（予定）</div>
                </div>
                <div class="grid gap-2">
                    <div class="font-semibold text-gray-900">返品・キャンセル</div>
                    <div>デジタルコンテンツの性質上、原則として返品・返金はできません。</div>
                </div>
                <div class="rounded-xl border border-gray-100 bg-white p-4 text-xs text-gray-500">
                    ※ ここは仮テキストです。運営情報に合わせて必ず編集してください。
                </div>
            </section>
        </div>
    </SeihoTestLayout>
</template>
