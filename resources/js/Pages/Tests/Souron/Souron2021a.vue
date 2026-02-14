<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
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
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                '負債','定款','20%','非社員契約','公平性', // 問１〜５
                ]"
                :labels="[
                'コ','ク','イ','エ','キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '利源分析','増加','上回る','解約益','小さく', //問６〜10
                ]"
                :labels="[
                'キ','ア','オ','ケ','エ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '損害共済','給付・反対給付均等','相互扶助','金融庁','多種多様', //問11〜15
                ]"
                :labels="[
                'キ','イ','ケ','ク','エ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '軽い','JA共済','構成員外','無認可共済','少額短期保険業者', //問16〜20
                ]"
                :labels="[
                'ウ','カ','ク','エ','キ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険の対象となる危険のうち、死亡危険については、その発生に中間がなく、いわば0か1の事象であり、事象の発生により保険契約が終了するという特色がある。', //p5
                '保険業法ではなく保険法' //p5
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '選択医ではなく診査医', //p17
                '生命保険支払専門士ではなく生命保険面接士', //p17
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '保険金の支払い余力を示すソルベンシー・マージン比率が200%未満の会社が対象となる。', //p99-100
                '正しい',
                '既契約の予定利率引き上げではなく引き下げ。' //p100
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '社会保険の場合は保険料の負担能力、すなわち年齢に関係なく保険加入者の所得によって、その金額が決められる。', //p125
                '被保険者と事業主で分担することになっており、分担割合は、少なくとも50%となっている。', //p125
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '第三分野については生損保本体で取り扱えることとし、それ以外の分野については子会社方式により相互参入が可能とされた。', //p173
                '第三分野商品は、傷害保険・がん保険等のことを指す。' //p174
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '保険契約の一方の当事者である保険契約者は、保険者が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。' //p15
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '「生保調停審査会制度」ではなく、「金融分野における裁判外紛争解決制度（金融ADR制度）」が設けられた。' //p84
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険会社の資産の構成をみると、1975年度（昭和50年度）には総資産の67.9%を占めていた貸付金が2021年度（令和3年度）にはシェアを大幅に減らしている。一方、有価証券のシェアは8割以上を占めている。', //p111-113
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '日本では実体的監督主義が採用されている。', //p148
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
                '合計特殊出生率は年々低下し、出生数が死亡数を下回って遂に人口が減少するという歴史的転換点を迎えている。' //p182
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '平準保険料方式の責任準備金は将来の保険金給付額と将来の保険料収入額の差額であるが、自然保険料方式の場合は責任準備金はほとんど生じない。', //p24
                '正しい',
                '合衆国統一の取締法ではなくニューヨーク州の取締法が先に制定され、その後合衆国の大多数の州で同様の法律が制定された。', //p63-64
                '正しい',
                // 問36〜40
                '生命保険会社の資金は大別すると負債と純資産によって構成されている。負債の大部分は保険契約準備金で、責任準備金、支払備金、契約者配当準備金から構成される。その中でも、保険料の積立金部分からなる責任準備金が大半を占めている。', //p108
                '65歳以上を第1号被保険者とし、40歳～65歳未満の医療保険加入者を第2号被保険者とする。', //p140
                'ソルベンシー・マージン比率は、保険会社が直面している通常の予測を超える諸リスク（保険リスク・資産運用リスク等）相当額の1/2を分母とし、保険会社の自己資本勘定と考えられる資本勘定、諸準備金などの合計額を分子として計算される。', //p155
                '正しい',
                '正しい',
                 //問41〜50
                'B-諾成方式', 'A-保険金', 'B-逓減定期保険', 'B-同額の分担金で', 'C（A・Bともに正しい）',
                'C（A・Bともに正しい）', 'A-国民皆保険', 'A-金融商品取引法', 'B-個人年金', 'A-LINC（Life Insurance Network Center）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ウ','ア','エ','エ','オ',  //問41〜45
                'オ','イ','ア','ウ','イ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2022c" next-route="souron2021b" />

    </section>

    </SeihoTestLayout>


</template>
