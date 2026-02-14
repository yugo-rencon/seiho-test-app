<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2022年度 フォームC'

</script>

<template>

<SeihoTestLayout :title="title">
    <section class="bg-gray-100 text-gray-800 py-10">

        <!-- ページタイトル -->
        <Pagetitle
            :title="title"
            :description="subject"
        />

        <!-- 問題リスト -->
        <div class="max-w-4xl mx-auto mt-4 space-y-2">
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                '1年','発券','受信','商業','政府系', // 問１〜５
                ]"
                :labels="[
                'ウ','ケ','カ','イ','キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '養老','収入保険料','低下','高利回り','リーマン・ブラザーズ', //問６〜10
                ]"
                :labels="[
                'ケ','イ','コ','エ','ク',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '緩和','信託会社','持株会社','デリバティブ取引','付随業務', //問11〜15
                ]"
                :labels="[
                'コ','オ','ク','ケ','イ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '法定他業','大口信用供与規制','10%','早期是正措置','ソルベンシー・マージン比率', //問16〜20
                ]"
                :labels="[
                'ケ','オ','イ','ア','コ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '長期ではなく短期の運転資金として利用されている。',
                '利息を手形額面の金額に上乗せするのではなく、差し引いて貸付を行うもの。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                'アセット・ミックスではなくバリュー・アット・リスク。',
                '正しい',
                '商品設計やポー トフォリオの構築に際しては他の保険商品以上の流動性確保に留意している。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                'イギリスの説明。',
                'ドイツの説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                'ヘッジ取引の説明。',
                'アウトライト取引の説明。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                'デフレではなくインフレ。',
                '5000円ではなく1万円であり、生命保険会社は解散となり第二会社が設立された。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '信用創造機能ではなく貯蓄機能'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                'テナントの入居状況に依存するため不安定であり、流動性はきわめて低い。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                'オープン市場ではなくインターバンク市場の説明。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '保険会社は「保険検査マニュアル」が公表された。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '時価評価ではなく、取得価額で評価する。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '正しい',
                '融資審査部門ではなくマクロ調査部門。',
                '生保の海外投融資は、生保本体で直接行う場合のほか、生保本体と独立した海外現地法人を通じて行う場合がある。',
                '区分経理ではなく一般勘定と明確に区分された特別勘定が設けられることになった。',
                // 問36〜40
                '正しい',
                '正しい',
                '①キャビタル・ゲインのインカム化、②簿価分離といったメリットがある ',
                '2008年(平成20年)のサブプライムローン問題に端を発した米国住宅バブル崩壊をきっかけに多分野の資産価格が大幅に下落したことに伴い2000 年(平成12 年)以降増加傾向であった海外投融資は、減少に転じている。',
                '正しい',
                 //問41〜50
                'C（A・Bともに正しい）','A-準拠主義','B-自己資本','B-アナリスト','C（A・Bともに正しい）',
                'A-上昇','A-ユニバーサル・バンキング','A-インパクト・ローン','B-オルタナティブ投資','B-顧客本位の業務運営に関する原則',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'オ','ア','ウ','エ','オ',  //問41〜45
                'イ','ア','イ','ウ','エ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
