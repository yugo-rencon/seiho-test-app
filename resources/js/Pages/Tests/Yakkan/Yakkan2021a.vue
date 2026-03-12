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
                    :contents="[
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
                    :contents="[
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
                    questionTitle="契約"
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
                    :contents="[
                        '生命保険会社が立証する必要はない → 立証しなければならない', //p134
                        '保険法に規定されている → 保険法に規定はないが、一部の会社で保険約款に規定されている', //p134-135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :contents="[
                        '損害保険と同様の → 損害保険にはみられない', //p260-261
                        '制限しているものではない → 制限されている', //p261
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
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
                    questionTitle="責任開始期"
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
                    :contents="[
                        '財務諸表 → 保険料及び責任準備金の算出方法書', //p217
                        '正しい',
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
                        { questionTitle: '契約者保護のための法律', content: '消費者契約法 → 金融サービス提供法' }, //31 p15
                        { questionTitle: '生命保険契約等の定義', content: '正しい' }, //32
                        { questionTitle: '生命保険募集人', content: '保険契約の締結の代理 ↔︎ 保険契約の締結の媒介' }, //33　p47
                        { questionTitle: '書面交付義務', content: '正しい' }, //34
                        { questionTitle: '保険契約の復活の法的性格', content: '正しい' }, //35
                        { questionTitle: '高度障害保険金', content: '再度、高度障害保険金が支払われる → 支払われることはない' }, //36 p116-117
                        { questionTitle: '告知義務違反による解除権', content: '正しい' }, //37
                        { questionTitle: '保険契約の解約', content: '解約の意思表示が到達し、解約返戻金が口座に着金したとき → 解約の意思表示が到達したとき' }, //38 p137
                        { questionTitle: '保険業の兼営', content: '同一の者が受けることが可能 → 同一の者が受けることはできない' }, //39 p205
                        { questionTitle: '定款以外の基礎書類の変更', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '生命保険契約等の要素', label: 'オ', content: '' }, //41
                        { questionTitle: '保険法に規定する同意', label: 'ウ', content: '成立要件' }, //42
                        { questionTitle: '保険料払込の猶予期間', label: 'ウ', content: '2021年（令和3年）12月31日' }, //43
                        { questionTitle: '保険金の支払', label: 'ア', content: '10月18日' }, //44
                        { questionTitle: '保険金等の遅延利息の支払', label: 'エ', content: '法定利率' }, //45
                        { questionTitle: '告知義務違反に対する解除権の行使', label: 'ア', content: '不可争期間' }, //46
                        { questionTitle: '年齢の誤りの処理', label: 'ウ', content: '取り消すことができる' }, //47
                        { questionTitle: '保険業の監督の方法', label: 'イ', content: '実体的監督' }, //48
                        { questionTitle: '総代会', label: 'エ', content: '特別決議' }, //49
                        { questionTitle: '保険契約の締結または保険募集に関する禁止行為', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2022c" next-route="yakkan2021b" />
        </section>
    </SeihoTestLayout>
</template>
