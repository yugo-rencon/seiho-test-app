<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2021年度 フォームA";
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
                    questionTitle="雑所得"
                    :relatedProblems="['2021a2']"
                    :contents="[
                        // rev: 2026-06-11 確認済み
                        '講演料や放送謝金（[[事業と認められるものを除く]]）', //p14
                        '正しい',
                        '中小企業退職金共済法に基づき分割払の方法で支給される分割退職金は、公的年金等の収入金額に[[該当する]]。', //p14
                        '受給者の年齢によっても計算式が[[異なる]]。', //p14
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :relatedProblems="['2021a3']"
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
                    :relatedProblems="['2021a4', '2021b16', '2021c16']"
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
                    questionTitle="相続税の各人の課税価格の計算"
                    :relatedProblems="['2021a6']"
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
                    :relatedProblems="['2021a7', '2021c20']"
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
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2021a8', '2021b8', '2021c8']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
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
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2021a10', '2021b22', '2021c10']"
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
                    :relatedProblems="['2021a11']"
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
                    :relatedProblems="['2021a12']"
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
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="['2021a13', '2021b13', '2021c13']"
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
                    questionTitle="青色申告制度"
                    :relatedProblems="['2021a14', '2021c14']"
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
                    :relatedProblems="['2021a15']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告の訂正と税務調査・処分"
                    :relatedProblems="['2021a16']"
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
                    questionTitle="相続の承認と放棄、相続分"
                    :relatedProblems="['2021a18']"
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
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2021a19', '2021c6']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :relatedProblems="['2021a20', '2021b19']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
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
                    questionTitle="法人税"
                    :relatedProblems="['2021a22', '2021b11', '2021c23']"
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
                    questionTitle="法人税の申告と納付"
                    :relatedProblems="['2021a23']"
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
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
                    :relatedProblems="['2021a30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
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
                    :relatedProblems="['2021a35', '2021b35']"
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
                        {
                            // rev: 2026-06-20 確認済み
                            questionTitle: '各種所得と損益通算',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '配当所得に対する課税の特例',
                            relatedProblems: ['2021a41'],
                            content: '',
                        }, //41
                        {
                            questionTitle: '特別の損失または支出に対する配慮に基づく所得控除に関する知識',
                            relatedProblems: ['2021a42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '特別の寄与',
                            relatedProblems: ['2021a43'],
                            content: '',
                        }, //43
                        {
                            questionTitle: '相続税の物納',
                            relatedProblems: ['2021a44', '2021b44', '2021c44'],
                            content: '',
                        }, //44
                        {
                            // rev: 2026-06-14 確認済み
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            relatedProblems: ['2021a45'],
                            content: '結婚・子育て資金にあてるために、父母や祖父母等の直系尊属が金銭を拠出し、信託銀行等の所定の金融機関等に信託等をした場合に、[[信託受益権の価額または拠出された金銭等の額のうち別途定める金額を非課税とする]]。',//p154
                        }, //45
                        {
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2021a46', '2021c46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: 'リビング・ニーズ特約',
                            relatedProblems: ['2021a47', '2021b47', '2021c47'],
                            content: '',
                        }, //47
                        {
                            questionTitle: '法人税の受取配当等の益金不算入',
                            relatedProblems: ['2021a48', '2021c48'],
                            content: '',
                        }, //48
                        {
                            questionTitle: '法人向け保険商品の課税',
                            relatedProblems: ['2021a49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2022c" next-route="daigaku.zei2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
