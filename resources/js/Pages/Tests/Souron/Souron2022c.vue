<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import StudyTestPage from "@/Components/StudyTestPage.vue";
import { SOURON_SOCIAL_CHOICES_1, SOURON_SOCIAL_CHOICES_2, SOURON_STUDY_CONFIG as studyConfig } from "@/constants/studyTests";

const props = defineProps({
    studyEnabled: { type: Boolean, default: false },
    initialStudyState: { type: Object, default: null },
});

const title = "生命保険総論";
const subject = "2022年度 フォームC";
const examKey = "souron-2022-c";
const isDraft = false;
const wordChoices1 = [
    ['ア', '政府管掌保険'], ['イ', '保険料の拠出'], ['ウ', '国会・地方議員'], ['エ', '後期高齢者'], ['オ', '全国健康保険協会管掌保険'], ['カ', '納税'], ['キ', '国民健康保険'], ['ク', '組合管掌保険'], ['ケ', '国家公務員'], ['コ', '国民医療保険'],
].map(([label, text]) => ({ label, text }));
const wordChoices2 = [
    ['ア', '確定年金'], ['イ', '国民年金'], ['ウ', '団体災害補償保険'], ['エ', '資力調査（ミーンズ・テスト）'], ['オ', '生活保護'], ['カ', '労働者災害補償保険'], ['キ', '生活福祉'], ['ク', '事業主年金'], ['ケ', '共済年金'], ['コ', '家族調査'],
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
        previous-route="souron2022b"
        next-route="souron2021a"
        #default="{ learningMode }"
    >
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="wordChoices1"
                    questionTitle="狭義の社会保障制度-①"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '保険料の拠出',
                        '全国健康保険協会管掌保険',
                        '国家公務員',
                        '国民健康保険',
                        '後期高齢者', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'オ', //2
                        'ケ', //3
                        'キ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="wordChoices2"
                    questionTitle="狭義の社会保障制度-②"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '共済年金',
                        '国民年金',
                        '労働者災害補償保険',
                        '生活保護',
                        '資力調査（ミーンズ・テスト）', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'イ', //7
                        'カ', //8
                        'オ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :choiceOptions="SOURON_SOCIAL_CHOICES_1"
                    questionTitle="社会構造の変化-①"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', //問11〜15
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
                    :choiceOptions="SOURON_SOCIAL_CHOICES_2"
                    questionTitle="社会構造の変化-②"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '下回って',
                        '労働力率', //問16〜20
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
                    correctAnswer="イ"
                    questionTitle="生命保険契約の要素"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '保険契約者の資格については別段の制限はなく、個人であると法人であるとを問わず、また[[行為能力者であると否とを問わない]]。', //p13
                        '正しい',
                        '保険金受取人の資格については何らの制限はなく、個人であると法人であると、また[[行為能力者であると否とを問わない]]。', //p14
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    questionTitle="危険と保険"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '確率論における大数の法則に基づき、危険を被る対象物（母数）が多いほど危険の発生頻度の変動幅は[[小さく]]なる。', //p4
                        '商法 → 保険法', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    questionTitle="介護保険制度"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '介護保険制度の被保険者は、[[65歳]]以上を第１号被保険者とし、[[40歳〜65歳]]未満の医療保険加入者を第２号被保険者とする。', //p140
                        '正しい',
                        '[[第1号被保険者の保険料]]は、各市町村ごとに基準保険料（所得段階別の定額保険料）が設定される。', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    questionTitle="1970〜80年代のアメリカのニューウェーブ商品の開発"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '長期 → 短期', //p69
                        'ユニバーサル保険は、[[決済機能こそ持たないものの]]、死亡保障額に影響を与えることなくいつでもキャッシュ・バリューの引き出しが可能であり、また保険料の払込みが自由であるなど自在性があることなどから、有力商品となった。', //p69
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ア"
                    questionTitle="消費構造の変化"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '商品の選択に当たっても、従来であれば、[[「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かった]]のであるが、今日では、[[自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向]]に変わってきている。', //p185
                        '消費者の購入態度が変化する中で，企業としても[[従来の画一的商品を大量生産、低価格で販売するという戦略だけでは対応し切れなくなってきた面もあり、いかにニーズを先取りし、他に先駆けて新製品を市場に提供できるかが、重要な課題となっている]]。', //p184-185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="ウ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="都市経済と相互扶助組織"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '正しい',
                        '太古の共同体や奴隷制度、さらに封建社会における農奴制度などは、社会それ自体が保障制度であったが、[[ギルドは封建社会の中で独立的な経済単位が結合して、自らの力で危険に対処した最初の試み]]である。', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
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
                    :questionNumber="28"
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
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    correctAnswer="イ"
                    answerPrompt="誤っている選択肢を1つ選んでください"
                    questionTitle="共済と保険"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '適合性の原則 → 給付・反対給付均等の原則', //p165
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
                    questionTitle="生命保険商品の充実等"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '5000万円 → 1000万円', //p191
                        '生命保険の取り扱う個人年金保険は、他の金融機関の年金型商品と比べて[[優れた特色がある]]。', //p190
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :learningMode="learningMode"
                    :correctAnswers="['正', '誤', '誤', '正', '誤', '正', '正', '誤', '正', '誤', 'ウ', 'オ', 'ア', 'イ', 'オ', 'エ', 'イ', 'エ', 'ウ', 'ア']"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '責任準備金',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '生命保険契約の特殊性',
                            content: '任意規定 → 強行規定',
                        }, //32
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '科学的な生命保険会社',
                            content: 'ロイヤル・エクスチェンジ → エクイタブル', //p57
                        }, //33
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険の始期',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '日本における生命保険の発展',
                            content: '日本の保険は[[これらの類似制度から発展したものではない]]。', //p72
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生活設計',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '組織変更',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '消費者契約法',
                            content:
                                '2001年（平成13年）から施行された「[[金融商品の販売等に関する法律（金融サービス提供法に改称）]]」によって、顧客への重要事項の説明と勧誘方針の策定・公表が義務付けられている。また同じく2001年（平成13年）から施行された「消費者契約法」では、不当な契約条項の無効等を定めることにより消費者保護を図っている。', //p159
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '各都道府県民共済',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '簡易保険の歴史',
                            content: '簡易保険の既契約に対しては[[政府による保証が継続された]]。', //p173
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '契約の法的性質',
                            label: 'ウ',
                            content: '不要式契約',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '死亡表',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険者',
                            label: 'ア',
                            content: '10',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '財形保険',
                            label: 'イ',
                            content: '財形住宅貯蓄積立保険',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'エリザ・ライト',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険契約者保護機構',
                            label: 'エ',
                            content: '生命保険会社各社の拠出',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '早期是正措置制度',
                            label: 'イ',
                            content: '200%',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            label: 'エ',
                            content: '財務大臣',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '損害保険',
                            label: 'ウ',
                            content: '保険金額',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生保業界共通のシステム',
                            label: 'ア',
                            content: '団体定期保険',
                        }, //50
                    ]"
                />
    </StudyTestPage>
</template>
