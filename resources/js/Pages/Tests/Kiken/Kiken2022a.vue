<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2022年度 フォームA'

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
                '選択効果','実際死亡率','簡易生命表','経験','標準体', // 問１〜５
                ]"
                :labels="[
                    'キ', //1
                    'イ', //2
                    'コ', //3
                    'オ', //4
                    'カ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '経営効率','災害死亡','困難','診査基準','健康管理証明書', //問６〜10
                ]"
                :labels="[
                    'カ', //6
                    'キ', //7
                    'オ', //8
                    'イ', //9
                    'ウ', //10
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
                '「実体的危険」は「身体的危険」と「環境的危険」の2つに分類することができる。',
                '不当な利益を得ようとする心理状態は道徳的危険の説明。環境的危険は被保険者の職業·仕事内容の危険を指す。',
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
                '三大都市圏から離れるにしたがって高率となる。',
                '正しい',
                '脳血管疾患ではなく悪性新生物。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '契約確認と比較してかなり広範囲かつ綿密なものとなる。',
                '告知義務違反やモラルリスクを排除し、生命保険の公平性の原則を達成しようとする目的自体は契約確認と何ら変わることはない。',
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
                'ネフローゼではなくインシュリン',
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
                '保険業法ではなく保険法。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '変更された利用目的について、本人に通知または公表しなければならない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '団体定期保険と総合福祉団体定期保険が逆。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '保険金受取人ではなく被保険者。',
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
                    { label: '解', content: '純収支計算方式ではなく統計的方式で表せば、基本的に死差益は年間の危険保険料収入額と危険保険金支払額との差として表せる。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '「アルコール中毒や不摂生生活のような職業に随伴する危険」も含まれる。' }, //34
                    { label: '解', content: '体重・性別ではなく年齢別。' }, //35
                    { label: '解', content: '一般に嘱託医については各保険会社とも診査を可能とする被保険者の年齢や保険金額に限度を設け、社医と区別している。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '「組織的安全管理措置」ではなく「人的安全管理措置」' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'エ', content: '金額死亡率' }, //41
                    { label: 'ア', content: '保険法' }, //42
                    { label: 'オ', content: '' }, //43
                    { label: 'ウ', content: '大数の法則' }, //44
                    { label: 'ウ', content: '22' }, //45
                    { label: 'イ', content: '他人' }, //46
                    { label: 'ウ', content: '医師による診査' }, //47
                    { label: 'エ', content: '再診' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'エ', content: '正常勤務' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2023c" next-route="kiken2022b" />

    </section>

    </SeihoTestLayout>


</template>
