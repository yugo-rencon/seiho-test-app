<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2023年度 フォームC";
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
                    questionTitle="クーリング・オフ（契約撤回請求権）"
                    :relatedProblems="['2025a14', '2025b1', '2023c1']"
                    :contents="[
                        '生命保険契約の申し込みは該当しない → 該当する', //p7
                        '告知をした日 → 申し込みをした日<br>早い日を含め8日以内 → 遅い日を含め8日以内', //p7
                        '正しい',
                        '保険期間が1年以下のときはクーリング・オフができる → クーリング・オフはできない', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :relatedProblems="['2025a2', '2025b2', '2025c2', '2024a4', '2023a2', '2023a41', '2023b2', '2023c2']"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '正しい',
                        '一時払保険料 ↔︎ 全期前納保険料', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="['2025a30', '2025b13', '2025c14', '2024b25', '2023b3', '2023c3']"
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
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="['2025a15', '2025b3', '2025b15', '2025c3', '2025c15', '2024a16', '2024b3', '2023c4']"
                    :contents="[
                        '保険契約は失効しない → 失効する', //p34
                        '正しい',
                        '解約返戻金の請求権は消滅する → 存続する', //p35
                        '失効中の期間は計算対象に含まれない → 含めて計算する', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約者・保険金受取人の変更"
                    :relatedProblems="['2024c4', '2023c5']"
                    :contents="[
                        '複数人の連名 → 相続人のうち誰か1人', //p37
                        '生命保険会社の承諾は必要ない → 必要である', //p37
                        '正しい',
                        '支払事由の発生有無によらず変更できない → 支払事由が発生するまでは変更できる', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="['2025c7', '2024a6', '2024b6', '2024c6', '2023a6', '2023b6', '2023c6']"
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
                    questionTitle="契約内容の変更"
                    :relatedProblems="['2025b21', '2024a9', '2024b9', '2024c9', '2023b18', '2023c7']"
                    :contents="[
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p114
                        '正しい',
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p115
                        '保険契約が継続 → 減額部分は解約<br>解約返戻金は支払われない → 支払われる', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度"
                    :relatedProblems="['2025c18', '2024c7', '2023a7', '2023c8']"
                    :contents="[
                        '正しい',
                        '告知受領権を有しない → 代理の場合は有する', //p72
                        '告知義務者が主観的に重要と思う事項は対象 → 対象外', //p72
                        '過失によるものは該当しない → 重大な過失は該当する', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :relatedProblems="['2025a8', '2025b8', '2025c8', '2024b21', '2023a9', '2023b9', '2023c9']"
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
                    :relatedProblems="['2024a10', '2024b10', '2024c10', '2023a10', '2023b10', '2023c10']"
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
                    questionTitle="保険契約の当事者"
                    :relatedProblems="['2025b25', '2024b13', '2024c3', '2023a25', '2023b13', '2023c11']"
                    :contents="[
                        '財務大臣 → 内閣総理大臣', //p3
                        '免許制 → 登録制', //p3
                        '正しい',
                        '記名押印は行われていない → 記名押印による同意確認を行なっている', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始の時期"
                    :relatedProblems="['2025c25', '2024a2', '2024b2', '2024c2', '2023b1', '2023c12']"
                    :contents="[
                        '正しい',
                        '必ず一致する → 必ずしも一致しないことがある', //p10
                        '保険契約の成立日を意味する → 保険契約の成立日を意味するものではない', //p12
                        '支払対象とはならない → 支払対象となる', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法に基づく被保険者の同意"
                    :relatedProblems="['2025a13', '2025c1', '2024c1', '2023c13']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '被保険者の同意を必要としない → 同意が必要', //p5
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="主契約の種類"
                    :relatedProblems="['2025c21', '2024a23', '2024c23', '2023c14']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '海外の比較的低い金利で予定利率を低く設定 → 比較的高い金利で予定利率を高く設定', //p152
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="利率変動型積立終身保険（アカウント型保険）"
                    :relatedProblems="['2025a48', '2025b48', '2025c48', '2023b12', '2023c15']"
                    :contents="[
                        '正しい',
                        '無告知で → 告知が必要', //p137
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="身体的危険"
                    :relatedProblems="['2025b5', '2024b7', '2024c16', '2023a16', '2023b16', '2023c16']"
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
                    :relatedProblems="['2025b41', '2023a17', '2023b17', '2023c17', '2023c41']"
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
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :relatedProblems="['2025a23', '2025c23', '2024b11', '2023a13', '2023b21', '2023c18']"
                    :contents="[
                        '正しい',
                        '災害入院特約 → 家族型入院特約', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の割当て"
                    :relatedProblems="['2024b20', '2024c18', '2023a19', '2023b19', '2023c19']"
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
                    questionTitle="損害保険"
                    :relatedProblems="['2025a24', '2025b24', '2025c11', '2025c24', '2024a24', '2024b12', '2024c24', '2023a12', '2023c20']"
                    :contents="[
                        '正しい',
                        '5つの保険種類 → 4つの保険種類（地震保険は含まれない）', //p203
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="['2025a16', '2025b16', '2025c16', '2024a13', '2024c5', '2023a5', '2023c21']"
                    :contents="[
                        '正しい',
                        '解除権を行使することができる → 行使できない', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="['2025a11', '2025b23', '2024a12', '2024b24', '2023a22', '2023b22', '2023c22']"
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
                    questionTitle="危険選択上、被保険者集団が具備すべき条件"
                    :relatedProblems="['2025b18', '2023c23']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '危険度の高い契約 → 危険度の低い契約', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
                    :relatedProblems="['2024a17', '2024b17', '2024c17', '2023c24']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '150であれば50%低い死亡率 → 50%高い死亡率', //p49
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険法と生命保険契約の形態"
                    :relatedProblems="['2025a25', '2025a40', '2025c40', '2024b1', '2023a1', '2023c25']"
                    :contents="[
                        '傷害疾病定額保険契約',
                        '無効',
                        '片面的強行規定',
                        '自己のためにする',
                        '自己の生命', // 問25〜29
                    ]"
                    :labels="[
                        'イ', //25
                        'ウ', //26
                        'カ', //27
                        'ケ', //28
                        'オ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="配当の種類と仕組み"
                    :relatedProblems="['2025a20', '2025c30', '2024a30', '2023c30']"
                    :contents="[
                        '通常配当',
                        '内部留保',
                        '価格変動準備金',
                        '消滅時特別配当',
                        '消滅事由', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'ア', //31
                        'キ', //32
                        'ウ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険料積立金"
                    :relatedProblems="['2023a35', '2023b35', '2023c35']"
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
                        {
                            questionTitle: '生命保険契約に関する法律',
                            relatedProblems: ['2023a40', '2023b40', '2023c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '道徳的危険（モラルリスク）',
                            relatedProblems: ['2025b41', '2023a17', '2023b17', '2023c17', '2023c41'],
                            content: '契約内容募集制度 →契約内容照会制度<br>支払査定時登録制度で登録 → 支払査定時照会制度で照会',
                        }, //41 p57
                        {
                            questionTitle: 'BMI',
                            relatedProblems: ['2024a42', '2024b42', '2024c42', '2023a42', '2023b42', '2023c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '復活時の責任開始期',
                            relatedProblems: ['2023c43'],
                            content: '復活の請求があった日 →復活の請求書や告知書に基づき生命保険会社が復活を承諾した後、延滞保険料の払込みがあった日',
                        }, //43 p36
                        {
                            questionTitle: '年払・半年払保険料の取扱い',
                            relatedProblems: ['2024a41', '2023b43', '2023c44'],
                            content: '支払うことはない → 支払う',
                        }, //44 p44
                        {
                            questionTitle: '剰余金の主な源泉',
                            relatedProblems: ['2023c45'],
                            content: '予定死亡率 ↔︎ 実際死亡率',
                        }, //45 p103
                        {
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: ['2025a47', '2024a46', '2024b46', '2024c46', '2023a46', '2023b46', '2023c46'],
                            content: '平均寿命 ↔︎ 平均余命',
                        }, //46 p79
                        {
                            questionTitle: '低解約返戻金型生命保険',
                            relatedProblems: ['2023c47'],
                            content: '保険料払込満了後 ↔︎ 保険料払込中',
                        }, //47 p152
                        {
                            questionTitle: '保険契約の解除請求者',
                            relatedProblems: ['2025a41', '2025c41', '2023c48'],
                            content: '保険会社に対して → 保険契約者に対して',
                        }, //48 p43
                        {
                            questionTitle: '個人年金保険の年金種類の変更',
                            relatedProblems: ['2024a47', '2024b47', '2024c47', '2023c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2023b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
