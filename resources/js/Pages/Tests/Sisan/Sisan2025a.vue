<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2025年度 フォームA";
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
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能①"
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
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '保険料',
                        '長期の貸付',
                        '国債',
                        '直接金融',
                        '損害保険業務', // 問6〜10
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
                    questionTitle="生保の資産運用機構①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '単独制',
                        '委員会制',
                        '安全',
                        'ポートフォリオ',
                        '貸付', // 問11〜15
                    ]"
                    :labels="[
                        'カ', //11
                        'ク', //12
                        'ア', //13
                        'コ', //14
                        'キ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保の資産運用機構②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'ファンド・マネージャー',
                        'アナリスト',
                        'ストラテジスト',
                        '人事ローテーション',
                        'アウトソーシング', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'エ', //17
                        'ア', //18
                        'コ', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用に係るリスク管理"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般貸付"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="オプション取引"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦後の日本経済と生命保険業"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用部門の態勢整備"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="運用原則"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式投資の尺度"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産投資"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="安定成長期の貸付面の多様化"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="有価証券の評価方法"
                    :contents="[
                        '', //p
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
                            questionTitle: '生保資金の構成',
                            content: '',
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '運用規制',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '融資審査',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: 'ポートフォリオ・マネジメント',
                            content: '',
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '海外投融資',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '預金市場',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '昭和初期の生命保険業界',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'バブル崩壊後の外国証券投資',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '金融システム改革',
                            content: '',
                        }, //39
                        {
                            questionTitle: '投資環境の動向',
                            content: '',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '各国の保険監督方法',
                            label: 'ウ',
                            content: '公示主義',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '企業貸付',
                            label: 'ア',
                            content: '当座貸越',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '有価証券の定義',
                            label: 'イ',
                            content: '金融商品取引法',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'デリバティブ取引',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '短期金融市場',
                            label: 'イ',
                            content: '出し手',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '創業時の生命保険会社の資産運用',
                            label: 'ウ',
                            content: '銀行預金',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用手段の多様化',
                            label: 'エ',
                            content: 'オルタナティブ投資',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険会社の資金調達',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融システム改革法',
                            label: 'エ',
                            content: '保険契約者保護機構',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融商品会計に関する実務指針',
                            label: 'ア',
                            content: '日本公認会計士協会',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="sisan2025b" />
        </section>
    </SeihoTestLayout>
</template>
