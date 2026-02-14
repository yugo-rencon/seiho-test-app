<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2022年度 フォームC'

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
                '事業方法書','停止','財産の供託','免許の取消','会計参与', // 問１〜５
                ]"
                :labels="[
                'カ','ケ','オ','コ','イ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '基金','通常の予測','最低保証リスク','200％','早期是正措置', //問６〜10
                ]"
                :labels="[
                'ウ','ク','オ','イ','キ',  //問６〜10
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
                'ア','ク','オ','コ','エ',  //問11〜15
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
                'ク','エ','カ','ケ','ア',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '断定的な判断を提供した場合も、事業者の一定行為に該当する。',
                '業者の放意または重過失による債務不履行・不法行為により生じた損害賠償責任の一部を免除する条項についても無効となる。',
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '承諾前であっても、もし被保険者の健康状態などについて保険事故等が発生しなければ承諾していたであろう状態であった場合には、申し込みを承諾し、責任を負うとするのが通常である。',
                '責任開始の日を契約日とする。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '1回という決まりはない。',
                '自動振替貸付が行われた後、比較的短期間のうちに保険契約を解約した場合、自動振替貸付による解約返戻金額の減少を望まないものとみなし、自動振替貸付を行わなかったとして、解約返戻金額を算定することににしている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '主観的要件も必要。',
                '正しい',
                '保険約款では、通常「告知書により告知してください。ただし、会社指定の医師に告知するときは口頭で告知してください」と規定している。'
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
                '解約の効力発生時期は保険契約者の解約の意思表示が生命保険会社に到達したときである。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '払戻積立金として積み立てる金額は除く。',
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
                '正しい',
                '2種類以上の手術を同時に受けた場合は、最も給付倍率の高い1種類の手術を受けたものとみなして計算する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険会社に対しても、「ほかの生命保険会社の生命保募集人に対して、保険募集の委託もしくは再委託をしてはならない」旨を規定している。',
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
                :contents="[
                // 問31〜35
                '正しい',
                '片務契約ではなく双務契約。',
                '正しい',
                '保険証券は、生命保険契約等の成立およびびその内容に関する証拠材料となる証拠証券に過ぎず、その作成交付は契約成立の要件ではない。',
                '保険契約の復活の法的性格については、契約当事者の合意に基づいて失効状態の保険契約を有効状態に戻すための一種特別な契約と解する「特別契約説」の考え方が妥当である。',
                // 問36〜40
                '正しい',
                '正しい',
                '金融庁長官の認可が必要。',
                '正しい',
                '正しい',
                 //問41〜50
                'B-元本欠損','B-善意','A-保険約款','B-重大事由','A-承継人',
                'A-保険契約者保護機構','C（A・Bともに正しい）','C（A・Bともに正しい）','B-財産目録','C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ウ','エ','ア','ウ','イ',  //問41〜45
                'ア','オ','オ','ウ','オ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2022b" next-route="yakkan2021a" />

    </section>

    </SeihoTestLayout>


</template>
