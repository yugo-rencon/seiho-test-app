<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2022年度 フォームC'

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
                '洗替方式', '費用', '標準', '除く', '最低額', // 問１〜５
                ]"
                :labels="[
                    'エ', //1
                    'コ', //2
                    'カ', //3
                    'ウ', //4
                    'ケ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '未経過', '危険', '内部留保', '純保険料式', '20%', //問６〜10
                ]"
                :labels="[
                    'オ', //6
                    'ウ', //7
                    'イ', //8
                    'コ', //9
                    'キ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '給付金', '発生', '団体定期保険の年金払特約', '個人年金の年金一括支払額', '解約控除', //問11〜15
                ]"
                :labels="[
                    'ク', //11
                    'キ', //12
                    'ケ', //13
                    'ウ', //14
                    'コ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '支払遅延利息', '特定取引', '除く', '印紙税', '減価償却費', //問16〜20
                ]"
                :labels="[
                    'ケ', //16
                    'キ', //17
                    'オ', //18
                    'カ', //19
                    'イ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '会社の設備投資限度額の算定ではなく、株主配当の限度額の算定。',
                '正しい',
                '株主配当については、旧商法では企業が株主へ配当を行うのは年2回までに制限されていたが、会社法では株主総会の決議があればいつでも配当を出すことが可能となった。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '企業の経済活動を記帳・計算するのが簿記であるが、経済活動のすべてを記帳・計算するわけではない。たとえば、電力会社と電力供給の契約を締結した場合、契約締結の時点では、それぞれに「電力を供給する義務」と「電力の供給を受ける権利」が発生するが、会計上の取引とはならない。',
                '正しい',
                '元帳の締切ではなく、転記'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '従来連結子会社及び子法人等の範囲は議決権の所有割合（50%超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。',
                '連結会社相互間の取引によって取得した資産に含まれる未実現損益はその全額を消去する',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '取得原価ではなく、償却原価法。',
                '従来、負債の部に計上されていたが、保険業法施行規則の改正により1999年度（平成11年度）決算より資産の部の控除項目となった。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '保険料収入，保険金支払，配当金支払等の保険関係の資金移動については、原則として、資金移動の発生と同時にその帰属する「商品区分」が判明する場合には、その当該「商品区分」に反映させる。',
                '資産の購入・売却、利息・配当金収入等の資産運用関係の資金移動については、原則として、運用資産の管理方法に応じて、資金移動の発生と同時に対応する「資産区分」に反映させる。',
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
                '単一性の原則ではなく、継続性の原則。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                'その他有価証券の評価差額から税効果会計上の税効果相当額を控除した額を計上する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '「保険料及び責任準備金の算出方法書」ではなく、「事業方法書」に定める金銭の振替を除き認められていない。',
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
                '日本公認会計士協会ではなく、生命保険協会経理委員会。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '営業保険料は、純保険料と付加保険料から成り立っている。純保険料は、予定死亡率・予定利率から計算し、将来の保険金・年金・給付金の支払に充当する。また、付加保険料は、予定事業費率から計算し、事業費と事業費に準ずる経費に充当する。',
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
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '会計情報の開示という機能はその中に含まれていないという点で、会社法・金融商品取引法に基づく会計とは異なっている。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '内閣府令で、資産ごとに定められた積立基準により計算された額を、積立限度額に達するまで価格変動準備金として積み立てることを義務付けている。' }, //37
                    { label: '解', content: '現金主義ではなく、実現主義。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '監査役会は3人以上で構成された監査役（そのうち半数以上は社外監査役）のすべてで組織する。' }, //40
                    // 問41〜50
                    { label: 'オ', content: '' }, //41
                    { label: 'エ', content: '管理会計' }, //42
                    { label: 'オ', content: '' }, //43
                    { label: 'ア', content: '負債' }, //44
                    { label: 'ウ', content: '5分の1' }, //45
                    { label: 'イ', content: '売買目的有価証券' }, //46
                    { label: 'イ', content: '評価換え' }, //47
                    { label: 'ア', content: '期末' }, //48
                    { label: 'エ', content: '定款' }, //49
                    { label: 'ウ', content: '自己査定' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2022b" next-route="kaikei2021a" />

    </section>

    </SeihoTestLayout>


</template>
