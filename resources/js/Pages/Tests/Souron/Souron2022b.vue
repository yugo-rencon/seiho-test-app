<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
const subject = '2022年度 フォームB'

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
                '保険契約準備金','責任準備金','安全','収益','予定利率', // 問１〜５
                ]"
                :labels="[
                'イ','エ','ア','コ','カ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '長期','貯蓄性','公共','貸付金','有価証券', //問６〜10
                ]"
                :labels="[
                'カ','オ','ク','ウ','コ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '平均寿命','7','速い','扶養','15〜64', //問11〜15
                ]"
                :labels="[
                'ク','ウ','キ','カ','コ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '年金','70','合計特殊出生率','下回って','労働力率', //問16〜20
                ]"
                :labels="[
                'エ','ケ','イ','オ','コ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約者の資格については<u><b>別段の制限はなく、個人であると法人であるとを問わず、また行為能力者であると否とを問わない</b></u>。', //p13
                '正しい',
                '保険金受取人の資格については<u><b>何らの制限はなく、個人であると法人であると、また行為能力者であると否とを問わない</b></u>。' //p14
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '保険業法ではなく<u><b>保険法</b></u>', //p7
                '正しい',
                '法律に強行規定がある場合を除き、まず<u><b>保険約款が適用され，保険約款に規定のない事項については、おおむね保険法、民法の順に適用される</b></u>。' //p9
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '<u><b>65歳以上を第1号被保険者</b></u>とし、<u><b>40歳～65歳未満の医療保険加入者を第2号被保険者</b></u>とする。', //p140
                '正しい',
                '<u><b>第1号被保険者</b></u>の保険料は各市町村ごとに基準保険料（所得段階別の定額保険料）が設定され、<u><b>第2号被保険者</b></u>については、それぞれ加入する医療保険者が制度の算定基準に基づき保険料を設定し、一般の医療保険料に上乗せする形で一括して徴収する。' //p141
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '解約価格法ではなく<u><b>不没収法</b></u>', //p62
                'マッカラン調査委員会ではなく<u><b>アームストロング調査委員会</b></u>', //p63
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '第三分野については生損保本体で取り扱えることとし、それ以外の分野については子会社方式により相互参入が可能とされた。', //p173
                '日米保険協議の結果を踏まえ、一部制限する激変緩和措置が講じられたが、<u><b>2001年（平成13年）に全面解禁された</b></u>。' //p174
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '変額保険には、終身保険タイプの変額保険（終身型）と<u><b>養老保険タイプの変額保険（有期型）</b></u>のほか、個人年金保険タイプの変額個人年金保険がある。' //p41
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '同措置は、<u><b>保険金の支払い余力を示すソルベンシー・マージン比率が200%未満</b></u>の会社が対象となった', //p99-100
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
                '賦課式の生命保険では、年を経るにつれ死亡率が高くなるので、給付金を一定にすれば、<u><b>分担金が年々増加</b></u>し、一方、分担金を一定にすれば、<u><b>給付金が減少</b></u>せざるを得ないことになる。', //p56
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '厚生年金保険の上乗せ年金としては<u><b>確定拠出年金（企業型）</b></u>などがある。', //p127
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
                '特別勘定ではなく<u><b>区分経理</b></u>の導入' //p200
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
                'ロイヤル・エクスチェンジではなく<u><b>エクイタブル</b></u>が設立', //p57
                '契約成立後ではなく<u><b>契約申込時</b></u>に交付', //p83
                '正しい',
                // 問36〜40
                '社会扶助制度ではなく<u><b>公的扶助制度</b></u> の一つ', //p123
                '正しい',
                'ソルベンシー・マージン比率は、<u><b>保険会社が直面している通常の予測を超える諸リスク（保険リスク・資産運用リスク等）相当額の1/2を分母</b></u>とし、<u><b>保険会社の自己資本勘定と考えられる資本勘定、諸準備金などの合計額を分子</b></u>として計算される。', //p155
                '正しい',
                '生命保険会社は早くから医療や健康問題に関心を持ち、人間ドック紹介、健康相談サービス、介護事業者の紹介等を行っている。', //p193
                 //問41〜50
                'C（A・Bともに正しい）', 'C（A・Bともに正しい）', 'B-あらかじめ定められた', 'C（A・Bともに正しい）', 'A-自由',
                'A-経済的保障', 'B-損害共済', 'B-財務大臣', 'B-個人年金', 'A-団体定期保険',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'オ','オ','エ','オ','イ',  //問41〜45
                'イ','ウ','エ','ウ','ア',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2022a" next-route="souron2022c" />

    </section>

    </SeihoTestLayout>


</template>
