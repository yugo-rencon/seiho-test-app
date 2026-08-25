<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2025年度 フォームA";
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
                    questionTitle="保険者"
                    :relatedProblems="['2025a1']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '保険業法 → 保険法', //p3
                        '登録 → 免許', //p3
                        '免許 → 登録', //p3
                        '正しい',
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
                    questionTitle="保険金の支払い"
                    :relatedProblems="['2025a3', '2025b14']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '再指定されるまでの間に保険事故が発生した場合、[[死亡した保険金受取人の法定相続人が保険金受取人となる]]。', //p22
                        '災害死亡宣告 → 認定死亡', //p22
                        '正しい',
                        '[[保険期間中]]に高度障害状態となった場合に支払われる。', //p24
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
                        '保険契約の解約は、保険契約者が単独で[[一方的に行うことができ]]、被保険者の同意も保険金受取人の同意も[[必要としない]]。', //p42
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2025a5', '2025b30']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '一般臨床と同様の → 一般臨床と異なる', //p63
                        '主治医の証明書は、被保険者の身体的危険に関する追加情報が必要な場合に収集されるものであり、[[危険選択の手段として用いられる]]。', //p64
                        '危険選択の方式は[[一括方式]]と個別方式の2つで、団体の一定人数以上の所属員が同時に被保険者となる申し込みがあるときは、[[一括方式が認められている]]。', //p63
                        '正しい',
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
                <QuestionTemp4
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        {
                            answer: '892,538円',
                            questionTitle: '保険料の現価',
                            relatedProblems: [],
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '将来受け取る金額の現価は、利率を用いて現在価値に割り引いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価 ＝ 将来価値 ÷（1 ＋ 利率）<sup>年数</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['将来価値：100万円', '利率：2.3%（＝ 0.023）', '期間：5年'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価', '= 1,000,000 ÷ （1 ＋ 0.023）<sup>5</sup>', '（1.023）<sup>5</sup> = 1.12041 = 1.1204（小数点第5位を四捨五入）', '= 1,000,000 ÷ 1.1204', '= 892,538.37915'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 892,538円（円未満を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //7
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
                    questionTitle="共済制度の特徴"
                    :relatedProblems="['2025a11', '2025b23']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '原則として非組合員の加入を認めていないが、[[一定の条件を満たした場合には、組合員以外の加入を認める]]団体がある。', //p164
                        'それぞれの根拠法によって、「[[営利を目的としてはならない]]」と規定されている。', //p165
                        '正しい',
                        '共済の場合は、生命共済、損害共済とも、共済団体ごとに取り扱う[[共済種類が限られている]]。', //p165
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
                    questionTitle="保険法に基づく被保険者の同意"
                    :relatedProblems="['2025a13', '2025c1']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '傷害疾病定額保険契約で保険金受取人が被保険者（または相続人）である場合は、[[同意を必要としない]]。', //p5
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ（契約撤回請求権）"
                    :relatedProblems="['2025a14', '2025b1']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険期間が3年以上 → 保険期間が1年以下', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="['2025a15', '2025b3', '2025b15', '2025c3', '2025c15']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '保険契約者の解約返戻金の請求権は[[存続する]]。', //p35
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="['2025a16', '2025b16', '2025c16']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
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
                        // rev: 2026-05-27 確認済み
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
                    questionTitle="選択効果の検証等"
                    :relatedProblems="['2025a18', '2025b20', '2025b44', '2025c44']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '予定死亡率 → 実際死亡率', //p70
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :relatedProblems="['2025a19', '2025b19', '2025c19']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '死差益 = [[（予定死亡率 – 実際死亡率）]]× 危険保険金', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の種類"
                    :relatedProblems="['2025a20', '2025c30']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '正しい',
                        '丸2年 → 丸1年', //p105
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :relatedProblems="['2025a21', '2025c47']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '配当金を、毎年の契約応当日に保険契約者に現金で[[支払う]]。', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定疾病保障保険（三大疾病保障保険）"
                    :relatedProblems="['2025a22', '2025b22', '2025c22']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '死亡保険金と高度障害保険金を[[支払うタイプと支払わないタイプがある]]。', //p137
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :relatedProblems="['2025a23', '2025c23']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '災害入院特約は、[[不慮の事故（ケガ）で入院したとき]]に入院給付金を支払う。一定期間内に被保険者として定めた家族が入院したときに入院給付金を支払うのは[[家族型入院特約]]。', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="['2025a24', '2025b24', '2025c11', '2025c24']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '正しい',
                        '正しい',
                        '新種保険のうち、[[賠償責任保険]]は、他人に対する損害賠償などに備える保険で、[[費用保険]]は、医療や介護にかかる費用などに備える保険である。', //p203
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険法と生命保険契約の形態"
                    :relatedProblems="['2025a25', '2025a40', '2025c40']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '傷害疾病定額保険契約',
                        '不利',
                        '片面的強行規定',
                        '自己のためにする',
                        '自己の生命', // 問25〜29
                    ]"
                    :labels="[
                        'イ', //25
                        'ウ', //26
                        'カ', //27
                        'ケ', //28
                        'コ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="['2025a30', '2025b13', '2025c14']"
                    :contents="[
                        // rev: 2026-05-27 確認済み
                        '保険法',
                        '信義誠実の原則',
                        '全保険期間',
                        '死亡させる意思',
                        'は含まれない', // 問30〜34
                    ]"
                    :labels="[
                        'カ', //30
                        'イ', //31
                        'ク', //32
                        'オ', //33
                        'ケ', //34
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
                        // rev: 2026-05-27 確認済み
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
                            // rev: 2026-05-27 確認済み
                            questionTitle: '生命保険契約の形態',
                            relatedProblems: ['2025a25', '2025a40', '2025c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '保険契約の解除請求',
                            relatedProblems: ['2025a41', '2025c41'],
                            content: '保険者 → 保険契約者', //p43
                        }, //41
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '保険契約の解除・解約・取消し・無効',
                            relatedProblems: ['2025a4', '2025b4', '2025c4', '2025a42', '2025b42', '2025c42'],
                            content: '保険法では保険料不可分の原則が[[採用されていない]]ため、（中略）保険料の残額を保険契約者に[[支払う]]旨が保険約款に規定されている。', //p44
                        }, //42
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '危険選択の意義',
                            relatedProblems: ['2025a43'],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '重複加入の有無',
                            relatedProblems: ['2025a44'],
                            content: '死亡保障、入院保障のある契約については「契約内容登録制度」および「[[契約内容照会制度]]」により、情報交換を行っている。また、保険金等の請求に際し、「[[支払査定時照会制度]]」により契約内容等の[[照会]]を行っている。', //p57
                        }, //44
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '超過危険の種類',
                            relatedProblems: ['2025a6', '2025b6', '2025c6', '2025a45', '2025b45', '2025c45'],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '死亡率と生存率の関係',
                            relatedProblems: ['2025a46'],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: ['2025a47'],
                            content: '平均寿命 ↔︎ 平均余命', //p79
                        }, //47
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '利率変動型積立終身保険（アカウント型保険）',
                            relatedProblems: ['2025a48', '2025b48', '2025c48'],
                            content: '保障の範囲を広げたり保障額を増やしたりする場合は、[[告知（または診査）が必要]]である。', //p136-137
                        }, //48
                        {
                            // rev: 2026-05-27 確認済み
                            questionTitle: '特定の疾病や損傷の治療に備える特約',
                            relatedProblems: ['2025a49', '2025c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2026c" next-route="daigaku.shikumi-kojin2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
