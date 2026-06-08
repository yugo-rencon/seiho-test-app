<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2025年 9月〜3月実施 フォームA";
const isDraft = true;
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
                    questionTitle="個人を対象とした主な保険種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '死亡または高度障害時には、[[養老保険と定期保険特約を合わせた保険金]]が支払われ、満期のときには、[[満期保険金]]が支払われる（[[死亡保険金と満期保険金は同額ではない]]）。', //p31
                        '正しい',
                        '保証期間中は[[生死に関係なく]]年金が支払われ、その後も生存しているときには、終身にわたって年金が支払われる。', //p32
                        'がん・急性心筋梗塞・脳卒中の三大生活習慣病にかかった場合に、死亡保険金と同額の特定疾病保険金が生存中に支払われ、[[その時点で契約は消滅する]]。', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '予定利率による運用収入見込額より、実際の運用収入が[[多い]]場合に生じる利益のこと。', //p43
                        '正しい',
                        '個々の契約に還元する配当金の額は、[[保険種類]]、性別、契約年齢、[[払込方法（回数）]]、経過年数、保険期間、保険金額などによってそれぞれ違いがある。', //p44
                        '長期継続契約について、[[通常配当の他に特別配当を支払うことがある]]。', //p44
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="「死亡保険金」を支払わない場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '被保険者が[[契約日または復活日から所定期間以内]]に自殺したとき、「死亡保険金」は支払われない。', //p54
                        '正しい',
                        '契約者が過失によって被保険者を死亡させたとき、「死亡保険金」を[[支払う場合もある]]。', //p55の（注）
                        '保険の計算基礎に及ぼす影響が少ないと生命保険会社が認めた場合には、[[保険金を全額または削減して支払うことがある]]。', //p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込みが困難になった場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '既払込保険料総額 → 解約返戻金', //p60
                        '解約返戻金をもとに計算した保険期間が、[[元の契約の満期を超える場合は満期までとし]]、満期のときには生存保険金を支払う。', //p61
                        '正しい',
                        '失効 → 解約', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '契約の失効や解約は、一般に危険度の[[低い]]契約に多いと考えらる。', //p67
                        '契約の選択とは、[[生命保険会社が契約希望者を選別]]し、契約の諾否、保険料率、保険金額、保険種類などの契約条件を決めること。', //p67
                        '契約の選択に必要な情報について、[[ありのままを生命保険会社へ報告しなければならない]]。', //p68
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '特約は、[[もとになる契約（主契約）なしで単独で契約することはできず]]、また、特約の種類によっては、他の特約とあわせて契約しなければならないものもある。', //p66
                        '特約商品としては、災害割増特約、傷害特約、[[災害入院特約、疾病入院特約]]、生活習慣病入院特約（成人病入院特約）などがある。', //p66
                        '定款 → 約款', //p66
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活手続きの留意点"
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
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '損害保険には、火災保険や[[地震保険]]のように物に関する保険の他、[[所得補償保険]]や傷害保険、介護保険のように人に関する保険などもある。', //p105
                        '損害保険は通常、[[事故による現実の損害額だけが、契約金額の範囲内で支払われるのが特徴]]である。', //p105
                        '死亡保険金の支払事由や、後遺障害保険金の支払割合、入院保険金の免責期間など[[異なっている点もある]]。', //p106
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '株式投資による利殖としては、株主としての権利にもとづく「[[利益配当]]」と株価の値上がりにもとづく「[[売却益]]」の確保がある。', //p112
                        '株式投資は、[[ハイリスク・ハイリターン]]の運用が特徴となっているため、あくまでも[[余裕資金の利殖を目的]]として行うべきであるといわれている。', //p112
                        '正しい',
                        '100分の1 → 10分の1', //p112
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、医療保障保険（団体型）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '経営者保険の保険種類は、一般の個人保険（財形商品を除く）と[[同じ]]で養老保険、定期保険特約付養老保険、定期保険、終身保険、定期保険特約付終身保険、個人年金保険など。', //p130
                        '受取人 = [[企業（団体）]]', //p131
                        '全額負担制 → 一部負担制', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '700万円 → 550万円', //p134
                        '正しい',
                        '企業 ↔︎ 従業員', //p135
                        '財形制度にもとづく保険は、多くの個人保険とは異なり、積立金等の計算基礎（予定利率）が積立期間中および据置期間中でも[[変更される場合がある]]。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '第Ⅰ種から[[第Ⅳ種]]の[[４種類]]に区分されている。', //p129
                        '[[業務上・業務外を問わず]]、死亡・高度障害になった場合は保険金を支払う。', //p130
                        '企業が負担した保険料は、原則として[[全額]]が損金算入（個人事業主は必要経費算入）でき、しかも従業員に対する給与所得としての課税もない。', //p130
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を取り巻く生活環境の変化"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '地域共同体意識 → 自己責任意識', //p22
                        '正しい',
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
                        // rev: 2026-06-08 確認済み
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
                    questionTitle="配当金の支払方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険金額 → 保険料', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '3回 → 2回', //p61
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="「犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）」による取引時確認"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済みe
                        '正しい',
                        '正しい',
                        '法人の名称・本店等の所在地・事業内容等と、[[実際に手続きをする担当者本人]]の双方の確認が必要。', //p82
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
                        // rev: 2026-06-08 確認済み
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
                    questionTitle="適切な保険金・給付金等の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '割賦販売法 → 生命保険会社', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人としての具体的対応と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '保険証券 → ご契約のしおり─定款・約款', //p95
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="信託銀行の業務・商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '不動産の管理を目的とした不動産管理信託や、土地所有者が土地を信託し収益を信託配当として受け取る土地信託などの不動産の信託の他、[[不動産の売買・仲介、不動産の鑑定評価、不動産のコンサルティングサービスなどの不動産業務を取り扱っている]]。', //p109
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '「MRF（マネー・リザーブ・ファンド）」はこの[[公社債投資信託]]の一種。', //p113
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
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
                    questionTitle="労働者共済"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'キ', //25
                        'ク', //26
                        'ウ', //27
                        'イ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="少額短期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '1年以内',
                        '1,000万円',
                        'セーフティネット',
                        '内閣総理大臣',
                        '保険業法', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'ア', //31
                        'カ', //32
                        'ウ', //33
                        'オ', //34
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
                        '7,182',
                        '9,450',
                        '9,072',
                        '3,510',
                        '12,582', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'ク', //36
                        'キ', //37
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
                            // rev: 2026-06-07 確認済み
                            questionTitle: 'コンプライアンスと基本的姿勢',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '解約',
                            relatedProblems: [],
                            content: '通常の場合、その金額は払い込んだ保険料合計額より[[少なく]]なる。', //p62
                        }, //41
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '保険業法',
                            relatedProblems: [],
                            content: '保険契約締結に関して「媒介」をするのか、「代理」をするのかを[[明示しなければならない]]。', //p73
                        }, //42
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '2年 → 1年', //p77
                        }, //43
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: 'JA共済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '各都道府県民共済',
                            relatedProblems: [],
                            content: '掛金は、[[選択する型や特約コースの付加により異なる]]が、それぞれの商品、特約コースごとに[[年齢・性別にかかわらず一律]]となっている。', //p103
                        }, //46
                        {
                            questionTitle: '預金の種類',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            // rev: 2026-06-05 確認済み
                            questionTitle: '相続税',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '複利と期間',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2025-h1-b" next-href="/senmon/2025-h2-b" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
