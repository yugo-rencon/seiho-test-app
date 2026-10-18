<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2026年度 フォームB";
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
                    questionTitle="生命保険の対象となる危険とその特色－①"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '商法',
                        '経済的',
                        '損害額',
                        '主観的',
                        '一定額', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'コ', //2
                        'イ', //3
                        'キ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の対象となる危険とその特色－②"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '傷害・疾病',
                        '潜在的',
                        '平準保険料',
                        '運用',
                        '養老保険', // 問6〜10
                    ]"
                    :labels="[
                        'イ', //6
                        'オ', //7
                        'キ', //8
                        'コ', //9
                        'ケ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行・信託・証券業界－①"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '長短分離',
                        '専門金融機関',
                        '直接金融',
                        '金融の国際化',
                        '持株会社', // 問11〜15
                    ]"
                    :labels="[
                        'エ', //11
                        'ア', //12
                        'キ', //13
                        'イ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行・信託・証券業界－②"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '販売チャネル',
                        '信用生命保険',
                        '個人年金',
                        '一時払終身保険',
                        '法令等遵守', // 問16〜20
                    ]"
                    :labels="[
                        'コ', //16
                        'イ', //17
                        'キ', //18
                        'エ', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="1970～80年代のアメリカのニューウェーブ商品の開発"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金の一般概念"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険事業の革新"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険（変額個人年金保険を含む）の資産運用における留意点"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="相互会社と株式会社"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の資産運用の今後のあり方"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '危険対策と保険',
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '生命保険契約の特殊性',
                            content: '',
                        }, //32
                        {
                            questionTitle: '死亡表',
                            content: '',
                        }, //33
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: 'アメリカの保険事業規制',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '資産運用体制の構築',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '生命保険業の監督の方法',
                            content: '',
                        }, //36
                        {
                            questionTitle: 'ＪＡ共済事業',
                            content: '',
                        }, //37
                        {
                            questionTitle: '簡易保険の歴史',
                            content: '',
                        }, //38
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '生保業界のネットワークシステム',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '医療保障商品',
                            content: '',
                        }, //40
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '保険者',
                            label: 'ア',
                            content: '10',
                        }, //41
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '保険契約の当事者',
                            label: 'ウ',
                            content: '保険料',
                        }, //42
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '事業費',
                            label: 'ウ',
                            content: '維持費',
                        }, //43
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '自主的な団結と相互扶助',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '生命保険契約者保護機構',
                            label: 'イ',
                            content: '90％',
                        }, //45
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '国民経済における生命保険',
                            label: 'ア',
                            content: '家計可処分所得',
                        }, //46
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '公的介護保険制度の概要',
                            label: 'エ',
                            content: '第２号被保険者',
                        }, //47
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '少額短期保険業',
                            label: 'イ',
                            content: '１年',
                        }, //48
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '社会構造の変化',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '民間生命保険会社のサービス',
                            label: 'エ',
                            content: '生命保険契約照会制度',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2026a" next-route="souron2026c" />
        </section>
    </SeihoTestLayout>
</template>
