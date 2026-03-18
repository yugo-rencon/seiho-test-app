<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2023年度 フォームA";
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
                    questionTitle="企業会計原則-①"
                    :contents="[
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
                    questionTitle="企業会計原則-②"
                    :contents="[
                        '真実性',
                        '資本取引・損益取引区分',
                        '資本剰余金',
                        '保守主義',
                        '単一性', //問６〜10
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
                    questionTitle="損益勘定-①"
                    :contents="[
                        '認識',
                        '実現主義',
                        '発生主義',
                        '費用収益対応',
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
                    questionTitle="会計公準"
                    :contents="[
                        '所有者と結合した → 所有者と分離した', //p6
                        '正しい',
                        '円またはドルで評価 → 円で評価', //p7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="決算"
                    :contents="[
                        '試算表 → 精算表', //p16
                        '正しい',
                        '仕訳帳の作成 → 決算整理', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :contents="[
                        '正しい',
                        '任意積立金 → 払戻積立金', //p40
                        '全額損金算入が認められている → 損金とはならない', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
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
                    :questionNumber="25"
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
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        '正しい',
                        '正しい',
                        '精算帳 → 総勘定元帳', //p12
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
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        '正しい',
                        '保険料及び責任準備金の算出方法書 → 事業方法書', //p44
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産勘定の内容"
                    :contents="[
                        '有価証券の説明 ↔︎ 商品有価証券の説明', //p107
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="利源分析"
                    :contents="[
                        '正しい',
                        '危険準備金損益、為替損益 → 責任準備金関係損益、価格変動損益', //p178
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '損益計算書', content: '正しい' }, //31
                        { questionTitle: '保険金等支払金の計上', content: '各費用勘定で期間修正 → 支払備金・責任準備金で調整' }, //32 p42-43
                        { questionTitle: '退職給付引当金', content: '正しい' }, //33
                        { questionTitle: '保険業法と会社法', content: '株式会社：保険業法 → 会社法<br>相互会社：会社法 → 保険業法' }, //34 p94
                        { questionTitle: '外貨預金の換算', content: '正しい' }, //35
                        { questionTitle: '繰延税金資産', content: '税務上繰越利益剰余金等 → 税務上繰越欠損等<br>損益計算書に計上 → 貸借対照表に計上' }, //36 //p123
                        { questionTitle: '自己株式', content: '純資産の部に加算 → 純資産の部から控除' }, //37 p141
                        { questionTitle: '法人税及び住民税', content: '他の税金と合算 → 他の税金と区別' }, //38 p164
                        { questionTitle: '区分経理', content: '正しい' }, //39
                        { questionTitle: '監査', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'イ', questionTitle: '企業会計の領域', content: '財務会計' }, //41
                        { label: 'エ', questionTitle: '帳簿の種類', content: '売掛金元帳' }, //42
                        { label: 'オ', questionTitle: '株主配当', content: '' }, //43
                        { label: 'ア', questionTitle: '連結子会社及び子法人等の範囲', content: '意思決定期間' }, //44
                        { label: 'ウ', questionTitle: '無形固定資産', content: '定額法' }, //45
                        { label: 'イ', questionTitle: '保険業法第112条評価益', content: '評価換え' }, //46
                        { label: 'オ', questionTitle: '解約返戻金', content: '' }, //47
                        { label: 'ア', questionTitle: '事業費', content: '販売費及び一般管理費' }, //48
                        { label: 'イ', questionTitle: '公告', content: '損益計算書' }, //49
                        { label: 'ウ', questionTitle: '金融検査', content: '自己査定' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2024c" next-route="kaikei2023b" />
        </section>
    </SeihoTestLayout>
</template>
