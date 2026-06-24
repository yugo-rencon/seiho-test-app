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
                    questionTitle="所得の種類・損益通算"
                    :relatedProblems="['2024a1', '2024b13']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '金銭で受領せずに商品等の現物を支給される、いわゆる現物給与も給与所得として[[課税対象となる]]。', //p10
                        '事業として行うものは[[事業所得となる]]。', //p14
                        '正しい',
                        '損失が損益通算できる所得は、不動産所得、事業所得、山林所得、譲渡所得であり、[[特定の各種所得の損失や特別な損失については、損益通算はできない]]こととされている。', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="['2024a2', '2024b42', '2024c25']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '所得控除 → 税額控除', //p27
                        '正しい',
                        '1年 → 6ヶ月', //p29
                        '初年度は、給与所得者であっても[[年末調整では控除できない]]。', //p31
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="青色申告制度"
                    :relatedProblems="['2024a3', '2024c15']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '青色申告者が備え付けるべき帳簿書類は、[[7年間（一定のものは5年間）]]保存しなければならない。', //p40
                        '簡易帳簿の方法を採用する青色申告者は、[[貸借対照表の添付は必要ない]]。', //p40
                        '2分の1までの金額 → 全額', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :relatedProblems="['2024a4', '2024b3']"
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
                    questionTitle="相続の承認と放棄"
                    :relatedProblems="['2024a5', '2024b5', '2024c5']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2024a6']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '[[被相続人が負担した保険料に応じた一部の額]]が相続財産とみなされる。', //p116
                        '被相続人の死亡により、相続人、その他の人の受け取る弔慰金等については、[[実質的に退職手当金等と認められるものを除き、原則として課税されない]]。', //p117
                        '正しい',
                        '責任準備金の額 → 解約返戻金相当額', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺贈と遺言"
                    :relatedProblems="['2024a7', '2024b7', '2024c7']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2024a8', '2024b8', '2024c8']"
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
                    questionTitle="こども保険に関する税務"
                    :relatedProblems="['2024a9', '2024b9', '2024c9']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '一時所得の金額は、[[満期保険金（または祝金）－（既払込保険料合計額－既受取祝金の合計額）－50万円（特別控除額）]]で計算する。本問の場合、100万円 －（200万円 －（30万円 ＋ 70万円））－50万円 ＝ －50万円となり、[[一時所得は発生しない]]。', //p165
                        '一時所得の金額 ＝ 死亡保険金（給付金）＋  積立配当金 －（既払込保険料合計額 － 既受取済祝金の合計額）[[－50万円（特別控除額）]]', //p165
                        '以後、祝金や満期保険金の支払いがあった場合には[[一時所得としての課税対象となる]]。', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2024a10']"
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
                    :relatedProblems="['2024a11']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人事業税"
                    :relatedProblems="['2024a12']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '事業税は経費にすることができる税金であり、法人税の計算においては[[損金の額に算入される]]。', //p219
                        '正しい',
                        '事業年度の所得金額 → 事業年度の収入金額', //p219
                        '地方税 → 国税', //p221
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="利子所得・配当所得"
                    :relatedProblems="['2024a13']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人住民税"
                    :relatedProblems="['2024a14', '2024b14', '2024c14']"
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
                    questionTitle="相続制度"
                    :relatedProblems="['2024a15', '2024b15']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職金・企業年金についての税金の知識"
                    :relatedProblems="['2024a16', '2024b16', '2024c16']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算"
                    :relatedProblems="['2024a17', '2024b19', '2024c6']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '正しい',
                        '法定相続人の数は、[[相続の放棄があっても、その放棄はなかったものとして計算する]]。', //p126
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の税額計算・申告・納付等"
                    :relatedProblems="['2024a18']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '2500万円 → 2000万円', //p148
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :relatedProblems="['2024a19', '2024b20']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '正しい',
                        '正しい',
                        '満期保険金受取人（妻）が実際に取得した額[[800万円（1,000万円－200万円）]]に対し、みなし贈与財産として贈与税が課税される。', //p181
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人年金保険に関する税務"
                    :relatedProblems="['2024a20', '2024b10']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2024a21', '2024b21', '2024c21']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="同族会社の特別規定"
                    :relatedProblems="['2024a22', '2024b22']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '同族会社とは、[[3人]]以下の株主等ならびにこれらと特殊な関係にある者（法人を含む）が、法人の発行済株式総数または出資の金額および議決権等について[[50％]]超を保有している会社である。', //p213
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
                    :relatedProblems="['2024a23', '2024b23', '2024c23']"
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
                    :relatedProblems="['2024a24']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '定期保険に加入した場合は、その保険料は期間の経過に応じて[[必要経費に算入される]]。', //p236
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="所得税の確定申告"
                    :relatedProblems="['2024a25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'キ', //26
                        'イ', //27
                        'ク', //28
                        'ウ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2024a30', '2024b30', '2024c30']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '遺族',
                        '日本年金機構',
                        '裁定',
                        '5.105',
                        '400万円', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'オ', //31
                        'ケ', //32
                        'エ', //33
                        'カ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人税等に課税される税金の計算"
                    :relatedProblems="['2024a35']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
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
                        // 問40〜49
                        {
                            questionTitle: '非課税所得',
                            relatedProblems: ['2024a40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '老人扶養控除額',
                            relatedProblems: ['2024a41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '社会保険料控除',
                            relatedProblems: ['2024a42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '相続放棄',
                            relatedProblems: ['2024a43', '2024c42'],
                            content: '',
                        }, //43
                        {
                            questionTitle: '相続税の非課税財産',
                            relatedProblems: ['2024a44', '2024b44', '2024c44'],
                            content: '',
                        }, //44
                        {
                            questionTitle: '相続税の物納',
                            relatedProblems: ['2024a45'],
                            content: '',
                        }, //45
                        {
                            // rev: 2026-06-15 確認済み
                            questionTitle: '暦年課税の贈与税額計算の仕組み',
                            relatedProblems: ['2024a46', '2024b46', '2024c46'],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-06-22 確認済み
                            questionTitle: '個人年金受取時の課税',
                            relatedProblems: ['2024a47'],
                            content: '個人年金保険契約で受け取る年金については源泉徴収が行われ、[[この段階で課税関係が完結することにはならないため、確定申告で納税額を調整する必要がある]]。', //p173
                        }, //47
                        {
                            questionTitle: '生命保険信託',
                            relatedProblems: ['2024a48', '2024c47'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '法人が受け取る保険金・給付金等',
                            relatedProblems: ['2024a49', '2024b49', '2024c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2025c" next-route="daigaku.zei2024b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
