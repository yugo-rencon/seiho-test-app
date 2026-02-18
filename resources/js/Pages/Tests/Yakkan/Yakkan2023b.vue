<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2023年度 フォームB'

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
                '払込猶予期間','オーバーローン','解約返戻金','生命保険会社所定','複利', // 問１〜５
                ]"
                :labels="[
                    'ク', //1
                    'イ', //2
                    'ウ', //3
                    'エ', //4
                    'ケ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '3年','復活','延滞保険料','失効期間','利息', //問６〜10
                ]"
                :labels="[
                    'ウ', //6
                    'ケ', //7
                    'ア', //8
                    'エ', //9
                    'コ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '諾成契約','必要としない不要式契約','自己の名','代理人','移転', //問11〜15
                ]"
                :labels="[
                    'ク', //11
                    'コ', //12
                    'イ', //13
                    'キ', //14
                    'ア', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '賭博的行為','死亡保険契約','傷害疾病定額保険契約','契約当事者ではない','保険会社向けの総合的な監督指針', //問16〜20
                ]"
                :labels="[
                    'ク', //16
                    'エ', //17
                    'キ', //18
                    'ウ', //19
                    'コ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '一契約における被保険者は必ずしも1人であることを要しない。',
                '被保険期間ではなく保険料期間。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '商法ではなく民法。',
                '民事特別法ではなく商事特別法。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '少額短期保険業免許は定義されていない。',
                '再保険の引受が可能。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '10年チルメル式ではなく平準純保険料式。',
                '正しい',
                '保険料積立金、未経過保険料、払戻積立金、危険準備金の4つ。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '損害保険には見られない。',
                '生命保険会社に対しても「他の生命保険会社の生命保険募集人に対して、保険募集の委託もしくは再委託をしてはならない」旨を規定し、制限をかけている。',
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
                '慣習法説ではなく白地慣習法説。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '保険者が告知されなかった事実を知っていた場合も解除できない。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '承諾前であっても、もし被保険者の健康状態などついて保険事故等が発生しなければ承諾していたであろう状態であった場合には、申し込みを承諾し、責任を負うとするのが通常である。',
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
                '「保険金受取人またはその承継人」ではなく「保険契約者またはその承継人」。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '外国保険業者の場合は、株式会社や相互会社だけでなく、個人でもよい。',
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
                    { label: '解', content: '認可を受けない保険約款も、その内容が強行規定や公益に反するものでない限り、保険契約者との間では有効であるとするのが判例、通説である。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '利益分配金ではなく契約者配当金。' }, //36
                    { label: '解', content: '満期保険金登録制度ではなく、死亡保険金登録制度。' }, //37
                    { label: '解', content: '相互会社と株式会社が逆。' }, //38
                    { label: '解', content: '設計書ではなく、意向確認書面' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ア', content: '重要事項' }, //41
                    { label: 'イ', content: '被保険者利益' }, //42
                    { label: 'ウ', content: '代理' }, //43
                    { label: 'ウ', content: '1ヶ月' }, //44
                    { label: 'ア', content: '責任準備金' }, //45
                    { label: 'オ', content: '' }, //46
                    { label: 'エ', content: '財務大臣' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'エ', content: '取締役会' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2023a" next-route="yakkan2023c" />

    </section>

    </SeihoTestLayout>


</template>
