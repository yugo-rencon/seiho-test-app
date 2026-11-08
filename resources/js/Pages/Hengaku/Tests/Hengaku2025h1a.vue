<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2025年4月〜8月実施 フォームA";
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
                        // rev: 2026-11-07 確認済み
                        '規制金利市場 → 自由金利市場', //p1
                        '資金はより高い金利を求めて、[[規制金利市場から自由金利市場]]へ流れるという傾向が強くなった。', //p1
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
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
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '変額保険の配当金は、引き出すことができない。', //p12
                        '変額保険の場合、定額保険の[[利差益]]に相当する部分は、変動保険金額の増減に反映されるので、剰余金の利源は[[死差益、費差益]]に限られる。', //p12
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
                        '正しい',
                        '変額保険の契約日は、責任開始期の属する月の[[翌月１日]]', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険から自動延長（定期）保険への変更"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '既払込保険料総額 → 解約返戻金', //p18
                        '各種特約が付いた契約の場合には、その特約部分は変更後[[消滅する]]。', //p18
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険から払済保険・定額延長（定期）保険への変更"
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
                    questionTitle="販売資格と販売資格者の役割"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '変額保険では、[[長期的]]な収益性を追求する資産運用を原則としている。そのため、募集にあたっては、短期の運用実績のみを強調することはお客さまの信用を著しく損なうことになる。', //p27
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
                        '正しい',
                        '「特別勘定の資産運用方針」や「特別勘定資産の評価」などの資産運用に関する事項は、[[お客さまに必ず確認していただく必要がある]]。', //p28
                    ]"
                />
                <!-- 問9〜16：3つの選択肢から誤っているものを1つ選ぶ -->
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険の保険金額変動の仕組み"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '正しい。有期型では、運用実績が悪化しても死亡・高度障害保険金には基本保険金額の最低保証がある。一方、満期保険金額には最低保証がなく、運用実績に応じて基本保険金額を下回ることがある。',
                        '変動保険金額がプラスの場合、その金額は死亡・高度障害保険金額にも反映される。図では[[死亡・高度障害保険金額が基本保険金額のまま示されている]]ため、誤り。',
                        '正しい。終身型の変額保険では、変動保険金額がマイナスになっても、死亡・高度障害保険金には基本保険金額の最低保証がある。また、保険料払込満了後も保障は終身にわたって継続する。'
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '変額保険の保険料は定額保険と同様に[[定額]]である。', //p10
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別条件付契約の取り扱い"
                    :contents="[
                        // rev: 2026-11-06 確認済み
                        '正しい',
                        '正しい',
                        '変動保険金額の[[削減は行わない]]。', //p16
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
                        '既払込保険料総額 → 解約返戻金', //p18
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険と税"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '所得税 → 贈与税', //p21
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '保険料の割引・割戻や金品その他の利益を提供したり、[[提供することを約束したりする]]行為は、法律で禁止されている。', //p30
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
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険料払込猶予期間',
                            label: 'イ',
                            content: '5月1日から5月末日',
                        }, //17
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産における有価証券の評価方法',
                            label: 'イ',
                            content: '時価評価',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産における有価証券以外の資産の評価方法',
                            label: 'ウ',
                            content: '原価法',
                        }, //19
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額保険、変額個人年金保険の販売ルール',
                            label: 'ウ',
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
                    questionTitle="変額個人年金保険の特徴と仕組み"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '債券', //21
                        '投資信託', //22
                        '課税繰り延べ', //23
                        '前日', //24
                        'はありません', //25
                    ]"
                    :labels="[
                        'ク', //21
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
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        'マネー・ローンダリング', //26
                        '200', //27
                        '取引の目的', //28
                        'マイナンバーカード（個人番号カード）', //29
                        'できます', //30
                    ]"
                    :labels="[
                        'オ', //26
                        'キ', //27
                        'イ', //28
                        'エ', //29
                        'コ', //30
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
                            questionTitle: '保険料の払込方法（回数）',
                            content: '',
                        }, //32 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '前納',
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
                            questionTitle: '高度障害保険金への課税',
                            content: '',
                        }, //37 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険への課税',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定の資産運用',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '個人情報保護法',
                            content: '正しい',
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
