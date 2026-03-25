<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2023年度 フォームB";
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
                    questionTitle="責任開始の時期"
                    :contents="[
                        '正しい',
                        '必ず一致する → 必ずしも一致しないことがある', //p10
                        '保険契約の成立日を意味する → 保険契約の成立日を意味するものではない', //p12
                        '支払対象とはならない → 支払対象となる', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '正しい',
                        '全期前納保険料 ↔︎ 一時払保険料', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の免責事由"
                    :contents="[
                        '商法 → 保険法', //p25
                        '自殺に該当する → 自殺に該当しない', //p27
                        '故意と判断され、保険金は支払われない → 故意とは判断されず、保険金が支払われる', //p27
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解除・解約・取消し・無効"
                    :contents="[
                        '解約させる → 消滅させる', //p39
                        '既払込保険料を返還 → 返還されない', //p42
                        '3年以内に限り → 年月にかかわらず', //p42
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :contents="[
                        '得られない情報はない → 得られない情報がある', //p61
                        '個別方式は行われていない → 一括方式と個別方式が行われている', //p62
                        '外観の観察は行わない → 行う', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :contents="[
                        '収支相当の原則が有効に機能していること → 大数の法則が作用し得る程度に十分大量の被保険者が存在すること', //p67
                        '厚生労働省 → 金融庁長官', //p67
                        '正しい',
                        '申込みの諾否決定や危険選択の追加をすることはない → 申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :contents="[
                        '被保険者が生存している限り → 生死に関係なく<br>残りの保証期間に対する年金や一時金は支払わない → 遺族に支払う', //p145
                        '正しい',
                        '満期保険金額の最低保証がある → 最低保証はない', //p146
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :contents="[
                        '保険約款に規定がない契約 → 保険約款に規定がある契約のみ', //p112
                        '経過期間に関わらず → 猶予期間満了後一定期間内の場合', //p112
                        '責任準備金 → 解約返戻金', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :contents="[
                        '診査は不要 → 診査は必要<br>契約時年齢で計算 → 手続時の年齢で計算', //p120
                        '転換前契約加入時 → 転換時<br>保険料率は引上げになることはない → 引き上げとなる場合がある', //p121
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :contents="[
                        '終身タイプの商品はない → 定期タイプと終身タイプがある', //p140
                        '満期保険を支払う商品が一般的 → 一般に満期保険金はない', //p140
                        '保険金はがんと同額で、保険金がないものはない → 保険金が少額で、保険金がないものもある', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :contents="[
                        '逓増定期保険特約はない → 逓増定期保険特約もある', //p156
                        '正しい',
                        '支払回数に最低保証はない → 最低保証がある', //p156
                        '一度のみ支払う → 一定期間が経過するごとに支払う', //p156
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="利率変動型積立終身保険（アカウント型保険）"
                    :contents="[
                        '正しい',
                        '最低保証利率を下回る場合がある → 最低保証利率が設定されている', //p136
                        '契約は消滅する → 積立部分をそのままに契約継続可能', //p137
                        '保障を減らして積立部分に振り分けできない → 振り分けできる', //p137
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の当事者"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '資本金1億円以上で年間収受保険料100億円以下 → 資本金1000万円以上で年間収受保険料50億円以下', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '給与等から天引きされた時点 → 団体（集団）から生命保険会社に払い込まれた時', //p17
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :contents="[
                        '保険約款 ↔︎ 保険法', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="身体的危険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '既往歴 → 現病歴', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="道徳的危険（モラルリスク）"
                    :contents="[
                        '契約後の経過期間ごとの解約発生率に影響 → 医学的な法則に従った死亡率に影響', //p56
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '解約返戻金があれば責任準備金に繰り入られる → 支払われる', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の割当て"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '社員（被保険者）配当金 → 社員（契約者）配当金', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '既払込保険料 → 保険金', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :contents="[
                        '正しい',
                        '災害入院特約 → 家族型入院特約', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する販売チャネルもある → 該当する販売チャネルはない', //p165
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定の疾病や損傷の治療に備える特約"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '特約の対象とならない → 対象となる', //p159
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :contents="[
                        '正しい',
                        '株式（契約者）配当 → 社員（契約者）配当', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険金の支払い"
                    :contents="[
                        '片面的強行規定',
                        '傷害疾病定額保険契約',
                        '自己のためにする',
                        '傷害疾病損害保険契約',
                        '第三者のためにする', // 問25〜29
                    ]"
                    :labels="[
                        'カ', //25
                        'イ', //26
                        'ケ', //27
                        'キ', //28
                        'エ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="危険選択の手段"
                    :contents="[
                        '内部留保',
                        '所属団体',
                        '通常配当',
                        '危険準備金',
                        '消滅事由', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'ケ', //31
                        'コ', //32
                        'イ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険料積立金"
                    :contents="[
                        '将来法',
                        '過去法',
                        '定期保険',
                        '貯蓄保険料',
                        'チルメル', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'コ', //36
                        'キ', //37
                        'イ', //38
                        'ケ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        { questionTitle: '生命保険契約に関する法律', content: '正しい' }, //40
                        { questionTitle: '承諾前の保険事故', content: '正しい' }, //41
                        { questionTitle: 'BMI', content: '正しい' }, //42
                        { questionTitle: '年払・半年払保険料の取扱い', content: '正しい' }, //43
                        { questionTitle: '逆選択', content: '必要性を感じていない → 必要性を強く感じている<br>保険非加入の傾向 → 保険加入の傾向' }, //44 p46
                        { questionTitle: '死亡率と生存率の関係', content: '生存率：1 - （1 / 死亡率） → 1 - 死亡率<br>死亡率：1 - （1 / 生存率） → 1 - 生存率' }, //45 p79
                        { questionTitle: '平均寿命・平均余命', content: '平均寿命 ↔︎ 平均余命' }, //46 p79
                        { questionTitle: '現価計算', content: '受取金額 × 1 / （1 + 利率） → 受取金額 × 1 / （1 + 利率）<sup>期間 - 1</sup>' }, //47
                        { questionTitle: '解約返戻金', content: '正しい' }, //48
                        { questionTitle: '転換契約の募集に際しての法令上の規制', content: '正しい' }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2023a" next-route="daigaku.shikumi-kojin2023c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
