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
                    :contents="[
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
                    :contents="[
                        '3ヶ月',
                        '責任準備金',
                        '4ヶ月',
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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
                        '損害保険と同様の → 損害保険にはみられない', //p260-261
                        '制限はない → 制限されている', //p261
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等に対する法の適用"
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
                    :contents="[
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
                        // 問31〜40
                        { questionTitle: '約款と特約', content: '正しい' }, //31
                        { questionTitle: '遺言による保険金受取人の変更', content: '正しい' }, //32
                        { questionTitle: '保険料不可分の原則', content: '保険料不可分の原則を前提 → 前提としていない（未経過保険料は返還）' }, //33 p44
                        { questionTitle: '被保険者の同意', content: '契約当事者である → 契約当事者でない<br>成立要件 → 効力発生のための要件' }, //34 p51
                        { questionTitle: '解約返戻金額', content: '保険証券記載事項として掲げられている → 掲げられていない' }, //35 p154
                        { questionTitle: '特約の消滅', content: '主契約の解約返戻金によって → 主契約と特約の解約返戻金を合算して' }, //36 p176
                        { questionTitle: '株式会社', content: '筆頭株主 → 少数株主' }, //37 p226
                        { questionTitle: '事業年度', content: '1月1日から12月31日 → 4月1日から翌年3月31日' }, //38 p238
                        { questionTitle: 'ソルベンシー・マージン比率', content: '正しい' }, //39
                        { questionTitle: '外国保険業者の廃止', content: '本国において解放、保険業の廃止の時も金融庁長官の認可が必要 → 金融庁長官に届け出るだけで良い' }, //40 //p257
                        // 問41〜50
                        { questionTitle: '契約者保護', label: 'オ', content: '' }, //41
                        { questionTitle: '生命保険契約等の性質', label: 'オ', content: '' }, //42
                        { questionTitle: 'クーリング・オフ制度', label: 'ウ', content: '8日' }, //43
                        { questionTitle: '保険料払込免除', label: 'ウ', content: '1眼の視力' }, //44
                        { questionTitle: '保険契約の解除', label: 'イ', content: '保険法' }, //45
                        { questionTitle: '保険金の支払', label: 'エ', content: '時効' }, //46
                        { questionTitle: '疾病入院特約の給付', label: 'イ', content: '責任開始の日' }, //47
                        { questionTitle: '委員会等設置会社', label: 'エ', content: '会計監査人' }, //48
                        { questionTitle: '保険会社に特有な準備金', label: 'ア', content: '毎決算期' }, //49
                        { questionTitle: '供託', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2020b" />
        </section>
    </SeihoTestLayout>
</template>
