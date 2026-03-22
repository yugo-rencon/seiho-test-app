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
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="各国における保険会社の周辺業務の取り扱い"
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
                    questionTitle="高度経済成長期の資産運用"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）（金融システム改革法）"
                    :contents="[
                        '新たに認められた → 改正前から認められていた', //p210
                        '法定他業 → 付随業務', //p210
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
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業貸付"
                    :contents="[
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
                        '', //p
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
                        '', //p
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
                        '正しい',
                        '正しい',
                        '保険会社にも適用 → 保険会社には、保険検査マニュアルを適用', //p216
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '日本の金融制度', content: '正しい' }, //31
                        { questionTitle: '株式保有', content: '' }, //32
                        { questionTitle: '証券調査', content: '正しい' }, //33
                        { questionTitle: '貸付の特徴', content: '' }, //34
                        { questionTitle: 'スワップ取引', content: '通過スワップ → 金利スワップ' }, //35 p94
                        { questionTitle: '短期金融市場', content: 'オープン市場 ↔︎ インターバンク市場' }, //36 p
                        { questionTitle: 'ドイツの資産運用体制', content: '正しい' }, //37
                        { questionTitle: '公共投資', content: '正しい' }, //38
                        { questionTitle: '金融システム改革', content: '正しい' }, //39
                        { questionTitle: '有価証券の評価方法', content: '時価 → 取得価額' }, //40 p213
                        // 問41〜50
                        { questionTitle: 'リスク管理の組織的対応', label: 'エ', content: 'リスク管理委員会' }, //41
                        { questionTitle: '投融資決定機構', label: 'ア', content: '単独制' }, //42
                        { questionTitle: '融資審査', label: 'オ', content: '' }, //43
                        { questionTitle: 'コール・オプション', label: 'ウ', content: '買い付ける' }, //44
                        { questionTitle: '海外投融資の内容と特徴', label: 'エ', content: '不動産' }, //45
                        { questionTitle: 'カナダの資産運用', label: 'オ', content: '' }, //46
                        { questionTitle: '海外投融資のリスク', label: 'イ', content: 'カントリー・リスク' }, //47
                        { questionTitle: '資産運用手段の多様化', label: 'エ', content: 'オルタナティブ投資' }, //48
                        { questionTitle: '安定成長への移行と貸付業務の多様化', label: 'ウ', content: '劣後ローン' }, //49
                        { questionTitle: 'グローバルなリスク管理環境', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2021c" next-route="sisan2020b" />
        </section>
    </SeihoTestLayout>
</template>
