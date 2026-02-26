<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2024年度 フォームC";
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
                    questionTitle="現病歴・既往歴-①"
                    :contents="[
                        '収縮期',
                        '拡張期',
                        '本態性高血圧',
                        '先天性',
                        'インシュリン', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'カ', //12
                        'ア', //13
                        'オ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴-②"
                    :contents="[
                        '赤血球',
                        '肝硬変',
                        '肝臓がん',
                        'ストレス',
                        'リンパ球', //問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'カ', //17
                        'コ', //18
                        'ウ', //19
                        'オ', //20
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
                    questionTitle="選択効果"
                    :contents="[
                        '国民生命表との比較でも3〜5年 → 国民生命表との比較ではかなり長期に及ぶ', //p32
                        '正しい',
                        '若年齢層：審査の効果は顕著 → 診査の効果は顕著ではない<br>高年齢層：選択効果は期待できない → 選択効果を期待できる', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :contents="[
                        '制限を加えることはしていない → 制限を加えている', //p72
                        '推奨されている → 推奨されていない', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :contents="[
                        '欧米では嘱託医制度はなく、一般に社医だけである → 欧米では社医制度はなく、一般に嘱託医だけである。', //p95
                        '正しい',
                        '健康管理証明書扱（個別）の場合と全く同じ → 全く異なる', //p102
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
                    questionTitle="医学的選択上の課題"
                    :contents="[
                        '手術給付率と入院給付率の説明が逆', //p52
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="道徳的危険排除のためのポイント"
                    :contents="[
                        '正しい',
                        '正しい',
                        '過小 → 過大', //p79
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
                    questionTitle="復活"
                    :contents="[
                        '待ち期間 → 猶予期間', //p172
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
                        { questionTitle: '死亡表', content: '比較することができる → 比較することはできない' }, //31
                        { questionTitle: '生命保険会社における経験死亡率', content: '件数死亡率と金額死亡率が逆' }, //32 p9
                        { questionTitle: '販売政策と選択政策', content: '正しい' }, //33
                        { questionTitle: '職業危険', content: '正しい' }, //34
                        { questionTitle: '機微（センシティブ）情報', content: '正しい' }, //35
                        { questionTitle: '契約確認', content: '大部分と一部が逆' }, //36
                        { questionTitle: '給付金確認', content: '正しい' }, //37
                        { questionTitle: '団体定期保険における更新時の選択', content: '正しい' }, //38
                        { questionTitle: '最高保険金額', content: '正しい' }, //39
                        { questionTitle: '実際死亡状況の分析', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '生命表', label: 'ア', content: '選択表' }, //41
                        { questionTitle: '保険料の仕組みと危険選択', label: 'イ', content: '純保険料' }, //42
                        { questionTitle: '被保険者集団の具備すべき条件', label: 'イ', content: '倫理' }, //43
                        { questionTitle: '医学的選択上の制約条件', label: 'オ', content: '' }, //44
                        { questionTitle: '体格', label: 'ウ', content: '22' }, //45
                        { questionTitle: '査定・決定の種類', label: 'エ', content: '再診' }, //46
                        { questionTitle: '契約確認後の処理', label: 'ウ', content: '不実の告知' }, //47
                        { questionTitle: '入院・手術保障における料率', label: 'ア', content: '平均給付日数' }, //48
                        { questionTitle: '高度障害状態', label: 'エ', content: '両眼の視力' }, //49
                        { questionTitle: '実際死亡状況の分析', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2024b" next-route="kiken2023a" />
        </section>
    </SeihoTestLayout>
</template>
