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
const subject = "2023年度 フォームA";
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
                    :relatedProblems="[['2023a1', '2023b1', '2023c1']]"
                    :labels="['ウ']"
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
                                    value: 'また、[[勤続年数が20年以下の場合]]の退職所得控除額は、[[40万円×勤続年数（最低80万円）]]である。',
                                },
                                {
                                    type: 'text',
                                    value: '本問では勤続年数が15年であるため、退職所得控除額は[[40万円×15年]]となる。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: 'したがって、退職所得の金額を求める計算式は次のとおりである。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['[[（1,000万円－40万円×15年）×1/2]]'],
                                },
                                {
                                    type: 'note',
                                    value: '以上より、[[ウ]]が正しい。',
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
                    questionTitle="所得税の配偶者控除と配偶者特別控除"
                    :relatedProblems="['2023a3', '2023b3']"
                    :contents="[
                        // rev: 2026-06-27 確認済み
                        '納税者の合計所得金額に応じて[[控除額が異なる]]。', //p24
                        '28万円 → 62万円', //p24
                        '1,100万円 → 1,000万円', //p24
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
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2023a5']"
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
                    questionTitle="相続の承認と放棄"
                    :relatedProblems="['2023a6']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '包括承認 → 単純承認', //p94
                        '[[共同相続人全員]]で家庭裁判所に申述しなければならない。', //p95
                        '相続分には、「指定相続分」と「法定相続分」があり、「[[指定相続分]]」が優先される。', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の延納"
                    :relatedProblems="['2023a7']"
                    :contents="[
                        // rev: 2026-06-27 確認済み
                        '国税庁長官 → 税務署長', //p136
                        '正しい',
                        '100万円 → 10万円', //p136
                        '[[担保が必要な場合もある]]（延納税額が100万円以下で、かつ延納期間が3年以下の場合は不要）。', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の納付および特例措置"
                    :relatedProblems="['2023a8', '2023b8', '2023c7']"
                    :contents="[
                        // rev: 2026-06-15 確認済み
                        '10年 → 5年', //p150
                        '自己の居住のための一定の家屋の新築もしくは取得、または[[一定の増改築等の対価にあてて、その家屋を同日（贈与を受けた年の翌年3月15日）までに自己の居住とする、またはそれが確実であると見込まれる場合]]に適用の対象となる。', //p150
                        '正しい',
                        '受贈者1人につき[[1,000万円]]限度（結婚に際して支出する費用については[[300万円限度]]）。', //p154
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
                    questionTitle="青色申告制度"
                    :relatedProblems="['2023a14', '2023b14']"
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
                    :relatedProblems="['2023a15', '2023b15']"
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
                    :relatedProblems="['2023a16']"
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
                    questionTitle="ひとり親控除"
                    :relatedProblems="['2023a17', '2023c15']"
                    :contents="[
                        // rev: 2026-06-27 確認済み
                        '正しい',
                        '正しい',
                        '600万円 → 500万円', //p25
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税価格の計算"
                    :relatedProblems="['2023a18', '2023b18']"
                    :contents="[
                        // rev: 2026-06-27 確認済み
                        '正しい',
                        '正しい',
                        '香典返礼費用は、[[葬式費用に含めない]]。', //p123
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし贈与財産"
                    :relatedProblems="['2023a19', '2023b7']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '著しく低い価額の対価で財産の譲渡を受けた場合には、[[その対価とその財産の譲渡のときにおける時価（相続税評価額）との差額に相当する金額を、その財産を譲渡した者から贈与されたものとみなされる]]。', //p144
                        '正しい',
                        '正しい',
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
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :relatedProblems="['2023a22']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '正しい',
                        '正しい',
                        '満期保険金受取人（妻）が実際に取得した額[[800万円（1,000万円－200万円）]]に対し、みなし贈与財産として贈与税が課税される。', //p181
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
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2023a30', '2023b5', '2023c16']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '遺族',
                        '日本年金機構',
                        '裁定',
                        '400万円',
                        '20万円', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'オ', //31
                        'ケ', //32
                        'カ', //33
                        'エ', //34
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
                            // rev: 2026-06-22 確認済み
                            questionTitle: '譲渡所得',
                            relatedProblems: ['2023a41', '2023b41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-13 確認済み
                            questionTitle: '個人事業税の申告と納付',
                            relatedProblems: ['2023a42', '2023c41'],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-06-27 確認済み
                            questionTitle: '医療費控除',
                            relatedProblems: ['2023a43'],
                            content: '人間ドックの費用や治療を受けるために直接必要としない近視、遠視等の眼鏡や補聴器等の購入費は医療費控除の対象となる[[医療費として認められない]]。', //p79
                        }, //43
                        {
                            questionTitle: '相続時の物納',
                            relatedProblems: ['2023a44'],
                            content: '',
                        }, //44
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2023a45', '2023c45'],
                            content: '一時所得 → 雑所得', //p174
                        }, //45
                        {
                            questionTitle: '納税猶予制度',
                            relatedProblems: ['2023a46'],
                            content: '',
                        }, //46
                        {
                            // rev: 2026-06-27 確認済み
                            questionTitle: '棚卸資産の評価',
                            relatedProblems: ['2023a47', '2023b47'],
                            content: '棚卸資産の期末評価の方法には、[[原価法と低価法]]がある。', //p203
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

            <TestNavigationButtons previous-route="daigaku.zei2024c" next-route="daigaku.zei2023b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
