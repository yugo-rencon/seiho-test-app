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
const subject = "2021年度 フォームC";
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
                    questionTitle="保険契約の当事者"
                    :relatedProblems="[]"
                    :contents="[
                        '財務大臣 → 内閣総理大臣', //p3
                        '免許制 → 登録制', //p3
                        '正しい',
                        '婚姻していても同意が必要 → 婚姻していれば同意不要', //不明
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
                    questionTitle="保険金の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '災害死亡宣告 → 認定死亡', //p22
                        '3年間 → 7年間<br>3親等内の血族 → 利害関係人', //p23
                        '保険期間満了後 → 保険期間中', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        '保険料払込期月の初日に遡って → 猶予期間の満了日の翌日から', //p34
                        '解約返戻金の請求権は消滅する → 請求権は存続する', //p35
                        '正しい',
                        '配当金は支払われない → 支払われる', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="[]"
                    :contents="[
                        '告知義務違反にあたらない → 告知義務違反となる', //p39
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '契約締結時に遡って効力を生じる → 将来に向かってのみ効力を生じる', //p40
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
                            answer: '901,307円',
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
                                    value: ['将来価値：100万円', '利率：2.1%（＝ 0.021）', '期間：5年'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価', '= 1,000,000 ÷ （1 ＋ 0.021）<sup>5</sup> ・・・（1.021）<sup>5</sup> = 1.10950 = 1.1095（小数点第5位を四捨五入）', '≒ 901,306.8'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 901,307円（円未満を四捨五入）',
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
                    questionTitle="営業保険料の構成と計算基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '純保険料 → 付加保険料', //p89
                        '正しい',
                        '付加保険料 → 純保険料', //p89
                        '予定利率 → 予定事業費率', //p89
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
                        '60日間 → 90日間', //p142
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
                    questionTitle="共済事業とその商品"
                    :relatedProblems="[]"
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
                    questionTitle="クーリング・オフ（契約撤回請求権）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '口頭による契約申込み → 書面による契約申込み', //p7
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
                    questionTitle="生命保険会社の保険給付の主な免責事由"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '因果関係を必要としない → 因果関係がなければならない', //p30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約・取消し・無効等"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'いずれの場合も既払込保険料は返還 → 後者の場合は返還されない', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
                    :relatedProblems="[]"
                    :contents="[
                        '保険金額 ÷ 死亡率 → 保険金額 × 死亡率', //p46
                        '正しい',
                        '正しい',
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
                    questionTitle="契約内容の変更"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '解約返戻金があれば責任準備金に繰り入れられる → 解約返戻金があれば支払われる', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '転換後契約の加入年齢 → 転換前契約の加入年齢', //p120
                        '正しい',
                        '正しい',
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
                    questionTitle="その他の主契約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険料払込期間中かどうかに関わらず解約返戻金が低い → 保険料払込期間中は解約返戻金が低い', //p152
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
                    questionTitle="主な特約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '支払回数に最低保証はない → 支払回数に最低保証がある', //p156
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険法と生命保険契約の形態"
                    :relatedProblems="[]"
                    :contents="[
                        '傷害疾病定期保険契約',
                        '無効',
                        '片面的強行規定',
                        '自己のためにする',
                        '自己の生命', // 問25〜29
                    ]"
                    :labels="[
                        'イ', //25
                        'ウ', //26
                        'カ', //27
                        'ケ', //28
                        'オ', //29
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
                    questionTitle="被保険者集団と販売方針"
                    :relatedProblems="[]"
                    :contents="[
                        '保険事故',
                        '経営理念',
                        '構成',
                        '加入申込者',
                        '選択方針', // 問35〜39
                    ]"
                    :labels="[
                        'オ', //35
                        'コ', //36
                        'エ', //37
                        'カ', //38
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
                            questionTitle: '承諾前保険事故',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険金受取人の詐欺による契約解除請求',
                            relatedProblems: [],
                            content: '生命保険会社に対して行う → 保険契約者に対して行う', //p43
                        }, //41
                        {
                            questionTitle: 'BMI',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '超過危険の種類',
                            relatedProblems: [],
                            content: '恒常性危険 → 逓増性危険', //p73
                        }, //43
                        {
                            questionTitle: '生命保険の診査',
                            relatedProblems: [],
                            content: '一般臨床と同様 → 一般臨床と異なる', //p63
                        }, //44
                        {
                            questionTitle: '生命表',
                            relatedProblems: [],
                            content: '国民表を使用して保険料計算 → 経験表を使用して保険料計算',
                        }, //45
                        {
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: [],
                            content: '平均寿命 ↔︎ 平均余命', //p79
                        }, //46
                        {
                            questionTitle: '指定代理請求特約',
                            relatedProblems: [],
                            content: '被保険者の同意は必要ない → 被保険者の同意が必要', //p160
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

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
