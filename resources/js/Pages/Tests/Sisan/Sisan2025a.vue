<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2025年度 フォームA'

const SAME = "※2025年度フォームA/B/Cで同一問題";</script>

<template>

<SeihoTestLayout :title="title">
    <section class="bg-[#fdfbff] text-gray-800 py-10">

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
                '国際決済銀行（BIS）','自己資本','信用','市場','流動性', // 問１〜５
                ]"
                :labels="[
                    'ク', //1
                    'オ', //2
                    'ケ', //3
                    'ア', //4
                    'ウ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                'ポートフォリオ','アセット・ミックス','投融資執行所管','リスク管理委員会','情報システム', //問６〜10
                ]"
                :labels="[
                    'キ', //6
                    'コ', //7
                    'ウ', //8
                    'オ', //9
                    'エ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '金利選好','インフレ・ヘッジ','投資リスク','運用割合','大口信用供与規制', //問11〜15
                ]"
                :labels="[
                    'ウ', //11
                    'ク', //12
                    'カ', //13
                    'イ', //14
                    'ケ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '安全性','契約者','合同運用','スケールメリット','毎日', //問16〜20
                ]"
                :labels="[
                    'キ', //16
                    'ア', //17
                    'エ', //18
                    'ク', //19
                    'オ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '間接金融的ではなく、直接金融的。',
                '保障機能と信用創造機能ではなく、保障機能と貯蓄機能。',
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '長期の運転資金ではなく、短期の運転資金。',
                '貸出日と支払期日との間の利息を手形額面の金額から<b><u>差し引いて</u></b>貸付を行うものである。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険会社の資産運用に当たっては、社債や貸付等の確定利付への投資が中心となり、価格変動幅の大きい株式は、各国の生命保険会社の投資対象として禁止されるか、厳しい制限下におかれていた。しかし、第二次対戦後になると、普通株理論といわれる株式投資の成果に関する実証分析が次々と現われ、各国の生命保険会社の投資対象として、株式が漸次取り上げられることとなった。',
                '正しい',
                '株式投資の尺度として、個々の銘柄ごとの財務分析による収益性・安全性の評価を前提にして、株式の利潤証券たる価値に注目した「利回り」「株価収益率（PER）」および株式の物的証券たる価値に注目した「株価純資産倍率（PBR）」が代表的である。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                'デフレではなく、インフレ。',
                '政府の損失補償が行われるにあたり、会社は解散され、第二会社が設立され、新会社はもっぱら新契約業務、旧会社は旧契約の維持事務に当たり、その後再建整備が一段落するに及んで、旧会社は閉鎖された。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '時価評価ではなく、取得価額評価。',
                '正しい',
                '取得価額評価ではなく、時価評価。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '価格変動準備金ではなく、保険料積立金。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                'トレーダーではなく、アナリスト。',
                '正しい',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                'オープン市場ではなく、インターバンク市場。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '金利の面ではなく、業務面。',
                '正しい',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '投資家や資金調達者が、従来の取引所市場のみならず、多様な市場と資金調達のチャンネルを利用できるよう、取引所集中義務の<b><u>撤廃</u></b>、店頭登録市場の<b><u>機能強化</u></b>、私設取引システムの<b><u>導入</u></b>などの改革が進められた。',
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '買いヘッジではなく、売りヘッジ。' }, //31
                    { label: '解', content: '「保険会社向けの総合的な監替指針」においては、保険会社の監督事務に関し、その基本的考え方、監督上の評価項目、事務処理上の留意点について体系的に整理されている。また<b><u>法令遵守やリスク管理、審査管理態勢等の資産運用に関する項目も含まれている。</u></b>' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '変動利付ではなく、確定利付。' }, //34
                    { label: '解', content: '金利スワップではなく、通貨スワップ。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: 'バブル崩壊後の資産運用に関する傾向としては、生命保険会社の外国証券投資が1996年（平成8年度）以降<b><u>増加</u></b>傾向にあるところが挙げられる。2007年度（平成19年度）におけるサブプライムローン問題に端を発した金融市場の混乱により、海外融資残高は<b><u>減少</u></b>したが、外国有価証券への投資残高は<b><u>増加</u></b>している。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ア', content: '準拠主義' }, //41
                    { label: 'ウ', content: '流動' }, //42
                    { label: 'オ', content: '' }, //43
                    { label: 'エ', content: '購入する' }, //44
                    { label: 'ア', content: 'シンジケート' }, //45
                    { label: 'オ', content: '' }, //46
                    { label: 'イ', content: 'カントリー・リスク' }, //47
                    { label: 'ウ', content: 'オルタナティブ投資' }, //48
                    { label: 'エ', content: '付随業務' }, //49
                    { label: 'イ', content: '200' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            next-route="sisan2025b"
        />

    </section>

    </SeihoTestLayout>

</template>
