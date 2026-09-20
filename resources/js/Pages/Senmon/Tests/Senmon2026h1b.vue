<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2026年 4月〜8月実施 フォームB";
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
                    questionTitle="生命保険の現状"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-19 確認済み
                        '保有契約の保険金額（個人保険・個人年金保険・団体保険の合計）は､2024年度末で[[約1,304兆円]]になっている｡', //p18
                        '正しい',
                        '年齢別の死因をみると、20歳代・30歳代では[[自殺や不慮の事故および悪性新生物（ガン）]]が、40歳代以上の中高齢者層では[[悪性新生物（ガン）や心疾患]]などが上位を占めている。', //p24
                        '日本の65歳以上の人口の占率は2024年（令和６年）で[[約29％]]となっている。', //p25
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金を支払わない場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '被保険者が契約日または復活日から所定期間以内に自殺したとき、[[「死亡保険金」は支払われない]]。', //p54
                        '死亡保険金受取人が故意に被保険者を死亡させたとき、[[「死亡保険金」は支払われない]]。', //p54
                        '契約者が故意に被保険者を死亡させたとき、[[「死亡保険金」は支払われない]]。', //p54
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '支払事由等と解除の原因となった事実との間に全く因果関係がないことを証明した場合は、[[保険金等を支払う]]。', //p48
                        '1年 → 2年', //p48
                        '告知義務違反によって保険契約を解除した場合、生命保険会社は[[解約返戻金があれば、契約者に対してこれを支払う]]。', //p48
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込みと契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '口座振替 → 振替送金', //p56
                        'いったん失効した契約でも、失効してから所定の期間内（通常は３年以内）で、[[被保険者の健康状態に異常がなければ]]、所定の手続きをとり、契約の効力を元に戻すことができる。', //p58
                        '正しい',
                        '前納保険料は所定の利率による[[割引がある]]。', //p57
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '特約は、[[もとになる契約（主契約）なしで単独で契約することはできず]]、また、特約の種類によっては、他の特約とあわせて契約しなければならないものもある。', //p66
                        'これらの特約商品は、主契約を契約するときに付加しますが、[[特約商品によっては保険期間の途中で付加することもできる]]。', //p66
                        '定款 → 約款', //p66
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '厚生労働省が国勢調査などをもとにして作成したものを[[国民生命表]]といい、生命保険会社や共済組合などがそれぞれの被保険者集団の経験をもとにして作成したものを[[経験生命表]]という。', //p38
                        '女性の死亡率は男性よりも[[低い]]ので、それを反映して男女別の料率を採用している。', //p39
                        '満期保険料 → 生存保険料', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="「適切な保険金・給付金等の支払い」に関するお客さま対応と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        'お客さまには保険金・給付金等が支払われない場合があること（重要事項）を、[[勧誘時から]]「ご契約のしおり─定款・約款」などで説明のうえ、理解いただくことが必要。', //p95
                        '正しい',
                        '金融庁 → 生命保険会社', //p96
                        '支払可否の判断、支払金額や支払時期については、請求書類や診断書の内容によって決められるため、[[安易に回答せず、生命保険会社のしかるべき専門の担当者や担当部門に確認すること]]が重要。', //p96
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '損害保険は通常、[[事故による現実の損害額だけが、契約金額の範囲内で支払われるのが特徴]]である。', //p105
                        '死亡保険金の支払事由や、後遺障害保険金の支払割合、入院保険金の免責期間など[[異なっている点もある]]。', //p106
                        '年金払積立所得補償保険 → 年金払積立傷害保険', //p106
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="証券業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '個人向け国債は、[[半年ごとに利率が見直される変動金利の10年満期と、固定金利の５年満期・３年満期の３つがある]]。', //p111
                        '20分の1 → 10分の1', //p112
                        '正しい',
                        '株式投資信託は、約款上、株式を組み入れることができる投資信託で、運用次第では高収益が期待できますが、[[反面元本割れの危険性も大きいといえる]]。', //p113
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '社会保障制度は、病気、老齢、死亡、[[出産]]、けが、失業、介護、貧困などの場合に、国や地方公共団体などが一定水準の保障を行うものである。', //p115
                        '公的扶助制度 → 社会扶助制度', //p116
                        '社会扶助制度 → 公的扶助制度', //p11６
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '加入者自身が掛金の運用方法を選択し、[[運用実績次第で受け取る年金額が変動する]]。', //p132
                        '正しい',
                        '株式などのリスクの高い商品を選択すると、運用結果によっては元本割れの可能性があるが、企業は掛金の負担だけで[[元本を補てんする義務はない]]。', //p133
                        '全額益金算入 → 全額損金算入', //p133
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            // rev:
                            answer: '1,300万円',
                            questionTitle: '死亡保険金と税金',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['契約者・死亡保険金受取人：夫', '被保険者：妻', '死亡保険金：3,000万円', '正味払込保険料：350万円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['死亡保険金 - 正味払込保険料 - 特別控除額 = 一時所得の金額', '3,000万円 - 350万円 - 50万円 = 2,600万円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['2,600万円の1/2の1,300万円が、その年の他の所得と合算され所得税の課税対象となる。'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 1,300万円',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '保険契約締結に関して「媒介」をするのか、「代理」をするのかを[[明示しなければならない]]。', //p73
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '既払込保険料総額 → 解約返戻金', //p59
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '一般に危険度の高い人は、生命保険に[[加入]]しようとする傾向が強く、このことを逆選択という。', //p69
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '個人情報取扱事業者に課せられた義務は、大きく分けて①個人情報の取得・利用時の義務、②個人情報を適切・安全に管理する義務、[[③本人からの求めに対応する義務]]の3つが挙げられる。', //p79-80
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建保険・外貨建年金保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '通常、支払いや受け取りの際に円と外貨の換算手数料が必要となることなどを[[説明する必要がある]]。', //p89
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="法令上の禁止行為（虚偽の説明となる事例）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '虚偽の説明 → 不適正な乗換募集', //p84
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '復活しても失効期間中の支払事由に相当する事故は[[保障の対象にならない]]。', //p97
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="ＪＡ共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        'ＪＡ共済の養老生命共済・終身共済・定期生命共済の最高限度額は、通算して5億円、こども共済は[[1,000万円]]、医療共済は[[30万円]]（1回の入院）となっている。', //不明
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行預金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[為替リスクがあり]]、為替相場の動向次第では、満期時に受け取る外貨建ての受取金額を円に換算した金額が預入額を下回る場合がある。', //p108
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利の種類と金融商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '同じ利率の複利商品であれば1年複利より半年複利、半年複利より1カ月複利のほうがお金の増え方は[[大きくなる]]。', //p114
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '第Ⅰ種から[[第Ⅳ種]]の[[４種類]]に区分されている。', //p129
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '435万円 → 385万円', //p134
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="少額短期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-17 確認済み
                        '１年以内',
                        '1,000万円',
                        'セーフティネット',
                        '内閣総理大臣',
                        '保険業法',
                    ]"
                    :labels="[
                        'ク', //25
                        'ア', //26
                        'カ', //27
                        'ウ', //28
                        'オ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="公的年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-17 確認済み
                        '国民皆年金',
                        '障害',
                        '報酬比例',
                        '60歳',
                        '第１号',
                    ]"
                    :labels="[
                        'ク', //30
                        'イ', //31
                        'エ', //32
                        'オ', //33
                        'ケ', //34
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
                        // rev: 2026-09-17 確認済み
                        '5,040',
                        '9,120',
                        '8,064',
                        '3,120',
                        '11,184',
                    ]"
                    :labels="[
                        'エ', //35
                        'ク', //36
                        'カ', //37
                        'イ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: '剰余金と配当金',
                            relatedProblems: [],
                            content: '個々の契約に還元する配当金の額は、[[保険種類]]、性別、契約年齢、[[払込方法（回数）]]、経過年数、保険期間、保険金額などによってそれぞれ違いがある。', //p44
                        }, //40
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: '契約転換制度',
                            relatedProblems: [],
                            content: '「契約転換制度」を利用する際の保険料は、[[転換時]]の契約年齢、保険料率により計算されるため、[[保険種類によっては、転換前契約よりも保険料が高くなる場合がある]]。', //p65
                        }, //41
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: '契約内容登録制度',
                            relatedProblems: [],
                            content: '金融庁 → 生命保険協会', //p69-70
                        }, //42
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: 'コンプライアンスと基本的姿勢',
                            relatedProblems: [],
                            content: '保険法 ↔︎ 保険業法', //p71
                        }, //43
                        {
                            // rev: 2026-09-17 確認済み
                            questionTitle: '保全・アフターサービスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-09-17 確認済み
                            questionTitle: '「犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）」による取引時確認',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: '各都道府県民共済',
                            relatedProblems: [],
                            content: '掛金は、[[選択する型や特約コースの付加により異なる]]が、それぞれの商品、特約コースごとに[[年齢・性別にかかわらず一律]]となっている。', //p103
                        }, //46
                        {
                            // rev: 2026-09-17 確認済み
                            questionTitle: '経営者保険',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-09-17 確認済み
                            questionTitle: '生命保険料控除の対象',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: '遺産の分割',
                            relatedProblems: [],
                            content: '被相続人の財産の維持・増加に特に貢献した相続人については[[寄与分]]として遺産のうちから貢献に応じた額を優先的に取得できる[[寄与分制度]]がある。', //p153-154
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2026-h1-a" next-href="/senmon/2025-h1-a" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
