<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームB";
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
                        '', //1
                        '', //2
                        '', //3
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
                        '', //4
                        '', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の仕組み-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問6〜8
                    ]"
                    :labels="[
                        '', //6
                        '', //7
                        '', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の仕組み-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問9〜10
                    ]"
                    :labels="[
                        '', //9
                        '', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険会社の仕組み-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問11〜13
                    ]"
                    :labels="[
                        '', //11
                        '', //12
                        '', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険会社の仕組み-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問14〜15
                    ]"
                    :labels="[
                        '', //14
                        '', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '', // 問16〜18
                    ]"
                    :labels="[
                        '', //16
                        '', //17
                        '', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '', // 問19〜20
                    ]"
                    :labels="[
                        '', //19
                        '', //20
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
                        '', //21
                        '', //22
                        '', //23
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
                        '', //24
                        '', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問26〜30
                    ]"
                    :labels="[
                        '', //26
                        '', //27
                        '', //28
                        '', //29
                        '', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //38
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //39
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //40
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //41
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //44
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //45
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //46
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //47
                        {
                            questionTitle: '保険料の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //48
                        {
                            questionTitle: '保険料の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //49
                        {
                            questionTitle: '保険料の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //50
                        {
                            questionTitle: '保険料の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //51
                        {
                            questionTitle: '保険料の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //52
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                            relatedProblems: [''],
                        }, //53
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                            relatedProblems: [''],
                        }, //54
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                            relatedProblems: [''],
                        }, //55
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                            relatedProblems: [''],
                        }, //56
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                            relatedProblems: [''],
                        }, //57
                        {
                            questionTitle: '契約の選択',
                            content: '',
                            relatedProblems: [''],
                        }, //58
                        {
                            questionTitle: '契約の選択',
                            content: '',
                            relatedProblems: [''],
                        }, //59
                        {
                            questionTitle: '契約の選択',
                            content: '',
                            relatedProblems: [''],
                        }, //60
                        {
                            questionTitle: '契約の選択',
                            content: '',
                            relatedProblems: [''],
                        }, //61
                        {
                            questionTitle: '契約の選択',
                            content: '',
                            relatedProblems: [''],
                        }, //62
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                            relatedProblems: [''],
                        }, //63
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                            relatedProblems: [''],
                        }, //64
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                            relatedProblems: [''],
                        }, //65
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                            relatedProblems: [''],
                        }, //66
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                            relatedProblems: [''],
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
                        { questionTitle: '契約申込み時の実務', label: '', content: '' }, //68
                        { questionTitle: '契約申込み時の実務', label: '', content: '' }, //69
                        { questionTitle: '契約申込み時の実務', label: '', content: '' }, //70
                        { questionTitle: '契約申込み時の実務', label: '', content: '' }, //71
                        { questionTitle: '契約申込み時の実務', label: '', content: '' }, //72
                        { questionTitle: '正しい告知の取り扱い', label: '', content: '' }, //73
                        { questionTitle: '正しい告知の取り扱い', label: '', content: '' }, //74
                        { questionTitle: '正しい告知の取り扱い', label: '', content: '' }, //75
                        { questionTitle: '正しい告知の取り扱い', label: '', content: '' }, //76
                        { questionTitle: '正しい告知の取り扱い', label: '', content: '' }, //77
                        { questionTitle: '相続の法律', label: '', content: '' }, //78
                        { questionTitle: '相続の法律', label: '', content: '' }, //79
                        { questionTitle: '相続の法律', label: '', content: '' }, //80
                        { questionTitle: '相続の法律', label: '', content: '' }, //81
                        { questionTitle: '相続の法律', label: '', content: '' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
