<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2024年度 フォームB";
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
                        '正しい',
                        '応えることができるようになってきた → 応えることが難しくなってきた', //p2
                        '①法人の金融資産の増大 → 個人の金融資産の増大<br>②規制金利市場の拡大 → 金融の自由化', //p2
                        '子どもの結婚資金 → こどもの教育資金', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41', '2024a2', '2024b2', '2024c2', '2023a2', '2023b2', '2023c2']"
                    :contents="[
                        '正しい',
                        'リスクは小さくなる → 大きなリスクになる', //p15
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '生命保険商品でしか対応できない → 生命保険商品だけではなく、さまざまな金融商品で対応可能', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="['2025a25', '2025b25', '2025c25', '2024a30', '2024b3', '2024c15', '2023a16', '2023b16', '2023c16']"
                    :contents="[
                        'カードローンやキャッシングは変動金利型ローン → 固定金利型ローン', //p36
                        '低金利時：変動金利型ローンが有利 → 固定金利型ローンが有利<br>高金利時：固定金利型ローンが有利 → 変動金利型ローンが有利', //p38
                        '固定金利期間の長いもの → 短いもの', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
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
                    :questionNumber="5"
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
                    :questionNumber="6"
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
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="ポートフォリオ運用（分散投資）"
                    :relatedProblems="['2024b7']"
                    :contents="[
                        '該当しない → 該当する', //p68
                        '時間的分散の説明 → 種類別分散の説明', //p68
                        '正しい',
                        '積極的にリスクをとり、リターンを多くする手段 → リスクを回避して、少しでもリターンを多くする手段', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="['2025a7', '2025b19', '2025c7', '2024a7', '2024b8', '2024c7', '2023a7', '2023b43', '2023c7']"
                    :contents="[
                        '減少 → 増加', //p74
                        '平均余命を超えないようにする → 平均余命に10年加算する', //p73
                        '40歳から50歳代前半の場合 → 退職を間近に控えている場合', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
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
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算手順"
                    :relatedProblems="['2025a9', '2025c9', '2024a10', '2024b10', '2024c10', '2023a44', '2023b44', '2023c44']"
                    :contents="[
                        '相続開始前10年以内 → 7年以内', //p94
                        '基礎控除（5000万円 + 1000万円 × 法定相続人の数 → 3000万円 + 600万円 × 法定相続人の数', //p 94
                        '法定相続人から除く → 法定相続人に加える', //p94
                        '正しい',
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
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="['2025a23', '2025a48', '2025b48', '2025c22', '2024a12', '2024b12', '2024c12', '2023c45']"
                    :contents="[
                        '該当しない → 該当する（貯蓄型と断定すると誤解を招く）', //p129
                        '正しい',
                        '該当する → 該当しない（不利益となることを伝えた場合などは問題ない）', //p134
                        '該当しない → 該当する', //p129
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="['2025c4', '2024a13', '2024b13', '2024c13', '2023a25', '2023b1', '2023c14']"
                    :contents="[
                        '外為の規制強化 → 規制緩和<br>金融機関の垣根の拡大 → 垣根の撤廃<br>外国資本の参入制限 → 参入', //p4
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング"
                    :relatedProblems="['2025a4', '2025a14', '2025b4', '2025c14', '2024a14', '2024b14', '2024c14', '2023a14', '2023b14']"
                    :contents="[
                        '正しい',
                        'すべてがマネーポートフォリオの中心となる → 教育資金と住宅資金が中心となる', //p23
                        '正しい',
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
                        '正しい',
                        '正しい',
                        'フラット35と組み合わせて利用できない → 利用できる', //p41
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
                        '正しい',
                        '必要保障額に子どもの教育資金は含めない → 教育資金を含めることになる', //p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
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
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2025a21', '2025b47', '2024b18', '2024c46', '2023a20', '2023c30']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '限度額2000万円 → 2500万円<br>一律40% → 一律20%', //p90
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2025a22', '2025b21', '2025c21', '2024a19', '2024b19', '2024c19', '2023a21', '2023b21', '2023c21']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '課税を考慮する必要はない → 考慮が必要（生命保険金もみなし相続財産として課税対象）', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="['2025b23', '2025c48', '2024a20', '2024b20', '2024c20', '2023a11', '2023b23', '2023c47']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '間接的な表現や身振り手振りも退去すべき旨の意思表示に含まれる', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :relatedProblems="['2025c23', '2024a21', '2024b21', '2024b48', '2024c21', '2023a47', '2023b47']"
                    :contents="[
                        '正しい',
                        'その他の保険種類は対象外 → 全ての保険種類が対象', //p143
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法以外の保険販売等に関する法律"
                    :relatedProblems="['2025a12', '2025b12', '2025c12', '2024b22', '2023c11']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険法 → 保険業法', //p146
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="['2024b23', '2024c24', '2023a24', '2023b49', '2023c49']"
                    :contents="[
                        '個人情報に該当しない → 該当する', //p164
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="['2025c35', '2024a24', '2024b24', '2024c35', '2023a49', '2023b24', '2023c12']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '訴訟等を提起することはできない → 提起することができる', //p171
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="['2025a13', '2025b13', '2025c13', '2024a25', '2024b25', '2024c25', '2023b25']"
                    :contents="[
                        '可処分所得',
                        '税金や社会保険料',
                        '基本生活費',
                        '運用利率',
                        '物化変動率', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'エ', //26
                        'カ', //27
                        'イ', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="ポートフォリオの作成"
                    :relatedProblems="['2024b30','2023c6']"
                    :contents="[
                        '不動産',
                        'インフレ',
                        '貨幣価値',
                        '為替動向',
                        '信用', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //30
                        'カ', //31
                        'イ', //32
                        'ケ', //33
                        'ウ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="['2025b30', '2024a18', '2024b35', '2024c8', '2023a30', '2023b7', '2023c43']"
                    :contents="[
                        '14',
                        '20',
                        '2',
                        '標準報酬月額',
                        '生計', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'オ', //36
                        'ア', //37
                        'コ', //38
                        'ク', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: 'リボルビング（回転信用）方式',
                            content: '正しい',
                            relatedProblems: ['2024a40', '2024b40', '2024c40'],
                        }, //40
                        {
                            questionTitle: '有担保ローンと無担保ローン',
                            content: '有担保ローン ↔︎ 無担保ローン',
                            relatedProblems: ['2024b41'],
                        }, //41 p34
                        {
                            questionTitle: '住宅ローンの借換え',
                            content: '正しい',
                            relatedProblems: ['2025a44', '2025b44', '2025c42', '2024a42', '2024b42', '2024c42'],
                        }, //42
                        {
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2025a41', '2025b41', '2024a43', '2024b43', '2024c43', '2023a40', '2023b40', '2023c40'],
                        }, //43
                        {
                            questionTitle: 'ゆとりある老後生活費',
                            content: '正しい',
                            relatedProblems: ['2025a45', '2024a44', '2024b44', '2024c44'],
                        }, //44
                        {
                            questionTitle: '死亡保険金の活用方法等',
                            content: '障害者等の特別マル優は利用できない → 資産運用に利用可能',
                            relatedProblems: ['2025b9', '2025c19', '2024b45', '2024c45', '2023a9', '2023b9', '2023c9'],
                        }, //45 p86
                        {
                            questionTitle: '2016年（平成28年）5月施行の保険業法の主な改正内容',
                            content: '契約締結後に意向確認 → 契約締結前に意向確認',
                            relatedProblems: ['2025b22', '2024a47', '2024b46', '2024c47', '2023a22', '2023b10', '2023c22'],
                        }, //46 p117
                        {
                            questionTitle: '生命保険会社の経営破綻時の取引制限',
                            content: '正しい',
                            relatedProblems: ['2025a47', '2025c47', '2024b47', '2023b45'],
                        }, //47
                        {
                            questionTitle: '金融サービス提供法',
                            content: '正しい',
                            relatedProblems: ['2025c23', '2024a21', '2024b21', '2024b48', '2024c21', '2023a47', '2023b47'],
                        }, //48
                        {
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            content: '拒むことはできない → 拒むことができる免責規定を設けている',
                            relatedProblems: ['2025a11', '2025c11', '2024a23', '2024b49', '2024c23', '2023a12', '2023b12', '2023c24'],
                        }, //49 p162
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2024a" next-route="daigaku.fp2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
