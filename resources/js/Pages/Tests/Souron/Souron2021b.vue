<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2021年度 フォームB";
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
                    questionTitle="契約者配当-①"
                    :relatedProblems="['2021a1', '2021b1', '2021c1']"
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
                    questionTitle="契約者配当-②"
                    :relatedProblems="['2021a6', '2021b6', '2021c6']"
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
                    questionTitle="銀行・信託・証券業界-①"
                    :relatedProblems="['2021b11']"
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
                    questionTitle="銀行・信託・証券業界-②"
                    :relatedProblems="['2021b16']"
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
                    questionTitle="保険の対象となる危険の種類"
                    :relatedProblems="['2021b21']"
                    :contents="[
                        '経済主体による制御を超えていないもの → 超えているもの', //p4
                        '平均変動率 → 平均経験率', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :relatedProblems="['2021b22']"
                    :contents="[
                        '会社経理上益金 → 会社経理上損金', //p47
                        '総合福祉団体定期保険 → 団体信用生命保険', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="早期是正措置の導入と保険業法の一部改正"
                    :relatedProblems="['2021a23', '2021b23', '2021c23']"
                    :contents="[
                        '責任準備金の積立度合を示す → 保険金の支払い余力を示す', //p99
                        '正しい',
                        '既契約の予定利率引き上げ → 既契約の予定利率の引き下げ', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険の特質"
                    :relatedProblems="['2021a24', '2021b24', '2021c24']"
                    :contents="[
                        '負担能力に応じて年齢別に → 負担能力に応じて（年齢は無関係）', //p125
                        '被保険者・事業主・国庫がそれぞれ1/3 → 被保険者と事業主がそれぞれ1/2', //p125
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="相互会社と株式会社"
                    :relatedProblems="['2021b25']"
                    :contents="[
                        '正しい',
                        '保険契約者の立場は株式会社と相互会社で同じ → 異なる（株式会社=株主が構成員、相互会社=保険契約者が構成員）', //p161
                        '株式会社の相互会社への組織変更について規定していない → 規定している', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :relatedProblems="['2021a26', '2021b26', '2021b32', '2021c26']"
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
                    questionTitle="責任準備金の一般概念"
                    :relatedProblems="['2021b27']"
                    :contents="[
                        '将来保険料収入現価 ↔︎ 将来保険給付支払現価', //p25-26
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="都市経済と相互扶助組織"
                    :relatedProblems="['2021b28']"
                    :contents="[
                        '正しい',
                        '友愛組合 → ギルド', //p53
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用の原則"
                    :relatedProblems="['2021b29', '2021c45']"
                    :contents="[
                        '運用規制が厳しく → 運用規制が緩く', //p110
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="['2021b30']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険者 → 保険契約者等', //p150
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の法的性質',
                            relatedProblems: ['2021b31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の要素',
                            relatedProblems: ['2021a26', '2021b26', '2021b32', '2021c26'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '危険選択の意義',
                            relatedProblems: ['2021b33'],
                            content: '危険同一性の原則 → 危険均一性の原則',
                        }, //33
                        {
                            questionTitle: 'アームストロング調査',
                            relatedProblems: ['2021a34', '2021b34', '2021c34'],
                            content: '合衆国統一の取締法 → ニューヨーク州の取締法',
                        }, //34 p63
                        {
                            questionTitle: '保険の有用性',
                            relatedProblems: ['2021b35'],
                            content: 'ペストの大流行とスペインかぜ → 関東大震災とスペインかぜ',
                        }, //35
                        {
                            questionTitle: '生命保険会社の資金の性格',
                            relatedProblems: ['2021a36', '2021b36', '2021c36'],
                            content: '純資産の大部分 → 負債の大部分',
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '日本の公的年金制度',
                            relatedProblems: ['2021b37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: 'こくみん共済coop（全労災）',
                            relatedProblems: ['2021b38'],
                            content: '各都道府県民共済 → こくみん共済',
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '簡易保険の歴史',
                            relatedProblems: ['2021a39', '2021b39', '2021c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '医療・介護ニーズへの対応',
                            relatedProblems: ['2021b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '死亡表',
                            relatedProblems: ['2021b41', '2021c32'],
                            label: 'ア',
                            content: '国民生命表',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険商品の基本型',
                            relatedProblems: ['2021b42'],
                            label: 'イ',
                            content: '生存保険',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'ユニバーサル保険',
                            relatedProblems: ['2021b43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '賦課式保険',
                            relatedProblems: ['2021a44', '2021b44', '2021c44'],
                            label: 'エ',
                            content: '同額の分担金で',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '昭和50年保険審議会答申に沿う措置',
                            relatedProblems: ['2021b45'],
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国民経済における生命保険',
                            relatedProblems: ['2021a46', '2021b46', '2021c46'],
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生活保障としての生命保険',
                            relatedProblems: ['2021b47'],
                            label: 'ア',
                            content: '緊急出費保障',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            relatedProblems: ['2021b48'],
                            label: 'ウ',
                            content: '財務大臣',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'JA共済（全国共済農業協同組合連合会）',
                            relatedProblems: ['2021b49'],
                            label: 'エ',
                            content: 'こども共済',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '共同ネットワークシステム',
                            relatedProblems: ['2021a50', '2021b50', '2021c50'],
                            label: 'イ',
                            content: 'LINC（Life Insurance Network Center）',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2021a" next-route="souron2021c" />
        </section>
    </SeihoTestLayout>
</template>
