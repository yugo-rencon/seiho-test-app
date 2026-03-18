<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2020年度 フォームC";
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
                        '総勘定元帳',
                        '期末棚卸',
                        '保有目的',
                        '売掛金',
                        '固定資産', // 問1〜5
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
                    questionTitle="決算整理手続-②"
                    :contents="[
                        '前払費用',
                        '未払費用',
                        '未収収益',
                        '元帳の締切',
                        '純資産勘定', // 問6〜10
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
                    questionTitle="事業費管理-①"
                    :contents="[
                        '付加保険料',
                        '維持費',
                        '募集機関',
                        '保険料払込案内費',
                        '退職給付引当金', // 問11〜15
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
                    questionTitle="事業費管理-②"
                    :contents="[
                        '死亡率',
                        '利源分析',
                        '6',
                        '拡大',
                        '支出管理', // 問16〜20
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
                    questionTitle="会計公準"
                    :contents="[
                        '企業実体の公準 → 継続企業の公準', //p6
                        '継続企業の公準 → 企業実体の公準', //p6
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :contents="[
                        '正しい',
                        '保険料勘定の修正を行う → 修正は行わない', //p40
                        '全額損金算入が認められている → 損金とはならない', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則"
                    :contents="[
                        '正しい',
                        '法令により強制されている → 法令ではなく会計慣習', //p24
                        '一般原則 ↔︎ 損益計算書原則および貸借対照表原則', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="有価証券の評価方法"
                    :contents="[
                        '償却原価法 → 時価法', //p110
                        '正しい',
                        '時価法 → 償却原価法', //p110
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計監査人による監査"
                    :contents="[
                        '公認会計士または弁護士 → 公認会計士または公認会計士によって設立された監査法人', //p207
                        '取締役会により選任 → 株主総会（相互会社では総代会）により選任', //p208
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="勘定科目"
                    :contents="[
                        '正しい',
                        '正しい',
                        '収益勘定 → 費用勘定', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="税務会計"
                    :contents="[
                        '会計情報の開示という機能が含まれているという点で同じ → 含まれていないという点で異なる', //p32
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="連結財務諸表"
                    :contents="[
                        '正しい',
                        '正しい',
                        '従来の説明 ↔︎ 現在の説明（従来：形式基準（議決権50%超）、現在：実質基準（支配関係））', //p81
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="負債勘定の内容"
                    :contents="[
                        '買入代金の未支払金額は含まれない → 含まれる', //p127
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
                        '正しい',
                        '保険金据置支払金 → 支払利息', //p153
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '取引の認識', content: '正しい' }, //31
                        { questionTitle: '開示書類', content: '四半期報告書は開示が求められていない → 開示が求められている' }, //32 p30
                        { questionTitle: '保険金等支払金の計上', content: '各費用勘定で期間修正 → 支払備金・責任準備金で調整' }, //33 p42-43
                        { questionTitle: '企業会計原則（一般原則）', content: '明瞭性の原則 → 資本取引・損益取引区分の原則' }, //34 p25
                        { questionTitle: '退職給付引当金', content: '正しい' }, //35
                        { questionTitle: '計算書類', content: '株式会社 → 相互会社（剰余金処分に関する議案を作成）' }, //36 p56-57
                        { questionTitle: '外貨預金の換算', content: '正しい' }, //37
                        { questionTitle: '保険金', content: '正しい' }, //38
                        { questionTitle: '負債勘定', content: '正しい' }, //39
                        { questionTitle: '計算書類の公告', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '企業会計の領域', label: 'イ', content: '財務会計' }, //41
                        { questionTitle: '財務諸表', label: 'オ', content: '' }, //42
                        { questionTitle: '株主配当', label: 'エ', content: 'いつでも' }, //43
                        { questionTitle: '勘定間取引', label: 'ウ', content: '平準保険料' }, //44
                        { questionTitle: 'ソフトウェア', label: 'ウ', content: '定額法' }, //45
                        { questionTitle: '決算スケジュール', label: 'イ', content: '2週間' }, //46
                        { questionTitle: '利益準備金', label: 'オ', content: '' }, //47
                        { questionTitle: '保険料', label: 'イ', content: '未収保険料' }, //48
                        { questionTitle: '区分経理', label: 'オ', content: '' }, //49
                        { questionTitle: '企業が受ける検査', label: 'ア', content: '税務調査' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2020b" />
        </section>
    </SeihoTestLayout>
</template>
