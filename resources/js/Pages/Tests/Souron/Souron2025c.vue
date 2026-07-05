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
                    :relatedProblems="['2025c1']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
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
                    :relatedProblems="['2025c6']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
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
                    :relatedProblems="['2025a11', '2025b11', '2025c11']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
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
                    :relatedProblems="['2025a16', '2025b16', '2025c16']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
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
                    :relatedProblems="['2025a21', '2025b21', '2025c21']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '同様な危険を多数引き受けることにより、危険の発生頻度の変動幅を[[縮小]]させ、[[平均経験率]]を得る必要がある。', //p4
                        '保険料と危険度の積 → 保険金額と危険度の積', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :relatedProblems="['2025c22']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
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
                    :relatedProblems="['2025b28', '2025c23']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
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
                    :relatedProblems="['2025a48', '2025c24']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '消費生活協同組合法 → 農業協同組合法', //p166
                        '自動車共済・建物更正共済といった[[損害系の共済商品も取り扱っている]]。', //p166
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="民間生命保険会社のサービスの今後のあり方"
                    :relatedProblems="['2025c25']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '生命保険会社は早くから医療や健康問題に関心を持ち、[[人間ドック紹介、健康相談サービス、介護事業者の紹介等を行なっている]]。', //p194
                        '契約内容登録制度 → 生命保険契約照会制度', //p195
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :relatedProblems="['2025c26']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
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
                    :relatedProblems="['2025a22', '2025c27']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
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
                    :relatedProblems="['2025a23', '2025c28']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
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
                    :relatedProblems="['2025a29', '2025b29', '2025c29']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '一般の多くの人々を対象に保険契約の引受けを行う事業である保険業には、保険業の公共性に鑑み、[[免許制]]（少額短期保険業者については[[登録制]]）が採用されている。', //p150
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保業界におけるシステム動向"
                    :relatedProblems="['2025a30', '2025b30', '2025c30']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '最初に機械化されたのは最も事務量の多い[[個人保険分野]]である。', //p198
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '生命保険契約の特殊性',
                            content: '正しい',
                            relatedProblems: ['2025c31'],
                        }, //31
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '危険選択の意義',
                            content: '収支相当の原則 → 危険均一性の原則', //p16
                            relatedProblems: ['2025a32', '2025b32', '2025c32'],
                        }, //32
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '死亡保険',
                            content: '正しい',
                            relatedProblems: ['2025c33'],
                        }, //33
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: 'イギリスにおける科学的な生命保険会社',
                            content: '賦課式 → 平準保険料方式', //p57
                            relatedProblems: ['2025c34'],
                        }, //34
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '保険料支出性向',
                            content: '正しい',
                            relatedProblems: ['2025c35'],
                        }, //35
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '組織変更',
                            content: '100株未満 → 1株未満', //p163
                            relatedProblems: ['2025a36', '2025b36', '2025c36'],
                        }, //36
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '共済と保険',
                            content: '適合性の原則 → 給付・反対給付均等の原則', //p165
                            relatedProblems: ['2025a37', '2025b37', '2025c37'],
                        }, //37
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: 'こくみん共済coop（全労災）',
                            content: '各都道府県民共済 → こくみん共済', //p169
                            relatedProblems: ['2025c38'],
                        }, //38
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '生損保の相互参入',
                            content: '正しい',
                            relatedProblems: ['2025c39'],
                        }, //39
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '消費者ニーズの変化',
                            content: '正しい',
                            relatedProblems: ['2025c40'],
                        }, //40
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '生命保険契約の法的性質',
                            label: 'イ',
                            content: '射倖契約',
                            relatedProblems: ['2025b31', '2025c41'],
                        }, //41
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '死亡表',
                            label: 'オ',
                            content: '',
                            relatedProblems: ['2025a42', '2025b42', '2025c42'],
                        }, //42
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '責任準備金',
                            label: 'ア',
                            content: '負債',
                            relatedProblems: ['2025c43'],
                        }, //43
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: 'エリザ・ライト',
                            label: 'エ',
                            content: '不没収法',
                            relatedProblems: ['2025c44'],
                        }, //44
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '生命保険契約者保護機構',
                            label: 'ア',
                            content: '生命保険会社各社の拠出',
                            relatedProblems: ['2025c45'],
                        }, //45
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '生保資産運用の基本原則',
                            label: 'ウ',
                            content: '公共性',
                            relatedProblems: ['2025a46', '2025b46', '2025c46'],
                        }, //46
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '社会保障と生命保険',
                            label: 'オ',
                            content: '',
                            relatedProblems: ['2025c47'],
                        }, //47
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '社会保険の保険料',
                            label: 'イ',
                            content: '保険料の負担能力',
                            relatedProblems: ['2025c48'],
                        }, //48
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '銀行による保険販売',
                            label: 'エ',
                            content: '個人年金',
                            relatedProblems: ['2025a25', '2025c49'],
                        }, //49
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '年金型商品の開発',
                            label: 'ウ',
                            content: '変額年金',
                            relatedProblems: ['2025a50', '2025b50', '2025c50'],
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="souron2025b" next-route="souron2024a" />
        </section>
    </SeihoTestLayout>
</template>
