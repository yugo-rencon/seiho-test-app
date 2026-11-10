<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2020年度 フォームA";
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
                    questionTitle="各事業年度の所得に対する法人税-①"
                    :relatedProblems="['2020a11']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '公正妥当な会計処理の基準',
                        '税務調整',
                        '公平な税負担',
                        '二重課税',
                        '負債利子', // 問11〜15
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                        'コ', //13
                        'エ', //14
                        'ア', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="各事業年度の所得に対する法人税-②"
                    :relatedProblems="['2020a16']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '取得原価',
                        '会社更生法',
                        '保険業法',
                        '売買',
                        '時価法', // 問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'オ', //17
                        'ク', //18
                        'キ', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の配偶者控除と配偶者特別控除"
                    :relatedProblems="['2020a21']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '合計所得金額が1000万円以下の納税者が控除対象配偶者を有する場合、[[納税者の合計所得金額に応じて、38万円・26万円・13万円を控除することができる]]。', //p47
                        '65歳以上 → 70歳以上', //p47
                        '正しい',
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
                    questionTitle="住民税"
                    :relatedProblems="['2020a23']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '暦年課税主義 → 前年課税主義', //p149
                        '各事務所・事業所の数で按分 → 各事務所・事業所の従業員数で按分', //p152
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="地方税"
                    :relatedProblems="['2020a24']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '固定資産税は原則として[[市町村税]]だが、大規模な償却資産については一部[[道府県]]が課税する。', //p156
                        '正しい',
                        '[[相続による取得]]や法人の合併による取得など形式的な所有権の移転については課税されない。', //p159
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
                    questionTitle="所得税における所得控除"
                    :relatedProblems="['2020a26']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '扶養控除 → 社会保険料控除', //p41
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税"
                    :relatedProblems="['2020a27', '2020b49']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '法人税割額のみ → 均等割額のみ', //p152（新教科書に記載なし）
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金の取扱"
                    :relatedProblems="['2020a28']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '10倍未満 → 5倍未満', //p173
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
                    :relatedProblems="['2020a29', '2020b50']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '社会保険料控除 → 生命保険料控除', //p210
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
                            // rev: 2026-08-23 確認済み
                            questionTitle: '租税の種類',
                            relatedProblems: ['2020a31', '2020a41', '2020b31', '2020b41', '2020c41'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '空き家に係る譲渡所得の特別控除の特例',
                            relatedProblems: ['2020a32', '2020b32', '2020c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '租税特別措置法の課税標準',
                            relatedProblems: ['2020a33'],
                            content: '所得税法の規定による課税標準は、[[総所得金額、退職所得金額、山林所得金額の3つ]]である。', //p36
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '復興特別所得税',
                            relatedProblems: ['2020a34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '相続税の申告と納税',
                            relatedProblems: ['2020a35', '2020b27'],
                            content: '6ヶ月以内 → 10ヶ月以内', //p95
                        }, //35
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '贈与税の配偶者控除',
                            relatedProblems: ['2020a36'],
                            content: '婚姻期間[[20年以上]]の配偶者から、居住用不動産またはその取得のための金銭を贈与された場合には、その年分の贈与税の課税価格から2000万円を限度として控除される。なお、この措置は、同一の配偶者からの贈与について[[一生に一回]]適用することができる。', //p100
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '法人の確定申告',
                            relatedProblems: ['2020a37', '2020c47'],
                            content: ' 3ヶ月以内 → 2ヶ月以内', //p140
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '居住用超高層建築物の不動産取得税',
                            relatedProblems: ['2020a38'],
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
                            questionTitle: '給与所得',
                            relatedProblems: ['2020a42'],
                            label: 'ウ',
                            content: '特定支出',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '退職所得控除額',
                            relatedProblems: ['2020a43'],
                            label: 'イ',
                            content: '20年',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の税率',
                            relatedProblems: ['2020a44'],
                            label: 'ウ',
                            content: '山林所得',
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
                            questionTitle: '法人の種類と課税の範囲',
                            relatedProblems: ['2020a46'],
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '同族会社',
                            relatedProblems: ['2020a47'],
                            label: 'ウ',
                            content: '50%',
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
                            questionTitle: '個人の事業税',
                            relatedProblems: ['2020a49'],
                            label: 'ア',
                            content: '第3種事業',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '固定資産税の課税標準',
                            relatedProblems: ['2020a50'],
                            label: 'ウ',
                            content: '200㎡',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2021c" next-route="zeihou2020b" />
        </section>
    </SeihoTestLayout>
</template>
