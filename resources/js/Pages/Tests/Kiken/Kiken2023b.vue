<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2023年度 フォームB";
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
                    questionTitle="死差益と危険選択-①"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '経営効率',
                        '剰余金',
                        '配当',
                        '予定死亡率',
                        '死差益', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'ウ', //2
                        'ア', //3
                        'ク', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="死差益と危険選択-②"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '低い',
                        '統計的方式',
                        '逓減',
                        '定期付養老保険',
                        '定期保険', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'オ', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択-①"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '被用者団体',
                        '団体性',
                        '相似する',
                        '保険加入のみ',
                        '加入率', //問11〜15
                    ]"
                    :labels="[
                        'カ', //11
                        'ア', //12
                        'キ', //13
                        'ク', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択-②"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '総合福祉団体定期保険',
                        '団体の弔慰金・死亡退職金規程',
                        '保険契約者',
                        '一括告知',
                        '平準化', //問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'カ', //17
                        'ア', //18
                        'コ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数"
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
                    questionTitle="疾病入院保険（特約）"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '国民の平均入院日数よりも短期 → 国民の平均入院日数よりも長期', //p51
                        '生活習慣病特約での糖尿病入院発生率が[[著しく高い]]。', //p51-52
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
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
                    questionTitle="危険選択の段階"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '金融庁 → 生命保険協会', //p86
                        '査定 ↔︎ 決定', //p86-87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険"
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
                    questionTitle="告知"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '約款上では書面による告知をした時以降に生じた事項については、[[告知義務はないとしている]]。', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '正しい',
                        '若年齢層 ↔︎ 高年齢層', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '保険業法 → 保険法', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '健康の異常や症状に対する明確な診断は[[必ずしも必要ではない]]。', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
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
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '危険の公平性',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '体格',
                            content: 'BMIは[[体重（kg） ÷ 〔身長（m）〕<sup>2</sup>]]で表される指数で標準値を22前後としている。', //p63
                        }, //33
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険種類・保険期間の制限',
                            content: '一般に[[短期]]養老または[[短期]]払込養老保険の経験死亡率は[[長期]]のものより良好である。ただし、定期保険ではこの関係は逆転し、保険期間が[[短期]]のものに逆選択が集中する傾向がある。', //p73
                        }, //34
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '個人情報の取得',
                            content: '生命保険会社等は、アンケートや申込書等の書面の提出またはユーザー入力画面へのデータ入力等により、直接本人から個人情報を取得する場合には、[[あらかじめ本人に対してその利用目的を明示しなければならない]]。ただし、[[一定の場合は利用目的の明示を要しない]]。', //p135
                        }, //36
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '特定部位不担保法',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            content: '失効後の期間の長いものほど逆選択混入の危険が[[多く]]、また診査による場合に比べ告知のみによる場合のほうが経験死亡率が[[高い]]とされている。', //p173-174
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '再保険の意義',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '金額別死亡率',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者の危険',
                            label: 'イ',
                            content: '実体的危険',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '解除権の消滅',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '危険保険料と危険保険金',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者集団の具備すべき条件',
                            label: 'エ',
                            content: '大数の法則',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高血圧',
                            label: 'ア',
                            content: '二次性高血圧',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '人間ドック扱',
                            label: 'イ',
                            content: '告知書',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定法',
                            label: 'ア',
                            content: '数字査定法',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約確認後の処理',
                            label: 'ウ',
                            content: '不実の告知',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '災害保障',
                            label: 'ウ',
                            content: '感染症法',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '期待死亡率との比較',
                            label: 'エ',
                            content: '保険体',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2023a" next-route="kiken2023c" />
        </section>
    </SeihoTestLayout>
</template>
