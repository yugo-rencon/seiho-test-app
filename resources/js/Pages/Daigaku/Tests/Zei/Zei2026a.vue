<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2026年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="雑所得"
                    :contents="[
                        // rev: 2026-11-21 確認済み
                        '生命保険契約等に基づく解約返戻金は含まれない。', //p14
                        '正しい',
                        '受給者の扶養親族の有無によっては変わらない。', //p14
                        '原稿料、印税等については、1回に支払われる金額のうち[[100万円以下の部分は10％、100万円を超える部分は20％]]が源泉徴収される。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の配偶者控除と配偶者特別控除・扶養控除"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会政策に配慮した所得控除に関する知識（生命保険料控除）"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし相続財産"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納付"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし贈与財産"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の納付および特例措置"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険に関する税務"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人事業税"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="福利厚生プラン"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職所得金額の計算"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="青色申告制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="住民税の主な所得控除"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続人"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続分"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人年金保険に関する税務"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の損金についての特別規定"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="所得税の特徴"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '10',
                        '二重課税',
                        '必要がなく',
                        '15',
                        '保険給付', // 問25〜29
                    ]"
                    :labels="[
                        'ク', //25
                        'エ', //26
                        'ウ', //27
                        'ケ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="給与所得者の確定申告"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '０円',
                        '過納税額',
                        '課税精算',
                        '少ない',
                        '配当控除', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'カ', //31
                        'イ', //32
                        'コ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="相続制度"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '失踪宣告',
                        '血族',
                        '代襲相続',
                        '相続欠格',
                        '家庭裁判所', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'ア', //36
                        'エ', //37
                        'コ', //38
                        'キ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '各種所得と損益通算',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '賦課課税',
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '還付請求',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '医療費控除',
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '相続放棄',
                            content: '', //p
                        }, //44
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '相続税額の計算',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '使途秘匿金に対する追加課税',
                            content: '', //p
                        }, //47
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '年払・半年払の保険料の経理',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '支払調書',
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.zei2026b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>

