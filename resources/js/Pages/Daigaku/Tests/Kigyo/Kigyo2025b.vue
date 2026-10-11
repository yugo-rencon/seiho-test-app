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

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類"
                    :relatedProblems="['2025a1', '2025b1', '2025c1']"
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
                    :relatedProblems="['2025b2']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '募集設立とは、発起人が[[一部の株式を引き受け]]、残りの株式を引き受ける者（株式引受人）を募集して会社を設立する方法である。', //p18
                        '会社法では、会社を登記するにあたり、同一商号、同一住所の会社は、[[登記することができない]]。', //p20
                        '種類株式は優先株式ともよばれ、配当や株主総会議決権等の一定の項目について、[[普通株式とは権利内容が異なる株式である]]。', //p20
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="支配関係による親会社・子会社の分類等"
                    :relatedProblems="['2025b3']"
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
                    questionTitle="法人設立時の公的資金融資と中小企業を対象とする金融機関"
                    :relatedProblems="['2025a14', '2025b4', '2025c14']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '日本政策金融公庫の融資は、一定の条件を満たせば、[[個人事業でも法人でも受けられる]]。', //p38
                        '実際の融資は[[金融機関]]が行う。', //p39
                        '正しい',
                        '商工組合中央金庫は、多くの政府系金融機関が融資のみに特化した機能をもつ中で、[[預金の受入れ、国際為替、短期の資金供給等、「幅広い総合金融サービス」を行っている]]。', //p42
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表分析の基礎知識"
                    :relatedProblems="['2025a5', '2025b5']"
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
                    :relatedProblems="['2025b6', '2025c44']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '相続対策として自己株式買取資金の準備についても該当する。', //p70
                        '正しい',
                        '事業保障資金＝短期債務額＋[[従業員の年間給与総額]]', //p70
                        '保険期間は、一般には、[[勇退（予想）時点まで]]とされている。。', //p70
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="養老保険を活用した福利厚生プランの内容と留意点"
                    :relatedProblems="['2025a7', '2025b7', '2025c7']"
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
                    :relatedProblems="['2025a8', '2025b8', '2025c8']"
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
                    :relatedProblems="['2025a19', '2025b9']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '就業不能状態とは、傷害または疾病により、病院もしくは診療所への治療を目的とした入院または[[医師の指示による自宅療養]]をしており、かつ、協定書記載業務に全く従事できない状態をいう。', //p153
                        '[[不支給期間終了日の翌日]]から、就業不能状態が終了した日までを就業不能保険金支払期間とするが、[[実際の支払いは支払限度期間の範囲内とする]]。', //p154
                        '被保険者（本人）が、生命保険会社から直接就業不能保険金を受け取る場合は、[[全額非課税扱いが認められる]]。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の給付"
                    :relatedProblems="['2025a10', '2025b10']"
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
                    :relatedProblems="['2025b11', '2025c10']"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '資格喪失した日の翌日から３ヶ月以内 → 資格喪失した日の属する月の翌月から６ヶ月以内', //p198
                        '加入者の年金資産はそのままとなる。', //p198
                        '確定拠出年金の年金資産は、[[移換時の非課税となる]]。', //p197
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金基金"
                    :relatedProblems="['2025a12', '2025b12', '2025c12']"
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
                    questionTitle="株式会社の役員とその権限"
                    :relatedProblems="['2025a13', '2025b13', '2025c13']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '社内で定められている権限を越えてなされた取引行為も、取引の相手方である第三者が「当該取締役には代表権またはその取引について代理権がある」と信じた場合には、その第三者との間においては、[[その取引は有効となり、会社はその責任を負わなければならない]]。', //p27
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者を取り巻くリスクと対策"
                    :relatedProblems="['2025b14', '2025c16']"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '経営者はさまざまなリスクを抱えているにもかかわらず、労災保険や社会保険等の社会保障制度、および企業保障制度については、従業員に比べて[[非常に薄い]]のが現状である。', //p64
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="民間金融機関"
                    :relatedProblems="['2025a15', '2025b15', '2025c15']"
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
                    questionTitle="会社の整理"
                    :relatedProblems="['2025a16', '2025b16', '2025c6']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '債権者側が管財人を選任 → 裁判所が管財人を選任', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="自社株対策の重要性"
                    :relatedProblems="['2025b17']"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '自社株以外の財産が少ない場合、[[他の相続人との間で遺産分割におけるトラブルが懸念される]]。', //p100
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="['2025a17', '2025b18', '2025c25']"
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
                    questionTitle="集団扱定期保険"
                    :relatedProblems="['2025b19', '2025c18']"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '集団扱定期保険における保険金受取人は、保険契約者である集団もしくはその代表者、または[[被保険者の家族]]である。', //p144
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="['2025a20', '2025b20', '2025c20']"
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
                    :relatedProblems="['2025a21', '2025b21', '2025c21']"
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
                    questionTitle="医療保障保険（団体型）の税法上の取扱い"
                    :relatedProblems="['2025b22', '2025c19']"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '正しい',
                        '従業員の死亡によりその遺族が死亡保険金を受け取った場合は、団体（法人）が負担した保険料は従業員が負担していたものとみなして[[相続税の課税対象となる]]。', //p151
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金の課税関係"
                    :relatedProblems="['2025a23', '2025b23', '2025c23']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '確定給付企業年金で、加入者個人が支払った掛金は、[[個人の所得控除の対象となる]]。', //不明（2025a23から作成）
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の運用対象商品"
                    :relatedProblems="['2025a24', '2025b24']"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '動産、不動産および商品先物は組入れることができない。', //p195
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
                    :relatedProblems="['2025a22', '2025b25', '2025c22']"
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
                    :relatedProblems="['2025a30', '2025b30', '2025b47', '2025c30']"
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
                    questionTitle="中小企業退職金共済制度（中退共）・特定退職金共済制度（特退共）"
                    :relatedProblems="['2025a11', '2025b35']"
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
                            relatedProblems: ['2025a3', '2025a40', '2025b40', '2025c2', '2025c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '株主の権利・義務',
                            relatedProblems: ['2025a2', '2025b41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '資産規模による企業の分類',
                            relatedProblems: ['2025a42', '2025b42'],
                            content: '１億円以上 → ５億円以上<br>100億円以上 → 200億円以上', //p33
                        }, //42
                        {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '株主資本等変動計算書',
                            relatedProblems: ['2025a43', '2025b43', '2025c43'],
                            content: '会社法では[[すべての株式会社]]について貸借対照表、損益計算書に加えて[[株主資本等変動計算書の作成を義務付けることになった]]。', //p60
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: ['2025a18', '2025a45', '2025b44', '2025c17'],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '総合福祉団体定期保険における被保険団体の要件',
                            relatedProblems: ['2025a44', '2025b45', '2025c45'],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: ['2025a46', '2025b46', '2025c9', '2025c46'],
                            content: '家族特約を付加することにより被保険者の範囲に配偶者および子を含めることができる（直系尊属は不可）。', //p146
                        }, //46
                        {
                            // rev: 2026-10-05 確認済み
                            questionTitle: '団体信用生命保険',
                            relatedProblems: ['2025a30', '2025b30', '2025b47', '2025c30'],
                            content: '債務者（被保険者）が負担する保険料は、[[生命保険料控除の対象とならない]]。', //p166
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金基金',
                            relatedProblems: ['2025a47', '2025b48'],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-10-05 確認済み
                            questionTitle: '確定拠出年金の課税関係',
                            relatedProblems: ['2025b49'],
                            content: '個人の所属控除の対象となる。', //p198
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2025a" next-route="daigaku.kigyo2025c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
