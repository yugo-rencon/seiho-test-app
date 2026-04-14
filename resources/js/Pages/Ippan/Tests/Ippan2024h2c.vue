<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年7月〜12月実施 フォームC";
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
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        '費差益',
                        '予定死亡率', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        '保険契約者',
                        '生命保険会社',
                        '複利', // 問8〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'エ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '生活',
                        '「金融サービスの提供及び利用環境の整備等に関する法律」',
                        '重要事項', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                        'オ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '個人情報',
                        '保険法', // 問14〜15
                    ]"
                    :labels="[
                        'イ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '死亡保障',
                        '追加', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '契約者',
                        '意向確認書面', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-①"
                    :contents="[
                        '一時所得',
                        '500万円',
                        '110万円', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-②"
                    :contents="[
                        '（被保険者）',
                        '非課税', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
                        'ウ', //25
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
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約取り扱いの手続き"
                    :contents="[
                        '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        '正しい',
                        '新しく発行しない → 新しく発行する', //p43
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :contents="[
                        '契約日または復活日からの経過期間に関わらず → 所定期間内', //p104
                        '正しい',
                        '正しい',
                        '削減して支払う → 支払わない', //p104
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
                    questionTitle="生命保険会社の仕組み"
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
                    questionTitle="保全・アフターサービスの重要性"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '', //p
                        }, //50
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '収支相当の法則 → 大数の法則', //p14
                        }, //55
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '保険料 → 給付金', //p16
                        }, //57
                        {
                            questionTitle: '契約の選択',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '契約の選択',
                            content: '', //p
                        }, //59
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //63
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '相続の法律',
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
                        { questionTitle: '生命保険の役割', label: 'ア', content: '明治' }, //73
                        { questionTitle: '生命保険の役割', label: 'イ', content: '自己' }, //74
                        { questionTitle: '生命保険の役割', label: 'イ', content: '平均余命' }, //75
                        { questionTitle: '生命保険の役割', label: 'ア', content: '弔慰金制度' }, //76
                        { questionTitle: '生命保険の役割', label: 'ア', content: '多様化' }, //77
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '一時払' }, //78
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '前納' }, //79
                        { questionTitle: '保険料の払い込み', label: 'ア', content: '生命保険会社' }, //80
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '契約者' }, //81
                        { questionTitle: '保険料の払い込み', label: 'ア', content: 'できます' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
