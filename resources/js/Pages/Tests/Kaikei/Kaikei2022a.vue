<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2022年度 フォームA";
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
                    questionTitle="生命保険会計における資産勘定-①"
                    :contents="[
                        '流動',
                        '支払期日の到来した公社債利札',
                        '決算時レート',
                        '投資家',
                        '信託銀行', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'ク', //12
                        'オ', //13
                        'イ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会計における資産勘定-②"
                    :contents="[
                        '法人税法施行令',
                        '加算した',
                        '責任準備金対応',
                        '保険約款',
                        '税効果会計', //問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'ク', //17
                        'エ', //18
                        'イ', //19
                        'コ', //20
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
                    questionTitle="収益に属する科目"
                    :contents="[
                        '発生主義 → 現金主義', //p144
                        '売買目的有価証券を含む → 除く', //p147
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        '本社・支社問わず7年間 → 本社に5年間、支社に3年間', //p180
                        '正しい',
                        '四半期開示について法令上定めれていない → 2008年から努力義務として規定された', //p186
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税務会計"
                    :contents="[
                        '正しい',
                        '正しい',
                        '会計数値の開示や利益計算もその目的としている → 目的としない', //p33-34
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
                    questionTitle="費用に属する科目"
                    :contents="[
                        '解約返戻金に含まれる → その他返戻金に含まれる（契約の無効・取消し・解除による返戻金や前納保険料等の返金）', //p151
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="利源分析"
                    :contents="[
                        '正しい',
                        '危険準備金損益、為替損益 → 責任準備金関係損益、価格変動損益', //p178
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="監査および検査"
                    :contents="[
                        '正しい',
                        '正しい',
                        '4〜5年 → 1～2年程度', //p210
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '会計の役割', content: '正しい' }, //31
                        { questionTitle: '株主資本等変動計算書', content: '正しい' }, //32
                        { questionTitle: '金融商品取引法上の開示書類', content: '有価証券報告書、半期報告書、四半期報告書、臨時報告書（有価証券届出書、目論見書は発行市場における開示書類）' }, //33 p30
                        { questionTitle: '事業年度', content: '正しい' }, //34
                        { questionTitle: 'デリバティブ', content: '正しい' }, //35
                        { questionTitle: '減価償却', content: '有形固定資産の種類にかかわらず方法を選定できる → 種類ごとに選定できる償却の方法が定められている' }, //36 p116
                        { questionTitle: '提供していない役務に対する対価', content: '預り金 → 前受収益' }, //37 p129
                        { questionTitle: '損益の算定', content: '収支相当の原則 → 費用収益対応の原則' }, //38 p143
                        { questionTitle: '区分経理における運用資産の管理', content: '正しい' }, //39
                        { questionTitle: '監査', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'オ', questionTitle: '取引の仕訳', content: '' }, //41
                        { label: 'イ', questionTitle: '財務諸表', content: '損益計算書' }, //42
                        { label: 'ウ', questionTitle: '企業会計の一般原則', content: '保守主義' }, //43
                        { label: 'ア', questionTitle: '消費税', content: '負債' }, //44
                        { label: 'エ', questionTitle: '勘定間取引', content: '純保険料' }, //45
                        { label: 'ウ', questionTitle: '価格変動準備金', content: '金融庁長官' }, //46
                        { label: 'オ', questionTitle: 'ソフトウェア', content: '' }, //47
                        { label: 'ア', questionTitle: '退職給付引当金', content: '期末' }, //48
                        { label: 'イ', questionTitle: '事業費', content: '販売費及び一般管理費' }, //49
                        { label: 'エ', questionTitle: '区分経理', content: '配当率' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2023c" next-route="kaikei2022b" />
        </section>
    </SeihoTestLayout>
</template>
