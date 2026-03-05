<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2023年度 フォームB";
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
                    questionTitle="死差益と危険選択-①"
                    :contents="[
                        '経営効率',
                        '剰余金',
                        '配当',
                        '予定死亡率',
                        '死差益', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'ウ', //2
                        'ア', //3
                        'ク', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="死差益と危険選択-②"
                    :contents="[
                        '低い',
                        '統計的方式',
                        '逓減',
                        '定期付養老保険',
                        '定期保険', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'オ', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択-①"
                    :contents="[
                        '被用者団体',
                        '団体性',
                        '相似する',
                        '保険加入のみ',
                        '加入率', //問11〜15
                    ]"
                    :labels="[
                        'カ', //11
                        'ア', //12
                        'キ', //13
                        'ク', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択-②"
                    :contents="[
                        '総合福祉団体定期保険',
                        '団体の弔慰金・死亡退職金規程',
                        '保険契約者',
                        '一括告知',
                        '平準化', //問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'カ', //17
                        'ア', //18
                        'コ', //19
                        'オ', //20
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
                    questionTitle="疾病入院保険（特約）"
                    :contents="[
                        '国民の平均入院日数よりも短期 → 長期', //p51
                        '生活習慣病特約での糖尿病入院発生率が著しく低い → 著しく高い', //52
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
                    :contents="[
                        'アルコール中毒や不摂生生活のような職業に随伴する危険は含まれない → 含まれる', //p69
                        '正しい',
                        '職業と入院率については関連がない → 相当の関連がある', //p70
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の段階"
                    :contents="[
                        '正しい',
                        '金融庁 → 生命保険協会', //p86
                        '査定 ↔︎ 決定', //p86-87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険"
                    :contents="[
                        '正しい',
                        '責任準備金部分まで再保険料を支払う必要がない → 支払わなければならない', //p179
                        'ストップ・ロス再保険 → エクセス・オブ・ロス再保険', //p180
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :contents="[
                        '正しい',
                        '正しい',
                        '告知義務はある → 告知義務はない', //p15-16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果"
                    :contents="[
                        '正しい',
                        '正しい',
                        '若年齢層 ↔︎ 高年齢層', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険業法 → 保険法', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :contents="[
                        '正しい',
                        '健康の異常や症状に対する明確な診断が必要 → 必ずしも必要ではない', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
                    :contents="[
                        '保険金受取人 → 被保険者', //p181
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
                        { questionTitle: '危険の公平性', content: '正しい' }, //31
                        { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //32
                        { questionTitle: '体格', content: '体重 × 身長の二乗 → 体重 ÷ 身長の二乗' }, //33  //p63
                        { questionTitle: '保険種類・保険期間の制限', content: '短期 ↔︎ 長期' }, //34 p73
                        { questionTitle: '保険金確認・給付金確認', content: '正しい' }, //35
                        { questionTitle: '個人情報の取得', content: '利用目的は明示しなければならない → 必ずしも利用目的の明示は要しない' }, //36 p135
                        { questionTitle: '特定部位不担保法', content: '正しい' }, //37
                        { questionTitle: '復活', content: '逆選択混入の危険が少なく → 多く<br>経験死亡率が低い → 高い' }, //38 p173-174
                        { questionTitle: '再保険の意義', content: '正しい' }, //39
                        { questionTitle: '金額別死亡率', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '被保険者の危険', label: 'イ', content: '実体的危険' }, //41
                        { questionTitle: '解除権の消滅', label: 'オ', content: '' }, //42
                        { questionTitle: '危険保険料と危険保険金', label: 'オ', content: '' }, //43
                        { questionTitle: '被保険者集団の具備すべき条件', label: 'エ', content: '大数の法則' }, //44
                        { questionTitle: '高血圧', label: 'ア', content: '二次性高血圧' }, //45
                        { questionTitle: '人間ドック扱', label: 'イ', content: '告知書' }, //46
                        { questionTitle: '査定法', label: 'ア', content: '数字査定法' }, //47
                        { questionTitle: '契約確認後の処理', label: 'ウ', content: '不実の告知' }, //48
                        { questionTitle: '災害保障', label: 'ウ', content: '感染症法' }, //49
                        { questionTitle: '期待死亡率との比較', label: 'エ', content: '保険体' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2023a" next-route="kiken2023c" />
        </section>
    </SeihoTestLayout>
</template>
