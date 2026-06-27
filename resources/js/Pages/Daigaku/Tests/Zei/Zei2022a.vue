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
const subject = "2022年度 フォームA";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp4
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職所得金額の計算"
                    :relatedProblems="['2022a1', '2022b1', '2022c1']"
                    :labels="['ア']"
                    :contents="[
                        {
                            // rev: 2026-06-27 確認済み
                            explanation: [
                                {
                                    type: 'text',
                                    value: '退職所得の金額は、[[（収入金額－退職所得控除額）×1/2]]で計算する。',
                                },
                                {
                                    type: 'text',
                                    value: 'また、勤続年数が20年を超える場合の退職所得控除額は、[[800万円＋70万円×（勤続年数－20年）]]である。',
                                },
                                {
                                    type: 'text',
                                    value: '本問では勤続年数が30年であるため、退職所得控除額は[[800万円＋70万円×（30年－20年）]]となる。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: 'したがって、退職所得の金額を求める計算式は次のとおりである。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['2,000万円－｛800万円＋70万円×（30年－20年）｝×1/2'],
                                },
                                {
                                    type: 'note',
                                    value: '以上より、[[ア]]が正しい。',
                                },
                            ],
                        },
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告"
                    :relatedProblems="['2022a2', '2022b2', '2022c2']"
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
                    :relatedProblems="['2022a3']"
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
                    questionTitle="社会政策に配慮した所得控除に関する知識（生命保険料控除）"
                    :relatedProblems="['2022a4', '2022b4', '2022c4']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '親族は、[[必ずしも生計を一にしていなくてもよい]]。', //p71
                        '保険料（自動）振替貸付となった契約は、責任準備金の一部を保険料に充当するため、[[支払保険料に該当するので、生命保険料控除の対象となる]]。', //p76
                        '前納保険料については、[[その年中に到来する払込期日に対応する保険料相当額]]が生命保険料控除の対象となる。', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2022a5', '2022c19']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '[[被相続人が負担した保険料に応じた一部の額]]が相続財産とみなされる。', //p116
                        '被相続人の死亡により、相続人、その他の人の受け取る弔慰金等については、[[実質的に退職手当金等と認められるものを除き、原則として課税されない]]。', //p117
                        'その契約に関する権利を相続または遺贈により取得したものとみなして[[相続税の課税対象となる]]。', //p117
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納付"
                    :relatedProblems="['2022a6', '2022c6']"
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
                    questionTitle="みなし贈与財産"
                    :relatedProblems="['2022a7', '2022b19', '2022c7']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '保険料の一部を保険金受取人以外の者が負担していた場合には、[[その負担割合に応じた金額]]が贈与により取得したものとみなされる。', //p143
                        '正しい',
                        '著しく低い価額の対価で財産の譲渡を受けた場合には、[[その対価とその財産の譲渡のときにおける時価（相続税評価額）との差額に相当する金額を、その財産を譲渡した者から贈与されたものとみなされる]]。', //p144
                        '財産を信託するときには、信託契約により委託者が受益者を指定することになっているが、この受益者が委託者以外の者であるときは、その信託行為があったときに、受益者がその信託受益権をその委託者から[[贈与によって取得したものとみなされる]]。', //p144
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の納付および特例措置"
                    :contents="[
                        // rev: 2026-06-15 確認済み
                        '正しい',
                        '自己の居住のための一定の家屋の新築もしくは取得、または[[一定の増改築等の対価にあてて、その家屋を同日（贈与を受けた年の翌年3月15日）までに自己の居住とする、またはそれが確実であると見込まれる場合]]に適用の対象となる。', //p150
                        '納税が[[免除される場合がある]]。', //p151
                        '受贈者1人につき[[1,000万円]]限度（結婚に際して支出する費用については[[300万円限度]]）。', //p154
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人年金保険に関する税務"
                    :relatedProblems="['2022a9', '2022b9', '2022c9']"
                    :contents="[
                        // rev: 2026-06-26 確認済み
                        '所定の要件を満たさない個人年金保険の保険料は、[[生命保険料控除の対象となる]]。', //p166
                        '雑所得 → 一時所得', //p166
                        'この契約に関する権利は、[[相続財産として相続税の対象になり]]、原則として解約返戻金の額で評価される。', //p168
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2022a10', '2022b10', '2022c10']"
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
                    questionTitle="法人税の申告・納付・処分"
                    :relatedProblems="['2022a11']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '3ヶ月 → 2ヶ月', //p222
                        '3ヶ月 → 2ヶ月', //p222
                        '法人税の申告書を提出した法人は、[[申告書の提出期限まで]]に申告書に記載した金額を納付しなければならない。', //p222
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="福利厚生プラン"
                    :relatedProblems="['2022a12', '2022b12', '2022c12']"
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
                    :relatedProblems="['2022a13', '2022b13', '2022c13']"
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
                    questionTitle="青色申告制度"
                    :relatedProblems="['2022a14', '2022c14']"
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
                    :relatedProblems="['2022a15', '2022b15']"
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
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2022a16', '2022b5']"
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
                    questionTitle="相続分"
                    :relatedProblems="['2022a17']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '特例分 → 寄与分', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算"
                    :relatedProblems="['2022a18', '2022c5']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '30% → 20%', //p127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2022a19', '2022b7', '2022c35']"
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
                    :relatedProblems="['2022a20', '2022b20', '2022c20']"
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
                    :relatedProblems="['2022a21', '2022b21', '2022c21']"
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
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2022a22', '2022b22', '2022c8']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の損金についての特別規定"
                    :relatedProblems="['2022a23']"
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
                    :relatedProblems="['2022a24', '2022b24', '2022c24']"
                    z
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
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="['2022a25', '2022b25', '2022c25']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '税額控除',
                        '10',
                        '6',
                        '2分の1',
                        '20', // 問25〜29
                    ]"
                    :labels="[
                        'コ', //25
                        'エ', //26
                        'ウ', //27
                        'キ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="給与所得者の税金"
                    :relatedProblems="['2022a30']"
                    :contents="[
                        // rev: 2026-06-26 確認済み
                        '事業所得',
                        '10%',
                        '利子所得',
                        '申告納税',
                        '賦課課税', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'カ', //31
                        'イ', //32
                        'コ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="相続制度"
                    :relatedProblems="['2022a35']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '失踪宣告',
                        '血族',
                        '代襲相続',
                        '相続欠落',
                        '遺留分', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'ア', //36
                        'エ', //37
                        'コ', //38
                        'キ', //39
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
                            relatedProblems: ['2022a40', '2022b40', '2022c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-13 確認済み
                            questionTitle: '個人事業税の申告と納付',
                            relatedProblems: ['2022a41', '2022c42'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-27 確認済み
                            questionTitle: '扶養控除',
                            relatedProblems: ['2022a42'],
                            content: '親元を離れて大学に通っている子や郷里の両親に仕送りをしている場合も[[「生計を一にしている」ということになる]]。',//p67
                        }, //42
                        {
                            // rev: 2026-06-27 確認済み
                            questionTitle: '医療費控除',
                            relatedProblems: ['2022a43'],
                            content: '人間ドックの費用や治療を受けるために直接必要としない近視、遠視等の眼鏡や補聴器等の購入費は医療費控除の対象となる[[医療費として認められない]]。', //p79
                        }, //43
                        {
                            // rev: 2026-06-26 確認済み
                            questionTitle: '相続放棄',
                            relatedProblems: ['2022a44'],
                            content: '相続放棄は限定承認と異なり、[[共同相続人が全員で申述する必要はなく、１人でもできる]]。', //p95
                        }, //44
                        {
                            // rev: 2026-06-27 確認済み
                            questionTitle: '相続税額の計算',
                            relatedProblems: ['2022a45', '2022c44'],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-06-14 確認済み
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            relatedProblems: ['2022a46'],
                            content: '結婚・子育て資金にあてるために、父母や祖父母等の直系尊属が金銭を拠出し、信託銀行等の所定の金融機関等に信託等をした場合に、[[信託受益権の価額または拠出された金銭等の額のうち別途定める金額を非課税とする]]。', //p154
                        }, //46
                        {
                            // rev: 2026-06-22 確認済み
                            questionTitle: '使途秘匿金に対する追加課税',
                            relatedProblems: ['2022a47', '2022c46'],
                            content: '60% → 40%', //p223
                        }, //47
                        {
                            // rev: 2026-06-27 確認済み
                            questionTitle: '年払・半年払の保険料の経理',
                            relatedProblems: ['2022a48', '2022b48', '2022c48'],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-06-27 確認済み
                            questionTitle: '支払調書',
                            relatedProblems: ['2022a49', '2022b49', '2022c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2023c" next-route="daigaku.zei2022b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
