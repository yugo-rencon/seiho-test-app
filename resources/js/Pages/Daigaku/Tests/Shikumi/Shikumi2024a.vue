<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2024年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険者"
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
                    :contents="[
                        '正しい',
                        '必ず一致する → 必ずしも一致しないことがある', //p10
                        '保険契約の成立日を意味する → 保険契約の成立日を意味するものではない', //p12
                        '支払対象とはならない → 支払対象となる', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
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
                    questionTitle="前納・一括払と一時払"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '多くなる → 少なくなる', //p22
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :contents="[
                        '正しい',
                        '消息を絶った時点に遡って → 7年の期間が満了したとき', //p23
                        '親族 → 利害関係者', //p23
                        '高度障害保険金を支払わない → 支払う', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :contents="[
                        '収支相当の原則が有効に機能していること → 大数の法則が作用し得る程度に十分大量の被保険者が存在すること', //p67
                        '厚生労働省 → 金融庁長官', //p67
                        '正しい',
                        '申込みの諾否決定や危険選択の追加をすることはない → 申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :contents="[
                        '告知義務者本人の署名は必要ない → 本人の署名が必要', //p 61
                        '個別方式は行われていない → 一括方式と個別方式が行われている', //p62
                        '外観の観察は行わない → 行う', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :contents="[
                        '保険約款に規定がない契約 → 保険約款に規定がある契約のみ', //p112
                        '経過期間に関わらず → 猶予期間満了後一定期間内の場合', //p112
                        '責任準備金 → 解約返戻金', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :contents="[
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p114
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
                    :contents="[
                        '終身タイプの商品はない → 定期タイプと終身タイプがある', //p140
                        '満期保険を支払う商品が一般的 → 一般に満期保険金はない', //p140
                        '保険金はがんと同額で、保険金がないものはない → 保険金が少額で、保険金がないものもある', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約の種類"
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
                    questionTitle="共済制度の特徴"
                    :contents="[
                        '正しい',
                        '営利を目的とする → 営利を目的としてはならない', //p165
                        '双方を取り扱うことはできない → 双方を取り扱っている', //p165
                        '多くの共済種類を取り扱う → 共済種類が限られている', //p165
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
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
                    :contents="[
                        '正しい',
                        'いずれの場合も → 後者（詐欺による契約）の場合は返還されない', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
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
                    questionTitle="保険契約の失効・復活"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '失効中の期間は計算対象に含めない → 含めて計算する', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
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
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :contents="[
                        '正しい',
                        '営業保険料の総額 → 危険保険金', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
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
                    questionTitle="主契約の種類"
                    :contents="[
                        '給付金の支払いに制限がない → 契約後1年間は給付金額が半額などの制限あり', //p151
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '実損払方式 → 定額給付方式', //p204
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="危険の要素"
                    :contents="[
                        '体格',
                        '過重体',
                        '過軽体',
                        '職業',
                        '申込動機', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'ケ', //26
                        'ウ', //27
                        'キ', //28
                        'コ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="配当の種類と仕組み"
                    :contents="[
                        '通常配当',
                        '内部留保',
                        '価格変動準備金',
                        '消滅時特別配当',
                        '消滅事由', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'ケ', //31
                        'キ', //32
                        'ウ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="チルメル式保険料積立金"
                    :contents="[
                        '付加保険料',
                        '純保険料',
                        '貯蓄保険料',
                        '危険保険料',
                        '平準純保険料式', // 問35〜39
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
                        { questionTitle: '生命保険契約の定義', content: '正しい' }, //40
                        { questionTitle: '年払・半年払保険料の取扱い', content: '正しい' }, //41
                        { questionTitle: 'BMI', content: '正しい' }, //42
                        { questionTitle: '契約確認', content: '正しい' }, //43
                        { questionTitle: '死亡率と生存率の関係', content: '生存率：1 - （1 / 死亡率） → 1 - 死亡率<br>死亡率：1 - （1 / 生存率） → 1 - 生存率' }, //44 p79
                        { questionTitle: '生命保険会社で使用している経験表', content: '2021 → 2018' }, //45 p78
                        { questionTitle: '平均寿命・平均余命', content: '平均寿命 ↔︎ 平均余命' }, //46 p79
                        { questionTitle: '個人年金保険の年金種類の変更', content: '正しい' }, //47
                        { questionTitle: '特定疾病保障保険（三大疾病保障保険）', content: '契約は継続する → 契約は消滅する' }, //48 p137
                        { questionTitle: '少額短期保険業', content: 'いずれも保険期間1年以内 → 損害保険は2年以内' }, //49 p198
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2025c" next-route="daigaku.shikumi-kojin2024b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
