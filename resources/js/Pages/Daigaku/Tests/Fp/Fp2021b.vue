<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプランニングとコンプライアンス";
const subject = "2021年度 フォームB";
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
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="[]"
                    :contents="[
                        '外為の規制強化 → 規制緩和<br>金融機関の垣根の拡大 → 垣根の撤廃<br>外国資本の参入制限 → 参入', //p4
                        'お客さまの家計にまで影響を及ぼすものではない → お客様の家計にまで影響が広がった', //p4
                        '集中投資 → 分散投資', //p5
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅ローンのプランニング"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ポートフォリオ運用（分散投資）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅ローンの知識"
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
                    questionTitle="金融商品のリスク"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="[]"
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
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
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
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算手順"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '額面給与から税金や社会保険料を差し引く前の額 → 差し引いた後の額<br>給与天引きの社内積立や生命保険料を等を差し引いた後の額 → 差し引く前の手取額', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保FPの必要性と役割"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '①個人の金融資産の増大 → 個人の金融資産の減少<br>②金融の寡占化 → 金融の自由化', //p2
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="資金ニーズと保険種類"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="[]"
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
                    questionTitle="ポートフォリオ"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '退職時の平均余命を乗じた額 → 必要年数（平均余命+10年など）を乗じた額', //p73
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '収益性が原則 → 安全性が原則<br>若い間の資金運用は流動性 → 若い間の資金運用は収益性<br>リスクマネジメントを考慮するよりも収益性・安全性に流動性も加えたマネージメントを考慮 → 収益性・安全性に流動性も加えたマネージメントだけでなくリスクマネジメントも考慮', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '家族特約で確保するしかない → 単体で準備するのが望ましい（夫死亡時に保障が消失）', //p80
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '契約後に意向確認 → 契約前に意向確認', //p117
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明の具体例"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法における保険募集に関する規定"
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
                    questionTitle="ローン金利の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '2',
                        '5',
                        '利息部分',
                        '1.25',
                        '短い', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'オ', //26
                        'コ', //27
                        'ア', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="老後生活設計の医療費等"
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
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'カ', //36
                        'ア', //37
                        'キ', //38
                        'ケ', //39
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
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: 'キャッシュフロー',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '病気・ケガに伴うリスク',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '教育資金設計',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '有担保ローンと無担保ローン',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '金利変動リスク',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '後期高齢者医療制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '生命保険を活用した円満な遺産分割',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '基礎利益',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険相談所',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2021a" next-route="daigaku.fp2021c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
