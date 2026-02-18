<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2025年度 フォームC'
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
                '現金','未収保険料','前納保険料','費用収益対応','全額', // 問１〜５
                ]"
                :labels="[
                    'オ', //1
                    'キ', //2
                    'エ', //3
                    'イ', //4
                    'コ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '売買目的','発生','保険金受取人','評価替え','内閣総理大臣', // 問6〜10
                ]"
                :labels="[
                    'キ', //6
                    'エ', //7
                    'イ', //8
                    'ク', //9
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
                '（借方）<b><u>資産の増加</u></b>：（貸方）負債の増加<br>工場の建設資金10,000,000円を、銀行から借入れて預金に預け入れた。<br>（借方）預金 10,000,000（貸方）借入金 10,000,000', //p12
                '正しい',
                '（借方）費用の発生：（貸方）<b><u>資産の減少</u></b><br>従業員に、給料200,000円を支払った。<br>（借方）給料 200,000（貸方）現金 200,000<br><br>（借方）<b><u>資産の増加</u></b>：（貸方）収益の発生<br>貸付金の利息40,000円が振込まれた。<br>（借方）預金 40,000（貸方）受取利息 40,000', //p12
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '試算表の主な目的は、<b><u>仕訳帳から総勘定元帳</u></b>への転記が正しいか検証することにある。', //p15
                '試算表は、その機能により合計試算表、残高試算表、合計残高試算表の3つに区分される。', //p15-16
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
                '正しい',
                '年度中では、収入のあった保険料は、翌年度以降の保険料に相当する部分についても、すべて保険料勘定に計上する。その未経過部分については、決算期末において、前年度積立額を一旦戻し入れて収益に計上するとともに、当年度決算期末の未経過期間に対応する額を、責任準備金として積立てを行い、<b><u>保険料勘定そのものの修正は行わない。</u></b>', //p40
                '危険準備金は、法人税法上は利益性の内部留保との立場から、損金とはならない。' //p41
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '損失填補準備金は、担保資金を増強し、将来の損失に備えるため、保険業法により基金（基金償却積立金を含む）の総額（定款でこれを<b><u>上回る</u></b>額を定めたときは、その額）に達するまでは、毎決算期に剰余金の処分として支出する金額の<b><u>1,000分の3以上</u></b>を積み立てることが強制されている。', //p138
                '3分の1ではなく、5分の1。', //p138
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '資産は企業それ自体の財産であり、所有者の財産と分離することができる。', //p6
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
                '保守主義の原則ではなく、継続性の原則。<br>保守主義の原則・・・「企業の財政に不利な影響を及ぼす可能性がある場合には、これに備えて適当に健全な会計処理をしなければならない。」', //p26
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
                '正しい',
                '正しい',
                '2000年度（平成12年度）決算からキャッシュ・フロー計算書が縦覧の対象資料に付け加えられている。' //p180
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
                    { label: '解', content: '金融商品取引法上、流通市場における開示書類には、「有価証券報告書」、「半期報告書」、「四半期報告書」および「臨時報告書」等がある。' }, //33
                    { label: '解', content: '10%以上ではなく、20%以上。' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '据置期間に対応する利息も「保険金据置支払金」に計上される。' }, //37
                    { label: '解', content: '生命保険会社が支払う税金のうち、法人税やそれを基礎として計算される都道府県民税・市町村民税については、原則として当期に生じた剰余金から支払われるべきものであるから、損益計算書上、他の税金と区別して税引前当期剰余から控除する形式で表示される。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '買掛金元帳' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'ア', content: '負債' }, //43
                    { label: 'エ', content: '純保険料' }, //44
                    { label: 'エ', content: '保険業法' }, //45
                    { label: 'ウ', content: '定額法' }, //46
                    { label: 'イ', content: '実現主義' }, //47
                    { label: 'イ', content: '損益計算書' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'ア', content: '税務調査' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            previous-route="kaikei2025b"
            next-route="kaikei2024a"
        />

    </section>

    </SeihoTestLayout>


</template>
