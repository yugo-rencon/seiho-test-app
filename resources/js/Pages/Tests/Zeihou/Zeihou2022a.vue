<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2022年度 フォームA'


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
                '横領','1/10','200万円','選択によって','労働保険', // 問１〜５
                ]"
                :labels="[
                    'オ', //1
                    'ア', //2
                    'エ', //3
                    'キ', //4
                    'コ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '2,000円','27万円','75万円','10万円','2,500万円', //問６〜10
                ]"
                :labels="[
                    'ア', //6
                    'オ', //7
                    'キ', //8
                    'ウ', //9
                    'コ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '直接税','比例税率','法人擬制説','無償','税務調整', //問11〜15
                ]"
                :labels="[
                    'カ', //11
                    'キ', //12
                    'ク', //13
                    'コ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '内国法人','二重課税','取得原価','会社更生法','保険業法', //問16〜20
                ]"
                :labels="[
                    'カ', //16
                    'キ', //17
                    'ウ', //18
                    'イ', //19
                    'ク', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '流通税は、財産移転の事実に基づいて課税されるもので、印紙税、不動産所属税等が該当する。',
                '都市計画税は目的税。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '年間正味払込保険料が5万円を超えるとき、控除額は一律5万円。',
                '老人控除対象配偶者とは、控除対象配偶者のうち年齢が70歳以上の者をいう。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '延納が認められる期間は通常５年以内である。',
                '物納に充てられる財産の種類と順序は、①国債、地方債、上場株式等、②上場株式および不動産のうち物納劣後財産に該当するもの③非上場株式等'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '受取配当額の95％相当額。',
                '法人の支出した寄附金については税法は一定の限度額を定め、これを超える部分については損金に参入しないものとしている。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '企業負担保険料が月額300円以下である場合には、従業員、役員に対して所得税は課税されない。',
                '役員、従業員の遺族が受取人の場合は、所得税の課税対象。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '利子所得ではなく、配当所得。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '合計所得金額が48万円以下であるもの。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '贈与税には、物納制度はないが、一定の要件のもとに延納制度がも認められている'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '均等割額のみ課される。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '雑所得ではなく一時所得。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '租税を納付する義務を負う者を納税義務者、実際に負担する義務を負う者を担税者という。消費税のような間接税は、担税者が消費者、納税義務者は業者である。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '「所得税基本通達」の規定ではなく、「租税特別措置法」の規定。' }, //33
                    { label: '解', content: '「相続税法」ではなく「民法」。' }, //34
                    { label: '解', content: '3000万円ではなく、1500万円。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '本来の事業については非課税。収益事業に係る所得については課税。' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '9割ではなく、計算した額をそのままを限度として損金に算入される。' }, //40
                    // 問41〜50
                    { label: 'ア', content: '5年' }, //41
                    { label: 'イ', content: '20年以下' }, //42
                    { label: 'イ', content: '超過累進税率' }, //43
                    { label: 'ア', content: '翌月10日' }, //44
                    { label: 'ウ', content: '18歳' }, //45
                    { label: 'ア', content: '2ヶ月' }, //46
                    { label: 'イ', content: '更生' }, //47
                    { label: 'エ', content: '従業者数' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'エ', content: '契約者配当準備金損金算入額' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="zeihou2023c" next-route="zeihou2022b" />

    </section>

    </SeihoTestLayout>


</template>
