<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2022年度 9月〜3月実施 フォームA";
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
                    questionTitle="生命保険を取り巻く生活環境の変化"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
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
                    questionTitle="告知"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '3回 → 2回', //p61
                        '契約者に対する貸付も生命保険会社が行う[[資産運用の一部である]]。', //p61
                        '契約者貸付を受けた契約でも受けていない契約と[[同様の配当金が支払われる]]。', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
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
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）による取引時確認"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '100万円 → 200万円', //p81
                        'お客さまに運転免許証や年金手帳等、マイナンバーカード（個人番号カード）、印鑑登録証明書などの公的証明書を提示または送付いただき、氏名・生年月日・[[住居]]の確認をする。', //p81-82
                        '正しい',
                        'お客さまと[[実際に手続きをする担当者（代理人）本人]]の双方の確認が必要。', //p82
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
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
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
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
                    questionTitle="保険料の払い込み等"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                    :questionNumber="17"
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
                    questionTitle="JA共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '2,000万円 → 3,000万円', //不明
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '損害保険は通常、[[事故による現実の損害額だけが、契約金額の範囲内で支払われるのが特徴]]である。', //p105
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行預金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
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
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
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
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        '年金',
                        '550万円',
                        '385万円',
                        '独立行政法人勤労者退職金共済機構',
                        '企業', // 問25〜29
                    ]"
                    :labels="[
                        'オ', //25
                        'ウ', //26
                        'ア', //27
                        'ク', //28
                        'ケ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="保険金と税金"
                    :relatedProblems="[]"
                    :contents="[
                        '満期保険金',
                        '贈与税',
                        '一時所得',
                        '死亡保険金',
                        '配偶者', // 問30〜34
                    ]"
                    :labels="[
                        'カ', //30
                        'キ', //31
                        'ア', //32
                        'ウ', //33
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
                        '6,048',
                        '7,920',
                        '8,064',
                        '3,600',
                        '11,664', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'キ', //36
                        'ク', //37
                        'イ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '保険金の減額',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '契約転換制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '契約内容登録制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '銀行窓販',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '生命保険募集人としての具体的対応と留意点',
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
                            questionTitle: '固定金利と変動金利',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '経営者保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '相続制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2022-h1-b" next-href="/senmon/2022-h2-b" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
