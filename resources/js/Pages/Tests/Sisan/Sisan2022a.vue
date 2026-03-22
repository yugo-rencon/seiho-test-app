<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2022年度 フォームA";
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
                    questionTitle="生命保険会社の資産運用におけるリスク管理-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '国際決済銀行（BIS）',
                        '自己資本',
                        'カントリー',
                        '金利',
                        '流動性', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'オ', //12
                        'ケ', //13
                        'ア', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="生命保険会社の資産運用におけるリスク管理-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '事務',
                        'ポートフォリオ',
                        'アセット・ミックス',
                        '投融資執行所管',
                        'リスク管理委員会', //問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'コ', //17
                        'ウ', //18
                        'オ', //19
                        'エ', //20
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
                    questionTitle="スワップ取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利スワップ → 通貨スワップ', //p94
                        '正しい',
                        '通貨スワップ → 金利スワップ', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="諸外国の生命保険会社の資産運用体制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        'イギリスの説明', //p
                        'ドイツの説明',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="経済安定成長期の有価証券投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '昭和61年(1986年)には変額保険発売に伴い特別勘定が創設されたこと、さらには平成年(1989年)まで株式市場が極めて好調に推移したこともあり、株式投資が活発化，株式の資産構成比は上昇した。', //p
                        'インカム・ゲインの累積化ではなく、キャビタル・ゲインのインカム化。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '本改正により認められた → 本改正の前から認められていた', //p210
                        '廃止された → 法定化された', //p211
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="資産運用規制の体系"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '保険検査マニュアルではなく、保険業法施行規則等によって規定されることになった。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="資産運用の専門化の進展"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        'トレーダー → ストラテジスト', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="アメリカの資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '生保各社は現在、このRBC比率を高めるため、比較的リスクの高い不動産関連投資やジャンク債を減らし、代わりに公社債 (投資適格)の比重を高めるようになってきている。', //p
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
                        { questionTitle: '生保資金の構成', content: '正しい' }, //31
                        { questionTitle: '投融資決定機構', content: '委員会制においては、バックグラウンドの違う複数の委員の合議によって投融資決定が行われる。このため、投融資の安全性を確保し得るという長所を持つが、機動性に劣ることになる。' }, //32
                        { questionTitle: '運用の実務', content: '融資審査部門 → マクロ調査部門' }, //33 p51
                        { questionTitle: 'オプション取引', content: 'オプション取引では、オプションの買い手はオプションを行使する権利を有するが、行使する義務はない。' }, //34
                        { questionTitle: '不動産投資の多様化', content: '借家 → 借地' }, //35 p99-100
                        { questionTitle: 'イギリスの銀行', content: '正しい' }, //36
                        { questionTitle: '第二次大戦時の国債保有の要請', content: '正しい' }, //37
                        { questionTitle: '中堅・中小企業貸付対応', content: '正しい' }, //38
                        { questionTitle: '金融関係5審議会による検討', content: '金融サービス市場法→ 金融システム改革' }, //39 207
                        { questionTitle: '国際会計基準導入の動向', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '運用原則', label: 'エ', content: '利差' }, //41
                        { questionTitle: '各国の保険監督方法', label: 'ア', content: '準拠主義' }, //42
                        { questionTitle: '融資審査', label: 'ウ', content: '自己資本' }, //43
                        { questionTitle: '海外投融資の内容と特徴', label: 'ア', content: '円建' }, //44
                        { questionTitle: '短期金融市場', label: 'イ', content: '出し手' }, //45
                        { questionTitle: '個人変額保険における資産の評価方法', label: 'エ', content: '毎日' }, //46
                        { questionTitle: 'カナダの生命保険会社の資産運用', label: 'イ', content: '抵当貸付' }, //47
                        { questionTitle: '昭和初期の金融恐慌期の生保資産運用', label: 'オ', content: '' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'ウ', content: 'オルタナティブ投資' }, //49
                        { questionTitle: 'リスクの多様化', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2023c" next-route="sisan2022b" />
        </section>
    </SeihoTestLayout>
</template>
