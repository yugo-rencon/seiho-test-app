<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2024年度 フォームC";
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
                    :relatedProblems="['2024a1', '2024b1', '2024c1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '承諾',
                        '商事特別法',
                        '申込日',
                        '8日',
                        '第1回保険料相当額', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'オ', //2
                        'コ', //3
                        'ア', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度-②"
                    :relatedProblems="['2024a6', '2024b6', '2024c6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '1年',
                        '申込者等が自ら指定した',
                        '医師の診査',
                        '債務',
                        '更改、更新', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'コ', //7
                        'ウ', //8
                        'ク', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生損保兼営の禁止と子会社による生損保兼営-①"
                    :relatedProblems="['2024c11']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '免許',
                        '確実性',
                        '負担する危険',
                        '統計上',
                        '大損害', // 問11〜15
                    ]"
                    :labels="[
                        'コ', //11
                        'イ', //12
                        'ケ', //13
                        'カ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生損保兼営の禁止と子会社による生損保兼営-②"
                    :relatedProblems="['2024c16']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '議決権',
                        '50%',
                        '認可',
                        '特定関係者',
                        '弊害防止措置', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'イ', //17
                        'ク', //18
                        'キ', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等に対する法の適用"
                    :relatedProblems="['2024a21', '2024b21', '2024c21', '2024c31']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '保険業の開始に際しては、[[普通保険約款を内閣総理大臣宛の免許申請書に添付しなければならない]]。', //p11
                        '認可を受けない保険約款もその内容が強行規定や公益に反するものでない限り、保険契約者との間では[[有効]]であるとするのが判例、通説である。', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三者のためにする生命保険契約等"
                    :relatedProblems="['2024c22']"
                    :contents="[
                        '保険金受取人の代理人として契約する → 代理人として契約するのではない', //p55
                        '正しい',
                        '受益の意思表示が必要 → 受益の意思表示は必要としない', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の取消しまたは無効"
                    :relatedProblems="['2024c23']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '生命保険会社が立証する必要はない → 立証しなければならない', //p134
                        '[[保険法には規定がない]]ものの、一部の生命保険会社において保険約款に規定されている。', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :relatedProblems="['2024c24']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '相互会社同士の合併の場合は、合併後の会社も[[相互会社]]であることを要する。', //p252
                        '保険法 → 会社法', //p252
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の締結または保険募集に関する禁止行為"
                    :relatedProblems="['2024a25', '2024b25', '2024c25']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '将来における配当に関して断定的判断を示すこと等についても[[禁止の対象となる]]。', //p269
                        '基礎書類に基づく行為である場合は[[禁止されていない]]。', //p268
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の拘束力の根拠"
                    :relatedProblems="['2024a26', '2024b26', '2024c26']"
                    :contents="[
                        // rev: 2026-08-21 確認済み
                        '意思推定説 → 法規範説', //p7
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="['2024c27']"
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
                    questionTitle="災害入院給付金の支払"
                    :relatedProblems="['2024a28', '2024b28', '2024c28']"
                    :contents="[
                        // rev: 2026-08-21 確認済み
                        '正しい',
                        '正しい',
                        '180日 → 120日', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険持株会社"
                    :relatedProblems="['2024c29']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '正しい',
                        '金融庁長官の承認を受けなければならない → 承認は不要', //p216
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :relatedProblems="['2024a40', '2024c30']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '生命保険募集人は1人で何社もの生命保険募集人となることができるわけではなく、いわゆる乗合の禁止という制限が設けられ、[[損害保険にはみられない]]厳しい制限になっている。', //p262
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
                            relatedProblems: ['2024a21', '2024b21', '2024c21', '2024c31'],
                            content: '営利保険の保険者は株式会社であることから、営利保険の引受については、いわゆる営業的商行為として、商法の商行為一般に関する規定の適用を受けるが、相互会社が行う保険は相互保険であるとしても、保険業法により、商法が準用され、商行為一般の規定の準用を受ける。', //p5-6
                        }, //31
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険料の返還',
                            relatedProblems: ['2024a32', '2024b32', '2024c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '個人情報取扱事業者の義務',
                            relatedProblems: ['2024c33'],
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '保険給付請求権の譲渡等',
                            relatedProblems: ['2024a34', '2024b34', '2024c34'],
                            content: '保険契約者の同意 → 被保険者の同意',
                        }, //34 p58
                        {
                            questionTitle: '保険金受取人の変更',
                            relatedProblems: ['2024c35'],
                            content: '被保険者の同意は不要 → 被保険者の同意が必要',
                        }, //35 p57
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '被保険者による解除請求',
                            relatedProblems: ['2024c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '災害入院特約と疾病入院特約',
                            relatedProblems: ['2024a37', '2024b37', '2024c37'],
                            content: '４日不担保等の免責規定が[[適用されない]]。', //p179
                        }, //37
                        {
                            questionTitle: '保険契約者への貸付',
                            relatedProblems: ['2024c38'],
                            content: '翌日からオーバーローンによる失効 → 通知額を期限までに払わないとき失効',
                        }, //38 p157
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '監督の方法',
                            relatedProblems: ['2024c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-21 確認済み
                            questionTitle: '外国保険業者',
                            relatedProblems: ['2024b30', '2024c40'],
                            content: '法人であることが条件 → 法人でなくてもよく、個人でもよい', //p257
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の性質',
                            relatedProblems: ['2024a22', '2024c41'],
                            label: 'ア',
                            content: '射倖',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '契約上の保障責任',
                            relatedProblems: ['2024c42'],
                            label: 'エ',
                            content: '契約日',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の解除の効力等',
                            relatedProblems: ['2024a43', '2024b43', '2024c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険料払込免除',
                            relatedProblems: ['2024c44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生死不明の場合の取扱',
                            relatedProblems: ['2024c45'],
                            label: 'イ',
                            content: '生命保険会社',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金受取人の死亡',
                            relatedProblems: ['2024c46'],
                            label: 'エ',
                            content: '当該保険金受取人の相続人全員',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '年齢の計算、誤りの処理',
                            relatedProblems: ['2024a47', '2024b47', '2024c47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '基礎書類',
                            relatedProblems: ['2024a29', '2024c48'],
                            label: 'エ',
                            content: '定款',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '株主の権利行使の基準日',
                            relatedProblems: ['2024c49'],
                            label: 'ウ',
                            content: '4ヶ月',
                        }, //49
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険募集の制限',
                            relatedProblems: ['2024a50', '2024b50', '2024c50'],
                            label: 'ウ',
                            content: '媒介',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2024b" next-route="yakkan2023a" />
        </section>
    </SeihoTestLayout>
</template>
