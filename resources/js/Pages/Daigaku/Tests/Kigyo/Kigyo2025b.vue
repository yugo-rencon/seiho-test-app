<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2025年度 フォームB";
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
                    questionTitle="法人の種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-01 確認済み
                        '会社は、法人のひとつであり営利活動を行い、得た利益を[[出資者]]に分配することを目的とする[[社団]]である。', //p4
                        '合資会社は、[[「無限責任社員」と「有限責任社員」とで構成]]された会社である。', //p4
                        '正しい',
                        '合名会社は[[「無限責任社員」のみで構成]]されている。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の設立"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="支配関係による親会社・子会社の分類等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '親会社 → 子会社', //p35
                        '議決権の３分の１ → 議決権の過半数', //p36
                        '金融商品取引法は、有価証券報告書を提出しなければならない会社（提出[[子]]会社）の[[親]]会社は、「[[親]]会社等状況報告書」を提出しなければならないと定めている。', //p36
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人設立時の公的融資制度と中小企業を対象とする金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表分析の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        'Ｐ／Ｌ（ピーエル） → Ｂ／Ｓ（ビーエス）', //p53
                        '正しい',
                        'Ｂ／Ｓ（ビーエス） → Ｐ／Ｌ（ピーエル）', //p57
                        '会社法の施行に伴い配当等の剰余金の配当がいつでもできることになったため、[[貸借対照表と損益計算書だけでは株主資本の変動を表示することができなくなった]]。', //p60
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の提案"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="養老保険を活用した福利厚生プランの内容と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が支払う保険料について、[[支払保険料の1/2が福利厚生費として損金算入]]、[[1/2が保険料積立金として資産計上]]の経理処理が認められる。', //p82
                        '福利厚生プランの１人当たりの保険金額は、[[従業員の退職金規程における定年時の予定退職金額から、すでに準備している他の制度からの予定支給額を控除した金額]]となる。', //p83
                        '正しい',
                        '保険期間については、公平な条件とするため、[[「歳」満期]]とし、[[保険期間を定年に合わせる]]。', //p84
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '正しい',
                        '企業が負担する保険料（[[特約保険料を含む]]）は全額損金算入できる。', //p131
                        '事業年度の翌事業年度の益金 → 事業年度の益金', //p131
                        '従業員・役員が受け取った高度障害保険金は、[[全額非課税扱いとなる]]。', //p132
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体就業不能保障保険"
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
                    questionTitle="確定拠出年金の給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '給付の手続きは、加入者からの申請に基づいて「[[運営管理機関]]」が受給資格を確認し、その通知に基づいて企業型は「[[資産管理機関]]」から、個人型は「国民年金基金連合会」から給付される。', //p190-191
                        '老齢給付金、[[遺族給付金（死亡一時金）]]および障害給付金の３つの形態に限られる。', //p191-192
                        '[[規約に定めがあれば]]、年金の一部または全部を一時金として受給することが可能である。', //p191-192
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金のポータビリティ"
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
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の役員とその権限"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者を取り巻くリスクと対策"
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
                    questionTitle="民間金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社の整理"
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
                    questionTitle="自社株対策の重要性"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="集団扱定期保険"
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
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職金・年金の基礎知識"
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
                    questionTitle="医療保障保険（団体型）の税法上の取扱い"
                    :relatedProblems="[]"
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
                    questionTitle="確定給付企業年金の課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の運用対象商品"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
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
                    questionTitle="確定給付企業年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '厚生労働大臣',
                        '年に1回',
                        '事業主',
                        '財政検証',
                        '農業協同組合連合会',
                    ]"
                    :labels="[
                        'ウ', //25
                        'ク', //26
                        'ア', //27
                        'キ', //28
                        'オ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="団体信用生命保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '信用供与機関',
                        '未返済債務額',
                        '50',
                        '債務償還期間（据置期間を含む）',
                        'ならない',
                    ]"
                    :labels="[
                        'エ', //30
                        'ア', //31
                        'ウ', //32
                        'ケ', //33
                        'キ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="中小企業退職金共済制度・特定退職金共済制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '国の費用',
                        '直接支払い',
                        '全員加入',
                        '可能',
                        '非課税である',
                    ]"
                    :labels="[
                        'ク', //35
                        'ア', //36
                        'キ', //37
                        'オ', //38
                        'ウ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株式会社の機関',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株主の権利・義務',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '資産規模による企業の分類',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '株主資本等変動計算書',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '総合福祉団体定期保険における被保険団体の要件',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '団体信用生命保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金基金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '確定拠出年金の課税関係',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2025a" next-route="daigaku.kigyo2025c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
