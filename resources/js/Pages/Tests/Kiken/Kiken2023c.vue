<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2023年度 フォームC'

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
                '死亡率','心理的','大数の法則','募集担当者','第1次選択', // 問１〜５
                ]"
                :labels="[
                    'オ', //1
                    'ウ', //2
                    'カ', //3
                    'ケ', //4
                    'キ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '取消し','民法','保険法','公序良俗','信頼関係', //問６〜10
                ]"
                :labels="[
                    'ア', //6
                    'ケ', //7
                    'カ', //8
                    'エ', //9
                    'キ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '被用者団体','団体性','相似する','保険加入のみ','加入率', //問11〜15
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
                '総合福祉団体定期保険','団体の弔慰金・死亡退職金規程','保険契約者','一括告知','平準化', //問16〜20
                ]"
                :labels="[
                    'イ', //16
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
                '「実体的危険」は「身体的危険」と「環境的危険」の2つに分類することができる。',
                '正しい',
                '経済的危険ではなく環境的危険'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '国民の平均入院日数よりも長期である。',
                '生活習慣病特約での糖尿病入院発生率が著しく高い。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '明確な債権債務関係が存在するものとは限らず、道徳的危険が潜在するおそれがある。',
                '推奨されておらず、保険本来の趣旨に逸脱したものとされている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '契約確認は一部の契約については契約成立前に行い、大部分は契約成立後に行うのが実情である。',
                '正しい',
                '保険金受取人ではなく被保険者や契約者。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '取扱いが簡単であるが、元受会社にとっては危険に関係のない責任準備金部分まで再保険料を支払わなければならない。',
                'ストップ・ロス再保険ではなくエクセス・オブ・ロス再保険。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '若年層の死亡指数を引き下げることは、高齢層の死亡指数を引き下げるより困難である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                'ネフローゼではなくインシュリン',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '「アルコール中毒や不摂生生活のような職業に随伴する危険」も含まれる。',
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
                '健康の異常や症状に対する明確な診断は必ずしも必要ではない。',
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
                '給付金日額の制限によって超過危険を調整することはできない。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '体重÷身長の2乗。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: 'リスク細分化保険では狭くなり、標準下体保険では広くなる。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '失効後の期間の長いものほど逆選択混入の期限が多く、また診査による場合に比べ、告知のみによる場合のほうが経験死亡率が高いとされている。' }, //38
                    { label: '解', content: '群団再保険ではなく個別再保険。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ア', content: '選択表' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'エ', content: '危険保険料' }, //43
                    { label: 'オ', content: '' }, //44
                    { label: 'ア', content: '生命保険協会' }, //45
                    { label: 'イ', content: '告知書' }, //46
                    { label: 'エ', content: '特別保険料領収法' }, //47
                    { label: 'ウ', content: '不実の告知' }, //48
                    { label: 'イ', content: 'き損' }, //49
                    { label: 'ウ', content: '両眼の視力' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2023b" next-route="kiken2022a" />

    </section>

    </SeihoTestLayout>


</template>
