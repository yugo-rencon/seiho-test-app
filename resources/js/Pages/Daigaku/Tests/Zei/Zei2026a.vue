<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2026年度 フォームA";
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
                    questionTitle="所得税の配偶者控除と配偶者特別控除・扶養控除"
                    :contents="[
                        // rev: 2026-11-21 確認済み
                        '納税者の合計所得金額に応じて[[控除額が異なる]]。', //p24
                        '74万円 → 62万円', //p24
                        '1,100万円 → 1,000万円', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会政策に配慮した所得控除に関する知識（生命保険料控除）"
                    :contents="[
                        // rev: 2026-11-21 確認済み
                        '親族は、[[必ずしも生計を一にしていなくてもよい]]。', //p71
                        '保険料（自動）振替貸付となった契約は、責任準備金の一部を保険料に充当するため、払保険料に該当するので、[[生命保険料控除の対象となる]]。', //p76
                        '全期前納した保険料 → 一時払保険料', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし相続財産"
                    :contents="[
                        // rev: 2026-11-21 確認済み
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
                    questionTitle="贈与税の納付および特例措置"
                    :contents="[
                        // rev: 2026-11-22 確認済み
                        '正しい',
                        '自己の居住のための一定の家屋の新築もしくは取得、または[[一定の増改築等の対価にあてて、その家屋を同日（贈与を受けた年の翌年3月15日）までに自己の居住とする、またはそれが確実であると見込まれる場合]]に適用の対象となる。', //p150
                        '経済産業大臣の認定を受け、一定の条件を満たした場合に、[[猶予税額の納税が免除となる]]。', //p151
                        '受贈者1人につき[[1,000万円]]限度（結婚に際して支出する費用については[[300万円限度]]）。', //p154
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
                    questionTitle="法人事業税"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="住民税の主な所得控除"
                    :contents="[
                        // rev: 2026-11-23 確認済み
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
                    questionTitle="相続分"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
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
                    questionTitle="個人年金保険に関する税務"
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
                    questionTitle="生命保険を活用した相続対策"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の損金についての特別規定"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :contents="[
                        '正しい',
                        '', //p
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
                    questionTitle="相続制度"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '失踪宣告',
                        '血族',
                        '代襲相続',
                        '相続欠格',
                        '家庭裁判所', // 問35〜39
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
                            // rev: 2026-11-16 確認済み
                            questionTitle: '各種所得と損益通算',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '賦課課税',
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '還付請求',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '医療費控除',
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '相続放棄',
                            content: '', //p
                        }, //44
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '相続税額の計算',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '使途秘匿金に対する追加課税',
                            content: '', //p
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

            <TestNavigationButtons next-route="daigaku.zei2026b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
