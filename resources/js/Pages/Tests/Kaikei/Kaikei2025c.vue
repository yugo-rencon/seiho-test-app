<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2025年度 フォームC";
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
                    questionTitle="制度会計①"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '財務会計',
                        '株主配当',
                        '財務内容',
                        '有限責任',
                        '利害調整', // 問１〜５
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
                    questionTitle="制度会計②"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '投資家保護',
                        '課税の公平性',
                        '別段の定め',
                        '会計慣行',
                        'サービス', // 問6〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'イ', //7
                        'エ', //8
                        'ク', //9
                        'カ', //10
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
                    questionTitle="決算"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="連結財務諸表の作成手続"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業費"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の決算整理手続"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="純資産勘定の内容"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        '', //p
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
                            // rev: 2026-08-22 確認済み
                            questionTitle: '簿記',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '損益計算書',
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '企業会計原則（一般原則）',
                            content: '',
                        }, //33
                        {
                            questionTitle: '社員配当準備金',
                            content: '',
                        }, //34
                        {
                            questionTitle: '保険業法と会社法',
                            content: '',
                        }, //35
                        {
                            questionTitle: '減価償却',
                            content: '',
                        }, //36
                        {
                            questionTitle: '負債勘定',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険金',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '区分経理',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-22 確認済み
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
                            questionTitle: '帳簿の種類',
                            label: 'エ',
                            content: '売掛金元帳',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '決算スケジュール',
                            label: 'ア',
                            content: '2週間',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '連結決算日',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '外貨預金の為替換算',
                            label: 'ウ',
                            content: '決算時',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '有価証券の評価方法',
                            label: 'ア',
                            content: '売買目的有価証券',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '損益の認識',
                            label: 'イ',
                            content: '実現主義',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険業法第112条評価益',
                            label: 'オ',
                            content: '',
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
            <TestNavigationButtons previous-route="kaikei2025b" next-route="kaikei2024a" />
        </section>
    </SeihoTestLayout>
</template>
