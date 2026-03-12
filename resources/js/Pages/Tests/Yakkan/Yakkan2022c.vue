<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
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
                    questionTitle="金融庁長官等による監督など-①"
                    :contents="[
                        '事業方法書',
                        '停止',
                        '財産の供託',
                        '免許の取消',
                        '会計参与', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'ケ', //2
                        'オ', //3
                        'コ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融庁長官等による監督など-②"
                    :contents="[
                        '基金',
                        '通常の予測',
                        '最低保証リスク',
                        '200％',
                        '早期是正措置', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ク', //7
                        'オ', //8
                        'イ', //9
                        'キ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野の保険-①"
                    :contents="[
                        '一定額',
                        'てん補',
                        '傷害',
                        '人の状態',
                        '死亡', //問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'ク', //12
                        'オ', //13
                        'コ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野の保険-②"
                    :contents="[
                        '不妊治療',
                        '老衰',
                        '介護',
                        '身体の',
                        '治療', //問16〜20
                    ]"
                    :labels="[
                        'ク', //16
                        'エ', //17
                        'カ', //18
                        'ケ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :contents="[
                        '事業者の一定行為に該当しない → 該当する', //p20
                        '無効とならない → 無効となる', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始期"
                    :contents="[
                        '正しい',
                        '保険金は支払われない → 承諾して保険金を支払う（事故がなければ承諾していた場合）', //p82
                        '会社の承諾日を契約日とする → 責任開始の日を契約日とする', //p83
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付"
                    :contents="[
                        '正しい',
                        '保険期間中に1回だけ → 条件が満たされる限り何度でも', //p101
                        '自動振替貸付を行なったものとして → 行われなかったとして', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知受領と告知義務違反"
                    :contents="[
                        '主観的要件は不要 → 必要', //p128
                        '正しい',
                        '告知とはならない → 告知となる', //127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        '保険金の額にかかわらず供託しなければならない → 保険金の額に応じて供託しないことができる', //p270
                        '正しい',
                        '明らかにする必要はない → 明らかにしなければならない', //p270-271
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約"
                    :contents="[
                        '正しい',
                        '解約の意思表示が到達し、解約返戻金が口座に着金したとき → 解約の意思表示が到達したとき', //p137
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :contents="[
                        '払戻積立金として積み立てる金額を含む → 金額を除く', //p242
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院特約の手術給付金の支払"
                    :contents="[
                        '正しい',
                        '正しい',
                        '支払額を合計して支払う → 最も給付倍率の高い手術のみで計算', //p184
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :contents="[
                        '正しい',
                        '制限はない → 制限されている', //p261
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="基礎書類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険料の収受および保険金等の支払に関する事項は、算出方法書ではなく事業方法書の内容', //p218-220
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '拘束力', content: '正しい' }, //31
                        { questionTitle: '生命保険契約等の性質', content: '片務契約 → 双務契約（保険者も保険給付を行う債務を負担）' }, //32 p34
                        { questionTitle: 'クーリング・オフ制度', content: '正しい' }, //33
                        { questionTitle: '書面交付義務', content: '成立要件となっている → 成立要件ではない' }, //34 p54
                        { questionTitle: '復活の法的性格', content: '新契約説 → 特別契約説' }, //35 p105
                        { questionTitle: '特約の消滅', content: '正しい' }, //36
                        { questionTitle: '保険業の兼営', content: '正しい' }, //37
                        { questionTitle: '定款の変更', content: '認可は必要ない → 認可は必要' }, //38 p222
                        { questionTitle: '合併', content: '正しい' }, //39
                        { questionTitle: '外国保険業者', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融サービスの提供に関する法律', label: 'ウ', content: '元本欠損' }, //41
                        { questionTitle: '生命保険契約等の性質', label: 'エ', content: '善意' }, //42
                        { questionTitle: '遅延利息', label: 'ア', content: '保険約款' }, //43
                        { questionTitle: '保険契約の解除', label: 'ウ', content: '重大事由' }, //44
                        { questionTitle: '保険契約者の変更', label: 'イ', content: '承継人' }, //45
                        { questionTitle: '主務大臣への協議', label: 'ア', content: '保険契約者保護機構' }, //46
                        { questionTitle: '保険会社の業務の範囲', label: 'オ', content: '' }, //47
                        { questionTitle: '相互会社の社員', label: 'オ', content: '' }, //48
                        { questionTitle: '外国保険業者の規制', label: 'ウ', content: '財産目録' }, //49
                        { questionTitle: '保険募集の制限', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2022b" next-route="yakkan2021a" />
        </section>
    </SeihoTestLayout>
</template>
