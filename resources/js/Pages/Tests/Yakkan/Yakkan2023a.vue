<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2023年度 フォームA'

</script>

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
                'ク','イ','ウ','エ','ケ',  //問１〜５
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
                'ウ','ケ','ア','エ','コ',  //問６〜10
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
                'カ','ケ','ウ','エ','オ',  //問11〜15
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
                'ア','エ','ク','コ','イ',  //問16〜20
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
                :contents="[
                // 問31〜35
                '正しい',
                '普通保険的款と特約とは、いわば一般法と特別法との関係にあり、特約に規定のある事項については優先的に特約が適用され、特約に規定のない事項については普通保険約款が適用される。',
                '正しい',
                '被保険者は契約当事者ではないので、生命保険等の成立要件ではなく、効力発生のための要件であり、保険金受取の変更等においても同様である。',
                '正しい',
                // 問36〜40
                '2年間ではなく3年間。',
                '満期保険金登録制度ではなく、死亡保険金登録制度。',
                '正しい',
                '設計書ではなく、意向確認書面。',
                '正しい',
                 //問41〜50
                'A-重要事項','C（A・Bともに正しい）','A-保険金受取人','B-保険料前払主義','B-除斥期間',
                'B-取消し','B-衡平','C（A・Bともに正しい）','A-実体的監督','C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','オ','イ','エ','ウ',  //問41〜45
                'ウ','ウ','オ','イ','オ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2024c" next-route="yakkan2023b" />

    </section>

    </SeihoTestLayout>


</template>
