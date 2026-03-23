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
                        '商法 → 民法', //p52
                        '正しい',
                        '長期の非事業資金が中心 → 長期の事業資金が中心', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="各国における保険会社の周辺業務の取り扱い"
                    :contents="[
                        '保険持株会社の業務は制限されている → 制限されていない', //p130
                        '全ての商品の販売が認められている → 販売可能な商品は限られている', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="経済安定成長期の有価証券投資"
                    :contents="[
                        '正しい',
                        '株式投資は活発化しなかった → 活発化した', //p193
                        'インカム・ゲインの累積化 → キャピタル・ゲインのインカム化<br>簿価通算 → 簿価分離', //p194
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
                        '正しい',
                        '正しい',
                        '上場市場は整備されていない → 整備されている', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦前の生保資産運用"
                    :contents="[
                        '不動産 → 銀行預金', //p163-164
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
                        // 問31〜40
                        { questionTitle: '日本の金融制度', content: '正しい' }, //31
                        { questionTitle: '投融資決定機構', content: '正しい' }, //32
                        { questionTitle: '手形貸付', content: '金額に上乗せ → 金額から差し引いて' }, //33 p54
                        { questionTitle: 'リスク特性', content: '株式：非市場リスクと市場リスクのいずれの影響も高い場合が多い<br>債券：非市場リスクより市場リスクの影響が高い場合が多い' }, //34 見つからない
                        { questionTitle: 'スワップ取引', content: '通過スワップ → 金利スワップ' }, //35 p94
                        { questionTitle: '海外投融資', content: '正しい' }, //36
                        { questionTitle: 'アメリカの資産運用規制', content: '正しい' }, //37
                        { questionTitle: '公共投資', content: '正しい' }, //38
                        { questionTitle: '資産運用の多様化', content: '正しい' }, //39
                        { questionTitle: '国際会計基準導入の動向', content: '日本版スチュワードシップ・コード → IFRSへの対応の在り方に関する当面の方針' }, //40 p214
                        // 問41〜50
                        { questionTitle: '生保資金の構成', label: 'イ', content: '基金' }, //41
                        { questionTitle: '公社債の発行主体別分類', label: 'ア', content: '歳入債' }, //42
                        { questionTitle: '融資審査', label: 'オ', content: '' }, //43
                        { questionTitle: 'コール・オプション', label: 'ウ', content: '買い付ける' }, //44
                        { questionTitle: '短期資金・現預金等', label: 'イ', content: '出し手' }, //45
                        { questionTitle: 'イギリスの銀行', label: 'ア', content: 'ユニバーサル・バンキング' }, //46
                        { questionTitle: 'ドイツの金融制度', label: 'オ', content: '' }, //47
                        { questionTitle: '資産運用手段の多様化', label: 'エ', content: 'オルタナティブ投資' }, //48
                        { questionTitle: '貸付業種の多様化', label: 'ウ', content: '劣後ローン' }, //49
                        { questionTitle: '金融審議会報告', label: 'エ', content: '顧客本意の業務運営に関する原則' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2020b" />
        </section>
    </SeihoTestLayout>
</template>
