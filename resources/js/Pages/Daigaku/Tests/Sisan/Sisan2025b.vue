<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産運用知識";
const subject = "2025年度 フォームB";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp4
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（現価係数）"
                    :relatedProblems="[['2025a1', '2025b1', '2025c1']]"
                    :labels="['ア']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '2,229,000円',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '将来の金額から現在必要な元本金額を求める場合は、現価係数を用いる。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在必要な元本金額 ＝ 将来受け取る金額 × 現価係数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '将来受け取る金額：300万円',
                                        '年利率：2％',
                                        '運用期間：15年',
                                        '現価係数：0.7430',
                                    ],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在必要な元本金額', '＝ 300万円 × 0.7430', '＝ 2,229,000円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：2,229,000円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（年金終価係数）"
                    :relatedProblems="[['2025a2', '2025b2', '2025c2']]"
                    :labels="['イ']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '4,859,400円',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '毎年一定額を積み立てた場合の将来の元利合計金額は、年金終価係数を用いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計金額 ＝ 毎年の積立額 × 年金終価係数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '毎年の積立額：20万円',
                                        '年利率：2％',
                                        '積立期間：20年',
                                        '年金終価係数：24.297',
                                    ],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計金額', '＝ 20万円 × 24.297', '＝ 4,859,400円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：4,859,400円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（資本回収係数）"
                    :relatedProblems="[['2025a3', '2025b3', '2025c3']]"
                    :labels="['ア']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '778,300円',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '借入金を毎年一定額で返済する場合の年間返済額は、資本回収係数を用いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の返済額 ＝ 借入金額 × 資本回収係数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '借入金額：1,000万円',
                                        '年利率：2％',
                                        '返済期間：15年',
                                        '資本回収係数：0.07783',
                                    ],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の返済額', '＝ 1,000万円 × 0.07783', '＝ 778,300円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：778,300円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（年金現価係数）"
                    :relatedProblems="[['2025a4', '2025b4', '2025c4']]"
                    :labels="['イ']"
                    :contents="[
                        {
                            // rev: 2026-06-28 作成
                            answer: '32,702,000円',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '毎年一定額の年金を受け取るために必要な年金原資は、年金現価係数を用いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['年金原資 ＝ 毎年の年金額 × 年金現価係数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の年金額：200万円', '年利率：2％', '受取期間：20年', '年金現価係数：16.351'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['年金原資', '＝ 200万円 × 16.351', '＝ 32,702,000円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：32,702,000円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形年金貯蓄の利用上の注意点"
                    :relatedProblems="['2025b5', '2025c5']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の所有形態別利回り区分"
                    :relatedProblems="['2025b6']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :relatedProblems="['2025b7', '2025c6']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式の基礎"
                    :relatedProblems="['2025a43', '2025b8']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の運用選択としての投資信託"
                    :relatedProblems="['2025b9', '2025c20']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）の諸条件"
                    :relatedProblems="['2025b10']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国投資信託"
                    :relatedProblems="['2025b11']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産活用"
                    :relatedProblems="['2025a24', '2025b12']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の利払型商品と満期一括受取型商品"
                    :relatedProblems="['2025b13', '2025c13']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="預貯金の特徴"
                    :relatedProblems="['2025a14', '2025b14', '2025c14']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '振替口座 → 総合口座', //p25
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の特徴"
                    :relatedProblems="['2025b15']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の取引所市場"
                    :relatedProblems="['2025a16', '2025b16', '2025c16']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="市場金利と債券価格の相関関係"
                    :relatedProblems="['2025a17', '2025b17']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="国債"
                    :relatedProblems="['2025a18', '2025b18', '2025c18']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式にかかる税金"
                    :relatedProblems="['2025a19', '2025b19', '2025c19']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="['2025b20', '2025c9']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="ラップ口座（ラップ・アカウント）"
                    :relatedProblems="['2025a23', '2025b21']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国債券"
                    :relatedProblems="['2025a11', '2025b22', '2025c12']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        'サムライ債とは、日本国外の発行体が[[日本国内]]で発行する円建て外債のことである。', //p122
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="預金保険制度"
                    :relatedProblems="['2025a12', '2025b23', '2025c23']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '預金保険制度による預金保護の範囲は、原則として１金融機関ごとに１預金者当たり対象預金等の[[元本1,000万円までとその利息等]]となる。', //p127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融機関の選択"
                    :relatedProblems="['2025b24', '2025c24']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="経済指標"
                    :relatedProblems="['2025b25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'キ', //25
                        'カ', //26
                        'ク', //27
                        'ア', //28
                        'イ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="上場投資信託（ETF）"
                    :relatedProblems="['2025b30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'エ', //31
                        'オ', //32
                        'ケ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="居住用財産の譲渡所得の特別控除"
                    :relatedProblems="['2025a35', '2025b35', '2025c35']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'カ', //35
                        'ア', //36
                        'ク', //37
                        'キ', //38
                        'ケ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '物価指標',
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2025a41', '2025b41', '2025c41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '債券の種類',
                            relatedProblems: ['2025a15', '2025b42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '配当性向',
                            relatedProblems: ['2025b43'],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '単元未満株投資（株式ミニ投資）',
                            relatedProblems: ['2025a20', '2025b44', '2025c43'],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '投資信託の運用スタイル',
                            relatedProblems: ['2025b45', '2025c44'],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '投資信託の信託報酬',
                            relatedProblems: ['2025b46', '2025c45'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '円高・円安',
                            relatedProblems: ['2025b47', '2025c46'],
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '日本投資者保護基金',
                            relatedProblems: ['2025a48', '2025b48', '2025c48'],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '不動産活用・等価交換方式',
                            relatedProblems: ['2025a49', '2025b49', '2025c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2025a" next-route="daigaku.sisan2025c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
