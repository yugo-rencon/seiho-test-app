<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2023年度 フォームC";
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
                    questionTitle="住民税-①"
                    :contents="[
                        '均等割額のみ',
                        '4%',
                        '6%',
                        '寡婦またはひとり親',
                        '43万円', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'カ', //2
                        'キ', //3
                        'ア', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="住民税-②"
                    :contents="[
                        '普通徴収',
                        '市町村',
                        '5月',
                        '均等割額のみ',
                        '従業者数', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'イ', //7
                        'コ', //8
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度-①"
                    :contents="[
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
                <QuestionTemp4
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問21
                        {
                            answer: '800万円',
                            questionTitle: '退職所得の金額',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['【退職所得】', '（収入金額 − 退職所得控除額）× 1/2 ･･･ 通常の場合', '収入金額 − 退職所得控除額 ･･･ 勤続5年以下の法人役員等の場合'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['【退職所得控除額】', '40万円 × 勤続年数（最低80万円） ･･･ 勤続年数20年以下', '800万円 ＋ 70万円 ×（勤続年数 − 20年） ･･･ 勤続年数20年超'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['勤続年数5年の法人役員', '退職金：1000万円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['退職所得控除額 ＝ 40万円 × 5年 ＝ 200万円', '退職所得 ＝ 1,000万円 − 200万円 ＝ 800万円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 800万円',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //21 p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        '公益事業用財産は非課税財産に該当', //p76,81
                        '全額が課税財産 → 被相続人負担分のみ課税財産', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺言"
                    :contents="[
                        '正しい',
                        '満18歳以上 → 満15歳以上', //p72
                        '遺留分も確保されない → 遺留分が確保される', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :contents="[
                        '正しい',
                        '定期部分、養老部分ともに損金 → 定期部分は損金、養老部分は資産計上', //p183
                        '給与 → 資産計上', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税・贈与税の財産評価"
                    :contents="[
                        '解約返戻金のみで評価 → 解約返戻金や一時金相当額、予定利率等を基に算出した金額のいずれか高い金額で評価', //p111
                        '最も高い価格で評価 → 最も低い価格で評価', //p116
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当所得"
                    :contents="[
                        '正しい',
                        '正しい',
                        '控除可能である → 控除できない', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税"
                    :contents="[
                        '正しい',
                        '12種類 → 15種類', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続"
                    :contents="[
                        '相続税は相続税法、贈与税は贈与税法により規定 → いずれも相続税法により規定', //p64
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="同族会社の留保金課税"
                    :contents="[
                        '正しい',
                        '1億円以下の会社に限る → 1億円以下の会社を除く', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険を払済保険へ変更した場合の税務上の取扱"
                    :contents="[
                        '責任準備金相当額 → 解約返戻金相当額', //p200
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
                        { questionTitle: '租税の種類', content: '正しい' }, //31
                        { questionTitle: '相続人', content: '代理相続 → 代襲相続' }, //32 p67
                        { questionTitle: '確定申告', content: '正しい' }, //33
                        { questionTitle: '法人税の性格', content: '法人実在説 → 法人擬制説' }, //34 p118
                        { questionTitle: '法人の確定申告', content: ' 3ヶ月以内 → 2ヶ月以内' }, //35 p141
                        { questionTitle: '地方税', content: '正しい' }, //36
                        { questionTitle: '不動産取得税', content: '正しい' }, //37
                        { questionTitle: '転換時の税務上の取扱', content: '正しい' }, //38
                        { questionTitle: '確定拠出年金の老齢給付金', content: '一時所得 → 雑所得' }, //39 p221
                        { questionTitle: '財形住宅貯蓄積立保険', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '一時所得', label: 'イ', content: '営利' }, //41
                        { questionTitle: '所得税の課税標準', label: 'ウ', content: '租税特別措置法' }, //42
                        { questionTitle: '配偶者控除', label: 'オ', content: '' }, //43
                        { questionTitle: '相続時精算課税制度', label: 'オ', content: '' }, //44
                        { questionTitle: '未成年者控除・障害者控除', label: 'イ', content: '10万円' }, //45
                        { questionTitle: '法人の種類と課税の範囲', label: 'イ', content: '公共法人' }, //46
                        { questionTitle: '有価証券の評価', label: 'エ', content: '償却原価' }, //47
                        { questionTitle: '固定資産税の課税標準', label: 'ウ', content: '3年' }, //48
                        { questionTitle: '確定給付企業年金', label: 'エ', content: '事業主' }, //49
                        { questionTitle: '生命保険代理店の事業免許等に係る税', label: 'ア', content: '登録免許税' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2023b" next-route="zeihou2022a" />
        </section>
    </SeihoTestLayout>
</template>
