<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2020年度 フォームC";
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
                    questionTitle="株式会社と相互会社-①"
                    :relatedProblems="['2020c1']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '10億円',
                        '中間法人',
                        '基金拠出者',
                        '株主総会',
                        '総代会', // 問１〜５
                    ]"
                    :labels="[
                        'ア', //1
                        'キ', //2
                        'イ', //3
                        'ク', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社と相互会社-②"
                    :relatedProblems="['2020c6']"
                    :contents="[
                        // rev: 2026-08-16 確認済み
                        '3カ月',
                        '責任準備金',
                        '4カ月',
                        '100',
                        '1,000分の3', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'オ', //7
                        'イ', //8
                        'カ', //9
                        'ケ', //10
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
                    questionTitle="生命保険契約等の要素"
                    :relatedProblems="['2020c21']"
                    :contents="[
                        '正しい',
                        '一契約における被保険者は必ず1人であることを要する → 必ずしも1人であることを要しない', //p39
                        '損害保険契約と同様 → 異なり<br>保険価額等が問題となる → 問題とならない', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付（保険料の立替）"
                    :relatedProblems="['2020c22']"
                    :contents="[
                        '保険契約者の了解を得ることなく → 確認を行う', //p102
                        '返済させる旨の規定はない → 返済させる旨の規定がある', //p101
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
                    questionTitle="乗合の禁止"
                    :relatedProblems="['2020a40', '2020c25']"
                    :contents="[
                        // rev: 2026-08-18 確認済み
                        '生命保険募集人は1人で何社もの生命保険募集人となることができるわけではなく、いわゆる乗合の禁止という制限が設けられ、[[損害保険にはみられない]]厳しい制限になっている。', //p262
                        '生命保険会社が、他の生命保険会社の生命保険募集人に対し、保険募集の委託もしくは再委託することについても[[制限している]]。', //p263
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等に対する法の適用"
                    :relatedProblems="['2020b31', '2020c26']"
                    :contents="[
                        '正しい',
                        'どちらも営業的商行為である → 営利保険のみ営業的商行為', //p5-6
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始期"
                    :relatedProblems="['2020c27']"
                    :contents="[
                        '正しい',
                        '責任を負わないのが通常 → 承諾して責任を負うのが通常', //p82
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
                    questionTitle="保険持株会社"
                    :relatedProblems="['2020a48', '2020c29']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '正しい',
                        '正しい',
                        '財務大臣に届出しなければならない → 届出は不要', //p216
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="基礎書類"
                    :relatedProblems="['2020b48', '2020c30']"
                    :contents="[
                        '保険者としての義務の範囲を定める方法および履行の時期は、事業方法書ではなく普通保険約款の内容', //p218-219
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
                            // rev: 2026-08-14 確認済み
                            questionTitle: '約款と特約',
                            relatedProblems: ['2020c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '遺言による保険金受取人の変更',
                            relatedProblems: ['2020c32'],
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
                            questionTitle: '解約返戻金額',
                            relatedProblems: ['2020c35'],
                            content: '保険証券記載事項として掲げられている → 掲げられていない',
                        }, //35 p154
                        {
                            questionTitle: '特約の消滅',
                            relatedProblems: ['2020c36'],
                            content: '主契約の解約返戻金によって → 主契約と特約の解約返戻金を合算して',
                        }, //36 p176
                        {
                            questionTitle: '株式会社',
                            relatedProblems: ['2020c37'],
                            content: '筆頭株主 → 少数株主',
                        }, //37 p226
                        {
                            questionTitle: '事業年度',
                            relatedProblems: ['2020c38'],
                            content: '1月1日から12月31日 → 4月1日から翌年3月31日',
                        }, //38 p238
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: 'ソルベンシー・マージン比率',
                            relatedProblems: ['2020a39', '2020b39', '2020c39'],
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '外国保険業者の廃止',
                            relatedProblems: ['2020c40'],
                            content: '本国において解放、保険業の廃止の時も金融庁長官の認可が必要 → 金融庁長官に届け出るだけで良い',
                        }, //40 //p257
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '契約者保護',
                            relatedProblems: ['2020c41'],
                            label: 'オ',
                            content: '',
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
                            questionTitle: 'クーリング・オフ制度',
                            relatedProblems: ['2020c43'],
                            label: 'ウ',
                            content: '8日',
                        }, //43
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '保険料払込免除',
                            relatedProblems: ['2020c44'],
                            label: 'ウ',
                            content: '1眼の視力',
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
                            questionTitle: '保険金の支払',
                            relatedProblems: ['2020c46'],
                            label: 'エ',
                            content: '時効',
                        }, //46
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '疾病入院特約の給付',
                            relatedProblems: ['2020c47'],
                            label: 'イ',
                            content: '責任開始の日',
                        }, //47
                        {
                            // rev: 2026-08-16 確認済み
                            questionTitle: '委員会等設置会社',
                            relatedProblems: ['2020c48'],
                            label: 'エ',
                            content: '会計監査人',
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
                            questionTitle: '供託',
                            relatedProblems: ['2020c50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2020b" />
        </section>
    </SeihoTestLayout>
</template>
