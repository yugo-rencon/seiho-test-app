<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2021年度 フォームB";
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
                    questionTitle="生保の資産運用機構-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '単独制',
                        '委員会制',
                        '安全',
                        'ポートフォリオ',
                        '貸付', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'ク', //2
                        'ア', //3
                        'コ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    questionTitle="生保の資産運用機構-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'ファンド・マネージャー',
                        'アナリスト',
                        'ストラテジスト',
                        '人事ローテーション',
                        'アウトソーシング', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'エ', //7
                        'ア', //8
                        'コ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    questionTitle="貸付の実行-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '財団抵当',
                        '時価',
                        '瑕疵（かし）',
                        '不動産鑑定士',
                        '控除', //問11〜15
                    ]"
                    :labels="[
                        'エ', //11
                        'ク', //12
                        'カ', //13
                        'イ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="貸付の実行-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '一括返済',
                        '収益性',
                        'プライム・レート',
                        '低く',
                        '金銭消費貸借契約証書', //問16〜20
                    ]"
                    :labels="[
                        'オ', //16
                        'ア', //17
                        'コ', //18
                        'ク', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    questionTitle="株式投資における生命保険会社の対応"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '第二次大戦後に規制強化 → 第二次大戦後に株式投資が拡大', //p77
                        '正しい',
                        '株式投資の尺度として、株式の[[利潤証券]]たる価値に注目した「利回り」、「株価収益率（PER）」および株式の[[物的証券]]たる価値に注目した「株価純資産倍率（PBR）」が代表的である。', //p78
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="不動産の投資手法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '共同ビル方式 → 借地方式', //p99
                        '正しい',
                        '定期借地方式は、土地所有者には一時金と借地期間中の借地料を支払い、[[借地期間が終了したときには新たな契約更新を行わずに、土地所有者は必ず土地の返還を受けることができる]]。', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="海外投融資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '2012年（平成24年）4月には保有する資産の種類ごとに総資産額に一定の比率を乗じた額を上限とする資産運用比率規制が[[撤廃された]]。', //p103
                        '正しい',
                        '外貨建て資産の増加に伴う将来の不確実性を除去するためには、[[外貨建債務をつくって外貨建債権・債務を組み合わせて相殺する]]ことが求められる。', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '固有業務 → 付随業務', //p169
                        '廃止された → 法定化された', //p169-170
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
                    questionTitle="運用原則"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-18 確認済み
                        '正しい',
                        '正しい',
                        '公平性 → 公共性', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="貸付の分類"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '生命保険会社の貸付は、長期の[[事業資金]]が中心となっている。', //p53
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="各国の生命保険会社の資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-20 確認済み
                        '生保各社は、このRBC比率を高めるため、比較的リスクの高い[[不動産関連投資やジャンク債を減らし]]、代わりに[[公社債（投資適格）の比重を高める]]ようになってきている。', //p138-139（旧教科書のみ）
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="先物取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '正しい',
                        '裁定取引 → ヘッジ取引', //p89
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="安定成長期の有価証券投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-11-19 確認済み
                        '正しい',
                        '生命保険会社において、[[株式投資が活発化し]]、株式の資産構成比は上昇した。', //p152
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
                            questionTitle: '生保資金の構成',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-11-21 確認済み
                            questionTitle: '金融関連業務',
                            content: '保険金信託業務は、[[法定他業]]として明記されている。', //p40-41
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '融資審査',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-11-19 確認済み
                            questionTitle: 'スワップ取引',
                            content: '金利スワップ → 通貨スワップ', //p94
                        }, //34
                        {
                            // rev: 2026-11-21 確認済み
                            questionTitle: '外国不動産投資',
                            content: '本社が直接所有するケースがほとんど → 現地法人を通じて行われるケースがほとんど', //p109
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '不動産投資の実務',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ドイツの資産運用の特徴',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-11-18 確認済み
                            questionTitle: '昭和初期の生命保険業界',
                            content: '経済界の苦境が深刻化する中で、それまで順調な推移をみせてきた生命保険業界も新契約の伸び悩み、失効、解約の増大に見舞われ、資金量の伸びも大幅に鈍化したが、[[その後の景気回復により、生命保険業界も再び順調な伸びを回復した]]。', //p126
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '住宅金融対応',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-21 確認済み
                            questionTitle: '国際会計基準導入の動向',
                            content: '日本版スチュワードシップ・コード → IFRSへの対応の在り方に関する当面の方針', //p173
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生保資金の運用規制',
                            label: 'イ',
                            content: '独占禁止法',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産運用機能の充実',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '貸付の特徴',
                            label: 'ウ',
                            content: '流動',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国債',
                            label: 'エ',
                            content: '歳入債',
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
                            label: 'ア',
                            content: '収益性',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ドイツの金融制度',
                            label: 'エ',
                            content: '直接金融',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険会社の資金調達',
                            label: 'ア',
                            content: '社債',
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
                            label: 'ウ',
                            content: '保護機構',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2021a" next-route="sisan2021c" />
        </section>
    </SeihoTestLayout>
</template>
