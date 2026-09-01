<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2025年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則①"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '客観性',
                        '会計慣習',
                        '注解',
                        '報告',
                        '処理', // 問１〜５
                    ]"
                    :labels="[
                        'ク', //1
                        'カ', //2
                        'ア', //3
                        'ウ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則②"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '真実性',
                        '正規の簿記',
                        '保守主義',
                        '単一性',
                        '株主総会', // 問6〜10
                    ]"
                    :labels="[
                        'イ', //6
                        'ケ', //7
                        'ク', //8
                        'カ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計監査人による監査①"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '公認会計士',
                        '監査法人',
                        '株主総会（相互会社にあっては総代会）',
                        '会社法',
                        '取締役', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'ク', //12
                        'コ', //13
                        'ア', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計監査人による監査②"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '決算',
                        '取引記録',
                        '財務諸表',
                        '支社',
                        '有価証券', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'ア', //17
                        'カ', //18
                        'エ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計公準"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '企業実体の公準 → 継続企業の公準', //p6
                        '継続企業の公準 → 企業実体の公準', //p6
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '貸借対照表 → 損益計算書', //p18
                        '損益計算書 → 貸借対照表', //p19
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '任意積立金 → 払戻積立金', //p40
                        '危険準備金は、法人税法上は利益性の内部留保との立場から、[[損金とはならない]]。', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="有価証券の評価方法"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '時価法 → 償却原価法', //p110
                        '時価法 → 償却原価法', //p110
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業費の分類"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '維持費の人件費 → 新契約費の営業職員経費', //p170
                        '新契約費の人件費 → 維持費の人件費', //p172
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '取引の８要素の原理 → 貸借平均の原理', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社法会計"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '正しい',
                        '株主配当については、旧商法では企業が株主へ配当を行うのは年２回までに制限されていたが、[[会社法では株主総会の決議があればいつでも配当を出すことが可能]]となった。', //p29
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
                    questionTitle="生命保険会計における費用に属する科目"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '「年金」に含まれる → 「給付金」に含まれる（個人年金の年金一括支払額・中途脱退一時金）', //p150-151
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '2000年度（平成12年度）決算からキャッシュ・フロー計算書が[[縦覧の対象資料に付け加えられている]]。', //p180
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '簿記',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '決算',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-09-01 確認済み
                            questionTitle: '企業会計原則（一般原則）',
                            content: '明瞭性の原則 → 資本取引・損益取引区分の原則', //p25
                        }, //33
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '保険金等支払金の計上',
                            content: '当期において支払事由が発生し未支払となっているもの、また前年度において支払事由が発生し未支払の処理を行ったものについては、[[各勘定の期間修正を行うべきであるが、生命保険会計では行わず、支払備金・責任準備金で、期間修正を行い発生主義に修正することとしている]]。', //p42-43
                        }, //34
                        {
                            questionTitle: '連結財務諸表',
                            content: '',
                        }, //35
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '資産勘定の内容',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '期間帰属の差異',
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '自己株式',
                            content: '',
                        }, //38
                        {
                            questionTitle: '法人税及び住民税',
                            content: '',
                        }, //39
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '金融検査',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '企業会計の領域',
                            label: 'エ',
                            content: '管理会計',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '試算表の作成',
                            label: 'ア',
                            content: '仕訳帳',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '勘定間取引',
                            label: 'エ',
                            content: '危険保険料',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '決算スケジュール',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '連結決算',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '生命保険会計における負債勘定',
                            label: 'ア',
                            content: '仮受金',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '勘定体系',
                            label: 'ウ',
                            content: '保険契約準備金',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険料',
                            label: 'イ',
                            content: '未収保険料',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '事業費',
                            label: 'ウ',
                            content: '物件費',
                        }, //49
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '運用資産の管理',
                            label: 'イ',
                            content: '資産区分',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="kaikei2025a" next-route="kaikei2025c" />
        </section>
    </SeihoTestLayout>
</template>
