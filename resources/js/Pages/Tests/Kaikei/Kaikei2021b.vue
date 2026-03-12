<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2021年度 フォームB'

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
                questionTitle="制度会計-①"
                :contents="[
                '財務会計', '株主配当', '財務内容', '有限責任', '利害調整', // 問１〜５
                ]"
                :labels="[
                    'ウ', //1
                    'コ', //2
                    'オ', //3
                    'カ', //4
                    'キ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                questionTitle="制度会計-②"
                :contents="[
                '価格形成', '課税の公平性', '別段の定め', '会計慣行', 'エネルギー', //問６〜10
                ]"
                :labels="[
                    'カ', //6
                    'ア', //7
                    'ク', //8
                    'ウ', //9
                    'エ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                questionTitle="損益勘定-①"
                :contents="[
                '認識', '実現主義', '発生主義', '費用収益対応の原則', '前者', //問11〜15
                ]"
                :labels="[
                    'カ', //11
                    'ア', //12
                    'ク', //13
                    'ウ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                questionTitle="損益勘定-②"
                :contents="[
                '売上高', '付加保険料', '現金主義', '未収保険料', '責任準備金', //問16〜20
                ]"
                :labels="[
                    'ク', //16
                    'カ', //17
                    'イ', //18
                    'オ', //19
                    'ウ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                questionTitle="通常発生する取引の8要素の組合せ"
                :contents="[
                '（借方）負債の減少：（貸方）資産の減少 or（借方）資産の増加：（貸方）負債の増加',
                '正しい',
                '（借方）資産の増加：（貸方）収益の発生 or （借方）費用の発生：（貸方）資産の減少'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                questionTitle="生命保険会計における負債勘定"
                :contents="[
                '生命保険会社は、契約者に対する保険契約準備金が大部分を占めるため、一般の企業とは違った区分をしている。',
                '正しい',
                '内閣府令で、資産ごとに定められた積立基準により計算された額を、積立限度額に達するまで価格変動準備金として積み立てることを義務付けている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                questionTitle="費用に属する科目"
                :contents="[
                'こども保険等の生存保険金および個人年金における死亡返戻金等は「給付金」として処理される。',
                '年金特約によらない保険金の単なる分割支払は含めない。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                questionTitle="区分経理における運用資産の管理"
                :contents="[
                '正しい',
                '資産単位別持分管理方式ではなく、資産持分管理方式（マザーファンド方式）',
                '資産持分管理方式（マザーファンド方式）ではなく、資産単位別持分管理方式'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                questionTitle="減損損失"
                :contents="[
                '正しい',
                '減損会計の対象資産は、土地、建物等の有形固定資産ばかりでなく、営業権、特許権等の無形固定資産も該当する。',
                '貸借対照表ではなく、損益計算書。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                questionTitle="複式簿記の原理"
                :contents="[
                '正しい',
                '正しい',
                '精算帳ではなく、総勘定元帳。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                questionTitle="企業会計原則（一般原則）"
                :contents="[
                '正しい',
                '保守主義の原則ではなく、継続性の原則。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                questionTitle="連結財務諸表の作成手続"
                :contents="[
                '従来連結子会社及び子法人等の範囲は議決権の所有割合（50%超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                questionTitle="生命保険会社のディスクロージャー"
                :contents="[
                '2000年度（平成12年度）決算からキャッシュ・フロー計算書が縦覧の対象資料に付け加えられている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                questionTitle="資産勘定の内容"
                :contents="[
                '正しい',
                '資産の自己査定に基づき破綻先，実質破綻先、破綻懸念先とした債務者に対する貸付金の未収利息については、原則として計上しないこととなっている。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    {questionTitle: '勘定の閉鎖', content: '正しい' }, //31
                    {questionTitle: '保険契約準備金の繰入', content: '正しい' }, //32
                    {questionTitle: '預貯金', content: '正しい' }, //33
                    {questionTitle: '退職給付引当金', content: '正しい' }, //34
                    {questionTitle: '代理店貸', content: '正しい' }, //35
                    {questionTitle: '法人税及び住民税', content: '損益計算書上、他の税金と区別して税引前当期剰余から控除する形式で表示される。' }, //36
                    {questionTitle: '自己株式', content: '自己株式は、純資産の部から控除する形式で表示することとされた。' }, //37
                    {questionTitle: '利減分析', content: '危険準備金損益・為替損益ではなく、責任準備金関係損益・価格変動損益。' }, //38
                    {questionTitle: '保険金据置支払金', content: '据置期間に対応する利息も保険金据置支払金に計上される。' }, //39
                    {questionTitle: '会計監査人による監査', content: '期中監査は日常業務の取引記録が正確に会計数値として反映されているかといった日々の記帳内容に主眼が置かれるのに対して，決算監査は財務諸表の適法性や決算整理事項の内容監査が中心となる' }, //40
                    // 問41〜50
                    { label: 'オ', questionTitle: '株主資本等変動計算書', content: '' }, //41
                    { label: 'イ', questionTitle: '危険準備金', content: '利益性' }, //42
                    { label: 'エ', questionTitle: '決算スケジュール', content: '4ヵ月' }, //43
                    { label: 'エ', questionTitle: '会計に関する法律', content: '保険業法' }, //44
                    { label: 'オ', questionTitle: '貸倒引当金', content: '' }, //45
                    { label: 'ア', questionTitle: 'その他負債', content: '資産除去' }, //46
                    { label: 'ウ', questionTitle: '損失填補準備金', content: '1000分の3' }, //47
                    { label: 'エ', questionTitle: '解約返戻金', content: '支払備金' }, //48
                    { label: 'ウ', questionTitle: '事業費', content: '物件費' }, //49
                    { label: 'イ', questionTitle: '監査役による監査', content: '社外' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="kaikei2021a" next-route="kaikei2021c" />

    </section>

    </SeihoTestLayout>


</template>
