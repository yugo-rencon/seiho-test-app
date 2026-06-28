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
const subject = "2023年度 フォームB";
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
                    :relatedProblems="[['2023a1', '2023b1', '2023c1']]"
                    :labels="['ア']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '1,486,000円',
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
                                    value: ['将来受け取る金額：200万円', '年利率：2％', '運用期間：15年', '現価係数：0.7430'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在必要な元本金額', '＝ 200万円 × 0.7430', '＝ 1,486,000円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：1,486,000円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="現値と終値（6つの係数）"
                    :relatedProblems="['2023a2', '2023b2', '2023c2']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（年金終価係数）"
                    :relatedProblems="[['2023a3', '2023b3', '2023c3']]"
                    :labels="['イ']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '2,429,700円',
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
                                    value: ['毎年の積立額：10万円', '年利率：2％', '積立期間：20年', '年金終価係数：24.297'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計金額', '＝ 10万円 × 24.297', '＝ 2,429,700円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：2,429,700円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（資本回収係数）"
                    :relatedProblems="[['2023a4', '2023b4', '2023c4']]"
                    :labels="['イ']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '1,834,800円',
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
                                    value: ['借入金額：3,000万円', '年利率：2％', '返済期間：20年', '資本回収係数：0.06116'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の返済額', '＝ 3,000万円 × 0.06116', '＝ 1,834,800円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：1,834,800円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利"
                    :relatedProblems="['2023b5']"
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
                    questionTitle="債券の発行条件"
                    :relatedProblems="['2023a17', '2023b6', '2023c17']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の課税関係"
                    :relatedProblems="['2023b7', '2023c7']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '利付債の利息に対する課税は、特定公社債等の利息等については20％[[申告分離課税]]の対象となるが、源泉徴収されたものは申告不要も選択できる。また、一般公社債等の利息等については20％[[源泉分離課税]]の対象であるが、同族会社が発行した社債の利息でその同族会社の株主等が支払いを受けるものは、総合課税の対象となる。', //p44
                        '源泉分離課税 → 申告分離課税', //p44
                        '正しい',
                        '５年間 → ３年間', //p45
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式の評価（投資指標）"
                    :relatedProblems="['2023b8']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '配当利回り → 配当性向', //p58
                        '配当性向 → 配当利回り', //p58
                        'ＰＥＲ（株価収益率） → １株当たり利益（ＥＰＳ）', //p58
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の分類"
                    :relatedProblems="['2023b9']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '投資信託は、[[株式を組み入れて運用]]することが可能な「株式投資信託」と、[[株式は一切組み入れず、国債や社債などの公社債だけ]]を組み入れて運用する「公社債投資信託」とに大きく分けられる。', //p79
                        '正しい',
                        '新規購入や追加購入および換金は、[[時価に基づいて自由に行うことができる]]。', //p79
                        '単位型（ユニット型） → 追加型（オープン型）', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="ラップ口座（ラップ・アカウント）"
                    :relatedProblems="['2023a24', '2023b10']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '投信型 → 投資顧問型', //p102
                        '投資顧問型 → 投信型', //p102
                        '長期運用 → 短期売買', //p103
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国投資信託"
                    :relatedProblems="['2023a10', '2023b11']"
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
                    questionTitle="不動産活用"
                    :relatedProblems="['2023b12']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '不動産所得とは、不動産、不動産のうえに存する権利、船舶または航空機の貸付けによる所得（事業所得、[[譲渡所得に該当するものを除く]]）のことである。', //p133
                        '不動産所得 ＝ [[総収入金額 − 必要経費]]', //p133
                        '正しい',
                        '賃貸不動産にかかる固定資産税・都市計画税、不動産取得税等は[[必要経費に該当する]]。', //p134
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の中途換金の取り扱い"
                    :relatedProblems="['2023b13']"
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
                    :relatedProblems="['2023b14']"
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
                    questionTitle="財形制度"
                    :relatedProblems="['2023a15', '2023b15', '2023c15']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の特徴"
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
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
                    questionTitle="債券の種類"
                    :relatedProblems="['2023b17', '2023c42']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '事業債 → 民間債', //p35
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の売買"
                    :relatedProblems="['2023a6', '2023b18', '2023c18']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '手数料を支払わないので[[消費税も課されない]]。', //p42
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="国債"
                    :relatedProblems="['2023a19', '2023b19', '2023c19']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '購入単位は、[[５万円以上５万円単位]]で、個人でも購入できる。', //p50
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="相場指標"
                    :relatedProblems="['2023b20']"
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
                    questionTitle="株式にかかる税金"
                    :relatedProblems="['2023b21']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '非上場株式等の配当金に対する源泉徴収税率は、[[20％]]（所得税のみ）となっている。', //p61
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の費用"
                    :relatedProblems="['2023b22']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '信託報酬の内容は、投資信託委託会社（運用会社）が受け取る「[[運用報酬]]」と販売会社が受け取る「代行手数料」と信託銀行が受け取る「[[受託者報酬]]」の３つがある。', //p83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）"
                    :relatedProblems="['2023a23', '2023b23', '2023c23']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '現在は[[無担保債]]が主流である。', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨預金"
                    :relatedProblems="['2023a48', '2023b24']"
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
                    questionTitle="ドルコスト平均法"
                    :relatedProblems="['2023b25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'イ', //26
                        'ク', //27
                        'オ', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="上場投資信託（ETF）"
                    :relatedProblems="['2023b30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'ケ', //31
                        'オ', //32
                        'ア', //33
                        'エ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="居住用財産の譲渡所得の特別控除"
                    :relatedProblems="['2023a35', '2023b35', '2023c35']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'コ', //35
                        'ア', //36
                        'ウ', //37
                        'ク', //38
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
                            relatedProblems: ['2023b40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2023a41', '2023b41', '2023c41'],
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '国債の種類',
                            relatedProblems: ['2023b42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '金利変動リスク',
                            relatedProblems: ['2023a43', '2023b43', '2023c43'],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '上場株式等の売却損の繰越し',
                            relatedProblems: ['2023a44', '2023b44', '2023c44'],
                            content: '', //p
                        }, //44
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '単元未満株投資（株式ミニ投資）',
                            relatedProblems: ['2023a21', '2023b45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '投資信託の信用リスク',
                            relatedProblems: ['2023b46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '投資信託の基準価額',
                            relatedProblems: ['2023a47', '2023b47', '2023c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-28 確認済み
                            questionTitle: '外貨建て金融商品の注意事項',
                            relatedProblems: ['2023b48', '2023c11'],
                            content: '預けたお金を外貨のまま現金（キャッシュ）で引き出すことは可能だが、[[手数料がかかる]]（手数料は金融機関により異なる）。', //p111
                        }, //48
                        {
                            questionTitle: '金融機関のリスクヘッジ',
                            relatedProblems: ['2023b49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2023a" next-route="daigaku.sisan2023c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
