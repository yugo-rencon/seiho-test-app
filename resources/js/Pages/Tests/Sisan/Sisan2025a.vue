<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2025年度 フォームA";
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
                    questionTitle="生保の資産運用機構①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '単独制',
                        '委員会制',
                        '安全',
                        'ポートフォリオ',
                        '貸付', // 問11〜15
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
                    :title="title"
                    :subject="subject"
                    questionTitle="生保の資産運用機構②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'ファンド・マネージャー',
                        'アナリスト',
                        'ストラテジスト',
                        '人事ローテーション',
                        'アウトソーシング', // 問16〜20
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
                    questionTitle="一般貸付"
                    :contents="[
                        // rev: 2026-11-17 確認済み
                        '商法 → 民法', //p52
                        '正しい',
                        '生命保険会社の貸付は、長期の[[事業資金]]が中心となっている。', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="オプション取引"
                    :contents="[
                        // rev: 2026-11-17 確認済み
                        'オプション取引 → スワップ取引', //p94
                        '[[「ヨーロピアン・オプション」]]は、権利行使が、権利行使期間の最終日（満期日）にのみ限定されるものである。', //p91
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦後の日本経済と生命保険業"
                    :contents="[
                        // rev: 2026-11-17 確認済み
                        '正しい',
                        '戦後復興期の生命保険会社は、資本金、積立金等の自己資本はもちろん、保険金額[[1万円以上]]の契約についても全部打ち切らざるを得ない情勢になった。政府はその損失補償に当たったが、この際、[[会社は解散され]]、第二会社が設立され、新会社はもっぱら新契約業務、旧会社は旧契約の維持事務に当たり、その後再建整備が一段落するに及んで、旧会社は閉鎖された。', //p133
                        '昭和40年代前半には、日本は、生命保険の保有契約高において、西欧諸国やカナダ等を凌駕し、[[米国に次ぐ第2位]]の保険大国となった。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用部門の態勢整備"
                    :contents="[
                        // rev: 2026-11-17 確認済み
                        '商品の多様化に対応するためには、[[区分経理、特別勘定]]の一層の活用等により商品内容に応じた資産運用を進め、[[資産と負債を一体的に管理する態勢（ALM態勢）]]を一層強化する必要がある。', //p174-175
                        '正しい',
                        '長期係数 → リスク係数', //p176
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
                    questionTitle="株式投資の尺度"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '「利回り」は、通常、[[今期予想の1株当たり配当金を現在株価で除したもの]]である。', //p78
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産投資"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '2026年（令和8年）2月末現在で[[銘柄数は58]]、時価総額は約17.3兆円の規模になっている。', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="安定成長期の貸付面の多様化"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '昭和50年代には生命保険会社の貸付先は、高度成長期に柱となっていた製造業のウエイトが[[低下]]し、その一方で、サービス業を中心とした非製造業のウエイトが[[急速に高まった]]。', //p153
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
                            questionTitle: '融資審査',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: 'ポートフォリオ・マネジメント',
                            content: '[[アクティブ運用]]は、市場平均を上回るリターンを得ようとする積極的な運用であり、狭義では、リスク1単位当たりのリターンが市場平均より高い運用となる。', //p85
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '海外投融資',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '預金市場',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: '昭和初期の生命保険業界',
                            content: '経済界の苦境が深刻化する中で、それまで順調な推移をみせてきた生命保険業界も新契約の伸び悩み、失効、解約の増大に見舞われ、資金量の伸びも大幅に鈍化したが、[[その後の景気回復により、生命保険業界も再び順調な伸びを回復した]]。', //p126
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'バブル崩壊後の外国証券投資',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: '金融システム改革',
                            content: 'フリー・クリア・ワイド → フリー・フェアー・グローバル', //p166
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
                            questionTitle: '企業貸付',
                            label: 'ア',
                            content: '当座貸越',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '有価証券の定義',
                            label: 'イ',
                            content: '金融商品取引法',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'デリバティブ取引',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '短期金融市場',
                            label: 'イ',
                            content: '出し手',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '創業時の生命保険会社の資産運用',
                            label: 'ウ',
                            content: '銀行預金',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用手段の多様化',
                            label: 'エ',
                            content: 'オルタナティブ投資',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険会社の資金調達',
                            label: 'オ',
                            content: '',
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
            <TestNavigationButtons next-route="sisan2025b" />
        </section>
    </SeihoTestLayout>
</template>
