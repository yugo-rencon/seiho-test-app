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
const subject = "2023年度 フォームA";
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
                    questionTitle="現価と終価（6つの係数）"
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
                    questionTitle="財形年金貯蓄の利用上の注意点"
                    :relatedProblems="['2023a5']"
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
                    questionTitle="債券の売買"
                    :relatedProblems="['2023a6', '2023b18', '2023c18']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        '中期利付国債、長期利付国債の額面金額は[[５万円]]、個人向け国債、公募地方債の額面金額は[[１万円]]である。', //p42
                        '正しい',
                        '手数料を支払わないので[[消費税も課されない]]。', //p42
                        '利払日と利払日の間に売買が行われたときには、[[購入した人が売却した人]]に対して、前回利払日の翌日から売買の受渡し日までの日数に見合う利息相当分を「経過利息」として支払う必要がある。', //p43
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の所有形態別利回り区分"
                    :relatedProblems="['2023a7']"
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
                    questionTitle="株式の基礎"
                    :relatedProblems="['2023a8', '2023c45']"
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
                    questionTitle="その他の金融商品"
                    :relatedProblems="['2023a9', '2023c10']"
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
                    questionTitle="外国投資信託"
                    :relatedProblems="['2023a10', '2023b11']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '運用会社としては、[[日本で投資信託委託会社として登録をしていない国外の投資顧問会社を運用会社とする]]ことも可能である。', //p119
                        '会社型 ↔︎ 契約型', //p119
                        '公募外国証券投資信託も、特定口座の利用が[[認められている]]。', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国債券"
                    :relatedProblems="['2023a11', '2023c24']"
                    :contents="[
                        // rev: 2026-06-28 確認済み
                        'ショーグン債 → サムライ債', //p122
                        'サムライ債 → ショーグン債', //p122w
                        '正しい',
                        '源泉分離課税 → 申告分離課税', //p123
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="預金保険制度"
                    :relatedProblems="['2023a12']"
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
                    questionTitle="金融商品と税金"
                    :relatedProblems="['2023a13']"
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
                    questionTitle="景気・経済の動向"
                    :relatedProblems="['2023a14']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
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
                    questionTitle="債券の発行条件"
                    :relatedProblems="['2023a17', '2023b6', '2023c17']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '額面より高い価格で発行されている場合を[[オーバー・パー発行]]といい、安い価格で発行される場合を[[アンダー・パー発行]]とよんで区別している。', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の流通市場"
                    :relatedProblems="['2023a18']"
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
                    questionTitle="分散投資"
                    :relatedProblems="['2023a20', '2023c8']"
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
                    questionTitle="単元未満株投資（株式ミニ投資）"
                    :relatedProblems="['2023a21', '2023b45']"
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
                    questionTitle="確定拠出年金の運用選択としての投資信託"
                    :relatedProblems="['2023a22', '2023c9']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '運用にあたっては利回りの低い[[元本確保型商品]]と利回りの高い[[一般運用商品]の組合せで、目標とする利回りを確保して多くの退職金を受給できることが目的となる。', //p93
                        '正しい',
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
                    questionTitle="ラップ口座（ラップ・アカウント）"
                    :relatedProblems="['2023a24', '2023b10']"
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
                    questionTitle="金融政策の手段"
                    :relatedProblems="['2023a25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'ケ', //26
                        'ア', //27
                        'キ', //28
                        'イ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="株式相場指標"
                    :relatedProblems="['2023a30']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '銘柄',
                        '株式分割',
                        '225',
                        '毎年',
                        '増加', // 問30〜34
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
                    questionTitle="居住用財産の譲渡所得の特別控除"
                    :relatedProblems="['2023a35', '2023b35', '2023c35']"
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
                            questionTitle: '障害者等の非課税貯蓄制度',
                            relatedProblems: ['2023a40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2023a41', '2023b41', '2023c41'],
                            content: '流動性商品 → 利殖性商品', //p26
                        }, //41
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '債券格付けの意義',
                            relatedProblems: ['2023a42', '2023c6'],
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
                            questionTitle: '配当金に対する課税',
                            relatedProblems: ['2023a45'],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '不動産投資信託',
                            relatedProblems: ['2023a46', '2023c25'],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '投資信託の基準価額',
                            relatedProblems: ['2023a47', '2023b47', '2023c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '外貨預金',
                            relatedProblems: ['2023a48', '2023b24'],
                            content: '種類は、[[普通預金、当座預金、通知預金、定期預金]]などがあり、円で行う預金と基本的な仕組みは変わらない。', //p112
                        }, //48
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '日本投資者保護基金',
                            relatedProblems: ['2023a49', '2023c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2024c" next-route="daigaku.sisan2023b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
