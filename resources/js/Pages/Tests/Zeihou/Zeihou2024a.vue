<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2024年度 フォームA'


const SAME = "※2024年度フォームA/B/Cで同一問題";</script>

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
                '公社債投資信託','法人','貸付け','通勤費','転任', // 問１〜５
                ]"
                :labels="[
                    'ウ', //1
                    'コ', //2
                    'ア', //3
                    'キ', //4
                    'ク', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '5','50','租税特別措置法','2分の1','40', //問６〜10
                ]"
                :labels="[
                    'エ', //6
                    'カ', //7
                    'コ', //8
                    'ア', //9
                    'オ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '所得税','生活費','結婚・子育て','配偶者控除額','110', //問11〜15
                ]"
                :labels="[
                    'オ', //11
                    'カ', //12
                    'ウ', //13
                    'キ', //14
                    'イ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '20','居住用不動産','2,000','2月1日から3月15日','贈与を受けた人', //問16〜20
                ]"
                :labels="[
                    'イ', //16
                    'ウ', //17
                    'コ', //18
                    'キ', //19
                    'エ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '財産税ではなく、流通税。',
                '都市計画税、国民健康保険税等は<b><u>目的税</u></b>に該当する。',
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '対象となるのはその年に実際に支払った金額であり、<b><u>未払いのものについては、現実に支払いがなされるまで控除の対象とはならない</u></b>。',
                '任意の互助組織から医療費を補てんを目的として支払いを受ける給付金についても支払った医療費から差し引いて計算する。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '遺言の方式には、<b><u>普通方式</u></b>（自筆証書遺言・公正証書遺言・秘密証書遺言）と<b><u>特別方式</u></b>（死亡危急者遺言・伝染病隔離者遺言・在船者遺言・船舶遭難者遺言）とがある。',
                '正しい',
                '遺贈は遺言による被相続人の意思表示であるため、相続よりも優先するが、<b><u>この場合にも一定割合の財産は相続人の最低限度の相続分として確保される（遺留分）</u></b>。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険契約で保険事故が発生していないものに関する権利の評価は、<b><u>相続開始の時において当該契約を解約するとした場合に支払われることとなる解約返戻金の額によって評価する</u></b>。',
                '倍率方式ではなく、路線価方式。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '運営管理機関（企業または国民年金基金連合会によって選任）ではなく、資産管理機関（企業による選任）または国民年金基金連合会。',
                '年金払いの老齢給付金については、雑所得として公的年金等控除を適用するが、一時払いの老齢給付金については、所得税法上の「退職手当等」とみなす。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '1,200万円ではなく、2,000万円。',
                '正しい',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '留保金課税の場合の同族要件は、1株主グループによる株式等の保有割合が50%超の特定同族会社の場合（資本金または出資金の額が1億円以下の会社を<b><u>除く</u></b>。）となる。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '毎年4月1日ではなく、毎年1月1日。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '10年ではなく、5年。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '雑所得ではなく、事業所得。',
                '正しい',
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '比例税率ではなく、超過累進税率。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '事業年度が6カ月を超える普通法人は、事業年度開始の日以後6カ月を経過した日から2カ月以内に、税務署長に対し、仮決算により作成した法人税の中間報告書または前年度の実績による中間報告書いずれかを提出しなければならない。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '相続による取得や法人の合併による取得など形式的な所有権の移転については課税されない。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '14%ではなく、7%。' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '課税所得金額' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'ウ', content: '住宅借入金（取得）等特別控除' }, //43
                    { label: 'イ', content: '10万円' }, //44
                    { label: 'ア', content: '申告調整' }, //45
                    { label: 'ア', content: '時価' }, //46
                    { label: 'ウ', content: '均等割' }, //47
                    { label: 'ウ', content: '半年' }, //48
                    { label: 'ウ', content: '生命保険料控除' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons next-route="zeihou2024b" />

    </section>

</SeihoTestLayout>

</template>
