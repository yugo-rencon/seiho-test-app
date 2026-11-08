<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2025年9月〜2026年3月実施 フォームD";
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
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '「スイッチング」は、[[所定の回数までは手数料が無料]]となっているのが一般的。', //p14
                        '年金支払開始前に被保険者が死亡した場合に支払われる死亡給付金の額は、「死亡日の積立金額または払込保険料総額（最低保証額）のいずれか[[大きい]]金額」というタイプが一般的。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '既払込保険料総額 → 解約返戻金', //p18
                        '契約者貸付を行った場合の貸付金と同額の積立金については、貸付金とその利息が返済されるまでの間、特別勘定資産の運用実績にもとづく計算を行うのではなく、[[別途生命保険会社所定の利率により運用される]]。 ', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動延長（定期）保険"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '既払込保険料総額 → 解約返戻金', //p18
                        '正しい',
                        '各種特約が付いた契約の場合には、その特約部分は変更後[[消滅する]]。', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="払済保険への変更"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '既払込保険料総額 → 解約返戻金', //p20
                        '正しい',
                        '払済保険へ変更後、変額保険に復旧（復帰・復元）する取り扱いはできない。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売資格と販売資格者の役割"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '変額保険では、[[長期的]]な収益性を追求する資産運用を原則としている。そのため、募集にあたっては、短期の運用実績のみを強調することはお客さまの信用を著しく損なうことになる。', //p27
                        '正しい',
                        '金融面や現在の経済情勢などについてもより深い知識が必要となる。', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品取引法"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '「金融商品販売事業者」の保護法制 → 利用者保護法制', //p34
                        '正しい',
                        '契約概要 → 契約締結前交付書面', //p34
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
                    questionTitle="保険料の仕組みと保険金の変動の仕組み"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '特別勘定 → 一般勘定', //p11
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
                        '特別勘定 → 一般勘定', //p16
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
                        '復活時の変動保険金額がマイナスの場合には、[[基本保険金額が復活時の死亡・高度障害保険金額となる]]。', //p18
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険の保険金と税"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '相続税 → 所得税', //p21
                        '正しい',
                        '正しい',
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
                    questionTitle="お客さま意向の把握と正しい情報提供"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '「特別勘定の資産運用方針」や「特別勘定資産の評価」などの資産運用に関する事項は、[[お客さまに必ず確認していただく必要がある]]。', //p28
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
                        'お客さまである法人と、[[実際に手続きをする担当者]]双方の取引時確認が必要。', //p35
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
                            questionTitle: '保険料の払込猶予期間',
                            label: 'イ',
                            content: '11月1日から11月末日',
                        }, //18
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '定額保険への変更',
                            label: 'ア',
                            content: '3カ月',
                        }, //19
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '特別勘定資産における有価証券の評価方法',
                            label: 'イ',
                            content: '時価評価',
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
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-04 確認済み
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
                            // rev: 2026-11-08 確認済み
                            questionTitle: '変額保険の発売時期',
                            content: '1986年（昭和61年）に「変額保険」が、1999年（平成11年）には「変額個人年金保険」が発売されている。', //p1
                        }, //31
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '付加保険料',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-08 確認済み
                            questionTitle: '変額個人年金保険の解約',
                            content: '年金支払開始日前の解約は可能だが、[[年金支払開始日以降の解約はできない]]。', //p13
                        }, //34
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '保険料の払込方法（回数）',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '定額延長（定期）保険への変更',
                            content: '',
                        }, //36 //p
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
                            // rev: 2026-11-04 確認済み
                            questionTitle: '特別勘定の資産運用',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-08 確認済み
                            questionTitle: '金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）',
                            content: '金融商品販売業者には、生命保険会社はもちろん[[保険代理店等も含まれる]]。', //p33
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="hengaku2025h2c" home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
