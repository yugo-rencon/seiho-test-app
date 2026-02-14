<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2023年度 フォームC'

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
                '40歳以上', '65歳以上', '医療費抑制', '所得段階別', '18万円', // 問１〜５
                ]"
                :labels="[
                'ウ', 'カ', 'キ', 'コ', 'ア',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '厚生労働省', '介護認定審査会', '予防給付', '地域密着サービス', '居住費', //問６〜10
                ]"
                :labels="[
                'オ', 'ア', 'ケ', 'ク', 'エ',  //問６〜10
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
                '主契約より長い場合はない。',
                '短縮払ではなく短期払。',
                '正しい'
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
                '告知義務や契約始期、モラルリスク等が問題となりやすく、取扱保険商品、加入保険金額を制限しているケースが多い。',
                'パソコンやスマートフォンで資料請求や申込ができるだけでなく、契約の成立までも完了できる生保会社もある。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険協会ではなく内閣総理大臣（金融庁長官に委任）の登録を受ける。',
                '正しい',
                '一般課程試験合格後に生命保険募集人として登録される。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '説明を怠った場合、業者は元本欠損額の賠償責任を負う。'
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
                'ホールセラーではなく、「法人営業第●部」',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '再販売等に活用することが一般的となってきている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                'これまで生命保険会社の支社の配置は、管理スパン上の問題や地域社会における店舗サービス機能の発揮ならびにPR効果の観点から、組織がある一定規模までに達すれば支社を分割するのが一般的であったか近年ではコスト、効率化のため事務面の集約化や規模の大型化に向かう傾向が見られる。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '企業福祉制度のあり方も、従来のような総合的・恩恵的福祉から、自己責任原則のもと、従業員の自助努力・自立を側面から支援するものに重点が移されつつある。',
                '生命保険が第一分野、損害保険が第二分野。',
                '被保険者の生存中にかぎり、周期的に一定の金額の支払をするもの。',
                '生命保険支払専門土ではなく生命保険面接士。',
                '正しい',
                // 問36〜40
                '正しい',
                '被保険者が受取人となる場合、非課税扱いとなる。',
                '一般の生命保険料と異なり保険料は生命保険料控除の対象とはならない。',
                '正しい',
                '正しい',
                 //問41〜50
                'A-保険業法', 'A-３分の１', 'C（A・Bともに正しい）', 'A-賦払償還債務', 'C（A・Bともに正しい）',
                'A-企業等', 'B-個人', 'B-代表者', 'B-媒介', 'C（A・Bともに正しい）',
                ]"
                :labels="[
                '解', '解', '解', '解', '解', '解', '解', '解', '解', '解',  //問31〜40
                'ア', 'ア', 'オ', 'イ', 'オ', 'イ', 'ウ', 'エ', 'ウ', 'オ',  //問41〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2023b" next-route="eigyo2022a" />

    </section>
</SeihoTestLayout>
</template>
