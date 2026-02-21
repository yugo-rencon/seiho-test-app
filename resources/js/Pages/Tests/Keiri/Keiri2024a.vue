<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import QuestionTemp4 from "../../../Components/QuestionTemp4.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険計理";
const subject = "2024年度 フォームA";
const SAME = "※2024年度フォームA/B/Cで同一問題";
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
                            answer: '0.98925',
                            questionTitle: '生存率',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '生存率とは、「ある年齢の人が、次の年齢まで生き残る割合」のこと。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['生存率 ＝ 期末の生存数 ÷ 期初の生存数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['生存率（45歳 → 50歳）', '＝ 50歳の生存数 ÷ 45歳の生存数', '＝ 96,319 ÷ 97,336 ＝ 0.989246'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 0.98925（小数第6位を四捨五入）',
                                },
                            ],
                        },
                        // 問２
                        {
                            answer: '93,714',
                            questionTitle: '生存数',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '「10年後に何人残るか」は、今の人数に“10年間生き残る割合（生存率）を掛けることで求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formula',
                                    value: 'N年後の生存者数 ＝ 基準年齢の人数 × 生存率（問１参照）',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '① 生存率（55歳 → 65歳）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['65歳の生存数 ÷ 55歳の生存数', '＝ 88,751 ÷ 94,704', '＝ 0.937140'],
                                },
                                {
                                    type: 'text',
                                    value: '② 10年後の生存者数',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['基準年齢（55歳）の人数 × 生存率', '＝ 100,000 × 0.937140 ＝ 93,714.0'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 93,714（小数第1位を四捨五入）',
                                },
                            ],
                        },
                        // 問３
                        {
                            answer: '1.16',
                            questionTitle: '平均余命',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
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
                                    value: ['延べ生存年数 ＝ 死亡数 × 平均生存年数', '平均余命 ＝ 延べ生存年数の合計 ÷ 生存者数'],
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
                                        '105歳：30.877 × 0.5 ＝ 15.44',
                                        '106歳：13.8961 × 1.5 ＝ 20.84',
                                        '107歳：5.6633 × 2.5 ＝ 14.16',
                                        '108歳：2.0682 × 3.5 ＝ 7.24',
                                        '109歳：0.9156 × 4.5 ＝ 4.12',
                                    ],
                                },
                                {
                                    type: 'text',
                                    value: '② 105歳～109歳の延べ生存年数の合計',
                                },
                                {
                                    type: 'note',
                                    value: '105歳以上の全員が、合計で何年分生きたかを合算する。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['15.44 + 20.84 + 14.16 + 7.24 + 4.12 ＝ 61.8'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 105歳の平均余命',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['105歳～109歳の延べ生存年数の合計 ÷ 105歳の生存者数', '= 61.8 ÷ 53.420', '= 1.156'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.16（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問４ p39
                        {
                            answer: '1,368,176',
                            questionTitle: '保険金総額の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '1年定期保険では、1年間に死亡した人に保険金を支払う。したがって、まず死亡者全員に支払う保険金の合計額を出し、支払い時点を年央（期央）とみなして、期央払現価率で割り引いて現価を求める。',
                                },
                                {
                                    type: 'note',
                                    value: '※期央払現価率とは、年の真ん中で支払われると仮定したときの割引係数。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['合計保険金額 ＝ 保険金 × 死亡数', '現価 ＝ 合計保険金額 × 期央払現価率（利率1.0%）'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '① 合計保険金額',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['保険金（500万円） × 死亡数（50歳）', '＝ 5,000千円 × 275人', '＝ 1,375,000千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 現価（年央払）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['合計保険金額 × 期央払現価率（利率1.0%）', '＝ 1,375,000千円 × 0.995037', '＝ 1,368,175.8千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え：1,368,176千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問５ p39
                        {
                            answer: '14,200',
                            questionTitle: '純保険料',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '純保険料は、必要な保険金総額の現価を、加入者全員で負担する額。したがって、必要な現価を年始生存者数で割る。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['純保険料 ＝ 必要な現価 ÷ 年始生存者数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['純保険料', '＝ 必要な現価（問４の解） ÷ 50歳男子の年始生存者数', '＝ 1,368,176千円 ÷ 96,319人', '＝ 14,204円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 14,200円（10円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'イ', //1
                        'ク', //2
                        'ウ', //3
                        'コ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問６
                        {
                            answer: '4,517',
                            questionTitle: '複利計算',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '複利では、元金に利息が組み込まれながら増えていく。まず6か月後の元利合計を求め、そこから元金を差し引いて利息を求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計 ＝ 元金 × (1 + 利率)<sup>運用期間</sup>', '利息 ＝ 元利合計 − 元金'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元金：500,000円', '月利：0.15％ ＝ 0.0015', '運用期間：6か月'],
                                },
                                {
                                    type: 'text',
                                    value: '① 元利合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['＝ 500,000円 × (1 + 0.0015)<sup>6</sup>', '＝ 500,000円 × 1.0090338', '＝ 504,516.9円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 利息',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['＝ 504,516.9円 − 500,000円', '＝ 4,516.9円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 4,517円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問７
                        {
                            answer: '528,696',
                            questionTitle: '複利計算（半年複利）',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '年利1.4％で半年複利の場合、半年ごとに0.7％ずつ増える。4年間では半年が8回あるため、半年利率で8回複利計算する。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計 ＝ 元金 × (1 + 期間利率)<sup>複利回数</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元金：500,000円', '年利：1.4％', '半年利率：＝ 1.4％ ÷ 2 ＝ 0.7％ ＝ 0.007', '複利回数：＝ 4年 × 年2回 ＝ 8回'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計', '＝ 500,000円 × (1 + 0.007)<sup>8</sup>', '＝ 500,000円 × 1.0573912', '＝ 528,695.6円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 528,696円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問８
                        {
                            answer: '1.21',
                            questionTitle: '実利率',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
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
                                    value: ['実利率 ＝（ 1 + 名称利率 ÷ 転化回数）<sup>転化回数</sup> - 1'],
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
                                    value: ['＝ 0.012 ÷ 4', '＝ 0.003'],
                                },
                                {
                                    type: 'text',
                                    value: '② 実利率',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['＝ (1 + 0.003)<sup>4</sup> − 1', '＝ 1.01205 − 1', '＝ 0.01205 ＝ 1.205％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.21％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問９
                        {
                            answer: '1.21',
                            questionTitle: '年平均利回り',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 考え方のポイント',
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
                                    value: ['総利回り ＝ (1 + 複利利率)<sup>期間</sup> − 1','年平均利回り ＝ 総利回り ÷ 期間'],
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
                                    value: ['＝ 0.012 ÷ 4', '＝ 0.003'],
                                },
                                {
                                    type: 'text',
                                    value: '② 実利率',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['＝ (1 + 0.003)<sup>4</sup> − 1', '＝ 1.01205 − 1', '＝ 0.01205 ＝ 1.205％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.21％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        {
                            answer: '1.83',
                            explanation:
                                '複利利率：1.8%（＝0.018）<br>\
                        投資期間：3年<br>\
                        年平均利回り ＝ （（ 1 + 複利利率）<sup>期間</sup> - 1 ） ÷ 期間<br><br><br>\
                        年平均利回り ＝ ((1 + 0.018)<sup>3</sup> − 1) ÷ 3 ＝ 0.01832（＝1.832%）<br><br><br>\
                        年平均利回り：<br>\
                        ⇒ 1.83%（小数第3位を四捨五入）',
                        },
                        // 問10
                        {
                            answer: '4,618,507',
                            explanation:
                                '年利率：1.6%（＝0.016）<br>\
                        投資期間：5年<br>\
                        元利合計 ＝ 元金 ×（ 1 + 利率 ）<sup>期間</sup><br><br><br>\
                        元金 ×（ 1 + 1.6% ）<sup>5年</sup> ＝ 500万円<br>\
                        元金 ＝ 5,000,000 ÷ （ 1 + 0.016 ）<sup>5</sup> ＝ 4,618,505.4<br>\
                        ⇒ 4,618,505円（円未満を四捨五入）<br><br><br>\
                        ※本解説は標準的な複利計算に基づいていますが、模範解答と結果が相違しております。<br>\
                        出題側の処理基準が不明確なため、本解説の方が正確である可能性もあります。',
                        },
                    ]"
                    :labels="[
                        'オ', //6
                        'ク', //7
                        'ア', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '経験生命表',
                        '完全生命表',
                        '総合表',
                        '選択効果',
                        '年齢別', //問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'ア', //12
                        'キ', //13
                        'カ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '安全性',
                        '公平性',
                        '利源別配当方式（利源式）',
                        '保険業法施行規則',
                        '1年', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'オ', //17
                        'コ', //18
                        'ク', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問21
                        {
                            answer: '2,887,038千円',
                            explanation:
                                '保険金額：400万円<br>\
                        保険期間：5年（41歳〜45歳）<br><br>\
                        死亡保険金の支払いは平均して年の中央で発生すると仮定<br>\
                        各年齢における死亡保険金の現価求めて合計する<br><br><br>\
                        死亡保険金 × 死亡数 × 期央払現価 ＝ 死亡保険金の現価<br>\
                        41歳：4,000,000 × 126 × 0.995037 ＝ 501,499千円<br>\
                        42歳：4,000,000 × 137 × 0.985185 ＝ 539,881千円<br>\
                        43歳：4,000,000 × 147 × 0.975431 ＝ 573,553千円<br>\
                        44歳：4,000,000 × 159 × 0.965773 ＝ 614,232千円<br>\
                        45歳：4,000,000 × 172 × 0.956211 ＝ 657,873千円<br><br>\
                        死亡保険金現価の合計：<br>\
                        ⇒ 2,887,038千円',
                        },
                        // 問22
                        {
                            answer: '369,907,146千円',
                            explanation:
                                '保険金額：400万円<br>\
                        満期保険金の現価：5年後の生存数 × 保険金額 × 期末払現価<br><br><br>\
                        46歳の生存数 × 400万円 × 5年の期末払現価<br>\
                        97,194 × 4,000,000 × 0.951466 ＝ 369,907,145,616円<br><br>\
                        5年後に支払う満期保険金の現価：<br>\
                        ⇒ 369,907,146千円（千円未満を四捨五入）',
                        },
                        // 問23
                        {
                            answer: '9,793,600千円',
                            explanation:
                                '保険金額：400万円<br>\
                        予定事業費：保険金1000円につき25円<br><br><br>\
                        一人当たりの予定事業費に加入時の生存数をかけて求める。<br><br><br>\
                        保険金額 × 予定事業費率 × 41歳の生存数<br>\
                        4,000,000 × (25 ÷ 1000) × 97,936 ＝ 9,793,600,000<br><br>\
                        予定事業費の現価：<br>\
                        ⇒ 9,793,600千円（千円未満を四捨五入）',
                        },
                        // 問24
                        {
                            answer: '799,140円',
                            explanation:
                                '収支相当の原則：収入現価 ＝ 支出現価<br><br><br>\
                        ＜収入現価＞<br>\
                        各年齢の生存数×年払保険料（P）を現価に換算して合計する。<br><br><br>\
                        年払保険料 × 生存数 × 期始払現価 ＝ 収入現価<br>\
                        41歳 ： P × 97,936 × 1.000000 ＝ 97,936P<br>\
                        42歳 ： P × 97,810 × 0.990099 ＝ 96,842P<br>\
                        43歳 ： P × 97,673 × 0.980296 ＝ 95,748P<br>\
                        44歳 ： P × 97,525 × 0.970590 ＝ 94,657P<br>\
                        45歳 ： P × 97,366 × 0.960980 ＝ 93,567P<br>\
                        41歳～45歳の収入現価の合計 ＝ 478,750P<br><br>\
                        ＜支出現価＞<br>\
                        問21〜23で算出した結果を用いて求める。<br><br><br>\
                        死亡保険金の現価+満期保険金の現価+予定事業費の現価<br>\
                        2,887,038千円 + 369,907,146千円 + 9,793,600千円<br>\
                        ＝ 382,587,784千円<br><br>\
                        収支相当の原則より<br>\
                        <div class=&quot;calc-line&quot;>478,750P = 382,587,784千円</div>\
                        <div class=&quot;calc-line&quot;>P ＝ 799,138円</div><br>\
                        営業保険料：<br>\
                        <p class=&quot;calc-result&quot;>⇒ 799,140円（10円未満を四捨五入）</p>',
                        },
                        // 問25
                        {
                            answer: '1,097,000円',
                            explanation:
                                '払済保険金 ＝解約返戻金 × (保険金額 ÷ 養老保険の一時払保険料)<br><br><br>\
                        858,000 × (3,000,000 ÷ 2,345,580) ＝ 1,097,383円<br><br><br>\
                        払済保険金：<br>\
                        ⇒ 1,097,000円（千円未満を四捨五入）',
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
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p53
                        '予定死亡率と予定利率を低くすると、生存保険の純保険料は<u><b>高くなる</b></u>。',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p55
                        '保険金に比例させる方式と保険料に比例させる方式を組み合わせる方式が一般的である。',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p96 (2024-A-28,2024-B-28,2024-C-28,2023-C-28)
                        '保険業法では、事業年度末までに経過した期間に見合う保険料部分に対応する積立金（保険料積立金）、翌事業年度以降に対応する保険料部分（未経過保険料）、<u>第三分野における積立傷害保険等の積立型商品において、将来の満期返戻金支払いに対応する保険料部分（払戻積立金）</u>および危険準備金に分けて計算することとされている。',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p119 (2024-A-29,2024-B-29,2024-C-29)
                        '正しい',
                        '正しい',
                        '転換前契約の責任準備金は転換後契約の一時払保険料（新契約費部分を<u><b>含まない</b></u>もの）に充当する。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p147
                        '正しい',
                        '毎月ではなく毎日。',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { label: '解', content: '正しい' }, //31
                        { label: '解', content: '通常、単に現価という場合には<u><b>期末払現価</b></u>を指す。' }, //32
                        { label: '解', content: '正しい' }, //33
                        {
                            label: '解',
                            content:
                                '1年分を何回かに分けて払い込む分割払営業保険料の年間払込額は、年払の営業保険料額を以下の理由で<u><b>上回る</b></u>。<br>①分割払のために保険料払込みが遅れるための利息の損失（年払保険料の場合に比べて年間の予定利息分は少なくなる）<br>②集金回数（払込回数）の増加に伴う事業費の増加',
                        }, //34
                        { label: '解', content: '自然保険料方式と異なり、平準保険料方式は責任準備金を積み立てる必要がある。' }, //35
                        { label: '解', content: '正しい' }, //36
                        { label: '解', content: '正しい' }, //37
                        { label: '解', content: '正しい' }, //38
                        { label: '解', content: '正しい' }, //39
                        { label: '解', content: '配当は、被保険者ごとの配当を算出してそれを<u><b>積み上げるのではなく</b></u>、団体単位で計算されている。' }, //40
                        // 問41〜50
                        { label: 'オ', content: '' }, //41
                        { label: 'ア', content: '現価' }, //42
                        { label: 'オ', content: '' }, //43
                        { label: 'ウ', content: '（1 + 予定利率）1/2乗' }, //44
                        { label: 'イ', content: '標準' }, //45
                        { label: 'イ', content: '失効' }, //46
                        { label: 'ア', content: '危険保険金額' }, //47
                        { label: 'オ', content: '' }, //48
                        { label: 'エ', content: 'を禁止されている' }, //49
                        { label: 'ウ', content: '総合保険料' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="keiri2024b" />
        </section>
    </SeihoTestLayout>
</template>
