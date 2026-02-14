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

const title = "生命保険商品と営業"
const subject = '2023年度 フォームB'

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
                '世代間扶養', '18.30%', '16,900円', 'マクロ経済スライド', '2割', // 問１〜５
                ]"
                :labels="[
                'ウ', 'オ', 'キ', 'ケ', 'ア',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '2分の1', '5年', '10年', '短時間労働者', '産休期間中', //問６〜10
                ]"
                :labels="[
                'ケ', 'ア', 'ウ', 'ク', 'キ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '継続的', 'マーケティング', '転換制度', 'エージェント', '不可分化', //問11〜15
                ]"
                :labels="[
                'ウ', 'コ', 'キ', 'イ', 'ケ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                'face to face', '情報通信機器', '囲い込み', 'CS（customer Satisfaciton）', '選択', //問16〜20
                ]"
                :labels="[
                'ケ', 'エ', 'ア', 'ク', 'オ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '契約の解約ではなく、契約を取り消すことができる',
                '正しい',
                '運用方針ではなく勧誘方針。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '変動保険金は毎月変動、満期保険金は満期時に確定、積立金と解約返戻金は毎日変動。',
                '契約時に定めた基本保険金額、特約保険金額は変動しない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '1年以上ではなく2年以上、前後6か月以内ではなく前後1年以内。',
                '健康保険組合連合会ではなく、地方公共団体。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '従業員や団体の所属員が保険料を拠出し、加入脱退が任意で（任意加入）、保険料額・年金額の自在性があるのが特徴であり、「B（型）年金」とも称されるのは拠出型企業年金',
                '元本確保商品としての要件をみたすGICタイプの商品が生命保険商品として主流なのは、確定拠出年金保険。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '契約者と保険会社との間に立って中立の立場で保険契約の締結の媒介を行う。',
                '日本固有の制度ではない。',
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
                '株式・株式投資信託等の有価証券ではなく定期性預貯金。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '第3号ではなく第1号被保険者。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '年齢階級別ではなく所得段階別。',
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
                '個人型確定拠出年金（iDeCo）は対象外。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '企業保険の販売を中心とした活動を行いつつ、個人保険販売の支援のため担当企業やその関連企業の基盤化を推進している法人営業組織もある。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '住民票を有するすべての人へ個人番号が割り当てられた。',
                '被保険者の生存中にかぎり、周期的に一定の金額の支払をするもの。',
                '生命保険支払専門土ではなく生命保険面接士。',
                '正しい',
                // 問36〜40
                '正しい',
                '正しい',
                '日本証券業協会ではなく生命保険協会。',
                'これまで生命保険会社の支社の配置は、管理スパン上の問題や地域社会における店舗サービス機能の発揮ならびにPR効果の観点から、組織がある一定規模までに達すれば支社を分割するのが一般的であったが、近年ではコスト、効率化のため事務面の集約化や規模の大型化に向かう傾向が見られる。',
                '正しい',
                 //問41〜50
                'B-ライフサイクル', 'A-３分の１', 'B-適合性の原則', 'A-6ヶ月', 'C（A・Bともに正しい）',
                'A-企業等', 'A-移行', 'A-経験死亡率', 'B-5倍', 'C（A・Bともに正しい）',
                ]"
                :labels="[
                '解', '解', '解', '解', '解', '解', '解', '解', '解', '解',  //問31〜40
                'エ', 'ア', 'エ', 'イ', 'オ', 'イ', 'イ', 'ア', 'ウ', 'オ',  //問41〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2023a" next-route="eigyo2023c" />

    </section>
</SeihoTestLayout>
</template>
