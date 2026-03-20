<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2022年度 フォームC";
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
                    questionTitle="相続税の税額計算-①"
                    :contents="[
                        '3年',
                        '基礎控除',
                        '法定相続分',
                        '相続税の総額',
                        '2割', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'カ', //2
                        'コ', //3
                        'ケ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の税額計算-②"
                    :contents="[
                        '公益',
                        '死亡退職金',
                        'なる',
                        '1億6,000万円',
                        '10年', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'キ', //7
                        'コ', //8
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税-①"
                    :contents="[
                        '直接税',
                        '比例税率',
                        '法人擬制説',
                        '無償',
                        '税務調整', //問11〜15
                    ]"
                    :labels="[
                        'カ', //11
                        'キ', //12
                        'ク', //13
                        'コ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税-②"
                    :contents="[
                        '内国法人',
                        '二重課税',
                        '取得原価',
                        '会社更生法',
                        '保険業法', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'キ', //17
                        'ウ', //18
                        'イ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問21
                        {
                            answer: '425万円',
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
                                    value: ['勤続年数：25年', '退職金：2000万円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['退職所得控除額 ＝ 800万円 ＋ 70万円 ×（25年 − 20年）＝ 1,150万円', '退職所得 ＝ （2,000万円 − 1,150万円）× 1/2 ＝ 425万円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 425万円',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ウ', //21 p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続"
                    :contents="[
                        '相続税は相続税法、贈与税は贈与税法により規定 → いずれも相続税法により規定', //p64
                        '2つの方法 → 3つの方法（相続・贈与・譲渡）', //p65
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        '正しい',
                        '通常10年以内 → 通常5年以内', //p95
                        '①：動産 → 国債・地方債・上場株式等<br>②：国債・地方債・上場株式等 → 上場株式および不動産のうち物納劣後財産に該当するもの', //p95-96
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税法における別段の定め"
                    :contents="[
                        '受取配当額の50% → 95%', //p127
                        '全額を損金に算入 → 一定の限度を定め、超える部分は損金に算入しない', //p127,
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        '確定債権 → 確定債務', //p223-224
                        '正しい',
                        '総資産の帳簿価額 × 60/100 → (総資産の帳簿価額 - 総負債の帳簿価額) × 60/100', //p224
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の所得控除"
                    :contents="[
                        '120万円 → 200万円', //p39
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="扶養控除"
                    :contents="[
                        '正しい',
                        '配偶者を含めた納税者の親族 → 配偶者を除いた納税者の親族<br>合計所得金額が76万円以下 → 48万円以下', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :contents="[
                        '所得金額 × 15% → 所得金額 × 23.2%', //p133
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税"
                    :contents="[
                        '個人の住民税に地域割は含まない', //p147
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度の税制上の取扱い"
                    :contents="[
                        '正しい',
                        '正しい',
                        '雑所得で課税対象 → 非課税', //p221
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '標準税率', content: '正しい' }, //31
                        { questionTitle: '特定支出控除', content: '年末調整 → 確定申告' }, //32
                        { questionTitle: '相続の放棄', content: '代襲相続の権利を有する → 代襲相続の権利がない' }, //33 p73
                        { questionTitle: '生命保険契約の権利の評価', content: '既払込保険料総額 → 解約返戻金の額' }, //34 p111
                        { questionTitle: '教育資金一括贈与の非課税措置', content: '3000万円 → 1500万円' }, //35 p97
                        { questionTitle: '法人税の種類', content: '正しい' }, //36
                        { questionTitle: '上場株式の評価', content: '最も高い価格 → 最も低い価格' }, //37 p116
                        { questionTitle: '固定資産税の課税標準', content: '5年ごと → 3年ごと' }, //38 p158
                        { questionTitle: '確定拠出年金のポータビリティ', content: '正しい' }, //39
                        { questionTitle: '営業職員報酬の必要経費', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '居住用財産譲渡の特例', label: 'ア', content: '自己' }, //41
                        { questionTitle: '雑損控除', label: 'ウ', content: '5万円' }, //42
                        { questionTitle: '遺留分', label: 'ウ', content: '3分の1' }, //43
                        { questionTitle: '相続税の未成年者控除', label: 'ア', content: '18歳' }, //44
                        { questionTitle: '相続時精算課税制度', label: 'ウ', content: '18歳' }, //45
                        { questionTitle: '法人の確定申告', label: 'ア', content: '2ヶ月' }, //46
                        { questionTitle: '法人の住民税', label: 'ア', content: '法人税制' }, //47
                        { questionTitle: '不動産取得税', label: 'イ', content: '道府県税' }, //48
                        { questionTitle: '保険金等受取時の税務', label: 'オ', content: '' }, //49
                        { questionTitle: '最低課税方式', label: 'エ', content: '契約者配当準備金損金算入額' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2022b" next-route="zeihou2021a" />
        </section>
    </SeihoTestLayout>
</template>
