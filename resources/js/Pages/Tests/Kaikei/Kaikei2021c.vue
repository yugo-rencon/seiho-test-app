<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険会計"
const subject = '2021年度 フォームC'

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
                questionTitle="決算整理手続-①"
                :contents="[
                '支払備金', '洗替え', '自己査定', '時価', 'ヘッジ', // 問１〜５
                ]"
                :labels="[
                    'コ', //1
                    'ア', //2
                    'キ', //3
                    'ウ', //4
                    'オ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                questionTitle="決算整理手続-②"
                :contents="[
                '回収不能', '低価法', '特定海外債権引当勘定', '割引現在価値', '全額', //問６〜10
                ]"
                :labels="[
                    'ク', //6
                    'コ', //7
                    'カ', //8
                    'エ', //9
                    'ア', //10
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
                questionTitle="一般勘定・特別勘定"
                :contents="[
                '試算勘定、負債勘定、費用勘定、収益勘定の4勘定からなる。',
                '算出方法書ではなく、事業方法書',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                questionTitle="剰余金（利益剰余金）"
                :contents="[
                '1000分の2以上ではなく、1000分の3以上。',
                '3分の1ではなく、5分の1。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                questionTitle="事業費の分類"
                :contents="[
                '維持費の人件費ではなく、新契約費の営業職員経費。',
                '新契約費の人件費ではなく、維持費の人件費。',
                '正しい'
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
                questionTitle="会計の意義"
                :contents="[
                '正しい',
                '財務会計ではなく、管理会計。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                questionTitle="制度会計"
                :contents="[
                '正しい',
                '正しい',
                '修正申告ではなく、申告調整。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                questionTitle="関係法規等"
                :contents="[
                '正しい',
                '2005年（平成17年）8月に金融庁は事務ガイドラインを廃止し、保険会社向けの総合的な監督指針を発表した。',
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
                questionTitle="費用に属する科目"
                :contents="[
                'こども保険等の生存保険における被保険者死亡による死亡給付金、生存給付金付定期保険などの生存給付金等も「給付金」に含まれる。',
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
                    {questionTitle: '会計上の取引', content: 'たとえば、電力会社と電力供給の契約を締結した場合、契約締結の時点では、それぞれに「電力を供給する義務」と「電力の供給を受ける権利」が発生するが、会計上の取引とはならない。' }, //31
                    {questionTitle: '損益計算書', content: '正しい' }, //32
                    {questionTitle: '資本取引・損益取引区分の原則', content: '正しい' }, //33
                    {questionTitle: '標準責任準備金', content: '正しい' }, //34
                    {questionTitle: '代理店貸', content: '正しい' }, //35
                    {questionTitle: '未払費用', content: '生命保険会社においては、未払事業費、未払税金、未払賞与等が含まれる。' }, //36
                    {questionTitle: '自己株式', content: '自己株式は、純資産の部から控除する形式で表示することとされた。' }, //37
                    {questionTitle: '繰延税金負債', content: '正しい' }, //38
                    {questionTitle: '保険金据置支払金', content: '据置期間に対応する利息も保険金据置支払金に計上される。' }, //39
                    {questionTitle: '金融検査', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ウ', questionTitle: '帳簿の種類', content: '買掛金元帳' }, //41
                    { label: 'ウ', questionTitle: '企業会計原則', content: '処理原則' }, //42
                    { label: 'オ', questionTitle: '連結決算日', content: '' }, //43
                    { label: 'ア', questionTitle: '無形固定資産', content: '使用目的' }, //44
                    { label: 'イ', questionTitle: '当期末未処分剰余金（繰越利益剰余金）', content: '総代会' }, //45
                    { label: 'ア', questionTitle: 'その他負債', content: '資産除去' }, //46
                    { label: 'エ', questionTitle: '差異の把握', content: '利源分析' }, //47
                    { label: 'エ', questionTitle: '解約返戻金', content: '支払備金' }, //48
                    { label: 'オ', questionTitle: '損益の配賦', content: '' }, //49
                    { label: 'イ', questionTitle: '監査役による監査', content: '社外' }, //50
                ]"

            />
        </div>

                <TestNavigationButtons previous-route="kaikei2021b"  next-route="kaikei2020a" />

    </section>

    </SeihoTestLayout>


</template>
