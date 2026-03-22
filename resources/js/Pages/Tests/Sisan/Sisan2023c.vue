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
                        '信用リスクではなく、市場リスク。', //p
                        '正しい',
                        '分散投資政策ではなく、緩和政策。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="財務3比率"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '流動比率は、流動資産の流動負債に対する比率をあらわしている。', //p
                        '正しい',
                        '負債比率は、他人資本の自己資本に対する比率をあらわしている。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="アメリカの資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'どちらのモデル投資法に従うかは、各州の判断に任されることになった。', //p
                        '正しい',
                        '比較的リスクの高い不動産関連投資やジャンク債を減らし、代わりに公社債の比重を高めるようになってきている。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="経済安定成長期の有価証券投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '株式投資が活性化した。', //p
                        '①キャピタル・ゲインのインカム化、②薄価分離といったメリットがある。',
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
                        '財産利用方法書は廃止された。', //p
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
                        '子会社形態により互いに他業態の業務を行うことが可能である。', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="安定成長期の貸付面の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="['正しい', '正しい', '昭和40年代後半以降、住宅金融制度が徐々に整備されるに伴い、個人への直接的な資金供給である住宅ローンへも進出している。']"
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
                        {
                            questionTitle: '貸付の特徴',
                            content:
                                '貸付金の投資対象としての特質は、まず第一に、有価証券投資のような価格変動リスクは、極めて限定的である反面、貸付金が期日どおりに返済されるか否かという信用リスクがあること。第二に、一定の返済期限に拘束されるので、有価証券のような即時の流動化が困難なことなどである。',
                        }, //34
                        { questionTitle: '海外現地法人', content: '生保の海外投融資は、生保本体で直接行う場合のほか、生保本体と独立した海外現地法人を通じて行う場合がある。' }, //35
                        {
                            questionTitle: '各国の生保資産運用の傾向',
                            content:
                                '①運用対象が社債あるいは産業界に対する貸付、場合によっては株式などが中心となっている産業金融機関・機関投資家型、②抵当貸付を標準的投資対象とする住宅金融型、③国債などの有価証券、場合によっては勤労者向け住宅投資の比重の高い公共金融機関型の3つの分類が存在する',
                        }, //36
                        { questionTitle: '創業時の生命保険会社の資産運用', content: '生命保険会社が銀行預金に相当額の資金を向けていたのは当然のことである。' }, //37
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
