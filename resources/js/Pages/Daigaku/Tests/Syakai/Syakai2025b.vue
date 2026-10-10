<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2025年度 フォームB";
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
                    questionTitle="国民年金の給付に要する費用等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '税務署 → 市区町村役所', //p16
                        '法定免除に該当した場合、その期間については申請免除の全額免除と同じく、保険料を納付したときの年金額と比べてその[[２分の１]]の額を受給する（平成21年３月までの期間は[[３分の１]]）。', //p16
                        '正しい',
                        '付加年金額、付加保険料は物価や賃金等の変動の影響を受けず、[[定額となっている]]。', //p18
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
                    questionTitle="厚生年金保険の適用事業所"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '株式会社などの法人は、[[すべて加入が義務付けられ、業態や従業員数を問わない]]。', //p19
                        '常時３人以上 → 常時５人以上', //p19
                        '正しい',
                        '個人事業主自身は厚生年金保険には[[加入できない]]。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
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
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の遺族給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '配偶者とは、法律上の配偶者のみではなく、[[事実婚（内縁関係）を含む]]。', //p54
                        '遺族基礎年金の受給額は、国民年金に加入していた期間にかかわらず定額であり、新規裁定者の場合、[[子の人数に応じて加算額が上乗せされる]]。', //p56
                        '寡婦年金は60歳から65歳になるまでの最長５年間支給される有期年金。', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民健康保険"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
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
                    questionTitle="介護保険のサービスの利用・ケアマネジメント"
                    :relatedProblems="[]"
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
                    questionTitle="雇用保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '防犯対策等 → 災害対策等', //p150
                        '正しい',
                        '[[基礎年金番号がわからない場合であっても]]、マイナンバーカード（個人番号カード）を提示することで相談を受けることができる。', //p151
                        '個人年金関連 → 社会保障関連', //p151
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
                    questionTitle="国民年金（基礎年金）の付加保険料"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の老齢給付（受給資格期間）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '合算対象期間（カラ期間）とは、[[年金額には反映されないが]]、老齢基礎年金を受けるための受給資格期間には合算される期間をいう。', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の遺族基礎年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '５年 → ３年', //p56
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
                    questionTitle="保険診療の仕組み"
                    :relatedProblems="[]"
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
                    questionTitle="介護保険制度の最近の主な改正項目"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
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
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '同じ月に利用したサービスの、[[１割から３割の利用者負担の合計額]]（同じ世帯に複数の利用者がいる場合には、世帯合計額）が高額になると、一定額を超えた部分が高額介護サービス費として[[申請により後日支給される]]。', //p113
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="労働保険制度の現状と課題"
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
                        // rev: 2026-10-10 確認済み
                        '80歳 → 70歳', //p142
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険や在職老齢年金の併給調整等"
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
                    questionTitle="介護保険制度の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '市区町村',
                        '65歳',
                        '公的医療保険',
                        '半分を保険料、残り半分を公費',
                        '要介護状態または要支援状態',
                    ]"
                    :labels="[
                        'ク', //25
                        'イ', //26
                        'オ', //27
                        'ケ', //28
                        'カ', //29
                    ]"
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
                    :labels="[
                        'オ', //30
                        'イ', //31
                        'ウ', //32
                        'カ', //33
                        'コ', //34
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
                            questionTitle: '公的年金制度の特色',
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
                            questionTitle: '健康保険の給付',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: '高額療養費',
                            relatedProblems: [],
                            content: '医療費の自己負担が高額になった場合に給付されるもので、[[自己負担限度額を超えた部分が全額給付される]]。', //p94
                        }, //44
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: '要介護の身体状況',
                            relatedProblems: [],
                            content: '要介護１ → 要介護５', //p105
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
                            // rev: 2026-08-23 確認済み
                            questionTitle: '老齢年金の受給開始年齢',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '年金請求書の受付',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2025a" next-route="daigaku.syakai2025c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
