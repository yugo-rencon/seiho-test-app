<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2024年度 フォームC";
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
                    questionTitle="生命保険会社の資産運用におけるリスク管理-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '国際決済銀行（BIS）',
                        '自己資本',
                        '信用',
                        '市場',
                        '流動性', // 問１〜５
                    ]"
                    :labels="[
                        'ク', //1
                        'オ', //2
                        'ケ', //3
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    questionTitle="生命保険会社の資産運用におけるリスク管理-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        'ポートフォリオ',
                        'アセット・ミックス',
                        '投融資執行所管',
                        'リスク管理委員会',
                        '情報システム', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'コ', //7
                        'ウ', //8
                        'オ', //9
                        'エ', //10
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
                    questionTitle="生命保険会社と金融仲介機能"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '間接金融的 → 直接金融的', //p10-11
                        '信用創造機能 → 貯蓄機能', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="スワップ取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利スワップではなく、通貨スワップ。', //p
                        '通貨スワップではなく、金利スワップ。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="海外投融資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '保険リスクではなく、カントリーリスク。', //p
                        '生保の場合は負債構造のほとんどが円建てとなっており、外貨建て資産の増加に伴う将来の不確実性を除去するためには、<b><u>外貨建</u></b>債務を作って<b><u>外貨建</u></b>債権・債務を組み合わせて相殺することが求められる。', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="安定成長期の有価証券投資"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '昭和61年（1986年）には<b><u>変額保険発売に伴い特別勘定が創設された</u></b>こと、平成元年（1989年）末まで株式市場が極めて好調に推移したこともあり、株式投資が活発化、生命保険会社の株式の資産構成比は上昇した。', //p
                        '特定金銭信託(特金）を利用した証券投資には、<u><b>①キャピタル・ゲインのインカム化</b></u>、<b><u>②簿価分離</u></b>といったメリットがあり、業界内外における利回り競争が激化する中にあって、生命保険会社による特金を活用した証券投資は、株式投資を中心に増加を示した。', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="生保資産運用の今後"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '簿価評価ではなく、時価評価。', //p
                        '取得価額で評価ではなく、時価評価。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="生保資金の特徴と構成"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '価格変動準備金ではなく、保険料積立金。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="消費者ローン"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '住宅ローンや教育ローンではなく、フリー・ローン。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="先物取引"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '裁定取引ではなく、アウトライト取引。', //p
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
                        '昭和40年代後半以降、住宅金融制度が徐々に整備されるに伴い、個人への直接的な資金供給である住宅ローンへも<b><u>進出している</u></b>。', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="金融システム改革法の施行（1998年（平成10年））"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '投資家や資金調達者が、従来の取引所市場のみならず、多様な市場と資金調達のチャンネルを利用できるよう、取引所集中義務の<b><u>撤廃</u></b>、店頭登録市場の<b><u>機能強化</u></b>、私設取引システムの<b><u>導入</u></b>などの改革が進められた。', //p
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '金融市場', content: '3年ではなく、1年。' }, //31
                        {
                            questionTitle: '保険会社向けの総合的な監督指針', content:
                                '「保険会社向けの総合的な監替指針」においては、保険会社の監督事務に関し、その基本的考え方、監督上の評価項目、事務処理上の留意点について体系的に整理されている。また<b><u>法令遵守やリスク管理、審査管理態勢等の資産運用に関する項目も含まれている。</u></b>',
                        }, //32
                        { questionTitle: '生保の運用機構', content: '正しい' }, //33
                        {
                            questionTitle: '貸付の特徴', content:
                                '貸付金の投資対象としての特質は、まず第一に、有価証券投資のような価格変動リスクは、極めて限定的である反面、貸付金が期日どおりに返済されるか否かという<b><u>信用リスク</u></b>があること。第二に、有価証券のような即時の流動化が<u><b>困難</b></u>なことなどである。',
                        }, //34
                        { questionTitle: 'リスク特性', content: '一般的な株価動向として、株式は非市場リスクと市場リスクのいずれの影響も高い場合が多く、債券は非市場リスクより市場リスクの影響が高い場合が多い。' }, //35
                        { questionTitle: '短期金融市場', content: '正しい' }, //36
                        { questionTitle: '公共投資', content: '正しい' }, //37
                        { questionTitle: 'バブル崩壊後の資産運用', content: '正しい' }, //38
                        { questionTitle: '改正保険業法の施行（1998年（平成10年））', content: '固有業務ではなく、付随業務。' }, //39
                        { questionTitle: '国際会計基準導入の動向', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '各国の保険監督方法', label: 'ア', content: '準拠主義' }, //41
                        { questionTitle: '有価証券の定義', label: 'ア', content: '金融商品取引法' }, //42
                        { questionTitle: '株式投資の尺度', label: 'エ', content: '当期純利益' }, //43
                        { questionTitle: '預金市場', label: 'オ', content: '' }, //44
                        { questionTitle: '個人変額保険における資産の評価方法', label: 'エ', content: '毎日' }, //45
                        { questionTitle: '大正〜昭和初期の生保資産運用', label: 'イ', content: '社債' }, //46
                        { questionTitle: '高度経済成長期の資産運用', label: 'ウ', content: '機関投資家' }, //47
                        { questionTitle: '資産運用手段の多様化', label: 'ウ', content: 'オルタナティブ投資' }, //48
                        { questionTitle: '生命保険会社の資金調達', label: 'オ', content: '' }, //49
                        { questionTitle: 'ソルベンシー確保', label: 'イ', content: '200' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2024b" next-route="sisan2023a" />
        </section>
    </SeihoTestLayout>
</template>
