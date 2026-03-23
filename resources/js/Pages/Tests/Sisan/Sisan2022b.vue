<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2022年度 フォームB";
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
                    questionTitle="短期資金・現預金等-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金融機関',
                        '無担保',
                        '指値',
                        'ゼロ金利',
                        '手形買入', //問11〜15
                    ]"
                    :labels="[
                        'ケ', //11
                        'カ', //12
                        'ア', //13
                        'ク', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="短期資金・現預金等-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'CP',
                        '流動性',
                        '上昇',
                        '外国為替管理法',
                        '為替予約', //問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'カ', //17
                        'ク', //18
                        'コ', //19
                        'オ', //20
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
                    questionTitle="安全性の原則"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '信用リスク → 市場リスク', //p15
                        '正しい',
                        '分散投資政策 → 緩和政策', //p16
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
                    questionTitle="オプション取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'オプション取引 → スワップ取引', //p94
                        'アメリカン・オプションの説明 → ヨーロピアン・オプションの説明', //p91
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="高度経済成長期の資産運用"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '直接金融方式 → 間接金融方式', //p178
                        '正しい',
                        '極めて積極的 → 極めて消極的<br>高度成長期に高く評価された → 評価されなかった', //p184
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="株式投資の尺度"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '利回りは、今期予想の1株当たり配当金を現在株価で除したもの', //p78
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="特別勘定の運用状況"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '未だ全廃されてない → 全て撤廃された', //p116
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="各国の生保資産運用の傾向"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        'ロシアのスラブ型 → ドイツ・オランダ・スイスのゲルマン型', //p124-125
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="金融システム改革法の施行（1998年（平成10年））"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '証券会社等の行為規制の緩和、ディスクロージャーの簡素化 → 取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入', //p209
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
                        { questionTitle: '金融仲介機能', content: '正しい' }, //31
                        { questionTitle: '専門家の必要性の高まり', content: '正しい' }, //32
                        { questionTitle: '運用の実務', content: '融資審査部門 → マクロ調査部門' }, //33 p51
                        { questionTitle: '貸付の特徴', content: '事務リスク → 信用リスク<br>流動化が困難でない → 流動化が困難' }, //34 p52
                        { questionTitle: '現代ポートフォリオ理論', content: 'パッシブ運用の説明 → アクティブ運用の説明' }, //35 見つからない
                        { questionTitle: 'アメリカの保険会社の周辺業務', content: '正しい' }, //36
                        { questionTitle: '第二次大戦時の国債保有の要請', content: '正しい' }, //37
                        { questionTitle: '経済安定成長期の有価証券投資', content: '正しい' }, //38
                        { questionTitle: '改正保険業法の施行', content: '固有業務 → 付随業務' }, //39 p210
                        { questionTitle: '国際会計基準導入の動向', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: 'リスク意識の高まり', label: 'エ', content: '自己資本比率規制' }, //41
                        { questionTitle: '各国の保険監督方法', label: 'ア', content: '準拠主義' }, //42
                        { questionTitle: '融資審査', label: 'ウ', content: '自己資本' }, //43
                        { questionTitle: '公社債の発行方法の相違による分類', label: 'エ', content: '公募債' }, //44
                        { questionTitle: '不動産投資手法の多様化', label: 'ア', content: '新借地' }, //45
                        { questionTitle: '対外貸付実務', label: 'オ', content: '' }, //46
                        { questionTitle: 'ドイツの金融制度', label: 'オ', content: '' }, //47
                        { questionTitle: '創業時の生命保険会社の資産運用', label: 'オ', content: '' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'ウ', content: 'オルタナティブ投資' }, //49
                        { questionTitle: 'ソルベンシー確保', label: 'イ', content: '200' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2022a" next-route="sisan2022c" />
        </section>
    </SeihoTestLayout>
</template>
