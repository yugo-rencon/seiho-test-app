<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプランニングとコンプライアンス";
const subject = "2022年度 フォームB";
const isDraft = true;
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
                        '今後も上昇しないと予測し、見直しは行わない → 5年後、10年後の金利は上昇するものと予測して、将来の運用利率も予測しキャッシュフロー表に反映', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '金利が高くなっている → 低くなっている', //p34
                        '有担保では審査がない → 無担保・有担保問わず審査がある', //p34
                        '銀行は緩やかで、信販会社などは厳しい → 銀行が一番厳しく、信販会社などは緩やか', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="[]"
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
                    questionTitle="金融商品のリスク"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
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
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の活用方法等"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="リスクマネジメント"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'カードローンやキャッシングは変動金利型ローン → 固定金利型ローン', //p36
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
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="分散投資"
                    :relatedProblems="[]"
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
                    questionTitle="老後生活設計の考え方"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
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
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法における保険募集に関連する規定"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
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
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'イ', //25
                        'コ', //26
                        'ケ', //27
                        'ウ', //28
                        'オ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="保険業法の主要内容"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
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
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
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
                            questionTitle: '財形住宅融資',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '住宅ローンの繰上げ返済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '健康保険の任意継続被保険者',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '相続対策のポイント',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '経営破綻した場合の契約条件の変更',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: 'コンプライアンスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '保険募集における違法行為',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2022a" next-route="daigaku.fp2022c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
