<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2025年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能①"
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
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と資産運用機能、金融仲介機能②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '保険料',
                        '長期の貸付',
                        '国債',
                        '直接金融',
                        '損害保険業務', // 問6〜10
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
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '緩和',
                        '信託会社',
                        '持株会社',
                        'デリバティブ取引',
                        '付随業務', // 問11〜15
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
                    :title="title"
                    :subject="subject"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '法定他業',
                        '大口信用供与規制',
                        '10%',
                        '早期是正措置',
                        'ソルベンシー・マージン比率', // 問16〜20
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
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用に係るリスク管理"
                    :contents="[
                        // rev: 2026-11-10 確認済み
                        'アセット・ミックス → バリュー・アット・リスク（VaR）', //p21
                        '正しい',
                        '商品設計やポートフォリオの構築に際しては[[他の保険商品以上の流動性確保の必要性が高い]]。', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="運用機構"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '単独制 → 委員会制', //p46
                        '委員会制 → 単独制', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="融資審査"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '損益計算書 → 貸借対照表', //p59
                        '正しい',
                        '連続する数期間や他社との比較を行ううえで[[比率法]]が用いられる場合が多い。', //p60
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="バブル崩壊後の生保資産運用"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '生保各社はリスク性資産である株式の保有比率を[[減少]]させ、一方で、国債を中心とした国内公社債を[[増加]]させた。', //p157
                        '正しい',
                        'ユニバーサル・バンキング投資 → オルタナティブ投資', //p158
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融の自由化と生保資産運用の多様化"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '[[通常貯金と一定の金利格差を維持したまま]]、1994年（平成6年）10月から流動性預金金利の自由化が実施された。', //p160
                        '保険会社のソルベンシー・マージンの充実を図り、一層の健全かつ安定的な経営に資することを目的に劣後特約または[[永久劣後特約付の借入金]]および[[社債の発行]]（期間5年超）が認められるなど、市場資金へのアクセスにも途が開かれた。', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="運用原則"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '公平性 → 公共性', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用の専門化の進展"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '正しい',
                        'トレーダー → ストラテジスト', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者ローン"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '年率30％ → 年率20％', //p58
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦前の生保資産運用"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '不動産 → 銀行預金', //p123-124
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="有価証券の評価方法"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '時価評価 → 取得価額（アモチゼーション・アキュムレーションを適用）で評価', //p172
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: '生保資金の構成',
                            content: '自己資本 → 他人資本', //p11
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '運用規制',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '貸付の特徴',
                            content: '貸付金の投資対象としての特質は、まず第一に、有価証券投資のような価格変動リスクは、極めて限定的である反面、貸付金が期日どおりに返済されるか否かという[[信用リスク]]があること、第二に、有価証券のような即時の流動化が[[困難]]なことなどである。', //p52
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公社債の分類',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '不動産投資の多様化',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: '外国為替実務',
                            content: '例えば顧客がドルを買う場合には[[TTSレート]]が適用され、逆にドルを売る場合には[[TTBレート]]が適用される。', //p110
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '安定成長期の有価証券投資',
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '海外投融資への取り組み',
                            content: '',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用の多様化',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: '投資環境の動向',
                            content: '日本版コーポレートガバナンス・コード → 日本版スチュワードシップ・コード', //p182
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '各国の保険監督方法',
                            label: 'ウ',
                            content: '公示主義',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財務3比率',
                            label: 'ウ',
                            content: '自己資本',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '対外貸付実務',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '短期金融市場の概要',
                            label: 'イ',
                            content: 'インターバンク市場',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人変額保険における資産の評価方法',
                            label: 'ア',
                            content: '時価主義',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '戦後復興期の生命保険業',
                            label: 'イ',
                            content: '自己資本',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特金運用の活用',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'バブル崩壊後の外国証券投資',
                            label: 'エ',
                            content: 'サブプライムローン問題',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融システム改革法',
                            label: 'エ',
                            content: '保険契約者保護機構',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融商品会計に関する実務指針',
                            label: 'ア',
                            content: '日本公認会計士協会',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2025b" next-route="sisan2024a" />
        </section>
    </SeihoTestLayout>
</template>
