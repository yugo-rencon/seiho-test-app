<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2026年度 フォームB";
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
                    questionTitle="生命保険契約の形態"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '保険契約者、被保険者、保険金受取人とも別人である契約は、「[[他人]]のためにする生命保険契約」である。', //p2
                        '保険契約者と保険金受取人が同一人である契約は、「[[自己]]のためにする生命保険契約」である。', //p2
                        '保険契約者と保険金受取人が同一人で被保険者が別人である契約は、「[[他人]]の生命の保険契約」である。', //p3
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
                    questionTitle="保険契約の当事者"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '財務大臣 → 内閣総理大臣', //p3
                        '免許制 → 登録制', //p3
                        '保険契約者となるための資格については、[[法律上特に制限はなく、個人（自然人）または法人を問わない]]。', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '[[「前納」]]は、年払または半年払の契約の場合に、将来払い込むべき保険料の一部または全部をまとめて生命保会社に払い込む方法であり、[[「一括払」]]は、月払契約の場合に1年分または数ヶ月分の保険料をまとめて生命保険会社に払い込む方法である。', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '一時払保険料の方が全期前納保険料よりも[[少なくなる]]', //p22
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解除・解約・取消し・無効"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '生命保険会社の意思表示により保険契約を[[消滅]]させることができる', //p39
                        '後者の場合、既払込保険料は[[返還されない]]。', //p42
                        '２年以内に限り → 年月にかかわらず', //p42
                        '正しい',
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
                    questionTitle="危険選択の手段"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '生命保険会社指定の医師による診査の場合は、医師が問診により聞き取った告知内容について、[[告知義務者本人が内容確認したうえで署名（自署）する]]。', //p61
                        '個別方式は行われていない → 一括方式と個別方式が行われている', //p63
                        '被保険者との面接においては、告知書記載事項の確認と[[外観の観察を実施する]]。', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '保険料率は引上げになることはない → 保険料率が引上げになることもある', //p120
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '詐欺による契約の取消しの規定等についても、転換契約の締結に際しての詐欺の行為等が適用の[[対象となる]]。', //p121
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
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '病気や[[不慮の事故（ケガ）]]で所定の手術をしたときに、手術給付金を支払う。', //p157
                        '災害入院特約は、不慮の事故（ケガ）で[[入院したとき]]に[[入院給付金を支払う]]。', //p157
                        '退院後だけでなく、[[入院前の通院も保障するタイプを取り扱う生命保険会社もある]]。', //p158
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        'それぞれの根拠法によって、「[[営利を目的としてはならない]]」と規定されている。', //p165
                        '共済の場合は、従来から多くの共済団体が、[[生命共済と損害共済の双方をそれぞれの根拠法により取り扱っている]]。', //p165
                        '共済の場合は、生命共済、損害共済とも、共済団体ごとに取り扱う[[共済種類が限られている]]。', //p165
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法に基づく被保険者の同意"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '保険契約成立後において、保険金受取人が契約によって生じる権利を他人に譲渡する場合にも[[被保険者の同意が必要である]]。', //p5
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
                        '正しい',
                        '正しい',
                        'この方法では、[[保険料が団体（集団）から生命保険会社に払い込まれたとき]]に保険料を払い込んだことになる。', //p17
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
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '相当期間を経過した契約に対して支払われる消滅時特別配当についても[[失効中の期間を含めて]]計算する。', //p36
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
                    questionTitle="告知義務制度のポイント"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '代理権を有さない → 代理権を有する', //p72
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
                    questionTitle="配当の割当て"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '割当てを行われない → 割り当てを行なっている', //p105
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付と契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '正しい',
                        '保険契約が失効し、復活可能期間内であること → 保険契約が有効であること', //p113
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '中途解約時の市場金利が契約時と比較して上昇した場合に、解約返戻金は[[減少]]し、逆に下落した場合に[[増加]]することがある。', //p153
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '実損払方式 → 定額給付方式', //p204
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="危険の要素"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '体格',
                        '過重体',
                        '過軽体',
                        '職業',
                        '申込動機', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'ケ', //26
                        'ウ', //27
                        'キ', //28
                        'コ', //29
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
                            questionTitle: '生命保険会社の免責事由',
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
                            questionTitle: '契約確認',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '配当割当にあたって具備すべき条件',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '転換契約の募集に際しての法令上の規制',
                            relatedProblems: [],
                            content: '正しい',
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
                            // rev: 2026-08-25 確認済み
                            questionTitle: '特定疾病保障保険（三大疾病保障保険）',
                            relatedProblems: [],
                            content: '特定疾病保険金を支払った時点で、[[契約は消滅する]]。', //p127
                        }, //48
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: 'ＣＯ・ＯＰ共済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2026a" next-route="daigaku.shikumi-kojin2026c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
