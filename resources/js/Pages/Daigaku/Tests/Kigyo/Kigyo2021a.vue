<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2021年度 フォームA";
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
                    questionTitle="会社"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式の譲渡と株式譲渡の制限"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '代表執行役および執行役も[[含まれる]]。', //p25
                        '正しい',
                        '[[取締役会設置会社でない場合]]、会社の運営・管理上の意思決定を行い、会社の業務を執行する。[[取締役会設置会社の場合]]、取締役会の構成員として代表取締役や業務執行取締役による業務執行の監督をする。', //p26
                        '会計監査人および執行役は[[役員とはされない]]。', //p26
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の役員とその権限"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '代表取締役は、[[取締役会で選定・解職される]]。', //p27
                        '正しい',
                        '取締役会において[[業務執行取締役に選定された取締役]]は、対象となる業務を遂行する。', //p27
                        '取締役会の監督機能強化を目的として、会社の最高権限者である代表取締役等と[[直接の利害関係のない]]独立した有識者や経営者等から選任される取締役である。', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="決算書"
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
                    questionTitle="経営者の死亡リスクに対する必要保障額の考え方"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '正しい',
                        '事業保障資金＝短期債務額＋[[従業員の年間給与総額]]', //p65
                        '退職金としての適正額を超える過大な役員退職慰労金部分は[[損金不算入となる]]。', //p67
                        '１年分 → ３年分', //p69
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が負担する保険料（[[特約保険料を含む]]）は全額損金算入できる。', //p131
                        '事業年度の翌事業年度の益金 → 事業年度の益金', //p131
                        '正しい',
                        '従業員・役員が受け取った高度障害保険金は、[[全額非課税扱いとなる]]。', //p132
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体信用生命保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金・確定拠出年金の課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金のポータビリティ"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="中小企業退職金共済制度（中退共）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金基金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '第３号被保険者 → 第１号被保険者等', //p204
                        '国民年金基金は、住所地や業種を問わず加入できる「全国国民年金基金」と３つの職種別に設立された「職能型国民年金基金」の２種類があり、加入者は、[[そのいずれか１つに加入することができる]]。', //p204
                        '月額100,000円 → 月額68,000円', //p205
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人設立時の公的資金融資と中小企業を対象とする金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '日本政策金融公庫の融資は、一定の条件を満たせば、[[個人事業でも法人でも受けられる]]。', //p38
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="養老保険を活用した福利厚生プランの内容と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が支払う保険料について、支払保険料の1/2が福利厚生費として損金算入、1/2が[[保険料積立金]]として資産計上の経理処理が認められる。', //p82
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社の整理"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '「[[株式の譲渡]]」とは、譲渡を受ける会社に、会社の所有権ごと譲渡する方法である。', //p91
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '保険金の受取人の選択により、年金払特約を付加することで、[[保険金の一時受取りに代えて、全額または一部を年金で受け取ることができる]]。', //p129
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体定期保険（任意加入制）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '加入年齢に「15歳以上70歳以下」と制限を設けている。', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障保険（団体型）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体就業不能保障保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '就業不能状態とは、傷害または疾病により、病院もしくは診療所への治療を目的とした入院または[[医師の指示による自宅療養]]をしており、かつ、協定書記載業務に全く従事できない状態をいう。', //p153
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '事業主に対して事務手数料は支払わない。', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本の年金制度と退職一時金・企業年金制度に対する企業ニーズ"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '金融庁長官 → 厚生労働大臣', //p179
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュバランスプラン"
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
                    questionTitle="特定退職金共済制度（特退共）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="経営者を取り巻くリスクと対策"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '取引先',
                        '労災保険',
                        '法的権利',
                        '従業員満足（ES：Employee Satisfaction）',
                        '不動産',
                    ]"
                    :labels="[
                        'イ', //25
                        'キ', //26
                        'オ', //27
                        'カ', //28
                        'ウ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="自社株の評価と自社株対策の重要性"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '同族株主等',
                        '原則的評価方式',
                        '配当還元方式',
                        '評価引下げ',
                        '70',
                    ]"
                    :labels="[
                        'オ', //30
                        'ア', //31
                        'ケ', //32
                        'ク', //33
                        'エ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="確定拠出年金の運用と運用対象商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '自己責任',
                        '分散投資',
                        '3種類',
                        '時価評価',
                        '3カ月',
                    ]"
                    :labels="[
                        'ケ', //35
                        'イ', //36
                        'ク', //37
                        'オ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財団法人',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '株式会社の設立',
                            relatedProblems: [],
                            content: '[[募集設立]]とは、発起人が一部の株式を引き受け、残りの株式を引き受ける者（株式引受人）を募集して会社を設立する方法である。', //p18
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株主の義務',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '監査等委員会設置会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '金融商品取引法における「親会社」の定義',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '中小企業を対象とする金融機関',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株主資本等変動計算書',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '経営者保険の提案',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '概算保険料を用いる場合は、[[契約締結後速やかに（遅くとも３カ月以内）精算を行わなければならない]]。', //p140
                        }, //48
                        {
                            questionTitle: '確定給付企業年金の掛金額',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2022c" next-route="daigaku.kigyo2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
