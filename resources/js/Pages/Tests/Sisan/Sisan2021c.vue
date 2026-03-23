<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2021年度 フォームC";
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
                    questionTitle="有価証券投資と海外投融資-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '収益',
                        '目標',
                        '利用効率',
                        '流動比率',
                        '量的分析', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'キ', //3
                        'ウ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    questionTitle="有価証券投資と海外投融資-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '不動産',
                        '非居住者',
                        '円貨建債券',
                        'スシ・ボンド',
                        'アセットミックス', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ウ', //7
                        'ア', //8
                        'コ', //9
                        'ク', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    questionTitle="貸付の実行-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '財団抵当',
                        '時価',
                        '瑕疵（かし）',
                        '不動産鑑定士',
                        '控除', //問11〜15
                    ]"
                    :labels="[
                        'エ', //11
                        'ク', //12
                        'カ', //13
                        'イ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="貸付の実行-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '一括返済',
                        '収益性',
                        'プライム・レート',
                        '低く',
                        '金銭消費貸借契約証書', //問16〜20
                    ]"
                    :labels="[
                        'オ', //16
                        'ア', //17
                        'コ', //18
                        'ク', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    questionTitle="資産運用に係るリスク管理"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '短期運用に適していない → 適している', //p21
                        '流動性確保に必要性が低い → 流動性確保が必要', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="不動産の投資手法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '共同ビル方式 → 借地方式', //p99
                        '正しい',
                        '契約の更新を自動的に行う → 契約更新はしない', //p100
                     ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="スワップ取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利スワップ → 通貨スワップ', //p94
                        '通貨スワップ → 金利スワップ', //p94
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="戦前の生保資産運用"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '銀行株式 → 銀行預金', //p164-165
                        '貸付の増大、社債・株式投資の減少 → 社債・株式投資の増大、貸付の減少', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="有価証券の評価方法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '取得価額 → 時価', //p213
                        '時価 → 取得価額', //p213
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '間接金融的 → 直接金融的', //p10-11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="運用機構"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '委員会制 → 単独制', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="各国の生命保険会社の資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '公社債 ↔︎ 不動産関連投資', //p138
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="融資審査"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '実務方が用いられる場合が多い → 比率法が多い', //p60
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="特別勘定の運用状況"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '未だ全廃されてない → 全て撤廃された', //p116
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
                        { questionTitle: '資産運用の専門家', content: 'エコノミスト → アナリスト' }, //31 p48
                        { questionTitle: '金融関連業務', content: '付随業務 → 法定他業' }, //32 見つからない
                        { questionTitle: '融資審査', content: '正しい' }, //33
                        { questionTitle: '貸付の特徴', content: '事務リスク → 信用リスク<br>流動化が容易 → 流動化が困難' }, //34 p52
                        { questionTitle: '預金市場', content: '正しい' }, //35
                        { questionTitle: '不動産投資の実務', content: '正しい' }, //36
                        { questionTitle: 'カナダの金融制度', content: '他業態の業務を行うことは禁止 → 子会社形態で可能' }, //37 p139
                        { questionTitle: 'バブル崩壊後の資産運用', content: '正しい' }, //38
                        { questionTitle: '金融システム改革', content: 'フリー・クリア・ワイド → フリー・フェアー・グローバル' }, //39 p207
                        { questionTitle: '会計基準の整備', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '生保資金の運用規制', label: 'イ', content: '独占禁止法' }, //41
                        { questionTitle: '生保資金と運用原則', label: 'エ', content: '安全性' }, //42
                        { questionTitle: '企業貸付', label: 'ウ', content: '短期' }, //43
                        { questionTitle: '株式投資の尺度', label: 'エ', content: '当期純利益' }, //44
                        { questionTitle: '短期金融市場の概要', label: 'オ', content: '' }, //45
                        { questionTitle: 'デリバティブ取引', label: 'オ', content: '' }, //46
                        { questionTitle: '対外貸付実務', label: 'ア', content: 'シンジケート' }, //47
                        { questionTitle: 'アメリカの生命保険会社の業務範囲', label: 'ア', content: '子会社を通じて' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'イ', content: 'ヘッジファンド' }, //49
                        { questionTitle: '特定金銭信託の活用', label: 'イ', content: 'キャピタル・ゲイン' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2021b" next-route="sisan2020a" />
        </section>
    </SeihoTestLayout>
</template>
