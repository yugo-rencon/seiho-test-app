<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2023年度 フォームB";
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
                    questionTitle="団体保険および団体年金保険の主な保険種類-①"
                    :relatedProblems="['2023b1']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '1年',
                        '損金',
                        '総合福祉',
                        'ヒューマン',
                        '供与', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'ウ', //3
                        'オ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険および団体年金保険の主な保険種類-②"
                    :relatedProblems="['2023b6']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '受給権',
                        '拠出型',
                        '報酬比例部分',
                        '第1号',
                        '運用の指図', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'イ', //7
                        'ア', //8
                        'エ', //9
                        'ケ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の歴史的発展-①"
                    :relatedProblems="['2023a11', '2023b11', '2023c11']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '保障制度',
                        '自給自足',
                        '経済単位',
                        '相互扶助',
                        'ギルド', //問11〜15
                    ]"
                    :labels="[
                        'オ', //11
                        'ア', //12
                        'コ', //13
                        'キ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の歴史的発展-②"
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '海上保険',
                        '冒険貸借',
                        '統計学',
                        'ドイツ',
                        '社会保険', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'イ', //17
                        'エ', //18
                        'ケ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険の選択"
                    :relatedProblems="['2023b21']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '一般に、標準以上に危険度の高い人は保険加入希望が[[強く]]、また、より[[高額]]な保険を選ぶ傾向がある。', //p17
                        '効率性 → 公平性', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要"
                    :relatedProblems="['2023b22', '2023c49']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '介護保険制度の被保険者は、[[65歳]]以上を第１号被保険者とし、[[40歳〜65歳]]未満の医療保険加入者を第２号被保険者とする。', //p140
                        '[[第１号被保険者]]は、原因を問わず常に介護が必要な状態（要介護状態）あるいは日常生活に支援が必要な状態（要支援状態）であれば保険給付の対象となる。', //p140
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :relatedProblems="['2023a23', '2023b23', '2023c23']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        'デリバティブ商品 → ニューウェーブ商品', //p69
                        '正しい',
                        '金融規制改革法（ドッド・フランク法） → グラム・リーチ・ブライリー法', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険業"
                    :relatedProblems="['2023b24']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '少額短期保険業は、短期（生保・医療保険で1年以内、損害保険で2年以内）かつ少額保険金額（疾病による死亡保険金[[300万円]]以内、疾病・傷害による入院給付金等80万円以内、損害保険金[[1,000万円]]以内等で、かつ総額1,000万円以下（複数契約合算））の保険のみを引き受ける保険業である。', //p177
                        '2000万 → 1000万円', //p176
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化"
                    :relatedProblems="['2023a50', '2023b25']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '5% → 7%', //p181
                        '正しい',
                        '合計特殊出生率は年々低下し2005年度（平成17年度）には1.26となり、出生数が死亡数を下回って遂に[[人口が減少するという歴史的転換点を迎えることとなった]]。', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :relatedProblems="['2023a26', '2023b26', '2023c26']"
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
                    questionTitle="保険約款"
                    :relatedProblems="['2023b27']"
                    :contents="[
                        '保険約款の効力は生じない → 保険約款には拘束力がある', //p8
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険の特質"
                    :relatedProblems="['2023a28', '2023b28', '2023c28']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '正しい',
                        '収支相等の原則 → 大数の法則', //p126
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険事業の革新"
                    :relatedProblems="['2023a34', '2023b29']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '裁定審査会 ↔︎ 生命保険相談所', //p83
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :relatedProblems="['2023b30']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '一般の多くの人々を対象に保険契約の引受けを行う事業である保険業には、保険業の公共性に鑑み、[[免許制]]（少額短期保険業者については[[登録制]]）が採用されている。', //p150
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '傷害・疾病危険',
                            relatedProblems: ['2023b31'],
                            content: '保険業法 → 保険法',
                        }, //31
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険契約者',
                            relatedProblems: ['2023b32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'イギリスにおける科学的な生命保険会社',
                            relatedProblems: ['2023a33', '2023b33', '2023c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'アメリカの保険事業規制',
                            relatedProblems: ['2023b34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国際比較',
                            relatedProblems: ['2023b35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '流動性の原則',
                            relatedProblems: ['2023b36'],
                            content: '生保資金の長期的性格と安定的性格から、銀行などに比べればその[[重要性は低い]]。', //p109
                        }, //36
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '組織変更',
                            relatedProblems: ['2023a37', '2023b37', '2023c37'],
                            content: '100株未満 → 1株未満', //p163
                        }, //37
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'JA共済事業',
                            relatedProblems: ['2023a38', '2023b38', '2023c38'],
                            content: 'JA共済事業は、農協系統組織の一環であり、農業協同組合の行う信用・購入・販売など、他の事業と同様、[[JA（単位農協）、JA共済連という２段階]]による組織機構により運営されている。', //p167
                        }, //38
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '日本の公的年金制度',
                            relatedProblems: ['2023b39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '高齢者への貢献',
                            relatedProblems: ['2023b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '契約の法的性質',
                            relatedProblems: ['2023b41'],
                            label: 'ア',
                            content: '付合契約',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '責任準備金',
                            relatedProblems: ['2023a42', '2023b42', '2023c42'],
                            label: 'ア',
                            content: '負債',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '剰余金の分配方法',
                            relatedProblems: ['2023b43'],
                            label: 'ウ',
                            content: '20%',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '賦課式保険',
                            relatedProblems: ['2023b44'],
                            label: 'エ',
                            content: '同額の分担金で',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険業法の一部改正',
                            relatedProblems: ['2023a45', '2023b45', '2023c45'],
                            label: 'イ',
                            content: '更生手続',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国民経済における生命保険',
                            relatedProblems: ['2023a46', '2023b46', '2023c46'],
                            label: 'ア',
                            content: '家計可処分所得',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生活保障としての生命保険',
                            relatedProblems: ['2023b47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            relatedProblems: ['2023b48'],
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '銀行による保険販売',
                            relatedProblems: ['2023b49', '2023c25'],
                            label: 'イ',
                            content: '長期火災保険',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '年金型商品の開発',
                            relatedProblems: ['2023b50'],
                            label: 'ウ',
                            content: '変額年金',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2023a" next-route="souron2023c" />
        </section>
    </SeihoTestLayout>
</template>
