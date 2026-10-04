<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2023年度 フォームB";
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
                    questionTitle="株式会社の機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-01 確認済み
                        '代表執行役および執行役も[[含まれる]]。', //p25
                        '会社法では、役員のほかに、「役員等」の用語が使われ、[[会社法上の役員と、会社法施行規則上の役員とは、その対象とする機関の範囲が異なる]]。また、[[法人税法における「役員」も、会社法上の役員とは異なる]]。', //p26
                        '正しい',
                        '[[取締役会設置会社でない場合]]、会社の運営・管理上の意思決定を行い、会社の業務を執行する。[[取締役会設置会社の場合]]、取締役会の構成員として代表取締役や業務執行取締役による業務執行の監督をする。', //p26
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
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
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="大会社における新たな会社の機関"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="民間金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '信用金庫は[[信用金庫法]]に基づき設立され、信用組合は[[中小企業等協同組合法]]に基づき設立される。', //p43
                        '信用金庫と信用組合はともに[[非営利]]の協同組織の金融機関である。', //p43
                        '正しい',
                        '[[信用組合]]は、組合員以外の預金（員外預金）が総預金額の20％以内に制限されている点で[[信用金庫]]等と異なる。', //p42
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
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体定期保険（任意加入制）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '第Ⅰ種団体から第Ⅲ種団体の３つ → 第Ⅰ種団体から第Ⅳ種団体の４つ', //p134
                        '配偶者、子を被保険団体に含める場合には、その数は最低被保険者数には[[含めない]]。', //p135
                        '第Ⅰ種団体および第Ⅱ種団体には、団体に所属している者（所属員）のほかに、所属員の配偶者ならびに退職、出向等で団体に所属しなくなった者（退職者等）、退職者等の配偶者を[[含めることができる]]。', //p134
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
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
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="中小企業退職金共済制度（中退共）・特定退職金共済制度（特退共）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '中退共の加入対象となる従業員は、中小企業の事業主に雇用されている従業員であり、[[法人企業の役員は加入できない]]。', //p201
                        '同機構の人件費・管理費等は[[国の費用で運営される]]。', //p202
                        '退職金支払いは、一時金だけでなく、[[一定の要件を満たせば分割払いも可能である]]。', //p202
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
                        // rev: 2026-10-04 確認済み
                        '第３号被保険者 → 第１号被保険者等', //p204
                        '中途脱退により加入資格を喪失した場合、[[脱退一時金等の給付はなされず]]、掛金を納めた期間に応じて型ごとに定められた年齢から、老齢年金が支給される。', //p206
                        '月額100,000円 → 月額68,000円', //p205
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
                    questionTitle="株式会社の設立"
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
                        '正しい',
                        '正しい',
                        '金融商品取引法は、有価証券報告書を提出しなければならない会社（提出[[子]]会社）の[[親]]会社は、「[[親]]会社等状況報告書」を提出しなければならないと定めている。', //p36
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
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
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の提案"
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
                    questionTitle="会社の整理"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '債権者側が管財人を選任 → 裁判所が管財人を選任', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
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
                    questionTitle="退職金・年金の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '損益計算書 → 貸借対照表', //p169
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
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
                    questionTitle="確定拠出年金のポータビリティ"
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
                    questionTitle="キャッシュバランスプラン"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'ハイブリッド',
                        'も拠出できる',
                        '国債の利回り',
                        '企業',
                        '個人口座',
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
                            questionTitle: '資産規模による企業の分類',
                            relatedProblems: [],
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '一般社団法人と一般財団法人',
                            relatedProblems: [],
                            content: '', //p
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '譲渡制限会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '株主資本等変動計算書',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '概算保険料を用いる場合は、[[契約締結後速やかに（遅くとも３カ月以内）精算を行わなければならない]]。', //p140
                        }, //44
                        {
                            questionTitle: '財形年金積立保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '団体信用生命保険',
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
                            // rev: 2026-10-04 確認済み
                            questionTitle: '確定拠出年金の給付',
                            relatedProblems: [],
                            content: '老齢給付金、[[遺族給付金（死亡一時金）]]および障害給付金の３つの形態に限られる。', //p191-192
                        }, //48
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2023a" next-route="daigaku.kigyo2023c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
