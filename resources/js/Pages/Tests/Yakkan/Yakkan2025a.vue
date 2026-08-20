<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2025年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効および自動振替貸付の取扱い-①"
                    :relatedProblems="['2025a1', '2025b1', '2025c1']"
                    :contents="[
                        // rev: 2026-08-11 確認済み
                        '猶予期間',
                        'オーバーローン',
                        '契約者貸付金',
                        '解約返戻金',
                        '生命保険会社所定', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'イ', //2
                        'エ', //3
                        'ウ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効および自動振替貸付の取扱い-②"
                    :relatedProblems="['2025a6', '2025b6', '2025c6']"
                    :contents="[
                        // rev: 2026-08-11 確認済み
                        '解約返戻金',
                        '復活',
                        '3年',
                        '延滞保険料',
                        '遅い時', // 問6〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ケ', //7
                        'カ', //8
                        'ア', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野の保険-①"
                    :relatedProblems="['2025a11']"
                    :contents="[
                        // rev: 2026-08-11 確認済み
                        '一定額',
                        'てん補',
                        '傷害',
                        '人の状態',
                        '死亡', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'ク', //12
                        'オ', //13
                        'コ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野の保険-②"
                    :relatedProblems="['2025a16']"
                    :contents="[
                        // rev: 2026-08-11 確認済み
                        '不妊治療',
                        '老衰',
                        '介護',
                        '身体の',
                        '治療', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'コ', //17
                        'ア', //18
                        'イ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の区分"
                    :relatedProblems="['2025a21']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '正しい',
                        '非営利保険 → 相互保険', //p5
                        '保険業による収支の差額は[[保険者]]に帰属する。', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の必要性と拘束力・監督"
                    :relatedProblems="['2025a22', '2025b22', '2025c22']"
                    :contents="[
                        // rev: 2026-08-17 確認済み
                        '正しい',
                        '保険契約のすべてについて申込人の理解や納得のない場合でも、保険約款は[[拘束力あり]]とされている。', //p7
                        '認可を受けない保険約款もその内容が強行規定や公益に反するものでない限り、保険契約者との間では[[有効である]]とするのが判例、通説である。', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の解除"
                    :relatedProblems="['2025a23']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '商法は、[[保険者の責任開始前に限り]]保険契約者は保険契約の全部または一部を解除することができるとしていたが、保険法は実務の取扱いにかんがみ、保険契約者は、[[保険者の責任開始の前後を問わず]]生命保険契約等を解除できる旨を規定している。', //p62
                        '保険者が生命保険契約等の締結の時に、告知されなかった事実を知り、または[[過失によって知らなかったとき]]、生命保険契約等を解除できない。', //p62-63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約返戻金"
                    :relatedProblems="['2025a24']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '重大事由による保険契約の解除の場合にも[[支払われる]]。', //p154
                        '保険契約締結当時に保険契約者と生命保険会社との間であらかじめ解約返戻金額について合意がなくとも、保険金額などの生命保険契約等の要素について合意していれば[[保険契約は有効に成立する]]。', //p154
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :relatedProblems="['2025a25', '2025c40']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '生命保険募集人は1人で何社もの生命保険募集人となることができるわけではなく、いわゆる乗合の禁止という制限が設けられ、[[損害保険にはみられない]]厳しい制限になっている。', //p262
                        '生命保険会社が行う「他の生命保険会社の生命保険募集人に対する保険募集の委託」についても[[制限している]]。', //p263
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の当事者、その他の関係者"
                    :relatedProblems="['2025a26', '2025b26', '2025c26']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '民法では、未成年者、成年被後見人、成年被保佐人、および成年被補助人の場合、[[所定の手続きを経ずに締結された契約については、後で取り消されることがある]]。', //p37
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="['2025a27']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '保険者は保険契約者に対してこの告知義務の履行を請求し強制し得る権利を[[有するものではなく]]、また保険契約者がまったく告知をしない場合でも、別に保険者に対して[[損害を賠償する責任を負うものではない]]。', //p48-49
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の取消しまたは無効"
                    :relatedProblems="['2025a28']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '正しい',
                        '保険約款では、「保険契約申込書に記載された被保険者の年齢に誤りがあった場合に、契約日および誤りの発見された日における年齢が会社の定める範囲外のときは、[[保険契約を取り消す]]ことができるものとし、[[すでに払い込まれた保険料を保険契約者に返還する]]」旨の規定をおいている。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険持株会社"
                    :relatedProblems="['2025a29']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '保険持株会社は、子会社の経営管理を行うことならびにこれに附帯する業務のほか、[[他の業務を営むことができない]]。', //p216
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の締結または保険募集に関する禁止行為"
                    :relatedProblems="['2025a30', '2025b30', '2025c30']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '正しい',
                        '営業職員による保険料の立替も「特別の利益の提供」に[[該当する]]。', //p268
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '保険期間',
                            relatedProblems: ['2025a31'],
                            content: '[[生存保険契約]]にあってはその始期は実際上問題とならず、[[終身保険契約]]にあっては保険期間の終期は不定である。', //p40
                        }, //31
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '被保険者の同意',
                            relatedProblems: ['2025a32'],
                            content: '被保険者の同意は、[[被保険者は契約当事者ではない]]ので生命保険契約等の[[成立要件ではなく、効力発生のための要件]]であり、保険金受取人の変更等においても同様である。', //p51
                        }, //32
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '保険金受取人の死亡',
                            relatedProblems: ['2025a33', '2025b33', '2025c33'],
                            content: '保険金受取人が保険事故または給付事由の発生前に死亡したときは、[[その相続人の全員]]が保険金受取人となる', //p58
                        }, //33
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '保険給付の履行期',
                            relatedProblems: ['2025a34', '2025b34', '2025c34'],
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '解除の通知',
                            relatedProblems: ['2025a35'],
                            content: '発信した時点 → 到達した時点', //p132
                        }, //35
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '特約の消滅',
                            relatedProblems: ['2025a36', '2025b36', '2025c36'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '災害入院特約と疾病入院特約',
                            relatedProblems: ['2025a37'],
                            content: '災害入院給付金と疾病入院給付金を[[重複して支払うことはせず、災害入院給付金を支払う]]', //p178
                        }, //37
                        {
                            questionTitle: '定款の変更',
                            relatedProblems: ['2025a38'],
                            content: '株主総会または総代会の決議は、[[金融庁長官の認可を受けなければ、その効力を生じない]]', //p222
                        }, //38
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '責任準備金',
                            relatedProblems: ['2025a39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '外国保険会社',
                            relatedProblems: ['2025a40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）',
                            relatedProblems: ['2025a41'],
                            label: 'エ',
                            content: '民法',
                        }, //41
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '生命保険募集人',
                            relatedProblems: ['2025a42', '2025c35'],
                            label: 'ウ',
                            content: '代理',
                        }, //42
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '生命保険契約等の効力',
                            relatedProblems: ['2025a43', '2025b43', '2025c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険契約上の保障責任',
                            relatedProblems: ['2025a44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険金の支払の時期',
                            relatedProblems: ['2025a45'],
                            label: 'ウ',
                            content: '5営業日',
                        }, //45
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険契約者の変更',
                            relatedProblems: ['2025a46', '2025b46', '2025c46'],
                            label: 'ア',
                            content: '承継人',
                        }, //46
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '疾病入院特約の給付',
                            relatedProblems: ['2025a47'],
                            label: 'イ',
                            content: '責任開始の日',
                        }, //47
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険業の監督の方法',
                            relatedProblems: ['2025a48', '2025b48', '2025c48'],
                            label: 'イ',
                            content: '実体的監督',
                        }, //48
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '委員会等設置会社',
                            relatedProblems: ['2025a49'],
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険計理人',
                            relatedProblems: ['2025a50'],
                            label: 'ウ',
                            content: '7年',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="yakkan2025b" />
        </section>
    </SeihoTestLayout>
</template>
