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
const subject = "2021年度 フォームB";
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
                    questionTitle="財形年金貯蓄の利用上の注意点"
                    :relatedProblems="['2021b5']"
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
                    questionTitle="債券の発行条件"
                    :relatedProblems="['2021b6', '2021c42']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '表面利率（クーポンレート）とは、[[債券の表面に記載された金額（額面金額）]]に対して、毎年支払われる１年間の利息割合である。', //p37
                        '割引債には利息の支払いはないので、利札（クーポン）もなく[[表面利率（クーポンレート）もない]]。', //p38
                        '正しい',
                        '額面より高い価格で発行されている場合を[[オーバー・パー発行]]といい、安い価格で発行される場合を[[アンダー・パー発行]]とよんで区別している。', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :relatedProblems="['2021b7', '2021c6']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '風評リスク → 信用リスク', //p39
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
                    :relatedProblems="['2021b8']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '価格優先とは、売り注文は最も[[低い]]価格の注文を、買い注文は最も[[高い]]価格の注文を優先させることをいう。', //p53
                        '[[「指し値注文」より「成り行き注文」を優先]]させることである。', //p53
                        '株式等振替制度とは、上場会社の株式等に係る株券等をすべて廃止し、株券等の存在を前提として行われてきた株主等の権利の管理（発生、移転および消滅）を、証券保管振替機構および[[証券会社等]]に開設された口座において電子的に行う制度である。', //p55
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="追加型（オープン型）公社債投資信託"
                    :relatedProblems="['2021b9']"
                    :contents="[
                        // rev: 2026-07-01 確認済み
                        'いつ解約しても[[手数料がかからない]]ために流動性が[[高い]]などの利点がある。', //p87
                        '給与振込等の取扱い実績は[[ほとんどない]]が、クレジットカードの代金の決済は[[可能になっている]]場合もある。', //p87
                        '商品によっては、いつ解約しても[[解約手数料がかかる]]ので、短期間で解約すると解約手数料や税金など[[で元本割れすることもある]]。', //p88
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）の諸条件"
                    :relatedProblems="['2021a22', '2021b10']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '新発債購入時および償還時に[[手数料はかからない]]。', //p96
                        '現在は[[無担保債]]が主流である。', //p96
                        '正しい',
                        '発行日の１〜２カ月後から満期償還日の[[前日]]までとなっている。', //p98
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国投資信託"
                    :relatedProblems="['2021b11']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '運用会社としては、[[日本で投資信託委託会社として登録をしていない国外の投資顧問会社を運用会社とする]]ことも可能である。', //p119
                        '会社型 ↔︎ 契約型', //p119
                        '[[委託取引]]が一般的である。', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅ローン、住宅取得等資金に関する税法等"
                    :relatedProblems="['2021b12']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の基礎知識"
                    :relatedProblems="['2021b13']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '[[「利払型商品」よりも「満期一括受取型商品」]]の方が自動的に利息が利息を生むので元利合計金額は多くなる。', //p5
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品と税金"
                    :relatedProblems="['2021b14']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '正しい',
                        '正しい',
                        '公社債等（割引金融債、割引国債などを含む）の償還差益は、[[20％申告分離課税]]であるが、所定の条件を満たした場合は償還時に20％源泉徴収される。', //p8
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の特徴"
                    :relatedProblems="['2021b15', '2021c25']"
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
                    questionTitle="分散投資"
                    :relatedProblems="['2021a8', '2021b17']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '正しい',
                        '正しい',
                        '「投資信託の積立購入サービス」は、投資信託自体が組入れ銘柄を分散投資しているうえに[[積立てで購入することにより時間分散の効果も期待できる]]ので、「銘柄分散」と「時間分散」を同時に行える分散投資といえる', //p71
                        '正しい',
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
                        // rev: 2026-07-01 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '50万円 → 40万円', //なし（制度無くなった）
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="['2021b20', '2021c9']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '従来、販売会社は、証券会社が中心であったが、1998年から銀行や生命保険会社などに認められ、2005年からは[[郵便局でも投資信託の取扱いが開始された]]。', //p74
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
                    questionTitle="外国債券"
                    :relatedProblems="['2021a11', '2021b22']"
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
                    questionTitle="保険・証券等の保護"
                    :relatedProblems="['2021b23', '2021c12']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '国内で証券業を営む証券会社（[[外国証券会社はその在日支店を含む]]）には、すべて日本投資者保護基金への加入義務がある。', //p129
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融機関の選択"
                    :relatedProblems="['2021b24']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '株式や投資信託の場合は、ペイオフとは直接的な影響はないが、[[解約までに相当の時間がかかったり、口座を移管するために時間や手間がかかる可能性がある]]。', //p130
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="経済指標"
                    :relatedProblems="['2021b25']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '四半期',
                        '内閣府',
                        '国内総生産（ＧＤＰ）',
                        '経済成長率',
                        '民間最終消費支出', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'オ', //26
                        'ケ', //27
                        'コ', //28
                        'ウ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="株式相場指標"
                    :relatedProblems="['2021b30']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '銘柄',
                        '株式分割',
                        '225',
                        '毎年',
                        '大きい', // 問30〜34
                    ]"
                    :labels="[
                        'ウ', //30
                        'オ', //31
                        'ケ', //32
                        'エ', //33
                        'ア', //34
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
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2021b41'],
                            content: '流動性商品 → 利殖性商品', //p26
                        }, //41
                        {
                            // rev: 2026-06-28 確認済み
                            questionTitle: '債券の種類',
                            relatedProblems: ['2021a15', '2021b42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '株式ミニ投資（ミニ株）',
                            relatedProblems: ['2021a43', '2021b43', '2021c43'],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '配当性向',
                            relatedProblems: ['2021b44'],
                            content: '配当性向 → 配当利回り', //p58
                        }, //44
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '投資信託の信用リスク',
                            relatedProblems: ['2021b45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '上場投資信託',
                            relatedProblems: ['2021a46', '2021b46', '2021c46'],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '不動産投資信託',
                            relatedProblems: ['2021a30', '2021b47'],
                            content: '日本では「投資法人（会社）型」が主流となっている。', //p91
                        }, //47
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '外貨預金',
                            relatedProblems: ['2021b48', '2021c22'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: 'リバースモーゲージ制度',
                            relatedProblems: ['2021a49', '2021b49', '2021c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2021a" next-route="daigaku.sisan2021c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
