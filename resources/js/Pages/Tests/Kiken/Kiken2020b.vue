<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2020年度 フォームB'

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
                questionTitle="被保険者集団の具備すべき条件-①"
                :contents="[
                '','','','','', // 問１〜５
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
                questionTitle="被保険者集団の具備すべき条件-②"
                :contents="[
                '','','','','', //問６〜10
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
                questionTitle="医学的選択上の課題"
                :contents="[
                '',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                questionTitle="報状扱契約における選択手段"
                :contents="[
                '',
                '',
                '正しい'
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
                questionTitle="再保険"
                :contents="[
                '正しい',
                '',
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
                questionTitle="告知"
                :contents="[
                '正しい',
                '',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                questionTitle="環境選択"
                :contents="[
                '正しい',
                '正しい',
                ''
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                questionTitle="契約制限"
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
                questionTitle="契約確認の時期と方向"
                :contents="[
                '',
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
                    { questionTitle: 'ずさんな選択', content: '正しい' }, //31
                    { questionTitle: '保険体の範囲の拡大', content: '正しい' }, //32
                    { questionTitle: '体格', content: '' }, //33
                    { questionTitle: '血圧', content: '' }, //34
                    { questionTitle: '重大事由による解除権', content: '正しい' }, //35
                    { questionTitle: '第1次選択の重要性', content: '正しい' }, //36
                    { questionTitle: '契約内容の相互照会', content: '' }, //37
                    { questionTitle: '査定標準', content: '正しい' }, //38
                    { questionTitle: '保険金確認・給付金確認', content: '' }, //39
                    { questionTitle: '金額別死亡率', content: '正しい' }, //40
                    // 問41〜50
                    { questionTitle: '被保険者の危険', label: 'イ', content: '' }, //41
                    { questionTitle: '解除', label: 'ウ', content: '' }, //42
                    { questionTitle: '選択の有効期間', label: 'オ', content: '' }, //43
                    { questionTitle: '人間ドック扱', label: 'イ', content: '' }, //44
                    { questionTitle: 'エイズ', label: 'ウ', content: '' }, //45
                    { questionTitle: '安全管理措置', label: 'エ', content: '' }, //46
                    { questionTitle: '高度障害', label: 'ア', content: '' }, //47
                    { questionTitle: '再保険', label: 'ア', content: '' }, //48
                    { questionTitle: '復活', label: 'ウ', content: '' }, //49
                    { questionTitle: '期待死亡率との比較', label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2020a" next-route="kiken2020c" />

    </section>

    </SeihoTestLayout>


</template>
