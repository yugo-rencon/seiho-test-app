<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
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
                    questionTitle="保険契約の失効等-①"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '払込猶予期間',
                        'オーバーローン',
                        '解約返戻金',
                        '生命保険会社所定',
                        '複利', // 問１〜５
                    ]"
                    :labels="[
                        'ク', //1
                        'イ', //2
                        'ウ', //3
                        'エ', //4
                        'ケ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効等-②"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '3年',
                        '復活',
                        '延滞保険料',
                        '失効期間',
                        '利息', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ケ', //7
                        'ア', //8
                        'エ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の経理-①"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '財産',
                        '中間業務報告書',
                        '金融庁長官',
                        '公衆の縦覧',
                        '子会社', //問11〜15
                    ]"
                    :labels="[
                        'カ', //11
                        'ケ', //12
                        'ウ', //13
                        'エ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の経理-②"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '価格変動準備金',
                        '健全性',
                        '標準責任準備金',
                        '未経過',
                        '危険準備金', //問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                        'ク', //18
                        'コ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の必要性と拘束力・監督"
                    :contents="[
                        // rev: 2026-08-17 確認済み
                        '正しい',
                        '保険契約のすべてについて申込人の理解や納得のない場合でも、保険約款は[[拘束力あり]]とされている。', //p7
                        '認可を受けない保険約款もその内容が強行規定や公益に反するものでない限り、保険契約者との間では[[有効である]]とするのが判例、通説である。', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '商法 → 民法', //p45
                        '民事特別法 → 商事特別法', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約返戻金"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '重大事由による保険契約の解除の場合にも[[支払われる]]。', //p154
                        '保険金額の減額の場合にも[[減額した部分に対応する解約返戻金が支払われる]]。', //p154
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '相互会社は、[[他の相互会社または保険株式会社と合併をすることができる]]。', //p252
                        '正しい',
                        '保険法 → 会社法', //p252
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '生命保険募集人は1人で何社もの生命保険募集人となることができるわけではなく、いわゆる乗合の禁止という制限が設けられ、[[損害保険にはみられない]]厳しい制限になっている。', //p262
                        '生命保険会社が、他の生命保険会社の生命保険募集人に対し、保険募集の委託もしくは再委託することについても[[制限している]]。', //p263
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :contents="[
                        // rev: 2026-08-21 確認済み
                        '法人契約や事業主契約は、消費者契約法の[[対象外]]である。', //p20
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '保険者は保険契約者に対してこの告知義務の履行を請求し強制し得る権利を[[有するものではなく]]、また保険契約者がまったく告知をしない場合でも、別に保険者に対して[[損害を賠償する責任を負うものではない]]。', //p48-49
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込"
                    :contents="[
                        // rev: 2026-08-21 確認済み
                        '正しい',
                        '払込期月の契約応当日以後末日までに → 払込期月の初日以後契約応当日前に', //p86
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金受取人の変更"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '正しい',
                        '正しい',
                        '保険約款では、「[[保険契約者]]またはその承継人は被保険者の同意および生命保険会社の承諾を得て、保険契約上の一切の権利義務を第三者に承継させることができる」旨を規定している。', //p149
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="基礎書類"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '財務諸表 → 保険料及び責任準備金の算出方法書', //p218
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '生命保険契約等に対する法の適用',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '普通保険約款と特約',
                            content: '普通保険約款と特約の関係では、[[特約]]に規定のある事項については優先的に[[特約]]が適用され、[[特約]]に規定のない事項については、[[普通保険約款]]が適用される。', //p12
                        }, //32
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険期間',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '被保険者の同意',
                            content: '被保険者の同意は、[[被保険者は契約当事者ではない]]ので生命保険契約等の[[成立要件ではなく、効力発生のための要件]]であり、保険金受取人の変更等においても同様である。', //p51
                        }, //34
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '遺言による保険金受取人の変更',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '時効',
                            content: '2年間 → 3年間', //p124
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '契約内容の登録',
                            content: '満期保険金登録制度 → 死亡保険金登録制度', //p168
                        }, //37
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '免許の定義',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '意向把握義務',
                            content: '設計書 → 意向確認書面', //p265
                        }, //39
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '指定紛争解決機関',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '金融サービスの提供に関する法律',
                            label: 'ア',
                            content: '重要事項',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の性質',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の効力',
                            label: 'イ',
                            content: '保険金受取人',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '責任開始期',
                            label: 'エ',
                            content: '保険料前払主義',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '解除権',
                            label: 'ウ',
                            content: '除斥期間',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約と詐欺',
                            label: 'ウ',
                            content: '取消し',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '配当金',
                            label: 'ウ',
                            content: '衡平',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '災害入院給付金の免責事由',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険業の監督の方法',
                            label: 'イ',
                            content: '実体的監督',
                        }, //49
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の締結または保険募集に関する禁止行為',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2024c" next-route="yakkan2023b" />
        </section>
    </SeihoTestLayout>
</template>
