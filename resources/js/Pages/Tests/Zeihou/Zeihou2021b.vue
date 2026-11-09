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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '年金払い、一時払いとともに企業型と個人型の課税方法の[[区別はない]]。', //p219
                        '障害給付金は[[非課税]]となる。', //p219
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '各事業年度において、配当準備金として繰り入れた金額については、[[翌期配当所要額を限度]]として損金に算入される。これは責任準備金と同様、[[確定債務]]という考え方による。', //p221-222
                        '生命保険会社が受取配当金不算入の計算を行ったときは、その金額だけ契約者配当の損金算入を[[否認する]]ことを要するから、実質的には生命保険会社には受取配当の益金不算入の制度は[[適用されていない]]。', //p224（旧教科書のみ）
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
                        // rev: 2026-11-09 確認済み
                        '6ヶ月以内 → 10ヶ月以内', //p95
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
                        {
                            questionTitle: '譲渡所得',
                            content: '10年以内 → 5年以内',
                        }, //31 p22
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '租税特別措置法の規定による課税標準',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定申告',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '青色申告制度',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '保険金の非課税額',
                            content: '1000万円 → 500万円',
                        }, //35 p77
                        {
                            questionTitle: '暦年課税・前年課税',
                            content: '所属税 ↔︎ 住民税',
                        }, //36 p150
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
                            // rev: 2026-08-23 確認済み
                            questionTitle: '転換時の税務',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '営業職員報酬',
                            content: '固定給とそれ以外の部分とに明らかに区分されているときは、[[固定給部分は給与所得、それ以外の部分は事業所得]]である。',//p225
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
                            questionTitle: '雑所得',
                            label: 'ウ',
                            content: '必要経費',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '税額控除',
                            label: 'エ',
                            content: '配当控除',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '未成年者控除',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人税の課税標準',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '同族会社',
                            label: 'ア',
                            content: '3人',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人の事業税',
                            label: 'ア',
                            content: '第3種',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定給付企業年金制度の開始',
                            label: 'ア',
                            content: '年金規約',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体定期保険の保険料',
                            label: 'ウ',
                            content: '生命保険料控除',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2021a" next-route="zeihou2021c" />
        </section>
    </SeihoTestLayout>
</template>
