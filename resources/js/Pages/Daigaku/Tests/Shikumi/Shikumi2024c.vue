<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2024年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法に基づく被保険者の同意"
                    :relatedProblems="['2025a13', '2025c1', '2024c1', '2023c13']"
                    :contents="[
                        '傷害疾病定額保険契約で保険金受取人が被保険者の場合、被保険者の同意が必要 → 同意は不要', //p5
                        '死亡保険の場合に同意を要する → 死亡保険と生死混合保険の場合に同意を要する', //p5
                        '正しい',
                        '被保険者の同意は必要ない → 同意が必要', //p5-6
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始の時期"
                    :relatedProblems="['2025c25', '2024a2', '2024b2', '2024c2', '2023b1', '2023c12']"
                    :contents="[
                        '正しい',
                        '必ず一致する → 必ずしも一致しないことがある', //p10
                        '保険契約の成立日を意味する → 保険約款における期間の起算日を意味する', //p12
                        '支払対象とはならない → 支払対象となる', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の当事者"
                    :relatedProblems="['2025b25', '2024b13', '2024c3', '2023a25', '2023b13', '2023c11']"
                    :contents="[
                        '財務大臣 → 内閣総理大臣', //p3
                        '免許制 → 登録制', //p3
                        '法律上の制限がある → 制限はない', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約者・保険金受取人の変更"
                    :relatedProblems="['2024c4', '2023c5']"
                    :contents="[
                        '複数人の連名 → 相続人のうち誰か1人', //p37
                        '正しい',
                        '変更することができる → できない', //p38
                        '支払事由の発生有無によらず変更できない → 支払事由が発生するまでは変更できる', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="['2025a16', '2025b16', '2025c16', '2024a13', '2024c5', '2023a5', '2023c21']"
                    :contents="[
                        '告知義務違反にあたらない → 告知義務違反となる', //p39z
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '3年 → 5年', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="['2025c7', '2024a6', '2024b6', '2024c6', '2023a6', '2023b6', '2023c6']"
                    :contents="[
                        '収支相当の原則が有効に機能していること → 大数の法則が作用し得る程度に十分大量の被保険者が存在すること', //p67
                        '厚生労働省 → 金融庁長官', //p67
                        '正しい',
                        '単なる契約の変更のため、申込みの諾否決定や危険選択の追加をすることはない → 新たな危険の増加を伴う場合もあるので申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度"
                    :relatedProblems="['2025c18', '2024c7', '2023a7', '2023c8']"
                    :contents="[
                        '正しい',
                        '告知受領権を有しない → 代理の場合は有する', //p72
                        '告知義務者が主観的に重要と思う事項は対象 → 対象外', //p72
                        '過失によるものは該当しない → 重大な過失は該当する', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="['2024c8', '2024c21', '2023a21']"
                    :contents="[
                        '正しい',
                        '保険料率は引上げになることはない → 引上げになることもある', //p120
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '適用の対象とはならない → 適用の対象となる', //p121
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="['2025b21', '2024a9', '2024b9', '2024c9', '2023b18', '2023c7']"
                    :contents="[
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p114
                        '変更時点の計算基礎率 → 元契約と同じ計算基礎率', //p114
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p115
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="['2024a10', '2024b10', '2024c10', '2023a10', '2023b10', '2023c10']"
                    :contents="[
                        '終身タイプの商品はない → 定期タイプと終身タイプがある', //p140
                        '満期保険金を支払う商品が一般的 → 一般に満期保険金はない', //p140
                        '保険金はがんと同額で、保険金がないものはない → 保険金が少額で、保険金がないものもある', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :relatedProblems="['2025a10', '2025b10', '2025c10', '2024c11', '2023a11', '2023b7']"
                    :contents="[
                        '正しい',
                        '保険料免除機能がある → 保険料免除機能はない', //p146
                        '最低保証がある → 最低保証はない', //p146
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業とその商品"
                    :relatedProblems="['2025a12', '2025b12', '2025c12', '2024c12', '2023a24']"
                    :contents="[
                        '正しい',
                        '農業協同組合が単独 → 農業協同組合と全国共済農業協同組合連合会の2組織', //p166
                        '2年タイプ → 1年タイプ', //p179
                        '年齢による区分のない → 年齢により保障が分かれている', //p185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約締結の方法"
                    :relatedProblems="['2024c13']"
                    :contents="[
                        '正しい',
                        '第一回保険料の払込みを済ませること → 生命保険会社が契約の申込みを承諾すること', //p7
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="['2024a3', '2024b14', '2024c14', '2023a14', '2023b14']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '給与等から天引きされた時点 → 団体（集団）から生命保険会社に払い込まれた時', //p17
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="['2025b40', '2025c5', '2024a15', '2024b15', '2024c15', '2023a4', '2023b15']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '5年 → 3年', //p32
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="身体的危険"
                    :relatedProblems="['2025b5', '2024b7', '2024c16', '2023a16', '2023b16', '2023c16']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '既往歴 → 現病歴', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
                    :relatedProblems="['2024a17', '2024b17', '2024c17', '2023c24']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '150であれば50%低い死亡率 → 50%高い死亡率', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の割当て"
                    :relatedProblems="['2024b20', '2024c18', '2023a19', '2023b19', '2023c19']"
                    :contents="[
                        '正しい',
                        '割当てを行われない → 行われる', //p105
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :relatedProblems="['2024a19', '2024b19', '2024c19', '2023b20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険金 → 保険年度末保険料積立金', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :relatedProblems="['2025a19', '2025b19', '2025c19', '2024a21', '2024c20', '2023b24']"
                    :contents="[
                        '正しい',
                        '営業保険料の総額 → 危険保険金', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="['2024c8', '2024c21', '2023a21']"
                    :contents="[
                        '正しい',
                        '転換後契約の加入年齢 → 転換前契約の加入年齢', //p120
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="['2024a22', '2024b22', '2024c22', '2023a23', '2023b11']"
                    :contents="[
                        '逓増定期保険特約はない → 逓増定期保険特約もある', //p156
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="主契約の種類"
                    :relatedProblems="['2025c21', '2024a23', '2024c23', '2023c14']"
                    :contents="[
                        '給付金の支払いに制限がない → 契約後1年間は給付金額が半額などの制限あり', //p151
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="['2025a24', '2025b24', '2025c11', '2025c24', '2024a24', '2024b12', '2024c24', '2023a12', '2023c20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '実損払方式 → 定額給付方式', //p204
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2025a5', '2025b30', '2024a7', '2024b16', '2024c25', '2023a15', '2023b5', '2023b30']"
                    :contents="[
                        '事業方法書',
                        '社医',
                        '嘱託医',
                        '検診',
                        '保険事故発生率', // 問25〜29
                    ]"
                    :labels="[
                        'カ', //25
                        'ケ', //26
                        'コ', //27
                        'イ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="選択効果"
                    :relatedProblems="['2025a18', '2025b20', '2025b44', '2025c44', '2024a18', '2024b18', '2024b43', '2024c30', '2023a18']"
                    :contents="[
                        '終局死亡率',
                        '実際死亡率',
                        '経営効率',
                        '期待死亡率',
                        'あったといえる', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'エ', //31
                        'ク', //32
                        'イ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="チルメル式保険料積立金"
                    :relatedProblems="['2024a35', '2024b35', '2024c35']"
                    :contents="[
                        '付加保険料',
                        '純保険料',
                        '貯蓄保険料',
                        '危険保険料',
                        '平準純保険料式', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'オ', //36
                        'ケ', //37
                        'ア', //38
                        'キ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '生命保険契約の定義',
                            relatedProblems: ['2024a40', '2024b40', '2024c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険金受取人',
                            relatedProblems: ['2024c41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: 'BMI',
                            relatedProblems: ['2024a42', '2024b42', '2024c42', '2023a42', '2023b42', '2023c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '契約内容登録制度等',
                            relatedProblems: ['2024c43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '超過危険の種類',
                            relatedProblems: ['2025a6', '2025a45', '2025b6', '2025b45', '2025c6', '2025c45', '2024c44'],
                            content: '恒常性危険 → 逓増性危険', //p73
                        }, //44
                        {
                            questionTitle: '保険料の現価',
                            relatedProblems: ['2025a7', '2024c45', '2023b47'],
                            content: '受取金額 × 1 / （1 + 利率） → 受取金額 × 1 / （1 + 利率）<sup>期間 - 1</sup>', //p81
                        }, //45
                        {
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: ['2025a47', '2024a46', '2024b46', '2024c46', '2023a46', '2023b46', '2023c46'],
                            content: '平均寿命 ↔︎ 平均余命',
                        }, //46 p79
                        {
                            questionTitle: '個人年金保険の年金種類の変更',
                            relatedProblems: ['2024a47', '2024b47', '2024c47', '2023c49'],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '先進医療特約',
                            relatedProblems: ['2024c48'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '少額短期保険業',
                            relatedProblems: ['2024a49', '2024c49'],
                            content: 'いずれも保険期間1年以内 → 損害保険は2年以内',
                        }, //49 p198
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2024b" next-route="daigaku.shikumi-kojin2023a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
