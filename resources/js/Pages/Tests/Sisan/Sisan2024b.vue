<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2024年度 フォームB";
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
                    questionTitle="有価証券投資と海外投融資-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '収益',
                        '目標',
                        '利用効率',
                        '流動比率',
                        '量的分析', //問11〜15
                    ]"
                    :labels="[
                        'イ', //11
                        'ケ', //12
                        'キ', //13
                        'ウ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="有価証券投資と海外投融資-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '不動産',
                        '資産運用',
                        '非居住者',
                        '外貨建債権',
                        '黒字額', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'ウ', //17
                        'ア', //18
                        'コ', //19
                        'ク', //20
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
                    questionTitle="不動産の投資手法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '借地方式ではなく、新借地方式。', //p
                        '新借地方式ではなく、定期借地方式。', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="高度経済成長期の資産運用"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '直接金融方式ではなく、間接金融方式。', //p
                        '生命保険会社は、高度成長期を通じて株式投資には<b><u>消極的</u></b>であったものの、生保資金の増大に伴う株式保有額の著増、金融緩和期における株式投資の増大によって、全上場株式に対する保有割合は<b><u>高く</u></b>、<b><u>機関投資家として大きな役割を果たしてきた</u></b>。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="金融の自由化と生保資産運用の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利の面ではなく、業務面。', //p
                        '業務面ではなく、金利の面。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="改正保険業法の施行（1998年（平成10年））"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '社債の受託・公共債ディーリング・保険金信託は改正前から法定他業として認められていた。', //p
                        '正しい',
                        '生命保険会社の健全性・公正性の確保と利用者保護の視点から、保険会社または当該保険会社の子会社による株式の取得の制限（親子合算で10%まで）が<u><b>法定化された</b></u>。', //p
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
                    questionTitle="貸付の分類"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '貸付金の資金使途により、事業資金、非事業資金に大別される。生命保険会社の貸付は、<b><u>長期の事業資金</u></b>が中心となっている。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="特別勘定の運用状況"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金融の自由化の進展や顧客の資産運用ニーズの多様化を背景に、<b><u>特別勘定における大口信用供与規制も1998年（平成10年）の保険業法改正により全て撤廃され</u></b>、一般勘定と比較し自由な資産運用が可能となっている。', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="戦前の生保資産運用"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '不動産ではなく、銀行預金。', //p
                        '正しい',
                        '正しい',
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
                        { questionTitle: '日本の金融制度', content: '正しい' }, //31
                        {
                            questionTitle: '保険会社向けの総合的な監督指針', content:
                                '「保険会社向けの総合的な監替指針」においては、保険会社の監督事務に関し、その基本的考え方、監督上の評価項目、事務処理上の留意点について体系的に整理されている。また<b><u>法令遵守やリスク管理、審査管理態勢等の資産運用に関する項目も含まれている。</u></b>',
                        }, //32
                        { questionTitle: '生保の運用機構', content: '正しい' }, //33
                        { questionTitle: '運用の実務', content: '融資審査部門ではなく、マクロ調査部門。' }, //34
                        { questionTitle: 'スワップ取引', content: '金利スワップではなく、通貨スワップ。' }, //35
                        { questionTitle: '海外現地法人', content: '生保の海外投融資は、生保本体で直接行う場合のほか、生保本体と独立した海外現地法人を通じて行う場合がある。' }, //36
                        { questionTitle: '中堅・中小企業貸付対応', content: '正しい' }, //37
                        { questionTitle: '金融システム改革', content: '正しい' }, //38
                        { questionTitle: '運用規制ルールの変更等', content: '表面利率ではなく、応募者利回り。' }, //39
                        { questionTitle: '国際会計基準導入の動向', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '各国の保険監督方法', label: 'ア', content: '準拠主義' }, //41
                        { questionTitle: '資産運用の専門化の進展', label: 'エ', content: 'アナリスト' }, //42
                        { questionTitle: '企業貸付', label: 'ウ', content: '短期' }, //43
                        { questionTitle: '公社債の発行方法の相違による分類', label: 'エ', content: '公募債' }, //44
                        { questionTitle: '短期金融市場の概要', label: 'オ', content: '' }, //45
                        { questionTitle: '個人変額保険の運用', label: 'イ', content: '収益性' }, //46
                        { questionTitle: '特定金銭信託の活用', label: 'オ', content: '' }, //47
                        { questionTitle: '資産運用手段の多様化', label: 'ウ', content: 'オルタナティブ投資' }, //48
                        { questionTitle: '有価証券の評価方法', label: 'ア', content: '時価' }, //49
                        { questionTitle: 'ソルベンシー確保', label: 'イ', content: '200' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2024a" next-route="sisan2024c" />
        </section>
    </SeihoTestLayout>
</template>
