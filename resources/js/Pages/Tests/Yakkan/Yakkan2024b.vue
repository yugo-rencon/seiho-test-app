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
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '正しい',
                        '生命保険契約等においては、だれを被保険者とするかを定めることを要するのはもちろんであるが、[[一契約における被保険者は必ずしも1人であることを要しないし、また必ずしも固定的であることを要しない]]。', //p39
                        '生命保険契約等においては、損害保険契約と[[異なり]]、被保険利益の存否やその価額としての保険価額等が[[問題とならない]]。したがって、超過保険、一部保険、重複保険等の問題を[[生ずることはない]]。', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '保険契約者からあらかじめ貸付を受けない旨の申出があった場合には、自動振替貸付は行わない。', //p101
                        '正しい',
                        '保険契約者は貸付金の元利金をいつでも返済することができるが、保険約款では、保険契約の消滅時には生命保険会社が支払う保険金などの支払金からその元利金を差し引くことによって返済させる旨を[[規定する]]のが一般的である。', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業免許の定義"
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
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '正しい',
                        '生命保険募集人とは、保険業法において、「生命保険会社のために[[保険契約の締結の代理または媒介を行う者]]」と定められている。', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="災害入院給付金の支払"
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
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '保険料の返還',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険者の免責',
                            content: '保険金受取人が被保険者を故意に死亡させたとき、[[被保険者を故意に死亡させた保険金受取人以外の保険金受取人に対する保険給付の責任を負う]]。', //p60
                        }, //33
                        {
                            // rev: 2026-08-21 確認済み
                            questionTitle: '保険給付請求権の譲渡等',
                            content: '保険契約者の同意 → 被保険者の同意', //p58
                        }, //34
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '告知義務違反による解除',
                            content: '6ヶ月以内 → 1ヶ月以内', //p62
                        }, //35
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '受取人の変更',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '災害入院特約と疾病入院特約',
                            content: '４日不担保等の免責規定が[[適用されない]]。', //p179
                        }, //37
                        {
                            // rev: 2026-08-20 確認済み
                            questionTitle: '定款の変更',
                            content: '認可は不要 → 認可は必要', //p222
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '免許取消',
                            content: '金融庁長官 → 内閣総理大臣', //p201
                        }, //39
                        {
                            // rev: 2026-08-13 確認済み
                            questionTitle: '意向把握義務',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '契約の取り消し',
                            label: 'ア',
                            content: '民法',
                        }, //41
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険料払込の猶予期間',
                            label: 'ウ',
                            content: '2024年（令和6年）12月31日',
                        }, //42
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '生命保険契約等の解除の効力等',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '解除・免責時の支払',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '解除の通知',
                            label: 'イ',
                            content: '解除の原因を知った時',
                        }, //45
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '傷害特約の給付',
                            label: 'エ',
                            content: '感染症',
                        }, //46
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '年齢の計算、誤りの処理',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '監督体制',
                            label: 'ア',
                            content: '保険契約者保護機構',
                        }, //48
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険会社に特有な準備金',
                            label: 'ア',
                            content: '毎決算期',
                        }, //49
                        {
                            // rev: 2026-08-14 確認済み
                            questionTitle: '保険募集の制限',
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
