<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2021年度 フォームC'

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
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                '継続的', 'マーケティング', '転換制度', '必要な情報の提供者', '不可分化', // 問１〜５
                ]"
                :labels="[
                'ウ', 'コ', 'カ', 'キ', 'ク',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                'face to face', '情報通信機器', '囲い込み', 'CS（Customer Satisfaction）', '金融改革', //問６〜10
                ]"
                :labels="[
                'ア', 'キ', 'ウ', 'ケ', 'オ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '信用生命保険', '競争条件の公平性', '流出防止', '抱き合わせ販売', '商品情報', //問11〜15
                ]"
                :labels="[
                'キ', 'エ', 'コ', 'ク', 'カ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '個人年金保険（定額・変額）', '事前説明義務', '残債務リスク', '相談窓口', '全面解禁', //問16〜20
                ]"
                :labels="[
                'カ', 'ク', 'キ', 'コ', 'ケ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '老齢基礎年金は、原則として<b><u>国民年金の受給資格期間（10年）</u></b>を満たしている場合に、65歳から支給される。', //p26
                '正しい',
                '遺族厚生年金は、老齢厚生年金相当額の<b><u>4分の3</u></b>が支給される。' //p26
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '主契約より短い場合もある。',
                '相互会社でも認められている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '第3号被保険者は含まれない。',
                '正しい',
                '基金を契約者および受取人、基金の加入員を被保険者とする保険契約でり、基金の業務の引受も可能である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '保険金額のうち死亡保険金については、基本保険金額を保証されるが、満期保険金については保証されない（運用実績によっては、満期保険金額が基本保険金額を下回ることがある）点に留意する必要がある。', //p63
                '変動する部分は、変動保険金（<b><u>毎月変動</u></b>），満期保険金（満期時に確定）のほか積立金（<b><u>毎日変動</u></b>）や、解約返戻金（毎日変動）がある。', //p64
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '通信販売は営業職員・募集代理店による対面販売との比較において顧客との接点が非常に限られているため、<b><u>告知義務や契約始期、モラルリスク等が問題となりやすく、取扱保険商品、加入保険金額を制限しているケースが多い</u></b>。', //p104
                'インターネットを通じて生保商品を販売する専門会社を設立するケースが現れており、インターネット上で資料請求や申込ができるだけではなく、契約の成立までも完了できる生保会社もある。', //p104
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '公的年金制度においては、基本的に、<b><u>老齢になった場合（老齢給付）</u></b>、病気やけがで障害状態になった場合（障害給付）、加入者または加入者であった者が死亡した場合（遺族給付）の3つの場合に年金が支給される。', //p25
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '年齢階級別ではなく所得段階別。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '「特別条件特約」は、<b><u>健康状態が一定の危険の範囲を超えているが危険の度合いに応じて</u></b>「保険料の割増」などの特別の条件を付けて引き受けるなどの取扱を定めたものである。', //p49
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '頭金制度は、契約時に余裕資金等を<b><u>一時払保険料</u></b>として契約の一部に充当して、平準払部分の保険料負担を小さくする制度である。', //p71
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
                '団体信用生命保険ではなく、消費者信用団体生命保険の説明。<br>団体信用生命保険は、賦払償還債務を負う債務者の団体を対象とした団体保険であり、住宅ローンや企業の住宅・育英資金貸付制度の貸付保全等に利用される。' //p86
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '生命保険が第一分野、損害保険が第二分野。',
                '消費者は契約を取り消すことができる。',
                '認定生命保険士ではなく生命保険面接土。',
                '被保険者が受取人の場合非課税扱いとなる。',
                // 問36〜40
                '正しい',
                '現在のところ、新企業年金保険、厚生年金基金保険、確定給付企業年金保険、国民年金基金保険、団体生存保険に付加する特別勘定特約が販売されている。',
                '正しい',
                '正しい',
                '正しい',
                 //問41〜50
                'B-通貨性預貯金', 'A-三大疾病', 'B-利差配当', 'A-55歳', 'A-経験死亡率',
                'C（A・Bともに正しい）', 'C（A・Bともに正しい）', 'B-自己負担の一部を補填する', 'B-終身', 'A-募集代理店',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'ウ', 'イ', 'ウ', 'イ', 'ア',  //問41〜45
                'オ', 'オ', 'エ', 'エ', 'ア',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2021b" />

    </section>
</SeihoTestLayout>
</template>
