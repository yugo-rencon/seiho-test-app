<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2023年度 フォームA'

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
                '財産','中間業務報告書','金融庁長官','公衆の縦覧','子会社', //問11〜15
                ]"
                :labels="[
                    'カ', //11
                    'ケ', //12
                    'ウ', //13
                    'エ', //14
                    'オ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '価格変動準備金','健全性','標準責任準備金','未経過','危険準備金', //問16〜20
                ]"
                :labels="[
                    'ア', //16
                    'エ', //17
                    'ク', //18
                    'コ', //19
                    'イ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '一般に、生命保険契約等の締結に際して保険契約の申込人が保険約款の各条項を知ったうえで理解し納得しているとは限らないが、従来より保険約款は拘束力ありとされていた。',
                '認可を受けない保険約款も、その内容が強行規定や公益に反するものでない限り、保険契約者との間では有効であるとするのが判例、通説である。'
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
                '重大事由による保険契約の解除の場合も支払われる。',
                '保険金額の減額の場合も支払われる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '相互会社は、ほかの相互会社または保険株式会社と合併することができる。',
                '正しい',
                '保険法ではなく会社法。'
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
                '法人契約や事業主契約は本法の対象外。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '保険者は保険契約者に対して、この告知義務の履行を請求し、強制し得る権利を有するものではなく、また保険契約者がまったく告知しない場合でも、別に保険者に対して損害を賠償する責任を負うものではない。',
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
                '「契約応当日以後末日まで」ではなく、「初日以後契約応当日前」',
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
                '「保険金受取人またはその承継人」ではなく「保険契約者またはその承継人」'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '財務諸表ではなく、保険料及び責任準備金の算出方法書。',
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
                    { label: '解', content: '普通保険的款と特約とは、いわば一般法と特別法との関係にあり、特約に規定のある事項については優先的に特約が適用され、特約に規定のない事項については普通保険約款が適用される。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '被保険者は契約当事者ではないので、生命保険等の成立要件ではなく、効力発生のための要件であり、保険金受取の変更等においても同様である。' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '2年間ではなく3年間。' }, //36
                    { label: '解', content: '満期保険金登録制度ではなく、死亡保険金登録制度。' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '設計書ではなく、意向確認書面。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ア', content: '重要事項' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'イ', content: '保険金受取人' }, //43
                    { label: 'エ', content: '保険料前払主義' }, //44
                    { label: 'ウ', content: '除斥期間' }, //45
                    { label: 'ウ', content: '取消し' }, //46
                    { label: 'ウ', content: '衡平' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'イ', content: '実体的監督' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2024c" next-route="yakkan2023b" />

    </section>

    </SeihoTestLayout>


</template>
