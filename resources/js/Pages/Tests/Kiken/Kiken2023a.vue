<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
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
                '保護','公平性','減殺','被保険者利益','疾病保険', // 問１〜５
                ]"
                :labels="[
                    'ウ', //1
                    'イ', //2
                    'キ', //3
                    'ク', //4
                    'カ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '継続','低い','大数の法則','危険選択の効果','再保険', //問６〜10
                ]"
                :labels="[
                    'ケ', //6
                    'カ', //7
                    'ウ', //8
                    'ク', //9
                    'イ', //10
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
                '正しい',
                '告知義務者が告知事項の存在を知らないまま告知しなかった場合には、告知義務違反は成立しない。',
                '保険者がその事実を知っていた場合、または過失によって知らなかった場合は解除できない。'
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
                '若年層には先天性のものが多く、中年および高年齢になると高血圧性、虚血性が多くなる。',
                '正しい',
                '二次性高血圧と本態性高血圧の説明が逆。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '逆選択は健康に自信のない者が保険に加入したがる心理的な傾向で、道徳的危険の一つである。しかし、このような人題の心理的状態を危険の要素として直接測定することはできはできない。',
                '正しい',
                '保険業法ではなく保険法。'
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
                '「実体的危険」は「身体的危険」と「環境的危険」の2つに分類することができる。',
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
                '養老保険ではなく定期保険の説明。',
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
                '災害疾病入院給付金等を目当てとする逆選択の心理も働きやすい。'
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
                '保険体の範囲が狭くなる。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '生命表には、国民全体を対象とした国民生命表と、それよりは小さな特定集団を対象とする経験生命表がある。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '体重÷身長の2乗。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '金融庁ではなく生命保険協会。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '失効後の期間の長いものほど逆選択混入の期限が多く、また診査による場合に比べ、告知のみによる場合のほうが経験死亡率が高いとされている。' }, //38
                    { label: '解', content: '保険金受取人ではなく被保険者。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'エ', content: '金額死亡率' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'ウ', content: '収支相当の原則' }, //43
                    { label: 'ア', content: '加入申込者群' }, //44
                    { label: 'イ', content: '入院率' }, //45
                    { label: 'イ', content: '告知書' }, //46
                    { label: 'エ', content: '再診' }, //47
                    { label: 'ウ', content: '不実の告知' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'ア', content: '1年間' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2024c" next-route="kiken2023b" />

    </section>

    </SeihoTestLayout>


</template>
