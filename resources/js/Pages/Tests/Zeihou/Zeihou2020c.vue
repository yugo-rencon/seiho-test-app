<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2020年度 フォームC";
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
                    questionTitle="相続税・贈与税の財産評価-①"
                    :relatedProblems="['2020a1', '2020b1', '2020c1']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '時価',
                        '現況',
                        '相続税財産評価基本通達',
                        '高い',
                        '解約返戻金額', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'ケ', //2
                        'オ', //3
                        'キ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税・贈与税の財産評価-②"
                    :relatedProblems="['2020a6', '2020b6', '2020c6']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '路線価',
                        '倍率',
                        '固定資産税評価額',
                        '家庭裁判所の審判',
                        '存続年数', // 問6〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ケ', //7
                        'イ', //8
                        'ウ', //9
                        'キ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税-①"
                    :relatedProblems="['2020c11']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '法人',
                        '公益',
                        '選挙管理委員会',
                        '30歳',
                        '1500万円', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'イ', //12
                        'コ', //13
                        'オ', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税-②"
                    :relatedProblems="['2020c16']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '20歳',
                        '110万円',
                        '居住用不動産',
                        '2月1日から3月15日',
                        '物納', // 問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'エ', //17
                        'ク', //18
                        'ケ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の性格"
                    :relatedProblems="['2020c21']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '法人擬制説 → 法人実在説', //p117
                        '法人実在説 → 法人擬制説', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続と相続税"
                    :relatedProblems="['2020a22', '2020b22', '2020c22']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '財産処分として効力は生じない → 受遺者の承諾の有無によらず効力が生じる', //p72
                        '除いて計算 → 含めて計算', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :relatedProblems="['2020c23']"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '市町村が課税 → 道府県が課税', //p152
                        '正しい',
                        '収入金額 × 3% → 収入金額 × 1%', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員報酬"
                    :relatedProblems="['2020c24']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '給与所得 → 事業所得', //p225
                        '正しい',
                        '40万円 → 50万円', //p226
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :relatedProblems="['2020a25', '2020b25', '2020c25', '2020c44']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '生命保険料控除の対象となる → 対象とならない', //p164
                        '5年以上 → 10年以上', //p164
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税率"
                    :relatedProblems="['2020c26']"
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
                    questionTitle="所得税法における各種所得"
                    :relatedProblems="['2020c27']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        'アパート、貸間等のように食事を供さない場合の所得は[[不動産所得]]となるが、下宿等のように食事を供する場合には[[事業所得]]または[[雑所得]]となる。', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類と法人税の課税の範囲"
                    :relatedProblems="['2020c28']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '国立大学法人は公共法人であり、非課税となっている。',//p119
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、退職金保険"
                    :relatedProblems="['2020c29']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '従業員および役員に対しては、[[支給時解約返戻金の額または支給時資産計上額が退職所得として課税される]]。', //p200
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :relatedProblems="['2020a30', '2020b30', '2020c30']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '10% → ７%', //p223
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '所得税額の計算',
                            relatedProblems: ['2020b42', '2020c31'],
                            content: '順次低い税率 → 順次高い税率', //p52
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '空き家に係る譲渡所得の特別控除の特例',
                            relatedProblems: ['2020a32', '2020b32', '2020c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得金額調整控除',
                            relatedProblems: ['2020c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '確定申告',
                            relatedProblems: ['2020c34'],
                            content: '1500万円 → 2000万円', //p58
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '満期保険金等の源泉分離課税',
                            relatedProblems: ['2020c35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特定退職金共済',
                            relatedProblems: ['2020c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '確定拠出年金の老齢給付金',
                            relatedProblems: ['2020c37'],
                            content: '一時払いの老齢給付金については、所得税法上の[[「退職手当等」]]とみなす。', //p219
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険代理店の登録免許税',
                            relatedProblems: ['2020c38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '定期付養老保険の保険料',
                            relatedProblems: ['2020a39', '2020b39', '2020c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '財形住宅貯蓄積立保険',
                            relatedProblems: ['2020a40', '2020b40', '2020c40'],
                            content: '要件に違反して解約した場合等は、差益に対して[[20％の源泉分離課税を行う]]。', //p212
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '租税の種類',
                            relatedProblems: ['2020a31', '2020a41', '2020b31', '2020b41', '2020c41'],
                            label: 'エ',
                            content: '目的税',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '譲渡所得',
                            relatedProblems: ['2020c42'],
                            label: 'イ',
                            content: '5年',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の課税標準',
                            relatedProblems: ['2020c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険料控除',
                            relatedProblems: ['2020a25', '2020b25', '2020c25', '2020c44'],
                            label: 'イ',
                            content: '40000円',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '第2次相続',
                            relatedProblems: ['2020a45', '2020b45', '2020c45'],
                            label: 'ア',
                            content: '10年',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人税法の特別規定',
                            relatedProblems: ['2020c46'],
                            label: 'エ',
                            content: '留保',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人の確定申告',
                            relatedProblems: ['2020a37', '2020c47'],
                            label: 'ア',
                            content: '2ヶ月',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '連結納税制度',
                            relatedProblems: ['2020a48', '2020b48', '2020c48'],
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '税務署長の調査',
                            relatedProblems: ['2020c49'],
                            label: 'イ',
                            content: '更正',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '弔慰金の非課税限度額',
                            relatedProblems: ['2020c50'],
                            label: 'ア',
                            content: '3年',
                        }, //50
                    ]"
                />
            </div>
            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2020b" />
        </section>
    </SeihoTestLayout>
</template>
