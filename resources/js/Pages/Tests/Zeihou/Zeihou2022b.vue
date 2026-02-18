<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
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
                '10種類','長期譲渡所得','2分の1','退職所得','所得控除', // 問１〜５
                ]"
                :labels="[
                    'ウ', //1
                    'ク', //2
                    'ア', //3
                    'キ', //4
                    'カ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '算出税額','税額控除','租税特別措置法','差引所得税額','源泉徴収', //問６〜10
                ]"
                :labels="[
                    'エ', //6
                    'キ', //7
                    'ク', //8
                    'ウ', //9
                    'イ', //10
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
                'アパートなどの食事なしの所得は「不動産所得」、下宿などの食事を出す場合は「事業所得」または「雑所得」となる。',
                '確定申告が必要。',
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '「４分の４乗方式」ではなく「５分の５乗方式」',
                '正しい',
                '「所得控除」ではなく「税額控除」'
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
                '市町村ではなく道府県が課税する。',
                '正しい',
                '所得ではなく収入金額。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '財産税ではなく流通税。財産税は、財産を所有している事実に着目して課税されるものであり、固定資産税に代表される。',
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
                '法人税にも税額控除がある。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '10年ではなく5年。',
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
                '正しい',
                '雑所得ではなく事業所得。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '著述家や作家以外が受ける原稿料や印税。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '財産の評価についても相続財産の評価と贈与財産の評価は同じ基準に従って行われる。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '3000万円ではなく、1500万円。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '売買目的有価証券ではなく、売買目的外有価証券の説明。' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'イ', content: '10万円' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'エ', content: '1億6,000万円' }, //43
                    { label: 'イ', content: '20年' }, //44
                    { label: 'ウ', content: '18歳' }, //45
                    { label: 'ア', content: '2ヶ月' }, //46
                    { label: 'ア', content: '株主' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'エ', content: '退職所得' }, //49
                    { label: 'エ', content: '契約者配当準備金損金算入額' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="zeihou2022a" next-route="zeihou2022c" />

    </section>

    </SeihoTestLayout>


</template>
