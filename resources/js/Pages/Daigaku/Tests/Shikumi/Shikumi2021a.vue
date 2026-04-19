<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2021年度 フォームA";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の形態"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '自己のため → 他人のため', //p2
                        '他人のため → 自己のため', //p2
                        '自己の生命 → 他人の生命', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :relatedProblems="[]"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '正しい',
                        '一時払保険料 ↔︎ 全期前納保険料', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
                    :contents="[
                        '告知義務者本人の署名は必要ない → 本人の署名が必要', //p 61
                        '個別方式は行われていない → 一括方式と個別方式が行われている', //p62
                        '外観の観察は行わない → 行う', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'どちらの場合も告知受領権はない → 代理の場合は告知受領権があり、媒介の場合はない', //p72
                        '告知義務者が主観的に重要と思う事項 → 主観的に重要と思うかどうかとは無関係', //p72
                        '程度を問わず過失によるものは該当しない → 重大な過失によるものは該当する', //p72
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '862,589円',
                            questionTitle: '保険料の現価',
                            relatedProblems: [],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '将来受け取る金額の現価は、利率を用いて現在価値に割り引いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価 ＝ 将来価値 ÷（1 ＋ 利率）<sup>年数</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['将来価値：100万円', '利率：3.0%（＝ 0.03）', '期間：5年'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価', '= 1,000,000 ÷ （1 ＋ 0.03）<sup>5</sup> ・・・（1.03）<sup>5</sup> = 1.15927 = 1.593（小数点第5位を四捨五入）', '≒ 862,589'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 862,589円（円未満を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :relatedProblems="[]"
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
                    questionTitle="契約転換制度"
                    :relatedProblems="[]"
                    :contents="[
                        '他社の既契約 → 自社の既契約', //p119
                        '保険料率は引上げになることはない → 引上げになることもある', //p120
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="[]"
                    :contents="[
                        '終身タイプの商品はない → 定期タイプと終身タイプがある', //p140
                        '満期保険金を支払う商品が一般的 → 一般に満期保険金はない', //p140
                        '正しい',
                        '保険金はがんと同額で、保険金がないものはない → 保険金が少額で、保険金がないものもある', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :relatedProblems="[]"
                    :contents="[
                        '被保険者が生存している限り → 生死に関係なく<br>残りの保証期間に対する年金や一時金は支払わない → 遺族に支払う', //p145
                        '正しい',
                        '満期保険金額の最低保証がある → 最低保証はない', //p146
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="[]"
                    :contents="[
                        '定額法式のタイプのものはない → 定額方式のタイプがある', //p202
                        '正しい',
                        '引受限度額を設けていない → 設けている', //p205
                        '告知は不要 → 告知が必要', //p206
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の当事者"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '資本金1億円以上で年間収受保険料100億円以下 → 資本金1000万円以上で年間収受保険料50億円以下', //p3
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '30日以内 ↔︎ 5日以内', //p33
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '配当金は支払われない → 支払われる', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択上、被保険者集団が具備すべき4つの条件"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '危険度の高い → 危険度の低い<br>保険事故発生率は低くなる → 高くなる', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果の検証"
                    :relatedProblems="[]"
                    :contents="[
                        '活かす目的に適している → 適さない', //p69
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の割当て"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '割当てを行われない → 行われる', //p105
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :relatedProblems="[]"
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
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '毎年の契約応当日に支払わない → 契約応当日に現金で支払う', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="[]"
                    :contents="[
                        '逓増定期保険型特約はない → 逓増定期保険型特約もある', //p156
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など疾病・ケガの治療全般に備える特約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '災害入院特約 → 家族型入院特約', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '組合委員となるための出資金は必要ないが、割戻金としての剰余金の還元はない → 組合委員となるための出資金は必要で、剰余金は割戻金として還元される', //p185
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険金の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '高度障害保険金',
                        '法定相続人',
                        '7',
                        '1',
                        '死亡診断書', // 問25〜29
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
                    questionTitle="危険の要素"
                    :relatedProblems="[]"
                    :contents="[
                        '体格',
                        '過重体',
                        '過軽体',
                        '職業',
                        '申込動機', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'ケ', //31
                        'ウ', //32
                        'キ', //33
                        'オ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="責任準備金"
                    :relatedProblems="[]"
                    :contents="[
                        '純保険料',
                        '平準化',
                        '自然保険料',
                        '将来法',
                        '定期保険', // 問35〜39
                    ]"
                    :labels="[
                        'オ', //35
                        'コ', //36
                        'キ', //37
                        'ケ', //38
                        'イ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '承諾前保険事故',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '年払・半年払保険料の返還（保険料不可分の原則）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: 'BMI',
                            relatedProblems: [],
                            content: '身長の2乗 ÷ 体重 → 体重 ÷ 身長の2乗', //p49
                        }, //42
                        {
                            questionTitle: '契約確認',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '生命保険の診査',
                            relatedProblems: [],
                            content: '一般臨床と同様 → 一般臨床と異なる', //p63
                        }, //44
                        {
                            questionTitle: '解約返戻金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '保険金額の減額',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '市場価格調整を利用した生命保険',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '特定疾病（三大疾病）保障特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: 'CO・OP共済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2022c" next-route="daigaku.shikumi-kojin2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
