<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2020年度 フォームB";
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
                    questionTitle="被保険者集団の具備すべき条件-①"
                    :relatedProblems="['2020b1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '保護',
                        '公平性',
                        '減殺',
                        '被保険利益',
                        '疾病保険', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'イ', //2
                        'キ', //3
                        'ク', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団の具備すべき条件-②"
                    :relatedProblems="['2020b6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '継続',
                        '低い',
                        '大数の法則',
                        '危険選択の効果',
                        '再保険', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ウ', //8
                        'ク', //9
                        'イ', //10
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
                    questionTitle="医学的選択上の課題"
                    :relatedProblems="['2020b22', '2020c27']"
                    :contents="[
                        '三大都市圏から離れるにつれて低率となる → 高率となる', //p47
                        '発生率が著しく低い → 著しく高い', //p51-52
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :relatedProblems="['2020a28', '2020b23']"
                    :contents="[
                        '欧米では嘱託医制度はなく、一般に社医だけである → 欧米では社医制度はなく、一般に嘱託医だけである。', //p95
                        '3項目 → 2項目（検診は含まない）', //p99
                        '正しい',
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
                    questionTitle="再保険"
                    :relatedProblems="['2020b25', '2020b48']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '取扱いが簡単である点にメリットがあるが、[[元受会社にとっては危険に関係のない責任準備金部分まで再保険料を支払わなければならない]]。', //p179
                        'ストップ・ロス再保険 → エクセス・オブ・ロス再保険', //p180
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :relatedProblems="['2020a26', '2020b26', '2020c26']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :relatedProblems="['2020b27', '2020c22']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '保険法には告知義務者を定めているが、[[告知の相手方についての明文はない]]。', //p13
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="環境選択"
                    :relatedProblems="['2020b28']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '受理することが通例 → 受理しないことが通例', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2020b29']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '一般に[[短期]]養老または[[短期]]払込養老保険の経験死亡率は[[長期]]のものより良好である。ただし、定期保険ではこの関係は逆転し、保険期間が[[短期]]のものに逆選択が集中する傾向がある。', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約確認の時期と方法"
                    :relatedProblems="['2020b30']"
                    :contents="[
                        '一部 ↔︎ 大部分', //p114
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
                            questionTitle: 'ずさんな選択',
                            relatedProblems: ['2020b31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            relatedProblems: ['2020b32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '体格',
                            relatedProblems: ['2020a33', '2020b33', '2020c33'],
                            content: 'BMIは[[体重（kg） ÷ 〔身長（m）〕<sup>2</sup>]]で表される指数で標準値を22前後としている。', //p63
                        }, //33
                        {
                            questionTitle: '血圧',
                            relatedProblems: ['2020b34'],
                            content: '高血圧 → 最大血圧<br>低血圧 → 最小血圧',
                        }, //34 //p64
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '重大事由による解除権',
                            relatedProblems: ['2020b35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '第1次選択の重要性',
                            relatedProblems: ['2020b36'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '契約内容の相互照会',
                            relatedProblems: ['2020a37', '2020b37', '2020c37'],
                            content: '厚生労働省ならびに農林水産省 → 全国共済農業協同組合連合会<br>生命共済 → 全国共済農業協同組合連合会',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定標準',
                            relatedProblems: ['2020b38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            relatedProblems: ['2020a47', '2020b39'],
                            content: '保険金確認・給付金確認は、[[確認の対象は保険事故発生前の契約確認と若干異なる]]。一方、[[告知義務違反やモラルリスクを排除し、生命保険の公平性の原則を達成しようとする目的は契約確認と変わらない]]。', //p120
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
                            questionTitle: '解除',
                            relatedProblems: ['2020b42'],
                            label: 'ウ',
                            content: '解約返戻金',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '選択の有効期間',
                            relatedProblems: ['2020b43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '人間ドック扱',
                            relatedProblems: ['2020b44'],
                            label: 'イ',
                            content: '告知書',
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
                            questionTitle: '安全管理措置',
                            relatedProblems: ['2020b46'],
                            label: 'エ',
                            content: '技術的',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高度障害',
                            relatedProblems: ['2020b47'],
                            label: 'ア',
                            content: '第1級',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '再保険',
                            relatedProblems: ['2020b25', '2020b48'],
                            label: 'ア',
                            content: '保有限度額',
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
                            questionTitle: '期待死亡率との比較',
                            relatedProblems: ['2020b50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2020a" next-route="kiken2020c" />
        </section>
    </SeihoTestLayout>
</template>
