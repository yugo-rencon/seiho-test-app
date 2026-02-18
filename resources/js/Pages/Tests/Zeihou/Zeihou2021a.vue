<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2021年度 フォームA'


const SAME = "※2021年度フォームA/B/Cで同一問題";</script>

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
                '合同運用信託','法人','航空機','通勤費','勤務必要経費', // 問１〜５
                ]"
                :labels="[
                    'エ', //1
                    'コ', //2
                    'イ', //3
                    'ク', //4
                    'ア', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '5','50','全額','2分の1の額','70', //問６〜10
                ]"
                :labels="[
                    'ア', //6
                    'エ', //7
                    'コ', //8
                    'キ', //9
                    'オ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '法人','選挙の候補者','110万円','20年','2,000万円', //問11〜15
                ]"
                :labels="[
                    'キ', //11
                    'ク', //12
                    'イ', //13
                    'コ', //14
                    'オ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '2月1日','納税地','利子税','10万円','5年', //問16〜20
                ]"
                :labels="[
                    'ア', //16
                    'ケ', //17
                    'コ', //18
                    'ウ', //19
                    'イ', //20
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
                '遺言をできる者は満15歳以上で意思能力を有するものに限られる。',
                '法定相続分ではなく遺留分。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '適用対象者となる贈与者は、贈与をする年の1月1日において60歳以上の親または祖父母。',
                '適用対象者となる受贈者は、贈与を受ける年の1月1日において18歳以上である者。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '資本金1000万円ではなく1億円。',
                '所有期間の長短等に応じた特別税率による税額が追加課税される。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '終身保険は満期保険金がないため、源泉分離課税の対象外である。',
                '保険料負担者が死亡し、別人が受け取る死亡保険金は相続税の課税対象とされる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '収入金額によって確定申告書の提出の必要ない場合もある。',
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
                '1,000万円ではなく、500万円。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '外国法人は除く。',
                '正しい',
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
                '住宅用地のうち200㎥までの部分については、評価額の6分の1、また200㎥を超える部分については評価額の3分の1がそれぞれ課税表とされる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '一時払いの老齢給付金については、所得税法上の「退職手当等」とみなす。'
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
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '国立大学法人は非課税である。' }, //35
                    { label: '解', content: '贈与による取得は不動産の取得に含まれ課税の対象となる。' }, //36
                    { label: '解', content: '1階を100として、階が1つ増えるごとに10/39を加算して求める。' }, //37
                    { label: '解', content: '財形貯蓄積立保険ではなく、財形年金と合わせて550万円までの利子は非課税とされる。' }, //38
                    { label: '解', content: '勤労者退職金共済機構ではなく、国民年金基金連合会が管理している。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'イ', content: '15種類' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'ウ', content: '48万円' }, //43
                    { label: 'オ', content: '' }, //44
                    { label: 'ウ', content: '物納' }, //45
                    { label: 'イ', content: '全額' }, //46
                    { label: 'ウ', content: '28,000円' }, //47
                    { label: 'エ', content: '各事業年度の収入金額' }, //48
                    { label: 'ア', content: '年金規約' }, //49
                    { label: 'エ', content: '1万5千円' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="zeihou2022c" next-route="zeihou2021b" />

    </section>

    </SeihoTestLayout>


</template>
