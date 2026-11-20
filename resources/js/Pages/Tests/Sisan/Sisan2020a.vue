<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2020年度 フォームA";
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
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '平準保険料',
                        '予定利率',
                        '配当',
                        '区分経理',
                        'ALM（Asset Liability Management）', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'エ', //2
                        'イ', //3
                        'ク', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '保険料',
                        '長期の貸付',
                        '国債',
                        '直接金融',
                        '子会社等を通じての', // 問6〜10
                    ]"
                    :labels="[
                        'イ', //6
                        'エ', //7
                        'ア', //8
                        'ケ', //9
                        'オ', //10
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
                    questionTitle="資産運用の専門化の進展"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        'ファンド・マネージャー → エコノミスト', //p48
                        '正しい',
                        '証券アナリスト → 不動産鑑定士', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="海外投融資の実務"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '本社が直接所有するケースがほとんど → 現地法人を通じて行われるケースがほとんど', //p109
                        '外貨建て資産の増加に伴う将来の不確実性を除去するためには、[[外貨建債務をつくって外貨建債権・債務を組み合わせて相殺する]]ことが求められる。', //p109
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
                    questionTitle="高度経済成長期の資産運用"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '直接金融方式 → 間接金融方式', //p137
                        '高度成長期を通じて株式投資には[[消極的]]であったものの、生保資金の増大に伴う株式保有額の著増、金融緩和期における株式投資の増大によって、全上場株式に対する保有割合も[[高く]]、[[機関投資家として大きな役割を果たしてきた]]。', //p140
                        '正しい',
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
                    questionTitle="具体的なリスク管理手法"
                    :contents="[
                        '正しい',
                        '短期運用に適していない → 適している', //p21
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業貸付"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '金額に上乗せして貸付 → 金額から差し引いて貸付', //p54
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカの資産運用規制"
                    :contents="[
                        '廃止された → 両方のモデル投資法を併用', //p138
                        '正しい',
                        '正しい',
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
                    questionTitle="生保資産運用の今後"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '正しい',
                        '保険会社にも適用 → 保険会社には、保険検査マニュアルを適用', //p175
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
                            questionTitle: '株式保有',
                            content: '20% → 10%',
                        }, //32 p30
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '証券調査',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '貸付の特徴',
                            content: '一定の返済期限に[[拘束される]]ので、有価証券のような即時の流動化が[[困難]]なことなどである。', //p52
                        }, //34
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: 'スワップ取引',
                            content: '通過スワップ → 金利スワップ', //p94
                        }, //35
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '短期金融市場',
                            content: '短期金融市場は、市場参加者が金融機関のみに限定される[[インターバンク市場]]と、一般事業法人など金融機関以外も参加できる[[オープン市場]]とに分けられる。', //p111
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ドイツの資産運用体制',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公共投資',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融システム改革',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: '有価証券の評価方法',
                            content: '時価評価 → 取得価額（アモチゼーション・アキュムレーションを適用）で評価', //p172
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'リスク管理の組織的対応',
                            label: 'エ',
                            content: 'リスク管理委員会',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '投融資決定機構',
                            label: 'ア',
                            content: '単独制',
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
                            questionTitle: '海外投融資の内容と特徴',
                            label: 'エ',
                            content: '不動産',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'カナダの資産運用',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '海外投融資のリスク',
                            label: 'イ',
                            content: 'カントリー・リスク',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用手段の多様化',
                            label: 'エ',
                            content: 'オルタナティブ投資',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '安定成長への移行と貸付業務の多様化',
                            label: 'ウ',
                            content: '劣後ローン',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'グローバルなリスク管理環境',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2021c" next-route="sisan2020b" />
        </section>
    </SeihoTestLayout>
</template>
