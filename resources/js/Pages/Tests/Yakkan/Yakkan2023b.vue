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
                    questionTitle="生命保険契約等の性質・効力"
                    :contents="[
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
                    :contents="[
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
                    questionTitle="保険約款の拘束力の根拠"
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
                    :contents="[
                        '正しい',
                        '告知されなかった事実を知っていたときも解除できない', //p63
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
                    questionTitle="外国保険業者"
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
                        { questionTitle: '監督', content: '一切無効 → その内容が強行規定や公益に反するものでない限り有効' }, //31 p11
                        { questionTitle: '法律と保険約款', content: '正しい' }, //32
                        { questionTitle: '団体扱特約', content: '正しい' }, //33
                        { questionTitle: '復旧（復帰・復元）', content: '正しい' }, //34
                        { questionTitle: '遺言による保険金受取人の変更', content: '正しい' }, //35
                        { questionTitle: '配当金', content: '利益分配金 → 契約者配当金' }, //36 //p158
                        { questionTitle: '契約内容の登録', content: '満期保険金登録制度 → 死亡保険金登録制度' }, //37 p168
                        { questionTitle: '定款', content: '相互会社 ↔︎ 株式会社' }, //38 p218
                        { questionTitle: '意向把握義務', content: '設計書 → 意向確認書面' }, //39 p263
                        { questionTitle: '事業年度', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融サービスの提供に関する法律', label: 'ア', content: '重要事項' }, //41
                        { questionTitle: '保険金額', label: 'イ', content: '被保険者利益' }, //42
                        { questionTitle: '生命保険募集人', label: 'ウ', content: '代理' }, //43
                        { questionTitle: '生命保険契約等の解除の効力等', label: 'ウ', content: '1ヶ月' }, //44
                        { questionTitle: '時効', label: 'ア', content: '責任準備金' }, //45
                        { questionTitle: '給付金の支払', label: 'オ', content: '' }, //46
                        { questionTitle: '監督体制', label: 'エ', content: '財務大臣' }, //47
                        { questionTitle: '災害入院給付金の免責事由', label: 'オ', content: '' }, //48
                        { questionTitle: '保険計理人', label: 'エ', content: '取締役会' }, //49
                        { questionTitle: '保険契約の締結または保険募集に関する禁止行為', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2023a" next-route="yakkan2023c" />
        </section>
    </SeihoTestLayout>
</template>
