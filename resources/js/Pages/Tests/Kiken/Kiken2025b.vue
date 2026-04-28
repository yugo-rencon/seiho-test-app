<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2025年度 フォームB";
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
                    questionTitle="団体保険の危険選択-①"
                    :contents="[
                        '被用者団体',
                        '団体性',
                        '相似する',
                        '保険加入',
                        '加入率', // 問11〜15
                    ]"
                    :labels="[
                        'ケ', //11
                        'ウ', //12
                        'コ', //13
                        'ア', //14
                        'キ', //15
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
                        '保険契約者による',
                        '一括告知',
                        '平準化', // 問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'キ', //17
                        'オ', //18
                        'ウ', //19
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
                    questionTitle="選択効果"
                    :contents="[
                        '国民生命表との比較でも3〜5年 → 国民生命表との比較ではかなり長期に及ぶ', //p32
                        '正しい',
                        '若年齢層：診査の効果は顕著 → 診査の効果は顕著ではない（死因として不慮の事故が上位を占めるため）<br>高年齢層：選択効果は期待できない → 選択効果を期待できる', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴"
                    :contents="[
                        '若年層：高血圧性、虚血性が多い → 先天性のものが多い<br>中年および高年齢：先天性のものが多い → 高血圧性、虚血性が多い', //p65
                        'ネフローゼ → インシュリン', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
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
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の制約条件"
                    :contents="[
                        '純保険料の範囲内 → 付加保険料の範囲内', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
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
                            content: '標準生命表 → 国民生命表<br>簡易生命表 → 経験生命表' //p5
                        }, //31
                        {
                            questionTitle: '危険選択の厳格度',
                            content: '期待死亡率についての目標値（実際死亡率） → 実際死亡率についての目標値（期待死亡率）', //p35
                        }, //32
                        {
                            questionTitle: '体格',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '保険診査',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '契約確認制度の運用',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '保険金確認後の契約の処理',
                            content: '',
                        }, //36
                        {
                            questionTitle: '機微（センシティブ）情報',
                            content: '',
                        }, //37
                        {
                            questionTitle: '元受保有額と出再額',
                            content: '',
                        }, //38
                        {
                            questionTitle: '金額別死亡率',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '死因別死亡率',
                            content: '正しい',
                        }, //40
                        { questionTitle: '被保険者の危険', label: 'ウ', content: '環境的危険' }, //41
                        { questionTitle: '解除', label: 'ウ', content: '解約返戻金' }, //42
                        { questionTitle: '保険料の仕組みと危険選択', label: 'オ', content: '' }, //43
                        { questionTitle: '販売政策と選択政策', label: 'ア', content: '加入申込者群' }, //44
                        { questionTitle: '職業危険', label: 'エ', content: '最高保険金額' }, //45
                        { questionTitle: '人間ドック扱', label: 'イ', content: '告知書' }, //46
                        { questionTitle: '査定法', label: 'オ', content: '' }, //47
                        { questionTitle: '保険金確認・給付金確認', label: 'ア', content: '発生後' }, //48
                        { questionTitle: '個人データの安全管理措置', label: 'イ', content: 'き損' }, //49
                        { questionTitle: '再保険', label: 'エ', content: 'より低く' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="kiken2025a" next-route="kiken2025c" />
        </section>
    </SeihoTestLayout>
</template>
