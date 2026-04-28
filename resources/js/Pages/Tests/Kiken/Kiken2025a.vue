<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2025年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の必要性-①"
                    :contents="[
                        '安定性',
                        '標準的',
                        '増加',
                        '収入',
                        '危険保険料', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'キ', //3
                        'コ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の必要性-②"
                    :contents="[
                        '実際死亡率',
                        '医学的',
                        '高危険率',
                        '危険の公平性',
                        '相互扶助', // 問6〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'ケ', //8
                        'エ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態と方式-①"
                    :contents="[
                        '出再会社',
                        '自動',
                        '任意',
                        '諾否決定',
                        'と同時に', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                        'カ', //13
                        'ケ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態と方式-②"
                    :contents="[
                        '個別',
                        '定期保険',
                        '減少',
                        '共同',
                        '同一の', // 問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'ア', //17
                        'ウ', //18
                        'コ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数"
                    :contents="[
                        '正しい',
                        '容易 → 困難', //p12
                        '簡易生命表 → 保険料計算に使用する予定の死亡率', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の制約条件"
                    :contents="[
                        '純保険料の範囲内 → 付加保険料の範囲内', //p40
                        '正しい',
                        '危険分散の原則 → 危険均一性の原則', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
                    :contents="[
                        'アルコール中毒や不摂生生活のような職業に随伴する危険は含まれない → 含まれる', //p69
                        '選択上考慮されなくなっている → 「職業制限」と呼ばれる選択基準を設け、それにもとづいて環境決定を行なっているのが実情', //p69
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認"
                    :contents="[
                        '因果関係の有無にかかわらず契約を解除できる → 因果関係がなければ契約を解除できない', //p120
                        'どのような場合でも給付金を支払われることはない → 給付金については支払う場合と支払わない場合に分かれる', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
                    :contents="[
                        '1保険金受取人 → 1被保険者', //p181
                        '正しい',
                        '一般の保有限度額より高く → 一般の保有限度額より低く', //p182
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険で対象としている危険"
                    :contents="[
                        '経済的危険 → 身体的危険', //p4
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果"
                    :contents="[
                        '経験生命表との比較 → 国民生命表との比較', //p32
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病保険の特別条件付決定"
                    :contents="[
                        '正しい',
                        '正しい',
                        '超過危険を調整することができる → 超過危険を調整することができない', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="復活"
                    :contents="[
                        '正しい',
                        '復活時には過去全体の告知を求めるのが普通である → 復活時には契約後の健康歴その他の告知を求めるのが普通', //p173
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率比較"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険体の範囲が広くなるから → 保険体の範囲が狭くなるから', //p186
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '生命表',
                            content: '標準生命表 → 国民生命表<br>簡易生命表 → 経験生命表' //p5
                        }, //31
                        {
                            questionTitle: '危険選択の厳格度',
                            content: '期待死亡率についての目標値（実際死亡率） → 実際死亡率についての目標値（期待死亡率）', //p35
                        }, //32
                        {
                            questionTitle: '高血圧',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '危険の区分',
                            content: '平均的危険 → 恒常性危険', //p105
                        }, //34
                        {
                            questionTitle: '契約確認',
                            content: '大部分の契約 ↔︎ 一部の契約', //p113-114
                        }, //35
                        {
                            questionTitle: '個人情報の定義',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '契約内容登録制度',
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '傷害特約',
                            content: '障害給付金 → 災害保険金', //p158
                        }, //38
                        {
                            questionTitle: '団体保険の保険金額の決定による選択',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '死因別死亡率',
                            content: '正しい',
                        }, //40
                        { questionTitle: '死亡率', label: 'ウ', content: '標準化' }, //41
                        { questionTitle: '解除', label: 'ウ', content: '解約返戻金' }, //42
                        { questionTitle: '保険料の仕組みと危険選択', label: 'オ', content: '' }, //43
                        { questionTitle: '資産・収入状態による選択', label: 'エ', content: '災害疾病入院特約' }, //44
                        { questionTitle: '人間ドック扱', label: 'イ', content: '告知書' }, //45
                        { questionTitle: '契約の制限', label: 'イ', content: '告知書' }, //46
                        { questionTitle: '第1次選択', label: 'オ', content: '' }, //47
                        { questionTitle: '契約確認後の処理', label: 'ウ', content: '不実の告知' }, //48
                        { questionTitle: '個人データの安全管理措置', label: 'イ', content: 'き損' }, //49
                        { questionTitle: '団体保険の個別選択', label: 'ア', content: '保険契約者' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="kiken2025b" />
        </section>
    </SeihoTestLayout>
</template>
