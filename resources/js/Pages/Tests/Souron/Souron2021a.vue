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
const subject = "2021年度 フォームA";
const examKey = "souron-2021-a";
const isDraft = false;
const wordChoices3 = [
    ['ア', '信託業'], ['イ', '給付・反対給付均等'], ['ウ', '自助努力'], ['エ', '多種多様'], ['オ', '社会保険庁'], ['カ', '保険料収入現価'], ['キ', '損害共済'], ['ク', '金融庁'], ['ケ', '相互扶助'], ['コ', '全国共済法'],
].map(([label, text]) => ({ label, text }));
const wordChoices4 = [
    ['ア', '重い'], ['イ', '健康保険組合'], ['ウ', '軽い'], ['エ', '無認可共済'], ['オ', '任意保険業者'], ['カ', 'JA共済'], ['キ', '少額短期保険業者'], ['ク', '構成員外'], ['ケ', '銀行業'], ['コ', '特別保険者'],
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
        previous-route="souron2022c"
        next-route="souron2021b"
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
                    questionTitle="共済と保険-①"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '損害共済',
                        '給付・反対給付均等',
                        '相互扶助',
                        '金融庁',
                        '多種多様', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'イ', //12
                        'ケ', //13
                        'ク', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="wordChoices4"
                    questionTitle="共済と保険-②"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '軽い',
                        'JA共済',
                        '構成員外',
                        '無認可共済',
                        '少額短期保険業者', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'カ', //17
                        'ク', //18
                        'エ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    questionTitle="生命保険の対象となる危険とその特色"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '生命保険の対象となる危険には、[[死亡危険]]と[[生存危険]]がある。死亡危険は、その発生に中間がなく、いわば0か1の事象であり、被保険者の死亡によって保険金が支払われ、契約が終了する。一方、生存保険では、一定期日までの生存を条件に保険金が支払われるため、生存しているだけで[[直ちに契約が終了するわけではない]]。', //p5
                        '保険業法 → 保険法', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    questionTitle="危険の選択"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '選択医 → 診査医', //p17
                        '生命保険支払専門士 → 生命保険面接士', //p17
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
                    questionTitle="損害保険"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '1996年（平成８年）施行の改正保険業法において、生命保険、損害保険、第三分野の定義が明定され、[[第三分野については生損保本体で取り扱えることとし、それ以外の分野については子会社方式により相互参入が可能とされた]]。', //p174
                        '第三分野商品（新種保険・賠償責任保険等） → 第三分野商品（傷害保険・がん保険等）', //p174
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
                    correctAnswer="ウ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="消費者へのPR活動等"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '正しい',
                        '金融調停審査会制度 → 金融分野における裁判外紛争解決制度（金融ADR制度）', //p84
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="資産運用の現状"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '貸付金 ↔︎ 有価証券', //p111-113
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="保険監督の方法"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '日本では[[実体的監督主義が採用されている。]]', //p148
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
                    questionTitle="社会構造の変化"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '正しい',
                        '合計特殊出生率は年々低下し2005年度（平成17年度）には1.26となり、出生数が死亡数を下回って遂に[[人口が減少するという歴史的転換点を迎えることとなった]]。', //p183
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :correctAnswers="['正', '誤', '正', '誤', '正', '誤', '誤', '誤', '正', '正', 'ウ', 'ア', 'エ', 'エ', 'オ', 'オ', 'イ', 'ア', 'ウ', 'イ']"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '危険対策と保険',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '責任準備金',
                            content: '自然保険料方式 ↔︎ 平準保険料方式', //p24
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険の生成・発展',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: 'アームストロング調査',
                            content: '合衆国統一の取締法 → ニューヨーク州の取締法', //p63
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
                            questionTitle: '公的介護保険性の被保険者',
                            content: '介護保険制度の被保険者は、[[65歳以上を第１号被保険者]]とし、[[40歳〜65歳未満の医療保険加入者を第２号被保険者]]とする。', //p141
                        }, //37
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: 'ソルベンシー・マージン比率',
                            content: 'ソルベンシー・マージン比率は、[[保険会社が直面している通常の予測を超える諸リスク（保険リスク、資産運用リスク等）相当額の1／2を分母]]とし、[[保険会社の自己資本性と考えられる資本勘定、諸準備金などの合計額を分子]]として計算される。', //p155（旧教科書）
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '簡易保険の歴史',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険業界の国際化',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '契約の法的性質',
                            label: 'ウ',
                            content: '諾成契約',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険事故の発生',
                            label: 'ア',
                            content: '保険金',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '養老保険',
                            label: 'エ',
                            content: '逓減定期保険',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '賦課式保険',
                            label: 'エ',
                            content: '同額の分担金で',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '近代的生命保険の導入',
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
                            questionTitle: '公的医療保険',
                            label: 'イ',
                            content: '国民皆保険',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険に関する法律',
                            label: 'ア',
                            content: '金融商品取引法',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '銀行・証券業界',
                            label: 'ウ',
                            content: '個人年金',
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
