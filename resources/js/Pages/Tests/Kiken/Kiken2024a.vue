<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2024年度 フォームA";
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
                    questionTitle="再保険の契約形態と方式-①"
                    :contents="[
                        '出再会社',
                        '自動',
                        '任意',
                        '諾否決定',
                        '成立', //問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                        'カ', //13
                        'ケ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態と方式-②"
                    :contents="[
                        '個別',
                        '定期保険',
                        '危険保険料式',
                        '共同保険式',
                        '責任準備金', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'ア', //17
                        'ウ', //18
                        'コ', //19
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
                    questionTitle="危険保険料と危険保険金"
                    :contents="[
                        '付加保険料 → 貯蓄保険料', //p23
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :contents="[
                        '短期定期保険または短期払込定期保険 → 短期養老保険または短期払込養老保険<br>養老保険では逆転 → 定期保険では逆転', //p73
                        '正しい',
                        '役員を被保険者とする場合には必要ない → 役員の場合も必要。', //p75
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="条件体特別条件付決定"
                    :contents="[
                        '正しい',
                        '10年 → 5年', //p108
                        '一定期間特別保険料領収法 → 年増法', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」"
                    :contents="[
                        '正しい',
                        'ほとんど差がない → まったく異なる', //p150
                        '超過危険を調整することができる → 調整することはできない', //p150
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡指数"
                    :contents="[
                        '正しい',
                        '死差益に対する貢献度が同じ → 貢献度は異なる', //p12
                        '正しい',
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
                    questionTitle="体格"
                    :contents="[
                        '正しい',
                        '2種 → 3種（過軽体を含む）', //p63
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
                    questionTitle="死亡率比較"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険体の範囲が広くなる → 狭くなる', //p186
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '生命表', content: '経験生命表 → 国民生命表<br>標準生命表 → 経験生命表' }, //31 p5
                        { questionTitle: '生命保険会社における経験死亡率', content: '件数死亡率 ↔︎ 金額死亡率' }, //32 p9
                        { questionTitle: '選択効果', content: '正しい' }, //33
                        { questionTitle: '職業危険', content: 'アルコール中毒や不摂生生活のような職業に随伴する危険は該当しない → 該当する' }, //34 p69
                        { questionTitle: '道徳的危険の発見と排除', content: '正しい' }, //35
                        { questionTitle: '社医と嘱託医', content: '社医と嘱託医で違いは設けられていない → 違いを設けている' }, //36 p99
                        { questionTitle: '機微（センシティブ）情報', content: '正しい' }, //37
                        { questionTitle: '復活', content: '失効後の期間の短い → 長い' }, //38 p173
                        { questionTitle: '最高保険金額', content: '正しい' }, //39
                        { questionTitle: '実際死亡状況の分析', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '告知義務者', label: 'ウ', content: '告知を受領する権限のある者' }, //41
                        { questionTitle: '保険料の仕組みと危険選択', label: 'イ', content: '純保険料' }, //42
                        { questionTitle: '被保険者集団の具備すべき条件', label: 'イ', content: '倫理' }, //43
                        { questionTitle: '高血圧', label: 'エ', content: '本態性高血圧' }, //44
                        { questionTitle: '重大事由による解除', label: 'ア', content: '信頼関係' }, //45
                        { questionTitle: '第1次選択', label: 'オ', content: '' }, //46
                        { questionTitle: '医学的査定', label: 'ウ', content: '尿異常' }, //47
                        { questionTitle: '保険金確認・給付金確認', label: 'オ', content: '' }, //48
                        { questionTitle: '高度障害状態', label: 'エ', content: '両眼の視力' }, //49
                        { questionTitle: '団体保険の契約内容の変更', label: 'ア', content: '1年間' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="kiken2024b" />
        </section>
    </SeihoTestLayout>
</template>
