<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2024年度 フォームA";
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
                        '固定資産', // 問１〜５
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
                    questionTitle="会計公準"
                    :contents="[
                        '企業実体の公準 → 継続企業の公準', //p6
                        '継続企業の公準 → 企業実体の公準', //p6
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        '企業内部関係者 → 株主、債権者などの外部利害関係者', //p9
                        '契約締結の時点で取引と認識 → 電力供給を受けた時点で取引と認識', //p9-10
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
                    questionTitle="保険契約準備金"
                    :contents="[
                        '費用勘定も修正する → 費用勘定そのものの修正は行わない', //p39
                        '正しい',
                        '50%以上 → 20%以上', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="有価証券の評価方法"
                    :contents="[
                        '償却原価法 → 時価法', //p110
                        '正しい',
                        '時価法 → 償却原価法', //p110
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="勘定科目"
                    :contents="[
                        '土地、長期貸付金等は、資産勘定のうち固定資産', //p13
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社法会計"
                    :contents="[
                        '正しい',
                        '正しい',
                        '旧商法と同様に年2回まで → 旧商法と異なり回数制限はない', //p29
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
                    questionTitle="金融検査と税務調査"
                    :contents="[
                        '国税庁 → 金融庁', //p209
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
                        { questionTitle: '会計の意義', content: '管理会計の説明 ↔︎ 財務会計の説明（財務会計：現在または過去、管理会計：未来）' }, //31 p4
                        { questionTitle: '貸借対照表', content: '正しい' }, //32
                        { questionTitle: '企業会計原則（一般原則）', content: '明瞭性の原則 → 資本取引・損益取引区分の原則' }, //33 p25
                        { questionTitle: '決算の目的', content: ' 実現主義 → 現金主義<br>現金主義 → 発生主義' }, //34 p49
                        { questionTitle: '保険業法と会社法', content: '正しい' }, //35
                        { questionTitle: '代理店貸', content: '正しい' }, //36
                        { questionTitle: '負債勘定', content: '正しい' }, //37
                        { questionTitle: '法人税及び住民税', content: '他の税金と合算 → 他の税金と区別' }, //38 p164
                        { questionTitle: '区分経理における運用資産の管理', content: '正しい' }, //39
                        { questionTitle: '会計監査人による監査', content: '期中監査の説明 ↔︎ 決算監査の説明' }, //40 p208
                        // 問41〜50
                        { label: 'ウ', questionTitle: '帳簿の種類', content: '買掛金元帳' }, //41
                        { label: 'エ', questionTitle: '財務諸表', content: '経営成績' }, //42
                        { label: 'ア', questionTitle: '法人税法', content: '課税の公平性' }, //43
                        { label: 'ア', questionTitle: '決算スケジュール', content: '2週間' }, //44
                        { label: 'エ', questionTitle: '連結決算', content: 'のれん（連結調整勘定）' }, //45
                        { label: 'ウ', questionTitle: '外貨預金の為替換算', content: '決算時' }, //46
                        { label: 'オ', questionTitle: '退職給付引当金', content: '' }, //47
                        { label: 'イ', questionTitle: '公告', content: '損益計算書' }, //48
                        { label: 'オ', questionTitle: '区分経理', content: '' }, //49
                        { label: 'イ', questionTitle: '保険業法第112条評価益', content: '評価替え' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="kaikei2024b" />
        </section>
    </SeihoTestLayout>
</template>
