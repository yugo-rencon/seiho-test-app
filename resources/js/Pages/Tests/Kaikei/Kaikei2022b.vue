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

const title = "生命保険会計"
const subject = '2022年度 フォームB'

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
                '洗替方式', '費用', '標準', '除く', '最低額', // 問１〜５
                ]"
                :labels="[
                'エ', 'コ', 'カ', 'ウ', 'ケ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '未経過', '危険', '内部留保', '純保険料式', '20%', //問６〜10
                ]"
                :labels="[
                'オ', 'ウ', 'イ', 'コ', 'キ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '現金', '未収保険料', '前納保険料', '費用収益対応', '全額', //問11〜15
                ]"
                :labels="[
                'オ', 'キ', 'エ', 'イ', 'コ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '売買目的', '発生', '保険金受取人', '評価換え', '内閣総理大臣', //問16〜20
                ]"
                :labels="[
                'キ', 'エ', 'イ', 'ク', 'カ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '損益計算書原則および貸借対照表原則は、主に会計情報の報告に主点をおく、いわゆる「報告原則」としての色彩が強いが、一般原則は報告のみならず、その基礎となる記録，測定といった「処理原則」の性格を併せ持っている。',
                '真実性の原則ではなく、正規の簿記の原則。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '企業の経済活動を記帳・計算するのが簿記であるが、経済活動のすべてを記帳・計算するわけではない。たとえば、電力会社と電力供給の契約を締結した場合、契約締結の時点では、それぞれに「電力を供給する義務」と「電力の供給を受ける権利」が発生するが、会計上の取引とはならない。',
                '正しい',
                '元帳の締切ではなく、転記'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '従来連結子会社及び子法人等の範囲は議決権の所有割合（50%超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。',
                '連結会社相互間の取引によって取得した資産に含まれる未実現損益はその全額を消去する',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '負債は、買掛金、借入金などの債務を表し、一般の企業では、流動（短期）負債に属する負債，固定（長期）負債に属する負債に区分することになっているが、生命保険会社は、契約者に対する保険契約準備金が大部分を占めるため、一般の企業とは違った区分をしている。',
                '正しい',
                '内閣府令で、資産ごとに定められた積立基準により計算された額を、積立限度額に達するまで価格変動準備金として積み立てることを義務付けている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '会計監査人は、株主総会（相互会社にあっては総代会）により選任され、その職務は会社の行う一切の会計行為が、会社法，保険業法等の法令に準拠して適正に行われているか否かについて監査を行い、その結果を取締役および監査役に報告することにある。',
                '期中監査は日常業務の取引記録が正確に会計数値として反映されているかといった日々の記帳内容に主眼が置かれるのに対して，決算監査は財務諸表の適法性や決算整理事項の内容監査が中心となる'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '会計行為はすべて円で評価される。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                'その他有価証券の評価差額から税効果会計上の税効果相当額を控除した額を計上する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '残高試算表ではなく、合計試算表。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '金融庁ではなく、各生命保険会社が定める基準。',
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
                '収入管理と支出管理を比較すれば、経営としてより主体的に取り組めるのは支出管理である。',
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
                '正しい',
                '相互会社は剰余金処分に関する議案の作成が求められる。',
                '正しい',
                // 問36〜40
                '購入により取得した有価証券については、購入代価に購入手数料その他購入するために要した費用を加算した金額が取得価額となる。',
                '法人税法上の貸倒引当金として認められる額を超える額は、損金に算入されない。',
                '債権額ではなく、債務額。',
                '正しい',
                '正しい',
                 //問41〜50
                'C（A・Bともに正しい）', 'A-補助記入帳', 'B-のれん（連結調整勘定）', 'A-負債', 'B-固定',
                'B-相互会社だけに', 'A-団体年金', 'A-期末', 'C（A・Bともに正しい）', 'B-国税通則法',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'オ', 'イ', 'エ', 'ア', 'ウ',  //問41〜45
                'ウ', 'イ', 'ア', 'オ', 'ウ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2022a" next-route="kaikei2022c" />

    </section>

    </SeihoTestLayout>


</template>
