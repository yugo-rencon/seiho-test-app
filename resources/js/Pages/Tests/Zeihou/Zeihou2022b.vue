<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2022年度 フォームB";
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
                    questionTitle="所得税の計算-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '10種類',
                        '長期譲渡所得',
                        '2分の1',
                        '退職所得',
                        '所得控除', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'ク', //2
                        'ア', //3
                        'キ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の計算-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '算出税額',
                        '税額控除',
                        '租税特別措置法',
                        '差引所得税額',
                        '源泉徴収', //問６〜10
                    ]"
                    :labels="[
                        'エ', //6
                        'キ', //7
                        'ク', //8
                        'ウ', //9
                        'イ', //10
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
                    questionTitle="所得税法における所得"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        'アパート、貸間等のように食事を供さない場合の所得は[[不動産所得]]となるが、下宿等のように食事を供する場合には[[事業所得または雑所得]]となる。', //p18
                        '確定申告は不要 → 確定申告が必要', //p21
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税額の計算"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '4 → 5', //p53
                        '正しい',
                        '所得控除 → 税額控除', //p56
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
                    questionTitle="事業税"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '市町村が課税 → 道府県が課税', //p152
                        '正しい',
                        '各事業年度の所得 → 各事業年度の収入金額', //p154
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="租税の種類"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '財産税 → 流通税', //p4
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
                    questionTitle="法人税額"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '法人が支払を受ける利子等、配当等、給付補てん金、賞金などに係る所得税の額の全額は、原則として[[所得税額控除の対象となる]]。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '10年に満たず → 5年に満たず', //p163
                        '正しい',
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
                        '正しい',
                        '雑所得 → 事業所得', //p225
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '雑所得',
                            content: '著述家や作家が受ける原稿料や印税 → 著述家や作家<b><u>以外</u></b>が受ける原稿料や印税',
                        }, //31 p28
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定申告',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '相続税と贈与税',
                            content: '財産の評価についても相続財産の評価と贈与財産の評価は[[同じ基準]]にしたがって行われる。', //p65
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険と相続対策',
                            content: '正しい',
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
                            questionTitle: '有価証券の評価',
                            content: '売買目的有価証券 → 売買目的<b><u>外</u></b>有価証券の説明',
                        }, //37 p130-131
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '居住用超高層建築物の不動産取得税',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定拠出年金のポータビリティ',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財形給付金制度',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療費控除',
                            label: 'イ',
                            content: '10万円',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '死亡保険金の相続税課税',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続税の税額軽減',
                            label: 'エ',
                            content: '1億6,000万円',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '贈与税の配偶者控除',
                            label: 'イ',
                            content: '20年',
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
                            questionTitle: '同族会社',
                            label: 'ア',
                            content: '株主',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '固定資産税の課税標準',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定給付企業年金',
                            label: 'エ',
                            content: '退職所得',
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
            <TestNavigationButtons previous-route="zeihou2022a" next-route="zeihou2022c" />
        </section>
    </SeihoTestLayout>
</template>
