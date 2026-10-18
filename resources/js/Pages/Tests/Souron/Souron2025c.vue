<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import StudyTestPage from "@/Components/StudyTestPage.vue";
import { SOURON_STUDY_CONFIG as studyConfig } from "@/constants/studyTests";

const props = defineProps({
    studyEnabled: { type: Boolean, default: false },
    initialStudyState: { type: Object, default: null },
});

const title = "生命保険総論";
const subject = "2025年度 フォームC";
const examKey = "souron-2025-c";
const isDraft = false;
</script>

<template>
    <StudyTestPage
        :title="title"
        :subject="subject"
        :exam-key="examKey"
        :initial-study-state="props.initialStudyState"
        :study-enabled="props.studyEnabled"
        :question-count="studyConfig.questionCount"
        :max-score="studyConfig.maxScore"
        :score-sections="studyConfig.scoreSections"
        :preview-question-limit="22"
        :is-draft="isDraft"
        previous-route="souron2025b"
        next-route="souron2024a"
        #default="{ learningMode }"
    >
        <QuestionTemp3
            :questionNumber="1"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            questionTitle="団体保険の主な保険種類-①"
            :choiceOptions="[
                { label: 'ア', text: '任意加入' },
                { label: 'イ', text: '損金' },
                { label: 'ウ', text: '無診査' },
                { label: 'エ', text: 'キャッシュ' },
                { label: 'オ', text: '1年' },
                { label: 'カ', text: '益金' },
                { label: 'キ', text: 'ヒューマン' },
                { label: 'ク', text: '5年' },
                { label: 'ケ', text: '総合福祉' },
                { label: 'コ', text: '有診査' },
            ]"
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
            :learningMode="learningMode"
            questionTitle="団体保険の主な保険種類-②"
            :choiceOptions="[
                { label: 'ア', text: '年払い' },
                { label: 'イ', text: '増減' },
                { label: 'ウ', text: '就業不能' },
                { label: 'エ', text: '減少' },
                { label: 'オ', text: '在職中' },
                { label: 'カ', text: '退職後' },
                { label: 'キ', text: '医療法' },
                { label: 'ク', text: '一時払い' },
                { label: 'ケ', text: '所得喪失' },
                { label: 'コ', text: '健康保険法' },
            ]"
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
            :learningMode="learningMode"
            questionTitle="社会構造の変化-①"
            :choiceOptions="[
                { label: 'ア', text: '遅い' },
                { label: 'イ', text: '健康寿命' },
                { label: 'ウ', text: '7' },
                { label: 'エ', text: '10' },
                { label: 'オ', text: '雇用' },
                { label: 'カ', text: '扶養' },
                { label: 'キ', text: '速い' },
                { label: 'ク', text: '平均寿命' },
                { label: 'ケ', text: '20〜64' },
                { label: 'コ', text: '15〜64' },
            ]"
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
            :learningMode="learningMode"
            questionTitle="社会構造の変化-②"
            :choiceOptions="[
                { label: 'ア', text: '離婚件数' },
                { label: 'イ', text: '合計特殊出生率' },
                { label: 'ウ', text: '婚姻率' },
                { label: 'エ', text: '年金' },
                { label: 'オ', text: '出生数' },
                { label: 'カ', text: '合計特定育成率' },
                { label: 'キ', text: '失業' },
                { label: 'ク', text: '80' },
                { label: 'ケ', text: '70' },
                { label: 'コ', text: '労働力率' },
            ]"
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
            :learningMode="learningMode"
            correctAnswer="ア"
            questionTitle="保険の対象となる危険の種類"
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
            :learningMode="learningMode"
            correctAnswer="イ"
            questionTitle="アメリカにおける金融革命の進展と生命保険事業"
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
            :learningMode="learningMode"
            correctAnswer="ウ"
            questionTitle="公的年金制度"
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
            :learningMode="learningMode"
            correctAnswer="ウ"
            questionTitle="JA共済"
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
            :learningMode="learningMode"
            correctAnswer="ア"
            questionTitle="民間生命保険会社のサービスの今後のあり方"
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
            :learningMode="learningMode"
            correctAnswer="ウ"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="生命保険契約の要素"
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
            :learningMode="learningMode"
            correctAnswer="イ"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="早期是正措置の導入と保険業法の一部改正"
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
            :learningMode="learningMode"
            correctAnswer="ウ"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="狭義の社会保障制度"
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
            :learningMode="learningMode"
            correctAnswer="イ"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="保険業法の概要"
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
            :learningMode="learningMode"
            correctAnswer="ア"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="生保業界におけるシステム動向"
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
            :learningMode="learningMode"
            :correctAnswers="['正', '誤', '正', '誤', '正', '誤', '誤', '誤', '正', '正', 'イ', 'オ', 'ア', 'エ', 'ア', 'ウ', 'オ', 'イ', 'エ', 'ウ']"
            :choiceOptionsByQuestion="{
                41: [
                    { label: 'ア', text: 'A―善意契約' },
                    { label: 'イ', text: 'A―射倖契約' },
                    { label: 'ウ', text: 'B―有償契約' },
                    { label: 'エ', text: 'B―双務契約' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                42: [
                    { label: 'ア', text: 'A―国民生命表' },
                    { label: 'イ', text: 'A―完全生命表' },
                    { label: 'ウ', text: 'B―総合表' },
                    { label: 'エ', text: 'B―選択表' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                43: [
                    { label: 'ア', text: 'A―負債' },
                    { label: 'イ', text: 'A―簿価' },
                    { label: 'ウ', text: 'B―資産' },
                    { label: 'エ', text: 'B―収益' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                44: [
                    { label: 'ア', text: 'A―救貧法' },
                    { label: 'イ', text: 'A―マッカラン・ファーガソン法' },
                    { label: 'ウ', text: 'B―ローズ法' },
                    { label: 'エ', text: 'B―不没収法' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                45: [
                    { label: 'ア', text: 'A―生命保険会社各社の拠出' },
                    { label: 'イ', text: 'A―日銀特融' },
                    { label: 'ウ', text: 'B―100％' },
                    { label: 'エ', text: 'B―80％' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                46: [
                    { label: 'ア', text: 'A―金融機関' },
                    { label: 'イ', text: 'A―組合' },
                    { label: 'ウ', text: 'B―公共性' },
                    { label: 'エ', text: 'B―収益性' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                47: [
                    { label: 'ア', text: 'A―経営者' },
                    { label: 'イ', text: 'A―後継者' },
                    { label: 'ウ', text: 'B―納税対策' },
                    { label: 'エ', text: 'B―制度設計' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                48: [
                    { label: 'ア', text: 'A―保険事故の発生率' },
                    { label: 'イ', text: 'A―保険料の負担能力' },
                    { label: 'ウ', text: 'B―年齢' },
                    { label: 'エ', text: 'B―性別' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                49: [
                    { label: 'ア', text: 'A―一時払養老保険' },
                    { label: 'イ', text: 'A―一時払終身保険' },
                    { label: 'ウ', text: 'B―所得補償保険' },
                    { label: 'エ', text: 'B―個人年金' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
                50: [
                    { label: 'ア', text: 'A―一般勘定' },
                    { label: 'イ', text: 'A―区分勘定' },
                    { label: 'ウ', text: 'B―変額年金' },
                    { label: 'エ', text: 'B―逓増年金' },
                    { label: 'オ', text: 'C（A・Bともに正しい）' },
                ],
            }"
            :items="[
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '生命保険契約の特殊性',
                    content: '正しい',
                }, //31
                {
                    // rev: 2026-05-26 確認済み
                    questionTitle: '危険選択の意義',
                    content: '収支相等の原則 → 危険均一性の原則', //p16
                }, //32
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '死亡保険',
                    content: '正しい',
                }, //33
                {
                    // rev: 2026-05-27 確認済み
                    questionTitle: 'イギリスにおける科学的な生命保険会社',
                    content: '賦課式 → 平準保険料方式', //p57
                }, //34
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '保険料支出性向',
                    content: '正しい',
                }, //35
                {
                    // rev: 2026-05-26 確認済み
                    questionTitle: '組織変更',
                    content: '100株未満 → 1株未満', //p163
                }, //36
                {
                    // rev: 2026-05-26 確認済み
                    questionTitle: '共済と保険',
                    content: '適合性の原則 → 給付・反対給付均等の原則', //p165
                }, //37
                {
                    // rev: 2026-05-27 確認済み
                    questionTitle: 'こくみん共済coop（全労災）',
                    content: '各都道府県民共済 → こくみん共済', //p169
                }, //38
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '生損保の相互参入',
                    content: '正しい',
                }, //39
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '消費者ニーズの変化',
                    content: '正しい',
                }, //40
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '生命保険契約の法的性質',
                    label: 'イ',
                    content: '射倖契約',
                }, //41
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '死亡表',
                    label: 'オ',
                    content: '',
                }, //42
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '責任準備金',
                    label: 'ア',
                    content: '負債',
                }, //43
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: 'エリザ・ライト',
                    label: 'エ',
                    content: '不没収法',
                }, //44
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '生命保険契約者保護機構',
                    label: 'ア',
                    content: '生命保険会社各社の拠出',
                }, //45
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '生保資産運用の基本原則',
                    label: 'ウ',
                    content: '公共性',
                }, //46
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '社会保障と生命保険',
                    label: 'オ',
                    content: '',
                }, //47
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '社会保険の保険料',
                    label: 'イ',
                    content: '保険料の負担能力',
                }, //48
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '銀行による保険販売',
                    label: 'エ',
                    content: '個人年金',
                }, //49
                {
                    // rev: 2026-05-28 確認済み
                    questionTitle: '年金型商品の開発',
                    label: 'ウ',
                    content: '変額年金',
                }, //50
            ]"
        />
    </StudyTestPage>
</template>
