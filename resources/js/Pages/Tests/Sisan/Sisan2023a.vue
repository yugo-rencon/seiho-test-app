<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2023年度 フォームA";
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
                    questionTitle="不動産投資の多様化-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '保険業法施行規則',
                        '物価',
                        '流動性',
                        'オフィスビル',
                        'REIT（不動産投資信託）', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'オ', //12
                        'ア', //13
                        'ウ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="不動産投資の多様化-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '借地',
                        '借地人',
                        '新借地',
                        '所轄税務署',
                        '時価', //問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'キ', //17
                        'エ', //18
                        'ア', //19
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
                    questionTitle="運用機構"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '単独制 → 委員会制', //p46
                        '委員会制 → 単独制', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="各国における保険会社の周辺業務の取り扱い"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'ニューヨーク州法の持株会社規定では保険持株会社の業務を制限していない。', //p
                        '現行の銀行法では、銀行が支店内で販売することができる保険商品は、規制上、貸付業務に密接に絡む保険や旅行保険に限られている。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="戦後の日本経済と生命保険業"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '5000円以上 → 1万円以上<br>解散することなく → 解散した', //p174
                        '第1位の保険大国 → 米国に次ぐ第2位の保険大国', //p176
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）（金融システム改革法）"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '本改正により認められた → 改正前から認められていた', //p210
                        '正しい',
                        '廃止された → 法定化された', //p210-211
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
                    questionTitle="企業貸付"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '金額に上乗せして貸付 → 金額から差し引いて貸付', //p54
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
                        '正しい',
                        'フランス、イタリア、ベルギーなどのラテン諸国に見られるラテン型と称されるべきものである。', //p
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
                        '昭和40年代後半以降、住宅金融制度が徐々に整備されるに伴い、個人への直接的な資金供給である住宅ローンへも進出している。', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="有価証券の評価方法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '時価評価 → 取得価額評価', //p213
                        '正しい',
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
                        { questionTitle: '生保資金の構成', content: '自己資本 → 他人資本' }, //32 p11
                        { questionTitle: '融資審査', content: '正しい' }, //33
                        { questionTitle: '公社債', content: '変動利付 → 確定利付' }, //34 p69
                        { questionTitle: '預金市場', content: '正しい' }, //35
                        { questionTitle: 'イギリスの生命保険会社の資産運用の特徴', content: '正しい' }, //36
                        {
                            questionTitle: '高度経済成長期の資産運用',
                            content: '高度成長期を通じて間接金融方式が定着する中で、産業界からの資金需要が著しく高まり、また貸付の利回りが相対的に高かったこともあって、生命保険会社は産業界からの借入需要に積極的に応じることとなった。',
                        }, //37
                        { questionTitle: '資産運用の多様化', content: '正しい' }, //38
                        { questionTitle: '金融システム改革法の施行（1998年（平成10年）12月）', content: '取引所集中の義務化、店頭登録市場の廃止、私設取引システムの撤廃 → 取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入' }, //39 p209
                        { questionTitle: '投資環境の動向', content: '日本版コーポレートガバナンス・コード → 日本版スチュワードシップ・コード' }, //40 p220
                        // 問41〜50
                        { questionTitle: 'リスク意識の高まり', label: 'ア', content: 'BIS（国際決済銀行）' }, //41
                        { questionTitle: '資産運用の専門化の進展', label: 'エ', content: 'アナリスト' }, //42
                        { questionTitle: '融資審査における財務諸表分析', label: 'オ', content: '' }, //43
                        { questionTitle: 'コール・オプション', label: 'ウ', content: '買い付ける' }, //44
                        { questionTitle: '海外投融資の内容と特徴', label: 'イ', content: '円建' }, //45
                        { questionTitle: '個人変額保険における資産の評価方法', label: 'エ', content: '毎日' }, //46
                        { questionTitle: 'ドイツの金融制度', label: 'オ', content: '' }, //47
                        { questionTitle: '特定金銭信託の活用', label: 'ア', content: '国債' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'イ', content: 'ヘッジファンド' }, //49
                        { questionTitle: 'ソルベンシー確保', label: 'ウ', content: 'リスク係数' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2024c" next-route="sisan2023b" />
        </section>
    </SeihoTestLayout>
</template>
