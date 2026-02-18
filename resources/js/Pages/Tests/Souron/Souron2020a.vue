<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2020年度 フォームA";
const SAME = "※2020年度フォームA/B/Cで同一問題";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <Pagetitle :title="title" :description="subject" />

            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '経済的', //1
                        '損害額', //2
                        '主観的', //3
                        '一定額', //4
                        '年金給付', //5
                    ]"
                    :labels="[
                        'コ', //1
                        'イ', //2
                        'キ', //3
                        'エ', //4
                        'オ', //5
                    ]"
                />

                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '傷害疾病定額保険契約', //6
                        '潜在的', //7
                        '平準保険料', //8
                        '金融機関', //9
                        '養老保険', //10
                    ]"
                    :labels="[
                        'イ', //6
                        'オ', //7
                        'キ', //8
                        'コ', //9
                        'ケ', //10
                    ]"
                />

                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '予定利率', //11
                        '逆ざや', //12
                        'ALM（資産負債統合管理）', //13
                        '法令等の遵守（コンプライアンス）', //14
                        '負債特性', //15
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
                        '法定他業', //16
                        '規制緩和', //17
                        '金融システム改革法', //18
                        '50', //19
                        'デリバティブ', //20
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
                        '80%以上 → 20%以上', //21-ア p27
                        '正しい', //21-イ
                        'インカムゲイン → キャピタルゲイン', //21-ウ p30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '救済してくれた → 救済はなく、自らが補塡', //22-ア p53
                        '正しい', //22-イ
                        'ギルドは保障制度ではない', //22-ウ p54
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '収益確保は安全性より優先される → 安全性が優先される', //23-ア p109
                        '正しい', //23-イ
                        '中立性の基本原則に基づいた運用 → 公共性の発揮', //23-ウ p110
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '財団法人 → 社団法人', //24-ア p160
                        '資本金 → 資金', //24-イ p160
                        '正しい', //24-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //25-ア
                        '従来と今日の内容が逆', //25-イ p184
                        '「ニーズを先取り〜」と「画一的商品を〜」が逆', //25-ウ p184-185
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '保険金受取人の資格について制限はない（行為能力者である必要もない）', //26-ア p14
                        '正しい', //26-イ
                        '正しい', //26-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //27-ア
                        '長期金利 → 短期金利<br>決済機能を持つ → 決済機能を持たない', //27-イ p69
                        '正しい', //27-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '正しい', //28-ア
                        '正しい', //28-イ
                        '社会扶助制度 → 公的扶助制度', //28-ウ p123
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '損害保険 → 生命保険', //29-ア p173
                        '正しい', //29-イ
                        '正しい', //29-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '団体保険分野 → 個人保険分野', //30-ア p197-198
                        '正しい', //30-イ
                        '正しい', //30-ウ
                    ]"
                />

                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40（解）
                        { label: '解', content: '正しい', note: SAME }, //31
                        { label: '解', content: '国民生命表 → 経験生命表', note: SAME }, //32 p15
                        { label: '解', content: '純保険料 → 営業保険料' }, //33 p23
                        { label: '解', content: '養老 → 終身' }, //34 p31
                        { label: '解', content: '日本の保険はこれらの類似制度から発展したものではない' }, //35 p72
                        { label: '解', content: '相互会社から株式会社 → 株式会社から相互会社', note: SAME }, //36 p78
                        { label: '解', content: '正しい' }, //37
                        { label: '解', content: '正しい' }, //38
                        { label: '解', content: '正しい' }, //39
                        { label: '解', content: '死亡保険金500万円 → 300万円<br>損害保険金500万円 → 1000万円' }, //40 p176
                        // 問41〜50（ア〜オ）
                        { label: 'オ', content: '' }, //41
                        { label: 'ア', content: '10', note: SAME }, //42
                        { label: 'エ', content: 'いずれかの遅い日' }, //43
                        { label: 'イ', content: '確定拠出年金保険' }, //44
                        { label: 'エ', content: '賦課式', note: SAME }, //45
                        { label: 'ウ', content: '会社更生法' }, //46
                        { label: 'ア', content: '保険料の負担能力' }, //47
                        { label: 'イ', content: '消費者契約法', note: SAME }, //48
                        { label: 'オ', content: '' }, //49
                        { label: 'イ', content: '平均寿命' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2021c" next-route="souron2020b" />
        </section>
    </SeihoTestLayout>
</template>
