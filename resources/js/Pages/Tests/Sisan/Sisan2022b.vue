<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2022年度 フォームB'

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
                '金融機関','無担保','指値','ゼロ金利','手形買入', //問11〜15
                ]"
                :labels="[
                'ケ','カ','ア','ク','ウ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                'CP','流動性','上昇','外国為替管理法','為替予約', //問16〜20
                ]"
                :labels="[
                'イ','カ','ク','コ','オ',  //問16〜20
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
                '信用リスクではなく市場リスク。',
                '正しい',
                '分散投資政策ではなく緩和政策。'
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
                'オプション取引ではなくスワップ取引の説明。',
                '「ヨーロピアン・オプション」は、権利行使が、権利行使期間の最終日(満期日)にのみ限定されるものである。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '直接金融ではなく間接金融。',
                '正しい',
                '生命保険会社の公社債投資は、極めて消極的に推移し、生命保険会社の公社債市場における役割も高度成長期には評価されることはなかった。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '「利回り」は、通常今期予想の1株当たり配当金を現在株価で除したものである。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '特別勘定における大口信用供与規制も、保険業法改正により全て撤廃され、一般勘定と比較し自由な資産運用が可能となっている。',
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
                'スラブ型ではなくゲルマン型で、ドイツにその典型が見られる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '投資家や資金調達者が、従来の取引所市場のみならず、多様な市場と資金調達のチャンネルを利用できるよう、取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入が行われた。'
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
                '第二に、一定の返済期限に拘束されるので、有価証券のような即時の流動化が困難なことなどである。',
                'パッシブ運用ではなくアクティブ運用の説明。',
                // 問36〜40
                '正しい',
                '正しい',
                '正しい',
                '固有業務ではなく付随業務。',
                '正しい',
                 //問41〜50
                'B-自己資本比率規制','A-準拠主義','B-自己資本','B-公募債','A-新借地',
                'C（A・Bともに正しい）','C（A・Bともに正しい）','C（A・Bともに正しい）','B-オルタナティブ投資','A-200',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'エ','ア','ウ','エ','ア',  //問41〜45
                'オ','オ','オ','ウ','イ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
