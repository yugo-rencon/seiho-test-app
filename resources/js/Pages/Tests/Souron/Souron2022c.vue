<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
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
                '保険料の拠出','全国健康保険協会管掌保険','国家公務員','国民健康保険','後期高齢者', // 問１〜５
                ]"
                :labels="[
                'イ','オ','ケ','キ','エ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '共済年金','国民年金','労働者災害補償保険','生活保護','資力調査（ミーンズ・テスト）', //問６〜10
                ]"
                :labels="[
                'ケ','イ','カ','オ','エ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '平均寿命','7','速い','扶養','15〜64', //問11〜15
                ]"
                :labels="[
                'ク','ウ','キ','カ','コ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '年金','70','合計特殊出生率','下回って','労働力率', //問16〜20
                ]"
                :labels="[
                'エ','ケ','イ','オ','コ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約者の資格については<u><b>別段の制限はなく、個人であると法人であるとを問わず、また行為能力者であると否とを問わない</b></u>。', //p13
                '正しい',
                '保険金受取人の資格については<u><b>何らの制限はなく、個人であると法人であると、また行為能力者であると否とを問わない</b></u>。' //p14
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '確率論における大数の法則に基づき、危険を被る対象物（母数）が多いほど危険の発生頻度の変動幅は<u><b>小さくなる</b></u>。', //p4
                '傷害・疾病危険に関しては、<u><b>商法では明確な規定がなかったが、保険法においては「傷害疾病定額保険契約」として典型契約としての地位が与えられ、同保険契約は「人の傷害疾病に基づき一定の保険給付を行うことを約するもの」と規定されている</b></u>。' //p5
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '<u><b>65歳以上を第1号被保険者</b></u>とし、<u><b>40歳～65歳未満の医療保険加入者を第2号被保険者</b></u>とする。', //p140
                '正しい',
                '<u><b>第1号被保険者</b></u>の保険料は各市町村ごとに基準保険料（所得段階別の定額保険料）が設定され、<u><b>第2号被保険者</b></u>については、それぞれ加入する医療保険者が制度の算定基準に基づき保険料を設定し、一般の医療保険料に上乗せする形で一括して徴収する。' //p141
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                'ユニバーサル保険は、保険料をキャッシュ・バリューとして積み立て、このキャッシュ・バリューをTB、CD、CPといった<u><b>短期自由金利商品</b></u>に投資し、<u><b>短期金利</b></u>にスライドする形で利殖した中から死亡保障コストを控除する商品である。', //p69
                'ユニバーサル保険は、<u><b>決済機能は持たない</b></u>。', //p69
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '従来であれば、「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かったのであるが、今日では、自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向に変わってきている。', //p184
                '企業としても従来の画一的商品を大量生産、低価格で販売するという戦略だけでは対応し切れなくなってきた面もあり、いかにニーズを先取りし、他に先駆けて新製品を市場に提供できるかが、重要な課題となっている。' //p184-185
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '太古の共同体や奴隷制度、さらに封建社会における農奴制度などは、社会それ自体が保障制度であったが、<u><b>ギルドは、封建社会の中で独立的な経済単位が結合して、自らの力で危険に対処した最初の試み</b></u>である。' //p53
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '<u><b>特別勘定資産</b></u>の運用実績が直接保険金額や年金額に反映されるため留意する必要がある', //p110
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
                '賦課式の生命保険では、年を経るにつれ死亡率が高くなるので、給付金を一定にすれば、<u><b>分担金が年々増加</b></u>し、一方、分担金を一定にすれば、<u><b>給付金が減少</b></u>せざるを得ないことになる。', //p56
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '適合性の原則ではなく<u><b>給付・反対給付均等の原則</b></u>', //p164
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険の取り扱う個人年金保険には年金支払期間を一生涯とすることができる点、各種の医療関係特約を付加することができる点等において<u><b>他の金融機関の年金型商品と比べて優れた特色がある</b></u>。', //p190
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
                '任意規定ではなく<u><b>強行規定</b></u>', //p9
                'ロイヤル・エクスチェンジではなく<u><b>エクイタブル</b></u>が設立', //p57
                '正しい',
                '明治時代以前、日本にも古くから宗門団体、同業者、村落などを中心として相互扶助の思想に基づく、<ruby>頼母子講<rt>たのもしこう</rt></ruby>、<ruby>無尽<rt>むじん</rt></ruby>、職人組合などの隣保扶助制度や三倉制度、海上請負、<ruby>抛銀<rt>なげかね</rt></ruby>などの損害保険的思想を持った制度が存在したが、<u><b>日本の保険はこれらの類似制度から発展したものではない</b></u>。', //p72
                // 問36〜40
                '正しい',
                '正しい',
                '「<u><b>金融商品の販売等に関する法律（現在、金融サービス提供法に改称）</b></u>」によって、顧客への重要事項の説明と勧誘方針の策定・公表が義務付けられており、「<u><b>消費者契約法</b></u>」では、不適切な勧誘を行った際の契約取消権や不当な契約条項の無効等を定めることにより消費者保護を図っている。', //p158
                '正しい',
                '簡易保険の既契約に対しては<u><b>政府による保証が継続</b></u>された。', //p172
                 //問41〜50
                'B-不要式契約', 'C（A・Bともに正しい）', 'A-10', 'A-財形住宅貯蓄積立保険', 'C（A・Bともに正しい）',
                'B-生命保険会社各社の拠出', 'A-200%', 'B-財務大臣', 'B-保険金額', 'A-団体定期保険',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ウ','オ','ア','イ','オ',  //問41〜45
                'エ','イ','エ','ウ','ア',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2022b" next-route="souron2021a" />

    </section>

    </SeihoTestLayout>


</template>
