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
                    :relatedProblems="['2024c1']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
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
                    :relatedProblems="['2024c6']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
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
                    :relatedProblems="['2024a11', '2024b11', '2024c11']"
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
                    questionTitle="資産運用-②"
                    :relatedProblems="['2024a16', '2024b16', '2024c16']"
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
                    questionTitle="生命保険契約の法的性質"
                    :relatedProblems="['2024c21']"
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
                    :relatedProblems="['2024c22']"
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
                    :relatedProblems="['2024c23']"
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
                    :relatedProblems="['2024a24', '2024b24', '2024c24']"
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
                    questionTitle="社会構造の変化〜高齢化・少子化"
                    :relatedProblems="['2024c25']"
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
                    :relatedProblems="['2024a26', '2024b26', '2024c26', '2024c31']"
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
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :relatedProblems="['2024a22', '2024c27']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        'デリバティブ商品 → ニューウェーブ商品', //p69
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用の現状"
                    :relatedProblems="['2024c28']"
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
                    :relatedProblems="['2024c29']"
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
                    :relatedProblems="['2024a30', '2024b30', '2024c30']"
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
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の要素',
                            relatedProblems: ['2024a26', '2024b26', '2024c26', '2024c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険料',
                            relatedProblems: ['2024a32', '2024b32', '2024c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険の歴史的発展',
                            relatedProblems: ['2024c33'],
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '日本における生命保険の発展',
                            relatedProblems: ['2024a44', '2024b34', '2024c34'],
                            content: 'ペストの大流行とスペインかぜの大流行 → スペインかぜの大流行と関東大震災',
                        }, //34 p76
                        {
                            questionTitle: '流動性の原則',
                            relatedProblems: ['2024c35'],
                            content: '重要性は非常に高い → 低い',
                        }, //35 p109
                        {
                            questionTitle: '社会保障制度',
                            relatedProblems: ['2024c36'],
                            content: '社会扶助制度 → 公的扶助制度',
                        }, //36 p123
                        {
                            questionTitle: '形式的監督主義',
                            relatedProblems: ['2024a37', '2024b37', '2024c37'],
                            content: '形式的監督主義 → 実体的監督主義',
                        }, //37 p148
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'JA共済（全国共済農業協同組合連合会）',
                            relatedProblems: ['2024a25', '2024b29', '2024c38'],
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '医療・介護ニーズへの対応',
                            relatedProblems: ['2024c39'],
                            content: '人間ドック紹介、健康相談サービス、介護事業者の紹介等を行っている',
                        }, //39 p193
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '販売体制',
                            relatedProblems: ['2024a40', '2024b40', '2024c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '危険の種類',
                            relatedProblems: ['2024c41'],
                            label: 'ア',
                            content: '縮小',
                        }, //41
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '剰余金の分配方法',
                            relatedProblems: ['2024c42'],
                            label: 'ウ',
                            content: '20%',
                        }, //42
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '養老保険',
                            relatedProblems: ['2024a43', '2024b43', '2024c43'],
                            label: 'エ',
                            content: '逓減定期保険',
                        }, //43
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '賦課式保険',
                            relatedProblems: ['2024b27', '2024c44'],
                            label: 'イ',
                            content: '生命保険',
                        }, //44
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '近代的生命保険の導入',
                            relatedProblems: ['2024c45'],
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険会社の資金の性格',
                            relatedProblems: ['2024b36', '2024c46'],
                            label: 'エ',
                            content: '責任準備金',
                        }, //46
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '公的医療保険',
                            relatedProblems: ['2024c47'],
                            label: 'イ',
                            content: '国民皆保険',
                        }, //47
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険業を行う会社の性質',
                            relatedProblems: ['2024a48', '2024b48', '2024c48'],
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '損害保険',
                            relatedProblems: ['2024a29', '2024b25', '2024c49'],
                            label: 'ア',
                            content: '保険者',
                        }, //49
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '年金型商品の開発',
                            relatedProblems: ['2024a50', '2024b50', '2024c50'],
                            label: 'ウ',
                            content: '変額年金',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2024b" next-route="souron2023a" />
        </section>
    </SeihoTestLayout>
</template>
