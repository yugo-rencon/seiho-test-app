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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '財務会計 ↔︎ 管理会計', //p4
                        '[[財務会計]]が現在または過去の企業の情報提供を主目的としているのに対して、[[管理会計]]は未来の予測効果を重要視している点に特色がある。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        'たとえば、電力会社と電力供給の契約を締結した場合、契約締結の時点では、それぞれに「電力を供給する義務」と「電力の供給を受ける権利」が発生するが、[[会計上の取引とはならない]]。', //p9-10
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
                        // rev: 2026-09-01 確認済み
                        '従来連結子会社及び子法人等の範囲は議決権の所有割合（50％超で子会社及び子法人等）で形式的に判定していたが、現在は会社が他の会社の意思決定機関を支配しているか否かによって実質的に判定する。', //p81
                        '連結会社相互間の取引によって取得した資産に含まれる未実現損益は[[その全額を消去する]]。', //p83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="収益に属する科目"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '発生主義 → 現金主義', //p144
                        '売買目的有価証券を含む → 売買目的有価証券を除く', //p147
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '本社・支社問わず7年間 → 本社に5年間、支社に3年間', //p180
                        '正しい',
                        '2006年（平成18年）の保険業法施行規則の改正により、2008年度（平成20年度）から、[[四半期開示が努力義務として規定された。]]', //p186
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税務会計"
                    :contents="[
                        // rev: 2026-09-01 確認済み
                        '正しい',
                        '正しい',
                        '消費税は、財・サービスの消費に対し課税されるものであり、[[会計数値の開示はもちろん利益計算もその目的としない]]', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="純資産勘定の内容"
                    :contents="[
                        // rev: 2026-09-02 確認済み
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
                        // rev: 2026-09-02 確認済み
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
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '損益分類は「死差損益」「利差損益」「費差損益」の三損益（三大利源）を中心として、これに「[[責任準備金関係損益]]」「[[価格変動損益]]」「その他の損益」を加え、全体を６個の損益としている。', //p178
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="監査および検査"
                    :contents="[
                        // rev: 2026-09-02 確認済み
                        '正しい',
                        '正しい',
                        '4〜5年程度 → 1～2年程度', //p210
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '会計の役割',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株主資本等変動計算書',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '金融商品取引法上の開示書類',
                            content: '流通市場における開示書類には、[[「有価証券報告書」「半期報告書」「臨時報告書」]]等がある（有価証券届出書、目論見書は発行市場における開示書類）。', //p30
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '事業年度',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'デリバティブ',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '減価償却',
                            content: '有形固定資産の種類にかかわらず方法を選定できる → 種類ごとに選定できる償却の方法が定められている', //p116
                        }, //36
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '提供していない役務に対する対価',
                            content: '預り金 → 前受収益', //p129
                        }, //37
                        {
                            // rev: 2026-09-02 確認済み
                            questionTitle: '損益の算定',
                            content: '収支相等の原則 → 費用収益対応の原則', //p143
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '区分経理における運用資産の管理',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '監査',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'オ',
                            questionTitle: '取引の仕訳',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'イ',
                            questionTitle: '財務諸表',
                            content: '損益計算書',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ウ',
                            questionTitle: '企業会計の一般原則',
                            content: '保守主義',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ア',
                            questionTitle: '消費税',
                            content: '負債',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'エ',
                            questionTitle: '勘定間取引',
                            content: '純保険料',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ウ',
                            questionTitle: '価格変動準備金',
                            content: '金融庁長官',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'オ',
                            questionTitle: 'ソフトウェア',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'ア',
                            questionTitle: '退職給付引当金',
                            content: '期末',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'イ',
                            questionTitle: '事業費',
                            content: '販売費及び一般管理費',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            label: 'エ',
                            questionTitle: '区分経理',
                            content: '配当率',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2023c" next-route="kaikei2022b" />
        </section>
    </SeihoTestLayout>
</template>
