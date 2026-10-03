<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2023年度 フォームC";
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
                    questionTitle="株主の権利・義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-01 確認済み
                        '株主名簿 → 定款', //p23
                        '正しい',
                        '譲渡制限株式の譲渡の承認は、原則として、[[取締役会を設置しない株式会社では「株主総会」]]が、[[取締役会を設置する株式会社では「取締役会」]]が行う。', //p23
                        'すべての株式でなく、一部の種類株式について譲渡を制限することを[[定めることができる]]。', //p23
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
                        '正しい',
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
                        // rev: 2026-10-01 確認済み
                        '正しい',
                        '会社法では、役員のほかに、「役員等」の用語が使われ、[[会社法上の役員と、会社法施行規則上の役員とは、その対象とする機関の範囲が異なる]]。また、[[法人税法における「役員」も、会社法上の役員とは異なる]]。', //p26
                        '執行役 → 会計参与', //p26
                        '[[取締役会設置会社でない場合]]、会社の運営・管理上の意思決定を行い、会社の業務を執行する。[[取締役会設置会社の場合]]、取締役会の構成員として代表取締役や業務執行取締役による業務執行の監督をする。', //p26
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の役員とその権限"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人設立時の公的資金調達と中小企業を対象とする金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="簿記の基礎知識"
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
                    questionTitle="経営者保険の提案"
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
                    questionTitle="団体定期保険（任意加入制）"
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
                    questionTitle="団体信用生命保険"
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
                    questionTitle="会社"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="大会社における新たな会社の機関"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="支配関係による親会社・子会社の分類等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '親会社 → 子会社', //p35
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="民間金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表分析の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '財務諸表には、[[会社法で作成が義務付けられている]]代表的なものとして「貸借対照表」「損益計算書」「[[株主資本等変動計算書]]」がある。', //p53
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社の整理"
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
                    questionTitle="総合福祉団体定期保険"
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
                    questionTitle="確定拠出年金の運用対象商品"
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
                    questionTitle="確定給付企業年金の課税関係"
                    :relatedProblems="[]"
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
                    questionTitle="中小企業退職金共済制度（中退共）"
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
                    questionTitle="養老保険を活用した福利厚生プランの内容と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '役員・従業員の遺族',
                        '保険料積立金',
                        '範囲内で',
                        '定年',
                        '普遍的',
                    ]"
                    :labels="[
                        'キ', //25
                        'ア', //26
                        'ケ', //27
                        'ウ', //28
                        'エ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="事業承継時期の企業への提案"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '同族',
                        '金庫株',
                        '剰余金分配可能額',
                        '500',
                        '法定相続人',
                    ]"
                    :labels="[
                        'オ', //30
                        'ク', //31
                        'ケ', //32
                        'ア', //33
                        'エ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
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
                        'ウ', //35
                        'ク', //36
                        'ア', //37
                        'キ', //38
                        'オ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '資産規模による企業の分類',
                            relatedProblems: [],
                            content: '', //p
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '一般社団法人と一般財団法人',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '譲渡制限会社',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体就業不能保障保険',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '財形年金積立保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: 'キャッシュバランスプラン',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金基金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特定退職金共済制度（特退共）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2023b" next-route="daigaku.kigyo2022a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
