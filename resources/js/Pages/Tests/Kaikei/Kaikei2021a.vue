<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2021年度 フォームA'

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
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                '客観性', '会計慣習', '注解', '報告', '処理', // 問１〜５
                ]"
                :labels="[
                    'ク', //1
                    'カ', //2
                    'ア', //3
                    'ウ', //4
                    'エ', //5
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
                    'イ', //6
                    'ケ', //7
                    'ク', //8
                    'カ', //9
                    'ウ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '認識', '実現主義', '発生主義', '費用収益対応の原則', '前者', //問11〜15
                ]"
                :labels="[
                    'カ', //11
                    'ア', //12
                    'ク', //13
                    'ウ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '売上高', '付加保険料', '現金主義', '未収保険料', '責任準備金', //問16〜20
                ]"
                :labels="[
                    'ク', //16
                    'カ', //17
                    'イ', //18
                    'オ', //19
                    'ウ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '（借方）負債の減少：（貸方）資産の減少 or（借方）資産の増加：（貸方）負債の増加',
                '正しい',
                '（借方）資産の増加：（貸方）収益の発生 or （借方）費用の発生：（貸方）資産の減少'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '管理会計ではなく、財務会計。',
                '正しい',
                '会計帳簿上の数値が計算根拠として重要である。また会計数値の開示はもちろん利益計算もその目的としないため、制度会計の領域にはかかわりをもたないものである。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '責任準備金ではなく、支払備金。',
                '危険準備金は、法人税法上は利益性の内部留保との立場から、損金とはならない。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険会社の資産区分は、契約者への将来の保険金等支払に備えた積立金の裏付けとなる資産の内訳を表わすものとして、一般の企業とは違った区分となっている。',
                '取得時レートではなく、決算時レート。',
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
                '精算表ではなく、試算表。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '特別勘定および特定取引勘定の資産は除かれる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '現在は、相互会社だけに存在する積立金である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '2000年度（平成12年度）決算からキャッシュ・フロー計算書が縦覧の対象資料に付け加えられている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '国税庁ではなく、金融庁。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '補助簿は、現金出納帳や当座預金出納帳などの補助記入帳と、商品有高帳や固定資産台帳などの補助元帳に分類される。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '計算規定を中心に株式会社については会社法を準用し、相互会社については保険業法を中心に定めている' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '純資産の部から控除する形式で表示することとされた。' }, //37
                    { label: '解', content: '売買目的有価証券及び商品有価証券に係るものを除く。' }, //38
                    { label: '解', content: '据置期間に対応する利息も保険金据置支払金に計上される。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'エ', content: '仕訳' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'イ', content: '事業方法書' }, //43
                    { label: 'ウ', content: '持分法' }, //44
                    { label: 'ア', content: '経理処理要領' }, //45
                    { label: 'ア', content: '資産除去' }, //46
                    { label: 'ウ', content: '保険契約準備金' }, //47
                    { label: 'エ', content: '支払備金' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'イ', content: '社外' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2022c" next-route="kaikei2021b" />

    </section>

    </SeihoTestLayout>


</template>
