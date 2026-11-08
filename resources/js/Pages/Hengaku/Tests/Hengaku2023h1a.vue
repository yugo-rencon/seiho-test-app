<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2023年4月〜8月実施 フォームA";
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
                    questionTitle="変額保険の販売の背景"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '金融商品を選択する際にお客さまが重視している要素としては、[[収益性が41.8％、安全性が26.6％、流動性が17.3％]]となっている。', //p3
                        '変額保険の販売に際しては、[[長期的]]な「収益性」を追求する資産運用を原則にしていることを念頭に置き、[[短期]]の運用実績ばかりを強調するのではなく、「保障性」を兼ね備えた保険商品として[[長期的]]な視野に立った販売を行っていく必要がある。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険と特別勘定"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '正しい',
                        '契約者は生命保険会社に対し、「特別勘定資産」の運用方法に関する指図は[[一切できないことになっている]]。', //p9
                        '「特別勘定」で運用されている資産からの利益および損失は、原則として、[[変額保険契約のみに割り当てられ、他の種類の保険契約に割り当てられることはない]]。', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
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
                    questionTitle="変額個人年金保険の商品内容"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '「スイッチング」は、[[所定の回数までは手数料が無料]]となっているのが一般的。', //p14
                        '年金支払開始前に被保険者が死亡した場合に支払われる死亡給付金の額は、「死亡日の積立金額または払込保険料総額（最低保証額）のいずれか[[大きい]]金額」というタイプが一般的。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約日"
                    :contents="[
                        // rev: 2026-11-06 確認済み
                        '変額保険の契約日は、責任開始期の属する月の[[翌月１日]]', //p16
                        'アの解説と同様', //p16
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '契約者貸付を行った場合の貸付金と同額の積立金については、貸付金とその利息が返済されるまでの間、特別勘定資産の運用実績にもとづく計算を行うのではなく、[[別途生命保険会社所定の利率により運用される]]。 ', //p20
                        '貸付を受けた場合と受けなかった場合とでは、[[支払われる死亡・高度障害保険金や満期保険金の金額が異なる]]。', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '変動保険金額分 → 基本保険金額分', //p19
                        '一般に[[最低保証はない]]ので、払い込まれた保険料に比べ少額となることがある。', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '[[保険料の割引・割戻]]や金品その他の利益を提供したり、提供することを約束したりする行為は「特別の利益の提供」に該当する。', //p30
                        '「特定の生命保険会社との比較、特定期間を取り上げての比較」として[[法律で禁止されている]]。', //p30
                    ]"
                />
                <!-- 問9〜16：3つの選択肢から誤っているものを1つ選ぶ -->
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本における変額個人年金保険販売"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '2008年９月のリーマン・ショックなどにより金融情勢が不安定となったこと等の影響を受け、その実績は一時期[[大きく減少]]した。', //p6
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険と定額保険の資産運用"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '正しい',
                        '正しい',
                        '定額保険は、運用実績が予定利率を下回った場合にも、[[給付は保証されており]]、運用リスクは生命保険会社が負担している。', //p7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険の保険金額変動の仕組み"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '変動保険金額がプラスの場合、その金額は死亡・高度障害保険金額にも反映される。図では[[死亡・高度障害保険金額が基本保険金額のまま示されている]]ため、誤り。',
                        '正しい。有期型では、運用実績が悪化しても死亡・高度障害保険金には基本保険金額の最低保証がある。一方、満期保険金額には最低保証がなく、運用実績に応じて基本保険金額を下回ることがある。',
                        '正しい。終身型の変額保険では、変動保険金額がマイナスになっても、死亡・高度障害保険金には基本保険金額の最低保証がある。また、保険料払込満了後も保障は終身にわたって継続する。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
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
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="払済保険への変更"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '変更請求書類を生命保険会社が受け付けた日の解約返戻金を使って、払済保険へ変更する取り扱いを行い、効力もその[[変更請求書類の受付日]]から生じる。', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="減額"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '一度減額すると、元の保険金額に復旧（復帰・復元）することはできない。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険の保険金と税"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '相続税 → 所得税', //p21
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品取引法"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '正しい',
                        '広告等の規制、損失補てん等の禁止なども販売ルールに含まれている。', //p34
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
                            questionTitle: '保険料の払込猶予期間',
                            label: 'イ',
                            content: '5月1日から5月末日',
                        }, //17
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '自動延長（定期）保険への変更',
                            label: 'イ',
                            content: '解約返戻金',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価方法',
                            label: 'ウ',
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
                    questionTitle="剰余金と配当金"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '利差益', //21
                        '死差益、費差益', //22
                        '1年', //23
                        '3年目', //24
                        '第6月目の末', //25
                    ]"
                    :labels="[
                        'ク', //21
                        'ケ', //22
                        'イ', //23
                        'エ', //24
                        'オ', //25
                    ]"
                />
                <!-- 問26〜30：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="6"
                    questionRange="26〜30"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '信用リスク', //26
                        '損害賠償責任', //27
                        '適合性の原則', //28
                        '勧誘方針', //29
                        '生命保険会社', //30
                    ]"
                    :labels="[
                        'エ', //26
                        'ウ', //27
                        'ケ', //28
                        'キ', //29
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
                            // rev: 2026-11-09 確認済み
                            questionTitle: '変額保険の特約による保険金',
                            content: '定期保険特約などにもとづいて支払われる保険金の金額は[[一定であり、変動しない]]。', //p11
                        }, //31
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険の特徴',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-08 確認済み
                            questionTitle: '前納',
                            content: '前納による保険料の払い込みも取り扱っている。', //p16
                        }, //34
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '復活',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額保険から定額保険への変更',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '保険料払込方法（回数）',
                            content: '月払、半年払、年払相互間の変更を取り扱っている。', //p20
                        }, //37
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '変額個人年金保険の運用益',
                            content: '変額個人年金保険の積立（運用）期間中に発生する運用益については、変額保険と同様に積立（運用）期間中に課税されることはなく、解約時または年金受取開始時等まで課税が繰り延べられる。', //p22
                        }, //38
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定の資産運用',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            content: '正しい',
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
