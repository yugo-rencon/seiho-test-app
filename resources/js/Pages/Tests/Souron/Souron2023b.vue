<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
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
                '1年', '損金', '総合福祉', 'ヒューマン', '供与', // 問１〜５
                ]"
                :labels="[
                'イ', 'ケ', 'ウ', 'オ', 'コ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '受給権', '拠出型', '報酬比例部分', '第1号', '運用の指図', //問６〜10
                ]"
                :labels="[
                'カ', 'イ', 'ア', 'エ', 'ケ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '保障制度', '自給自足', '経済単位', '相互扶助', 'ギルド', //問11〜15
                ]"
                :labels="[
                'オ', 'ア', 'コ', 'キ', 'カ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '海上保険', '冒険貸借', '統計学', 'ドイツ', '社会保険', //問16〜20
                ]"
                :labels="[
                'カ', 'イ', 'エ', 'ケ', 'オ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '一般に、標準以上に危険度の高い人は保険加入希望が<u><b>強く</b></u>、また、より<u><b>高額</b></u>な保険を選ぶ傾向がある。', //p17
                '保険経営に求められる2大原則は健全性と<u><b>公平性</b></u>であり、<u><b>公平性</b></u>の原点は危険の評価にある。危険の質を同じにするべくできるだけ危険を細かく分け、その危険度を把握することが<u><b>公平性</b></u>につながる。' //p18
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '<u><b>65歳以上を第1号被保険者</b></u>とし、<u><b>40歳～65歳未満の医療保険加入者を第2号被保険者</b></u>とする。', //p140
                '<u><b>第1号被保険者</b></u>は、原因を問わず常に介護が必要な状態（要介護状態）あるいは日常生活に支援が必要な状態（要支援状態）であれば保険給付の対象となる</b></u>が、<u><b>第2号被保険者</b></u>については、初老期の認知症など老化を原因とする特定の疾病による要支援状態または要介護状態であることが保険給付の要件となっている。', //p140
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                'デリバティブ商品ではなく、<u><b>ニューウェーブ商品</b></u>', //p69
                '正しい',
                '金融規制改革法（ドッド・フランク法）ではなく、<u><b>グラム・リーチ・ブライリー法</b></u>' //p71
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '「少額短期保険業」は、短期（生保・医療保険で1年以内、損害保険で2年以内）かつ少額保険金額（疾病による死亡保険金<u><b>300万円以内</b></u>、疾病・傷害による入院給付金等80万円以内、損害保険金<u><b>1000万円以内</b></u>等で、<u><b>かつ総額1000万円以下（複数契約合算）</b></u>）の保険のみを引き受ける保険業である。', //p176
                '少額短期保険業者には<u><b>1000万円以上の資本金</b></u>と<u><b>内閣総理大臣への登録</b></u>が求められる。また、ディスクロージャーと責任準備金の積立てが義務付けられ、早期是正措置も適用されるなど、契約者保護の規制が課される。' //p176
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '国連では老年人口割合が<u><b>7%</b></u>を超えた国を人口の高齢化が進んでいる国と見なしている', //p180
                '正しい',
                '合計特殊出生率は年々低下し、<u><b>出生数が死亡数を下回って遂に人口が減少するという歴史的転換点を迎えている</b></u>。' //p182
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '保険契約の一方の当事者である保険契約者は、<u><b>保険者</b></u>が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。' //p15
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '一般に、生命保険契約の締結に際して保険契約の申込者が保険約款の各条項を知ったうえで理解し納得しているとは限らないが、一般的には<u><b>保険約款には拘束力がある</b></u>とされている。', //p8
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
                '収支相当の原則ではなく<u><b>大数の法則</b></u>' //p126
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '生命保険協会には、「<u><b>生命保険相談所</b></u>」が設けられており、生命保険会社側との話合い・斡旋の場を提供している。そこで解決しない場合は、学識経験者などの第三者で構成された「<u><b>裁定審査会</b></u>」に委ねられる。' //p83
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '一般の多くの人々を対象に保険契約の引受けを行う事業である保険業には、保険業の公共性に鑑み、<u><b>免許制（少額短期保険業者については登録制）</b></u>が採用されている。', //p150
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '保険業法ではなく<u><b>保険法</b></u>', //p5
                '正しい',
                '正しい',
                '正しい',
                '正しい',
                // 問36〜40
                '流動性の原則は、生保資金の長期的性格と安定的性格から、<u><b>銀行などに比べればその重要性は低い</b></u>。', //p109
                '100株未満ではなく<u><b>1株未満</b></u>', //p162
                'JAによる共済事業は、農協系統組織の一環であり、農業協同組合の行う信用・購入・販売など、他の事業と同様、<u><b>JA（単位農協）、JA共済連という2段階による組織機構により運営されている</b></u>。', //p166
                '正しい',
                '正しい',
                 //問41〜50
                'A-付合契約', 'A-負債', 'B-20%', 'B-同額の分担金で', 'A-更生手続',
                'A-家計可処分所得', 'C（A・Bともに正しい）', 'C（A・Bともに正しい）', 'A-長期火災保険', 'B-変額年金',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'ア', 'ア', 'ウ', 'エ', 'イ',  //問41〜45
                'ア', 'オ', 'オ', 'イ', 'ウ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2023a" next-route="souron2023c" />

    </section>

    </SeihoTestLayout>


</template>
