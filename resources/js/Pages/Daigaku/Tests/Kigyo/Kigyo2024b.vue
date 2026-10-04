<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2024年度 フォームB";
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
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の役員とその権限"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '代表取締役は、[[取締役会で選定・解職される]]。', //p27
                        '[[代表取締役は社長１人であるとは限らず]]、会長や専務等も代表取締役になる場合がある。', //p27
                        '取締役会において[[業務執行取締役に選定された取締役]]は、対象となる業務を遂行する。', //p27
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="支配関係による親会社・子会社の分類"
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
                    :questionNumber="5"
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
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="養老保険を活用した福利厚生プランの内容と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が支払う保険料について、[[支払保険料の1/2が福利厚生費として損金算入]]、[[1/2が保険料積立金として資産計上]]の経理処理が認められる。', //p82
                        '福利厚生プランの１人当たりの保険金額は、[[従業員の退職金規程における定年時の予定退職金額から、すでに準備している他の制度からの予定支給額を控除した金額]]となる。', //p83
                        '保険期間については、公平な条件とするため、[[「歳」満期]]とし、[[保険期間を定年に合わせる]]。', //p84
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="会社の整理"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '「[[営業権の譲渡]]」とは、譲渡を受ける会社に、当該会社がもつ商品・技術・サービスの看板を譲渡する方法である。', //p91
                        '融資による資金調達の際に金融機関等に担保設定されている場合は、[[当該資産が優先的に担保債務に充当されるため、他の債権者に分配される資産や金額は少なくなる]]。', //p92
                        '再生手続き開始後も、[[引き続き現経営者が経営にあたることができる]]。', //p92
                        '正しい',
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
                        '企業が負担する保険料（[[特約保険料を含む]]）は全額損金算入できる。', //p131
                        '事業年度の翌事業年度の益金 → 事業年度の益金', //p131
                        '正しい',
                        '従業員・役員が受け取った高度障害保険金は、[[全額非課税扱いとなる]]。', //p132
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障保険（団体型）の税法上の取扱い"
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
                    questionTitle="退職金・年金の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '公的年金には、原則として日本国内に住んでいる[[20歳以上60歳未満]]の全国民が加入対象となる国民年金と、民間企業の従業員や公務員等が対象の厚生年金保険がある。', //p168
                        '現在の会計基準では、退職金の積立不足額を退職給付引当金として[[貸借対照表]]に計上する。退職金支払いのための資産（年金資産）とみなされるものは、[[確定給付企業年金等の法的に企業と分離されている資産に限られる]]。', //p169
                        '厚生年金基金は代行返上を行って、確定給付企業年金（基金型企業年金・規約型企業年金）へ移行することも[[認められる]]。', //p170
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金および確定拠出年金の課税関係"
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
                    questionTitle="中小企業退職金共済制度・特定退職金共済制度"
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
                    questionTitle="一般社団法人と一般財団法人"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人設立時の公的資金調達と中小企業を対象とする金融機関"
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
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '信用金庫と信用組合はともに[[非営利]]の協同組織の金融機関である。', //p43
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表分析の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        'ディスクロージャー計算書 → キャッシュフロー計算書', //p62
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '契約は[[１年]]更新なので、[[毎年]]、福利厚生規程の改定等に伴う保障額の見直しが可能である。', //p121
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
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
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体就業不能保障保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '保険契約者（法人）が払い込む保険料は、休業補償制度の補完として福利厚生費の費目で、[[損金算入が認められる]]。', //p155
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体定期保険（任意加入制）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '契約締結時あるいは更新時には、最低被保険者数を満たすとともに、加入有資格者の一定割合以上の加入率の加入者数（被保険者数）が必要である。この加入率を「[[基準加入率A]]」と称し、[[35%以上]]と定められている。', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
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
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体信用生命保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
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
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金基金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '月額100,000円 → 月額68,000円', //p205
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="大会社の機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '3',
                        '社外取締役',
                        '代表取締役',
                        '報酬委員会',
                        '執行役',
                    ]"
                    :labels="[
                        'ア', //25
                        'オ', //26
                        'ケ', //27
                        'ク', //28
                        'エ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
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
                        'イ', //30
                        'キ', //31
                        'オ', //32
                        'カ', //33
                        'ウ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="確定拠出年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '資産管理機関',
                        '国民年金基金連合会',
                        '運営管理機関',
                        '3本',
                        '3カ月',
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
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株主の権利・義務',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株式会社の機関',
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
                            questionTitle: '資産規模による企業の分類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '自社株対策の重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '財形年金積立保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                         {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '概算保険料を用いる場合は、[[契約締結後速やかに（遅くとも３カ月以内）精算を行わなければならない]]。', //p140
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金基金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '確定給付企業年金の積立金',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'キャッシュバランスプラン',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2024a" next-route="daigaku.kigyo2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
