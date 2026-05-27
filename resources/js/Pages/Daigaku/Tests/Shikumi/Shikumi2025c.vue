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
                    :relatedProblems="['2025a13', '2025c1', '2024c1', '2023c13']"
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
                    :relatedProblems="['2025a2', '2025b2', '2025c2']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '[[「前納」]]は、年払または半年払の契約の場合に、将来払い込むべき保険料の一部または全部をまとめて生命保会社に払い込む方法であり、[[「一括払」]]は、月払契約の場合に1年分または数ヶ月分の保険料をまとめて生命保険会社に払い込む方法である。', //p21
                        '正しい',
                        '[[一時払保険料]]は保険料の払込免除を考慮せず全保険期間を１保険料期間していること等により、[[一時払保険料の方が全期前納保険料より]]も少なくなる。', //p22
                        '[[一時払保険料]]は、払い込んだ年１回に限り控除され、[[全期前納保険料]]は、毎年、その年に対応する保険料が払い込まれたものとしてそれぞれの保険料の控除額が計算される。', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="['2025a15', '2025b3', '2025b15', '2025c3', '2025c15', '2024a16', '2024b3', '2023c4']"
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
                    :relatedProblems="['2025a4', '2025b4', '2025c4', '2025a42', '2025b42', '2025c42']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '解約させる → 消滅させる', //p39
                        '保険業法および定款 → 保険法および保険約款', //p40
                        '正しい',
                        '保険契約の解約は、保険契約者が単独で[[一方的に行うことができ]]、被保険者の同意も保険金受取人の同意も[[必要としない]]', //p42
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="['2025b40', '2025c5', '2024a15', '2024b15', '2024c15', '2023a4', '2023b15']"
                    :contents="[
                        '保険法 → 保険約款', //p30
                        '支払免責となる → 支払免責となるような規定はない', //p30
                        '正しい',
                        '8日以内 → 5日以内', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="超過危険の種類"
                    :relatedProblems="['2025a6', '2025b6', '2025c6', '2025a45', '2025b45', '2025c45']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '申込被保険体のもつ超過危険の大きさは契約後の経過に従って、[[必ずしも平坦な曲線を描くものではなく、さまざまな形の曲線を描くものである]]。', //p73
                        '胃切除 → 高血圧', //p73
                        '正しい',
                        '妊娠 → 胃切除などの手術後の危険', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="['2025c7', '2024a6', '2024b6', '2024c6', '2023a6', '2023b6', '2023c6']"
                    :contents="[
                        '集団の平均年齢が変動しないこと → 保険の倫理性が維持されていること', //p66
                        '正しい',
                        '危険選択上の要素を無視してでも重要 → 危険選択上を無視するのは得策でない', //p68
                        '単なる契約の変更のため、申込みの諾否決定や危険選択の追加をすることはない → 新たな危険の増加を伴う場合もあるので申込みの諾否決定や危険選択の追加を行う', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :relatedProblems="['2025a8', '2025b8', '2025c8']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '保険料は通常、[[転換時]]の契約年齢、保険料率により計算されることから、保険種類によっては、[[保険料率の引き上げとなる場合ある]]。', //p121
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '原則として診査が[[必要]]で、保険料は[[手続時の年齢]]で計算される。', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :relatedProblems="['2025a9', '2025b9', '2025c9']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        'この制度は、[[保険約款に規定がある]]契約についてのみ適用される。', //p112
                        '（自動）振替貸付を行った場合でも、保険約款では猶予期間満了後一定期間内（通常3カ月以内）に、保険契約者が払済保険への変更を請求したときは、[[（自動）振替貸付を行わなかったものとして取り扱う]]旨を規定している。', //p112
                        '保険金額を上限に貸付 → 解約返戻金の所定の範囲内で貸付', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :relatedProblems="['2025a10', '2025b10', '2025c10']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '被保険者の[[生死に関係なく]]年金を支払う商品で、保証期間中に被保険者が死亡した場合、[[遺族に残りの保証期間に対応する年金、または一時金を支払う]]。', //p145
                        '無選択型個人年金保険には、[[保険料免除機能はない]]。', //p146
                        '正しい',
                        '年金原資には、最低保証がないタイプと[[一定額保証するタイプ]]がある。', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="['2025a24', '2025b24', '2025c11', '2025c24', '2024a24', '2024b12', '2024c24', '2023a12', '2023c20']"
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
                    :relatedProblems="['2025a12', '2025b12', '2025c12']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        'その運営は、共済契約の加入先となる「農業協同組合」と、共済金の支払い等を行う「[[全国共済農業協同組合連合会]]」の[[２段階の組織で行われている]]。', //p166
                        '10年タイプ → 1年タイプ', //p179
                        '年齢により「こども型」「総合保障型」「入院保障型」「熟年型」「熟年入院型」の保障に[[別れている]]。', //p185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の内容"
                    :relatedProblems="['2025c13']"
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
                    :relatedProblems="['2025a30', '2025b13', '2025c14', '2024b25', '2023b3', '2023c3']"
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
                    :relatedProblems="['2025a15', '2025b3', '2025b15', '2025c3', '2025c15', '2024a16', '2024b3', '2023c4']"
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
                    :relatedProblems="['2025a16', '2025b16', '2025c16', '2024a13', '2024c5', '2023a5', '2023c21']"
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
                    :relatedProblems="['2025a17', '2025b17', '2025c17']"
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
                    :relatedProblems="['2025c18', '2024c7', '2023a7', '2023c8']"
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
                    :relatedProblems="['2025a19', '2025b19', '2025c19', '2024a21', '2024c20', '2023b24']"
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
                    :relatedProblems="['2025c20']"
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
                    :relatedProblems="['2025c21', '2024a23', '2024c23', '2023c14']"
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
                    :relatedProblems="['2025a22', '2025b22', '2025c22', '2024a48', '2024b48', '2023a47']"
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
                    :relatedProblems="['2025a23', '2025c23', '2024b11', '2023a13', '2023b21', '2023c18']"
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
                    :relatedProblems="['2025a24', '2025b24', '2025c11', '2025c24', '2024a24', '2024b12', '2024c24', '2023a12', '2023c20']"
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
                    :relatedProblems="['2025c25', '2024a2', '2024b2', '2024c2', '2023b1', '2023c12']"
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
                    questionTitle="解約返戻金の仕組み"
                    :relatedProblems="['2025a35', '2025b35', '2025c35']"
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
                        {
                            questionTitle: '生命保険契約の形態',
                            relatedProblems: ['2025a25', '2025a40', '2025c40', '2024b1', '2023a1', '2023c25'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険契約の解除請求',
                            relatedProblems: ['2025a41', '2025c41', '2023c48'],
                            content: '保険者 → 保険契約者',
                        }, //41 p43
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '保険契約の解除・解約・取消し・無効',
                            relatedProblems: ['2025a4', '2025b4', '2025c4', '2025a42', '2025b42', '2025c42'],
                            content: '保険法では保険料不可分の原則が[[採用されていない]]ため、（中略）保険料の残額を保険契約者に[[支払う]]旨が保険約款に規定されている。', //p44
                        }, //42
                        {
                            questionTitle: '契約確認',
                            relatedProblems: ['2025c43', '2024a43', '2024b44', '2023a44'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '選択効果の検証等',
                            relatedProblems: ['2025a18', '2025b20', '2025b44', '2025c44', '2024a18', '2024b18', '2024b43', '2024c30', '2023a18'],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '超過危険の種類',
                            relatedProblems: ['2025a6', '2025b6', '2025c6', '2025a45', '2025b45', '2025c45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '生命保険会社で使用している経験表',
                            relatedProblems: ['2025c46', '2024a45'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '配当金の支払方法',
                            relatedProblems: ['2025a21', '2025c47', '2024a20'],
                            content: '保険期間の途中で支払うことができない → 保険契約者から請求があった場合に支払いが可能',
                        }, //47 p109
                        {
                            questionTitle: '利率変動型積立終身保険（アカウント型保険）',
                            relatedProblems: ['2025a48', '2025b48', '2025c48', '2023b12', '2023c15'],
                            content: '無告知で → 告知が必要',
                        }, //48 p137
                        {
                            questionTitle: '特定の疾病や損傷の治療に備える特約',
                            relatedProblems: ['2025a49', '2025c49', '2024b23', '2023b23'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2025b" next-route="daigaku.shikumi-kojin2024a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
