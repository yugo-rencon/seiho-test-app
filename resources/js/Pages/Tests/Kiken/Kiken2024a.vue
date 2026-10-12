<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2024年度 フォームA";
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
                    questionTitle="再保険の契約形態と方式-①"
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
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '個別',
                        '定期保険',
                        '危険保険料式',
                        '共同保険式',
                        '責任準備金', //問16〜20
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
                    questionTitle="生命保険で対象としている危険"
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
                    questionTitle="危険保険料と危険保険金"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '付加保険料 → 貯蓄保険料', //p23
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '一般に短期[[養老]]または短期払込[[養老]]保険の経験死亡率は長期のものより良好である。ただし、[[定期]]保険ではこの関係は逆転し、保険期間が短期のものに逆選択が集中する傾向がある。', //p73
                        '正しい',
                        '役員を被保険者とする場合も[[被保険者の書面による加入同意が必要]]である。', //p75
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="条件体特別条件付決定"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '10年 → 5年', //p108
                        '一定期間特別保険料領収法 → 年増法', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」"
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
                    questionTitle="医学的選択上の課題"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '死亡率や[[入院給付率]]は、保険年度が進み選択効果が薄れるにつれ上昇するが、[[手術給付率]]はむしろ加入早期のほうが高値である。', //p52
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="体格"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '体格は、[[普通体（または平均体）、過重体および過軽体の３種]]に分類されている。', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険における団体の選択"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '保険加入のみを目的として設立された団体[[でない]]ことが契約の要件の１つである。', //p169
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率比較"
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
                            // rev: 2026-07-04 確認済み
                            questionTitle: '生命表',
                            content: '生命表には国民全体を対象とした[[国民生命表]]と、それよりは小さな特定集団（たとえば生命保険の被保険者集団）を対象とする[[経験生命表]]とがある。', //p5
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険会社における経験死亡率',
                            content: '[[金額死亡率]]のほうが[[件数死亡率]]よりも事業経営上に与える影響を反映しやすいので、生命保険経営上は、通常、[[件数死亡率]]よりも[[金額死亡率]]が多く用いられる。', //p9
                        }, //32
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '選択効果',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '職業危険',
                            content: '職業危険には、「職業に伴う災害危険」「いわゆる職業病のような疾病危険」さらには[[「アルコール中毒や不摂生生活のような職業に随伴する危険」]]がある。', //p69
                        }, //34
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '道徳的危険の発見と排除',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '社医と嘱託医',
                            content: '嘱託医については、診査を可能とする被保険者の年齢や保険金額に限度（診査限度）が設けられており、[[社医と区別している]]。', //p99
                        }, //36
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '機微（センシティブ）情報',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '復活',
                            content: '失効後の期間の[[長い]]ものほど逆選択混入の危険が多く、また診査による場合に比べ告知のみによる場合のほうが経験死亡率が高いとされている。', //p173-174
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '最高保険金額',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '実際死亡状況の分析',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '告知義務者',
                            label: 'ウ',
                            content: '告知を受領する権限のある者',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険料の仕組みと危険選択',
                            label: 'イ',
                            content: '純保険料',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者集団の具備すべき条件',
                            label: 'イ',
                            content: '倫理',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高血圧',
                            label: 'エ',
                            content: '本態性高血圧',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '重大事由による解除',
                            label: 'ア',
                            content: '信頼関係',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '第1次選択',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '医学的査定',
                            label: 'ウ',
                            content: '尿異常',
                        }, //47
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高度障害状態',
                            label: 'エ',
                            content: '両眼の視力',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '団体保険の契約内容の変更',
                            label: 'ア',
                            content: '1年間',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="kiken2024b" />
        </section>
    </SeihoTestLayout>
</template>
