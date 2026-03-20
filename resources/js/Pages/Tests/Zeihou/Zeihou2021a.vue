<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2021年度 フォームA";
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
                    questionTitle="所得税における所得-①"
                    :contents="[
                        '合同運用信託',
                        '法人',
                        '航空機',
                        '通勤費',
                        '勤務必要経費', // 問１〜５
                    ]"
                    :labels="[
                        'エ', //1
                        'コ', //2
                        'イ', //3
                        'ク', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税における所得-②"
                    :contents="[
                        '5',
                        '50',
                        '全額',
                        '2分の1の額',
                        '70', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'エ', //7
                        'コ', //8
                        'キ', //9
                        'オ', //10
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
                    questionTitle="租税の種類"
                    :contents="[
                        '正しい',
                        '財産税 → 流通税', //p4
                        '該当する → 該当しない（都市計画税、国民健康保険税等は目的税）', //p4
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
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        '12月31日 → 1月1日', //p103
                        '12月31日において20歳以上 → 1月1日において18歳以上', //p103
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :contents="[
                        '資本金1000万円 → 資本金1億円', //p133
                        '減税される → 税額が追加課税される', //p136
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金の取扱"
                    :contents="[
                        '正しい',
                        '終身保険は源泉分離課税の対象外', //p174
                        '贈与税の課税対象 → 相続税の課税対象', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        '正しい',
                        'すべて確定申告が必要 → 一定条件で不要（収入金額400万以下など）', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        '正しい',
                        '正しい',
                        '1,000万円 → 500万円', //p79
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
                    questionTitle="確定拠出年金制度の税制上の取扱い"
                    :contents="[
                        '正しい',
                        '正しい',
                        '雑所得 → 退職手当等', //p221
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '制限税率', content: '正しい' }, //31
                        { questionTitle: '雑所得', content: '正しい' }, //32
                        { questionTitle: '確定申告定', content: '正しい' }, //33
                        { questionTitle: '相続', content: '正しい' }, //34
                        { questionTitle: '法人の種類と法人税の課税の範囲', content: 'すべての所得について課税 → 国立大学法人は非課税' }, //35 p120
                        { questionTitle: '不動産取得税', content: '贈与による取得は課税対象' }, //36 p160
                        { questionTitle: '居住用超高層建築物の不動産取得税', content: '最上階を100として階が1つ減るごとに → 1階を100として階が1つ増すごとに' }, //37 p162
                        { questionTitle: '財形住宅貯蓄積立保険', content: '財形貯蓄積立保険 → 財形年金' }, //38 p213
                        { questionTitle: '確定拠出年金のポータビリティ', content: '勤労者退職金共済機構 → 国民年金基金連合会' }, //39 p219
                        { questionTitle: '機関経営費', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '所得税の所得控除', label: 'イ', content: '15種類' }, //41
                        { questionTitle: '医療費控除（セルフメディケーション）', label: 'オ', content: '' }, //42
                        { questionTitle: '所得税の配偶者控除', label: 'ウ', content: '48万円' }, //43
                        { questionTitle: '相続税における配偶者の税額軽減', label: 'オ', content: '' }, //44
                        { questionTitle: '相続税の納税', label: 'ウ', content: '物納' }, //45
                        { questionTitle: '寄付金の損金算入限度額', label: 'イ', content: '全額' }, //46
                        { questionTitle: '生命保険料控除額', label: 'ウ', content: '28,000円' }, //47
                        { questionTitle: '事業税', label: 'エ', content: '各事業年度の収入金額' }, //48
                        { questionTitle: '確定給付企業年金制度の開始', label: 'ア', content: '年金規約' }, //49
                        { questionTitle: '生命保険代理店の事業免許等に係る税', label: 'エ', content: '1万5千円' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2022c" next-route="zeihou2021b" />
        </section>
    </SeihoTestLayout>
</template>
