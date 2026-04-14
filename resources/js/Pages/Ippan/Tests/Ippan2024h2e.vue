<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年7月〜12月実施 フォームE";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title" brand-name="生命保険一般課程 過去問解説">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="1〜2"
                    questionTitle="資産の運用-①"
                    :contents="[
                        '公共性',
                        '長期', // 問1〜2
                    ]"
                    :labels="[
                        'ウ', //1
                        'イ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '公社債',
                        '住宅ローン',
                        '投資', // 問3〜5
                    ]"
                    :labels="[
                        'オ', //3
                        'エ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="保険料の払い込み-①"
                    :contents="[
                        '前納',
                        '生命保険会社', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'エ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="保険料の払い込み-②"
                    :contents="[
                        '契約者',
                        '給与引去り',
                        '振替（振込）用紙', // 問8〜10
                    ]"
                    :labels="[
                        'ア', //8
                        'エ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '「契約概要」',
                        'いただく前に',
                        '適合性の原則', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'エ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '解約することなく、',
                        '保険期間',
                        '追加', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'エ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '転換時',
                        '契約者', // 問19〜20
                    ]"
                    :labels="[
                        'ア', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
                        '終身', // 問21〜22
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問23〜25
                    ]"
                    :labels="[
                        'ア', //23
                        'ウ', //24
                        'カ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :contents="[
                        '2',
                        '4000',
                        '1000',
                        '4',
                        '4000', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ク', //27
                        'オ', //28
                        'ウ', //29
                        'ク', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '年末の生存者数 → 年始の生存者数', //p15
                        '被保険者 → 保険金受取人', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約申込みの撤回ができる → 撤回はできない', //p47
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービスの重要性"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="38"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        // 問38〜67
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //41
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //47
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の役割',
                            content: '',
                        }, //50
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立前に行う → 契約成立前に行う場合と契約成立後に行う場合がある', //p85
                        }, //53
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '保険料は返還される → 返還されない', //p87
                        }, //56
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '',
                        }, //58
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '',
                        }, //59
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: 'ライフスタイル → ライフサイクル', //p133
                        }, //63
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //67
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="68"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        // 問68〜82
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //68
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //69
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //70
                        { questionTitle: '社会保障制度', label: 'イ', content: '報酬比例' }, //71
                        { questionTitle: '社会保障制度', label: 'イ', content: '強制加入' }, //72
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '費差益' }, //73
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '割安' }, //74
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '運用' }, //75
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '利差' }, //76
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '保険金を増額' }, //77
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '予測を超えて' }, //78
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //79
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //80
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //81
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
