<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import StudyTestPage from "@/Components/StudyTestPage.vue";
import { SOURON_DIVIDEND_CHOICES_1, SOURON_DIVIDEND_CHOICES_2, SOURON_STUDY_CONFIG as studyConfig } from "@/constants/studyTests";

const props = defineProps({
    studyEnabled: { type: Boolean, default: false },
    initialStudyState: { type: Object, default: null },
});

const title = "生命保険総論";
const subject = "2021年度 フォームB";
const examKey = "souron-2021-b";
const isDraft = false;
const wordChoices3 = [
    ['ア', '専門金融機関'], ['イ', '金融の国際化'], ['ウ', '同族会社'], ['エ', '長短分離'], ['オ', '間接金融'], ['カ', '都銀と地銀の分離'], ['キ', '直接金融'], ['ク', '金融の寡占化'], ['ケ', 'ユニバーサル・バンキング'], ['コ', '持株会社'],
].map(([label, text]) => ({ label, text }));
const wordChoices4 = [
    ['ア', '元受会社'], ['イ', '信用生命保険'], ['ウ', '企業年金'], ['エ', '一時払終身保険'], ['オ', '協定遵守'], ['カ', '第三分野の保険'], ['キ', '個人年金'], ['ク', '逓増定期保険'], ['ケ', '法令等遵守'], ['コ', '販売チャネル'],
].map(([label, text]) => ({ label, text }));
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
        previous-route="souron2021a"
        next-route="souron2021c"
        #default="{ learningMode }"
    >
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="SOURON_DIVIDEND_CHOICES_1"
                    questionTitle="契約者配当-①"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '負債',
                        '定款',
                        '20%',
                        '非社員契約',
                        '公平性', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'ク', //2
                        'イ', //3
                        'エ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="SOURON_DIVIDEND_CHOICES_2"
                    questionTitle="契約者配当-②"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '利源分析',
                        '増加',
                        '上回る',
                        '解約益',
                        '小さく', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ア', //7
                        'オ', //8
                        'ケ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="wordChoices3"
                    questionTitle="銀行・信託・証券業界-①"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '長短分離',
                        '専門金融機関',
                        '直接金融',
                        '金融の国際化',
                        '持株会社', //問11〜15
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
                    :learningMode="learningMode"
                    :choiceOptions="wordChoices4"
                    questionTitle="銀行・信託・証券業界-②"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '販売チャネル',
                        '信用生命保険',
                        '個人年金',
                        '一時払終身保険',
                        '法令等遵守', //問16〜20
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
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    questionTitle="保険の対象となる危険の種類"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '保険の対象となる危険の種類は二つある。一つはその発生を防止しようとしても、ある程度以上は不可能であるという意味で経済主体による制御を[[超えているもの]]、もう一つは個体としての危険発生頻度の変動幅が大きいため、合理的、経済的な予測が不可能であるという意味で経済主体の制御を[[超えているもの]]である。', //p4
                        '平均変動率 → 平均経験率', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    questionTitle="団体保険"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '保険料のうち団体が負担した部分については会社経理上[[損金]]とすることができる等の取扱いがある。', //p47
                        '総合福祉団体定期保険 → 団体信用生命保険', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    questionTitle="早期是正措置の導入と保険業法の一部改正"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '責任準備金の積立度合 → 保険金の支払い余力', //p99
                        '正しい',
                        '2003年（平成15年）には、既契約の予定利率[[引き下げ]]に関する保険業法の改正が行われた。', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    questionTitle="社会保険の特質"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '社会保険の場合は、保険事故の発生率よりも[[保険料負担者の負担能力に応じて保険料が決められる]]ことが多いという特色がある。', //p125
                        '社会保険の保険料は、被保険者が企業の被用者である場合にはその全部を被保険者が負担するのではなく、[[事業主が分担することになっており、分担割合は、少なくとも50％になっている]]。', //p125
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    questionTitle="相互会社と株式会社"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '株式会社の構成員は株主であり、相互会社の構成員は保険契約者（社員）であるので、[[保険契約者の立場は株式会社と相互会社で異なる]]。', //p161
                        '保険業法は株式会社の相互会社への組織変更について[[規定している]]。', //p162
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
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '保険契約の一方の当事者である保険契約者は、[[保険者]]が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="責任準備金の一般概念"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '責任準備金の現実的定義は、「[[将来保険給付支払現価 − 将来保険料収入現価]]」である。', //p25-26
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="都市経済と相互扶助組織"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '友愛組合 → ギルド', //p53
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="資産運用の原則"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        'この特別勘定資産については、一般勘定資産と比べて[[運用規制が緩くなっている]]。', //p110
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="保険業法"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '正しい',
                        '保険者の保護 → 保険契約者等の保護', //p150
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :correctAnswers="['正', '正', '誤', '誤', '誤', '誤', '正', '誤', '正', '正', 'ア', 'イ', 'オ', 'エ', 'オ', 'オ', 'ア', 'ウ', 'エ', 'イ']"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の法的性質',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の要素',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '危険選択の意義',
                            content: '危険同一性の原則 → 危険均一性の原則',
                        }, //33
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: 'アームストロング調査',
                            content: '合衆国統一の取締法 → ニューヨーク州の取締法', //p63
                        }, //34
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '保険の有用性',
                            content: 'ペストの大流行とスペインかぜ → 関東大震災とスペインかぜ', //p76
                        }, //35
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '生命保険会社の資金の性格',
                            content: '純資産の大部分 → 負債の大部分', //p108
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '日本の公的年金制度',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: 'こくみん共済coop（全労災）',
                            content: '各都道府県民共済 → こくみん共済',
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '簡易保険の歴史',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '医療・介護ニーズへの対応',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '死亡表',
                            label: 'ア',
                            content: '国民生命表',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険商品の基本型',
                            label: 'イ',
                            content: '生存保険',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'ユニバーサル保険',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '賦課式保険',
                            label: 'エ',
                            content: '同額の分担金で',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '昭和50年保険審議会答申に沿う措置',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国民経済における生命保険',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生活保障としての生命保険',
                            label: 'ア',
                            content: '緊急出費保障',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            label: 'ウ',
                            content: '財務大臣',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'JA共済（全国共済農業協同組合連合会）',
                            label: 'エ',
                            content: 'こども共済',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '共同ネットワークシステム',
                            label: 'イ',
                            content: 'LINC（Life Insurance Network Center）',
                        }, //50
                    ]"
                />
    </StudyTestPage>
</template>
