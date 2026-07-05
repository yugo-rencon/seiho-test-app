<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2021年度 フォームC";
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
                    questionTitle="保険診査と臨床診察の相違点-①"
                    :relatedProblems="['2021c1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '告知聴取',
                        '生命予後',
                        '少なくない',
                        '問診',
                        '契約解除権', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'カ', //2
                        'ク', //3
                        'コ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険診査と臨床診察の相違点-②"
                    :relatedProblems="['2021c6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '再発',
                        '疾病特約',
                        '肥満体',
                        '死亡率',
                        '会社', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ア', //7
                        'ケ', //8
                        'オ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択-①"
                    :relatedProblems="['2021a11', '2021b11', '2021c11']"
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
                    :relatedProblems="['2021a16', '2021b16', '2021c16']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '総合福祉団体定期保険',
                        '権利',
                        '保険契約者',
                        '一括告知',
                        '平準化', //問16〜20
                    ]"
                    :labels="[
                        'ク', //16
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
                    :relatedProblems="['2021a21', '2021b21', '2021c21']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '正しい',
                        '死亡指数 = [[実際死亡率]] ÷ [[予定死亡率]] × 100（%)', //p11
                        '簡易生命表 → 保険料計算に使用する予定の死亡率', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の制約条件"
                    :relatedProblems="['2021b44', '2021c22']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '純保険料の範囲内 → 付加保険料の範囲内', //p40
                        '正しい',
                        '危険分散の原則 → 危険均一性の原則', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :relatedProblems="['2021a23', '2021b23', '2021c23']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '最近の保険金・災害疾病入院給付金支払事故において、道徳的危険（モラルリスク）は[[潜在的傾向から、顕在化への傾向にある]]。', //p76
                        '正しい',
                        '保険業法 → 保険法', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2021b27', '2021c24']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '「保険会社向けの総合的な監督指針」では、[[法人等の財テクなどを主たる目的とした契約や、当初から短期の中途解約を前提とした契約等の保険本来の趣旨を逸脱するような募集活動を行わないこと]]が求められている。', //p76
                        '役員を被保険者とする場合も[[被保険者の書面による加入同意が必要]]である。', //p75
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認"
                    :relatedProblems="['2021c25']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '被保険者の死亡後に、重要事実についての告知義務違反の事実が判明して契約解除を行うためには、既往歴など告知義務違反の事実と死因との間に[[因果関係がなければならない]]。 ', //p120
                        '給付金確認後、主契約について告知義務違反の事実が判明して契約を解除する場合、給付金については[[支払う場合と支払わない場合に分かれる]]。', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険で対象としている危険"
                    :relatedProblems="['2021c26']"
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
                    questionTitle="体格"
                    :relatedProblems="['2021c27']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        'BMIは[[体重（kg） ÷ 〔身長（m）〕<sup>2</sup>]]で表される指数で標準値を22前後としている。', //p63
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険業における個人情報"
                    :relatedProblems="['2021a28', '2021b28', '2021c28']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '個人情報登録制度 → 契約内容登録制度', //p138-139
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="数字査定法"
                    :relatedProblems="['2021c29']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '標準体の125％ → 標準体の75％', //p111-112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態"
                    :relatedProblems="['2021c30']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '自動再保険 → 任意再保険', //p178
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
                            questionTitle: '件数死亡率、金額死亡率',
                            relatedProblems: ['2021c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '環境選択',
                            relatedProblems: ['2021a32', '2021b32', '2021c32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '告知義務者',
                            relatedProblems: ['2021c33'],
                            content: '責任は1人が負うことになる → 責任は全員が負うことになる', //p13
                        }, //33
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '選択効果',
                            relatedProblems: ['2021a27', '2021c34'],
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '血圧',
                            relatedProblems: ['2021b35', '2021c35'],
                            content: '最小血圧 ↔︎ 最大血圧',
                        }, //35 p64
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険金額の制限',
                            relatedProblems: ['2021c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体保険の保険金額の決定による選択',
                            relatedProblems: ['2021c37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '個人情報の定義',
                            relatedProblems: ['2021a38', '2021b38', '2021c38'],
                            content: '生存するまたは死亡した個人に関する情報 → 生存する個人に関する情報（死亡は対象外）',
                        }, //38 p125
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '最高保険金額と保有限度額',
                            relatedProblems: ['2021c39'],
                            content: '１保険金受取人 → １被保険者', //p181-182
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死亡状況の分析',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '生命表',
                            relatedProblems: ['2021a41', '2021b41', '2021c41'],
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死差益',
                            relatedProblems: ['2021c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険料の仕組みと危険選択',
                            relatedProblems: ['2021a43', '2021b43', '2021c43'],
                            label: 'ウ',
                            content: '収支相等の原則',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '糖尿病と胃炎',
                            relatedProblems: ['2021c44'],
                            label: 'ア',
                            content: 'インシュリン',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '健康管理証明書扱（個人）',
                            relatedProblems: ['2021c45'],
                            label: 'ア',
                            content: '20名〜30名',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '疾病保険の特別条件付決定',
                            relatedProblems: ['2021b29', '2021c46'],
                            label: 'イ',
                            content: '特別保険料領収法',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体保険の契約内容の変更',
                            relatedProblems: ['2021c47'],
                            label: 'エ',
                            content: '契約者',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約確認後の処理',
                            relatedProblems: ['2021a48', '2021b48', '2021c48'],
                            label: 'ウ',
                            content: '不実の告知',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            relatedProblems: ['2021a39', '2021c49'],
                            label: 'ア',
                            content: '契約金額',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '元受保有額と出再額',
                            relatedProblems: ['2021c50'],
                            label: 'エ',
                            content: 'サープラス',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2021b" next-route="kiken2020a" />
        </section>
    </SeihoTestLayout>
</template>
