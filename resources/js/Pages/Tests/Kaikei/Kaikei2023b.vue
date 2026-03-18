<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2023年度 フォームB";
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
                    questionTitle="連結財務諸表の作成手続-①"
                    :contents="[
                        '50%',
                        '意思決定機関',
                        '3ヶ月',
                        '重要な不一致',
                        '親会社', //問11〜15
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
                        '20年', //問16〜20
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
                    questionTitle="複式簿記の原理"
                    :contents="[
                        '契約締結の時点で取引と認識 → 電力供給を受けた時点で取引と認識', //p9-10
                        '正しい',
                        '精算 → 転記', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社法会計"
                    :contents="[
                        '会社の設備投資限度額の算定 → 株主配当の限度額の算定', //p27
                        '正しい',
                        '年4回まで → 回数制限はない', //p29
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
                    questionTitle="資産勘定"
                    :contents="[
                        '有価証券の説明 ↔︎ 商品有価証券の説明', //p107
                        '時価法 → 償却原価法', //p110
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業費"
                    :contents="[
                        '減価償却費や税金等も事業費に含まれる → 事業費に含まれない', //p173
                        '正しい',
                        '決算 → 予算', //p176
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計公準"
                    :contents="[
                        '正しい',
                        '正しい',
                        '円またはドルで評価 → 円で評価', //p7
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
                    questionTitle="純資産勘定の内容"
                    :contents="[
                        '正しい',
                        '正しい',
                        '株式会社 → 相互会社', //p137
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        '縦覧の対象資料に含まれない → 対象資料に含まれる', //p180
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '貸借対照表', content: '正しい' }, //31
                        { questionTitle: '保険料の計上', content: '現金主義 ↔︎ 実現主義' }, //32 p42
                        { questionTitle: '退職給付引当金', content: '正しい' }, //33
                        { questionTitle: '会計に関する事項の標準的な取扱い', content: '金融庁 → 生命保険協会経理委員会' }, //34 p95
                        { questionTitle: '外貨預金の換算', content: '正しい' }, //35
                        { questionTitle: '負債勘定', content: '一般の企業と同様 → 一般の企業と異なる（契約者に対する保険契約準備金が大部分を占めるため）' }, //36 p125
                        { questionTitle: '損益の算定', content: '収支相当の原則 → 費用収益対応の原則' }, //37 p143
                        { questionTitle: '利源分析に関する課題', content: '正しい' }, //38
                        { questionTitle: '区分経理', content: '正しい' }, //39
                        { questionTitle: '監査役による監査', content: '社内監査役 → 社外監査役' }, //40 p206
                        // 問41〜50
                        { label: 'イ', questionTitle: '企業会計の領域', content: '財務会計' }, //41
                        { label: 'ア', questionTitle: '試算表の作成', content: '仕訳帳' }, //42
                        { label: 'エ', questionTitle: '決算', content: '財政状態' }, //43
                        { label: 'ア', questionTitle: '決算スケジュール', content: '2週間' }, //44
                        { label: 'ウ', questionTitle: '無形固定資産', content: '定額法' }, //45
                        { label: 'オ', questionTitle: '貸倒引当金', content: '' }, //46
                        { label: 'オ', questionTitle: '年金', content: '' }, //47
                        { label: 'エ', questionTitle: '法人税及び住民税', content: '税引前当期剰余' }, //48
                        { label: 'イ', questionTitle: '運用資産の管理', content: '資産区分' }, //49
                        { label: 'ウ', questionTitle: '金融検査', content: '自己査定' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2023a" next-route="kaikei2023c" />
        </section>
    </SeihoTestLayout>
</template>
