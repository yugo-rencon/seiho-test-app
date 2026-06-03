<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const page = usePage();

const scope = computed(() => {
    const url = String(page.url ?? "");
    if (url.startsWith("/daigaku")) return "daigaku";
    if (url.startsWith("/ippan")) return "ippan";
    if (url.startsWith("/senmon")) return "senmon";
    if (url.startsWith("/ouyou")) return "ouyou";
    return "seiho";
});

const legalTextClass = computed(() => {
    if (scope.value === "daigaku") return "text-blue-700";
    if (scope.value === "ippan") return "text-fuchsia-700";
    if (scope.value === "senmon") return "text-emerald-700";
    if (scope.value === "ouyou") return "text-amber-700";
    return "text-purple-700";
});

const contactHref = computed(() => {
    if (scope.value === "daigaku") return route("daigaku.contact.index");
    if (scope.value === "ippan") return route("ippan.contact.index");
    if (scope.value === "senmon") return route("senmon.contact.index");
    if (scope.value === "ouyou") return route("ouyou.contact.index");
    return route("contact.index");
});
</script>

<template>
    <SeihoTestLayout title="特商法に基づく表記" :noindex="true">
        <div class="container mx-auto px-5 sm:px-6 max-w-4xl py-10 md:py-14">
            <section class="border-b border-gray-100 pb-7">
                <p class="text-xs font-semibold tracking-wide text-gray-500">Legal</p>
                <h1 class="mt-2 text-2xl md:text-3xl font-bold text-gray-900">
                    特定商取引法に基づく表記
                </h1>
                <p class="mt-3 text-sm md:text-base text-gray-600 leading-relaxed">
                    当サイトが提供する有料の過去問解説サービスに関する法定表示を掲載しています。
                </p>
            </section>

            <section class="mt-7 overflow-hidden rounded-xl border border-gray-200 bg-white">
                <dl class="divide-y divide-gray-100 text-sm leading-relaxed">
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">運営者（販売業者）</dt>
                        <dd class="text-gray-700">seiho-test 運営事務局</dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">サービス名</dt>
                        <dd class="text-gray-700">
                            生保講座過去問解説 / 生命保険大学課程 過去問解説 / 生命保険一般課程 過去問解説 / 生命保険専門課程 過去問解説 / 生命保険応用課程 過去問解説
                        </dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">販売対象サービス</dt>
                        <dd class="text-gray-700">
                            有料販売対象：各サービスのプレミアム対象コンテンツ<br />
                            生保講座：全科目・全年度・全フォームの解説<br />
                            生命保険大学課程：全90解説<br />
                            生命保険一般課程：全50解説<br />
                            生命保険専門課程：全30解説<br />
                            生命保険応用課程：全30解説<br />
                            一般・専門・応用セット：一般課程・専門課程・応用課程の対象コンテンツ一式
                        </dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">無料公開範囲</dt>
                        <dd class="text-gray-700">
                            生保講座：最新年度フォームAなど一部コンテンツ<br />
                            生命保険大学課程：最新年度フォームAなど一部コンテンツ<br />
                            生命保険一般課程・専門課程・応用課程：2025年の試験全フォーム
                        </dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">氏名・住所・電話番号</dt>
                        <dd class="text-gray-700">
                            個人情報保護および防犯の観点から、Webサイト上での常時公開は控えております。上記の記載事項について開示をご希望される場合は、下記のお問い合わせフォームよりご請求ください。特商法に基づき、遅滞なく電子メール等の書面にて開示いたします。
                        </dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">お問い合わせ先</dt>
                        <dd class="text-gray-700">
                            seihokoza.test@gmail.com<br />
                            <a :href="contactHref" :class="legalTextClass" class="font-medium underline underline-offset-2">
                                お問い合わせフォーム
                            </a>
                        </dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">販売価格</dt>
                        <dd class="text-gray-700">
                            生保講座 プレミアムプラン：1,980円（税込）<br />
                            生命保険大学課程 プレミアムプラン：1,480円（税込）<br />
                            生命保険一般課程 プレミアムプラン：480円（税込）<br />
                            生命保険専門課程 プレミアムプラン：480円（税込）<br />
                            生命保険応用課程 プレミアムプラン：480円（税込）<br />
                            一般・専門・応用セット：980円（税込）
                        </dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">商品代金以外の必要料金</dt>
                        <dd class="text-gray-700">インターネット接続料金・通信料金はお客様のご負担です。</dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">支払い方法</dt>
                        <dd class="text-gray-700">クレジットカード決済（Stripe）</dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">支払い時期</dt>
                        <dd class="text-gray-700">購入手続き時に決済されます。</dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">引き渡し時期</dt>
                        <dd class="text-gray-700">決済完了後、対象サービスのプレミアムコンテンツを直ちに閲覧できます。</dd>
                    </div>
                    <div class="grid gap-2 p-4 sm:grid-cols-[220px_1fr] sm:gap-4 sm:p-4">
                        <dt class="font-medium text-gray-800">返品・キャンセル</dt>
                        <dd class="text-gray-700">
                            デジタルコンテンツの性質上、決済完了後の返品・返金は原則お受けしていません。
                        </dd>
                    </div>
                </dl>
            </section>

            <section class="mt-4 rounded-lg border border-gray-100 bg-gray-50 p-4 text-xs text-gray-500">
                表示内容は、法令改正や運営方針の変更に応じて更新する場合があります。
            </section>

            <div class="mt-6 text-xs text-gray-500 border-t border-gray-100 pt-4">
                最終更新日：2026年5月11日
            </div>
        </div>
    </SeihoTestLayout>
</template>
