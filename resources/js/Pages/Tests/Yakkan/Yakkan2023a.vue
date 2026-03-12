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
                        '正しい',
                        '拘束力がない → 拘束力がある（理解していなくても拘束力あり）', //p7
                        '無効 → 有効', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度"
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
                    questionTitle="解約返戻金"
                    :contents="[
                        '重大事由による保険契約の解除の場合も支払われる', //p153-154
                        '保険金額の減額の場合も支払われる', //p153-154
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :contents="[
                        '保険株式会社と合併することができない → 相互会社または保険株式会社と合併することができる', //p251
                        '正しい',
                        '保険法 → 会社法', //p251
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :contents="[
                        '損害保険と同様の → 損害保険にはみられない', //p260-261
                        '制限はない → 制限されている', //p261
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :contents="[
                        '法人契約や事業主契約も対象 → 対象外', //p19
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
                        '強制しうる権利を有する → 権利を有しない<br>損害を賠償をする義務を負う → 義務を負わない', //p48
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
                        '正しい',
                        '契約応当日以後末日まで → 初日以後契約応当日前', //p86
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金受取人の変更"
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
                    questionTitle="基礎書類"
                    :contents="[
                        '財務諸表 → 保険料及び責任準備金の算出方法書', //p217
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
                        { questionTitle: '生命保険契約等に対する法の適用', content: '正しい' }, //31
                        { questionTitle: '普通保険約款と特約', content: '普通保険約款 ↔︎ 特約' }, //32 p12
                        { questionTitle: '保険期間', content: '正しい' }, //33
                        { questionTitle: '被保険者の同意', content: '契約当事者である → 契約当事者でない<br>効力発生のための要件ではなく成立要件 → 成立要件ではなく効力発生のための要件' }, //34 p51
                        { questionTitle: '遺言による保険金受取人の変更', content: '正しい' }, //35
                        { questionTitle: '時効', content: '2年間 → 3年間' }, //36 p124
                        { questionTitle: '契約内容の登録', content: '満期保険金登録制度 → 死亡保険金登録制度' }, //37 p168
                        { questionTitle: '免許の定義', content: '正しい' }, //38
                        { questionTitle: '意向把握義務', content: '設計書 → 意向確認書面' }, //39 p263
                        { questionTitle: '指定紛争解決機関', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融サービスの提供に関する法律', label: 'ア', content: '重要事項' }, //41
                        { questionTitle: '生命保険契約等の性質', label: 'オ', content: '' }, //42
                        { questionTitle: '生命保険契約等の効力', label: 'イ', content: '保険金受取人' }, //43
                        { questionTitle: '責任開始期', label: 'エ', content: '保険料前払主義' }, //44
                        { questionTitle: '解除権', label: 'ウ', content: '除斥期間' }, //45
                        { questionTitle: '保険契約と詐欺', label: 'ウ', content: '取消し' }, //46
                        { questionTitle: '配当金', label: 'ウ', content: '衡平' }, //47
                        { questionTitle: '災害入院給付金の免責事由', label: 'オ', content: '' }, //48
                        { questionTitle: '保険業の監督の方法', label: 'イ', content: '実体的監督' }, //49
                        { questionTitle: '保険契約の締結または保険募集に関する禁止行為', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2024c" next-route="yakkan2023b" />
        </section>
    </SeihoTestLayout>
</template>
