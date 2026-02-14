<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
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
                :contents="[
                '収益','目標','利用効率','流動比率','量的分析', // 問１〜５
                ]"
                :labels="[
                'イ','ケ','キ','ウ','コ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '不動産','非居住者','円貨建債券','スシ・ボンド','アセットミックス', //問６〜10
                ]"
                :labels="[
                'カ','ウ','ア','コ','ク',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '財団抵当','時価','瑕疵（かし）','不動産鑑定士','控除', //問11〜15
                ]"
                :labels="[
                'エ','ク','カ','イ','オ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '一括返済','収益性','プライム・レート','低く','金銭消費貸借契約証書', //問16〜20
                ]"
                :labels="[
                'オ','ア','コ','ク','ケ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '短期運用に適している。',
                '流動性の確保に留意している。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '共同ビル方式ではなく借地方式の説明。',
                '正しい',
                '借地期間が終了したときには新たな契約更新を行わずに、 土地所有者は必ず土地の返還を受けることができる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '金利スワップではなく通貨スワップの説明。',
                '通貨スワップではなく金利スワップの説明。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '銀行預金に相当額の資金をむけていた。',
                '社債、株式投資が増大して、貸付が減少した。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '売買目的有価証券は時価評価を行う。',
                '責任準備金対応債券は取得価額で評価を行う。',
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
                '間接金融ではなく直接金融。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '委員会制ではなく単独制。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                'RBC 比率を高めるため、比較的リスクの高い不動産関連投資を減らし、代わりに公社債の比重を高めるようになってきている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '実数を加工して算出した比率を用いることを比率法といい、実数法ではなく比率法を用いることが多い。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '特別勘定における大口信用供与規制の撤廃が行われている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                'エコノミストではなくアナリストの説明。',
                '保険金信託業務は、付随業務ではなく法定他業に規定されている。',
                '正しい',
                '事務リスクではなく信用リスク。また即時の流動化は容易ではなく困難。',
                '正しい',
                // 問36〜40
                '正しい',
                '子会社形態により互いに他業態の業務を行うことが可能である。',
                '正しい',
                'フリー・クリア・ワイドではなくフリー・フェアー・グローバル。',
                '正しい',
                 //問41〜50
                'A-独占禁止法','B-安全性','B-短期','B-当期純利益','C（A・Bともに正しい）',
                'C（A・Bともに正しい）','A-シンジケート','A-子会社を通じて','A-ヘッジファンド','A-キャピタル・ゲイン',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'イ','エ','ウ','エ','オ',  //問41〜45
                'オ','ア','ア','イ','イ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
