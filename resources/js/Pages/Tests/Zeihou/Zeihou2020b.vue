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
                        '',
                        '',
                        '',
                        '',
                        '', // 問１〜５
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問6〜10
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問11〜15
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問16〜20
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
                        '', //p
                        '正しい', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                questionTitle="相続と相続税"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                questionTitle="法人の種類と課税の範囲、事業年度"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                questionTitle="法人税額の計算"
                    :contents="[
                        '', //p
                        '正しい', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                questionTitle="生命保険料控除"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                questionTitle="所得税の申告と納税"
                    :contents="[
                        '', //p
                        '正しい', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                questionTitle="相続税の申告と納税"
                    :contents="[
                        '正しい', //p
                        '正しい', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                questionTitle="固定資産税"
                    :contents="[
                        '正しい', //p
                        '正しい', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                questionTitle="確定拠出年金の税制上の取扱い"
                    :contents="[
                        '正しい', //p
                        '正しい', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                questionTitle="生命保険会社と税"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '租税の種類', content: '' }, //31
                        { questionTitle: '空き家に係る譲渡所得の特別控除の特例', content: '正しい' }, //32
                        { questionTitle: '担税者', content: '' }, //33
                        { questionTitle: '贈与税の課税価格', content: '' }, //34
                        { questionTitle: '相続時精算課税制度', content: '' }, //35
                        { questionTitle: '法人税の中間申告', content: '' }, //36
                        { questionTitle: '不動産取得税', content: '正しい' }, //37
                        { questionTitle: '総合福祉団体定期保険の保険料', content: '正しい' }, //38
                        { questionTitle: '定期付養老保険の保険料', content: '正しい' }, //39
                        { questionTitle: '財形住宅貯蓄積立保険', content: '' }, //40
                        // 問41〜50
                        { questionTitle: '租税の種類', label: 'エ', content: '' }, //41
                        { questionTitle: '所得税額の計算', label: 'イ', content: '' }, //42
                        { questionTitle: '寄付金控除', label: 'オ', content: '' }, //43
                        { questionTitle: '法定相続分', label: 'エ', content: '' }, //44
                        { questionTitle: '第2次相続', label: 'ア', content: '' }, //45
                        { questionTitle: '相続税の加算', label: 'ウ', content: '' }, //46
                        { questionTitle: '個人の住民税', label: 'ウ', content: '' }, //47
                        { questionTitle: '連結納税制度', label: 'オ', content: '' }, //48
                        { questionTitle: '法人の住民税', label: 'ウ', content: '' }, //49
                        { questionTitle: '確定給付企業年金', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>
            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2020a" next-route="zeihou2020c" />
        </section>
    </SeihoTestLayout>
</template>
