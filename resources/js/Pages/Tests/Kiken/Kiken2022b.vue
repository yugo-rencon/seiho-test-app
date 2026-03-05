<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2022年度 フォームB";
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
                    questionTitle="危険選択の必要性-①"
                    :contents="[
                        '安定性',
                        '標準的',
                        '延期体',
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
                        '大数の法則',
                        '実際死亡率',
                        '医学的',
                        '危険の公平性',
                        '相互扶助', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ア', //8
                        'エ', //9
                        'ウ', //10
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
                        '減少',
                        '共同',
                        '同一の', //問16〜20
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
                    questionTitle="選択効果"
                    :contents="[
                        '国民生命表との比較でも3〜5年 → 国民生命表との比較ではかなり長期に及ぶ', //p32
                        '正しい',
                        '若年齢層：診査の効果は顕著 → 診査の効果は顕著ではない<br>高年齢層：選択効果は期待できない → 選択効果を期待できる', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :contents="[
                        '正しい',
                        '告知事項の存在を知らないまま告知しなかった場合にも告知義務違反は成立する → 告知義務違反は成立しない', //p16
                        '過失によって知らなかった場合は解除できる → 解除できない', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
                    :contents="[
                        'アルコール中毒や不摂生生活のような職業に随伴する危険は含まれない → 含まれる', //p69
                        '選択上考慮されない → 職業制限と呼ばれる選択基準を設けている', //p69-70
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段"
                    :contents="[
                        '正しい',
                        '生命保険支払専門士 → 生命保険面接士', //p99
                        '個別 ↔︎ 団体', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」"
                    :contents="[
                        '正しい',
                        'ほとんど差がない → 全く異なるため、従来とは異なった診査観点が必要', //p150
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
                        '死差益に対する貢献度は同じ → 貢献度は異なる', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
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
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険業における個人情報保護のための取扱指針"
                    :contents="[
                        '正しい',
                        '正しい',
                        '本人に通知または公表する必要はない → 通知または公表しなければならない', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容登録制度"
                    :contents="[
                        '金融庁 → 生命保険協会', //p139
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
                        { questionTitle: '告知義務', content: '正しい' }, //31
                        { questionTitle: '死差益の計算方法', content: '純収支計算方式で表せば → 統計的方式で表せば' }, //32 p27
                        { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //33
                        { questionTitle: '医学的選択', content: '第1段階の内容 → 第2段階の内容' }, //34 //p37
                        { questionTitle: '糖尿病', content: 'ネフローゼ → インシュリン' }, //35 p66
                        { questionTitle: '保険種類・保険期間の制限', content: '短期 ↔︎ 長期' }, //36 p73
                        { questionTitle: '保険金確認', content: '正しい' }, //37
                        { questionTitle: '機微（センシティブ）情報', content: '正しい' }, //38
                        { questionTitle: '団体の選択', content: '保険加入のみを目的とした団体を設立すること → 保険加入のみを目的として設立された団体でないこと' }, //39 p169
                        { questionTitle: '死因別死亡率', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '死亡率', label: 'ウ', content: '標準化死亡率' }, //41
                        { questionTitle: '高血圧', label: 'イ', content: '二次性高血圧' }, //42
                        { questionTitle: '重大事由による解除', label: 'ア', content: '信頼関係' }, //43
                        { questionTitle: '第1次選択', label: 'オ', content: '' }, //44
                        { questionTitle: '体格', label: 'ウ', content: '22' }, //45
                        { questionTitle: '査定法', label: 'オ', content: '' }, //46
                        { questionTitle: '入院・手術保障における料率', label: 'ア', content: '平均' }, //47
                        { questionTitle: '再保険', label: 'エ', content: 'より低く' }, //48
                        { questionTitle: '災害関係特約', label: 'オ', content: '' }, //49
                        { questionTitle: '団体保険の個別選択', label: 'エ', content: '正常勤務' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2022a" next-route="kiken2022c" />
        </section>
    </SeihoTestLayout>
</template>
