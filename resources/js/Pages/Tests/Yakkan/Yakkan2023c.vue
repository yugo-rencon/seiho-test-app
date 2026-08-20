<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2023年度 フォームC";
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
                    questionTitle="金融庁長官等による監督など-①"
                    :relatedProblems="['2023c11']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '事業方法書',
                        '停止',
                        '期限',
                        '財産の供託',
                        '免許の取消', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'エ', //12
                        'カ', //13
                        'ケ', //14
                        'ア', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融庁長官等による監督など-②"
                    :relatedProblems="['2023c16']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        'ソルベンシー・マージン',
                        '基金',
                        '超える',
                        '200%',
                        '小さな', //問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'ア', //17
                        'イ', //18
                        'ク', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款"
                    :relatedProblems="['2023c21']"
                    :contents="[
                        '免許申請書を添付する必要はない → 添付しなければならない', //p11
                        '正しい',
                        '普通保険約款が適用される → 特約が適用される', //p12
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
                    questionTitle="生命保険契約等の性質"
                    :relatedProblems="['2023a42', '2023c23']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '保険契約は保険契約者と保険者との合意によってのみ成立し、第1回保険料相当額の払込などは保険者の責任開始の要件であるにすぎず、[[要物契約ではない]]と解される。', //p35
                        '生命保険契約等は、保険法上一定の方式を要するとはしていないので、生命保険契約等は[[不要式契約]]であり、口頭による申込と口頭による承諾があれば成立する。', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払"
                    :relatedProblems="['2023c24']"
                    :contents="[
                        '正しい',
                        '規定していないのが一般的 → 規定するのが一般的', //p159-160
                        '契約日から起算して２年 → 1年', //p160
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
                    questionTitle="生命保険契約等に対する法の適用"
                    :relatedProblems="['2023a31', '2023c26']"
                    :contents="[
                        '正しい',
                        '相互保険は、商法の商行為一般の規定は適用されない → 保険業法により商法が準用される', //p5-6
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人"
                    :relatedProblems="['2023b43', '2023c27']"
                    :contents="[
                        '締結の媒介を行う場合 → 締結の代理を行う場合', //p47
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による解除"
                    :relatedProblems="['2023c28']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '2年 → 5年', //p131
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
                    questionTitle="生損保兼営の禁止の趣旨"
                    :relatedProblems="['2023c30']"
                    :contents="[
                        '正しい',
                        '生命保険業 ↔︎ 損害保険業', //p205
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '生命保険契約等の定義',
                            relatedProblems: ['2023c31'],
                            content: '傷害疾病定額保険契約 → 傷害疾病損害保険契約',
                        }, //31 p33
                        {
                            questionTitle: '保険料不可分の原則',
                            relatedProblems: ['2023c32'],
                            content: '保険料不可分の原則を前提としている → 前提としていない（未経過保険料は返還）',
                        }, //32 p44
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '責任開始期',
                            relatedProblems: ['2023a44', '2023b28', '2023c33'],
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '保険契約者に対する貸付の法的性質',
                            relatedProblems: ['2023c34'],
                            content: '保険証券担保貸付説 → 相殺予約付消費賃借契約説',
                        }, //34 p155
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '遺言による保険金受取人の変更',
                            relatedProblems: ['2023a35', '2023b35', '2023c35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '特約の消滅',
                            relatedProblems: ['2023c36'],
                            content: '主契約の解約返戻金によって → 主契約と特約の解約返戻金を合算して',
                        }, //36 p176
                        {
                            questionTitle: '契約内容の登録',
                            relatedProblems: ['2023a37', '2023b37', '2023c37'],
                            content: '満期保険金登録制度 → 死亡保険金登録制度',
                        }, //37 p168
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '帳簿閲覧権',
                            relatedProblems: ['2023c38'],
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '意向把握義務',
                            relatedProblems: ['2023a39', '2023b39', '2023c39'],
                            content: '設計書 → 意向確認書面',
                        }, //39 p263
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '外国保険会社等の保険業の廃止',
                            relatedProblems: ['2023c40'],
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
                            questionTitle: '生命保険契約等の要素',
                            relatedProblems: ['2023b21', '2023c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金の支払',
                            relatedProblems: ['2023c43'],
                            label: 'ア',
                            content: '10月18日',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の解除',
                            relatedProblems: ['2023c44'],
                            label: 'イ',
                            content: '保険法',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険会社の業務の範囲',
                            relatedProblems: ['2023c45'],
                            label: 'ア',
                            content: '法定他業',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険持株会社',
                            relatedProblems: ['2023c46'],
                            label: 'エ',
                            content: '総資産',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '株主の権利行使の基準日',
                            relatedProblems: ['2023c47'],
                            label: 'イ',
                            content: '3カ月',
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
                            questionTitle: '供託',
                            relatedProblems: ['2023c49'],
                            label: 'ウ',
                            content: '供託所',
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

            <TestNavigationButtons previous-route="yakkan2023b" next-route="yakkan2022a" />
        </section>
    </SeihoTestLayout>
</template>
