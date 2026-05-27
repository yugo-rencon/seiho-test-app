<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2025年度 フォームB";
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
                        '失効中の期間は計算対象に含まれない → 含めて計算する', //p36
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
                    questionTitle="身体的危険"
                    :relatedProblems="['2025b5', '2024b7', '2024c16', '2023a16', '2023b16', '2023c16']"
                    :contents="[
                        '痩身体 → 過軽体', //p49
                        '正しい',
                        '既往歴 → 現病歴', //p50
                        '現病歴 → 既往歴', //p50
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
                    questionTitle="営業保険料の構成と計算基礎"
                    :relatedProblems="['2025b7', '2024b8', '2023a8']"
                    :contents="[
                        '純保険料 → 付加保険料', //p89
                        '正しい',
                        '付加保険料 → 純保険料', //p89
                        '予定利率 → 予定事業費率', //p89
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
                    questionTitle="特約の種類"
                    :relatedProblems="['2025b11', '2024a11']"
                    :contents="[
                        '正しい',
                        '支払回数に最低保証はない → 最低保証がある', //p156
                        '保証は継続する → 特約は消滅する', //p156
                        '余命1年以内 → 余命6ヶ月以内', //p160
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
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="['2025a30', '2025b13', '2025c14', '2024b25', '2023b3', '2023c3']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '故意と判断され、保険金は支払われない → 故意とは判断されず、保険金が支払われる', //p27
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :relatedProblems="['2025a3', '2025b14']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '再指定されるまでの間に保険事故が発生した場合、[[死亡した保険金受取人の法定相続人が保険金受取人となる]]。', //p22
                        '正しい',
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
                    questionTitle="危険選択上、被保険者集団が具備すべき4つの条件"
                    :relatedProblems="['2025b18', '2023c23']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '収支相当の原則 → 大数の法則<br>保険金受取人 → 被保険者', //p67
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
                    questionTitle="選択効果の検証等"
                    :relatedProblems="['2025a18', '2025b20', '2025b44', '2025c44', '2024a18', '2024b18', '2024b43', '2024c30', '2023a18']"
                    :contents="[
                        '正しい',
                        '将来の危険選択に活かすことができる → 活かす目的には適さない', //p69
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="['2025b21', '2024a9', '2024b9', '2024c9', '2023b18', '2023c7']"
                    :contents="[
                        '正しい',
                        '最新の計算基礎率 → 元契約と同じ計算基礎率', //p114
                        '正しい',
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
                    questionTitle="共済制度の特徴"
                    :relatedProblems="['2025a11', '2025b23']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する[[販売チャネルはない]]。', //p165
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
                    questionTitle="保険契約の当事者"
                    :relatedProblems="['2025b25', '2024b13', '2024c3', '2023a25', '2023b13', '2023c11']"
                    :contents="[
                        '10億円',
                        '50億円',
                        '制限行為能力者',
                        '同意',
                        '商号', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'カ', //26
                        'イ', //27
                        'ク', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2025a5', '2025b30']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '事業方法書',
                        '社医',
                        '嘱託医',
                        '検診',
                        '保険事故発生率', // 問30〜34
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
                            questionTitle: '保険金等の請求手続き',
                            relatedProblems: ['2025b40', '2025c5', '2024a15', '2024b15', '2024c15', '2023a4', '2023b15'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '道徳的危険（モラルリスク）',
                            relatedProblems: ['2025b41', '2023a17', '2023b17', '2023c17', '2023c41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '保険契約の解除・解約・取消し・無効',
                            relatedProblems: ['2025a4', '2025b4', '2025c4', '2025a42', '2025b42', '2025c42'],
                            content: '保険法では保険料不可分の原則が[[採用されていない]]ため、（中略）保険料の残額を保険契約者に[[支払う]]旨が保険約款に規定されている。', //p44
                        }, //42
                        {
                            questionTitle: '体格',
                            relatedProblems: ['2025b43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '選択効果の検証',
                            relatedProblems: ['2025a18', '2025b20', '2025b44', '2025c44', '2024a18', '2024b18', '2024b43', '2024c30', '2023a18'],
                            content: '高い死亡率 → 低い死亡率',
                        }, //44 p70
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '超過危険の種類',
                            relatedProblems: ['2025a6', '2025b6', '2025c6', '2025a45', '2025b45', '2025c45'],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '責任準備金の積み立て',
                            relatedProblems: ['2025b46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '剰余金と配当金',
                            relatedProblems: ['2025b47'],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '利率変動型積立終身保険（アカウント型保険）',
                            relatedProblems: ['2025a48', '2025b48', '2025c48', '2023b12', '2023c15'],
                            content: '無告知で → 告知が必要',
                        }, //48 p137
                        {
                            questionTitle: '市場価格調整を利用した生命保険',
                            relatedProblems: ['2025b49'],
                            content: '責任準備金 → 解約返戻金',
                        }, //49 p153
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2025a" next-route="daigaku.shikumi-kojin2025c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
