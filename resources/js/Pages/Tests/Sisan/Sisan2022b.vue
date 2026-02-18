<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2022年度 フォームB'


const SAME = "※2022年度フォームA/B/Cで同一問題";</script>

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
                    'ウ', //1
                    'ケ', //2
                    'カ', //3
                    'イ', //4
                    'キ', //5
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
                    'ケ', //6
                    'イ', //7
                    'コ', //8
                    'エ', //9
                    'ク', //10
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
                    'ケ', //11
                    'カ', //12
                    'ア', //13
                    'ク', //14
                    'ウ', //15
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
                    'イ', //16
                    'カ', //17
                    'ク', //18
                    'コ', //19
                    'オ', //20
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
                                :items="[
                    // 問31〜40
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '融資審査部門ではなくマクロ調査部門。' }, //33
                    { label: '解', content: '第二に、一定の返済期限に拘束されるので、有価証券のような即時の流動化が困難なことなどである。' }, //34
                    { label: '解', content: 'パッシブ運用ではなくアクティブ運用の説明。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '固有業務ではなく付随業務。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'エ', content: '自己資本比率規制' }, //41
                    { label: 'ア', content: '準拠主義' }, //42
                    { label: 'ウ', content: '自己資本' }, //43
                    { label: 'エ', content: '公募債' }, //44
                    { label: 'ア', content: '新借地' }, //45
                    { label: 'オ', content: '' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'ウ', content: 'オルタナティブ投資' }, //49
                    { label: 'イ', content: '200' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="sisan2022a" next-route="sisan2022c" />

    </section>

    </SeihoTestLayout>


</template>
