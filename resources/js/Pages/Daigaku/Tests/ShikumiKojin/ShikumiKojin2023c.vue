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
                    questionTitle="保険契約の当事者"
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
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
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
                        { questionTitle: '道徳的危険（モラルリスク）', content: '契約内容募集制度 →契約内容照会制度<br>支払査定時登録制度で登録 → 支払査定時照会制度で照会' }, //41 p57
                        { questionTitle: 'BMI', content: '正しい' }, //42
                        { questionTitle: '復活時の責任開始期', content: '復活の請求があった日 →復活の請求書や告知書に基づき生命保険会社が復活を承諾した後、延滞保険料の払込みがあった日' }, //43 p36
                        { questionTitle: '年払・半年払保険料の取扱い', content: '支払うことはない → 支払う' }, //44 p44
                        { questionTitle: '剰余金の主な源泉', content: '予定死亡率 ↔︎ 実際死亡率' }, //45 p103
                        { questionTitle: '平均寿命・平均余命', content: '平均寿命 ↔︎ 平均余命' }, //46 p79
                        { questionTitle: '低解約返戻金型生命保険', content: '保険料払込満了後 ↔︎ 保険料払込中' }, //47 p152
                        { questionTitle: '保険契約の解除請求者', content: '保険会社に対して → 保険契約者に対して' }, //48 p43
                        { questionTitle: '個人年金保険の年金種類の変更', content: '正しい' }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2023b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
