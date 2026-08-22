<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
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
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '緩和',
                        '信託会社',
                        '持株会社',
                        'デリバティブ取引',
                        '付随業務', // 問11〜15
                    ]"
                    :labels="[
                        'コ', //11
                        'オ', //12
                        'ク', //13
                        'ケ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '法定他業',
                        '大口信用供与規制',
                        '10%',
                        '早期是正措置',
                        'ソルベンシー・マージン比率', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'オ', //17
                        'イ', //18
                        'ア', //19
                        'コ', //20
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
                    questionTitle="運用機構"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="融資審査"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="バブル崩壊後の生保資産運用"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融の自由化と生保資産運用の多様化"
                    :contents="[
                        '正しい',
                        '', //p
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
                    questionTitle="資産運用の専門化の進展"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者ローン"
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
                    questionTitle="戦前の生保資産運用"
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
                            questionTitle: '貸付の特質',
                            content: '',
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公社債の分類',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '不動産投資の多様化',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '外国為替実務',
                            content: '',
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '安定成長期の有価証券投資',
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '海外投融資への取り組み',
                            content: '',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用の多様化',
                            content: '正しい',
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
                            questionTitle: '財務3比率',
                            label: 'ウ',
                            content: '自己資本',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '対外貸付実務',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '短期金融市場の概要',
                            label: 'イ',
                            content: 'インターバンク市場',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人変額保険における資産の評価方法',
                            label: 'ア',
                            content: '時価主義',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '戦後復興期の生命保険業',
                            label: 'イ',
                            content: '自己資本',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特金運用の活用',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'バブル崩壊後の外国証券投資',
                            label: 'エ',
                            content: 'サブプライムローン問題',
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
            <TestNavigationButtons previous-route="sisan2025b" next-route="sisan2024a" />
        </section>
    </SeihoTestLayout>
</template>
