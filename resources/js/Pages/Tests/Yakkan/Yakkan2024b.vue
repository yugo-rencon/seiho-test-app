<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2024年度 フォームB";
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
                        // rev: 2026-08-14 確認済み
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
                        // rev: 2026-08-14 確認済み
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
                    questionTitle="株式会社と相互会社-①"
                    :relatedProblems="['2024b11']"
                    :contents="[
                        // rev: 2026-08-14 確認済み
                        '含む',
                        '10億円',
                        '中間法人',
                        '基金拠出者',
                        '総代会', // 問11〜15
                    ]"
                    :labels="[
                        'コ', //11
                        'ア', //12
                        'ク', //13
                        'オ', //14
                        'キ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社と相互会社-②"
                    :relatedProblems="['2024b16']"
                    :contents="[
                        // rev: 2026-08-14 確認済み
                        '責任準備金',
                        '4ヶ月',
                        '100',
                        '1,000分の3',
                        '損失てん補準備金', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'ア', //17
                        'ウ', //18
                        'カ', //19
                        'コ', //20
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
                        '正しい',
                        '契約の自由というのは契約の締結にいたるまでの間における自由であり、[[ひとたび契約を締結したからにはその契約の拘束から免れる自由はない]]ということに注意が必要である。', //p3
                        '両当事者間で「申込」と「承諾」があり、その意思表示が内容的に一致していること（いわゆる合意があること）も要件として必要である。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の要素"
                    :relatedProblems="['2024b22']"
                    :contents="[
                        '正しい',
                        '必ず1人であることを要する → 必ずしも1人であることを要しない', //p39
                        '損害保険契約と同様 → 異なり<br>保険価額等が問題となる → 問題とならない<br>超過保険・一部保険・重複保険等の問題を生ずる → 生じない', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付"
                    :relatedProblems="['2024b23']"
                    :contents="[
                        '申出を行うことはできない → 申出を行うことができる', //p101
                        '正しい',
                        '返済させる旨の規定はない → 返済させる旨の規定がある', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業免許の定義"
                    :relatedProblems="['2024b24']"
                    :contents="[
                        // rev: 2026-08-20 確認済み
                        '1996年（平成8年）の保険業法改正により、生命保険業免許と損害保険業免許とが定義された（少額短期保険業免許は含まれない）。', //p204
                        'それぞれの保険に係る再保険の[[引受ができる]]。', //p203
                        '正しい',
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
                    questionTitle="生命保険募集人"
                    :relatedProblems="['2024b27']"
                    :contents="[
                        '正しい',
                        '保険契約の締結の媒介または請負を行う者 → 保険契約の締結の代理または媒介を行う者', //p47
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
                    questionTitle="保険契約の解約"
                    :relatedProblems="['2024b29']"
                    :contents="[
                        // rev: 2026-08-21 確認済み
                        '正しい',
                        '過去に遡って → 将来に向かって', //p136
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国保険業者"
                    :relatedProblems="['2024b30', '2024c40']"
                    :contents="[
                        // rev: 2026-08-21 確認済み
                        '外国保険業者の場合は、[[株式会社や相互会社でなくてもよく]]、個人でもよい。', //p257
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
                            // rev: 2026-08-13 確認済み
                            questionTitle: '監督',
                            relatedProblems: ['2024b31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険料の返還',
                            relatedProblems: ['2024a32', '2024b32', '2024c32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '保険者の免責',
                            relatedProblems: ['2024b33'],
                            content: 'すべての保険金受取人 → 故意に死亡させた保険金受取人',
                        }, //33 p60
                        {
                            // rev: 2026-08-21 確認済み
                            questionTitle: '保険給付請求権の譲渡等',
                            relatedProblems: ['2024a34', '2024b34', '2024c34'],
                            content: '保険契約者の同意 → 被保険者の同意', //p58
                        }, //34
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '告知義務違反による解除',
                            relatedProblems: ['2024b35'],
                            content: '6ヶ月以内 → 1ヶ月以内', //p62
                        }, //35
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '受取人の変更',
                            relatedProblems: ['2024b36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '災害入院特約と疾病入院特約',
                            relatedProblems: ['2024a37', '2024b37', '2024c37'],
                            content: '４日不担保等の免責規定が[[適用されない]]。', //p179
                        }, //37
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '定款の変更',
                            relatedProblems: ['2024b38'],
                            content: '認可は不要 → 認可は必要', //p222
                        }, //38
                        {
                            questionTitle: '免許取消',
                            relatedProblems: ['2024b39'],
                            content: '金融庁長官 → 内閣総理大臣',
                        }, //39 p201
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '意向把握義務',
                            relatedProblems: ['2024b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '契約の取り消し',
                            relatedProblems: ['2024b41'],
                            label: 'ア',
                            content: '民法',
                        }, //41
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険料払込の猶予期間',
                            relatedProblems: ['2024b42'],
                            label: 'ウ',
                            content: '2024年（令和6年）12月31日',
                        }, //42
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '生命保険契約等の解除の効力等',
                            relatedProblems: ['2024a43', '2024b43', '2024c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '解除・免責時の支払',
                            relatedProblems: ['2024b44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '解除の通知',
                            relatedProblems: ['2024b45'],
                            label: 'イ',
                            content: '解除の原因を知った時',
                        }, //45
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '傷害特約の給付',
                            relatedProblems: ['2024b46'],
                            label: 'エ',
                            content: '感染症',
                        }, //46
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '年齢の計算、誤りの処理',
                            relatedProblems: ['2024a47', '2024b47', '2024c47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '監督体制',
                            relatedProblems: ['2024b48'],
                            label: 'ア',
                            content: '保険契約者保護機構',
                        }, //48
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険会社に特有な準備金',
                            relatedProblems: ['2024b49'],
                            label: 'ア',
                            content: '毎決算期',
                        }, //49
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険募集の制限',
                            relatedProblems: ['2024a50', '2024b50', '2024c50'],
                            label: 'ウ',
                            content: '媒介',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2024a" next-route="yakkan2024c" />
        </section>
    </SeihoTestLayout>
</template>
