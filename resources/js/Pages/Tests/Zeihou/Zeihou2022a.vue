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
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="租税の種類"
                    :contents="[
                        '正しい',
                        '消費税 → 印紙税、不動産取得税等', //p4
                        '該当する → 該当しない（都市計画税等は目的税）', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得控除"
                    :contents="[
                        '正しい',
                        '一律25000円 → 50000円', //p44
                        '65歳以上 → 70歳以上', //p47
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
                    questionTitle="企業保険の税務"
                    :contents="[
                        '金額の多寡にかかわらず、所得税は課税されない → 企業負担保険料が月額300以下の場合、所得税は課税されない', //p203
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
                        '正しい',
                        '配偶者を含めた納税者の親族 → 配偶者を除いた納税者の親族<br>合計所得金額が76万円以下 → 48万円以下', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '延納の制度 ↔︎ 物納の制度', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="住民税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '均等割額と法人税割額が課される → 均等割額のみ課される', //p152
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金の取扱い"
                    :contents="[
                        '雑所得 → 一時所得', //p174
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
                        { questionTitle: '租税の機能', content: '担税者は業者、納税義務者は消費者 → 担税者は消費者、納税義務者は業者' }, //31 p4
                        { questionTitle: '空き家に係る譲渡所得の特別控除の特例', content: '正しい' }, //32
                        { questionTitle: '所得税の課税標準', content: '所得税基本通達 → 租税特別措置法' }, //33 p36
                        { questionTitle: '遺産分割の方法', content: '相続税法 → 民法' }, //34 p72
                        { questionTitle: '教育資金一括贈与の非課税措置', content: '3000万円 → 1500万円' }, //35 p97
                        { questionTitle: '法人税の種類', content: '正しい' }, //36
                        { questionTitle: '法人課税の範囲', content: '非課税 → 本来の事業は非課税、収益事業に係る所得は課税' }, //37 p120
                        { questionTitle: '不動産取得税', content: '正しい' }, //38
                        { questionTitle: '確定拠出年金のポータビリティ', content: '正しい' }, //39
                        { questionTitle: '責任準備金繰入額', content: '計算した額の9割を限度 → 計算した額を限度' }, //40 p223
                        // 問41〜50
                        { questionTitle: '譲渡所得', label: 'ア', content: '5年' }, //41
                        { questionTitle: '退職所得控除額', label: 'イ', content: '20年以下' }, //42
                        { questionTitle: '所得税の税率', label: 'イ', content: '超過累進税率' }, //43
                        { questionTitle: '源泉徴収制度', label: 'ア', content: '翌月10日' }, //44
                        { questionTitle: '相続時精算課税制度', label: 'ウ', content: '18歳' }, //45
                        { questionTitle: '法人の確定申告', label: 'ア', content: '2ヶ月' }, //46
                        { questionTitle: '税務署長の調査', label: 'イ', content: '更生' }, //47
                        { questionTitle: '法人の住民税', label: 'エ', content: '従業者数' }, //48
                        { questionTitle: '生命保険料控除の対象とならない生命保険契約等', label: 'オ', content: '' }, //49
                        { questionTitle: '最低課税方式', label: 'エ', content: '契約者配当準備金損金算入額' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2023c" next-route="zeihou2022b" />
        </section>
    </SeihoTestLayout>
</template>
