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
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '生命保険契約は、保険法上、一定の要式を要するとはしておらず、[[不要式契約である]]。', //p11
                        '生命保険契約は、大量の定型的取引を行い、またその技術性、専門性ゆえに、[[生命保険会社があらかじめ定めた保険約款をもとに契約を締結している]]わけであり、付合契約である。', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおけるアームストロング調査"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        'アームストロング調査委員会の勧告に基づき、1906年に、「新契約費と年間の新契約高を[[制限する]]」などの内容の取締法がニューヨーク州で制定された。', //p63
                        '会社の株主 → 会社の役員', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '一般国民を対象とした年金制度としては、1942年（昭和17年）に、[[工場などで働く男子労働者を対象とした労働者年金保険制度が発足している]]。', //p126
                        '正しい',
                        '付加年金制度 → 確定拠出年金（企業型）', //p127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
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
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '10% → 7%', //p181
                        '正しい',
                        '合計特殊出生率は年々低下し2005年度（平成17年度）には1.26となり、出生数が死亡数を下回って遂に[[人口が減少するという歴史的転換点を迎えることとなった]]。', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
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
                    questionTitle="少額短期保険業"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '少額短期保険業は、短期（生保・医療保険で1年以内、損害保険で2年以内）かつ少額保険金額（疾病による死亡保険金[[300万円]]以内、疾病・傷害による入院給付金等80万円以内、損害保険金[[1,000万円]]以内等で、かつ総額1,000万円以下（複数契約合算））の保険のみを引き受ける保険業である。', //p177
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費構造の変化"
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
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険料',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険の歴史的発展',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '日本における生命保険の発展',
                            content: 'ペストの大流行とスペインかぜの大流行 → スペインかぜの大流行と関東大震災', //p76
                        }, //34
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '流動性の原則',
                            content: '生保資金の長期的性格と安定的性格から、銀行などに比べればその[[重要性は低い]]。', //p109
                        }, //35
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '社会保障制度',
                            content: '社会扶助制度 → 公的扶助制度', //p123
                        }, //36
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '形式的監督主義',
                            content: '日本では[[実体的監督主義]]の方式が採られている。', //p148
                        }, //37
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'JA共済（全国共済農業協同組合連合会）',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '医療・介護ニーズへの対応',
                            content: '生命保険会社は早くから医療や健康問題に関心を持ち、[[人間ドック紹介、健康相談サービス、介護事業者の紹介等を行っている]]。', //p194
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '販売体制',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '危険の種類',
                            label: 'ア',
                            content: '縮小',
                        }, //41
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '剰余金の分配方法',
                            label: 'ウ',
                            content: '20%',
                        }, //42
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '養老保険',
                            label: 'エ',
                            content: '逓減定期保険',
                        }, //43
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '賦課式保険',
                            label: 'イ',
                            content: '生命保険',
                        }, //44
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '近代的生命保険の導入',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険会社の資金の性格',
                            label: 'エ',
                            content: '責任準備金',
                        }, //46
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '公的医療保険',
                            label: 'イ',
                            content: '国民皆保険',
                        }, //47
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険業を行う会社の性質',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '損害保険',
                            label: 'ア',
                            content: '保険者',
                        }, //49
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '年金型商品の開発',
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
