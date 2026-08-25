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
const subject = "2023年度 8月〜3月実施 フォームA";
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
                    questionTitle="所得税の所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '合計所得金額が2000万円以下 → 1000万円以下<br>最高48万円まで → 最高38万円まで', //p20
                        '同居・非同居にかかわらず1人につき一律38万円 → 同居の場合1人につき58万円、非同居の場合1人につき48万円', //p22
                        '雇用保険の保険料も控除の対象', //p27
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
                        '600万円 → 500万円', //p44
                        '1年分相当額 → 6ヶ月分相当額', //p44
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
                        '所得税が課税 → 相続税または贈与税が課税', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '公共目的で設立された公共法人には、[[法人税はかからない]]。', //p74
                        '法人は、原則として各事業年度終了日の翌日から[[2ヶ月以内]]に確定申告書を税務署に提出し、[[その提出期限まで]]に税金を納付する', //p75
                        '正しい',
                        '会社の課税所得は、会社の決算利益とは[[必ずしも一致しない]]', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '3つに区分 → 4つに区分（第Ⅰ種から第Ⅳ種）', //p82
                        '正しい',
                        '平準保険料 → 平均保険料', //p84
                        '特約を付加する時期は主契約締結時あるいは更新時に限られ、被保険者の同意が必要', //p85
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '所得控除の対象とはならない → 全額所得控除（小規模企業共済等掛金控除）の対象', //p98
                        '損金算入できない → 全額損金算入となる', //p98
                        '正しい',
                        '雑所得として所得税の課税対象 → 非課税', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '年金規約に一時金との選択支給を定めることもできる', //p101
                        '脱退一時金もある', //p101
                        '7年 → 5年', //p101
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="8"
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
                        'イ', //8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
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
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '3つの要件を[[すべて満たせ]]ば受給することができる', //p
                        '正しい',
                        '1/4 → 2/3', //p143
                        '遺族基礎年金の受給額は、[[加入期間にかかわらず定額であり、子の人数に応じて加算額が上乗せされる]]', //p144
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '厚生労働大臣 → 内閣総理大臣', //p148
                        '媒介 → 代理', //p149
                        '契約成立後 → 保険募集を行う際', //p149
                        '正しい',
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
                    questionTitle="所得税の申告"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '医療費控除は年末調整の対象 → 医療費控除は年末調整の対象とならない', //p34
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
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        'その保険料は[[必要経費とされる]]', //p67
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
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '特約保険料は損金算入できない → 特約保険料も含めて全額を損金算入できる', //p86
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '企業の拠出した掛金額は損金算入することができる', //p102
                        '正しい',
                        '正しい',
                        '正しい',
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
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '利率・期間が同じ場合、[[1年複利よりも半年複利、半年複利よりも1ヶ月複利商品]]の方が元利合計は大きくなる', //p131
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
                    questionTitle="保険業法上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '「告知妨害・不告知教唆」に[[該当する]]', //p160
                        '正しい',
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
                        '所定の期間内であれば復活して元に戻すことができる → 契約を元に戻すことはできない', //p174
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
                    questionTitle="相続財産の評価"
                    :relatedProblems="[]"
                    :contents="[
                        '現金',
                        '支払事由',
                        '高い',
                        '一時金',
                        '予定利率', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'ク', //26
                        'カ', //27
                        'イ', //28
                        'ケ', //29
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
                    questionTitle="相続税額の計算"
                    :relatedProblems="[]"
                    :contents="[
                        '14200',
                        '6800',
                        '5980',
                        '1255',
                        '1066', // 問35〜39
                    ]"
                    :labels="[
                        'コ', //35
                        'カ', //36
                        'オ', //37
                        'ウ', //38
                        'イ', //39
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
                            questionTitle: '住宅借入金等特別控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '相続時精算課税制度',
                            relatedProblems: [],
                            content: '一度この制度を適用すると、選択した親や祖父母からの贈与については、[[暦年課税に変更できない]]', //p57
                        }, //42
                        {
                            questionTitle: '贈与税',
                            relatedProblems: [],
                            content: '相続税よりも税負担が軽い → 相続税よりも税負担が重い', //p55
                        }, //43
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '総合福祉団体定期保険の販売手順',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '5年更新 → 1年更新', //p120
                        }, //46
                        {
                            questionTitle: '金利の基礎知識',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '個人情報保護法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '募集時の正しい説明',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2023-h1-b" next-href="/ouyou/2023-h2-b" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
