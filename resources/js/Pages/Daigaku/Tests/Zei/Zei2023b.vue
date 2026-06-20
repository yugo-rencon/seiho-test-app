<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2023年度 フォームB";
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
                    :relatedProblems="['2023a1', '2023b1', '2023c1']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告"
                    :relatedProblems="['2023a2', '2023b2', '2023c2']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の配偶者控除と配偶者特別控除"
                    :relatedProblems="['2023a3', '2023b3']"
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
                    questionTitle="社会政策に配慮した所得控除に関する知識（生命保険料控除）"
                    :relatedProblems="['2023b4']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2023a30', '2023b5', '2023c16']"
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
                    questionTitle="相続税の申告と納付"
                    :relatedProblems="['2023b6', '2023c6']"
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
                    :relatedProblems="['2023a19', '2023b7']"
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
                    questionTitle="法人事業税"
                    :relatedProblems="['2023b11']"
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
                    questionTitle="相続人"
                    :relatedProblems="['2023b16']"
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
                    questionTitle="相続分"
                    :relatedProblems="['2023b17']"
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
                    questionTitle="相続税の課税価格の計算"
                    :relatedProblems="['2023a18', '2023b18']"
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
                    questionTitle="暦年課税の贈与税額のしくみ"
                    :relatedProblems="['2023b19']"
                    :contents="[
                        // rev: 2026-06-15 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '配偶者控除を受けた部分は、相続開始前一定期間以内の贈与加算の[[対象外]]とされる。なお、この適用によって贈与税が課税されないときでも、[[適用を受ける場合は贈与税の申告が必要である]]。', //p148
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2023a20', '2023b20', '2023c20']"
                    :contents="[
                        '', //p
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
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2023b22', '2023c8']"
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
                    questionTitle="法人税の申告と納付"
                    :relatedProblems="['2023b23', '2023c22']"
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
                    questionTitle="確定申告の訂正"
                    :relatedProblems="['2023b30']"
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
                    questionTitle="給与所得者の税金"
                    :relatedProblems="['2023b35']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'ア', //35
                        'カ', //36
                        'イ', //37
                        'コ', //38
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
                            questionTitle: '譲渡所得',
                            relatedProblems: ['2023a41', '2023b41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '子の養育費',
                            relatedProblems: ['2023b42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '退職後、再就職しなかった場合の確定申告',
                            relatedProblems: ['2023b43', '2023c43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '相続税額の計算',
                            relatedProblems: ['2023b44'],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '相続税の非課税財産',
                            relatedProblems: ['2023b45'],
                            content: '',
                        }, //45
                        {
                            questionTitle: '生命保険信託',
                            relatedProblems: ['2023b46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '棚卸資産の評価',
                            relatedProblems: ['2023a47', '2023b47'],
                            content: '',
                        }, //47
                        {
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

            <TestNavigationButtons previous-route="daigaku.zei2023a" next-route="daigaku.zei2023c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
