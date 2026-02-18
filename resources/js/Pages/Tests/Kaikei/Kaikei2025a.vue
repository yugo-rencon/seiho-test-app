<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2025年度 フォームA'
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
                '総勘定元帳','期末棚卸','保有目的','売掛金','固定資産', // 問１〜５
                ]"
                :labels="[
                    'イ', //1
                    'ウ', //2
                    'オ', //3
                    'コ', //4
                    'ク', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '前払費用','未払費用','未収収益','元帳の締切','純資産勘定', // 問6〜10
                ]"
                :labels="[
                    'ア', //6
                    'コ', //7
                    'キ', //8
                    'エ', //9
                    'カ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '付加保険料','維持費','募集機関','保険料払込案内費','退職給付引当金繰入額', // 問11〜15
                ]"
                :labels="[
                    'ク', //11
                    'コ', //12
                    'カ', //13
                    'キ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '死亡率','利源分析','6','拡大','支出管理', // 問16〜20
                ]"
                :labels="[
                    'オ', //16
                    'イ', //17
                    'エ', //18
                    'キ', //19
                    'ア', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '企業実体の公準ではなく、継続企業の公準。', //p6
                '継続企業の公準ではなく、企業実体の公準。', //p6
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '簿記は、企業が行う経済活動（商品の仕入・販売、物品の購入、経費の支払など）を貨幣額で計算し、測定し、記録してその結果を<u><b>株主、債権者などの外部利害関係者</b></u>へ報告するためのものである。', //p9
                '企業の経済活動を記帳・計算するのが簿記であるが、<u><b>経済活動のすべてを記帳・計算するわけではない</b></u>。たとえば、電力会社と電力供給の契約を締結した場合、<u><b>契約締結の時点</b></u>では、それぞれに「電力を供給する義務」と「電力の供給を受ける権利」が発生するが、<u><b>会計上の取引とはならない</b></u>。<u><b>契約締結後</b></u>、電力供給を受けた場合、それぞれに「電力料金の請求をする権利」と「電力料金を支払う義務」が発生し、この時点で<u><b>会計上の取引と認識し、記帳・計算を行う</b></u>。', //p9-10
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '「企業会計原則」は広く企業会計実務の多様性・可変性を維持し、法令ではなく、一般に公正妥当と認められるものを要約した会計慣習として定められている。', //p24
                '損益計算書原則および貸借対照表原則は、主に会計情報の報告に主点をおく、いわゆる「報告原則」としての色彩が強いが、一般原則は報告のみならず、その基礎となる記録，測定といった「処理原則」の性格を併せ持っている。' //p24
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '洗い替えと同時に、保険金等の費用勘定そのものの修正は行わない。', //p39
                '正しい',
                '50%以上ではなく、20%以上。', //p41
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '償却原価法ではなく、時価法。', //p110
                '正しい',
                '時価法ではなく、償却原価法。', //p110
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '資産勘定のうち繰延資産には、創立費、開業費、開発費があり、固定資産には土地や長期貸付金がある。', //p13
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
                '株主配当については、旧商法では企業が株主へ配当を行うのは年2回までに制限されていたが、会社法では株主総会の決議があればいつでも配当を出すことが可能となった。' //p29
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '従来連結子会社及び子法人等の範囲は議決権の所有割合（50%超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。' //p81
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '個人年金の年金一括支払額、団体年金の中途脱退一時金は「給付金」に含まれる。', //p150-151
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '国税庁ではなく、金融庁。', //p209
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
                    { label: '解', content: '財務会計が現在または過去の企業の情報提供を主目的としているのに対して、管理会計は未来の予測効果を重要視している点に特色がある。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '「明瞭性の原則」ではなく、「資本取引・損益取引区分の原則」。「明瞭性の原則」では「企業会計は、財務諸表によって、利害関係者に対し必要な会計事実を明瞭に表示し、企業の状況に関する判断を誤らせないようにしなければならない。」と定めている。' }, //33
                    { label: '解', content: '期中の保険料収入や保険金支払が<u><b>現金主義</b></u>で認識されている生命保険会社にあっては、その損益基準を<u><b>発生主義</b></u>に修正するうえで極めて重要な意味を持つ。' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '生命保険会社が支払う税金のうち、法人税やそれを基礎として計算される都道府県民税・市町村民税については、原則として当期に生じた剰余金から支払われるべきものであるから、損益計算書上、<u><b>他の税金と区別して</b></u>税引前当期剰余から控除する形式で表示される。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '期中監査は日常業務の取引記録が正確に会計数値として反映されているかといった日々の記帳内容に主眼が置かれるのに対して、決算監査は財務諸表の適法性や決算整理事項の内容監査が中心となる。' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '買掛金元帳' }, //41
                    { label: 'エ', content: '経営成績' }, //42
                    { label: 'ア', content: '課税の公平性' }, //43
                    { label: 'ア', content: '2週間' }, //44
                    { label: 'エ', content: 'のれん（連結調整勘定）' }, //45
                    { label: 'ウ', content: '決算時' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'イ', content: '損益計算書' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'イ', content: '評価替え' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            next-route="kaikei2025b"
        />

    </section>

    </SeihoTestLayout>


</template>
