<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
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
                '経営効率','剰余金','配当','予定死亡率','死差益', // 問１〜５
                ]"
                :labels="[
                    'キ', //1
                    'ウ', //2
                    'ア', //3
                    'ク', //4
                    'エ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '低い','統計的方式','逓減','定期付養老保険','定期保険', //問６〜10
                ]"
                :labels="[
                    'カ', //6
                    'ア', //7
                    'オ', //8
                    'ウ', //9
                    'コ', //10
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
                '死亡指徴は「実際死亡率÷予定死亡率x100(%)」で計算される。',
                '予定死亡率として保険料計算に使用する予定の死亡率を用いれば、死亡指数は死差益の目安となる。予定死亡率に対応する年度の簡易生命表を用いれば、国民死亡の改善度を考慮に入れた経験死亡の死亡の状況を見ることができる。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '「アルコール中毒や不摂生生活のような職業に随伴する危険」も含まれる。',
                '正しい',
                '職業と入院率についても相当の関連があることが判明している。'
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
                '保険金削減法ではなく特別保険料領収法が適用される。',
                '保険金割増法ではなく特別保険料領収法が適用される。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '共同保険式再保険ではなく危険保険料式再保険の説明。',
                '危険保険料式再保険ではなく共同保険式再保険の説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '約款上では、書面による告知をしたとき以降に生じた事項については告知義務はないとしている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '被保険者を契約年齢別に観察すると、若年齢層は健康体も多く、安い保険料で加入することができるが、その死因では、不慮の事故が上位を占めているので、診査の効果は顕著ではない。他方、高年齢層では保険料は高いが、診査によって契約を延期されたり、条件体になる率も高い、しかしながら、診査自体に加えて、心電図、血液検査などの補助診断法を併用することによって、選択効果を期待することができる。'
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
                '契約時の査定・決定は死亡保険の査定基準を入院・手術保障のある保険に準用している部分もあるが、徐々に入院・手術保障独自の査定標準(基準）が完備されつつある。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '国民死亡率の改善傾向等の死亡状況の変化が反映されていないため、過去の選択の成績の反省から将来の選択に対処するという目的から見れば選当では週当でない。',
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
                    { label: '解', content: '経済的危険ではなく、実体的危険。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '活習慣や嗜好といった因子についても示されている。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '死亡した個人に関する情報は対象外。' }, //38
                    { label: '解', content: '失効後の期間の長いものほど逆選択混入の期限が多く、また診査による場合に比べ、告知のみによる場合のほうが経験死亡率が高いとされている。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'オ', content: '' }, //41
                    { label: 'エ', content: '5年' }, //42
                    { label: 'ウ', content: '収支相当の原則' }, //43
                    { label: 'イ', content: '入院給付率' }, //44
                    { label: 'エ', content: '二次性' }, //45
                    { label: 'イ', content: '他人' }, //46
                    { label: 'ア', content: '問診' }, //47
                    { label: 'ウ', content: '不実の告知' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'ア', content: '被保険者' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kiken2022c" next-route="kiken2021b" />

    </section>

    </SeihoTestLayout>


</template>
