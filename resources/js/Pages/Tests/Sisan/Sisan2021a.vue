<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
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
                '剰余金','保険契約準備金','信託財産','流動性','自己責任原則', // 問１〜５
                ]"
                :labels="[
                    'エ', //1
                    'カ', //2
                    'コ', //3
                    'ク', //4
                    'キ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '国際決済銀行','自己資本','リスク・ヘッジ','負債特性','区分経理', //問６〜10
                ]"
                :labels="[
                    'ケ', //6
                    'カ', //7
                    'ウ', //8
                    'コ', //9
                    'オ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '財団抵当','時価','瑕疵（かし）','不動産鑑定士','控除', //問11〜15
                ]"
                :labels="[
                    'エ', //11
                    'ク', //12
                    'カ', //13
                    'イ', //14
                    'オ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '一括返済','収益性','プライム・レート','低く','金銭消費貸借契約証書', //問16〜20
                ]"
                :labels="[
                    'オ', //16
                    'ア', //17
                    'コ', //18
                    'ク', //19
                    'ケ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '機関投資家的と金融仲介機能が逆。',
                '間接金融ではなく直接金融。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '共同ビル方式ではなく借地方式の説明。',
                '正しい',
                '借地期間が終了したときには新たな契約更新を行わずに、 土地所有者は必ず土地の返還を受けることができる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                'ドイツ、オランダ、スイスが類型に属する。',
                'フランス、イタリア、ベルギーがこの類型に属する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '金利面ではなく業務面の説明',
                '業務面ではなく金利面の説明',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '売買目的有価証券は時価評価を行う。',
                '責任準備金対応債券は取得価額で評価を行う。',
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
                '30%ではなく20%'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '負債構造のほとんどが円建てとなっており、外貨建て資産の増加に伴う将来の不確実性を除去するためには、外貨建債務をつくって外貨建債権・債務を組み合わせて相殺することが求められる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                'RBC 比率を高めるため、比較的リスクの高い不動産関連投資を減らし、代わりに公社債の比重を高めるようになってきている。',
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
                '正しい',
                '住宅ローンからの撤退ではなく進出。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入などの改革が進められた。',
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
                    { label: '解', content: '保険金信託業務は、付随業務ではなく法定他業に規定されている。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '貸付の期間別分類としては、貸付期間の長短により長期資金と短期資金に分類される。一般的に、1年以内のものを短期とし、1年超のものを長期としている。' }, //34
                    { label: '解', content: '通常、国債と称されているのは、歳入債のことである。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '足元ではバブル崩壊後の国内の低金利政策が長期化し、内外金利差が拡大してきたことから、外国債券等を中心に総資産に占める海外投融資の割合は再び漸増傾向にある。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'イ', content: '独占禁止法' }, //41
                    { label: 'エ', content: 'アナリスト' }, //42
                    { label: 'ア', content: '金融商品取引法' }, //43
                    { label: 'ア', content: '上昇' }, //44
                    { label: 'オ', content: '' }, //45
                    { label: 'イ', content: '時価主義' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'ウ', content: '銀行預金' }, //48
                    { label: 'イ', content: 'ヘッジファンド' }, //49
                    { label: 'エ', content: 'リスク係数' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="sisan2022c" next-route="sisan2021b" />

    </section>

    </SeihoTestLayout>


</template>
