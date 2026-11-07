<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "変額保険";
const subject = "2024年4月〜8月実施 フォームB";
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
                        '正しい。終身型の変額保険では、変動保険金額がマイナスになっても、死亡・高度障害保険金には基本保険金額の最低保証がある。また、保険料払込満了後も保障は終身にわたって継続する。',
                        '変動保険金額がプラスの場合、その金額は死亡・高度障害保険金額にも反映される。図では[[死亡・高度障害保険金額が基本保険金額のまま示されている]]ため、誤り。',
                        '有期型の満期保険金額には最低保証がなく、特別勘定の運用実績によって増減する。したがって、図のように[[満期保険金額を基本保険金額と同額に固定して示す]]のは誤り。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
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
                    :questionNumber="4"
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
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料払込猶予期間"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険と税"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '個人年金保険料控除 → 一般生命保険料控除', //p21
                        '正しい',
                        '変額個人年金保険の積立（運用）期間中に発生する運用益については、[[変額保険と同様に積立（運用）期間中に課税されることはなく]]、解約時または年金受取開始時等まで課税が繰り延べられる。', //p22
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
                        // rev: 2026-11-07 確認済み
                        '100万円 → 200万円', //p35
                        'お客さまが過去に保険会社による取引時確認を受けたことがある場合、次回以降の取引では、[[保険証券やカード、パスワード等により取引時確認済みであることが確認できれば、再度の取引時確認は不要]]。', //p36
                        '正しい',
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
                    questionTitle="変額保険と特別勘定"
                    :contents="[
                        // rev: 2026-11-05 確認済み
                        '正しい',
                        '契約者は生命保険会社に対し、「特別勘定資産」の運用方法に関する指図は[[一切できないことになっている]]。', //p9
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
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
                    :questionNumber="12"
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
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :contents="[
                        // rev: 2026-11-07 確認済み
                        '正しい',
                        '貸付を受けた場合と受けなかった場合とでは、[[支払われる死亡・高度障害保険金や満期保険金の金額が異なる]]。', //p19
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
                    questionTitle="販売資格・販売資格者の役割"
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
                    questionTitle="消費者契約法"
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
                            questionTitle: '定額保険への変更',
                            label: 'イ',
                            content: '3カ月',
                        }, //17
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '変額保険から定額の自動延長（定期）保険への変更',
                            label: 'ア',
                            content: '解約返戻金',
                        }, //18
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定の資産運用',
                            label: 'ウ',
                            content: '長期的',
                        }, //19
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '特別勘定資産の評価の方法',
                            label: 'ウ',
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
                        // rev: 2026-11-05 確認済み
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
                            // rev: 2026-11-07 確認済み
                            questionTitle: '変額保険と変額個人年金保険の発売時期',
                            content: '1986年（昭和61年）に「変額保険」が、[[1999年（平成11年）には「変額個人年金保険」]]が発売されている。', //p1
                        }, //31
                        {
                            questionTitle: '付加保険料',
                            content: '',
                        }, //32 //p
                        {
                            questionTitle: 'クーリング・オフ',
                            content: '',
                        }, //33 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険料払込方法（回数）',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '特別条件付契約',
                            content: '',
                        }, //35 //p
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '保険期間・保険料払込期間',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '前納',
                            content: '',
                        }, //37 //p
                        {
                            // rev: 2026-11-07 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            content: '個人情報の取得・利用時の義務、[[個人情報を適切・安全に管理する義務]]、[[本人からの求めに対応する義務]]の大きく3つに分けられる。',//p37
                        }, //38
                        {
                            // rev: 2026-11-05 確認済み
                            questionTitle: '金融商品取引法',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-07 確認済み
                            questionTitle: '特定保険契約',
                            content: '変額保険、変額個人年金保険は保険業法上の「特定保険契約」にあたり「金融商品取引法」の一部が準用される。', //p34
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
