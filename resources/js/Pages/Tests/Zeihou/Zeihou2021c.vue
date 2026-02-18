<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2021年度 フォームC'


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
                '50万円','1/2','支払総額','含む','5倍', // 問１〜５
                ]"
                :labels="[
                    'カ', //1
                    'キ', //2
                    'ク', //3
                    'コ', //4
                    'エ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '1年','2年','確定年金','相続','贈与', //問６〜10
                ]"
                :labels="[
                    'ア', //6
                    'イ', //7
                    'オ', //8
                    'ク', //9
                    'ケ', //10
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
                '20%ではなく15%',
                '正しい',
                '他人の多人の物を保管する場合の所得は事業所得または雑所得に該当し、そうでない場合の所得は不動産所得に該当する。'
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
                '相続の開始があったことを知った日の翌日から10ヶ月以内に行う。',
                '延納が認められる期間は、通常5年以内である。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '資産の評価について、税法は取得原価主義を原則としており、評価益は益金として額に算入しない。',
                '法人の支出した寄付金について税法は一定の限度額を定め、これを超える部分については損金の額に算入しない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '課税所得金額は所得税と同額とはならない。',
                '正しい',
                '納期は6月、8月、10月、1月中である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '所得税は課税所得を段階的に区分し、その区分を超えるごとに順次高い税率を適用する構造となっているため、超過累進税率と呼ぶ。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '最初の贈与税申告の際に届出書を提出すれば、相続時まで当該制度が継続適用されるので、届出書を毎年提出する必要はない。',
                '正しい'
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
                '定期部分は損金、養老部分は資産計上となる。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '一時所得の特別控除額（50万円限度）を控除した金額。' }, //31
                    { label: '解', content: '所得控除ではなく、税額控除。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '市街地的形態を形成する地域にある宅地は路線価方式により評価し、市街地的形態を形成しない地域にある宅地は倍率方式により評価。' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '特定退職金共済ではなく、団体信用生命保険。' }, //36
                    { label: '解', content: '1階を100として、階が1つ増えるごとに10/39を加算して求める。' }, //37
                    { label: '解', content: '財形貯蓄積立保険ではなく、財形年金と合わせて550万円までの利子は非課税とされる。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'イ', content: '15種類' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'エ', content: '2分の1' }, //43
                    { label: 'ウ', content: '災害' }, //44
                    { label: 'ア', content: '翌月10日' }, //45
                    { label: 'エ', content: '心身障害者扶養共済制度' }, //46
                    { label: 'ウ', content: '公平な税負担' }, //47
                    { label: 'ア', content: '9,000円' }, //48
                    { label: 'ア', content: '年金規約' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="zeihou2021b" />

    </section>

    </SeihoTestLayout>


</template>
