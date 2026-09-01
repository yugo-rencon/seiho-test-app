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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-09-01 確認済み
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
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '保険料勘定の修正を行う → 保険料勘定そのものの修正は行わない', //p40
                        '危険準備金は、法人税法上は利益性の内部留保との立場から、[[損金とはならない]]。', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '「企業会計原則」は広く企業会計実務の多様性・可変性を維持し、[[法令ではなく、一般に公正妥当と認められるものを要約した会計慣習]]として定められている。', //p24
                        '[[損益計算書原則および貸借対照表原則]]は、主に会計情報の報告に主点をおく、いわゆる「報告原則」としての色彩が強いが、[[一般原則]]は報告のみならず、その基礎となる記録、測定といった「処理原則」の性格を併せ持っている。', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="有価証券の評価方法"
                    :contents="[
                        // rev: 2026-09-02 確認済み
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
                        // rev: 2026-09-02 確認済み
                        '会計監査人は、会社と直接利害関係のない公認会計士または[[公認会計士によって設立された監査法人]]でなければならないとされ、高度の専門的知識を有する職業監査人の監査を義務付けている。', //p208
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
                        // rev: 2026-09-02 確認済み
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
                        // rev: 2026-09-01 確認済み
                        '会計情報の開示という機能はその中に[[含まれていない]]という点で、会社法・金融商品取引法に基づく会計とは[[異なっている]]。', //p32
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
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '正しい',
                        '従来連結子会社及び子法人等の範囲は議決権の所有割合（50％超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。', //p81
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
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '取引の認識',
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '開示書類',
                            content: '四半期報告書は開示が求められていない → 開示が求められている',
                        }, //32 p30
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '保険金等支払金の計上',
                            content: '当期において支払事由が発生し未支払となっているもの、また前年度において支払事由が発生し未支払の処理を行ったものについては、[[各勘定の期間修正を行うべきであるが、生命保険会計では行わず、支払備金・責任準備金で、期間修正を行い発生主義に修正することとしている]]。', //p42-43
                        }, //33
                        {
                            // rev: 2026-09-01 確認済み
                            questionTitle: '企業会計原則（一般原則）',
                            content: '明瞭性の原則 → 資本取引・損益取引区分の原則', //p25
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '退職給付引当金',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '計算書類',
                            content: '株式会社 → 相互会社（剰余金処分に関する議案を作成）',
                        }, //36 p56-57
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '外貨預金の換算',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険金',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '負債勘定',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '計算書類の公告',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '企業会計の領域',
                            label: 'イ',
                            content: '財務会計',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財務諸表',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株主配当',
                            label: 'エ',
                            content: 'いつでも',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '勘定間取引',
                            label: 'ウ',
                            content: '平準保険料',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ソフトウェア',
                            label: 'ウ',
                            content: '定額法',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '決算スケジュール',
                            label: 'イ',
                            content: '2週間',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '利益準備金',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険料',
                            label: 'イ',
                            content: '未収保険料',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '区分経理',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '企業が受ける検査',
                            label: 'ア',
                            content: '税務調査',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2020b" />
        </section>
    </SeihoTestLayout>
</template>
