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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
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
                    :contents="[
                        '正しい',
                        '法人擬制説 → 法人実在説', //p118
                        '法人実在説 → 法人擬制説', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続と相続税"
                    :contents="[
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
                    :contents="[
                        '市町村が課税 → 道府県が課税', //p153
                        '正しい',
                        '収入金額 × 3% → 収入金額 × 1%', //p156
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員報酬"
                    :contents="[
                        '給与所得 → 事業所得', //p227
                        '正しい',
                        '40万円 → 50万円', //p228
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        '生命保険料控除の対象となる → 対象とならない', //p164
                        '5年以上 → 10年以上', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税率"
                    :contents="[
                        '比例税率 → 累進税率 ', //p5
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税法における各種所得"
                    :contents="[
                        '正しい',
                        '正しい',
                        '不動産所得 ↔︎ 事業所得', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類と法人税の課税の範囲"
                    :contents="[
                        '正しい',
                        '正しい',
                        'すべての所得に課税 → 国立大学法人は非課税', //p120
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、退職金保険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '既払込保険料相当額 → 解約返戻金の額または支給時資産計上額', //p201
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        '正しい',
                        '10% → 7%', //p225
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '所得税額の計算', content: '順次低い税率 → 順次高い税率' }, //31 p51
                        { questionTitle: '空き家に係る譲渡所得の特別控除の特例', content: '正しい' }, //32
                        { questionTitle: '所得金額調整控除', content: '正しい' }, //33
                        { questionTitle: '確定申告', content: '1500万円 → 2000万円' }, //34
                        { questionTitle: '満期保険金等の源泉分離課税', content: '正しい' }, //35
                        { questionTitle: '特定退職金共済', content: '正しい' }, //36
                        { questionTitle: '確定拠出年金の老齢給付金', content: '一時所得 → 退職手当等' }, //37 p221
                        { questionTitle: '生命保険代理店の登録免許税', content: '正しい' }, //38
                        { questionTitle: '定期付養老保険の保険料', content: '正しい' }, //39
                        { questionTitle: '財形住宅貯蓄積立保険', content: '雑所得として課税 → 源泉分離課税（20%）' }, //40 p213
                        // 問41〜50
                        { questionTitle: '租税の種類', label: 'エ', content: '目的税' }, //41
                        { questionTitle: '譲渡所得', label: 'イ', content: '5年' }, //42
                        { questionTitle: '所得税の課税標準', label: 'オ', content: '' }, //43
                        { questionTitle: '生命保険料控除', label: 'イ', content: '40000円' }, //44
                        { questionTitle: '第2次相続', label: 'ア', content: '10年' }, //45
                        { questionTitle: '法人税法の特別規定', label: 'エ', content: '留保' }, //46
                        { questionTitle: '法人の確定申告', label: 'ア', content: '2ヶ月' }, //47
                        { questionTitle: '連結納税制度', label: 'オ', content: '' }, //48
                        { questionTitle: '税務署長の調査', label: 'イ', content: '更正' }, //49
                        { questionTitle: '弔慰金の非課税限度額', label: 'ア', content: '3年' }, //50
                    ]"
                />
            </div>
            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2020b" />
        </section>
    </SeihoTestLayout>
</template>
