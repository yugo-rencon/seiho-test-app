<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2025年 9月〜3月実施 フォームD";
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
                    questionTitle="個人を対象とした主な保険種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '死亡または高度障害時には、[[養老保険と定期保険特約を合わせた保険金]]が支払われ、満期のときには、[[満期保険金]]が支払われる（[[死亡保険金と満期保険金は同額ではない]]）。', //p31
                        '正しい',
                        '保証期間中は[[生死に関係なく]]年金が支払われ、その後も生存しているときには、終身にわたって年金が支払われる。', //p32
                        'がん・急性心筋梗塞・脳卒中の三大生活習慣病にかかった場合に、死亡保険金と同額の特定疾病保険金が生存中に支払われ、[[その時点で契約は消滅する]]。', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '正しい',
                        '生命表から、各年齢者が今後平均して何年間生存できるかがわかる。この年数を[[平均余命]]といい、０歳の[[平均余命]]を[[平均寿命]]と呼んでいる。', //p39
                        '予定利率は、[[高く]]見込めばそれだけ保険料を安くすることができる。', //p40
                        '契約者が生命保険会社へ払い込む保険料は、①保険金を支払うための財源となる[[純保険料]]、②生命保険会社が保険事業を維持・管理していくために必要な費用としての[[付加保険料]]の２つの部分から成り立っている。', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="「死亡保険金」を支払わない場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '被保険者が[[契約日または復活日から所定期間以内]]に自殺したとき、「死亡保険金」は支払われない。', //p54
                        '正しい',
                        '契約者が過失によって被保険者を死亡させたとき、「死亡保険金」を[[支払う場合もある]]。', //p55の（注）
                        '保険の計算基礎に及ぼす影響が少ないと生命保険会社が認めた場合には、[[保険金を全額または削減して支払うことがある]]。', //p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込みが困難になった場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '既払込保険料総額 → 解約返戻金', //p60
                        '解約返戻金をもとに計算した保険期間が、[[元の契約の満期を超える場合は満期までとし]]、満期のときには生存保険金を支払う。', //p61
                        '正しい',
                        '失効 → 解約', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '契約の失効や解約は、一般に危険度の[[低い]]契約に多いと考えらる。', //p67
                        '契約の選択とは、[[生命保険会社が契約希望者を選別]]し、契約の諾否、保険料率、保険金額、保険種類などの契約条件を決めること。', //p67
                        '契約の選択に必要な情報について、[[ありのままを生命保険会社へ報告しなければならない]]。', //p68
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '特約は、[[もとになる契約（主契約）なしで単独で契約することはできず]]、また、特約の種類によっては、他の特約とあわせて契約しなければならないものもある。', //p66
                        '特約商品としては、災害割増特約、傷害特約、[[災害入院特約、疾病入院特約]]、生活習慣病入院特約（成人病入院特約）などがある。', //p66
                        '定款 → 約款', //p66
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）による取引時確認"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '100万円 → 200万円', //p81
                        'お客さまに運転免許証や年金手帳等、マイナンバーカード（個人番号カード）、印鑑登録証明書などの公的証明書を提示または送付いただき、氏名・生年月日・[[住居]]の確認をする。', //p81-82
                        '正しい',
                        'お客さまと[[実際に手続きをする担当者（代理人）本人]]の双方の確認が必要。', //p82
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        'お客さまの解約理由によっては、解約せずに別の方法（契約者貸付や保険金額の減額、払済保険等への変更など）で対処できる場合があるため、[[お客さまに別の対応方法があることを案内]]し、検討していただくことも大切。', //p98
                        '今後新たに契約加入する場合は保険料が高くなることや[[健康状態の変化によっては加入いただけない]]こともある。', //p98
                        '解約返戻金は、通常の場合、既払込保険料総額よりも[[少なくなる]]。', //p98
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券（公社債など）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '元本および利子が[[保証されている]]。', //p110
                        '債券には、買い入れるときに利子を前取りする「[[割引債]]」と、一定の利子が一定の期日に支払われる「[[利付債]]」がある。', //p110
                        '個人向け国債は、[[半年ごとに利率が見直される変動金利の10年満期と、固定金利の5年満期・3年満期]]の3つがある。', //p111
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '公的扶助制度 → 社会扶助制度', //p116
                        '社会扶助制度 → 公的扶助制度', //p11６
                        '老齢者、身体障害者、知的障害者、[[児童および母子世帯]]の福祉を図ることを目的とした制度がある。', //p116
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '700万円 → 550万円', //p134
                        '正しい',
                        '企業 ↔︎ 従業員', //p135
                        '財形制度にもとづく保険は、多くの個人保険とは異なり、積立金等の計算基礎（予定利率）が積立期間中および据置期間中でも[[変更される場合がある]]。', //p135
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '第Ⅰ種から[[第Ⅳ種]]の[[４種類]]に区分されている。', //p129
                        '[[業務上・業務外を問わず]]、死亡・高度障害になった場合は保険金を支払う。', //p130
                        '企業が負担した保険料は、原則として[[全額]]が損金算入（個人事業主は必要経費算入）でき、しかも従業員に対する給与所得としての課税もない。', //p130
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を取り巻く生活環境の変化"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '地域共同体意識 → 自己責任意識', //p22
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '各種特約の保障は[[なくなる]]。', //p60-61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険金 → 保険料', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '3回 → 2回', //p61
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険契約の解除の取り扱いについて[[規定されている]]。', //p82-83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="法令上の禁止行為（虚偽の説明となる事例）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '虚偽の説明 → 不適正な乗換募集', //p84
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約失効・復活手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '復活請求書（申込書）と同時に[[告知書の提出（場合によっては診査）が必要]]。', //p97
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人としての具体的対応と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '保険証券 → ご契約のしおり─定款・約款', //p95
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="信託銀行の業務・商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '不動産の管理を目的とした不動産管理信託や、土地所有者が土地を信託し収益を信託配当として受け取る土地信託などの不動産の信託の他、[[不動産の売買・仲介、不動産の鑑定評価、不動産のコンサルティングサービスなどの不動産業務を取り扱っている]]。', //p109
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '損害保険は通常、[[事故による現実の損害額だけが、契約金額の範囲内で支払われるのが特徴]]である。', //p105
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '「MRF（マネー・リザーブ・ファンド）」はこの[[公社債投資信託]]の一種。', //p113
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除を受けるための手続き"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '事業所得者などの申告納税者は、「確定申告書」を原則として翌年の[[2月16日から3月15日まで]]に税務署に提出して控除を受ける。', //p142
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="少額短期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '1年以内',
                        '1,000万円',
                        'セーフティネット',
                        '内閣総理大臣',
                        '保険業法', // 問25〜29
                    ]"
                    :labels="[
                        'ク', //25
                        'ア', //26
                        'カ', //27
                        'ウ', //28
                        'オ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="後期高齢者医療制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '65歳',
                        '広域連合',
                        '1割',
                        '3割',
                        '能力に応じた公平な', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'キ', //31
                        'ウ', //32
                        'エ', //33
                        'コ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="遺族生活資金と老後生活資金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '7,182',
                        '9,450',
                        '9,072',
                        '3,510',
                        '12,582', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'ク', //36
                        'キ', //37
                        'イ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: 'コンプライアンスと基本的姿勢',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '契約転換制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //41
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '保険業法',
                            relatedProblems: [],
                            content: '保険契約締結に関して「媒介」をするのか、「代理」をするのかを[[明示しなければならない]]。', //p73
                        }, //42
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '2年 → 1年', //p77
                        }, //43
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '銀行窓販',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: 'JA共済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '預金の種類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '個人向け融資（ローン）の種類',
                            relatedProblems: [],
                            content: '一般に、有担保ローンは無担保ローンに比べ融資限度額は[[大きく]]なり、金利は[[低く]]なる。', //p108
                        }, //47
                        {
                            // rev: 2026-06-05 確認済み
                            questionTitle: '相続税',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '経営者保険',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2025-h2-c" next-href="/senmon/2024-h1-a" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
