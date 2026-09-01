<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2025年度 フォームA";
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
                    questionTitle="損益勘定①"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '認識',
                        '実現主義',
                        '発生主義',
                        '費用収益対応',
                        '前者', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'ア', //2
                        'ク', //3
                        'ウ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="損益勘定②"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '売上高',
                        '付加保険料',
                        '現金主義',
                        '未収保険料',
                        '責任準備金', // 問6〜10
                    ]"
                    :labels="[
                        'ク', //6
                        'カ', //7
                        'イ', //8
                        'オ', //9
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
                    questionTitle="決算"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '精算表 → 試算表', //p15
                        '元帳の締切 → 決算整理', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社法会計"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '株主の出資限度額の算定 → 株主配当の限度額の算定', //p27
                        '正しい',
                        '株主配当については、旧商法では企業が株主へ配当を行うのは年２回までに制限されていたが、[[会社法では株主総会の決議があればいつでも配当を出すことが可能]]となった。', //p29
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
                    questionTitle="事業費の分類"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
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
                    questionTitle="税務会計"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="費用に属する科目（解約返戻金）"
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
                            // rev: 2026-08-29 確認済み
                            questionTitle: '簿記',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '株主資本等変動計算書',
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '企業会計原則（一般原則）',
                            content: '',
                        }, //33
                        {
                            questionTitle: '決算処理',
                            content: '',
                        }, //34
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '保険契約準備金の繰入',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '有価証券の取得価額',
                            content: '',
                        }, //36
                        {
                            questionTitle: '代理店借',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '繰延税金負債',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '利源分析に関する課題',
                            content: '正しい',
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
                            questionTitle: '財務諸表',
                            label: 'イ',
                            content: '損益計算書',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '開示書類',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '危険準備金',
                            label: 'ア',
                            content: '収益性',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '価格変動準備金',
                            label: 'ウ',
                            content: '金融庁長官',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '有価証券の評価方法',
                            label: 'ア',
                            content: '売買目的有価証券',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '引当金',
                            label: 'エ',
                            content: '未認識過去勤務費用',
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
            <TestNavigationButtons next-route="kaikei2025b" />
        </section>
    </SeihoTestLayout>
</template>
