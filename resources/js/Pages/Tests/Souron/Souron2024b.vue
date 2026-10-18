<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import StudyTestPage from "@/Components/StudyTestPage.vue";
import { SOURON_ASSET_CHOICES_1, SOURON_ASSET_CHOICES_2, SOURON_STUDY_CONFIG as studyConfig } from "@/constants/studyTests";

const props = defineProps({
    studyEnabled: { type: Boolean, default: false },
    initialStudyState: { type: Object, default: null },
});

const title = "生命保険総論";
const subject = "2024年度 フォームB";
const examKey = "souron-2024-b";
const isDraft = false;
const wordChoices1 = [
    ['ア', '費用'], ['イ', '20％'], ['ウ', '80％'], ['エ', '非社員契約'], ['オ', '約款'], ['カ', '無社員契約'], ['キ', '公平性'], ['ク', '定款'], ['ケ', '公共性'], ['コ', '負債'],
].map(([label, text]) => ({ label, text }));
const wordChoices2 = [
    ['ア', '増加'], ['イ', '区分分析'], ['ウ', '償本差益'], ['エ', '小さく'], ['オ', '上回る'], ['カ', '減少'], ['キ', '利源分析'], ['ク', '下回る'], ['ケ', '解約益'], ['コ', '大きく'],
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
        previous-route="souron2024a"
        next-route="souron2024c"
        #default="{ learningMode }"
    >
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="wordChoices1"
                    questionTitle="契約者配当-①"
                    :contents="[
                        // rev: 2026-07-05 確認済み
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
                    :choiceOptions="wordChoices2"
                    questionTitle="契約者配当-②"
                    :contents="[
                        // rev: 2026-07-05 確認済み
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
                    :choiceOptions="SOURON_ASSET_CHOICES_1"
                    questionTitle="資産運用-①"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '予定利率',
                        '逆ざや',
                        'ALM（資産負債統合管理）',
                        '法令等の遵守（コンプライアンス）',
                        '負債特性', //問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'オ', //12
                        'コ', //13
                        'カ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="SOURON_ASSET_CHOICES_2"
                    questionTitle="資産運用-②"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '法定他業',
                        '規制緩和',
                        '金融システム改革法',
                        '50',
                        'デリバティブ', //問16〜20
                    ]"
                    :labels="[
                        'コ', //16
                        'エ', //17
                        'キ', //18
                        'オ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    questionTitle="生命保険契約の特殊性"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '保険業法 → 保険法', //p7
                        '正しい',
                        '保険法 → 保険約款', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    questionTitle="ギルド"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '都市経済では商人とその家族は１つの経済単位であり、彼らが被った経済的損失は、[[貴族も領主も救済してくれず、自らが補塡していかねばならない]]。', //p53
                        '正しい',
                        '太古の共同体や奴隷制度、さらに封建社会における農奴制度などは、社会それ自体が保障制度であったが、[[ギルドは封建社会の中で独立的な経済単位が結合して、自らの力で危険に対処した最初の試み]]である。', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
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
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    questionTitle="保険業法の概要"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '免許には[[生命保険業免許と損害保険業免許の２種類]]がある。', //p150
                        '業務の一部または全部の停止 → 経営改善計画と実行', //p155（旧教科書）
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    questionTitle="損害保険"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '1996年（平成８年）施行の改正保険業法において、生命保険、損害保険、第三分野の定義が明定され、[[第三分野については生損保本体で取り扱えることとし、それ以外の分野については子会社方式により相互参入が可能とされた]]。', //p174
                        '第三分野商品（傷害保険・がん保険等）の生損保本体での取扱いについては、日米保険協議の結果を踏まえ、一部制限する激変緩和措置が講じられたが、[[2001年（平成13年）に全面解禁された]]。', //p175
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
                        '被保険者の資格については[[個人であること]]のほかは別段の制限はない。', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="賦課式保険"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '賦課式の生命保険では、年を経るにつれ死亡率が高くなるので、給付金を一定にすれば、[[分担金が年々増加]]し、一方、分担金を一定にすれば、[[給付金が減少]]せざるを得ないことになる。', //p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="変額保険（変額個人年金保険を含む）の特別勘定資産運用における留意点"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '[[特別勘定資産]]の運用実績が直接保険金額や年金額に反映されるため留意が必要がある。', //p110
                        '正しい',
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
                    questionTitle="JA共済"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '自動車共済・建物更生共済といった[[損害系の共済商品も取り扱っている]]。', //p167
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="消費構造の変化"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '商品の選択に当たっても、従来であれば、[[「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かった]]のであるが、今日では、[[自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向]]に変わってきている。', //p185
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :correctAnswers="['正', '正', '誤', '誤', '正', '誤', '誤', '誤', '正', '正', 'エ', 'ウ', 'エ', 'イ', 'ア', 'イ', 'オ', 'オ', 'ア', 'ウ']"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '危険対策と保険',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険料',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: 'アメリカの保険事業規制',
                            content: '連邦政府 → 州政府', //p65
                        }, //33
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '日本における生命保険の発展',
                            content: '日本の保険は[[これらの類似制度から発展したものではない]]。', //p72
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保有契約高と国民所得',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '生命保険会社の資金の性格',
                            content: '純資産の大部分 → 負債の大部分', //p108
                        }, //36
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '形式的監督主義',
                            content: '日本では[[実体的監督主義]]の方式が採られている。', //p148
                        }, //37
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '簡易保険の歴史',
                            content: '簡易保険の既契約に対しては[[政府による保証が継続された]]。' //p173
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '社会構造の変化',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '販売体制',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険の始期',
                            label: 'エ',
                            content: 'いずれか遅い日',
                        }, //41
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '死亡表',
                            label: 'ウ',
                            content: '終局表',
                        }, //42
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '養老保険',
                            label: 'エ',
                            content: '逓減定期保険',
                        }, //43
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'イギリスの共済的な保険組合',
                            label: 'イ',
                            content: '友愛組合',
                        }, //44
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'エリザ・ライト',
                            label: 'ア',
                            content: '法定責任準備金法',
                        }, //45
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '国民経済における生命保険',
                            label: 'イ',
                            content: '経済的保障',
                        }, //46
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '社会保障と生命保険',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険業を行う会社の性質',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '労働者共済',
                            label: 'ア',
                            content: 'こくみん共済 coop（全労済）',
                        }, //49
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '年金型商品の開発',
                            label: 'ウ',
                            content: '変額年金',
                        }, //50
                    ]"
                />
    </StudyTestPage>
</template>
