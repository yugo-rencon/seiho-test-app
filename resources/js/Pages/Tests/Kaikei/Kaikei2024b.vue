<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
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
                '洗替方式','費用','標準','除く','最低額', // 問１〜５
                ]"
                :labels="[
                'エ','コ','カ','ウ','ケ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '未経過','危険','内部留保','純保険料式','20%', // 問6〜10
                ]"
                :labels="[
                'オ','ウ','イ','コ','キ',  //問6〜10
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
                'ク','コ','カ','キ','エ',  //問11〜15
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
                'オ','イ','エ','キ','ア',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '仕訳帳ではなく、総勘定元帳。', //p12
                '正しい',
                '資産勘定のうち繰延資産には、創立費、開業費、開発費があり、固定資産には土地や長期貸付金がある。', //p13
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '貸借対照表ではなく、損益計算書。', //p18
                '損益計算書ではなく、貸借対照表。', //p19
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
                '資産勘定、負債勘定、費用勘定、収益勘定の4勘定からなる。', //p43-44
                '算出方法書ではなく、事業方法書。', //p44
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '取得原価ではなく、償却原価法。', //p110
                '貸倒引当金は、従来、負債の部に計上されていたが、保険業法施行規則の改正により1999年度（平成11年度）決算より資産の部の控除項目となった。' //p124
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '精算表ではなく、試算表。精算表は、決算の一連の作業のあらましを一つの計算表でまとめて行うために作成し、損益計算書と貸借対照表を作成する資料となる。', //p16
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '法人税法は、法人の所得に対する課税上の措置に関する定めであり、その目的は課税の公平性を保つために課税所得を正確に導くことにある。したがって、<u><b>会計情報の開示という機能はその中に含まれていないという点で、会社法・金融商品取引法に基づく会計とは異なっている。</b></u>', //p32
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
                :contents="[
                // 問31〜35
                '財務会計が現在または過去の企業の情報提供を主目的としているのに対して、管理会計は未来の予測効果を重要視している点に特色がある。', //p4
                '簿記は、企業が行う経済活動（商品の仕入・販売、物品の購入、経費の支払など）を貨幣額で計算し、測定し、記録してその結果を<u><b>株主、債権者などの外部利害関係者</b></u>へ報告するためのものである。', //p9
                '正しい',
                '正しい',
                '正しい',
                // 問36〜40
                '有形固定資産の種類ごとに、法人税法で選定できる償却の方法が定められている。', //p116
                '収支相当の原則ではなく、費用収益対応の原則。', //p143
                '生命保険会社が支払う税金のうち、法人税やそれを基礎として計算される都道府県民税・市町村民税については、原則として当期に生じた剰余金から支払われるべきものであるから、損益計算書上、他の税金と区別して税引前当期剰余から控除する形式で表示される。', //p164
                '正しい',
                '正しい',
                 //問41〜50
                'B-買掛金元帳','A-明瞭性','B-いつでも','B-財政状態','B-のれん（連結調整勘定）',
                'C（A・Bともに正しい）','A-売買目的有価証券','A-損益計算書','C（A・Bともに正しい）','B-金融庁',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ウ','ア','エ','エ','エ',  //問41〜45
                'オ','イ','イ','オ','ウ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2024a" next-route="kaikei2024c" />

    </section>

    </SeihoTestLayout>


</template>
