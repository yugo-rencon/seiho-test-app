<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
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
                '基金','基金償却積立金','10億','大規模経営','外国保険業者', // 問１〜５
                ]"
                :labels="[
                    'イ', //1
                    'ウ', //2
                    'ク', //3
                    'コ', //4
                    'ア', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '会社法','基準日','4ヶ月','社団','共益権', //問６〜10
                ]"
                :labels="[
                    'ア', //6
                    'ウ', //7
                    'ケ', //8
                    'キ', //9
                    'エ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '一定額','てん補','傷害','人の状態','死亡', //問11〜15
                ]"
                :labels="[
                    'ア', //11
                    'ク', //12
                    'オ', //13
                    'コ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '不妊治療','老衰','介護','身体の','治療', //問16〜20
                ]"
                :labels="[
                    'ク', //16
                    'エ', //17
                    'カ', //18
                    'ケ', //19
                    'ア', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '非営利保険ではなく相互保険。',
                '営利保険においては、保険契約者は法的には保険者に対する契約上の一方の当事者に過ぎず、保険業の運営は保険者自身の責任において行われ、保険業による収支の差額は保険者に帰属し、その運営については保険契約者は何らの法的権限も有しない。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '告知日ではなく申込日。',
                '正しい',
                '営業・事業のためまたは営業・事業として契約申込したときはクーリングオフを取り扱わない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '内閣総理大臣は、生命保険業の免許、免許取消しや保険契約移転などの認可をしたときは、すみやかに財務大臣に通知することとされている。',
                '金融庁長官でなく、財務大臣。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '相互会社同士の合併の場合は、合併後の会社も相互会社であることを要する',
                '保険株式会社同士の合併については、会社法の規定による。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '「保険仲立人賠償責任保険契約」を締結し、金融庁長官の承認を受けたときは、当該契約の効力の存する間、当該契約の保険金の額に応じて供託しないことができる。',
                '正しい',
                '保険仲立人は、顧客からの求めに応じて保険契約締結の媒介に関する受取手数料、報酬等を明らかにしなければならない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険契約等は、保険法上一定の方式を要することはしていないので、生命保険契約等は不要式契約である。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険募集人とは、生命保険会社のために保険契約の締結の代理または媒介を行うものをいう。',
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
                '2種類以上の手術を同時に受けた場合は、最も給付倍率の高い1種類の手術を受けたものとみなして計算する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '保険者は保険契約者に対して、この告知義務の履行を請求し、強制し得る権利を有するものではなく、また保険契約者がまったく告知しない場合でも、別に保険者に対して損害を賠償する責任を負うものではない。',
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
                '保険料の収受ならびに保険金および払い戻される保険料その他の返戻金の支払に関する事項については、算出方法書ではなく事業方法書の内容。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '保険料が団体（集団）から生命保険会社の本社等に払い込まれることをもって保険料支払債務が履行されたことになる。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '保険証券は、生命保険契約等の成立およびびその内容に関する証拠材料となる証拠証券に過ぎず、その作成交付は契約成立の要件ではない。' }, //34
                    { label: '解', content: '保険契約の復活の法的性格については、契約当事者の合意に基づいて失効状態の保険契約を有効状態に戻すための一種特別な契約と解する「特別契約説」の考え方が妥当である。' }, //35
                    { label: '解', content: '保険受取人ではなく被保険者。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '土地の含み益も計算の要素としている。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '元本欠損' }, //41
                    { label: 'エ', content: '善意' }, //42
                    { label: 'ア', content: '困惑' }, //43
                    { label: 'オ', content: '' }, //44
                    { label: 'イ', content: '生命保険会社' }, //45
                    { label: 'ア', content: '1ヶ月' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'エ', content: '責任準備金' }, //48
                    { label: 'ウ', content: '7年' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2022a" next-route="yakkan2022c" />

    </section>

    </SeihoTestLayout>


</template>
