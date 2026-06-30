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
const subject = "2022年度 フォームC";
const isDraft = false;
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
                    questionTitle="日本の金融市場"
                    :relatedProblems="['2022c5']"
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
                    questionTitle="債券の発行条件"
                    :relatedProblems="['2022a42', '2022b17', '2022c6']"
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
                    questionTitle="債券の所有形態別利回り区分"
                    :relatedProblems="['2022b18', '2022c7']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '直接利回り → 所有期間利回り', //p46
                        '最終利回り → 応募者利回り', //p46
                        '応募者利回り → 最終利回り', //p46
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="分散投資"
                    :relatedProblems="['2022c8']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '株価が上がり続ける状態で複数回に分けて買った場合の平均購入単価は、一度に買った場合より[[高く]]なるので注意が必要である。', //p70
                        '毎月[[一定金額]]で購入するため、価格が安いときには多く、価格が高いときには少なく買う投資手法である。', //p70-71
                        '正しい',
                        '「るいとう」などで投資した企業が将来倒産した場合は、一般の株式投資で企業倒産があった場合と[[同様]]に、[[それまでに投資した資金は回収できなくなる]]おそれがある。', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の分類"
                    :relatedProblems="['2022c9']"
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
                    questionTitle="その他の金融商品"
                    :relatedProblems="['2022b10', '2022c10']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '新株引受後も[[社債部分が存続する]]。', //p102
                        '正しい',
                        '金は[[元本保証がなく]]、利息もない。', //p103
                        '商品ファンドには、「元本確保型」と商品先物市場で分散投資を行う「積極運用型」とがあるが、[[いずれも元本は保証されてはいない]]。', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国投資信託"
                    :relatedProblems="['2022c11']"
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
                    questionTitle="預金保険制度"
                    :relatedProblems="['2022c12']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '預金保険制度の対象となる金融機関は、日本国内に本店がある銀行、[[信用金庫]]、[[信用組合]]、[[労働金庫]]、[[信金中央金庫]]、[[全国信用協同組合連合会]]、[[労働金庫連合会]]、[[商工組合中央金庫]]である。', //p127
                        '預金保険制度に加入している金融機関が取り扱っている金融商品でも、[[預金保険制度の対象となるものとならないものがある]]。', //p127
                        '預金保険制度による預金保護の範囲は、原則として１金融機関ごとに１預金者当たり対象預金等の[[元本1,000万円までとその利息等]]となる。', //p127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の基礎知識"
                    :relatedProblems="['2022c13']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[「利払型商品」よりも「満期一括受取型商品」]]の方が自動的に利息が利息を生むので元利合計金額は多くなる。', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="預貯金の特徴"
                    :relatedProblems="['2022c14']"
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
                    questionTitle="債券の種類"
                    :relatedProblems="['2022c17']"
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
                    questionTitle="債券の税金関係"
                    :relatedProblems="['2022a7', '2022b7', '2022c18']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '５年間 → ３年間', //p45
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
                    questionTitle="株式の基礎"
                    :relatedProblems="['2022a8', '2022c20']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '価格優先とは、売り注文は最も[[低い]]価格の注文を、買い注文は最も[[高い]]価格の注文を優先させることをいう。', //p53
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式にかかる税金"
                    :relatedProblems="['2022c21']"
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
                    questionTitle="投資信託"
                    :relatedProblems="['2022a9', '2022c22']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '従来、販売会社は、証券会社が中心であったが、1998年から銀行や生命保険会社などに認められ、2005年からは[[郵便局でも投資信託の取扱いが開始された]]。', //p74
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
                    questionTitle="ラップ口座（ラップ・アカウント）"
                    :relatedProblems="['2022a10', '2022c24']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '「投資顧問型」は、[[証券会社が投資顧問会社を選定]]し、運用を任せる一任勘定取引で、[[投資顧問会社]]はお客さまのニーズに合ったポートフォリオを組んで運用を行う。', //p102
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
                        // rev: 2026-07-01 確認済み
                        '半年',
                        '1年',
                        '期日指定定期預金',
                        '複利',
                        '個人', // 問25〜29
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
                    questionTitle="経済指標"
                    :relatedProblems="['2022c30']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '四半期',
                        '内閣府',
                        '国内総生産（ＧＤＰ）',
                        '経済成長率',
                        '民間最終消費支出', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'オ', //31
                        'ケ', //32
                        'コ', //33
                        'ウ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="居住用財産の譲渡所得の特別控除"
                    :relatedProblems="['2022c35']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        'を問わず',
                        '3,000',
                        '譲渡費用',
                        '課税譲渡所得金額',
                        '譲渡所得金額（譲渡益）', // 問35〜39
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
                            // rev: 2026-07-01 確認済み
                            questionTitle: '景気動向指数',
                            relatedProblems: ['2022c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2022a41', '2022b41', '2022c41'],
                            content: '流動性商品 → 利殖性商品', //p26
                        }, //41
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '債券格付けの意義',
                            relatedProblems: ['2022a6', '2022c42'],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '金利変動リスク',
                            relatedProblems: ['2022a43', '2022b43', '2022c43'],
                            content: '市場金利と債券価格の間には、「金利が上昇すれば債券価格は[[下落]]する」「金利が下降すれば債券価格は[[上昇]]する」という関係がある。', //p75
                        }, //43
                        {
                            // rev: 2026-06-30 確認済み
                            questionTitle: '上場株式等の売却損の繰越し',
                            relatedProblems: ['2022a44', '2022b44', '2022c44'],
                            content: '５年間 → ３年間', //p63
                        }, //44
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '単元未満株投資（株式ミニ投資）',
                            relatedProblems: ['2022a21', '2022c45'],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '投資信託の運用スタイル',
                            relatedProblems: ['2022c46'],
                            content: 'アクティブ運用 → パッシブ運用', //p82
                        }, //46
                        {
                            // rev: 2026-06-30 確認済み
                            questionTitle: '投資信託の基準価額',
                            relatedProblems: ['2022a47', '2022b47', '2022c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '外貨預金',
                            relatedProblems: ['2022b24', '2022c48'],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '金融機関のリスクヘッジ',
                            relatedProblems: ['2022c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2022b" next-route="daigaku.sisan2021a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
