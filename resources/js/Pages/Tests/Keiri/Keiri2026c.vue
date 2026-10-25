<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import QuestionTemp4 from "../../../Components/QuestionTemp4.vue";

import StudyTestPage from "@/Components/StudyTestPage.vue";
import { KEIRI_STUDY_CONFIG as studyConfig } from "@/constants/studyTests";

const props = defineProps({
    studyEnabled: { type: Boolean, default: false },
    initialStudyState: { type: Object, default: null },
});

const title = "生命保険計理";
const subject = "2026年度 フォームC";
const examKey = "keiri-2026-c";
const isDraft = false;
</script>

<template>
    <StudyTestPage
        :title="title"
        :subject="subject"
        :exam-key="examKey"
        :initial-study-state="props.initialStudyState"
        :study-enabled="props.studyEnabled"
        :question-count="studyConfig.questionCount"
        :max-score="studyConfig.maxScore"
        :score-sections="studyConfig.scoreSections"
        :preview-question-limit="3"
        :is-draft="isDraft"
        next-route="keiri2025a"
        #default="{ learningMode }"
    >
        <QuestionTemp4
            :questionNumber="1"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="[
                { label: 'ア', text: '1.26' },
                { label: 'イ', text: '1.51' },
                { label: 'ウ', text: '1.85' },
                { label: 'エ', text: '1.92' },
                { label: 'オ', text: '5,266' },
                { label: 'カ', text: '6,324' },
                { label: 'キ', text: '721,254' },
                { label: 'ク', text: '725,581' },
                { label: 'ケ', text: '1,761,115' },
                { label: 'コ', text: '1,780,487' },
            ]"
            :contents="[
                // 問１
                {
                    // rev: 2026-10-25 確認済み
                    answer: '6,324',
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
                            value: ['元金：700,000円', '月利：0.15％ = 0.0015', '運用期間：6か月'],
                        },
                        {
                            type: 'text',
                            value: '① 元利合計',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['= 700,000円 × (1 + 0.0015)<sup>6</sup>', '= 700,000円 × 1.00903381758', '= 706,323.672306円'],
                        },
                        {
                            type: 'text',
                            value: '② 利息',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['= 706,323.672306円 − 700,000円', '= 6,323.672306円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 6,324円（円未満四捨五入）',
                        },
                    ],
                },
                // 問２
                {
                    // rev: 2026-10-25 確認済み
                    answer: '725,581',
                    questionTitle: '複利計算（半年複利）',
                    explanation: [
                        {
                            type: 'blockTitle',
                            value: '■ 解答のポイント',
                        },
                        {
                            type: 'text',
                            value: '年利1.2％で半年複利の場合、半年ごとに0.6％ずつ増える。3年間では半年が6回あるため、半年利率で6回複利計算する。',
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
                            value: ['元金：700,000円', '年利：1.2％', '半年利率：= 1.2％ ÷ 2 = 0.6％ = 0.006', '複利回数：= 3年 × 年2回 = 6回'],
                        },
                        {
                            type: 'formulaBlock',
                            value: ['元利合計', '= 700,000円 × (1 + 0.006)<sup>6</sup>', '= 700,000円 × 1.03654433949', '= 725,581.037643円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 725,581円（円未満四捨五入）',
                        },
                    ],
                },
                // 問３
                {
                    // rev: 2026-10-25 確認済み
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
                            value: ['= 0.015 ÷ 6', '= 0.0025'],
                        },
                        {
                            type: 'text',
                            value: '② 実利率',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['= (1 + 0.0025)<sup>6</sup> − 1', '= 1.015094 − 1', '= 0.015094 = 1.5094％'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 1.51％（小数第3位を四捨五入）',
                        },
                    ],
                },
                // 問４
                {
                    // rev: 2026-10-25 確認済み
                    answer: '1.85',
                    questionTitle: '年平均利回り',
                    explanation: [
                        {
                            type: 'blockTitle',
                            value: '■ 解答のポイント',
                        },
                        {
                            type: 'text',
                            value: 'まず、4年間の複利でどれだけ増えたか（総利回り）を求める。その後、それを4年で平均したものが年平均利回り。',
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
                            value: ['複利利率：1.8％ = 0.018', '投資期間：4年'],
                        },
                        {
                            type: 'text',
                            value: '① 総利回り',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['= (1 + 0.018)<sup>4</sup> − 1', '= 1.07396743298 − 1', '= 0.07396743297'],
                        },
                        {
                            type: 'text',
                            value: '② 年平均利回り',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['= 0.07396743297 ÷ 4', '= 0.01849185824 = 1.849185824％'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 1.85％（小数第3位を四捨五入）',
                        },
                    ],
                },
                // 問５
                {
                    // rev: 2026-10-25 確認済み
                    answer: '1,780,487',
                    questionTitle: '必要資金（現在価値）',
                    explanation: [
                        {
                            type: 'blockTitle',
                            value: '■ 解答のポイント',
                        },
                        {
                            type: 'text',
                            value: '毎年始（期始）に60万円を3年間支払うので、各年の支払額をそれぞれ現在価値に割り引き、その合計を求める。',
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
                            value: ['毎年の支払額：600,000円（年始）', '期間：3年間', '年利率：1.1％ = 0.011'],
                        },
                        {
                            type: 'text',
                            value: '① 各年の支払額の現在価値',
                        },
                        {
                            type: 'formulaBlock',
                            value: [
                                // 改行用メモ
                                '(1 ÷ 1.011) = 0.98911968348 = 0.989120（小数第7位四捨五入）',
                                '(1 ÷ 1.011)<sup>2</sup> = 0.97835774825 = 0.978358（小数第7位四捨五入）',
                                '初年度：600,000円',
                                '1年後：600,000 × (1 ÷ 1.011) = 600,000 × 0.989120 = 593,472円',
                                '2年後：600,000 × (1 ÷ 1.011)<sup>2</sup> = 600,000 × 0.978358 = 587,014.8円',
                            ],
                        },
                        {
                            type: 'text',
                            value: '② 合計',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['現在価値の合計', '= 600,000 + 593,472 + 587,014.8', '= 1,780,486.8円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 1,780,487円（円未満四捨五入）',
                        },
                    ],
                },
            ]"
            :labels="[
                'カ', //1
                'ク', //2
                'イ', //3
                'ウ', //4
                'コ', //5
            ]"
        />
        <QuestionTemp4
            :questionNumber="6"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="[
                { label: 'ア', text: '18,680' },
                { label: 'イ', text: '18,780' },
                { label: 'ウ', text: '98,130' },
                { label: 'エ', text: '1,801,980' },
                { label: 'オ', text: '0.93' },
                { label: 'カ', text: '0.97483' },
                { label: 'キ', text: '97,865' },
                { label: 'ク', text: '0.97957' },
                { label: 'ケ', text: '1,810,967' },
                { label: 'コ', text: '1.28' },
            ]"
            :contents="[
                // 問６
                {
                    // rev: 2026-10-25 確認済み
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
                // 問７
                {
                    // rev: 2026-10-25 確認済み
                    answer: '98,130',
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
                            value: 'N年後の生存者数 = 基準年齢の人数 × 生存率',
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
                            value: ['基準年齢（45歳）の人数 × 生存率（45歳 → 55歳）', '= 100,000 × 96,441 ÷ 98,279 = 98,129.8141007'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 98,130（小数第1位を四捨五入）',
                        },
                    ],
                },
                // 問８
                {
                    // rev: 2026-10-25 確認済み
                    answer: '0.93',
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
                            value: ['110歳：10.1008 × 0.5 = 5.05', '111歳：3.4515 × 1.5 = 5.18', '112歳：1.0162 × 2.5 = 2.54', '113歳：0.3155 × 3.5 = 1.10'],
                        },
                        {
                            type: 'text',
                            value: '② 110歳～113歳の延べ生存年数の合計',
                        },
                        {
                            type: 'note',
                            value: '110歳以上の全員が、合計で何年分生きたかを合算する。',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['5.05 + 5.18 + 2.54 + 1.10 = 13.87'],
                        },
                        {
                            type: 'text',
                            value: '③ 110歳の平均余命',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['110歳～113歳の延べ生存年数の合計 ÷ 110歳の生存者数', '= 13.87 ÷ 14.884', '= 0.931'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 0.93（小数第3位を四捨五入）',
                        },
                    ],
                },
                // 問９
                {
                    // rev: 2026-10-25 確認済み
                    answer: '1,810,967',
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
                            value: ['保険金（700万円） × 死亡数（55歳）', '= 7,000千円 × 260人', '= 1,820,000千円'],
                        },
                        {
                            type: 'text',
                            value: '② 現価（年央払）',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['合計保険金額 × 期央払現価率（利率1.0%）', '= 1,820,000千円 × 0.995037', '= 1,810,967.34千円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え：1,810,967千円（千円未満四捨五入）',
                        },
                    ],
                },
                // 問10
                {
                    // rev: 2026-10-25 確認済み
                    answer: '18,780',
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
                            value: ['純保険料', '= 必要な現価（問９の解） ÷ 55歳の年始生存者数', '= 1,810,967千円 ÷ 96,441人', '= 18,777.9782458円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 18,780円（10円未満四捨五入）',
                        },
                    ],
                },
            ]"
            :labels="[
                'ク', //6
                'ウ', //7
                'オ', //8
                'ケ', //9
                'イ', //10
            ]"
        />
        <QuestionTemp3
            :questionNumber="3"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="[
                { label: 'ア', text: '支払方法' },
                { label: 'イ', text: '危険準備金' },
                { label: 'ウ', text: '前払保険料' },
                { label: 'エ', text: '4月1日から翌年3月31日' },
                { label: 'オ', text: '環境リスク' },
                { label: 'カ', text: '異常準備金' },
                { label: 'キ', text: '未経過保険料' },
                { label: 'ク', text: '1月1日から12月31日' },
                { label: 'ケ', text: '契約月' },
                { label: 'コ', text: '保険リスク' },
            ]"
            questionTitle="事業年度末責任準備金"
            :contents="[
                // rev: 2026-10-18 確認済み
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
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="[
                { label: 'ア', text: '危険保険料式' },
                { label: 'イ', text: '支払余力' },
                { label: 'ウ', text: '収益性' },
                { label: 'エ', text: '資本金' },
                { label: 'オ', text: '健全性' },
                { label: 'カ', text: '標準責任準備金' },
                { label: 'キ', text: '平準純保険料式' },
                { label: 'ク', text: 'フィールドテスト' },
                { label: 'ケ', text: '負債十分性テスト' },
                { label: 'コ', text: '法定責任準備金' },
            ]"
            questionTitle="責任準備金の積立に関する法的規制"
            :contents="[
                // rev: 2026-10-18 確認済み
                '平準純保険料式',
                '支払余力',
                '健全性',
                '標準責任準備金',
                '負債十分性テスト', //問16〜20
            ]"
            :labels="[
                'キ', //16
                'イ', //17
                'オ', //18
                'カ', //19
                'ケ', //20
            ]"
        />
        <QuestionTemp4
            :questionNumber="21"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptionsByQuestion="{
                21: [
                    { label: 'ア', text: '4,885,850千円' },
                    { label: 'イ', text: '4,901,350千円' },
                    { label: 'ウ', text: '4,908,000千円' },
                ],
                22: [
                    { label: 'ア', text: '1,331,821千円' },
                    { label: 'イ', text: '1,338,464千円' },
                    { label: 'ウ', text: '1,445,641千円' },
                ],
                23: [
                    { label: 'ア', text: '187,097,040千円' },
                    { label: 'イ', text: '187,466,056千円' },
                    { label: 'ウ', text: '188,030,208千円' },
                ],
                24: [
                    { label: 'ア', text: '501,640円' },
                    { label: 'イ', text: '502,890円' },
                    { label: 'ウ', text: '504,030円' },
                ],
            }"
            :contents="[
                // 問21
                {
                    // rev: 2026-10-25 確認済み
                    answer: '4,901,350千円',
                    questionTitle: '予定事業費の現価',
                    explanation: [
                        {
                            type: 'blockTitle',
                            value: '■ 解答のポイント',
                        },
                        {
                            type: 'text',
                            value: '予定事業費が「保険金1000円につき25円」と与えられているので、まず 1人あたりの予定事業費を求める。その後、加入時（47歳）の生存者数を掛けて、全体の予定事業費（現価）を求める。',
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
                            value: ['保険金額：200万円 = 2,000千円', '予定事業費：保険金1000円につき25円 = 25 ÷ 1000', '47歳の生存数：98,027人'],
                        },
                        {
                            type: 'text',
                            value: '① 1人あたりの予定事業費',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['= 2,000千円 ×（25 ÷ 1000）', '= 2,000 × 0.025', '= 50千円'],
                        },
                        {
                            type: 'text',
                            value: '② 予定事業費の現価（合計）',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['= 50千円 × 98,027人', '= 4,901,350千円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 4,901,350千円（千円未満四捨五入）',
                        },
                    ],
                },
                // 問22
                {
                    // rev: 2026-10-25 確認済み
                    answer: '1,331,821千円',
                    questionTitle: '死亡保険金の現価',
                    explanation: [
                        {
                            type: 'blockTitle',
                            value: '■ 解答のポイント',
                        },
                        {
                            type: 'text',
                            value: '保険期間（47〜50歳）の各年齢で死亡した場合、死亡保険金が支払われる。支払いは年央（期央）と仮定されるため、各年齢の「死亡保険金 × 死亡数」を期央払現価率で割り引き、現価を合計する。',
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
                            value: ['死亡保険金：200万円 = 2,000千円', '保険期間：4年（47〜50歳）', '支払い：年央（期央）と仮定'],
                        },
                        {
                            type: 'text',
                            value: '① 各年齢の死亡保険金現価',
                        },
                        {
                            type: 'formulaBlock',
                            value: [
                                //改行用メモ
                                '47歳：2,000千円 × 147 × 0.995037 = 292,541千円',
                                '48歳：2,000千円 × 163 × 0.985185 = 321,170千円',
                                '49歳：2,000千円 × 178 × 0.975431 = 347,253千円',
                                '50歳：2,000千円 × 192 × 0.965773 = 370,857千円',
                            ],
                        },
                        {
                            type: 'text',
                            value: '② 合計',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['死亡保険金現価の合計', '= 292,541 + 321,170 + 347,253 + 370,857', '= 1,331,821千円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 1,331,821千円',
                        },
                    ],
                },
                // 問23
                {
                    // rev: 2026-10-25 確認済み
                    answer: '187,097,040千円',
                    questionTitle: '満期保険金の現価',
                    explanation: [
                        {
                            type: 'blockTitle',
                            value: '■ 解答のポイント',
                        },
                        {
                            type: 'text',
                            value: '満期保険金は、保険期間満了時（4年後）に生存している人に支払われる。したがって、まず 4年後の生存者数 × 保険金額 で将来の支払総額を求め、それを 期末払現価率 で割り引いて現価を求める。',
                        },
                        {
                            type: 'blockTitle',
                            value: '■ 使用する公式',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['満期保険金の現価 = 4年後の生存者数 × 保険金額 × 期末払現価率（4年）'],
                        },
                        {
                            type: 'blockTitle',
                            value: '■ 計算方法',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['保険金額：200万円 = 2,000千円', '4年後（51歳）の生存数：97,347人', '4年の期末払現価率：0.960980'],
                        },
                        {
                            type: 'formulaBlock',
                            value: ['満期保険金の現価', '= 97,347 × 2,000 × 0.960980', '= 187,097,040.1千円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 187,097,040千円（千円未満四捨五入）',
                        },
                    ],
                },
                // 問24
                {
                    // rev: 2026-10-25 確認済み
                    answer: '501,640円',
                    questionTitle: '養老保険の年払営業保険料',
                    explanation: [
                        {
                            type: 'blockTitle',
                            value: '■ 解答のポイント',
                        },
                        {
                            type: 'text',
                            value: '年払営業保険料 P は、収支相等の原則（収入現価 = 支出現価）で求める。',
                        },
                        {
                            type: 'text',
                            value: '収入現価：各年齢で生存している人が払う保険料 P を、期始払として現価に直して合計する。',
                        },
                        {
                            type: 'text',
                            value: '支出現価：予定事業費・死亡保険金・満期保険金の現価を合計する（問21〜23の結果）。',
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
                            value: '① 収入現価（47〜50歳、期始払）',
                        },
                        {
                            type: 'formulaBlock',
                            value: [
                                //改行用メモ
                                '47歳：P × 98,027 × 1.000000 = 98,027P',
                                '48歳：P × 97,880 × 0.990099 = 96,911P',
                                '49歳：P × 97,717 × 0.980296 = 95,792P',
                                '50歳：P × 97,539 × 0.970590 = 94,670P',
                            ],
                        },
                        {
                            type: 'formulaBlock',
                            value: ['収入現価の合計', '= 98,027P + 96,911P + 95,792P + 94,670P', '= 385,400P'],
                        },
                        {
                            type: 'text',
                            value: '② 支出現価（問21〜23より）',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['予定事業費の現価（問21）= 4,901,350千円', '死亡保険金の現価（問22）= 1,331,821千円', '満期保険金の現価（問23）= 187,097,040千円'],
                        },
                        {
                            type: 'formulaBlock',
                            value: ['支出現価', '= 4,901,350 + 1,331,821 + 187,097,040', '= 193,330,211千円 = 193,330,211,000円'],
                        },
                        {
                            type: 'text',
                            value: '③ 収支相等の原則より P を求める',
                        },
                        {
                            type: 'formulaBlock',
                            value: ['385,400P = 193,330,211,000円', 'P = 193,330,211,000 ÷ 385,400', 'P = 501,635円'],
                        },
                        {
                            type: 'result',
                            value: '▶ 答え 501,640円（10円未満四捨五入）',
                        },
                    ],
                },
            ]"
            :labels="[
                'イ', //21
                'ア', //22
                'ア', //23
                'ア', //24
            ]"
        />
        <QuestionTemp1
            :questionNumber="25"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            correctAnswer="ア"
            questionTitle="契約者配当金の分配・支払方法"
            :contents="[
                // rev: 2026-10-25 確認済み
                '正しい',
                '契約応当日に始まる保険年度について、[[配当金を保険料払込回数に等分して、毎回の保険料に充当、相殺する]]。', //p135
                '月払契約で契約応当日の第１月目から[[第６月目]]までの保険料が払い込まれたときに、[[第７月目]]に配当金を現金で一括支払いする', //p135
            ]"
        />
        <QuestionTemp1
            :questionNumber="26"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            correctAnswer="ア"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="純保険料式保険料積立金"
            :contents="[
                // rev: 2026-10-25 確認済み
                '計算方法としては、[[将来法と過去法の２つの方法]]がある。', //p72
                '正しい',
                '正しい',
            ]"
        />
        <QuestionTemp1
            :questionNumber="27"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            correctAnswer="ア"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="営業保険料"
            :contents="[
                '', //p
                '正しい',
                '正しい',
            ]"
        />
        <QuestionTemp1
            :questionNumber="28"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            correctAnswer="イ"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="チルメル式保険料積立金"
            :contents="[
                '正しい',
                '', //p
                '正しい',
            ]"
        />
        <QuestionTemp1
            :questionNumber="29"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            correctAnswer="イ"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="変額保険の仕組み"
            :contents="[
                '正しい',
                '', //p
                '正しい',
            ]"
        />
        <QuestionTemp1
            :questionNumber="30"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            correctAnswer="ウ"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="契約変更"
            :contents="[
                '正しい',
                '正しい',
                '', //p
            ]"
        />
        <QuestionTemp2
            :questionNumber="31"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['誤', '誤', '誤', '誤', '正', '正', '誤', '誤', '正', '誤', 'オ', 'オ', 'ウ', 'ウ', 'ア', 'ア', 'イ', 'オ', 'エ', 'ア']"
            :choiceOptionsByQuestion="{
                41: [
                    { label: 'ア', text: 'A―単純' },
                    { label: 'イ', text: 'A―素' },
                    { label: 'ウ', text: 'B―平均' },
                    { label: 'エ', text: 'B―分類整理' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                42: [
                    { label: 'ア', text: 'A―簡易生命表' },
                    { label: 'イ', text: 'A―国民表' },
                    { label: 'ウ', text: 'B―選択表' },
                    { label: 'エ', text: 'B―会社表' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                43: [
                    { label: 'ア', text: 'A―付加保険料' },
                    { label: 'イ', text: 'A―定期保険料' },
                    { label: 'ウ', text: 'B―責任準備金' },
                    { label: 'エ', text: 'B―支払備金' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                44: [
                    { label: 'ア', text: 'A―終価' },
                    { label: 'イ', text: 'A―年平均利回り' },
                    { label: 'ウ', text: 'B―始期' },
                    { label: 'エ', text: 'B―末期' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                45: [
                    { label: 'ア', text: 'A―契約者貸付' },
                    { label: 'イ', text: 'A―保険期間' },
                    { label: 'ウ', text: 'B―会社が現実に決算で積み立てる方式の' },
                    { label: 'エ', text: 'B―営業保険料式' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                46: [
                    { label: 'ア', text: 'A―定款' },
                    { label: 'イ', text: 'A―保険料及び責任準備金の算出方法書' },
                    { label: 'ウ', text: 'B―30％' },
                    { label: 'エ', text: 'B―50％' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                47: [
                    { label: 'ア', text: 'A―繰越利益剰余金' },
                    { label: 'イ', text: 'A―保険年度末保険料積立金' },
                    { label: 'ウ', text: 'B―消滅時保険料積立金' },
                    { label: 'エ', text: 'B―年間保険料' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                48: [
                    { label: 'ア', text: 'A―既払込保険料総額' },
                    { label: 'イ', text: 'A―解約返戻金' },
                    { label: 'ウ', text: 'B―転換前' },
                    { label: 'エ', text: 'B―転換専用' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                49: [
                    { label: 'ア', text: 'A―運用実績非連動型' },
                    { label: 'イ', text: 'A―積立型' },
                    { label: 'ウ', text: 'B―が認められている' },
                    { label: 'エ', text: 'B―を禁止されている' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                50: [
                    { label: 'ア', text: 'A―事前積立' },
                    { label: 'イ', text: 'A―完全積立' },
                    { label: 'ウ', text: 'B―定期積立' },
                    { label: 'エ', text: 'B―完全賦課' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
            }"
            :items="[
                {
                    questionTitle: '複利',
                    content: '', //p
                }, //31
                {
                    questionTitle: '契約年齢',
                    content: '', //p
                }, //32
                {
                    questionTitle: '予定利率',
                    content: '', //p
                }, //33
                {
                    questionTitle: '計算基礎の変化と純保険料の変化',
                    content: '', //p
                }, //34
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '1年定期保険の純保険料',
                    content: '正しい',
                }, //35
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '決算による剰余金算定',
                    content: '正しい',
                }, //36
                {
                    questionTitle: '剰余金の発生源',
                    content: '', //p
                }, //37
                {
                    questionTitle: '最低保証機能',
                    content: '', //p
                }, //38
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '団体定期保険の配当',
                    content: '正しい',
                }, //39
                {
                    questionTitle: '運用リスクの帰属',
                    content: '', //p
                }, //40
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '死亡率',
                    label: 'オ',
                    content: '',
                }, //41
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '死亡表の種類',
                    label: 'オ',
                    content: '',
                }, //42
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '準備金の積立根拠',
                    label: 'ウ',
                    content: '責任準備金',
                }, //43
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '保険料の計算原理',
                    label: 'ウ',
                    content: '始期',
                }, //44
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '解約返戻金の算式',
                    label: 'ア',
                    content: '契約者貸付',
                }, //45
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '配当準備金繰入',
                    label: 'ア',
                    content: '定款',
                }, //46
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '配当金の計算方法',
                    label: 'イ',
                    content: '保険年度末保険料積立金',
                }, //47
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '契約転換制度',
                    label: 'オ',
                    content: '',
                }, //48
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '特別勘定の位置付け',
                    label: 'エ',
                    content: 'を禁止されている',
                }, //49
                {
                    // rev: 2026-10-18 確認済み
                    questionTitle: '団体年金制度の財政方式',
                    label: 'ア',
                    content: '事前積立',
                }, //50
            ]"
        />
    </StudyTestPage>
</template>
