<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2021年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="決算整理手続-①"
                    :contents="[
                        '支払備金',
                        '洗替え',
                        '自己査定',
                        '時価',
                        'ヘッジ', // 問１〜５
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
                        '回収不能',
                        '低価法',
                        '特定海外債権引当勘定',
                        '割引現在価値',
                        '全額', //問６〜10
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
                        '認識',
                        '実現主義',
                        '発生主義',
                        '費用収益対応の原則',
                        '前者', //問11〜15
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
                        '売上高',
                        '付加保険料',
                        '現金主義',
                        '未収保険料',
                        '責任準備金', //問16〜20
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
                        '資産の増加／負債の増加（例：借入）などが通常であり、資産の減少／負債の増加は通常発生しない。', //p12
                        '正しい',
                        '費用の発生／収益の発生は同時には起こらない。通常は費用の発生／資産の減少（例：支払）となる。', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        '2勘定 → 4勘定（資産勘定、負債勘定、費用勘定、収益勘定）', //p43-44
                        '算出方法書 → 事業方法書', //p44
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金（利益剰余金）"
                    :contents="[
                        '1000分の2以上 → 1000分の3以上', //p138
                        '3分の1 → 5分の1', //p138
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業費の分類"
                    :contents="[
                        '維持費の人件費 → 新契約費の営業職員経費', //p170
                        '新契約費の人件費 → 維持費の人件費', //p172
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="減損損失"
                    :contents="[
                        '正しい',
                        '営業権、特許権等の無形固定資産は対象とならない → 対象となる', //p161
                        '貸借対照表 → 損益計算書', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計の意義"
                    :contents="[
                        '正しい',
                        '財務会計の説明 ↔︎ 管理会計の説明', //p4
                        '正しい',
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
                        '修正申告 → 申告調整', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="関係法規等"
                    :contents="[
                        '正しい',
                        '保険会社向けの総合的な監督指針 ↔︎ 事務ガイドライン', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        '縦覧の対象資料に含まれない → 対象資料に含まれる', //p180
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="費用に属する科目"
                    :contents="[
                        'その他返戻金で処理される → 給付金で処理される', //p151
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '会計上の取引', content: '契約締結の時点で取引と認識 → 電力供給を受けた時点で取引と認識' }, //31 p9-10
                        { questionTitle: '損益計算書', content: '正しい' }, //32
                        { questionTitle: '資本取引・損益取引区分の原則', content: '正しい' }, //33
                        { questionTitle: '標準責任準備金', content: '正しい' }, //34
                        { questionTitle: '代理店貸', content: '正しい' }, //35
                        { questionTitle: '未払費用', content: '借入金、未払法人税等、未払金、未払賞与 → 未払事業費、未払税金、未払賞与' }, //36 p128
                        { questionTitle: '自己株式', content: '純資産の部に加算 → 純資産の部から控除' }, //37 p141
                        { questionTitle: '繰延税金負債', content: '正しい' }, //38
                        { questionTitle: '保険金据置支払金', content: '支払利息に計上 → 本科目（保険金据置支払金）に計上' }, //39 p158
                        { questionTitle: '金融検査', content: '正しい' }, //40
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

            <TestNavigationButtons previous-route="kaikei2021b" next-route="kaikei2020a" />
        </section>
    </SeihoTestLayout>
</template>
