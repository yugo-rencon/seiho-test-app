<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2021年度 フォームB";
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
                    questionTitle="実体的危険の要素と体格-①"
                    :relatedProblems="['2021b1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '生活習慣',
                        '超過死亡指数',
                        '数量的',
                        '数字査定',
                        '栄養', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'キ', //2
                        'オ', //3
                        'ケ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="実体的危険の要素と体格-②"
                    :relatedProblems="['2021b6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '普通体',
                        '肥満体',
                        '高い',
                        'BMI（Body Mass Index）',
                        '22', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'ク', //7
                        'エ', //8
                        'キ', //9
                        'ア', //10
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
                    questionTitle="告知"
                    :relatedProblems="['2021a26', '2021b22']"
                    :contents="[
                        '保険法 ↔︎ 約款', //p15-16
                        '正しい',
                        '過失によって知らなかった場合は解除できる → 解除できない', //p17
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
                    questionTitle="危険保険料と危険保険金"
                    :relatedProblems="['2021b24']"
                    :contents="[
                        '費差益 → 死差益。', //p23
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約確認の時期と方法"
                    :relatedProblems="['2021b25']"
                    :contents="[
                        '一部 ↔︎ 大部分', //p114
                        '契約成立前 → 契約成立後', //p114
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の課題"
                    :relatedProblems="['2021a44', '2021b26']"
                    :contents="[
                        '三大都市圏から離れるにつれて低率となる → 高率となる', //p47
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2021b27', '2021c24']"
                    :contents="[
                        '正しい',
                        '長期 ↔︎ 短期', //p73
                        '正しい',
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
                    questionTitle="疾病保険の特別条件付決定"
                    :relatedProblems="['2021b29', '2021c46']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '正しい',
                        '給付金日額の制限は、これによって[[超過危険を調整することはできない]]が、不当利得の企てに対抗する抑制策としては有効である。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
                    :relatedProblems="['2021b30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '正しい',
                        '高度の危険を有し、取扱件数の少ない条件体契約および若年齢層、高年齢層の契約については、一般の保有限度額より[[低く]]定めているのが普通である。', //p182
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            questionTitle: '死亡率',
                            relatedProblems: ['2021b31'],
                            content: '比較することができる → 比較することはできない',
                        }, //31 p7
                        {
                            questionTitle: '環境選択',
                            relatedProblems: ['2021a32', '2021b32', '2021c32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '告知義務',
                            relatedProblems: ['2021b33'],
                            content: '質問応答義務から自発的応答義務 → 自発的応答義務から質問応答義務',
                        }, //33 p13
                        {
                            questionTitle: '販売政策と選択政策',
                            relatedProblems: ['2021b34'],
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '血圧',
                            relatedProblems: ['2021b35', '2021c35'],
                            content: '低血圧 ↔︎ 高血圧',
                        }, //35 p64
                        {
                            questionTitle: '診査実施上の制限',
                            relatedProblems: ['2021b36'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '診査医の職責',
                            relatedProblems: ['2021b37'],
                            content: '知らなかったとして対抗できる → 対抗できない',
                        }, //37 p96
                        {
                            questionTitle: '個人情報の定義',
                            relatedProblems: ['2021a38', '2021b38', '2021c38'],
                            content: '生存するまたは死亡した個人に関する情報 → 生存する個人に関する情報（死亡は対象外）',
                        }, //38 p125
                        {
                            questionTitle: '団体定期保険における更新時の選択',
                            relatedProblems: ['2021b39'],
                            content: '正しい',
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
                            questionTitle: '被保険者集団の具備すべき条件',
                            relatedProblems: ['2021b42'],
                            label: 'エ',
                            content: '継続性',
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
                            questionTitle: '医学的選択上の制約条件',
                            relatedProblems: ['2021b44', '2021c22'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '心疾患',
                            relatedProblems: ['2021b45'],
                            label: 'ア',
                            content: '先天性',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2021a22', '2021b46'],
                            label: 'イ',
                            content: '入院率',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定・決定の種類',
                            relatedProblems: ['2021b47'],
                            label: 'エ',
                            content: '5年',
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
                            questionTitle: '再保険の方式',
                            relatedProblems: ['2021b49'],
                            label: 'ア',
                            content: '共同保険',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '期待死亡率',
                            relatedProblems: ['2021b50'],
                            label: 'エ',
                            content: '狭くなる',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2021a" next-route="kiken2021c" />
        </section>
    </SeihoTestLayout>
</template>
