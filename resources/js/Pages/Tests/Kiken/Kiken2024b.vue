<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2024年度 フォームB";
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
                    questionTitle="告知義務違反と契約解除-①"
                    :relatedProblems="['2024a1', '2024b1', '2024c1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '故意',
                        '民法',
                        '必要はない',
                        '解約返戻金',
                        '到達', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'キ', //2
                        'ウ', //3
                        'ク', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反と契約解除-②"
                    :relatedProblems="['2024a6', '2024b6', '2024c6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        'しない',
                        '因果関係',
                        '5年',
                        '責任開始期の属する日',
                        '2年', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ウ', //8
                        'キ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」-①"
                    :relatedProblems="['2024b11']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '心理',
                        '抵抗力',
                        '触診',
                        '生命予後',
                        '分離', //問11〜15
                    ]"
                    :labels="[
                        'イ', //11
                        'キ', //12
                        'オ', //13
                        'ク', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」-②"
                    :relatedProblems="['2024b16']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '生活習慣病',
                        '限局',
                        '高い',
                        '逓減性',
                        '超過危険', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'ク', //17
                        'オ', //18
                        'エ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険で対象としている危険"
                    :relatedProblems="['2024a21', '2024b21', '2024c21']"
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
                    questionTitle="死亡率と死亡指数"
                    :relatedProblems="['2024b22']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '生命表には国民全体を対象とした[[国民生命表]]と，それよりは小さな特定集団（たとえば生命保険の被保険者集団）を対象とする[[経験生命表]]とがある。', //p5
                        '正しい',
                        '死亡指数は「[[実際死亡率]] ÷ [[予定死亡率]] × 100（%)」で計算される。', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴"
                    :relatedProblems="['2024b23']"
                    :contents="[
                        '正しい',
                        '若年層：高血圧性、虚血性が多い → 先天性のものが多い<br>中年および高年齢：先天性のものが多い → 高血圧性、虚血性が多い', //p65
                        '二次性高血圧 ↔︎ 本態性高血圧', //p64-65
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="査定・決定"
                    :relatedProblems="['2024b24']"
                    :contents="[
                        '金融庁 → 生命保険協会', //p86
                        '査定 ↔︎ 決定', //p86-87
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="復活"
                    :relatedProblems="['2024a38', '2024b25', '2024c30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '復活時に求める告知事項の時間的範囲を、過去全体にすべきか、契約後とすべきかについては、理論的には、契約時までのものは告知済みであるから、[[復活時には契約後の健康歴その他の告知を求めるのが普通である]]。', //p173
                        '正しい',
                        '失効後の期間の長いものほど逆選択混入の危険が多く、また[[診査による場合に比べ告知のみによる場合]]のほうが経験死亡率が高いとされている。', //p173-174
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :relatedProblems="['2024b26']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '告知義務がある旨 → 告知義務はない旨', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の課題"
                    :relatedProblems="['2024a27', '2024b27', '2024c27']"
                    :contents="[
                        '手術給付率 ↔︎ 入院給付率', //p52
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2024a23', '2024b28', '2024c23']"
                    :contents="[
                        '正しい',
                        '短期 ↔︎ 長期', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険における団体の選択"
                    :relatedProblems="['2024a29', '2024b29', '2024c29']"
                    :contents="[
                        '保険加入のみを目的とした団体を設立すること → 保険加入のみを目的として設立された団体でないこと', //p169
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態"
                    :relatedProblems="['2024b30']"
                    :contents="[
                        '代申会社 → 出再会社', //p177
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
                            questionTitle: '危険選択',
                            relatedProblems: ['2024b31'],
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '生命保険会社における経験死亡率',
                            relatedProblems: ['2024a32', '2024b32', '2024c32'],
                            content: '件数死亡率 ↔︎ 金額死亡率',
                        }, //32 p9
                        {
                            questionTitle: '死差益の計算方法',
                            relatedProblems: ['2024b33'],
                            content: '純収支計算方式で表せば → 統計的方式で表せば',
                        }, //33
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            relatedProblems: ['2024b34'],
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '体格',
                            relatedProblems: ['2024a28', '2024b35', '2024c45'],
                            content: '体重 × 身長の二乗 → 体重 ÷ 身長の二乗',
                        }, //35 //p63
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '重大事由による解除権',
                            relatedProblems: ['2024b36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            relatedProblems: ['2024a48', '2024b37'],
                            content: '保険金確認・給付金確認は、[[確認の対象は保険事故発生前の契約確認と若干異なる]]。一方、[[告知義務違反やモラルリスクを排除し、生命保険の公平性の原則を達成しようとする目的は契約確認と変わらない]]。', //p120
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '傷害特約',
                            relatedProblems: ['2024b38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '最高保険金額',
                            relatedProblems: ['2024a39', '2024b39', '2024c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '実際死亡状況の分析',
                            relatedProblems: ['2024a40', '2024b40', '2024c40', '2024c50'],
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '告知義務者',
                            relatedProblems: ['2024a41', '2024b41'],
                            label: 'エ',
                            content: '質問応答義務',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険料の仕組みと危険選択',
                            relatedProblems: ['2024a42', '2024b42', '2024c42'],
                            label: 'イ',
                            content: '純保険料',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者集団の具備すべき条件',
                            relatedProblems: ['2024a43', '2024b43', '2024c43'],
                            label: 'イ',
                            content: '倫理',
                        }, //43
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2024a34', '2024b44', '2024c34'],
                            label: 'ア',
                            content: '入院率',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '道徳的危険排除のためのポイント',
                            relatedProblems: ['2024b45', '2024c28'],
                            label: 'ウ',
                            content: '被保険利益',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '人間ドック扱',
                            relatedProblems: ['2024b46'],
                            label: 'ウ',
                            content: '医師による診査',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定法',
                            relatedProblems: ['2024b47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '個人データの安全管理措置',
                            relatedProblems: ['2024b48'],
                            label: 'ア',
                            content: 'き損',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高度障害状態',
                            relatedProblems: ['2024a49', '2024b49', '2024c49'],
                            label: 'エ',
                            content: '両眼の視力',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '期待死亡率との比較',
                            relatedProblems: ['2024b50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2024a" next-route="kiken2024c" />
        </section>
    </SeihoTestLayout>
</template>
