<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2024年度 フォームC";
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
                        '正しい',
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
                        '予定外の大きな支出が発生するリスクは考えにくい → 考えられる', //p16
                        '正しい',
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '生命保険でしか対応できない → 生命保険だけではなく、さまざまな金融商品で対応可能', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="['2024a15', '2024c3', '2023a15', '2023b3', '2023c15']"
                    :contents="[
                        '返済額の利息部分が一定・返済額が増えてくる → 返済額が一定', //p35
                        '正しい',
                        '元利均等返済方式よりも多くなる → 少なくなる', //p35
                        '元金均等返済方式 → 元利金等返済方式', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2025a16', '2025b15', '2025c16', '2024a16', '2024b15', '2024c4', '2023a17', '2023b5']"
                    :contents="[
                        '5年以上継続して加入 → 1年以上継続して加入<br>申込日前5年以内 → 申込日前2年以内<br>残高が30万円以上 → 残高が50万円以上', //p41
                        '財形貯蓄残高の5倍の額（最高2000万円） → 10倍の額（最高4000万円）<br>住宅取得価額の50%が限度 → 90%が限度', //p41
                        '正しい',
                        '3通り → 2通り（買取型・保証型）', //p44
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
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="['2025a7', '2025b19', '2025c7', '2024a7', '2024b8', '2024c7', '2023a7', '2023b43', '2023c7']"
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
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="['2025b30', '2024a18', '2024b35', '2024c8', '2023a30', '2023b7', '2023c43']"
                    :contents="[
                        '正しい',
                        '退職後5年間 → 2年間', //p76
                        '平均のいずれか高い方の額 → 低い方の額', //p76
                        '生計を維持されていることなどの条件はない → 条件となっている', //p76
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
                        '正しい',
                        '該当しない → 該当する（不実告知の教唆）', //p131
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
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2025a5', '2025b5', '2025c5', '2024b4', '2024c16', '2023a4', '2023b4', '2023b17', '2023c4']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '所得控除 → 税額控除', //p50
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2025b16', '2025c30', '2025c44', '2024a4', '2024b16', '2024c17', '2023a5', '2023b6', '2023c25']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '銀行によって仕組みに差はない → 仕組みが異なる', //p60
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
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
                    :questionNumber="19"
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
                    :questionNumber="20"
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
                    questionTitle="特定保険契約"
                    :relatedProblems="['2024a22', '2024c22']"
                    :contents="[
                        '保険法 → 保険業法', //p146
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="['2025a11', '2025c11', '2024a23', '2024b49', '2024c23', '2023a12', '2023b12', '2023c24']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '拒むことはできない → 拒むことができる免責規定を設けている', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="['2024b23', '2024c24', '2023a24', '2023b49', '2023c49']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        'どのような場合でも通知・公表 → 原則必要だが例外あり', //p167
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
                    questionTitle="相続対策"
                    :relatedProblems="['2025a30', '2025b10', '2024a46', '2024c30']"
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
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="['2025c35', '2024a24', '2024b24', '2024c35', '2023a49', '2023b24', '2023c12']"
                    :contents="[
                        '生命保険協会',
                        '紛争解決',
                        '1ヶ月',
                        'ADR',
                        '業務規程', // 問35〜39
                    ]"
                    :labels="[
                        'オ', //35
                        'ク', //36
                        'ア', //37
                        'カ', //38
                        'エ', //39
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
                            questionTitle: 'ローンの種類',
                            content: '有担保では審査がない → 無担保・有担保問わず審査がある',
                            relatedProblems: ['2025a15', '2025b14', '2025c15', '2024a3', '2024c41', '2023b15', '2023c3'],
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
                            content: '子ども優先 → 妻が家計の大黒柱となるため妻の保障も必要',
                            relatedProblems: ['2025b9', '2025c19', '2024b45', '2024c45', '2023a9', '2023b9', '2023c9'],
                        }, //45 p84
                        {
                            questionTitle: '相続時精算課税制度',
                            content: '贈与者（父母や祖父母）ごとに選択できない → 選択できる',
                            relatedProblems: ['2025a21', '2025b47', '2024b18', '2024c46', '2023a20', '2023c30'],
                        }, //46 p90
                        {
                            questionTitle: '2016年（平成28年）5月施行の保険業法の主な改正内容',
                            content: 'アンケートで事前に把握する方法は認められていない → 認められている',
                            relatedProblems: ['2025b22', '2024a47', '2024b46', '2024c47', '2023a22', '2023b10', '2023c22'],
                        }, //47 p117
                        {
                            questionTitle: '保険募集における違法行為',
                            content: '行政処分の対象とならない → 行政処分の対象となることがある',
                            relatedProblems: ['2025a49', '2025b49', '2025c49', '2024a48', '2024c48', '2023a46', '2023b46', '2023c46'],
                        }, //48 p138
                        {
                            questionTitle: '保険法',
                            content: '被保険者は生命保険会社に対して → 被保険者は保険契約者に対して',
                            relatedProblems: ['2025a24', '2025b24', '2025c24', '2024a49', '2024c49', '2023a23', '2023b11', '2023c23', '2023c48'],
                        }, //49 p160
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2024b" next-route="daigaku.fp2023a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
