<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2024年度 フォームA";
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
                    :relatedProblems="['2024a1']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '登録 → 免許', //p3
                        '免許 → 登録', //p3
                        '生命保険会社は、自らの商号（株式会社の場合）または名称（相互会社の場合）の中に、[[生命保険会社であることを示す文字を使用しなければならない]]。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始の時期"
                    :relatedProblems="['2024a2', '2024b2', '2024c2']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '保険契約の成立と保険期間の開始は、[[必ずしも一致しない]]ことに注意が必要である。', //p10
                        '「契約日」とは、[[保険契約の成立日を意味するものではなく]]、保険期間をはじめ保険料払込期間、被保険者が自殺した場合の会社の免責期間等、保険約款における期間の起算日を意味するものである。', //p12
                        '保険約款に定める責任開始日と団体扱特約等に定める契約日との間に保険事故が発生した場合は、保険約款に定める責任開始日を契約日として[[保険金等を支払う]]ものと約定されているのが一般的である。', //p13
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="['2024a3', '2024b14', '2024c14']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '集金担当者等の取扱者による立替入金は「保険業法」で[[禁じられている]]。', //p13
                        '同一とは評価されない → 同一に評価される', //p14
                        '保険契約者が[[払込期月中の営業時間内に金融機関等の窓口やATM等で払い込んだ時点]]で、保険料を払い込んだことになる。', //p16
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :relatedProblems="['2024a4']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '[[「前納」]]は、年払または半年払の契約の場合に、将来払い込むべき保険料の一部または全部をまとめて生命保会社に払い込む方法であり、[[「一括払」]]は、月払契約の場合に1年分または数ヶ月分の保険料をまとめて生命保険会社に払い込む方法である。', //p21
                        '保険金受取人 → 保険契約者', //p21
                        '[[一時払保険料]]は保険料の払込免除を考慮せず全保険期間を１保険料期間していること等により、一時払保険料の方が全期前納保険料よりも[[少なくなる]]。', //p22
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :relatedProblems="['2024a5', '2024b4']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '失踪宣告があると、普通失踪者は[[7年の期間が満了したとき]]に死亡したものとみなされる。', //p23
                        '戦地にいたり沈没した船舶に乗っていたりしたというような危難にあって消息を絶ったまま1年以上生死がわからないとき（特別失踪）に、[[利害関係人]]の請求を受けて家庭裁判所が宣告するものである。', //p23
                        '被保険者が責任開始期前にすでに障害状態になっていた場合でも、その障害状態と因果関係がない、責任開始期以後に発生した傷害または疾病を原因とする障害状態が新たに加わって高度障害状態になったときは、[[高度障害保険金を支払う]]。', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者集団"
                    :relatedProblems="['2024a6', '2024b6', '2024c6']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '④[[大数の法則が作用し得る程度に十分大量の被保険者が存在すること]]', //p67
                        '厚生労働省 → 金融庁長官', //p67
                        '正しい',
                        'これらは[[新たな危険の増加を伴う場合もある]]ので、それぞれに対して申込みの諾否決定を行ったり、危険選択を追加したりすることによって、被保険者集団の保険事故発生率の安定化を図っている。', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2024a7', '2024b16', '2024c25']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '生命保険会社指定の医師による診査の場合は、医師が問診により聞き取った告知内容について、[[告知義務者本人が内容確認したうえで署名（自署）する]]。', //p61
                        '個別方式は行われていない → 一括方式と個別方式が行われている', //p63
                        '生命保険面接士は、生命保険協会の認定試験に合格した者のうちから生命保険会社が指名した者で、被保険者との面接においては、告知書記載事項の確認と[[外観の観察を実施する]]。', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :relatedProblems="['2024a8']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        'この制度は、[[保険約款に規定がある]]契約についてのみ適用される。', //p112
                        '（自動）振替貸付を行った場合でも、保険約款では猶予期間満了後一定期間内（通常3カ月以内）に、保険契約者が払済保険への変更を請求したときは、[[（自動）振替貸付を行わなかったものとして取り扱う]]旨を規定している。', //p112
                        '責任準備金 → 解約返戻金', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="['2024a9', '2024b9', '2024c9']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '払済保険は、変更時の解約返戻金（契約上の貸付金がある場合には、その元利金を[[差し引いた残額]]）をもとに保険期間を変えずに、[[一時払養老保険]]もしくは元契約の主契約と同じ種類の保険に変更し、保険契約の存続を図るものである。', //p114
                        '変更時点の計算基礎率 → 元契約と同じ計算基礎率', //p114
                        '元利金を差し引く前の金額 → 元利金を差し引いた残額', //p115
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="['2024a10', '2024b10', '2024c10']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '保険期間が一定期間の定期タイプと、[[一生涯保障が継続する終身タイプがある]]。', //p140
                        '医療保険には、一般に[[満期保険金はない]]が、定期タイプには、保険期間満了時までに入院がなかった場合などに、健康祝金を支払う商品もある。', //p140
                        'がん以外の死亡に対する保険金は一般に[[少額]]で、[[保険金がないものもある]]。', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約の種類"
                    :relatedProblems="['2024a11']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '特定疾病保険金を支払った時点で、[[特約は消滅する]]。', //p156
                        '不慮の事故または特定感染症で死亡または高度障害状態に該当したとき、主契約の死亡・高度障害保険金に[[上乗せして]]災害死亡・高度障害保険金を支払う。', //p157
                        '余命1年6ヶ月 → 余命6ヶ月', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="['2024a12', '2024b24']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        'それぞれの根拠法によって、「[[営利を目的としてはならない]]」と規定されている。', //p165
                        '共済の場合は、従来から多くの共済団体が、[[生命共済と損害共済の双方をそれぞれの根拠法により取り扱っている]]。', //p165
                        '共済の場合は、生命共済、損害共済とも、共済団体ごとに取り扱う[[共済種類が限られている]]。', //p165
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :relatedProblems="['2024a13', '2024c5']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '相手方に発信した時点 → 相手方に到達した時点', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約・取消し・無効等"
                    :relatedProblems="['2024a14', '2024b5']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '生命保険会社が保険契約を取り消すことができる場合として、保険約款では、「被保険者の契約年齢の誤りによる生命保険会社所定の範囲外」「保険契約者または被保険者の詐欺による契約」を定めており、[[後者の場合、既払込保険料は返還されない]]。', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="['2024a15', '2024b15', '2024c15']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '正しい',
                        '5年 → 3年', //p32
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="['2024a16', '2024b3']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '消滅時特別配当についても[[失効中の期間を含めて]]計算する。', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
                    :relatedProblems="['2024a17', '2024b17', '2024c17']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '死亡指数が100であれば、基準となる集団と同じ死亡率であることを意味し、150であれば50％[[高い]]死亡率であることを意味している。', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果の検証"
                    :relatedProblems="['2024a18', '2024b18', '2024b43', '2024c30']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '保険料算定の基礎表の死亡率（予定死亡率）と実際死亡率との差が死差益の源泉となるが、これは徴収した保険料に対する支払保険金の実績の評価にとどまり、[[将来の危険選択に活かすという目的には適さない]]。', //p69
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :relatedProblems="['2024a19', '2024b19', '2024c19']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '正しい',
                        '（利差配当率）×（[[保険年度末保険料積立金]]）', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :relatedProblems="['2024a20']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '配当金を、毎年の契約応当日に保険契約者に現金で[[支払う]]。', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :relatedProblems="['2024a21', '2024c20']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '死差益 = [[（予定死亡率 – 実際死亡率）]]× 危険保険金', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="['2024a22', '2024b22', '2024c22']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '保険料が一定で、契約後一定期間ごとに保険金額が減っていく逓減定期保険特約や保険金額が増えていく逓増定期保険特約も[[ある]]。', //p156
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="主契約の種類"
                    :relatedProblems="['2024a23', '2024c23']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '[[責任開始前に発病した病気等であっても、責任開始後に症状が悪化したことを原因とする入院・手術の場合]]は、給付金の支払対象とするのが一般的である。', //p151
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="['2024a24', '2024b12', '2024c24']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '正しい',
                        '実損払方式 → 定額給付方式', //p204
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="危険の要素"
                    :relatedProblems="['2024a25']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '体格',
                        '過重体',
                        '過軽体',
                        '職業',
                        '申込動機', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'ケ', //26
                        'ウ', //27
                        'キ', //28
                        'コ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="配当の種類と仕組み"
                    :relatedProblems="['2024a30']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '通常配当',
                        '内部留保',
                        '価格変動準備金',
                        '消滅時特別配当',
                        '消滅事由', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'ケ', //31
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
                    questionTitle="チルメル式保険料積立金"
                    :relatedProblems="['2024a35', '2024b35', '2024c35']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '付加保険料',
                        '純保険料',
                        '貯蓄保険料',
                        '危険保険料',
                        '平準純保険料式', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'オ', //36
                        'ケ', //37
                        'ア', //38
                        'キ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '生命保険契約の定義',
                            relatedProblems: ['2024a40', '2024b40', '2024c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '年払・半年払保険料の取扱い',
                            relatedProblems: ['2024a41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: 'BMI',
                            relatedProblems: ['2024a42', '2024b42', '2024c42'],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '契約確認',
                            relatedProblems: ['2024a43', '2024b44'],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '死亡率と生存率の関係',
                            relatedProblems: ['2024a44'],
                            content: '生存率 = 1 - 死亡率、死亡率 = 1 - 生存率', //p79
                        }, //44 p79
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '生命保険会社で使用している経験表',
                            relatedProblems: ['2024a45'],
                            content: '2021 → 2018', //p78
                        }, //45
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '平均寿命・平均余命',
                            relatedProblems: ['2024a46', '2024b46', '2024c46'],
                            content: '平均寿命 ↔︎ 平均余命', //p79
                        }, //46
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '個人年金保険の年金種類の変更',
                            relatedProblems: ['2024a47', '2024b47', '2024c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '特定疾病保障保険（三大疾病保障保険）',
                            relatedProblems: ['2024a48', '2024b48'],
                            content: '特定疾病保険金を支払った時点で、[[契約は消滅する]]。', //p127
                        }, //48
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '少額短期保険業',
                            relatedProblems: ['2024a49', '2024c49'],
                            content: '少額短期保険業とは、保険業法上の保険業のうち、一定の事業規模の範囲内において、保険金額が少額で、[[生命保険・医療保険については保険期間1年]]（[[損害保険については2年]]）以内の保険引受のみを行う事業をいう。', //p198
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2025c" next-route="daigaku.shikumi-kojin2024b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
