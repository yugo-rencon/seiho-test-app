<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2021年度 フォームB";

const SAME = "※2021年度フォームA/B/Cで同一問題";
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
                    :note="SAME"
                    :contents="[
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
                    :note="SAME"
                    :contents="[
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
                    :contents="[
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
                    :contents="[
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
                    :note="SAME"
                    :contents="[
                        '責任準備金の積立度合 → 保険金の支払い余力', //p99-100
                        '正しい',
                        '既契約の予定利率引き上げ → 引き下げ。', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
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
                    :note="SAME"
                    :contents="[
                        '正しい',
                        '正しい',
                        '被保険者 → 保険者', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '将来保険料収入現価と将来保険給付支払現価が逆。', //p25-26
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
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
                        // 問31〜40
                        { label: '解', content: '正しい' }, //31
                        { label: '解', content: '正しい' }, //32
                        { label: '解', content: '危険同一性の原則 → 危険均一性の原則' }, //33
                        { label: '解', content: '合衆国統一の取締法 → ニューヨーク州の取締法', note: SAME }, //34 p63
                        { label: '解', content: 'ペストの大流行とスペインかぜ → 関東大震災とスペインかぜ' }, //35
                        { label: '解', content: '純資産の大部分 → 負債の大部分', note: SAME }, //36
                        { label: '解', content: '正しい' }, //37
                        { label: '解', content: '各都道府県民共済 → こくみん共済' }, //38
                        { label: '解', content: '正しい', note: SAME }, //39
                        { label: '解', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'ア', content: '国民生命表' }, //41
                        { label: 'イ', content: '生存保険' }, //42
                        { label: 'オ', content: '' }, //43
                        { label: 'エ', content: '同額の分担金で', note: SAME }, //44
                        { label: 'オ', content: '' }, //45
                        { label: 'オ', content: '', note: SAME }, //46
                        { label: 'ア', content: '緊急出費保障' }, //47
                        { label: 'ウ', content: '財務大臣' }, //48
                        { label: 'エ', content: 'こども共済' }, //49
                        { label: 'イ', content: 'LINC（Life Insurance Network Center）', note: SAME }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2021a" next-route="souron2021c" />
        </section>
    </SeihoTestLayout>
</template>
