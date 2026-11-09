<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2025年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度－①"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '経済のグローバル化',
                        '連結',
                        '分社化・持株会社化',
                        '税務情報',
                        '個別申告方式', // 問１〜５
                    ]"
                    :labels="[
                        'エ', //1
                        'コ', //2
                        'ケ', //3
                        'キ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度－②"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '完全支配関係',
                        '納税申告書',
                        'は除く',
                        '3カ月',
                        '子法人のすべて', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'キ', //7
                        'ク', //8
                        'オ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）－①"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '3親等',
                        '保険金受取人',
                        '5年',
                        '身体の傷害',
                        '配偶者', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'ケ', //12
                        'ウ', //13
                        'カ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）－②"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '10年',
                        '一時払',
                        '60歳',
                        '退職年金',
                        '1回', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'キ', //17
                        'カ', //18
                        'ケ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の配偶者控除と配偶者特別控除"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '103万円 → 62万円', //p47
                        '正しい',
                        '800万円 → 1000万円', //p48
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '相続税の課税財産＝保険金額×（[[被相続人の負担した保険料の金額]] ÷ [[死亡時までの払込保険料の金額]]）', //p77
                        '被相続人の死亡により相続人等が取得した死亡退職金はみなし相続財産となるが、死亡保険金と同様に相続人が取得した死亡退職金については、非課税限度額までは課税されない。', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の性格"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '法人擬制説 → 法人実在説', //p117
                        '法人実在説 → 法人擬制説', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '正しい',
                        '各事業年度末時点の資本金または基金の総額 → 各事業年度の収入金額', //p154
                        '資本金１億円以下 → 資本金１億円超', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '福利厚生費 → 給与', //p181
                        '正しい',
                        '資産計上 → 損金', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税率"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '比例税率 → 累進税率', //p5
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '贈与税には、[[物納の制度はない]]が、一定の要件のもとに延納の制度が認められている。', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産取得税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '[[相続]]による取得や法人の合併による取得など形式的な所有権の移転については課税されない。', //p159
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、退職金保険"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '延長（定期）保険の保険料に充当される金額を超える資産計上の保険料積立金は該当事業年度の[[雑損失として損金の額に算入される]]。', //p198
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
                        '雑所得 → 事業所得', //p225
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
                            questionTitle: '流通税',
                            content: '流通税は、財産移転の事実に基づいて課税されるもので、印紙税、[[不動産取得税]]等が該当する。', //p4
                        }, //31
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '非課税所得',
                            content: '租税特別措置法によるもの → その他の法律によるもの', //p9
                        }, //32
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '退職所得',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '青色申告制度',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '遺産分割の方法',
                            content: '遺贈は[[受遺者の承諾の有無にかかわりなく]]財産処分としての効力が生じる。', //p73
                        }, //35
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '申告調整',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '外貨建て生命保険の取扱',
                            content: '保険料等の支払いについては[[その支払時点]]の「価格」、保険金等の受取については[[その受取の権利が確定した時点]]の「価格」で邦貨に換算して計算する（生命保険加入時ではない）。', //p178
                        }, //37
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '固定資産税の納税義務者',
                            content: '償却資産の場合、[[償却資産課税台帳に所有者として登録されている者]]をいう。', //p157
                        }, //38
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '財形住宅貯蓄積立保険',
                            content: '要件に違反して解約した場合等は、差益に対して[[20％の源泉分離課税を行う]]。', //p212
                        }, //39
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '確定拠出年金の拠出限度額',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '譲渡所得',
                            label: 'エ',
                            content: '全額',
                        }, //41
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '医療費控除',
                            label: 'ア',
                            content: '10万円',
                        }, //42
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法定相続分',
                            label: 'エ',
                            content: '民法',
                        }, //43
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '相続時精算課税制度',
                            label: 'ア',
                            content: '1月1日',
                        }, //44
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法人の種類と課税の範囲',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法人税法の特別規定',
                            label: 'イ',
                            content: '特定同族会社',
                        }, //46
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '個人の住民税',
                            label: 'エ',
                            content: '3,000円',
                        }, //47
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '固定資産税の課税標準',
                            label: 'ウ',
                            content: '3年',
                        }, //48
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '保険金等受取時の税務',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2025b" next-route="zeihou2024a" />
        </section>
    </SeihoTestLayout>
</template>
