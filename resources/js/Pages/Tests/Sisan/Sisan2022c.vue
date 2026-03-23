<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2022年度 フォームC";
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
                    questionTitle="日本の金融制度と生命保険会社-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '1年',
                        '発券',
                        '受信',
                        '商業',
                        '政府系', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'ケ', //2
                        'カ', //3
                        'イ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    questionTitle="日本の金融制度と生命保険会社-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '養老',
                        '収入保険料',
                        '低下',
                        '高利回り',
                        'リーマン・ブラザーズ', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'イ', //7
                        'コ', //8
                        'エ', //9
                        'ク', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '緩和',
                        '信託会社',
                        '持株会社',
                        'デリバティブ取引',
                        '付随業務', //問11〜15
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
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '法定他業',
                        '大口信用供与規制',
                        '10%',
                        '早期是正措置',
                        'ソルベンシー・マージン比率', //問16〜20
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
                    :questionNumber="22"
                    questionTitle="資産運用に係るリスク管理"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'アセット・ミックス → バリュー・アット・リスク（VaR）', //p21
                        '正しい',
                        '流動性確保に必要性が低い → 流動性確保が必要', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="諸外国の生命保険会社の資産運用体制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        'ドイツ → イギリス', //p151
                        'イギリス → ドイツ', //p156
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="先物取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'アウトライト取引 → ヘッジ取引', //p89
                        'ヘッジ取引 → アウトライト取引', //p89
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="戦後の日本経済と生命保険業"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'デフレ → インフレ', //p171
                        '5000円以上 → 1万円以上<br>解散することなく → 解散した', //p174
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
                        '信用創造機能 → 貯蓄機能', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="不動産投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '収益が安定していて、流動制が高い → 不安定で流動性が極めて低い', //p97
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
                    questionTitle="生保資産運用の今後"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '保険会社にも適用 → 保険会社には、保険検査マニュアルを適用', //p216
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="有価証券の評価方法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '時価 → 取得価額', //p213
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '運用原則', content: '正しい' }, //31
                        { questionTitle: '貸付形態別分類', content: '正しい' }, //32
                        { questionTitle: '運用の実務', content: '融資審査部門 → マクロ調査部門' }, //33 p51
                        { questionTitle: '海外現地法人', content: '直接行うことはない → 直接行うこともある' }, //34 p105
                        { questionTitle: '変額保険の運用', content: '区分経理 → 特別勘定' }, //35 p115
                        { questionTitle: 'カナダの金融制度', content: '正しい' }, //36
                        { questionTitle: '第二次大戦時の国債保有の要請', content: '正しい' }, //37
                        { questionTitle: '特金運用の活用', content: 'インカム・ゲインの累積化 → キャピタル・ゲインのインカム化<br>簿価通算 → 簿価分離 ' }, //38 p194
                        { questionTitle: '海外投融資', content: '漸増傾向 → 減少傾向' }, //39 p104
                        { questionTitle: '国際会計基準導入の動向', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '生保資金の構成', label: 'オ', content: '' }, //41
                        { questionTitle: '各国の保険監督方法', label: 'ア', content: '準拠主義' }, //42
                        { questionTitle: '融資審査', label: 'ウ', content: '自己資本' }, //43
                        { questionTitle: '資産運用の専門化の進展', label: 'エ', content: 'アナリスト' }, //44
                        { questionTitle: '株式投資の尺度', label: 'オ', content: '' }, //45
                        { questionTitle: 'オプション取引', label: 'イ', content: '上昇' }, //46
                        { questionTitle: 'イギリスの銀行', label: 'ア', content: 'ユニバーサル・バンキング' }, //47
                        { questionTitle: '資金調達', label: 'イ', content: 'インパクト・ローン' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'ウ', content: 'オルタナティブ投資' }, //49
                        { questionTitle: '金融審議会報告書', label: 'エ', content: '顧客本位の業務運営に関する原則' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2022b" next-route="sisan2021a" />
        </section>
    </SeihoTestLayout>
</template>
