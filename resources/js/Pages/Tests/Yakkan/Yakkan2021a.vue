<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
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
                '片面的強行規定','無効','強行規定','一般法','民法任意規定', // 問１〜５
                ]"
                :labels="[
                    'コ', //1
                    'ク', //2
                    'ウ', //3
                    'ケ', //4
                    'ア', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '自己の名','代理人','移転','民法','受益の意思表示', //問６〜10
                ]"
                :labels="[
                    'イ', //6
                    'カ', //7
                    'ウ', //8
                    'オ', //9
                    'キ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '会社法','財産','公衆の縦覧','子会社','価格変動準備金', //問11〜15
                ]"
                :labels="[
                    'ア', //11
                    'カ', //12
                    'コ', //13
                    'エ', //14
                    'オ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '債務','標準責任準備金','平準純保険料式','日本アクチュアリー会','未経過保険料', //問16〜20
                ]"
                :labels="[
                    'オ', //16
                    'イ', //17
                    'キ', //18
                    'ク', //19
                    'ウ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約は保険契約者と保険者との合意によってのみ成立し、第一回保険料相当額の払込などは、保険者の責任開始の要件であるに過ぎず、要物契約ではないと解される。',
                '正しい',
                '符号契約ではなく射倖契約。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '契約の自由というのは契約の締結にいたるまでの間における自由であり、ひとたび契約を締結したからにはその契約の拘束から免れる自由はないということに注意が必要である。',
                '両当事者間で「申込」と「承諾」の意思表示が内容的に一致している必要がある。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '5年以下ではなく1年以下。',
                '保険会社等の営業所等および申込者の居宅を除く。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険会社が立証する必要がある。',
                '保険法に規定がないものの、一部の生命保険会社において保険約款に規定されている。',
                '正しい'
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
                '「消費者」を個人といい、「事業者」を法人等という。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '保険業法ではなく保険法',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '承諾前であっても、もし被保険者の健康状態などについて保険事故等が発生しなければ承諾していたであろう状態であった場合には、申し込みを承諾し、責任を負うとするのが通常である。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '財務諸表ではなく、保険料及び責任準備金の算出方法書',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '外国保険業者の場合は、株式会社や相互会社でなくてもよく、個人でもよい',
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
                    { label: '解', content: '消費者契約法ではなく、金融サービス提供法' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '「保険契約の締結の媒介」とは、保険契約の成立に尽力する事実行為であるのに対し、「保険契約の締結の代理」とは保険契約の締結そのものと考えてよい。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '保険約款では、「高度障害保険金を支払った場合には被保険者が高度障害状態になった時から保険契約は消滅する」旨規定しているため、再度、高度傷害保険金が支払われることはない。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '解約の効力発生時期は保険契約者の解約の意思表示が生命保険会社に到達し、解約返戻金の支払いが完了したときである。' }, //38
                    { label: '解', content: '生命保険業免許と損害保険業免許と同一のものが受けることはできない。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'オ', content: '' }, //41
                    { label: 'ウ', content: '成立要件' }, //42
                    { label: 'ウ', content: '2021年（令和3年）12月31日' }, //43
                    { label: 'ア', content: '10月18日' }, //44
                    { label: 'エ', content: '法定利率' }, //45
                    { label: 'ア', content: '不可争期間' }, //46
                    { label: 'ウ', content: '取り消すことができる' }, //47
                    { label: 'イ', content: '実体的監督' }, //48
                    { label: 'エ', content: '特別決議' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2022c" next-route="yakkan2021b" />

    </section>

    </SeihoTestLayout>


</template>
