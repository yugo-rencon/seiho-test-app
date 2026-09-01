<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2025年度 フォームC";
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
                    questionTitle="制度会計①"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '財務会計',
                        '株主配当',
                        '財務内容',
                        '有限責任',
                        '利害調整', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'コ', //2
                        'オ', //3
                        'カ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="制度会計②"
                    :contents="[
                        // rev: 2026-08-30 確認済み
                        '投資家保護',
                        '課税の公平性',
                        '別段の定め',
                        '会計慣行',
                        'サービス', // 問6〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'イ', //7
                        'エ', //8
                        'ク', //9
                        'カ', //10
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
                        '残高試算表 → 合計残高試算表', //p15-16
                        '合計残高試算表 → 残高試算表', //p15-16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '2勘定 → 4勘定（資産勘定、負債勘定、費用勘定、収益勘定）', //p43-44
                        '算出方法書 → 事業方法書', //p44
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="連結財務諸表の作成手続"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '従来連結子会社及び子法人等の範囲は議決権の所有割合（50％超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。', //p81
                        '連結会社相互間の取引によって取得した資産に含まれる未実現損益は[[その全額を消去する]]。', //p83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業費"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '減価償却費や税金等は、生命保険会社の損益計算書上では、[[事業費には含まれない]]。', //p173
                        '正しい',
                        '「事業費管理」は、通常、経営管理手法のひとつである[[予算]]制度を活用した事業費[[予算]]管理制度として行われている。', //p176
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '取引の８要素の原理 → 貸借平均の原理', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '保険業法の改正 → 会社法の施行', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の決算整理手続"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '生命保険協会 → 各生命保険会社', //p51
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="純資産勘定の内容"
                    :contents="[
                        // rev: 2026-09-02 確認済み
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
                        // rev: 2026-09-01 確認済み
                        '2000年度（平成12年度）決算からキャッシュ・フロー計算書が[[縦覧の対象資料に付け加えられている]]。', //p180
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
                            // rev: 2026-08-22 確認済み
                            questionTitle: '簿記',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '損益計算書',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-09-01 確認済み
                            questionTitle: '企業会計原則（一般原則）',
                            content: '明瞭性の原則 → 資本取引・損益取引区分の原則', //p25
                        }, //33
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '社員配当準備金',
                            content: '10%以上 → 20%以上', //p41
                        }, //34
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '保険業法と会社法',
                            content: '会計に関する会社法との関連性においては、計算規定を中心に株式会社については[[会社法]]を準用し、相互会社については[[保険業法]]を中心に定めている。',//p94
                        }, //35
                        {
                            questionTitle: '減価償却',
                            content: '',
                        }, //36
                        {
                            questionTitle: '負債勘定',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険金',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '区分経理',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-22 確認済み
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
                            questionTitle: '帳簿の種類',
                            label: 'エ',
                            content: '売掛金元帳',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '決算スケジュール',
                            label: 'ア',
                            content: '2週間',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '連結決算日',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '外貨預金の為替換算',
                            label: 'ウ',
                            content: '決算時',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '有価証券の評価方法',
                            label: 'ア',
                            content: '売買目的有価証券',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '損益の認識',
                            label: 'イ',
                            content: '実現主義',
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
            <TestNavigationButtons previous-route="kaikei2025b" next-route="kaikei2024a" />
        </section>
    </SeihoTestLayout>
</template>
