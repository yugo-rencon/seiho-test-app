<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2021年度 フォームA";
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
                    questionTitle="社会保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '公的保険は無選択で加入できる。', //p5
                        '正しい',
                        '公務員が対象となるのは、[[国家公務員共済組合制度や地方公務員等共済組合制度]]である。', //p9
                        '実際に介護サービスや支援にあたるのは、[[介護サービスを提供できる事業者]]となっている。', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金保険料納付の免除制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '法定免除 → 申請免除', //p17
                        '法定免除は、免除事由に該当した期間全期間が免除期間となるため、[[年度ごとに免除の申請をするものではない]]。', //p17（独自）
                        '保険料納付の特例（猶予）制度 → 追納', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の老齢給付（受給資格期間）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '[[第２号被保険者]]については、20歳未満および60歳以降の期間は合算対象期間とされる。', //p24
                        '全額免除期間中は３分の２ → 全額免除期間中は２分の１', //p24
                        '合算対象期間（カラ期間）とは、[[年金額には反映されないが]]、老齢基礎年金を受けるための受給資格期間には合算される期間をいう。', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
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
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="年金の課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '被保険者の業務災害・通勤災害等の事由による疾病等については[[保険給付は行われず]]、これについては労働者災害補償保険法または労働基準法に基づく療養補償等の対応がなされている。', //p88
                        '正しい',
                        '組合管掌健康保険は、[[一定の条件を満たす企業等の健康保険組合が運営を行っている]]。', //p88
                        '出産育児一時金や出産手当金など出産にかかる給付もある。', //p90
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="後期高齢者医療制度（長寿医療制度）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '制度の適用を受けると、通院や入院の際の自己負担額が[[原則１割（一定以上の所得のある者は２割）]]となる。', //p93
                        '医療費の患者負担分を除いた保険給付総額について、１割を被保険者の保険料として課し、[[４割]]を現役世代の各医療制度、[[５割]]を公費（国・都道府県・市区町村）で負担している。', //p93
                        '療養病床に入院する65歳以上の患者に対する生活療養（食事、居住に関する療養）の給付は、[[介護保険と同様の食費・居住費の一部負担がある]]。', //p93
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の費用負担"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '第１号被保険者の保険料は、[[居住する市区町村と本人および世帯の所得状況により異なる]]。', //p111
                        '正しい',
                        '一律３割相当額 → １割から３割相当額', //p112
                        '同じ月に利用したサービスの、[[１割から３割の利用者負担の合計額]]（同じ世帯に複数の利用者がいる場合には、世帯合計額）が高額になると、一定額を超えた部分が高額介護サービス費として[[申請により後日支給される]]。', //p113
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険の給付と公的年金との調整等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '原則８ヵ月 → 原則１年', //p127
                        '老齢厚生年金の半額が支給停止 → 老齢厚生年金は全額支給停止', //p127
                        '正しい',
                        '賃金の60％以上 → 賃金の75％以上', //p128
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
                    questionTitle="受給する老齢年金の選択"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-08 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保健医療制度 → 社会福祉制度', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の適用事業所"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '個人事業主自身は厚生年金保険には[[加入できない]]。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="標準報酬（月）額と厚生年金保険料"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '昇給等により、給与の３カ月平均額に、[[２等級以上]]の変動が生じた場合は随時改定が行われる。', //p21
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の老齢給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '１ヵ月以上 → １年以上', //p30
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="年金受給者の確定申告"
                    :relatedProblems="[]"
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
                    questionTitle="公的医療保険制度の概要"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '厚生労働省 → 医療機関等', //p82
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保険制度の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険者と医療機関等の間の医療費の支払いを円滑に行うためには、専門の審査支払機関が必要である。このため、[[健康保険等の被用者保険を担当する医療情報基盤・診療報酬審査支払機構]]と、[[国民健康保険を担当する国民健康保険団体連合会]]が設置されている。', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の概要"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '10段階 → ７段階', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険で受けられるサービスの内容"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '地域密着型サービスは施設サービスではない。', //p107
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
                    questionTitle="公的年金の受給手続き"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '64歳になったとき → 65歳に到達する３カ月前', //p149
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="厚生年金保険の遺族の範囲"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '祖父母',
                        'することはできない',
                        '18',
                        '1級・2級',
                        '55',
                    ]"
                    :labels="['コ', 'ク', 'ア', 'カ', 'ウ']"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="労災保険（労働者災害補償保険）制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '全額を事業主が',
                        '労働基準監督署',
                        '国家・地方公務員',
                        '業務災害',
                        '減額率',
                    ]"
                    :labels="['オ', 'イ', 'ウ', 'カ', 'コ']"
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
                    :labels="['カ', 'ク', 'ア', 'ケ', 'ウ']"
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
                            questionTitle: '国民年金の任意加入',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '遺族厚生年金の年金額',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '混合診療',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '高額療養費',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '要介護の身体状況',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '労災保険の休業補償給付（休業給付）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の被保険者資格種別変更',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '受給年金の確認（ねんきん定期便）',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '年金請求書の受付',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2022c" next-route="daigaku.syakai2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
