<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2023年度 フォームC";
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
                    questionTitle="事業費管理-①"
                    :contents="[
                        '付加保険料',
                        '維持費',
                        '募集機関',
                        '福利厚生',
                        '退職給付引当金繰入額', //問11〜15
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
                        '支出管理', //問16〜20
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
                    questionTitle="複式簿記の原理"
                    :contents="[
                        '内部関係者 → 株主、債権者などの外部利害関係者', //p9
                        '正しい',
                        '精算表 → 総勘定元帳', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表"
                    :contents="[
                        '貸借対照表 → 損益計算書', //p18-19
                        '損益計算書 → 貸借対照表', //p18-19
                        '正しい',
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
                    questionTitle="連結財務諸表の作成手続"
                    :contents="[
                        '従来の説明 ↔︎ 現在の説明（従来：形式基準（議決権50%超）、現在：実質基準（支配関係））', //p81
                        '未実現損益は消去しない → 全額を消去する', //p83
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
                    questionTitle="決算"
                    :contents="[
                        '正しい',
                        '残高試算表 → 合計試算表', //p15
                        '正しい',
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
                    questionTitle="費用に属する科目"
                    :contents="[
                        '解約返戻金に含まれる → その他返戻金に含まれる（契約の無効・取消し・解除による返戻金や前納保険料等の返金）', //p151
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="年度途中の資金移動の区分経理への反映"
                    :contents="[
                        '正しい',
                        '正しい',
                        '資産区分 → 商品区分', //p193
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '会計公準', content: '株主実体の公準 → 企業実体の公準' }, //31 p6-7
                        { questionTitle: '帳簿の種類', content: '正しい' }, //32
                        { questionTitle: '退職給付引当金', content: '正しい' }, //33
                        { questionTitle: '連結決算', content: '正しい' }, //34
                        { questionTitle: '外貨預金の換算', content: '正しい' }, //35
                        { questionTitle: '貸倒引当金', content: '損金に算入される → 損金に算入されない' }, //36 p125
                        { questionTitle: '費用に属する科目', content: 'その他返戻金 → 給付金' }, //37 p150
                        { questionTitle: '計算書類の公告', content: '会社法施行規則 → 保険業法施行規則' }, //38 p181
                        { questionTitle: '区分経理', content: '正しい' }, //39
                        { questionTitle: '会計監査人による監査', content: '取締役会により選任 → 株主総会（相互会社では総代会）により選任<br>結果を取締役会に報告 → 結果を取締役および監査役に報告' }, //40 p208
                        // 問41〜50
                        { label: 'イ', questionTitle: '企業会計の領域', content: '財務会計' }, //41
                        { label: 'オ', questionTitle: '開示書類', content: '' }, //42
                        { label: 'エ', questionTitle: '保険会社向けの総合的な監督指針', content: '事務ガイドライン' }, //43
                        { label: 'ア', questionTitle: '有価証券の評価方法', content: '売買目的有価証券' }, //44
                        { label: 'ウ', questionTitle: '無形固定資産', content: '定額法' }, //45
                        { label: 'ア', questionTitle: '生命保険会計における負債勘定', content: '借受金' }, //46
                        { label: 'オ', questionTitle: '勘定体系', content: '' }, //47
                        { label: 'イ', questionTitle: '損益の認識', content: '実現主義' }, //48
                        { label: 'エ', questionTitle: '利息及び配当金等収入', content: '不動産賃貸料' }, //49
                        { label: 'ウ', questionTitle: '金融検査', content: '自己査定' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2023b" next-route="kaikei2022a" />
        </section>
    </SeihoTestLayout>
</template>
