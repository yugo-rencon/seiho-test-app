<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2023年度 フォームC'


const SAME = "※2023年度フォームA/B/Cで同一問題";</script>

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
                '均等割額のみ','4%','6%','寡婦またはひとり親','43万円', // 問１〜５
                ]"
                :labels="[
                    'イ', //1
                    'カ', //2
                    'キ', //3
                    'ア', //4
                    'コ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '普通徴収','市町村','5月','均等割額のみ','従業者数', //問６〜10
                ]"
                :labels="[
                    'キ', //6
                    'イ', //7
                    'コ', //8
                    'ア', //9
                    'ウ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '経済のグローバル化','連結','分社化・持株会社化','税務情報','個別申告方式', //問11〜15
                ]"
                :labels="[
                    'エ', //11
                    'コ', //12
                    'ケ', //13
                    'カ', //14
                    'オ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '完全支配関係','納税申告書','は除く','3ヶ月','子法人のすべて', //問16〜20
                ]"
                :labels="[
                    'ウ', //16
                    'ク', //17
                    'ケ', //18
                    'イ', //19
                    'カ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい<br>勤続（在任）年数5年以下の法人役員等に支払われる退職手当金等の場合<br>退職所得の金額 = 収入金額 - 退職所得控除額<br>退職所得控除額（勤続年数20年以下） = 40万円 × 勤続年数',
                'アの解説を参照',
                'アの解説を参照',
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '公益事業用財産は、非課税財産として課税価格に算入されないため、みなし相続財産ではない。',
                '被相続人の死亡により取得した保険金については、その保険金のうち、死亡時までに払い込まれた保険料合計額に対する被相続人が負担した保険料の金額の割合に相当する部分が、課税財産となる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '遺言できる者は満15歳以上で意思能力を有する者に限られる。',
                '遺贈は遺言による被相続人の意思表示であるため、相続よりも優先するが、この場合にも一定割合の財産は相続人の最低限度の相続分として確保される。これを遺留分という。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '保険料は定期部分は損金、養老部分は資産計上となる。',
                '主契約保険料は資産計上となる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '年金の種類を問わず、原則として、次のいずれか高い金額で評価する。①解約返戻金額②年金に代えて一時金の給付を受けられる場合は、一時金相当額③予定利率等を基に算出した金額',
                '最も低い価格で評価する。',
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
                '確定申告不要制度を選択した場合には、収入金額が課税対象となり、元本取得のための負債利子の額を控除できない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '12種類ではなく、15種類。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '相続税と贈与税は密接な関係にあるため、これら2つの税は、いずれも相続税法という一つの法律の中で規定されている。また、財産の評価についても相続財産の評価と贈与財産の評価は同じ基準にしたがって行われる。',
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
                '資本金または出資金の額が1億円以下の会社を除く。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '責任準備金相当額ではなく、解約返戻金相当額。',
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
                    { label: '解', content: '代理相続ではなく、代襲相続。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '法人実在説ではなく、法人擬制説。' }, //34
                    { label: '解', content: '内国法人は、各事業年度終了の日の翌日から2カ月以内に、税務署長に対し、確定申告書を提出しなければならない。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '年金払いの老齢給付金については、雑所得として公的年金等控除を適用する。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'イ', content: '営利' }, //41
                    { label: 'ウ', content: '租税特別措置法' }, //42
                    { label: 'オ', content: '' }, //43
                    { label: 'オ', content: '' }, //44
                    { label: 'イ', content: '10万円' }, //45
                    { label: 'イ', content: '公共法人' }, //46
                    { label: 'エ', content: '償却原価' }, //47
                    { label: 'ウ', content: '3年' }, //48
                    { label: 'エ', content: '事業主' }, //49
                    { label: 'ア', content: '登録免許税' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="zeihou2023b" next-route="zeihou2022a" />

    </section>

    </SeihoTestLayout>


</template>
