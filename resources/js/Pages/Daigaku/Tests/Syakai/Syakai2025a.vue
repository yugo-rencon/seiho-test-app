<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2025年度 フォームA";
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
                        // rev: 2026-10-07 確認済み
                        '正しい',
                        '雇用保険制度 → 生活保護制度', //p4
                        '資力調査あり → 資力調査なし', //p4
                        '保健医療制度 → 社会福祉制度', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金保険料納付の免除制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-08 確認済み
                        '正しい',
                        '法定免除はその事由に該当した期間[[全期間が免除期間となる]]。', //p17
                        '[[全額免除または納付猶予の承認を受けた者（一部免除は含まない）]]は、一定の場合、翌年度以降も継続して申請があったものとして審査（継続審査）が行われる。', //p17
                        '保険料納付の特例（猶予）制度 → 追納', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="標準報酬（月）額と厚生年金保険料"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '毎年１・２・３月 → 毎年４・５・６月', //p21
                        '昇給等により、給与の３カ月平均額に、[[２等級以上]]の変動が生じた場合は随時改定が行われる。', //p21
                        '正しい',
                        '第１号被保険者 → 第２号被保険者', //p21
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
                    questionTitle="公的年金等の課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '過去の勤務に基づき使用者であった者から支給される年金は[[課税される]]。', //p68
                        '正しい',
                        '年金額に応じて[[控除額も変動する]]（年金額が1000万円以上の場合、控除額は195.5万円）。', //p68
                        '公的年金等控除や基礎控除により[[所得税等が課税されない場合は、「扶養親族等申告書」の提出は不要]]で、源泉徴収もされない。', //p69
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
                    questionTitle="介護保険で受けられるサービスの内容"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '介護保険制度により受けられる保険給付は、要介護者に対する[[介護給付]]と、要支援者に対する[[介護予防給付]]がある。', //p106
                        '介護予防訪問介護・介護予防訪問看護 → 介護予防訪問介護・介護予防[[通所介護]]', //p106
                        '正しい',
                        '①介護の環境を整えるためのサービスは[[在宅サービス]]、②施設に入所して受けるサービスは[[施設サービス]]という。', //p107
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="労災保険（労働者災害補償保険）制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '健康保険組合 → 労働基準監督署', //p119
                        '短時間労働者等 → 国家・地方公務員', //p119
                        '正しい',
                        '増額率 → 減額率', //p121
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
                    questionTitle="公的年金の受給手続き"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '64歳に到達する３ヵ月前 → 65歳に到達する３カ月前', //p149
                        '厚生労働省 → 日本年金機構', //記載なし（2023a23を参考）
                        '正しい',
                        '年金請求書の提出先は近隣の年金事務所または[[街角の年金相談センター]]となる。', //記載なし（2023a23を参考）
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
                        '実際に介護サービスや支援にあたるのは、[[介護サービスを提供できる事業者]]となっている。', //p9
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
                    questionTitle="国民年金の老齢給付（受給資格期間）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の老齢給付"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の遺族給付"
                    :relatedProblems="[]"
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
                    questionTitle="公的医療保険制度の概要"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
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
                    questionTitle="介護保険制度の概要"
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
                    questionTitle="介護保険制度の費用負担"
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
                    questionTitle="受給する老齢年金の選択"
                    :relatedProblems="[]"
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
                    :labels="[
                        'コ', //25
                        'ク', //26
                        'ア', //27
                        'カ', //28
                        'ウ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="雇用保険制度の内容等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '求職者給付',
                        '教育訓練給付',
                        '公共職業安定所',
                        '離職票',
                        '4',
                    ]"
                    :labels="[
                        'オ', //30
                        'エ', //31
                        'コ', //32
                        'ク', //33
                        'ア', //34
                    ]"
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
                    :labels="[
                        'カ', //35
                        'ク', //36
                        'ア', //37
                        'ケ', //38
                        'ウ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公的年金制度',
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
                            questionTitle: '傷病手当金',
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
                            questionTitle: '労災保険の休業補償等給付（休業給付）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の被保険者種別変更',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '受給年金の確認（ねんきん定期便）',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '離婚時の厚生年金保険の分割制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.syakai2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
