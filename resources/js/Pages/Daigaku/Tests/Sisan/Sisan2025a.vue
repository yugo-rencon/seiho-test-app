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
                        // rev: 2026-06-28 確認済み
                        '配当利回り → 配当性向', //p58
                        '配当性向 → 配当利回り', //p58
                        'ＲＯＥ（自己資本利益率） → ＰＢＲ（株価純資産倍率）', //p59
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
                        // rev: 2026-06-28 確認済み
                        '投資信託は、[[株式を組み入れて運用]]することが可能な「株式投資信託」と、[[株式は一切組み入れず、国債や社債などの公社債だけ]]を組み入れて運用する「公社債投資信託」とに大きく分けられる。', //p79
                        '正しい',
                        '新規購入や追加購入および換金は、[[時価に基づいて自由に行うことができる]]。', //p79
                        'スポット型 → 定時定形型', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建て金融商品の注意事項"
                    :relatedProblems="['2025a10', '2025c11']"
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
                    :relatedProblems="['2025a11', '2025b22', '2025c12']"
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
                    questionTitle="預金保険制度"
                    :relatedProblems="['2025a12', '2025b23', '2025c23']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '預金保険制度の対象となる金融機関は、日本国内に本店がある銀行、[[信用金庫]]、[[信用組合]]、[[労働金庫]]、信金中央金庫、全国信用協同組合連合会、労働金庫連合会、[[商工組合中央金庫]]である。', //p127
                        '預金保険制度に加入している金融機関が取り扱っている金融商品でも、[[預金保険制度の対象となるものとならないものがある]]。', //p127
                        '預金保険制度による預金保護の範囲は、原則として１金融機関ごとに１預金者当たり対象預金等の[[元本1,000万円までとその利息等]]となる。', //p127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の基礎知識"
                    :relatedProblems="['2025a13']"
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
                    questionTitle="債券の種類"
                    :relatedProblems="['2025a15', '2025b42']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '縁故債 ↔︎ 公募債', //p37
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
                    questionTitle="単元未満株投資（株式ミニ投資）"
                    :relatedProblems="['2025a20', '2025b44', '2025c43']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '投資金額が少ないために損失額が小さいだけで、[[リスク自体が小さくなったわけではないので注意が必要である]]。', //p66
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
                    questionTitle="転換社債型新株予約権付社債（転換社債）"
                    :relatedProblems="['2025a22', '2025b10', '2025c21']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '現在は[[無担保債]]が主流である。', //p96
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
