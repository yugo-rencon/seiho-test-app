<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2020年度 フォームC";
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
                    questionTitle="報状扱契約における選択手段-①"
                    :relatedProblems="['2020c1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '医師による診査',
                        '簡便性',
                        '職員',
                        '社医',
                        '観察', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'カ', //2
                        'ア', //3
                        'コ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段-②"
                    :relatedProblems="['2020c6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '定期健康診断',
                        '衛生管理者',
                        '20名',
                        '出勤簿',
                        'と一緒', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ク', //7
                        'ウ', //8
                        'ア', //9
                        'カ', //10
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
                    questionTitle="告知"
                    :relatedProblems="['2020b27', '2020c22']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '告知の形式と質問方法について[[保険法に規定はない]]。', //p15
                        '契約者側に告知義務違反があっても、保険者がその事実を知っていた場合、または[[過失によって知らなかった場合は解除できない]]。', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
                    :relatedProblems="['2020c23']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '職業危険には、「職業に伴う災害危険」「いわゆる職業病のような疾病危険」さらには[[「アルコール中毒や不摂生生活のような職業に随伴する危険」]]がある。', //p69
                        '正しい',
                        '各種特約の入院率をみてみると、職業と入院率についても[[相当の関連がある]]ことが判明している。', //p70
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
                    questionTitle="プライバシーと個人情報"
                    :relatedProblems="['2020c25']"
                    :contents="[
                        '紙面に出力されたものは含まない → 含まれる', //p127
                        '正しい',
                        'いかなる場合であっても本人の同意を得なければならない → 本人に通知または公表すれば足りる', //p131-132
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
                    questionTitle="医学的選択上の課題"
                    :relatedProblems="['2020b22', '2020c27']"
                    :contents="[
                        '脳内出血の増加傾向 → 低下傾向<br>塩分過剰摂取が是正されていない → 是正されている', //p43-44
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :relatedProblems="['2020c28']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '最近の保険金・災害疾病入院給付金支払事故において、道徳的危険（モラルリスク）は[[潜在的傾向から、顕在化への傾向にある]]。', //p76
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認の意義と目的"
                    :relatedProblems="['2020c29']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '正しい',
                        '確認する項目は契約確認と比較して[[かなり広範囲かつ綿密なもの]]となる。', //p119
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態"
                    :relatedProblems="['2020c30']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '任意再保険 → 自動再保険', //p178
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
                            relatedProblems: ['2020c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高血圧',
                            relatedProblems: ['2020c32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '体格',
                            relatedProblems: ['2020a33', '2020b33', '2020c33'],
                            content: 'BMIは[[体重（kg） ÷ 〔身長（m）〕<sup>2</sup>]]で表される指数で標準値を22前後としている。', //p63
                        }, //33
                        {
                            questionTitle: '条件体契約',
                            relatedProblems: ['2020c34'],
                            content: '体重別・性別 → 年齢別',
                        }, //34 p72
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '数字査定法',
                            relatedProblems: ['2020c35'],
                            content: '50%の超過死亡 → 50%の改善', //p112
                        }, //35
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約確認制度の運用',
                            relatedProblems: ['2020c36'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '契約内容の相互照会',
                            relatedProblems: ['2020a37', '2020b37', '2020c37'],
                            content: '厚生労働省ならびに農林水産省 → 全国共済農業協同組合連合会<br>生命共済 → 全国共済農業協同組合連合会',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '入院保障における料率',
                            relatedProblems: ['2020c38'],
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険金額と限度額',
                            relatedProblems: ['2020c39'],
                            content: '超過限度額 → 保有限度額',
                        }, //39 p181-182
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '金額別死亡率',
                            relatedProblems: ['2020a40', '2020b40', '2020c40'],
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者の危険',
                            relatedProblems: ['2020a41', '2020b41', '2020c41'],
                            label: 'イ',
                            content: '実体的危険',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '解除権の消滅',
                            relatedProblems: ['2020c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者集団の具備すべき条件',
                            relatedProblems: ['2020c43'],
                            label: 'イ',
                            content: '倫理',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '習慣による選択',
                            relatedProblems: ['2020c44'],
                            label: 'ウ',
                            content: '死亡率',
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
                            questionTitle: '契約の制限',
                            relatedProblems: ['2020c46'],
                            label: 'エ',
                            content: '加入保険金額',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '第1次選択',
                            relatedProblems: ['2020c47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '医学的査定',
                            relatedProblems: ['2020a36', '2020c48'],
                            label: 'ア',
                            content: '恒常性危険',
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
                            questionTitle: '契約確認後の処理',
                            relatedProblems: ['2020c50'],
                            label: 'エ',
                            content: '不実の告知',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2020b" />
        </section>
    </SeihoTestLayout>
</template>
