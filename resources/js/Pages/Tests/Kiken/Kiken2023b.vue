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
                    :relatedProblems="['2023b1']"
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
                    :relatedProblems="['2023b6']"
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
                    :relatedProblems="['2023a11', '2023b11', '2023c11']"
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
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
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
                    :relatedProblems="['2023b21']"
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
                    :relatedProblems="['2023a22', '2023b22', '2023c22']"
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
                    :relatedProblems="['2023a45', '2023b23', '2023c28']"
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
                    :relatedProblems="['2023b24', '2023c45']"
                    :contents="[
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
                    :relatedProblems="['2023a25', '2023b25', '2023c25']"
                    :contents="[
                        '正しい',
                        '責任準備金部分まで再保険料を支払う必要がない → 支払わなければならない', //p179
                        'ストップ・ロス再保険 → エクセス・オブ・ロス再保険', //p180
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :relatedProblems="['2023a21', '2023b26']"
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
                    :relatedProblems="['2023b27']"
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
                    :relatedProblems="['2023a24', '2023b28']"
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
                    :relatedProblems="['2023a29', '2023b29', '2023c29']"
                    :contents="[
                        '正しい',
                        '健康の異常や症状に対する明確な診断が必要 → 必ずしも必要ではない', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
                    :relatedProblems="['2023b30']"
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
                            relatedProblems: ['2023b31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            relatedProblems: ['2023a32', '2023b32', '2023c32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '体格',
                            relatedProblems: ['2023a33', '2023b33', '2023c33'],
                            content: '体重 × 身長の二乗 → 体重 ÷ 身長の二乗',
                        }, //33  //p63
                        {
                            questionTitle: '保険種類・保険期間の制限',
                            relatedProblems: ['2023b34'],
                            content: '短期 ↔︎ 長期',
                        }, //34 p73
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            relatedProblems: ['2023b35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '個人情報の取得',
                            relatedProblems: ['2023b36'],
                            content: '利用目的は明示しなければならない → 必ずしも利用目的の明示は要しない',
                        }, //36 p135
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '特定部位不担保法',
                            relatedProblems: ['2023b37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            relatedProblems: ['2023a38', '2023b38', '2023c38'],
                            content: '失効後の期間の長いものほど逆選択混入の危険が[[多く]]、また診査による場合に比べ告知のみによる場合のほうが経験死亡率が[[高い]]とされている。', //p173-174
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '再保険の意義',
                            relatedProblems: ['2023b39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '金額別死亡率',
                            relatedProblems: ['2023b40'],
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者の危険',
                            relatedProblems: ['2023b41'],
                            label: 'イ',
                            content: '実体的危険',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '解除権の消滅',
                            relatedProblems: ['2023a42', '2023b42', '2023c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '危険保険料と危険保険金',
                            relatedProblems: ['2023a27', '2023b43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者集団の具備すべき条件',
                            relatedProblems: ['2023b44'],
                            label: 'エ',
                            content: '大数の法則',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高血圧',
                            relatedProblems: ['2023b45'],
                            label: 'ア',
                            content: '二次性高血圧',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '人間ドック扱',
                            relatedProblems: ['2023a46', '2023b46', '2023c46'],
                            label: 'イ',
                            content: '告知書',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定法',
                            relatedProblems: ['2023b47'],
                            label: 'ア',
                            content: '数字査定法',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約確認後の処理',
                            relatedProblems: ['2023a48', '2023b48', '2023c48'],
                            label: 'ウ',
                            content: '不実の告知',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '災害保障',
                            relatedProblems: ['2023b49'],
                            label: 'ウ',
                            content: '感染症法',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '期待死亡率との比較',
                            relatedProblems: ['2023b50'],
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
