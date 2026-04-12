<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年1月〜6月実施 フォームC";
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                    questionTitle=""
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
                            questionTitle: '',
                            content: '', //p
                        }, //38
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //39
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //49
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //50
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //53
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //54
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //55
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //59
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //60
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //63
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //64
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //65
                        {
                            questionTitle: '',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '',
                            content: '', //p
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
                        { questionTitle: '', label: '', content: '' }, //68
                        { questionTitle: '', label: '', content: '' }, //69
                        { questionTitle: '', label: '', content: '' }, //70
                        { questionTitle: '', label: '', content: '' }, //71
                        { questionTitle: '', label: '', content: '' }, //72
                        { questionTitle: '', label: '', content: '' }, //73
                        { questionTitle: '', label: '', content: '' }, //74
                        { questionTitle: '', label: '', content: '' }, //75
                        { questionTitle: '', label: '', content: '' }, //76
                        { questionTitle: '', label: '', content: '' }, //77
                        { questionTitle: '', label: '', content: '' }, //78
                        { questionTitle: '', label: '', content: '' }, //79
                        { questionTitle: '', label: '', content: '' }, //80
                        { questionTitle: '', label: '', content: '' }, //81
                        { questionTitle: '', label: '', content: '' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
