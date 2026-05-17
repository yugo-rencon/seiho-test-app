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
const subject = "2025年度 4月〜7月実施 フォームB";
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
                        '地震保険料控除も所得控除に該当する', //p19
                        '同居・非同居にかかわらず1人につき同額 → 同居の場合1人につき58万円、非同居の場合1人につき48万円', //p22
                        '雇用保険の保険料も控除の対象', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告"
                    :relatedProblems="[]"
                    :contents="[
                        '1月16日から2月25日まで → 2月16日から3月15日まで', //p34
                        '1500万円 → 2000万円', //p34
                        '5万円 → 20万円', //p34
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告手続と納付方法"
                    :relatedProblems="[]"
                    :contents="[
                        '課税価格の合計額が基礎控除額以下である場合でも相続税の申告が必要 → 相続税の申告は不要', //p52
                        '正しい',
                        '納付期限の3ヶ月後 → 納付期限の翌日', //p52
                        '相続財産で物納することはできない → 延納によっても現金で納付することが困難な場合、相続財産で物納することができる', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '一時所得として所得税の課税対象 → 贈与税の課税対象', //p59
                        '雑所得として所得税の課税対象 → 一時所得として所得税の課税対象', //p59
                        '相続税（保険金非課税の取り扱い有り）の課税対象 → 相続税（保険金非課税の取り扱い無し）の課税対象', //p59
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '事業所の所在地に応じて課せられる「地域割」 → 法人税額に応じて課せられる「法人税割」', //p79
                        '保険料が損金算入されることはないため、事業税がそれに応じて少なくなることもない → 保険料は損金算入されるため、事業税もそれに応じて少なくなる', //p80
                        '法人の規模や営む事業にかかわらず一律の税率 → 法人の規模や営む事業により税率が異なる', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '特約保険料は損金算入できない → 特約保険料も含めて全額を損金算入できる', //p86
                        '従業員に対する給与とみなされ所得税が課税される → 従業員に対する給与とみなされることはなく所得税は課税されない', //p86
                        '雑所得として所得税の課税対象 → 全額非課税', //p87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '掛金の拠出限度額はない → 拠出限度額の範囲内で掛金を拠出することができる', //p94
                        '老齢給付金や障害給付金があるが、死亡一時金や脱退一時金はない → 老齢給付金、障害給付金、死亡一時金および脱退一時金がある', //p98
                        'スイッチング → ポータビリティ', //p95
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '所得控除の対象とはならない → 全額所得控除（小規模企業共済等掛金控除）の対象', //p98
                        '正しい',
                        '例外なく所得税の課税対象 → 所定の手続きを前提として、所得税は非課税', //p99
                        '雑所得として所得税の課税対象 → 非課税', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '2.31%',
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
                                    value: ['1,000,000円 ×（1＋0.0285）<sup>2</sup>', '＝ 1,057,812円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['税引き前利息：1,057,812円 − 1,000,000円 ＝ 57,812円', '税金：57,812円 × 20% ＝ 11,562円', '税引き後利息：57,812円 − 11,562円 ＝ 46,250円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['46,250円 ÷ 1,000,000円 ÷ 2年 × 100', '＝ 2.3125%', '＝ 2.31%'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 2.31%（小数第3位を四捨五入）',
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
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '解約請求できるのは契約者と被保険者 → 契約者のみ<br>契約者・被保険者の意思確認 → 契約者の意思確認', //p174
                        '解約理由によっては、解約せずに別の方法で対処できる場合があることを案内することが大切', //p175
                        '解約によるデメリットについてお客様にお伝えする必要がある', //p175
                        '正しい',
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
                        '正しい',
                        '1/3 → 1/2', //p17
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="[]"
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
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '基礎控除額以下の場合には贈与税の申告をする必要はない', //p57
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
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '以前は株式会社の設立に1000万円以上の資本金が必要だったが、会社法の施行によりその規定がなくなった', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '5年 → 1年', //p83
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '加入者個人の拠出がある場合は生命保険料控除（一般生命保険料控除）の対象となる', //p102
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '借りたい人が多ければ金利は[[上昇]]し、貸したい人が多ければ金利は[[低下]]する', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
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
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法令上の禁止行為"
                    :relatedProblems="[]"
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
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="法人税の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        '協同組合',
                        '申告納税',
                        '2ヶ月',
                        '決算利益',
                        '税務調査', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'ク', //26
                        'ア', //27
                        'オ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '保険料納付済',
                        '裁定請求',
                        '減額',
                        '増額',
                        '報酬比例', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //30
                        'イ', //31
                        'ウ', //32
                        'エ', //33
                        'コ', //34
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
                        '9000',
                        '7600',
                        '5379',
                        '1344',
                        '1227', // 問35〜39
                    ]"
                    :labels="[
                        'ア', //35
                        'オ', //36
                        'カ', //37
                        'ク', //38
                        'ケ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '相続税の課税財産と非課税財産',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '遺言',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '個人の住民税',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '勤労者財産形成制度（財形制度）',
                            relatedProblems: [],
                            content: '多くの個人保険商品と同様、積立金等の計算の基礎（予定利率）は固定しており、変更されることはない → 多くの個人保険商品と異なり、積立金等の計算の基礎（予定利率）は変更される場合がある', //p117
                        }, //44
                        {
                            questionTitle: '固定金利商品と変動金利商品',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '厚生年金保険の保険料負担',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '失効（復活）手続きの留意点',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2025-h1-a" next-href="/ouyou/2025-h2-a" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
