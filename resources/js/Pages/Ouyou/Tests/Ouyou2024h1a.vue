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
const subject = "2024年度 4月〜7月実施 フォームA";
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
                    questionTitle="相続税の課税財産と非課税財産"
                    :relatedProblems="[]"
                    :contents="[
                        '相続財産に特許権、営業権も含まれる', //p42
                        '正しい',
                        '業務上死亡・業務外死亡を問わず3年分相当額 → 業務上死亡では3年分相当額、業務上死亡では6ヶ月分相当額', //p44
                        'みなし相続財産も相続税の課税対象となる', //p43
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告手続と納付方法"
                    :relatedProblems="[]"
                    :contents="[
                        '課税価格の合計額が基礎控除額以下である場合でも相続税の申告が必要 → 相続税の申告は不要', //p52
                        '6ヶ月以内 → 10ヶ月以内', //p52
                        '正しい',
                        '相続財産で物納することはできない → 延納によっても現金で納付することが困難な場合、相続財産で物納することができる', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '雑所得として所得税の課税対象 → 贈与税の課税対象', //p59
                        '所得税（一時所得）の課税対象 → 贈与税の課税対象', //p59
                        '相続税（保険金非課税の取り扱い有り）の課税対象 → 相続税（保険金非課税の取り扱い無し）の課税対象', //p59
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '所得税の確定申告書を税務署長に提出した人は、[[住民税の申告書を提出したものとみなされる]]', //p62
                        '市町村が課税 → 都道府県が課税', //p65
                        '個人事業主本人を被保険者 → 使用人を被保険者', //p67
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        '資本金1億円超 → 資本金1億円以下', //p70
                        '普通法人企業に合同会社・合資会社も含まれる', //p71
                        '以前は株式会社の設立に1000万円以上の資本金が必要だったが、会社法の施行によりその規定がなくなった', //p71
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '地域割 → 法人税割', //p79
                        '法人の規模や営む事業にかかわらず税率は同一 → 法人の規模や営む事業により税率が異なる', //p80
                        '保険料は損金算入されない → 保険料は損金算入される', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '掛金の拠出限度額はない → 拠出限度額の範囲内で掛金を拠出することができる', //p94
                        'スイッチング → ポータビリティ', //p95
                        '正しい',
                        '50歳から受給 → 60歳から受給', //p98
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
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
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '945,099円',
                            questionTitle: '現価計算',
                            relatedProblems: [''],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '将来受け取る金額の現価は、利率を用いて現在価値に割り引いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価 ＝ 将来価値 ÷（1 ＋ 利率）<sup>年数</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['将来価値：100万円', '利率：1.9%（＝ 0.019）', '期間：3年'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価', '= 1,000,000 ÷ （1 ＋ 0.019）<sup>3</sup> ・・・（1.019）<sup>3</sup> = 1.058089 = 1.05809（小数点第6位を四捨五入）', '= 1,000,000 ÷ 1.05809 = 945,099.1'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 945,099円（円未満を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="勤労者財産形成制度（財形制度）"
                    :relatedProblems="[]"
                    :contents="[
                        '600万円 → 550万円', //p117
                        '一律15% → 一律20%', //p117
                        '多くの個人保険商品と同様、積立金等の計算の基礎（予定利率）は固定しており、変更されることはない → 多くの個人保険商品と異なり、積立金等の計算の基礎（予定利率）は変更される場合がある', //p117
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '35年（420月） → 40年（480月）', //p138
                        '年金の給付は3ヶ月ごとに3ヶ月分が支給 → 年金の給付は2ヶ月ごとに2ヶ月分が支給', //p138
                        '正しい',
                        '被保険者期間が3年以上 → 被保険者期間が1ヶ月以上<br>63歳から支給 → 65歳から支給', //p139
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金等の請求と支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '[[「契約募集時」「契約期間中」「請求受付・案内時」の各段階]]にこれらの支払いに関する情報提供を行うことが大切', //p172
                        '[[「契約内容登録制度」「契約内容照会制度」に加え]]、2005年から[[「支払査定時照会制度」]]を管理・運営している', //p172
                        '金融庁 → 生命保険会社', //p172
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
                        '正しい',
                        '総収入金額の全額が雑所得 → 総収入金額から公的年金等控除額を差し引いた金額が雑所得', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '[[遺言は原則的に法定相続の規定に優先する]]効力をもっている', //p55
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
                        '基礎控除額以下の場合には贈与税の申告をする必要はない', //p57
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '特約を付加する時期は主契約締結時あるいは更新時に限られ、被保険者の同意が必要', //p85
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
                    questionTitle="確定給付企業年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '加入者個人の拠出がある場合は生命保険料控除（一般生命保険料控除）の対象となる', //p102
                        '正しい',
                        '正しい',
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
                        '負担すべき保険料は、被保険者の「標準報酬月額」[[「標準賞与額」]]に所定の保険料率を乗じて算出する', //p137
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        'お客さまにとって金利が今後上昇しそうな場合には[[変動金利商品]]が有利', //p130
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '媒介 → 代理', //p149
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
                        '正しい',
                        '保険契約締結後 → 保険契約締結前', //p168
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
                    questionTitle="法人税の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        '公益法人',
                        '申告納税',
                        '2ヶ月',
                        '決算利益',
                        '税務調整', // 問25〜29
                    ]"
                    :labels="[
                        'イ', //25
                        'ク', //26
                        'コ', //27
                        'ア', //28
                        'ウ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="総合福祉団体定期保険の販売手順"
                    :relatedProblems="[]"
                    :contents="[
                        'アプローチ',
                        '性別',
                        '平均年齢',
                        '保険金額',
                        '保険証券', // 問30〜34
                    ]"
                    :labels="[
                        'カ', //30
                        'エ', //31
                        'コ', //32
                        'ウ', //33
                        'ア', //34
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
                        '502',
                        '15',
                        '98',
                        '48',
                        '12.25', // 問35〜39
                    ]"
                    :labels="[
                        'キ', //35
                        'オ', //36
                        'エ', //37
                        'コ', //38
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
                            questionTitle: '税金',
                            relatedProblems: [],
                            content: '直接税と間接税 → 国税と地方税', //p14
                        }, //40
                        {
                            questionTitle: '所得税の税額控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '相続時精算課税制度',
                            relatedProblems: [],
                            content: '一度この制度を適用すると、選択した親や祖父母からの贈与については、[[暦年課税に変更できない]]', //p57
                        }, //42
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '30% → 50%', //p79
                        }, //43
                        {
                            questionTitle: '複利型商品',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '遺族基礎年金の受給額',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '契約の取消し等ができるのは、お客さまが誤認に気づいた時や困惑の状況から解放された時などから原則[[1年以内]]で、契約締結時から原則[[5年以内]]となる', //p153
                        }, //47
                        {
                            questionTitle: '保険法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '失効（復活）手続きの留意点',
                            relatedProblems: [],
                            content: '契約を復活しても失効期間中の支払事由に相当する事故は[[保障の対象にならない]]', //p173
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2025-h2-d" next-href="/ouyou/2024-h1-b" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
