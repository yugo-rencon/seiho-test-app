<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2020年度 フォームA";
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
                    questionTitle="連結財務諸表の作成手続-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '50%',
                        '意思決定機関',
                        '3ヶ月',
                        '重要な不一致',
                        '親会社', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'オ', //12
                        'カ', //13
                        'イ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="連結財務諸表の作成手続-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '外貨建取引等会計処理基準',
                        '収益・費用',
                        '持分法',
                        '株主資本',
                        '20年', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'オ', //17
                        'カ', //18
                        'ウ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計の意義"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '財務会計 ↔︎ 管理会計', //p4
                        '[[財務会計]]が現在または過去の企業の情報提供を主目的としているのに対して、[[管理会計]]は未来の予測効果を重要視している点に特色がある。', //p4
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
                    questionTitle="費用に属する科目"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '年金特約によらない保険金の単なる分割支払は[[含めない]]。', //p150
                        '団体定期保険、消費者信用団体生命保険、医療保障保険等の保険期間1年の掛け捨ての契約については[[解約返戻金はない]]。', //p151
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="区分経理における運用資産の管理"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '資産分別管理方式 → 資産持分管理方式（マザーファンド方式）', //p190
                        '正しい',
                        '資産持分管理方式（マザーファンド方式） → 資産分別管理方式', //p190
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
                    questionTitle="試算表と精算表"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '正しい',
                        '経営成績と財政状態の概要を表わす → 一定期間の会計取引の合計を表わす', //p15-16
                        '正しい',
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
                    questionTitle="関係法規等"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '正しい',
                        '日本公認会計士協会 → 生命保険協会経理委員会', //p95
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産勘定"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        'その他有価証券 → 責任準備金対応債権', //p110
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="費差損益管理と事業費管理"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '収入管理と支出管理を比較すれば、経営としてより主体的に取り組めるのは[[支出管理]]である。', //p175
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
                            questionTitle: '簿記',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-09-03 確認済み
                            questionTitle: '開示書類',
                            content: '四半期報告書は開示が求められていない → 開示が求められている', //p30
                        }, //32
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '保険金等支払金の計上',
                            content: '当期において支払事由が発生し未支払となっているもの、また前年度において支払事由が発生し未支払の処理を行ったものについては、[[各勘定の期間修正を行うべきであるが、生命保険会計では行わず、支払備金・責任準備金で、期間修正を行い発生主義に修正することとしている]]。', //p42-43
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '決算書類',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-09-03 確認済み
                            questionTitle: '保険業法第113条繰延資産',
                            content: '10事業年度の事業費を20年以内に償却 → 5事業年度の事業費を10年以内に償却', //p122
                        }, //35
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '価格変動準備金',
                            content: '積立基準や積立限度額は定められていない → 定められている', //p134
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '自己株式',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険金',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-09-03 確認済み
                            questionTitle: '利源分析',
                            content: '損益分類は「死差損益」「利差損益」「費差損益」の三損益（三大利源）を中心として、これに「[[責任準備金関係損益]]」「[[価格変動損益]]」「その他の損益」を加え、全体を６個の損益としている。', //p178
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '区分経理への反映',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '帳簿の種類',
                            label: 'エ',
                            content: '売掛金元帳',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '企業会計原則の一般原則',
                            label: 'ア',
                            content: '明瞭性',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '勘定間取引',
                            label: 'イ',
                            content: '純保険料',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '貸倒引当金の計上',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ソフトウェア',
                            label: 'ウ',
                            content: '定額法',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'その他負債',
                            label: 'ウ',
                            content: '有形',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '損失填補準備金',
                            label: 'エ',
                            content: '1,000分の3',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険料',
                            label: 'イ',
                            content: '未収保険料',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '事業費',
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

            <TestNavigationButtons previous-route="kaikei2021c" next-route="kaikei2020b" />
        </section>
    </SeihoTestLayout>
</template>
