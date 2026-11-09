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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '財産税 → 流通税', //p4
                        '特定の費用に充てることを目的とするものを目的税といい、[[都市計画税、国民健康保険税等は目的税である]]。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺産分割の方法"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '満18歳以上 → 満15歳以上', //p73
                        '法定相続分 → 遺留分', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '12月31日 → 1月1日', //p102
                        '12月31日において20歳以上 → 1月1日において18歳以上', //p102
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '資本金1000万円 → 資本金1億円', //p131
                        '法人がその所有する土地の譲渡等を行った場合には、その譲渡等による譲渡利益金額について、所有期間の長短等に応じた特別税率による税額が[[追加課税される]]。', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金の取扱"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '終身保険は満期保険金がないため、源泉分離課税の対象外である。', //p173
                        '贈与税の課税対象 → 相続税の課税対象', //p174
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '正しい',
                        '公的年金等に係る雑所得を有する居住者で、[[その年中の公的年金等の収入金額が400万円以下]]であり、かつ、[[その年分の公的年金等に係る雑所得以外の所得金額が20万円以下]]である場合には、その年分の所得税について[[確定申告書を提出することを要しない]]。', //p58
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '1000万円 → 500万円', //p78
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
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '住宅用地のうち200㎡までの部分（小規模住宅用地）については、評価額の[[6分の1]]が、また200㎡を超える部分（一般住宅用地）については評価額の[[3分の1]]が、それぞれ課税標準とされる。', //p158
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度の税制上の取扱い"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '一時払いの老齢給付金については、所得税法上の[[「退職手当等」]]とみなす。', //p219
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '制限税率',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '雑所得',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定申告',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '法人の種類と法人税の課税の範囲',
                            content: 'すべての所得について課税 → 国立大学法人は非課税',
                        }, //35 p120
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '不動産取得税',
                            content: '[[相続]]による取得や法人の合併による取得など形式的な所有権の移転については課税されない。', //p159
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '居住用超高層建築物の不動産取得税',
                            content: '階層別専有床面積補正率は、[[１階を100として、階が１つ増すごとに10／39を加算して求める]]。', //p161
                        }, //37
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '財形住宅貯蓄積立保険',
                            content: '財形貯蓄積立保険 → 財形年金積立金', //p211-212
                        }, //38
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '確定拠出年金のポータビリティ',
                            content: '勤労者退職金共済機構 → 国民年金基金連合会', //p217
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '機関経営費',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の所得控除',
                            label: 'イ',
                            content: '15種類',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療費控除（セルフメディケーション）',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の配偶者控除',
                            label: 'ウ',
                            content: '48万円',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続税における配偶者の税額軽減',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続税の納税',
                            label: 'ウ',
                            content: '物納',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '寄付金の損金算入限度額',
                            label: 'イ',
                            content: '全額',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険料控除額',
                            label: 'ウ',
                            content: '28,000円',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '事業税',
                            label: 'エ',
                            content: '各事業年度の収入金額',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定給付企業年金制度の開始',
                            label: 'ア',
                            content: '年金規約',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            label: 'エ',
                            content: '1万5千円',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2022c" next-route="zeihou2021b" />
        </section>
    </SeihoTestLayout>
</template>
