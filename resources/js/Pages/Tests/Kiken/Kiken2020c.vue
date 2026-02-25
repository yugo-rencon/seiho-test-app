<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2020年度 フォームC'

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
                questionTitle="報状扱契約における選択手段-①"
                :contents="[
                '','','','','', // 問１〜５
                ]"
                :labels="[
                    'キ', //1
                    'カ', //2
                    'ア', //3
                    'コ', //4
                    'ウ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                questionTitle="報状扱契約における選択手段-②"
                :contents="[
                '','','','','', //問６〜10
                ]"
                :labels="[
                    'キ', //6
                    'ク', //7
                    'ウ', //8
                    'ア', //9
                    'カ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                questionTitle="入院・手術保障における「選択」-①"
                :contents="[
                '','','','','', //問11〜15
                ]"
                :labels="[
                    'イ', //11
                    'キ', //12
                    'オ', //13
                    'ク', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                questionTitle="入院・手術保障における「選択」-②"
                :contents="[
                '','','','','', //問16〜20
                ]"
                :labels="[
                    'ウ', //16
                    'ク', //17
                    'オ', //18
                    'エ', //19
                    'キ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                questionTitle="死亡率と死亡指数"
                :contents="[
                '',
                '正しい',
                ''
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                questionTitle="告知"
                :contents="[
                '正しい',
                '',
                ''
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                questionTitle="職業危険"
                :contents="[
                '',
                '正しい',
                ''
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                questionTitle="団体保険の危険選択"
                :contents="[
                '',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                questionTitle="プライバシーと個人情報"
                :contents="[
                '',
                '正しい',
                ''
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                questionTitle="危険保険料と危険保険金"
                :contents="[
                '正しい',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                questionTitle="医学的選択上の課題"
                :contents="[
                '',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                questionTitle="逆選択の傾向と態様"
                :contents="[
                '',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                questionTitle="保険金確認・給付金確認の意義と目的"
                :contents="[
                '正しい',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                questionTitle="再保険の契約形態"
                :contents="[
                '正しい',
                '正しい',
                ''
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { questionTitle: '危険選択', content: '正しい' }, //31
                    { questionTitle: '高血圧', content: '正しい' }, //32
                    { questionTitle: '体格', content: '' }, //33
                    { questionTitle: '条件体契約', content: '' }, //34
                    { questionTitle: '数字査定法', content: '' }, //35
                    { questionTitle: '契約確認制度の運用', content: '正しい' }, //36
                    { questionTitle: '契約内容の相互照会', content: '' }, //37
                    { questionTitle: '入院保障における料率', content: '正しい' }, //38
                    { questionTitle: '保険金額と限度額', content: '' }, //39
                    { questionTitle: '金額別死亡率', content: '正しい' }, //40
                    // 問41〜50
                    { questionTitle: '被保険者の危険', label: 'イ', content: '' }, //41
                    { questionTitle: '解除権の消滅', label: 'オ', content: '' }, //42
                    { questionTitle: '被保険者集団の具備すべき条件', label: 'イ', content: '' }, //43
                    { questionTitle: '習慣による選択', label: 'ウ', content: '' }, //44
                    { questionTitle: 'エイズ', label: 'ウ', content: '' }, //45
                    { questionTitle: '契約の制限', label: 'エ', content: '' }, //46
                    { questionTitle: '第1次選択', label: 'オ', content: '' }, //47
                    { questionTitle: '医学的査定', label: 'ア', content: '' }, //48
                    { questionTitle: '復活', label: 'ウ', content: '' }, //49
                    { questionTitle: '契約確認後の処理', label: 'エ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2020b" />

    </section>

    </SeihoTestLayout>


</template>
