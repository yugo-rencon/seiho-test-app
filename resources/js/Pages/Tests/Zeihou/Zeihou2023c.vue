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
                    :relatedProblems="['2023c1']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
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
                    :relatedProblems="['2023c6']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
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
                    :relatedProblems="['2023a11', '2023b11', '2023c11']"
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
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
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
                <QuestionTemp4
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問21
                        {
                            // rev: 2026-11-09 確認済み
                            answer: '800万円',
                            questionTitle: '退職所得の金額',
                            relatedProblems: ['2023c21'],
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
                    :relatedProblems="['2023a22', '2023b22', '2023c22']"
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
                    questionTitle="遺言"
                    :relatedProblems="['2023c23']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '満18歳以上 → 満15歳以上', //p73
                        '遺留分も確保されない → 遺留分が確保される', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :relatedProblems="['2023a24', '2023b24', '2023c24']"
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
                    questionTitle="相続税・贈与税の財産評価"
                    :relatedProblems="['2023c25']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '年金の種類に問わず、[[解約返戻金や一時金相当額、予定利率等を基に算出した金額のいずれか高い金額で評価]]する。', //p110
                        '最も高い価格で評価 → 最も低い価格で評価', //p115
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当所得"
                    :relatedProblems="['2023a26', '2023b26', '2023c26']"
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
                    questionTitle="所得税"
                    :relatedProblems="['2023c27']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
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
                    :relatedProblems="['2023c28']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '相続税と贈与税は密接な関係にあるため、これら2つの税は、[[いずれも相続税法という一つの法律の中で規定されている]]。', //p65
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="同族会社の留保金課税"
                    :relatedProblems="['2023c29']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '留保金課税の場合の同族要件は、1株主グループによる株式等の保有割合が50％超の特定同族会社の場合（資本金または出資金の額が1億円以下の会社を[[除く]]）となる。', //p134
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険を払済保険へ変更した場合の税務上の取扱"
                    :relatedProblems="['2023c30']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '責任準備金相当額 → 解約返戻金相当額', //p199
                        '正しい',
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
                            questionTitle: '租税の種類',
                            relatedProblems: ['2023a41', '2023c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '相続人',
                            relatedProblems: ['2023c32'],
                            content: '代理相続 → 代襲相続', //p68
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定申告',
                            relatedProblems: ['2023a33', '2023b33', '2023c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '法人税の性格',
                            relatedProblems: ['2023b25', '2023c34'],
                            content: '法人実在説 → 法人擬制説', //p117
                        }, //34
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '法人の確定申告',
                            relatedProblems: ['2023c35'],
                            content: ' 3ヶ月以内 → 2ヶ月以内', //p140
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '地方税',
                            relatedProblems: ['2023c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '不動産取得税',
                            relatedProblems: ['2023a37', '2023b37', '2023c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '転換時の税務上の取扱',
                            relatedProblems: ['2023c38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '確定拠出年金の老齢給付金',
                            relatedProblems: ['2023c39'],
                            content: '一時所得 → 雑所得', //p219
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財形住宅貯蓄積立保険',
                            relatedProblems: ['2023a40', '2023b40', '2023c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '一時所得',
                            relatedProblems: ['2023c41'],
                            label: 'イ',
                            content: '営利',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の課税標準',
                            relatedProblems: ['2023c42'],
                            label: 'ウ',
                            content: '租税特別措置法',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '配偶者控除',
                            relatedProblems: ['2023c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続時精算課税制度',
                            relatedProblems: ['2023a44', '2023b44', '2023c44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '未成年者控除・障害者控除',
                            relatedProblems: ['2023c45'],
                            label: 'イ',
                            content: '10万円',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人の種類と課税の範囲',
                            relatedProblems: ['2023c46'],
                            label: 'イ',
                            content: '公共法人',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '有価証券の評価',
                            relatedProblems: ['2023c47'],
                            label: 'エ',
                            content: '償却原価',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '固定資産税の課税標準',
                            relatedProblems: ['2023c48'],
                            label: 'ウ',
                            content: '3年',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定給付企業年金',
                            relatedProblems: ['2023a49', '2023b49', '2023c49'],
                            label: 'エ',
                            content: '事業主',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            relatedProblems: ['2023a50', '2023b50', '2023c50'],
                            label: 'ア',
                            content: '登録免許税',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2023b" next-route="zeihou2022a" />
        </section>
    </SeihoTestLayout>
</template>
