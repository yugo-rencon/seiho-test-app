<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2023年度 フォームB";
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
                    :relatedProblems="['2023a1', '2023b1', '2023c1']"
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
                    :relatedProblems="['2023a6', '2023b6', '2023c6']"
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
                    questionTitle="生命保険契約等の性質・効力"
                    :relatedProblems="['2023b11']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '諾成契約',
                        '必要としない不要式契約',
                        '自己の名',
                        '代理人',
                        '移転', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'コ', //12
                        'イ', //13
                        'キ', //14
                        'ア', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者の同意"
                    :relatedProblems="['2023a34', '2023b16']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '賭博的行為',
                        '死亡保険契約',
                        '傷害疾病定額保険契約',
                        '契約当事者ではない',
                        '保険会社向けの総合的な監督指針', //問16〜20
                    ]"
                    :labels="[
                        'ク', //16
                        'エ', //17
                        'キ', //18
                        'ウ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の要素"
                    :relatedProblems="['2023b21', '2023c42']"
                    :contents="[
                        '正しい',
                        '一契約における被保険者は必ず1人であることを要する → 必ずしも1人であることを要しない', //p39
                        '被保険期間 → 保険料期間', //p43
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度"
                    :relatedProblems="['2023a22', '2023b22', '2023c22']"
                    :contents="[
                        '商法 → 民法', //p45
                        '民事特別法 → 商事特別法', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業免許の定義"
                    :relatedProblems="['2023b23']"
                    :contents="[
                        '少額短期保険業免許は含まれない', //p204
                        '再保険の引受はできない → 再保険の引受が可能', //p203-204
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :relatedProblems="['2023b24']"
                    :contents="[
                        '10年チルメル式 → 平準純保険料式', //p241
                        '正しい',
                        '3つの区分 → 4つの区分（保険料積立金・未経過保険料・払戻積立金・危険準備金）', //p242
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :relatedProblems="['2023a25', '2023b25', '2023c25']"
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
                    questionTitle="保険約款の拘束力の根拠"
                    :relatedProblems="['2023b26']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '慣習法説 → 白地慣習法説', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の解除"
                    :relatedProblems="['2023b27']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '正しい',
                        '保険者が生命保険契約等の締結の時に、告知されなかった事実を知り、または[[過失によって知らなかったとき]]、生命保険契約等を解除できない。', //p62-63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始期"
                    :relatedProblems="['2023a44', '2023b28', '2023c33']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '第1回保険料相当額の払込および告知の完了後に保険事故が発生し、保険事故等が発生していなければ承諾していたと考えられる場合は、[[生命保険会社は申込を承諾し、責任を負うのが通常である]]。', //p82
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金受取人の変更"
                    :relatedProblems="['2023a29', '2023b29', '2023c29']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険金受取人またはその承継人 → 保険契約者またはその承継人', //p149
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国保険業者"
                    :relatedProblems="['2023b30']"
                    :contents="[
                        '株式会社または相互会社でなければならない → 株式会社や相互会社でなくてもよく、個人でもよい', //p256
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
                            questionTitle: '監督',
                            relatedProblems: ['2023b31'],
                            content: '一切無効 → その内容が強行規定や公益に反するものでない限り有効',
                        }, //31 p11
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '法律と保険約款',
                            relatedProblems: ['2023b32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '団体扱特約',
                            relatedProblems: ['2023b33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '復旧（復帰・復元）',
                            relatedProblems: ['2023b34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '遺言による保険金受取人の変更',
                            relatedProblems: ['2023a35', '2023b35', '2023c35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '配当金',
                            relatedProblems: ['2023a47', '2023b36'],
                            content: '利益分配金 → 契約者配当金',
                        }, //36 //p158
                        {
                            questionTitle: '契約内容の登録',
                            relatedProblems: ['2023a37', '2023b37', '2023c37'],
                            content: '満期保険金登録制度 → 死亡保険金登録制度',
                        }, //37 p168
                        {
                            questionTitle: '定款',
                            relatedProblems: ['2023b38'],
                            content: '相互会社 ↔︎ 株式会社',
                        }, //38 p218
                        {
                            questionTitle: '意向把握義務',
                            relatedProblems: ['2023a39', '2023b39', '2023c39'],
                            content: '設計書 → 意向確認書面',
                        }, //39 p263
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '事業年度',
                            relatedProblems: ['2023b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '金融サービスの提供に関する法律',
                            relatedProblems: ['2023a41', '2023b41', '2023c41'],
                            label: 'ア',
                            content: '重要事項',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金額',
                            relatedProblems: ['2023b42'],
                            label: 'イ',
                            content: '被保険利益',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険募集人',
                            relatedProblems: ['2023b43', '2023c27'],
                            label: 'ウ',
                            content: '代理',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の解除の効力等',
                            relatedProblems: ['2023b44'],
                            label: 'ウ',
                            content: '1カ月',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '時効',
                            relatedProblems: ['2023a36', '2023b45'],
                            label: 'ア',
                            content: '責任準備金',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '給付金の支払',
                            relatedProblems: ['2023b46'],
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '監督体制',
                            relatedProblems: ['2023b47'],
                            label: 'エ',
                            content: '財務大臣',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '災害入院給付金の免責事由',
                            relatedProblems: ['2023a48', '2023b48', '2023c48'],
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険計理人',
                            relatedProblems: ['2023b49'],
                            label: 'エ',
                            content: '取締役会',
                        }, //49
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の締結または保険募集に関する禁止行為',
                            relatedProblems: ['2023a50', '2023b50', '2023c50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2023a" next-route="yakkan2023c" />
        </section>
    </SeihoTestLayout>
</template>
