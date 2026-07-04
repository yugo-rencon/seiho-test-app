<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2020年度 フォームA";
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
                    :relatedProblems="['2020a1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '故意',
                        'しない',
                        '民法',
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
                    :relatedProblems="['2020a6']"
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
                    :relatedProblems="['2020a11', '2020b11', '2020c11']"
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
                    :relatedProblems="['2020a16', '2020b16', '2020c16']"
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
                    questionTitle="死亡率と死亡指数"
                    :relatedProblems="['2020a21', '2020b21', '2020c21']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '生命表には国民全体を対象とした[[国民生命表]]と，それよりは小さな特定集団（たとえば生命保険の被保険者集団）を対象とする[[経験生命表]]とがある。', //p5
                        '正しい',
                        '死亡指数は「[[実際死亡率]] ÷ [[予定死亡率]] × 100（%)」で計算される。', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果"
                    :relatedProblems="['2020a22']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '診査による選択有効期間は３〜５年と考えられているが、[[国民生命表との比較では、かなり長期に及ぶ]]ことが明らかになっている。', //p32
                        '正しい',
                        '被保険者を契約年齢別に観察すると，若年齢層は健康体も多く、安い保険料で加入することができるが、その死因では，不慮の事故が上位を占めているので、[[診査の効果は顕著ではない]]。他方，高年齢層では、保険料は高いが、診査によって契約を延期されたり、条件体になる率も高い。しかしながら，診査自体に加えて心電図・血液検査などの補助診断法を併用することによって[[選択効果を期待することができる]]。', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴"
                    :relatedProblems="['2020a23']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '若年層には[[先天性]]のものが多く、中年および高年齢になると[[高血圧性]]、[[虚血性]]が多くなる。', //p65
                        '正しい',
                        'ネフローゼ性肝炎 → アルコール性肝炎', //p67
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択"
                    :relatedProblems="['2020a24', '2020b24', '2020c24']"
                    :contents="[
                        '団体定期保険も一括告知 → 団体定期保険は各被保険者の告知を求める', //p171
                        '職業上の危険選択は行わない → 職業上の危険選択行っている', //p171
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
                    :relatedProblems="['2020a25']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '１保険金受取人 → １被保険者', //p181
                        '一般の保有限度額より高く → 一般の保有限度額より低く', //p182
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :relatedProblems="['2020a26', '2020b26', '2020c26']"
                    :contents="[
                        '正しい',
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="道徳的危険排除のためのポイント"
                    :relatedProblems="['2020a27']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '過小 → 過大', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :relatedProblems="['2020a28', '2020b23']"
                    :contents="[
                        '正しい',
                        '健康の異常や症状に対する明確な診断が必要 → 必ずしも必要ではない', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の取扱指針"
                    :relatedProblems="['2020a29']"
                    :contents="[
                        '正しい',
                        '正しい',
                        'いかなる場合であっても本人の同意を得なければならない → 本人に通知または公表すれば足りる', //p131-132
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率比較"
                    :relatedProblems="['2020a30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '保険料算定の予定死亡率との比較は、経営効率への寄与率をみる目的に適しているが、過去の選択の成績の反省から将来の選択に対処するという目的からみれば[[適当でない]]。', //p184
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
                            questionTitle: '保険事故発生率',
                            relatedProblems: ['2020a31'],
                            content: '危険一律性の原則 → 危険均一性の原則',
                        }, //31 p18
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '危険選択の厳格度',
                            relatedProblems: ['2020a32'],
                            content: '期待死亡率についての目標値（実際死亡率） → 実際死亡率についての目標値（期待死亡率）', //p35
                        }, //32
                        {
                            questionTitle: '体格',
                            relatedProblems: ['2020a33', '2020b33', '2020c33'],
                            content: 'BMIは[[体重（kg） ÷ 〔身長（m）〕<sup>2</sup>]]で表される指数で標準値を22前後としている。', //p63
                        }, //33
                        {
                            questionTitle: '診査実施上の制限',
                            relatedProblems: ['2020a34'],
                            content: '区分を設けている生命保険会社は少ない → 区分を設けている生命保険会社が多い',
                        }, //34 p74
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '第1次選択で行う事柄',
                            relatedProblems: ['2020a35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '医学的査定',
                            relatedProblems: ['2020a36', '2020c48'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '契約内容の相互照会',
                            relatedProblems: ['2020a37', '2020b37', '2020c37'],
                            content: '厚生労働省ならびに農林水産省 → 全国共済農業協同組合連合会<br>生命共済 → 全国共済農業協同組合連合会',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '傷害特約',
                            relatedProblems: ['2020a38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '再保険の意義',
                            relatedProblems: ['2020a39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '金額別死亡率',
                            relatedProblems: ['2020a40', '2020b40', '2020c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者の危険',
                            relatedProblems: ['2020a41', '2020b41', '2020c41'],
                            label: 'イ',
                            content: '実体的危険',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '告知義務者',
                            relatedProblems: ['2020a42'],
                            label: 'ア',
                            content: '保険法',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死差益の計算方法',
                            relatedProblems: ['2020a43'],
                            label: 'エ',
                            content: '危険保険料',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '医学的選択上の制約条件',
                            relatedProblems: ['2020a44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: 'エイズ',
                            relatedProblems: ['2020a45', '2020b45', '2020c45'],
                            label: 'ウ',
                            content: 'リンパ球',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '重大事由による解除',
                            relatedProblems: ['2020a46'],
                            label: 'ウ',
                            content: '不当な所得',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            relatedProblems: ['2020a47', '2020b39'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体の選択',
                            relatedProblems: ['2020a48'],
                            label: 'イ',
                            content: '被用者団体',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            relatedProblems: ['2020a49', '2020b49', '2020c49'],
                            label: 'ウ',
                            content: '長い',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '出再方式',
                            relatedProblems: ['2020a50'],
                            label: 'ア',
                            content: '個別再保険',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2021c" next-route="kiken2020b" />
        </section>
    </SeihoTestLayout>
</template>
