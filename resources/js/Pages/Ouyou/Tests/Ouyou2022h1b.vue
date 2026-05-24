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
const subject = "2022年度 4月〜7月実施 フォームB";
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
                        '正しい',
                        '総収入金額から、その収入を得るために支出した金額（必要経費）を差し引くことができない → 総収入金額から、その収入を得るために支出した金額（必要経費）を差し引いた金額が事業所得', //p16
                        '収入金額から退職所得控除額を差し引いた額の全額 → 収入金額から退職所得控除額を差し引いた残りの1/2', //p17
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
                        '正しい',
                        '業務上死亡・業務外死亡を問わず3年分相当額 → 業務上死亡では3年分相当額、業務上死亡では6ヶ月分相当額', //p44
                        'みなし相続財産も相続税の課税対象となる', //p43
                        '相続財産に特許権、営業権も含まれる', //p42
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '死亡保険金を受け取ることによる[[相続税額の増加分も考慮して]]生命保険に加入することが必要', //p54
                        '代襲相続 → 代襲分割', //p54
                        '正しい',
                        '遺言には、主に「自筆証書遺言」「[[公正証書遺言]]」「[[秘密証書遺言]]」の3通りの方式がある', //p55
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
                        '資本金10億円超 → 資本金1億円以下', //p70
                        '正しい',
                        '以前は株式会社の設立に1000万円以上の資本金が必要だったが、会社法の施行によりその規定がなくなった', //p71
                        '生活設計販売 → 制度設計販売<br>生活設計を販売 → 福利厚生制度を販売', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '法人の所在地に応じて課せられる「地域割」 → 法人の所得に関係なく法人の規模に応じて決められる「均等割」', //p79
                        '正しい',
                        '市町村（東京都23区は「特別区」） → 都道府県', //p80
                        '法人の規模や営む事業にかかわらず一律の税率 → 法人の規模や営む事業により税率が異なる', //p80
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
                        '公務員や専業主婦等(国民年金第3号被保険者）も加入できる', //p94
                        '加入者自らが運用の指図を行うことはない → 加入者自らが運用の指図を行う', //p96
                        '老齢給付金や障害給付金があるが、死亡一時金や脱退一時金はない → 老齢給付金、障害給付金、死亡一時金および脱退一時金がある', //p98
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
                        '損金算入できない → 全額損金算入となる', //p98
                        'すべて所得税の課税対象 → 所定の手続きを前提として、所得税は非課税', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '967,717円',
                            questionTitle: '現価計算',
                            relatedProblems: [],
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
                                    value: ['将来価値：100万円', '利率：1.1%（＝ 0.011）', '期間：3年'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価', '= 1,000,000 ÷ （1 ＋ 0.011）<sup>3</sup> ・・・（1.011）<sup>3</sup> = 1.033364 = 1.03336（小数点第6位を四捨五入）', '= 1,000,000 ÷ 1.03336 = 967,716.9'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 967,717円（円未満を四捨五入）',
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
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '80歳 → 70歳', //p137
                        '負担すべき保険料は、被保険者の「標準報酬月額」[[「標準賞与額」]]に所定の保険料率を乗じて算出する', //p137
                        '厚生年金保険の保険料は事業主と従業員（被保険者本人）で[[1/2ずつ負担する]]', //p137
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
                        '法定代理人(親権者または未成年後見人）の同意が[[必要]]', //p168
                        '正しい',
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
                        '正しい',
                        '請求者本人の解約の意思確認だけすれば取扱者が記入してよい → 契約者本人が署名・押印する必要がある', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        '国民年金基金の掛金も控除の対象', //p27
                        '正しい',
                        '正しい',
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
                        'いずれか少ない金額 → いずれか多い金額', //p45
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告手続と納付方法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '相続財産で物納することはできない → 延納によっても現金で納付することが困難な場合、相続財産で物納することができる', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '雑所得として所得税の課税対象 → 贈与税の課税対象', //p59
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '会社の課税所得は、会社の決算利益とは[[必ずしも一致しない]]', //p76
                        '正しい',
                        '正しい',
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
                        '被保険者の同意は不要 → 被保険者の同意が必要', //p86
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の販売活動"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険料のうち[[定期保険部分、特約部分は損金算入できる]]', //p115
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
                        '500万円 → 550万円<br>300万円 → 385万円<br>800万円 → 550万円', //p117
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
                        '正しい',
                        'お客さまにとって金利が今後上昇しそうな場合には[[変動金利商品]]が有利', //p130
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '年金の給付は3ヶ月ごとに3ヶ月分が支給 → 年金の給付は2ヶ月ごとに2ヶ月分が支給', //p138
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '媒介 → 代理', //p149
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金等の請求と支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '[[「契約内容登録制度」「契約内容照会制度」に加え]]、2005年から[[「支払査定時照会制度」]]を管理・運営している', //p172
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '20歳',
                        '70歳',
                        '第1号',
                        '給与（賞与）からの天引き',
                        '国庫負担', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //p
                        'オ', //p
                        'ア', //p
                        'コ', //p
                        'ク', //p
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="募集上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '虚偽の説明',
                        '虚偽告知教唆',
                        '保険料の割引・割戻',
                        '断定的',
                        '業務上の地位', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //p
                        'ウ', //p
                        'ケ', //p
                        'イ', //p
                        'ク', //p
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
                        '565',
                        '15',
                        '90',
                        '48',
                        '19.35', // 問35〜39
                    ]"
                    :labels="[
                        'コ', //p
                        'ア', //p
                        'ク', //p
                        'カ', //p
                        'イ', //p
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
                            questionTitle: '住宅借入金等特別控除',
                            relatedProblems: [],
                            content: '租税特別所得控除 → 税額控除', //p29
                        }, //41
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '5人 → 3人<br>30% → 50%', //p79
                        }, //42
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '複利型商品',
                            relatedProblems: [],
                            content: '利率・期間が同じ場合、[[1年複利よりも半年複利、半年複利よりも1ヶ月複利商品]]の方が元利合計は大きくなる', //p131
                        }, //44
                        {
                            questionTitle: '公的年金（障害年金）の障害認定の要件',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '公的年金（遺族年金）の受給条件',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '銀行窓販の弊害防止措置',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2022-h1-a" next-href="/ouyou/2022-h2-a" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
