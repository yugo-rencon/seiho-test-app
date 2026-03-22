<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2024年度 フォームA";
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
                    questionTitle="特別勘定-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利選好',
                        'インフレ・ヘッジ',
                        '投資リスク',
                        '運用割合',
                        '大口信用供与規制', //問11〜15
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
                    questionTitle="特別勘定-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '安全性',
                        '契約者',
                        '合同運用',
                        'スケールメリット',
                        '毎日', //問16〜20
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
                    questionTitle="生命保険会社と金融仲介機能"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '間接金融的 → 直接金融的', //p10-11
                        '信用創造機能 → 貯蓄機能', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="企業貸付"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '長期の運転資金 → 短期の運転資金', //p53-54
                        '金額に上乗せして貸付 → 金額から差し引いて貸付', //p54
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="株式投資における生命保険会社の対応"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '第二次大戦後に規制強化 → 第二次大戦後に株式投資が拡大', //p77
                        '正しい',
                        '利回り・株価収益率（PER） ↔︎ 株価純資産倍率（PBR）', //p78
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="戦後の日本経済と生命保険業"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'デフレ → インフレ。', //p171
                        '解散することなく → 解散した', //p174
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="有価証券の評価方法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '時価 → 取得価額', //p213
                        '正しい',
                        '取得価額 → 時価', //p213
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="生保資金の特徴と構成"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '価格変動準備金・未経過保険料・危険準備金 → 保険料積立金・未経過保険料・払戻積立金・危険準備金', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="資産運用の専門化の進展"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'トレーダー → アナリスト', //p48
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="短期金融市場"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        'オープン市場 → インターバンク市場', //p111
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="金融の自由化と生保資産運用の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利の面 → 業務面', //p201
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="金融システム改革法の施行（1998年（平成10年））"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '取引所集中の義務化、店頭登録市場の廃止、私設取引システムの撤廃 → 取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入', //p209
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: 'ヘッジ取引', content: '買いヘッジ → 売りヘッジ' }, //31 見つからない・・・
                        { questionTitle: '保険会社向けの総合的な監督指針', content: '法令遵守やリスク管理等に関する項目は含まれていない → 含まれている' }, //32 p28
                        { questionTitle: '生保の運用機構', content: '正しい' }, //33
                        { questionTitle: '公社債', content: '変動利付 → 確定利付' }, //34 p69
                        { questionTitle: 'スワップ取引', content: '金利スワップ → 通貨スワップ' }, //35 p94
                        { questionTitle: '不動産投資の実務', content: '正しい' }, //36
                        { questionTitle: '第二次大戦時の国債保有の要請', content: '正しい' }, //37
                        { questionTitle: '安定成長期の有価証券投資', content: '正しい' }, //38
                        { questionTitle: 'バブル崩壊後の外国証券投資', content: '減少 ↔︎ 増加' }, //39 p199
                        { questionTitle: '国際会計基準導入の動向', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '各国の保険監督方法', label: 'ア', content: '準拠主義' }, //41
                        { questionTitle: '貸付の特徴', label: 'ウ', content: '流動' }, //42
                        { questionTitle: '融資審査', label: 'オ', content: '' }, //43
                        { questionTitle: 'オプション取引', label: 'エ', content: '購入する' }, //44
                        { questionTitle: '対外貸付実務', label: 'ア', content: 'シンジケート' }, //45
                        { questionTitle: '創業時の生命保険会社の資産運用', label: 'オ', content: '' }, //46
                        { questionTitle: '海外投融資のリスク', label: 'イ', content: 'カントリー・リスク' }, //47
                        { questionTitle: '資産運用手段の多様化', label: 'ウ', content: 'オルタナティブ投資' }, //48
                        { questionTitle: '改正保険業法の施行（1998年（平成10年））', label: 'エ', content: '付随業務' }, //49
                        { questionTitle: 'ソルベンシー確保', label: 'イ', content: '200' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="sisan2024b" />
        </section>
    </SeihoTestLayout>
</template>
