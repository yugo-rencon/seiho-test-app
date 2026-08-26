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
const subject = "2025年 8月〜3月実施 フォームC";
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
                        '事業所得の金額とは総収入金額のこと → 事業所得の金額とは総収入金額から、その収入を得るために支出した金額（必要経費）を差し引いた金額のこと', //p16
                        '1/3 → 1/2', //p17
                        '正しい',
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
                        '一時所得として所得税の課税対象 → 贈与税の課税対象', //p59
                        '贈与税の課税対象 → 相続税（保険金非課税の取り扱い有り）の課税対象', //p59
                        '雑所得として所得税の課税対象 → 一時所得として所得税の課税対象', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        '贈与税（暦年課税）の控除の種類に配偶者控除（贈与の特例）もある', //p55
                        '基礎控除額以下の場合には贈与税の申告をする必要はない', //p57
                        '贈与を受けた年の翌年1月15日から2月15日まで → 贈与を受けた年の翌年2月1日から3月15日まで', //p57
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
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '3つに区分 → 4つに区分（第Ⅰ種から第Ⅳ種）', //p82
                        '5年 → 1年', //p83
                        '正しい',
                        '被保険者の同意は不要 → 被保険者の同意が必要', //p86
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
                        '正しい',
                        '事業年度の翌事業年度に益金に算入 → 事業年度の益金に算入', //p87
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '961,992円',
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
                                    value: ['将来価値：100万円', '利率：1.3%（＝ 0.013）', '期間：3年'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価', '= 1,000,000 ÷ （1 ＋ 0.013）<sup>3</sup> ・・・（1.013）<sup>3</sup> = 1.039509 = 1.03951（小数点第6位を四捨五入）', '= 1,000,000 ÷ 1.03951 = 961,991.7'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 961,992円（円未満を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
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
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '対象が狭くなっている → 対象が幅広くなっている', //p144
                        '1/4 → 2/3', //p143
                        '遺族基礎年金の受給額は、加入期間にかかわらず定額であり、[[子の人数に応じて加算額が上乗せされる]]', //p144
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
                        '正しい',
                        '媒介 → 代理', //p149
                        '司法処分（拘禁系もしくは罰金または両者の併科）の[[対象となる]]', //p152
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
                        '正しい',
                        '請求書類や診断書の内容によって決められるため、安易に回答せず、生命保険会社のしかるべき専門の担当者や担当部門に確認することが大切', //p173
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
                        '同居・非同居にかかわらず1人につき同額 → 同居の場合1人につき58万円、非同居の場合1人につき48万円', //p22
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
                        '正しい',
                        '課税価格の合計額が基礎控除額以下である場合でも相続税の申告が必要 → 相続税の申告は不要', //p52
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
                        '以前は株式会社の設立に1000万円以上の資本金が必要だったが、会社法の施行によりその規定がなくなった', //p71
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金制度の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '加入者が障害給付金を一時金で受け取った場合、[[非課税扱いとなる]]', //p102
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
                        '正しい',
                        '一律30% → 一律20%', //p117
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
                        '借りたい人が多ければ金利は[[上昇]]し、貸したい人が多ければ金利は[[低下]]する', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '第2号被保険者 → 第1号被保険者', //p136
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
                        '「誤解を招く表示・説明」に[[該当する]]', //p161
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
                        '法定代理人(親権者または未成年後見人）の同意が[[必要]]', //p168
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '保険料納付済',
                        '裁定請求',
                        '減額',
                        '増額',
                        '報酬比例', // 問25〜29
                    ]"
                    :labels="[
                        'オ', //25
                        'イ', //26
                        'ウ', //27
                        'エ', //28
                        'コ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="生命保険募集人が遵守すべき法令等"
                    :relatedProblems="[]"
                    :contents="[
                        '特定保険',
                        '契約締結前交付書面',
                        '本人からの求めに対応',
                        '200',
                        '要求できない', // 問30〜34
                    ]"
                    :labels="[
                        'キ', //30
                        'ケ', //31
                        'ア', //32
                        'カ', //33
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
                        '9200',
                        '7800',
                        '5138',
                        '1335',
                        '1120', // 問35〜39
                    ]"
                    :labels="[
                        'ア', //35
                        'エ', //36
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
                            questionTitle: '相続財産の評価',
                            relatedProblems: [],
                            content: '正しい',
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
                            questionTitle: '個人の住民税',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '30% → 50%', //p79
                        }, //44
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '厚生年金保険の保険料負担',
                            relatedProblems: [],
                            content: '厚生年金保険の保険料は事業主と従業員（被保険者本人）で[[1/2ずつ負担する]]', //p137
                        }, //46
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '保険法',
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

            <TestNavigationButtons previous-href="/ouyou/2025-h2-b" next-href="/ouyou/2025-h2-d" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
