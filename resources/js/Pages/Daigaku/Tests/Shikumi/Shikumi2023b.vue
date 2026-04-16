<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2023年度 フォームB";
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
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :relatedProblems="['2025a2', '2025b2', '2025c2', '2024a4', '2023a2', '2023a41', '2023b2', '2023c2']"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '正しい',
                        '全期前納保険料 ↔︎ 一時払保険料', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="['2025a30', '2025b13', '2025c14', '2024b25', '2023b3', '2023c3']"
                    :contents="[
                        '商法 → 保険法', //p25
                        '自殺に該当する → 自殺に該当しない', //p27
                        '故意と判断され、保険金は支払われない → 故意とは判断されず、保険金が支払われる', //p27
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解除・解約・取消し・無効"
                    :relatedProblems="['2025a4', '2025a42', '2025b4', '2025b42', '2025c4', '2025c42', '2024a14', '2024b5', '2023b4']"
                    :contents="[
                        '解約させる → 消滅させる', //p39
                        '既払込保険料を返還する → 返還されない', //p42
                        '3年以内に限り → 年月にかかわらず', //p42
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2025a5', '2025b30', '2024a7', '2024b16', '2024c25', '2023a15', '2023b5', '2023b30']"
                    :contents="[
                        '得られない情報はない → 得られない情報がある', //p61
                        '個別方式は行われていない → 一括方式と個別方式が行われている', //p62
                        '外観の観察は行わない → 行う', //p64
                        '正しい',
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
                    questionTitle="資産形成を目的とした主契約"
                    :relatedProblems="['2025a10', '2025b10', '2025c10', '2024c11', '2023a11', '2023b7']"
                    :contents="[
                        '被保険者が生存している限り → 生死に関係なく<br>残りの保証期間に対する年金や一時金は支払わない → 遺族に支払う', //p145
                        '正しい',
                        '満期保険金額の最低保証がある → 最低保証はない', //p146
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :relatedProblems="['2025a9', '2025b9', '2025c9', '2024a8', '2023b8']"
                    :contents="[
                        '保険約款に規定がない契約であっても → 保険約款に規定がある契約のみ', //p112
                        '経過期間に関わらず取り消しできない → 猶予期間満了後一定期間内の場合に可能', //p112
                        '責任準備金 → 解約返戻金', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :relatedProblems="['2025a8', '2025b8', '2025c8', '2024b21', '2023a9', '2023b9', '2023c9']"
                    :contents="[
                        '診査は不要 → 診査は必要<br>契約時年齢で計算 → 手続時の年齢で計算', //p120
                        '転換前契約加入時 → 転換時<br>保険料率は引上げになることはない → 引き上げとなる場合がある', //p121
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
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
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="['2024a22', '2024b22', '2024c22', '2023a23', '2023b11']"
                    :contents="[
                        '逓増定期保険特約はない → 逓増定期保険特約もある', //p156
                        '正しい',
                        '支払回数に最低保証はない → 最低保証がある', //p156
                        '一度のみ支払う → 一定期間が経過するごとに支払う', //p156
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="利率変動型積立終身保険（アカウント型保険）"
                    :relatedProblems="['2025a48', '2025b48', '2025c48', '2023b12', '2023c15']"
                    :contents="[
                        '正しい',
                        '最低保証利率を下回る場合がある → 最低保証利率が設定されている', //p136
                        '契約は消滅する → 積立部分をそのままに契約継続可能', //p137
                        '保障を減らして積立部分に振り分けできない → 振り分けできる', //p137
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の当事者"
                    :relatedProblems="['2025b25', '2024b13', '2024c3', '2023a25', '2023b13', '2023c11']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '資本金1億円以上で年間収受保険料100億円以下 → 資本金1000万円以上で年間収受保険料50億円以下', //p3
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
                        '保険約款 ↔︎ 保険法', //p
                        '正しい',
                        '正しい',
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
                    questionTitle="道徳的危険（モラルリスク）"
                    :relatedProblems="['2025b41', '2023a17', '2023b17', '2023c17', '2023c41']"
                    :contents="[
                        '契約後の経過期間ごとの解約発生率に影響 → 医学的な法則に従った死亡率に影響', //p56
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="['2025b21', '2024a9', '2024b9', '2024c9', '2023b18', '2023c7']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '解約返戻金があれば責任準備金に繰り入られる → 支払われる', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の割当て"
                    :relatedProblems="['2024b20', '2024c18', '2023a19', '2023b19', '2023c19']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '社員（被保険者）配当金 → 社員（契約者）配当金', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :relatedProblems="['2024a19', '2024b19', '2024c19', '2023b20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '既払込保険料 → 保険金', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :relatedProblems="['2025a23', '2025c23', '2024b11', '2023a13', '2023b21', '2023c18']"
                    :contents="[
                        '正しい',
                        '災害入院特約 → 家族型入院特約', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="['2025a11', '2025b23', '2024a12', '2024b24', '2023a22', '2023b22', '2023c22']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する販売チャネルもある → 該当する販売チャネルはない', //p165
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定の疾病や損傷の治療に備える特約"
                    :relatedProblems="['2025a49', '2025c49', '2024b23', '2023b23']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '特約の対象とならない → 対象となる', //p159
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :relatedProblems="['2025a19', '2025b19', '2025c19', '2024a21', '2024c20', '2023b24']"
                    :contents="[
                        '正しい',
                        '株式（契約者）配当 → 社員（契約者）配当', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険金の支払い"
                    :relatedProblems="['2025a3', '2025b14', '2024a5', '2024b4', '2023a3', '2023b25']"
                    :contents="[
                        '片面的強行規定',
                        '傷害疾病定額保険契約',
                        '自己のためにする',
                        '傷害疾病損害保険契約',
                        '第三者のためにする', // 問25〜29
                    ]"
                    :labels="[
                        'カ', //25
                        'イ', //26
                        'ケ', //27
                        'キ', //28
                        'エ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2025a5', '2025b30', '2024a7', '2024b16', '2024c25', '2023a15', '2023b5', '2023b30']"
                    :contents="[
                        '内部留保',
                        '所属団体',
                        '通常配当',
                        '危険準備金',
                        '消滅事由', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'ケ', //31
                        'コ', //32
                        'イ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険料積立金"
                    :relatedProblems="['2023a35', '2023b35', '2023c35']"
                    :contents="[
                        '将来法',
                        '過去法',
                        '定期保険',
                        '貯蓄保険料',
                        'チルメル', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'コ', //36
                        'キ', //37
                        'イ', //38
                        'ケ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '生命保険契約に関する法律',
                            relatedProblems: ['2023a40', '2023b40', '2023c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '承諾前の保険事故',
                            relatedProblems: ['2024b41', '2023b41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: 'BMI',
                            relatedProblems: ['2024a42', '2024b42', '2024c42', '2023a42', '2023b42', '2023c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '年払・半年払保険料の取扱い',
                            relatedProblems: ['2024a41', '2023b43', '2023c44'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '逆選択',
                            relatedProblems: ['2023b44'],
                            content: '必要性を感じていない → 必要性を強く感じている<br>保険非加入の傾向 → 保険加入の傾向',
                        }, //44 p46
                        {
                            questionTitle: '死亡率と生存率の関係',
                            relatedProblems: ['2025a46', '2024a44', '2023b45'],
                            content: '生存率：1 - （1 / 死亡率） → 1 - 死亡率<br>死亡率：1 - （1 / 生存率） → 1 - 生存率',
                        }, //45 p79
                        {
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: ['2025a47', '2024a46', '2024b46', '2024c46', '2023a46', '2023b46', '2023c46'],
                            content: '平均寿命 ↔︎ 平均余命', //p79
                        }, //46
                        {
                            questionTitle: '現価計算',
                            relatedProblems: ['2025a7', '2024c45', '2023b47'],
                            content: '受取金額 × 1 / （1 + 利率） → 受取金額 × 1 / （1 + 利率）<sup>期間 - 1</sup>',
                        }, //47
                        {
                            questionTitle: '解約返戻金',
                            relatedProblems: ['2023a45', '2023b48'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '転換契約の募集に際しての法令上の規制',
                            relatedProblems: ['2024b45', '2023b49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2023a" next-route="daigaku.shikumi-kojin2023c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
