<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2022年度 フォームB";
const isDraft = true;
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
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-08 確認済み
                        '正しい',
                        '公的扶助制度 → 社会扶助制度', //p4
                        '社会扶助制度 → 公的扶助制度', //p4
                        '保健医療制度 → 社会福祉制度', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の被保険者"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の標準報酬（月）額と保険料"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の在職老齢年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '厚生年金保険に加入しない嘱託やパートタイマーのような働き方をする場合は[[在職老齢年金の制限による年金額調整の対象とはならない]]。', //p40
                        'また、2021年（令和３年）度までは在職老齢年金は「[[60歳台前半]]」と「[[65歳以降]]」に区分されていたが、2022年（令和４年）４月から支給停止の基準が統一されている。', //p40
                        '正しい',
                        '「基本月額 ＋ 総報酬月額相当額 ≦ 65万円」の場合には、年金額は[[支給停止となる]]。 ', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の遺族基礎年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '子のない夫婦の夫が死亡したときでも、妻が妊娠中の場合は、[[その子が誕生した月の翌月]]から妻に遺族基礎年金が支給される。', //p54
                        '遺族基礎年金の受給額は、[[国民年金に加入していた期間にかかわらず定額である]]。', //p56
                        '２年に１回 → 毎年度', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        'ケガや[[病気]]で所定の障害状態に該当した場合は、公的年金制度から障害給付を受けることができる。', //p45
                        '国民年金 → 厚生年金', //p45
                        '障害等級１級･２級の場合は、障害基礎年金が支給され、[[厚生年金保険の被保険者であれば、障害厚生年金が二階部分として上乗せされる]]。', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保険制度の概要"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '国民健康保険制度では、世帯構成員のそれぞれが被保険者となり、[[被扶養者という区別はない]]。', //p85
                        '負担割合は[[制度ごとまたは保険者ごとに異なっている]]。', //p86
                        '被用者保険諸制度の保険料は、各被保険者の標準報酬月額および[[標準賞与額]]に保険料率を乗じて算出される', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険のサービスの利用・ケアマネジメント"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '３割から５割 → １割から３割', //p103
                        '正しい',
                        '実際にサービスを利用した結果を確認するまでを[[含む]]。', //p106
                        'ケアプラン作成におけるケアマネジャーに対する報酬は介護保険から[[全額]]支払われ、利用者の負担はない。', //p106
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="労災保険（労働者災害補償保険）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '労災保険は、[[被保険者単位で適用されず事業所ぐるみの適用]]となるため、労働者個々人について被保険者資格の取得・喪失などは[[生じない]]。', //p120
                        '通勤災害に関する保険給付として、療養給付、休業給付、障害給付、介護給付、[[遺族給付]]、[[葬祭給付]]および傷病年金がある。', //p120
                        '労災保険料については[[その全額を事業主が負担する]]が、費用負担の一部である国庫補助の金額は極めて少なく、保険料がその大部分を占めている。', //p10
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '雇用保険の保険者は国（政府）であり、[[労働者を雇用するすべての事業所が適用事業所となる]]。', //p122
                        '原則としてその事業所に雇用されるすべての労働者（[[一定のパートタイマーなどの短時間労働者や派遣労働者も含む]]）が被保険者となる。', //p122
                        '労働基準監督署 → 公共職業安定所', //p122
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険・厚生年金保険の被保険者資格喪失日"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '適用事業所の業務に使用されなくなった日の[[翌日]]', //p138
                        '死亡した日の[[翌日]]', //p138
                        '臨時雇用に切り替わるなど適用除外になった日の[[翌日]]', //p138
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険の任意継続被保険者と一般被保険者との違い・特徴（協会けんぽの場合）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '社会保険制度には、年金・医療・介護・[[労災]]・[[雇用]]の各制度がある。', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）の付加保険料"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '400円 → 200円', //p18
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="育児休業期間中の厚生年金保険料"
                    :relatedProblems="[]"
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
                    questionTitle="障害給付の種類と年金（給付）額"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等の課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '公的年金等の収入金額が130万円未満の場合、公的年金等控除額は、[[65歳未満の者は60万円、65歳以上の者は110万円]]となる。', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="高額療養費"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '直近12カ月間に[[３カ月（３回）以上]]この給付の対象となった場合、[[４カ月目（４回目）]]から「多数回該当」とされる。', //p94
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="後期高齢者医療制度（長寿医療制度）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '雇用保険と同様 → 介護保険と同様', //p93
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の要介護（要支援）の認定"
                    :relatedProblems="[]"
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
                    questionTitle="年金手帳と基礎年金番号"
                    :relatedProblems="[]"
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
                    questionTitle="介護保険の適用除外者"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '６カ月以下 → ３カ月以下', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険や在職老齢年金の併給調整等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '正しい',
                        '65歳以上で在職老齢年金を受給している人でも、70歳未満で厚生年金保険の被保険者であれば、[[保険料を負担する必要がある]]。', //p146（独自）
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="離婚時の厚生年金保険の分割制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '２：１に分割 → ２分の１（50％）に分割', //p153
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="厚生年金保険の適用事業所および加入者（被保険者）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'すべて',
                        '5人',
                        '2分の1',
                        'できる',
                        '70歳',
                    ]"
                    :labels="['イ', 'ケ', 'ク', 'カ', 'コ']"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="健康保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '通勤災害',
                        '健康保険組合',
                        '中小企業',
                        '日本年金機構（年金事務所）',
                        '3割',
                    ]"
                    :labels="['コ', 'ア', 'イ', 'エ', 'ケ']"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="公的年金の支給日と源泉徴収"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '翌月',
                        '属する月',
                        '15日',
                        '雑所得',
                        '18万円',
                    ]"
                    :labels="['コ', 'キ', 'ア', 'ケ', 'ウ']"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '労働保険料',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '遺族厚生年金の年金額',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '混合診療',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '遺族厚生年金の受給',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '国民健康保険料（税）の負担',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の被保険者種別変更',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '労災給付と公的年金との調整',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '健康保険組合の特例退職被保険者',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: '受給年金の確認（ねんきん定期便）',
                            relatedProblems: [],
                            content: '55歳 → 50歳', //p148
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'マイナンバー制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2022a" next-route="daigaku.syakai2022c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
