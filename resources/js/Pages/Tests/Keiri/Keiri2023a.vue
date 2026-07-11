<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import QuestionTemp4 from "../../../Components/QuestionTemp4.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険計理";
const subject = "2023年度 フォームA";
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
                            // rev: 2026-07-11 確認済み
                            answer: '5,425',
                            questionTitle: '複利計算',
                            relatedProblems: ['2023a1', '2023b6', '2023c1'],
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
                                    value: ['元金：500,000円', '月利：0.18％ = 0.0018', '運用期間：6か月'],
                                },
                                {
                                    type: 'text',
                                    value: '① 元利合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 500,000円 × (1 + 0.0018)<sup>6</sup>', '= 500,000円 × 1.010849', '= 505,424.5円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 利息',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 505,424.5円 − 500,000円', '= 5,424.5円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 5,425円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問２
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '522,926',
                            questionTitle: '複利計算（半年複利）',
                            relatedProblems: ['2023a2', '2023b7', '2023c2'],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '年利1.5％で半年複利の場合、半年ごとに0.75％ずつ増える。3年間では半年が6回あるため、半年利率で6回複利計算する。',
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
                                    value: ['元金：500,000円', '年利：1.5％', '半年利率：= 1.5％ ÷ 2 = 0.75％ = 0.0075', '複利回数：= 3年 × 年2回 = 6回'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計', '= 500,000円 × (1 + 0.0075)<sup>6</sup>', '= 500,000円 × 1.0458522', '= 522,926.1円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 522,926円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問３
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '1.51',
                            questionTitle: '実利率',
                            relatedProblems: ['2023a3', '2023b8', '2023c3'],
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
                            // rev: 2026-07-11 確認済み
                            answer: '1.23',
                            questionTitle: '年平均利回り',
                            relatedProblems: ['2023a4', '2023b9', '2023c4'],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: 'まず、5年間の複利でどれだけ増えたか（総利回り）を求める。その後、それを5年で平均したものが年平均利回り。',
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
                                    value: ['複利利率：1.2％ = 0.012', '投資期間：5年'],
                                },
                                {
                                    type: 'text',
                                    value: '① 総利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= (1 + 0.012)<sup>5</sup> − 1', '= 1.0617 − 1', '= 0.0617'],
                                },
                                {
                                    type: 'text',
                                    value: '② 年平均利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 0.0617 ÷ 5', '= 0.01234 = 1.234％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.23％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問５
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '2,710,245円',
                            questionTitle: '必要資金（現在価値）',
                            relatedProblems: ['2023a5', '2023b10', '2023c5'],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '毎年始（期始）に40万円を7年間支払うので、各年の支払額をそれぞれ現在価値に割り引き、その合計を求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在価値 = 将来の金額 × (1 ÷ (1 + 利率))<sup>年数</sup>', '必要資金 = 各年の支払額の現在価値の合計'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の支払額：400,000円（年始）', '期間：7年間', '年利率：1.1％ = 0.011'],
                                },
                                {
                                    type: 'text',
                                    value: '① 各年の支払額の現在価値',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '初年度：400,000円',
                                        '1年後：400,000 × (1 ÷ 1.011) = 395,648円',
                                        '2年後：400,000 × (1 ÷ 1.011)<sup>2</sup> = 391,343.2円',
                                        '3年後：400,000 × (1 ÷ 1.011)<sup>3</sup> = 387,085.2円',
                                        '4年後：400,000 × (1 ÷ 1.011)<sup>4</sup> = 382,873.6円',
                                        '5年後：400,000 × (1 ÷ 1.011)<sup>5</sup> = 378,707.6円',
                                        '6年後：400,000 × (1 ÷ 1.011)<sup>6</sup> = 374,587.2円',
                                    ],
                                },
                                {
                                    type: 'text',
                                    value: '② 合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在価値の合計', '= 400,000 + 395,648 + 391,343.2 + 387,085.2 + 382,873.6 + 378,707.6 + 374,587.2', '= 2,710,244.764…円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 2,710,245円（円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'カ', //1
                        'ク', //2
                        'ウ', //3
                        'ア', //4
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
                            // rev: 2026-07-11 確認済み
                            answer: '0.98530',
                            questionTitle: '生存率',
                            relatedProblems: ['2023a6', '2023b1', '2023c6'],
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
                                    value: ['生存率（48歳 → 55歳）', '= 55歳の生存数 ÷ 48歳の生存数', '= 96,441 ÷ 97,880 = 0.985298'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 0.98530（小数第6位を四捨五入）',
                                },
                            ],
                        },
                        // 問７
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '98,455',
                            questionTitle: '生存数',
                            relatedProblems: ['2023a7', '2023b2', '2023c7'],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '「3年後に何人残るか」は、今の人数に“3年間生き残る割合（生存率）を掛けることで求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formula',
                                    value: 'N年後の生存者数 = 基準年齢の人数 × 生存率（問１参照）',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '3年後の生存者数',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['基準年齢（65歳）の人数 × 生存率（65歳 → 68歳）', '= 100,000 × 91,616 ÷ 93,054 = 98454.6'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 98,455（小数第1位を四捨五入）',
                                },
                            ],
                        },
                        // 問８
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '1.02',
                            questionTitle: '平均余命',
                            relatedProblems: ['2023a8', '2023b3', '2023c8'],
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
                                    value: ['109歳：25.888 × 0.5 = 12.94', '110歳：10.1008 × 1.5 = 15.15', '111歳：3.4515 × 2.5 = 8.63', '112歳：1.0162 × 3.5 = 3.56', '113歳：0.3155 × 4.5 = 1.42'],
                                },
                                {
                                    type: 'text',
                                    value: '② 109歳～113歳の延べ生存年数の合計',
                                },
                                {
                                    type: 'note',
                                    value: '109歳以上の全員が、合計で何年分生きたかを合算する。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['12.94 + 15.15 + 8.63 + 3.56 + 1.42 = 41.7'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 109歳の平均余命',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['109歳～113歳の延べ生存年数の合計 ÷ 109歳の生存者数', '= 41.7 ÷ 40.772', '= 1.022'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.02（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問９
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '955,236',
                            questionTitle: '保険金総額の現価',
                            relatedProblems: ['2023a9', '2023b4', '2023c9'],
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
                                    value: ['保険金（500万円） × 死亡数（50歳）', '= 5,000千円 × 192人', '= 960,000千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 現価（年央払）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['合計保険金額 × 期央払現価率（利率1.0%）', '= 960,000千円 × 0.995037', '= 955,235.52千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え：955,236千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問10
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '9,790',
                            questionTitle: '純保険料',
                            relatedProblems: ['2023a10', '2023b5', '2023c10'],
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
                                    value: ['純保険料', '= 必要な現価（問９の解） ÷ 50歳の年始生存者数', '= 955,236千円 ÷ 97,539人', '= 9,793円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 9,790円（10円未満四捨五入）',
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
                    questionTitle="死亡表の種類"
                    :relatedProblems="['2023a11', '2023b11', '2023b41', '2023c11']"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-07-11 確認済み
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
                    questionTitle="払済保険"
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-07-11 確認済み
                        '解約返戻金',
                        '残存',
                        'そのときの被保険者の到達年齢',
                        '新契約費',
                        '同じ', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'キ', //17
                        'ケ', //18
                        'ク', //19
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
                            // rev: 2026-07-11 確認済み
                            answer: '3,335,427千円',
                            questionTitle: '死亡保険金の現価',
                            relatedProblems: ['2023a21', '2023b21', '2023c21'],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '保険期間（40〜44歳）の各年齢で死亡した場合、死亡保険金が支払われる。支払いは年央（期央）と仮定されるため、各年齢の「死亡保険金 × 死亡数」を期央払現価率で割り引き、現価を合計する。',
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
                                    value: ['死亡保険金：700万円 = 7,000千円', '保険期間：5年（40〜44歳）', '支払い：年央（期央）と仮定'],
                                },
                                {
                                    type: 'text',
                                    value: '① 各年齢の死亡保険金現価',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['40歳：7,000千円 × 87 × 0.995037 = 605,978千円', '41歳：7,000千円 × 92 × 0.985185 = 634,459千円', '42歳：7,000千円 × 98 × 0.975431 = 669,146千円', '43歳：7,000千円 × 102 × 0.965773 = 689,562千円', '44歳：7,000千円 × 110 × 0.956211 = 736,282千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金現価の合計', '= 605,978 + 634,459 + 669,146 + 689,562 + 736,282', '= 3,335,427千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 3,335,427千円',
                                },
                            ],
                        },
                        // 問22
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '654,563,889千円',
                            questionTitle: '満期保険金の現価',
                            relatedProblems: ['2023a22', '2023b22', '2023c22'],
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
                                    value: ['保険金額：700万円 = 7,000千円', '5年後（45歳）の生存数：98,279人', '5年の期末払現価率：0.951466'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期保険金の現価', '= 98,279 × 7,000 × 0.951466', '= 654,563,889.098千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 654,563,889千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問23
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '17,284,400千円',
                            questionTitle: '予定事業費の現価',
                            relatedProblems: ['2023a23', '2023b23', '2023c23'],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '予定事業費が「保険金1000円につき25円」と与えられているので、まず 1人あたりの予定事業費を求める。その後、加入時（40歳）の生存者数を掛けて、全体の予定事業費（現価）を求める。',
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
                                    value: ['保険金額：700万円 = 7,000千円', '予定事業費：保険金1000円につき25円 = 25 ÷ 1000', '40歳の生存数：98,768人'],
                                },
                                {
                                    type: 'text',
                                    value: '① 1人あたりの予定事業費',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 7,000千円 ×（25 ÷ 1000）', '= 7,000 × 0.025', '= 175千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 予定事業費の現価（合計）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 175千円 × 98,768人', '= 17,284,400千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 17,284,400千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問24
                        {
                            // rev: 2026-07-11 確認済み
                            answer: '1,397,130円',
                            questionTitle: '養老保険の年払営業保険料',
                            relatedProblems: ['2023a24', '2023b24', '2023c24'],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '年払営業保険料 P は、収支相等の原則（収入現価=支出現価）で求める。',
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
                                    value: ['収支相等の原則：収入現価 = 支出現価', '各年齢の収入現価（期始払） = 生存数 × P × 期始払現価率', '支出現価 = 死亡保険金現価 + 満期保険金現価 + 予定事業費現価'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'text',
                                    value: '① 収入現価（40〜44歳、期始払）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['40歳：P × 98,768 × 1.000000 = 98,768P', '41歳：P × 98,681 × 0.990099 = 97,704P', '42歳：P × 98,590 × 0.980296 = 96,647P', '43歳：P × 98,492 × 0.970590 = 95,595P', '44歳：P × 98,390 × 0.960980 = 94,551P'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['収入現価の合計', '= 98,768P + 97,704P + 96,647P + 95,595P + 94,551P', '= 483,265P'],
                                },
                                {
                                    type: 'text',
                                    value: '② 支出現価（問21〜23より）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金の現価（問21）= 3,335,427千円', '満期保険金の現価（問22）= 654,563,889千円', '予定事業費の現価（問23）= 17,284,400千円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['支出現価', '= 3,335,427 + 654,563,889 + 17,284,400', '= 675,183,716千円 = 675,183,716,000円'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 収支相等の原則より P を求める',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['収入現価 = 支出現価 より', '483,265P = 675,183,716,000円', 'P = 675,183,716,000円 ÷ 483,265', 'P = 1,397,129.4…円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1,397,130円（10円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //21
                        'ア', //22
                        'ウ', //23
                        'イ', //24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者配当金の分配・支払方法"
                    :relatedProblems="['2023a25', '2023b25', '2023c25']"
                    :contents="[
                        //p134 (2023-A-25,2023-B-25,2023-C-25,2022-A-25,2022-B-25,2022-C-25)
                        '年払保険料 → 一時払保険料',
                        'その年度の保険料にまとめて充当 → 払込回数に等分し、毎回の保険料に充当',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業保険料"
                    :relatedProblems="['2023a26', '2023b26', '2023c26']"
                    :contents="[
                        //p54 (2023-A-26,2023-B-26,2023-C-26)
                        '3方式 → 4方式（1契約について予定事業費を一定額とする方式も含む）',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料積立金"
                    :relatedProblems="['2023a27']"
                    :contents="[
                        // rev: 2026-07-12 確認済み
                        '正しい',
                        '危険保険料 → 貯蓄保険料', //p82
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業年度末責任準備金"
                    :relatedProblems="['2023a28', '2023c28']"
                    :contents="[
                        //p102
                        '正しい',
                        '正しい',
                        '社員総代会や株主総会 → 取締役会',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約返戻金"
                    :relatedProblems="['2023a29', '2023b29', '2023c29']"
                    :contents="[
                        //p105 (2023-A-29,2023-B-29,2024-C-29)
                        '正しい',
                        '既払込保険料相当額が用いられている → 解約返戻金が用いられている',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="['2023a30', '2023c37']"
                    :contents="[
                        //p119
                        '正しい',
                        '正しい',
                        '一時払保険料に充当 → 分割保険料に充当',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a31'],
                            questionTitle: '契約年齢',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a32', '2023b32', '2023c32'],
                            questionTitle: '単利',
                            content: '正しい',
                        }, //32
                        {
                            relatedProblems: ['2023a33', '2023c33'],
                            questionTitle: '予定利率',
                            content: '保険金額 → 商品の特性',
                        }, //33 p38
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a34', '2023b34', '2023c34'],
                            questionTitle: '終価',
                            content: '正しい',
                        }, //34
                        {
                            relatedProblems: ['2023a35', '2023b35'],
                            questionTitle: '保険料の計算原理',
                            content: '自然保険料 → 平準保険料',
                        }, //35
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a36', '2023b36', '2023c36'],
                            questionTitle: '1年定期保険の純保険料',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a37'],
                            questionTitle: '責任準備金',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a38'],
                            questionTitle: '決算による剰余金算定',
                            content: '正しい',
                        }, //38
                        {
                            relatedProblems: ['2023a39', '2023a49', '2023b49'],
                            questionTitle: '変額保険の仕組み',
                            content: '3つ → 2つ（死差益と費差益）',
                        }, //39
                        {
                            relatedProblems: ['2023a40'],
                            questionTitle: '団体定期保険の数理',
                            content: '被保険者ごとに積み上げる → 団体単位で計算<br>死差損団体にも支払われる → 支払われない',
                        }, //40 p154
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a41', '2023b31', '2023c41'],
                            questionTitle: '死亡率',
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a42', '2023b42', '2023c42'],
                            questionTitle: '保険計理の基礎',
                            label: 'イ',
                            content: '大数',
                        }, //42
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a43', '2023b43', '2023c43'],
                            questionTitle: '純保険料の変化',
                            label: 'エ',
                            content: '高くなる',
                        }, //43
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a44', '2023b44', '2023c44'],
                            questionTitle: '責任準備金の積立',
                            label: 'ウ',
                            content: '平準保険料',
                        }, //44
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a45', '2023b27', '2023b46', '2023c46'],
                            questionTitle: '積立に関する法的規制',
                            label: 'イ',
                            content: '危険準備金',
                        }, //45
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a46', '2023c35'],
                            questionTitle: '延長保険',
                            label: 'ア',
                            content: '定期保険',
                        }, //46
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a47', '2023b47', '2023c47'],
                            questionTitle: '配当準備金繰入',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a48', '2023b38', '2023c38'],
                            questionTitle: '剰余金の発生源',
                            label: 'エ',
                            content: '価格変動',
                        }, //48
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a39', '2023a49', '2023b49'],
                            questionTitle: '変額保険の仕組み',
                            label: 'ア',
                            content: '死亡保険金額',
                        }, //49
                        {
                            // rev: 2026-07-11 確認済み
                            relatedProblems: ['2023a50'],
                            questionTitle: '団体年金制度の財政方式',
                            label: 'ア',
                            content: '事前積立',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="keiri2024c" next-route="keiri2023b" />
        </section>
    </SeihoTestLayout>
</template>
