<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2021年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者配当-①"
                    :relatedProblems="['2021a1', '2021b1', '2021c1']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '負債',
                        '定款',
                        '20%',
                        '非社員契約',
                        '公平性', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'ク', //2
                        'イ', //3
                        'エ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者配当-②"
                    :relatedProblems="['2021a6', '2021b6', '2021c6']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '利源分析',
                        '増加',
                        '上回る',
                        '解約益',
                        '小さく', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ア', //7
                        'オ', //8
                        'ケ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険業-①"
                    :relatedProblems="['2021c11']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        'こくみん共済 coop（全労済）',
                        '無認可',
                        '保険業法',
                        '不特定',
                        '特定', //問11〜15
                    ]"
                    :labels="[
                        'ケ', //11
                        'ア', //12
                        'キ', //13
                        'ク', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険業-②"
                    :relatedProblems="['2021c16']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '2年',
                        '80万円',
                        '資本金',
                        '責任準備金の積立て',
                        '特定保険業者', //問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'コ', //17
                        'ウ', //18
                        'エ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款"
                    :relatedProblems="['2021c21']"
                    :contents="[
                        '保険約款に効力は生じない → 保険約款には拘束力があるとされている', //p8
                        '法的規制は実施されていない → 法的規制が実施されている', //p8
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける不没収法の制定"
                    :relatedProblems="['2021c22']"
                    :contents="[
                        '正しい',
                        '弱体化 → 強化', //p62
                        '不没収法（1861年） → 解約価額法（1880年）', //p62
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="早期是正措置の導入と保険業法の一部改正"
                    :relatedProblems="['2021a23', '2021b23', '2021c23']"
                    :contents="[
                        '責任準備金の積立度合を示す → 保険金の支払い余力を示す', //p99
                        '正しい',
                        '既契約の予定利率引き上げ → 既契約の予定利率の引き下げ', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険の特質"
                    :relatedProblems="['2021a24', '2021b24', '2021c24']"
                    :contents="[
                        '負担能力に応じて年齢別に → 負担能力に応じて（年齢は無関係）', //p125
                        '被保険者・事業主・国庫がそれぞれ1/3 → 被保険者と事業主がそれぞれ1/2', //p125
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :relatedProblems="['2021c25']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '財産利用方法書は不要。', //p150
                        '業務の一部または全部の停止 → 経営改善計画の提出及び実行', //p155
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :relatedProblems="['2021a26', '2021b26', '2021b32', '2021c26']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '保険契約の一方の当事者である保険契約者は、[[保険者]]が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険と保険"
                    :relatedProblems="['2021c27']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '商法 → 保険法', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要"
                    :relatedProblems="['2021c28']"
                    :contents="[
                        '正しい',
                        '第1号被保険者および第2号被保険者ともに → 第1号被保険者', //p140
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="JA共済"
                    :relatedProblems="['2021c29']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '自動車共済・建物更生共済といった[[損害系の共済商品も取り扱っている]]。', //p167
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の資産運用の今後のあり方"
                    :relatedProblems="['2021c30']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '特別勘定 → 区分経理', //p200
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険金受取人',
                            content: '正しい',
                            relatedProblems: ['2021c31'],
                        }, //31
                        {
                            questionTitle: '死亡表',
                            content: '死亡率は同年齢の合計死亡率より通常は高い → 低い',
                            relatedProblems: ['2021b41', '2021c32'],
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生存保険',
                            content: '正しい',
                            relatedProblems: ['2021c33'],
                        }, //33
                        {
                            questionTitle: 'アームストロング調査',
                            content: '合衆国統一の取締法 → ニューヨーク州の取締法',
                            relatedProblems: ['2021a34', '2021b34', '2021c34'],
                        }, //34 p63
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '日本における生命保険の発展',
                            content: '正しい',
                            relatedProblems: ['2021c35'],
                        }, //35
                        {
                            questionTitle: '生命保険会社の資金の性格',
                            content: '純資産の大部分 → 負債の大部分',
                            relatedProblems: ['2021a36', '2021b36', '2021c36'],
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生活設計の必要性',
                            content: '正しい',
                            relatedProblems: ['2021c37'],
                        }, //37
                        {
                            questionTitle: '社会構造の変化',
                            content: '医療 ↔︎ 年金',
                            relatedProblems: ['2021a30', '2021c38'],
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '簡易保険の歴史',
                            content: '正しい',
                            relatedProblems: ['2021a39', '2021b39', '2021c39'],
                        }, //39
                        {
                            questionTitle: '生保業界におけるシステム動向',
                            content: '団体保険分野 → 個人保険分野',
                            relatedProblems: ['2021c40'],
                        }, //40 p197-198
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '危険評価額',
                            label: 'ア',
                            content: '保険金額',
                            relatedProblems: ['2021c41'],
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '事業費',
                            label: 'ウ',
                            content: '維持費',
                            relatedProblems: ['2021c42'],
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険の歴史的発展',
                            label: 'ア',
                            content: 'ギルド',
                            relatedProblems: ['2021c43'],
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '賦課式保険',
                            label: 'エ',
                            content: '同額の分担金で',
                            relatedProblems: ['2021a44', '2021b44', '2021c44'],
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '資産運用の原則',
                            label: 'エ',
                            content: '公共性',
                            relatedProblems: ['2021b29', '2021c45'],
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国民経済における生命保険',
                            label: 'オ',
                            content: '',
                            relatedProblems: ['2021a46', '2021b46', '2021c46'],
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険業を行う会社の性質',
                            label: 'オ',
                            content: '',
                            relatedProblems: ['2021c47'],
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生損保の相互参入',
                            label: 'イ',
                            content: '保険業法',
                            relatedProblems: ['2021c48'],
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '年金型商品の開発',
                            label: 'ウ',
                            content: '変額年金',
                            relatedProblems: ['2021c49'],
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '共同ネットワークシステム',
                            label: 'イ',
                            content: 'LINC（Life Insurance Network Center）',
                            relatedProblems: ['2021a50', '2021b50', '2021c50'],
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2021b" next-route="souron2020a" />
        </section>
    </SeihoTestLayout>
</template>
