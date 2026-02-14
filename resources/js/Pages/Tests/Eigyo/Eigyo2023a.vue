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
const subject = '2023年度 フォームA'

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
                '規制緩和', '民法', '元本割れリスク', '投資性', '特定保険契約', // 問１〜５
                ]"
                :labels="[
                'イ', 'コ', 'ア', 'キ', 'ク',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '商法', '共済契約', '傷害疾病保険契約', '遺言', '顧客重視・法令等の遵守', //問６〜10
                ]"
                :labels="[
                'ク', 'ウ', 'カ', 'ア', 'オ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '継続的', 'マーケティング', '転換制度', 'エージェント', '不可分化', //問11〜15
                ]"
                :labels="[
                'ウ', 'コ', 'キ', 'イ', 'ケ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                'face to face', '情報通信機器', '囲い込み', 'CS（customer Satisfaciton）', '選択', //問16〜20
                ]"
                :labels="[
                'ケ', 'エ', 'ア', 'ク', 'オ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '初めてではなく1985年には発売されている。',
                '正しい',
                '3000万円を上限とし、特約保険料は不要（無料）となっている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '変動保険金は毎月変動、満期保険金は満期時に確定、積立金と解約返戻金は毎日変動。',
                '契約時に定めた基本保険金額、特約保険金額は変動しない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '1年以上ではなく2年以上、前後6か月以内ではなく前後1年以内。',
                '健康保険組合連合会ではなく、地方公共団体。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '一定の条件を満たす保険代理店においては、一社専属性の例外が認められ、複数の生命保険会社の商品を取り扱うことができる。',
                '正しい',
                '保険代理店についても、業務の特性や規模に応じて、体制整備が求められることとなった。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '専門課程ではなく応用課程',
                '応用課程試験に合格した者が「シニア・ライフ・コンサルタント」の称号を得る。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '生活習慣病罹患率ではなく、乳児死亡率の急速な低下。',
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
                '第3号ではなく第1号被保険者。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '相互会社でも一定の制限のもとで可能となっている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '終身保険等の主契約に充当する方法に加え、定期保険特約部分に充当する方法がある。',
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
                '保険契約者保護の観点から保険仲立人に係る規制を緩和することが適当であるとされており、それを受け、保険業法の改正で保証金の額の引き下げなど一部の規制が和された。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                'ライフスタイルではなくライフステージ。ライフ・プランニングではなくライフサイクル。',
                '2000年の日米保険協議の決着により、2001年にまず子会社による参入が、続いて本体による参入が解禁となった。',
                '被保険者の生存中に限り、周期的に一定の金額の支払をするもの。',
                '生命保険支払専門土ではなく生命保険面接士。',
                '払込保険料を割り引く方式と給付金として割り戻す方式がある。',
                // 問36〜40
                '正しい',
                '勤労者財産形成教育貯蓄契約（財形教育）ではなく、勤労者財産形成住宅貯蓄契約（財形住宅）。',
                'パソコンやスマートフォンで資料請求や申込ができるだけでなく、契約の成立までも完了できる生保会社もある。',
                '正しい',
                '正しい',
                 //問41〜50
                'B-通貨性預貯金', 'A-３分の１', 'B-介護認定審査会', 'A-資産運用成果', 'C（A・Bともに正しい）',
                'A-企業等', 'A-厚生労働大臣', 'C（A・Bともに正しい）', 'B-保障額', 'C（A・Bともに正しい）',
                ]"
                :labels="[
                '解', '解', '解', '解', '解', '解', '解', '解', '解', '解',  //問31〜40
                'ウ', 'ア', 'ウ', 'ア', 'オ', 'イ', 'イ', 'オ', 'エ', 'オ',  //問41〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2024c" next-route="eigyo2023b" />

    </section>

    </SeihoTestLayout>


</template>
