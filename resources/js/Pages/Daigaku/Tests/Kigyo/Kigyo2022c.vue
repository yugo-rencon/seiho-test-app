<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2022年度 フォームC";
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
                        // rev: 2026-10-04 確認済み
                        '発起設立 → 募集設立', //p18
                        '会社法では、会社を登記するにあたり、同一商号、同一住所の会社は、[[登記することができない]]。', //p20
                        '正しい',
                        '種類株式は優先株式ともよばれ、配当や株主総会議決権等の一定の項目について、[[普通株式とは権利内容が異なる株式である]]。', //p20
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
                        '[[代表取締役は社長１人であるとは限らず]]、会長や専務等も代表取締役になる場合がある。', //p27
                        '社内で定められている権限を越えてなされた取引行為も、取引の相手方である第三者が「当該取締役には代表権またはその取引について代理権がある」と信じた場合には、その第三者との間においては、[[その取引は有効となり、会社はその責任を負わなければならない]]。', //p27
                        '正しい',
                        '監査役は、役員であるが[[業務執行を担当せず]]、監査機関としての独立機関であり、会計監査と業務監査を行う。', //p28
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
                        '子会社は、[[親会社の株式を取得してはならず]]、相当の時期にその有する親会社株式を処分しなければならない。', //p35
                        '金融商品取引法は、有価証券報告書を提出しなければならない会社（提出[[子]]会社）の[[親]]会社は、「[[親]]会社等状況報告書」を提出しなければならないと定めている。', //p36
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人設立時の公的資金融資と中小企業を対象とする金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '日本公庫は、[[株式の全額を政府が保有]]し、公共性の高い政策金融を行う。', //p41
                        '元金返済の据置期間が設定できるメリットもある。', //p
                        '商工組合中央金庫は、多くの政府系金融機関が融資のみに特化した機能をもつ中で、[[預金の受入れ]]、国際為替、短期の資金供給等、「幅広い総合金融サービス」を行っている。', //p42
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
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
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が負担する保険料（[[特約保険料を含む]]）は全額損金算入できる。', //p131
                        '正しい',
                        '受取人が相続人の場合、[[死亡保険金のうち「500万円 × 法定相続人の数」までが非課税となる]]。', //p132
                        '従業員・役員が受け取った高度障害保険金は、[[全額非課税扱いとなる]]。', //p132
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体就業不能保障保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '保険期間内に被保険者が死亡したときに[[死亡保険金を支払う]]。', //p153
                        '正しい',
                        '就業不能状態とは、傷害または疾病により、病院もしくは診療所への治療を目的とした入院または[[医師の指示による自宅療養]]をしており、かつ、協定書記載業務に全く従事できない状態をいう。', //p153
                        '被保険者（本人）が、生命保険会社から直接就業不能保険金を受け取る場合は、[[全額非課税扱いが認められる]]。', //p155
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
                    questionTitle="確定給付企業年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '基金型企業年金 → 規約型企業年金', //p180
                        '[[基金型企業年金]]は、母体企業から独立した法人格をもつ「[[企業年金基金]]」が主体となって運営される。', //p179
                        '正しい',
                        '生命保険会社が取り扱う商品は、[[一般勘定で運用するものと特別勘定で運用するものに分けられる]]。', //p184
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
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
                    :questionNumber="11"
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
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="中小企業退職金共済制度（中退共）・特定退職金共済制度（特退共）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '同機構の人件費・管理費等は[[国の費用で運営される]]。', //p202
                        '掛金として払い込まれた金額や運用益は、[[いかなる理由があっても事業主に対して返還されない]]。', //p204
                        '中小企業退職金共済制度、確定給付企業年金制度、厚生年金基金との[[重複加入は可能である]]。', //p203
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
                    questionTitle="株主の権利・義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-01 確認済み
                        '正しい',
                        '正しい',
                        '株式譲渡の制限を定款に[[定めることができる]]。', //p23
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-01 確認済み
                        '正しい',
                        '会社法上の役員と呼ばれるのは、[[取締役、会計参与、監査役]]である。', //p26
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="大会社における新たな会社の機関"
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
                    questionTitle="企業の事業保障対策の基礎知識"
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
                    questionTitle="養老保険を活用した福利厚生プランの内容と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が支払う保険料について、[[支払保険料の1/2が福利厚生費として損金算入]]、[[1/2が保険料積立金として資産計上]]の経理処理が認められる。', //p82
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
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
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体定期保険（任意加入制）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '退職者等、配偶者、子を被保険団体に含める場合には、その数は最低被保険者数には[[含めない]]。', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形保険"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '正しい',
                        '継続基準による財政検証 → [[非]]継続基準による財政検証', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職金・年金の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '確定拠出年金からは、厚生年金基金や確定給付企業年金（基金型企業年金・規約型企業年金）への[[移行はできない]]。', //p170
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
                        '60歳以上65歳未満の国民年金の任意加入被保険者も[[加入できる]]。', //p204
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
                    questionTitle="事業保険未整備企業への提案"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '同族会社',
                        '損金算入',
                        '死亡退職金',
                        '株主総会',
                        '議事録',
                    ]"
                    :labels="[
                        'カ', //25
                        'ケ', //26
                        'オ', //27
                        'イ', //28
                        'エ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="財務諸表分析の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '貸借対照表',
                        '株主資本',
                        '経営成績',
                        '配当',
                        'キャッシュフロー計算書',
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
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'ヒューマン・ヴァリュー',
                        '代表者',
                        '2,000',
                        '支払われない',
                        '1年',
                    ]"
                    :labels="[
                        'ア', //35
                        'ケ', //36
                        'カ', //37
                        'エ', //38
                        'イ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '会社',
                            relatedProblems: [],
                            content: '', //p
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産規模による企業の分類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '公開会社と譲渡制限会社',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '中小企業を対象とする金融機関',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '中小企業を対象とする金融機関',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '簿記の基礎知識',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '団体信用生命保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '退職一時金・企業年金制度に対する企業ニーズとその背景',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2022b" next-route="daigaku.kigyo2021a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
