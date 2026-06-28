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
const subject = "2025年度 フォームA";
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
                                    value: ['借入金額：1,000万円', '年利率：2％', '返済期間：15年', '資本回収係数：0.07783'],
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
                    questionTitle="日本の金融市場"
                    :relatedProblems="['2025a5']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '5年未満 → 1年未満', //p22
                        'インターバンク市場では、金融機関同士でごく短期間の資金の過不足を補うために、[[コール市場]]と[[手形市場]]などで資金のやり取りが行われる。', //p23
                        '正しい',
                        '既発 → 新発', //p23
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の売買"
                    :relatedProblems="['2025a6', '2025c17']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '中期利付国債、長期利付国債の額面金額は[[５万円]]、個人向け国債の額面金額は[[１万円]]である。', //p42
                        '委託手数料には[[別途消費税も課される]]。', //p42
                        '正しい',
                        '利払日と利払日の間に売買が行われたときには、[[購入した人が売却した人]]に対して、前回利払日の翌日から売買の受渡し日までの日数に見合う利息相当分を「経過利息」として支払う必要がある。', //p43
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の課税関係"
                    :relatedProblems="['2025a7', '2025c7']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '利付債の利息に対する課税は、特定公社債等の利息等については20％[[申告分離課税]]の対象となるが、源泉徴収されたものは申告不要も選択できる。また、一般公社債等の利息等については20％[[源泉分離課税]]の対象であるが、同族会社が発行した社債の利息でその同族会社の株主等が支払いを受けるものは、総合課税の対象となる。', //p44
                        '源泉分離課税 → 申告分離課税', //p44
                        '５年間 → ３年間', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式の評価（投資指標）"
                    :relatedProblems="['2025a8', '2025c8']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の分類"
                    :relatedProblems="['2025a9']"
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
                    questionTitle="外貨建て金融商品の注意事項"
                    :relatedProblems="['2025a10', '2025c11']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国債券"
                    :relatedProblems="['2025a11', '2025b22', '2025c12']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="預金保険制度"
                    :relatedProblems="['2025a12', '2025b23', '2025c23']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の基礎知識"
                    :relatedProblems="['2025a13']"
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
                    questionTitle="債券の種類"
                    :relatedProblems="['2025a15', '2025b42']"
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
                    questionTitle="単元未満株投資（株式ミニ投資）"
                    :relatedProblems="['2025a20', '2025b44', '2025c43']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の費用"
                    :relatedProblems="['2025a21']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）"
                    :relatedProblems="['2025a22', '2025c21']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
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
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産活用"
                    :relatedProblems="['2025a24', '2025b12']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="株式相場指標"
                    :relatedProblems="['2025a25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'キ', //25
                        'オ', //26
                        'ケ', //27
                        'エ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="確定拠出年金の運用商品等"
                    :relatedProblems="['2025a30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //30
                        'エ', //31
                        'イ', //32
                        'キ', //33
                        'カ', //34
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
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '債券の発行条件',
                            relatedProblems: ['2025a42', '2025c15'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '株式の基礎',
                            relatedProblems: ['2025a43', '2025b8'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '投資信託の積立購入サービス',
                            relatedProblems: ['2025a44'],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '投資信託のリスク',
                            relatedProblems: ['2025a45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '外貨預金',
                            relatedProblems: ['2025a46', '2025c22'],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '外国投資信託の仕組み',
                            relatedProblems: ['2025a47', '2025c47'],
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

            <TestNavigationButtons next-route="daigaku.sisan2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
