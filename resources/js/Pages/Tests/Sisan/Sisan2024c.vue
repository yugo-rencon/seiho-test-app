<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2024年度 フォームC";
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
                    questionTitle="生命保険会社の資産運用におけるリスク管理-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '国際決済銀行（BIS）',
                        '自己資本',
                        '信用',
                        '市場',
                        '流動性', // 問１〜５
                    ]"
                    :labels="[
                        'ク', //1
                        'オ', //2
                        'ケ', //3
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    questionTitle="生命保険会社の資産運用におけるリスク管理-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'ポートフォリオ',
                        'アセット・ミックス',
                        '投融資執行所管',
                        'リスク管理委員会',
                        '情報システム', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'コ', //7
                        'ウ', //8
                        'オ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    questionTitle="不動産投資の多様化-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '保険業法施行規則',
                        '物価',
                        '流動性',
                        'オフィスビル',
                        'REIT（不動産投資信託）', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'オ', //12
                        'ア', //13
                        'ウ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="不動産投資の多様化-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '借地',
                        '借地人',
                        '新借地',
                        '所轄税務署',
                        '時価', //問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'キ', //17
                        'エ', //18
                        'ア', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    questionTitle="生命保険会社と金融仲介機能"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '間接金融的 → 直接金融的', //p10-11
                        '信用創造機能 → 貯蓄機能', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="スワップ取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '金利スワップ → 通貨スワップ', //p94
                        '通貨スワップ → 金利スワップ', //p94
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="海外投融資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '保険リスク → カントリーリスク', //p106
                        '円建債務を作り円建債権・債務を組み合わせて相殺 → 外貨建債務を作り外貨建債権・債務を組み合わせて相殺', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="安定成長期の有価証券投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '投資信託の窓口販売 → 変額保険販売', //p193
                        'インカム・ゲインの累積化 → キャピタル・ゲインのインカム化<br>簿価通算 → 簿価分離', //p194
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="生保資産運用の今後"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '簿価評価 → 時価評価', //p212
                        '取得価額 → 時価', //p213
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="生保資金の特徴と構成"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '責任準備金は生保会社が保険契約上の義務を果たすために積み立てられるもので、[[保険料積立金]]、未経過保険料、[[払戻積立金]]および危険準備金から成る。', //p11-12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="消費者ローン"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '住宅ローンや教育ローン → フリー・ローン', //p58
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="先物取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '裁定取引 → アウトライト取引', //p89
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="安定成長期の貸付面の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '昭和40年代後半以降、住宅金融制度が徐々に整備されるに伴い、個人への直接的な資金供給である住宅ローンへも[[進出している]]。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="金融システム改革法の施行（1998年（平成10年））"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '正しい',
                        '投資家や資金調達者が、従来の取引所市場のみならず、多様な市場と資金調達のチャンネルを利用できるよう、取引所集中義務の[[撤廃]]、店頭登録市場の[[機能強化]]、私設取引システムの[[導入]]などの改革が進められた。', //p168
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '金融市場',
                            content: '3年 → 1年',
                        }, //31 p3
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '保険会社向けの総合的な監督指針',
                            content: '「保険会社向けの総合的な監督指針」には、法令遵守やリスク管理、審査管理態勢等の資産運用に関する項目も[[含まれている]]。', //p28
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生保の運用機構',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '貸付の特徴',
                            content: '貸付金の投資対象としての特質は、まず第一に、有価証券投資のような価格変動リスクは、極めて限定的である反面、貸付金が期日どおりに返済されるか否かという[[信用リスク]]があること、第二に、有価証券のような即時の流動化が[[困難]]なことなどである。', //p52
                        }, //34
                        {
                            questionTitle: 'リスク特性',
                            content: '株式：非市場リスクと市場リスクのいずれの影響も高い場合が多い<br>債券：非市場リスクより市場リスクの影響が高い場合が多い',
                        }, //35 見つからない
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '短期金融市場',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公共投資',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'バブル崩壊後の資産運用',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '改正保険業法の施行（1998年（平成10年））',
                            content: '固有業務 → 付随業務', //p169
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国際会計基準導入の動向',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '各国の保険監督方法',
                            label: 'ア',
                            content: '準拠主義',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '有価証券の定義',
                            label: 'ア',
                            content: '金融商品取引法',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株式投資の尺度',
                            label: 'エ',
                            content: '当期純利益',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '預金市場',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人変額保険における資産の評価方法',
                            label: 'エ',
                            content: '毎日',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '大正〜昭和初期の生保資産運用',
                            label: 'イ',
                            content: '社債',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '高度経済成長期の資産運用',
                            label: 'ウ',
                            content: '機関投資家',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用手段の多様化',
                            label: 'ウ',
                            content: 'オルタナティブ投資',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険会社の資金調達',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ソルベンシー確保',
                            label: 'イ',
                            content: '200',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2024b" next-route="sisan2023a" />
        </section>
    </SeihoTestLayout>
</template>
