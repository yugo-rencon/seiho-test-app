<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2020年度 フォームC";
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
                    questionTitle="生保資産運用の今後-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '時価',
                        'グローバル化',
                        '日本公認会計士協会',
                        '売買目的有価証券',
                        '資本', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'カ', //2
                        'エ', //3
                        'キ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保資産運用の今後-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'ポートフォリオ',
                        '区分経理',
                        'ALM（Asset Liability Management）',
                        'リスク・ヘッジ',
                        '資金調達', // 問6〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'コ', //7
                        'エ', //8
                        'キ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別勘定-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '金利選好',
                        'インフレ・ヘッジ',
                        '投資リスク',
                        '受託者',
                        '運用割合', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'ク', //12
                        'カ', //13
                        'イ', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別勘定-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '大口信用供与規制',
                        '安全性',
                        '契約者',
                        '合同運用',
                        'スケールメリット', // 問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'ア', //17
                        'エ', //18
                        'ク', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と金融仲介機能"
                    :contents="[
                        '正しい',
                        '間接金融的 → 直接金融的', //p10-11
                        '信用創造機能 → 貯蓄機能', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般貸付"
                    :contents="[
                        // rev: 2026-11-17 確認済み
                        '商法 → 民法', //p52
                        '正しい',
                        '生命保険会社の貸付は、長期の[[事業資金]]が中心となっている。', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="各国における保険会社の周辺業務の取り扱い"
                    :contents="[
                        // rev: 2026-11-20 確認済み
                        'ニューヨーク州法の持株会社規定では保険持株会社の業務、およびその傘下の会社の業務を[[制限していない]]。', //p130（旧教科書のみ）
                        '現行の銀行法では銀行が、支店内で販売することができる保険商品は、規制上、[[貸付業務に密接に絡む保険や旅行保険に限られている]]。', //p141（旧教科書のみ）
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="経済安定成長期の有価証券投資"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '生命保険会社において、[[株式投資が活発化し]]、株式の資産構成比は上昇した。', //p152
                        '特金を利用した証券投資には、[[①キャピタル・ゲインのインカム化]]、[[②簿価分離]]といったメリットがある。', //p152
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）（金融システム改革法）"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '新たに認められた → 改正前から認められていた', //p169
                        '法定他業 → 付随業務', //p169
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用規制の体系"
                    :contents="[
                        '新たに作成 → 廃止', //p28
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="貸付管理"
                    :contents="[
                        '正しい',
                        '簡易裁判所 → 地方裁判所', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産投資"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '2000年（平成12年）11月の「投資信託及び投資法人に関する法律」改正・施行を受けて、東京証券取引所による[[不動産投資信託（REIT）専用の上場市場が開設された]]。', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦前の生保資産運用"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '不動産 → 銀行預金', //p123-124
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="各国の生保資産運用の傾向"
                    :contents="[
                        '正しい',
                        '正しい',
                        'ロシアのスラブ型 → フランス・イタリア・ベルギーのラテン型', //p125
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '日本の金融制度',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '投融資決定機構',
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '手形貸付',
                            content: '金額に上乗せ → 金額から差し引いて',
                        }, //33 p54
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: 'リスク特性',
                            content: '一般的な株価動向として、[[株式は市場リスクより非市場リスクの影響が高い]]場合が多く、[[債券は非市場リスクより市場リスクの影響が高い]]場合が多い。', //p84
                        }, //34
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: 'スワップ取引',
                            content: '通過スワップ → 金利スワップ', //p94
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '海外投融資',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'アメリカの資産運用規制',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公共投資',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用の多様化',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '国際会計基準導入の動向',
                            content: '日本版スチュワードシップ・コード → IFRSへの対応の在り方に関する当面の方針',
                        }, //40 p214
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生保資金の構成',
                            label: 'イ',
                            content: '基金',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公社債の発行主体別分類',
                            label: 'ア',
                            content: '歳入債',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '融資審査',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'コール・オプション',
                            label: 'ウ',
                            content: '買い付ける',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '短期資金・現預金等',
                            label: 'イ',
                            content: '出し手',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'イギリスの銀行',
                            label: 'ア',
                            content: 'ユニバーサル・バンキング',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ドイツの金融制度',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用手段の多様化',
                            label: 'エ',
                            content: 'オルタナティブ投資',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '貸付業種の多様化',
                            label: 'ウ',
                            content: '劣後ローン',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融審議会報告',
                            label: 'エ',
                            content: '顧客本意の業務運営に関する原則',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2020b" />
        </section>
    </SeihoTestLayout>
</template>
