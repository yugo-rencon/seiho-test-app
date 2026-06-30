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
const subject = "2021年度 フォームC";
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
                    :relatedProblems="[['2021a1', '2021b1', '2021c1']]"
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
                    questionTitle="現価と終価（6つの係数）（年金終価係数）"
                    :relatedProblems="[['2021a2', '2021b2', '2021c2']]"
                    :labels="['イ']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '8,746,920円',
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
                                    value: ['毎年の積立額：36万円', '年利率：2％', '積立期間：20年', '年金終価係数：24.297'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['元利合計金額', '＝ 36万円 × 24.297', '＝ 8,746,920円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：8,746,920円',
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
                    :relatedProblems="[['2021a3', '2021b3', '2021c3']]"
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
                    :relatedProblems="[['2021a4', '2021b4', '2021c4']]"
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
                    questionTitle="金利"
                    :relatedProblems="['2021c5']"
                    :contents="[
                        // rev: 2026-07-01 確認済み
                        '景気が良くなってお金の借り手が多くなりすぎると、金利が[[高く]]なり、[借りにくく]]なる。逆に、景気が低迷していると金利は[[下がり]]、[[借りやすく]]なる。', //p18
                        '長期プライム・レート → 新長期プライム・レート', //p19
                        '正しい',
                        '新長期プライム・レート → 長期プライム・レート', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :relatedProblems="['2021b7', '2021c6']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '風評リスク → 信用リスク', //p39
                        '無許可格付け → 勝手格付け', //p39
                        '格付けの高い債券ほど安全性は高いと判断されるため、一般に価格は高く利回りが[[低く]]なる。', //p40
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の課税関係"
                    :relatedProblems="['2021c7']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '源泉分離課税 → 申告分離課税', //p44
                        '償還差益、中途売却益ともに20％[[申告分離課税]]の対象であるが、所定の条件を満たした場合は償還時に[[20％源泉徴収]]される。', //p45
                        '５年間 → ３年間', //p45
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式の評価（投資指標）"
                    :relatedProblems="['2021c8']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '配当利回り → 配当性向', //p58
                        '配当性向 → 配当利回り', //p58
                        '正しい',
                        'ＲＯＥ（自己資本利益率）＝ [[税引後利益]] ÷ [[自己資本]] × 100', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="['2021b20', '2021c9']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '社会的責任 → 自己責任', //p72
                        '正しい',
                        'ケアマネージャー ファンドマネージャー', //p73
                        '専門家が運用する場合であっても、最終的にはそのファンドに組み入れられている株式等の有価証券の相場動向が、ファンドの収益性を大きく左右することから、[[必ずしも高い運用実績を得られるとは限らない]]点に注意が必要である。', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="ラップ口座（ラップ・アカウント）"
                    :relatedProblems="['2021a23', '2021c10']"
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
                    questionTitle="外貨建て金融商品の注意事項"
                    :relatedProblems="['2021c11']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '翌々営業日 → 翌営業日', //p111
                        'ドル建ての預金をユーロ等に振り替えるなど別の通貨に換える場合は、基本的にはいったん円に戻すことになるので、[[〔ドル→円→ユーロ〕と通貨変更のたびに為替手数料が必要になる]]。', //p111
                        '外貨預金は預金保険制度の対象[[外]]商品になる。', //p111
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険・証券等の保護"
                    :relatedProblems="['2021b23', '2021c12']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '生命保険契約者保護機構が[[救済する側の生命保険会社]]に資金援助を行い、破綻保険会社の保険契約を健全な生命保険会社へ円滑に移転する。', //p129
                        '正しい',
                        '区分経理 → 分割管理', //p129
                        '3,000万円 → 1,000万円', //p129
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の利払型商品と満期一括受取型商品"
                    :relatedProblems="['2021c13']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '預入期間、３年以上のスーパー定期（半年複利型）では、[[個人に限って]]満期一括受取型を選択できる。', //p6
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="預貯金の仕組み"
                    :relatedProblems="['2021c14']"
                    :contents="[
                        // rev: 2026-07-01 確認済み
                        '正しい',
                        '正しい',
                        '直接金融 → 間接金融', //p26
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の売買"
                    :relatedProblems="['2021a6', '2021c15']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '手数料を支払わないので[[消費税も課されない]]。', //p42
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の取引所市場"
                    :relatedProblems="['2021a16', '2021b16', '2021c16']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '上場される債券は、２年・５年の中期国債、10年の長期国債、[[20年・30年・40年の超長期国債]]で、発行日に上場されて取引所で売買できるようになる。', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式累積投資（るいとう）"
                    :relatedProblems="['2021c17']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="国債"
                    :relatedProblems="['2021a18', '2021b18', '2021c18']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '購入単位は、[[５万円以上５万円単位]]で、個人でも購入できる。', //p50
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額投資非課税制度（NISA）の概要"
                    :relatedProblems="['2021a19', '2021b19', '2021c19']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債のパリティ（理論価格）"
                    :relatedProblems="['2021c20']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の費用"
                    :relatedProblems="['2021a21', '2021b21', '2021c21']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '信託報酬の内容は、投資信託委託会社（運用会社）が受け取る「[[運用報酬]]」と販売会社が受け取る「代行手数料」と信託銀行が受け取る「[[受託者報酬]]」の３つがある。', //p83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨預金"
                    :relatedProblems="['2021b48', '2021c22']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '種類は、[[普通預金、当座預金、通知預金、定期預金]]などがあり、円で行う預金と基本的な仕組みは変わらない。', //p112
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
                    :relatedProblems="['2021a12', '2021c23']"
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
                    questionTitle="住宅取得資金に関する税法等"
                    :relatedProblems="['2021c24']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="債券の特徴"
                    :relatedProblems="['2021b15', '2021c25']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '借りたい',
                        '取引所以外の市場',
                        '国債',
                        '額面',
                        '長い', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'オ', //26
                        'エ', //27
                        'ウ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="ドルコスト平均法"
                    :relatedProblems="['2021c30']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '時間分散',
                        '金額',
                        '平均購入単価',
                        'サービス',
                        '純金積立', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'イ', //31
                        'ク', //32
                        'オ', //33
                        'キ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="確定拠出年金の運用商品等"
                    :relatedProblems="['2021a35', '2021b35', '2021c35']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '取扱金融機関',
                        '加入者',
                        '確保',
                        '35',
                        '資金配分', // 問35〜39
                    ]"
                    :labels="[
                        'カ', //35
                        'ケ', //36
                        'エ', //37
                        'イ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '金融市場',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '', //p
                        }, //40
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '物価指標',
                            relatedProblems: ['2021c41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '債券の発行条件',
                            relatedProblems: ['2021b6', '2021c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '株式ミニ投資（ミニ株）',
                            relatedProblems: ['2021a43', '2021b43', '2021c43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '株式の損益通算',
                            relatedProblems: ['2021c44'],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-30 確認済み
                            questionTitle: '投資信託の基準価額',
                            relatedProblems: ['2021c45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '上場投資信託',
                            relatedProblems: ['2021a46', '2021b46', '2021c46'],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '外国投資信託の仕組み',
                            relatedProblems: ['2021c47'],
                            content: '日本で販売される外国投資信託は、投資対象や運用制限において、[[ほぼ国内の投資信託と差異はない]]。', //p119
                        }, //47
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '金融機関のリスクヘッジ',
                            relatedProblems: ['2021c48'],
                            content: 'ペイオフ → ワンストップショッピング', //p130
                        }, //48
                        {
                            questionTitle: 'リバースモーゲージ制度',
                            relatedProblems: ['2021a49', '2021b49', '2021c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
