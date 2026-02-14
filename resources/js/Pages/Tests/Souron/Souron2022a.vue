<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
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
                '契約自由','債権債務','経済的','保険法','商法', // 問１〜５
                ]"
                :labels="[
                'ケ','ウ','エ','イ','キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '拘束','法規範説','定型的取引','保険約款','強行', //問６〜10
                ]"
                :labels="[
                'ウ','ア','キ','カ','イ',  //問６〜10
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
                '予定利率と年間の新契約高ではなく<u><b>新契約費と年間の新契約高</b></u>', //p63
                '会社の株主ではなく<u><b>会社の役員</b></u>', //p64
                '正しい'
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
                '正しい',
                '<u><b>保険契約者</b></u>の保護を図り、国民生活の安定・国民経済の健全な発展に資することにある。', //p150
                '保険会社の子会社の業務範囲についても、他業の禁止の観点から<u><b>制限がなされている</b></u>。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '「少額短期保険業」は、短期（生保・医療保険で1年以内、損害保険で2年以内）かつ少額保険金額（疾病による死亡保険金<u><b>300万円以内</b></u>、疾病・傷害による入院給付金等<u><b>80万円以内</b></u>、損害保険金1000万円以内等で、<u><b>かつ総額1000万円以下（複数契約合算）</b></u>）の保険のみを引き受ける保険業である。', //p176
                '少額短期保険業者には<u><b>1000万円以上</b></u>の資本金と内閣総理大臣への登録が求められる。', //p176
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '「その発生を防止しようとしても、ある程度以上は不可能であるという意味で経済主体による制御を<u><b>超えているもの</b></u>」がある。', //p4
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
                '第1次選択ではなく<u><b>逆選択</b></u>' //p17
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
                'ドイツではなく<u><b>英米の保険制度</b></u>', //p72
                '正しい',
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
                '変額保険（変額個人年金保険を含む）の特別勘定においては、投資環境の悪化状況下で大量解約が生じる可能性があるので、<u><b>流動性が一般勘定にも増して重要</b></u>となる。' //p110
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
                'アメリカで開発されたユニバーサル保険は<u><b>決済機能は持たない</b></u>。', //p69
                '正しい',
                // 問36〜40
                '正しい',
                '正しい',
                '正しい',
                '生命保険の説明。損害保険とは、保険者の支払うべき保険金額が保険事故の発生によって生じた実際の損害額に応じて定まる保険である。', //p173
                '従来であれば、「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かったが、今日では、自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向に変わってきている。', //p184
                 //問41〜50
                'B-保険料', 'C（A・Bともに正しい）', 'A-経過年数', 'A-友愛組合', 'B-低く',
                'A-負債', 'A-保険料の拠出', 'B-財務大臣', 'C（A・Bともに正しい）', 'A-団体定期保険',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ウ','オ','イ','イ','エ',  //問41〜45
                'ア','ア','エ','オ','ア',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2023c" next-route="souron2022b" />

    </section>

    </SeihoTestLayout>


</template>
