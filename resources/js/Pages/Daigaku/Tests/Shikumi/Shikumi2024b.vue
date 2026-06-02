<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2024年度 フォームB";
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
                    questionTitle="生命保険契約の形態"
                    :relatedProblems="['2024b1']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '自己のためにする → 他人のため', //p2
                        '他人のため → 自己のため', //p2
                        '自己の生命 → 他人の生命', //p3
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
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="['2024a16', '2024b3']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '大半の生命保険会社が「猶予期間の満了日の[[翌日]]から効力を失う」と規定している。', //p34
                        '保険契約者に解約返戻金の請求権は[[存続する]]。', //p35
                        '正しい',
                        '消滅時特別配当についても[[失効中の期間を含めて]]計算する。', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
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
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解除・解約・取消し・無効"
                    :relatedProblems="['2024a14', '2024b5']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '解約させる → 消滅させる', //p39
                        '正しい',
                        '契約日（または復活日）からの[[年月にかかわらず]]「詐欺による保険契約の取消し」となることがある。', //p42
                        '解除 → 無効', //p42
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
                    questionTitle="身体的危険"
                    :relatedProblems="['2024b7', '2024c16']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '生命保険においては、身長と体重との関係によって、体格を[[過重体・平均体・過軽体]]に分類している。', //p49
                        '正しい',
                        '既往歴 → 現病歴', //p50
                        '現病歴 → 既往歴', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業保険料の構成と計算基礎"
                    :relatedProblems="['2024b8']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '純保険料 → 付加保険料', //p89
                        '正しい',
                        '付加保険料 → 純保険料', //p89
                        '予定利率 → 予定事業費率', //p89
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
                        '一般に[[満期保険金はない]]が、定期タイプには、保険期間満了時までに入院がなかった場合などに、健康祝金を支払う商品もある。', //p140
                        'がん以外の死亡に対する保険金は一般に[[少額]]で、[[保険金がないものもある]]。', //p141
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :relatedProblems="['2024b11']"
                    :contents="[
                        // rev: 2026-06-02 確認済み
                        '病気や[[不慮の事故（ケガ）]]で所定の手術をしたときに、手術給付金を支払う。', //p157
                        '災害入院特約は、不慮の事故（ケガ）で[[入院したとき]]に[[入院給付金を支払う]]。', //p157
                        '退院後だけでなく、[[入院前の通院も保障するタイプを取り扱う生命保険会社もある]]。', //p158
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :relatedProblems="['2024a24', '2024b12', '2024c24']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '「積立型」は、「掛捨型」に貯蓄機能を付け加えたもので、満期時に満期返戻金として支払うものの他、[[年金として支払うものもある]]。', //p204
                        'の保険金額の設定にあたり、各損害保険会社では、それぞれ[[引受限度額を設けている]]。', //p205
                        '告知は不要 → 告知が必要', //p206
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の当事者"
                    :relatedProblems="['2024b13', '2024c3']"
                    :contents="[
                        // rev: 2026-06-02 確認済み
                        '正しい',
                        '正しい',
                        '法人が保険契約者となる場合、申込書の保険契約者欄に、法人が登記している正式な商号または名称、その法人の代表機関であることを示す肩書とその者の氏名の[[３点]]を記入のうえ、職印を押すことが必要である。', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="['2024a3', '2024b14', '2024c14']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '保険料が[[団体（集団）から生命保険会社に払い込まれたとき]]に保険料を払い込んだことになる。', //p17
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
                    questionTitle="危険選択の手段"
                    :relatedProblems="['2024a7', '2024b16', '2024c25']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '生命保険会社指定の医師による診査の場合は、医師が問診により聞き取った告知内容について、[[告知義務者本人が内容確認したうえで署名（自署）する]]。', //p61
                        '正しい',
                        '正しい',
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
                    questionTitle="配当の割当て"
                    :relatedProblems="['2024b20', '2024c18']"
                    :contents="[
                        // rev: 2026-06-02 確認済み
                        '正しい',
                        '割当てを行われない → 割り当てを行なっている', //p105
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :relatedProblems="['2024b21']"
                    :contents="[
                        // rev: 2026-06-02 確認済み
                        '正しい',
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
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
                    questionTitle="特定の疾病や損傷の治療に備える特約"
                    :relatedProblems="['2024b23']"
                    :contents="[
                        // rev: 2026-06-02 確認済み
                        '正しい',
                        '正しい',
                        '重度慢性疾患保険金を支払った時点で、[[特約は消滅する]]。', //p159
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :relatedProblems="['2024a12', '2024b24']"
                    :contents="[
                        // rev: 2026-06-01 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する[[販売チャネルはない]]。', //p165
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="['2024b25']"
                    :contents="[
                        // rev: 2026-06-02 確認済み
                        '保険法',
                        '信義誠実の原則',
                        '全保険期間',
                        '死亡させる意思',
                        '含まれない', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'エ', //26
                        'キ', //27
                        'カ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="条件体保険の特別条件"
                    :relatedProblems="['2024b30']"
                    :contents="[
                        // rev: 2026-06-02 確認済み
                        '逓増性',
                        '逓減性',
                        '5',
                        '少なく',
                        '一時払', // 問30〜34
                    ]"
                    :labels="[
                        'ケ', //30
                        'イ', //31
                        'エ', //32
                        'コ', //33
                        'ア', //34
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
                            // rev: 2026-06-02 確認済み
                            questionTitle: '承諾前の保険事故',
                            relatedProblems: ['2024b41'],
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
                            questionTitle: '選択効果の検証',
                            relatedProblems: ['2024a18', '2024b18', '2024b43', '2024c30'],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-01 確認済み
                            questionTitle: '契約確認',
                            relatedProblems: ['2024a43', '2024b44'],
                            content: '契約確認とは、この不実な告知などによる不正な加入を防止するために、[[契約成立前または契約成立後]]に告知内容の確認や職業・生活環境の実情把握などを行う制度である。', //p60
                        }, //44
                        {
                            // rev: 2026-06-02 確認済み
                            questionTitle: '転換契約の募集に際しての法令上の規制',
                            relatedProblems: ['2024b45'],
                            content: '正しい',
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
                            // rev: 2026-06-02 確認済み
                            questionTitle: 'CO・OP共済',
                            relatedProblems: ['2024b49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2024a" next-route="daigaku.shikumi-kojin2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
