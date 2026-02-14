<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2023年度 フォームC'

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
                '事業方法書','停止','期限','財産の供託','免許の取消', //問11〜15
                ]"
                :labels="[
                'ク','エ','カ','ケ','ア',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                'ソルベンシー・マージン','基金','超える','200％','小さな', //問16〜20
                ]"
                :labels="[
                'キ','ア','イ','ク','カ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '保険業の開始に際しては、普通保険約款を内閣総理大臣宛の免許申請書に添付しなければならない',
                '正しい',
                '特約に規定のある事項については優先的に特約が適用され、特約に規定のない事項については、普通保険約款が適用される'
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
                '保険約款で保険者の責任は第1回保険料相当額払込の時または告知の時のいずれか遅い時から開始する旨規定している。この点については、保険契約は保険契約者と保険者との合意によってのみ成立し、第1回保険料相当額の払込などは保険者の責任開始の要件であるにすぎず、要物契約ではないと解される。',
                '生命保険契約等の締結にあたって実務上は、生命保険契約等の申込人から申込書の提出を求め、申込の承諾後生命保険会社から保険証券を発行しているが、これは契約の存在や内容を明確にして大量の事務処理の便宜をはかるためであり、このことをもって生命保険契約等が要式契約であるとはいえない。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '株式会社においては、構成員は株主であり、利益金を本来、株主に支払うべきものと考えられるが、実務上は、保険約款で契約者配当金を保険契約者に支払う旨規定するのが一般的になっている。',
                '事業年度末において契約日から起算して1年を超えている有効な保険契約に対して配当金が割り当てられる。'
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
                '相互会社が行う保険は相互保険であるとしても、商法の商行為一般の規定が適用される。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '締結の媒介ではなく、締結の代理。',
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
                '契約締結の時から2年ではなく5年を経過したとき。',
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
                '正しい',
                '生命保険業は負担する危険の発生が比較的正確に統計上把握できるのに対し、損害保険業の負担する危険については予想していなかった大損害が生ずるおそれも大きい。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '傷害疾病定額保険契約ではなく、傷害疾病損害保険契約。',
                '保険法は、保険料不可分の原則を前提とした規定が設けられていないことから、保険料不可分の原則を採用しておらず、未経過期間に対応した保険料を返還する必要があると考えられる。',
                '正しい',
                '保険証券担保貸付説ではなく、相殺予約付消費賃借契約説。',
                '正しい',
                // 問36〜40
                '主契約が払済保険または延長保険に変更されて特約が消滅した場合は、特約の解約返戻金と主契約の解約返戻金を合算して払済保険金額や保険期間等を計算する。',
                '満期保険金登録制度ではなく、死亡保険金登録制度。',
                '正しい',
                '設計書ではなく、意向確認書面。',
                '正しい',
                 //問41〜50
                'A-重要事項','C（A・Bともに正しい）','A-10月18日','A-保険法','A-法定他業',
                'B-総資産','A-3ヶ月','C（A・Bともに正しい）','B-供託所','C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','オ','ア','イ','ア',  //問41〜45
                'エ','イ','オ','ウ','オ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2023b" next-route="yakkan2022a" />

    </section>

    </SeihoTestLayout>


</template>
