<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2022年度 フォームA'

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
                '国際決済銀行（BIS）','自己資本','カントリー','金利','流動性', //問11〜15
                ]"
                :labels="[
                'ク','オ','ケ','ア','ウ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '事務','ポートフォリオ','アセット・ミックス','投融資執行所管','リスク管理委員会', //問16〜20
                ]"
                :labels="[
                'キ','コ','ウ','オ','エ',  //問16〜20
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
                '金利スワップではなく通貨スワップの説明。',
                '正しい',
                '通貨スワップではなく金利スワップの説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                'イギリスの説明',
                'ドイツの説明'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '昭和61年(1986年)には変額保険発売に伴い特別勘定が創設されたこと、さらには平成年(1989年)まで株式市場が極めて好調に推移したこともあり、株式投資が活発化，株式の資産構成比は上昇した。',
                'インカム・ゲインの累積化ではなく、キャビタル・ゲインのインカム化。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '記載の業務は改正以前からも認められていた。',
                '廃止ではなく法定化された。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '保険検査マニュアルではなく、保険業法施行規則等によって規定されることになった。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                'トレーダーではなくストラテジストの説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '生保各社は現在、このRBC比率を高めるため、比較的リスクの高い不動産関連投資やジャンク債を減らし、代わりに公社債 (投資適格)の比重を高めるようになってきている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '金利の面ではなく、業務の面での自由化の説明。',
                '正しい',
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
                '委員会制においては、バックグラウンドの違う複数の委員の合議によって投融資決定が行われる。このため、投融資の安全性を確保し得るという長所を持つが、機動性に劣ることになる。',
                '融資審査部門ではなくマクロ調査部門。',
                'オプション取引では、オプションの買い手はオプションを行使する権利を有するが、行使する義務はない。',
                '投資手法の多様化としては、共同ビル方式，借地方式，新借地方式，定期借地方式等の手法がある。',
                // 問36〜40
                '正しい',
                '正しい',
                '正しい',
                '金融サービス市場法のプランではなく、金融システム改革のプラン。',
                '正しい',
                 //問41〜50
                'B-利差','A-準拠主義','B-自己資本','A-円建','A-出し手',
                'B-毎日','A-抵当貸付','C（A・Bともに正しい）','B-オルタナティブ投資','C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'エ','ア','ウ','ア','イ',  //問41〜45
                'エ','イ','オ','ウ','オ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
