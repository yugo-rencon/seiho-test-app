<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2023年9月〜2024年3月実施 フォームA";
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
                        '正しい',
                        '規制金利市場 → 自由金利市場', //p1
                        '[[自由金利市場]]の拡大により、資金はより高い金利を求めて、政策的に低く押さえられていた銀行預金などの[[規制金利市場から自由金利市場]]へ流れるという傾向が強くなった。', //p1
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
                    questionTitle="変額個人年金保険の商品内容"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '積立金を運用する特別勘定については、運用対象の異なる複数の特別勘定の中から契約者が選択するタイプが一般的だが、[[特別勘定が1つだけのタイプもある]]。', //p14
                        '正しい',
                        '「スイッチング」は、[[所定の回数までは手数料が無料]]となっているのが一般的。', //p14
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
                        '変動保険金額 → 基本保険金額', //p16
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
                    questionTitle="解約"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '[[変動保険金額分]]については、解約請求日の積立金額から、[[基本保険金]]を支払うために必要な金額を控除した金額となる。', //p19
                        '一般に最低保証はないので、[[払い込まれた保険料に比べ少額となることがある]]。', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '「将来の運用成果等について断定的判断を提供する行為」として[[法律で禁止されている]]。', //p30
                        '保険料の割引・割戻や[[金品その他の利益を提供]]したり、提供することを約束したりする行為は、「特別の利益の提供」に該当する。', //p30
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品取引法"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
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
                        '正しい',
                        '変額保険の資産運用に際しては、有価証券を中心に運用を行い、[[その評価差益・売買差益まで含めた]]総合的な利回りを追求し、経済情勢や運用実績によっては高い収益を得ることができる。', //p7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組みと保険金の変動の仕組み"
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
                    questionTitle="契約者貸付"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '契約者貸付を行った場合の貸付金と同額の積立金については、貸付金とその利息が返済されるまでの間、特別勘定資産の運用実績にもとづく計算を行うのではなく、[[別途生命保険会社所定の利率により運用される]]。 ', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="払済保険・定額延長（定期）保険への変更"
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
                    questionTitle="販売資格・販売資格者の役割"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '正しい',
                        'お客さまが過去に保険会社による取引時確認を受けたことがある場合、次回以降の取引では、[[保険証券やカード、パスワード等により取引時確認済みであることが確認できれば、再度の取引時確認は不要]]。', //p36
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
                            label: 'イ',
                            content: '責任開始期の属する月の翌月1日',
                        }, //17
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '定額保険への変更',
                            label: 'ア',
                            content: '3カ月',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '有価証券の評価',
                            label: 'ウ',
                            content: '時価評価',
                        }, //19
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '有価証券以外の資産の評価',
                            label: 'イ',
                            content: '原価法',
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
                        // rev: 2026-11-05 確認済み
                        '利差益', //21
                        '死差益、費差益', //22
                        '1年', //23
                        '第6月目', //24
                        'できません', //25
                    ]"
                    :labels="[
                        'イ', //21
                        'オ', //22
                        'ケ', //23
                        'ウ', //24
                        'キ', //25
                    ]"
                />
                <!-- 問26〜30：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="6"
                    questionRange="26〜30"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別勘定の資産運用"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        'リスク', //26
                        '契約者', //27
                        '換金性（流動性）', //28
                        '公平性', //29
                        '毎日', //30
                    ]"
                    :labels="[
                        'カ', //26
                        'イ', //27
                        'コ', //28
                        'エ', //29
                        'ク', //30
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
                            questionTitle: '特約保険料',
                            content: '',
                        }, //31 //p
                        {
                            questionTitle: '変額個人年金保険の年金額',
                            content: '',
                        }, //32 //p
                        {
                            questionTitle: '変額個人年金保険',
                            content: '',
                        }, //33 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '保険料払込方法（回数）',
                            content: '',
                        }, //35 //p
                        {
                            // rev: 2026-11-08 確認済み
                            questionTitle: '前納',
                            content: '前納による保険料の払い込みも取り扱っている。', //p16
                        }, //36
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '復活',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険への課税',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '金融商品取引法',
                            content: '',
                        }, //39 //p
                        {
                            questionTitle: '保険法における告知義務',
                            content: '',
                        }, //40 //p
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
