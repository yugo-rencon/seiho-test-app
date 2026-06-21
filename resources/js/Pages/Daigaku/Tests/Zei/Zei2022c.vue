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
const subject = "2022年度 フォームC";
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
                    :relatedProblems="['2022a1', '2022b1', '2022c1']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
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
                    questionTitle="所得税の配偶者控除と配偶者特別控除・扶養控除"
                    :relatedProblems="['2022b3', '2022c3']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :relatedProblems="['2022a4', '2022b4', '2022c4']"
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
                    :relatedProblems="['2022a18', '2022c5']"
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
                    :relatedProblems="['2022a6', '2022c6']"
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
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2022a22', '2022b22', '2022c8']"
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
                    :relatedProblems="['2022a9', '2022b9', '2022c9']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
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
                    questionTitle="法人事業税"
                    :relatedProblems="['2022c11']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '正しい',
                        '事業を行う法人はすべて納税義務者であるが、国、都道府県、市町村等の公共法人、林業、鉱物の掘採事業等を行う法人には[[課税されない]]。', //p219
                        '事業年度の所得金額 → 事業年度の収入金額', //p219
                        '地方税 → 国税', //p221
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
                    questionTitle="個人住民税"
                    :relatedProblems="['2022b14', '2022c15']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '150万円 → 135万円', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続人"
                    :relatedProblems="['2022c16']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '[[他へ養子に行った子]]、嫁に行った娘も[[相続人となる]]（特別養子を除く）。', //p93
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の承認と放棄、相続分"
                    :relatedProblems="['2022c17']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '相続分には、「指定相続分」と「法定相続分」があり、「[[指定相続分]]」が優先される。', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2022c18']"
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
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2022a5', '2022c19']"
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
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :relatedProblems="['2022c22']"
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
                    :relatedProblems="['2022c23']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '50% → 95%', //p202
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :relatedProblems="['2022a24', '2022b24', '2022c24']"
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
                    questionTitle="確定申告の訂正"
                    :relatedProblems="['2022c30']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '更正',
                        '5年',
                        '国税不服審判所長',
                        '修正申告',
                        '35%', // 問30〜34
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
                    questionTitle="贈与税"
                    :relatedProblems="['2022a19', '2022b7', '2022c35']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '個人',
                        '経済的',
                        '110',
                        '2,000',
                        '提出期限', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'ク', //36
                        'オ', //37
                        'ケ', //38
                        'ア', //39
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
                            // rev: 2026-06-22 確認済み
                            questionTitle: '譲渡所得',
                            relatedProblems: ['2022b41', '2022c41'],
                            content: '資産の譲渡でも[[譲渡所得に該当しない所得がある]]。', //p20
                        }, //41
                        {
                            // rev: 2026-06-13 確認済み
                            questionTitle: '個人事業税の申告と納付',
                            relatedProblems: ['2022a41', '2022c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '退職後、再就職しなかった場合の確定申告',
                            relatedProblems: ['2022b43', '2022c43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '相続税額の計算',
                            relatedProblems: ['2022a45', '2022c44'],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2022b45', '2022c45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '使途秘匿金に対する追加課税',
                            relatedProblems: ['2022a47', '2022c46'],
                            content: '',
                        }, //46
                        {
                            questionTitle: '棚卸資産の評価',
                            relatedProblems: ['2022b47', '2022c47'],
                            content: '',
                        }, //47
                        {
                            questionTitle: '年払・半年払の保険料の経理',
                            relatedProblems: ['2022a48', '2022b48', '2022c48'],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '支払調書',
                            relatedProblems: ['2022a49', '2022b49', '2022c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2022b" next-route="daigaku.zei2021a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
