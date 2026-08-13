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
                    :contents="[
                        '正しい',
                        '非営利保険 → 相互保険', //p5
                        '保険契約者に帰属 → 保険者に帰属', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の必要性と拘束力・監督"
                    :contents="[
                        '正しい',
                        '保険契約のすべてについて申込人の理解や納得のない場合でも、保険約款は[[拘束力あり]]とされている', //p7
                        '認可を受けない保険約款もその内容が強行規定や公益に反するものでない限り、保険契約者との間では[[有効である]]とするのが判例、通説である', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の解除"
                    :contents="[
                        '商法では、[[保険者の責任開始前に限り]]保険契約者は生命保険契約を解除できるとしていたが、保険法では、[[保険者の責任開始の前後を問わず]]保険契約者は、生命保険契約を解除できる旨を規定している', //p
                        '告知されなかった事実を知っていたとき、または過失によって知らなかったときは生命保険契約等を[[解除できない]]', //p62-63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約返戻金"
                    :contents="[
                        '重大事由による保険契約時の解除の場合にも[[支払われる]]', //p153-154
                        '保険金額などの生命保険契約等の要素について合意していれば保険契約は[[有効に成立する]]', //p154
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :contents="[
                        '損害保険と同様 → 損害保険にはみられない', //p261
                        '生命保険会社が行う「他の生命保険会社の生命保険募集人に対する保険募集の委託」についても[[制限している]]', //p261
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の当事者、その他の関係者"
                    :contents="[
                        '民法では、未成年者、成年被後見人、成年被保佐人、および成年被補助人の場合、[[所定の手続きを経ずに締結された契約については、後で取り消されることがある]]', //p37
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :contents="[
                        '保険者は、保険契約者に対して告知義務の履行を請求し強制し得る権利を[[有するものではなく]]、保険契約者が全く告知しない場合でも、保険者に対して損害を賠償する責任を[[負うものではない]]', //p48
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の取消しまたは無効"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険契約を[[取り消す]]ことができるものとし、すでに払い込まれた保険料を保険契約者に[[返還する]]', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険持株会社"
                    :contents="[
                        '正しい',
                        '保険持株会社は、子会社の経営管理を行うことならびにこれに附帯する業務のほか、他の業務を[[営むことができない]]', //p216
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の締結または保険募集に関する禁止行為"
                    :contents="[
                        '正しい',
                        '正しい',
                        '営業職員による保険料の立替も「特別の利益の提供」に[[該当する]]', //p266
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '保険期間',
                            content: '[[生存保険契約]]にあってはその始期は実際上問題とならず、[[終身保険契約]]にあっては保険期間の終期は不定である', //p40
                        }, //31
                        {
                            questionTitle: '被保険者の同意',
                            content: '[[被保険者は契約当事者ではない]]ので生命保険契約等の[[成立要件ではなく、効力発生のための要件]]であり、保険金受取人の変更等においても同様である', //p51
                        }, //32
                        {
                            questionTitle: '保険金受取人の死亡',
                            content: '保険契約者 → 相続人の全員', //p58
                        }, //33
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '保険給付の履行期',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '解除の通知',
                            content: '発信した時点 → 到達した時点', //p132
                        }, //35
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '特約の消滅',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '災害入院特約と疾病入院特約',
                            content: '災害入院給付金と疾病入院給付金を[[重複して支払うことはせず、災害入院給付金を支払う]]', //p178
                        }, //37
                        {
                            questionTitle: '定款の変更',
                            content: '株主総会または総代会の決議は、[[金融庁長官の認可を受けなければ、その効力を生じない]]', //p222
                        }, //38
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '責任準備金',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '外国保険会社',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）',
                            label: 'エ',
                            content: '民法',
                        }, //41
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '生命保険募集人',
                            label: 'ウ',
                            content: '代理',
                        }, //42
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '生命保険契約等の効力',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険契約上の保障責任',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険金の支払の時期',
                            label: 'ウ',
                            content: '5営業日',
                        }, //45
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険契約者の変更',
                            label: 'ア',
                            content: '承継人',
                        }, //46
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '疾病入院特約の給付',
                            label: 'イ',
                            content: '責任開始の日',
                        }, //47
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険業の監督の方法',
                            label: 'イ',
                            content: '実体的監督',
                        }, //48
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '委員会等設置会社',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-11 確認済み
                            questionTitle: '保険計理人',
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
