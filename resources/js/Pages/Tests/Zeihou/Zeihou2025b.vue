<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2025年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
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
                        // rev: 2026-11-02 確認済み
                        '遺贈',
                        '10カ月',
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
                        // rev: 2026-11-02 確認済み
                        '6カ月',
                        '2カ月',
                        '損益計算書',
                        '更正',
                        '決定', // 問6〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'イ', //7
                        'ケ', //8
                        'カ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）－①"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '3親等',
                        '保険金受取人',
                        '5年',
                        '身体の傷害',
                        '配偶者', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'ケ', //12
                        'ウ', //13
                        'カ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）－②"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '10年',
                        '一時払',
                        '60歳',
                        '退職年金',
                        '1回', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'キ', //17
                        'カ', //18
                        'ケ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="租税の種類"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '流通税は、財産移転の事実に基づいて課税されるもので、[[印紙税、不動産取得税等]]が該当する。', //p4
                        '特定の費用に充てることを目的とするものを目的税といい、都市計画税は[[目的税]]である。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '個人が法人から贈与を受けた財産は、[[贈与税の課税価格に算入しない]]。', //p97
                        '正しい',
                        '４月１日から翌年３月31日 → １月１日から12月31日', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員報酬"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '雑所得 → 事業所得', //p225
                        '40万円 → 50万円', //p226
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '正しい',
                        '各事業年度末時点の資本金または基金の総額 → 各事業年度の収入金額', //p154
                        '資本金１億円以下 → 資本金１億円超', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '福利厚生費 → 給与', //p181
                        '正しい',
                        '資産計上 → 損金', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税率"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '比例税率 → 累進税率', //p5
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当所得"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '上場株式等の配当所得については、総合課税に代えて申告分離課税（大口株主等を[[除く]]）を選択できる。', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '相続時点での評価額 → 贈与時点での評価額', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '法人が支払を受ける利子等、配当等、給付補てん金、賞金などに係る所得税の額の全額は、原則として[[所得税額控除の対象となる]]。', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '社会保険料控除 → 生命保険料控除', //p210
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '税の基本用語',
                            content: '租税を納付する義務を負う者を[[納税義務者]]といい、実際に負担する義務を負う者を[[担税者]]という。消費税のような間接税の場合、担税者は[[消費者]]、納税義務者は[[業者]]である。', //p4
                        }, //31
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '非課税所得',
                            content: '租税特別措置法によるもの → その他の法律によるもの', //p9
                        }, //32
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '雑所得',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '医療費控除',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '確定申告',
                            content: '1500万円 → 2000万円', //p58
                        }, //35
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '障害者の相続税額軽減',
                            content: '65歳 → 85歳', //p92
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '外貨建て生命保険の取扱',
                            content: '保険料等の支払いについては[[その支払時点]]の「価格」、保険金等の受取については[[その受取の権利が確定した時点]]の「価格」で邦貨に換算して計算する（生命保険加入時ではない）。', //p178
                        }, //37
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '法人税の性格',
                            content: '現行法人税は、基本的に[[法人擬制説]]によっている。', //p117
                        }, //38
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '財形住宅貯蓄積立保険',
                            content: '要件に違反して解約した場合等は、差益に対して[[20％の源泉分離課税を行う]]。', //p212
                        }, //39
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '中途給付金',
                            content: '雑所得 → 一時所得', //p175
                        }, //40
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '所得税の税額控除額',
                            label: 'イ',
                            content: '二重課税',
                        }, //41
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '退職所得控除額',
                            label: 'ウ',
                            content: '40万円',
                        }, //42
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '所得税の課税標準',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '源泉徴収制度',
                            label: 'ア',
                            content: '翌月10日',
                        }, //44
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法人の種類と課税の範囲',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '定期金に関する権利',
                            label: 'エ',
                            content: '解約返戻金額',
                        }, //46
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '資産の評価益の益金不算入',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '固定資産税の課税標準',
                            label: 'ウ',
                            content: '3年',
                        }, //48
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '不動産取得税',
                            label: 'イ',
                            content: '道府県税',
                        }, //49
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2025a" next-route="zeihou2025c" />
        </section>
    </SeihoTestLayout>
</template>
