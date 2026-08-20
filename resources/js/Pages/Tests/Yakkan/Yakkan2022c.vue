<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2022年度 フォームC";
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
                    questionTitle="金融庁長官等による監督など-①"
                    :relatedProblems="['2022c1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '事業方法書',
                        '停止',
                        '財産の供託',
                        '免許の取消',
                        '会計参与', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'ケ', //2
                        'オ', //3
                        'コ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融庁長官等による監督など-②"
                    :relatedProblems="['2022c6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '基金',
                        '通常の予測',
                        '最低保証リスク',
                        '200%',
                        '早期是正措置', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ク', //7
                        'オ', //8
                        'イ', //9
                        'キ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野の保険-①"
                    :relatedProblems="['2022a11', '2022b11', '2022c11']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '一定額',
                        'てん補',
                        '傷害',
                        '人の状態',
                        '死亡', //問11〜15
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
                    :relatedProblems="['2022a16', '2022b16', '2022c16']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '不妊治療',
                        '老衰',
                        '介護',
                        '身体の',
                        '治療', //問16〜20
                    ]"
                    :labels="[
                        'ク', //16
                        'エ', //17
                        'カ', //18
                        'ケ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :relatedProblems="['2022b43', '2022c21']"
                    :contents="[
                        '事業者の一定行為に該当しない → 該当する', //p20
                        '無効とならない → 無効となる', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始期"
                    :relatedProblems="['2022c22']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '第1回保険料相当額の払込および告知の完了後に保険事故が発生し、保険事故等が発生していなければ承諾していたと考えられる場合は、[[生命保険会社は申込を承諾し、責任を負うのが通常である]]。', //p82
                        '保険約款では、「[[責任開始の日]]を契約日とする」旨の規定を設けている。', //p83
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付"
                    :relatedProblems="['2022a27', '2022c23']"
                    :contents="[
                        '正しい',
                        '保険期間中に1回だけ → 条件が満たされる限り何度でも', //p101
                        '自動振替貸付を行なったものとして → 行われなかったとして', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知受領と告知義務違反"
                    :relatedProblems="['2022c24']"
                    :contents="[
                        '主観的要件は不要 → 必要', //p128
                        '正しい',
                        '告知とはならない → 告知となる', //127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :relatedProblems="['2022a25', '2022b25', '2022c25']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '当該契約の保険金の[[額に応じて]]供託をしないことができる。', //p272
                        '正しい',
                        '保険仲立人は、顧客からの求めに応じて、保険契約締結の媒介に関する受取手数料、報酬等を[[明らかにしなければならない]]。', //p272
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約"
                    :relatedProblems="['2022c26']"
                    :contents="[
                        '正しい',
                        '解約の意思表示が到達し、解約返戻金が口座に着金したとき → 解約の意思表示が到達したとき', //p137
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :relatedProblems="['2022c27']"
                    :contents="[
                        '払戻積立金として積み立てる金額を含む → 金額を除く', //p242
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院特約の手術給付金の支払"
                    :relatedProblems="['2022a28', '2022b28', '2022c28']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '正しい',
                        '2種類以上の手術を同時に受けた場合は、[[最も給付倍率の高い1種類の手術をうけたものとみなして]]計算した額を支払う。', //p184
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :relatedProblems="['2022c29']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '正しい',
                        '生命保険会社が行う「他の生命保険会社の生命保険募集人に対する保険募集の委託」についても[[制限している]]。', //p263
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="基礎書類"
                    :relatedProblems="['2022a30', '2022a48', '2022b30', '2022c30']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '正しい',
                        '保険料の収受ならびに保険金および払い戻される保険料その他の返戻金の支払に関する事項は、[[事業方法書]]に規定されている。', //p219
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '拘束力',
                            relatedProblems: ['2022c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '生命保険契約等の性質',
                            relatedProblems: ['2022a42', '2022b26', '2022b42', '2022c32', '2022c42'],
                            content: '生命保険契約等は、保険者が保険事故または給付事由が発生した場合に保険給付を行う債務を負担し、保険契約者が保険料を支払う債務を負担する契約であり、しかも両者の債務は互いに対価関係にあるため[[双務契約]]である。',//p34
                        }, //32
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: 'クーリング・オフ制度',
                            relatedProblems: ['2022a43', '2022b22', '2022c33'],
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '書面交付義務',
                            relatedProblems: ['2022a34', '2022b34', '2022c34'],
                            content: '成立要件となっている → 成立要件ではない',
                        }, //34 p54
                        {
                            questionTitle: '復活の法的性格',
                            relatedProblems: ['2022a35', '2022b35', '2022c35'],
                            content: '新契約説 → 特別契約説',
                        }, //35 p105
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '特約の消滅',
                            relatedProblems: ['2022c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険業の兼営',
                            relatedProblems: ['2022c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '定款の変更',
                            relatedProblems: ['2022c38'],
                            content: '認可は必要ない → 認可は必要', //p222
                        }, //38
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '合併',
                            relatedProblems: ['2022c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '外国保険業者',
                            relatedProblems: ['2022a40', '2022b40', '2022c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '金融サービスの提供に関する法律',
                            relatedProblems: ['2022a41', '2022b41', '2022c41'],
                            label: 'ウ',
                            content: '元本欠損',
                        }, //41
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '生命保険契約等の性質',
                            relatedProblems: ['2022a42', '2022b26', '2022b42', '2022c32', '2022c42'],
                            label: 'エ',
                            content: '善意',
                        }, //42
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '遅延利息',
                            relatedProblems: ['2022c43'],
                            label: 'ア',
                            content: '保険約款',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の解除',
                            relatedProblems: ['2022c44'],
                            label: 'ウ',
                            content: '重大事由',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約者の変更',
                            relatedProblems: ['2022b36', '2022c45'],
                            label: 'イ',
                            content: '承継人',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '主務大臣への協議',
                            relatedProblems: ['2022c46'],
                            label: 'ア',
                            content: '保険契約者保護機構',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険会社の業務の範囲',
                            relatedProblems: ['2022c47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '相互会社の社員',
                            relatedProblems: ['2022c48'],
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '外国保険業者の規制',
                            relatedProblems: ['2022c49'],
                            label: 'ウ',
                            content: '財産目録',
                        }, //49
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険募集の制限',
                            relatedProblems: ['2022a50', '2022b50', '2022c50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2022b" next-route="yakkan2021a" />
        </section>
    </SeihoTestLayout>
</template>
