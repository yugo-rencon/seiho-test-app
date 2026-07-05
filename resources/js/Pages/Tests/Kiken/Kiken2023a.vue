<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2023年度 フォームA";
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
                    :relatedProblems="['2023a1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '保護',
                        '公平性',
                        '減殺',
                        '被保険者利益',
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
                    :relatedProblems="['2023a6']"
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
                    questionTitle="告知"
                    :relatedProblems="['2023a21', '2023b26']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '告知義務者が[[告知事項の存在を知らないまま告知しなかった場合には、告知義務違反は成立しない]]こととなる。', //p16
                        '契約者側に告知義務違反があっても、保険者がその事実を知っていた場合、または[[過失によって知らなかった場合は解除できない]]。', //p17
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
                    questionTitle="現病歴・既往歴"
                    :relatedProblems="['2023a23', '2023c27']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '若年層には[[先天性]]のものが多く、中年および高年齢になると[[高血圧性]]、[[虚血性]]が多くなる。', //p65
                        '正しい',
                        '二次性高血圧 ↔︎ 本態性高血圧', //p64-65
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :relatedProblems="['2023a24', '2023b28']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '逆選択は、[[健康に自信のない者]]が保険に加入したがる心理的な傾向で、このような人間の心理的状態を危険の要素とし[[て直接測定することはできない]]。', //p77
                        '正しい',
                        '保険業法 → 保険法', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険"
                    :relatedProblems="['2023a25', '2023b25', '2023c25']"
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
                    questionTitle="生命保険で対象としている危険"
                    :relatedProblems="['2023a26', '2023c21']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '「実体的危険」は、「[[身体的危険]]」と「環境的危険」の２つに分類することができる。', //p4
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :relatedProblems="['2023a27', '2023b43']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="環境選択"
                    :relatedProblems="['2023a28']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '[[保険金・災害疾病入院給付金等を目当てとする逆選択の心理]]が働きやすく，契約成立前に排除しなければならない。', //59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :relatedProblems="['2023a29', '2023b29', '2023c29']"
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
                    questionTitle="死亡率比較"
                    :relatedProblems="['2023a30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '正しい',
                        '保険体の範囲が広くなる → 保険体の範囲が狭くなる', //p186
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命表',
                            relatedProblems: ['2023a31', '2023c41'],
                            content: '生命表には国民全体を対象とした[[国民生命表]]と、それよりは小さな特定集団（たとえば生命保険の被保険者集団）を対象とする[[経験生命表]]とがある。', //p5
                        }, //31
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            relatedProblems: ['2023a32', '2023b32', '2023c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '体格',
                            relatedProblems: ['2023a33', '2023b33', '2023c33'],
                            content: 'BMIは[[体重（kg） ÷ 〔身長（m）〕<sup>2</sup>]]で表される指数で標準値を22前後としている。', //p63
                        }, //33
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '医学的査定',
                            relatedProblems: ['2023a34', '2023c47'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '機微（センシティブ）情報',
                            relatedProblems: ['2023a35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '契約内容登録制度',
                            relatedProblems: ['2023a36'],
                            content: '金融庁 → 生命保険協会', //p139
                        }, //36
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '傷害特約',
                            relatedProblems: ['2023a37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            relatedProblems: ['2023a38', '2023b38', '2023c38'],
                            content: '失効後の期間の長いものほど逆選択混入の危険が[[多く]]、また診査による場合に比べ告知のみによる場合のほうが経験死亡率が[[高い]]とされている。', //p173-174
                        }, //38
                        {
                            questionTitle: '最高保険金額と保有限度額',
                            relatedProblems: ['2023a39'],
                            content: '保険金受取人 → 被保険者',
                        }, //39 p181
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死亡状況の分析',
                            relatedProblems: ['2023a40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死亡率',
                            relatedProblems: ['2023a41'],
                            label: 'エ',
                            content: '金額死亡率',
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
                            questionTitle: '保険料の仕組みと危険選択',
                            relatedProblems: ['2023a43'],
                            label: 'ウ',
                            content: '収支相等の原則',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '販売政策と選択政策',
                            relatedProblems: ['2023a44'],
                            label: 'ア',
                            content: '加入申込者群',
                        }, //44
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2023a45', '2023b23', '2023c28'],
                            label: 'イ',
                            content: '入院率',
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
                            questionTitle: '査定・決定の種類',
                            relatedProblems: ['2023a47', '2023c35'],
                            label: 'エ',
                            content: '再診',
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
                            questionTitle: '入院・手術保障における料率',
                            relatedProblems: ['2023a49'],
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体保険の契約内容の変更',
                            relatedProblems: ['2023a50'],
                            label: 'ア',
                            content: '1年間',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2024c" next-route="kiken2023b" />
        </section>
    </SeihoTestLayout>
</template>
