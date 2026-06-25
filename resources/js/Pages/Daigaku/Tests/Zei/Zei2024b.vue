<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2024年度 フォームB";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :relatedProblems="['2024b1']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '2分の1 → 3分の1', //p37
                        '1500万円 → 2000万円', //p38
                        '正しい',
                        '所得税の納付期限は、申告期限と同じ3月15日であるが、確定申告で納付することになった税額の2分の1以上を3月15日までに納付すれば、[[残額については5月31日までの延納が認められる]]。', //p39
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人事業税および法人事業税"
                    :relatedProblems="['2024b2']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '法人税の計算においては[[損金の額に算入される]]。', //p219
                        '正しい',
                        '事業を行う法人はすべて納税義務者であるが、国、都道府県、市町村等の公共法人、[[林業、鉱物の掘採事業等を行う法人]]には課税されない。', //p219
                        '事業年度の所得金額 → 事業年度の収入金額', //p219
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会政策に配慮した所得控除に関する知識（生命保険料控除）"
                    :relatedProblems="['2024a4', '2024b3']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '親族は、[[必ずしも生計を一にしていなくてもよい]]。', //p71
                        '保険料（自動）振替貸付となった契約は、責任準備金の一部を保険料に充当するため、[[支払保険料に該当するので、生命保険料控除の対象となる]]。', //p76
                        '前納保険料については、[[その年中に到来する払込期日に対応する保険料相当額]]が生命保険料控除の対象となる。', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2024b4', '2024c19']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '家屋は、[[固定資産税評価額相当額]]で評価する。', //p114
                        '上場株式は、課税時期（相続開始の日）の最終価格（終値）、課税時期の属する月の最終価格の月平均額、[[課税時期の属する月の前月の最終価格の月平均額]]、[[課税時期の属する月の前々月の最終価格の月平均額]]のいずれか[[低い価額]]で評価する。', //p114
                        '100% → 70%', //p115
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の承認と放棄"
                    :relatedProblems="['2024a5', '2024b5', '2024c5']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '包括承認 → 単純承認', //p94
                        '[[共同相続人全員]]で家庭裁判所に申述しなければならない。', //p95
                        '相続分には、「指定相続分」と「法定相続分」があり、「[[指定相続分]]」が優先される。', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし贈与財産"
                    :relatedProblems="['2024b6']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '保険料の一部を保険金受取人以外の者が負担していた場合には、[[その負担割合に応じた金額]]が贈与により取得したものとみなされる。', //p143
                        '正しい',
                        '著しく低い価額の対価で財産の譲渡を受けた場合には、[[その対価とその財産の譲渡のときにおける時価（相続税評価額）との差額に相当する金額を、その財産を譲渡した者から贈与されたものとみなされる]]。', //p144
                        '財産を信託するときには、信託契約により委託者が受益者を指定することになっているが、この受益者が委託者以外の者であるときは、その信託行為があったときに、受益者がその信託受益権をその委託者から[[贈与によって取得したものとみなされる]]。', //p144
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺贈と遺言"
                    :relatedProblems="['2024a7', '2024b7', '2024c7']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '贈与税 → 相続税', //p104
                        '遺言の効力は、[[遺言者の死亡のときから生ずる]]。したがって、遺言書作成時に遺言は成立するが、遺言者が生存中は権利義務は生じない。', //p105
                        '法定遺贈 → 包括遺贈', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2024a8', '2024b8', '2024c8']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '相続時精算課税制度の適用対象者は、60歳以上の贈与者の推定相続人である子または孫で、[[子の代襲相続人も含む]]。', //p156
                        '相続時精算課税制度の適用対象となる贈与財産の種類、金額、[[贈与回数に制限はない]]。', //p155
                        '1月25日から3月15日 → 2月1日から3月15日', //p155
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険に関する税務"
                    :relatedProblems="['2024a9', '2024b9', '2024c9']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '一時所得の金額は、[[満期保険金（または祝金）－（既払込保険料合計額－既受取祝金の合計額）－50万円（特別控除額）]]で計算する。本問の場合、100万円 －（200万円 －（30万円 ＋ 70万円））－50万円 ＝ －50万円となり、[[一時所得は発生しない]]。', //p165
                        '一時所得の金額 ＝ 死亡保険金（給付金）＋  積立配当金 －（既払込保険料合計額 － 既受取済祝金の合計額）[[－50万円（特別控除額）]]', //p165
                        '以後、祝金や満期保険金の支払いがあった場合には[[一時所得としての課税対象となる]]。', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人年金保険に関する税務"
                    :relatedProblems="['2024a20', '2024b10']"
                    :contents="[
                        // rev: 2026-06-26 確認済み
                        '所定の要件を満たさない個人年金保険の保険料は、[[生命保険料控除の対象となる]]。', //p166
                        '正しい',
                        '既払込保険料総額 → 解約返戻金の額', //p168
                        '毎年支払われる年金の受取時には、[[保険料負担者に関係なく、雑所得として所得税・住民税が課税される]]。', //p168
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人住民税"
                    :relatedProblems="['2024b11']"
                    :contents="[
                        // rev: 2026-06-26 確認済み
                        '正しい',
                        '法人の道府県民税と法人の市町村民税も、課税の基準は[[法人税割]]と均等割からなっている。', //p217
                        '均等割額（標準税率）は、道府県民税および市町村民税のそれぞれについて、[[法人の規模等に応じて定められている]]。', //p218
                        '２以上の都道府県または市町村に事務所等を有する法人にあっては、法人税額を[[各都道府県もしくは市町村に有する事務所または事業所の従業員数で分割して納税する]]。', //p218
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け生命保険に係る課税関係"
                    :relatedProblems="['2024b12']"
                    :contents="[
                        // rev: 2026-06-26 確認済み
                        '特別条件付契約の特別保険料（割増保険料）は[[損金算入できる]]。', //p226
                        '受取人である被保険者（従業員）本人は[[非課税]]となる。', //p226
                        '正しい',
                        '受取人である従業員等の側に保険金・給付金が直接支払われるので、[[法人には課税関係は生じない]]。', //p242
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得の種類"
                    :relatedProblems="['2024a1', '2024b13']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[総合課税の対象となる譲渡所得と分離課税の対象となる譲渡所得があり]]、また、資産の譲渡でも譲渡所得に該当しない所得がある。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人住民税"
                    :relatedProblems="['2024a14', '2024b14', '2024c14']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '150万円 → 135万円', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続制度"
                    :relatedProblems="['2024a15', '2024b15']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '廃除は[[遺言でも行うことができる]]。', //p94
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職金・企業年金についての税金の知識"
                    :relatedProblems="['2024a16', '2024b16', '2024c16']"
                    :contents="[
                        // rev: 2026-06-25 確認済み
                        '正しい',
                        '正しい',
                        '住民税は、通常前年の所得に対して課税される「前年所得課税（翌年に課税）」であるが、退職所得の住民税に関しては、[[「現年課税（収入のあった年に課税）」]]であり、他の所得とは別に分離課税として住民税を計算する。', //p84
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告の訂正と税務調査・処分"
                    :relatedProblems="['2024b17', '2024c17']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '訂正申告 → 更正の請求', //p61
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2024b18']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '5年 → 2年', //p145
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算"
                    :relatedProblems="['2024a17', '2024b19', '2024c6']"
                    :contents="[
                        // rev: 2026-06-22 確認済み
                        '正しい',
                        '正しい',
                        '香典返礼費用、墓碑や墓地の買入費用または墓地の借入料は[[葬式費用に含めない]]。', //p123
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :relatedProblems="['2024a19', '2024b20']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '正しい',
                        '正しい',
                        '満期保険金受取人（妻）が実際に取得した額[[800万円（1,000万円－200万円）]]に対し、みなし贈与財産として贈与税が課税される。', //p181
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2024a21', '2024b21', '2024c21']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="同族会社の特別規定"
                    :relatedProblems="['2024a22', '2024b22']"
                    :contents="[
                        // rev: 2026-06-24 確認済み
                        '同族会社とは、[[3人]]以下の株主等ならびにこれらと特殊な関係にある者（法人を含む）が、法人の発行済株式総数または出資の金額および議決権等について[[50％]]超を保有している会社である。', //p213
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の損金についての特別規定"
                    :relatedProblems="['2024a23', '2024b23', '2024c23']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '寄附金は、法人の事業に直接関係のない支出であり、[[損金算入には一定の制限が設けられている]]。', //p209
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="福利厚生プラン"
                    :relatedProblems="['2024b24', '2024c24']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '「年」満期で保険期間が全員同一の場合は、被保険者全員の契約が同時に満期を迎えるため、満期保険金と資産計上していた保険料積立金との差額が[[雑収入となり、大幅な利益が上がる可能性がある]]。', //p255
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="給与所得者の税金"
                    :relatedProblems="['2024b25']"
                    :contents="[
                        // rev: 2026-06-26 確認済み
                        '事業所得',
                        '10%',
                        '利子所得',
                        '申告納税',
                        '賦課課税', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'カ', //26
                        'イ', //27
                        'コ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2024a30', '2024b30', '2024c30']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '遺族',
                        '日本年金機構',
                        '裁定',
                        '5.105',
                        '400万円', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'オ', //31
                        'ケ', //32
                        'エ', //33
                        'カ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人税"
                    :relatedProblems="['2024b35', '2024c35']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '非課税',
                        '日本国内',
                        '益金算入・損金不算入',
                        '申告調整',
                        '配当', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'コ', //36
                        'カ', //37
                        'イ', //38
                        'ク', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '配当所得に対する課税の特例',
                            relatedProblems: ['2024b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-22 確認済み
                            questionTitle: '譲渡所得',
                            relatedProblems: ['2024b41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '住宅借入金等特別控除（住宅ローン控除）',
                            relatedProblems: ['2024a2', '2024b42', '2024c25'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '退職後、再就職しなかった場合の確定申告',
                            relatedProblems: ['2024b43'],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-26 確認済み
                            questionTitle: '相続税の非課税財産',
                            relatedProblems: ['2024a44', '2024b44', '2024c44'],
                            content: '非課税財産に[[該当する]]。', //p118
                        }, //44
                        {
                            questionTitle: '遺留分の放棄',
                            relatedProblems: ['2024b45'],
                            content: '',
                        }, //45
                        {
                            // rev: 2026-06-15 確認済み
                            questionTitle: '暦年課税の贈与税額計算の仕組み',
                            relatedProblems: ['2024a46', '2024b46', '2024c46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: 'リビング・ニーズ特約',
                            relatedProblems: ['2024b47'],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '棚卸資産の評価',
                            relatedProblems: ['2024b48'],
                            content: '',
                        }, //48
                        {
                            // rev: 2026-06-26 確認済み
                            questionTitle: '法人が受け取る保険金・給付金等',
                            relatedProblems: ['2024a49', '2024b49', '2024c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2024a" next-route="daigaku.zei2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
