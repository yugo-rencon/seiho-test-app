<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2022年度 フォームC'

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
                '60歳', '報酬比例', '定額保険料', '標準賞与額', '18.30%', // 問１〜５
                ]"
                :labels="[
                'ケ', 'ク', 'エ', 'カ', 'イ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '10年', '1ヶ月', '1級〜3級', '子の数', '4分の3', //問６〜10
                ]"
                :labels="[
                'カ', 'ア', 'イ', 'コ', 'ク',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '事業者', '困惑', '取り消す', '重要', '断定的', //問11〜15
                ]"
                :labels="[
                'オ', 'エ', 'ク', 'カ', 'キ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '金融商品販売業者', '市場リスク', '信用リスク', '元本欠損額の賠償責任', '勧誘方針', //問16〜20
                ]"
                :labels="[
                'ウ', 'カ', 'キ', 'ア', 'イ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '住民票を有するすべての人へ個人番号を割り当てている。',
                '正しい',
                '重大個人情報ではなく特定個人情報。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '3分の1ではなく2分の1。',
                '短期労働者に対する厚生年金保険・健康保険の適用拡大が行われた。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '死差配当ではなく利差配当。',
                '正しい',
                '完全生命表ではなく標準生命表。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '学識経験者で構成され、高齢者の心身の状況調査と主治医意見書等に基づくコンピューター判定（一次判定）と主治医意見書に基づく審査判定（二次判定）を行う。',
                '施設サービスを利用した場合の食費及び居住費は自己負担。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '契約者と保険会社との間に立って中立の立場で保険契約の締結の媒介を行う。',
                '日本固有の制度ではない。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '初めてではなく、1985年には発売されている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '責任準備金は生存した他の被保険者の保険金の支払に充当する。',
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
                '保険期間は1年。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '子会社・兄弟会社限定が解除され、生保商品の銀行窓販が実質的に解禁されることとなった。',
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
                '正しい',
                'スーパーバイザーではなくホールセラー。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '既契約者から本人情報の開示を求められた場合には、個人情報保護法により開示が義務付けられている項目・箇所については開示しなければならない。',
                '特別配当の権利は転換後の契約に引き継がれる。',
                'メリットとしては、海外の比較的高い金利を反映することで、予定利率を高く設定していること。',
                '正しい',
                // 問36〜40
                '入院または医師の指示により自宅療養をし、業務に全く従事できない状態（就業不能状態）が所定の期間を超えて継続した場合に就業不能保険金を支払う保険である。',
                '正しい',
                '生命保険商品の枠を超えたコンサルティングセールスも要求されている。',
                '正しい',
                'トータル・ライフ・コンサルタント（TLC）が正しい。',
                 //問41〜50
                'A-65歳', 'B-所得段階別', 'B-団体扱特約', 'B-面接', 'C（A・Bともに正しい）',
                'A-第1号被保険者', 'A-傷病', 'B-分割', 'C（A・Bともに正しい）', 'A-地域',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'ア', 'ウ', 'ウ', 'エ', 'オ',  //問41〜45
                'ア', 'イ', 'ウ', 'オ', 'イ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2022b" next-route="eigyo2021a" />

    </section>
</SeihoTestLayout>
</template>
