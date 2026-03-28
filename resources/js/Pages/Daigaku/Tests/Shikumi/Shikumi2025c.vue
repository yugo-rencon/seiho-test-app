<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2025年度 フォームC";
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
                    questionTitle="保険法に基づく被保険者の同意"
                    :contents="[
                        '被保険者の同意が必要 → 同意は不要', //p5
                        '正しい',
                        '被保険者の同意は不要 → 同意が必要', //p5
                        '被保険者の同意は必要ない → 同意が必要', //p5-6
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '正しい',
                        '全期前納保険料 ↔︎ 一時払保険料', //p22
                        '一時払保険料 ↔︎ 全期前納保険料', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :contents="[
                        '保険契約は失効しない → 失効する', //p34
                        '翌月初日 → 翌日', //p34
                        '正しい',
                        '受領を拒むことができない → 拒むことができる', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解除・解約・取消し・無効"
                    :contents="[
                        '解約させる → 消滅させる', //p39
                        '保険業法および定款 → 保険法および保険約款', //p40
                        '正しい',
                        '一方的に行うことは不可能 → 一方的に行うことが可能<br>同意が必要 → 同意は不要', //p42
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :contents="[
                        '保険法 → 保険約款', //p30
                        '支払免責となる → 支払免責となるような規定はない', //p30
                        '正しい',
                        '8日以内 → 5日以内', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="超過危険の種類"
                    :contents="[
                        '平坦な曲線をを描く → さまざまな形の曲線を描く', //p73
                        '胃切除 → 高血圧', //p73
                        '正しい',
                        '妊娠 → 胃切除などの手術', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :contents="[
                        '集団の平均年齢が変動しないこと → 保険の倫理性が維持されていること', //p66
                        '正しい',
                        '危険選択上の要素を無視してでも重要 → 危険選択上を無視するのは得策でない', //p68
                        '申込みの諾否決定や危険選択の追加をすることはない → 申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :contents="[
                        '転換前契約加入時 → 転換時<br>保険料率は引上げになることはない → 引き上げとなる場合がある', //p121
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '診査は不要 → 診査は必要<br>契約時年齢で計算 → 手続時の年齢で計算', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :contents="[
                        '保険約款に規定がない契約 → 保険約款に規定がある契約のみ', //p112
                        '経過期間に関わらず → 猶予期間満了後一定期間内の場合', //p112
                        '保険金額を上限 → 解約返戻金の所定の範囲内', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :contents="[
                        '被保険者が生存している限り → 生死に関係なく<br>残りの保証期間に対する年金や一時金は支払わない → 遺族に支払う', //p145
                        '保険料免除機能が適用される → 保険料免除機能はない', //p146
                        '正しい',
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        '火災保険単体 → 火災保険と地震保険セット', //p203
                        '自動車保険 ↔︎ 自動車損害賠償責任保険', //p203
                        '正しい',
                        '告知は不要 → 告知が必要', //p206
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業とその商品"
                    :contents="[
                        '正しい',
                        '農業協同組合が単独 → 農業協同組合と全国共済農業協同組合連合会の2組織', //p166
                        '10年タイプ → 1年タイプ', //p179
                        '年齢による区分のない → 年齢により保障が分かれている', //p185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の内容"
                    :contents="[
                        '正しい',
                        '生命保険会社に入金された時点 → 窓口やATM等で払い込んだ時点', //p16
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の主な保険給付の免責事由"
                    :contents="[
                        '正しい',
                        '正しい',
                        '精神障害を原因とする自己の場合は支払う → 支払わない', //p29
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :contents="[
                        '正しい',
                        '解約返戻金の請求権は消滅する → 存続する', //p35
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :contents="[
                        '正しい',
                        '正しい',
                        '第1回保険料相当額 → 解約返戻金', //p40
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の実際"
                    :contents="[
                        '募集人確認 → 第一次選択', //p59
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度のポイント"
                    :contents="[
                        '正しい',
                        '正しい',
                        '告知義務者が主観的に重要と判断したものも対象 → 対象外', //p72
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :contents="[
                        '正しい',
                        '実際死亡率 ÷ 予定死亡率 × 危険保険金 → （予定死亡率 - 実際死亡率）× 危険保険金', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="収入保障保険（生活保障保険）"
                    :contents="[
                        '正しい',
                        '年金での支払総額より多い額となる → 少ない額となる', //p138
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="主契約の種類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '海外の比較的低い金利 → 比較的高い金利', //p152
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定疾病保障保険（三大疾病保障保険）"
                    :contents="[
                        '正しい',
                        '高度障害保険金は一切支払われない → 支払うタイプと支払わないタイプがある', //p137
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '一緒に付加することができない → 一緒に付加する', //p158
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '所得補償保険 → 費用保険', //p203
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="生命保険会社の責任開始の時期"
                    :contents="[
                        '承諾',
                        '第1回保険料',
                        '保険料払込期間',
                        '翌月1日',
                        'でも同様の', // 問25〜29
                    ]"
                    :labels="[
                        'ク', //25
                        'ア', //26
                        'ウ', //27
                        'ケ', //28
                        'イ', //29
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
                    questionTitle="解約返戻金の仕組み"
                    :contents="[
                        '毎決算期',
                        '保険料積立金',
                        '経過年数',
                        '控除した',
                        'キャッシュバリュー', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'ウ', //36
                        'オ', //37
                        'イ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        { questionTitle: '生命保険契約の形態', content: '正しい' }, //40
                        { questionTitle: '保険契約の解除請求', content: '保険者 → 保険契約者' }, //41 p43
                        { questionTitle: '保険契約の解除・解約・取消し・無効', content: '保険料不可分の原則が採用されている → 採用されていない<br>保険契約者に支払わないと規定 → 支払うと規定' }, //42 p44
                        { questionTitle: '契約確認', content: '正しい' }, //43
                        { questionTitle: '選択効果の検証等', content: '正しい' }, //44
                        { questionTitle: '超過危険の種類', content: '正しい' }, //45
                        { questionTitle: '生命保険会社で使用している経験表', content: '正しい' }, //46
                        { questionTitle: '配当金の支払方法', content: '保険期間の途中で支払うことができない → 保険契約者から請求があった場合に支払いが可能' }, //47 p109
                        { questionTitle: '利率変動型積立終身保険（アカウント型保険）', content: '無告知で → 告知が必要' }, //48 p137
                        { questionTitle: '特定の疾病や損傷の治療に備える特約', content: '正しい' }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2025b" next-route="daigaku.shikumi-kojin2024a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
