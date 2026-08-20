<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2020年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度-①"
                    :relatedProblems="['2020b1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '承諾',
                        '商事特別法',
                        '申込日',
                        '8日',
                        '第1回保険料相当額', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'キ', //2
                        'ケ', //3
                        'ウ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度-②"
                    :relatedProblems="['2020b6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '1年',
                        '申込者等が自ら指定した',
                        '医師の診査',
                        '債務',
                        '更改、更新', // 問6〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'キ', //7
                        'ア', //8
                        'ク', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の目的と監督の必要性・方法-①"
                    :relatedProblems="['2020a11', '2020b11', '2020c11']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '保険監督法',
                        '保険会社法',
                        '公共性',
                        '保険契約者',
                        '目的規定', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'イ', //12
                        'カ', //13
                        'ク', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の目的と監督の必要性・方法-②"
                    :relatedProblems="['2020a16', '2020b16', '2020c16']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '保険約款',
                        '保険金支払能力',
                        '金融政策',
                        '実体的監督主義',
                        '免許', // 問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'ク', //17
                        'オ', //18
                        'ア', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の性質"
                    :relatedProblems="['2020a42', '2020b21', '2020b42', '2020c42']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '保険契約は保険契約者と保険者との合意によってのみ成立し、第1回保険料相当額の払込などは保険者の責任開始の要件であるにすぎず、[[要物契約ではない]]と解される。', //p35
                        '生命保険契約等は、保険法上一定の方式を要するとはしていないので、生命保険契約等は[[不要式契約]]であり、口頭による申込と口頭による承諾があれば成立する。', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払"
                    :relatedProblems="['2020b22']"
                    :contents="[
                        '正しい',
                        '規定していないのが一般的 → 規定するのが一般的', //p159-160
                        '契約日から起算して２年 → 1年', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の取消しまたは無効"
                    :relatedProblems="['2020a23', '2020b23', '2020c23']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '[[保険法には規定がない]]ものの、一部の生命保険会社において保険約款に規定されている。', //p135
                        'すでに払い込まれた保険料を保険契約者に[[返還する]]」旨の規定をおいている。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業免許の定義"
                    :relatedProblems="['2020a24', '2020b24', '2020c24']"
                    :contents="[
                        '少額短期保険業免許は含まれない', //p204
                        '再保険の引受はできない → 再保険の引受が可能', //p203-204
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :relatedProblems="['2020b25']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '相互会社は、[[他の相互会社または保険株式会社と合併をすることができる]]。', //p252
                        '正しい',
                        '保険法 → 会社法', //p252
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の必要性と拘束力・監督"
                    :relatedProblems="['2020b26']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '正しい',
                        '保険契約のすべてについて申込人の理解や納得のない場合でも、保険約款は[[拘束力あり]]とされている。', //p7
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="['2020b27']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '保険者は保険契約者に対してこの告知義務の履行を請求し強制し得る権利を[[有するものではなく]]、また保険契約者がまったく告知をしない場合でも、別に保険者に対して[[損害を賠償する責任を負うものではない]]。', //p48-49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約"
                    :relatedProblems="['2020a28', '2020b28', '2020c28']"
                    :contents="[
                        '正しい',
                        '解約の意思表示が到達し、解約返戻金の支払いが完了したとき → 解約の意思表示が到達したとき', //p137
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="災害入院給付金の支払"
                    :relatedProblems="['2020b29']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '特約の保険期間中の入院とみなされない → みなされる', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人および保険仲立人"
                    :relatedProblems="['2020b30']"
                    :contents="[
                        '5年 → 3年', //p260
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '生命保険契約等に対する法の適用',
                            relatedProblems: ['2020b31', '2020c26'],
                            content: '営利保険の保険者は株式会社であることから、営利保険の引受については、いわゆる営業的商行為として、商法の商行為一般に関する規定の適用を受けるが、相互会社が行う保険は相互保険であるとしても、保険業法により、商法が準用され、商行為一般の規定の準用を受ける。',//p5-6
                        }, //31
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険期間',
                            relatedProblems: ['2020b32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '保険料不可分の原則',
                            relatedProblems: ['2020a33', '2020b33', '2020c33'],
                            content: '保険料不可分の原則を前提 → 前提としていない（未経過保険料は返還）',
                        }, //33 p44
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '被保険者の同意',
                            relatedProblems: ['2020a34', '2020b34', '2020c34'],
                            content: '被保険者の同意は、[[被保険者は契約当事者ではない]]ので生命保険契約等の[[成立要件ではなく、効力発生のための要件]]であり、保険金受取人の変更等においても同様である。', //p51
                        }, //34
                        {
                            questionTitle: '保険契約者の住所変更',
                            relatedProblems: ['2020b35'],
                            content: '一般原則を適用する性質を有する → 性質を有するものではない',
                        }, //35 p109
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '契約者貸付',
                            relatedProblems: ['2020b36'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '定款',
                            relatedProblems: ['2020b37'],
                            content: '相互会社 ↔︎ 株式会社',
                        }, //37 p218
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険計理人',
                            relatedProblems: ['2020b38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: 'ソルベンシー・マージン比率',
                            relatedProblems: ['2020a39', '2020b39', '2020c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '指定紛争解決機関',
                            relatedProblems: ['2020b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '金融商品の販売等に関する法律',
                            relatedProblems: ['2020b41'],
                            label: 'ウ',
                            content: '勧誘',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の性質',
                            relatedProblems: ['2020a42', '2020b21', '2020b42', '2020c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険募集人',
                            relatedProblems: ['2020b43'],
                            label: 'ウ',
                            content: '代理',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '遅延利息の支払',
                            relatedProblems: ['2020b44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の解除',
                            relatedProblems: ['2020a45', '2020b45', '2020c45'],
                            label: 'イ',
                            content: '保険法',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '解除の通知',
                            relatedProblems: ['2020b46'],
                            label: 'イ',
                            content: '解除の原因を知った時',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険会社の業務の範囲',
                            relatedProblems: ['2020b47'],
                            label: 'ア',
                            content: '法定他業',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '基礎書類',
                            relatedProblems: ['2020b48', '2020c30'],
                            label: 'エ',
                            content: '定款',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険会社に特有な準備金',
                            relatedProblems: ['2020a49', '2020b49', '2020c49'],
                            label: 'ア',
                            content: '毎決算期',
                        }, //49
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '株主の権利行使に関する基準日の特例',
                            relatedProblems: ['2020b50'],
                            label: 'イ',
                            content: '3カ月',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2020a" next-route="yakkan2020c" />
        </section>
    </SeihoTestLayout>
</template>
