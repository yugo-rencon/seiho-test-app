<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2025年度 フォームA";
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
                    :relatedProblems="['2025a1', '2025b1', '2025c1']"
                    :contents="[
                        '協力は一切得ず → 協力を得ながら', //p1
                        '応えることができるようになってきた → 応えることが難しくなってきた', //p2
                        '①法人の金融資産の増大 → 個人の金融資産の増大<br>②規制金利市場の拡大 → 金融の自由化', //p2
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="['2025b2', '2025c2']"
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
                    :relatedProblems="['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41']"
                    :contents="[
                        '正しい',
                        '予定外の大きな支出が発生するリスクは考えにくい → 考えられる', //p16
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '生命保険商品でしか対応できない → 生命保険商品だけではなく、さまざまな金融商品で対応可能', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（20歳代〜40歳代）"
                    :relatedProblems="['2025a4', '2025a14', '2025b4', '2025c14']"
                    :contents="[
                        '提案する必要はない → 提案する必要がある（医療・死亡リスクにも備える）', //p21
                        'すべてがマネーポートフォリオの中心となる → 教育資金と住宅資金が中心となる', //p23
                        '正しい',
                        '公的年金だけで十分 → 十分でない（退職金をローン返済資金とするのは妥当でない）', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2025a5', '2025b5', '2025c5']"
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
                    questionTitle="金融商品のリスク"
                    :relatedProblems="['2025a6', '2025a18', '2025b7', '2025b18', '2025c6', '2025c18']"
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
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="['2025a7', '2025b19', '2025c7']"
                    :contents="[
                        '生活費が極端に少なくなる → 極端に少なくなることはない（近所付き合い等の費用が増える）', //p73
                        '平均余命を超えないようにする → 平均余命に10年加算する', //p73
                        '同様のプランニング → 異なるプランニング（定年までの時間的余裕で対応が変わる）', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="['2025a8', '2025b8', '2025c8']"
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
                    questionTitle="相続税の計算手順"
                    :relatedProblems="['2025a9', '2025c9']"
                    :contents="[
                        '相続開始前10年以内 → 7年以内<br>相続開始前4〜10年 → 3〜7年', //p94
                        '基礎控除（5000万円 + 1000万円 × 法定相続人の数 → 3000万円 + 600万円 × 法定相続人の数', //p 94
                        '法定相続人から除く → 法定相続人に加える', //p94
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="['2025a10', '2025b11', '2025c10']"
                    :contents="[
                        '保険監督法：民法と保険法 → 保険業法<br>保険取引法：保険業法 → 民法と保険法', //p114
                        '正しい',
                        '保険業法が中心 → 民法と保険法が中心', //p114
                        '保険事業および銀行業 → 保険事業のみ', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="['2025a11', '2025c11']"
                    :contents="[
                        '実際の取引担当者については本人特定事項の確認が必要ない → 法人と実際の取引担当者双方で必要', //p161
                        '必ず取引時確認が必要 → 再度の取引時確認は不要', //p162
                        '罰則までは規定されていない → 1年以下の拘禁系もしくは100万円以下の罰金が課される', //p162
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険販売等に関する法律"
                    :relatedProblems="['2025a12', '2025b12', '2025c12']"
                    :contents="[
                        '原則1ヶ月以内で、契約締結時から原則2年以内 → 原則1年以内で、契約時から原則5年以内', //p143
                        '認められている → 認められていない（顧客管理目的は不可）', //p169
                        '保険法 → 保険業法', //p146
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="['2025a13', '2025b13', '2025c13']"
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
                    questionTitle="ライフステージ別のプランニング（50歳代既婚者）"
                    :relatedProblems="['2025a4', '2025a14', '2025b4', '2025c14']"
                    :contents="[
                        '大幅に上回っている → 不足している', //p31
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="['2025a15', '2025b14', '2025c15']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '銀行は緩やかで、信販会社などは厳しい → 銀行が一番厳しく、信販会社などは緩やか', //p34
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2025a16', '2025b15', '2025c16']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '1年 → 5年', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="確実性資金の商品選択"
                    :relatedProblems="['2025a17', '2025b17']"
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
                    :relatedProblems="['2025a6', '2025a18', '2025b7', '2025b18', '2025c6', '2025c18']"
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
                    questionTitle="老後生活設計の考え方"
                    :relatedProblems="['2025a19']"
                    :contents="[
                        '正しい',
                        '雇用確保措置で定められた60歳定年を前提としたコンサルティング → 雇用確保措置で60歳定年という概念がなくなり、個々の老後生活設計に応じたコンサルティング', //p70
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="['2025a20', '2025b20', '2025c20']"
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
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2025a21', '2025b47']"
                    :contents="[
                        '正しい',
                        '暦年課税に変更できる → 変更できない', //p90-91
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2025a22', '2025b21', '2025c21']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '遺留分相当額未満 → 遺留分相当額以上', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="['2025a23', '2025a48', '2025b48', '2025c22']"
                    :contents="[
                        '禁止行為に該当しない → 該当する', //p132
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="['2025a24', '2025b24', '2025c24']"
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
                    :relatedProblems="['2025a25', '2025b25', '2025c25']"
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
                    questionTitle="相続対策"
                    :relatedProblems="['2025a30', '2025b10']"
                    :contents="[
                        '財産の種類',
                        '相続人',
                        '死亡時の時価',
                        '株式（自社株）',
                        '不動産', // 問30〜34
                    ]"
                    :labels="[
                        'カ', //30
                        'ケ', //31
                        'ウ', //32
                        'イ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険募集のコンプライアンスと禁止行為"
                    :relatedProblems="['2025a7']"
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
                            questionTitle: '外貨建金融商品の利用',
                            content: '為替リスク等は考慮不要 → 考慮が必要',
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                        }, //40 p5
                        {
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2025a41', '2025b41'],
                        }, //41
                        {
                            questionTitle: 'リスクマネジメント',
                            content: 'リスクマネジメントと切り離して → ライフプランニングとリスクマネジメントは表裏一体', //p14
                            relatedProblems: ['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41'],
                        }, //42
                        {
                            questionTitle: '住宅に対する考え方',
                            content: '正しい',
                            relatedProblems: ['2025a43', '2025b43', '2025c43'],
                        }, //43
                        {
                            questionTitle: '住宅ローンの借換え',
                            content: '正しい',
                            relatedProblems: ['2025a44', '2025b44', '2025c42'],
                        }, //44
                        {
                            questionTitle: 'ゆとりある老後生活費',
                            content: '正しい',
                            relatedProblems: ['2025a45'],
                        }, //45
                        {
                            questionTitle: '高齢者医療制度',
                            content: '費用の1割（現役並み所得者も同様） → 費用の1割、所定水準以上の所得者の場合2割（現役並の所得者は3割）',
                            relatedProblems: ['2025a46', '2025b46', '2025c46'],
                        }, //46 p77
                        {
                            questionTitle: '生命保険会社の経営破綻時の取引制限',
                            content: '正しい',
                            relatedProblems: ['2025a47', '2025c47'],
                        }, //47
                        {
                            questionTitle: '保険募集と禁止行為',
                            content: '正しい',
                            relatedProblems: ['2025a23', '2025a48', '2025b48', '2025c22'],
                        }, //48
                        {
                            questionTitle: '保険募集における違法行為',
                            content: '行政処分の対象とならない → 行政処分の対象となることがある',
                            relatedProblems: ['2025a49', '2025b49', '2025c49'],
                        }, //49 p138
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.fp2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
