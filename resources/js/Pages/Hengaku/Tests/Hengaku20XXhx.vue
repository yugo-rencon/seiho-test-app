<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

// ファイル名例: Hengaku2026h1a.vue（h1: 4〜8月、h2: 9〜3月）
// 複製後に実施期間・フォームを設定し、各問のタイトル・解答・解説を入力する。
// 確認が完了した問題だけに // rev: YYYY-MM-DD 確認済み を追加する。
const title = "変額保険";
const subject = "20XX年 フォームX";
</script>

<template>
    <SeihoTestLayout :title="title" site-scope="hengaku" noindex>
        <section class="bg-teal-50/30 text-gray-800 py-10">
            <Pagetitle :title="title" :description="subject" />

            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <!-- 問1〜8：3つの選択肢から正しいものを1つ選ぶ -->
                <QuestionTemp1
                    :questionNumber="1"
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
                    :questionNumber="2"
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
                    :questionNumber="3"
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
                    :questionNumber="4"
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
                    :questionNumber="5"
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
                    :questionNumber="6"
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
                    :questionNumber="7"
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
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle=""
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <!-- 問9〜16：3つの選択肢から誤っているものを1つ選ぶ -->
                <QuestionTemp1
                    :questionNumber="9"
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
                    :questionNumber="10"
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
                    :questionNumber="11"
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
                    :questionNumber="12"
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
                    :questionNumber="13"
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
                    :questionNumber="14"
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
                    :questionNumber="15"
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
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle=""
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <!-- 問17〜20：3つの語群から1つ選ぶ。label はア・イ・ウ、content は対応する語句。 -->
                <QuestionTemp2
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        {
                            questionTitle: '',
                            label: '',
                            content: '',
                        }, //17
                        {
                            questionTitle: '',
                            label: '',
                            content: '',
                        }, //18
                        {
                            questionTitle: '',
                            label: '',
                            content: '',
                        }, //19
                        {
                            questionTitle: '',
                            label: '',
                            content: '',
                        }, //20
                    ]"
                />
                <!-- 問21〜25：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="5"
                    questionRange="21〜25"
                    :title="title"
                    :subject="subject"
                    questionTitle=""
                    :contents="[
                        '', //21
                        '', //22
                        '', //23
                        '', //24
                        '', //25
                    ]"
                    :labels="[
                        '', //21
                        '', //22
                        '', //23
                        '', //24
                        '', //25
                    ]"
                />
                <!-- 問26〜30：語群穴埋め。questionNumber は5問単位のブロック番号。 -->
                <QuestionTemp3
                    :questionNumber="6"
                    questionRange="26〜30"
                    :title="title"
                    :subject="subject"
                    questionTitle=""
                    :contents="[
                        '', //26
                        '', //27
                        '', //28
                        '', //29
                        '', //30
                    ]"
                    :labels="[
                        '', //26
                        '', //27
                        '', //28
                        '', //29
                        '', //30
                    ]"
                />
                <!-- 問31〜40：正誤問題。正なら content に「正しい」、誤なら訂正・解説を入力。 -->
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        {
                            questionTitle: '',
                            content: '',
                        }, //31
                        {
                            questionTitle: '',
                            content: '',
                        }, //32
                        {
                            questionTitle: '',
                            content: '',
                        }, //33
                        {
                            questionTitle: '',
                            content: '',
                        }, //34
                        {
                            questionTitle: '',
                            content: '',
                        }, //35
                        {
                            questionTitle: '',
                            content: '',
                        }, //36
                        {
                            questionTitle: '',
                            content: '',
                        }, //37
                        {
                            questionTitle: '',
                            content: '',
                        }, //38
                        {
                            questionTitle: '',
                            content: '',
                        }, //39
                        {
                            questionTitle: '',
                            content: '',
                        }, //40
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="hengaku.index" />
        </section>
    </SeihoTestLayout>
</template>
