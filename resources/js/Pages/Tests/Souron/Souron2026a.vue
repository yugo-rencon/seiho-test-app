<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2026年度 フォームA";
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
                    questionTitle="資産運用の原則－①"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '安全',
                        '収益',
                        '予定利率',
                        '貯蓄性',
                        '公共', // 問１〜５
                    ]"
                    :labels="[
                        'ア', //1
                        'コ', //2
                        'カ', //3
                        'エ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用の原則－②"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        'リスクをとりつつハイリターン',
                        '緩く',
                        '単独',
                        '責任準備金',
                        '顧客の意向', // 問6〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'カ', //7
                        'ク', //8
                        'ウ', //9
                        'コ', //10
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
                    questionTitle="生命保険の対象となる危険とその特色"
                    :contents="[
                        // rev: 2026-10-17 確認済み
                        '正しい',
                        '生命保険の対象となる危険には、[[死亡危険]]と[[生存危険]]がある。死亡危険は、その発生に中間がなく、いわば0か1の事象であり、被保険者の死亡によって保険金が支払われ、契約が終了する。一方、生存保険では、一定期日までの生存を条件に保険金が支払われるため、生存しているだけで[[直ちに契約が終了するわけではない]]。', //p5
                        '保険業法 → 保険法', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおけるアームストロング調査"
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
                    questionTitle="公的年金制度"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険業監督の方法"
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
                    questionTitle="危険選択の必要性と意義"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="都市経済と相互扶助組織"
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
                    questionTitle="社会保険の特質"
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
                            // rev: 2026-10-17 確認済み
                            questionTitle: '保険料',
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '科学的な生命保険会社',
                            content: '',
                        }, //33
                        {
                            questionTitle: '生命保険に関する情報提供',
                            content: '',
                        }, //34
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '保有契約高と国民所得',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '公的介護保険の保険料',
                            content: '',
                        }, //36
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '早期是正措置制度',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '各都道府県民共済',
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
                            questionTitle: '保険の始期',
                            label: 'エ',
                            content: 'いずれか遅い日',
                        }, //42
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '剰余金の分配方法',
                            label: 'ウ',
                            content: '20％',
                        }, //43
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: 'イギリスにおける生命保険の発展',
                            label: 'イ',
                            content: '生命保険',
                        }, //44
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '保険の有用性',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '国民経済における生命保険',
                            label: 'イ',
                            content: '経済的保障',
                        }, //46
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '生活保障としての生命保険',
                            label: 'ア',
                            content: '緊急出費保障',
                        }, //47
                        {
                            // rev: 2026-10-17 確認済み
                            questionTitle: '共済事業',
                            label: 'ウ',
                            content: '損害共済',
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

            <TestNavigationButtons next-route="souron2026b" />
        </section>
    </SeihoTestLayout>
</template>
