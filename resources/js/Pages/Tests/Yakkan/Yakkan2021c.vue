<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2021年度 フォームC";
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
                    questionTitle="生損保兼営の禁止と子会社による生損保兼営-①"
                    :relatedProblems="['2021c1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '免許',
                        '確実性',
                        '負担する危険',
                        '統計上',
                        '大損害', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'コ', //2
                        'ア', //3
                        'ウ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生損保兼営の禁止と子会社による生損保兼営-②"
                    :relatedProblems="['2021c6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '比較的長期（20年、30年）',
                        '比較的短期（1年）',
                        '議決権',
                        '50％',
                        '認可', //問６〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'ク', //7
                        'ウ', //8
                        'イ', //9
                        'コ', //10
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
                    questionTitle="生命保険契約等に対する法の適用"
                    :relatedProblems="['2021c22']"
                    :contents="[
                        '典型契約 → 無名契約', //p4
                        '民法の一般規定が適用されない → 適用される', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の当事者、その他の関係者"
                    :relatedProblems="['2021c23']"
                    :contents="[
                        // rev: 2026-08-19 確認済み
                        '民法では、未成年者、成年被後見人、成年被保佐人、および成年被補助人の場合、[[所定の手続きを経ずに締結された契約については、後で取り消されることがある]]。', //p37
                        '事業保険 → 団体保険', //p39
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三者のためにする生命保険契約等"
                    :relatedProblems="['2021c24']"
                    :contents="[
                        '保険金受取人が一人であることを要する → 一人である必要はない', //p56
                        '正しい',
                        '保険金受取人が取得する権利は、保険給付請求権のみ', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約返戻金"
                    :relatedProblems="['2021c25']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '重大事由による保険契約の解除の場合にも[[支払われる]]。', //p154
                        '保険金額の減額の場合にも[[減額した部分に対応する解約返戻金が支払われる]]。', //p154
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
                        '購入する個人・法人 → 法人は含まれない', //p19
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
                    questionTitle="株式会社と相互会社"
                    :relatedProblems="['2021c28']"
                    :contents="[
                        '保険契約者に限って → 保険契約者、保険金受取人および被保険者も閲覧可能', //p226
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人および保険仲立人"
                    :relatedProblems="['2021c29']"
                    :contents="[
                        '正しい',
                        '禁止していない → 禁止している', //p261
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
                            questionTitle: '約款と特約',
                            relatedProblems: ['2021c31'],
                            content: '普通保険約款 ↔︎ 特約',
                        }, //31 p12
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '生命保険契約等の定義',
                            relatedProblems: ['2021a32', '2021b32', '2021c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '保険期間',
                            relatedProblems: ['2021c33'],
                            content: '[[生存保険契約]]にあってはその始期は実際上問題とならず、[[終身保険契約]]にあっては保険期間の終期は不定である。', //p40
                        }, //33
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険料の自動振替貸付',
                            relatedProblems: ['2021c34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険契約者の住所変更',
                            relatedProblems: ['2021c35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '災害入院特約と疾病入院特約',
                            relatedProblems: ['2021c36'],
                            content: '重複して支払われる → 災害入院給付金が支払われる',
                        }, //36 p178
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '告知義務違反による解除権',
                            relatedProblems: ['2021a37', '2021b37', '2021c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '疾病入院特約',
                            relatedProblems: ['2021c38'],
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険計理人',
                            relatedProblems: ['2021b49', '2021c39'],
                            content: '死亡保険契約ではなく生存保険契約。',
                        }, //39
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '定款以外の基礎書類の変更',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '金融商品取引法',
                            relatedProblems: ['2021c41'],
                            label: 'ウ',
                            content: '適合性の原則',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険料の返還',
                            relatedProblems: ['2021b33', '2021c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金の請求',
                            relatedProblems: ['2021c43'],
                            label: 'イ',
                            content: '3年間',
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
                            questionTitle: '告知義務違反による解除の通知',
                            relatedProblems: ['2021c45'],
                            label: 'ウ',
                            content: '1カ月以内に届くように',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の消滅',
                            relatedProblems: ['2021c46'],
                            label: 'ウ',
                            content: '取消し',
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
                            questionTitle: '保険金受取人の死亡',
                            relatedProblems: ['2021c48'],
                            label: 'エ',
                            content: '当該保険金受取人の相続人全員',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '主務大臣への協議',
                            relatedProblems: ['2021c49'],
                            label: 'エ',
                            content: '財務大臣',
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

            <TestNavigationButtons previous-route="yakkan2021b" next-route="yakkan2020a" />
        </section>
    </SeihoTestLayout>
</template>
