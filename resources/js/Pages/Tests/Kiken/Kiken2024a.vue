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
                    questionTitle="再保険の契約形態と方式-①"
                    :relatedProblems="['2024a11']"
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
                    :relatedProblems="['2024a16']"
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
                    :relatedProblems="['2024a21', '2024b21', '2024c21']"
                    :contents="[
                        '経済的危険 → 身体的危険', //p4
                        '保険を利用して、不当な利益を得ようとする心理状態等 → 被保険者の職業・仕事の内容による危険', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :relatedProblems="['2024a22', '2024c26']"
                    :contents="[
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
                    :relatedProblems="['2024a23', '2024b28', '2024c23']"
                    :contents="[
                        '短期定期保険または短期払込定期保険 → 短期養老保険または短期払込養老保険<br>養老保険では逆転 → 定期保険では逆転', //p73
                        '正しい',
                        '役員を被保険者とする場合には必要ない → 役員を被保険者とする場合も被保険者の書面による加入同意が必要', //p75
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="条件体特別条件付決定"
                    :relatedProblems="['2024a24']"
                    :contents="[
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
                    :relatedProblems="['2024a25']"
                    :contents="[
                        '正しい',
                        'ほとんど差がない → まったく異なる', //p150
                        '超過危険を調整することができる → 調整することはできない', //p150
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡指数"
                    :relatedProblems="['2024a26']"
                    :contents="[
                        '正しい',
                        '死差益に対する貢献度が同じ → 貢献度は異なる', //p12
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
                    questionTitle="体格"
                    :relatedProblems="['2024a28', '2024b35', '2024c45']"
                    :contents="[
                        '正しい',
                        '2種 → 3種（普通体・過重体・過軽体）', //p63
                        '正しい',
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
                    questionTitle="死亡率比較"
                    :relatedProblems="['2024a30']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険体の範囲が広くなる → 狭くなる', //p186
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            questionTitle: '生命表',
                            relatedProblems: ['2024a31', '2024c41'],
                            content: '経験生命表 → 国民生命表<br>標準生命表 → 経験生命表',
                        }, //31 p5
                        {
                            questionTitle: '生命保険会社における経験死亡率',
                            relatedProblems: ['2024a32', '2024b32', '2024c32'],
                            content: '件数死亡率 ↔︎ 金額死亡率',
                        }, //32 p9
                        {
                            questionTitle: '選択効果',
                            relatedProblems: ['2024a33', '2024c22'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2024a34', '2024b44', '2024c34'],
                            content: '職業危険には、「職業に伴う災害危険」「いわゆる職業病のような疾病危険」さらには[[「アルコール中毒や不摂生生活のような職業に随伴する危険」]]がある。', //p69
                        }, //34
                        {
                            questionTitle: '道徳的危険の発見と排除',
                            relatedProblems: ['2024a35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '社医と嘱託医',
                            relatedProblems: ['2024a36'],
                            content: '社医と嘱託医で違いは設けられていない → 違いを設けている',
                        }, //36 p99
                        {
                            questionTitle: '機微（センシティブ）情報',
                            relatedProblems: ['2024a37', '2024c35'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '復活',
                            relatedProblems: ['2024a38', '2024b25', '2024c30'],
                            content: '失効後の期間の短い → 長い',
                        }, //38 p173
                        {
                            questionTitle: '最高保険金額',
                            relatedProblems: ['2024a39', '2024b39', '2024c39'],
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '実際死亡状況の分析',
                            relatedProblems: ['2024a40', '2024b40', '2024c40', '2024c50'],
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '告知義務者',
                            relatedProblems: ['2024a41', '2024b41'],
                            label: 'ウ',
                            content: '告知を受領する権限のある者',
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
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高血圧',
                            relatedProblems: ['2024a44'],
                            label: 'エ',
                            content: '本態性高血圧',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '重大事由による解除',
                            relatedProblems: ['2024a45'],
                            label: 'ア',
                            content: '信頼関係',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '第1次選択',
                            relatedProblems: ['2024a46'],
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '医学的査定',
                            relatedProblems: ['2024a47'],
                            label: 'ウ',
                            content: '尿異常',
                        }, //47
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            relatedProblems: ['2024a48', '2024b37'],
                            label: 'オ',
                            content: '',
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
                            questionTitle: '団体保険の契約内容の変更',
                            relatedProblems: ['2024a50'],
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
