<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2025年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険FPの役割"
                    :relatedProblems="['2025a1', '2025b1', '2025c1', '2024a1', '2024b1', '2024c1', '2023a13', '2023b13', '2023c13']"
                    :contents="[
                        '協力は一切得ず → 協力を得ながら', //p1
                        '応えることができる → 応えることが難しくなってきた', //p2
                        '正しい',
                        '子どもの結婚資金 → こどもの教育資金', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="['2025a2', '2025b2', '2025c2', '2023a1', '2023c1']"
                    :contents="[
                        '生保FPが決めていく姿勢 → 生保FPがお客さまの希望を聞き出す姿勢', //p6
                        '正しい',
                        'キャッシュフロー表 ↔︎ ライフサイクル表', //p6
                        'ストックは含まない → 含む', //p7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41', '2024a2', '2024b2', '2024c2', '2023a2', '2023b2', '2023c2']"
                    :contents="[
                        '正しい',
                        '予定外の大きな支出が発生するリスクは考えにくい → 考えられる', //p16
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '生命保険でしか対応できない → 生命保険だけではなく、さまざまな金融商品で対応可能', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（20歳代〜40歳代）"
                    :relatedProblems="['2025a4', '2025a14', '2025b4', '2025c14', '2024a14', '2024b14', '2024c14', '2023a14', '2023b14']"
                    :contents="[
                        '提案する必要はない → 提案する必要がある（医療・死亡リスクにも備える）', //p21
                        '正しい',
                        'すべてがマネーポートフォリオの中心となる → 教育資金と住宅資金が中心となる', //p23
                        '公的年金で十分 → 十分でない（退職金をローン返済資金とするのは妥当でない）', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2025a5', '2025b5', '2025c5', '2024b4', '2024c16', '2023a4', '2023b4', '2023b17', '2023c4']"
                    :contents="[
                        '購入金額の1割以上 → 購入金額の2割以上', //p49
                        '流動性は求められない → 求められる（手付金等を準備するため）', //p50
                        '正しい',
                        '毎年確定申告が必要となる → 次年度以降確定申告は必要ない', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="資金運用の3要素による金融商品の分類"
                    :relatedProblems="['2025b6', '2025c17', '2024a5', '2024b5', '2024c5']"
                    :contents="[
                        '正しい',
                        'MRFは、「流動性」の高い商品', //p63
                        '財形貯蓄は、「安全性」の高い商品のうち積立型', //p63
                        '定額貯金は、「安全性」の高い商品のうち据置型', //p63
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="['2025a6', '2025a18', '2025b7', '2025b18', '2025c6', '2025c18', '2024a6', '2024a17', '2024b6', '2024c6', '2023a6', '2023a42', '2023b42', '2023c42']"
                    :contents="[
                        '集中投資 → 分散投資', //p68
                        '潜在化 → 顕在化', //p66
                        '得られる商品を勧めることが多い → そのような商品は存在しない', //p68
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="['2025a8', '2025b8', '2025c8', '2024a9', '2024b9', '2024c9', '2023a19', '2023b20', '2023c20']"
                    :contents="[
                        '保険料の自己負担額を減らすことが必要 → 医療保障の充実が必要', //p80
                        '家族特約で確保するしかない → 単体で準備するのが望ましい（夫死亡時に保障が消失）', //p80
                        '正しい',
                        '4割の自己負担 → 1割（一定以上所得のある人は2割または3割）', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の活用方法等"
                    :relatedProblems="['2025b9', '2025c19', '2024b45', '2024c45', '2023a9', '2023b9', '2023c9']"
                    :contents="[
                        'アドバイスまでは求められていない → アドバイスをするのが重要な役割', //p84
                        '子ども優先 → 妻が家計の大黒柱となるため妻の保障も必要', //p84
                        '正しい',
                        '障害者等の特別マル優は利用できない → 資産運用に利用可能', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="['2025a30', '2025b10', '2024a46', '2024c30']"
                    :contents="[
                        '正しい',
                        '取得した時の価額で評価 → 死亡時の時価で評価', //p89
                        '約8割 → 約3割', //p89
                        '5000万円 + 1000万円 × 法定相続人の数 → 3000万円 + 600万円 × 法定相続人の数', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="['2025a10', '2025b11', '2025c10', '2024a11', '2024b11', '2024c11', '2023a10', '2023b22', '2023c10']"
                    :contents="[
                        '保険監督法：民法と保険法 → 保険業法<br>保険取引法：保険業法 → 民法と保険法', //p114
                        '正しい',
                        '保険業法が中心 → 民法と保険法が中心', //p114
                        '保険事業および銀行業 → 保険事業のみ', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険販売等に関する法律"
                    :relatedProblems="['2025a12', '2025b12', '2025c12', '2024b22', '2023c11']"
                    :contents="[
                        '正しい',
                        '認められている → 認められていない（顧客管理目的は不可）', //p169
                        '保険法 → 保険業法', //p146
                        '公表までは求められない → 公表しなければならない', //p143
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="['2025a13', '2025b13', '2025c13', '2024a25', '2024b25', '2024c25', '2023b25']"
                    :contents="[
                        '正しい',
                        '住宅ローンの返済額は含めない → 含める', //p8
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="['2025a15', '2025b14', '2025c15', '2024a3', '2024c41', '2023b15', '2023c3']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '銀行は緩やかで、信販会社などは厳しい → 銀行が一番厳しく、信販会社などは緩やか', //p34
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2025a16', '2025b15', '2025c16', '2024a16', '2024b15', '2024c4', '2023a17', '2023b5']"
                    :contents="[
                        '1年 → 5年', //p41
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2025b16', '2025c30', '2025c44', '2024a4', '2024b16', '2024c17', '2023a5', '2023b6', '2023c25']"
                    :contents="[
                        '正しい',
                        '必要保障額に子どもの教育資金は含めない → 含める', //p56
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="確実性資金の商品選択"
                    :relatedProblems="['2025a17', '2025b17', '2023a18', '2023b18', '2023c18']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '税引前の利回り → 税引後の利回り', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスクの種類"
                    :relatedProblems="['2025a6', '2025a18', '2025b7', '2025b18', '2025c6', '2025c18', '2024a6', '2024a17', '2024b6', '2024c6', '2023a6', '2023a42', '2023b42', '2023c42']"
                    :contents="[
                        '正しい',
                        '貨幣価値の上昇するリスク → 下落するリスク', //p67
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="['2025a7', '2025b19', '2025c7', '2024a7', '2024b8', '2024c7', '2023a7', '2023b43', '2023c7']"
                    :contents="[
                        '正しい',
                        '同様のプランニング → 異なるプランニング（定年までの時間的余裕で対応が変わる）', //p73
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="['2025a20', '2025b20', '2025c20', '2024a8', '2024b17', '2024c18', '2023a8', '2023b8', '2023c8']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '基本的に収益性が原則 → 基本的に安全性が原則<br>収益性に特化した → 収益性・安全性・流動性のバランスが取れた', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2025a22', '2025b21', '2025c21', '2024a19', '2024b19', '2024c19', '2023a21', '2023b21', '2023c21']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '遺留分相当額未満 → 遺留分相当額以上', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="['2025b22', '2024a47', '2024b46', '2024c47', '2023a22', '2023b10', '2023c22']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        'アンケートで事前に把握する方法は認められていない → 認められている', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="['2025b23', '2025c48', '2024a20', '2024b20', '2024c20', '2023a11', '2023b23', '2023c47']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '間接的な表現や身振り手振りも退去意思表示に含まれる', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="['2025a24', '2025b24', '2025c24', '2024a49', '2024c49', '2023a23', '2023b11', '2023c23', '2023c48']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '既払込保険料相当額 → 解約返戻金相当額', //p160
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="['2025a25', '2025b25', '2025c25', '2024a30', '2024b3', '2024c15', '2023a16', '2023b16', '2023c16']"
                    :contents="[
                        '2',
                        '5',
                        '元金',
                        '変動金利型',
                        '短い', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'オ', //26
                        'キ', //27
                        'コ', //28
                        'ア', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="['2025b30', '2024a18', '2024b35', '2024c8', '2023a30', '2023b7', '2023c43']"
                    :contents="[
                        '14',
                        '20',
                        '2',
                        '標準報酬月額',
                        '生計', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'オ', //31
                        'ア', //32
                        'コ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険業法の主要内容"
                    :relatedProblems="['2025b35', '2024a35']"
                    :contents="[
                        '損害保険業',
                        '公正',
                        '公衆の縦覧',
                        'ソルベンシー・マージン比率',
                        '支払余力', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'ア', //36
                        'ケ', //37
                        'エ', //38
                        'カ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '外貨建金融商品の利用',
                            content: '為替リスク等は考慮不要 → 考慮が必要',
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                        }, //40
                        {
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2025a41', '2025b41', '2024a43', '2024b43', '2024c43', '2023a40', '2023b40', '2023c40'],
                        }, //41
                        {
                            questionTitle: 'リスクマネジメント',
                            content: '正しい',
                            relatedProblems: ['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41', '2024a2', '2024b2', '2024c2', '2023a2', '2023b2', '2023c2'],
                        }, //42
                        {
                            questionTitle: '住宅に対する考え方',
                            content: '正しい',
                            relatedProblems: ['2025a43', '2025b43', '2025c43', '2024a41'],
                        }, //43
                        {
                            questionTitle: '住宅ローンの借換え',
                            content: '正しい',
                            relatedProblems: ['2025a44', '2025b44', '2025c42', '2024a42', '2024b42', '2024c42'],
                        }, //44
                        {
                            questionTitle: '中途解約リスク',
                            content: '正しい',
                            relatedProblems: ['2025b45', '2025c45'],
                        }, //45
                        {
                            questionTitle: '高齢者医療制度',
                            content: '費用の1割（現役並み所得者も同様） → 費用の1割、所定水準以上の所得者の場合2割（現役並の所得者は3割）',
                            relatedProblems: ['2025a46', '2025b46', '2025c46', '2024a45', '2023a43'],
                        }, //46 p77
                        {
                            questionTitle: '相続時精算課税制度',
                            content: '贈与者（父母や祖父母）ごとに選択できない → 選択できる',
                            relatedProblems: ['2025a21', '2025b47', '2024b18', '2024c46', '2023a20', '2023c30'],
                        }, //47 p90
                        {
                            questionTitle: '保険募集と禁止行為',
                            content: '正しい',
                            relatedProblems: ['2025a23', '2025a48', '2025b48', '2025c22', '2024a12', '2024b12', '2024c12', '2023c45'],
                        }, //48
                        {
                            questionTitle: '保険募集における違法行為',
                            content: '行政処分の対象とならない → 行政処分の対象となることがある',
                            relatedProblems: ['2025a49', '2025b49', '2025c49', '2024a48', '2024c48', '2023a46', '2023b46', '2023c46'],
                        }, //49 p138
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2025a" next-route="daigaku.fp2025c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
