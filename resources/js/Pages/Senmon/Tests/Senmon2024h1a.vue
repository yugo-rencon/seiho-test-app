<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2024年度 4月〜8月実施 フォームA";
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
                    questionTitle="生命保険の現状"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '保有契約の保険金額（個人保険・個人年金保険・団体保険の合計）は､2024年度末で[[約1,304兆円]]になっている｡', //p18
                        '正しい',
                        '年齢別の死因をみると、20歳代・30歳代では[[自殺や不慮の事故および悪性新生物（ガン）]]が、40歳代以上の中高齢者層では[[悪性新生物（ガン）や心疾患]]などが上位を占めている。', //p24
                        '生命保険会社の最も重要な役割である保険金・給付金の確実な支払いに支障をきたすことがないよう、保険商品や特約の内容をしっかりお客さまに理解していただき、かつ[[責任をもって私たちがフォローしていく体制の充実も社会的な強い要請となっている]]。', //p19
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
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
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
                    questionTitle="お客さまニーズへの対応"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
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
                        '正しい',
                        '経済上の危険 → 道徳上の危険', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '厚生労働大臣 → 内閣総理大臣', //p72
                        '保険契約締結に関して「媒介」をするのか、「代理」をするのかを[[明示しなければならない]]。', //p73
                        'お客さまから「契約概要」および「注意喚起情報」を記載した書面の記載事項を了知した旨の[[確認をいただく必要がある]]。', //p73
                        '正しい',
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
                        '正しい',
                        '損害保険は通常、[[事故による現実の損害額だけが、契約金額の範囲内で支払われるのが特徴]]である。', //p105
                        '死亡保険金の支払事由や、後遺障害保険金の支払割合、入院保険金の免責期間など[[異なっている点もある]]。', //p106
                        '一時払積立傷害保険 → 年金払積立傷害保険', //p106
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="証券業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
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
                        '介護保険の本人一部負担制 → 健康保険の本人一部負担制', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '加入者自身が掛金の運用方法を選択し、[[運用実績次第で受け取る年金額が変動する]]。', //p132
                        '正しい',
                        '株式などのリスクの高い商品を選択すると、運用結果によっては元本割れの可能性があるが、企業は掛金の負担だけで[[元本を補てんする義務はない]]。', //p133
                        '全額益金算入 → 全額損金算入', //p133
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金と税金（個人契約の場合）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '正しい',
                        '正しい',
                        '純保険料は､死亡保険金を支払うための財源となる死亡保険料と､[[満期保険金]]を支払うための財源となる[[生存保険料]]の2つの部分から構成されている｡', //p41
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
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
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
                    :questionNumber="17"
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
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の情報提供と正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
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
                    questionTitle="「適切な保険金・給付金等の支払い」に関するお客さま対応と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '金融庁 → 生命保険会社', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '公社債投資信託約款上、[[株式を一切組み入れず]]、公社債を中心に投資する投資信託で、比較的安定した収益を上げることができ、元本割れの危険性は一般に[[少ない]]といえる。', //p113
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利の種類と金融商品"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
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
                        // rev: 2026-06-07 確認済み
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
                        // rev: 2026-06-07 確認済み
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
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
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
                    questionTitle="国民年金と厚生年金保険"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
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
                        // rev: 2026-06-07 確認済み
                        '3,528',
                        '6,840',
                        '6,048',
                        '2,340',
                        '8,388', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
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
                            // rev: 2026-06-03 確認済み
                            questionTitle: '死亡保険金を支払わない場合',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '契約内容登録制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '個人情報保護法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '銀行窓販',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '外貨建保険における重要事項の説明',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '各都道府県民共済',
                            relatedProblems: [],
                            content: '掛金は、[[選択する型や特約コースの付加により異なる]]が、それぞれの商品、特約コースごとに[[年齢・性別にかかわらず一律]]となっている。', //p103
                        }, //46
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '個人向け融資（ローン）の種類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '後期高齢者医療制度',
                            relatedProblems: [],
                            content: '医療費の負担額は、[[その費用の原則1割、所定水準以上の所得者の場合は2割（そのうち現役並み所得者は3割）]]となっている。', //p119
                        }, //48
                        {
                            questionTitle: '寄与分制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2025-h2-d" next-href="/senmon/2024-h1-b" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
