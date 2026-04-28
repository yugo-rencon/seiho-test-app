<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
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
                    questionTitle="危険選択の必要性-①"
                    :contents="[
                        '安定性',
                        '標準的',
                        '増加',
                        '収入',
                        '危険保険料', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'キ', //3
                        'コ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の必要性-②"
                    :contents="[
                        '実際死亡率',
                        '医学的',
                        '高危険率',
                        '危険の公平性',
                        '相互扶助', // 問6〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'ケ', //8
                        'エ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段-①"
                    :contents="[
                        '医師による診査',
                        '職員',
                        '社医',
                        '告知',
                        '観察', // 問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'カ', //12
                        'ア', //13
                        'コ', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段-②"
                    :contents="[
                        '定期健康診断',
                        '衛生管理者',
                        '20名',
                        '出勤簿',
                        'と一緒', // 問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'ク', //17
                        'ウ', //18
                        'ア', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数"
                    :contents="[
                        '正しい',
                        '容易 → 困難', //p12
                        '簡易生命表 → 保険料計算に使用する予定の死亡率', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院保険（特約）"
                    :contents="[
                        '国民の平均入院日数よりも短期 → 国民の平均入院日数よりも長期', //p51
                        '生活習慣病特約における発生率が著しく低い → 発生率が著しく高い', //p51-52
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
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
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的査定の対象となる危険"
                    :contents="[
                        '保険金削減法 → 特別保険料領収法', //p105
                        '保険金削減法 → 特別保険料領収法', //p105
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
                        '共同保険式再保険 → 危険保険料式再保険', //p178
                        '危険保険料式再保険 → 共同保険式再保険', //p179
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="体格"
                    :contents="[
                        '正しい',
                        '2種 → 3種（普通体・過重体・過軽体）', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認の意義と目的"
                    :contents="[
                        '正しい',
                        '契約確認と比較して簡略化されたもの → 契約確認と比較してかなり広範囲かつ綿密なもの', //p119
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険業における個人情報保護のための取扱指針"
                    :contents="[
                        '正しい',
                        '正しい',
                        '本人の同意を得なければならない → 本人に通知又は公表しなければならない', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="復活"
                    :contents="[
                        '正しい',
                        '復活時には過去全体の告知を求めるのが普通である → 復活時には契約後の健康歴その他の告知を求めるのが普通', //p173
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率比較"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険体の範囲が広くなるから → 保険体の範囲が狭くなるから', //p186
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '生命表',
                            content: '標準生命表 → 国民生命表<br>簡易生命表 → 経験生命表', //p5
                        }, //31
                        {
                            questionTitle: '危険選択の厳格度',
                            content: '期待死亡率についての目標値（実際死亡率） → 実際死亡率についての目標値（期待死亡率）', //p35
                        }, //32
                        {
                            questionTitle: '医学的選択',
                            content: '第1段階ではなく第2段階の説明', //p37
                        }, //33
                        {
                            questionTitle: '職業危険',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '診査実施上の制限',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '危険選択の段階',
                            content: '査定 ↔︎ 決定', //p86-87
                        }, //36
                        {
                            questionTitle: '数字査定法',
                            content: '50%の超過死亡 → 50%の改善', //p112
                        }, //37
                        {
                            questionTitle: '入院・手術保障における選択',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '最高保険金額',
                            content: '年齢・職業・既往歴に関わらず一定 → 年齢・職業・既往歴などによって異なる', //p181
                        }, //39
                        {
                            questionTitle: '死因別死亡率',
                            content: '正しい',
                        }, //40
                        { questionTitle: '告知義務', label: 'エ', content: '質問応答義務' }, //41
                        { questionTitle: '解除', label: 'ウ', content: '解約返戻金' }, //42
                        { questionTitle: '保険料の仕組みと危険選択', label: 'オ', content: '' }, //43
                        { questionTitle: '選択の有効期間', label: 'オ', content: '' }, //44
                        { questionTitle: '心疾患', label: 'ア', content: '先天性' }, //45
                        { questionTitle: '道徳的危険排除のためのポイント', label: 'ウ', content: '被保険者利益' }, //46
                        { questionTitle: '査定・決定の種類', label: 'エ', content: '再診' }, //47
                        { questionTitle: '第1次選択', label: 'オ', content: '' }, //48
                        { questionTitle: '個人データの安全管理措置', label: 'イ', content: 'き損' }, //49
                        { questionTitle: '高度障害状態', label: 'ア', content: '第1級' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="kiken2025b" next-route="kiken2024a" />
        </section>
    </SeihoTestLayout>
</template>
