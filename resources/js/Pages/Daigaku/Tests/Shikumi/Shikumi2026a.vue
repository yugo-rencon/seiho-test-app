<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2026年度 フォームA";
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
                    questionTitle="保険料の払込み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '集金担当者等の取扱者による立替入金は「保険業法」で[[禁じられている]]。', //p13
                        '同一とは評価されない → 同一に評価される', //p14
                        '保険契約者が[[払込期月中の営業時間内に金融機関等の窓口やATM等で払い込んだ時点]]で、保険料を払い込んだことになる。', //p16
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '失踪宣告があると、普通失踪者は[[７年の期間が満了したとき]]に死亡したものとみなされる。', //p23
                        '[[利害関係人]]の請求を受けて家庭裁判所が宣告するものである。', //p23
                        '高度障害保険金は支払われない → 高度障害保険金を支払う', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        'ほとんどの生命保険会社が「[[猶予期間の満了日の翌日から効力を失う]]」と規定している。', //p34
                        '保険契約者の解約返戻金の請求権は[[存続する]]。', //p35
                        '正しい',
                        '失効期間中に対する配当金が[[支払われる]]。', //p36
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
                    questionTitle="告知義務制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '生命保険会社を「代理」の場合は[[告知受領権をも有する]]が、「媒介」の場合は[[告知受領権を有さない]]と解される。', //p72
                        '告知義務者が主観的に重要と判断したものについては[[対象とならない]]。', //p72
                        '告知義務違反とは告知義務者の故意または[[重大な過失]]によるものであること。', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '貸付請求金額が解約返戻金額より多く → 貸付請求金額が解約返戻金額より少なく', //p112-113
                        '請求権者である保険金受取人 → 請求権者である保険契約者', //p112
                        '[[貸付金の元利合計額を差し引く]]ことによって返済させる旨規定している。', //p113
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
                    questionTitle="特約の種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '特定疾病保険金を支払った時点で、[[特約は消滅する]]。', //p156
                        '不慮の事故または特定感染症で死亡または高度障害状態に該当したとき、主契約の死亡・高度障害保険金に[[上乗せして]]災害死亡・高度障害保険金を支払う。', //p157
                        '余命1年6ヶ月 → 余命6ヶ月', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業とその商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        'その運営は、共済契約の加入先となる「農業協同組合」と、共済金の支払い等を行う「[[全国共済農業協同組合連合会]]」の[[２段階の組織で行われている]]。', //p166
                        '2年タイプ → 1年タイプ', //p179
                        '年齢により「こども型」「総合保障型」「入院保障型」「熟年型」「熟年入院型」の保障に[[別れている]]。', //p185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約・取消し・無効等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '生命保険会社が保険契約を取り消すことができる場合として、保険約款では、「被保険者の契約年齢の誤りによる生命保険会社所定の範囲外」「保険契約者または被保険者の詐欺による契約」を定めており、[[後者の場合、既払込保険料は返還されない]]。', //p42
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
                    questionTitle="身体的危険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '既往歴 → 現病歴', //p50
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
                    questionTitle="超過危険の種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '身体障害 → 胃切除などの手術後の危険', //p73
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
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '配当金を、毎年の契約応当日に保険契約者に現金で[[支払う]]。', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '転換後契約の価格（保険料、責任準備金等）は、[[転換前契約]]の加入年齢による。', //p120
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
                    questionTitle="特定の疾病や損傷の治療に備える特約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '重度慢性疾患保険金を支払った時点で、[[特約は消滅する]]。', //p159
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する[[販売チャネルはない]]。', //p165
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '保険法',
                        '信義誠実の原則',
                        '全保険期間',
                        '死亡させる意思',
                        '含まれない', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'エ', //26
                        'キ', //27
                        'カ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="選択効果"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '終局死亡率',
                        '実際死亡率',
                        '経営効率',
                        '期待死亡率',
                        'あったといえる', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'エ', //31
                        'ク', //32
                        'イ', //33
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
                            questionTitle: '年払・半年払保険料の返還',
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
                            questionTitle: '契約内容登録制度等',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約確認',
                            relatedProblems: [],
                            content: '契約確認とは、不実な告知などによる不正な加入を防止するために、[[契約成立前または契約成立後]]に告知内容の確認や職業・生活環境の実情把握などを行う制度である。', //p60
                        }, //44
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社で使用している経験表',
                            relatedProblems: [],
                            content: '生命保険協会 → 日本アクチュアリー会', //p78
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
                            questionTitle: '変額保険・変額個人年金保険',
                            relatedProblems: [],
                            content: 'いずれの保険も解約返戻金には[[最低保証はない]]のが一般的である。', //p146
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

            <TestNavigationButtons next-route="daigaku.shikumi-kojin2026b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
