<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2025年度 フォームA'
const SAME = "※2025年度フォームA/B/Cで同一問題";</script>

<template>

<SeihoTestLayout :title="title">
    <section class="bg-[#fdfbff] text-gray-800 py-10">

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
                    'カ', //1
                    'オ', //2
                    'コ', //3
                    'ア', //4
                    'ク', //5
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
                    'ア', //6
                    'コ', //7
                    'ウ', //8
                    'ク', //9
                    'カ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '射倖','善意','保険契約者','は要しない','は含まれない', // 問11〜15
                ]"
                :labels="[
                    'イ', //11
                    'ウ', //12
                    'ク', //13
                    'キ', //14
                    'カ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '緩和','残額','自殺','生命保険会社','責任準備金', // 問16〜20
                ]"
                :labels="[
                    'ア', //16
                    'カ', //17
                    'キ', //18
                    'ク', //19
                    'ケ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険契約等は、民法において掲げられた贈与以下13種の契約（典型契約または有名契約という）には該当しない。', //p4
                '生命保険契約等には、民法の一般規定（たとえば、公の秩序・善良の風俗に反するものは無効という規定など）が<u><b>適用される</b></u>。', //p4
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約は保険契約者と保険者との合意によってのみ成立し、第1回保険料相当額の払込などは保険者の責任開始の要件であるにすぎず、要物契約ではないと解される。', //p35
                '正しい',
                '生命保険契約等においては、保険給付を行う義務の発生や保険料支払義務の履行が保険事故または給付事由の発生時期如何によって左右される。この意味で、生命保険契約等は<u><b>射倖契約</b></u>であるということができる。' //p36
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '株式会社においては、構成員は株主であり、利益金は本来、株主に支払うべきものと考えられるが、実務上は、保険約款で契約者配当金を保険契約者に支払う旨<u><b>規定する</b></u>のが一般的となっている。', //p159-160
                '社員配当平衡積立金の説明。' //p159
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '「外国保険業者」とは、外国の法令に準拠して外国において保険業を行う者をいう。なお、外国保険業者の場合は、<u><b>株式会社や相互会社でなくてもよく、個人でもよい</b></u>。', //p256
                '外国保険会社等は、日本における保険契約者等の保護のため必要かつ適当なものとして<u><b>2億円</b></u>を、日本における主たる店舗の最寄りの供託所に供託しなければならない。', //p257
                '正しい'
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
                '正しい',
                '生命保険会社の支払うべき保険金から未払込の当該払込月の<u><b>保険料を差し引く</b></u>。' //p88
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
                '「保険料及び責任準備金の算出方法書」の必要的記載事項の説明。「普通保険約款」の必要的記載事項は、保険金の支払事由、保険契約の無効原因などがある。', //p219-220
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
                '生命保険会社の責任準備金は、保険料積立金、未経過保険料、<u><b>払戻積立金</b></u>、<u><b>危険準備金</b></u>の4つに区分しなければならないこととされている。' //p242
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
                    { label: '解', content: '保険契約者は保険者に対し保険料を支払う義務を負うが、保険料支払時期、方法、場所等については、保険約款に定めがあればこれにより、保険約款に定めがなければ、<u><b>商法または民法の一般原則に従う</b></u>。' }, //33
                    { label: '解', content: '「保険契約者以外の者を被保険者とする死亡保険契約」において、その保険金受取人が保険給付を請求する権利を譲渡する場合、または保険給付を請求する権利に質権を設定する場合は、<u><b>被保険者</b></u>の同意が必要となる。' }, //34
                    { label: '解', content: '通知義務を怠った場合の効果については保険法上特別の規定はないが、通知を怠ったことによって当然に保険者が保険給付の責任を免れるものではなく、保険者の事務手続き上、保険金の支払時期がその分だけ遅れる結果になるにすぎないものと解されている。' }, //35
                    { label: '解', content: '住所変更通知義務は、保険契約者がこの義務を履行しなかったときに、民法上の債務不履行に関する一般原則を適用する性質を有するものではなく、単に、保険契約者が不利益を被る結果になるのにすぎないものである。' }, //36
                    { label: '解', content: '疾病入院給付金の支払要件に該当する入院中に災害入院給付金の支払要件に該当する入院が終了した場合は、以後疾病入院給付金を支払うが、この疾病入院給付金に対しては、4日不担保等の免責規定は<u><b>適用しない</b></u>。' }, //37
                    { label: '解', content: '相互会社は、保険業法にもとづき設立される営利も公益も目的としない<u><b>中間法人</b></u>である。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ア', content: '重要事項' }, //41
                    { label: 'ウ', content: '成立要件' }, //42
                    { label: 'オ', content: '' }, //43
                    { label: 'イ', content: '猶予期間' }, //44
                    { label: 'イ', content: '5年' }, //45
                    { label: 'ウ', content: '定期保険' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'イ', content: '法定他業' }, //49
                    { label: 'ウ', content: '媒介' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            next-route="yakkan2025b"
        />

    </section>

    </SeihoTestLayout>


</template>
