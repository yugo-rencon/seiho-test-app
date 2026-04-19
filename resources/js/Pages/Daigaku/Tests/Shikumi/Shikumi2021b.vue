<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2021年度 フォームB";
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
                    questionTitle="責任開始の時期"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '必ず一致する → 必ずしも一致しないことがある', //p10
                        '保険契約の成立日を意味する → 保険約款における期間の起算日を意味する', //p12
                        '支払対象とはならない → 支払対象となる', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :relatedProblems="[]"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '正しい',
                        '一時払保険料 ↔︎ 全期前納保険料', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '消息を絶った時点に遡って → 7年の期間が満了したとき', //p23
                        '親族 → 利害関係人', //p23
                        '高度障害保険金を支払わない → 支払う', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '支払免責となる → 支払免責となるような規定はない', //p30
                        '5年 → 3年', //p32
                        '7日以内 → 5日以内', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約者・保険金受取人の変更"
                    :relatedProblems="[]"
                    :contents="[
                        '複数人の連名 → 相続人のうち誰か1人', //p37
                        '生命保険会社の承諾は必要ない → 必要である', //p37
                        '変更することができる → できない', //p38
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'どちらの場合も告知受領権はない → 代理の場合は告知受領権があり、媒介の場合はない', //p72
                        '告知義務者が主観的に重要と思う事項 → 主観的に重要と思うかどうかとは無関係', //p72
                        '程度を問わず過失によるものは該当しない → 重大な過失によるものは該当する', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="[]"
                    :contents="[
                        '収支相当の原則が有効に機能していること → 大数の法則が作用し得る程度に十分大量の被保険者が存在すること', //p67
                        '厚生労働省 → 金融庁長官', //p67
                        '正しい',
                        '単なる契約の変更のため、申込みの諾否決定や危険選択の追加をすることはない → 新たな危険の増加を伴う場合もあるので申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の現価"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="[]"
                    :contents="[
                        '他社の既契約 → 自社の既契約', //p119
                        '保険料率は引上げになることはない → 引上げになることもある', //p120
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="[]"
                    :contents="[
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p114
                        '変更時点の計算基礎率 → 元契約と同じ計算基礎率', //p114
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p115
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
                        '被保険者が生存している限り → 生死に関係なく<br>残りの保証期間に対する年金や一時金は支払わない → 遺族に支払う', //p145
                        '正しい',
                        '満期保険金額の最低保証がある → 最低保証はない', //p146
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="利率変動型積立終身保険（アカウント型保険）"
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
                    questionTitle="保険法に基づく被保険者の同意"
                    :relatedProblems="[]"
                    :contents="[
                        '傷害疾病定額保険契約で保険金受取人が被保険者の場合、被保険者の同意が必要 → 同意は不要', //p5
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '正しい',
                        '給与等から天引きされた時点 → 団体（集団）から生命保険会社に払い込まれた時', //p17
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :relatedProblems="[]"
                    :contents="[
                        '保険法 → 事業方法書', //p61
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="条件体保険の特別条件"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '削減しない → 削減するケースが多い', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果の検証"
                    :relatedProblems="[]"
                    :contents="[
                        '活かす目的に適している → 適さない', //p69
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '実際死亡率 ÷ 予定死亡率 × 危険保険金 → （予定死亡率 - 実際死亡率）× 危険保険金', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付と契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '経過期間に関わらず取り消しできない → 猶予期間満了後一定期間内の場合に可能', //p112
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '毎年の契約応当日に支払わない → 契約応当日に現金で支払う', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '30日間 → 90日間', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など疾病・ケガの治療全般に備える特約"
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
                    questionTitle="損害保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '5つの保険種類 → 4つの保険種類（地震保険は含まれない）', //p203
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険契約の当事者"
                    :relatedProblems="[]"
                    :contents="[
                        '10億円',
                        '1000万円',
                        '制限行為能力者',
                        '同意',
                        '商号', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'ウ', //26
                        'イ', //27
                        'ア', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="危険の要素"
                    :relatedProblems="[]"
                    :contents="[
                        '体格',
                        '過重体',
                        '過軽体',
                        '職業',
                        '申込動機', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'ケ', //31
                        'ウ', //32
                        'キ', //33
                        'オ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="[]"
                    :contents="[
                        '職域',
                        '地方自治法',
                        '営利',
                        '子会社方式',
                        'ない', // 問35〜39
                    ]"
                    :labels="[
                        'オ', //35
                        'ケ', //36
                        'キ', //37
                        'ク', //38
                        'エ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '承諾前保険事故',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '被保険者による保険法に基づく保険契約の解除請求',
                            relatedProblems: [],
                            content: '',
                        }, //41
                        {
                            questionTitle: '危険の程度（危険度）の数量化（危険評価額）',
                            relatedProblems: [],
                            content: '',
                        }, //42
                        {
                            questionTitle: '契約内容登録制度等',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '生命保険の診査',
                            relatedProblems: [],
                            content: '',
                        }, //44
                        {
                            questionTitle: '死亡率と生存率の関係',
                            relatedProblems: [],
                            content: '生存率：1 - （1 / 死亡率） → 1 - 死亡率<br>死亡率：1 - （1 / 生存率） → 1 - 生存率',//p79
                        }, //45
                        {
                            questionTitle: '解約返戻金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '傷害特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '特定疾病（三大疾病）保障特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: 'CO・OP共済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2021a" next-route="daigaku.shikumi-kojin2021c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
