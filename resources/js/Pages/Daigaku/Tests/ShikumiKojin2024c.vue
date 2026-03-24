<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2024年度 フォームC";
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
                    questionTitle="保険法に基づく被保険者の同意"
                    :contents="[
                        '被保険者の同意が必要 → 同意は不要', //p5
                        '死亡保険の場合 → 死亡保険と生死混合保険の場合', //p5
                        '正しい',
                        '被保険者の同意は必要ない → 同意が必要', //p5-6
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始の時期"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の当事者"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約者・保険金受取人の変更"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :contents="[
                        '告知義務違反にあたらない → 告知義務違反となる', //p39z
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '3年 → 5年', //p40
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
                    questionTitle="告知義務制度"
                    :contents="[
                        '正しい',
                        '告知受領権を有しない → 代理の場合は有する', //p72
                        '告知義務者が主観的に重要と思う事項は対象 → 対象外', //p72
                        '過失によるものは該当しない → 重大な過失は該当する', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
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
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :contents="[
                        '正しい',
                        '保険料免除機能がある → 保険料免除機能はない', //p146
                        '最低保証がある → 最低保証はない', //p146
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業とその商品"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約締結の方法"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                    questionTitle="身体的危険"
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
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の割当て"
                    :contents="[
                        '正しい',
                        '', //p
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
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
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
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :contents="[
                        '正しい',
                        '', //p
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
                        '', //p
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
                    questionTitle="危険選択の手段"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
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
                    questionTitle="選択効果"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'エ', //31
                        'ク', //32
                        'イ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="チルメル式保険料積立金"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
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
                        { questionTitle: '保険金受取人', content: '正しい' }, //41
                        { questionTitle: 'BMI', content: '正しい' }, //42
                        { questionTitle: '契約内容登録制度等', content: '正しい' }, //43
                        { questionTitle: '超過危険の種類', content: '恒常性危険 → 逓増性危険' }, //44 p73
                        { questionTitle: '保険料の現価', content: '' }, //45
                        { questionTitle: '平均寿命・平均余命', content: '平均寿命 ↔︎ 平均余命' }, //46 p79
                        { questionTitle: '個人年金保険の年金種類の変更', content: '正しい' }, //47
                        { questionTitle: '先進医療特約', content: '正しい' }, //48
                        { questionTitle: '少額短期保険業', content: '' }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2024b" next-route="daigaku.shikumi-kojin2023a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
