<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2026年4月〜8月実施 フォームA";
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
                    questionTitle="変額保険と特別勘定"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '生命保険会社は、一定の給付が保証され資産運用に際しても安全性が重視される定額保険の資産とは明確に区分して、運用および経理を行う必要がある。', //p9
                        '契約者は生命保険会社に対し、「特別勘定資産」の運用方法に関する指図は[[一切できないことになっている]]。', //p9
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
                    questionTitle="特別条件付契約の取り扱い"
                    :contents="[
                        // rev: 2026-11-06 確認済み
                        '正しい',
                        '特別勘定 → 一般勘定', //p16
                        '「保険金の削減」のときには、削減期間中、契約日からの経過年数に応じて[[基本保険金額]]の所定割合を削減するが、[[変動保険金額の削減は行わない]]。', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '復活時の死亡・高度障害保険金額は、[[失効期間中も保険料が払い込まれたものとして計算]]した基本保険金額と変動保険金額の合計金額とする。', //p18
                        '正しい',
                        '復活時の変動保険金額がマイナスの場合には、[[基本保険金額が復活時の死亡・高度障害保険金額となる]]。', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
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
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '「特別の利益の提供」として[[法律で禁止されている]]。', //p30
                        '正しい',
                        '「将来の運用成果等について断定的判断を提供する行為」として[[法律で禁止されている]]。', //p30
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
                        '正しい',
                        '特別勘定 → 一般勘定', //p11
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
                    questionTitle="自動延長（定期）保険への変更"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '各種特約が付いた契約の場合には、その特約部分は変更後[[消滅する]]。', //p18
                        '正しい',
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
                        '正しい',
                        '契約者貸付を行った場合の貸付金と同額の積立金については、貸付金とその利息が返済されるまでの間、特別勘定資産の運用実績にもとづく計算を行うのではなく、[[別途生命保険会社所定の利率により運用される]]。 ', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '一般に最低保証はないので、[[払い込まれた保険料に比べ少額となることがある]]。', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売資格と販売資格者の役割"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '変額保険では、[[長期的]]な収益性を追求する資産運用を原則としている。そのため、募集にあたっては、短期の運用実績のみを強調することはお客さまの信用を著しく損なうことになる。', //p27
                        '正しい',
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
                            // rev: 2026-11-03 確認済み
                            questionTitle: '保険料の払込猶予期間',
                            label: 'イ',
                            content: '5月1日から5月末日',
                        }, //17
                        {
                            // rev: 2026-11-03 確認済み
                            questionTitle: '特別勘定の資産運用',
                            label: 'ア',
                            content: '契約者',
                        }, //18
                        {
                            // rev: 2026-11-03 確認済み
                            questionTitle: '特別勘定資産における有価証券の評価方法',
                            label: 'ウ',
                            content: '時価評価',
                        }, //19
                        {
                            // rev: 2026-11-03 確認済み
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
                    questionTitle="変額保険から定額保険への変更"
                    :contents="[
                        // rev: 2026-11-03 確認済み
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
                    questionTitle="変額個人年金保険の特徴と仕組み"
                    :contents="[
                        // rev: 2026-11-03 確認済み
                        '資産運用', //26
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
                            // rev: 2026-11-07 確認済み
                            questionTitle: '変額保険と変額個人年金保険の発売時期',
                            content: '1986年（昭和61年）に「変額保険」が、[[1999年（平成11年）には「変額個人年金保険」]]が発売されている。', //p1
                        }, //31
                        {
                            questionTitle: '変額保険の特約による給付金',
                            content: '',
                        }, //32 //p
                        {
                            // rev: 2026-11-03 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-03 確認済み
                            questionTitle: '保険料の払込方法（回数）',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-11-03 確認済み
                            questionTitle: '定額延長（定期）保険への変更',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '保険料払込方法（回数）の変更',
                            content: '',
                        }, //36 //p
                        {
                            // rev: 2026-11-03 確認済み
                            questionTitle: '変額個人年金保険への課税',
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '特定保険契約',
                            content: '',
                        }, //38 //p
                        {
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            content: '',
                        }, //39 //p
                        {
                            // rev: 2026-11-03 確認済み
                            questionTitle: '保険法',
                            content: '正しい',
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
