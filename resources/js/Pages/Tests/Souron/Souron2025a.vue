<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
const subject = '2025年度 フォームA'
</script>

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
                '経験生命表', '低い', '総合表', '選択表', '終局表', // 問１〜５
                ]"
                :labels="[
                'カ', 'ア', 'ケ', 'エ', 'キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '診査医', '生命保険面接士', '告知義務', '告知書', '道徳的な面', //問６〜10
                ]"
                :labels="[
                'オ', 'カ', 'コ', 'キ', 'ク',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '予定利率', '逆ざや', 'ALM（資産負債統合管理）', '法令等の遵守（コンプライアンス）', '負債特性', //問11〜15
                ]"
                :labels="[
                'ウ', 'オ', 'コ', 'カ', 'イ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '法定他業', '規制緩和', '金融システム改革法', '50', 'デリバティブ', //問16〜20
                ]"
                :labels="[
                'コ', 'エ', 'キ', 'オ', 'ア',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[ //p4-5
                '正しい',
                '確率論における大数の法則に基づき、危険を被る対象物（母数）が多いほど危険の発生頻度の変動幅は<u><b>小さく</b></u>なる。',
                '傷害・疾病危険に関しては、<u><b>商法では明確な規定がなかった</b></u>が、<u><b>保険法</b></u>においては「傷害疾病定額保険契約」として、「人の傷害疾病に基づき一定の保険給付を行うことを約するもの」と規定されている'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[ //p70-71
                '正しい',
                '1992年には大手会社の一つであるエクイタブル生命の資産内容が悪化し、自己資本を調達して財務体質を改善するため<u><b>相互会社から株式会社</b></u>への転換を行うなど、生命保険業界の危機的状況が大きな問題となった。',
                '1999年に制定された<u><b>グラム・リーチ・ブライリー法</b></u>は、金融持株会社設立により、銀行・証券・保険を傘下に併有することを認め、これによりアメリカでは60年ぶりに金融機関の垣根が撤廃された。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[ //p109-110
                '<u><b>安全性</b></u>の確保は資産運用の第一の基本目的である。生保会社の資産の大部分が、契約者から払い込まれた保険料を源泉として将来の保険金支払を担保する責任準備金により構成されるものだからである。',
                '正しい',
                '生命保険会社の資金が広く大衆から集められたものであり、さらに資産運用が広く国民経済の各分野で行われていることから、運用に際しては、<u><b>公共性の発揮</b></u>が常に要請される。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[ //p150,P155
                '免許には生命保険業免許と損害保険業免許の<u><b>2種類</b></u>がある。',
                'ソルベンシー・マージン比率が100%以上200%未満となった場合は「経営改善計画と実行」、0%未満の場合は「業務の一部または全部の停止」を命じることができる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[ //p166
                '自動車共済・建物更生共済といった損害系の共済商品も取り扱っている。',
                '正しい',
                'JA共済の資金運用は<u><b>農林水産省</b></u>の省令にその方法が定められており、運用機関はJA共済連である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[ //p13
                '正しい',
                '正しい',
                '被保険者ではなく保険契約者の資格の説明。被保険者の資格については個人であることのほかは別段の制限はない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[ //p53
                '正しい',
                '友愛組合ではなくギルドの説明。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[ //p123
                '正しい',
                '正しい',
                '社会扶助制度ではなく公的扶助制度の説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[ //p173
                '損害保険ではなく生命保険の説明。損害保険とは、保険者の支払うべき保険金額が保険事故の発生によって生じた実際の損害額に応じて定まる保険をいう。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[ //p184
                '正しい',
                '従来であれば、「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かったが、今日では、自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向に変わってきている。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '法律に強行規定がある場合を除き、まず保険約款が適用され，保険約款に規定のない事項については、おおむね<u><b>保険法、民法の順</b></u>に適用される。', //p9
                '正しい',
                'ジェームス・ドドソンによって考案された<u><b>平準保険料方式</b></u>を採用した科学的な生命保険会社の設立は、当時の人々の理解を得られず失敗に終わった。', //p57
                'アームストロング調査委員会の勧告に基づき、1906年に、「新契約費と年間の新契約高を<u><b>制限する</b></u>」「会社役員選出に関する基準を<u><b>制定する</b></u>」などの内容の取締法がニューヨーク州で制定された。', //p63-64
                '正しい',
                // 問36〜40
                '公的介護保険制度の被保険者は、<u><b>65歳以上を第1号被保険者</b></u>とし、<u><b>40歳～65歳未満の医療保険加入者を第2号被保険者</b></u>とする。', //p140
                '日本では、<u><b>実体的監督主義が採用されている</b></u>。実体的監督主義は、監督官庁に広範な権限を与えて、保険事業の開始から業務運営、そして経営不振会社に対する最終的整理、統合に至る事業経営のあらゆる段階において監督を行うもの。', //p148
                '正しい',
                '正しい',
                '正しい',
                 //問41〜50
                'B-諾成契約', 'C（A・Bともに正しい）', 'B-逓減定期保険', 'A-スペインかぜの大流行', 'A-90%',
                'A-家計可処分所得', 'A-緊急出費保証', 'C（A・Bともに正しい）', 'B-相互扶助', 'B-変額年金',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'ウ', 'オ', 'エ', 'ア', 'イ',  //問41〜45
                'ア', 'イ', 'オ', 'エ', 'ウ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            next-route="souron2025b"
        />

    </section>

    </SeihoTestLayout>


</template>
