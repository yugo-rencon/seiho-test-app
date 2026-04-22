<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプランニングとコンプライアンス";
const subject = "2022年度 フォームA";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保FPの必要性と役割"
                    :relatedProblems="[]"
                    :contents="[
                        '弁護士、税理士、不動産の専門家などとは全く別の視点で → 弁護士、税理士、不動産の専門家などの協力を得ながら', //p1
                        '①法人の金融資産の増大 → 個人の金融資産の増大<br>②規制金利市場の拡大 → 金融の自由化', //p2
                        '標準的・定型的な設計 → オーダーメイド設計', //p2
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="[]"
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
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="[]"
                    :contents="[
                        '額面給与から税金や社会保険料を差し引く前の額 → 差し引いた後の額<br>給与天引きの社内積立や生命保険料を等を差し引いた後の額 → 差し引く前の手取額', //p8
                        '住宅ローンの返済額は含めない → 住宅ローンの返済額を含む', //p8
                        '正しい',
                        '現在の課税所得金額 → 現在の貯蓄可能額', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="[]"
                    :contents="[
                        'フリーローンの方が金利は低い → 目的別ローンの方が金利は低い', //p34
                        '融資限度額は変わらない → 有担保ローンの方が融資限度額は大幅に大きい', //p34
                        '正しい',
                        '銀行は緩やかで、信販会社などは厳しい → 銀行が一番厳しく、信販会社などは緩やか', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="[]"
                    :contents="[
                        'カードローンやキャッシングは変動金利型ローン → 固定金利型ローン', //p36
                        '低金利時：変動金利型ローンが有利 → 固定金利型ローンが有利<br>高金利時：固定金利型ローンが有利 → 変動金利型ローンが有利', //p38
                        '固定金利期間の長いもの → 短いもの', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="資金運用の3要素による金融商品の分類"
                    :relatedProblems="[]"
                    :contents="[
                        '国債は、安全性の高い商品の据置型', //p63
                        '一時払養老保険は、安全性の高い商品の据置型', //p63
                        '財形貯蓄は、安全性の高い商品の積立型', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '生活費が極端に少なくなる → 極端に少なくなることはない（近所付き合い等の費用が増える）', //p73
                        '退職時の平均余命を乗じた額 → 必要年数（平均余命+10年など）を乗じた額', //p73
                        '正しい',
                        '退職金の前払い制度や確定拠出年金制度を取り入れる企業は減少してきている → 増えてきている', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '生活資金 → 予備資金', //p79
                        '予備資金 → 生活資金', //p79
                        '基本的に収益性が原則 → 基本的に安全性が原則<br>収益性に特化した → 収益性・安全性・流動性のバランスが取れた', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="[]"
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
                    questionTitle="生前贈与を利用して生命保険を活用する場合の留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '契約初年度のみ → 毎年', //p103
                        '贈与者が管理する → 受贈者が管理する', //p103
                        '生命保険料控除を使う → 生命保険料控除を使わない', //p103
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        '保険監督法：民法と保険法 → 保険業法<br>保険取引法：保険業法 → 民法と保険法', //p114
                        '正しい',
                        '保険業法と保険法が中心 → 民法と保険法が中心', //p114
                        '保険事業および銀行業 → 保険事業のみ', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="[]"
                    :contents="[
                        '注意喚起情報 → 契約概要', //p116
                        '契約締結後に意向確認 → 契約締結前に意向確認', //p117
                        '正しい',
                        'アンケートで事前に把握する方法は認められていない → 認められている', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '金融機関の責任に基づいて行う → 自己責任で行う', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '既加入契約を解約し、その後新たな保険契約に加入することを勧める → 転換・特約の中途付加・追加契約などの保障の見直しを勧める', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（既婚者）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '40歳以上55歳未満の第3号被保険者 → 40歳以上65歳未満の第2号被保険者<br>40歳代は第3号被保険者 → 40歳代は第2号被保険者', //p28
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '元利均等返済方式よりも多くなる → 少なくなる', //p35
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '必要保障額に子どもの教育資金は含めない → 教育資金を含めることになる', //p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '全被保険者の平均のいずれか高い方の額 → 全被保険者の平均のいずれか低い方の額', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の活用方法等"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '障害者等の特別マル優は利用できない → 特別マル優は資産運用に利用可能', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '法定相続分相当額以上 → 遺留分相当額以上', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="健全性の基準（ソルベンシー・マージン比率）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '100% → 200%', //記載なし
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '禁止行為に該当しない → 該当する', //p132
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '間接的な表現や身振り手振りも退去すべき旨の意思表示に含まれる', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'アフターサビスのために利用することが認められている → 法令で限定的に定められている利用範囲を超えたマイナンバーの収集・利用はしてはいけない', //p169
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="総資産ポートフォリオ"
                    :relatedProblems="[]"
                    :contents="[
                        '預貯金',
                        '株式',
                        '財産三分法',
                        'マネー',
                        '分散', // 問25〜29
                    ]"
                    :labels="[
                        'オ', //25
                        'イ', //26
                        'カ', //27
                        'ケ', //28
                        'ウ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="[]"
                    :contents="[
                        '60',
                        '2500',
                        '20',
                        'はできない',
                        '2月1日から3月15日', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'カ', //31
                        'イ', //32
                        'キ', //33
                        'ケ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="[]"
                    :contents="[
                        '生命保険協会',
                        '連絡所',
                        '1ヶ月',
                        '金融ADR',
                        '業務規程', // 問35〜39
                    ]"
                    :labels="[
                        'ア', //35
                        'ク', //36
                        'ウ', //37
                        'カ', //38
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
                            questionTitle: 'FP（ファイナンシャル・プランナー）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: 'ローンの種類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '住宅ローンの繰上げ返済',
                            relatedProblems: [],
                            content: '期間短縮型（中抜き方式）に比べ、利息軽減額は返済額軽減型のほうが大きい → 返済額軽減型に比べ、利息軽減額は期間短縮型（中抜き方式）のほうが大きい', //p46
                        }, //42
                        {
                            questionTitle: '住宅ローンの借換え',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '高齢者医療制度',
                            relatedProblems: [],
                            content: '費用の1割（現役並み所得者も同様） → 費用の1割、所定水準以上の所得者の場合2割（現役並の所得者は3割）',
                        }, //44
                        {
                            questionTitle: '相続税の計算手順',
                            relatedProblems: [],
                            content: '相続開始前5年以内 → 7年以内', //p94
                        }, //45
                        {
                            questionTitle: '生命保険会社の経営破綻時の取引制限',
                            relatedProblems: [],
                            content: '保険料の払込みはできない → 継続のために払込みが必要',
                        }, //46
                        {
                            questionTitle: 'コンプライアンスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '保険募集における違法行為',
                            relatedProblems: [],
                            content: '行政処分の対象とならない → 行政処分の対象となることがある', //p138
                        }, //48
                        {
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            relatedProblems: [],
                            content: '罰則までは規定されていない → 1年以下の拘禁系もしくは100万円以下の罰金が課される', //p162
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2023c" next-route="daigaku.fp2022b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
