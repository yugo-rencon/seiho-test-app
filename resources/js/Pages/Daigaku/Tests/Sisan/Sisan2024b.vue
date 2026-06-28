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
const subject = "2024年度 フォームB";
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
                    questionTitle="現価と終価（6つの係数）（終価係数）"
                    :relatedProblems="[['2024a1', '2024b1', '2024c1']]"
                    :labels="['エ']"
                    :contents="[
                        {
                            // rev: 2026-06-28 作成
                            answer: '1,219,000円',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '現在の金額を一定期間複利運用したときの将来の元利合計金額は、終価係数を用いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計金額 ＝ 現在の金額 × 終価係数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在の金額：100万円', '年利率：2％', '運用期間：10年', '終価係数：1.219'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計金額', '＝ 100万円 × 1.219', '＝ 1,219,000円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：1,219,000円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（現価係数）"
                    :relatedProblems="[['2024a2', '2024b2', '2024c2']]"
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
                                    value: ['将来受け取る金額：300万円', '年利率：2％', '運用期間：15年', '現価係数：0.7430'],
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
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（減債基金係数）"
                    :relatedProblems="[['2024a3', '2024b3', '2024c3']]"
                    :labels="['エ']"
                    :contents="[
                        {
                            // rev: 2026-06-28 作成
                            answer: '365,320円',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '将来の目標額を貯めるために必要な毎年の積立額は、減債基金係数を用いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の積立額 ＝ 将来の目標額 × 減債基金係数'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: [
                                        '将来の目標額：400万円',
                                        '年利率：2％',
                                        '運用期間：10年',
                                        '減債基金係数：0.09133',
                                    ],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の積立額', '＝ 400万円 × 0.09133', '＝ 365,320円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：365,320円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（年金終価係数）"
                    :relatedProblems="[['2024a4', '2024b4', '2024c4']]"
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
                                    value: ['毎年の積立額：20万円', '年利率：2％', '積立期間：20年', '年金終価係数：24.297'],
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
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の課税関係"
                    :relatedProblems="['2024a18', '2024b5']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '利付債の利息に対する課税は、特定公社債等の利息等については20％[[申告分離課税]]の対象となるが、源泉徴収されたものは申告不要も選択できる。また、一般公社債等の利息等については20％[[源泉分離課税]]の対象であるが、同族会社が発行した社債の利息でその同族会社の株主等が支払いを受けるものは、総合課税の対象となる。', //p44
                        '源泉分離課税 → 申告分離課税', //p44
                        '正しい',
                        '10年間 → ３年間', //p45
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式の評価（投資指標）"
                    :relatedProblems="['2024a8', '2024b6', '2024c21']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '配当利回り → 配当性向', //p58
                        '配当性向 → 配当利回り', //p58
                        '正しい',
                        'ＲＯＥ（自己資本利益率） → ＰＢＲ（株価純資産倍率）', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="['2024a15', '2024b7']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="['2024a22', '2024b8', '2024c7']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="その他の金融商品"
                    :relatedProblems="['2024b9', '2024c9']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建て金融商品の注意事項"
                    :relatedProblems="['2024a46', '2024b10']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '預けたお金を外貨のまま現金（キャッシュ）で引き出すことは可能だが、[[手数料がかかる]]（手数料は金融機関により異なる）。', //p111
                        '正しい',
                        'ドル建ての預金をユーロ等に振り替えるなど別の通貨に換える場合は、基本的にはいったん円に戻すことになるので、[[〔ドル→円→ユーロ〕と通貨変更のたびに為替手数料が必要になる]]。', //p111
                        '外貨預金は預金保険制度の対象[[外]]商品になる。', //p111
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国債券"
                    :relatedProblems="['2024a11', '2024b11', '2024c11']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        'ショーグン債 → サムライ債', //p122
                        'サムライ債 → ショーグン債', //p122
                        '源泉分離課税 → 申告分離課税', //p123
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険・証券等の保護"
                    :relatedProblems="['2024b12']"
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
                    :relatedProblems="['2024b13']"
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
                    questionTitle="金融商品の中途換金の取り扱い"
                    :relatedProblems="['2024a14', '2024b14', '2024c14']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="景気・経済の動向"
                    :relatedProblems="['2024b15', '2024c15']"
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
                    questionTitle="債券の種類"
                    :relatedProblems="['2024a16', '2024b16', '2024c16']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '縁故債 ↔︎ 公募債', //p37
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の発行条件"
                    :relatedProblems="['2024a17', '2024b17', '2024c17']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :relatedProblems="['2024b18']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式の基礎"
                    :relatedProblems="['2024a43', '2024b19', '2024c6']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="国債"
                    :relatedProblems="['2024a20', '2024b20', '2024c20']"
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
                    questionTitle="相場指標"
                    :relatedProblems="['2024a7', '2024b21']"
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
                    questionTitle="確定拠出年金の運用選択としての投資信託"
                    :relatedProblems="['2024b22', '2024c8']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）"
                    :relatedProblems="['2024b23']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融機関の選択"
                    :relatedProblems="['2024a24', '2024b24', '2024c24']"
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
                    questionTitle="債券の特徴"
                    :relatedProblems="['2024b25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'カ', //26
                        'コ', //27
                        'オ', //28
                        'イ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="ドルコスト平均法"
                    :relatedProblems="['2024a30', '2024b30', '2024c30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'ケ', //30
                        'ク', //31
                        'イ', //32
                        'エ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="居住用財産の譲渡所得の特別控除"
                    :relatedProblems="['2024b35']"
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
                            // rev: 2026-06-28 確認済み
                            questionTitle: '日本の金融市場',
                            relatedProblems: ['2024b40', '2024c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2024a41', '2024b41', '2024c41'],
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '債券の店頭市場',
                            relatedProblems: ['2024a42', '2024b42', '2024c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '配当金に対する課税',
                            relatedProblems: ['2024b43', '2024c43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '投資信託の信託報酬',
                            relatedProblems: ['2024b44'],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '円高・円安',
                            relatedProblems: ['2024a45', '2024b45', '2024c45'],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '不動産投資信託（J-REIT「リート」）',
                            relatedProblems: ['2024b46'],
                            content: '', //p
                        }, //46
                        {
                            // rev: 2026-06-28 確認済み
                            questionTitle: '預金保険制度',
                            relatedProblems: ['2024b47', '2024c12'],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '外貨預金',
                            relatedProblems: ['2024a47', '2024b48', '2024c23'],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '不動産活用・土地信託方式',
                            relatedProblems: ['2024a49', '2024b49', '2024c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2024a" next-route="daigaku.sisan2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
