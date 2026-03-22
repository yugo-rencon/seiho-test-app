<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2023年度 フォームB";
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
                    questionTitle="資産運用の専門化の進展"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'ファンド・マネージャー → エコノミスト', //p48
                        '正しい',
                        'エコノミスト → ストラテジスト', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="各国の生保資産運用の傾向"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        'ドイツ、オランダ、スイスなどがこの類型に属する。', //p
                        'フランス、イタリア、ベルギーなどがこの類型に属する。',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="金融の自由化と生保資産運用の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '流動性預金金利 → 定期性預金金利', //p201
                        '定期性預金金利 → 流動性預金金利', //p201
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="資産運用部門の態勢整備"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'ディスクロージャー・一般勘定 → 区分経理・特別勘定<br>資産と負債を分離して管理 → 資産と負債を一体的に管理', //p215
                        '正しい',
                        '長期係数 → リスク係数', //p217
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
                        '比較的リスクの高い不動産関連投資やジャンク債を減らし、代わりに公社債の比重を高めるようになってきている。', //p
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
                    questionTitle="金融システム改革法の施行（1998年（平成10年））"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '取引所集中の義務化、店頭登録市場の廃止、私設取引システムの撤廃 → 取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入', //p209
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '日本の金融制度', content: '正しい' }, //31
                        { questionTitle: 'リスク管理', content: '正しい' }, //32
                        { questionTitle: '融資審査', content: '正しい' }, //33
                        { questionTitle: '不動産投資の多様化', content: '借家 → 借地' }, //34 p99-100
                        { questionTitle: '個人変額保険における資産の評価方法', content: '毎日評価を行い、運用の成果を日々反映させている。' }, //35
                        { questionTitle: 'カナダの生命保険会社の資産運用', content: '正しい' }, //36
                        { questionTitle: '公共投資', content: '正しい' }, //37
                        { questionTitle: '海外投融資', content: '海外融資ではなく、外国債券等を中心に総資産に占める海外投融資の割合は再び漸増傾向にある。' }, //38
                        { questionTitle: '有価証券の評価方法', content: '責任準備金対応債券は時価で評価 → 取得価額で評価' }, //39 p213
                        { questionTitle: '投資環境の動向', content: '日本版コーポレートガバナンス・コード → 日本版スチュワードシップ・コード' }, //40 p220
                        // 問41〜50
                        { questionTitle: 'リスク意識の高まり', label: 'ア', content: 'BIS（国際決済銀行）' }, //41
                        { questionTitle: '投融資決定機構', label: 'ア', content: '単独制' }, //42
                        { questionTitle: '公社債の発行方法の相違による分類', label: 'エ', content: '公募債' }, //43
                        { questionTitle: 'コール・オプション', label: 'ウ', content: '買い付ける' }, //44
                        { questionTitle: '対外貸付実務', label: 'オ', content: '' }, //45
                        { questionTitle: '短期金融市場', label: 'イ', content: '出し手' }, //46
                        { questionTitle: 'アメリカの生命保険会社の業務範囲', label: 'エ', content: '銀行' }, //47
                        { questionTitle: '創業時の生命保険会社の資産運用', label: 'オ', content: '' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'イ', content: 'ヘッジファンド' }, //49
                        { questionTitle: '改正保険業法の施行（1998年（平成10年）12月）（金融システム改革法）', label: 'ウ', content: '付随業務' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2023a" next-route="sisan2023c" />
        </section>
    </SeihoTestLayout>
</template>
