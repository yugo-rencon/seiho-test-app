<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
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
                    questionTitle="法律と約款の関係"
                    :relatedProblems="['2021a1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '片面的強行規定',
                        '無効',
                        '強行規定',
                        '一般法',
                        '民法任意規定', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'ク', //2
                        'ウ', //3
                        'ケ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の効力"
                    :relatedProblems="['2021a6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '自己の名',
                        '代理人',
                        '移転',
                        '民法',
                        '受益の意思表示', //問６〜10
                    ]"
                    :labels="[
                        'イ', //6
                        'カ', //7
                        'ウ', //8
                        'オ', //9
                        'キ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の経理-①"
                    :relatedProblems="['2021a11', '2021b11', '2021c11']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '会社法',
                        '財産',
                        '公衆の縦覧',
                        '子会社',
                        '価格変動準備金', //問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'カ', //12
                        'コ', //13
                        'エ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の経理-②"
                    :relatedProblems="['2021a16', '2021b16', '2021c16']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '債務',
                        '標準責任準備金',
                        '平準純保険料式',
                        '日本アクチュアリー会',
                        '未経過保険料', //問16〜20
                    ]"
                    :labels="[
                        'オ', //16
                        'イ', //17
                        'キ', //18
                        'ク', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の性質"
                    :relatedProblems="['2021a21', '2021b21', '2021c21']"
                    :contents="[
                        '要物契約 → 諾成契約（保険契約は当事者の合意のみで成立し、第1回保険料払込は責任開始の要件にすぎない）', //p35
                        '正しい',
                        '付合契約 → 射倖契約', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約"
                    :relatedProblems="['2021a22']"
                    :contents="[
                        '正しい',
                        '締結した契約の拘束から免れる自由がある → 自由はない', //p3
                        '内容的に一致している必要はない → 一致している必要がある', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度"
                    :relatedProblems="['2021a23', '2021b26']"
                    :contents="[
                        '正しい',
                        '5年以下 → 1年以下', //p46
                        '保険会社等の営業所等および申込者の居宅を含む → 除く', //p46
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の取消しまたは無効"
                    :relatedProblems="['2021a24']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '生命保険会社が立証する必要はない → 立証しなければならない', //p134
                        '[[保険法には規定がない]]ものの、一部の生命保険会社において保険約款に規定されている。', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :relatedProblems="['2021a25']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '生命保険募集人は1人で何社もの生命保険募集人となることができるわけではなく、いわゆる乗合の禁止という制限が設けられ、[[損害保険にはみられない]]厳しい制限になっている。', //p262
                        '生命保険会社が行う「他の生命保険会社の生命保険募集人に対する保険募集の委託」についても[[制限している]]。', //p263
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :relatedProblems="['2021a26', '2021b41', '2021c26']"
                    :contents="[
                        '消費者とは個人または法人 → 消費者を個人、事業者を法人等', //p19
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="['2021a27', '2021b27', '2021c27']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '保険業法 → 保険法', //p48
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始期"
                    :relatedProblems="['2021a28']"
                    :contents="[
                        '正しい',
                        '責任を負わないのが通常 → 承諾して責任を負うのが通常', //p82
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="基礎書類"
                    :relatedProblems="['2021a29']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '財務諸表 → 保険料及び責任準備金の算出方法書', //p218
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国保険業者等"
                    :relatedProblems="['2021a30', '2021b30', '2021c30']"
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
                            questionTitle: '契約者保護のための法律',
                            relatedProblems: ['2021a31'],
                            content: '消費者契約法 → 金融サービス提供法',
                        }, //31 p15
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '生命保険契約等の定義',
                            relatedProblems: ['2021a32', '2021b32', '2021c32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '生命保険募集人',
                            relatedProblems: ['2021a33'],
                            content: '保険契約の締結の代理 ↔︎ 保険契約の締結の媒介', //p47
                        }, //33
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '書面交付義務',
                            relatedProblems: ['2021a34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険契約の復活の法的性格',
                            relatedProblems: ['2021a35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '高度障害保険金',
                            relatedProblems: ['2021a36'],
                            content: '再度、高度障害保険金が支払われる → 支払われることはない',
                        }, //36 p116-117
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '告知義務違反による解除権',
                            relatedProblems: ['2021a37', '2021b37', '2021c37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '保険契約の解約',
                            relatedProblems: ['2021a38', '2021b28'],
                            content: '解約の意思表示が到達し、解約返戻金が口座に着金したとき → 解約の意思表示が到達したとき',
                        }, //38 p137
                        {
                            questionTitle: '保険業の兼営',
                            relatedProblems: ['2021a39'],
                            content: '同一の者が受けることが可能 → 同一の者が受けることはできない',
                        }, //39 p205
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '定款以外の基礎書類の変更',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の要素',
                            relatedProblems: ['2021a41'],
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険法に規定する同意',
                            relatedProblems: ['2021a42'],
                            label: 'ウ',
                            content: '成立要件',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険料払込の猶予期間',
                            relatedProblems: ['2021a43', '2021b23'],
                            label: 'ウ',
                            content: '2021年（令和3年）12月31日',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金の支払',
                            relatedProblems: ['2021a44', '2021b44', '2021c44'],
                            label: 'ア',
                            content: '10月18日',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金等の遅延利息の支払',
                            relatedProblems: ['2021a45'],
                            label: 'エ',
                            content: '法定利率',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '告知義務違反に対する解除権の行使',
                            relatedProblems: ['2021a46'],
                            label: 'ア',
                            content: '不可争期間',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '年齢の誤りの処理',
                            relatedProblems: ['2021a47', '2021b47', '2021c47'],
                            label: 'ウ',
                            content: '取り消すことができる',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険業の監督の方法',
                            relatedProblems: ['2021a48'],
                            label: 'イ',
                            content: '実体的監督',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '総代会',
                            relatedProblems: ['2021a49'],
                            label: 'エ',
                            content: '特別決議',
                        }, //49
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の締結または保険募集に関する禁止行為',
                            relatedProblems: ['2021a50', '2021b50', '2021c50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2022c" next-route="yakkan2021b" />
        </section>
    </SeihoTestLayout>
</template>
