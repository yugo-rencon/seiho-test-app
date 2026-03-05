<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
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
                    questionTitle="被保険者集団の具備すべき条件-①"
                    :contents="[
                        '保護',
                        '公平性',
                        '減殺',
                        '被保険利益',
                        '疾病保険', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'イ', //2
                        'キ', //3
                        'ク', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団の具備すべき条件-②"
                    :contents="[
                        '継続',
                        '低い',
                        '大数の法則',
                        '危険選択の効果',
                        '再保険', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ウ', //8
                        'ク', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」-①"
                    :contents="[
                        '心理',
                        '抵抗力',
                        '触診',
                        '生命予後',
                        '分離', //問11〜15
                    ]"
                    :labels="[
                        'イ', //11
                        'キ', //12
                        'オ', //13
                        'ク', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」-②"
                    :contents="[
                        '生活習慣病',
                        '限局',
                        '高い',
                        '逓減性',
                        '超過危険', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'ク', //17
                        'オ', //18
                        'エ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数"
                    :contents="[
                        '経験生命表 → 国民生命表<br>簡易生命表 → 経験生命表', //p5
                        '正しい',
                        '「予定死亡率 ÷ 実際死亡率 × 100（%)」 → 「実際死亡率 ÷ 予定死亡率 × 100（%)」', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の課題"
                    :contents="[
                        '三大都市圏から離れるにつれて低率となる → 高率となる', //p47
                        '発生率が著しく低い → 著しく高い', //p51-52
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :contents="[
                        '欧米では嘱託医制度はなく、一般に社医だけである → 欧米では社医制度はなく、一般に嘱託医だけである。', //p95
                        '3項目 → 2項目（検診は含まない）', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択"
                    :contents="[
                        '団体定期保険も一括告知 → 団体定期保険は各被保険者の告知を求める', //p171
                        '職業上の危険選択は行わない → 職業上の危険選択行っている', //p171
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険"
                    :contents="[
                        '正しい',
                        '支払う必要もない → 支払わなければならない', //p179
                        'ストップ・ロス再保険 → エクセス・オブ・ロス再保険', //p180
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :contents="[
                        '正しい',
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :contents="[
                        '正しい',
                        '告知の相手方についても定めている → 定めていない', //p13
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="環境選択"
                    :contents="[
                        '正しい',
                        '正しい',
                        '受理することが通例 → 受理しないことが通例', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :contents="[
                        '正しい',
                        '短期 ↔︎ 長期', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約確認の時期と方法"
                    :contents="[
                        '一部 ↔︎ 大部分', //p114
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: 'ずさんな選択', content: '正しい' }, //31
                        { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //32
                        { questionTitle: '体格', content: '体重 × 身長の二乗 → 体重 ÷ 身長の二乗' }, //33 p63
                        { questionTitle: '血圧', content: '高血圧 → 最大血圧<br>低血圧 → 最小血圧' }, //34 //p64
                        { questionTitle: '重大事由による解除権', content: '正しい' }, //35
                        { questionTitle: '第1次選択の重要性', content: '正しい' }, //36
                        { questionTitle: '契約内容の相互照会', content: '厚生労働省ならびに農林水産省 → 全国共済農業協同組合連合会<br>生命共済 → 全国共済農業協同組合連合会' }, //37
                        { questionTitle: '査定標準', content: '正しい' }, //38
                        { questionTitle: '保険金確認・給付金確認', content: '確認の対象や目的は契約確認と変わらない → 確認の対象は契約確認と若干異なる' }, //39 p120
                        { questionTitle: '金額別死亡率', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '被保険者の危険', label: 'イ', content: '実体的危険' }, //41
                        { questionTitle: '解除', label: 'ウ', content: '解約返戻金' }, //42
                        { questionTitle: '選択の有効期間', label: 'オ', content: '' }, //43
                        { questionTitle: '人間ドック扱', label: 'イ', content: '告知書' }, //44
                        { questionTitle: 'エイズ', label: 'ウ', content: 'リンパ球' }, //45
                        { questionTitle: '安全管理措置', label: 'エ', content: '技術的' }, //46
                        { questionTitle: '高度障害', label: 'ア', content: '第1級' }, //47
                        { questionTitle: '再保険', label: 'ア', content: '保有限度額' }, //48
                        { questionTitle: '復活', label: 'ウ', content: '長い' }, //49
                        { questionTitle: '期待死亡率との比較', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2020a" next-route="kiken2020c" />
        </section>
    </SeihoTestLayout>
</template>
