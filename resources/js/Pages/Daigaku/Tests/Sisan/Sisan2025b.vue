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
                        // rev: 2026-06-29 確認済み
                        '貯蓄型 → 保険型', //p29
                        '保険型 → 貯蓄型', //p29
                        '正しい',
                        '550万円 → 385万円', //p30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の所有形態別利回り区分"
                    :relatedProblems="['2025b6']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '最終利回り → 応募者利回り', //p46
                        '応募者利回り → 最終利回り', //p46
                        '最終利回り → 所有期間利回り', //p46
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :relatedProblems="['2025b7', '2025c6']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        'デフォルトリスクを中心に[[信用リスク]]の大きさをいくつかの段階に分けて、元利金の支払いの確実性（安全性）の度合いを第三者である格付け機関が判断し、それを[[簡単な記号]]で表示したもの。', //p39
                        '勝手格付けとよばれる[[発行会社からの依頼に基づかないものもある]]。', //p39
                        '格付けの高い債券ほど安全性は高いと判断されるため、一般に価格は高く利回りが[[低く]]なる。', //p40
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
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '価格優先とは、売り注文は最も[[低い]]価格の注文を、買い注文は最も[[高い]]価格の注文を優先させることをいう。', //p53
                        '[[「指し値注文」より「成り行き注文」を優先]]させることである。', //p53
                        '７営業日目 → ３営業日目', //p55
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の運用選択としての投資信託"
                    :relatedProblems="['2025b9', '2025c20']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '法律上用意すべき金融商品は原則[[3本以上35本以下]]で、一般的には数本〜十数本用意される。', //p93
                        '正しい',
                        '企業による継続的な投資教育は[[欠かすことはできない]]。', //p94
                        '一般に販売されている投資信託で、購入時に販売手数料がかかるものであっても、確定拠出年金で購入する際には、[[原則販売手数料はかからない]]。また、信託期間が無期限で、[[信託財産留保額の徴収がない]]商品が多い。', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）の諸条件"
                    :relatedProblems="['2025a22', '2025b10', '2025c21']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '新発債購入時および償還時に[[手数料はかからない]]。', //p96
                        '現在は[[無担保債]]が主流である。', //p96
                        '転換価格を下回れば → 転換価格を上回れば', //p97
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
                        // rev: 2026-06-29 確認済み
                        '運用会社としては、[[日本で投資信託委託会社として登録をしていない国外の投資顧問会社を運用会社とする]]ことも可能である。', //p119
                        '会社型 ↔︎ 契約型', //p119
                        '正しい',
                        '外貨建てMMFは、一般に外貨定期預金より為替手数料は[[低く]]設定されており、[[据置期間がない]]ので為替差益を目的に短期で換金することも[[可能]]である。', //p121
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産活用"
                    :relatedProblems="['2025a24', '2025b12']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '不動産所得とは、不動産、不動産のうえに存する権利、船舶または航空機の貸付けによる所得（事業所得、[[譲渡所得に該当するものを除く]]）のことである。', //p133
                        '正しい',
                        '全額返還を要するものは預かり金なので、[[収入金額には計上しない]]。', //p134
                        '賃貸不動産にかかる固定資産税・都市計画税、不動産取得税等は[[必要経費に該当する]]。', //p134
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の利払型商品と満期一括受取型商品"
                    :relatedProblems="['2025b13', '2025c13']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '預入期間、３年以上のスーパー定期（半年複利型）では、[[個人に限って]]満期一括受取型を選択できる。', //p6
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
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '中途売却する場合の債券は、株式などと同様に価格変動する商品であり、特に満期償還時までの残りの期間が[[長い]]債券ほど、金利変動によって価格の動きが大きくなるので注意が必要である。', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の取引所市場"
                    :relatedProblems="['2025a16', '2025b16', '2025c16']"
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
                    questionTitle="市場金利と債券価格の相関関係"
                    :relatedProblems="['2025a17', '2025b17']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '国内物価が下落している場合、一般的に市場金利は[[低下]]し、債券価格は[[上昇]]する。', //p48
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
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '個人向け国債には、「[[変動]]10年タイプ」と「[[固定]]５年タイプ」「[[固定]]３年タイプ」がある。', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式にかかる税金"
                    :relatedProblems="['2025a19', '2025b19', '2025c19']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '非上場株式等の配当金に対する源泉徴収税率は、[[20％]]（所得税のみ）となっている。', //p61
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
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '投資信託は、１人の個人投資家の「[[小口購入]]」した資金を集めることによって、機関投資家（生命保険会社等）と同じ「[[分散投資]]」の効果を得ることができる。', //p73
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
                        // rev: 2026-06-29 確認済み
                        'ラップ口座は、一般的な有価証券の売買のように、[[そのつど売買委託手数料等がかかるのではなく]]、資産の残高に応じて一定割合の手数料を定期的に支払う。', //p102
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
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '金融資産が１金融機関に集中することは、一方では金融機関の破綻など万一の際のリスクも[[高く]]なる。そのような観点から、リスクヘッジするために取引する金融機関を[[複数]]にしておくことは基本的な選択といえる。', //p130
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
                        // rev: 2026-06-29 確認済み
                        '四半期',
                        '内閣府',
                        '国内総生産（ＧＤＰ）',
                        '経済成長率',
                        '民間最終消費支出', // 問25〜29
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
                        // rev: 2026-06-29 確認済み
                        'を問わず',
                        '3,000',
                        '譲渡費用',
                        '課税譲渡所得金額',
                        '譲渡所得金額（譲渡益）', // 問35〜39
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
                            // rev: 2026-06-29 確認済み
                            questionTitle: '物価指標',
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                            content: '企業物価指数は、為替や原油価格の動向が直接影響を与えるので、消費者物価指数に比べて短期的な変動が[[大きい]]。', //p17
                        }, //40
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2025a41', '2025b41', '2025c41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-28 確認済み
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
                            // rev: 2026-06-29 確認済み
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
                            // rev: 2026-06-29 確認済み
                            questionTitle: '日本投資者保護基金',
                            relatedProblems: ['2025a48', '2025b48', '2025c48'],
                            content: '2,000万円 → 1,000万円', //p129
                        }, //48
                        {
                            // rev: 2026-06-29 確認済み
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
