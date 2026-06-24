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
const subject = "2025年度 フォームC";
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
                    questionTitle="所得税の申告と納税"
                    :relatedProblems="['2025c2']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '退職所得は、源泉徴収で納税が完結するが、退職金の支払いを受けるときに「退職所得の受給に関する申告書」を提出しなかったため、[[20％]]の税率で源泉徴収された者で、その税額が正規の方法で計算した税額より少ないとき、[[確定申告をしなければならない]]。', //p38
                        '正しい',
                        '6ヶ月 → 4ヶ月', //p38
                        '所得税の納付期限は、申告期限と同じ3月15日であるが、確定申告で納付することになった税額の2分の1以上を3月15日までに納付すれば、[[残額については5月31日までの延納が認められる]]。', //p39
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人住民税の知識"
                    :relatedProblems="['2025c3']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '150万円 → 135万円', //p42
                        '正しい',
                        '個人住民税（所得割）の税率は、（都）道府県民税が[[4%]]、市（区）町村民税が[[6%]]の計[[10%]]となっている。', //p44
                        '個人住民税は「納税通知書」の送付によって納税する「[[普通徴収]]」が原則であるが、給与所得者は「[[特別徴収]]」で給与の支払者が支払う給与から所得税等と一緒に住民税を徴収（給与天引き）して納付する。', //p46
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="法定相続分"
                    :relatedProblems="[['2025b4', '2025c4']]"
                    :labels="['ア']"
                    :contents="[
                        {
                            // rev: 2026-06-21 確認済み
                            // answer: '妻：1,500万円、子A：500万円、子B：500万円、孫D：250万円、孫E：250万円',
                            explanation: [
                                {
                                    type: 'text',
                                    value: '被相続人の遺産は3,000万円であり、法定相続人は妻、子A、子B、死亡した子Cの代襲相続人である孫D・Eである。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: 'まず、妻と子で相続分を分ける。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['妻：3,000万円 × 1/2 ＝ 1,500万円', '子全体：3,000万円 × 1/2 ＝ 1,500万円'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '次に、子全体の相続分をA・B・Cの3人で分ける。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['子A：1,500万円 × 1/3 ＝ 500万円', '子B：1,500万円 × 1/3 ＝ 500万円', '子C：1,500万円 × 1/3 ＝ 500万円（代襲相続）'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: 'さらに、子Cの相続分500万円を孫D・Eで等分する。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['孫D：500万円 × 1/2 ＝ 250万円', '孫E：500万円 × 1/2 ＝ 250万円'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: 'したがって、各人の法定相続分は次のとおりである。',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['妻：1,500万円', '子A：500万円', '子B：500万円', '孫D：250万円', '孫E：250万円'],
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
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2025a19', '2025c6']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '[[被相続人が負担した保険料に応じた一部の額]]が相続財産とみなされる。', //p116
                        '被相続人の死亡により、相続人、その他の人の受け取る弔慰金等については、[[実質的に退職手当金等と認められるものを除き、原則として課税されない]]。', //p117
                        'その契約に関する権利を相続または遺贈により取得したものとみなして[[相続税の課税対象となる]]。', //p117
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の税額計算・申告・納付等"
                    :relatedProblems="['2025c7']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '贈与税は、その年の[[1月1日から12月31日まで]]の間に贈与を受けた財産の価額の合計額に対して課税される。', //p147
                        '4000万円 → 2000万円', //p148
                        '贈与税の申告書の提出期限は、贈与を受けた年の[[翌年2月1日から3月15日まで]]である。', //p149
                        '正しい',
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
                    questionTitle="同族会社"
                    :relatedProblems="['2025c11']"
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
                    questionTitle="法人税の申告・納付・処分"
                    :relatedProblems="['2025c12']"
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
                        '年末に「貸借対照表」と「損益計算書」を作成することができるような正規の複式簿記に基づく帳簿でなければならない。ただし、[[簡易帳簿によって記録することもできる]]。', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :relatedProblems="['2025b3', '2025c15']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険料（自動）振替貸付となった契約は、責任準備金の一部を保険料に充当するため、[[支払保険料に該当するので、生命保険料控除の対象となる]]。', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2025a4', '2025b16', '2025c16']"
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
                    questionTitle="相続分"
                    :relatedProblems="['2025c18']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2025b18', '2025c19']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '正しい',
                        '最も高い価額 → 最も低い価額', //p114
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2025a7', '2025c20']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '1年 → 2年', //p145
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
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :relatedProblems="['2025c22']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :relatedProblems="['2025a22', '2025b11', '2025c23']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '棚卸資産の評価方法には、[[原価法と低価法がある]]。', //p203
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
                    questionTitle="所得税の特徴"
                    :relatedProblems="['2025c30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'ケ', //31
                        'イ', //32
                        'キ', //33
                        'ウ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="相続税の申告と納付"
                    :relatedProblems="['2025c35']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'キ', //35
                        'カ', //36
                        'エ', //37
                        'ア', //38
                        'オ', //39
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
                            questionTitle: '所得税の計算',
                            relatedProblems: ['2025c41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '賦課課税',
                            relatedProblems: ['2025c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '遺言の効力',
                            relatedProblems: ['2025c43'],
                            content: '',
                        }, //43
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '相続税の納税',
                            relatedProblems: ['2025a44', '2025b44', '2025c44'],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-14 確認済み
                            questionTitle: '贈与税の課税制度',
                            relatedProblems: ['2025b45', '2025c45'],
                            content: '受贈者は贈与者ごとに[[異なる課税方法を選択することができる]]。', //p146
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
                            // rev: 2026-06-22 確認済み
                            questionTitle: '法人契約の個人年金の配当金の税務',
                            relatedProblems: ['2025b49', '2025c49'],
                            content: '個人年金保険は養老保険等と異なり、年金受取人・死亡給付金受取人とも法人であっても、[[配当金を資産計上した保険料積立金額から控除することは認められない]]。', //p238
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2025b" next-route="daigaku.zei2024a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
