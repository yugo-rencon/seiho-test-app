<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2022年度 フォームC";
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
                    questionTitle="現病歴・既往歴-①"
                    :relatedProblems="['2022c1']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '収縮期',
                        '拡張期',
                        '本態性高血圧',
                        '先天性',
                        'インシュリン', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'カ', //2
                        'ア', //3
                        'オ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴-②"
                    :relatedProblems="['2022c6']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '赤血球',
                        '肝硬変',
                        '肝臓がん',
                        'ストレス',
                        'リンパ球', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'カ', //7
                        'コ', //8
                        'ウ', //9
                        'オ', //10
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
                    questionTitle="環境選択"
                    :relatedProblems="['2022c21']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '現在の健康状態が非常に良好で医学的選択上は何らの欠陥がなく、標準体と判定されるものでも、[[環境が良好でなければ標準体と判定されない場合がある]]。', //p58
                        '習慣として問題となるのは、[[飲酒]]・麻薬・覚醒剤等の常用であり、賭博や闘争癖である。', //p59
                        '正しい',
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
                    questionTitle="契約制限"
                    :relatedProblems="['2022c23']"
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
                    questionTitle="査定・決定"
                    :relatedProblems="['2022c24']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '金融庁 → 生命保険協会', //p86
                        '査定 ↔︎ 決定', //p86-87
                        '正しい',
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
                    questionTitle="死亡率と死亡指数"
                    :relatedProblems="['2022c26']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '正しい',
                        '正しい',
                        '死亡指数 = [[実際死亡率]] ÷ [[予定死亡率]] × 100（%)', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の制約条件"
                    :relatedProblems="['2022c27']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '純保険料の範囲内 → 付加保険料の範囲内', //p40
                        '正しい',
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
                    questionTitle="契約確認の時期と方法"
                    :relatedProblems="['2022c29']"
                    :contents="[
                        '一部 ↔︎ 大部分', //p114
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択"
                    :relatedProblems="['2022c30']"
                    :contents="[
                        '正しい',
                        '職業上の危険選択は行わない → 職業上の危険選択行っている', //p171
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
                            questionTitle: '生命表',
                            relatedProblems: ['2022c31'],
                            content: '経験生命表 → 国民生命表<br>簡易生命表 → 経験生命表',
                        }, //31 p5
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '死差益の計算方法',
                            relatedProblems: ['2022a32', '2022b32', '2022c32'],
                            content: '[[統計的方式]]で表せば、基本的には死差益は年間の危険保険料収入額と危険保険金支払額との差として表される。',//p27
                        }, //32
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険体の範囲の拡大',
                            relatedProblems: ['2022a33', '2022b33', '2022c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '社医と嘱託医',
                            relatedProblems: ['2022a36', '2022c34'],
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '診査実施上の制限',
                            relatedProblems: ['2022c35'],
                            content: '区分を設けている生命保険会社は少ない → 区分を設けている生命保険会社が多い',
                        }, //35　p74
                        {
                            questionTitle: '公序良俗に反する行為',
                            relatedProblems: ['2022c36'],
                            content: '重大事由による免責権 → 重大事由による解除権',
                        }, //36 p79-80
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険診査',
                            relatedProblems: ['2022c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '個人情報の取得',
                            relatedProblems: ['2022c38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '最高保険金額',
                            relatedProblems: ['2022c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死因別死亡率',
                            relatedProblems: ['2022a40', '2022b40', '2022c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者の危険',
                            relatedProblems: ['2022c41'],
                            label: 'ウ',
                            content: '環境的危険',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '解除権の消滅',
                            relatedProblems: ['2022c42'],
                            label: 'ア',
                            content: '1ヶ月',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2022a34', '2022b23', '2022c43'],
                            label: 'ア',
                            content: '入院率',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '生命保険面接士',
                            relatedProblems: ['2022c44'],
                            label: 'エ',
                            content: '診査報状',
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
                            questionTitle: '医学的査定',
                            relatedProblems: ['2022c46'],
                            label: 'エ',
                            content: '特別保険料領収法',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            relatedProblems: ['2022a24', '2022c47'],
                            label: 'イ',
                            content: '発生後',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '期待死亡率との比較',
                            relatedProblems: ['2022c48'],
                            label: 'オ',
                            content: '',
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

            <TestNavigationButtons previous-route="kiken2022b" next-route="kiken2021a" />
        </section>
    </SeihoTestLayout>
</template>
