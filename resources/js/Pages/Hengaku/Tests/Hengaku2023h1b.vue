<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2023年4月〜8月実施 フォームB";
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
                    questionTitle="変額保険と定額保険の資産運用"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '変額保険の資産運用に際しては、有価証券を中心に運用を行い、[[その評価差益・売買差益まで含めた]]総合的な利回りを追求し、経済情勢や運用実績によっては高い収益を得ることができる。', //p7
                        '正しい',
                        '定額保険は、運用実績が予定利率を下回った場合にも、[[給付は保証されており]]、運用リスクは生命保険会社が負担している。', //p7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
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
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="払済保険への変更"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '変更請求書類を生命保険会社が受け付けた日の解約返戻金を使って、払済保険へ変更する取り扱いを行い、効力もその[[変更請求書類の受付日]]から生じる。', //p20
                        '正しい',
                        '払済保険へ変更後、変額保険に復旧（復帰・復元）する取り扱いはできない。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="減額"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '変動保険金額のみの減額は取り扱うことができない。', //p20
                        '一度減額すると、元の保険金額に復旧（復帰・復元）することはできない。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料と税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '個人年金保険料控除 → 一般生命保険料控除', //p21
                        '一時払契約については、定額保険と同様に[[契約した年についてのみ控除の対象となる]]。', //p21
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品取引法"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '「金融商品販売事業者」の保護法制 → 利用者保護法制', //p34
                        '広告等の規制、損失補てん等の禁止なども販売ルールに含まれている。', //p34
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '100万円 → 200万円', //p35
                        'お客さまである法人と、[[実際に手続きをする担当者]]双方の取引時確認が必要。', //p35
                        '正しい',
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
                    questionTitle="変額保険と特別勘定"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '正しい',
                        '正しい',
                        '契約者は生命保険会社に対し、「特別勘定資産」の運用方法に関する指図は[[一切できないことになっている]]。', //p9
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
                    questionTitle="保険料の仕組み"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '特別勘定 → 一般勘定', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額個人年金保険の仕組み"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '正しい',
                        '年金支払開始日前の解約は可能だが、[[年金支払開始日以降の解約はできない]]。', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '復活時の変動保険金額がマイナスの場合には、[[基本保険金額が復活時の死亡・高度障害保険金額となる]]。', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険の販売資格"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '法務省 → 生命保険協会', //p27
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
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
                            questionTitle: '変額保険から定額保険への変更の効力発生日',
                            label: 'ア',
                            content: '日',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険の年金受取時の課税',
                            label: 'ア',
                            content: '所得税（雑所得）',
                        }, //19
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価の方法',
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
                    questionTitle="解約返戻金"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '合計額', //21
                        '保険料払込年月数', //22
                        '積立金額', //23
                        '最低保証', //24
                        '受け付けた日', //25
                    ]"
                    :labels="[
                        'イ', //21
                        'キ', //22
                        'ケ', //23
                        'オ', //24
                        'エ', //25
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
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特約による給付金',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険の商品内容',
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
                            questionTitle: '契約者貸付',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-11-08 確認済み
                            questionTitle: '定額延長（定期）保険への変更',
                            content: '計算上の延長期間が元契約の残存保険期間または残存保険料払込期間を超えるときは、[[実際に適用される延長期間を元契約の保険期間満了時または保険料払込期間満了時にとどめる]]。', //p20
                        }, //36
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険期間・保険料払込期間',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '高度障害保険金への課税',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定の資産運用',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-05 確認済み
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
