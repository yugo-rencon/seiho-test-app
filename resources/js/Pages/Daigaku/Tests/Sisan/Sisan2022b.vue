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
const subject = "2022年度 フォームB";
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
                    questionTitle="金利"
                    :relatedProblems="['2022b5']"
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
                    questionTitle="債券の売買"
                    :relatedProblems="['2022a18', '2022b6']"
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
                    questionTitle="債券の税金関係"
                    :relatedProblems="['2022a7', '2022b7', '2022c18']"
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
                    :relatedProblems="['2022b8']"
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
                    questionTitle="追加型（オープン型）公社債投資信託"
                    :relatedProblems="['2022b9']"
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
                    questionTitle="その他の金融商品"
                    :relatedProblems="['2022b10', '2022c10']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
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
                    questionTitle="外国債券"
                    :relatedProblems="['2022a24', '2022b11']"
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
                    questionTitle="保険・証券等の保護"
                    :relatedProblems="['2022b12']"
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
                    questionTitle="金融商品の中途換金の取り扱い"
                    :relatedProblems="['2022b13']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '全期間原則として換金できない商品には、外貨定期預金や[[定期積金]]がある。', //p6
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="景気・経済の動向"
                    :relatedProblems="['2022b14']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '名目値とは、物価水準による[[調整を行わず]]、その時々の時価で評価した数値であり、実質値は、物価水準による[[調整を行った]]数値である。', //p18
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
                    questionTitle="債券の発行条件"
                    :relatedProblems="['2022a42', '2022b17', '2022c6']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '1,000円 → 100円', //p38
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の所有形態別利回り区分"
                    :relatedProblems="['2022b18', '2022c7']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '直接利回り → 最終利回り', //p46
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
                    questionTitle="相場指標"
                    :relatedProblems="['2022b20']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '正しい',
                        '正しい',
                        '東証株価指数（TOPIX＝トピックス）は、従来、[[東京証券取引所第１部上場の全銘柄]]を対象として算出されていた時価総額指数である。', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式累積投資（るいとう）"
                    :relatedProblems="['2022b21']"
                    :contents="[
                        // rev: 2026-07-01 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '配当金は持っている株数に合わせて自動的に再投資される。また、[[単元株数に達しないと株主優待はない]]。', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の運用選択としての投資信託"
                    :relatedProblems="['2022b22']"
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
                    questionTitle="外貨預金"
                    :relatedProblems="['2022b24', '2022c48']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '種類は、[[普通預金、当座預金、通知預金、定期預金]]などがあり、円で行う預金と基本的な仕組みは変わらない。', //p112
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
                    questionTitle="金融政策の手段"
                    :relatedProblems="['2022b30']"
                    :contents="[
                        // rev: 2026-06-30 確認済み
                        '短期',
                        '上限',
                        '無',
                        '拡大',
                        '低め', // 問30〜34
                    ]"
                    :labels="[
                        'ウ', //30
                        'ケ', //31
                        'ア', //32
                        'エ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="上場投資信託（ETF）"
                    :relatedProblems="['2022b35']"
                    :contents="[
                        // rev: 2026-06-29 確認済み
                        '選ばない',
                        'インデックス',
                        '安い',
                        '収益分配金',
                        '価格変動', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'ケ', //36
                        'オ', //37
                        'ア', //38
                        'エ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-30 確認済み
                            questionTitle: '障害者等の非課税貯蓄制度',
                            relatedProblems: ['2022b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '金融商品の三分類',
                            relatedProblems: ['2022a41', '2022b41', '2022c41'],
                            content: '流動性商品 → 利殖性商品', //p26
                        }, //41
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '国債の種類',
                            relatedProblems: ['2022b42'],
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
                            questionTitle: '投資信託の積立購入サービス',
                            relatedProblems: ['2022b45'],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-07-01 確認済み
                            questionTitle: '不動産投資信託',
                            relatedProblems: ['2022b46'],
                            content: '日本では「投資法人（会社）型」が主流となっている。', //p91
                        }, //46
                        {
                            // rev: 2026-06-30 確認済み
                            questionTitle: '投資信託の基準価額',
                            relatedProblems: ['2022a47', '2022b47', '2022c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-28 確認済み
                            questionTitle: '外貨建て金融商品の注意事項',
                            relatedProblems: ['2022a11', '2022b48'],
                            content: '預けたお金を外貨のまま現金（キャッシュ）で引き出すことは可能だが、[[手数料がかかる]]（手数料は金融機関により異なる）。', //p111
                        }, //48
                        {
                            // rev: 2026-06-29 確認済み
                            questionTitle: '日本投資者保護基金',
                            relatedProblems: ['2022b49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2022a" next-route="daigaku.sisan2022c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
