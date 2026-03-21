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
                        '短期運用に適している。', //p
                        '流動性の確保に留意している。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="不動産の投資手法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '共同ビル方式ではなく借地方式の説明。', //p
                        '正しい',
                        '借地期間が終了したときには新たな契約更新を行わずに、 土地所有者は必ず土地の返還を受けることができる。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="スワップ取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利スワップではなく通貨スワップの説明。', //p
                        '通貨スワップではなく金利スワップの説明。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="戦前の生保資産運用"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '銀行預金に相当額の資金をむけていた。', //p
                        '社債、株式投資が増大して、貸付が減少した。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="有価証券の評価方法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '売買目的有価証券は時価評価を行う。', //p
                        '責任準備金対応債券は取得価額で評価を行う。', //p
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
                        '委員会制ではなく単独制。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="各国の生命保険会社の資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'RBC 比率を高めるため、比較的リスクの高い不動産関連投資を減らし、代わりに公社債の比重を高めるようになってきている。', //p
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
                        '実数を加工して算出した比率を用いることを比率法といい、実数法ではなく比率法を用いることが多い。', //p
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
                        '特別勘定における大口信用供与規制の撤廃が行われている。', //p
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
                        { questionTitle: '資産運用の専門家', content: 'エコノミストではなくアナリストの説明。' }, //31
                        { questionTitle: '金融関連業務', content: '保険金信託業務は、付随業務ではなく法定他業に規定されている。' }, //32
                        { questionTitle: '融資審査', content: '正しい' }, //33
                        { questionTitle: '貸付の特徴', content: '事務リスクではなく信用リスク。また即時の流動化は容易ではなく困難。' }, //34
                        { questionTitle: '預金市場', content: '正しい' }, //35
                        { questionTitle: '不動産投資の実務', content: '正しい' }, //36
                        { questionTitle: 'カナダの金融制度', content: '子会社形態により互いに他業態の業務を行うことが可能である。' }, //37
                        { questionTitle: 'バブル崩壊後の資産運用', content: '正しい' }, //38
                        { questionTitle: '金融システム改革', content: 'フリー・クリア・ワイドではなくフリー・フェアー・グローバル。' }, //39
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
