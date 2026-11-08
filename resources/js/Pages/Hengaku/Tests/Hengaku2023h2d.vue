<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2023年9月〜2024年3月実施 フォームD";
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
                        '年金支払開始日前月1日の積立金 → 年金支払開始日前日の積立金', //p15
                        '正しい',
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
                        '保険業法で定められた利率 → 生命保険会社所定の利率', //p18
                        '貸付を受けた場合と受けなかった場合とでは、[[支払われる死亡・高度障害保険金や満期保険金の金額が異なる]]。', //p19
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
                    questionTitle="払済保険・定額延長（定期）保険への変更"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '正しい',
                        '払済保険や定額延長(定期)保険へ変更後、変額保険に復旧(復帰・復元) することはできない。', //p20
                        '計算上の延長期間が元契約の残存保険期間または残存保険料払込期間を超えるときは、[[実際に適用される延長期間を元契約の保険期間満了時または保険料払込期間満了時にとどめる]]。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集上の禁止・留意事項"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '「断定的判断を示し、確実であると誤解させるおそれのある表示・説明」に[[該当する]]。', //p30
                        '正しい',
                        '「威迫、業務上の地位の不当利用」として[[法律で禁止されている]]。', //p32
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
                        '「契約締結前交付書面の交付義務」や「広告等の規制」も販売ルールに含まれている。', //p34
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
                        '定額保険は、運用実績が予定利率を下回った場合にも、[[給付は保証されており]]、運用リスクは生命保険会社が負担している。', //p7
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '変額保険には長期継続契約に割り当てられる特別配当はない。', //p12
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
                        '復活時の変動保険金額がマイナスの場合には、[[基本保険金額が復活時の死亡・高度障害保険金額となる]]。', //p18
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
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
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '正しい',
                        '解約請求日は本社（本店）または支社で解約請求書類を受け付けた日。 ', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売資格・販売資格者の役割"
                    :contents="[
                        '変額保険では、[[長期的]]な収益性を追求する資産運用を原則としている。そのため、募集にあたっては、短期の運用実績のみを強調することはお客さまの信用を著しく損なうことになる。', //p27
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービスの提供に関する法律（金融サービス提供法）"
                    :contents="[
                        // rev: 2026-11-08 確認済み
                        '契約の取消し等ができるのは、お客さまが誤認に気がついたときや困惑の状況から解放されたときなどから[[原則１年以内]]で、契約締結時から[[原則５年以内]]となる。', //p33
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
                            label: 'イ',
                            content: '責任開始期の属する月の翌月1日',
                        }, //17
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険料の払込猶予期間',
                            label: 'イ',
                            content: '9月1日から9月末日',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価',
                            label: 'ア',
                            content: '原価法',
                        }, //19
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            label: 'イ',
                            content: '職業',
                        }, //20
                    ]"
                />
                <!-- 問21〜25：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="5"
                    questionRange="21〜25"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さま意向の把握と正しい情報提供"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '契約締結前交付書面', //21
                        '意向確認書面', //22
                        '基本保険金額', //23
                        '資産運用', //24
                        '解約返戻金額', //25
                    ]"
                    :labels="[
                        'エ', //21
                        'ウ', //22
                        'ケ', //23
                        'キ', //24
                        'ク', //25
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
                            // rev: 2026-11-07 確認済み
                            questionTitle: '変額保険と変額個人年金保険の発売時期',
                            content: '1986年（昭和61年）に「変額保険」が、1999年（平成11年）には「変額個人年金保険」が発売されている。', //p1
                        }, //31
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特約保険料',
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '変額個人年金保険',
                            content: '',
                        }, //33 //p
                        {
                            questionTitle: '変額個人年金保険と特別勘定',
                            content: '',
                        }, //34 //p
                        {
                            questionTitle: 'クーリング・オフについての説明',
                            content: '',
                        }, //35 //p
                        {
                            // rev: 2026-11-08 確認済み
                            questionTitle: '前納',
                            content: '前納による保険料の払い込みも取り扱っている。', //p16
                        }, //36
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険料払込方法（回数）',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額個人年金保険への課税',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険料の払込方法（経路）',
                            content: '',
                        }, //39 //p
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
