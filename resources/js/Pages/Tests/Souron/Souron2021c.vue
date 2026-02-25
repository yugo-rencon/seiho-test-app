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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
                        'こくみん共済 coop<全労災>',
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
                    :contents="[
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
                    :contents="[
                        '責任準備金の積立度合 → 保険金の支払い余力', //p99-100
                        '正しい',
                        '既契約の予定利率引き上げ → 引き下げ。', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険の特質"
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
                    :contents="[
                        '財産利用方法書は不要', //p150
                        '業務の一部または全部の停止 → 経営改善計画の提出及び実行', //p155
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :contents="[
                        '正しい',
                        '正しい',
                        '被保険者 → 保険者', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険と保険"
                    :contents="[
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
                    :contents="[
                        '損害系の共済商品を取り扱っていない → 取り扱っている（自動車共済・建物更生共済）', //p166
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の資産運用の今後のあり方"
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
                        // 問31〜40
                        { questionTitle: '保険金受取人', content: '正しい' }, //31
                        { questionTitle: '死亡表', content: '死亡率は同年齢の合計死亡率より通常は高い → 低い' }, //32
                        { questionTitle: '生存保険', content: '正しい' }, //33
                        { questionTitle: 'アームストロング調査', content: '合衆国統一の取締法 → ニューヨーク州の取締法' }, //34 p63
                        { questionTitle: '日本における生命保険の発展', content: '正しい' }, //35
                        { questionTitle: '生命保険会社の資金の性格', content: '純資産の大部分 → 負債の大部分' }, //36
                        { questionTitle: '生活設計の必要性', content: '正しい' }, //37
                        { questionTitle: '社会構造の変化', content: '医療と年金が逆' }, //38
                        { questionTitle: '簡易保険の歴史', content: '正しい' }, //39
                        { questionTitle: '生保業界におけるシステム動向', content: '団体保険分野 → 個人保険分野' }, //40 p197-198
                        // 問41〜50
                        { questionTitle: '危険評価額', label: 'ア', content: '保険金額' }, //41
                        { questionTitle: '事業費', label: 'ウ', content: '維持費' }, //42
                        { questionTitle: '保険の歴史的発展', label: 'ア', content: 'ギルド' }, //43
                        { questionTitle: '賦課式保険', label: 'エ', content: '同額の分担金で' }, //44
                        { questionTitle: '資産運用の原則', label: 'エ', content: '公共性' }, //45
                        { questionTitle: '国民経済における生命保険', label: 'オ', content: '' }, //46
                        { questionTitle: '保険業を行う会社の性質', label: 'オ', content: '' }, //47
                        { questionTitle: '生損保の相互参入', label: 'イ', content: '保険業法' }, //48
                        { questionTitle: '年金型商品の開発', label: 'ウ', content: '変額年金' }, //49
                        { questionTitle: '共同ネットワークシステム', label: 'イ', content: 'LINC（Life Insurance Network Center）' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2021b" next-route="souron2020a" />
        </section>
    </SeihoTestLayout>
</template>
