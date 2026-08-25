<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2025年度 フォームA";
const isDraft = false;
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
                    questionTitle="所得の種類"
                    :relatedProblems="['2025a1', '2025b1', '2025c1']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '金銭で受領せずに商品等の現物を支給される、いわゆる現物給与も給与所得として[[課税対象となる]]。', //p10
                        '山林所得または譲渡所得に該当するものは[[除く]]。', //p11
                        '正しい',
                        '配当所得 → 一時所得', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="雑所得"
                    :relatedProblems="['2025a2']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '講演料や放送謝金（[[事業と認められるものを除く]]）', //p14
                        '正しい',
                        '中小企業退職金共済法に基づき分割払の方法で支給される分割退職金は、公的年金等の収入金額に[[該当する]]。', //p14
                        '25% → 10%', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :relatedProblems="['2025a3']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '市区町村 → 都道府県', //p47,p219
                        '個人事業税は、原則として所得税における所得の計算方法に準じて算出した前年中の個人の「事業所得」および「不動産所得」（それぞれ必要経費を控除後）の合計額に対して、[[事業の種類ごとに定められている税率]]を乗じた額となる。', //p47
                        '個人事業税の申告がある場合であっても、前年分の所得税についての確定申告書を提出した場合は、[[個人事業税の申告がされたものとみなされる]]。', //p48
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2025a4', '2025b16', '2025c16']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '公的年金の中には、厚生年金制度・国民年金制度における遺族年金等のように[[非課税所得とみなされ、課税されないものがある]]。', //p86
                        '厚生労働省 → 日本年金機構', //p86
                        '正しい',
                        '所得税が[[非課税となるわけではない]]。', //p87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続人"
                    :relatedProblems="['2025a5', '2025b5', '2025c5']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '[[他へ養子に行った子]]、嫁に行った娘も[[相続人となる]]（特別養子を除く）。', //p93
                        '胎児は相続において、すでに生まれたものとみなされて[[相続権が認められる]]（ただし、死産の場合は適用されない）。', //p93
                        '廃除の対象となる相続人は、遺留分を有する推定相続人に限られるので、[[遺留分を有しない兄弟姉妹は廃除の対象にならない]]。', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の各人の課税価格の計算"
                    :relatedProblems="['2025a6']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '相続税の課税価格は、[[財産を取得した者の住所が日本国内にあるかないかにより異なる]]。', //p121
                        '借入金や未払金等も[[認められている]]。', //p122
                        '香典返礼費用、初七日、その他法事等のための費用は、[[葬式費用に含めない]]。', //p123
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2025a7', '2025c20']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '法律上の根拠がなくても経済的価値が認められているもの、たとえば営業権のようなものも[[含まれる]]。', //p143
                        '正しい',
                        '個人は、法人からの贈与財産に対して、[[贈与税ではなく、給与または一時所得として所得税・住民税が課税される]]。', //p145
                        '1年間に贈与を受けた財産の課税価格が110万円以下であれば、贈与税は課税されず、[[贈与税の申告書を提出する必要もない]]。', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険（学資保険）に関する税務"
                    :relatedProblems="['2025a8', '2025b8', '2025c8']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '雑所得 → 一時所得', //p165
                        '正しい',
                        '保険料払込免除後の保険料分は、[[必要経費とならない]]。', //p165
                        '一時所得 → 雑所得', //p166
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :relatedProblems="['2025a9', '2025b9', '2025c9']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '特別条件付契約の特別保険料（割増保険料）は[[損金算入できる]]。', //p226
                        '加入者が役員または部課長、その他特定の使用人のみの場合、保険料が[[給与課税される]]。', //p236
                        '正しい',
                        '加入目的が事業上の理由である場合は、その保険料は期間の経過に応じて[[必要経費に算入される]]。', //p236
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2025a10', '2025b22', '2025c10']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '死亡保険金額の設定は、[[生命保険の加入による相続税の増加分を見込んで]]、死亡保険金の加算によって相続財産がそのまま残るように保険金額を計算する。', //p185
                        '3割 → 2割', //p189
                        '正しい',
                        '個人が生命保険契約の保険契約者および保険金受取人を変更しても、[[変更時点では課税されず]]、「解約」「満期」「死亡」により契約が終了し、保険金等が支払われる時点で、課税関係が発生する。', //p195
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税法の損金についての特別規定"
                    :relatedProblems="['2025a11']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '隠ぺいまたは仮装経理により支給されたものは[[損金算入されない]]。', //p207
                        '一般の寄附金は、[[利益処分により支出したときは損金の額に算入できない]]。また、利益処分による支出でない場合でも、一定金額（損金算入限度額）を超える場合は、その超える部分の金額は損金の額に算入できない。', //p210
                        '資本金1億円以下の中小法人について、交際費等の年間支出額のうち800万円以下の部分について[[全額損金の額に算出できる]]。', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="福利厚生プラン"
                    :relatedProblems="['2025a12']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '2/3 → 1/2', //p255
                        '中小企業退職金共済制度（中退共）等の他の退職金制度がある場合には、これらの制度と福利厚生プランとの合計額が退職慰労金規程の[[範囲内]]であるように設定する。', //p255
                        '「年」満期で保険期間が全員同一の場合は、被保険者全員の契約が同時に満期を迎えるため、満期保険金と資産計上していた保険料積立金との差額が[[雑収入となり、大幅な利益が上がる可能性がある]]。', //p255
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="各種所得と損益通算"
                    :relatedProblems="['2025a13', '2025b13', '2025c13']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '損益通算を行うにあたり山林所得の金額のうち、その年中に控除しきれない部分の金額を「[[純損失]]」に分類される。', //p23
                        '正しい',
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="青色申告制度"
                    :relatedProblems="['2025a14', '2025c14']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '青色申告者が備え付けるべき帳簿書類は、年末に「貸借対照表」と「損益計算書」を作成することができるような正規の複式簿記に基づく帳簿でなければならない。ただし、[[簡易帳簿によって記録することもできる]]。', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="住民税の主な所得控除"
                    :relatedProblems="['2025a15']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '70歳以上の親族を扶養の場合、扶養控除額は、同居の場合[[45万円]]、非同居の場合[[38万円]]である。', //p44
                        '正しい',
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告の訂正と税務調査・処分"
                    :relatedProblems="['2025a16']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '7年 → 5年', //p61
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺贈・遺言と遺留分"
                    :relatedProblems="['2025a17', '2025b17', '2025c17']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '遺言実現のための行為を「[[遺言の執行]]」といい、遺言書の保管者や遺言書を発見した相続人は、相続の開始を知った後、遅滞なくその遺言書を家庭裁判所に提出して、その「検認」を請求しなければならない。[[なお、公正証書による遺言の場合は、公証人によって公の記録があるので、検認の手続きをする必要はない]]。', //p106
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の承認と放棄、相続分"
                    :relatedProblems="['2025a18']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '相続分には、「指定相続分」と「法定相続分」があり、「[[指定相続分]]」が優先される。', //p95
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2025a19', '2025c6']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '既払込保険料総額 → 解約返戻金相当額', //p118
                    ]"
                />
<QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :relatedProblems="['2025a20', '2025b19']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '12ヶ月 → 10ヶ月', //p135
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2025a21', '2025b21', '2025c21']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '基礎控除適用後の贈与財産の価額の累計額から、複数年にわたり利用できる非課税枠[[2,500万円]]（特別控除額）を控除した後の金額に、一律[[20％]]の税率を乗じて算出する。', //p156
                    ]"
                />
<QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :relatedProblems="['2025a22', '2025b11', '2025c23']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '法人税の課税所得金額を計算する場合、企業会計上の決算利益に加算項目の「益金[[算入]]・損金[[不算入]]」と減算項目の「益金[[不算入]]・損金[[算入]]」の調整をするが、これを「申告調整」（または「税務調整」）という。', //p202
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税等の申告と納付"
                    :relatedProblems="['2025a23', '2025b23']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '3ヶ月 → 2ヶ月', //p222
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
<QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2025a24', '2025b24', '2025c24']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="予定納税"
                    :relatedProblems="['2025a25', '2025b25', '2025c25']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '申告納税',
                        '15',
                        '3分の1',
                        '11月1日から11月30日',
                        '5月15日', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'イ', //26
                        'エ', //27
                        'オ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="中高年者に関する税金の知識"
                    :relatedProblems="['2025a30']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '20',
                        '一般生命保険料',
                        '小規模企業共済等掛金',
                        '雑所得',
                        '退職所得', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'オ', //31
                        'ケ', //32
                        'ウ', //33
                        'キ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人等に課税される税金の計算"
                    :relatedProblems="['2025a35', '2025b35']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '所有期間',
                        '青色申告',
                        '規模',
                        '均等割',
                        '従業員数', // 問35〜39
                    ]"
                    :labels="[
                        'ケ', //35
                        'ア', //36
                        'ウ', //37
                        'キ', //38
                        'カ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '住宅借入金等特別控除（住宅ローン控除）',
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '配当所得に対する課税の特例',
                            relatedProblems: ['2025a41'],
                            content: '「配当所得に対する課税の特例」として、上場株式等の配当（株式投資信託等の収益分配金を含む）の支払いを受ける場合は、[[選択により確定申告をせずに源泉徴収だけで課税関係が終了する申告不要制度が設けられている]]。', //p17
                        }, //41
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '特別の損失または支出に対する配慮に基づく所得控除に関する知識',
                            relatedProblems: ['2025a42', '2025b42'],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '特別の寄与',
                            relatedProblems: ['2025a43'],
                            content: '被相続人に対する[[無償]]の療養看護その他の労務の提供によって、被相続人の財産の維持・増加に対して特別の寄与をした被相続人の親族（相続人、相続を放棄した者、相続欠格の事由に該当する者、廃除された者を除く）を「特別寄与者」という。', //p103
                        }, //43
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '相続税の納税',
                            relatedProblems: ['2025a44', '2025b44', '2025c44'],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-14 確認済み
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            relatedProblems: ['2025a45'],
                            content: '結婚・子育て資金にあてるために、父母や祖父母等の直系尊属が金銭を拠出し、信託銀行等の所定の金融機関等に信託等をした場合に、[[信託受益権の価額または拠出された金銭等の額のうち別途定める金額を非課税とする]]。', //p154
                        }, //45
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2025a46', '2025c46'],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '契約内容などの変更に関する税務',
                            relatedProblems: ['2025a47', '2025b10', '2025b47', '2025c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '法人税の受取配当等の益金不算入',
                            relatedProblems: ['2025a48', '2025c48'],
                            content: '完全子法人株式等（株式等保有割合100%）の場合は、[[受取配当等の額]]が益金不算入となり、関連法人株式等（株式等保有割合３分の１超）の場合は、[[受取配当等の額－負債利子]]が益金不算入となる。', //p202
                        }, //48
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '法人向け保険商品の課税',
                            relatedProblems: ['2025a49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.zei2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
