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

const title = "生命保険会計"
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
                '客観性', '会計慣習', '注解', '報告', '処理', // 問１〜５
                ]"
                :labels="[
                'ク', 'カ', 'ア', 'ウ', 'エ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '真実性', '資本取引・損益取引区分', '資本剰余金', '保守主義', '単一性', //問６〜10
                ]"
                :labels="[
                'イ', 'ケ', 'ク', 'カ', 'ウ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '付加保険料', '維持費', '募集機関', '福利厚生', '退職給付引当金繰入額', //問11〜15
                ]"
                :labels="[
                'ク', 'コ', 'カ', 'キ', 'エ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '死亡率', '利源分析', '６', '拡大', '支出管理', //問16〜20
                ]"
                :labels="[
                'オ', 'イ', 'エ', 'キ', 'ア',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '内部関係者ではなく、株主・債権者などの外部利害関係者。',
                '正しい',
                '精算表ではなく、総勘定元帳。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '貸借対照表ではなく、損益計算書。',
                '損益計算書ではなく、貸借対照表。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '任意積立金ではなく、払戻積立金',
                '危険準備金は、法人税法上は利益性の内部留保との立場から、損金とはならない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '従来連結子会社及び子法人等の範囲は議決権の所有割合（50%超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。',
                '連結会社相互間の取引によって取得した資産に含まれる未実現損益はその全額を消去する',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '減損会計の対象資産は、土地、建物等の有形固定資産ばかりでなく、営業権、特許権等の無形固定資産も該当する。',
                '貸借対照表ではなく、損益計算書。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '残高試算表ではなく、合計試算表。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '会計情報の開示という機能はその中に含まれていないという点で、会社法・金融商品取引法に基づく会計とは異なっている。',
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
                '「保険料及び責任準備金の算出方法書」ではなく、「事業方法書」に定める金銭の振替を除き認められていない。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '契約の無効・取消し・解除による返戻金や前納保険料等の返金は、「その他返戻金」に含まれる。',
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
                '資産区分ではなく、商品区分。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '株主実体の公準ではなく、企業実体の公準',
                '正しい',
                '正しい',
                '正しい',
                '正しい',
                // 問36〜40
                '法人税法上の貸倒引当金として認められる額を超える額は、損金に算入されない。',
                'こども保険等の生存保険金および個人年金における死亡返戻金等は「給付金」として処理される。',
                '会社法施行規則ではなく、保険業法施行規則。',
                '正しい',
                '会計監査人は、株主総会（相互会社にあっては総代会）により選任され、その職務は会社の行う一切の会計行為が、会社法，保険業法等の法令に準拠して適正に行われているか否かについて監査を行い、その結果を取締役および監査役に報告することにある。',
                 //問41〜50
                'A-財務会計', 'C（A・Bともに正しい）', 'B-事務ガイドライン', 'A-売買目的有価証券', 'B-定額法',
                'A-借受金', 'C（A・Bともに正しい）', 'A-実現主義', 'B-不動産賃貸料', 'B-自己査定',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'イ', 'オ', 'エ', 'ア', 'ウ',  //問41〜45
                'ア', 'オ', 'イ', 'エ', 'ウ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2023b" next-route="kaikei2022a" />

    </section>

    </SeihoTestLayout>


</template>
