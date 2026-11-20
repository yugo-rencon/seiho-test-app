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
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-08-23 確認済み
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
                        // rev: 2026-11-19 確認済み
                        '[[市場リスク]]とは、価格変動リスクとも呼ばれ、有価証券や不動産などの市場価格の変動によって生じるリスクを指す。', //p15-16
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
                        // rev: 2026-11-21 確認済み
                        '流動比率は、流動資産の[[流動負債]]に対する比率をあらわしている。', //p60
                        '正しい',
                        '負債比率は自己資本に対する長期・短期負債の割合であらわされ、他人資本がどれだけ返済義務のない自己資本でカバーされているかを示し、[[低いほど財務の安定性が高いと言える]]。', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="アメリカの資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-21 確認済み
                        'どちらのモデル投資法に従うかは、各州の判断に任されることになった。', //p138（旧教科書のみ）
                        '正しい',
                        '生保各社は、このRBC比率を高めるため、比較的リスクの高い[[不動産関連投資やジャンク債を減らし]]、代わりに[[公社債（投資適格）の比重を高める]]ようになってきている。', //p138-139（旧教科書のみ）
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="経済安定成長期の有価証券投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '生命保険会社において、[[株式投資が活発化し]]、株式の資産構成比は上昇した。', //p152
                        '特金を利用した証券投資には、[[①キャピタル・ゲインのインカム化]]、[[②簿価分離]]といったメリットがある。', //p152
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="有価証券の評価方法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '取得価額（アモチゼーション・アキュムレーションを適用）で評価 → 時価評価', //p172
                        '時価評価 → 取得価額（アモチゼーション・アキュムレーションを適用）で評価', //p172
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="資産運用規制の体系"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-20 確認済み
                        '1996年（平成8年）4月から施行された保険業法の内容変更に伴い、[[財産利用方法書は廃止された]]。', //p28
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
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '2000年（平成12年）11月の「投資信託及び投資法人に関する法律」改正・施行を受けて、東京証券取引所による[[不動産投資信託（REIT）専用の上場市場が開設された]]。', //p99
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
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '昭和40年代後半以降、住宅金融制度が徐々に整備されるに伴い、個人への直接的な資金供給である住宅ローンへも[[進出している]]。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）（金融システム改革法）"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '固有業務 → 付随業務', //p169
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '日本の金融制度',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '運用規制',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '融資審査',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '貸付の特徴',
                            content: '貸付金の投資対象としての特質は、まず第一に、有価証券投資のような価格変動リスクは、極めて限定的である反面、貸付金が期日どおりに返済されるか否かという[[信用リスク]]があること、第二に、有価証券のような即時の流動化が[[困難]]なことなどである。', //p52
                        }, //34
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '海外現地法人',
                            content: '生保の海外投融資は、[[生保本体で直接行う]]場合のほか、生保本体と独立した海外現地法人を通じて行う場合がある。', //p105
                        }, //35
                        {
                            // rev: 2026-11-20 確認済み
                            questionTitle: '各国の生保資産運用の傾向',
                            content: '①公共金融機関型 → 産業金融機関・機関投資家型<br>②産業金融機関・機関投資家型 → <br>③住宅金融型 → 公共金融機関型', //p124（旧教科書のみ）
                        }, //36
                        {
                            questionTitle: '創業時の生命保険会社の資産運用',
                            content: '株式投資 → 銀行預金',
                        }, //37 p162-164
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'バブル崩壊後の資産運用',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融システム改革',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: '投資環境の動向',
                            content: '日本版コーポレートガバナンス・コード → 日本版スチュワードシップ・コード', //p182
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'リスク意識の高まり',
                            label: 'ア',
                            content: 'BIS（国際決済銀行）',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '有価証券の定義',
                            label: 'ア',
                            content: '金融商品取引法',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株式投資の尺度',
                            label: 'エ',
                            content: '当期純利益',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'コール・オプション',
                            label: 'ウ',
                            content: '買い付ける ',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '短期金融市場の概要',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人変額保険の運用',
                            label: 'イ',
                            content: '収益性',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ドイツの生命保険会社の資産運用',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '海外投融資のリスク',
                            label: 'ウ',
                            content: '安全性',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用手段の多様化',
                            label: 'イ',
                            content: 'ヘッジファンド',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融システム改革法',
                            label: 'エ',
                            content: '保護機構',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2023b" next-route="sisan2022a" />
        </section>
    </SeihoTestLayout>
</template>
