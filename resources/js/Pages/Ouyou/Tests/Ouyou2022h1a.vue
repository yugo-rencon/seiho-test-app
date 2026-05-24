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
const subject = "2022年度 4月〜7月実施 フォームA";
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
                        '雇用保険の保険料も控除の対象', //p27
                        '合計所得金額が2000万円以下 → 1000万円以下', //p20
                        '同居・非同居にかかわらず1人につき38万円 → 同居の場合1人につき58万円、非同居の場合1人につき48万円', //p22
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
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '3つに区分 → 4つに区分（第Ⅰ種から第Ⅳ種）', //p82
                        '2年 → 1年', //p83
                        '特約を付加する時期は主契約締結時あるいは更新時に限られ、被保険者の同意が必要', //p85
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
                        '65歳 → 60歳', //p136
                        '第1号被保険者は20歳以上[[60歳]]未満<br>第[[2]]号被保険者の被扶養配偶者が第[[3]]号被保険者となる', //p
                        '希望により国民年金に任意加入することができる', //p136
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
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
                        '総収入金額から、その収入を得るために支出した金額（必要経費）を差し引くことができない → 総収入金額から、その収入を得るために支出した金額（必要経費）を差し引いた金額が事業所得', //p16
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
                        '', //p
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
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '以前は株式会社の設立に1000万円以上の資本金が必要だったが、会社法の施行によりその規定がなくなった', //p71
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '法人の所在地に応じて課せられる「地域割」 → 法人の所得に関係なく法人の規模に応じて決められる「均等割」', //p79
                        '正しい',
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
                        '多くの個人保険商品と同様、積立金等の計算の基礎（予定利率）は固定しており、変更されることはない → 多くの個人保険商品と異なり、積立金等の計算の基礎（予定利率）は変更される場合がある', //p117
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
                        '借りたい人が多ければ金利は[[上昇]]し、貸したい人が多ければ金利は[[低下]]する', //p127
                        '正しい',
                        '正しい',
                        '正しい',
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
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '法定代理人(親権者または未成年後見人）の同意が[[必要]]', //p168
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
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '二階建て',
                        '1/2',
                        '70歳',
                        '標準報酬月額',
                        '被扶養配偶者分', // 問25〜29
                    ]"
                    :labels="[
                        'オ', //p
                        'キ', //p
                        'イ', //p
                        'ケ', //p
                        'コ', //p
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
                        '団体',
                        '威迫',
                        '誹謗・中傷', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //p
                        'ウ', //p
                        'コ', //p
                        'ケ', //p
                        'キ', //p
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'コ', //p
                        'ウ', //p
                        'ク', //p
                        'カ', //p
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
                            questionTitle: '税金',
                            relatedProblems: [],
                            content: '直接税と間接税 → 国税と地方税', //p14
                        }, //40
                        {
                            questionTitle: '住宅借入金等特別控除',
                            relatedProblems: [],
                            content: '',
                        }, //41
                        {
                            questionTitle: '経営者保険',
                            relatedProblems: [],
                            content: '',
                        }, //42
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '固定金利商品と変動金利商品',
                            relatedProblems: [],
                            content: '金利が今後上昇しそうな場合には[[変動金利商品]]が有利となり、逆に金利が今後下降しそうな場合には、[[固定金利商品]]が有利となる', //p130
                        }, //44
                        {
                            questionTitle: '公的年金（障害年金）の障害認定の要件',
                            relatedProblems: [],
                            content: '障害認定日に、[[国民年金の場合は障害等級1級・2級]]、[[厚生年金保険の場合は1級・2級・3級]]の状態にあること', //p142
                        }, //45
                        {
                            questionTitle: '遺族基礎年金の受給額',
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
                            content: '100万円 → 200万円', //p157
                        }, //48
                        {
                            questionTitle: '銀行窓販の弊害防止措置',
                            relatedProblems: [],
                            content: '',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2023-h2-d" next-href="/ouyou/2022-h1-b" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
