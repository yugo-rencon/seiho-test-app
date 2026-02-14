<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2024年度 フォームC'

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
                '承諾','商事特別法','申込日','8日','第1回保険料相当額', // 問１〜５
                ]"
                :labels="[
                'カ','オ','コ','ア','ク',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '1年','申込者等が自ら指定した','医師の診査','債務','更改、更新', // 問6〜10
                ]"
                :labels="[
                'ア','コ','ウ','ク','カ',  //問6〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '免許','確実性','負担する危険','統計上','大損害', // 問11〜15
                ]"
                :labels="[
                'コ','イ','ケ','カ','オ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '議決権','50%','認可','特定関係者','弊害防止措置', // 問16〜20
                ]"
                :labels="[
                'ウ','イ','ク','キ','ケ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '保険業の開始に際しては、普通保険約款を内閣総理大臣宛の免許申請書に添付しなければならない。', //p11
                '認可を受けない保険約款もその内容が強行規定や公益に反するものでない限り、保険契約者との間では有効であるとするのが判例、通説である。', //p11
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '「第三者のためにする生命保険契約等」においても、保険契約者は自己の名において契約し、保険者に対して自ら保険料支払義務を負うのであって、<u><b>保険金受取人の代理人として契約するのではない</b></u>。', //p55
                '正しい',
                '「第三者のためにする生命保険契約等」における保険金受取人は、特別な受益の意思表示を要せずして当然に契約上の権利を取得する。' //p56
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険会社が立証しなければならない。', //p134
                '保険法に規定がないものの、一部の生命保険会社において保険約款に規定されている。', //p134-135
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '相互会社同士の合併の場合は、合併後の会社も相互会社であることを要する。', //p251
                '保険株式会社同士の合併については、<u><b>会社法</b></u>の規定により行う。' //p251
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約者、被保険者または不特定の者に対して、<u><b>将来における配当</b></u>および資産の運用実績その他の要因により金額が変動する保険金や返戻金等、金額が不確実な事項について、断定的判断を示し、または確実であると誤解させるおそれのあることを告げ、もしくは表示する行為は禁止されている。', //p267
                '保険契約者または被保険者に対して、保険料の割引、割戻その他特別の利益の提供を約し、または提供する行為は禁止されている。ただし、<u><b>この行為を基礎書類にもとづいて行うことはかまわないと規定されている</b></u>。', //p266
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '法規範説の説明。意思推定説は、「保険契約者は通常は保険約款の内容を契約内容とする意思をもって契約を締結しているものと推定しうる」とする説である。', //p7
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
                '保険者は保険契約者に対して告知義務の履行を請求し強制し得る権利を有するものではなく、また保険契約者がまったく告知をしない場合でも、別に保険者に対して損害を賠償する責任を負うものではない。', //p48
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
                '同一の不慮の事故による入院についての災害入院給付金の支払限度は、支払日数<u><b>120日</b></u>である。' //p175
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '保険持株会社は、銀行や証券専門会社など金融関連業を営む会社<u><b>以外</b></u>の会社を子会社としようとするときは、あらかじめ、金融庁長官の承認を受けなければならない。' //p216-217
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険募集人は1人で何社もの生命保険募集人となることができるわけではなく、いわゆる乗合の禁止という制限が設けられ、<u><b>損害保険にはみられない</b></u>厳しい制限になっている。', //p260-261
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
                '営利保険の保険者は株式会社であることから、営利保険の引受については、いわゆる営業的商行為として、商法の商行為一般に関する規定の適用を受ける。一方で、相互会社が行う保険は相互保険であるとしても、保険業法により商法が準用され、商行為一般の規定の準用を受ける。', //p6
                '正しい',
                '正しい',
                '「保険契約者以外の者を被保険者とする死亡保険契約」において、その保険金受取人が保険給付を請求する権利を譲渡する場合、または保険給付を請求する権利に質権を設定する場合は、<u><b>被保険者</b></u>の同意が必要となる。', //p58
                '保険契約成立後、保険契約者が保険金受取人を変更するにはその保険契約者以外の者である被保険者の同意が必要である。。', //p57
                // 問36〜40
                '正しい',
                '疾病入院給付金の支払要件に該当する入院中に災害入院給付金の支払要件に該当する入院が終了した場合は、以後疾病入院給付金を支払うが、この疾病入院給付金に対しては、4日不担保等の免責規定は<u><b>適用しない</b></u>。', //p178
                '保険約款では、貸付金の元利金が解約返戻金額をこえた（いわゆるオーバーローンになった）場合に、<u><b>生命保険会社から通知した金額を所定の期日までに保険契約者が払い込まなかったとき</b></u>は、保険契約は失効する旨規定するのが一般的である。', //p157
                '正しい',
                '「外国保険業者」とは、外国の法令に準拠して外国において保険業を行う者をいう。なお、<u><b>外国保険業者の場合は、株式会社や相互会社でなくてもよく、個人でもよい</b></u>。',
                 //問41〜50
                'A-射倖','B-契約日','C（A・Bともに正しい）','C（A・Bともに正しい）','A-生命保険会社',
                'B-当該保険金受取人の相続人全員','C（A・Bともに正しい）','B-定款','B-4ヶ月','B-媒介',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','エ','オ','オ','イ',  //問41〜45
                'エ','オ','エ','ウ','ウ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2024b" next-route="yakkan2023a" />

    </section>

    </SeihoTestLayout>


</template>
