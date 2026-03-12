<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2020年度 フォームB";
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
                    questionTitle=""
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問１〜５
                    ]"
                    :labels="[
                        '', //1
                        '', //2
                        '', //3
                        '', //4
                        '', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle=""
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問6〜10
                    ]"
                    :labels="[
                        '', //6
                        '', //7
                        '', //8
                        '', //9
                        '', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle=""
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問11〜15
                    ]"
                    :labels="[
                        '', //11
                        '', //12
                        '', //13
                        '', //14
                        '', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle=""
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問16〜20
                    ]"
                    :labels="[
                        '', //16
                        '', //17
                        '', //18
                        '', //19
                        '', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
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
                    :questionNumber="22"
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
                    :questionNumber="23"
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
                    :questionNumber="24"
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
                    :questionNumber="25"
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
                    :questionNumber="26"
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
                    :questionNumber="27"
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
                    :questionNumber="28"
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
                    :questionNumber="29"
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
                    :questionNumber="30"
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
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '', content: '' }, //31
                        { questionTitle: '', content: '' }, //32
                        { questionTitle: '', content: '' }, //33
                        { questionTitle: '', content: '' }, //34
                        { questionTitle: '', content: '' }, //35
                        { questionTitle: '', content: '' }, //36
                        { questionTitle: '', content: '' }, //37
                        { questionTitle: '', content: '' }, //38
                        { questionTitle: '', content: '' }, //39
                        { questionTitle: '', content: '' }, //40
                        // 問41〜50
                        { questionTitle: '', label: '', content: '' }, //41
                        { questionTitle: '', label: '', content: '' }, //42
                        { questionTitle: '', label: '', content: '' }, //43
                        { questionTitle: '', label: '', content: '' }, //44
                        { questionTitle: '', label: '', content: '' }, //45
                        { questionTitle: '', label: '', content: '' }, //46
                        { questionTitle: '', label: '', content: '' }, //47
                        { questionTitle: '', label: '', content: '' }, //48
                        { questionTitle: '', label: '', content: '' }, //49
                        { questionTitle: '', label: '', content: '' }, //50
                    ]"
                />
            </div>
            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2020a" next-route="zeihou2020c" />
        </section>
    </SeihoTestLayout>
</template>
