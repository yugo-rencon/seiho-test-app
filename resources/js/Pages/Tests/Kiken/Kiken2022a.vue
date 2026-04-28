<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2022年度 フォームA";
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
                    questionTitle="死亡率と死亡指数-①"
                    :contents="[
                        '選択効果',
                        '実際死亡率',
                        '簡易生命表',
                        '経験',
                        '標準体', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'イ', //2
                        'コ', //3
                        'オ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数-②"
                    :contents="[
                        '経営効率',
                        '災害死亡',
                        '困難',
                        '診査基準',
                        '健康管理証明書', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'キ', //7
                        'オ', //8
                        'イ', //9
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
                    questionTitle="生命保険で対象としている危険"
                    :contents="[
                        '経済的危険 → 身体的危険', //p4
                        '不当な利益を得ようとする心理状態は道徳的危険の説明', //p4
                        '正しい',
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
                    questionTitle="医学的選択上の課題"
                    :contents="[
                        '三大都市圏から離れるにつれて低率となる → 高率となる', //p47
                        '正しい',
                        '脳血管疾患 → 悪性新生物', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認"
                    :contents="[
                        '契約確認と比較するとかなり狭い範囲で簡単なもの → かなり広範囲かつ綿密なもの', //p119
                        '目的自体もまったく異なっている → 目的自体は契約確認と何ら変わることはない', //p120
                        '正しい',
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
                    questionTitle="現病歴・既往歴"
                    :contents="[
                        '正しい',
                        'ネフローゼ → インシュリン', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
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
                    questionTitle="団体保険における団体の選択"
                    :contents="[
                        '正しい',
                        '団体定期保険 ↔︎ 総合福祉団体  定期保険', //p169
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険における元受会社の最高保険金額と保有限度額"
                    :contents="[
                        '1保険金受取人 → 1被保険者', //p181
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
                        { questionTitle: '死差益の計算方法', content: '純収支計算方式で表せば → 統計的方式で表せば' }, //32 p27
                        { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //33
                        { questionTitle: '職業危険', content: 'アルコール中毒や不摂生生活のような職業に随伴する危険は含まれない → 含まれる' }, //34 p69
                        { questionTitle: '条件体契約', content: '体重別・性別 → 年齢別' }, //35 p72
                        { questionTitle: '社医と嘱託医', content: '社医と嘱託医で違いは設けられていない → 違いを設けている' }, //36 p99
                        { questionTitle: '契約確認', content: '正しい' }, //37
                        { questionTitle: '個人データの安全管理措置', content: '組織的安全管理措置 → 人的安全管理措置' }, //38 p137
                        { questionTitle: '団体定期保険における更新時の選択', content: '正しい' }, //39
                        { questionTitle: '死因別死亡率', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '死亡率', label: 'エ', content: '金額死亡率' }, //41
                        { questionTitle: '契約の解除', label: 'ア', content: '保険法' }, //42
                        { questionTitle: '経験保険料と危険保険金', label: 'オ', content: '' }, //43
                        { questionTitle: '被保険者集団の具備すべき条件', label: 'ウ', content: '大数の法則' }, //44
                        { questionTitle: '体格', label: 'ウ', content: '22' }, //45
                        { questionTitle: '保険契約の制限', label: 'イ', content: '他人' }, //46
                        { questionTitle: '人間ドック扱', label: 'ウ', content: '医師による診査' }, //47
                        { questionTitle: '査定・決定の種類', label: 'エ', content: '再診' }, //48
                        { questionTitle: '災害関係特約', label: 'オ', content: '' }, //49
                        { questionTitle: '団体保険の個別選択', label: 'エ', content: '正常勤務' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2023c" next-route="kiken2022b" />
        </section>
    </SeihoTestLayout>
</template>
