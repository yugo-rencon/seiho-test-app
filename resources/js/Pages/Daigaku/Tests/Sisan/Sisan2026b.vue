<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産運用知識";
const subject = "2026年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp4
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（終価係数）"
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
                <QuestionTemp4
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（年金終価係数）"
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
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（6つの係数）（資本回収係数）"
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
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本の金融市場"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="債券の税金関係"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="分散投資"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="その他の金融商品"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '新株引受後も[[社債部分が存続する]]。', //p102
                        'ワラント部分は行使価額で[[新株]]を買えるという「権利」のみに対して値段がついているため、価格の変動率が[[大きい]]商品である。', //p102
                        '金は[[元本保証がなく]]、利息もない。', //p103
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建て金融商品の注意事項"
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
                    questionTitle="預金保険制度"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '預金保険制度の対象となる金融機関は、日本国内に本店がある銀行、信用金庫、信用組合、労働金庫、[[信金中央金庫]]、全国信用協同組合連合会、[[労働金庫連合会]]、[[商工組合中央金庫]]である。', //p127
                        '預金保険制度に加入している金融機関が取り扱っている金融商品でも、[[預金保険制度の対象となるものとならないものがある]]。', //p127
                        '正しい',
                        '当初の業務範囲は、金融機関の預金等の払戻しについての保険に限定されていたが、1986年以降に業務の拡充が行われ、[[破綻金融機関にかかる合併等に際して、受け皿金融機関などへの資金援助や不良債権の買取り回収などを行うことが付け加えられた]]。', //p126
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の特徴と税金"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '「満期一括受取型商品」は、満期時あるいは解約時に確定した利息に対して１回だけ[[20％源泉分離課税]]される。', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '財形融資制度は、加入している財形貯蓄の種類を問わず要件を満たした人であれば、[[誰でも利用できる]]。', //p28
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の発行条件"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '額面より高い価格で発行されている場合を[[オーバー・パー発行]]といい、安い価格で発行される場合を[[アンダー・パー発行]]とよんで区別している。', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '勝手格付けとよばれる[[発行会社からの依頼に基づかないものもある]]。', //p39
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の取引所市場"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '上場される債券は、２年・５年の中期国債、10年の長期国債、[[20年・30年・40年の超長期国債]]で、発行日に上場されて取引所で売買できるようになる。', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="市場金利と債券価格の相関関係"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '国内景気が不況の場合、一般的に市場金利は[[低下]]し、債券価格は[[上昇]]する。', //p48
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="単元未満株投資（株式ミニ投資）"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '投資金額が少ないために損失額が小さいだけで、[[リスク自体が小さくなったわけではないので注意が必要である]]。', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の費用"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '各費用は取扱金融機関や投資信託などにより異なるが、[[費用が高いから運用が優れているという判断にはならない]]。', //p83
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '現在は[[無担保債]]が主流である。', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国債券"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '2,000万円 → 1,000万円', //p129
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産活用"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '不動産所得 ＝ [[総収入金額 − 必要経費]]', //p133
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="金融政策の手段"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '短期',
                        '上限',
                        '無',
                        '拡大',
                        '低め', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'ケ', //26
                        'ア', //27
                        'エ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="株式相場指標"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '銘柄',
                        '株式分割',
                        '225',
                        '毎年',
                        '増加', // 問30〜34
                    ]"
                    :labels="[
                        'キ', //30
                        'オ', //31
                        'ケ', //32
                        'エ', //33
                        'カ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="確定拠出年金の運用商品等"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '加入者',
                        '確保',
                        '35',
                        '資金配分',
                        '多い', // 問35〜39
                    ]"
                    :labels="[
                        'オ', //35
                        'エ', //36
                        'イ', //37
                        'キ', //38
                        'カ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '物価指標',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-11-23 確認済み
                            questionTitle: '金融商品の三分類',
                            content: '流動性商品 → 利殖性商品', //p26
                        }, //41
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '債券の中途売却',
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '配当性向',
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-11-23 確認済み
                            questionTitle: '株式累積投資（るいとう）',
                            content: '配当金は持株数に応じて分配される。また配当金は持っている株数に合わせて自動的に再投資される。', //p67-68
                        }, //44
                        {
                            // rev: 2026-11-23 確認済み
                            questionTitle: '投資信託の運用スタイル',
                            content: 'アクティブ運用 → パッシブ運用', //p82
                        }, //45
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '投資信託の基準価額',
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-11-23 確認済み
                            questionTitle: '不動産投資信託（J-REIT「リート」）',
                            content: '不動産投資信託には大きく分けて、「投資法人（会社）型」と「契約型」の2種類があり、[[日本では「投資法人（会社）型」が主流となっている]]。', //p91
                        }, //47
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '外国投資信託の仕組み',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '日本投資者保護基金',
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2026a" next-route="daigaku.sisan2026c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
