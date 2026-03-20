<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2021年度 フォームB";
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
                    questionTitle="所属税の生命保険料控除-①"
                    :contents="[
                        '6親等',
                        '4万円',
                        '5年',
                        '感染症',
                        '身体の傷害', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'イ', //2
                        'ウ', //3
                        'キ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所属税の生命保険料控除-②"
                    :contents="[
                        '被保険者',
                        '10年',
                        '60歳',
                        '退職年金',
                        '1回', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'エ', //7
                        'コ', //8
                        'カ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税-①"
                    :contents="[
                        '法人',
                        '選挙の候補者',
                        '110万円',
                        '20年',
                        '2,000万円', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'ク', //12
                        'イ', //13
                        'コ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税-②"
                    :contents="[
                        '2月1日',
                        '納税地',
                        '利子税',
                        '10万円',
                        '5年', //問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'ケ', //17
                        'コ', //18
                        'ウ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="各種所得"
                    :contents="[
                        '所得税法 → 租税特別措置法', //p16
                        '正しい',
                        '不動産所得 ↔︎ 事業所得または雑所得', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺産分割の方法"
                    :contents="[
                        '正しい',
                        '満18歳以上 → 満15歳以上', //p72
                        '法定相続分 → 遺留分', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類と課税の範囲"
                    :contents="[
                        '公共法人は非課税', //p120
                        '非課税 → 本来の事業については非課税、収益事業に係る所得については課税', //120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の税制上の取扱い"
                    :contents="[
                        '正しい',
                        '課税方法が異なる → 課税方法の区別はない', //p221
                        '雑所得 → 非課税', //p221
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        '正しい',
                        '翌期配当所要領の8割を限度 → 翌期配当所要領を限度<br>責任準備金と異なり未確定債務 → 責任準備金と同様に確定債務', //p223-224
                        '損金算入は否認されず → 損金算入は否認される<br>益金不算入の制度が適用 → 適用されない', //p224
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の所得"
                    :contents="[
                        '正しい',
                        '公的年金等控除の適用はない → 適用される', //p28-29
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        '6ヶ月以内 → 10ヶ月以内', //p94
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="連結納税制度"
                    :contents="[
                        '外国法人を含む → 外国法人を除く', //p138
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="固定資産税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '3分の1 ↔︎ 6分の1', //p159
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人が支払う事業保険の保険料の取扱い"
                    :contents="[
                        '正しい',
                        '全額が損金または給与 → 1/10が損金または給与、9/10が資産計上', //p183
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '譲渡所得', content: '10年以内 → 5年以内' }, //31 p22
                        { questionTitle: '租税特別措置法の規定による課税標準', content: '正しい' }, //32
                        { questionTitle: '確定申告定', content: '正しい' }, //33
                        { questionTitle: '青色申告制度', content: '正しい' }, //34
                        { questionTitle: '保険金の非課税額', content: '1000万円 → 500万円' }, //35 p77
                        { questionTitle: '暦年課税・前年課税', content: '所属税 ↔︎ 住民税' }, //36 p150
                        { questionTitle: '居住用超高層建築物の不動産取得税', content: '最上階を100として階が1つ減るごとに → 1階を100として階が1つ増すごとに' }, //37 p162
                        { questionTitle: '財形住宅貯蓄積立保険', content: '財形貯蓄積立保険 → 財形年金' }, //38 p213
                        { questionTitle: '転換時の税務', content: '正しい' }, //39
                        { questionTitle: '営業職員報酬', content: 'すべて事業所得 → 固定給部分は給与所得、それ以外は事業所得' }, //40 p227
                        // 問41〜50
                        { questionTitle: '所得税の所得控除', label: 'イ', content: '15種類' }, //41
                        { questionTitle: '医療費控除（セルフメディケーション）', label: 'オ', content: '' }, //42
                        { questionTitle: '雑所得', label: 'ウ', content: '必要経費' }, //43
                        { questionTitle: '税額控除', label: 'エ', content: '配当控除' }, //44
                        { questionTitle: '未成年者控除', label: 'オ', content: '' }, //45
                        { questionTitle: '法人税の課税標準', label: 'オ', content: '' }, //46
                        { questionTitle: '同族会社', label: 'ア', content: '3人' }, //47
                        { questionTitle: '個人の事業税', label: 'ア', content: '第3種' }, //48
                        { questionTitle: '確定給付企業年金制度の開始', label: 'ア', content: '年金規約' }, //49
                        { questionTitle: '団体定期保険の保険料', label: 'ウ', content: '生命保険料控除' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2021a" next-route="zeihou2021c" />
        </section>
    </SeihoTestLayout>
</template>
