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
                        '第二次大戦後に規制強化 → 第二次大戦後に株式投資が拡大', //p77
                        '正しい',
                        '利回り・株価収益率（PER） ↔︎ 株価純資産倍率（PBR）', //p78
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="不動産の投資手法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '共同ビル方式 → 借地方式', //p99
                        '正しい',
                        '契約の更新を自動的に行う → 契約更新はしない', //p100
                     ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="海外投融資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '継続ではなく撤廃。', //p
                        '正しい',
                        '外貨建て資産の増加に伴う将来の不確実性を除去するためには、外貨建債務をつくって外貨建債券 ・債務を組み合わせて相殺することが求められる。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '固有業務 → 付随業務', //p210
                        '廃止された → 法定化された', //p211
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
                    questionTitle="運用原則"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '公平性ではなく公共性', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="貸付の分類"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '生命保険会社の貸付は、長期の事業資金が中心となっている。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="各国の生命保険会社の資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'RBC 比率を高めるため、比較的リスクの高い不動産関連投資を減らし、代わりに公社債の比重を高めるようになってきている。', //p
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
                        '正しい',
                        '株式投資が活発化 ，株式の資産構成比は上昇した。', //p
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
                        { questionTitle: '金融関連業務', content: '保険金信託業務は、付随業務ではなく法定他業に規定されている。' }, //32
                        { questionTitle: '融資審査', content: '正しい' }, //33
                        { questionTitle: 'スワップ取引', content: '金利スワップ → 通貨スワップ' }, //34 p94
                        { questionTitle: '外国不動産投資', content: '本社ではなく現地法人を通じて行われるケースがほとんどである。' }, //35
                        { questionTitle: '不動産投資の実務', content: '正しい' }, //36
                        { questionTitle: 'ドイツの資産運用の特徴', content: '正しい' }, //37
                        { questionTitle: '昭和初期の生命保険業界', content: 'その後の景気回復により、生命保険業界も再び順調な伸びを回復。' }, //38
                        { questionTitle: '住宅金融対応', content: '正しい' }, //39
                        { questionTitle: '国際会計基準導入の動向', content: '日本版スチュワードシップ・コード → IFRSへの対応の在り方に関する当面の方針' }, //40 p214
                        // 問41〜50
                        { questionTitle: '生保資金の運用規制', label: 'イ', content: '独占禁止法' }, //41
                        { questionTitle: '資産運用機能の充実', label: 'オ', content: '' }, //42
                        { questionTitle: '貸付の特徴', label: 'ウ', content: '流動' }, //43
                        { questionTitle: '国債', label: 'エ', content: '歳入債' }, //44
                        { questionTitle: '短期金融市場の概要', label: 'オ', content: '' }, //45
                        { questionTitle: '個人変額保険の運用', label: 'ア', content: '収益性' }, //46
                        { questionTitle: 'ドイツの金融制度', label: 'エ', content: '直接金融' }, //47
                        { questionTitle: '生命保険会社の資金調達', label: 'ア', content: '社債' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'イ', content: 'ヘッジファンド' }, //49
                        { questionTitle: '金融システム改革法', label: 'ウ', content: '保護機構' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2021a" next-route="sisan2021c" />
        </section>
    </SeihoTestLayout>
</template>
