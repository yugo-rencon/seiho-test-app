<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2026年 4月〜8月実施 フォームA";
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
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '既払込保険料 → 解約返戻金', //p61
                        '3回 → 2回', //p61
                        '正しい',
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
                        // rev: 2026-09-20 確認済み
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
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '契約の失効や解約は、一般に危険度の[[低い]]契約に多いと考えらる。', //p67
                        '契約の選択とは、[[生命保険会社が契約希望者を選別]]し、契約の諾否、保険料率、保険金額、保険種類などの契約条件を決めること。', //p67
                        '正しい',
                        '一定の危険の範囲を超えているが、その危険の性格や度合いに応じて「保険料の[[割増]]」や「保険金の[[削減]]」、「特定の疾病や部位の不担保」などの特別条件をつけて引き受ける契約をいう。', //p69
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
                    questionTitle="ＪＡ共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '厚生労働省 → 農林水産省', //p101
                        '正しい',
                        '団体向けに[[団体定期生命共済などもある]]。', //p101
                        'ＪＡ共済の養老生命共済・終身共済・定期生命共済の最高限度額は、通算して[[5億円]]、こども共済は1,000万円、医療共済は[[30万円]]（1回の入院）となっている。', //不明
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
                        '元本および利子が[[保証されている]]。', //p110
                        '債券には、買い入れるときに利子を前取りする「[[割引債]]」と、一定の利子が一定の期日に支払われる「[[利付債]]」がある。', //p110
                        '正しい',
                        '20分の1 → 10分の1', //p112
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、医療保障保険（団体型）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '経営者保険の保険種類は、一般の個人保険（財形商品を除く）と[[同じ]]で養老保険、定期保険特約付養老保険、定期保険、終身保険、定期保険特約付終身保険、個人年金保険などである。', //p130
                        '経営者保険の主な契約形態は、契約者＝企業（団体）、被保険者＝役員および幹部従業員、受取人＝[[企業（団体）]]となっている。', //p131
                        '医療保障保険（団体型）は、[[健康保険]]の本人一部負担制と保険給付対象外費用の増加などに対応し、[[公的医療保険制度]]の補完を目的とした企業（団体）向けの商品である。', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '700万円 → 550万円', //p134
                        '正しい',
                        '財形貯蓄積立保険・財形住宅貯蓄積立保険および財形年金積立保険の保険料は[[従業員]]が負担し、財形給付金保険・財形基金保険の保険料は[[企業]]が負担する。', //p135
                        '財形制度にもとづく保険は、多くの個人保険とは異なり、積立金等の計算基礎（予定利率）が積立期間中および据置期間中でも[[変更される場合がある]]。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
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
                    questionTitle="告知義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
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
                    questionTitle="配当金の支払方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '単利 → 複利', //p63
                        '正しい',
                        '正しい',
                        '正しい',
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
                    questionTitle="募集時の情報提供と正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[契約締結前の段階]]において、お客さまの最終的な意向と契約の申込みを行おうとする保険契約の内容が合致しているかどうかを確認（＝意向確認）する。', //p92
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
                    questionTitle="信託銀行の業務・商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '信託銀行は、不動産の管理を目的とした不動産管理信託や、土地所有者が土地を信託し収益を信託配当として受け取る土地信託などの不動産の信託の他、[[不動産の売買・仲介、不動産の鑑定評価、不動産のコンサルティングサービスなどの不動産業務を取り扱っている]]。', //p109
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '公社債投資信託は、株式を一切組み入れず、公社債を中心に投資する投資信託で、比較的安定した収益を上げることができ、[[元本割れの危険性は一般に少ない]]といえる。', //p113
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '株式などのリスクの高い商品を選択すると、運用結果によっては元本割れの可能性があるが、企業は掛金の負担だけで[[元本を補てんする義務はない]]。', //p133
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除を受けるための手続き"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '事業所得者などの申告納税者は、「確定申告書」を原則として翌年の[[2月16日から3月15日まで]]に税務署に提出して控除を受ける。', //p142
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-20 確認済み
                        '正しい',
                        '正しい',
                        '代理相続 → 代襲相続', //p152
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-09-17 確認済み
                        '経済準備',
                        '自助努力',
                        '失業',
                        '国',
                        '公的扶助',
                    ]"
                    :labels="[
                        'ウ', //25
                        'コ', //26
                        'ア', //27
                        'カ', //28
                        'キ', //29
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
                        // rev: 2026-09-17 確認済み
                        '告知扱',
                        '付加保険料',
                        '損金',
                        '企業（団体）',
                        '福利厚生規程',
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
                            // rev: 2026-09-17 確認済み
                            questionTitle: '特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '2年 → 1年', //p77
                        }, //42
                        {
                            // rev: 2026-09-20 確認済み
                            questionTitle: 'コンプライアンスと基本的姿勢',
                            relatedProblems: [],
                            content: '保険法 ↔︎ 保険業法', //p71
                        }, //43
                        {
                            // rev: 2026-09-17 確認済み
                            questionTitle: '銀行等による保険商品の窓口販売',
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
                            // rev: 2026-09-17 確認済み
                            questionTitle: '預金の種類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-09-17 確認済み
                            questionTitle: '個人向け融資（ローン）の種類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-09-17 確認済み
                            questionTitle: '後期高齢者医療制度',
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

            <TestNavigationButtons next-href="/senmon/2026-h1-b" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>

