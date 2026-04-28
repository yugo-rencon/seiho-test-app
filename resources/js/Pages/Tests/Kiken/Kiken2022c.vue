<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2022年度 フォームC";
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
                    questionTitle="現病歴・既往歴-①"
                    :contents="[
                        '収縮期',
                        '拡張期',
                        '本態性高血圧',
                        '先天性',
                        'インシュリン', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'カ', //2
                        'ア', //3
                        'オ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴-②"
                    :contents="[
                        '赤血球',
                        '肝硬変',
                        '肝臓がん',
                        'ストレス',
                        'リンパ球', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'カ', //7
                        'コ', //8
                        'ウ', //9
                        'オ', //10
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
                    questionTitle="環境選択"
                    :contents="[
                        '標準体と判定される → 環境が良好でないれば標準体と判定されない場合がある', //p58
                        '過度の飲酒は問題とならない → 過度の飲酒の習慣も問題となる', //p59
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
                    questionTitle="契約制限"
                    :contents="[
                        '短期定期保険または短期払込定期保険 → 短期養老保険または短期払込養老保険<br>養老保険では逆転 → 定期保険では逆転', //p73
                        '正しい',
                        '役員を被保険者とする場合には必要ない → 役員を被保険者とする場合も被保険者の書面による加入同意が必要', //p75
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
                    questionTitle="死亡率と死亡指数"
                    :contents="[
                        '正しい',
                        '正しい',
                        '「予定死亡率 ÷ 実際死亡率 × 100（%)」 → 「実際死亡率 ÷ 予定死亡率 × 100（%)」', //p11
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
                    questionTitle="契約確認の時期と方法"
                    :contents="[
                        '一部 ↔︎ 大部分', //p114
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択"
                    :contents="[
                        '正しい',
                        '職業上の危険選択は行わない → 職業上の危険選択行っている', //p171
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '生命表', content: '経験生命表 → 国民生命表<br>簡易生命表 → 経験生命表' }, //31 p5
                        { questionTitle: '死差益の計算方法', content: '純収支計算方式で表せば → 統計的方式で表せば' }, //32 p27
                        { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //33
                        { questionTitle: '社医と嘱託医', content: '正しい' }, //34
                        { questionTitle: '診査実施上の制限', content: '区分を設けている生命保険会社は少ない → 区分を設けている生命保険会社が多い' }, //35　p74
                        { questionTitle: '公序良俗に反する行為', content: '重大事由による免責権 → 重大事由による解除権' }, //36 p79-80
                        { questionTitle: '保険診査', content: '正しい' }, //37
                        { questionTitle: '個人情報の取得', content: '正しい' }, //38
                        { questionTitle: '最高保険金額', content: '正しい' }, //39
                        { questionTitle: '死因別死亡率', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '被保険者の危険', label: 'ウ', content: '環境的危険' }, //41
                        { questionTitle: '解除権の消滅', label: 'ア', content: '1ヶ月' }, //42
                        { questionTitle: '職業危険', label: 'ア', content: '入院率' }, //43
                        { questionTitle: '生命保険面接士', label: 'エ', content: '診査報状' }, //44
                        { questionTitle: '体格', label: 'ウ', content: '22' }, //45
                        { questionTitle: '医学的査定', label: 'エ', content: '特別保険料領収法' }, //46
                        { questionTitle: '保険金確認・給付金確認', label: 'イ', content: '発生後' }, //47
                        { questionTitle: '期待死亡率との比較', label: 'オ', content: '' }, //48
                        { questionTitle: '災害関係特約', label: 'オ', content: '' }, //49
                        { questionTitle: '団体保険の個別選択', label: 'エ', content: '正常勤務' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2022b" next-route="kiken2021a" />
        </section>
    </SeihoTestLayout>
</template>
