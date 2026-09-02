<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2021年度 フォームA";
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
                        '認識',
                        '実現主義',
                        '発生主義',
                        '費用収益対応の原則',
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
                        // rev: 2026-08-23 確認済み
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
                    questionTitle="通常発生する取引の8要素の組合せ"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '資産の増加／負債の増加（例：借入）などが通常であり、資産の減少／負債の増加は通常発生しない。', //p12
                        '正しい',
                        '費用の発生／収益の発生は同時には起こらない。通常は費用の発生／資産の減少（例：支払）となる。', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="制度会計"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '管理会計 → 財務会計', //p27
                        '正しい',
                        '計算過程においては、会計帳簿上の数値が[[計算根拠として重要である]]。', //p33-34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="積立てを要する準備金"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '責任準備金 → 支払備金', //p38
                        '危険準備金は、法人税法上は利益性の内部留保との立場から、[[損金とはならない]]。', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産勘定"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '一般の企業の資産勘定の区分は、流動資産に属する資産、固定資産に属する資産及び繰延資産に属する資産に区分することになっているが、生命保険会社の資産区分は、契約者への将来の保険金等支払に備えた積立金の裏付けとなる資産の内訳を表わすものとして、[[一般の企業とは違った区分となっている]]。', //p106
                        '取得時レート → 決算時レート', //p106
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="減損損失"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '減損会計の対象資産は、土地、建物等の有形固定資産ばかりでなく、[[営業権、特許権等の無形固定資産も該当する]]。', //p161
                        '貸借対照表 → 損益計算書', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="決算"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '精算表 → 試算表', //p15
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社で計上する引当金・準備金"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '正しい',
                        '特別勘定および特定取引勘定の資産は[[除かれる]]。', //p55
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
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
                    :questionNumber="29"
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
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融検査と税務調査"
                    :contents="[
                        // rev: 2026-09-02 確認済み
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
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '会計公準',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '帳簿の種類',
                            content: '補助元帳 ↔︎ 補助記入帳', //p14
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特別勘定の決算',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '保険業法と会社法',
                            content: '会計に関する会社法との関連性においては、計算規定を中心に株式会社については[[会社法]]を準用し、相互会社については[[保険業法]]を中心に定めている。', //p94
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理店貸',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険業法第113条繰延資産',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '自己株式',
                            content: '純資産の部に加算 → 純資産の部から控除', //p141
                        }, //37
                        {
                            questionTitle: '利息及び配当金等収入',
                            content: '売買目的有価証券及び商品有価証券に係るものを含む → 除く',
                        }, //38 p145
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '保険金据置支払金',
                            content: '支払利息に計上 → 保険金据置支払金に計上', //p158
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '区分経理',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'エ',
                            questionTitle: '会計上の取引',
                            content: '仕訳',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'オ',
                            questionTitle: '開示書類',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'イ',
                            questionTitle: '勘定間取引',
                            content: '事業方法書',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ウ',
                            questionTitle: '連結財務諸表の作成',
                            content: '持分法',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ア',
                            questionTitle: '商品有価証券の評価方法',
                            content: '経理処理要領',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ア',
                            questionTitle: 'その他負債',
                            content: '資産除去',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ウ',
                            questionTitle: '勘定体系',
                            content: '保険契約準備金',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'エ',
                            questionTitle: '解約返戻金',
                            content: '支払備金',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'オ',
                            questionTitle: '事業費効率指標',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'イ',
                            questionTitle: '監査役による監査',
                            content: '社外',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2022c" next-route="kaikei2021b" />
        </section>
    </SeihoTestLayout>
</template>
