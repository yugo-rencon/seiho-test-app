<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2021年度 フォームA";
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
                    :relatedProblems="['2021a1']"
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
                    :relatedProblems="['2021a6']"
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
                    questionTitle="職業危険"
                    :relatedProblems="['2021a22', '2021b46']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '職業危険には、「職業に伴う災害危険」「いわゆる職業病のような疾病危険」さらには[[「アルコール中毒や不摂生生活のような職業に随伴する危険」]]がある。', //p69
                        '正しい',
                        '各種特約の入院率をみてみると、職業と入院率についても[[相当の関連がある]]ことが判明している。', //p70
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :relatedProblems="['2021a23', '2021b23', '2021c23']"
                    :contents="[
                        '顕在的傾向から潜在化への傾向 → 潜在的傾向から顕在化への傾向', //p76
                        '正しい',
                        '保険業法 → 保険法', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的査定の対象となる危険"
                    :relatedProblems="['2021a24']"
                    :contents="[
                        '保険金削減法 → 特別保険料領収法', //p105
                        '保険金割増法 → 特別保険料領収法', //p105
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険"
                    :relatedProblems="['2021a25']"
                    :contents="[
                        '正しい',
                        '共同保険式再保険 → 危険保険料式再保険', //p178
                        '危険保険料式再保険 → 共同保険式再保険', //p179
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :relatedProblems="['2021a26', '2021b22']"
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
                    questionTitle="選択効果"
                    :relatedProblems="['2021a27', '2021c34']"
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
                    questionTitle="生命保険業における個人情報"
                    :relatedProblems="['2021a28', '2021b28', '2021c28']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '個人情報登録制度 → 契約内容登録制度', //p138-139
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における危険選択"
                    :relatedProblems="['2021a29']"
                    :contents="[
                        '正しい',
                        '死亡保険の査定基準を準用する方向 → 入院・手術保障独自の査定基準が整備されつつある', //p151
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率比較"
                    :relatedProblems="['2021a30']"
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
                            questionTitle: '被保険者の危険',
                            relatedProblems: ['2021a31'],
                            content: '経済的危険 → 実体的危険',
                        }, //31 p4
                        {
                            questionTitle: '環境選択',
                            relatedProblems: ['2021a32', '2021b32', '2021c32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '胃・十二指腸潰瘍',
                            relatedProblems: ['2021a33'],
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '道徳的危険排除のためのポイント',
                            relatedProblems: ['2021a34'],
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '健康管理証明書扱（団体）',
                            relatedProblems: ['2021a35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '査定標準（基準）',
                            relatedProblems: ['2021a36'],
                            content: '生活習慣や嗜好といった因子については示されていない → 示されている',
                        }, //36 p111
                        {
                            questionTitle: '保険金確認',
                            relatedProblems: ['2021a37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '個人情報の定義',
                            relatedProblems: ['2021a38', '2021b38', '2021c38'],
                            content: '生存するまたは死亡した個人に関する情報 → 生存する個人に関する情報（死亡は対象外）',
                        }, //38 p125
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            relatedProblems: ['2021a39', '2021c49'],
                            content: '失効後の期間の長いものほど逆選択混入の危険が[[多く]]、また診査による場合に比べ告知のみによる場合のほうが経験死亡率が[[高い]]とされている。', //p173-174
                        }, //39
                        {
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
                            questionTitle: '解除権の消滅',
                            relatedProblems: ['2021a42'],
                            label: 'エ',
                            content: '5年',
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
                            questionTitle: '医学的選択上の課題',
                            relatedProblems: ['2021a44', '2021b26'],
                            label: 'イ',
                            content: '入院給付率',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死亡・入院率の高い重要欠陥',
                            relatedProblems: ['2021a45'],
                            label: 'エ',
                            content: '二次性',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約の制限',
                            relatedProblems: ['2021a46'],
                            label: 'イ',
                            content: '他人',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '診査医が行う診査',
                            relatedProblems: ['2021a47'],
                            label: 'ア',
                            content: '問診',
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
                            questionTitle: '災害割増特約',
                            relatedProblems: ['2021a49'],
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '最高保険金額',
                            relatedProblems: ['2021a50'],
                            label: 'ア',
                            content: '被保険者',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2022c" next-route="kiken2021b" />
        </section>
    </SeihoTestLayout>
</template>
