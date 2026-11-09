<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2022年度 フォームA";
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
                    questionTitle="所得税課税における所得控除-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '横領',
                        '1/10',
                        '200万円',
                        '選択によって',
                        '労働保険', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'ア', //2
                        'エ', //3
                        'キ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税課税における所得控除-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '2,000円',
                        '27万円',
                        '75万円',
                        '10万円',
                        '2,500万円', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'オ', //7
                        'キ', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="租税の種類"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '流通税は、財産移転の事実に基づいて課税されるもので、[[印紙税、不動産取得税等]]が該当する。', //p4
                        '特定の費用に充てることを目的とするものを目的税といい、[[都市計画税は目的税である]]。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得控除"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '一律25000円 → 一律50000円', //p44
                        '65歳以上 → 70歳以上', //p47
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '通常10年以内 → 通常5年以内', //p96
                        '物納に充てられる財産の種類と順序は、第一順位（国債・地方債・上場株式等、不動産、船舶）、第二順位（非上場株式等）、第三順位（動産）', //p95-96
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税法における別段の定め"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '50% → 95%', //p126
                        '法人の支出した寄附金について税法は[[一定の限度を定め、これを超える部分については損金の額に算入しない]]ものとしている。', //p126
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業保険の税務"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '[[企業負担保険料が月額300円以下である場合]]には、従業員、役員に対して所得税は課税されない。', //p202
                        '所得税は課税されない → 所得税の課税対象', //p204-205
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="各種所得の金額の計算"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '利子所得 → 配当所得', //p15
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="扶養控除"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '扶養親族とは、配偶者を[[除く]]納税者の親族、児童福祉法の規定により里親に委託された児童、老人福祉法の規定により委託された老人で、納税者と生計を一にするもののうち、合計所得金額が[[62万円以下]]である者をいう。', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '贈与税には、[[物納の制度]]はないが、一定の要件のもとに[[延納の制度]]が認められている。', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="住民税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '均等割額と法人税割額が課される → 均等割額のみ課される', //p152（新教科書に記載なし）
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金の取扱い"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '雑所得 → 一時所得', //p173
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
                            // rev: 2026-11-09 確認済み
                            questionTitle: '租税の機能',
                            content: '租税を納付する義務を負う者を[[納税義務者]]といい、実際に負担する義務を負う者を[[担税者]]という。消費税のような間接税の場合、担税者は[[消費者]]、納税義務者は[[業者]]である。', //p4
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '空き家に係る譲渡所得の特別控除の特例',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '所得税の課税標準',
                            content: '所得税基本通達 → 租税特別措置法', //p36
                        }, //33
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '遺産分割の方法',
                            content: '相続税法 → 民法', //p73
                        }, //34
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '教育資金一括贈与の非課税措置',
                            content: '3000万円 → 1000万円', //p98
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人税の種類',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '法人課税の範囲',
                            content: '本来の事業におついては非課税、収益事業に係る所得は課税される。', //p119
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '不動産取得税',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定拠出年金のポータビリティ',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '責任準備金繰入額',
                            content: '責任準備金繰入額は、保険料及び責任準備金の算出方法書において定められている保険料の計算基礎を基として[[計算した額を限度]]として損金に算入される。', //p221
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '譲渡所得',
                            label: 'ア',
                            content: '5年',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '退職所得控除額',
                            label: 'イ',
                            content: '20年以下',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の税率',
                            label: 'イ',
                            content: '超過累進税率',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '源泉徴収制度',
                            label: 'ア',
                            content: '翌月10日',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続時精算課税制度',
                            label: 'ウ',
                            content: '18歳',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人の確定申告',
                            label: 'ア',
                            content: '2ヶ月',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '税務署長の調査',
                            label: 'イ',
                            content: '更正',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人の住民税',
                            label: 'エ',
                            content: '従業者数',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険料控除の対象とならない生命保険契約等',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '最低課税方式',
                            label: 'エ',
                            content: '契約者配当準備金損金算入額',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2023c" next-route="zeihou2022b" />
        </section>
    </SeihoTestLayout>
</template>
