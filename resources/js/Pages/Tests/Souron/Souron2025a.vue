<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2025年度 フォームA";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の特殊性-①"
                    :contents="[
                        '契約自由',
                        '経済的',
                        '保険法',
                        '商法',
                        '共済', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'エ', //2
                        'イ', //3
                        'キ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の特殊性-②"
                    :contents="[
                        '拘束',
                        '法規範説',
                        '定型的取引',
                        '保険約款',
                        '強行', // 問6〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ア', //7
                        'キ', //8
                        'カ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-①"
                    :contents="[
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', // 問11〜15
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
                    questionTitle="社会構造の変化-②"
                    :contents="[
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '出生数',
                        '労働力率', // 問16〜20
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
                    questionTitle="保険の対象となる危険の種類"
                    :contents="[
                        '正しい',
                        '変動幅を拡大 → 縮小<br>平均変動率 → 平均経験率', //p4
                        '保険料と危険度の積 → 保険金額と危険度の積', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="早期是正措置の導入と保険業法の一部改正"
                    :contents="[
                        '責任準備金の積立度合を示す → 保険金の支払い余力を示す', //p99
                        '正しい',
                        '既契約の予定利率引き上げ → 既契約の予定利率の引き下げ', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度"
                    :contents="[
                        '正しい',
                        '社会扶助 → 公的扶助', //p121
                        '公的扶助 → 社会扶助', //p121
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業監督の方法"
                    :contents="[
                        '自由主義経済を一定程度制限する立場 → 自由主義経済を基調とする立場<br>日本でもこの方式が採られている → 日本では実体的監督主義が採用されている', //p148
                        '公示主義や準則主義は形式的監督主義の説明', //p148
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行による保険販売"
                    :contents="[
                        '一時払終身保険、一時払養老保険や保険期間10年以下の平準払養老保険等 → 住宅ローン関連の信用生命保険と長期火災保険等', //p175
                        '住宅ローン関連の信用生命保険と長期火災保険等 → 一時払終身保険、一時払養老保険や期間10年以下の平準払養老保険等', //p175
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険商品の基本型"
                    :contents="[
                        '正しい',
                        '貯蓄保険 → 生存保険', //p31-32
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者へのPR活動等"
                    :contents="[
                        '正しい',
                        '正しい',
                        '金融調停審査会制度 → 金融分野における裁判外紛争解決制度（金融ADR制度）', //p84
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要"
                    :contents="[
                        '正しい',
                        '正しい',
                        '第1号被保険者および第2号被保険者ともに、各市町村ごとに基準保険料が設定される → 第1号被保険者の保険料は各市町村ごとに基準保険料が設定され、第2号被保険者はそれぞれ加入する医療保険者が制度の算定基準に基づき保険料を設定される', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :contents="[
                        '正しい',
                        '登録制（少額短期保険業者については免許制） → 免許制（少額短期保険業者については登録制）', //p150
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保業界におけるシステム動向"
                    :contents="[
                        '団体保険分野 → 個人保険分野', //p197-198
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            questionTitle: '保険の始期',
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '危険選択の意義',
                            content: '収支相当の原則 → 危険均一性の原則', //p16
                        }, //32
                        {
                            questionTitle: '1970〜80年代のアメリカのニューウェーブ商品の開発',
                            content: '決済機能を持ち → 決済機能を持たない', //p69
                        }, //33
                        {
                            questionTitle: '世帯加入状況',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '資産運用の自由化',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '組織変更',
                            // relatedProblems: ['2025a36','2025b36','2025c36',],
                            content: '100株未満 → 1株未満', //p162
                        }, //36
                        {
                            questionTitle: '共済と保険',
                            content: '適合性の原則 → 給付・反対給付均等の原則', //p164
                        }, //37
                        {
                            questionTitle: '少額短期保険業',
                            content: '疾病による死亡保険金500万円以内 → 300万円以内<br>損害保険金500万円以内 → 1000万円以内', //p176
                        }, //38
                        {
                            questionTitle: '営業職員以外の販売チャネル',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '国際化の方向',
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        { questionTitle: '保険事故の発生', label: 'ア', content: '保険金' }, //41
                        { questionTitle: '死亡表', label: 'オ', content: '' }, //42
                        { questionTitle: '事業費', label: 'エ', content: '維持費' }, //43
                        { questionTitle: '保険の歴史的発展', label: 'イ', content: 'ギルド' }, //44
                        { questionTitle: 'アメリカにおけるアームストロング調査', label: 'ア', content: '新契約費' }, //45
                        { questionTitle: '生保資産運用の基本原則', label: 'ウ', content: '公共性' }, //46
                        { questionTitle: '公的医療保険', label: 'エ', content: '各種共済組合' }, //47
                        { questionTitle: 'JA共済', label: 'オ', content: '' }, //48
                        { questionTitle: '共同ネットワークシステム', label: 'イ', content: 'LINC（Life Insurance Network Center）' }, //49
                        { questionTitle: '年金型商品の開発', label: 'ウ', content: '変額年金' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="souron2025b" />
        </section>
    </SeihoTestLayout>
</template>
