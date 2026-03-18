<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2024年度 フォームC";
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
                    questionTitle="生命保険会計における収益に属する科目-①"
                    :contents="[
                        '現金',
                        '未収保険料',
                        '前納保険料',
                        '費用収益対応',
                        '全額', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'キ', //2
                        'エ', //3
                        'イ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会計における収益に属する科目-②"
                    :contents="[
                        '売買目的',
                        '発生',
                        '保険金受取人',
                        '評価替え',
                        '内閣総理大臣', // 問6〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'エ', //7
                        'イ', //8
                        'ク', //9
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
                        '退職給付引当金繰入額', // 問11〜15
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
                    questionTitle="試算表の作成"
                    :contents="[
                        '総勘定元帳から仕訳帳 → 仕訳帳から総勘定元帳', //p15
                        '2つに区分 → 3つに区分（合計試算表、残高試算表、合計残高試算表）', //p15-16
                        '正しい',
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
                    questionTitle="責任準備金"
                    :contents="[
                        '正しい',
                        '保険料勘定の修正を行う → 修正は行わない', //p40
                        '全額損金算入が認められている → 損金とはならない', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
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
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計公準"
                    :contents="[
                        '分離することができない → 所有者の財産と分離することができる', //p6
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則（一般原則）"
                    :contents="[
                        '正しい',
                        '保守主義の原則 → 継続性の原則', //p26
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
                    questionTitle="生命保険会計における費用に属する科目"
                    :contents="[
                        '正しい',
                        '年金に含まれる → 給付金に含まれる（年金一括支払額・中途脱退一時金）', //p150-151
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        '正しい',
                        '正しい',
                        '縦覧の対象外 → 縦覧の対象', //p180
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '会計の意義', content: '管理会計の説明 ↔︎ 財務会計の説明（財務会計：現在または過去、管理会計：未来）' }, //31 p4
                        { questionTitle: '損益計算書', content: '正しい' }, //32
                        { questionTitle: '金融商品取引法上の開示書類', content: '有価証券報告書、半期報告書、四半期報告書、臨時報告書（有価証券届出書、目論見書は発行市場における開示書類）' }, //33 p30
                        { questionTitle: '社員配当準備金', content: '10%以上 → 20%以上' }, //34 p41
                        { questionTitle: '退職給付引当金', content: '正しい' }, //35
                        { questionTitle: '外貨預金の換算', content: '正しい' }, //36
                        { questionTitle: '保険金据置支払金', content: '支払利息に計上 → 本科目（保険金据置支払金）に計上' }, //37 p158
                        { questionTitle: '法人税及び住民税', content: '他の税金と合算 → 他の税金と区別' }, //38 p164
                        { questionTitle: '区分経理における運用資産の管理', content: '正しい' }, //39
                        { questionTitle: '監査', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'ウ', questionTitle: '帳簿の種類', content: '買掛金元帳' }, //41
                        { label: 'オ', questionTitle: '株主資本等変動計算書', content: '' }, //42
                        { label: 'ア', questionTitle: '消費税', content: '負債' }, //43
                        { label: 'エ', questionTitle: '勘定間取引', content: '純保険料' }, //44
                        { label: 'エ', questionTitle: '会計に関する法律', content: '保険業法' }, //45
                        { label: 'ウ', questionTitle: '無形固定資産', content: '定額法' }, //46
                        { label: 'イ', questionTitle: '損益の認識', content: '実現主義' }, //47
                        { label: 'イ', questionTitle: '公告', content: '損益計算書' }, //48
                        { label: 'オ', questionTitle: '区分経理', content: '' }, //49
                        { label: 'ア', questionTitle: '企業が受ける検査', content: '税務調査' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2024b" next-route="kaikei2023a" />
        </section>
    </SeihoTestLayout>
</template>
