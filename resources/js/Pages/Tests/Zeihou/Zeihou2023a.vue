<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2023年度 フォームA";
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
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '遺贈',
                        '10ヶ月',
                        '被相続人',
                        '担保',
                        '10万円', // 問１〜５
                    ]"
                    :labels="[
                        'ア', //1
                        'ケ', //2
                        'オ', //3
                        'エ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の申告と納付"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '6ヶ月',
                        '2ヶ月',
                        '仮決算',
                        '損益計算書',
                        '決定', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'イ', //7
                        'オ', //8
                        'ク', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '経済のグローバル化',
                        '連結',
                        '分社化・持株会社化',
                        '税務情報',
                        '個別申告方式', //問11〜15
                    ]"
                    :labels="[
                        'エ', //11
                        'コ', //12
                        'ケ', //13
                        'カ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '完全支配関係',
                        '納税申告書',
                        'は除く',
                        '3ヶ月',
                        '子法人のすべて', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'ク', //17
                        'ケ', //18
                        'イ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税額の計算"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '逓増税率 → 超過累進税率', //p52
                        '正しい',
                        '所得控除 → 税額控除', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '公益事業用財産は[[非課税財産に該当する]]。', //p82
                        '被相続人の死亡により取得した保険金については、その保険金のうち、死亡時までに払い込まれた保険料合計額に対する被相続人が負担した保険料の金額の割合に相当する部分が、相続税の対象財産となる。', //p77
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '（所属金額 - 800万円）✕ 税率 → 所得金額 ✕ 税率', //p131
                        '留保金課税の場合の同族要件は、１株主グループによる株式等の保有割合が[[50％超]]の特定同族会社の場合（資本金または出資金の額が1億円以下の会社を[[除く]]）となる。', //p134
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '定期部分、養老部分ともに損金 → 定期部分は損金、養老部分は資産計上', //p182
                        '給与 → 資産計上', //p182
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '運営管理機関 → 資産管理機関または国民年金基金連合会', //p218
                        '正しい',
                        '一時払いの老齢給付金については、所得税法上の[[「退職手当等」]]とみなす。', //p219
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当所得"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '確定申告不要制度を選択した場合には、収入金額が課税対象となり、[[元本取得のための負債利子の額を控除できない]]。', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '1200万円 → 2000万円', //p58
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類と課税の範囲、事業年度"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '営業年度等が1年を超える場合には、[[その営業年度等を1年ごとに区分し、それぞれの期間（最後に1年未満の期間を生じたときは、その1年未満の期間）を事業年度とする]]こととされている。', //p120
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="固定資産税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '毎年12月31日 → 毎年1月1日', //p157
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '雑所得 → 事業所得', //p225
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '雑所得',
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '租税特別措置法の規定による課税標準',
                            content: '2つ → 3つ（総所得金額・退職所得金額・山林所得金額）',
                        }, //32 p36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定申告',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '年末調整',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '年金受給権の評価',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '益金に関する別段の定め',
                            content: 'すべて益金に算入 → 定められた一定額は益金に算入しない ',
                        }, //36 p126
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '不動産取得税',
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '個人年金保険料控除',
                            content: '一時払契約であること → 一時払契約は不可',
                        }, //38 p165
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '非課税給付金',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財形住宅貯蓄積立保険',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '租税の種類',
                            label: 'イ',
                            content: '普通税',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療費控除',
                            label: 'イ',
                            content: '10万円',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '遺留分',
                            label: 'ウ',
                            content: '3分の1',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続時精算課税制度',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '会社利益と所得金額の調整',
                            label: 'ア',
                            content: '税務調整',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人の住民税',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人の事業税',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '弔慰金の非課税限度額',
                            label: 'ウ',
                            content: '半年',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定給付企業年金',
                            label: 'エ',
                            content: '事業主',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            label: 'ア',
                            content: '登録免許税',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2024c" next-route="zeihou2023b" />
        </section>
    </SeihoTestLayout>
</template>
