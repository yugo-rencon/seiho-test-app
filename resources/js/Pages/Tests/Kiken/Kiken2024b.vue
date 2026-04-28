<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2024年度 フォームB";
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
                    questionTitle="告知義務違反と契約解除-①"
                    :contents="[
                        '故意',
                        '民法',
                        '必要はない',
                        '解約返戻金',
                        '到達', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'キ', //2
                        'ウ', //3
                        'ク', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反と契約解除-②"
                    :contents="[
                        'しない',
                        '因果関係',
                        '5年',
                        '責任開始期の属する日',
                        '2年', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ウ', //8
                        'キ', //9
                        'ア', //10
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
                    questionTitle="生命保険で対象としている危険"
                    :contents="[
                        '経済的危険 → 身体的危険', //p4
                        '保険を利用して、不当な利益を得ようとする心理状態等 → 被保険者の職業・仕事の内容による危険', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
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
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴"
                    :contents="[
                        '正しい',
                        '若年層：高血圧性、虚血性が多い → 先天性のものが多い<br>中年および高年齢：先天性のものが多い → 高血圧性、虚血性が多い', //p65
                        '二次性高血圧 ↔︎ 本態性高血圧', //p64-65
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="査定・決定"
                    :contents="[
                        '金融庁 → 生命保険協会', //p86
                        '査定 ↔︎ 決定', //p86-87
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="復活"
                    :contents="[
                        '復活時には過去全体の告知 → 契約後の告知', //p713
                        '正しい',
                        '告知のみによる復活より診査による復活 → 診査による復活より告知のみによる復活', //p173-174
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
                        '告知義務がある旨 → 告知義務はない旨', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の課題"
                    :contents="[
                        '手術給付率 ↔︎ 入院給付率', //p52
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
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
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険における団体の選択"
                    :contents="[
                        '保険加入のみを目的とした団体を設立すること → 保険加入のみを目的として設立された団体でないこと', //p169
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態"
                    :contents="[
                        '代申会社 → 出再会社', //p177
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
                        { questionTitle: '危険選択', content: '正しい' }, //31
                        { questionTitle: '生命保険会社における経験死亡率', content: '件数死亡率 ↔︎ 金額死亡率' }, //32 p9
                        { questionTitle: '死差益の計算方法', content: '純収支計算方式で表せば → 統計的方式で表せば' }, //33
                        { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //34
                        { questionTitle: '体格', content: '体重 × 身長の二乗 → 体重 ÷ 身長の二乗' }, //35 //p63
                        { questionTitle: '重大事由による解除権', content: '正しい' }, //36
                        { questionTitle: '保険金確認・給付金確認', content: '確認の対象や目的は契約確認と変わらない → 確認の対象は契約確認と若干異なる' }, //37 p120
                        { questionTitle: '傷害特約', content: '正しい' }, //38
                        { questionTitle: '最高保険金額', content: '正しい' }, //39
                        { questionTitle: '実際死亡状況の分析', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '告知義務者', label: 'エ', content: '質問応答義務' }, //41
                        { questionTitle: '保険料の仕組みと危険選択', label: 'イ', content: '純保険料' }, //42
                        { questionTitle: '被保険者集団の具備すべき条件', label: 'イ', content: '倫理' }, //43
                        { questionTitle: '職業危険', label: 'ア', content: '入院率' }, //44
                        { questionTitle: '道徳的危険排除のためのポイント', label: 'ウ', content: '被保険利益' }, //45
                        { questionTitle: '人間ドック扱', label: 'ウ', content: '医師による診査' }, //46
                        { questionTitle: '査定法', label: 'オ', content: '' }, //47
                        { questionTitle: '個人データの安全管理措置', label: 'ア', content: 'き損' }, //48
                        { questionTitle: '高度障害状態', label: 'エ', content: '両眼の視力' }, //49
                        { questionTitle: '期待死亡率との比較', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2024a" next-route="kiken2024c" />
        </section>
    </SeihoTestLayout>
</template>
