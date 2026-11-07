<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2024年9月〜2025年3月実施 フォームC";
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
                    questionTitle="変額保険と定額保険の資産運用"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '定額保険は、一定額の給付を保証するため、資産運用に際しては[[利息・配当金収入を中心とし、安全性が重視されている]]。', //p7
                        '正しい',
                        '変額保険の資産運用に際しては、有価証券を中心に運用を行い、[[その評価差益・売買差益まで含めた]]総合的な利回りを追求し、経済情勢や運用実績によっては高い収益を得ることができる。', //p7
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
                        '変動保険金額がプラスの場合、その金額は死亡・高度障害保険金額にも反映される。図では[[死亡・高度障害保険金額が基本保険金額のまま示されている]]ため、誤り。',
                        '正しい。有期型では、運用実績が悪化しても死亡・高度障害保険金には基本保険金額の最低保証がある。一方、満期保険金額には最低保証がなく、運用実績に応じて基本保険金額を下回ることがある。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '変額保険の配当金は、引き出すことができない。', //p12
                        '変額保険の場合、定額保険の[[利差益]]に相当する部分は、変動保険金額の増減に反映されるので、剰余金の利源は[[死差益、費差益]]に限られる。', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別条件付契約の取り扱い"
                    :contents="[
                        // rev: 2026-11-06 確認済み
                        '正しい',
                        '特別勘定 → 一般勘定', //p16
                        '契約日からの経過年数に応じて基本保険金額の所定割合を[[削減する]]。', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
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
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険と税"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さま意向の把握と正しい情報提供"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
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
                    questionTitle="金融の自由化"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '資金はより高い金利を求めて、[[規制金利市場から自由金利市場]]へ流れるという傾向が強くなった。', //p1
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '特別勘定 → 一般勘定', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動延長（定期）保険への変更"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '各種特約が付いた契約の場合には、その特約部分は変更後[[消滅する]]。', //p18
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '復活をする場合、[[告知書を提出し]]、生命保険会社の承諾を得るとともに、延滞保険料と生命保険会社所定の延滞利息を払い込むなどの手続きが必要。', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '契約者貸付を行った場合の貸付金と同額の積立金については、貸付金とその利息が返済されるまでの間、特別勘定資産の運用実績にもとづく計算を行うのではなく、[[別途生命保険会社所定の利率により運用される]]。 ', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '「不適正な乗換募集」として[[法律で禁止されている]]。', //p31
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品取引法"
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
                            // rev: 2026-11-05 確認済み
                            questionTitle: '契約日',
                            label: 'ウ',
                            content: '責任開始期の属する月の翌月1日',
                        }, //17
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険料払込猶予期間',
                            label: 'イ',
                            content: '11月1日から11月末日',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価方法',
                            label: 'イ',
                            content: '時価評価',
                        }, //19
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価替え',
                            label: 'ア',
                            content: '毎日',
                        }, //20
                    ]"
                />
                <!-- 問21〜25：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="5"
                    questionRange="21〜25"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険から定額保険への変更"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '3カ月', //21
                        '変額保険の契約当初', //22
                        '特別配当金', //23
                        '受け付けた日', //24
                        '取り扱いはできません', //25
                    ]"
                    :labels="[
                        'カ', //21
                        'キ', //22
                        'オ', //23
                        'ケ', //24
                        'イ', //25
                    ]"
                />
                <!-- 問26〜30：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="6"
                    questionRange="26〜30"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額個人年金保険の特徴と仕組み"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '債券', //26
                        '投資信託', //27
                        '課税繰り延べ', //28
                        '前日', //29
                        'はありません', //30
                    ]"
                    :labels="[
                        'ク', //26
                        'イ', //27
                        'カ', //28
                        'コ', //29
                        'オ', //30
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
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特約による保険金・給付金',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険の解約',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '変額個人年金保険の商品内容',
                            content: '',
                        }, //34 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '前納',
                            content: '',
                        }, //36 //p
                        {
                            questionTitle: '減額',
                            content: '',
                        }, //37 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '高度障害保険金への課税',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '個人情報保護法',
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
