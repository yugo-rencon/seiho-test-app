<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2021年度 フォームB'

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
                '生活習慣','超過死亡指数','数量的','数字査定','栄養', // 問１〜５
                ]"
                :labels="[
                    'ウ', //1
                    'キ', //2
                    'オ', //3
                    'ケ', //4
                    'ア', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '普通体','肥満体','高い','BMI（Body Msss Index）','22', //問６〜10
                ]"
                :labels="[
                    'ケ', //6
                    'ク', //7
                    'エ', //8
                    'キ', //9
                    'ア', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '被用者団体','団体性','相似する','保険加入者のみ','加入率', //問11〜15
                ]"
                :labels="[
                    'カ', //11
                    'ア', //12
                    'キ', //13
                    'ク', //14
                    'ウ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '総合福祉団体的保険','権利','保険契約者','一括告知','平準化', //問16〜20
                ]"
                :labels="[
                    'ク', //16
                    'カ', //17
                    'ア', //18
                    'コ', //19
                    'オ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '死亡指数は「実際死亡率÷予定死亡率×100(%) 」で計算される。',
                '予定死亡率として保険料計算に使用する予定の死亡率を用いれば、死亡指数は死差益の目安となる。予定死亡率に対応する年度の簡易生命表を用いれば、国民死亡の改善度を考慮に入れた経験死亡の死亡の状況を見ることができる。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '保険法と約款が逆。',
                '正しい',
                '過失によって知らなかった場合も保険契約を解除できない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '潜在的傾向から、顕在化への傾向にある。',
                '正しい',
                '保険業法ではなく保険法。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '費差益ではなく死差益。',
                '養老保険ではなく定期保険の説明。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '契約確認は一部の契約について契約成立前に行い、大部分は契約成立後に行うのが実情。',
                '契約成立前ではなく、契約成立後の対象の説明。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '三大都市圏から離れるにしたがって高率となる。',
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
                '一般に短期養老または短期払込養老保険の経験死亡率は長期のものより良好である。ただし、定期保険ではこの関係は逆転し、保険期間が短期のものに逆選択が集中する傾向がある。',
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
                '個人情報登録制度ではなく契約内容登録制度。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '超過危険を調整することはできない。しかし、不当所得の企てに対抗する抑制策としては有効である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '一般の保有限度額より低く定めているのが普通である。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '母集団の年齢構成が異なる場合には、死亡率だけで死亡の状況を比較することはできない。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '「自発的応答義務」から「質問応答義務」に改正された。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '低血圧と高血圧が逆。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '社医、嘱託医どちらも契約者・被保険者に対抗できない。' }, //37
                    { label: '解', content: '生存する個人に関する情報であり、死亡した個人は対象外。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'オ', content: '' }, //41
                    { label: 'エ', content: '継続性' }, //42
                    { label: 'ウ', content: '収支相当の原則' }, //43
                    { label: 'オ', content: '' }, //44
                    { label: 'ア', content: '先天性' }, //45
                    { label: 'イ', content: '入院率' }, //46
                    { label: 'エ', content: '5年' }, //47
                    { label: 'ウ', content: '不実の告知' }, //48
                    { label: 'ア', content: '共同保険' }, //49
                    { label: 'エ', content: '狭くなる' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2021a" next-route="kiken2021c" />

    </section>

    </SeihoTestLayout>


</template>
