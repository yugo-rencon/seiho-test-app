<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2026年度 フォームC";
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
                    questionTitle="団体保険および団体年金保険の主な保険種類－①"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '１年',
                        '損金',
                        '総合福祉',
                        'ヒューマン',
                        '供与', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'ウ', //3
                        'オ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険および団体年金保険の主な保険種類－②"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '受給権',
                        '拠出型',
                        '報酬比例部分',
                        '第１号',
                        '運用の指図', // 問6〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'イ', //7
                        'ア', //8
                        'エ', //9
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
                    questionTitle="危険の選択"
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
                    questionTitle="アメリカにおける不没収法の制定"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済と保険"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
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
                    questionTitle="生命保険契約の特殊性"
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
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :contents="[
                        // rev: 2026-10-18 確認済み
                        '正しい',
                        '付加年金制度 → 確定拠出年金（企業型）', //p127
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
                            questionTitle: '傷害・疾病危険',
                            content: '',
                        }, //32
                        {
                            questionTitle: '保険金受取人',
                            content: '',
                        }, //33
                        {
                            questionTitle: 'イギリスにおける生命保険の発展',
                            content: '',
                        }, //34
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '世帯加入状況',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                        }, //36
                        {
                            questionTitle: '消費者契約法',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: 'ＪＡ共済（全国共済農業協同組合連合会）',
                            content: '正しい',
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
                            questionTitle: '死亡表',
                            label: 'ウ',
                            content: '終局表',
                        }, //42
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '利差配当',
                            label: 'イ',
                            content: '経過年数',
                        }, //43
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '近代的生命保険の導入',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '消費者へのＰＲ活動等',
                            label: 'ア',
                            content: '生命保険相談所',
                        }, //45
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '生命保険会社の資金の性格',
                            label: 'エ',
                            content: '責任準備金',
                        }, //46
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '生保資産運用の基本原則',
                            label: 'ウ',
                            content: '公共性',
                        }, //47
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            label: 'イ',
                            content: '実体的監督主義',
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

            <TestNavigationButtons previous-route="souron2026b" next-route="souron2025a" />
        </section>
    </SeihoTestLayout>
</template>
