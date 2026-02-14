<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import QuestionTemp4 from '../../../Components/QuestionTemp4.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険計理"
const subject = '2021年度 フォームA'

</script>

<template>

<SeihoTestLayout :title="title">
    <section class="bg-gray-100 text-gray-800 py-10">

        <!-- ページタイトル -->
        <Pagetitle
            :title="title"
            :description="subject"
        />

        <!-- 問題リスト -->
        <div class="max-w-4xl mx-auto mt-4 space-y-2">
            <QuestionTemp4
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                    // 問１ p6-9
                    {
                        answer: '0.97957',
                        explanation:
                        '<br>\
                        ＝ 93,054 ÷ 94,995<br>\
                        ＝ 0.979567･･･<br>\
                        ⇒ 小数第6位を四捨五入して <strong>0.97957</strong>' },
                    // 問２ p6-9
                    {
                        answer: '98,756',
                        explanation:
                        '<br>生存数 ＝ 期末の生存数 ÷ 期初の生存数 × 期初の生存者数<br><br>\
                        ＝ 97,539 ÷ 98,768 × 100,000<br>\
                        ＝ 98755.6･･･<br>\
                        ⇒ 小数第1位を四捨五入して <strong>98,756</strong>' },
                    // 問３ p10
                    {
                        answer: '1.12',
                        explanation:
                        '<br>死亡は年間を通じて発生するが、平均して年央に集中発生したものと考えられるので、例えば、100歳から101歳になるまでに死亡する人の平均生存年数は0.5年となる。<br><br>\
                        年齢 ： 死亡数 × 平均生存年数 ＝ 延べ生存年数<br>\
                        108歳 ： 58.951人 × 0.5年 ＝ 29.4755 ＝ 29.48<br>\
                        109歳 ： 25.888人 × 1.5年 ＝ 38.832 ＝ 38.83<br>\
                        110歳 ： 10.1008人 × 2.5年 ＝ 25.252 ＝ 25.25<br>\
                        111歳 ： 3.4515人 × 3.5年 ＝ 12.08025 ＝ 12.08<br>\
                        112歳 ： 1.0162人 × 4.5年 ＝ 4.5729 ＝ 4.57<br>\
                        113歳 ： 0.3155人 × 5.5年 ＝ 1.73525 ＝ 1.74<br>\
                        → 108歳～113歳の延べ生存年数の合計 ＝ 111.95<br><br>\
                        平均余命 ＝ 延べ生存年数の合計 ÷ 生存者数<br><br>\
                        ＝ 111.95 ÷ 99.723 ＝ 1.12226<br>\
                        ⇒ 小数第3位を四捨五入して <strong>1.12</strong>' },
                    // 問４ p39
                    {
                        answer: '776,129',
                        explanation:
                        '<br>55歳の女性は1年間に260人が死亡し、1人あたりの保険金は300万円なので、合計の保険金額は<br>\
                        300万円 × 260人 ＝ 780,000千円<br><br>\
                        支払いは年央と仮定し、利率1.0%の期央払現価率0.995037で割引くと<br>\
                        780,000千円 × 0.995037 ＝ 776,128.86千円<br>\
                        ⇒ 千円未満を四捨五入して <strong>776,129千円</strong>' },
                    // 問５ p39
                    {
                        answer: '8,050',
                        explanation:
                        '<br>問4で求めた死亡保険金の支払いに必要な費用は、55歳女性の年始生存者数96,441人で平等に分担するので、<br>\
                        776,129千円 ÷ 96,441人 ＝ 8,047.70793円<br>\
                        ⇒ 十円未満を四捨五入して <strong>8,050円</strong>' }
                ]"
                :labels="[
                    'イ', 'キ', 'ウ', 'コ', 'カ'  // 問１〜５
                ]"
            />
            <QuestionTemp4
                :questionNumber="6"
                :title="title"
                :subject="subject"
                :contents="[
                    // 問６
                    {
                        answer: '6,015',
                        explanation:
                        '<br>\
                        1,000,000円 × (1 + 0.001) <sup>6</sup> ＝ 1,006,015.02<br><br>\
                        元金との差額が利息なので、<br>\
                        1,006,015.02 - 1,000,000 ＝ 6,015.02<br>\
                        ⇒ 円未満を四捨五入して <strong>6,015円</strong>' },
                    // 問７
                    {
                        answer: '1,061,646',
                        explanation:
                        '<br>年利1.2%で半年複利のため、利率は半年あたり0.6%（=0.006）となり、5年間で10回の複利が適用される。<br><br>\
                        よって元金1,000,000円の場合の元利合計金額は、<br>\
                        1,000,000 × (1 + 0.006)<sup>10</sup> ＝ 1,061,646.19<br>\
                        ⇒ 円未満を四捨五入して <strong>1,061,646円</strong>' },
                    // 問８
                    {
                        answer: '1.51',
                        explanation:
                        '<br>転化回数：1年間に利息を元金に繰り入れる回数<br><br><br>\
                        実利率 = （ 1 + 名称利率 ÷ 転化回数）<sup>転化回数</sup> - 1<br><br>\
                        （ 1 + 0.015 ÷ 4 ）<sup>4</sup> - 1 ＝ 0.015084 ＝ 1.5084%<br>\
                        ⇒ 小数第3位を四捨五入して <strong>1.51%</strong>' },
                    // 問９
                    {
                        answer: '1.33',
                        explanation:
                        '<br>年平均利回り：投資によって得られる利益を、投資期間全体で年単位に平均化したもの<br><br>\
                        年平均利回り ＝ （（ 1 + 複利利率）<sup>期間</sup> - 1 ） ÷ 期間<br><br><br>\
                        （（ 1 + 0.013 ）<sup>5</sup> - 1 ） ÷ 5 ＝ 0.0133424 ＝ 1.33424%<br>\
                        ⇒ 小数第3位を四捨五入して <strong>1.33%</strong>' },
                    // 問10
                    {
                        answer: '1,941,180',
                        explanation:
                        '<br>元金 × （ 1 + 利率 ）<sup>期間</sup> ＝ 元利合計<br>\
                        元金 × （ 1 + 1.0% ）<sup>3年</sup> ＝ 200万円<br>\
                        元金 ＝ 2,000,000 ÷ （ 1 + 0.01 ）<sup>3</sup> ＝ 1,941,180.295<br>\
                        ⇒ 円未満を四捨五入して <strong>1,941,180円</strong>' }
                ]"
                :labels="[
                    'カ','ク','ウ','イ','コ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '未経過保険料','危険準備金','4月1日から翌年3月31日','契約月','保険リスク', //問11〜15
                ]"
                :labels="[
                'キ','イ','エ','ケ','コ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '保証はない','変動保険金額','毎日','契約者','生命保険会社', //問16〜20
                ]"
                :labels="[
                'コ','カ','キ','ケ','イ',  //問16〜20
                ]"
            />
<QuestionTemp4
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                    // 問21
                    {
                        answer: '1,525,697千円',
                        explanation:
                        '<br>\
                        死亡保険金 × 死亡数 × 期央払現価 ＝ 死亡保険金の現価<br>\
                        41歳：3,000,000 × 92 × 0.995037 ＝ 274,630千円<br>\
                        42歳：3,000,000 × 98 × 0.985185 ＝ 289,644千円<br>\
                        43歳：3,000,000 × 102 × 0.975431 ＝ 298,482千円<br>\
                        44歳：3,000,000 × 110 × 0.965773 ＝ 318,705千円<br>\
                        45歳：3,000,000 × 120 × 0.956211 ＝ 344,236千円<br>\
                        ⇒ 合計：<strong>1,525,697千円</strong>' },
                    // 問22
                    {
                        answer: '280,187,708千円',
                        explanation:
                        '<br>5年後に支払う満期保険金の現価は、<br>\
                        5年後の生存数 × 保険金額 × 期末払現価で求める。<br><br>\
                        46歳の生存数 × 300万円 × 5年の期末払現価<br>\
                        98,160 × 3,000,000 × 0.951466 ＝ 280,187,707,680円<br>\
                        ⇒ 千円未満を四捨五入して <strong>280,187,708千円</strong>' },
                    // 問23
                    {
                        answer: '7,401,075千円',
                        explanation:
                        '<br>予定事業費は保険金1000円につき25円より、一人当たりの予定事業費に加入時の生存数をかけて求める。<br><br><br>\
                        保険金額 × 予定事業費率 × 41歳の生存数<br>\
                        3,000,000 × (25 ÷ 1000) × 98,681 ＝ 7,401,075,000<br>\
                        ⇒ 千円未満を四捨五入して <strong>7,401,075千円</strong>' },
                    // 問24
                    {
                        answer: '598,850円',
                        explanation:
                        '<br>収支相当の原則「収入現価 ＝ 支出現価」で求める。<br><br>\
                        ＜収入現価＞<br>\
                        収入の現価は、41歳〜45歳の各年齢の生存数×年払保険料（P）を現価に換算して合計する。<br><br><br>\
                        年払保険料 × 生存数 × 期始払現価 ＝ 収入現価<br>\
                        41歳 ： P × 98,681 × 1.000000 ＝ 98,681P<br>\
                        42歳 ： P × 98,590 × 0.990099 ＝ 97,614P<br>\
                        43歳 ： P × 98,492 × 0.980296 ＝ 96,551P<br>\
                        44歳 ： P × 98,390 × 0.970590 ＝ 95,496P<br>\
                        45歳 ： P × 98,279 × 0.960980 ＝ 94,444P<br>\
                        → 41歳～45歳の収入現価の合計 ＝ 482,786P<br><br>\
                        ＜支出現価＞<br>\
                        支出現価は問21〜23で算出した結果を用いて求める。<br><br><br>\
                        死亡保険金の現価+満期保険金の現価+予定事業費の現価<br>\
                        ＝ 1,525,697千円 + 280,187,708千円 + 7,401,075千円<br>\
                        ＝ 289,114,480千円<br><br>\
                        収支相当の原則より<br>\
                        482,786P = 289,114,480千円<br>\
                        P ＝ 598,846･･･円 <br>\
                        ⇒ 10円未満を四捨五入して <strong>598,850円</strong>' },
                    // 問25
                    {
                        answer: '732,000円',
                        explanation:
                        '払済保険金 ＝解約返戻金 × (保険金額 ÷ 養老保険の一時払保険料)<br><br>\
                        ＝ 572,000 × (2,000,000 ÷ 1,563,720)<br>\
                        ＝ 731,588･･･円<br>\
                        ⇒ 千円未満を四捨五入して <strong>732,000円</strong>' }
                ]"
                :labels="[
                    'ア','イ','ウ','イ','ア',  //問21〜25
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                ''
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '',
                '正しい',
                '',
                '正しい',
                '',
                // 問36〜40
                '',
                '',
                '正しい',
                '',
                '正しい',
                 //問41〜50
                'C（A・Bともに正しい）', 'B-完全生命表', 'C（A・Bともに正しい）', 'A-高くなる', 'A-大数',
                'B-貯蓄保険料', 'A-危険保険金', 'A-定款', 'A-保険種類別', 'B-純保険料率',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'オ','エ','オ','イ','ア',  //問41〜45
                'ウ','ア','ア','ア','ウ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="keiri2022c" next-route="keiri2021b" />

    </section>

    </SeihoTestLayout>


</template>
