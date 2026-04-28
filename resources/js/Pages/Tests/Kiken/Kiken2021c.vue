<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
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
                    questionTitle="保険診査と臨床診察の相違点-①"
                    :contents="[
                        '告知聴取',
                        '生命予後',
                        '少なくない',
                        '問診',
                        '契約解除権', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'カ', //2
                        'ク', //3
                        'コ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険診査と臨床診察の相違点-②"
                    :contents="[
                        '再発',
                        '疾病特約',
                        '肥満体',
                        '死亡率',
                        '会社', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ア', //7
                        'ケ', //8
                        'オ', //9
                        'ウ', //10
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
                        '保険加入者のみ',
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
                        '総合福祉団体的保険',
                        '権利',
                        '保険契約者',
                        '一括告知',
                        '平準化', //問16〜20
                    ]"
                    :labels="[
                        'ク', //16
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
                        '正しい',
                        '「予定死亡率 ÷ 実際死亡率 × 100（%)」 → 「実際死亡率 ÷ 予定死亡率 × 100（%)」', //p11
                        '簡易生命表 → 保険料計算に使用する予定の死亡率', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の制約条件"
                    :contents="[
                        '純保険料の範囲内 → 付加保険料の範囲内', //p40
                        '正しい',
                        '危険分散の原則 → 危険均一性の原則', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :contents="[
                        '顕在的傾向から潜在化への傾向 → 潜在的傾向から顕在化への傾向', //p76
                        '正しい',
                        '保険業法 → 保険法', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :contents="[
                        '正しい',
                        '推奨されている → 推奨されていない', //p76
                        '役員を被保険者とする場合には必要ない → 役員を被保険者とする場合も被保険者の書面による加入同意が必要', //p75
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認"
                    :contents="[
                        '因果関係に関わらず → 因果関係がなければならない', //p120
                        'どのような場合でも給付金は支払われる → 支払う場合と支払わない場合に分かれる', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険で対象としている危険"
                    :contents="[
                        '経済的危険 → 身体的危険', //p4
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="体格"
                    :contents="[
                        '正しい',
                        '正しい',
                        '体重 × 身長の二乗 → 体重 ÷ 身長の二乗', //p63
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険業における個人情報"
                    :contents="[
                        '正しい',
                        '正しい',
                        '個人情報登録制度 → 契約内容登録制度', //p138-139
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="数字査定法"
                    :contents="[
                        '正しい',
                        '標準体の125％ → 標準体の75％', //p111-112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態"
                    :contents="[
                        '正しい',
                        '正しい',
                        '自動再保険 → 任意再保険', //p178
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '件数死亡率、金額死亡率', content: '正しい' }, //31
                        { questionTitle: '環境選択', content: '正しい' }, //32
                        { questionTitle: '告知義務者', content: '責任は1人が負うことになる → 責任は全員が負うことになる' }, //33 p13
                        { questionTitle: '選択効果', content: '正しい' }, //34
                        { questionTitle: '血圧', content: '最小血圧 ↔︎ 最大血圧' }, //35 p64
                        { questionTitle: '保険金額の制限', content: '正しい' }, //36
                        { questionTitle: '団体保険の保険金額の決定による選択', content: '正しい' }, //37
                        { questionTitle: '個人情報の定義', content: '生存するまたは死亡した個人に関する情報 → 生存する個人に関する情報（死亡は対象外）' }, //38 p125
                        { questionTitle: '最高保険金額と保有限度額', content: '1保険金受取人 → 1被保険者' }, //39 p182
                        { questionTitle: '死亡状況の分析', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '生命表', label: 'オ', content: '' }, //41
                        { questionTitle: '死差益', label: 'オ', content: '' }, //42
                        { questionTitle: '保険料の仕組みと危険選択', label: 'ウ', content: '収支相当の原則' }, //43
                        { questionTitle: '糖尿病と胃炎', label: 'ア', content: 'インシュリン' }, //44
                        { questionTitle: '健康管理証明書扱（個人）', label: 'ア', content: '20名〜30名' }, //45
                        { questionTitle: '疾病保険の特別条件付決定', label: 'イ', content: '特別保険料領収法' }, //46
                        { questionTitle: '団体保険の契約内容の変更', label: 'エ', content: '契約者' }, //47
                        { questionTitle: '契約確認後の処理', label: 'ウ', content: '不実の告知' }, //48
                        { questionTitle: '復活', label: 'ア', content: '契約金額' }, //49
                        { questionTitle: '元受保有額と出再額', label: 'エ', content: 'サープラス' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2021b" next-route="kiken2020a" />
        </section>
    </SeihoTestLayout>
</template>
