<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import StudyTestPage from "@/Components/StudyTestPage.vue";
import { IPPAN_STUDY_CONFIG as studyConfig } from "@/constants/studyTests";

const props = defineProps({
    studyEnabled: { type: Boolean, default: false },
    initialStudyState: { type: Object, default: null },
});

const title = "生命保険一般課程試験";
const subject = "2026年1月〜6月実施 フォームB";
const examKey = "ippan-2026-h1-b";
const labels = ["ア", "イ", "ウ", "エ", "オ", "カ", "キ", "ク", "ケ", "コ"];
const makeChoices = (texts) => texts.map((text, index) => ({ label: labels[index], text }));

const wordChoices = {
    1: makeChoices(["約款","定款","法務大臣","内閣総理大臣"]),
    3: makeChoices(["契約概要","意向確認書面","いただいた後で","いただく前に","適合性の原則","安全性の原則"]),
    6: makeChoices(["保険業法","預金保険法","生命保険契約者保護機構","所属生命保険会社","継続","放棄"]),
    9: makeChoices(["政治的","社会的","特別の利益の提供","適切な情報提供"]),
    11: makeChoices(["販売開始日","責任開始期","査定","承諾"]),
    13: makeChoices(["既払込金額","解約返戻金","８日","14日","クーリング・オフ","チェック・オフ"]),
    16: makeChoices(["契約確認","意向調査","保険証券","定款"]),
    18: makeChoices(["１年","２年","１カ月","２カ月","取消し","解約"]),
    21: makeChoices(["投資","契約者貸付","（自動）振替貸付","口座振替"]),
    23: makeChoices(["消滅します","継続します","短く","長く","減額","増額"]),
    26: makeChoices(["７","８","35","36","37","38","53","54","家族の生活資金＋妻の生活資金","家族の生活資金－妻の生活資金"]),
};
const sentenceChoices = {
    68: makeChoices(["投機的","安全"]),
    69: makeChoices(["強化","緩和"]),
    70: makeChoices(["長期","短期"]),
    71: makeChoices(["不動産","公社債"]),
    72: makeChoices(["換金性（流動性）","収益性"]),
    73: makeChoices(["生死混合保険","生存保険"]),
    74: makeChoices(["の倍額","と同額"]),
    75: makeChoices(["定期保険","生存保険"]),
    76: makeChoices(["保険期間","保険金額"]),
    77: makeChoices(["特別勘定","一般勘定"]),
    78: makeChoices(["は不要","が必要"]),
    79: makeChoices(["契約者","被保険者"]),
    80: makeChoices(["満年齢","数え年"]),
    81: makeChoices(["正確なものを新しく発行","訂正あるいは加筆"]),
    82: makeChoices(["30,000円","50,000円"]),
};
const trueFalseAnswers = [
+    "誤", "誤", "正", "正", "誤", "誤", "正", "正", "誤", "正",
    "正", "正", "正", "正", "誤", "誤", "正", "正", "誤", "誤",
    "正", "誤", "正", "正", "正", "誤", "正", "正", "正", "正",
];
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
        home-route="ippan.index"
        #default="{ learningMode }"
    >
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[1]"
            questionRange="1〜2"
            questionTitle="募集時の正しい説明-①"
            :contents="[
                // rev: 2026-08-25 確認済み
                '約款',
                '内閣総理大臣', // 問1〜2
            ]"
            :labels="[
                'ア', //1
                'エ', //2
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[3]"
            questionRange="3〜5"
            questionTitle="募集時の正しい説明-②"
            :contents="[
                // rev: 2026-08-25 確認済み
                '契約概要',
                'いただく前に',
                '適合性の原則', // 問3〜5
            ]"
            :labels="[
                'ア', //3
                'エ', //4
                'オ', //5
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[6]"
            questionRange="6〜8"
            questionTitle="私たちの役割と心がまえ-①"
            :contents="[
                // rev: 2026-08-25 確認済み
                '継続',
                '保険業法',
                '所属生命保険会社', // 問6〜8
            ]"
            :labels="[
                'オ', //6
                'ア', //7
                'エ', //8
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[9]"
            questionRange="9〜10"
            questionTitle="私たちの役割と心がまえ-②"
            :contents="[
                // rev: 2026-08-25 確認済み
                '適切な情報提供',
                '社会的', // 問9〜10
            ]"
            :labels="[
                'エ', //9
                'イ', //10
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[11]"
            questionRange="11〜12"
            questionTitle="契約申込み時の実務-①"
            :contents="[
                // rev: 2026-08-25 確認済み
                '承諾',
                '責任開始期', // 問11〜12
            ]"
            :labels="[
                'エ', //11
                'イ', //12
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[13]"
            questionRange="13〜15"
            questionTitle="契約申込み時の実務-②"
            :contents="[
                // rev: 2026-08-25 確認済み
                '８日',
                'クーリング・オフ',
                '既払込金額', // 問13〜15
            ]"
            :labels="[
                'ウ', //13
                'オ', //14
                'ア', //15
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[16]"
            questionRange="16〜17"
            questionTitle="正しい告知の取り扱い-①"
            :contents="[
                // rev: 2026-08-25 確認済み
                '契約確認',
                '保険証券', // 問16〜17
            ]"
            :labels="[
                'ア', //16
                'ウ', //17
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[18]"
            questionRange="18〜20"
            questionTitle="正しい告知の取り扱い-②"
            :contents="[
                // rev: 2026-08-25 確認済み
                '２年',
                '１カ月',
                '取消し', // 問18〜20
            ]"
            :labels="[
                'イ', //18
                'ウ', //19
                'オ', //20
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[21]"
            questionRange="21〜22"
            questionTitle="保全・アフターサービス手続きと留意点-①"
            :contents="[
                // rev: 2026-08-25 確認済み
                '契約者貸付',
                '（自動）振替貸付', // 問21〜22
            ]"
            :labels="[
                'イ', //21
                'ウ', //22
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[23]"
            questionRange="23〜25"
            questionTitle="保全・アフターサービス手続きと留意点-②"
            :contents="[
                // rev: 2026-08-25 確認済み
                '消滅します',
                '短く',
                '減額', // 問23〜25
            ]"
            :labels="[
                'ア', //23
                'ウ', //24
                'オ', //25
            ]"
        />
        <QuestionTemp3
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptions="wordChoices[26]"
            questionRange="26〜30"
            questionTitle="設計販売の基礎"
            :contents="[
                // rev: 2026-08-25 確認済み
                '７',
                '38',
                '53',
                '35',
                '家族の生活資金＋妻の生活資金', // 問26〜30
            ]"
            :labels="[
                'ア', //26
                'カ', //27
                'キ', //28
                'ウ', //29
                'ケ', //30
            ]"
        />
        <QuestionTemp1
            :questionNumber="31"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['ア', 'ウ']"
            answerPrompt="誤っている選択肢を2つ選んでください"
            questionTitle="生命保険の役割"
            :contents="[
                // rev: 2026-08-27 確認済み
                '大正時代 → 明治時代', //p1
                '正しい',
                '男性の平均寿命は[[約81歳]]、女性は[[約87]]歳となっている。', //p3
                '正しい',
            ]"
        />
        <QuestionTemp1
            :questionNumber="32"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['ウ', 'エ']"
            answerPrompt="誤っている選択肢を2つ選んでください"
            questionTitle="生命保険会社の仕組み"
            :contents="[
                // rev: 2026-08-28 確認済み
                '正しい',
                '正しい',
                '「相互会社」は、[[保険事業だけ]]に認められている。', //p32
                '生命保険会社は、生命保険以外の事業で不測の損害を被り、健全な運営を損なうことがないように[[他の事業を営むことが制限されている]]。', //p33
            ]"
        />
        <QuestionTemp1
            :questionNumber="33"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['ア', 'エ']"
            answerPrompt="誤っている選択肢を2つ選んでください"
            questionTitle="社会保障制度"
            :contents="[
                // rev: 2026-08-28 確認済み
                '雇用保険法 → 生活保護法', //p112
                '正しい',
                '正しい',
                '公的介護保険の利用者負担は、[[原則、費用の１割だが、所定水準以上の所得者の場合は２割（そのうち特に所得の高い者は３割）]]となっている。', //p115
            ]"
        />
        <QuestionTemp1
            :questionNumber="34"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['イ']"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="生命保険の仕組み"
            :contents="[
                // rev: 2026-08-27 確認済み
                '正しい',
                '公平性の法則 → 大数の法則', //p14
                '正しい',
            ]"
        />
        <QuestionTemp1
            :questionNumber="35"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['ア']"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="契約の選択"
            :contents="[
                // rev: 2026-08-28 確認済み
                '経済上の危険 → 環境上の危険', //p52
                '正しい',
                '正しい',
            ]"
        />
        <QuestionTemp1
            :questionNumber="36"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['ウ']"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="保険料の税法上の取り扱い"
            :contents="[
                // rev: 2026-08-28 確認済み
                '正しい',
                '正しい',
                '4月1日から翌年3月31日まで → 1月1日から12月31日まで', //p122
            ]"
        />
        <QuestionTemp1
            :questionNumber="37"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :correctAnswers="['ア']"
            answerPrompt="誤っている選択肢を1つ選んでください"
            questionTitle="お客さまニーズへの対応"
            :contents="[
                // rev: 2026-08-28 確認済み
                'ライフプラン → ライフサイクル', //p133
                '正しい',
                '正しい',
            ]"
        />
        <QuestionTemp2
            :questionNumber="38"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :useAnswerLabelForAll="true"
            :correctAnswers="trueFalseAnswers"
            :items="[
                {
                    // rev: 2026-08-27 確認済み
                    questionTitle: '保険料の払い込み',
                    content: 'この場合、保険料は[[生命保険会社の定める利率で割り引かれる]]。', //p50
                }, //38
                {
                    // rev: 2026-08-27 確認済み
                    questionTitle: '保険料の払い込み',
                    content: '保険金受取人 → 契約者', //p50
                }, //39
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保険料の払い込み',
                    content: '正しい',
                }, //40
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保険料の払い込み',
                    content: '正しい',
                }, //41
                {
                    // rev: 2026-08-27 確認済み
                    questionTitle: '保険料の払い込み',
                    content: '払込方法（回数・経路）については、それぞれ[[途中で変更することができる]]。', //p51
                }, //42
                {
                    // rev: 2026-08-27 確認済み
                    questionTitle: '企業向け商品',
                    content: '５年更新 → １年更新', //p116
                }, //43
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '企業向け商品',
                    content: '正しい',
                }, //44
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '企業向け商品',
                    content: '正しい',
                }, //45
                {
                    // rev: 2026-08-27 確認済み
                    questionTitle: '企業向け商品',
                    content: '財形制度にもとづく保険には、財形貯蓄積立保険・[[財形住宅貯蓄積立保険]]・[[財形年金積立保険]]などがある。', //p119
                }, //46
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '企業向け商品',
                    content: '正しい',
                }, //47
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '剰余金と配当金',
                    content: '正しい',
                }, //48
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '剰余金と配当金',
                    content: '正しい',
                }, //49
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '剰余金と配当金',
                    content: '正しい',
                }, //50
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '剰余金と配当金',
                    content: '正しい',
                }, //51
                {
                    // rev: 2026-08-28 確認済み
                    questionTitle: '剰余金と配当金',
                    content: '保険業法の定める利率 → 生命保険会社の定める利率', //p29
                }, //52
                {
                    // rev: 2026-08-28 確認済み
                    questionTitle: '保障の見直し',
                    content: '現在の契約の保障内容や保険期間は変えずに、死亡保障額などを[[増やすことができる]]。', //p91
                }, //53
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保障の見直し',
                    content: '正しい',
                }, //54
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保障の見直し',
                    content: '正しい',
                }, //55
                {
                    // rev: 2026-08-28 確認済み
                    questionTitle: '保障の見直し',
                    content: '契約者に対し、転換前と転換後の契約に関する重要な事項を対比して記載した書面を[[交付する必要がある]]。', //p92
                }, //56
                {
                    // rev: 2026-08-28 確認済み
                    questionTitle: '保障の見直し',
                    content: '転換前契約の加入時 → 転換時', //p92
                }, //57
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保険金・給付金の請求と支払い',
                    content: '正しい',
                }, //58
                {
                    // rev: 2026-08-28 確認済み
                    questionTitle: '保険金・給付金の請求と支払い',
                    content: '他の受取人に対しても支払わない → 残額を支払う', //p104
                }, //59
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保険金・給付金の請求と支払い',
                    content: '正しい',
                }, //60
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保険金・給付金の請求と支払い',
                    content: '正しい',
                }, //61
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '保険金・給付金の請求と支払い',
                    content: '正しい',
                }, //62
                {
                    // rev: 2026-08-28 確認済み
                    questionTitle: '相続の法律',
                    content: '配偶者が2/3、兄弟姉妹が1/3 → 配偶者が3/4、兄弟姉妹が1/4', //p130
                }, //63
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '相続の法律',
                    content: '正しい',
                }, //64
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '相続の法律',
                    content: '正しい',
                }, //65
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '相続の法律',
                    content: '正しい',
                }, //66
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '相続の法律',
                    content: '正しい',
                }, //67
            ]"
        />
        <QuestionTemp2
            :questionNumber="68"
            :title="title"
            :subject="subject"
            :learningMode="learningMode"
            :choiceOptionsByQuestion="sentenceChoices"
            :applyChoicePrefix="false"
            :items="[
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '資産の運用',
                    label: 'イ',
                    content: '安全',
                }, //68
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '資産の運用',
                    label: 'イ',
                    content: '緩和',
                }, //69
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '資産の運用',
                    label: 'ア',
                    content: '長期',
                }, //70
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '資産の運用',
                    label: 'イ',
                    content: '公社債',
                }, //71
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '資産の運用',
                    label: 'ア',
                    content: '換金性（流動性）',
                }, //72
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '生命保険の種類',
                    label: 'イ',
                    content: '生存保険',
                }, //73
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '生命保険の種類',
                    label: 'イ',
                    content: 'と同額',
                }, //74
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '生命保険の種類',
                    label: 'ア',
                    content: '定期保険',
                }, //75
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '生命保険の種類',
                    label: 'イ',
                    content: '保険金額',
                }, //76
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '生命保険の種類',
                    label: 'ア',
                    content: '特別勘定',
                }, //77
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '契約取り扱いの手続き',
                    label: 'イ',
                    content: 'が必要',
                }, //78
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '契約取り扱いの手続き',
                    label: 'イ',
                    content: '被保険者',
                }, //79
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '契約取り扱いの手続き',
                    label: 'ア',
                    content: '満年齢',
                }, //80
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '契約取り扱いの手続き',
                    label: 'ア',
                    content: '正確なものを新しく発行',
                }, //81
                {
                    // rev: 2026-08-25 確認済み
                    questionTitle: '契約取り扱いの手続き',
                    label: 'イ',
                    content: '50,000円',
                }, //82
            ]"
        />
    </StudyTestPage>
</template>
