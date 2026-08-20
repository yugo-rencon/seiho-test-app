<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2025年度 フォームB";
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
                        // rev: 2026-08-12 確認済み
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
                        // rev: 2026-08-12 確認済み
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
                    questionTitle="クーリング・オフ制度-①"
                    :relatedProblems="['2025b11']"
                    :contents="[
                        // rev: 2026-08-12 確認済み
                        '承諾',
                        '商事特別法',
                        '申込日',
                        '8日',
                        '第1回保険料相当額', // 問11〜15
                    ]"
                    :labels="[
                        'エ', //11
                        'ウ', //12
                        'ケ', //13
                        'コ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度-②"
                    :relatedProblems="['2025b16']"
                    :contents="[
                        // rev: 2026-08-12 確認済み
                        '1年',
                        '保険業者',
                        '医師の診査',
                        '債務',
                        '更改、更新', // 問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'ケ', //17
                        'ア', //18
                        'カ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による解除"
                    :relatedProblems="['2025b21']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '[[保険法、保険約款とも]]、生命保険会社は、解除の原因を知った時から１ヵ月以内に解除しなければ解除権を行使できない。', //p132
                        '保険法が「契約締結の時から[[5年]]を経過したとき」としているのに対し、保険約款では「[[責任開始の日]]から[[2年]]をこえて有効に継続したとき」などに緩和している生命保険会社が多い。', //p131
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
                    questionTitle="基礎書類"
                    :relatedProblems="['2025b23']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '財産利用方法書 → 保険料及び責任準備金の算出方法書', //p218
                        '正しい',
                        '保険料や責任準備金の計算の方法などは、[[保険料及び責任準備金の算出方法書]]に規定されている。', //p220-221
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :relatedProblems="['2025b24']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '相互会社は、[[他の相互会社または保険株式会社と合併をすることができる]]。', //p252
                        '正しい',
                        '保険法 → 会社法', //p252
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人の登録"
                    :relatedProblems="['2025b25']"
                    :contents="[
                        '労働基準監督署 → 財務局・福岡財務支局', //p259
                        '正しい',
                        '12ヶ月 → 6ヶ月', //p260
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
                    questionTitle="生命保険契約等の性質"
                    :relatedProblems="['2025b27', '2025c41']"
                    :contents="[
                        '正しい',
                        '生命保険契約等は、保険法上一定の方式を要するとはしていないので[[不要式契約である]]', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始期"
                    :relatedProblems="['2025b28', '2025c37']"
                    :contents="[
                        '正しい',
                        '第1回保険料相当額の払込および告知の完了後に保険事故が発生し、保険事故等が発生していなければ承諾していたと考えられる場合は、[[生命保険会社は申込を承諾し、責任を負うのが通常である]]', //p82
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院特約の手術給付金の支払"
                    :relatedProblems="['2025b29']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '2種類以上の手術を同時に受けた場合は、[[最も給付倍率の高い1種類の手術をうけたものとみなして]]計算した額を支払う', //p184
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
                            questionTitle: '生命保険契約等に対する法の適用',
                            relatedProblems: ['2025b31'],
                            content: '営利保険 → 相互保険', //p5
                        }, //31
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '契約者保護のための法律',
                            relatedProblems: ['2025b32'],
                            content: '正しい',
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
                            // rev: 2026-08-10 確認済み
                            questionTitle: '書面交付義務',
                            relatedProblems: ['2025b35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '特約の消滅',
                            relatedProblems: ['2025a36', '2025b36', '2025c36'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '解約返戻金額',
                            relatedProblems: ['2025b37'],
                            content: '生命保険契約等の保険証券記載事項として「解約返戻金額」は[[掲げられていない]]', //p154
                        }, //37
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '帳簿閲覧権',
                            relatedProblems: ['2025b38'],
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '意向把握義務',
                            relatedProblems: ['2025b39'],
                            content: '設計書 → 意向確認書面', //p263
                        }, //39
                        {
                            // rev: 2026-08-10 確認済み
                            questionTitle: '指定紛争解決機関',
                            relatedProblems: ['2025b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '契約者保護',
                            relatedProblems: ['2025b41'],
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '保険金額',
                            relatedProblems: ['2025b42'],
                            label: 'イ',
                            content: '被保険利益',
                        }, //42
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '生命保険契約等の効力',
                            relatedProblems: ['2025a43', '2025b43', '2025c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '生命保険契約等の解除の効力等',
                            relatedProblems: ['2025b44'],
                            label: 'ア',
                            content: '保険者',
                        }, //44
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '保険契約の取消し',
                            relatedProblems: ['2025b45'],
                            label: 'ア',
                            content: '保険金受取人',
                        }, //45
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '保険契約者の変更',
                            relatedProblems: ['2025a46', '2025b46', '2025c46'],
                            label: 'ア',
                            content: '承継人',
                        }, //46
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '配当金',
                            relatedProblems: ['2025b47'],
                            label: 'ウ',
                            content: '衡平',
                        }, //47
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '保険業の監督の方法',
                            relatedProblems: ['2025a48', '2025b48', '2025c48'],
                            label: 'イ',
                            content: '実体的監督',
                        }, //48
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '外国保険業者の規制',
                            relatedProblems: ['2025b49'],
                            label: 'ウ',
                            content: '財産目録',
                        }, //49
                        {
                            // rev: 2026-08-12 確認済み
                            questionTitle: '保険募集の制限',
                            relatedProblems: ['2025b50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="yakkan2025a" next-route="yakkan2025c" />
        </section>
    </SeihoTestLayout>
</template>
