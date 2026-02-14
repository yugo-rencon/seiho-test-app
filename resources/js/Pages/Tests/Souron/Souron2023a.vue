<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
const subject = '2023年度 フォームA'

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
                '危険均一性', '高額', '健康', '診査医', '生命保険面接士', // 問１〜５
                ]"
                :labels="[
                'カ', 'イ', 'ク', 'エ', 'コ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '契約確認', '公平性', '評価', '高危険', '事業費', //問６〜10
                ]"
                :labels="[
                'キ', 'ア', 'オ', 'イ', 'ク',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '保障制度', '自給自足', '経済単位', '相互扶助', 'ギルド', //問11〜15
                ]"
                :labels="[
                'オ', 'ア', 'コ', 'キ', 'カ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '海上保険', '冒険貸借', '統計学', 'ドイツ', '社会保険', //問16〜20
                ]"
                :labels="[
                'カ', 'イ', 'エ', 'ケ', 'オ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険契約は、保険法上、一定の要式を要するとはしておらず、<u><b>不要式契約</b></u>である。', //p11
                '生命保険契約は符号契約であるが、付合契約とは、<u><b>契約当事者の一方があらかじめ定めた契約条項を相手方が包括的に承認する</b></u>ことによって成立する。' //p12
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '団体の弔慰金・死亡退職金規程等の支払財源を保障する部分を「<u><b>主契約</b></u>」、従業員死亡に伴い企業が負担する代替雇用者採用・育成費用等の諸費用（企業の経済的損失）を保障する部分を「<u><b>ヒューマン・ヴァリュー特約</b></u>」に区分している。', //p47
                '正しい',
                '団体が退職金・退職年金制度を実質的に裏付ける目的で保険料を負担する「<u><b>新企業年金保険</b></u>」と団体の所属員が保険料を実質的に負担して老後の年金資産を積み立てる「<u><b>拠出型企業年金保険</b></u>」とがある。' //p49
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                'デリバティブ商品ではなく<u><b>ニューウェーブ商品</b></u>', //p69
                '正しい',
                '金融規制改革法（ドッド・フランク法）ではなく<u><b>グラム・リーチ・ブライリー法</b></u>' //p71
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '近年他の貯蓄性金融商品との競合が<u><b>激化</b></u>し、生保資金の流動性が<u><b>上昇</b></u>しているため、流動性原則の重要性が<u><b>高まっている</b></u>。', //p109
                '生命保険会社の資金が広く大衆から集められたものであり、さらに資産運用が広く国民経済の各分野で行われていることから、運用に際しては、<u><b>公共性の発揮が常に要請される</b></u>。' //p110
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険加入金額は世帯主の普通死亡保険金で、<u><b>1386万円</b></u>となっている。', //p189
                '生命保険の取り扱う個人年金保険には年金支払期間を一生涯とすることができる点、各種の医療関係特約を付加することができる点等において<u><b>他の金融機関の年金型商品と比べて優れた特色がある</b></u>。', //p190
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '保険契約の一方の当事者である保険契約者は、<u><b>保険者</b></u>が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。' //p15
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '第一次世界大戦ではなく<u><b>スペインかぜ</b></u>' //p76
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '収支相当の原則ではなく<u><b>大数の法則</b></u>' //p126
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '<u><b>公示主義</b></u>は保険会社の事業成績など一定の事項を公示させて契約者や一般公衆の判断に委ねるもので、<u><b>準則主義</b></u>は保険事業の開始および継続について一定の準則を定めて、その遵守を国が監督するものであるとされる。', //p148
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
                '第三分野については<u><b>生損保本体</b></u>で取り扱えることとし、それ以外の分野については<u><b>子会社方式</b></u>により相互参入が可能とされた。', //p173
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '保険金受取人の資格については<u><b>何らの制限はなく、個人であると法人であると、また行為能力者であると否とを問わない</b></u>。', //p14
                '正しい',
                '正しい',
                '正しい',
                '正しい',
                // 問36〜40
                '公的介護保険制度の保険者（運営主体）は、<u><b>各市町村</b></u>であり、第1号被保険者の保険料は<u><b>各市町村</b></u>ごとに基準保険料（所得段階別の定額保険料）が設定される。', //p141
                '100株未満ではなく<u><b>1株未満</b></u>。', //p162
                'JAによる共済事業は、農協系統組織の一環であり、農業協同組合の行う信用・購入・販売など、他の事業と同様、<u><b>JA（単位農協）、JA共済連という2段階による組織機構により運営されている</b></u>。', //p166
                '企業間のネットワーク化として生保業界においても、「<u><b>LINC（Life Insurance Network Center）</b></u>」と呼ばれる生保業界共同のネットワークシステムを構築した。', //p185
                '正しい',
                 //問41〜50
                'C（A・Bともに正しい）', 'A-負債', 'B-養老保険', 'B-不没収法', 'A-更生手続',
                'A-家計可処分所得', 'B-各種共済組合', 'A-消費者契約法', 'A-組合員', 'C（A・Bともに正しい）',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'オ', 'ア', 'ウ', 'エ', 'イ',  //問41〜45
                'ア', 'エ', 'イ', 'イ', 'オ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2024c" next-route="souron2023b" />

    </section>

    </SeihoTestLayout>


</template>
