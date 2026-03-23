<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2023年度 フォームC";
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
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能-①"
                    :title="title"
                    :subject="subject"
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
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '保険料',
                        '長期の貸付',
                        '国債',
                        '直接金融',
                        '損害保険業務', //問６〜10
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
                    questionTitle="生保の資産運用機構-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '単独制',
                        '委員会制',
                        '安全',
                        'ポートフォリオ',
                        '貸付', //問11〜15
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
                    questionTitle="生保の資産運用機構-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'ファンド・マネージャー',
                        'アナリスト',
                        'ストラテジスト',
                        '人事ローテーション',
                        'アウトソーシング', //問16〜20
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
                    :questionNumber="22"
                    questionTitle="財務3比率"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '流動資産の自己資本に対する比率 → 流動資産の流動負債に対する比率', //p60
                        '正しい',
                        '比率が200%以内であれば健全 → 比率が低いほど財務が安定', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="アメリカの資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '廃止された → 両方のモデル投資法を併用', //p138
                        '正しい',
                        '公社債 ↔︎ 不動産関連投資やジャンク債', //p138
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="経済安定成長期の有価証券投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '株式投資は活発化しなかった → 活発化した', //p193
                        'インカム・ゲインの累積化 → キャピタル・ゲインのインカム化<br>簿価通算 → 簿価分離', //p194
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
                    questionTitle="資産運用規制の体系"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '新たに作成 → 廃止', //p28
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="不動産投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '現在開設されていない → 開設されている', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="各国の金融制度"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '他業態の業務を行うことは禁止 → 子会社形態で可能', //p139
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="安定成長期の貸付面の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '住宅ローンから撤退 → 住宅ローンへ進出', //p196
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）（金融システム改革法）"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '固有業務 → 付随業務', //p210
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '日本の金融制度', content: '正しい' }, //31
                        { questionTitle: '運用規制', content: '正しい' }, //32
                        { questionTitle: '融資審査', content: '正しい' }, //33
                        { questionTitle: '貸付の特徴', content: '市場リスク → 信用リスク<br>流動化が容易 → 流動化が困難' }, //34 p52
                        { questionTitle: '海外現地法人', content: '直接行うことはない → 直接行うこともある' }, //35 p105
                        { questionTitle: '各国の生保資産運用の傾向', content: '①公共金融機関型 → 産業金融機関・機関投資家型<br>②産業金融機関・機関投資家型 → <br>③住宅金融型 → 公共金融機関型' }, //36 p124
                        { questionTitle: '創業時の生命保険会社の資産運用', content: '株式投資 → 銀行預金' }, //37 p162-164
                        { questionTitle: 'バブル崩壊後の資産運用', content: '正しい' }, //38
                        { questionTitle: '金融システム改革', content: '正しい' }, //39
                        { questionTitle: '投資環境の動向', content: '日本版コーポレートガバナンス・コード → 日本版スチュワードシップ・コード' }, //40 p220
                        // 問41〜50
                        { questionTitle: 'リスク意識の高まり', label: 'ア', content: 'BIS（国際決済銀行）' }, //41
                        { questionTitle: '有価証券の定義', label: 'ア', content: '金融商品取引法' }, //42
                        { questionTitle: '株式投資の尺度', label: 'エ', content: '当期純利益' }, //43
                        { questionTitle: 'コール・オプション', label: 'ウ', content: '買い付ける ' }, //44
                        { questionTitle: '短期金融市場の概要', label: 'オ', content: '' }, //45
                        { questionTitle: '個人変額保険の運用', label: 'イ', content: '収益性' }, //46
                        { questionTitle: 'ドイツの生命保険会社の資産運用', label: 'オ', content: '' }, //47
                        { questionTitle: '海外投融資のリスク', label: 'ウ', content: '安全性' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'イ', content: 'ヘッジファンド' }, //49
                        { questionTitle: '金融システム改革法', label: 'エ', content: '保護機構' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2023b" next-route="sisan2022a" />
        </section>
    </SeihoTestLayout>
</template>
