<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2024年度 フォームC";
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
                    questionTitle="告知義務違反と契約解除-①"
                    :relatedProblems="['2024a1', '2024b1', '2024c1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '故意',
                        '民法',
                        '必要はない',
                        '解約返戻金',
                        '到達', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'キ', //2
                        'ウ', //3
                        'ク', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反と契約解除-②"
                    :relatedProblems="['2024a6', '2024b6', '2024c6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        'しない',
                        '因果関係',
                        '5年',
                        '責任開始期の属する日',
                        '2年', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ウ', //8
                        'キ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴-①"
                    :relatedProblems="['2024c11']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '収縮期',
                        '拡張期',
                        '本態性高血圧',
                        '先天性',
                        'インシュリン', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'カ', //12
                        'ア', //13
                        'オ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴-②"
                    :relatedProblems="['2024c16']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '赤血球',
                        '肝硬変',
                        '肝臓がん',
                        'ストレス',
                        'リンパ球', //問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'カ', //17
                        'コ', //18
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険で対象としている危険"
                    :relatedProblems="['2024a21', '2024b21', '2024c21']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '「実体的危険」は、「[[身体的危険]]」と「環境的危険」の２つに分類することができる。', //p4
                        '環境的危険とは、被保険者の生活環境全般に関する危険であるが主に[[被保険者の職業・仕事の内容による危険を指す]]。', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果"
                    :relatedProblems="['2024a33', '2024c22']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '診査による選択有効期間は３〜５年と考えられているが、[[国民生命表との比較では、かなり長期に及ぶ]]ことが明らかになっている。', //p32
                        '正しい',
                        '被保険者を契約年齢別に観察すると，若年齢層は健康体も多く、安い保険料で加入することができるが、その死因では，不慮の事故が上位を占めているので、[[診査の効果は顕著ではない]]。他方，高年齢層では、保険料は高いが、診査によって契約を延期されたり、条件体になる率も高い。しかしながら，診査自体に加えて心電図・血液検査などの補助診断法を併用することによって[[選択効果を期待することができる]]。', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2024a23', '2024b28', '2024c23']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '大部分の保険会社は条件体契約に対して、[[年齢別に金額上の区分を設けて制限を加えている]]。', //p72
                        '「保険会社向けの総合的な監督指針」では、[[法人等の財テクなどを主たる目的とした契約や、当初から短期の中途解約を前提とした契約等の保険本来の趣旨を逸脱するような募集活動を行わないこと]]が求められている。', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :relatedProblems="['2024c24']"
                    :contents="[
                        '欧米では嘱託医制度はなく、一般に社医だけである → 欧米では社医制度はなく、一般に嘱託医だけである。', //p95
                        '正しい',
                        '健康管理証明書扱（個別）の場合と全く同じ → 全く異なる', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険"
                    :relatedProblems="['2024c25']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '共同保険式再保険 → 危険保険料式再保険', //p178
                        '危険保険料式再保険 → 共同保険式再保険', //p179
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :relatedProblems="['2024a22', '2024c26']"
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
                    :relatedProblems="['2024a27', '2024b27', '2024c27']"
                    :contents="[
                        '手術給付率 ↔︎ 入院給付率', //p52
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="道徳的危険排除のためのポイント"
                    :relatedProblems="['2024b45', '2024c28']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '過小 → 過大', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険における団体の選択"
                    :relatedProblems="['2024a29', '2024b29', '2024c29']"
                    :contents="[
                        '保険加入のみを目的とした団体を設立すること → 保険加入のみを目的として設立された団体でないこと', //p169
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="復活"
                    :relatedProblems="['2024a38', '2024b25', '2024c30']"
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
                            questionTitle: '死亡率',
                            relatedProblems: ['2024c31'],
                            content: '比較することができる → 比較することはできない',
                        }, //31 p7
                        {
                            questionTitle: '生命保険会社における経験死亡率',
                            relatedProblems: ['2024a32', '2024b32', '2024c32'],
                            content: '件数死亡率 ↔︎ 金額死亡率',
                        }, //32 p9
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '販売政策と選択政策',
                            relatedProblems: ['2024c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2024a34', '2024b44', '2024c34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '機微（センシティブ）情報',
                            relatedProblems: ['2024a37', '2024c35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '契約確認',
                            relatedProblems: ['2024c36'],
                            content: '契約確認は[[一部]]の契約について契約成立前に行い，[[大部分]]は契約成立後に行うのが実情である。', //p113-114
                        }, //36
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '給付金確認',
                            relatedProblems: ['2024c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体定期保険における更新時の選択',
                            relatedProblems: ['2024c38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '最高保険金額',
                            relatedProblems: ['2024a39', '2024b39', '2024c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '実際死亡状況の分析',
                            relatedProblems: ['2024a40', '2024b40', '2024c40', '2024c50'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '生命表',
                            relatedProblems: ['2024a31', '2024c41'],
                            label: 'ア',
                            content: '選択表',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険料の仕組みと危険選択',
                            relatedProblems: ['2024a42', '2024b42', '2024c42'],
                            label: 'イ',
                            content: '純保険料',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者集団の具備すべき条件',
                            relatedProblems: ['2024a43', '2024b43', '2024c43'],
                            label: 'イ',
                            content: '倫理',
                        }, //43
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '医学的選択上の制約条件',
                            relatedProblems: ['2024c44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '体格',
                            relatedProblems: ['2024a28', '2024b35', '2024c45'],
                            label: 'ウ',
                            content: '22',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定・決定の種類',
                            relatedProblems: ['2024c46'],
                            label: 'エ',
                            content: '再診',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約確認後の処理',
                            relatedProblems: ['2024c47'],
                            label: 'ウ',
                            content: '不実の告知',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '入院・手術保障における料率',
                            relatedProblems: ['2024c48'],
                            label: 'ア',
                            content: '平均給付日数',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高度障害状態',
                            relatedProblems: ['2024a49', '2024b49', '2024c49'],
                            label: 'エ',
                            content: '両眼の視力',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '実際死亡状況の分析',
                            relatedProblems: ['2024a40', '2024b40', '2024c40', '2024c50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2024b" next-route="kiken2023a" />
        </section>
    </SeihoTestLayout>
</template>
