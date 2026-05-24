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
const subject = "2021年度 8月〜3月実施 フォームC";
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
                    questionTitle="所得税の申告"
                    :relatedProblems="[]"
                    :contents="[
                        '1月16日から2月25日まで → 2月16日から3月15日まで', //p34
                        '正しい',
                        '10万円 → 20万円', //p34
                        '医療費控除は年末調整の対象 → 医療費控除は年末調整の対象とならない', //p34
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
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        '贈与税（暦年課税）に配偶者控除もある', //p55
                        '一度適用すると、選択した親や祖父母からの贈与については、暦年課税に変更できない', //p57
                        '正しい',
                        '贈与した人の居住地の所轄税務署長 → 贈与を受けた人の居住地の所轄税務署長', //p57
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税、法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '株主等が5人以下およびその同族関係者で発行株式総数または出資金額あるいは議決権等の30%超を有する会社 → 株主等が3人以下およびその同族関係者で発行株式総数または出資金額あるいは議決権等の50%超を有する会社', //p79
                        '法人の所在地に応じて課せられる「地域割」 → 法人税額に応じて課せられる「法人税割」', //p79
                        '法人の規模や営む事業にかかわらず一律の税率 → 法人の規模や営む事業により税率が異なる', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '3つに区分 → 4つに区分（第Ⅰ種から第Ⅳ種）', //p82
                        '5年 → 1年', //p83
                        '統一保険料率 → 平均保険料率', //p84
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
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
                    questionTitle="確定給付企業年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '加入者個人の拠出がある場合は生命保険料控除（一般生命保険料控除）の対象となる', //p102
                        '正しい',
                        '給与所得として所得税の課税対象 → 雑所得として所得税の課税対象', //p102
                        '給与所得として所得税の課税対象 → 非課税', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '30年（360月） → 40年（480月）', //p138
                        '正しい',
                        '被保険者期間が6ヶ月以上 → 被保険者期間が1ヶ月以上', //p139
                        '付加年金 → 加給年金', //p139
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
                        'お客さまから「契約概要」および「注意喚起情報」を記載した書面の記載事項を了知した旨の[[確認をいただく必要がある]]', //p149
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
                    questionTitle="所得の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '総収入金額から、その収入を得るために支出した金額（必要経費）を差し引くことができない → 総収入金額から、その収入を得るために支出した金額（必要経費）を差し引いた金額が事業所得', //p16
                        '正しい',
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
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[遺言は原則的に法定相続の規定に優先する]]効力をもっている', //p55
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
                    questionTitle="確定拠出年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '給与所得として所得税の課税対象 → 退職所得として所得税の課税対象', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '脱退一時金もある', //p101
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
                        '935万円 → 550万円', //p117
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '遺族基礎年金の受給額は、加入期間にかかわらず定額であり、[[子の人数に応じて加算額が上乗せされる]]', //p144
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
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '契約締結後 → 契約締結前', //p168
                        '正しい',
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
                    questionTitle="金利の決まり方"
                    :relatedProblems="[]"
                    :contents="[
                        '利息（価格）',
                        '設備投資',
                        '日本銀行',
                        '公開市場操作（オペレーション）',
                        '1年', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'コ', //26
                        'ア', //27
                        'キ', //28
                        'オ', //29
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
                        '14800',
                        '6700',
                        '6070',
                        '1214',
                        '1062', // 問35〜39
                    ]"
                    :labels="[
                        'ケ', //35
                        'キ', //36
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
                            questionTitle: '税金',
                            relatedProblems: [],
                            content: '普通税と目的税 → 国税と地方税', //p14
                        }, //40
                        {
                            questionTitle: '所得税の税額控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '相続時精算課税制度',
                            relatedProblems: [],
                            content: '受贈者である子または孫は、この制度の適用を贈与者である親や祖父母ごとに[[選択することができる]]', //p57
                        }, //42
                        {
                            questionTitle: '個人の住民税の申告',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '複利型商品',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '総合福祉団体定期保険のクロージング',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '保険法',
                            relatedProblems: [],
                            content: '[[商法]]では、告知する事項を契約者等が判断して告知する義務（自発的申告義務）と規定されていたのに対し、[[保険法では、保険会社が質問したことだけを答えれば良いという義務（質問応答義務）に変更された]]', //p158-159
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

            <TestNavigationButtons previous-href="/ouyou/2021-h2-b" next-href="/ouyou/2021-h2-d" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
