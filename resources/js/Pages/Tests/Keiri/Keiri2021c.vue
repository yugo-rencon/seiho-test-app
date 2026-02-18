<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import QuestionTemp4 from '../../../Components/QuestionTemp4.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険計理"
const subject = '2021年度 フォームC'

const SAME = "※2021年度フォームA/B/Cで同一問題";</script>

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
                    // 問１
                    {
                        title: '平均余命・複利運用',
                        answer: '1.12',
                        explanation:
                        '<br>\
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
                    // 問２
                    {
                        title: '平均余命・複利運用',
                        answer: '203,011',
                        explanation:
                        '<br>年利1.5%で半年複利のため、利率は半年あたり0.75%（=0.0075）となり、1年間で2回の複利が適用される。<br><br>\
                        よって元金200,000円の場合の元利合計金額は、<br>\
                        200,000 × (1 + 0.0075)<sup>2</sup> ＝ 203,011.25<br>\
                        ⇒ 円未満を四捨五入して <strong>203,011円</strong>' },
                    // 問３
                    {
                        title: '平均余命・複利運用',
                        answer: '2.52',
                        explanation:
                        '<br>転化回数：1年間に利息を元金に繰り入れる回数<br><br><br>\
                        実利率 = （ 1 + 名称利率 ÷ 転化回数）<sup>転化回数</sup> - 1<br><br>\
                        （ 1 + 0.025 ÷ 4 ）<sup>4</sup> - 1 ＝ 0.025235 ＝ 2.5235%<br>\
                        ⇒ 小数第3位を四捨五入して <strong>2.52%</strong>' },
                    // 問４
                    {
                        title: '平均余命・複利運用',
                        answer: '1.21',
                        explanation:
                        '<br>年平均利回り：投資によって得られる利益を、投資期間全体で年単位に平均化したもの<br><br>\
                        年平均利回り ＝ （（ 1 + 複利利率）<sup>期間</sup> - 1 ） ÷ 期間<br><br><br>\
                        （（ 1 + 0.012 ）<sup>3</sup> - 1 ） ÷ 3 ＝ 0.012144 ＝ 1.2144%<br>\
                        ⇒ 小数第3位を四捨五入して <strong>1.21%</strong>' },
                    {
                        title: '平均余命・複利運用',
                        answer: '1,459,148',
                        explanation:
                        '<br>30万円を毎年始に5年間支払うために必要な資金は、各年の支払いの現在価値を合計して求める。<br><br>\
                        初年度（今年） ： 300,000円<br>\
                        1年後の現在価値 ： 300,000 × （ 1 ÷ 1.014 ） ＝ 295,857.988 ＝ 295,858円<br>\
                        2年後の現在価値 ： 300,000 × （ 1 ÷ 1.014 ）<sup>2</sup> ＝ 291,773.163 ＝ 291,773円<br>\
                        3年後の現在価値 ： 300,000 × （ 1 ÷ 1.014 ）<sup>3</sup> ＝ 287,744.737 ＝ 287,745円<br>\
                        4年後の現在価値 ： 300,000 × （ 1 ÷ 1.014 ）<sup>4</sup> ＝ 283,771.930 ＝ 283,772円<br><br>\
                        現在において必要な資金の合計は、<strong>1,459,148円</strong>' }
                ]"
                :labels="[
                    'ア', //1
                    'ク', //2
                    'オ', //3
                    'イ', //4
                    'コ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                questionTitle="チルメル式保険料積立金"
                :title="title"
                :subject="subject"
                :contents="[
                '貯蓄','歩合（割合）','新契約','未償却','ゼロ', //問６〜10
                ]"
                :labels="[
                    'ア', //6
                    'コ', //7
                    'ウ', //8
                    'エ', //9
                    'カ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                questionTitle="事業年度末責任準備金"
                :title="title"
                :subject="subject"
                :contents="[
                '未経過保険料','危険準備金','4月1日から翌年3月31日','契約月','保険リスク', //問11〜15
                ]"
                :labels="[
                    'キ', //11
                    'イ', //12
                    'エ', //13
                    'ケ', //14
                    'コ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                questionTitle="変額保険と定額保険の比較"
                :title="title"
                :subject="subject"
                :contents="[
                '保証はない','変動保険金額','毎日','契約者','生命保険会社', //問16〜20
                ]"
                :labels="[
                    'コ', //16
                    'カ', //17
                    'キ', //18
                    'ケ', //19
                    'イ', //20
                ]"
            />
<QuestionTemp4
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                    // 問21
                    {
                        title: '死亡保険金の現価について',
                        answer: '1,082,173千円',
                        explanation:
                        '<br>\
                        死亡保険金 × 死亡数 × 期央払現価 ＝ 死亡保険金の現価<br>\
                        45歳：1,500,000 × 120 × 0.995037 ＝ 179,107千円<br>\
                        46歳：1,500,000 × 133 × 0.985185 ＝ 196,544千円<br>\
                        47歳：1,500,000 × 147 × 0.975431 ＝ 215,083千円<br>\
                        48歳：1,500,000 × 163 × 0.965773 ＝ 236,131千円<br>\
                        49歳：1,500,000 × 178 × 0.956211 ＝ 255,308千円<br>\
                        ⇒ 合計：<strong>1,082,173千円</strong>' },
                    // 問22
                    {
                        title: '満期保険金の現価について',
                        answer: '139,207,563千円',
                        explanation:
                        '<br>5年後に支払う満期保険金の現価は、<br>\
                        5年後の生存数 × 保険金額 × 期末払現価で求める。<br><br>\
                        50歳の生存数 × 150万円 × 5年の期末払現価<br>\
                        97,539 × 1,500,000 × 0.951466 ＝ 139,207,563,261円<br>\
                        ⇒ 千円未満を四捨五入して <strong>139,207,563千円</strong>' },
                    // 問23
                    {
                        title: '予定事業費の現価について',
                        answer: '3,685,463千円',
                        explanation:
                        '<br>予定事業費は保険金1000円につき25円より、一人当たりの予定事業費に加入時の生存数をかけて求める。<br><br><br>\
                        保険金額 × 予定事業費率 × 45歳の生存数<br>\
                        1,500,000 × (25 ÷ 1000) × 98,279 ＝ 3,685,462,500<br>\
                        ⇒ 千円未満を四捨五入して <strong>3,685,463千円</strong>' },
                    // 問24
                    {
                        title: '養老保険の年払保険料について',
                        answer: '299,660円',
                        explanation:
                        '<br>収支相当の原則「収入現価 ＝ 支出現価」で求める。<br><br>\
                        ＜収入現価＞<br>\
                        収入の現価は、45歳〜49歳の各年齢の生存数×年払保険料（P）を現価に換算して合計する。<br><br><br>\
                        年払保険料 × 生存数 × 期始払現価 ＝ 収入現価<br>\
                        45歳 ： P × 98,279 × 1.000000 ＝ 98,279P<br>\
                        46歳 ： P × 98,160 × 0.990099 ＝ 97,188P<br>\
                        47歳 ： P × 98,027 × 0.980296 ＝ 96,095P<br>\
                        48歳 ： P × 97,880 × 0.970590 ＝ 95,001P<br>\
                        49歳 ： P × 97,717 × 0.960980 ＝ 93,904P<br>\
                        → 50歳～54歳の収入現価の合計 ＝ 480,467P<br><br>\
                        ＜支出現価＞<br>\
                        支出現価は問21〜23で算出した結果を用いて求める。<br><br><br>\
                        死亡保険金の現価+満期保険金の現価+予定事業費の現価<br>\
                        ＝ 1,082,173千円 + 139,207,563千円 + 3,685,463千円<br>\
                        ＝ 143,975,199千円<br><br>\
                        収支相当の原則より<br>\
                        480,467P = 143,975,199千円<br>\
                        P ＝ 299,656･･･円 <br>\
                        ⇒ 10円未満を四捨五入して <strong>299,660円</strong>' },
                    // 問25
                    {
                        title: '払済保険金額について',
                        answer: '549,000円',
                        explanation:
                        '払済保険金 ＝解約返戻金 × (保険金額 ÷ 養老保険の一時払保険料)<br><br>\
                        ＝ 429,000 × (1,500,000 ÷ 1,172,790)<br>\
                        ＝ 548,691･･･円<br>\
                        ⇒ 千円未満を四捨五入して <strong>549,000円</strong>' }
                ]"
                :labels="[
                    'ア', //21
                    'イ', //22
                    'ウ', //23
                    'イ', //24
                    'ア', //25
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                questionTitle="営業保険料について"
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
                questionTitle="純保険料式保険料積立金について"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                questionTitle="剰余金の処分について"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                ''
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                questionTitle="剰余金の発生源について"
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
                questionTitle="団体年金保険の数理について"
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
                                :items="[
                    // 問31〜40
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '' }, //32
                    { label: '解', content: '' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'オ', content: '' }, //41
                    { label: 'ウ', content: '毎年' }, //42
                    { label: 'エ', content: '責任準備金' }, //43
                    { label: 'イ', content: '高くなる' }, //44
                    { label: 'オ', content: '' }, //45
                    { label: 'イ', content: '標準' }, //46
                    { label: 'ア', content: '定期保険' }, //47
                    { label: 'イ', content: '責任準備金関係' }, //48
                    { label: 'ア', content: '保険年度末保険料積立金' }, //49
                    { label: 'ウ', content: '純保険料率' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="keiri2021b" />

    </section>

    </SeihoTestLayout>


</template>
