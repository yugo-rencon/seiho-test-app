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
                        '応えることができる → 応えることが難しくなってきた', //p2
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
                        '生命保険でしか対応できない → 生命保険だけではなく、さまざまな金融商品で対応可能', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="['2024c15', '2023a16', '2023b16', '2023c16']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2025a5','2025b5', '2025c5', '2024b4', '2024c16', '2023a4', '2023b4', '2023b17', '2023c4']"
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
                    :relatedProblems="['2025b6', '2025c17', '2024a5', '2024c5']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
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
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="['2025a7', '2025b19', '2025c7', '2024a7', '2024b8', '2024c7','2023b43' ,'2023c7']"
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
                        '', //p
                        '', //p
                        '', //p
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
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="['2025a23', '2025c22', '2024a12', '2024c12']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="['2025c4', '2024a13', '2024c13', '2023b1', '2023c14']"
                    :contents="[
                        '', //p
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
                    :relatedProblems="['2025a16', '2025b15', '2025c16', '2024a16', '2024c4', '2023a17', '2023b5']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2025b16', '2024a4', '2024c17', '2023a5', '2023b6']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="['2025a20', '2025b20', '2025c20', '2024a8', '2024c18', '2023a8', '2023b8', '2023c8']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2025a21', '2023a20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2025a22', '2025b21', '2025c21', '2024a19', '2024c19', '2023a21', '2023b21', '2023c21']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="['2025b23', '2024a20', '2024c20', '2023a11', '2023b23']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :relatedProblems="['2024a21', '2024c21']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法以外の保険販売等に関する法律"
                    :relatedProblems="['2023c11']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="['2024c24', '2023a24']"
                    :contents="[
                        '', //p
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
                    :relatedProblems="['2024a24', '2023b24', '2023c12']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="キャッシュフロー表の作成"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
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
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
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
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'オ', //36
                        'カ', //37
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
                        { questionTitle: 'リボルビング（回転信用）方式', content: '正しい' }, //40
                        { questionTitle: '有担保ローンと無担保ローン', content: '' }, //41
                        { questionTitle: '住宅ローンの借換え', content: '正しい' }, //42
                        { questionTitle: 'キャッシュフロー表の変動要素', content: '正しい' }, //43
                        { questionTitle: 'ゆとりある老後生活費', content: '正しい' }, //44
                        { questionTitle: '死亡保険金の活用方法等', content: '' }, //45
                        { questionTitle: '2016年（平成28年）5月施行の保険業法の主な改正内容', content: '' }, //46
                        { questionTitle: '生命保険会社の経営破綻時の取引制限', content: '正しい' }, //47
                        { questionTitle: '金融サービス提供法', content: '正しい' }, //48
                        { questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）', content: '' }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2024a" next-route="daigaku.fp2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
