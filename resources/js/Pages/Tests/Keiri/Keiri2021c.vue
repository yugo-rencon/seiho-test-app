<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import QuestionTemp4 from "../../../Components/QuestionTemp4.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険計理";
const subject = "2021年度 フォームC";

const SAME = "※2021年度フォームA/B/Cで同一問題";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp4
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問１
                        {
                            answer: '1.12',
                            questionTitle: '平均余命',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '平均余命とは、その年齢の全員がこれから生きる年数を全部足して、今の人数で割ったもの。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['延べ生存年数 = 死亡数 × 平均生存年数', '平均余命 = 延べ生存年数の合計 ÷ 生存者数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '① 各年齢の延べ生存年数',
                                },
                                {
                                    type: 'note',
                                    value: '各年齢の死亡者は、その年齢内で平均<strong>0.5年</strong>生存したとみなして計算する。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '108歳：58.951 × 0.5 = 29.4755 → 29.48',
                                        '109歳：25.888 × 1.5 = 38.832 → 38.83',
                                        '110歳：10.1008 × 2.5 = 25.252 → 25.25',
                                        '111歳：3.4515 × 3.5 = 12.08025 → 12.08',
                                        '112歳：1.0162 × 4.5 = 4.5729 → 4.57',
                                        '113歳：0.3155 × 5.5 = 1.73525 → 1.74',
                                    ],
                                },
                                {
                                    type: 'text',
                                    value: '② 108歳～113歳の延べ生存年数の合計',
                                },
                                {
                                    type: 'note',
                                    value: '108歳以上の全員が、合計で何年分生きたかを合算する。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['29.48 + 38.83 + 25.25 + 12.08 + 4.57 + 1.74 = 111.95'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 108歳の平均余命',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['108歳～113歳の延べ生存年数の合計 ÷ 108歳の生存者数', '= 111.95 ÷ 99.723', '= 1.12226…'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.12（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問２
                        {
                            answer: '203,011',
                            questionTitle: '複利計算（半年複利）',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '年利1.5％で半年複利の場合、半年ごとに0.75％ずつ増える。1年間では半年が2回あるため、半年利率で2回複利計算する。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計 = 元金 × (1 + 期間利率)<sup>複利回数</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元金：200,000円', '年利：1.5％', '半年利率：= 1.5％ ÷ 2 = 0.75％ = 0.0075', '複利回数：= 1年 × 年2回 = 2回'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計', '= 200,000円 × (1 + 0.0075)<sup>2</sup>', '= 200,000円 × 1.015056', '= 203,011.2円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 203,011円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問３
                        {
                            answer: '2.52',
                            questionTitle: '実利率',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '実利率とは、1年間に実際どれだけ増えるかを示す利率。名称利率が年率でも、年に複数回利息が付く場合は、その回数分だけ複利計算する。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['実利率 =（ 1 + 名称利率 ÷ 転化回数）<sup>転化回数</sup> - 1'],
                                },
                                {
                                    type: 'note',
                                    value: '転化回数：1年間に利息を元金に繰り入れる回数',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '① 1回あたりの利率',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 0.025 ÷ 4', '= 0.00625'],
                                },
                                {
                                    type: 'text',
                                    value: '② 実利率',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= (1 + 0.00625)<sup>4</sup> − 1', '= 1.025235 − 1', '= 0.025235 = 2.5235％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 2.52％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問４
                        {
                            answer: '1.21',
                            questionTitle: '年平均利回り',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: 'まず、3年間の複利でどれだけ増えたか（総利回り）を求める。その後、それを3年で平均したものが年平均利回り。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['総利回り = (1 + 複利利率)<sup>期間</sup> − 1', '年平均利回り = 総利回り ÷ 期間'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['複利利率：1.2％ = 0.012', '投資期間：3年'],
                                },
                                {
                                    type: 'text',
                                    value: '① 総利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= (1 + 0.012)<sup>3</sup> − 1', '= 1.036434 − 1', '= 0.036434'],
                                },
                                {
                                    type: 'text',
                                    value: '② 年平均利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 0.036434 ÷ 3', '= 0.0121447 = 1.2144％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.21％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問５
                        {
                            answer: '1,459,148円',
                            questionTitle: '必要資金（現在価値）',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '30万円を毎年始に5年間支払うために必要な資金は、各年の支払いを現在価値に割り引き、その合計で求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在価値 = 将来の金額 × (1 ÷ (1 + 利率))<sup>年数</sup>', '必要資金 = 各年の現在価値の合計'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の支払額：300,000円（年始）', '期間：5年間', '年利率：1.4％ = 0.014'],
                                },
                                {
                                    type: 'text',
                                    value: '① 各年の現在価値',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '初年度（今年）：300,000円',
                                        '1年後：300,000 × (1 ÷ 1.014) = 295,857.988…円 → 295,858円',
                                        '2年後：300,000 × (1 ÷ 1.014)<sup>2</sup> = 291,773.163…円 → 291,773円',
                                        '3年後：300,000 × (1 ÷ 1.014)<sup>3</sup> = 287,744.737…円 → 287,745円',
                                        '4年後：300,000 × (1 ÷ 1.014)<sup>4</sup> = 283,771.930…円 → 283,772円',
                                    ],
                                },
                                {
                                    type: 'text',
                                    value: '② 合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在において必要な資金の合計', '= 300,000 + 295,858 + 291,773 + 287,745 + 283,772', '= 1,459,148円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1,459,148円',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //1
                        'ク', //2
                        'オ', //3
                        'イ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    questionTitle="チルメル式保険料積立金"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '貯蓄',
                        '歩合（割合）',
                        '新契約',
                        '未償却',
                        'ゼロ', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'コ', //7
                        'ウ', //8
                        'エ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    questionTitle="事業年度末責任準備金"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '未経過保険料',
                        '危険準備金',
                        '4月1日から翌年3月31日',
                        '契約月',
                        '保険リスク', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'イ', //12
                        'エ', //13
                        'ケ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="変額保険と定額保険の比較"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '保証はない',
                        '変動保険金額',
                        '毎日',
                        '契約者',
                        '生命保険会社', //問16〜20
                    ]"
                    :labels="[
                        'コ', //16
                        'カ', //17
                        'キ', //18
                        'ケ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問21
                        {
                            answer: '1,082,173千円',
                            questionTitle: '死亡保険金の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '保険期間（45〜49歳）の各年齢で死亡した場合、死亡保険金が支払われる。支払いは年央（期央）と仮定されるため、各年齢の「死亡保険金 × 死亡数」を期央払現価率で割り引き、現価を合計する。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['各年齢の死亡保険金現価 = 死亡保険金 × 死亡数 × 期央払現価率', '死亡保険金現価の合計 = 各年齢の死亡保険金現価の合計'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金：150万円 = 1,500千円', '保険期間：5年（45〜49歳）', '支払い：年央（期央）と仮定'],
                                },
                                {
                                    type: 'text',
                                    value: '① 各年齢の死亡保険金現価',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '45歳：1,500千円 × 120 × 0.995037 = 179,107千円',
                                        '46歳：1,500千円 × 133 × 0.985185 = 196,544千円',
                                        '47歳：1,500千円 × 147 × 0.975431 = 215,083千円',
                                        '48歳：1,500千円 × 163 × 0.965773 = 236,131千円',
                                        '49歳：1,500千円 × 178 × 0.956211 = 255,308千円',
                                    ],
                                },
                                {
                                    type: 'text',
                                    value: '② 合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金現価の合計', '= 179,107 + 196,544 + 215,083 + 236,131 + 255,308', '= 1,082,173千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1,082,173千円',
                                },
                            ],
                        },
                        // 問22
                        {
                            answer: '139,207,563千円',
                            questionTitle: '満期保険金の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '満期保険金は、保険期間満了時（5年後）に生存している人に支払われる。したがって、まず 5年後の生存者数 × 保険金額 で将来の支払総額を求め、それを 期末払現価率 で割り引いて現価を求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期保険金の現価 = 5年後の生存者数 × 保険金額 × 期末払現価率（5年）'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['保険金額：150万円 = 1,500千円', '5年後（50歳）の生存数：97,539人', '5年の期末払現価率：0.951466'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期保険金の現価', '= 97,539 × 1,500 × 0.951466', '= 139,207,563.261千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 139,207,563千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問23
                        {
                            answer: '3,685,463千円',
                            questionTitle: '予定事業費の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '予定事業費が「保険金1000円につき25円」と与えられているので、まず 1人あたりの予定事業費を求める。その後、加入時（45歳）の生存者数を掛けて、全体の予定事業費（現価）を求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['1人あたりの予定事業費 = 保険金額 ×（25 ÷ 1000）', '予定事業費の現価（合計） = 1人あたりの予定事業費 × 加入時の生存者数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['保険金額：150万円 = 1,500千円', '予定事業費：保険金1000円につき25円 = 25 ÷ 1000', '45歳の生存数：98,279人'],
                                },
                                {
                                    type: 'text',
                                    value: '① 1人あたりの予定事業費',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 1,500千円 ×（25 ÷ 1000）', '= 1,500 × 0.025', '= 37.5千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 予定事業費の現価（合計）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 37.5千円 × 98,279人', '= 3,685,462.5千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 3,685,463千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問24
                        {
                            answer: '299,660円',
                            questionTitle: '養老保険の年払営業保険料',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '年払営業保険料 P は、収支相当の原則（収入現価=支出現価）で求める。',
                                },
                                {
                                    type: 'text',
                                    value: '収入現価：各年齢で生存している人が払う保険料 P を、期始払として現価に直して合計する',
                                },
                                {
                                    type: 'text',
                                    value: '支出現価：死亡保険金・満期保険金・予定事業費の現価を合計する（問21〜23の結果）',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '収支相当の原則：収入現価 = 支出現価',
                                        '各年齢の収入現価（期始払） = 生存数 × P × 期始払現価率',
                                        '支出現価 = 死亡保険金現価 + 満期保険金現価 + 予定事業費現価',
                                    ],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '① 収入現価（45〜49歳、期始払）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '45歳：P × 98,279 × 1.000000 = 98,279P',
                                        '46歳：P × 98,160 × 0.990099 = 97,188P',
                                        '47歳：P × 98,027 × 0.980296 = 96,095P',
                                        '48歳：P × 97,880 × 0.970590 = 95,001P',
                                        '49歳：P × 97,717 × 0.960980 = 93,904P',
                                    ],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['収入現価の合計', '= 98,279P + 97,188P + 96,095P + 95,001P + 93,904P', '= 480,467P'],
                                },
                                {
                                    type: 'text',
                                    value: '② 支出現価（問21〜23より）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金の現価（問21）= 1,082,173千円', '満期保険金の現価（問22）= 139,207,563千円', '予定事業費の現価（問23）= 3,685,463千円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['支出現価', '= 1,082,173 + 139,207,563 + 3,685,463', '= 143,975,199千円 = 143,975,199,000円'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 収支相当の原則より P を求める',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['収入現価 = 支出現価 より', '480,467P = 143,975,199,000円', 'P = 143,975,199,000円 ÷ 480,467', 'P = 299,656…円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 299,660円（10円未満四捨五入）',
                                },
                            ],
                        },
                        // 問25
                        {
                            answer: '549,000円',
                            questionTitle: '払済保険金額',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '払済保険とは、解約返戻金をもとに、同条件の養老保険を一時払で買い直すものである。したがって、解約返戻金で購入できる保険金額を比例計算で求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['払済保険金 = 解約返戻金 ×（保険金額 ÷ 一時払保険料）'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['解約返戻金：429,000円', '保険金額：1,500,000円', '一時払保険料：1,172,790円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['払済保険金', '= 429,000 ×（1,500,000 ÷ 1,172,790）', '= 429,000 × 1.279…', '= 548,691円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 549,000円（千円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //21
                        'イ', //22
                        'ウ', //23
                        'イ', //24
                        'ア', //25
                    ]"
                />
                <QuestionTemp1 :questionNumber="26" questionTitle="営業保険料について" :title="title" :subject="subject" :contents="['正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="27" questionTitle="純保険料式保険料積立金について" :title="title" :subject="subject" :contents="['正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="28" questionTitle="剰余金の処分について" :title="title" :subject="subject" :contents="['正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="29" questionTitle="剰余金の発生源について" :title="title" :subject="subject" :contents="['', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="30" questionTitle="団体年金保険の数理について" :title="title" :subject="subject" :contents="['正しい', '正しい', '']" />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { label: '解', content: '正しい' }, //31
                        { label: '解', content: '' }, //32
                        { label: '解', content: '' }, //33
                        { label: '解', content: '正しい' }, //34
                        { label: '解', content: '' }, //35
                        { label: '解', content: '正しい' }, //36
                        { label: '解', content: '' }, //37
                        { label: '解', content: '正しい' }, //38
                        { label: '解', content: '' }, //39
                        { label: '解', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'オ', content: '' }, //41
                        { label: 'ウ', content: '毎年' }, //42
                        { label: 'エ', content: '責任準備金' }, //43
                        { label: 'イ', content: '高くなる' }, //44
                        { label: 'オ', content: '' }, //45
                        { label: 'イ', content: '標準' }, //46
                        { label: 'ア', content: '定期保険' }, //47
                        { label: 'イ', content: '責任準備金関係' }, //48
                        { label: 'ア', content: '保険年度末保険料積立金' }, //49
                        { label: 'ウ', content: '純保険料率' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="keiri2021b" next-route="keiri2020a" />
        </section>
    </SeihoTestLayout>
</template>
