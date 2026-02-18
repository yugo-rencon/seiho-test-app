<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2022年度 フォームC'

const SAME = "※2022年度フォームA/B/Cで同一問題";</script>

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
                '収縮期','拡張期','本態性高血圧','先天性','インシュリン', // 問１〜５
                ]"
                :labels="[
                    'キ', //1
                    'カ', //2
                    'ア', //3
                    'オ', //4
                    'コ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '赤血球','肝硬変','肝臓がん','ストレス','リンパ球', //問６〜10
                ]"
                :labels="[
                    'ア', //6
                    'カ', //7
                    'コ', //8
                    'ウ', //9
                    'オ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '出再会社','自動','任意','諾否決定','成立', //問11〜15
                ]"
                :labels="[
                    'ウ', //11
                    'イ', //12
                    'カ', //13
                    'ケ', //14
                    'コ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '個別','定期保険','減少','共同','同一の', //問16〜20
                ]"
                :labels="[
                    'カ', //16
                    'ア', //17
                    'ウ', //18
                    'コ', //19
                    'キ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '現在の健康状態が非常に良好で医学的選択上は何らの欠陥がなく、標準体と判定されるものでも、環境が良好でないれば標準体と判定されない場合がある。',
                '過度の飲酒の習慣も問題となる。',
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '告知義務者が告知事項の存在を知らないまま告知しなかった場合には、告知義務違反は成立しない。',
                '保険者がその事実を知っていた場合、または過失によって知らなかった場合は解除できない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '一般に短期養老または短期払込養老保険の経験死亡率は長期のものより良好である。ただし、定期保険ではこの関係は逆転し、保険期間が短期のものに逆選択が集中する傾向がある。',
                '正しい',
                '役員を被保険者とする場合でも被保険者の書面による加入同意の確認が必要。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '金融庁ではなく生命保険協会。',
                '「査定」と「決定」が逆。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '死亡率の高い疾患と入院、手術の発生率の高い疾患とは全く異なるため、従来とは異なった診査観点が必要である。',
                '給付金日額の制限によって超過危険を調整することはできない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '死亡指徴は「実際死亡率÷予定死亡率x100(%)」で計算される。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '新契約募集も危険選択も、既契約保全の業務も、すべて付加保険料の範囲内で賄うことが必要である。',
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
                '正しい',
                '変更された利用目的について、本人に通知まは公表しなければならない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '契約確認は一部の契約について契約成立前に行い、大部分は契約成立後に行うのが実情である。',
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
                '団体保険の場合も個人保険と同様に、公平性の原則に基づき損失の発生の平準化を図る意味から、職業上の危険選択行っている。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '生命表には、国民全体を対象とした国民生命表と、それよりは小さな特定集団を対象とする経験生命表がある。' }, //31
                    { label: '解', content: '純収支計算方式ではなく締計的方式で表せば、基本的に死差益は年間の危険保険料収入額と危険保険金支払額との差として表せる。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '診査1件あたりの保険金額の限度や被保険者年齢上の区分をもうけている生命保険会社が多い。' }, //35
                    { label: '解', content: '「重大事由による免責権」ではなく「重大事由による解除権」' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '環境的危険' }, //41
                    { label: 'ア', content: '1ヶ月' }, //42
                    { label: 'ア', content: '入院率' }, //43
                    { label: 'エ', content: '診査報状' }, //44
                    { label: 'ウ', content: '22' }, //45
                    { label: 'エ', content: '特別保険料領収法' }, //46
                    { label: 'イ', content: '発生後' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'エ', content: '正常勤務' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2022b" next-route="kiken2021a" />

    </section>

    </SeihoTestLayout>


</template>
