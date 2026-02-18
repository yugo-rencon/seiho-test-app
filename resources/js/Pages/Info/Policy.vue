<script setup>
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
</script>

<template>
    <SeihoTestLayout title="プライバシーポリシー">
        <div class="container mx-auto px-5 sm:px-6 max-w-4xl py-12 md:py-16">
            <section class="border-b border-gray-100 pb-8">
                <p class="text-sm font-semibold text-purple-700">Privacy</p>
                <h1 class="mt-3 text-3xl md:text-4xl font-bold text-gray-900">
                    プライバシーポリシー（個人情報保護方針）
                </h1>
                <p class="mt-4 text-base text-gray-600">
                    当サイトにおける個人情報の取り扱い方針を定めるものです。
                </p>
            </section>

            <section class="mt-8 space-y-6 text-sm text-gray-700 leading-relaxed">
                <div>
                    <h2 class="text-base font-bold text-gray-900">1. 基本方針</h2>
                    <p class="mt-2">
                        生保講座過去問解説（以下「当サイト」）は、ユーザーの個人情報を適切に取り扱い、関連法令を遵守します。
                    </p>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">2. 収集する情報</h2>
                    <ul class="mt-2 list-disc list-inside space-y-1">
                        <li>アカウント情報（メールアドレス、暗号化されたパスワード、Googleログイン時の識別情報）</li>
                        <li>お問い合わせ情報（メールアドレス、お問い合わせ種別、内容）</li>
                        <li>学習記録（合格基準、科目別スコアなどの入力情報）</li>
                        <li>決済連携情報（Stripeの顧客ID、決済セッションID、決済ステータス）</li>
                        <li>アクセス解析情報（閲覧ページ、利用端末、Cookieなど）</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">3. 個人情報の利用目的</h2>
                    <ul class="mt-2 list-disc list-inside space-y-1">
                        <li>ログイン認証、サービス提供、学習機能の表示</li>
                        <li>お問い合わせ対応</li>
                        <li>プレミアムプランの購入状態管理</li>
                        <li>不正利用防止・障害対応・セキュリティ対策</li>
                        <li>サイト改善・利用状況分析</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">4. 個人情報の第三者提供</h2>
                    <p class="mt-2">
                        当サイトは、以下の場合を除き、個人情報を第三者に提供しません。
                    </p>
                    <ul class="mt-2 list-disc list-inside space-y-1">
                        <li>ユーザーの同意がある場合</li>
                        <li>法令に基づく場合</li>
                        <li>人の生命・身体・財産の保護のために必要がある場合</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">5. 外部サービスの利用</h2>
                    <p class="mt-2">
                        当サイトでは、以下の外部サービスを利用しています。
                    </p>
                    <ul class="mt-2 list-disc list-inside space-y-1">
                        <li>Google Analytics（アクセス解析）</li>
                        <li>Google AdSense（広告配信）</li>
                        <li>Stripe（決済処理）</li>
                        <li>Google OAuth（Googleログイン）</li>
                    </ul>
                    <p class="mt-2">
                        これらのサービスでは、各提供事業者の定めるプライバシーポリシーに基づきデータが処理される場合があります。
                    </p>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">6. Cookieの使用について</h2>
                    <p class="mt-2">
                        当サイトは、ログイン状態の維持、アクセス解析、広告配信の最適化のためCookieを利用します。Cookieはブラウザ設定で無効化できますが、一部機能が利用できなくなる場合があります。
                    </p>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">7. 情報の開示・訂正・削除等</h2>
                    <p class="mt-2">
                        当サイトが保有する個人情報について、開示・訂正・削除等の要請があった場合は、本人確認の上で法令に従い対応します。
                    </p>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">8. セキュリティ対策</h2>
                    <p class="mt-2">
                        個人情報の漏えい、滅失、毀損を防止するため、アクセス制御等の必要かつ適切な安全管理措置を講じます。
                    </p>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">9. プライバシーポリシーの変更</h2>
                    <p class="mt-2">
                        本ポリシーは必要に応じて変更することがあります。変更後の内容は、本ページに掲載した時点から適用します。
                    </p>
                </div>

                <div>
                    <h2 class="text-base font-bold text-gray-900">10. お問い合わせ先</h2>
                    <p class="mt-2">
                        本ポリシーに関するお問い合わせは、以下までご連絡ください。<br />
                        メールアドレス：seihokoza.test@gmail.com
                    </p>
                </div>
            </section>

            <div class="mt-10 text-xs text-gray-500 border-t border-gray-100 pt-4">
                最終更新日：2026年2月16日
            </div>
        </div>
    </SeihoTestLayout>
</template>
