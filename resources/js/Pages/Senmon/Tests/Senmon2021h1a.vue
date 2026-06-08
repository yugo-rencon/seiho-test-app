<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2021年度 4月〜8月実施 フォーム①";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の現状"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '正しい',
                        '最近の特徴としては、保険金・給付金・年金などの諸支払いが[[増加]]してきており、とりわけ、[[手術給付金]]などの医療給付金の支払額・支払件数が[[増加]]している。', //p19
                        '年齢別の死因をみると、20歳代・30歳代では[[自殺や不慮の事故および悪性新生物（ガン）]]が、40歳代以上の中高齢者層では[[悪性新生物（ガン）や心疾患]]などが上位を占めている。', //p24
                        '60%以上 → 約39%', //p25
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '生命表には、国民生命表と経験生命表があり、現在、生命保険会社では、[[経験生命表]]である「生保標準生命表2018」等を保険料算定の基礎として使用している。', //p38-39
                        '生命表から、各年齢者が今後平均して何年間生存できるかがわかる。この年数を[[平均余命]]といい、０歳の[[平均余命]]を[[平均寿命]]と呼んでいる。', //p39
                        '正しい',
                        '各生命保険会社では、平均寿命が延びたために低い予定死亡率表を用いたり、生命保険会社の経営努力によって予定事業費率を下げたり、市中金利や運用状況により予定利率を上下させたりするなどにより、予定率の見直しを行い、[[保険料の改定を行うことがある]]。', //p40-41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '既払込保険料総額 → 解約返戻金', //p61
                        '正しい',
                        '契約者に対する貸付も生命保険会社が行う[[資産運用の一部である]]。', //p61
                        '契約者貸付を受けた契約でも受けていない契約と[[同様の配当金が支払われる]]。', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直しに関する諸制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '解約返戻金 → 責任準備金', //p64
                        '長期契約における特別配当の権利は、[[新しい契約にも引き継がれる]]。', //p65
                        '正しい',
                        '「契約転換制度」を利用する際の保険料は、[[転換時]]の契約年齢、保険料率により計算される。', //p65
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="法令上の禁止行為（虚偽の説明となる事例）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '断定的な予想配当等の表示・説明 → 虚偽の説明', //p84
                        '正しい',
                        '特別の利益の提供 → 虚偽の説明', //p84
                        '虚偽の説明 → 誤解されるおそれのある比較', //p85
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効（復活）手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '復活しても失効期間中の支払事由に相当する事故は[[保障の対象にならない]]。', //p97
                        '正しい',
                        '復活の手続き時には、[[復活に関する重要事項の説明をして、お客さまの納得のもと必要書類の自署・押印をいただくこと]]が必要。', //p97
                        '復活の意思がない場合は、[[すみやかに解約の請求について案内することが必要]]。', //p97
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="JA共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '厚生労働省 → 農林水産省', //p101
                        '正しい',
                        '団体向けに[[団体定期生命共済などもある]]。', //p101
                        'ＪＡ共済の養老生命共済・終身共済・定期生命共済の最高限度額は、通算して[[5億円]]、こども共済は1,000万円、医療共済は[[30万円]]（1回の入院）となっている。', //不明
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="労働者共済、各都道府県民共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        'せいめい共済 → こくみん共済', //p102
                        '正しい',
                        '掛金は、選択する型や特約コースの付加により異なるが、それぞれの商品、特約コースごとに[[年齢・性別にかかわらず一律]]となっている。', //p103
                        '掛金の払込方法は、[[口座振替]]のみを選択できる。', //p103
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="信託銀行業界"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '預貯金 → 財務管理', //p109
                        '業務範囲の広さや多機能性により、信託銀行においては昨今の金融環境の変化の中で、[[新商品の開発に積極的に取り組んでいる]]。', //p109
                        '貸借対照表 → 相続財産目録', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '公的扶助制度 → 社会扶助制度', //p116
                        '社会扶助制度 → 公的扶助制度', //p11６
                        '老齢者、身体障害者、知的障害者、[[児童および母子世帯]]の福祉を図ることを目的とした制度がある。', //p116
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            // rev: 2026-06-08 確認済み
                            answer: '850万円',
                            questionTitle: '保険金と税金（個人契約の場合）',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['契約者・死亡保険金受取人：夫', '被保険者：妻', '死亡保険金：2,000万円', '正味払込保険料：250万円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金 - 正味払込保険料 - 特別控除額 = 一時所得の金額', '2,000万円 - 250万円 - 50万円 = 1,700万円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['1,700万円の1/2の850万円が、その年の他の所得と合算され所得税の課税対象となる。'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 850万円',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        'ライフプラン → ライフサイクル', //p159
                        '作成販売 → 設計販売', //p160
                        '２つの機能をもたせた場合、「突然のできごと」と「予測できるできごと」の[[どちらにも備えることができる]]。', //p161
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '優待配当 → 特別配当', //p44
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '告知義務違反によって保険契約を解除した場合、生命保険会社は[[解約返戻金があれば、契約者に対してこれを支払う]]。', //p48
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスと基本的姿勢"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '保険法 ↔︎ 保険業法', //p71
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）による取引時確認"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '100万円 → 200万円', //p81
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険契約の解除の取り扱いについて[[規定されている]]。', //p82-83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '個人向け国債は、[[半年ごとに利率が見直される変動金利の10年満期と、固定金利の5年満期・3年満期]]の3つがある。', //p111
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '「小口購入」「[[分散投資]]」「専門家運用」の３つの特徴により個人投資家の有価証券への投資を容易にしている。', //p113
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利の種類と金融商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '一般に、[[お金を預ける場合]]は、金利が上昇傾向にあるときには変動金利商品が、金利が下降傾向にあるときには固定金利商品が有利になる。[[お金を借りる場合]]は、その逆になる。', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '都道府県 → 市（区）町村', //p125
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、医療保障保険（団体型）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '受取人 = [[企業（団体）]]', //p131
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '435万円 → 385万円', //p134
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '相続税の特別控除 → 基礎控除', //p156
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="株式"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '利益配当',
                        '売却益',
                        'ハイリスク・ハイリターン',
                        '毎月',
                        '10分の1', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'エ', //26
                        'キ', //27
                        'ケ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '告知扱',
                        '付加',
                        '損金',
                        '企業（団体）',
                        '福利厚生規程', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //30
                        'イ', //31
                        'ケ', //32
                        'ウ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="遺族生活資金と老後生活資金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '6,384',
                        '8,880',
                        '8,064',
                        '3,360',
                        '11,424', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'キ', //36
                        'カ', //37
                        'ア', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '保険料の構成',
                            relatedProblems: [],
                            content: '契約者が生命保険会社へ払い込む保険料は、①保険金を支払うための財源となる[[純保険料]]、②生命保険会社が保険事業を維持・管理していくために必要な費用としての[[付加保険料]]の２つの部分から成り立っている。', //p41
                        }, //40
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '保険料の払込猶予期間',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '特約',
                            relatedProblems: [],
                            content: '特約は、もとになる契約（主契約）なしで[[単独で契約することはできず]]、また、特約の種類によっては、他の特約とあわせて契約しなければならないものもある。', //p66
                        }, //42
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '契約内容照会制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '重要事項の説明',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '個人向け融資（ローン）の種類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '預金の種類',
                            relatedProblems: [],
                            content: '通知預金 → 当座預金', //p108
                        }, //46
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '給付内容には、治療給付金、入院給付金および[[死亡保険金]]がある。', //p131
                        }, //47
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '確定拠出年金制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '生命保険料控除の対象となる契約',
                            relatedProblems: [],
                            content: '被保険者 → 保険金などの受取人', //p136
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2022-h2-d" next-href="/senmon/2021-h1-b" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
