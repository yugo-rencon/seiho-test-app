<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2022年度 フォームA";
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
                    questionTitle="第三者のためにする生命保険契約等"
                    :relatedProblems="['2022a1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '自己',
                        '民法',
                        '受益の意思表示',
                        '自己固有の権利',
                        'するのではない', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'エ', //3
                        'ウ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者の同意"
                    :relatedProblems="['2022a6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '賭博的行為',
                        '死亡保険契約',
                        '傷害疾病定額保険契約',
                        '効力発生',
                        '保険会社向けの総合的な監督指針', //問６〜10
                    ]"
                    :labels="[
                        'ク', //6
                        'キ', //7
                        'カ', //8
                        'エ', //9
                        'ケ', //10
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
                    questionTitle="保険約款"
                    :relatedProblems="['2022a21']"
                    :contents="[
                        '金融庁長官 → 内閣総理大臣', //p11
                        '無効 → 有効', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の当事者、その他の関係者"
                    :relatedProblems="['2022a22']"
                    :contents="[
                        // rev: 2026-08-19 確認済み
                        '民法では、未成年者、成年被後見人、成年被保佐人、および成年被補助人の場合、[[所定の手続きを経ずに締結された契約については、後で取り消されることがある]]。', //p37
                        '生命保険契約等においては、だれを被保険者とするかを定めることを要するのはもちろんであるが、[[一契約における被保険者は必ずしも1人であることを要しないし、また必ずしも固定的であることを要しない]]。', //p39
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払"
                    :relatedProblems="['2022a23']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '保険約款で、契約者配当金を保険契約者に支払う旨[[規定する]]のが一般的になっている。', //p159-160
                        '消滅時特別配当 → 社員配当平衡積立金', //p159
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の経理"
                    :relatedProblems="['2022a24']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '生命保険会社においては責任準備金などの計算に比較的長期間を要するため[[年2回以上の決算を行うことは難しい]]。', //p239
                        '財務局 → 金融庁長官', //p239
                        '正しい',
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
                    questionTitle="保険約款の拘束力の根拠"
                    :relatedProblems="['2022a26']"
                    :contents="[
                        // rev: 2026-08-21 確認済み
                        '正しい',
                        '正しい',
                        '白地慣習法説は慣習法説ともいう → 白地慣習法説と慣習法説は別（問題文は慣習法説の説明）', //p7-8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付"
                    :relatedProblems="['2022a27', '2022c23']"
                    :contents="[
                        '貸付を受けない旨の申出があった場合でも貸付を行う → 貸付を行わない', //p101
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
                    questionTitle="保険持株会社"
                    :relatedProblems="['2022a29']"
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
                            // rev: 2026-08-20 確認済み
                            questionTitle: '生命保険契約等に対する法の適用',
                            relatedProblems: ['2022a31'],
                            content: '営利保険 → 相互保険', //p5
                        }, //31
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '契約者保護のための法律',
                            relatedProblems: ['2022a32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '個人情報取扱事業者の義務',
                            relatedProblems: ['2022a33'],
                            content: '倫理委員会 → 個人情報保護委員会',
                        }, //33 p27
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
                            questionTitle: '災害入院特約と疾病入院特約',
                            relatedProblems: ['2022a36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '再保険',
                            relatedProblems: ['2022a37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '株式会社と相互会社の比較',
                            relatedProblems: ['2022a38'],
                            content: '一般社団法人 → 中間法人',
                        }, //38 p225
                        {
                            questionTitle: '免許取消',
                            relatedProblems: ['2022a39'],
                            content: '金融庁長官 → 内閣総理大臣',
                        }, //39 p201
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
                            questionTitle: 'クーリング・オフ制度',
                            relatedProblems: ['2022a43', '2022b22', '2022c33'],
                            label: 'イ',
                            content: '申込日',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '高度障害保険金',
                            relatedProblems: ['2022a44'],
                            label: 'ア',
                            content: '両眼の視力',
                        }, //44
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金の支払場所',
                            relatedProblems: ['2022a45'],
                            label: 'エ',
                            content: '取立債務',
                        }, //45
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険契約の取消し',
                            relatedProblems: ['2022a46'],
                            label: 'ア',
                            content: '保険金受取人',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険業法の目的',
                            relatedProblems: ['2022a47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '基礎書類',
                            relatedProblems: ['2022a30', '2022a48', '2022b30', '2022c30'],
                            label: 'ウ',
                            content: '定款',
                        }, //48
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '相互会社の剰余金',
                            relatedProblems: ['2022a49'],
                            label: 'イ',
                            content: '1,000',
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

            <TestNavigationButtons previous-route="yakkan2023c" next-route="yakkan2022b" />
        </section>
    </SeihoTestLayout>
</template>
