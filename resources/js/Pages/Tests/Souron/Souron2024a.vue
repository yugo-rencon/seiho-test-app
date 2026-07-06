<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2024年度 フォームA";
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
                    questionTitle="生命保険の技術的基礎-①"
                    :relatedProblems="['2024a1']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '経験生命表',
                        '低い',
                        '総合表',
                        '選択表',
                        '終局表', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'ア', //2
                        'ケ', //3
                        'エ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の技術的基礎-②"
                    :relatedProblems="['2024a6']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '診査医',
                        '生命保険面接士',
                        '告知義務',
                        '告知書',
                        '道徳的な面', //問６〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'カ', //7
                        'コ', //8
                        'キ', //9
                        'ク', //10
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
                    questionTitle="危険と保険"
                    :relatedProblems="['2024a21']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '確率論における大数の法則に基づき、危険を被る対象物（母数）が多いほど危険の発生頻度の変動幅は[[小さく]]なる。', //p4
                        '商法 → 保険法', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :relatedProblems="['2024a22', '2024c27']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '株式会社から相互会社 → 相互会社から株式会社', //p70
                        'グラス・スティーガル法 → グラム・リーチ・ブライリー法', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の資産運用の基本原則"
                    :relatedProblems="['2024a23']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '収益性の確保 → 安全性の確保', //p109
                        '正しい',
                        '永続性 → 公共性の発揮',
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
                    questionTitle="JA共済"
                    :relatedProblems="['2024a25', '2024b29', '2024c38']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '自動車共済・建物更生共済といった[[損害系の共済商品も取り扱っている]]。', //p167
                        '正しい',
                        '財務省 → 農林水産省', //p167
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
                    questionTitle="封建社会の都市経済と相互扶助組織"
                    :relatedProblems="['2024a27']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '友愛組合 → ギルド', //p53
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度"
                    :relatedProblems="['2024a28']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '社会扶助制度 → 公的扶助制度', //p123
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="['2024a29', '2024b25', '2024c49']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '損害保険 → 生命保険', //p173
                        '正しい',
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
                            // rev: 2026-07-07 確認済み
                            questionTitle: '生命保険契約の特殊性',
                            relatedProblems: ['2024a31', '2024b21'],
                            content: '保険約款に規定のない事項については、おおむね[[保険法、民法の順]]に適用される。', //p9
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険料',
                            relatedProblems: ['2024a32', '2024b32', '2024c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: 'イギリスにおける科学的な生命保険会社',
                            relatedProblems: ['2024a33'],
                            content: '賦課式 → 平準保険料方式', //p57
                        }, //33
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: 'アメリカにおける生命保険事業の発展',
                            relatedProblems: ['2024a34'],
                            content: 'アームストロング調査委員会の勧告に基づき、1906年に、「新契約費と年間の新契約高を[[制限する]]」「会社役員選出に関する基準を[[制定する]]」などの内容の取締法がニューヨーク州で制定された。', //p63-64
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険金・給付金の支払い',
                            relatedProblems: ['2024a35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '公的介護保険性の被保険者',
                            relatedProblems: ['2024a36'],
                            content: '65歳以上 → 第1号<br>40歳～65歳未満 → 第2号',
                        }, //36 p140
                        {
                            questionTitle: '形式的監督主義',
                            relatedProblems: ['2024a37', '2024b37', '2024c37'],
                            content: '形式的監督主義 → 実体的監督主義',
                        }, //37 p148
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '各都道府県民共済',
                            relatedProblems: ['2024a38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生保業界のネットワークシステム',
                            relatedProblems: ['2024a39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '販売体制',
                            relatedProblems: ['2024a40', '2024b40', '2024c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '契約の法的性質',
                            relatedProblems: ['2024a41'],
                            label: 'ウ',
                            content: '諾成契約',
                        }, //41
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険金額',
                            relatedProblems: ['2024a42'],
                            label: 'オ',
                            content: '',
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
                            questionTitle: '日本における生命保険の発展',
                            relatedProblems: ['2024a44', '2024b34', '2024c34'],
                            label: 'ア',
                            content: 'スペインかぜの大流行',
                        }, //44
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約者保護機構',
                            relatedProblems: ['2024a45'],
                            label: 'イ',
                            content: '90%',
                        }, //45
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '国民経済における生命保険',
                            relatedProblems: ['2024a46', '2024b46'],
                            label: 'ア',
                            content: '家計可処分所得',
                        }, //46
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生活保障としての生命保険',
                            relatedProblems: ['2024a47'],
                            label: 'イ',
                            content: '緊急出費保障',
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
                            questionTitle: '生命共済事業',
                            relatedProblems: ['2024a49'],
                            label: 'エ',
                            content: '相互扶助',
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

            <TestNavigationButtons next-route="souron2024b" />
        </section>
    </SeihoTestLayout>
</template>
