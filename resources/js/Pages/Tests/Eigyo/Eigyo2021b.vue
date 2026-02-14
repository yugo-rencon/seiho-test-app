<script setup>
import { Link } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2021年度 フォームB'

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
                '規制緩和', '民法', '住民票', '特定個人情報', '特定保険契約', // 問１〜５
                ]"
                :labels="[
                'イ', 'カ', 'コ', 'オ', 'エ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '7年間', '商法', '共済契約', '告知', '遺言', //問６〜10
                ]"
                :labels="[
                'ウ', 'オ', 'キ', 'ク', 'ア',  //問６〜10
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
                '勤労者世帯（二人以上の世帯）の貯蓄現在高は年間収入を<b><u>上回っている</u></b>。', //p15
                '正しい',
                '今後貯蓄を増やす場合、最も重点をおく貯蓄種類については、<b><u>「預貯金」が最も高く</u></b>、次いで、「株式」「株式投資信託」「個人年金保険」と続いている。' //p16
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
                '正しい',
                'この保険（特約）により支払われる給付金は、被保険者が受取人となる場合、<b><u>非課税扱い</u></b>になる。', //p61
                '病気やケガにより被保険者の余命が<b><u>6カ月以内</u></b>と判断されるとき、保険金の前払いを請求でき、支払われる保険金額は、契約した死亡保険金額の範囲内で<b><u>3,000万円</u></b>を上限としているところが多く、上限以上の保険金額で契約している場合、差額分は保障が継続する。' //p61
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '死亡退職金等が支払われないときは、保険金は支払われない。', //p85
                'ヒューマン・ヴァリュー特約ではなく、災害総合保障特約の説明。<br>ヒューマン・ヴァリュー特約は、従業員の死亡や高度障害に伴う、代替雇用者の採用・育成費用等の企業が負担すべき諸費用の財源を確保する特徴がある。', //p83-84
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '全額加入者個人が負担するのではなく、労使折半により負担している。' //p25
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
                'デビット・システムとは、一定の地域に一名の営業職員を配置し、その地域内での保険販売・保全活動にあたらせる制度。', //p66
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '保険仲立人は契約者と保険会社との間に立って中立の立場で<b><u>保険契約の締結の媒介を行う者（代理ではない）</u></b>であり、特定の保険会社に属し、その保険会社のために媒介を行う保険募集人とその点において異なる。', //p103
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
                '保険仲立人ではなく、生命保険募集人。' //p
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
                '被保険者の死亡後は、年金の支払は行わない。',
                '認定生命保険士ではなく生命保険面接土。',
                '保険料総額ではなく保険金総額。',
                // 問36〜40
                '正しい',
                '応用課程ではなく専門課程。',
                '正しい',
                '正しい',
                '正しい',
                 //問41〜50
                'A-保険業法', 'B-引き下げ', 'B-利差配当', 'C（A・Bともに正しい）', 'A-経験死亡率',
                'C（A・Bともに正しい）', 'C（A・Bともに正しい）', 'B-自己負担の一部を補填する', 'A-地域', 'C（A・Bともに正しい）',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'ア', 'エ', 'ウ', 'オ', 'ア',  //問41〜45
                'オ', 'オ', 'エ', 'イ', 'オ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2021a" next-route="eigyo2021c" />

    </section>
</SeihoTestLayout>
</template>
