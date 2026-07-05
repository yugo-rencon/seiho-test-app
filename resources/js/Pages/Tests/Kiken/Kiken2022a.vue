<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2022年度 フォームA";
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
                    questionTitle="死亡率と死亡指数-①"
                    :relatedProblems="['2022a1']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '選択効果',
                        '実際死亡率',
                        '簡易生命表',
                        '経験',
                        '標準体', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'イ', //2
                        'コ', //3
                        'オ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数-②"
                    :relatedProblems="['2022a6']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '経営効率',
                        '災害死亡',
                        '困難',
                        '診査基準',
                        '健康管理証明書', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'キ', //7
                        'オ', //8
                        'イ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態と方式-①"
                    :relatedProblems="['2022a11', '2022b11', '2022c11']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '出再会社',
                        '自動',
                        '任意',
                        '諾否決定',
                        '成立', //問11〜15
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
                    :relatedProblems="['2022a16', '2022b16', '2022c16']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '個別',
                        '定期保険',
                        '減少',
                        '共同',
                        '同一の', //問16〜20
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
                    questionTitle="生命保険で対象としている危険"
                    :relatedProblems="['2022a21']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '「実体的危険」は、「[[身体的危険]]」と「環境的危険」の２つに分類することができる。', //p4
                        '環境的危険とは、被保険者の生活環境全般に関する危険であるが主に[[被保険者の職業・仕事の内容による危険を指す]]。', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :relatedProblems="['2022a22', '2022b22', '2022c22']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '告知義務者が[[告知事項の存在を知らないまま告知しなかった場合には、告知義務違反は成立しない]]こととなる。', //p16
                        '契約者側に告知義務違反があっても、保険者がその事実を知っていた場合、または[[過失によって知らなかった場合は解除できない]]。', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の課題"
                    :relatedProblems="['2022a23']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '低率 → 高率', //p47
                        '正しい',
                        '脳血管疾患 → 悪性新生物', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認"
                    :relatedProblems="['2022a24', '2022c47']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '確認する項目は契約確認と比較して[[かなり広範囲かつ綿密なもの]]となる。', //p119
                        '保険金確認・給付金確認は、[[確認の対象は保険事故発生前の契約確認と若干異なる]]。一方、[[告知義務違反やモラルリスクを排除し、生命保険の公平性の原則を達成しようとする目的は契約確認と変わらない]]。', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」"
                    :relatedProblems="['2022a25', '2022b25', '2022c25']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '死亡率の高い疾患と入院・手術の発生率の高い疾患とはまったく異なるため、[[従来とは異なった診査観点が必要である]]。', //p150
                        '給付金日額の制限よって[[超過危険を調整することはできない]]。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴"
                    :relatedProblems="['2022a26']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        'ネフローゼ → インシュリン', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :relatedProblems="['2022a27']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '保険業法 → 保険法', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険業における個人情報保護のための取扱指針"
                    :relatedProblems="['2022a28', '2022b28', '2022c28']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '変更された利用目的について，本人に[[通知又は公表]]しなければならない。', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険における団体の選択"
                    :relatedProblems="['2022a29']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '団体定期保険 ↔︎ 総合福祉団体定期保険', //p169
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
                    :relatedProblems="['2022a30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '１保険金受取人 → １被保険者', //p181
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '危険の公平性',
                            relatedProblems: ['2022a31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '死差益の計算方法',
                            relatedProblems: ['2022a32', '2022b32', '2022c32'],
                            content: '[[統計的方式]]で表せば、基本的には死差益は年間の危険保険料収入額と危険保険金支払額との差として表される。', //p27
                        }, //32
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            relatedProblems: ['2022a33', '2022b33', '2022c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2022a34', '2022b23', '2022c43'],
                            content: '職業危険には、「職業に伴う災害危険」「いわゆる職業病のような疾病危険」さらには[[「アルコール中毒や不摂生生活のような職業に随伴する危険」]]がある。', //p69
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '条件体契約',
                            relatedProblems: ['2022a35'],
                            content: '大部分の保険会社は条件体契約に対して、[[年齢別]]に金額上の区分を設けて制限を加えている。', //p72
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '社医と嘱託医',
                            relatedProblems: ['2022a36', '2022c34'],
                            content: '嘱託医については、診査を可能とする被保険者の年齢や保険金額に限度（診査限度）が設けられており、[[社医と区別している]]。', //p99
                        }, //36
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約確認',
                            relatedProblems: ['2022a37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '個人データの安全管理措置',
                            relatedProblems: ['2022a38'],
                            content: '組織的安全管理措置 → 人的安全管理措置', //p137
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体定期保険における更新時の選択',
                            relatedProblems: ['2022a39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死因別死亡率',
                            relatedProblems: ['2022a40', '2022b40', '2022c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死亡率',
                            relatedProblems: ['2022a41', '2022b41'],
                            label: 'エ',
                            content: '金額死亡率',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約の解除',
                            relatedProblems: ['2022a42'],
                            label: 'ア',
                            content: '保険法',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '経験保険料と危険保険金',
                            relatedProblems: ['2022a43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者集団の具備すべき条件',
                            relatedProblems: ['2022a44'],
                            label: 'ウ',
                            content: '大数の法則',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '体格',
                            relatedProblems: ['2022a45', '2022b45', '2022c45'],
                            label: 'ウ',
                            content: '22',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険契約の制限',
                            relatedProblems: ['2022a46'],
                            label: 'イ',
                            content: '他人',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '人間ドック扱',
                            relatedProblems: ['2022a47'],
                            label: 'ウ',
                            content: '医師による診査',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定・決定の種類',
                            relatedProblems: ['2022a48'],
                            label: 'エ',
                            content: '再診',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '災害関係特約',
                            relatedProblems: ['2022a49', '2022b49', '2022c49'],
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体保険の個別選択',
                            relatedProblems: ['2022a50', '2022b50', '2022c50'],
                            label: 'エ',
                            content: '正常勤務',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2023c" next-route="kiken2022b" />
        </section>
    </SeihoTestLayout>
</template>
