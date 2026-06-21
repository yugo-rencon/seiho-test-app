<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2022年度 フォームB";
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
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2022a16', '2022b5']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '公的年金の中には、厚生年金制度・国民年金制度における遺族年金等のように[[非課税所得とみなされ、課税されないものがある]]。', //p86
                        '厚生労働省 → 日本年金機構', //p86
                        '正しい',
                        '所得税が[[非課税となるわけではない]]。', //p87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の承認と放棄"
                    :relatedProblems="['2022b6']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2022a19', '2022b7', '2022c35']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '法律上の根拠がなくても経済的価値が認められているもの、たとえば営業権のようなものも[[含まれる]]。', //p143
                        '個人は、法人からの贈与財産に対して、[[贈与税ではなく、給与または一時所得として所得税・住民税が課税される]]。', //p145
                        '正しい',
                        '1年間に贈与を受けた財産の課税価格が110万円以下であれば、贈与税は課税されず、[[贈与税の申告書を提出する必要もない]]。', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の納付および特例措置"
                    :relatedProblems="['2022a8', '2022b8']"
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
                    questionTitle="契約内容等の変更に関する税務"
                    :relatedProblems="['2022b11']"
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
                    questionTitle="個人住民税"
                    :relatedProblems="['2022b14', '2022c15']"
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
                    questionTitle="確定申告の訂正と税務調査・処分"
                    :relatedProblems="['2022b16']"
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
                    questionTitle="遺贈と遺言"
                    :relatedProblems="['2022b17']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :relatedProblems="['2022b18']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '12ヶ月 → 10ヶ月', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし贈与財産"
                    :relatedProblems="['2022a7', '2022b19', '2022c7']"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
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
                    questionTitle="法人税の申告と納付"
                    :relatedProblems="['2022b23']"
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
                    questionTitle="相続財産"
                    :relatedProblems="['2022b30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'キ', //30
                        'イ', //31
                        'ウ', //32
                        'コ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人等に課税される税金の計算"
                    :relatedProblems="['2022b35']"
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
                            relatedProblems: ['2022a40', '2022b40', '2022c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '譲渡所得',
                            relatedProblems: ['2022b41', '2022c41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '賦課課税',
                            relatedProblems: ['2022b42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '退職後、再就職しなかった場合の確定申告',
                            relatedProblems: ['2022b43', '2022c43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '相続税の物納',
                            relatedProblems: ['2022b44'],
                            content: '',
                        }, //44
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2022b45', '2022c45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '生命保険信託',
                            relatedProblems: ['2022b46'],
                            content: '正しい',
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

            <TestNavigationButtons previous-route="daigaku.zei2022a" next-route="daigaku.zei2022c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
