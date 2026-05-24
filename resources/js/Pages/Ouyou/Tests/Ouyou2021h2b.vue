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
const subject = "2021年度 8月〜3月実施 フォームB";
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
                    questionTitle="相続税の課税財産と非課税財産"
                    :relatedProblems="[]"
                    :contents="[
                        '相続財産に特許権、営業権も含まれる', //p42
                        '正しい',
                        '800万円 → 500万円', //p44
                        '4年分相当額 → 6ヶ月分相当額', //p44
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '贈与税の課税対象 → 相続税（保険金非課税の取り扱い無し）の課税対象', //p59
                        '雑所得として所得税の課税対象 → 一時所得として所得税の課税対象', //p59
                        '所得税の課税対象 → 相続税または贈与税の課税対象', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '死亡保険金を受け取ることによる[[相続税額の増加分も考慮して]]生命保険に加入することが必要', //p54
                        '代襲相続 → 代襲分割', //p54
                        '特に主たる財産が自宅の場合、遺産分割には[[苦労を要する]]', //p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '個人の住所地に応じて課せられる「地域割」 → 所得額に一律の税率で課せられる「所得割」', //p62
                        '正しい',
                        '（前年中における事業の所得 - 事業専従者控除 [[- 事業主控除]]） × 税率', //p65
                        '個人事業主本人を被保険者 → 使用人を被保険者', //p67
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '特約保険料は損金算入できない → 特約保険料も含めて全額を損金算入できる', //p86
                        '従業員に対する給与とみなされ所得税が課税される → 従業員に対する給与とみなされることはなく所得税は課税されない', //p86
                        '事業年度の翌年度に益金に算入 → 事業年度の益金に算入', //p87
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '企業の拠出した掛金額は損金算入することができる', //p102
                        '雑所得として所得税の課税対象 → 退職所得として所得税の課税対象', //p102
                        '一時所得として所得税の課税対象 → 所得税は非課税で相続税の課税対象', //p102
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '1.75%',
                            questionTitle: '金融商品の税引き後利回り',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '1年複利なので、5年後の元利合計を求めたうえで、利息部分に20%の税金をかけます。税引き後利息を元本と期間で割ることで、税引き後利回りを求めます。',
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
                                    value: ['1,000,000円 ×（1＋0.021）<sup>5</sup>', '＝ 1,109,456円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['税引き前利息：1,109,456円 − 1,000,000円 ＝ 109,456円', '税金：109,456円 × 20% ＝ 21,891円', '税引き後利息：109,456円 − 21,891円 ＝ 87,565円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['87,565円 ÷ 1,000,000円 ÷ 5年 × 100', '＝ 1.7513%', '＝ 1.75%'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1.75%（小数第3位を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="勤労者財産形成制度（財形制度）"
                    :relatedProblems="[]"
                    :contents="[
                        '4つ → 3つ（一般財形貯蓄制度、財形住宅貯蓄制度、財形年金貯蓄制度）', //p117
                        '500万円 → 550万円<br>300万円 → 385万円<br>800万円 → 550万円', //p117
                        '2年以上 → 3年以上', //p117
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '20歳未満または60歳以上の被用者年金（厚生年金保険）制度の加入者も対象に含まれる', //p136
                        '正しい',
                        '第[[2]]号被保険者の被扶養配偶者が第[[3]]号被保険者となる', //p136
                        '第3号被保険者 → 第2号被保険者', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '契約概要 → 注意喚起情報', //p165
                        '注意喚起情報 → 契約概要', //p165
                        '正しい',
                        '契約締結後 → 契約締結前', //p168
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金等の請求と支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '金融庁 → 生命保険会社', //p172
                        '安易に回答せず、生命保険会社のしかるべき専門の担当者や担当部門に確認することが大切', //p173
                        '保険事故に関する情報は、[[特にセンシティブな個人情報]]', //p173
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
                    questionTitle="相続税の申告手続と納付方法"
                    :relatedProblems="[]"
                    :contents="[
                        '課税価格の合計額が基礎控除額以下である場合でも相続税の申告が必要 → 相続税の申告は不要', //p52
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '基礎控除額以下の場合には贈与税の申告をする必要はない', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '普通法人企業に合同会社・合名会社・合資会社も含まれる', //p71
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
                        '正しい',
                        '正しい',
                        '特約は被保険者全員に付加され、一部の者のみに付加することはできない', //p85
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '雑所得として所得税の課税対象 → 非課税', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '一時所得 → 退職所得', //p112
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '基金型企業年金 → 規約型企業年金', //p99
                        '正しい',
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
                        '30年（360月） → 40年（480月）', //p138
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '厚生年金保険の保険料は事業主と従業員（被保険者本人）で[[1/2ずつ負担する]]', //p137
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法令上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '「不適正な乗換募集」として保険業法上の[[禁止行為に該当する]]', //p160
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険と保全・アフターサービス"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '復活して失効期間中の支払事由に相当する事故は[[保障の対象とならない]]', //p173
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
                        '2月16日から3月15日まで',
                        '源泉徴収',
                        '退職所得',
                        '20',
                        '医療費控除', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'オ', //26
                        'ケ', //27
                        'エ', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="確定拠出年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        'ポータビリティ',
                        '加入者自ら',
                        '時価評価',
                        'リスク・リターン',
                        '3ヶ月', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'ク', //31
                        'ケ', //32
                        'キ', //33
                        'エ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="相続税の税額の計算過程"
                    :relatedProblems="[]"
                    :contents="[
                        '14500',
                        '6900',
                        '6160',
                        '1293',
                        '1078', // 問35〜39
                    ]"
                    :labels="[
                        'コ', //35
                        'キ', //36
                        'カ', //37
                        'エ', //38
                        'ア', //39
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
                            questionTitle: '遺言',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '短期金利と長期金利',
                            relatedProblems: [],
                            content: '3年 → 1年', //p128
                        }, //43
                        {
                            questionTitle: '厚生年金保険（老齢厚生年金）の受給条件',
                            relatedProblems: [],
                            content: '6ヶ月 → 1ヶ月', //p139
                        }, //44
                        {
                            questionTitle: '総合福祉団体定期保険のクロージング',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '保険法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '金利の基礎知識',
                            relatedProblems: [],
                            content: '終価 → 現価', //p126
                        }, //47
                        {
                            questionTitle: '個人情報保護法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '解約手続きの留意点',
                            relatedProblems: [],
                            content: '解約請求できるのは契約者と被保険者 → 契約者のみ<br>契約者・被保険者の意思確認 → 契約者の意思確認', //p174
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2021-h2-a" next-href="/ouyou/2021-h2-c" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
