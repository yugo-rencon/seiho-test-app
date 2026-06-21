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
const subject = "2021年度 フォームB";
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
                    :relatedProblems="['2021a1', '2021b1', '2021c1']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '金銭で受領せずに商品等の現物を支給される、いわゆる現物給与も給与所得として[[課税対象となる]]。', //p10
                        '正しい',
                        '[[総合課税の対象となる譲渡所得と分離課税の対象となる譲渡所得があり]]、また、資産の譲渡でも譲渡所得に該当しない所得がある。', //p20
                        '配当所得 → 一時所得', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告"
                    :relatedProblems="['2021b2']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '1月16日から3月15日 → 2月16日から3月15日', //p37
                        '10万円 → 20万円', //p38
                        '正しい',
                        '所得税の納付期限は、申告期限と同じ3月15日であるが、期限までにその全額を納付することができない場合には、確定申告で納付することになった税額の2分の1以上を3月15日までに納付すれば、残額については[[5月31日]]までの延納が認められる。', //p39
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :relatedProblems="['2021b3', '2021c15']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '少額短期保険業者の取り扱う各保険商品や損害保険会社で取り扱う年金払積立傷害保険等の保険料は[[該当しない]]。', //p71
                        '損害保険会社が取り扱う第三分野の保険契約（傷害保険を除く医療費用保険等）については、[[介護医療保険料控除の対象に変更された]]。', //p72
                        '保険料（自動）振替貸付となった契約は、責任準備金の一部を保険料に充当するため、[[支払保険料に該当するので、生命保険料控除の対象となる]]。', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="法定相続分"
                    :relatedProblems="[['2021b4']]"
                    :labels="['ア']"
                    :contents="[
                        {
                            // rev: 2026-06-21 確認済み
                            answer: '妻：1,500万円、子A：500万円、子B：500万円、孫D：250万円、孫E：250万円',
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
                    questionTitle="遺贈・遺言と遺留分"
                    :relatedProblems="['2021a5', '2021b5', '2021c5']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '普通の方式としては、自筆証書遺言、[[公正証書遺言]]、秘密証書遺言が認められている。', //p104
                        '遺産の分割 → 遺言の執行', //p106
                        '遺留分の放棄を行うためには被相続人の[[生存中]]に家庭裁判所の許可が必要である。', //p107
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算"
                    :relatedProblems="['2021b6']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '相続税の課税価格は、財産を取得した者の住所が日本国内にあるかないかにより[[異なる]]。', //p121
                        '借入金や未払金等も[[認められている]]。', //p122
                        '香典返礼費用、初七日、その他法事等のための費用は[[葬式費用に含めない]]。', //p123
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし贈与財産"
                    :relatedProblems="['2021b7']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2021a8', '2021b8', '2021c8']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '相続時精算課税制度の適用対象者は、60歳以上の贈与者の推定相続人である子または孫で、[[子の代襲相続人も含む]]。', //p156
                        '相続時精算課税制度の適用対象となる贈与財産の種類、金額、[[贈与回数に制限はない]]。', //p155
                        '1月25日から3月15日 → 2月1日から3月15日', //p155
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2021a9', '2021b9', '2021c9']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '入院給付金や高度障害保険金等は被保険者本人が受け取るが、[[被保険者の配偶者もしくは直系血族または生計を一にするその他の親族が受け取った場合も、被保険者と同様に非課税となる]]。', //p176-177
                        '正しい',
                        '年をまたぐ入院の場合、たとえば12月末に本年分の入院費を支払い、翌年退院時に残額を支払ったときには、[[入院給付金も本年対応分と翌年対応分とに分けて差し引く]]。', //p177
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容等の変更に関する税務"
                    :relatedProblems="['2021b10']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :relatedProblems="['2021a22', '2021b11', '2021c23']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '税金を納める者と負担する者とが[[同一]]であり、直接税である。', //p199
                        '法人税の税率は、所得税と異なり[[比例税率]]となっており、[[所得金額に関係せず一定の割合]]である。', //p199
                        '正しい',
                        '法人税には所得税のような[[所得控除はない]]。', //p199
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人事業税"
                    :relatedProblems="['2021b12']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '正しい',
                        '事業を行う法人はすべて納税義務者であるが、国、都道府県、市町村等の公共法人、林業、鉱物の掘採事業等を行う法人には[[課税されない]]。', //p219
                        '事業年度の所得金額 → 事業年度の収入金額', //p219
                        '地方税 → 国税', //p221
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="['2021a13', '2021b13', '2021c13']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '正しい',
                        '正しい',
                        '4000万円 → 2000万円', //p28
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人住民税"
                    :relatedProblems="['2021b14']"
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
                    questionTitle="退職金に対する税金の知識"
                    :relatedProblems="['2021b15']"
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
                    :relatedProblems="['2021a4', '2021b16', '2021c16']"
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
                    questionTitle="相続人"
                    :relatedProblems="['2021a17', '2021b17', '2021c17']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '[[他へ養子に行った子]]、嫁に行った娘も[[相続人となる]]（特別養子を除く）。', //p93
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2021b18', '2021c19']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :relatedProblems="['2021a20', '2021b19']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '12ヶ月 → 10ヶ月', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の税額計算・申告・納付"
                    :relatedProblems="['2021b20']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '3年 → 5年', //p150
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険に関する税務"
                    :relatedProblems="['2021a21', '2021b21', '2021c21']"
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
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2021a10', '2021b22', '2021c10']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '正しい',
                        '孫（代襲相続人である場合を除く）に遺贈することで、子から孫へ相続した場合の相続税の課税を１回減らす効果があるが、[[相続税は２割加算される]]。', //p189
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税等の申告と納付"
                    :relatedProblems="['2021b23']"
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
                    questionTitle="法人向け保険商品の課税関係"
                    :relatedProblems="['2021a24', '2021b24', '2021c24']"
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
                    :relatedProblems="['2021a25', '2021b25', '2021c25']"
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
                    questionTitle="確定申告の訂正"
                    :relatedProblems="['2021b30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'エ', //31
                        'カ', //32
                        'ク', //33
                        'イ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人等に課税される税金の計算"
                    :relatedProblems="['2021a35', '2021b35']"
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
                            // rev: 2026-06-20 確認済み
                            questionTitle: '各種所得と損益通算',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '損失の繰越控除',
                            relatedProblems: ['2021b41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-13 確認済み
                            questionTitle: '個人事業税',
                            relatedProblems: ['2021b42'],
                            content: '個人の所得税の計算においては[[必要経費に算入することができる]]。', //p47
                        }, //42
                        {
                            questionTitle: '遺贈',
                            relatedProblems: ['2021b43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '相続税の物納',
                            relatedProblems: ['2021a44', '2021b44', '2021c44'],
                            content: '',
                        }, //44
                        {
                            // rev: 2026-06-15 確認済み
                            questionTitle: '贈与税の課税制度',
                            relatedProblems: ['2021b45', '2021c45'],
                            content: '贈与税の課税制度には、原則的な課税方式である「[[暦年課税]]」と、一定の要件に当てはまる場合に選択することができる「[[相続時精算課税]]」の２つがあり、受贈者は贈与者ごとに異なる課税方法を選択することができる。', //p146
                        }, //45
                        {
                            questionTitle: '個人年金受取時の課税',
                            relatedProblems: ['2021b46'],
                            content: '',
                        }, //46
                        {
                            questionTitle: 'リビング・ニーズ特約',
                            relatedProblems: ['2021a47', '2021b47', '2021c47'],
                            content: '',
                        }, //47
                        {
                            questionTitle: '使途秘匿金に対する追加課税',
                            relatedProblems: ['2021b48'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '法人契約の個人年金の配当金の税務',
                            relatedProblems: ['2021b49', '2021c49'],
                            content: '',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2021a" next-route="daigaku.zei2021c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
