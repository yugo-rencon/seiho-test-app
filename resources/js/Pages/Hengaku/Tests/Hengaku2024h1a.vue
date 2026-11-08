<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2024年4月〜8月実施 フォームA";
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
                    questionTitle="変額保険と特別勘定"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '生命保険会社は、一定の給付が保証され資産運用に際しても安全性が重視される定額保険の資産とは明確に区分して、運用および経理を行う必要がある。', //p9
                        '契約者は生命保険会社に対し、「特別勘定資産」の運用方法に関する指図は[[一切できないことになっている]]。', //p9
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '変額保険の配当金は、引き出すことができない。', //p12
                        '正しい',
                        '配当額は毎年の決算に応じて変動（増減）し、[[決算実績によっては０（ゼロ）となる年度もある]]。', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約日"
                    :contents="[
                        // rev: 2026-11-06 確認済み
                        '変額保険の契約日は、責任開始期の属する月の[[翌月１日]]', //p16
                        '正しい',
                        '変額保険の契約日は、責任開始期の属する月の[[翌月１日]]', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別条件付契約の取り扱い"
                    :contents="[
                        // rev: 2026-11-06 確認済み
                        '契約日からの経過年数に応じて基本保険金額の所定割合を[[削減する]]。', //p16
                        '正しい',
                        '変動保険金額の[[削減は行わない]]。', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料払込猶予期間"
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
                    questionTitle="変額保険の保険金と税"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '贈与税 → 相続税', //p21
                        '相続税 → 所得税', //p21
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売資格と販売資格者の役割"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '変額保険では、[[長期的な収益性]]を追求する資産運用を原則としており、お客さまには運用実績についても[[長期的]]に判断していただくことが重要。', //p27
                        '正しい',
                        '金融面や現在の経済情勢などについてもより深い知識が必要となる。', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さま意向の把握と正しい情報提供"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        'どのような契約内容を望んでいるかといった意向把握に努め、お客さまに対し保険加入に必要な正しい情報を提供するとともに、[[お客さま意向に合った商品をおすすめする必要がある。]]', //p28
                        '「特別勘定の資産運用方針」や「特別勘定資産の評価」などの資産運用に関する事項は、[[お客さまに必ず確認していただく必要がある]]。', //p28
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
                    questionTitle="変額保険の保険金額変動の仕組み"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '死亡・高度障害保険金には基本保険金額の最低保証があるため、運用実績が悪化しても基本保険金額を下回らない。図では[[死亡・高度障害保険金額が基本保険金額を下回るように示されている]]ため、誤り。',
                        '正しい。変動保険金額がプラスの場合、死亡・高度障害保険金額は、基本保険金額に変動保険金額を加えた金額となる。図では、死亡・高度障害保険金額の矢印が基本保険金額を超え、変動後の保険金額まで伸びている。',
                        '正しい。有期型では、運用実績が悪化しても死亡・高度障害保険金には基本保険金額の最低保証がある。一方、満期保険金額には最低保証がなく、運用実績に応じて基本保険金額を下回ることがある。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '変額保険の保険料は定額保険と同様に[[定額]]である。', //p10
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額個人年金保険と特別勘定"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '１年 → 3カ月', //p18
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '既払込保険料総額 → 解約返戻金', //p18
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="払済保険・定額延長（定期）保険への変更"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '変更請求書類の受付日の翌日 → 変更請求書類の受付日', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        'お客さまである法人と、[[実際に手続きをする担当者]]双方の取引時確認が必要。', //p35
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
                            // rev: 2026-11-05 確認済み
                            questionTitle: '定額保険への変更',
                            label: 'イ',
                            content: '3カ月',
                        }, //17
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定の資産運用',
                            label: 'ウ',
                            content: '長期的',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価替え',
                            label: 'ア',
                            content: '毎日',
                        }, //19
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額保険、変額個人年金保険の販売ルール',
                            label: 'ア',
                            content: '特定保険',
                        }, //20
                    ]"
                />
                <!-- 問21〜25：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="5"
                    questionRange="21〜25"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約返戻金"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '保険料払込年月数', //21
                        '積立金額', //22
                        '下回ります', //23
                        '最低保証', //24
                        '受け付けた日', //25
                    ]"
                    :labels="[
                        'エ', //21
                        'イ', //22
                        'キ', //23
                        'カ', //24
                        'コ', //25
                    ]"
                />
                <!-- 問26〜30：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="6"
                    questionRange="26〜30"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '断定的判断', //26
                        '特別の利益', //27
                        '虚偽の説明', //28
                        '誹謗・中傷', //29
                        '司法処分', //30
                    ]"
                    :labels="[
                        'カ', //26
                        'ケ', //27
                        'ク', //28
                        'オ', //29
                        'キ', //30
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
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額保険と特別勘定',
                            content: '変額保険の資産運用に際しては、有価証券を中心に運用を行い、[[その評価差益・売買差益まで含めた]]総合的な利回りを追求し、経済情勢や運用実績によっては高い収益を得ることができる。', //p7
                        }, //31
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険の商品内容',
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: 'クーリング・オフ',
                            content: '',
                        }, //33 //p
                        {
                            questionTitle: '保険料の払込方法（回数）',
                            content: '',
                        }, //34 //p
                        {
                            questionTitle: '減額',
                            content: '',
                        }, //35 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険期間・保険料払込期間',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '変額個人年金保険の運用益',
                            content: '',
                        }, //37 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価方法',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '金融商品取引法',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険法における告知義務',
                            content: '正しい',
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
