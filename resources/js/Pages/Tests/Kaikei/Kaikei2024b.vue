<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2024年度 フォームB";
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
                        '20%', // 問6〜10
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
                    questionTitle="勘定科目"
                    :contents="[
                        '仕訳帳 → 総勘定元帳', //p12
                        '正しい',
                        '土地、長期貸付金等は、資産勘定のうち固定資産', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表"
                    :contents="[
                        '貸借対照表 → 損益計算書', //p18
                        '損益計算書 → 貸借対照表', //p19
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
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        '2勘定 → 4勘定（資産勘定、負債勘定、費用勘定、収益勘定）', //p43-44
                        '算出方法書 → 事業方法書', //p44
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産勘定の内容"
                    :contents="[
                        '正しい',
                        '取得原価 → 償却原価法', //p110
                        '資産の部の控除項目 ↔︎ 負債の部に計上', //p124
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="決算"
                    :contents="[
                        '正しい',
                        '精算表 → 試算表', //p15
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
                        { questionTitle: '簿記', content: '経営者、従業員などの内部利害関係者 → 株主、債権者などの外部利害関係者' }, //32 p9
                        { questionTitle: '単一性の原則', content: '正しい' }, //33
                        { questionTitle: '保険金等支払金の計上', content: '正しい' }, //34
                        { questionTitle: '決算書類', content: '正しい' }, //35
                        { questionTitle: '減価償却', content: '有形固定資産の種類にかかわらず方法を選定できる → 種類ごとに選定できる償却の方法が定められている' }, //36 p116
                        { questionTitle: '損益の算定', content: '収支相当の原則 → 費用収益対応の原則' }, //37 p143
                        { questionTitle: '法人税及び住民税', content: '他の税金と合算 → 他の税金と区別' }, //38 p164
                        { questionTitle: '区分経理における運用資産の管理', content: '正しい' }, //39
                        { questionTitle: '税務調査', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'ウ', questionTitle: '帳簿の種類', content: '買掛金元帳' }, //41
                        { label: 'ア', questionTitle: '企業会計原則（一般原則）', content: '明瞭性' }, //42
                        { label: 'エ', questionTitle: '株主配当', content: 'いつでも' }, //43
                        { label: 'エ', questionTitle: '決算', content: '財政状態' }, //44
                        { label: 'エ', questionTitle: '連結決算', content: 'のれん（連結調整勘定）' }, //45
                        { label: 'オ', questionTitle: '利益準備金', content: '' }, //46
                        { label: 'イ', questionTitle: '利息及び配当金等収入', content: '売買目的有価証券' }, //47
                        { label: 'イ', questionTitle: '公告', content: '損益計算書' }, //48
                        { label: 'オ', questionTitle: '区分経理', content: '' }, //49
                        { label: 'ウ', questionTitle: '金融検査', content: '金融庁' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2024a" next-route="kaikei2024c" />
        </section>
    </SeihoTestLayout>
</template>
