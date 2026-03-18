<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2022年度 フォームB";
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
                    questionTitle="保険契約準備金-①"
                    :contents="[
                        '洗替方式',
                        '費用',
                        '標準',
                        '除く',
                        '最低額', // 問１〜５
                    ]"
                    :labels="[
                        'エ', //1
                        'コ', //2
                        'カ', //3
                        'ウ', //4
                        'ケ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約準備金-②"
                    :contents="[
                        '未経過',
                        '危険',
                        '内部留保',
                        '純保険料式',
                        '20%', //問６〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'ウ', //7
                        'イ', //8
                        'コ', //9
                        'キ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会計における収益に属する科目-①"
                    :contents="[
                        '現金',
                        '未収保険料',
                        '前納保険料',
                        '費用収益対応',
                        '全額', //問11〜15
                    ]"
                    :labels="[
                        'オ', //11
                        'キ', //12
                        'エ', //13
                        'イ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会計における収益に属する科目-②"
                    :contents="[
                        '売買目的',
                        '発生',
                        '保険金受取人',
                        '評価換え',
                        '内閣総理大臣', //問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'エ', //17
                        'イ', //18
                        'ク', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則"
                    :contents="[
                        '正しい',
                        '一般原則が補足する → 企業会計原則注解が補足する', //p24
                        '真実性の原則 → 正規の簿記の原則', //p24-25
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        '契約締結の時点で取引と認識 → 電力供給を受けた時点で取引と認識', //p9-10
                        '正しい',
                        '元帳の締切 → 転記', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="連結財務諸表の作成手続"
                    :contents="[
                        '従来の説明 ↔︎ 現在の説明（従来：形式基準（議決権50%超）、現在：実質基準（支配関係））', //p81
                        '未実現損益は消去する必要はない → 全額を消去する', //p83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会計における負債勘定"
                    :contents="[
                        '一般の企業と同様 → 一般の企業と異なる（契約者に対する保険契約準備金が大部分を占めるため）', //p125
                        '正しい',
                        '積立基準や積立限度額は定められていない → 定められている', //p134
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計監査人による監査"
                    :contents="[
                        '正しい',
                        '取締役会により選任 → 株主総会（相互会社では総代会）により選任', //p208
                        '期中監査の説明 ↔︎ 決算監査の説明', //p208
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
                    questionTitle="純資産勘定の内容"
                    :contents="[
                        '正しい',
                        '正しい',
                        '税効果相当額を加算 → 税効果相当額を控除', //p139
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
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
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の決算整理手続"
                    :contents="[
                        '金融庁 → 各生命保険会社', //p51
                        '正しい',
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
                        { questionTitle: '会計の意義', content: '正しい' }, //31
                        { questionTitle: '株主資本等変動計算書', content: '正しい' }, //32
                        { questionTitle: '単一性の原則', content: '正しい' }, //33
                        { questionTitle: '計算書類', content: '株式会社 → 相互会社（剰余金処分に関する議案を作成）' }, //34 p56-57
                        { questionTitle: 'デリバティブ', content: '正しい' }, //35
                        { questionTitle: '有価証券の取得価額', content: '購入手数料その他購入するために要した費用は含めない → 含める' }, //36 p109
                        { questionTitle: '貸倒引当金', content: '損金に算入される → 損金に算入されない' }, //37 p125
                        { questionTitle: '代理店借', content: '債権額 → 債務額' }, //38 p126
                        { questionTitle: '区分経理における運用資産の管理', content: '正しい' }, //39
                        { questionTitle: '利源分析に関する課題', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'オ', questionTitle: '取引の仕訳', content: '' }, //41
                        { label: 'イ', questionTitle: '帳簿の種類', content: '補助記入帳' }, //42
                        { label: 'エ', questionTitle: '連結決算', content: 'のれん（連結調整勘定）' }, //43
                        { label: 'ア', questionTitle: '消費税', content: '負債' }, //44
                        { label: 'ウ', questionTitle: '外貨預金の為替換算', content: '固定' }, //45
                        { label: 'ウ', questionTitle: '再評価積立金', content: '相互会社だけに' }, //46
                        { label: 'イ', questionTitle: '年金', content: '団体年金' }, //47
                        { label: 'ア', questionTitle: '退職給付引当金', content: '期末' }, //48
                        { label: 'オ', questionTitle: '区分経理', content: '' }, //49
                        { label: 'ウ', questionTitle: '企業が受ける検査', content: '国税通則法' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2022a" next-route="kaikei2022c" />
        </section>
    </SeihoTestLayout>
</template>
