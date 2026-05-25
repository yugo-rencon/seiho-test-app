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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
                        '正しい',
                        '相手方へ発信 → 相手方へ到達', //p132 不明
                        '保険法が「契約締結の時から[[5年]]を経過したとき」としているのに対し、保険約款では「[[責任開始の日]]から[[2年]]をこえて有効に継続したとき」などに[[緩和]]している生命保険会社が多い', //p131
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
                    questionTitle="基礎書類"
                    :contents="[
                        '財産利用方法書 → 保険料及び責任準備金の算出方法書', //p217
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人の登録"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
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
                    questionTitle="生命保険契約等の性質"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始期"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院特約の手術給付金の支払"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                        // 問31〜40
                        {
                            questionTitle: '生命保険契約等に対する法の適用',
                            content: '',
                        }, //31
                        {
                            questionTitle: '契約者保護のための法律',
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '保険金受取人の死亡',
                            content: '保険契約者 → 相続人の全員', //p58
                        }, //33
                        {
                            questionTitle: '保険給付の履行期',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '書面交付義務',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '特約の消滅',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '解約返戻金額',
                            content: '',
                        }, //37
                        {
                            questionTitle: '帳簿閲覧権',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '意向把握義務',
                            content: '',
                        }, //39
                        {
                            questionTitle: '指定紛争解決機関',
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        { questionTitle: '契約者保護', label: 'オ', content: '' }, //41
                        { questionTitle: '保険金額', label: 'イ', content: '被保険利益' }, //42
                        { questionTitle: '生命保険契約等の効力', label: 'オ', content: '' }, //43
                        { questionTitle: '生命保険契約等の解除の効力等', label: 'ア', content: '保険者' }, //44
                        { questionTitle: '保険契約の取消し', label: 'ア', content: '保険金受取人' }, //45
                        { questionTitle: '保険契約者の変更', label: 'ア', content: '承継人' }, //46
                        { questionTitle: '配当金', label: 'ウ', content: '衡平' }, //47
                        { questionTitle: '保険業の監督の方法', label: 'イ', content: '実体的監督' }, //48
                        { questionTitle: '外国保険業者の規制', label: 'ウ', content: '財産目録' }, //49
                        { questionTitle: '保険募集の制限', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="yakkan2025a" next-route="yakkan2025c" />
        </section>
    </SeihoTestLayout>
</template>
