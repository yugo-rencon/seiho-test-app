<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2022年度 フォームA'

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
                '洗替方式', '費用', '標準', '除く', '最低額', // 問１〜５
                ]"
                :labels="[
                'エ', 'コ', 'カ', 'ウ', 'ケ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '未経過', '危険', '内部留保', '純保険料式', '20%', //問６〜10
                ]"
                :labels="[
                'オ', 'ウ', 'イ', 'コ', 'キ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '流動', '支払期日の到来した公社債利札', '決算時レート', '投資家', '信託銀行', //問11〜15
                ]"
                :labels="[
                'キ', 'ク', 'オ', 'イ', 'コ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '法人税法施行令', '加算した', '責任準備金対応', '保険約款', '税効果会計', //問16〜20
                ]"
                :labels="[
                'ケ', 'ク', 'エ', 'イ', 'コ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '財務会計とは、企業の経済情報を外部の第三者に正確に報告することを目的とする会計であるのに対して、管理会計とは、意思決定を行い，または経営活動の成果を分析・評価するのに有用な会計情報を経営者その他の管理者に提供するための会計である。',
                '財務会計が現在または過去の企業の情報提供を主目的としているのに対して、管理会計は未来の予測効果を重要視している点に特色がある。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '企業の経済活動を記帳・計算するのが簿記であるが、経済活動のすべてを記帳・計算するわけではない。たとえば、電力会社と電力供給の契約を締結した場合、契約締結の時点では、それぞれに「電力を供給する義務」と「電力の供給を受ける権利」が発生するが、会計上の取引とはならない。',
                '正しい',
                '元帳の締切ではなく、転記'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '従来連結子会社及び子法人等の範囲は議決権の所有割合（50%超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。',
                '連結会社相互間の取引によって取得した資産に含まれる未実現損益はその全額を消去する',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '発生主義ではなく、現金主義。',
                '売買目的有価証券を除く。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '株主総会（総代会）の会日より2週間前から、5年間本社に、その謄本を3年間支社に備置することになっている。',
                '正しい',
                '2006年（平成18年）の保険業法施行規則の改正により、2008年度（平成20年度）から、四半期開示が努力義務として規定された。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '会計数値の開示はもちろん利益計算もその目的としない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                'その他有価証券の評価差額から税効果会計上の税効果相当額を控除した額を計上する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '契約の無効・取消し・解除による返戻金や前納保険料等の返金は、「その他返戻金」に含まれる。',
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
                '危険準備金損益・為替損益ではなく、責任準備金関係損益・価格変動損益。',
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
                '4〜5年程度ではなく、1～2年程度の周期で調査が実施される。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '正しい',
                '流通市場における開示書類には、「有価証券報告書」「半期報告書」，「四半期報告書」および「臨時報告書」等がある。',
                '正しい',
                '正しい',
                // 問36〜40
                '価償却の方法は、資産の種類ごとに定められている。',
                '預り金ではなく、前受収益。',
                '収支相当の原則ではなく、費用収益対応の原則。',
                '正しい',
                '正しい',
                 //問41〜50
                'C（A・Bともに正しい）', 'A-損益計算書', 'B-保守主義', 'A-負債', 'B-純保険料',
                'B-金融庁長官', 'C（A・Bともに正しい）', 'A-期末', 'A-販売費及び一般管理費', 'B-配当率',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'オ', 'イ', 'ウ', 'ア', 'エ',  //問41〜45
                'ウ', 'オ', 'ア', 'イ', 'エ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2023c" next-route="kaikei2022b" />

    </section>

    </SeihoTestLayout>


</template>
