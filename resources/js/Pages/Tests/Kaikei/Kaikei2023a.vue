<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2023年度 フォームA'

const SAME = "※2023年度フォームA/B/Cで同一問題";</script>

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
                '認識', '実現主義', '発生主義', '費用収益対応', '前者', //問11〜15
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
                '企業というものをその所有者とは切り離して考えるという前提である。この公準により、企業を、その所有者の手から分離された一つの実体としてとらえることができる。',
                '正しい',
                '会計行為はすべて円で評価される。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '試算表ではなく精算表。',
                '正しい',
                '仕訳帳の作成ではなく、決算整理。'
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
                '1,000分の2以上ではなく、1,000分の3以上。',
                '3分の1ではなく、5分の1。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '維持費の人件費ではなく、新契約費の営業職員経費。',
                '新契約費の人件費ではなく、維持費の人件費。',
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
                '精算帳ではなく、総勘定元帳'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                ' 会計情報の開示という機能はその中に含まれていないという点で、会社法・金融商品取引法に基づく会計とは異なっている。',
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
                '「商品有価証券」が通常の「有価証券」と区分されているのは、「有価証券」が本来業務である資産運用の一つとして保有されているのに対し、「商品有価証券」は、法定他業である当該有価証券の転売により利益を得るために保有されるなど、その目的が全く異なるからである。',
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
                '危険準備金損益・為替損益ではなく、責任準備金関係損益・価格変動損益。',
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
                    { label: '解', content: '各勘定の期間修正を行うべきであるが、生命保険会計では行わず、支払備金・責任準備金で、期間修正を行い発生主義に修正することとしている。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '計算規定を中心に株式会社については会社法を準用し、相互会社については保険業法を中心に定めている。' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '繰延税金資産は、その期の将来減算一時差異および税務上繰越欠損等に法定実効税率を乗じた額となる。なお、繰延税金資産は一時差異等に係る税金相当額が将来回収できる可能性のあるものでなければ、貸借対照表に計上できないことになっている。' }, //36
                    { label: '解', content: '自己株式は、純資産の部から控除する形式で表示することとされた。' }, //37
                    { label: '解', content: '損益計算書上、他の税金と区別して税引前当期剰余から控除する形式で表示される。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'イ', content: '財務会計' }, //41
                    { label: 'エ', content: '売掛金元帳' }, //42
                    { label: 'オ', content: '' }, //43
                    { label: 'ア', content: '意思決定期間' }, //44
                    { label: 'ウ', content: '定額法' }, //45
                    { label: 'イ', content: '評価換え' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'ア', content: '販売費及び一般管理費' }, //48
                    { label: 'イ', content: '損益計算書' }, //49
                    { label: 'ウ', content: '自己査定' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2024c" next-route="kaikei2023b" />

    </section>

    </SeihoTestLayout>


</template>
