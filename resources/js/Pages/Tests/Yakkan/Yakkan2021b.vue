<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
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
                    questionTitle="保険契約の失効および自動振替貸付の取扱い-①"
                    :relatedProblems="['2021b1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '猶予期間',
                        'オーバーローン',
                        '契約者貸付金',
                        '解約返戻金',
                        '生命保険会社所定', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'コ', //2
                        'ア', //3
                        'イ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効および自動振替貸付の取扱い-②"
                    :relatedProblems="['2021b6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '解約返戻金',
                        '復活',
                        '3年',
                        '延滞保険料',
                        '遅い時', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'ウ', //7
                        'コ', //8
                        'イ', //9
                        'オ', //10
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
                    questionTitle="保険約款の必要性と拘束力・監督"
                    :relatedProblems="['2021b22']"
                    :contents="[
                        // rev: 2026-08-17 確認済み
                        '正しい',
                        '保険契約のすべてについて申込人の理解や納得のない場合でも、保険約款は[[拘束力あり]]とされている。', //p7
                        '認可を受けない保険約款もその内容が強行規定や公益に反するものでない限り、保険契約者との間では[[有効である]]とするのが判例、通説である。', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料払込の猶予期間"
                    :relatedProblems="['2021a43', '2021b23']"
                    :contents="[
                        '遅延利息を加えた額を請求 → 遅延利息を請求することはない', //p93
                        '7月1日から7月31日 → 7月1日から8月31日<br>半年払の場合、払込猶予期間は払込期月の翌月初日から翌々月の契約日の月単位の応答日まで（払込期月の契約応当日が2月、6月、11月の各末日のときは、それぞれ4月、8月、1月の各末日まで）', //p93
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反の要件"
                    :relatedProblems="['2021b24']"
                    :contents="[
                        '正しい',
                        '誤認 → 故意', //p128
                        '保険会社の立証を必要としない → 必要がある', //p129
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人の登録"
                    :relatedProblems="['2021b25']"
                    :contents="[
                        '労働基準監督署 → 財務局・福岡財務支局', //p259
                        '正しい',
                        '12ヶ月 → 6ヶ月', //p260
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度"
                    :relatedProblems="['2021a23', '2021b26']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '5年以下 → 1年以下', //p46
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
                    questionTitle="保険契約の解約"
                    :relatedProblems="['2021a38', '2021b28']"
                    :contents="[
                        '過去に遡って → 将来に向かって<br>保障責任を負わない → 保障責任を負う', //p137
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生損保兼営禁止の趣旨"
                    :relatedProblems="['2021b29']"
                    :contents="[
                        '正しい',
                        '生命保険業 ↔︎ 損害保険業', //p205
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
                            questionTitle: '法律と保険約款',
                            relatedProblems: ['2021b31'],
                            content: '保険約款に規定のない事項については、おおむね、[[保険法、民法]]の順に適用される', //p13
                        }, //31
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '生命保険契約等の定義',
                            relatedProblems: ['2021a32', '2021b32', '2021c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険料の返還',
                            relatedProblems: ['2021b33', '2021c42'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '被保険者の同意',
                            relatedProblems: ['2021b34'],
                            content: '被保険者の同意を要するのは、保険契約者以外の者を被保険者とする生命保険契約等のうち、死亡保険契約、生死混合保険契約および[[傷害疾病による死亡のみが給付事由である傷害疾病定額保険契約]]の場合である。', //p50-51
                        }, //34
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '遺言による保険金受取人の変更',
                            relatedProblems: ['2021b35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '契約内容の登録',
                            relatedProblems: ['2021b36'],
                            content: '満期保険金登録制度 → 死亡保険金登録制度',
                        }, //36 p168
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '告知義務違反による解除権',
                            relatedProblems: ['2021a37', '2021b37', '2021c37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '配当金',
                            relatedProblems: ['2021b38'],
                            content: '利益分配金 → 契約者配当金',
                        }, //38 p158
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '保険会社の合併',
                            relatedProblems: ['2021b39'],
                            content: '相互会社は、[[他の相互会社または保険株式会社と合併をすることができる]]。', //p252
                        }, //39
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '定款以外の基礎書類の変更',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: ['2021a26', '2021b41', '2021c26'],
                            label: 'ウ',
                            content: '契約を取り消し得る',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約上の保障責任',
                            relatedProblems: ['2021b42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '住所変更',
                            relatedProblems: ['2021b43'],
                            label: 'ウ',
                            content: '通信先',
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
                            questionTitle: '保険金の支払の時期',
                            relatedProblems: ['2021b45'],
                            label: 'ウ',
                            content: '5営業日',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '災害入院給付金の免責',
                            relatedProblems: ['2021b46'],
                            label: 'オ',
                            content: '',
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
                            questionTitle: '株主の権利行使の基準日',
                            relatedProblems: ['2021b48'],
                            label: 'イ',
                            content: '3カ月',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険計理人',
                            relatedProblems: ['2021b49', '2021c39'],
                            label: 'エ',
                            content: '取締役会',
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

            <TestNavigationButtons previous-route="yakkan2021a" next-route="yakkan2021c" />
        </section>
    </SeihoTestLayout>
</template>
