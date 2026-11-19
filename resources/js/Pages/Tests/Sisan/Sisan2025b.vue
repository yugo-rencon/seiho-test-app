<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2025年度 フォームB";
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
                    questionTitle="特別勘定①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '安全志向',
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
                    questionTitle="特別勘定②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '株式の取得の制限',
                        '安全性',
                        '契約者',
                        '合同運用',
                        'ヘッジファンドの特性', // 問16〜20
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
                    questionTitle="消費者ローン"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '住宅ローンや教育ローン → フリー・ローン', //p58
                        '年率30％ → 年率20％', //p58
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産の投資手法"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '共同ビル方式 → 借地方式', //p99
                        '正しい',
                        '定期借地方式は、土地所有者には一時金と借地期間中の借地料を支払い、[[借地期間が終了したときには新たな契約更新を行わずに、土地所有者は必ず土地の返還を受けることができる]]。', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦前の生保資産運用"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '銀行の株式 → 銀行預金', //p123-124
                        '正しい',
                        '経済界の苦境が深刻化する中で、それまで順調な推移をみせてきた生命保険業界も新契約の伸び悩み、失効、解約の増大に見舞われ、資金量の伸びも大幅に鈍化したが、[[その後の景気回復により、生命保険業界も再び順調な伸びを回復した]]。', //p126
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '新たに認められた → 改正前から認められていた', //p169
                        '法定他業 → 付随業務', //p169
                        '正しい',
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
                    questionTitle="運用機構"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '委員会制 → 単独制', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="先物取引"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '正しい',
                        '裁定取引 → ヘッジ取引', //p89
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融の自由化と生保資産運用の多様化"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '金利の面 → 業務面', //p160
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
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生保の資産運用と実務',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '貸付形態別分類',
                            content: '',
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '不動産投資の実務',
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '短期金融市場',
                            content: '',
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '第二次大戦時の資産運用',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '住宅金融対応',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: 'バブル崩壊後の資産運用',
                            content: '',
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
                            questionTitle: '貸付の特質',
                            label: 'ウ',
                            content: '流動',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株式投資の尺度',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'オプション取引',
                            label: 'イ',
                            content: '上昇',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '海外投融資の内容と特質',
                            label: 'エ',
                            content: '不動産',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '預金市場',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '高度経済成長期の資産運用',
                            label: 'イ',
                            content: '株式',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '海外投融資のリスク',
                            label: 'ア',
                            content: '為替リスク',
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
            <TestNavigationButtons previous-route="sisan2025a" next-route="sisan2025c" />
        </section>
    </SeihoTestLayout>
</template>
