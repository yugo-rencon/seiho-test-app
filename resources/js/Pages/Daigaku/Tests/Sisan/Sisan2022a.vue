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
const subject = "2022年度 フォームA";
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
                    :relatedProblems="[['2022a1', '2022b1', '2022c1']]"
                    :labels="['ア']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '2,460,900円',
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
                                    value: ['将来受け取る金額：300万円', '年利率：2％', '運用期間：10年', '現価係数：0.8203'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現在必要な元本金額', '＝ 300万円 × 0.8203', '＝ 2,460,900円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：2,460,900円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（減債基金係数）"
                    :relatedProblems="[['2022a2', '2022b2', '2022c2']]"
                    :labels="['エ']"
                    :contents="[
                        {
                            // rev: 2026-06-28 作成
                            answer: '456,650円',
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
                                    value: ['将来の目標額：500万円', '年利率：2％', '運用期間：10年', '減債基金係数：0.09133'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['毎年の積立額', '＝ 500万円 × 0.09133', '＝ 456,650円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：456,650円',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（年金終価係数）"
                    :relatedProblems="[['2022a3', '2022b3', '2022c3']]"
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
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（資本回収係数）"
                    :relatedProblems="[['2022a4', '2022b4', '2022c4']]"
                    :labels="['イ']"
                    :contents="[
                        {
                            // rev: 2026-06-27 作成
                            answer: '1,223,200円',
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
                                    value: ['毎年の返済額', '＝ 2,000万円 × 0.06116', '＝ 1,223,200円'],
                                },
                                {
                                    type: 'result',
                                    value: '答え：1,223,200円',
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
                    :relatedProblems="['2022a5']"
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
                    questionTitle="債券の格付け"
                    :relatedProblems="['2022a6', '2022c42']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '風評リスク → 信用リスク', //p39
                        '勝手格付けとよばれる[[発行会社からの依頼に基づかないものもある]]。', //p39
                        '格付けの高い債券ほど安全性は高いと判断されるため、一般に価格は高く利回りが[[低く]]なる。', //p40
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の税金関係"
                    :relatedProblems="['2022a7', '2022b7', '2022c18']"
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
                    questionTitle="株式の基礎"
                    :relatedProblems="['2022a8', '2022c20']"
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
                    questionTitle="投資信託"
                    :relatedProblems="['2022a9', '2022c22']"
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
                    :relatedProblems="['2022a10', '2022c24']"
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
                    :relatedProblems="['2022a11', '2022b48']"
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
                    questionTitle="不動産活用"
                    :relatedProblems="['2022a12']"
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
                    questionTitle="金融商品と税金"
                    :relatedProblems="['2022a13']"
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
                    questionTitle="預貯金の仕組み"
                    :relatedProblems="['2022a14']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="['2022a15', '2022b15', '2022c15']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '正しい',
                        'この融資制度は、加入している財形貯蓄の種類を問わず要件を満たした人であれば、[[誰でも利用できる]]。', //p28
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の特徴"
                    :relatedProblems="['2022a16', '2022b16', '2022c16']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '中途売却する場合の債券は、株式などと同様に価格変動する商品であり、特に満期償還時までの残りの期間が[[長い]]債券ほど、金利変動によって価格の動きが大きくなるので注意が必要である。', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の流通市場"
                    :relatedProblems="['2022a17']"
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
                    questionTitle="債券の売買"
                    :relatedProblems="['2022a18', '2022b6']"
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
                    :relatedProblems="['2022a19', '2022b19', '2022c19']"
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
                    questionTitle="少額投資非課税制度（NISA）の概要"
                    :relatedProblems="['2022a20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="単元未満株投資（株式ミニ投資）"
                    :relatedProblems="['2022a21', '2022c45']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '投資金額が少ないために損失額が小さいだけで、[[リスク自体が小さくなったわけではないので注意が必要である]]。', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の費用"
                    :relatedProblems="['2022a22']"
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
                    :relatedProblems="['2022a23', '2022b23', '2022c23']"
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
                    questionTitle="外国債券"
                    :relatedProblems="['2022a24', '2022b11']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        'サムライ債とは、日本国外の発行体が[[日本国内]]で発行する円建て外債のことである。', //p122
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
                    questionTitle="利払型商品と満期一括受取型商品"
                    :relatedProblems="['2022a25', '2022b25', '2022c25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'オ', //25
                        'カ', //26
                        'ア', //27
                        'コ', //28
                        'イ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="株式相場指標"
                    :relatedProblems="['2022a30']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '銘柄',
                        '株式分割',
                        'プライム市場',
                        '毎年',
                        '低減', // 問30〜34
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
                    questionTitle="ドルコスト平均法"
                    :relatedProblems="['2022a35']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '時間分散',
                        '金額',
                        '平均購入単価',
                        'サービス',
                        '純金積立', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'イ', //36
                        'ク', //37
                        'オ', //38
                        'キ', //39
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
                            relatedProblems: ['2022a40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2022a41', '2022b41', '2022c41'],
                            content: '流動性商品 → 利殖性商品', //p26
                        }, //41
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '債券の発行条件',
                            relatedProblems: ['2022a42', '2022b17', '2022c6'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '金利変動リスク',
                            relatedProblems: ['2022a43', '2022b43', '2022c43'],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '上場株式等の売却損の繰越し',
                            relatedProblems: ['2022a44', '2022b44', '2022c44'],
                            content: '', //p
                        }, //44
                        {
                            // rev: 2026-06-30 確認済み
                            questionTitle: '配当金に対する課税',
                            relatedProblems: ['2022a45'],
                            content: '上場株式等の配当金に対する源泉徴収税率は、[[20％（所得税15％、住民税5％）]]である。', //p61
                        }, //45
                        {
                            questionTitle: '投資信託の信用リスク',
                            relatedProblems: ['2022a46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '投資信託の基準価額',
                            relatedProblems: ['2022a47', '2022b47', '2022c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '円高・円安',
                            relatedProblems: ['2022a48'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '預金保護の範囲',
                            relatedProblems: ['2022a49'],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2023c" next-route="daigaku.sisan2022b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
