<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "危険選択"
const subject = '2025年度 フォームB'
const SAME = "※2025年度フォームA/B/Cで同一問題";</script>

<template>

<SeihoTestLayout :title="title">
    <section class="bg-[#fdfbff] text-gray-800 py-10">

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
                    'オ', //1
                    'キ', //2
                    'ウ', //3
                    'ク', //4
                    'カ', //5
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
                    'ケ', //6
                    'カ', //7
                    'ウ', //8
                    'キ', //9
                    'ア', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '心理','抵抗力','触診','生命予後','分離', //問11〜15
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
                :contents="[
                '生活習慣病','限局','高い','逓減性','超過危険', //問16〜20
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
                '生命表には国民全体を対象とした<u><b>国民生命表</b></u>と、それよりは小さな特定集団（たとえば生命保険の被保険者集団）を対象とする<u><b>経験生命表</b></u>とがある。', //p5
                '正しい',
                '死亡指数は「実際死亡率÷予定死亡率×100（%)」で計算される。' //p11
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '若年層には先天性のものが多く、中年および高年齢になると高血圧性、虚血性が多くなる。', //p65
                '<u><b>二次性高血圧</b></u>とは、高血圧の原因となっている疾病が<u><b>はっきりしている</b></u>ものをいい、<u><b>本態性高血圧</b></u>とは、原因が<u><b>明らかでない</b></u>ものをいう。' //p64-65
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '<u><b>生命保険協会</b></u>で実施している「契約内容登録制度」「契約内容照会制度」「支払査定時照会制度」の情報等を総合的に判断し「査定・決定」を行う。', //p86
                '「査定」とは主に医学的選択判断に使用する場合が多い。また「決定」は査定結果を基に総合的に選択判断を行う場合に使用する場合が多い。', //p86-87
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '復活時に求める告知事項の時間的範囲を、過去全体にすべきか、後とすべきかについては、理論的には、契約時までのものは告知済みであるから、<u><b>復活時には契約後の健康歴その他の告知を求めるのが普通である</b></u>。', //p713
                '正しい',
                '失効後の期間の長いものほど逆選択混入の危険が多く、また<u><b>診査による場合に比べ告知のみによる場合のほう</b></u>が経験死亡率が高いとされている。' //p173-174
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '告知の時期について、約款には「保険契約締結の際、書面で告知を求めた時」としているが、<u><b>書面による告知をした時以降に生じた事項については、告知義務はないとしている</b></u>。' //p16
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
                '一般に<u><b>短期</b></u>養老または<u><b>短期</b></u>払込養老保険の経験死亡率は<u><b>長期</b></u>のものより良好である。ただし、定期保険ではこの関係は逆転し、保険期間が<u><b>短期</b></u>のものに逆選択が集中する傾向がある。', //p73
                '正しい'
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
                '再保険取引の契約書を、再保険協約または再保険協定書といい。元受会社（<u><b>出再会社</b></u>）と受再保険会社の権利義務を規定している。', //p177
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
                    { label: '解', content: '金額死亡率のほうが件数死亡率よりも事業経営上に与える影響を反映しやすいので、生命保険経営上は、通常、件数死亡率よりも、金額死亡率が多く用いられる。' }, //32
                    { label: '解', content: '死差益の計算方法として、ボールマンにより考案された純収支計算方式と統計的方式の両式がある。<u><b>統計的方式</b></u>で表せば、基本的には死差益は年間の危険保険料収入額と危険保険金支払額との差として表される。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: 'BMIは「体重(kg) ÷ [身長(m)]<sup>2</sup>」で表される指数で標準値を22前後としている。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '保険金確認・給付金確認を行う時期が死亡その他の保険事故発生後であるため、確認の対象は保険事故発生前の契約確認と若千異なっている。しかし、告知義務違反やモラルリスクを排除し、生命保険の公平性の原則を達成しようとする目的自体は契約確認となんら変わるところはない。' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'エ', content: '質問応答義務' }, //41
                    { label: 'イ', content: '純保険料' }, //42
                    { label: 'イ', content: '倫理' }, //43
                    { label: 'ア', content: '入院率' }, //44
                    { label: 'ウ', content: '被保険利益' }, //45
                    { label: 'ウ', content: '医師による診査' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'ア', content: 'き損' }, //48
                    { label: 'エ', content: '両眼の視力' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            previous-route="kiken2025a"
            next-route="kiken2025c"
        />

    </section>

    </SeihoTestLayout>


</template>
