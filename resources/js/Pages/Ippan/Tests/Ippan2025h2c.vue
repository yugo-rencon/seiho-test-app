<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームC";
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
                    questionRange="1〜3"
                    questionTitle="保障の見直し-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="保障の見直し-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問4〜5
                    ]"
                    :labels="[
                        'イ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="契約の選択-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'エ', //7
                        'ア', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="契約の選択-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問9〜10
                    ]"
                    :labels="[
                        'ウ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="募集時の正しい説明-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                        'ア', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="募集時の正しい説明-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問14〜15
                    ]"
                    :labels="[
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="正しい告知の取り扱い-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                        'イ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="正しい告知の取り扱い-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問19〜20
                    ]"
                    :labels="[
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="隣接業界-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問21〜23
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
                    questionTitle="隣接業界-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問24〜25
                    ]"
                    :labels="[
                        'ア', //24
                        'ウ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'ケ', //27
                        'カ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '正しい', //イ
                        '', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '正しい', //イ
                        '', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '', //イ
                        '正しい', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //38 誤
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //39 誤
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //40 正
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //41 正
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //42 誤
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //43 誤
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //44 誤
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //45 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //46 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //47 正
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //48 正
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //49 正
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //50 誤
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //51 誤
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //52 正
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //53 正
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //54 正
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '',
                            relatedProblems: [''],
                        }, //55 誤
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //56 正
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //57 正
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '',
                            relatedProblems: [''],
                        }, //58 誤
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '',
                            relatedProblems: [''],
                        }, //59 誤
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //60 正
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //61 正
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //62 正
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //63 正
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //64 正
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                            relatedProblems: [''],
                        }, //65 誤
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                            relatedProblems: [''],
                        }, //66 誤
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                            relatedProblems: [''],
                        }, //67 誤
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="68"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        // 問68〜82
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '' }, //68
                        { questionTitle: '契約申込み時の実務', label: 'イ', content: '' }, //69
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '' }, //70
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '' }, //71
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '' }, //72
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '' }, //73
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '' }, //74
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '' }, //75
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '' }, //76
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '' }, //77
                        { questionTitle: '企業向け商品', label: 'ア', content: '' }, //78
                        { questionTitle: '企業向け商品', label: 'イ', content: '' }, //79
                        { questionTitle: '企業向け商品', label: 'ア', content: '' }, //80
                        { questionTitle: '企業向け商品', label: 'ア', content: '' }, //81
                        { questionTitle: '企業向け商品', label: 'イ', content: '' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
