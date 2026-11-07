<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2026年4月〜8月実施 フォームB";
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
                        // rev: 2026-11-04 確認済み
                        '正しい',
                        '定額保険は、運用実績が予定利率を下回った場合にも、[[給付は保証されており]]、運用リスクは生命保険会社が負担している。', //p7
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
                        '正しい。終身型の変額保険では、特別勘定の運用実績に応じて変動保険金額が増減し、保険料払込満了後も保障は終身にわたって継続する。',
                        '変動保険金額は、特別勘定の運用実績によって[[増加する場合だけでなく、減少する場合もある]]。図のように、保険料払込満了後は基本保険金額を上回る場合だけを示す仕組みではない。',
                        '有期型の満期保険金額には最低保証がなく、特別勘定の運用実績によって増減する。したがって、図のように[[満期保険金額を基本保険金額と同額に固定して示す]]のは誤り。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組みと保険金の変動の仕組み"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '変額保険の保険料は定額保険と同様に[[定額]]である。', //p10
                        '特別勘定 → 一般勘定', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約日"
                    :contents="[
                        // rev: 2026-11-06 確認済み
                        '変額保険の契約日は、責任開始期の属する月の[[翌月１日]]', //p16
                        '変額保険の契約日は、責任開始期の属する月の[[翌月１日]]', //p16
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険から自動延長（定期）保険への変更"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '復活時の変動保険金額がマイナスの場合には、[[基本保険金額が復活時の死亡・高度障害保険金額となる]]。', //p18
                        '６カ月 → 3カ月', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険と税"
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
                    questionTitle="お客さま意向の把握と正しい情報提供"
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
                    questionTitle="変額個人年金保険の商品内容"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '変額保険の場合、定額保険の[[利差益]]に相当する部分は、変動保険金額の増減に反映されるので、剰余金の利源は[[死差益、費差益]]に限られる。', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
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
                    questionTitle="払済保険への変更"
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
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '「特定の生命保険会社との比較、特定期間を取り上げての比較」として[[法律で禁止されている]]。', //p30
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売資格と販売資格者の役割"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）"
                    :contents="[
                        '正しい',
                        '', //p
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
                            questionTitle: '保険料の払込猶予期間',
                            label: 'イ',
                            content: '5月1日から5月末日',
                        }, //17
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '変額個人年金保険の年金受取時の課税',
                            label: 'ア',
                            content: '所得税（雑所得）',
                        }, //18
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '特別勘定資産における有価証券以外の資産の評価方法',
                            label: 'ウ',
                            content: '原価法',
                        }, //19
                        {
                            // rev: 2026-11-04 確認済み
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
                        // rev: 2026-11-04 確認済み
                        '3カ月', //21
                        '変額保険の契約当初', //22
                        '長期', //23
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
                    questionTitle="金融商品取引法"
                    :contents="[
                        // rev: 2026-11-04 確認済み
                        '利用者', //26
                        '特定保険契約', //27
                        '契約締結の目的', //28
                        '適合性', //29
                        '損失補てん', //30
                    ]"
                    :labels="[
                        'ア', //26
                        'キ', //27
                        'エ', //28
                        'イ', //29
                        'ケ', //30
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
                            questionTitle: '変額保険と変額個人年金保険の発売時期',
                            content: '',
                        }, //31 //p
                        {
                            questionTitle: '変額個人年金保険の解約',
                            content: '',
                        }, //32 //p
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '特別条件付契約',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '前納',
                            content: '',
                        }, //35 //p
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '減額',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '保険期間・保険料払込期間の変更',
                            content: '',
                        }, //37 //p
                        {
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            content: '',
                        }, //38 //p
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '保険法',
                            content: '正しい',
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="hengaku2026h1a" home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
