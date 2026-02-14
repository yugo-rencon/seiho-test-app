<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2021年度 フォームB'

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
                '猶予期間','オーバーローン','契約者貸付金','解約返戻金','生命保険会社所定', // 問１〜５
                ]"
                :labels="[
                'ウ','コ','ア','イ','カ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '解約返戻金','復活','3年','延滞保険料','遅い時', //問６〜10
                ]"
                :labels="[
                'ケ','ウ','コ','イ','オ',  //問６〜10
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
                'ア','カ','コ','エ','オ',  //問11〜15
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
                'オ','イ','キ','ク','ウ',  //問16〜20
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
                '保険約款は拘束力ありとされている。',
                '認可を受けない保険約款も、その内容が強行規定や公益に反するものでない限り、保険契約者との間では有効であるとするのが判例、通説である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '遅延利息を請求することなく、契約成立時に定めた保険料額をそのまま受け入れている。',
                '半年払の場合、払込期月の翌月初日から翌々月の契約日の月単位の応答日まで（払込期月の契約応当日が2月、6月、11月の各末日のときは、それぞれ4月、8月、1月の各末日まで）なので、払込猶予期間は、7月1日から8月31日までとなる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '誤認ではなく故意。',
                '保険会社が立証する必要がある。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '労働基準監督署ではなく財務局・福岡財務支局',
                '正しい',
                '12か月ではなく6か月'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '5年以下ではなく1年以下'
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
                '保険契約は過去に遡って解約することはできず、将来に向かって解約することができる。またたとえば、保険契約者と被保険者が別人の場合でも、被保険者が死亡しているにもかかわらず、このことを知らない保険契約者が保険契約を解約したときには、生命保険会社はその被保険者の死亡について保障責任を負う。',
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
                '生命保険業と損害保険業が逆。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '外国保険業者の場合は、株式会社や相互会社でなくてもよく、個人でもよい。',
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
                '「民法、商法」の順ではなく「保険法、民法」。',
                '正しい',
                '正しい',
                '全てではない。例えば、傷害疾病定額保険契約の場合、被保険者が保険金受取人である場合には被保険者の同意は必要ない。',
                '正しい',
                // 問36〜40
                '満期保険金登録制度ではなく、死亡保険金登録制度。',
                '正しい',
                '利益分配金ではなく契約者配当金。',
                '相互会社は、ほかの相互会社または保険株式会社と合併することができる。',
                '正しい',
                 //問41〜50
                'B-契約を取り消し得る','C（A・Bともに正しい）','B-通信先','A-10月18日','B-5営業日',
                'C（A・Bともに正しい）','B-取り消すことができる','A-3ヶ月','B-取締役会','C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ウ','オ','ウ','ア','ウ',  //問41〜45
                'オ','ウ','イ','エ','オ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2021a" next-route="yakkan2021c" />

    </section>

    </SeihoTestLayout>


</template>
