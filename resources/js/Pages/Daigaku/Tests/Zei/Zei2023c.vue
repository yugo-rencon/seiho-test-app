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
                    questionTitle="退職所得金額の計算"
                    :relatedProblems="['2023a1', '2023b1', '2023c1']"
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
                    questionTitle="確定申告"
                    :relatedProblems="['2023a2', '2023b2', '2023c2']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '1月16日から2月15日 → 2月16日から3月15日', //p37
                        '10万円 → 20万円', //p38
                        '正しい',
                        '所得税の納付期限は、申告期限と同じ3月15日であるが、期限までにその全額を納付することができない場合には、確定申告で納付することになった税額の2分の1以上を3月15日までに納付すれば、残額については[[5月31日]]までの延納が認められる。', //p39
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人事業税"
                    :relatedProblems="['2023c3']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '市区町村 → 都道府県', //p47
                        '個人事業税は、原則として所得税における所得の計算方法に準じて算出した前年中の個人の「事業所得」および「不動産所得」（それぞれ必要経費を控除後）の合計額に対して、[[事業の種類ごとに定められている税率]]を乗じた額となる。', //p47
                        '個人事業税の申告がある場合であっても、前年分の所得税についての確定申告書を提出した場合は、[[個人事業税の申告がされたものとみなされる]]。', //p48
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :relatedProblems="['2023a4', '2023b4', '2023c4']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '少額短期保険業者の取り扱う各保険商品や損害保険会社で取り扱う年金払積立傷害保険等の保険料は[[該当しない]]。', //p71
                        '損害保険会社が取り扱う第三分野の保険契約（傷害保険を除く医療費用保険等）については、[[介護医療保険料控除の対象に変更された]]。', //p72
                        '保険料（自動）振替貸付となった契約は、責任準備金の一部を保険料に充当するため、[[支払保険料に該当するので、生命保険料控除の対象となる]]。', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算"
                    :relatedProblems="['2023c5']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '相続税の課税価格は、財産を取得した者の住所が日本国内にあるかないかにより[[異なる]]。', //p121
                        '借入金や未払金等も[[認められている]]。', //p122
                        '香典返礼費用、初七日、その他法事等のための費用は[[葬式費用に含めない]]。', //p123
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納付"
                    :relatedProblems="['2023b6', '2023c6']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '正しい',
                        '被相続人の死亡のときの住所が日本国内にある場合には、その[[被相続人の死亡のときにおける住所地]]の所轄税務署長に提出する。', //p135
                        '1年 → 10ヶ月', //p135
                        '相続税の申告期限までに相続税の申告書に記載した税額を納められない場合は、相続税の申告期限までに次のすべての要件を満たした「延納申請書」を提出し、税務署長の許可を得た場合に、[[延納することができる]]。', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の納付および特例措置"
                    :relatedProblems="['2023a8', '2023b8', '2023c7']"
                    :contents="[
                        // rev: 2026-06-15 確認済み
                        '正しい',
                        '自己の居住のための一定の家屋の新築もしくは取得、または[[一定の増改築等の対価にあてて、その家屋を同日（贈与を受けた年の翌年3月15日）までに自己の居住とする、またはそれが確実であると見込まれる場合]]に適用の対象となる。', //p150
                        '納税が[[免除される場合がある]]。', //p151
                        '受贈者1人につき[[1,000万円]]限度（結婚に際して支出する費用については[[300万円限度]]）。', //p154
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2023b22', '2023c8']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '入院給付金や高度障害保険金等は被保険者本人が受け取るが、[[被保険者の配偶者もしくは直系血族または生計を一にするその他の親族が受け取った場合も、被保険者と同様に非課税となる]]。', //p176-177
                        '正しい',
                        '年をまたぐ入院の場合、たとえば12月末に本年分の入院費を支払い、翌年退院時に残額を支払ったときには、[[入院給付金も本年対応分と翌年対応分とに分けて差し引く]]。', //p177
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人年金保険に関する税務"
                    :relatedProblems="['2023a9', '2023b9', '2023c9']"
                    :contents="[
                        // rev: 2026-06-26 確認済み
                        '所定の要件を満たさない個人年金保険の保険料は、[[生命保険料控除の対象となる]]。', //p166
                        '雑所得 → 一時所得', //p166
                        '既払込保険料総額 → 解約返戻金の額', //p168
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2023a10', '2023b10', '2023c10']"
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
                    questionTitle="契約内容等の変更に関する税務"
                    :relatedProblems="['2023a11', '2023c11']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '契約に関する権利について、[[課税関係は生じない]]。', //p180
                        '収入を得るために支出した金額 ＝ [[転換前契約の実払保険料 ＋ 転換後契約の実払保険料]]', //p181
                        '正しい',
                        '増額による追加分の保険料については、[[生命保険料控除が受けられる]]。', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="福利厚生プラン"
                    :relatedProblems="['2023a12', '2023b12', '2023c12']"
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
                    questionTitle="雑所得"
                    :relatedProblems="['2023a13', '2023b13', '2023c13']"
                    :contents="[
                        // rev: 2026-06-11 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '1回に支払われる金額のうち[[100万円以下の部分は10％、100万円を超える部分は20％]]が源泉徴収される。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人住民税"
                    :relatedProblems="['2023c14']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '150万円 → 135万円', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ひとり親控除"
                    :relatedProblems="['2023a17', '2023c15']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2023a30', '2023b5', '2023c16']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '正しい',
                        '公的年金等の受給者全員が[[源泉徴収の対象となるわけではない]]。', //p86
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺贈と遺言"
                    :relatedProblems="['2023c17']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '正しい',
                        '遺言の効力は、[[遺言者の死亡のときから生ずる]]。したがって、遺言書作成時に遺言は成立するが、遺言者が生存中は権利義務は生じない。', //p105
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2023c18']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '正しい',
                        '最も高い価額 → 最も低い価額', //p114
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2023c19']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '5年 → 2年', //p145
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2023a20', '2023b20', '2023c20']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '相続時精算課税制度の適用対象となる贈与財産の種類、金額、[[贈与回数に制限はない]]。', //p155
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険に関する税務"
                    :relatedProblems="['2023a21', '2023b21', '2023c21']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '一時所得 → 雑所得', //p166
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の申告と納付"
                    :relatedProblems="['2023b23', '2023c22']"
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
                    questionTitle="法人税の損金についての特別規定"
                    :relatedProblems="['2023a23', '2023c23']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '寄附金は、法人の事業に直接関係のない支出であり、[[損金算入には一定の制限が設けられている]]。', //p209
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :relatedProblems="['2023a24', '2023b24', '2023c24']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '加入者が役員または部課長、その他特定の使用人のみの場合、保険料が[[給与課税される]]。', //p236
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="予定納税"
                    :relatedProblems="['2023a25', '2023b25', '2023c25']"
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
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="['2023c30']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '税額控除',
                        '認定低炭素住宅',
                        '耐震',
                        '10%',
                        '3年間', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'エ', //31
                        'ウ', //32
                        'キ', //33
                        'カ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人税"
                    :relatedProblems="['2023a35', '2023c35']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '非課税',
                        '日本国内',
                        '益金算入・損金不算入',
                        '申告調整',
                        '配当', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'コ', //36
                        'カ', //37
                        'イ', //38
                        'ク', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-20 確認済み
                            questionTitle: '各種所得と損益通算',
                            relatedProblems: ['2023a40', '2023b40', '2023c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-13 確認済み
                            questionTitle: '個人事業税の申告と納付',
                            relatedProblems: ['2023a42', '2023c41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-24 確認済み
                            questionTitle: '賦課課税',
                            relatedProblems: ['2023c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '退職後、再就職しなかった場合の確定申告',
                            relatedProblems: ['2023b43', '2023c43'],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-26 確認済み
                            questionTitle: '相続放棄',
                            relatedProblems: ['2023c44'],
                            content: '相続放棄は限定承認と異なり、[[共同相続人が全員で申述する必要はなく、１人でもできる]]。', //p95
                        }, //44
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2023a45', '2023c45'],
                            content: '一時所得 → 雑所得', //p174
                        }, //45
                        {
                            // rev: 2026-06-13 確認済み
                            questionTitle: '法人事業税の申告と納付',
                            relatedProblems: ['2023c46'],
                            content: '法人事業税は申告納付の方法によって納税され、法人税の申告納税に準じているが、[[青色申告制度は法人事業税については認められない]]。', //p224
                        }, //46
                        {
                            // rev: 2026-06-14 確認済み
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            relatedProblems: ['2023c47'],
                            content: '結婚・子育て資金にあてるために、父母や祖父母等の直系尊属が金銭を拠出し、信託銀行等の所定の金融機関等に信託等をした場合に、[[信託受益権の価額または拠出された金銭等の額のうち別途定める金額を非課税とする]]。', //p154
                        }, //47
                        {
                            // rev: 2026-06-22 確認済み
                            questionTitle: '使途秘匿金に対する追加課税',
                            relatedProblems: ['2023a48', '2023b48', '2023c48'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '支払調書',
                            relatedProblems: ['2023a49', '2023b49', '2023c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2023b" next-route="daigaku.zei2022a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
