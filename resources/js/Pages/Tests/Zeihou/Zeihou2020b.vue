<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2020年度 フォームB";
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
                    questionTitle="相続税・贈与税の財産評価-①"
                    :contents="[
                        '時価',
                        '現況',
                        '相続税財産評価基本通達',
                        '高い',
                        '解約返戻金額', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'ケ', //2
                        'オ', //3
                        'キ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税・贈与税の財産評価-②"
                    :contents="[
                        '路線価',
                        '倍率',
                        '固定資産税評価額',
                        '家庭裁判所の審判',
                        '存続年数', // 問6〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ケ', //7
                        'イ', //8
                        'ウ', //9
                        'キ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の計算-①"
                    :contents="[
                        '1月1日〜12月31日',
                        '経済的利益',
                        '租税特別措置法',
                        '財形',
                        '雇用保険', // 問11〜15
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
                    questionTitle="所得税の計算-②"
                    :contents="[
                        '10',
                        '担税力',
                        '公平性',
                        '超過累進',
                        '高い', // 問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'ク', //17
                        'オ', //18
                        'ケ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税法における所得"
                    :contents="[
                        '事業所得または雑所得 ↔︎ 不動産所得', //p18
                        '正しい',
                        '80万円限度 → 50万円限度', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続と相続税"
                    :contents="[
                        '正しい',
                        '財産処分として効力は生じない → 受遺者の承諾の有無によらず効力が生じる', //p72
                        '除いて計算 → 含めて計算', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類と課税の範囲、事業年度"
                    :contents="[
                        '外国に本店又は支店を有する法人 → 内国法人以外の法人', //p119
                        '協同組合等は、すべての所得に課税', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :contents="[
                        '3株主グループ → 1株主グループ', //p135
                        '正しい',
                        '支出額の20% → 支出額の40%', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        '生命保険料控除の対象となる → 対象とならない', //p164
                        '5年以上 → 10年以上', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        '1500万円 → 2000万円', //p56
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '不動産、船舶は財産から除かれる → 財産に含まれる', //p95-96
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="固定資産税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '10年度間 → 5年度間', //p159
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の税制上の取扱い"
                    :contents="[
                        '正しい',
                        '正しい',
                        '雑所得 → 退職手当等', //p221
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        '正しい',
                        '10% → 7%', //p225
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '租税の種類', content: '財産税 → 流通税' }, //31 p4
                        { questionTitle: '空き家に係る譲渡所得の特別控除の特例', content: '正しい' }, //32
                        { questionTitle: '担税者', content: '担税者は業者、納税義務者は消費者 → 担税者は消費者、納税義務者は業者' }, //33 p4
                        { questionTitle: '贈与税の課税価格', content: '課税価格に算入される → 課税価格に算入しない' }, //34 p96
                        { questionTitle: '相続時精算課税制度', content: '翌年から暦年課税へ戻すことができる → 戻すことはできない' }, //35 p104
                        { questionTitle: '法人税の中間申告', content: '必ず仮決算の中間報告書を提出 → 前年度実績による中間報告書でも良い' }, //36 p141
                        { questionTitle: '不動産取得税', content: '正しい' }, //37
                        { questionTitle: '総合福祉団体定期保険の保険料', content: '正しい' }, //38
                        { questionTitle: '定期付養老保険の保険料', content: '正しい' }, //39
                        { questionTitle: '財形住宅貯蓄積立保険', content: '雑所得として課税 → 源泉分離課税（20%）' }, //40 p213
                        // 問41〜50
                        { questionTitle: '租税の種類', label: 'エ', content: '目的税' }, //41
                        { questionTitle: '所得税額の計算', label: 'イ', content: '二重課税' }, //42
                        { questionTitle: '寄付金控除', label: 'オ', content: '' }, //43
                        { questionTitle: '法定相続分', label: 'エ', content: '民法' }, //44
                        { questionTitle: '第2次相続', label: 'ア', content: '10年' }, //45
                        { questionTitle: '相続税の加算', label: 'ウ', content: '20%' }, //46
                        { questionTitle: '個人の住民税', label: 'ウ', content: '6%' }, //47
                        { questionTitle: '連結納税制度', label: 'オ', content: '' }, //48
                        { questionTitle: '法人の住民税', label: 'ウ', content: '従業者数' }, //49
                        { questionTitle: '確定給付企業年金', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>
            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2020a" next-route="zeihou2020c" />
        </section>
    </SeihoTestLayout>
</template>
