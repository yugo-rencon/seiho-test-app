<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2023年度 フォームA";
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
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="['2025a2', '2025b2', '2025c2', '2023a1', '2023c1']"
                    :contents="[
                        '正しい',
                        'キャッシュフロー表 ↔︎ ライフサイクル表', //p6
                        'ストックは含まない → 含む', //p7
                        '社会保険料を差し引く前 → 差し引いた後<br>生命保険料等を差し引いた後 → 差し引く前', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41', '2024a2', '2024b2', '2024c2', '2023a2', '2023b2', '2023c2']"
                    :contents="[
                        'ライフプランニングとリスクマネジメントは相反する関係 → 表裏一体の関係', //p14
                        '正しい',
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '生命保険商品でしか対応できない → 生命保険商品だけではなく、さまざまな金融商品で対応可能', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの基礎"
                    :relatedProblems="['2023a3']"
                    :contents="[
                        '正しい',
                        'フリーローンの方が金利が低い → 目的別ローンの方が金利が低い', //p34
                        '有担保の場合審査がない → 無担保・有担保を問わず審査がある', //p34
                        '銀行 ↔︎ 信販会社', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2025a5', '2025b5', '2025c5', '2024b4', '2024c16', '2023a4', '2023b4', '2023b17', '2023c4']"
                    :contents="[
                        '明確にする必要はない → 明確にする必要がある（時代によって価値観は変わるから）', //p40
                        'ライフプランやライフスタイルに合う→ 合わない（時代変化により）', //p39
                        '差がなくなった → ニーズに応じて多様化した', //p42
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2025b16', '2025c30', '2025c44', '2024a4', '2024b16', '2024c17', '2023a5', '2023b6', '2023c25']"
                    :contents="[
                        '正しい',
                        '学校外教育費に芸術・文化活動・スポーツは含まれない → 含まれる', //p56
                        '必要保障額に子どもの教育資金は含めない → 教育資金を含めることになる', //p56
                        '貸与型 → 給付型', //p60
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
                        '商品単体で考えるのが重要 → 金融資産全体（ポートフォリオ）で考えるのが重要', //p67
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金準備"
                    :relatedProblems="['2025a7', '2025b19', '2025c7', '2024a7', '2024b8', '2024c7', '2023a7', '2023b43', '2023c7']"
                    :contents="[
                        '40歳から50歳代前半の場合 → 退職を間近に控えている場合', //p73
                        '正しい',
                        '平均余命を超えないようにする → 平均余命に10年加算する', //p73
                        '年金額が増えることを期待できる → 期待できない', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="['2025a20', '2025b20', '2025c20', '2024a8', '2024b17', '2024c18', '2023a8', '2023b8', '2023c8']"
                    :contents="[
                        '遺贈資金 → 生きがい資金', //p79
                        '生活資金 → 予備資金', //p79
                        '予備資金 → 生活資金', //p79
                        '正しい',
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
                    questionTitle="保険業法"
                    :relatedProblems="['2025a10', '2025b11', '2025c10', '2024a11', '2024b11', '2024c11', '2023a10', '2023b22', '2023c10']"
                    :contents="[
                        '保険監督法：民法と保険法 → 保険業法<br>保険取引法：保険業法 → 民法と保険法', //p114
                        '商法 → 会社法', //p114
                        '保険業法が中心 → 民法と保険法が中心', //p114
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="['2025b23', '2025c48', '2024a20', '2024b20', '2024c20', '2023a11', '2023b23', '2023c47']"
                    :contents="[
                        '故意に不実のことを告げることが必要要件であり、誤った説明をしたとしても不実告知に該当しない → 故意に不実のことを告げることは必要要件ではなく、誤った説明をしていれば不実告知に該当する', //p141
                        '該当しない → 該当する（断りがあっても断定的判断）', //p141
                        '正しい',
                        '間接的な表現や身振り手振りも退去すべき旨の意思表示に含まれる', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="['2025a11', '2025c11', '2024a23', '2024b49', '2024c23', '2023a12', '2023b12', '2023c24']"
                    :contents="[
                        '実際の取引担当者については本人特定事項の確認が必要ない → 法人と実際の取引担当者双方で必要', //p161
                        '必ず取引時確認が必要 → 再度の取引時確認は不要', //p162
                        '正しい',
                        '拒むことはできない → 拒むことができる免責規定を設けている', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険FPの役割"
                    :relatedProblems="['2025a1', '2025b1', '2025c1', '2024a1', '2024b1', '2024c1', '2023a13', '2023b13', '2023c13']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '子どもの結婚資金 → こどもの教育資金', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（40歳代既婚者）"
                    :relatedProblems="['2025a4', '2025a14', '2025b4', '2025c14', '2024a14', '2024b14', '2024c14', '2023a14', '2023b14']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '40歳以上55歳未満の第3号被保険者 → 40歳以上65歳未満の第2号被保険者', //p28
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="['2024a15', '2024c3', '2023a15', '2023b3', '2023c15']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '元金均等返済方式 → 元利金等返済方式', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="['2025a25', '2025b25', '2025c25', '2024a30', '2024b3', '2024c15', '2023a16', '2023b16', '2023c16']"
                    :contents="[
                        '正しい',
                        '固定金利型ローンの一種 → 変動金利型ローンの一種', //p37
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2025a16', '2025b15', '2025c16', '2024a16', '2024b15', '2024c4', '2023a17', '2023b5']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '財形貯蓄残高の5倍の額（最高2000万円） → 10倍の額（最高4000万円）<br>住宅取得価額の50%が限度 → 90%が限度', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
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
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="['2025a8', '2025b8', '2025c8', '2024a9', '2024b9', '2024c9', '2023a19', '2023b20', '2023c20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '家族特約で確保するしかない → 単体で準備するのが望ましい（夫死亡時に保障が消失）', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2025a21', '2025b47', '2024b18', '2024c46', '2023a20', '2023c30']"
                    :contents="[
                        '正しい',
                        '暦年課税に変更できる → 変更できない', //p90-91
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '課税を考慮する必要はない → 考慮が必要（生命保険金もみなし相続財産として課税対象）', //p100
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
                        '認められていない → 認められている', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="['2025a24', '2025b24', '2025c24', '2024a49', '2024c49', '2023a23', '2023b11', '2023c23', '2023c48']"
                    :contents="[
                        '正しい',
                        '解除できる → 解除できない', //p160
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="['2024b23', '2024c24', '2023a24', '2023b49', '2023c49']"
                    :contents="[
                        '公刊仏等に公にされている情報や暗号化等によって秘匿化されたものは含まない → 含む', //p164
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="['2025c4', '2024a13', '2024b13', '2024c13', '2023a25', '2023b1', '2023c14']"
                    :contents="[
                        '外貨建金融商品',
                        '為替リスク',
                        '最適の',
                        '自己責任',
                        'ディスクロージャー', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'カ', //26
                        'イ', //27
                        'キ', //28
                        'ケ', //29
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
                        '全額',
                        '標準報酬月額', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'オ', //31
                        'ア', //32
                        'ク', //33
                        'コ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険募集におけるコンプライアンスと禁止行為"
                    :relatedProblems="['2025a7', '2023a35', '2023b35', '2023c35']"
                    :contents="[
                        '潜在的',
                        '適合性',
                        '重要な事項',
                        '電磁的',
                        '契約概要', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'ア', //36
                        'ク', //37
                        'コ', //38
                        'オ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2025a41', '2025b41', '2024a43', '2024b43', '2024c43', '2023a40', '2023b40', '2023c40'],
                        }, //40
                        {
                            questionTitle: '住宅取得のための自己資金',
                            content: '正しい',
                            relatedProblems: ['2023a41'],
                        }, //41
                        {
                            questionTitle: '金融商品のリスク',
                            content: '中途解約リスク → 金利変動リスク',
                            relatedProblems: ['2025a6', '2025a18', '2025b7', '2025b18', '2025c6', '2025c18', '2024a6', '2024a17', '2024b6', '2024c6', '2023a6', '2023a42', '2023b42', '2023c42'],
                        }, //42 p66
                        {
                            questionTitle: '高齢者医療制度',
                            content: '費用の1割（現役並み所得者も同様） → 費用の1割、所定水準以上の所得者の場合2割（現役並の所得者は3割）',
                            relatedProblems: ['2025a46', '2025b46', '2025c46', '2024a45', '2023a43'],
                        }, //43
                        {
                            questionTitle: '相続税の計算手順',
                            content: '相続開始前5年以内 → 7年以内', //p94
                            relatedProblems: ['2025a9', '2025c9', '2024a10', '2024b10', '2024c10', '2023a44', '2023b44', '2023c44'],
                        }, //44
                        {
                            questionTitle: '経営破綻した場合の契約条件の変更',
                            content: '原則80% → 原則90%', //p123
                            relatedProblems: ['2023a45'],
                        }, //45
                        {
                            questionTitle: '保険募集における違法行為',
                            content: '正しい',
                            relatedProblems: ['2025a49', '2025b49', '2025c49', '2024a48', '2024c48', '2023a46', '2023b46', '2023c46'],
                        }, //46
                        {
                            questionTitle: '金融サービスの提供に関する法律（金融サービス提供法）',
                            content: '正しい',
                            relatedProblems: ['2025c23', '2024a21', '2024b21', '2024b48', '2024c21', '2023a47', '2023b47'],
                        }, //47
                        {
                            questionTitle: '金融商品取引法',
                            content: '正しい',
                            relatedProblems: ['2023a48', '2023b48'],
                        }, //48
                        {
                            questionTitle: '生命保険相談所',
                            content: '正しい',
                            relatedProblems: ['2025c35', '2024a24', '2024b24', '2024c35', '2023a49', '2023b24', '2023c12'],
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2024c" next-route="daigaku.fp2023b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
