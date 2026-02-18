<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2023年度 フォームB'

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
                '50%', '意思決定機関', '3ヶ月', '重要な不一致', '親会社', //問11〜15
                ]"
                :labels="[
                    'ア', //11
                    'オ', //12
                    'カ', //13
                    'イ', //14
                    'ク', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '外貨建取引等会計処理基準', '収益・費用', '持分法', '株主資本', '20年', //問16〜20
                ]"
                :labels="[
                    'ケ', //16
                    'オ', //17
                    'カ', //18
                    'ウ', //19
                    'ク', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '企業の経済活動を記帳・計算するのが簿記であるが、経済活動のすべてを記帳・計算するわけではない。たとえば、電力会社と電力供給の契約を締結した場合、契約締結の時点では、それぞれに「電力を供給する義務」と「電力の供給を受ける権利」が発生するが、会計上の取引とはならない。',
                '正しい',
                '精算ではなく、転記。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '会社の設備投資限度額の算定ではなく、株主配当の限度額の算定。',
                '正しい',
                '会社法では株主総会の決議があればいつでも配当を出すことが可能。'
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
                '「商品有価証券」が通常の「有価証券」と区分されているのは、「有価証券」が本来業務である資産運用の一つとして保有されているのに対し、「商品有価証券」は、法定他業である当該有価証券の転売により利益を得るために保有されるなど、その目的が全く異なるからである。',
                '時価法ではなく、償却原価法。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '減価償却費や税金等は、生命保険会社の損益計算書上では、事業費には含まれない。',
                '正しい',
                '「事業費管理」は、通常、経営管理手法のひとつである予算制度を活用した事業費予算管理制度として行われている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '会計行為はすべて円で評価される。'
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
                '正しい',
                '正しい',
                '現在は、相互会社だけに存在する積立金である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '2000年度（平成12年度）決算からキャッシュ・フロー計算書が縦覧の対象資料に付け加えられている。',
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
                    { label: '解', content: '通常、収益の計上は実現主義に基づくが、保険料は、現実に入金があったものだけを計上するという現金主義を採用している。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '金融庁ではなく、生命保険協会経理委員会。' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '負債は、買掛金、借入金などの債務を表し、一般の企業では、流動（短期）負債に属する負債，固定（長期）負債に属する負債に区分することになっているが、生命保険会社は、契約者に対する保険契約準備金が大部分を占めるため、一般の企業とは違った区分をしている。' }, //36
                    { label: '解', content: '収支相当の原則ではなく、費用収益対応の原則。' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '社内監査役ではなく、社外監査役。' }, //40
                    // 問41〜50
                    { label: 'イ', content: '財務会計' }, //41
                    { label: 'ア', content: '仕訳帳' }, //42
                    { label: 'エ', content: '財政状態' }, //43
                    { label: 'ア', content: '2週間' }, //44
                    { label: 'ウ', content: '定額法' }, //45
                    { label: 'オ', content: '' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'エ', content: '税引前当期剰余' }, //48
                    { label: 'イ', content: '資産区分' }, //49
                    { label: 'ウ', content: '自己査定' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2023a" next-route="kaikei2023c" />

    </section>

    </SeihoTestLayout>


</template>
