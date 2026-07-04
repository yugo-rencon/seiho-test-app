<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2022年度 フォームB";
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
                    questionTitle="危険選択の必要性-①"
                    :relatedProblems="['2022b1']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '安定性',
                        '標準的',
                        '延期体',
                        '収入',
                        '危険保険料', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'キ', //3
                        'コ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の必要性-②"
                    :relatedProblems="['2022b6']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '大数の法則',
                        '実際死亡率',
                        '医学的',
                        '危険の公平性',
                        '相互扶助', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ア', //8
                        'エ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態と方式-①"
                    :relatedProblems="['2022a11', '2022b11', '2022c11']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '出再会社',
                        '自動',
                        '任意',
                        '諾否決定',
                        '成立', //問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                        'カ', //13
                        'ケ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態と方式-②"
                    :relatedProblems="['2022a16', '2022b16', '2022c16']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '個別',
                        '定期保険',
                        '減少',
                        '共同',
                        '同一の', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'ア', //17
                        'ウ', //18
                        'コ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果"
                    :relatedProblems="['2022b21']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '診査による選択有効期間は３〜５年と考えられているが、[[国民生命表との比較では、かなり長期に及ぶ]]ことが明らかになっている。', //p32
                        '正しい',
                        '被保険者を契約年齢別に観察すると，若年齢層は健康体も多く、安い保険料で加入することができるが、その死因では，不慮の事故が上位を占めているので、[[診査の効果は顕著ではない]]。他方，高年齢層では、保険料は高いが、診査によって契約を延期されたり、条件体になる率も高い。しかしながら，診査自体に加えて心電図・血液検査などの補助診断法を併用することによって[[選択効果を期待することができる]]。', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :relatedProblems="['2022a22', '2022b22', '2022c22']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '告知義務者が[[告知事項の存在を知らないまま告知しなかった場合には、告知義務違反は成立しない]]こととなる。', //p16
                        '契約者側に告知義務違反があっても、保険者がその事実を知っていた場合、または[[過失によって知らなかった場合は解除できない]]。', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
                    :relatedProblems="['2022a34', '2022b23', '2022c43']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '職業危険には、「職業に伴う災害危険」「いわゆる職業病のような疾病危険」さらには[[「アルコール中毒や不摂生生活のような職業に随伴する危険」]]がある。', //p69
                        '産業医学の進歩や安全衛生管理の発達により、職業病危険は著しく改善されてきているが、[[職業病危険については「職業制限」と呼ばれる選択基準を設け、それに基づいて環境決定を行っている]]。', //p69
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :relatedProblems="['2022b24']"
                    :contents="[
                        '正しい',
                        '生命保険支払専門士 → 生命保険面接士', //p99
                        '個別 ↔︎ 団体', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」"
                    :relatedProblems="['2022a25', '2022b25', '2022c25']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '死亡率の高い疾患と入院・手術の発生率の高い疾患とはまったく異なるため、[[従来とは異なった診査観点が必要である]]。', //p150
                        '給付金日額の制限よって[[超過危険を調整することはできない]]。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡指数"
                    :relatedProblems="['2022b26']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '同じ死亡指数でも、若年層と高齢層、男性と女性等死亡率の異なる群団では[[死差益に対する貢献度が異なる]]。', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :relatedProblems="['2022b27']"
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
                    questionTitle="生命保険業における個人情報保護のための取扱指針"
                    :relatedProblems="['2022a28', '2022b28', '2022c28']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '正しい',
                        '変更された利用目的について，本人に[[通知又は公表]]しなければならない。', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容登録制度"
                    :relatedProblems="['2022b29']"
                    :contents="[
                        '金融庁 → 生命保険協会', //p139
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="復活"
                    :relatedProblems="['2022b30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '待ち期間 → 猶予期間', //p172
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
                            questionTitle: '告知義務',
                            relatedProblems: ['2022b31'],
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '死差益の計算方法',
                            relatedProblems: ['2022a32', '2022b32', '2022c32'],
                            content: '純収支計算方式で表せば → 統計的方式で表せば',
                        }, //32 p27
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            relatedProblems: ['2022a33', '2022b33', '2022c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '医学的選択',
                            relatedProblems: ['2022b34'],
                            content: '医学的選択において、新契約選択の過程ではまず[[第１段階]]が診査医による診査またはこれに代わるものである。[[第２段階]]では診査報状を検討し、被保険者の医学的欠陥を評価して、無条件、条件付、あるいは延期（見合せ）の査定を行うことである。', //p37
                        }, //34
                        {
                            questionTitle: '糖尿病',
                            relatedProblems: ['2022b35'],
                            content: 'ネフローゼ → インシュリン',
                        }, //35 p66
                        {
                            questionTitle: '保険種類・保険期間の制限',
                            relatedProblems: ['2022b36'],
                            content: '短期 ↔︎ 長期',
                        }, //36 p73
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険金確認',
                            relatedProblems: ['2022b37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '機微（センシティブ）情報',
                            relatedProblems: ['2022b38'],
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '団体の選択',
                            relatedProblems: ['2022b39'],
                            content: '保険加入のみを目的とした団体を設立すること → 保険加入のみを目的として設立された団体でないこと',
                        }, //39 p169
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死因別死亡率',
                            relatedProblems: ['2022a40', '2022b40', '2022c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死亡率',
                            relatedProblems: ['2022a41', '2022b41'],
                            label: 'ウ',
                            content: '標準化死亡率',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高血圧',
                            relatedProblems: ['2022b42'],
                            label: 'イ',
                            content: '二次性高血圧',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '重大事由による解除',
                            relatedProblems: ['2022b43'],
                            label: 'ア',
                            content: '信頼関係',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '第1次選択',
                            relatedProblems: ['2022b44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '体格',
                            relatedProblems: ['2022a45', '2022b45', '2022c45'],
                            label: 'ウ',
                            content: '22',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定法',
                            relatedProblems: ['2022b46'],
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '入院・手術保障における料率',
                            relatedProblems: ['2022b47'],
                            label: 'ア',
                            content: '平均',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '再保険',
                            relatedProblems: ['2022b48'],
                            label: 'エ',
                            content: 'より低く',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '災害関係特約',
                            relatedProblems: ['2022a49', '2022b49', '2022c49'],
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体保険の個別選択',
                            relatedProblems: ['2022a50', '2022b50', '2022c50'],
                            label: 'エ',
                            content: '正常勤務',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2022a" next-route="kiken2022c" />
        </section>
    </SeihoTestLayout>
</template>
