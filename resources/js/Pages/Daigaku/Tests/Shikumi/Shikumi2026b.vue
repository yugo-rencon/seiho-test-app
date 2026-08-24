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
                        '', //p
                        '', //p
                        '', //p
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
                        '', //p
                        '', //p
                        '', //p
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
                        '', //p
                        '', //p
                        '', //p
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
                        '', //p
                        '', //p
                        '', //p
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
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
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
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
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
                        '正しい',
                        '正しい',
                        '', //p
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
                        '正しい',
                        '正しい',
                        '', //p
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
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
                        '', //p
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
                        '正しい',
                        '', //p
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
                    questionTitle="契約内容の変更"
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
                    questionTitle="主契約の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
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
                        '多く',
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
                            questionTitle: '特定疾病保障保険（三大疾病保障保険）',
                            relatedProblems: [],
                            content: '', //p
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

            <TestNavigationButtons next-route="daigaku.shikumi-kojin2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
