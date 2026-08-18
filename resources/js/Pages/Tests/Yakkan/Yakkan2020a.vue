<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2020年度 フォームA";
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
                    questionTitle="死亡保険金の免責事由-①"
                    :relatedProblems="['2020a1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '射倖',
                        '信義誠実の原則',
                        '保険契約者',
                        'は要しない',
                        'は含まれない', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'キ', //2
                        'カ', //3
                        'イ', //4
                        'ケ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の免責事由-②"
                    :relatedProblems="['2020a6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '緩和',
                        '残額',
                        '自殺',
                        '生命保険会社',
                        '責任準備金', // 問6〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'イ', //7
                        'キ', //8
                        'ク', //9
                        'カ', //10
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
                    questionTitle="保険約款の拘束力の根拠"
                    :relatedProblems="['2020a21']"
                    :contents="[
                        '正しい',
                        '慣習法説 → 白地慣習法説', //p7-8
                        '白地慣習法説 → 慣習法説', //p7-8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の解除"
                    :relatedProblems="['2020a22']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '商法は、[[保険者の責任開始前に限り]]保険契約者は保険契約の全部または一部を解除することができるとしていたが、保険法は実務の取扱いにかんがみ、保険契約者は、[[保険者の責任開始の前後を問わず]]生命保険契約等を解除できる旨を規定している。', //p62
                        '保険者が生命保険契約等の締結の時に、告知されなかった事実を知り、または[[過失によって知らなかったとき]]、生命保険契約等を解除できない。', //p62-63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の取消しまたは無効"
                    :relatedProblems="['2020a23', '2020b23', '2020c23']"
                    :contents="[
                        '正しい',
                        '保険法の規定に基づき → 保険法に規定はない', //p135
                        '保険料を保険契約者に返還しない → すぐに返還する', //p135
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
                    questionTitle="外国保険業者等"
                    :relatedProblems="['2020a25']"
                    :contents="[
                        '株式会社または相互会社でなければならない → 株式会社や相互会社でなくてもよく、個人でもよい', //p256
                        '10億円 → 2億円', //p257
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :relatedProblems="['2020a26']"
                    :contents="[
                        '購入する個人・法人 → 法人は含まれない', //p19
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度の取扱の制限"
                    :relatedProblems="['2020a27']"
                    :contents="[
                        '正しい',
                        '2年以下 → 1年以下', //p46
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
                    questionTitle="保険契約の復活"
                    :relatedProblems="['2020a29']"
                    :contents="[
                        '正しい',
                        '正しい',
                        'いずれか早い時 → いずれか遅い時', //p106
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の締結または保険募集に関する禁止行為"
                    :relatedProblems="['2020a30']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '営業職員による保険料の立替は「特別の利益の提供」に[[該当する]]', //p266
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '近代法における契約の原則',
                            relatedProblems: ['2020a31'],
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '保険約款と保険法との関係',
                            relatedProblems: ['2020a32'],
                            content: '保険者 → 保険契約者等',
                        }, //32 p9
                        {
                            questionTitle: '保険料不可分の原則',
                            relatedProblems: ['2020a33', '2020b33', '2020c33'],
                            content: '保険料不可分の原則を前提 → 前提としていない（未経過保険料は返還）',
                        }, //33 p44
                        {
                            questionTitle: '被保険者の同意',
                            relatedProblems: ['2020a34', '2020b34', '2020c34'],
                            content: '[[被保険者は契約当事者ではない]]ので生命保険契約等の[[成立要件ではなく、効力発生のための要件]]であり、保険金受取人の変更等においても同様である', //p51
                        }, //34
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '復旧（復帰・復元）',
                            relatedProblems: ['2020a35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '災害入院特約と疾病入院特約',
                            relatedProblems: ['2020a36'],
                            content: '4日不担保等の免責規定が適用される → 適用されない',
                        }, //36 p178
                        {
                            questionTitle: '定款の変更',
                            relatedProblems: ['2020a37'],
                            content: '株主総会または総代会の決議をもって → 金融庁長官の認可をもって',
                        }, //37 p222
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '組織変更',
                            relatedProblems: ['2020a38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: 'ソルベンシー・マージン比率',
                            relatedProblems: ['2020a39', '2020b39', '2020c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-18 確認済み
                            questionTitle: '乗合の禁止',
                            relatedProblems: ['2020a40', '2020c25'],
                            content: '生命保険会社が、他の生命保険会社の生命保険募集人に対し、保険募集の委託もしくは再委託することについても[[制限している]]。', //p263
                        }, //40
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険金額',
                            relatedProblems: ['2020a41'],
                            label: 'イ',
                            content: '被保険利益',
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
                            questionTitle: '生命保険契約等の効力',
                            relatedProblems: ['2020a43'],
                            label: 'イ',
                            content: '保険金受取人',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険料の未払込による失効',
                            relatedProblems: ['2020a44'],
                            label: 'ア',
                            content: '元利金',
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
                            questionTitle: '配当金',
                            relatedProblems: ['2020a46'],
                            label: 'ウ',
                            content: '衡平',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '傷害特約の給付',
                            relatedProblems: ['2020a47'],
                            label: 'エ',
                            content: '感染症',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険持株会社',
                            relatedProblems: ['2020a48', '2020c29'],
                            label: 'エ',
                            content: '総資産',
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
                            questionTitle: '保険募集の制限',
                            relatedProblems: ['2020a50'],
                            label: 'ウ',
                            content: '媒介',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2021c" next-route="yakkan2020b" />
        </section>
    </SeihoTestLayout>
</template>
