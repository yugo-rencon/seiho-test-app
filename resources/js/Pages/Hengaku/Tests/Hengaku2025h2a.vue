<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2025年9月〜2026年3月実施 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title" site-scope="hengaku" noindex>
        <section class="bg-teal-50/30 text-gray-800 py-10">
            <Pagetitle :title="title" :description="subject" />

            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <!-- 問1〜8：3つの選択肢から正しいものを1つ選ぶ -->
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融の自由化"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険の保険金額変動の仕組み"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '死亡・高度障害保険金には基本保険金額の最低保証があるため、運用実績が悪化しても基本保険金額を下回らない。図では[[死亡・高度障害保険金額が基本保険金額を下回るように示されている]]ため、誤り。',
                        '正しい。有期型では、運用実績が悪化しても死亡・高度障害保険金には基本保険金額の最低保証がある。一方、満期保険金額には最低保証がなく、運用実績に応じて基本保険金額を下回ることがある。',
                        '変動保険金額がプラスの場合、その金額は死亡・高度障害保険金額にも反映される。図では[[死亡・高度障害保険金額が基本保険金額のまま示されている]]ため、誤り。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額個人年金保険の商品内容"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別条件付契約の取り扱い"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動延長（定期）保険"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品取引法"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <!-- 問9〜16：3つの選択肢から誤っているものを1つ選ぶ -->
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険と定額保険の資産運用"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '正しい',
                        '定額保険は、一定額の給付を保証するため、資産運用に際しては[[利息・配当金収入を中心とし、安全性が重視されている]]。', //p7
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="払済保険・定額延長（定期）保険への変更"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険の保険金と税"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売資格・販売資格者の役割"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さま意向の把握と正しい情報提供"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <!-- 問17〜20：3つの語群から1つ選ぶ。label はア・イ・ウ、content は対応する語句。 -->
                <QuestionTemp2
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '契約日',
                            label: 'イ',
                            content: '責任開始期の属する月の翌月1日',
                        }, //17
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '特別勘定資産における有価証券の評価方法',
                            label: 'ウ',
                            content: '時価評価',
                        }, //18
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '特別勘定資産の評価替え',
                            label: 'ア',
                            content: '毎日',
                        }, //19
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '消費者契約法',
                            label: 'イ',
                            content: '1年',
                        }, //20
                    ]"
                />
                <!-- 問21〜25：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="5"
                    questionRange="21〜25"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        // rev: 2026-11-04 確認済み
                        '利差益', //21
                        '死差益、費差益', //22
                        '1年', //23
                        '第6月目', //24
                        'できません', //25
                    ]"
                    :labels="[
                        'エ', //21
                        'キ', //22
                        'ア', //23
                        'オ', //24
                        'コ', //25
                    ]"
                />
                <!-- 問26〜30：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="6"
                    questionRange="26〜30"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険から定額保険への変更"
                    :contents="[
                        // rev: 2026-11-04 確認済み
                        '3カ月', //26
                        '変額保険の契約当初', //27
                        '特別配当金', //28
                        '受け付けた日', //29
                        '取り扱いはできません', //30
                    ]"
                    :labels="[
                        'カ', //26
                        'キ', //27
                        'オ', //28
                        'ケ', //29
                        'イ', //30
                    ]"
                />
                <!-- 問31〜40：正誤問題。正なら content に「正しい」、誤なら訂正・解説を入力。 -->
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        {
                            questionTitle: '変額保険の発売時期',
                            content: '',
                        }, //31 //p
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '変額個人年金保険の解約',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '前納',
                            content: '',
                        }, //34 //p
                        {
                            questionTitle: '復活',
                            content: '',
                        }, //35 //p
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '減額',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '保険期間・保険料払込期間の変更',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '変額個人年金保険への課税',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            content: '',
                        }, //39 //p
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '保険法における告知義務',
                            content: '正しい',
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="hengaku2026h1b" home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
