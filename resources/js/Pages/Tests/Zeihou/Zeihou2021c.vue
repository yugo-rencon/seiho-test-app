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
                        '正しい',
                        '満18歳以上 → 満15歳以上', //p72
                        '法定相続分 → 遺留分', //p73
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
                        '課税所得金額は所得税と同額となる → 同額にはならない', //p149
                        '正しい',
                        '納期は4月、7月、10月および1月中 → 納期は6月、8月、10月、および1月中', //p151
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
                        '正しい',
                        '贈与のあった年ごとに届出書の提出が必要 → 最初に提出すればそれ以降は不要', //p104
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
                        // 問31〜40
                        { questionTitle: '一時所得', content: '80万円程度 → 50万円程度' }, //31 p27
                        { questionTitle: '住宅借入金（取得）等特別控除', content: '所得控除 → 税額控除' }, //32 p55
                        { questionTitle: '確定申告定', content: '正しい' }, //33
                        { questionTitle: '宅地の評価方法', content: '倍率方式 ↔︎ 路線価方式' }, //34 p111-112
                        { questionTitle: '事業年度', content: '正しい' }, //35
                        { questionTitle: '企業保険の種類', content: '特定退職金共済 → 団体信用生命保険' }, //36 p206
                        { questionTitle: '居住用超高層建築物の不動産取得税', content: '最上階を100として階が1つ減るごとに → 1階を100として階が1つ増すごとに' }, //37 p162
                        { questionTitle: '財形住宅貯蓄積立保険', content: '財形貯蓄積立保険 → 財形年金' }, //38 p213
                        { questionTitle: '確定拠出年金の税務', content: '正しい' }, //39
                        { questionTitle: '受取配当益金不算入', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '所得税の所得控除', label: 'イ', content: '15種類' }, //41
                        { questionTitle: '医療費控除（セルフメディケーション）', label: 'オ', content: '' }, //42
                        { questionTitle: '譲渡所得', label: 'エ', content: '2分の1' }, //43
                        { questionTitle: '雑損控除', label: 'ウ', content: '災害' }, //44
                        { questionTitle: '源泉徴収制度', label: 'ア', content: '翌月10日' }, //45
                        { questionTitle: '非課税財産', label: 'エ', content: '心身障害者扶養共済制度' }, //46
                        { questionTitle: '会社利益と所得金額の調整', label: 'ウ', content: '公平な税負担' }, //47
                        { questionTitle: '生命保険料控除の手続き', label: 'ア', content: '9,000円' }, //48
                        { questionTitle: '確定給付企業年金制度の開始', label: 'ア', content: '年金規約' }, //49
                        { questionTitle: '営業職員報酬', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2021b" next-route="zeihou2020a" />
        </section>
    </SeihoTestLayout>
</template>
