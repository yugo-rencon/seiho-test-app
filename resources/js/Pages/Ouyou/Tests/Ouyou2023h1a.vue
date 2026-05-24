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
const subject = "2023年度 4月〜7月実施 フォームA";
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
                        '労務や役務の対価としての性質や資産の譲渡による対価としての性質を有する → 労務や役務の対価としての性質や資産の譲渡による対価としての性質を有しない', //p17
                        '正しい',
                        '財形年金積立保険にもとづく年金や著述家・作家が受ける原稿料や印税などは該当しない', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        '介護保険の保険料も控除の対象', //p27
                        '合計所得金額が2000万円以下 → 1000万円以下<br>最高48万円まで → 最高38万円まで', //p20
                        '同居・非同居にかかわらず1人につき一律38万円 → 同居の場合1人につき58万円、非同居の場合1人につき48万円', //p22
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産と非課税財産"
                    :relatedProblems="[]"
                    :contents="[
                        '相続財産に特許権、営業権も含まれる', //p42
                        '正しい',
                        '800万円 → 500万円', //p44
                        '業務上死亡・業務外死亡を問わず3年分相当額 → 業務上死亡では3年分相当額、業務上死亡では6ヶ月分相当額', //p44
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
                    questionTitle="確定拠出年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '掛金の拠出限度額はない → 拠出限度額の範囲内で掛金を拠出することができる', //p94
                        '公務員や専業主婦等(国民年金被保険者）も加入できる', //p94
                        '加入者自らが運用の指図を行うことはない → 加入者自らが運用の指図を行う', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '年金規約に年金と一時金との選択支給を[[定めることができる]]', //p101
                        '確定給付企業年金の給付には、老齢給付金、障害給付金、遺族給付金（および死亡一時金）、[[脱退一時金]]がある', //p101
                        '委託者責任 → 受託者責任', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '損金算入 → 資産計上', //p106
                        '正しい',
                        '[[支払った金額が社会通念上妥当]]なものであれば損金算入できる', //p111
                        '企業が受け取る配当金は原則として[[益金に算入することになっている]]', //p111
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="9"
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
                        'ウ', //9
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
                        '国民年金の第1号被保険者の被扶養配偶者 → 国民年金の第2号被保険者の被扶養配偶者', //p136
                        '第2号被保険者 → 第1号被保険者', //p136
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '3つの要件を[[すべて満たせ]]ば受給することができる', //p142
                        '遺族厚生年金を受給できる遺族は、遺族基礎年金より[[対象が幅広くなっている（同一でない）]]', //p144
                        '正しい',
                        '遺族基礎年金の受給額は、[[加入期間にかかわらず定額であり、子の人数に応じて加算額が上乗せされる]]', //p144
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金等の請求と支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '[[「契約内容登録制度」「契約内容照会制度」に加え]]、2005年から[[「支払査定時照会制度」]]を管理・運営している', //p172
                        '金融庁 → 生命保険会社', //p172
                        '安易に回答せず、生命保険会社のしかるべき専門の担当者や担当部門に確認することが大切', //p173
                        '正しい',
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
                        '正しい',
                        'あらかじめ税務署長の承認を受ける必要はない → あらかじめ税務署長の承認を受ける必要がある', //p35
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
                        '年金の種類を問わず、原則として[[（ア）解約返戻金相当額（イ）年金に代えて一時金の給付を受けられる場合は一時金相当額（ウ）予定利率等をもとに算出した金額 のうちいずれか多い金額]]で評価される', //p45
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        '50万円 → 110万円', //p56
                        '正しい',
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
                        '正しい',
                        '正しい',
                        '個人事業主本人を被保険者 → 使用人を被保険者', //p67
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '法人の規模や営む事業にかかわらず一律の税率 → 法人の規模や営む事業により税率が異なる', //p80
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
                        '平準保険料 → 平均保険料', //p84
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
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
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '5年 → 1年', //p128
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '80歳 → 70歳', //p137
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
                    questionTitle="保険業法上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '「断定的な予想配当等の表示・説明」に[[該当する]]', //p161
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
                        'カ', //25
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
                    questionTitle="所得税の税額の計算過程"
                    :relatedProblems="[]"
                    :contents="[
                        '356',
                        '20',
                        '70',
                        '48',
                        '5.35', // 問35〜39
                    ]"
                    :labels="[
                        'ケ', //35
                        'ウ', //36
                        'ク', //37
                        'キ', //38
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
                            content: '国税は、所得税、法人税などの[[直接税]]、消費税、酒税などの[[間接税]]とに分けられる', //p14
                        }, //40
                        {
                            questionTitle: '住宅借入金等特別控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '年金と税金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '確定拠出年金の税務',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '複利型商品',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '契約の取消し等ができるのは、お客さまが誤認に気づいた時や困惑の状況から解放された時などから原則[[1年以内]]で、契約締結時から原則[[5年以内]]となる', //p153
                        }, //46
                        {
                            questionTitle: '金融商品取引法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '保険法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2024-h2-d" next-href="/ouyou/2023-h1-b" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
