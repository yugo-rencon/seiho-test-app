<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2022年度 フォームB'

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
                '安定性','標準的','延期体','収入','危険保険料', // 問１〜５
                ]"
                :labels="[
                    'イ', //1
                    'ケ', //2
                    'キ', //3
                    'コ', //4
                    'ク', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '大数の法則','実際死亡率','医学的','危険の公平性','相互扶助', //問６〜10
                ]"
                :labels="[
                    'ケ', //6
                    'カ', //7
                    'ア', //8
                    'エ', //9
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
                '国民生命表との比較では、かなり長期に及ぶことが明らかになっている。',
                '正しい',
                '被保険者を契約年齢別に観察すると、若年齢層は健康体も多く、安い保険料で加入することができるが、その死因では、不慮の事故が上位を占めているので、診査の効果は顕著ではない。他方、高年齢層では保険料は高いが、診査によって契約を延期されたり、条件体になる率も高い、しかしながら、診査自体に加えて、心電図、血液検査などの補助診断法を併用することによって、選択効果を期待することができる。'
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
                '「アルコール中毒や不摂生生活のような職業に随伴する危険」も含まれる。',
                '職業危険については一般に「職業制限」と呼ばれる選択基準を設け、それに基づいて環境設定を行っているのが実情である。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険支払専門士ではなく生命保険面接士。',
                '個別と団体が逆。'
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
                '同じ死亡指数でも、若年層と高部層、男性と女性等死亡率の異なる群団では死差益に対する貢献度が異なる',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '養老保険ではなく定期保険。',
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
                '変更された利用目的について、本人に通知またはは公表しなければならない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '金融庁ではなく生命保険協会。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '待ち期間ではなく猶予期間',
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
                    { label: '解', content: '純収支計算方式ではなく締計的方式で表せば、基本的に死差益は年間の危険保険料収入額と危険保険金支払額との差として表せる。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '第1段階ではなく第2段階の説明。第1段階では診査医による診査又はこれに代わるものである。' }, //34
                    { label: '解', content: 'ネフローゼではなくインシュリン。' }, //35
                    { label: '解', content: '一般に短期養老または短期払込養老保険の経験死亡率は長期のものより良好である。ただし、定期保険ではこの関係は逆転し、保険期間が短期のものに逆選択が集中する傾向がある。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '保険加入のみを目的として設立された団体でないことが条件。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '標準化死亡率' }, //41
                    { label: 'イ', content: '二次性高血圧' }, //42
                    { label: 'ア', content: '信頼関係' }, //43
                    { label: 'オ', content: '' }, //44
                    { label: 'ウ', content: '22' }, //45
                    { label: 'オ', content: '' }, //46
                    { label: 'ア', content: '平均' }, //47
                    { label: 'エ', content: 'より低く' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'エ', content: '正常勤務' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2022a" next-route="kiken2022c" />

    </section>

    </SeihoTestLayout>


</template>
