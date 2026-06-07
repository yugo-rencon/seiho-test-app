<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2025年 4月〜8月実施 フォームB";
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
                    questionTitle="保険種類と利用目的"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '被保険者が死亡または[[高度障害になったとき]]にだけ保険金が支払われる。', //p27
                        '正しい',
                        '独立性の原則 → 自己責任原則', //p28
                        '保障期間の定められたもの（定期型）と[[保障が一生涯続くもの（終身型）]]がある。', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '予定利率による運用収入見込額より、実際の運用収入が[[多い]]場合に生じる利益のこと。', //p43
                        '予定事業費率による事業費より、実際に使った事業費が[[削減]]できた場合に生じる利益のこと', //p44
                        '正しい',
                        '長期継続契約について、[[通常配当の他に特別配当を支払うことがある]]。', //p44
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '生命保険募集人がお客さまから口頭で告知を受けても、[[生命保険会社が告知を受けたことにはならない]]ため、告知書に告知義務者自身で記入いただくことが重要。', //p47
                        '1年 → 2年', //p48
                        '正しい',
                        '告知義務違反によって保険契約を解除した場合、生命保険会社は[[解約返戻金があれば、契約者に対してこれを支払う]]。', //p48
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金を支払わない場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '被保険者が[[契約日または復活日から所定期間以内]]に自殺したとき、「死亡保険金」は支払われない。', //p54
                        '受取人が複数の場合で、[[被保険者の殺害に全く無関係な受取人に対しては、その人の受け取るべき割合の保険金を支払う]]。', //p54
                        '正しい',
                        '保険の計算基礎に及ぼす影響が少ないと生命保険会社が認めた場合には、[[保険金を全額または削減して支払うことがある]]。', //p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
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
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込みと契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        'いったん失効した契約でも、失効してから所定の期間内（通常は３年以内）で、[[被保険者の健康状態に異常がなければ]]、所定の手続きをとり、契約の効力を元に戻すことができる。', //p58
                        '失効中に支払事由に相当する事故が発生した場合は[[保障の対象とはならない]]。', //p58
                        '復活するためには、[[告知書を提出]]し、生命保険会社の承諾を得るとともに、未払込保険料（延滞保険料）を払い込むことが必要。', //p58
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '保険事故の発生については、[[ほぼ安定した状態を保つことができる]]。', //p67
                        '経済上の危険 → 環境上の危険', //p68
                        '一定の危険の範囲を超えているが、その危険の性格や度合いに応じて「保険料の[[割増]]」や「保険金の[[削減]]」、「特定の疾病や部位の不担保」などの特別条件をつけて引き受ける契約をいう。', //p69
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の情報提供と正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '契約概要 → 注意喚起情報', //p88
                        '注意喚起情報 → 契約概要', //p88
                        '正しい',
                        '[[契約締結前の段階]]において、お客さまの最終的な意向と契約の申込みを行おうとする保険契約の内容が合致しているかどうかを確認（＝意向確認）する。', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '少額短期保険業者は、[[生命保険も損害保険も取り扱える]]。', //p104
                        '3年 → 1年', //p104
                        '2,000万円 → 1,000万円', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '損害保険は通常、[[事故による現実の損害額だけが、契約金額の範囲内で支払われるのが特徴]]である。', //p105
                        '商法 → 保険業法', //p105
                        '正しい',
                        '所得補償保険 → 積立型保険', //p106
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行預金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '公共料金などの自動支払、給料や年金などの自動受け取りは[[できない]]。', //p107
                        '預入金額300万円未満のものを「[[スーパー定期]]」、預入金額300万円以上のものを「[[スーパー定期300]]」と呼ぶ。', //p108
                        '正しい',
                        '[[外貨ベース]]で元本が保証されている。', //p108
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
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険金等の支払いに関する保険会社の義務などについて[[規定されている]]。', //p82-83
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
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険金 → 保険料', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="各都道府県民共済（全国生協連）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '掛金は、[[選択する型や特約コースの付加により異なる]]が、それぞれの商品、特約コースごとに[[年齢・性別にかかわらず一律]]となっている。', //p103
                        '正しい',
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
                        '正しい',
                        'ＪＡ共済の養老生命共済・終身共済・定期生命共済の最高限度額は、通算して[[5億円]]、こども共済は[[1,000万円]]、医療共済は[[30万円]]（1回の入院）となっている。', //不明
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
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
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                    questionTitle="保険金・年金・給付金と税金（個人契約の場合）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除の対象となる保険料"
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
                    questionTitle="保障の見直しに関する諸制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '契約転換',
                        '消滅',
                        '中途付加',
                        '保険期間',
                        '追加', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'ア', //26
                        'ウ', //27
                        'カ', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="相続の法律"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '遺贈',
                        '遺留分',
                        '代襲相続',
                        '3ヶ月',
                        '代償分割', // 問30〜34
                    ]"
                    :labels="[
                        'イ', //30
                        'オ', //31
                        'キ', //32
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
                        '6,384',
                        '8,400',
                        '8.064',
                        '3,120',
                        '11,184', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'キ', //36
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
                            // rev: 2026-06-04 確認済み
                            questionTitle: '契約者貸付',
                            relatedProblems: [],
                            content: '1回 → 2回', //p61
                        }, //40
                        {
                            questionTitle: '権限の明示',
                            relatedProblems: [],
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '適切な保険金・給付金等の支払いに関するお客さま対応と留意点',
                            relatedProblems: [],
                            content: '金融庁 → 生命保険会社', //p96
                        }, //44
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '個人向け融資（ローン）の種類',
                            relatedProblems: [],
                            content: '目的別ローンとフリーローンを比較すると、一般に[[目的別ローン]]の方が融資限度額は大きく、金利は低くなる。', //p108
                        }, //45
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '金銭信託',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-06-05 確認済み
                            questionTitle: '株式',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '雇用保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '女性市場',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2025-h1-a" next-href="/senmon/2025-h2-a" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
