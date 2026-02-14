<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2024年度 フォームC'

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
                '故意','民法','必要はない','解約返戻金','到達', // 問１〜５
                ]"
                :labels="[
                'オ','キ','ウ','ク','カ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                'しない','因果関係','5年','責任開始期の属する日','2年', //問６〜10
                ]"
                :labels="[
                'ケ','カ','ウ','キ','ア',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '収縮期','拡張期','本態性高血圧','先天性','インシュリン', //問11〜15
                ]"
                :labels="[
                'キ','カ','ア','オ','コ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '赤血球','肝硬変','肝臓がん','ストレス','リンパ球', //問16〜20
                ]"
                :labels="[
                'ア','カ','コ','ウ','オ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '「実体的危険」は、<u><b>「身体的危険」</b></u>と「環境的危険」の2つに分類することができる。', //p4
                '環境的危険とは、被保険者の生活環境全般に関する危険であるが主に被保険者の職業・仕事の内容による危険を指す', //p4
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '診査による選択有効期間は3～5年と考えられているが、<u><b>国民生命表との比較では、かなり長期に及ぶことが明らかになっている</b></u>。', //p32
                '正しい',
                '<u><b>若年齢層</b></u>は健康体も多く、安い保険料で加入することができるが、その死因では、不慮の事故が上位を占めているので、<u><b>診査の効果は顕著ではない</b></u>。他方、<u><b>高年齢層</b></u>では、保険料は高いが、診査によって契約を延期されたり、条件体になる率も高い。しかしながら、診査自体に加えて心電図・血液検査などの補助診断法を併用することによって<u><b>選択効果を期待することができる</b></u>。' //p32-33
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '大部分の保険会社は条件体契約に対して、年齢別に金額上の区分を設けて制限を加えている。', //p72
                '「保険会社向けの総合的な監督指針」では、法人等の財テクなどを主たる目的とした契約または当初から短期の中途解約を前提とした契約等の保険本来の趣旨を逸脱するような募集活動を行わないことなど、保険商品のそれぞれの商品特性に応じ，その本来の目的に沿った利用が行われるための適切な募集活動に対する措置を求めている。', //p76
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '欧米では社医制度はなく、一般に嘱託医だけである。', //p95
                '正しい',
                'その保険契約が被保険者で一定数（一般には20名）以上の申込みがある団体扱であること、被保険者個々の告知書や健康管理証明書の提出を必要としないことが「健康管理証明書扱（個別）」と異なる点である。' //p102
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '危険保険料式再保険の説明。', //p178
                '共同保険式再保険の説明。' //p179
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '定期保険の責任準備金の積み立ての説明。', //p24
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '死亡率や<u><b>入院給付率</b></u>は、保険年度が進み選択効果が薄れるにつれ上昇するが、<u><b>手術給付率</b></u>はむしろ加入早期の方が高値である。', //p52
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
                '申込保険金額(災害・傷害・災害入院、疾病入院などの諸特約金額も含む)が年齢、職業、資産、収入からみて<u><b>過大</b></u>ではないか。' //p79
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '保険加入のみを目的として設立された<u><b>団体でない</b></u>ことが契約の要件の1つである。', //p169
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '復活とは、既に成立した契約が、保険料不払いのまま所定の期間（いわゆる<u><b>猶予期間</b></u>）を経過すれば契約は失効するが、一定の要件のもとに契約者が復活の請求をすれば、保険契約を有効状態に戻す制度である。', //p172
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '死亡率は、死亡の状況を示す指標としてよく用いられるが、死亡の状況は年齢によって大きく異なるので、母集団の年齢構成が異なる場合には、死亡率だけで死亡の状況を比較することはできない。', //p7
                '金額死亡率のほうが件数死亡率よりも事業経営上に与える影響を反映しやすいので、生命保険経営上は、通常、件数死亡率よりも、金額死亡率が多く用いられる。', //p9
                '正しい',
                '正しい',
                '正しい',
                // 問36〜40
                '契約確認は<u><b>一部</b></u>の契約について契約成立前に行い，<u><b>大部分</b></u>は契約成立後に行っている。', //p114
                '正しい',
                '正しい',
                '正しい',
                '正しい',
                 //問41〜50
                'A-選択表', 'A-純保険料', 'A-倫理', 'C（A・Bともに正しい）', 'B-22',
                'B-再診', 'B-不実の告知', 'A-平均給付日数', 'B-両眼の視力', 'C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','イ','イ','オ','ウ',  //問41〜45
                'エ','ウ','ア','エ','オ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="kiken2024b" next-route="kiken2023a" />

    </section>

    </SeihoTestLayout>


</template>
