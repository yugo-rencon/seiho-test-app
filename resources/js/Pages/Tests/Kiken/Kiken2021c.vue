<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2021年度 フォームC'

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
                :contents="[
                '告知聴取','生命予後','少なくない','問診','契約解除権', // 問１〜５
                ]"
                :labels="[
                'ケ','カ','ク','コ','オ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '再発','疾病特約','肥満体','死亡率','会社', //問６〜10
                ]"
                :labels="[
                'キ','ア','ケ','オ','ウ',  //問６〜10
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
                'カ','ア','キ','ク','ウ',  //問11〜15
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
                'ク','カ','ア','コ','オ',  //問16〜20
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
                '純保険料ではなく付加保険料の範囲内でまかなうことが必要である。',
                '正しい',
                '危険分散の原則ではなく危険均一性の原則。'
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
                '正しい',
                '推奨されていない。',
                '役員を被保険者とする場合も被保険者の書面による加入同意の確認が必要。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '契約解除を行うためには、既往歴など告知義務違反の事実と死因との間に因果関係がなければならない。',
                '給付金については支払う場合と支払わない場合に分かれる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '「実体的危険」は、「身体的危険」と「環境的危険」の2つに分類することができる。',
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
                '正しい',
                '体重÷身長の2乗。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '個人情報登録制度ではなく契約内容登録制度'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '評点合計が+50の場合、契約期間を通して予定死亡率が各年齢で標準体の150%、-25の場合、75%となる。',
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
                '自動再保険ではなく任意再保険の説明。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '正しい',
                '責任は全員が負うことになる。',
                '正しい',
                '最小血圧と最大血圧が逆。',
                // 問36〜40
                '正しい',
                '正しい',
                '生存する個人に関する情報であり、死亡した個人は対象外。',
                '1保険金受取人ではなく、1被保険者。',
                '正しい',
                 //問41〜50
                'C（A・Bともに正しい）', 'C（A・Bともに正しい）', 'B-収支相当の原則', 'A-インシュリン', 'A-20名〜30名',
                'A-特別保険料領収法', 'B-契約者', 'B-不実の告知', 'A-契約金額', 'B-サープラス',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'オ','オ','ウ','ア','ア',  //問41〜45
                'イ','エ','ウ','ア','エ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="kiken2021b" />

    </section>

    </SeihoTestLayout>


</template>
