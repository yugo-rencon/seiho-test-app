<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2026年度 フォームC";
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
                    questionTitle="保険法に基づく被保険者の同意"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '傷害疾病定額保険契約で保険金受取人が被保険者（または相続人）である場合は、[[同意を必要としない]]。', //p5
                        '他人である被保険者の同意を要するのは、「他人の生命の保険契約」のうち死亡保険および[[生死混合保険]]の場合である。', //p5
                        '正しい',
                        '保険契約成立後、保険契約者が保険金受取人を新たに指定または変更する場合にも[[被保険者の同意を必要とする]]。', //p5-6
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        'この通知義務について、[[保険法]]においては、被保険者が死亡した場合と給付事由が発生した場合について規定しているが、[[保険約款]]ではすべての保険事故について規定している。', //p30
                        '正しい',
                        '5年 → 3年', //p32
                        '生命保険の場合が[[５日以内]]、傷害疾病定額保険の場合が[[30日以内]]に保険金等を支払う旨を規定している。', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '大半の生命保険会社が「猶予期間の満了日の[[翌日]]から効力を失う」と規定している。', //p34
                        '保険契約者の解約返戻金の請求権は[[存続する]]。', //p35
                        '正しい',
                        '相当期間を経過した契約に対して支払われる消滅時特別配当についても[[失効中の期間を含めて]]計算する。', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約者・保険金受取人の変更"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '相続人が複数いる場合であっても、保険約款上は、[[相続人のうち誰か１人を保険契約者と定める]]場合が多い。', //p37
                        '正しい',
                        '保険事故発生後は、保険契約者といえども[[保険金受取人を変更することはできない]]。', //p38
                        '保険契約者は死亡保険金の[[支払事由が発生するまで]]は、法律上有効な遺言により、保険金受取人を[[変更することができる]]。', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '告知義務者が重大な過失により応答義務を怠った場合には、[[告知義務違反となる]]。', //p39
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '3年 → 5年', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '次の事業年度の初日 → 次の事業年度の契約応答日', //p109
                        '（死差配当率） × （[[保険金 − 保険年度末保険料積立金]]）', //p109
                        '（利差配当率） × （[[保険年度末保険料積立金]]）', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="身体的危険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '生命保険においては、身長と体重との関係によって、体格を[[過重体・平均体・過軽体]]に分類している。', //p49
                        '正しい',
                        '既往歴 → 現病歴', //p50
                        '現病歴 → 既往歴', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '（自動）振替貸付は、[[保険約款に規定がある]]契約についてのみ適用される。', //p112
                        '（自動）振替貸付を行った場合でも、保険約款では猶予期間満了後一定期間内（通常3カ月以内）に、保険契約者が払済保険への変更を請求したときは、[[（自動）振替貸付を行わなかったものとして取り扱う]]旨を規定している。', //p112
                        '責任準備金 → 解約返戻金', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '保険料が一定で、契約後一定期間ごとに保険金額が減っていく逓減定期保険特約や[[保険金額が増えていく逓増定期保険特約もある]]。', //p156
                        '既払込保険料総額を支払う → 最低保証分を支払う', //p156
                        '一定期間内に被保険者として定めた家族が[[死亡または高度障害状態に該当したとき]]、死亡・高度障害保険金を支払う。', //p156
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '保険期間が一定期間の定期タイプと、[[一生涯保障が継続する終身タイプがある]]。', //p140
                        '医療保険には、一般に[[満期保険金はない]]が、定期タイプには、保険期間満了時までに入院がなかった場合などに、健康祝金を支払う商品もある。', //p140
                        'がん以外の死亡に対する保険金は一般に[[少額]]で、[[保険金がないものもある]]。', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '無選択型個人年金保険には、[[保険料免除機能はない]]。', //p146
                        '有期型の場合、満期保険金は資産運用の実績によって変動し、一般に[[最低保証はない]]。', //p146
                        '年金原資には、最低保証がないタイプと[[一定額保証するタイプ]]がある。', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '「積立型」は、「掛捨型」に貯蓄機能を付け加えたもので、満期時に満期返戻金として支払うものの他、[[年金として支払うものもある]]。', //p204
                        'この保険金額の設定にあたり、各損害保険会社では、それぞれ[[引受限度額を設けている]]。', //p205
                        '加入の際には被保険者の健康状態に関する[[告知が必要]]である。', //p206
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の当事者"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '法人が保険契約者となる場合、申込書の保険契約者欄に、法人が登記している正式な商号または名称、その法人の代表機関であることを示す肩書とその者の氏名の[[３点]]を記入のうえ、職印を押すことが必要である。', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '集金担当者等の取扱者による立替入金は「保険業法」で[[禁じられている]]。', //p13
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始の時期"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '現行の保険約款には、「[[会社の責任開始の日]]を契約日とする」旨の規定がある。', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '再指定されるまでの間に保険事故が発生した場合、[[死亡した保険金受取人の法定相続人]]が保険金受取人となる。', //p22
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '死亡指数が100であれば、基準となる集団と同じ死亡率であることを意味し、150であれば50％[[高い]]死亡率であることを意味している。', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '必要に応じて用いられるものとして、契約確認報告書・主治医の証明書・[[保険契約歴の記録]]などがある。', //p64
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '④[[大数の法則]]が作用し得る程度に十分大量の被保険者が存在すること', //p67
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '死差益 = （予定死亡率 – 実際死亡率）× [[危険保険金]]', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '払済保険金額の計算には、[[元契約と同じ計算基礎率、予定利率等]]を用いる。', //p114
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="主契約の種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約後１年間は保険金額・給付金額が半額になるなど、保障内容には[[制限がある]]。', //p151
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        'LPA → CO・OP共済', //p191
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="危険選択の手段"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '事業方法書',
                        '「社医」',
                        '「嘱託医」',
                        '検診',
                        '保険事故発生率', // 問25〜29
                    ]"
                    :labels="[
                        'カ', //25
                        'ケ', //26
                        'コ', //27
                        'イ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="条件体保険の特別条件"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '逓増性',
                        '逓減性',
                        '５',
                        '少なく',
                        '一時払', // 問30〜34
                    ]"
                    :labels="[
                        'ケ', //30
                        'イ', //31
                        'エ', //32
                        'コ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="チルメル式保険料積立金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '付加保険料',
                        '純保険料',
                        '貯蓄保険料',
                        '危険保険料',
                        '平準純保険料式', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'オ', //36
                        'ケ', //37
                        'ア', //38
                        'キ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: 'クーリング・オフ（契約撤回請求権）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '前納・一括払の仕組み',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: 'ＢＭＩ',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '選択効果の検証',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '死亡率と生存率の関係',
                            relatedProblems: [],
                            content: '生存率 = 1 - [[死亡率]]、死亡率 = 1 - [[生存率]]', //p79
                        }, //44
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険料の現価',
                            relatedProblems: [],
                            content: '期始払現価 = 受取金額 × 1 / （1 + 利率）<sup>[[期間 - 1]]</sup>', //p81
                        }, //45
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '保険料と責任準備金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '保険料払込免除特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '先進医療特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '少額短期保険業',
                            relatedProblems: [],
                            content: '少額短期保険業とは、保険業法上の保険業のうち、一定の事業規模の範囲内において、保険金額が少額で、[[生命保険・医療保険については保険期間1年]]（[[損害保険については2年]]）以内の保険引受のみを行う事業をいう。', //p198
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2026b" next-route="daigaku.shikumi-kojin2025a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
