<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2025年 4月〜8月実施 フォームA";
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
                    questionTitle="生命保険の現状"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '正しい',
                        '最近の特徴としては、保険金・給付金・年金などの諸支払いが[[増加]]してきており、とりわけ、[[手術給付金]]などの医療給付金の支払額・支払件数が[[増加]]している。', //p19
                        '年齢別の死因をみると、20歳代・30歳代では[[自殺や不慮の事故および悪性新生物（ガン）]]が、40歳代以上の中高齢者層では[[悪性新生物（ガン）や心疾患]]などが上位を占めている。', //p24
                        '60%以上 → 約39%', //p25
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
                        '各生命保険会社では、平均寿命が延びたために低い予定死亡率表を用いたり、生命保険会社の経営努力によって予定事業費率を下げたり、市中金利や運用状況により予定利率を上下させたりするなどにより、予定率の見直しを行い、[[保険料の改定を行うことがある]]。', //p40-41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="約款とご契約のしおり"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '保険金受取人 → 契約者', //p45
                        '保険契約者ごと → 保険種類ごと', //p45
                        '法務大臣 → 内閣総理大臣', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '生命保険募集人がお客さまから口頭で告知を受けても、[[生命保険会社が告知を受けたことにはならない]]ため、告知書に告知義務者自身で記入いただくことが重要。', //p47
                        '1年 → 2年', //p48
                        '正しい',
                        '告知義務違反によって保険契約を解除した場合、生命保険会社は[[解約返戻金があれば、契約者に対してこれを支払う]]。', //p48
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金を支払わない場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '被保険者が[[契約日または復活日から所定期間以内]]に自殺したとき、「死亡保険金」は支払われない。', //p54
                        '受取人が複数の場合で、[[被保険者の殺害に全く無関係な受取人に対しては、その人の受け取るべき割合の保険金を支払う]]。', //p54
                        '正しい',
                        '保険の計算基礎に及ぼす影響が少ないと生命保険会社が認めた場合には、[[保険金を全額または削減して支払うことがある]]。', //p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '既払込保険料総額 → 解約返戻金', //p61
                        '3回 → 2回', //p61
                        '正しい',
                        '契約者貸付を受けた契約でも受けていない契約と[[同様の配当金が支払われる]]。', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込みと契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        'いったん失効した契約でも、失効してから所定の期間内（通常は３年以内）で、[[被保険者の健康状態に異常がなければ]]、所定の手続きをとり、契約の効力を元に戻すことができる。', //p58
                        '失効中に支払事由に相当する事故が発生した場合は[[保障の対象とはならない]]。', //p58
                        '復活するためには、[[告知書を提出]]し、生命保険会社の承諾を得るとともに、未払込保険料（延滞保険料）を払い込むことが必要。', //p58
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '初回の配当金受取時 → 契約時', //p63
                        '保険金買増方法 → 現金支払方法', //p63-64
                        '単利 → 複利', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直しに関する諸制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '長期契約における特別配当の権利は、[[新しい契約にも引き継がれる]]。', //p65
                        '説明の際には、契約者に対し、転換前と転換後の契約に関する重要な事項を対比して[[記載した書面を交付]]するとともに、契約者には、[[この書面を受領し内容を了知した旨の確認（受領印の取付等）を得なければならない]]。', //p65
                        '「契約転換制度」を利用する際の保険料は、[[転換時]]の契約年齢、保険料率により計算される。', //p65
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '生命保険募集人は、[[２社以上の商品の保険募集（乗合募集）を行うことができず、A・B両社の生命保険募集人として登録すること（二重登録）もできない]]。', //p72
                        '正しい',
                        'お客さまから「契約概要」および「注意喚起情報」を記載した書面の記載事項を了知した旨の[[確認をいただく必要がある]]。', //p73
                        '保険代理店は、保険募集に関する業務について、「保険会社に課されている体制整備」に準じた対応を行うことが[[必要となる]]。', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '業務上不要な個人情報は[[取得しない]]。', //p79
                        '個人情報の漏えい等の発生時は、原則として個人情報保護委員会に報告し、[[本人に通知する]]。', //p80
                        '個人情報取扱事業者に課せられた義務は、大きく分けて①個人情報の取得・利用時の義務、②個人情報を適切・安全に管理する義務、[[③本人からの求めに対応する義務]]の3つが挙げられる。', //p79-80
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法第300条に定める禁止行為の具体的な事例"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '特別の利益の提供 → 断定的な予想配当等の表示・説明', //p85
                        '不適正な乗換募集 → 告知・診査に関する禁止行為', //p84
                        '保険種類・保険会社の誤認を招く行為 → 特別の利益の提供', //p84
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '正しい',
                        '正しい',
                        '純保険料は､死亡保険金を支払うための財源となる死亡保険料と､[[満期保険金]]を支払うための財源となる[[生存保険料]]の2つの部分から構成されている｡', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '経済上の危険 → 環境上の危険', //p68
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険金等の支払いに関する保険会社の義務などについて[[規定されている]]。', //p82-83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '[[解約は契約者の意思で自由にできる]]が、生命保険は家庭の経済準備に欠かせない大切な財産であるため、満期まで継続することが何よりも必要。', //p62
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="適切な保険金・給付金等の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '金融庁 → 生命保険協会', //p95
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="各都道府県民共済（全国生協連）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '掛金は、[[選択する型や特約コースの付加により異なる]]が、それぞれの商品、特約コースごとに[[年齢・性別にかかわらず一律]]となっている。', //p103
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="JA共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        'ＪＡ共済の養老生命共済・終身共済・定期生命共済の最高限度額は、通算して[[5億円]]、こども共済は[[1,000万円]]、医療共済は[[30万円]]（1回の入院）となっている。', //不明
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '消費者庁 → 内閣総理大臣', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '損害保険には、火災保険や地震保険のように[[物]]に関する保険の他、所得補償保険や傷害保険、介護保険のように[[人]]に関する保険や、個人賠償責任保険のように[[賠償責任]]に関する保険もある。', //p105
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行預金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '一般に金利が[[上昇]]しているときには固定金利定期預金よりも有利になるが、逆に金利が[[下降]]しているときには不利になる。', //p108
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
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="株式"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'エ', //26
                        'キ', //27
                        'ケ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="相続の法律"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'ア', //31
                        'オ', //32
                        'キ', //33
                        'ウ', //34
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'キ', //36
                        'カ', //37
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
                            questionTitle: '契約の申込み',
                            relatedProblems: [],
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '契約概要',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '適切な保険金・給付金等の支払いに関するお客さま対応と留意点',
                            relatedProblems: [],
                            content: '金融庁 → 生命保険会社', //p96
                        }, //44
                        {
                            questionTitle: '個人向け融資（ローン）の種類',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '金銭信託',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '労災保険（労働者災害補償保険）',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '死亡保険金と税金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '女性市場',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-href="/senmon/2025-h1-b" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
