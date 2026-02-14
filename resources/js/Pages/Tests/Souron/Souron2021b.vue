<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
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
                '長短分離','専門金融機関','直接金融','金融の国際化','持株会社', //問11〜15
                ]"
                :labels="[
                'エ','ア','キ','イ','コ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '販売チャネル','信用生命保険','個人年金','一時払終身保険','法令等遵守', //問16〜20
                ]"
                :labels="[
                'コ','イ','キ','エ','ケ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '保険の対象となる危険の種類は二つある。一つはその発生を防止しようとしても、ある程度以上は不可能であるという意味で経済主体による制を超えているもの。もう一つは個体としての危険発生頻度の変動幅が大きいため、合理的，経済的な予測が不可能であるという意味で経済主体の制を超えているものである。', //p4
                '平均変動率ではなく平均経験率', //p4
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '保険料のうち団体が負担した部分については会社経理上損金とすることができる等の取扱いがある。', //p47
                '総合福祉団体定期保険ではなく団体信用生命保険', //p47
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
                '株式会社の構成員は株主であり、相互愛車の構成員は保険契約者（社員）であるので、保険契約者の立場は株式会社と相互会社で異なる。', //p161
                '保険業法は株式会社の相互会社への組織変更について規定している。' //p162
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
                '責任準備金の現実的定義は、「将来保険給付支払現価－将来保険料収入現価」である。', //p25-26
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
                '友愛組合ではなくギルド', //p53
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                'この特別勘定資産については、一般勘定資産と比べて運用規制が緩く、弾力的な資産運用が可能となっており、収益追求と安全性確保のバランスについても、生保会社の判断に負う部分が大きくなっている。', //p110
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
                '保険者ではなく保険契約者等の保護' //p150
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '正しい',
                '危険同一性の原則ではなく危険均一性の原則', //p16
                '合衆国統一の取締法ではなくニューヨーク州の取締法が先に制定され、その後合衆国の大多数の州で同様の法律が制定された。', //p63-64
                '1920年（大正9年）のスペインかぜと1923年（大正12年）の関東大震災', //p76
                // 問36〜40
                '生命保険会社の資金は大別すると負債と純資産によって構成されている。負債の大部分は保険契約準備金で、責任準備金、支払備金、契約者配当準備金から構成される。その中でも、保険料の積立金部分からなる責任準備金が大半を占めている。', //p108
                '正しい',
                '「各都道府県民共済」ではなく「こくみん共済」', //p169
                '正しい',
                '正しい',
                 //問41〜50
                'A-国民生命表', 'A-生存保険', 'C（A・Bともに正しい）', 'B-同額の分担金で', 'C（A・Bともに正しい）',
                'C（A・Bともに正しい）', 'A-緊急出費保障', 'B-財務大臣', 'B-こども共済', 'A-LINC（Life Insurance Network Center）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','イ','オ','エ','オ',  //問41〜45
                'オ','ア','ウ','エ','イ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2021a" next-route="souron2021c" />

    </section>

    </SeihoTestLayout>


</template>
