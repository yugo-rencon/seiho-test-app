<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険応用課程試験";
const subject = "2022年度 8月〜3月実施 フォームB";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '収入金額は必ずしも金銭で支給されたものに限らず、一般に現物給与といわれている物品やその他の経済的利益も含まれる', //p15
                        '総収入金額から、その収入を得るために支出した金額（必要経費）を差し引くことができない → 総収入金額から、その収入を得るために支出した金額（必要経費）を差し引いた金額が事業所得', //p16
                        '正しい',
                        '総収入金額の全額が雑所得 → 総収入金額から公的年金等控除額を差し引いた金額が雑所得', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="[]"
                    :contents="[
                        '不動産以外の財産 → 現金以外の財産', //p45
                        '既払込保険料相当額 → 解約返戻金の額', //p45
                        '正しい',
                        '年金の種類を問わず、原則として[[（ア）解約返戻金相当額（イ）年金に代えて一時金の給付を受けられる場合は一時金相当額（ウ）予定利率等をもとに算出した金額 のうちいずれか多い金額]]で評価される', //p45
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度選択による贈与税額"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '死亡保険金を受け取ることによる[[相続税額の増加分も考慮して]]生命保険に加入することが必要', //p54
                        '代襲相続 → 代襲分割', //p54
                        '[[遺言は原則的に法定相続の規定に優先する]]効力をもっている', //p55
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '一時所得として所得税の課税対象 → 贈与税の課税対象', //p59
                        '贈与税の課税対象 → 相続税（保険金非課税の取り扱い無し）の課税対象', //p59
                        '雑所得として所得税の課税対象 → 一時所得として所得税の課税対象', //p59
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        '資本金1億円超 → 資本金1億円以下', //p70
                        '普通法人企業に合同会社・合名会社・合資会社も含まれる', //p71
                        '正しい',
                        '生活設計販売 → 制度設計販売<br>生活設計を販売 → 福利厚生制度を販売', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '保険料や掛金を損金算入することはできない → 保険料や掛金を損金算入することができる', //p80
                        '法人の事業税 → 法人の住民税', //p79
                        '法人の規模や営む事業にかかわらず一律の税率 → 法人の規模や営む事業により税率が異なる', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '損金算入 → 資産計上', //p106
                        '保険料のうち[[定期保険部分、特約部分はどちらも損金算入できる]]', //p115
                        '正しい',
                        '企業が受け取る配当金は原則として[[益金に算入することになっている]]', //p111
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '1.33%',
                            questionTitle: '金融商品の税引き後利回り',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '1年複利なので、2年後の元利合計を求めたうえで、利息部分に20%の税金をかけます。税引き後利息を元本と期間で割ることで、税引き後利回りを求めます。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期時の元利合計 ＝ 元本 ×（1＋年利率）<sup>年数</sup>', '税引き後利息 ＝ 税引き前利息 − 税金', '税引き後利回り ＝ 税引き後利息 ÷ 元本 ÷ 年数 × 100'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['1,000,000円 ×（1＋0.0165）<sup>2</sup>', '＝ 1,033,272円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['税引き前利息：1,033,272円 − 1,000,000円 ＝ 33,272円', '税金：33,272円 × 20% ＝ 6,654円', '税引き後利息：33,272円 − 6,654円 ＝ 26,618円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['26,618円 ÷ 1,000,000円 ÷ 2年 × 100', '＝ 1.3309%', '＝ 1.33%'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.33%（小数第3位を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'イ', //10
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '20歳未満または60歳以上の被用者年金（厚生年金保険）制度の加入者も対象に含まれる', //p136
                        '第[[2]]号被保険者の被扶養配偶者が第3号被保険者となる', //p136
                        '第2号被保険者 → 第1号被保険者', //p136
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '内閣総理大臣の免許 → 内閣総理大臣の登録', //p148
                        '正しい',
                        '媒介 → 代理', //p149
                        '司法処分（拘禁系もしくは罰金または両者の併科）の[[対象となることがある]]', //p154
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '同居・非同居にかかわらず1人につき一律58万円 → 同居の場合1人につき58万円、非同居の場合1人につき48万円', //p22
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産と非課税財産"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '死亡時の普通給与（賞与を含む）の5年分相当額 → 死亡時の普通給与（賞与を除く）の3年分相当額', //p44
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '一度適用すると、選択した親や祖父母からの贈与については、暦年課税に変更できない', //p57
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '所得税の確定申告書を税務署長に提出した人は、[[住民税の申告書を提出したものとみなされる]]', //p62
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '平準保険料 → 平均保険料', //p84
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="勤労者財産形成制度（財形制度）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '多くの個人保険商品と同様、積立金等の計算の基礎（予定利率）は固定しており、変更されることはない → 多くの個人保険商品と異なり、積立金等の計算の基礎（予定利率）は変更される場合がある', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '利率・期間が同じ場合、[[1年複利よりも半年複利、半年複利よりも1ヶ月複利商品]]の方が元利合計は大きくなる', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '80歳 → 70歳', //p137
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '被保険者期間が1年以上 → 被保険者期間が1ヶ月以上<br>63歳から支給 → 65歳から支給', //p139
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '100万円 → 200万円', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '「特別の利益の提供」に[[該当する]]', //p161
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '解約請求できるのは契約者と被保険者 → 契約者のみ<br>契約者・被保険者の意思確認 → 契約者の意思確認', //p174
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="所得税の確定申告"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //p
                        'オ', //p
                        'ケ', //p
                        'エ', //p
                        'キ', //p
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="確定給付企業年金の受給権保護"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //p
                        'ク', //p
                        'ケ', //p
                        'キ', //p
                        'エ', //p
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="所得税の税額の計算過程"
                    :relatedProblems="[]"
                    :contents="[
                        '396',
                        '20',
                        '80',
                        '48',
                        '6.85', // 問35〜39
                    ]"
                    :labels="[
                        'ケ', //p
                        'ウ', //p
                        'ク', //p
                        'キ', //p
                        'ア', //p
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '国税と地方税',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '所得税の税額控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '青色申告制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '固定金利商品と変動金利商品',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '国民年金（基礎年金）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '契約の取消し等ができるのは、お客さまが誤認に気づいた時や困惑の状況から解放された時などから原則[[1年以内]]で、契約締結時から原則[[5年以内]]となる', //p153
                        }, //46
                        {
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '募集時の正しい説明',
                            relatedProblems: [],
                            content: '注意喚起情報 → 契約概要', //p165
                        }, //48
                        {
                            questionTitle: '適切な保険金・給付金等の支払い',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2022-h2-a" next-href="/ouyou/2022-h2-c" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
