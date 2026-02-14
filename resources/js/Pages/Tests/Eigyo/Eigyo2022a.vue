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
const subject = '2022年度 フォームA'

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
                '60歳', '報酬比例', '定額保険料', '標準賞与額', '18.30%', // 問１〜５
                ]"
                :labels="[
                'ケ', 'ク', 'エ', 'カ', 'イ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '10年', '1ヶ月', '1級〜3級', '子の数', '4分の3', //問６〜10
                ]"
                :labels="[
                'カ', 'ア', 'イ', 'コ', 'ク',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '規約型', 'GIC（guaranteed interest contract：利率保証契約）', '拠出型企業年金', 'B（型）年金', '国民年金基金', //問11〜15
                ]"
                :labels="[
                'キ', 'オ', 'ケ', 'イ', 'ク',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '団体生存保険', '公務員', '新企業年金保険', 'A（型）年金', '合同', //問16〜20
                ]"
                :labels="[
                'カ', 'オ', 'キ', 'ケ', 'ク',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '住民票を有するすべての人へ個人番号を割り当てている。',
                '正しい',
                '重大個人情報ではなく特定個人情報。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '支払われる保険金は非課税扱いになる。',
                '契約自体はあくまでも当初の契約が継続する点も転換制度と異なる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '死差配当ではなく利差配当。',
                '正しい',
                '完全生命表ではなく標準生命表。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '一定の条件を満たす保険代理店においては、一社専属性の例外が認められ、複数の生命保険会社の商品を取り扱うことができる。',
                '改正保険業法において、「代理店などの保険募集人に対する体制整備義務の導入」が定められた。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '銀行等金融機関を専門的にサポートする担当者を一般的に「ホールセラー」と呼称する。',
                '企業保険の販売を中心とした活動を行いつつ、個人保険販売の支援のため担当企業やその関連企業の基盤化を推進している法人営業組織もある。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '消費者は契約を取り消すことができる。損害額の賠償を請求できるわけではない。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '責任準金は生存した他の被保険者の保険金の支払に充当する。',
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
                '一般預貯金と同じく利子に対して20%課税される。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '金融商品取引法ではなく個人情報保護。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                'ソルベンシー・マージン比率ではなく、予定事業費とくに予定新契約費。',
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
                '国、都道府県、被保険者が重層的に支えあう制度となっている。',
                '業務の代理に保険募集の代理を含まれることを明確化したことから、保険会社が他保険会社と業務の代理・事務の代行に関する契約を結んで、他保険会社商品を販売することが可能となった。',
                '正しい',
                'メリットとしては、海外の比較的高い金利を反映することで、予定利率を高く設定していること。',
                '正しい',
                // 問36〜40
                '自己負担の一部を補填する治療給付金、定額の入院給付金、死亡時の死亡保険金の3つから構成される。',
                '正しい',
                '正しい',
                '正しい',
                '専業型と兼業型。',
                 //問41〜50
                'A-年齢', 'A-第3号', 'C（A・Bともに正しい）', 'B-面接', 'A-新種個人年金保険',
                'A-第1号被保険者', 'A-5倍', 'B-媒介', 'A-専門課程', 'A-地域',
                ]"
                :labels="[
                '解', '解', '解', '解', '解', '解', '解', '解', '解', '解',  //問31〜40
                'ア', 'イ', 'オ', 'エ', 'イ', 'ア', 'イ', 'エ', 'ア', 'イ',  //問41〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2023c" next-route="eigyo2022b" />

    </section>
</SeihoTestLayout>
</template>
