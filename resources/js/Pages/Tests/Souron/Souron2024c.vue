<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2024年度 フォームC";

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
                    questionTitle="生命保険の対象となる危険とその特色-①"
                    :contents="[
                        '商法',
                        '経済的',
                        '損害額',
                        '主観的',
                        '一定額', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'コ', //2
                        'イ', //3
                        'キ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の対象となる危険とその特色-②"
                    :contents="[
                        '傷害疾病定額保険契約',
                        '潜在的',
                        '平準保険料',
                        '運用',
                        '養老保険', //問６〜10
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
                    questionTitle="資産運用-①"
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
                    questionTitle="資産運用-②"
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
                    questionTitle="生命保険契約の法的性質"
                    :contents="[
                        //p11-12
                        '正しい',
                        '生命保険契約は要式契約でない',
                        '契約当事者がお互いに協議 → 契約当事者の一方があらかじめ定めた契約条項を相手方が包括的に承認',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおけるアームストロング調査"
                    :contents="[
                        //p63-64
                        '無制限 → 制限',
                        '会社の株主選出 → 会社の役員選出',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :contents="[
                        //p126-127
                        '自営業者等を対象とした国民年金制度 → 工場などで働く男子労働者を対象とした労働者年金保険制度',
                        '正しい',
                        '付加年金制度 → 確定拠出年金（企業型）',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
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
                    questionTitle="社会構造の変化〜高齢化・少子化"
                    :contents="[
                        //p180-182
                        '10% → 7%',
                        '正しい',
                        '人口減少にいたっていない → 出生数が死亡数を下回って人口が減少している',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
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
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :contents="[
                        //p69
                        'デリバティブ商品 → ニューウェーブ商品。',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用の現状"
                    :contents="[
                        //p112-113
                        '貸付金 ↔︎ 有価証券',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険業"
                    :contents="[
                        //p176
                        '正しい',
                        '死亡保険金500万円 → 300万円<br>損害保険金500万円 → 1000万円',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費構造の変化"
                    :contents="[
                        //p184
                        '正しい',
                        '従来〜 ↔︎ 今日〜',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '生命保険契約の要素', content: '正しい' }, //31
                        { questionTitle: '保険料', content: '正しい' }, //32
                        { questionTitle: '保険の歴史的発展', content: '正しい' }, //33
                        { questionTitle: '日本における生命保険の発展（大正時代）', content: 'ペストの大流行とスペインかぜの大流行 → スペインかぜの大流行と関東大震災' }, //34 p76
                        { questionTitle: '流動性の原則', content: '重要性は非常に高い → 低い' }, //35 p109
                        { questionTitle: '社会保障制度', content: '社会扶助制度 → 公的扶助制度' }, //36 p123
                        { questionTitle: '形式的監督主義', content: '形式的監督主義 → 実体的監督主義' }, //37 p148
                        { questionTitle: 'JA共済（全国共済農業協同組合連合会）', content: '正しい' }, //38
                        { questionTitle: '医療・介護ニーズへの対応', content: '人間ドック紹介、健康相談サービス、介護事業者の紹介等を行っている' }, //39 p193
                        { questionTitle: '販売体制', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '危険の種類', label: 'ア', content: '縮小' }, //41
                        { questionTitle: '剰余金の分配方法', label: 'ウ', content: '20%' }, //42
                        { questionTitle: '養老保険', label: 'エ', content: '逓減定期保険' }, //43
                        { questionTitle: '賦課式保険', label: 'イ', content: '生命保険' }, //44
                        { questionTitle: '近代的生命保険の導入', label: 'オ', content: '' }, //45
                        { questionTitle: '生命保険会社の資金の性格', label: 'エ', content: '責任準備金' }, //46
                        { questionTitle: '公的医療保険', label: 'イ', content: '国民皆保険' }, //47
                        { questionTitle: '保険業を行う会社の性質', label: 'オ', content: '' }, //48
                        { questionTitle: '損害保険', label: 'ア', content: '保険者' }, //49
                        { questionTitle: '年金型商品の開発', label: 'ウ', content: '変額年金' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2024b" next-route="souron2023a" />
        </section>
    </SeihoTestLayout>
</template>
