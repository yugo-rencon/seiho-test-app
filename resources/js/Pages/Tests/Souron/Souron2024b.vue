<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
const subject = '2024年度 フォームB'

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
                '負債', '定款', '20%', '非社員契約', '公平性', // 問１〜５
                ]"
                :labels="[
                'コ', 'ク', 'イ', 'エ', 'キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '利源分析', '増加', '上回る', '解約益', '小さく', //問６〜10
                ]"
                :labels="[
                'キ', 'ア', 'オ', 'ケ', 'エ',  //問６〜10
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
                :contents="[ //p7-9
                '<u><b>保険法</b></u>においては、保険契約者と実質的に同じ地位に置かれている共済契約者の保護の観点から、共済契約も<u><b>保険法</b></u>の適用対象とされている。',
                '正しい',
                '法律に強行規定がある場合を除き、まず<u><b>保険約款</b></u>が適用され，保険約款に規定のない事項については、おおむね保険法、民法の順に適用される'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[ //p53-54
                '都市経済では商人とその家族は1つの経済単位であり、彼等が被った経済的損失は、<u><b>貴族も領主も救済してくれず、自らが補塡していかねばならなかった。</b></u>。',
                '正しい',
                '封建社会における農奴制度などは、社会それ自体が保障制度であったが、ギルドは封建社会の中で独立的な経済単位が結合して、自らの力で危険に対処した最初の試みである。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[ //p124-125
                '社会保険の場合、保険事故の発生率よりも保険料負担者の<u><b>負担能力に応じて保険料が決められる</b></u>ことが多いという特色がある。',
                '社会保険の保険料は、被保険者が企業の被用者である場合にはその全部を被保険者が負担するのではなく、事業主が分担することになっており、分担割合は、<u><b>少なくとも50%</b></u>になっている。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[ //p150-P155
                '免許には生命保険業免許と損害保険業免許の<u><b>2種類</b></u>がある。',
                'ソルベンシー・マージン比率が100%以上200%未満となった場合は「経営改善計画と実行」、0%未満の場合は「業務の一部または全部の停止」を命じることができる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[ //p173-174
                '正しい',
                '1996年（平成8年）施行の改正保険業法において、生命保険、損害保険、第三分野の定義が明定され、<u><b>第三分野については生損保本体で取り扱えることとし、それ以外の分野については子会社方式により相互参入が可能</b></u>とされた。',
                '第三分野商品（傷害保険・がん保険等）の生保本体での取扱いについては、日米保険協議の結果を踏まえ、一部制限する激変緩和措置が講じられたが、<u><b>2001年（平成13年）に全面解禁</b></u>された。'
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
                :contents="[ //p56
                '正しい',
                '賦課式の生命保険では、年を経るにつれ死亡率が高くなるので、給付金を一定にすれば、分担金が年々<u><b>増加</b></u>し、一方、分担金を一定にすれば、給付金が<u><b>減少</b></u>せざるを得ないことになる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[ //p110
                '<u><b>特別勘定資産</b></u>の運用実績が直接保険金額や年金額に反映されるため留意が必要である。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[ //p166
                '自動車共済・建物更生共済といった損害系の共済商品も取り扱っている。',
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
                '正しい',
                '正しい',
                'アメリカにおける保険事業規制は伝統的に<u><b>州政府</b></u>によって行われてきた。', //p65
                '明治時代以前、日本にも古くから宗門団体、同業者、村落などを中心として相互扶助の思想に基づく、<ruby>頼母子講<rt>たのもしこう</rt></ruby>、<ruby>無尽<rt>むじん</rt></ruby>、職人組合などの隣保扶助制度や三倉制度、海上請負、<ruby>抛銀<rt>なげかね</rt></ruby>などの損害保険的思想を持った制度が存在したが、<u><b>日本の保険はこれらの類似制度から発展したものではない</b></u>。', //p72
                '正しい',
                // 問36〜40
                '純資産ではなく負債の大部分の説明。', //p108
                '日本では、<u><b>実体的監督主義が採用されている</b></u>。実体的監督主義は、監督官庁に広範な権限を与えて、保険事業の開始から業務運営、そして経営不振会社に対する最終的整理、統合に至る事業経営のあらゆる段階において監督を行うもの。', //p148
                'それまでの簡易保険既契約は独立行政法人郵便貯金・簡易生命保険管理機構により引き継がれており、これにより<u><b>簡易保険の既契約に対しては政府による保証が継続された</b></u>。', //p172
                '正しい',
                '正しい',
                 //問41〜50
                'B-いずれかの遅い日', 'B-終局表', 'B-逓減定期保険', 'A-友愛組合', 'A-法定責任準備金法',
                'A-経済的保障', 'C（A・Bともに正しい）', 'C（A・Bともに正しい）', 'A-こくみん共済coop＜全労済＞', 'B-変額年金',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'エ', 'ウ', 'エ', 'イ', 'ア',  //問41〜45
                'イ', 'オ', 'オ', 'ア', 'ウ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2024a" next-route="souron2024c" />

    </section>

    </SeihoTestLayout>


</template>
