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
                    questionTitle="連結財務諸表の作成手続-①"
                    :contents="[
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
                        '正しい',
                        '財務会計の説明 ↔︎ 管理会計の説明', //p4
                        '財務会計の説明 ↔︎ 管理会計の説明（財務会計：現在または過去、管理会計：未来）', //p4
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
                    questionTitle="費用に属する科目"
                    :contents="[
                        '分割支払も含まれる → 分割支払いは含めない', //p150
                        '解約返戻金がある → 解約返戻金はない', //p151
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="区分経理における運用資産の管理"
                    :contents="[
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
                        '公認会計士または弁護士 → 公認会計士または公認会計士によって設立された監査法人', //p207
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
                        '正しい',
                        '経営成績と財政状態の概要 → 一定期間の会計取引の合計', //p15-16
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
                    questionTitle="関係法規等"
                    :contents="[
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
                        '正しい',
                        '主体的に取り組めるのは収入管理 → 支出管理', //p175
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '簿記', content: '正しい' }, //31
                        { questionTitle: '開示書類', content: '四半期報告書は開示が求められていない → 開示が求められている' }, //32 p30
                        { questionTitle: '保険金等支払金の計上', content: '各費用勘定で期間修正 → 支払備金・責任準備金で調整' }, //33 p42-43
                        { questionTitle: '決算書類', content: '正しい' }, //34
                        { questionTitle: '保険業法第113条繰延資産', content: '10事業年度の事業費を20年以内に償却 → 5事業年度の事業費を10年以内に償却' }, //35 p122
                        { questionTitle: '価格変動準備金', content: '積立基準や積立限度額は定められていない → 定められている' }, //36 p134
                        { questionTitle: '自己株式', content: '正しい' }, //37
                        { questionTitle: '保険金', content: '正しい' }, //38
                        { questionTitle: '利源分析', content: '危険準備金損益、為替損益 → 責任準備金関係損益、価格変動損益' }, //39 p178
                        { questionTitle: '区分経理への反映', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '帳簿の種類', label: 'エ', content: '売掛金元帳' }, //41
                        { questionTitle: '企業会計原則の一般原則', label: 'ア', content: '明瞭性' }, //42
                        { questionTitle: '勘定間取引', label: 'イ', content: '純保険料' }, //43
                        { questionTitle: '貸倒引当金の計上', label: 'オ', content: '' }, //44
                        { questionTitle: 'ソフトウェア', label: 'ウ', content: '定額法' }, //45
                        { questionTitle: 'その他負債', label: 'ウ', content: '有形' }, //46
                        { questionTitle: '損失填補準備金', label: 'エ', content: '1,000分の3' }, //47
                        { questionTitle: '保険料', label: 'イ', content: '未収保険料' }, //48
                        { questionTitle: '事業費', label: 'オ', content: '' }, //49
                        { questionTitle: '企業が受ける検査', label: 'ア', content: '税務調査' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2021c" next-route="kaikei2020b" />
        </section>
    </SeihoTestLayout>
</template>
