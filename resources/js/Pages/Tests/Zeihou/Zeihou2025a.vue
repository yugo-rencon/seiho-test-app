<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2025年度 フォームA";
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
                    questionTitle="所得税課税における所得控除-①"
                    :relatedProblems="['2025a1']"
                    :contents="[
                        // rev: 2026-11-02 確認済み
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
                    :relatedProblems="['2025a6']"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '2,000円',
                        '27万円',
                        '75万円',
                        '123万円',
                        '2,500万円', // 問6〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'キ', //7
                        'コ', //8
                        'イ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）－①"
                    :relatedProblems="['2025a11', '2025b11', '2025c11']"
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
                    :relatedProblems="['2025a16', '2025b16', '2025c16']"
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
                    questionTitle="所得税法における所得"
                    :relatedProblems="['2025a21']"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '一時所得の金額を総所得金額に含めるときはその[[２分の１]]の金額を算入する。', //p27
                        '正しい',
                        '10年以内 → ５年以内', //p31
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :relatedProblems="['2025a22']"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '1500万円 → 2000万円', //p58
                        '青色申告を選択できる人は、[[不動産所得、事業所得、山林所得]]を生ずべき業務を営んでいる人である。', //p59
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :relatedProblems="['2025a23']"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '５億円 → １億円', //p131
                        '正しい',
                        'この土地重課制度は法人の土地投機の抑制等を目的とするものであるので、[[国や地方公共団体に対する譲渡や収用換地等による譲渡など一定の譲渡については適用されない]]。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :relatedProblems="['2025a24', '2025b24', '2025c24']"
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
                    :relatedProblems="['2025a25', '2025b25', '2025c25']"
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
                    :relatedProblems="['2025a26', '2025b26', '2025c26']"
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
                    questionTitle="遺産分割の方法"
                    :relatedProblems="['2025a27', '2025c35']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '寄与分 → 遺留分', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税"
                    :relatedProblems="['2025a28', '2025c47']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '道府県民税、市町村民税ともに均等割と所得割が課される。', //p146
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金等の取扱"
                    :relatedProblems="['2025a29']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '終身保険は満期保険金がないため、源泉分離課税の対象外である。', //p173
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度の税制上の取扱"
                    :relatedProblems="['2025a30']"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '社会保険料控除 → 小規模企業共済等掛金控除', //p218
                        '正しい',
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
                            questionTitle: '租税の種類',
                            relatedProblems: ['2025a31', '2025a41', '2025b21'],
                            content: '納税義務者と担税者が同一であるものを直接税、両者が異なるものを間接税という。', //p3
                        }, //31
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '非課税所得',
                            relatedProblems: ['2025a32', '2025b32', '2025c32'],
                            content: '租税特別措置法によるもの → その他の法律によるもの', //p9
                        }, //32
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '相続税と贈与税',
                            relatedProblems: ['2025a33'],
                            content: '財産の評価についても相続財産の評価と贈与財産の評価は[[同じ基準]]にしたがって行われる。', //p65
                        }, //33
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '教育資金一括贈与の非課税措置',
                            relatedProblems: ['2025a34'],
                            content: '3000万円 → 1000万円', //p98
                        }, //34
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '宅地の評価方法',
                            relatedProblems: ['2025a35'],
                            content: '宅地の利用状況は、自用地、貸宅地、貸家建付地などさまざまである。そこで、路線価方式や倍率方式により算出した評価額を基に、[[その宅地の利用状況に応じた評価額を求める]]。', //p111
                        }, //35
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '有価証券の評価',
                            relatedProblems: ['2025a36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '外貨建て生命保険の取扱',
                            relatedProblems: ['2025a37', '2025b37', '2025c37'],
                            content: '保険料等の支払いについては[[その支払時点]]の「価格」、保険金等の受取については[[その受取の権利が確定した時点]]の「価格」で邦貨に換算して計算する（生命保険加入時ではない）。', //p178
                        }, //37
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '総合福祉団体定期保険の保険料',
                            relatedProblems: ['2025a38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '財形住宅貯蓄積立保険',
                            relatedProblems: ['2025a39', '2025b39', '2025c39'],
                            content: '要件に違反して解約した場合等は、差益に対して[[20％の源泉分離課税を行う]]。', //p212
                        }, //39
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '最低課税方式',
                            relatedProblems: ['2025a40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '租税の種類',
                            relatedProblems: ['2025a31', '2025a41', '2025b21'],
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '給与所得',
                            relatedProblems: ['2025a42'],
                            label: 'ウ',
                            content: '特定支出',
                        }, //42
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '税額の計算',
                            relatedProblems: ['2025a43'],
                            label: 'エ',
                            content: '税額控除',
                        }, //43
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法定相続分',
                            relatedProblems: ['2025a44', '2025c43'],
                            label: 'エ',
                            content: '民法',
                        }, //44
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法人の種類と課税の範囲',
                            relatedProblems: ['2025a45', '2025b45', '2025c45'],
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法人の確定申告',
                            relatedProblems: ['2025a46'],
                            label: 'ア',
                            content: '2カ月',
                        }, //46
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '法人の住民税',
                            relatedProblems: ['2025a47'],
                            label: 'イ',
                            content: '均等割額と法人税割額',
                        }, //47
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '固定資産税の課税標準',
                            relatedProblems: ['2025a48', '2025b48', '2025c48'],
                            label: 'ウ',
                            content: '3年',
                        }, //48
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '確定給付企業年金',
                            relatedProblems: ['2025a49', '2025b30'],
                            label: 'イ',
                            content: '厚生労働大臣',
                        }, //49
                        {
                            // rev: 2026-11-02 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            relatedProblems: ['2025a50', '2025b50', '2025c50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="zeihou2025b" />
        </section>
    </SeihoTestLayout>
</template>
