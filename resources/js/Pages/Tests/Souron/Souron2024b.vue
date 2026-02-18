<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2024年度 フォームB";
const SAME = "※2024年度フォームA/B/Cで同一問題";
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
                    :note="SAME"
                    :contents="[
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
                    :note="SAME"
                    :contents="[
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
                    :contents="[
                        //p7-9
                        '保険業法 → 保険法',
                        '正しい',
                        '保険法 → 保険約款',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p53-54
                        '救済してくれた → 救済はなく、自らが補塡',
                        '正しい',
                        'ギルドは保障制度ではない',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p124-125
                        '負担能力に応じて年齢別に → 負担能力に応じて（年齢別には不要）',
                        '被保険者・事業主・国庫がそれぞれ1/3 → 被保険者・事業主がそれぞれ1/2',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        //p150,P155
                        '3種類 → 2種類（生命保険業免許・損害保険業免許）',
                        '業務の一部または全部の停止 → 経営改善計画と実行',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p173-174
                        '正しい',
                        '各分野 → 第三分野のみ',
                        '一部制限が現在も継続 → 2001年（平成13年）に全面解禁',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        //p13
                        '正しい',
                        '正しい',
                        '被保険者の資格 → 保険契約者の資格',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p56
                        '正しい',
                        '分担金が年々減少 → 増加<br>給付金が増加 → 減少',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p110
                        '一般勘定資産の運用実績 → 特別勘定資産の運用実績',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        //p166
                        '損害系の共済商品を取り扱っていない → 取り扱っている（自動車共済・建物更生共済）',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        //p184
                        '正しい',
                        '従来と今日の内容が逆。',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { label: '解', content: '正しい' }, //31
                        { label: '解', content: '正しい', note: SAME }, //32
                        { label: '解', content: '連邦政府 → 州政府' }, //33 p65
                        { label: '解', content: '日本の保険はこれらの類似制度から発展したものではない' }, //34 p72
                        { label: '解', content: '正しい' }, //35
                        { label: '解', content: '純資産の大部分 → 負債の大部分' }, //36 p108
                        { label: '解', content: '形式的監督主義 → 実体的監督主義', note: SAME }, //37 p148
                        { label: '解', content: '保証は全て撤廃 → 保証は継続' }, //38 p172
                        { label: '解', content: '正しい' }, //39
                        { label: '解', content: '正しい', note: SAME }, //40
                        // 問41〜50
                        { label: 'エ', content: 'いずれかの遅い日' }, //41
                        { label: 'ウ', content: '終局表' }, //42
                        { label: 'エ', content: '逓減定期保険', note: SAME }, //43
                        { label: 'イ', content: '友愛組合' }, //44
                        { label: 'ア', content: '法定責任準備金法' }, //45
                        { label: 'イ', content: '経済的保障' }, //46
                        { label: 'オ', content: '' }, //47
                        { label: 'オ', content: '', note: SAME }, //48
                        { label: 'ア', content: 'こくみん共済coop<全労済>' }, //49
                        { label: 'ウ', content: '変額年金', note: SAME }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2024a" next-route="souron2024c" />
        </section>
    </SeihoTestLayout>
</template>
