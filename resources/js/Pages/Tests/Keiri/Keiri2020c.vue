<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import QuestionTemp4 from "../../../Components/QuestionTemp4.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険計理";
const subject = "2020年度 フォームC";


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
                            answer: '1,807',
                            questionTitle: '複利計算',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
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
                                    value: ['元利合計 = 元金 × (1 + 利率)<sup>運用期間</sup>', '利息 = 元利合計 − 元金'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元金：200,000円', '月利：0.15％ = 0.0015', '運用期間：6か月'],
                                },
                                {
                                    type: 'text',
                                    value: '① 元利合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 200,000円 × (1 + 0.0015)<sup>6</sup>', '= 200,000円 × 1.009034', '= 201,806.8円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 利息',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 201,806.8円 − 200,000円', '= 1,806.8円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1,807円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問２
                        {
                            answer: '207,928',
                            questionTitle: '複利計算（半年複利）',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '年利1.3％で半年複利の場合、半年ごとに0.65％ずつ増える。3年間では半年が6回あるため、半年利率で6回複利計算する。',
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
                                    value: ['元金：200,000円', '年利：1.3％', '半年利率：= 1.3％ ÷ 2 = 0.65％ = 0.0065', '複利回数：= 3年 × 年2回 = 6回'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計', '= 200,000円 × (1 + 0.0065)<sup>6</sup>', '= 200,000円 × 1.039642', '= 207,928.4円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 207,928円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問３
                        {
                            answer: '1.51',
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
                                    value: ['= 0.015 ÷ 4', '= 0.00375'],
                                },
                                {
                                    type: 'text',
                                    value: '② 実利率',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= (1 + 0.00375)<sup>4</sup> − 1', '= 1.015084 − 1', '= 0.015084 = 1.5084％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.51％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問４
                        {
                            answer: '1.73',
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
                                    value: ['複利利率：1.7％ = 0.017', '投資期間：3年'],
                                },
                                {
                                    type: 'text',
                                    value: '① 総利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= (1 + 0.017)<sup>3</sup> − 1', '= 1.051881 − 1', '= 0.051881'],
                                },
                                {
                                    type: 'text',
                                    value: '② 年平均利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 0.051881 ÷ 3', '= 0.0172937 = 1.7294％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.73％（小数第3位を四捨五入）',
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
                        'カ', //1
                        'キ', //2
                        'ア', //3
                        'イ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問６
                        {
                            answer: '0.98874',
                            questionTitle: '生存率',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
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
                                    value: ['生存率 = 期末の生存数 ÷ 期初の生存数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['生存率（50歳 → 55歳）', '= 55歳の生存数 ÷ 50歳の生存数', '= 96,441 ÷ 97,539 = 0.988739…'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 0.98874（小数第6位を四捨五入）',
                                },
                            ],
                        },
                        // 問７
                        {
                            answer: '97,957',
                            questionTitle: '生存数',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '「5年後に何人残るか」は、今の人数に5年間生き残る割合（生存率）を掛けることで求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formula',
                                    value: 'N年後の生存者数 = 基準年齢の人数 × 生存率',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '5年後の生存者数',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['基準年齢（60歳）の人数 × 生存率（60歳 → 65歳）', '= 100,000 × 93,054 ÷ 94,995 = 97,956.7…'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 97,957（小数第1位を四捨五入）',
                                },
                            ],
                        },
                        // 問８
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
                        // 問９
                        {
                            answer: '1,293,548',
                            questionTitle: '保険金総額の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
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
                                    value: ['合計保険金額 = 保険金 × 死亡数', '現価 = 合計保険金額 × 期央払現価率（利率1.0%）'],
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
                                    value: ['保険金（500万円） × 死亡数（55歳）', '= 5,000千円 × 260人', '= 1,300,000千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 現価（年央払）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['合計保険金額 × 期央払現価率（利率1.0%）', '= 1,300,000千円 × 0.995037', '= 1,293,548.1千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え：1,293,548千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問10
                        {
                            answer: '13,410',
                            questionTitle: '純保険料',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
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
                                    value: ['純保険料 = 必要な現価 ÷ 年始生存者数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['純保険料', '= 必要な現価（問４の解） ÷ 55歳の年始生存者数', '= 1,293,548千円 ÷ 96,441人', '= 13,410.3…円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 13,410円（10円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //6
                        'キ', //7
                        'ウ', //8
                        'コ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    questionTitle="保険料の構成と計算基礎"
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
                    questionTitle="責任準備金の積立に関する法的規制"
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
                            answer: '4,042,947千円',
                            questionTitle: '死亡保険金の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '保険期間（55〜57歳）の各年齢で死亡した場合、死亡保険金が支払われる。支払いは年央（期央）と仮定されるため、各年齢の「死亡保険金 × 死亡数」を期央払現価率で割り引き、現価を合計する。',
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
                                    value: ['死亡保険金：500万円 = 5,000千円', '保険期間：3年（55〜57歳）', '支払い：年央（期央）と仮定'],
                                },
                                {
                                    type: 'text',
                                    value: '① 各年齢の死亡保険金現価',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '55歳：5,000千円 × 260 × 0.995037 = 1,293,548.1千円 ≒ 1,293,548千円',
                                        '56歳：5,000千円 × 273 × 0.985185 = 1,344,777.525千円 ≒ 1,344,778千円',
                                        '57歳：5,000千円 × 288 × 0.975431 = 1,404,620.64千円 ≒ 1,404,621千円',
                                    ],
                                },
                                {
                                    type: 'text',
                                    value: '② 合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金現価の合計', '= 1,293,548 + 1,344,778 + 1,404,621', '= 4,042,947千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 4,042,947千円',
                                },
                            ],
                        },
                        // 問22
                        {
                            answer: '464,039,079千円',
                            questionTitle: '満期保険金の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '満期保険金は、保険期間満了時（3年後）に生存している人に支払われる。したがって、まず 3年後の生存者数 × 保険金額 で将来の支払総額を求め、それを期末払現価率で割り引いて現価を求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期保険金の現価 = 3年後の生存者数 × 保険金額 × 期末払現価率（3年）'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['保険金額：500万円 = 5,000千円', '3年後（58歳）の生存数：95,620人', '3年の期末払現価率：0.970590'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期保険金の現価', '= 95,620 × 5,000 × 0.970590', '= 464,039,079千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 464,039,079千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問23
                        {
                            answer: '12,055,125千円',
                            questionTitle: '予定事業費の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '予定事業費が「保険金1000円につき25円」と与えられているので、まず 1人あたりの予定事業費を求める。その後、加入時（55歳）の生存者数を掛けて、全体の予定事業費（現価）を求める。',
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
                                    value: ['保険金額：500万円 = 5,000千円', '予定事業費：保険金1000円につき25円 = 25 ÷ 1000', '55歳の生存数：96,441人'],
                                },
                                {
                                    type: 'text',
                                    value: '① 1人あたりの予定事業費',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 5,000千円 ×（25 ÷ 1000）', '= 5,000 × 0.025', '= 125千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 予定事業費の現価（合計）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 125千円 × 96,441人', '= 12,055,125千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 12,055,125千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問24
                        {
                            answer: '1,689,630円',
                            questionTitle: '養老保険の年払営業保険料',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '年払営業保険料 P は、収支相当の原則（収入現価 = 支出現価）で求める。',
                                },
                                {
                                    type: 'text',
                                    value: '収入現価：各年齢で生存している人が払う保険料 P を、期始払として現価に直して合計する。',
                                },
                                {
                                    type: 'text',
                                    value: '支出現価：死亡保険金・満期保険金・予定事業費の現価を合計する（問21〜23の結果）。',
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
                                    value: '① 収入現価（55〜57歳、期始払）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['55歳：P × 96,441 × 1.000000 = 96,441P', '56歳：P × 96,181 × 0.990099 = 95,231P', '57歳：P × 95,908 × 0.980296 = 94,001P'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['収入現価の合計', '= 96,441P + 95,231P + 94,001P', '= 285,673P'],
                                },
                                {
                                    type: 'text',
                                    value: '② 支出現価（問21〜23より）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金の現価（問21）= 4,042,947千円', '満期保険金の現価（問22）= 464,039,079千円', '予定事業費の現価（問23）= 12,055,125千円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['支出現価', '= 4,042,947 + 464,039,079 + 12,055,125', '= 480,137,151千円 = 480,137,151,000円'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 収支相当の原則より P を求める',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['285,673P = 480,137,151,000円', 'P = 480,137,151,000 ÷ 285,673', 'P = 1,689,626…円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1,689,630円（10円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'イ', //21
                        'ア', //22
                        'ウ', //23
                        'ア', //24
                    ]"
                />
                <QuestionTemp1 :questionNumber="25" questionTitle="解約返戻金" :title="title" :subject="subject" :contents="['正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="26" questionTitle="純保険料式保険料積立金" :title="title" :subject="subject" :contents="['正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="27" questionTitle="契約変更" :title="title" :subject="subject" :contents="['正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="28" questionTitle="契約者配当金の分配・支払方法" :title="title" :subject="subject" :contents="['正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="29" questionTitle="営業保険料の計算上配慮する点" :title="title" :subject="subject" :contents="['', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="30" questionTitle="団体定期保険の数理" :title="title" :subject="subject" :contents="['正しい', '正しい', '']" />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '死亡率', content: '正しい' }, //31
                        { questionTitle: '生命保険契約と年齢', content: '' }, //32
                        { questionTitle: '月平残方式', content: '' }, //33
                        { questionTitle: '保険料の計算原理', content: '正しい' }, //34
                        { questionTitle: '分割払保険料', content: '' }, //35
                        { questionTitle: '解約返戻金の算式', content: '正しい' }, //36
                        { questionTitle: '剰余金の発生源', content: '' }, //37
                        { questionTitle: '契約者配当の意義と割当', content: '正しい' }, //38
                        { questionTitle: '利差配当付保険', content: '' }, //39
                        { questionTitle: '変額保険の用語', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '死亡表の種類', label: 'オ', content: '' }, //41
                        { questionTitle: '保険数理の基礎', label: 'ウ', content: '毎年' }, //42
                        { questionTitle: '純保険料の変化', label: 'エ', content: '責任準備金' }, //43
                        { questionTitle: '準備金の積立根拠', label: 'イ', content: '高くなる' }, //44
                        { questionTitle: '積立に関する法的規制', label: 'オ', content: '' }, //45
                        { questionTitle: '払済保険', label: 'イ', content: '標準' }, //46
                        { questionTitle: '加入年齢方式による転換', label: 'ア', content: '定期保険' }, //47
                        { questionTitle: '配当準備金繰入', label: 'イ', content: '責任準備金関係' }, //48
                        { questionTitle: '変額保険の保険料', label: 'ア', content: '保険年度末保険料積立金' }, //49
                        { questionTitle: '団体年金保険の保険料計算', label: 'ウ', content: '純保険料率' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="keiri2020b" />
        </section>
    </SeihoTestLayout>
</template>
