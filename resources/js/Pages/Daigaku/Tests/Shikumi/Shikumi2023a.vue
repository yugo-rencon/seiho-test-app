<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2023年度 フォームA";
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
                    :relatedProblems="['2025a25', '2025a40', '2025c40', '2024b1', '2023a1', '2023c25']"
                    :contents="[
                        '自己の生命 → 他人の生命', //p3
                        '他人のため → 自己のため', //p2
                        '正しい',
                        '自己のため → 他人のため', //p2
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :relatedProblems="['2025a2', '2025b2', '2025c2', '2024a4', '2023a2', '2023a41', '2023b2', '2023c2']"
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
                    :relatedProblems="['2025a3', '2025b14', '2024a5', '2024b4', '2023a3', '2023b25']"
                    :contents="[
                        '正しい',
                        '消息を絶った時点に遡って → 7年の期間が満了したとき', //p23
                        '親族 → 利害関係者', //p23
                        '高度障害保険金を支払わない → 支払う', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="['2025b40', '2025c5', '2024a15', '2024b15', '2024c15', '2023a4', '2023b15']"
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
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="['2025a16', '2025b16', '2025c16', '2024a13', '2024c5', '2023a5', '2023c21']"
                    :contents="[
                        '告知義務違反にあたらない → 告知義務違反となる', //p39z
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '3年 → 5年', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="['2025c7', '2024a6', '2024b6', '2024c6', '2023a6', '2023b6', '2023c6']"
                    :contents="[
                        '収支相当の原則が有効に機能していること → 大数の法則が作用し得る程度に十分大量の被保険者が存在すること', //p67
                        '厚生労働省 → 金融庁長官', //p67
                        '正しい',
                        '申込みの諾否決定や危険選択の追加をすることはない → 申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度"
                    :relatedProblems="['2025c18', '2024c7', '2023a7', '2023c8']"
                    :contents="[
                        '正しい',
                        '告知受領権を有しない → 代理の場合は有する', //p72
                        '告知義務者が主観的に重要と思う事項は対象 → 対象外', //p72
                        '過失によるものは該当しない → 重大な過失は該当する', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業保険料の構成と計算基礎"
                    :relatedProblems="['2025b7', '2024b8', '2023a8']"
                    :contents="[
                        '純保険料 → 付加保険料', //p89
                        '正しい',
                        '付加保険料 → 純保険料', //p89
                        '付加保険料 → 純保険料', //p89
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :relatedProblems="['2025a8', '2025b8', '2025c8', '2024b21', '2023a9', '2023b9', '2023c9']"
                    :contents="[
                        '診査は不要 → 診査は必要<br>契約時年齢で計算 → 手続時の年齢で計算', //p120
                        '転換前契約加入時 → 転換時<br>保険料率は引上げになることはない → 引き上げとなる場合がある', //p121
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="['2024a10', '2024b10', '2024c10', '2023a10', '2023b10', '2023c10']"
                    :contents="[
                        '終身タイプの商品はない → 定期タイプと終身タイプがある', //p140
                        '満期保険を支払う商品が一般的 → 一般に満期保険金はない', //p140
                        '保険金はがんと同額で、保険金がないものはない → 保険金が少額で、保険金がないものもある', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :relatedProblems="['2025a10', '2025b10', '2025c10', '2024c11', '2023a11', '2023b7']"
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
                    questionTitle="損害保険"
                    :relatedProblems="['2025a24', '2025b24', '2025c11', '2025c24', '2024a24', '2024b12', '2024c24', '2023a12', '2023c20']"
                    :contents="[
                        '定額法式のタイプのものはない → 定額方式のタイプがある', //p202
                        '正しい',
                        '引受限度額を設けていない → 設けている', //p205
                        '告知は不要 → 告知が必要', //p206
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :relatedProblems="['2025a23', '2025c23', '2024b11', '2023a13', '2023b21', '2023c18']"
                    :contents="[
                        '正しい',
                        '災害入院特約 → 家族型入院特約', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="['2024a3', '2024b14', '2024c14', '2023a14', '2023b14']"
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
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2025a5', '2025b30', '2024a7', '2024b16', '2024c25', '2023a15', '2023b5', '2023b30']"
                    :contents="[
                        '保険法 → 事業方法書', //p61
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="身体的危険"
                    :relatedProblems="['2025b5', '2024b7', '2024c16', '2023a16', '2023b16', '2023c16']"
                    :contents="[
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
                    questionTitle="道徳的危険（モラルリスク）"
                    :relatedProblems="['2025b41', '2023a17', '2023b17', '2023c17', '2023c41']"
                    :contents="[
                        '契約後の経過期間ごとの解約発生率に影響 → 医学的な法則に従った死亡率に影響', //p56
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果の検証"
                    :relatedProblems="['2025a18', '2025b20', '2025b44', '2025c44', '2024a18', '2024b18', '2024b43', '2024c30', '2023a18']"
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
                    questionTitle="配当の割当て"
                    :relatedProblems="['2024b20', '2024c18', '2023a19', '2023b19', '2023c19']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '社員（被保険者）配当金 → 社員（契約者）配当金', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="その他の主契約"
                    :relatedProblems="['2023a20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約後2年間で死亡：死亡保険金を支払う → 払い込んだ保険料相当額を支払う<br>災害死亡：払い込んだ保険料相当額を支払う → 死亡保険金を支払う', //p151
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="['2024c8', '2024c21', '2023a21']"
                    :contents="[
                        '正しい',
                        '転換後契約の加入年齢 → 転換前契約の加入年齢', //p120
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="['2025a11', '2025b23', '2024a12', '2024b24', '2023a22', '2023b22', '2023c22']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する販売チャネルもある → 該当する販売チャネルはない', //p165
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="['2024a22', '2024b22', '2024c22', '2023a23', '2023b11']"
                    :contents="[
                        '逓増定期保険特約はない → 逓増定期保険特約もある', //p156
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
                    :relatedProblems="['2025a12', '2025b12', '2025c12', '2024c12', '2023a24']"
                    :contents="[
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
                    questionTitle="保険契約の当事者"
                    :relatedProblems="['2025b25', '2024b13', '2024c3', '2023a25', '2023b13', '2023c11']"
                    :contents="[
                        '10億円',
                        '1000万円',
                        '制限行為能力者',
                        '同意',
                        '商号', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'カ', //26
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
                    questionTitle="条件体保険の特別条件"
                    :relatedProblems="['2024b30', '2023a30']"
                    :contents="[
                        '逓増性',
                        '逓減性',
                        '5',
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
                    questionTitle="保険料積立金"
                    :relatedProblems="['2023a35', '2023b35', '2023c35']"
                    :contents="[
                        '将来法',
                        '過去法',
                        '定期保険',
                        '貯蓄保険料',
                        'チルメル', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'コ', //36
                        'キ', //37
                        'イ', //38
                        'ケ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '生命保険契約に関する法律',
                            relatedProblems: ['2023a40', '2023b40', '2023c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '前納・一括払の仕組み',
                            relatedProblems: ['2025a2', '2025b2', '2025c2', '2024a4', '2023a2', '2023a41', '2023b2', '2023c2'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: 'BMI',
                            relatedProblems: ['2024a42', '2024b42', '2024c42', '2023a42', '2023b42', '2023c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '生命保険の診査',
                            relatedProblems: ['2023a43'],
                            content: '一般臨床と同様 → 一般臨床と異なる',
                        }, //43 p63
                        {
                            questionTitle: '契約確認',
                            relatedProblems: ['2025c43', '2024a43', '2024b44', '2023a44'],
                            content: '契約成立後に行われることはない → 契約成立前や契約成立後に行われる',
                        }, //44 p60
                        {
                            questionTitle: '解約返戻金',
                            relatedProblems: ['2023a45', '2023b48'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: ['2025a47', '2024a46', '2024b46', '2024c46', '2023a46', '2023b46', '2023c46'],
                            content: '平均寿命 ↔︎ 平均余命',
                        }, //46 p79
                        {
                            questionTitle: '特定疾病保障保険（三大疾病保障保険）',
                            relatedProblems: ['2025a22', '2025b22', '2025c22', '2024a48', '2024b48', '2023a47'],
                            content: '契約は継続する → 契約は消滅する',
                        }, //47 p137
                        {
                            questionTitle: '保険金額の減額',
                            relatedProblems: ['2023a48'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '傷害特約',
                            relatedProblems: ['2023a49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2024c" next-route="daigaku.shikumi-kojin2023b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
