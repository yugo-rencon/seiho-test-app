<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2021年度 フォームC";
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
                    questionTitle="個人保険の保険金の税務上の取扱-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '50万円',
                        '1/2',
                        '支払総額',
                        '含む',
                        '5倍', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'キ', //2
                        'ク', //3
                        'コ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険の保険金の税務上の取扱-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '1年',
                        '2年',
                        '確定年金',
                        '相続',
                        '贈与', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'イ', //7
                        'オ', //8
                        'ク', //9
                        'ケ', //10
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
                    questionTitle="所得税法の各種所得"
                    :contents="[
                        '20% → 15%', //p14
                        '正しい',
                        '保管の仕方にかかわらず不動産所得 → 他人の物を保管する場合は事業所得や雑所得、そうでない場合は不動産所得', //p18
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
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        '12ヶ月以内 → 10ヶ月以内', //p94
                        '通常10年以内 → 通常5年以内', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税法における別段の定め"
                    :contents="[
                        '正しい',
                        '時価評価 → 取得原価主義<br>評価益は益金の額に算入 → 評価益は益金の額に算入しない', //p127
                        '全額を損金に算入 → 一定の限度を定め、超える部分は損金に算入しない', //p127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '課税所得金額は所得税と[[同額にはならない]]。', //p148
                        '正しい',
                        '納期は6月、8月、10月および1月中である。', //p150
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税額の計算"
                    :contents="[
                        '逓増税率 → 超過累進税率', //p51
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '最初の贈与税申告の際に届出書を提出すれば、相続時まで当該制度が継続適用されるので、[[届出書を毎年提出する必要はない]]。', //p103
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
                    questionTitle="法人税通達による事業保険の保険料の取扱"
                    :contents="[
                        '正しい',
                        '定期部分・養老部分ともに資産計上 → 定期部分は損金、養老部分は資産計上', //p183
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '一時所得',
                            content: '80万円程度 → 50万円程度',
                        }, //31 p27
                        {
                            questionTitle: '住宅借入金（取得）等特別控除',
                            content: '所得控除 → 税額控除',
                        }, //32 p55
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定申告',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '宅地の評価方法',
                            content: '倍率方式 ↔︎ 路線価方式',//p110-111
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '事業年度',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '企業保険の種類',
                            content: '特定退職金共済 → 団体信用生命保険',
                        }, //36 p206
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
                            questionTitle: '確定拠出年金の税務',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '受取配当益金不算入',
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
                            questionTitle: '譲渡所得',
                            label: 'エ',
                            content: '2分の1',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '雑損控除',
                            label: 'ウ',
                            content: '災害',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '源泉徴収制度',
                            label: 'ア',
                            content: '翌月10日',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '非課税財産',
                            label: 'エ',
                            content: '心身障害者扶養共済制度',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '会社利益と所得金額の調整',
                            label: 'ウ',
                            content: '公平な税負担',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険料控除の手続き',
                            label: 'ア',
                            content: '9,000円',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定給付企業年金制度の開始',
                            label: 'ア',
                            content: '年金規約',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員報酬',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2021b" next-route="zeihou2020a" />
        </section>
    </SeihoTestLayout>
</template>
