<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産運用知識";
const subject = "2026年度 フォームA";
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
                    questionTitle="金利"
                    :contents="[
                        // rev: 2026-07-01 確認済み
                        '景気が良くなってお金の借り手が多くなりすぎると、金利が[[高く]]なり、[借りにくく]]なる。逆に、景気が低迷していると金利は[[下がり]]、[[借りやすく]]なる。', //p18
                        '景気が過熱しすぎると物の値段が高くなって[[インフレ]]となり、景気が低迷し底割れすると[[デフレ]]になる。', //p18
                        '正しい',
                        '新長期プライム・レートは、新短期プライム･レートに一定の利率を[[上乗せした]]水準に設定される。', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '債券の格付けとは、デフォルトリスクを中心に[[信用リスク]]の大きさをいくつかの段階に分けて、元利金の支払いの確実性（安全性）の度合いを第三者である格付け機関が判断し、それを[[簡単な記号]]で表示したもの。', //p39
                        '勝手格付けとよばれる[[発行会社からの依頼に基づかないものもある]]。', //p39
                        '格付けの高い債券ほど安全性は高いと判断されるため、一般に価格は高く利回りが[[低く]]なる。', //p40
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の所有形態別利回り区分"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="株式の評価（投資指標）"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '配当利回り → 配当性向', //p58
                        '配当性向 → 配当利回り', //p58
                        '正しい',
                        'ＲＯＥ（自己資本利益率） → ＰＢＲ（株価純資産倍率）', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '従来、販売会社は、証券会社が中心であったが、1998年から銀行や生命保険会社などに認められ、2005年からは[[郵便局でも投資信託の取扱いが開始された]]。', //p74
                        '正しい',
                        'ケアマネージャー → ファンドマネージャー', //p73
                        '専門家が運用する場合であっても、最終的にはそのファンドに組み入れられている株式等の有価証券の相場動向が、ファンドの収益性を大きく左右することから、[[必ずしも高い運用実績を得られるとは限らない]]点に注意が必要である。', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="その他の金融商品"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        'ラップ口座は、一般的な有価証券の売買のように、[[そのつど売買委託手数料等がかかるのではなく、資産の残高に応じて一定割合の手数料を定期的に支払う]]。', //p102
                        '金は[[元本保証がなく]]、利息もない。', //p103
                        '商品ファンドには、「元本確保型」と商品先物市場で分散投資を行う「積極運用型」とがあるが、[[いずれも元本は保証されてはいない]]。', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国投資信託"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="保険・証券等の保護"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '破綻保険会社の保険契約を引き継ぐ生命保険会社（受け皿会社）が現れた場合、[[生命保険契約者保護機構が救済する側の生命保険会社に資金援助を行い]]、破綻保険会社の保険契約を健全な生命保険会社へ円滑に移転する。', //p129
                        '正しい',
                        '500万円 → 1,000万円', //p129
                        '国内で証券業を営む証券会社（外国証券会社はその在日支店）には、すべて日本投資者保護基金への[[加入義務がある]]。', //p129
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の基礎知識"
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
                    questionTitle="財形制度"
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
                    questionTitle="債券の発行条件"
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
                    questionTitle="債券の流通市場"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の売買"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="国債"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式累積投資（るいとう）"
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
                    questionTitle="投資信託の費用"
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
                    questionTitle="転換社債型新株予約権付社債（転換社債）"
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
                    questionTitle="外貨預金"
                    :contents="[
                        '', //p
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
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融機関の選択"
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
                    questionTitle="経済指標"
                    :contents="[
                        // rev: 2026-11-16 確認済み
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
                    questionTitle="不動産投資信託（J-REIT「リート」）"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '賃貸料収入',
                        '信用リスク',
                        '投資法人（会社）型',
                        '時価',
                        '株式', // 問35〜39
                    ]"
                    :labels="[
                        'キ', //35
                        'ウ', //36
                        'カ', //37
                        'ア', //38
                        'イ', //39
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
                            // rev: 2026-11-16 確認済み
                            questionTitle: '債券の種類',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '市場金利と債券価格の相関関係',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '配当金に対する課税',
                            content: '', //p
                        }, //43
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '投資信託の積立購入サービス',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '投資信託の運用スタイル',
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '投資信託の基準価額',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '外貨建て金融商品の注意事項',
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '外国債券',
                            content: '', //p
                        }, //48
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '不動産活用・等価交換方式',
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.sisan2026b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
