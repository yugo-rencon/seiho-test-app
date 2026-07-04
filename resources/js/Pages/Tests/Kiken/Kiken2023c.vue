<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2023年度 フォームC";
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
                    questionTitle="逆選択の傾向と態様-①"
                    :relatedProblems="['2023c1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '死亡率',
                        '心理的',
                        '大数の法則',
                        '募集担当者',
                        '第1次選択', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'ウ', //2
                        'カ', //3
                        'ケ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様-②"
                    :relatedProblems="['2023c6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '取消し',
                        '民法',
                        '保険法',
                        '公序良俗',
                        '信頼関係', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'ケ', //7
                        'カ', //8
                        'エ', //9
                        'キ', //10
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
                    questionTitle="生命保険で対象としている危険"
                    :relatedProblems="['2023a26', '2023c21']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '「実体的危険」は、「[[身体的危険]]」と「環境的危険」の２つに分類することができる。', //p4
                        '正しい',
                        '[[環境的危険]]とは、被保険者の生活環境全般に関する危険であるが主に被保険者の職業・仕事の内容による危険を指す。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院保険（特約）"
                    :relatedProblems="['2023a22', '2023b22', '2023c22']"
                    :contents="[
                        '国民の平均入院日数よりも短期 → 長期', //p51
                        '生活習慣病特約での糖尿病入院発生率が著しく低い → 著しく高い', //52
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2023c23']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '[[明確な債権債務関係が存在するものとは限らず]]、恩義的あるいは義理的関係などのものも多く、[[道徳的危険が潜在するおそれがある]]。', //p74
                        '「保険会社向けの総合的な監督指針」では、[[法人等の財テクなどを主たる目的とした契約や、当初から短期の中途解約を前提とした契約等の保険本来の趣旨を逸脱するような募集活動を行わないこと]]が求められている。', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約確認の時期と方法"
                    :relatedProblems="['2023c24']"
                    :contents="[
                        '一部 ↔︎ 大部分', //p114
                        '正しい',
                        '保険金受取人 → 被保険者や契約者。', //p114
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
                    questionTitle="死亡指数"
                    :relatedProblems="['2023c26']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '若年層 ↔︎ 高齢層', //p112
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴"
                    :relatedProblems="['2023a23', '2023c27']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        'ネフローゼ → インシュリン', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
                    :relatedProblems="['2023a45', '2023b23', '2023c28']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '職業危険には、「職業に伴う災害危険」「いわゆる職業病のような疾病危険」さらには[[「アルコール中毒や不摂生生活のような職業に随伴する危険」]]がある。', //p69
                        '正しい',
                        '正しい',
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
                    questionTitle="疾病保険の特別条件付決定"
                    :relatedProblems="['2023c30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '正しい',
                        '給付金日額の制限は、これによって[[超過危険を調整することはできない]]が、不当利得の企てに対抗する抑制策としては有効である。', //p155
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
                            questionTitle: '告知義務',
                            relatedProblems: ['2023c31'],
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
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険金額の制限',
                            relatedProblems: ['2023c34'],
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '査定・決定の種類',
                            relatedProblems: ['2023a47', '2023c35'],
                            content: 'リスク細分化保険では広くなる → 狭くなる',
                        }, //35 p107
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '個人情報の定義',
                            relatedProblems: ['2023c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '入院・手術保障における料率',
                            relatedProblems: ['2023a49', '2023c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            relatedProblems: ['2023a38', '2023b38', '2023c38'],
                            content: '失効後の期間の長いものほど逆選択混入の危険が[[多く]]、また診査による場合に比べ告知のみによる場合のほうが経験死亡率が[[高い]]とされている。', //p173-174
                        }, //38
                        {
                            questionTitle: '元受保有額と出再額',
                            relatedProblems: ['2023c39'],
                            content: '群団再保険 → 個別再保険',
                        }, //39 p180
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死因別死亡率',
                            relatedProblems: ['2023c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '生命表',
                            relatedProblems: ['2023a31', '2023c41'],
                            label: 'ア',
                            content: '選択表',
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
                            questionTitle: '死差益の計算方法',
                            relatedProblems: ['2023c43'],
                            label: 'エ',
                            content: '危険保険料',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '選択の有効期間',
                            relatedProblems: ['2023c44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '危険選択の段階',
                            relatedProblems: ['2023b24', '2023c45'],
                            label: 'ア',
                            content: '生命保険協会',
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
                            questionTitle: '医学的査定',
                            relatedProblems: ['2023a34', '2023c47'],
                            label: 'エ',
                            content: '特別保険料領収法',
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
                            questionTitle: '個人データの安全管理措置',
                            relatedProblems: ['2023c49'],
                            label: 'イ',
                            content: 'き損',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高度障害状態',
                            relatedProblems: ['2023c50'],
                            label: 'ウ',
                            content: '両眼の視力',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2023b" next-route="kiken2022a" />
        </section>
    </SeihoTestLayout>
</template>
