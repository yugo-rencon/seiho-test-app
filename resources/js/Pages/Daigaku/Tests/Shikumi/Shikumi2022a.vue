<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2022年度 フォームA";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険者"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '登録 → 免許', //p3
                        '免許 → 登録', //p3
                        '自由につけることができる → 生命保険会社であることをしめす必要がある', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始の時期"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '必ず一致する → 必ずしも一致しないことがある', //p10
                        '保険契約の成立日を意味する → 保険約款における期間の起算日を意味する', //p12
                        '支払対象とはならない → 支払対象となる', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="[]"
                    :contents="[
                        '立替入金も禁止されていない → 保険業法で禁じられている', //p13
                        '同一とは評価されない → 同一と評価される', //p14
                        '口座に入金された時点で保険料を払い込んだことになる → 窓口やATM等で払い込んだ時点で保険料を払い込んだことになる', //p16
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '消息を絶った時点に遡って → 7年の期間が満了したとき', //p23
                        '親族 → 利害関係人', //p23
                        '高度障害保険金を支払わない → 支払う', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        '保険料払込期月の契約応当日に遡って → 猶予期間の満了日の翌日から', //p34
                        '解約返戻金の請求権は消滅する → 請求権は存続する', //p35
                        '正しい',
                        '配当金は支払われない → 支払われる', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="[]"
                    :contents="[
                        '収支相当の原則が有効に機能していること → 大数の法則が作用し得る程度に十分大量の被保険者が存在すること', //p67
                        '厚生労働省 → 金融庁長官', //p67
                        '正しい',
                        '単なる契約の変更のため、申込みの諾否決定や危険選択の追加をすることはない → 新たな危険の増加を伴う場合もあるので申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'どちらの場合も告知受領権はない → 代理の場合は告知受領権があり、媒介の場合はない', //p72
                        '告知義務者が主観的に重要と思う事項 → 主観的に重要と思うかどうかとは無関係', //p72
                        '程度を問わず過失によるものは該当しない → 重大な過失によるものは該当する', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業保険料の構成と計算基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '純保険料 → 付加保険料', //p89
                        '正しい',
                        '付加保険料 → 純保険料', //p89
                        '付加保険料 → 純保険料', //p89
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="[]"
                    :contents="[
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額<br>一時払終身保険 → 一時払養老保険', //p114
                        '変更時点の計算基礎率 → 元契約と同じ計算基礎率', //p114
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p115
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="[]"
                    :contents="[
                        '終身タイプの商品はない → 定期タイプと終身タイプがある', //p140
                        '満期保険金を支払う商品が一般的 → 一般に満期保険金はない', //p140
                        '保険金はがんと同額で、保険金がないものはない → 保険金が少額で、保険金がないものもある', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '特約は継続する → 特約は消滅する', //p156
                        '主契約の死亡・高度障害保険金の支払いはない → 支払われる', //p157
                        '余命1年6ヶ月以内 → 余命6ヶ月以内', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業とその商品"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '農業協同組合が単独 → 農業協同組合と全国共済農業協同組合連合会の2組織', //p166
                        '2年タイプ → 1年タイプ', //p179
                        '年齢による区分のない → 年齢により保障が分かれている', //p185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約・取消し・無効等"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'いずれの場合も既払込保険料は返還 → 後者の場合は返還されない', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '5年 → 3年', //p32
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="身体的危険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '既往歴 → 現病歴', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '150であれば50%低い死亡率 → 50%高い死亡率', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果の検証"
                    :relatedProblems="[]"
                    :contents="[
                        '活かす目的に適している → 適さない', //p69
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険金 → 保険年度末保険料積立金', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '毎年の契約応当日に支払わない → 契約応当日に現金で支払う', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '転換後契約の加入年齢 → 転換前契約の加入年齢', //p120
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="[]"
                    :contents="[
                        '逓増定期保険特約はない → 逓増定期保険特約もある', //p156
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定の疾病や損傷の治療に備える特約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '特約は消滅しない → 消滅する', //p159
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する販売チャネルもある → 該当する販売チャネルはない', //p165
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="危険選択の手段"
                    :relatedProblems="[]"
                    :contents="[
                        '事業方法書',
                        '社医',
                        '嘱託医',
                        '検診',
                        '保険事故発生率', // 問25〜29
                    ]"
                    :labels="[
                        'カ', //25
                        'ケ', //26
                        'コ', //27
                        'イ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="条件体保険の特別条件"
                    :relatedProblems="[]"
                    :contents="[
                        '逓増性',
                        '逓減性',
                        '5',
                        '少なく',
                        '一時払', // 問30〜34
                    ]"
                    :labels="[
                        'ケ', //30
                        'イ', //31
                        'エ', //32
                        'コ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="チルメル式保険料積立金"
                    :relatedProblems="[]"
                    :contents="[
                        '付加保険料',
                        '純保険料',
                        '貯蓄保険料',
                        '危険保険料',
                        '平準保険料式', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'オ', //36
                        'ケ', //37
                        'ア', //38
                        'キ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '保険法における生命保険契約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '年払・半年払保険料の返還',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: 'BMI',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '契約内容登録制度等',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '契約確認',
                            relatedProblems: [],
                            content: '契約成立後に行われることはない → 契約成立前や契約成立後に行われる', //p60
                        }, //44
                        {
                            questionTitle: '生命保険会社で使用している経験表',
                            relatedProblems: [],
                            content: '生保標準生命表2021 → 2018', //p78
                        }, //45
                        {
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: [],
                            content: '平均寿命 ↔︎ 平均余命', //p79
                        }, //46
                        {
                            questionTitle: '個人年金保険の年金種類の変更',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '変額保険・変額個人年金保険',
                            relatedProblems: [],
                            content: 'いずれの保険も解約返戻金に最低保証がある → 変額保険の場合、最低保証はない', //p146
                        }, //48
                        {
                            questionTitle: 'CO・OP共済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2023c" next-route="daigaku.shikumi-kojin2022b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
