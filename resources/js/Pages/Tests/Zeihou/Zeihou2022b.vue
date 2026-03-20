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
                    questionTitle="所得税法における所得"
                    :contents="[
                        '事業所得または雑所得 ↔︎ 不動産所得', //p18
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
                        '4 → 5',
                        '正しい',
                        '所得控除 → 税額控除', //p55
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
                    questionTitle="事業税"
                    :contents="[
                        '市町村が課税 → 道府県が課税', //p153
                        '正しい',
                        '各事業年度の所得 → 各事業年度の収入金額', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="租税の種類"
                    :contents="[
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
                        '正しい',
                        '配偶者を含めた納税者の親族 → 配偶者を除いた納税者の親族<br>合計所得金額が76万円以下 → 48万円以下', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額"
                    :contents="[
                        '正しい',
                        '正しい',
                        '税額控除はない → 法人税にも税額控除がある', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        '10年に満たず → 5年に満たず', //p164
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
                        '正しい',
                        '正しい',
                        '雑所得 → 事業所得', //p227
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '雑所得', content: '著述家や作家が受ける原稿料や印税 → 著述家や作家<b><u>以外</u></b>が受ける原稿料や印税' }, //31 p28
                        { questionTitle: '確定申告', content: '正しい' }, //32
                        { questionTitle: '相続税と贈与税', content: '異なった基準 → 同じ基準' }, //33 p64
                        { questionTitle: '生命保険と相続対策', content: '正しい' }, //34
                        { questionTitle: '教育資金一括贈与の非課税措置', content: '3000万円 → 1500万円' }, //35 p97
                        { questionTitle: '法人税の種類', content: '正しい' }, //36
                        { questionTitle: '有価証券の評価', content: '売買目的有価証券 → 売買目的<b><u>外</u></b>有価証券の説明' }, //37 p130-131
                        { questionTitle: '居住用超高層建築物の不動産取得税', content: '正しい' }, //38
                        { questionTitle: '確定拠出年金のポータビリティ', content: '正しい' }, //39
                        { questionTitle: '財形給付金制度', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '医療費控除', label: 'イ', content: '10万円' }, //41
                        { questionTitle: '死亡保険金の相続税課税', label: 'オ', content: '' }, //42
                        { questionTitle: '相続税の税額軽減', label: 'エ', content: '1億6,000万円' }, //43
                        { questionTitle: '贈与税の配偶者控除', label: 'イ', content: '20年' }, //44
                        { questionTitle: '相続時精算課税制度', label: 'ウ', content: '18歳' }, //45
                        { questionTitle: '法人の確定申告', label: 'ア', content: '2ヶ月' }, //46
                        { questionTitle: '同族会社', label: 'ア', content: '株主' }, //47
                        { questionTitle: '固定資産税の課税標準', label: 'オ', content: '' }, //48
                        { questionTitle: '確定給付企業年金', label: 'エ', content: '退職所得' }, //49
                        { questionTitle: '最低課税方式', label: 'エ', content: '契約者配当準備金損金算入額' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2022a" next-route="zeihou2022c" />
        </section>
    </SeihoTestLayout>
</template>
