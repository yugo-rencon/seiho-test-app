<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2026年度 フォームC";
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
                    questionTitle="雑所得"
                    :contents="[
                        // rev: 2026-11-21 確認済み
                        '生命保険契約等に基づく解約返戻金は含まれない。', //p14
                        '正しい',
                        '受給者の扶養親族の有無によっては変わらない。', //p14
                        '原稿料、印税等については、1回に支払われる金額のうち[[100万円以下の部分は10％、100万円を超える部分は20％]]が源泉徴収される。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告"
                    :contents="[
                        // rev: 2026-11-21 確認済み
                        '1月16日から2月15日 → 2月16日から3月15日', //p37
                        '10万円 → 20万円', //p38
                        '正しい',
                        '所得税の納付期限までにその全額を納付することができない場合には、確定申告で納付することになった税額の[[2分の1以上]]を3月15日までに納付すれば、残額については[[5月31日]]までの延納が認められる。', //p39
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人事業税"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '市区町村 → 都道府県', //p47
                        'すべての事業で同一の税率 → 事業の種類ごとに定められている税率', //p47
                        '個人事業税の申告がある場合であっても、前年分の所得税についての確定申告書を提出した場合は、[[個人事業税の申告がされたものとみなされる]]。', //p48
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '少額短期保険業者の取り扱う各保険商品や損害保険会社で取り扱う年金払積立傷害保険等の保険料は[[含まれない]]。', //p71
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
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    :contents="[
                        // rev: 2026-11-21 確認済み
                        '正しい',
                        '相続税の申告書の提出先は、被相続人の死亡のときの住所が日本国内にある場合、[[被相続人の死亡のときにおける住所地]]の所轄税務署長宛と定められている。', //p135
                        '1年 → 10ヶ月', //p135
                        '相続税の申告期限までに「延納申請書」を提出し、税務署長の許可を得た場合に、[[延納することができる]]。', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし贈与財産"
                    :contents="[
                        // rev: 2026-11-22 確認済み
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
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '４月１日 → １月１日', //p155
                        '相続時精算課税制度の選択は、受贈者（贈与される人）がそれぞれ、贈与者（贈与する人）ごとに、行うことができる。', //p155
                        'いったん相続時精算課税制度を選択した場合には、[[暦年課税の課税方式に戻ることはできない]]。', //p155
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険に関する税務"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '雑所得 → 一時所得', //p165
                        '正しい',
                        '保険料払込免除後の保険料分は、[[一時所得の必要経費として控除できない]]。', //p165
                        '一時所得 → 雑所得', //p166
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の申告・納付・処分"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="福利厚生プラン"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="退職所得金額の計算"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '一時恩給も含まれる。', //p13
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="青色申告制度"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '180万円 → 135万円', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続人"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '他へ養子に行った子、嫁に行った娘も相続人となる（特別養子を除く）。', //p93
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の承認と放棄、相続分"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '預貯金は、元金と中途解約利率による経過利子（源泉税相当額控除後）の合計額で評価する。', //p115
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし相続財産"
                    :contents="[
                        // rev: 2026-11-21 確認済み
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
                    questionTitle="個人年金保険に関する税務"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '贈与税の対象 → 相続税の対象', //p168
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :contents="[
                        // rev: 2026-11-23 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '個人が生命保険契約の保険契約者および保険金受取人を変更しても、[[変更時点では課税されず]]、「解約」「満期」「死亡」により契約が終了し、保険金等が支払われる時点で、課税関係が発生する。', //p195
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="法人税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="所得税の特徴"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '10',
                        '二重課税',
                        '必要がなく',
                        '15',
                        '保険給付', // 問25〜29
                    ]"
                    :labels="[
                        'ク', //25
                        'エ', //26
                        'ウ', //27
                        'ケ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="給与所得者の確定申告"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '０円',
                        '過納税額',
                        '課税精算',
                        '少ない',
                        '配当控除', // 問30〜34
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
                    questionTitle="贈与税"
                    :contents="[
                        // rev: 2026-11-16 確認済み
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
                            // rev: 2026-11-16 確認済み
                            questionTitle: '各種所得と損益通算',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '譲渡所得',
                            content: '', //p
                        }, //41
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '賦課課税',
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '退職後、再就職しなかった場合の確定申告',
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-11-23 確認済み
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            content: '22歳以上45歳未満 → 18歳以上50歳未満', //p154
                        }, //44
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '保証期間付終身年金の課税',
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-11-23 確認済み
                            questionTitle: '使途秘匿金に対する追加課税',
                            content: '60% → 40%', //p223
                        }, //46
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '契約内容の変更',
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '年払・半年払の保険料の経理',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '支払調書',
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2026b" next-route="daigaku.zei2025a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
