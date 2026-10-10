<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2022年度 フォームA";
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
                    questionTitle="国民年金保険料納付の法定免除"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の仕組み"
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
                    questionTitle="国民年金の老齢給付（受給資格期間）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '第２号被保険者については、[[20歳未満および60歳以降の期間は合算対象期間とされる]]。', //p24
                        '全額免除期間中は３分の２ → 全額免除期間中は２分の１', //p24
                        '合算対象期間（カラ期間）とは、[[年金額には反映されないが]]、老齢基礎年金を受けるための受給資格期間には合算される期間をいう。', //p24
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
                    questionTitle="公的年金制度の遺族給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '配偶者とは、法律上の配偶者のみではなく、[[事実婚（内縁関係）を含む]]。', //p54
                        '２年 → ３年', //p56
                        '寡婦年金は60歳から65歳になるまでの最長５年間支給される有期年金。', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="高額療養費"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '医療費の自己負担が高額になった場合に給付されるもので、収入･所得のランクにより定められている自己負担限度額を超えた部分が[[全額]]給付される。', //p94
                        '多数回該当 → 世帯合算', //p94
                        '給付については１カ月の自己負担額が１つの病院・診療所ごとに自己負担限度額を超えたときに、[[公的医療保険の保険者から超えた分が支給される]]。', //p94
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
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
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="労災保険（労働者災害補償保険）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="労働保険制度の現状と課題"
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
                    questionTitle="受給する老齢年金の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '75歳 → 70歳', //p142
                        '正しい',
                        '６ヵ月 → １年', //p143
                        '６ヵ月 → １年', //p143
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '感染対策 → 災害対策', //p150
                        '正しい',
                        '[[基礎年金番号がわからない場合であっても]]、マイナンバーカード（個人番号カード）を提示することで相談を受けることができる。', //p151
                        '個人年金関連 → 社会保障関連', //p151
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の被保険者"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
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
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
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
                    :questionNumber="16"
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
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '障害等級１級･２級の場合は、障害基礎年金が支給され、[[厚生年金保険の被保険者であれば、障害厚生年金が二階部分として上乗せされる]]。', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の遺族給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '遺族厚生年金を受給していた配偶者や子が死亡しても、その代わりに[[父母、孫、祖父母が受給することはできない]]。', //p59
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
                    questionTitle="国民健康保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '国民健康保険組合は、同種の事業または業務に従事する[[300人]]以上で組織された保険者で、現在建設業など[[160]]近い国民健康保険組合がある。', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
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
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="公的年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '公平化',
                        '被保険者区分',
                        '国庫負担',
                        '賦課方式',
                        '半数近く',
                    ]"
                    :labels="['カ', 'ウ', 'ア', 'ケ', 'オ']"
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
                    questionTitle="介護保険制度の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '市区町村',
                        '65歳',
                        '公的医療保険',
                        '半分を保険料、残り半分を公費',
                        '16',
                    ]"
                    :labels="['オ', 'キ', 'ク', 'ケ', 'カ']"
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
                            questionTitle: '障害厚生年金',
                            relatedProblems: [],
                            content: '', //p
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の繰上げ受給',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '遺族厚生年金の受給',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公的年金等の源泉徴収',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '労災保険の傷病補償年金（傷病年金）',
                            relatedProblems: [],
                            content: '', //p
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
                            questionTitle: '厚生年金保険の任意加入',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2023c" next-route="daigaku.syakai2022b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
