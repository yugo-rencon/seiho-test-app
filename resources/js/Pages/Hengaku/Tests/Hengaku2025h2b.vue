<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2025年9月〜2026年3月実施 フォームB";
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
                        '積立金を運用する特別勘定については、運用対象の異なる複数の特別勘定の中から契約者が選択するタイプが一般的だが、[[特別勘定が1つだけのタイプもある]]。', //p14
                        '正しい',
                        '「スイッチング」は、[[所定の回数までは手数料が無料]]となっているのが一般的。', //p14
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
                    questionTitle="契約者貸付"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '既払込保険料総額 → 解約返戻金', //p18
                        '正しい',
                        '貸付を受けた場合と受けなかった場合とでは、[[支払われる死亡・高度障害保険金や満期保険金の金額が異なる]]。', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
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
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売資格と販売資格者の役割"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '法務省 → 生命保険協会', //p27
                        '変額保険では、[[長期的な収益性]]を追求する資産運用を原則としており、お客さまには運用実績についても[[長期的]]に判断していただくことが重要。', //p27
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
                        '正しい',
                        '正しい',
                        '定期保険特約および災害・疾病関係特約などにもとづいて支払われる保険金や給付金の金額は[[一定であり、変動しない]]。', //p11
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
                        '１年 → 3カ月', //p18
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
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '「特別の利益の提供」に[[該当する]]。', //p30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '金融商品販売業者は、金融商品を販売するための勧誘方針を策定し、[[公表しなければならない]]。', //p34
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
                        'お客さまである法人と、[[実際に手続きをする担当者]]双方の取引時確認が必要。', //p35
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
                            questionTitle: '保険料払込猶予期間',
                            label: 'イ',
                            content: '11月1日から11月末日',
                        }, //18
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '特別勘定資産における有価証券以外の資産の評価方法',
                            label: 'ウ',
                            content: '原価法',
                        }, //19
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '金融商品取引法',
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
                    questionTitle="変額個人年金保険の特徴と仕組み"
                    :contents="[
                        // rev: 2026-11-04 確認済み
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
                            // rev: 2026-11-08 確認済み
                            questionTitle: '変額保険の発売時期',
                            content: '1986年（昭和61年）に「変額保険」が、1999年（平成11年）には「変額個人年金保険」が発売されている。', //p1
                        }, //31
                        {
                            // rev: 2026-11-08 確認済み
                            questionTitle: '解約返戻金',
                            content: '解約返戻金の額は、契約年齢、保険期間、経過年数、運用実績などにより異なるが、[[一般に最低保証はない]]ため、払い込まれた保険料に比べ少額となることがある。', //p19
                        }, //32
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: 'クーリング・オフ',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '変額保険から定額保険への変更',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '減額',
                            content: '',
                        }, //35 //p
                        {
                            // rev: 2026-11-04 確認済み
                            questionTitle: '保険料の払込方法（回数）の変更',
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
                            // rev: 2026-11-07 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            content: '個人情報の取得・利用時の義務、[[個人情報を適切・安全に管理する義務]]、[[本人からの求めに対応する義務]]の大きく3つに分けられる。', //p37
                        }, //39
                        {
                            questionTitle: '保険法',
                            content: '',
                        }, //40 //p
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="hengaku2025h2a" home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
