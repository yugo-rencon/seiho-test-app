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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
                        '保険契約者になることができない → 保険契約者になることはできる', //p37
                        '事業保険 → 団体保険', //p39
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三者のためにする生命保険契約等"
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
                    :contents="[
                        '重大事由による保険契約の解除の場合も支払われる', //p153-154
                        '保険金額の減額の場合も支払われる', //p153-154
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
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
                    :contents="[
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
                        // 問31〜40
                        { questionTitle: '約款と特約', content: '普通保険約款 ↔︎ 特約' }, //31 p12
                        { questionTitle: '生命保険契約等の定義', content: '正しい' }, //32
                        { questionTitle: '保険期間', content: '死亡保険契約 → 生存保険契約' }, //33 p40
                        { questionTitle: '保険料の自動振替貸付', content: '正しい' }, //34
                        { questionTitle: '保険契約者の住所変更', content: '正しい' }, //35
                        { questionTitle: '災害入院特約と疾病入院特約', content: '重複して支払われる → 災害入院給付金が支払われる' }, //36 p178
                        { questionTitle: '告知義務違反による解除権', content: '正しい' }, //37
                        { questionTitle: '疾病入院特約', content: '正しい' }, //38
                        { questionTitle: '保険計理人', content: '死亡保険契約ではなく生存保険契約。' }, //39
                        { questionTitle: '定款以外の基礎書類の変更', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融商品取引法', label: 'ウ', content: '適合性の原則' }, //41
                        { questionTitle: '保険料の返還', label: 'オ', content: '' }, //42
                        { questionTitle: '保険金の請求', label: 'イ', content: '3年間' }, //43
                        { questionTitle: '保険金の支払', label: 'ア', content: '10月18日' }, //44
                        { questionTitle: '告知義務違反による解除の通知', label: 'ウ', content: '1ヶ月以内に届くように' }, //45
                        { questionTitle: '保険契約の消滅', label: 'ウ', content: '取消し' }, //46
                        { questionTitle: '年齢の誤りの処理', label: 'ウ', content: '取り消すことができる' }, //47
                        { questionTitle: '保険金受取人の死亡', label: 'エ', content: '当該保険金受取人の相続人全員' }, //48
                        { questionTitle: '主務大臣への協議', label: 'エ', content: '財務大臣' }, //49
                        { questionTitle: '保険契約の締結または保険募集に関する禁止行為', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2021b" next-route="yakkan2020a" />
        </section>
    </SeihoTestLayout>
</template>
