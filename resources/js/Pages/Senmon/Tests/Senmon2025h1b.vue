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
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
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
                    questionTitle="少額短期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
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
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行預金"
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
                    questionTitle="コンプライアンスと基本的姿勢について"
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
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
                            questionTitle: '個人向け融資（ローン）の種類',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '金銭信託',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
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
