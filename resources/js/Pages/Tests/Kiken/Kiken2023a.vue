<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2023年度 フォームA";
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
                    questionTitle="被保険者集団の具備すべき条件-①"
                    :contents="[
                        '保護',
                        '公平性',
                        '減殺',
                        '被保険者利益',
                        '疾病保険', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'イ', //2
                        'キ', //3
                        'ク', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団の具備すべき条件-②"
                    :contents="[
                        '継続',
                        '低い',
                        '大数の法則',
                        '危険選択の効果',
                        '再保険', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ウ', //8
                        'ク', //9
                        'イ', //10
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
                    questionTitle="告知"
                    :contents="[
                        '正しい',
                        '告知事項の存在を知らないまま告知しなかった場合にも告知義務違反は成立する → 告知義務違反は成立しない', //p16
                        '過失によって知らなかった場合は解除できる → 解除できない', //p17
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
                    questionTitle="現病歴・既往歴"
                    :contents="[
                        '若年層：高血圧性、虚血性が多い → 先天性のものが多い<br>中年および高年齢：先天性のものが多い → 高血圧性、虚血性が多い', //p65
                        '正しい',
                        '二次性高血圧 ↔︎ 本態性高血圧', //p64-65
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :contents="[
                        '健康に自信のある者 → 健康に自信のない者<br>直接測定することは可能 → 直接測定することはできない', //p77
                        '正しい',
                        '保険業法 → 保険法', //p80
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
                    questionTitle="環境選択"
                    :contents="[
                        '正しい',
                        '正しい',
                        '災害疾病入院給付金等を目当てとする逆選択の心理は働きづらい →逆選択の心理が働きやすい', //59
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
                        { questionTitle: '生命表', content: '経験生命表 → 国民生命表<br>簡易生命表 → 経験生命表' }, //31 p5
                        { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //32
                        { questionTitle: '体格', content: '体重 × 身長の二乗 → 体重 ÷ 身長の二乗' }, //33  //p63
                        { questionTitle: '医学的査定', content: '正しい' }, //34
                        { questionTitle: '機微（センシティブ）情報', content: '正しい' }, //35
                        { questionTitle: '契約内容登録制度', content: '金融庁 → 生命保険協会' }, //36 p139
                        { questionTitle: '傷害特約', content: '正しい' }, //37
                        { questionTitle: '復活', content: '逆選択混入の危険が少なく → 多く<br>経験死亡率が低い → 高い' }, //38 p173-174
                        { questionTitle: '最高保険金額と保有限度額', content: '保険金受取人 → 被保険者' }, //39 p181
                        { questionTitle: '死亡状況の分析', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '死亡率', label: 'エ', content: '金額死亡率' }, //41
                        { questionTitle: '解除権の消滅', label: 'オ', content: '' }, //42
                        { questionTitle: '保険料の仕組みと危険選択', label: 'ウ', content: '収支相当の原則' }, //43
                        { questionTitle: '販売政策と選択政策', label: 'ア', content: '加入申込者群' }, //44
                        { questionTitle: '職業危険', label: 'イ', content: '入院率' }, //45
                        { questionTitle: '人間ドック扱', label: 'イ', content: '告知書' }, //46
                        { questionTitle: '査定・決定の種類', label: 'エ', content: '再診' }, //47
                        { questionTitle: '契約確認後の処理', label: 'ウ', content: '不実の告知' }, //48
                        { questionTitle: '入院・手術保障における料率', label: 'オ', content: '' }, //49
                        { questionTitle: '団体保険の契約内容の変更', label: 'ア', content: '1年間' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2024c" next-route="kiken2023b" />
        </section>
    </SeihoTestLayout>
</template>
