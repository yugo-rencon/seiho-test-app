<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2024年度 フォームA";
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
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人設立時の公的金融機関と中小企業を対象とする金融機関"
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
                        '正しい',
                        '融資による資金調達の際に金融機関等に担保設定されている場合は、[[当該資産が優先的に担保債務に充当されるため、他の債権者に分配される資産や金額は少なくなる]]。', //p92
                        '再生手続き開始後も、[[引き続き現経営者が経営にあたることができる]]。', //p92
                        '「法的な会社再建」の場合、事業保険等の既契約は[[解約]]となるのが一般的であり、[[解約返戻金]]は会社が受け取り、債務の返済等の清算にあてられる。', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体就業不能保障保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '就業不能状態とは、傷害または疾病により、病院もしくは診療所への治療を目的とした入院または[[医師の指示による自宅療養]]をしており、かつ、協定書記載業務に全く従事できない状態をいう。', //p153
                        '[[不支給期間終了日の翌日]]から、就業不能状態が終了した日までを就業不能保険金支払期間とするが、[[実際の支払いは支払限度期間の範囲内とする]]。', //p154
                        '被保険者（本人）が、生命保険会社から直接就業不能保険金を受け取る場合は、[[全額非課税扱いが認められる]]。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
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
                    questionTitle="確定給付企業年金の掛金"
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
                    questionTitle="キャッシュバランスプラン"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
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
                    questionTitle="株式会社の役員とその権限"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '社内で定められている権限を越えてなされた取引行為も、取引の相手方である第三者が「当該取締役には代表権またはその取引について代理権がある」と信じた場合には、その第三者との間においては、[[その取引は有効となり、会社はその責任を負わなければならない]]。', //p27
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
                        // rev: 2026-10-04 確認済み
                        '契約は[[１年]]更新なので、[[毎年]]、福利厚生規程の改定等に伴う保障額の見直しが可能である。', //p121
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が負担する保険料（[[特約保険料を含む]]）は全額損金算入できる。', //p131
                        '正しい',
                        '正しい',
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
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形貯蓄"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
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
                    questionTitle="会社"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '出資者',
                        '社団',
                        '持分会社',
                        '無限責任',
                        '有限責任',
                    ]"
                    :labels="[
                        'カ', //25
                        'イ', //26
                        'ウ', //27
                        'キ', //28
                        'オ', //29
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
                    questionTitle="確定拠出年金の運用と運用対象商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '自己責任',
                        '事業主',
                        '3本',
                        '3カ月',
                        '個別株式',
                    ]"
                    :labels="[
                        'ケ', //35
                        'イ', //36
                        'キ', //37
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
                            questionTitle: '株主の権利・義務',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-10-01 確認済み
                            questionTitle: '株式会社の機関',
                            relatedProblems: [],
                            content: '営業グループ → 経営グループ', //p17
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '監査等委員会設置会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産規模による企業の分類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '譲渡制限会社',
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
                            // rev: 2026-10-04 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '概算保険料を用いる場合は、[[契約締結後速やかに（遅くとも３カ月以内）精算を行わなければならない]]。', //p140
                        }, //46
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '財形年金積立保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '確定給付企業年金および確定拠出年金の税務関係',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2025c" next-route="daigaku.kigyo2024b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
