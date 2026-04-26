<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import QuestionTemp4 from "../../../Components/QuestionTemp4.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険計理";
const subject = "2025年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
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
                            answer: '0.97957',
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
                                    value: ['生存率（60歳 → 65歳）', '= 65歳の生存数 ÷ 60歳の生存数', '= 93,054 ÷ 94,995 = 0.979567…'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 0.97957（小数第6位を四捨五入）',
                                },
                            ],
                        },
                        // 問２
                        {
                            answer: '98,756',
                            questionTitle: '生存数',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '「10年後に何人残るか」は、今の人数に10年間生き残る割合（生存率）を掛けることで求める。',
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
                                    value: '10年後の生存者数',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['基準年齢（40歳）の人数 × 生存率（40歳 → 50歳）', '= 100,000 × 97,539 ÷ 98,768 = 98755.6…'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 98,756（小数第1位を四捨五入）',
                                },
                            ],
                        },
                        // 問３
                        {
                            answer: '0.84',
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
                                    value: ['111歳：3.4515 × 0.5 = 1.73', '112歳：1.0162 × 1.5 = 1.52', '113歳：0.3155 × 2.5 = 0.79'],
                                },
                                {
                                    type: 'text',
                                    value: '② 111歳～113歳の延べ生存年数の合計',
                                },
                                {
                                    type: 'note',
                                    value: '111歳以上の全員が、合計で何年分生きたかを合算する。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['1.73 + 1.52 + 0.79 = 4.04'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 111歳の平均余命',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['111歳～113歳の延べ生存年数の合計 ÷ 111歳の生存者数', '= 4.04 ÷ 4.7833', '= 0.844'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 0.84（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問４
                        {
                            answer: '573,141',
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
                                    value: ['保険金（300万円） × 死亡数（50歳）', '= 3,000千円 × 192人', '= 576,000千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 現価（年央払）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['合計保険金額 × 期央払現価率（利率1.0%）', '= 576,000千円 × 0.995037', '= 573,141.3千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え：573,141千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問５
                        {
                            answer: '5,880',
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
                                    value: ['純保険料', '= 必要な現価（問4の解） ÷ 50歳の年始生存者数', '= 573,141千円 ÷ 97,539人', '= 5,876円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 5,880円（10円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //1
                        'ク', //2
                        'ア', //3
                        'ケ', //4
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
                            answer: '24,120',
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
                                    value: ['元金：2,000,000円', '月利：0.2％ = 0.002', '運用期間：6か月'],
                                },
                                {
                                    type: 'text',
                                    value: '① 元利合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 2,000,000円 × (1 + 0.002)<sup>6</sup>', '= 2,000,000円 × 1.01206016', '= 2,024,120.32円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 利息',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 2,024,120.32円 − 2,000,000円', '= 24,120.32円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 24,120円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問７
                        {
                            answer: '2,114,782',
                            questionTitle: '複利計算（半年複利）',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
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
                                    value: ['元利合計 = 元金 × (1 + 期間利率)<sup>複利回数</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元金：2,000,000円', '年利：1.4％', '半年利率：= 1.4％ ÷ 2 = 0.7％ = 0.007', '複利回数：= 4年 × 年2回 = 8回'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計', '= 2,000,000円 × (1 + 0.007)<sup>8</sup>', '= 2,000,000円 × 1.057391', '= 2,114,782円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 2,114,782円（円未満四捨五入）',
                                },
                            ],
                        },
                        // 問８
                        {
                            answer: '1.61',
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
                                    value: ['= 0.016 ÷ 4', '= 0.004'],
                                },
                                {
                                    type: 'text',
                                    value: '② 実利率',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= (1 + 0.004)<sup>4</sup> − 1', '= 1.01609 − 1', '= 0.01609 = 1.609％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.61％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問９
                        {
                            answer: '1.83',
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
                                    value: ['総利回り ＝ (1 + 複利利率)<sup>期間</sup> − 1', '年平均利回り ＝ 総利回り ÷ 期間'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['複利利率：1.8％ ＝ 0.018', '投資期間：3年'],
                                },
                                {
                                    type: 'text',
                                    value: '① 総利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['＝ (1 + 0.018)<sup>3</sup> − 1', '＝ 1.05497 − 1', '＝ 0.05497'],
                                },
                                {
                                    type: 'text',
                                    value: '② 年平均利回り',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['＝ 0.05497 ÷ 3', '＝ 0.01832 ＝ 1.832％'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.83％（小数第3位を四捨五入）',
                                },
                            ],
                        },
                        // 問10
                        {
                            answer: '2,770,231',
                            questionTitle: '現在必要資金の計算',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '将来300万円を得るために、今いくら必要かを求める問題。将来価値がわかっているので、複利を逆算（割り戻す）して現在価値を求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在価値 = 将来価値 ÷ (1 + 利率)<sup>期間</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['将来価値：3,000,000円', '半年利率：1.6％ ÷ 2 = 0.8% = 0.008', '期間：5年（半年複利なので回数は5 × 2 = 10回）'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在価値', '= 3,000,000 ÷ (1 + 0.008)<sup>10</sup>', '= 3,000,000 ÷ 1.082942', '= 2,770,231.4'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 2,770,231円（円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'カ', //6
                        'ク', //7
                        'イ', //8
                        'ウ', //9
                        'ケ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡表の種類"
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
                    questionTitle="変額保険の仕組み・運用（定額保険との比較）"
                    :contents="[
                        '毎月1回',
                        '保証はない',
                        '変動保険金額',
                        '契約者',
                        '生命保険会社', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'コ', //17
                        'カ', //18
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
                            answer: '2,164,347 千円',
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
                                    value: ['死亡保険金：300万円 = 3,000千円', '保険期間：5年（45〜49歳）', '支払い：年央（期央）と仮定'],
                                },
                                {
                                    type: 'text',
                                    value: '① 各年齢の死亡保険金現価',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        //改行用メモ
                                        '45歳：3,000千円 × 120 × 0.995037 = 358,213千円',
                                        '46歳：3,000千円 × 133 × 0.985185 = 393,089千円',
                                        '47歳：3,000千円 × 147 × 0.975431 = 430,165千円',
                                        '48歳：3,000千円 × 163 × 0.965773 = 472,263千円',
                                        '49歳：3,000千円 × 178 × 0.956211 = 510,617千円',
                                    ],
                                },
                                {
                                    type: 'text',
                                    value: '② 合計',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金現価の合計', '= 358,213 + 393,089 + 430,165 + 472,263 + 510,617', '= 2,164,347千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 2,164,347千円',
                                },
                            ],
                        },
                        // 問22
                        {
                            answer: '278,415,127千円',
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
                                    value: ['保険金額：300万円 = 3,000千円', '5年後（50歳）の生存数：97,539人', '5年の期末払現価率：0.951466'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期保険金の現価', '= 97,539 × 3,000 × 0.951466', '= 278,415,126.5千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 278,415,127千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問23
                        {
                            answer: '7,370,925千円',
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
                                    value: ['保険金額：300万円 = 3,000千円', '予定事業費：保険金1000円につき25円 = 25 ÷ 1000', '45歳の生存数：98,279人'],
                                },
                                {
                                    type: 'text',
                                    value: '① 1人あたりの予定事業費',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 3,000千円 ×（25 ÷ 1000）', '= 3,000 × 0.025', '= 75千円'],
                                },
                                {
                                    type: 'text',
                                    value: '② 予定事業費の現価（合計）',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['= 75千円 × 98,279人', '= 7,370,925千円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 7,370,925千円（千円未満四捨五入）',
                                },
                            ],
                        },
                        // 問24
                        {
                            answer: '599,310円',
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
                                    value: ['収支相当の原則：収入現価 = 支出現価', '各年齢の収入現価（期始払） = 生存数 × P × 期始払現価率', '支出現価 = 死亡保険金現価 + 満期保険金現価 + 予定事業費現価'],
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
                                        //改行用メモ
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
                                    value: ['死亡保険金の現価（問21）= 2,164,347千円', '満期保険金の現価（問22）= 278,415,127千円', '予定事業費の現価（問23）= 7,370,925千円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['支出現価', '= 2,164,347 + 278,415,127 + 7,370,925', '= 287,950,399千円 = 287,950,399,000円'],
                                },
                                {
                                    type: 'text',
                                    value: '③ 収支相当の原則より P を求める',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['収入現価 = 支出現価 より', '480,467P = 287,950,399,000円', 'P = 287,950,399,000円 ÷ 480,467', 'P = 599,313円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 599,310円（10円未満四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //21
                        'イ', //22
                        'ウ', //23
                        'イ', //24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金の財政方式"
                    :contents="[
                        'ワンタイム・ファンディング → ターミナル・ファンディング', //p155
                        '正しい',
                        '調整債務 → 後発債務', //p158
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業保険料の計算上配慮する点"
                    :contents="[
                        '正しい',
                        '保険料が異ならないことが公平 → 保険料が異なるのが公平', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約返戻金"
                    :contents="[
                        '正しい',
                        '告知義務違反により保険契約を解除する場合は支払いの対象外 → 支払いの対象', //p105
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約変更および契約転換制度"
                    :contents="[
                        '保険期間が元契約より延長される → 保険期間は短くなる', //p112
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者配当の意義と割当"
                    :contents="[
                        '正しい',
                        '保険料は通常の有配当保険より高くなる → 安くなる', //p129
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金の処分"
                    :contents="[
                        '正しい',
                        '正しい',
                        '当期未処分剰余金 → 繰越利益剰余金', //p124
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            questionTitle: '生命保険契約と年齢',
                            content: 'すべての生命保険会社は、「保険年齢方式」を適用している → 「保険年齢方式」を適用している会社と「満年齢方式」を適用している会社がある', //p15
                        }, //31
                        {
                            questionTitle: '死亡率',
                            content: '年齢別死亡率 → 補整後死亡率', //p7
                        }, //32
                        {
                            questionTitle: '保険料の計算原理',
                            content: '自然保険料 → 平準保険料', //p36
                        }, //33
                        {
                            questionTitle: '予定利率',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '純保険料式保険料積立金',
                            content: '将来法で計算した方が保険料積立金額は大きくなる → 両者の方法による保険料積立金額は一致する', //p72
                        }, //35
                        {
                            questionTitle: '責任準備金の積立',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '契約変更',
                            content: 'いずれの方法でも解約返戻金等は支払われることはない → 保険金額の減額では支払われることがある', //p111~
                        }, //37
                        {
                            questionTitle: '最低保証機能',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '団体定期保険の数理',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '特別勘定の位置付け',
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        { questionTitle: '資産の平均利回り', label: 'エ', content: '2' }, //41
                        { questionTitle: '保険計理の基礎', label: 'イ', content: '大数' }, //42
                        { questionTitle: '純保険料の変化', label: 'ア', content: '定期保険と養老保険' }, //43
                        { questionTitle: '準備金の積立根拠', label: 'オ', content: '' }, //44
                        { questionTitle: '純保険料の分解', label: 'ウ', content: '危険保険金' }, //45
                        { questionTitle: '積立に関する法的規制', label: 'オ', content: '' }, //46
                        { questionTitle: '払済保険', label: 'ア', content: '差し引いた後' }, //47
                        { questionTitle: '配当準備金繰入', label: 'ウ', content: '20%' }, //48
                        { questionTitle: '剰余金の発生源', label: 'エ', content: '価格変動' }, //49
                        { questionTitle: '配当金の計算方法', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="keiri2025a" next-route="keiri2025c" />
        </section>
    </SeihoTestLayout>
</template>
