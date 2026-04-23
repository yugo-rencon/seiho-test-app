<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2025年度 フォームC";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の主な保険種類-①"
                    :contents="[
                        '無診査',
                        '1年',
                        '損金',
                        '総合福祉',
                        'ヒューマン', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'オ', //2
                        'イ', //3
                        'ケ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の主な保険種類-②"
                    :contents="[
                        '減少',
                        '退職後',
                        '一時払い',
                        '就業不能',
                        '健康保険法', // 問6〜10
                    ]"
                    :labels="[
                        'エ', //6
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
                    questionTitle="社会構造の変化-①"
                    :contents="[
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', // 問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'ウ', //12
                        'キ', //13
                        'カ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-②"
                    :contents="[
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '出生数',
                        '労働力率', // 問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'ケ', //17
                        'イ', //18
                        'オ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の対象となる危険の種類"
                    :contents="[
                        '正しい',
                        '変動幅を拡大 → 縮小<br>平均変動率 → 平均経験率', //p4
                        '保険料と危険度の積 → 保険金額と危険度の積', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :contents="[
                        'デリバティブ商品 → ニューウェーブ商品', //p69
                        '正しい',
                        '金融規制改革法（ドット・フランク法） → グラム・リーチ・ブライリー法', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :contents="[
                        '18歳以上65歳未満 → 20歳以上60歳未満', //p127
                        '付加年金制度 → 確定拠出年金（企業型）', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="JA共済"
                    :contents="[
                        '消費生活協同組合法 → 農業協同組合法', //p165
                        '損害系の共済商品は取り扱っていない → 自動車共済・建物更正共済といった損害系の共済商品を取り扱っている', //p166
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="民間生命保険会社のサービスの今後のあり方"
                    :contents="[
                        '正しい',
                        '人間ドッグ紹介、健康相談サービス、介護事業者の紹介等を行なっている', //p193
                        '契約内容登録制度 → 生命保険契約照会制度', //p194
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :contents="[
                        '正しい',
                        '正しい',
                        '被保険者が危険を負担 → 保険者が危険を負担', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="早期是正措置の導入と保険業法の一部改正"
                    :contents="[
                        '正しい',
                        '①持株会社制度の導入 → ①保険相互会社の株式会社化の規定整備', //p100
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度"
                    :contents="[
                        '正しい',
                        '正しい',
                        '社会扶助制度 → 公的扶助制度', //p123
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :contents="[
                        '正しい',
                        '登録制（少額短期保険業者については免許制） → 免許制（少額短期保険業者については登録制）', //p150
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保業界におけるシステム動向"
                    :contents="[
                        '団体保険分野 → 個人保険分野', //p197-198
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            questionTitle: '生命保険契約の特殊性',
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '危険選択の意義',
                            content: '収支相当の原則 → 危険均一性の原則', //p16
                        }, //32
                        {
                            questionTitle: '死亡保険',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: 'イギリスにおける科学的な生命保険会社',
                            content: '賦課式 → 平準保険料方式', //p57
                        }, //34
                        {
                            questionTitle: '保険料支出性向',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '組織変更',
                            content: '100株未満 → 1株未満', //p162
                        }, //36
                        {
                            questionTitle: '共済と保険',
                            content: '適合性の原則 → 給付・反対給付均等の原則', //p164
                        }, //37
                        {
                            questionTitle: 'こくみん共済coop（全労災）',
                            content: '各都道府県民共済 → こくみん共済', //p169
                        }, //38
                        {
                            questionTitle: '生損保の相互参入',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '消費者ニーズの変化',
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        { questionTitle: '生命保険契約の法的性質', label: 'イ', content: '射倖契約' }, //41
                        { questionTitle: '死亡表', label: 'オ', content: '' }, //42
                        { questionTitle: '責任準備金', label: 'ア', content: '負債' }, //43
                        { questionTitle: 'エリザ・ライト', label: 'エ', content: '不没収法' }, //44
                        { questionTitle: '生命保険契約者保護機構', label: 'ア', content: '生命保険会社各社の拠出' }, //45
                        { questionTitle: '生保資産運用の基本原則', label: 'ウ', content: '公共性' }, //46
                        { questionTitle: '社会保障と生命保険', label: 'オ', content: '' }, //47
                        { questionTitle: '社会保険の保険料', label: 'イ', content: '保険料の負担能力' }, //48
                        { questionTitle: '銀行による保険販売', label: 'エ', content: '個人年金' }, //49
                        { questionTitle: '年金型商品の開発', label: 'ウ', content: '変額年金' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="souron2025b" next-route="souron2024a" />
        </section>
    </SeihoTestLayout>
</template>
