<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2023年度 9月〜3月実施 フォームB";
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
                    questionTitle="生命保険を取り巻く生活環境の変化"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '地域共同体意識 → 自己責任意識', //p22
                        '生命保険への加入の仕方も、従来多かった[[「家族、友人、知人などにすすめられたから」などの人的なもの]]から、[[「希望に合った生命保険だったので」というお客さま自らが商品・サービスを選択する]]方向に変わってきている。', //p23
                        '正しい',
                        '老後の生活は[[子どもには頼れないという考え方がさらに浸透]]し、老後生活資金の準備や介護に対するニーズも[[強まっている]]｡', //p25
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '予定利率による運用収入見込額より、実際の運用収入が[[多い]]場合に生じる利益のこと。', //p43
                        '正しい',
                        '個々の契約に還元する配当金の額は、[[保険種類]]、性別、契約年齢、[[払込方法（回数）]]、経過年数、保険期間、保険金額などによってそれぞれ違いがある。', //p44
                        '長期継続契約について、[[通常配当の他に特別配当を支払うことがある]]。', //p44
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込みと契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '3月末日 → 4月末日', //p57
                        'いったん失効した契約でも、失効してから所定の期間内（通常は３年以内）で、[[被保険者の健康状態に異常がなければ]]、所定の手続きをとり、契約の効力を元に戻すことができる。', //p58
                        '正しい',
                        '復活するためには、[[告知書を提出]]し、生命保険会社の承諾を得るとともに、未払込保険料（延滞保険料）を払い込むことが必要。', //p58
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金を支払わない場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '被保険者が[[契約日または復活日から所定期間以内]]に自殺したとき、「死亡保険金」は支払われない。', //p54
                        '正しい',
                        '契約者が過失によって被保険者を死亡させたとき、「死亡保険金」を[[支払う場合もある]]。', //p55の（注）
                        '保険の計算基礎に及ぼす影響が少ないと生命保険会社が認めた場合には、[[保険金を全額または削減して支払うことがある]]。', //p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '初回の配当金受取時 → 契約時', //p63
                        '現金支払方法 → 相殺方法', //p63-64
                        '正しい',
                        '相殺方法 → 現金支払方法', //p63-64
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '保険業法 → 保険法', //p82
                        '保険契約締結に関して「媒介」をするのか、「代理」をするのかを[[明示しなければならない]]。', //p73
                        'お客さまから「契約概要」および「注意喚起情報」を記載した書面の記載事項を了知した旨の[[確認をいただく必要がある]]。', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '手続き者が家族の場合でも、契約者の意思確認のもと、[[委任状による代理人としての正当な手続き書類がなければ受け付けることができない]]。', //p97-98
                        'お客さまの解約理由によっては、解約せずに別の方法（契約者貸付や保険金額の減額、払済保険等への変更など）で対処できる場合があるため、[[お客さまに別の対応方法があることを案内]]し、検討していただくことも大切。', //p98
                        '正しい',
                        '解約返戻金は、通常の場合、既払込保険料総額よりも[[少なくなる]]。', //p98
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="JA共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '厚生労働省 → 農林水産省', //p101
                        '正しい',
                        '団体向けに[[団体定期生命共済などもある]]。', //p101
                        'ＪＡ共済の養老生命共済・終身共済・定期生命共済の最高限度額は、通算して[[5億円]]、こども共済は1,000万円、医療共済は[[30万円]]（1回の入院）となっている。', //不明
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="証券業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '株式投資は、ハイリスク・ハイリターンの運用が特徴となっているため、あくまでも[[余裕資金の利殖を目的として行うべき]]であると言われている。', //p112
                        '20分の1 → 10分の1', //p112
                        '正しい',
                        '約款上、株式を組み入れることができる投資信託で、運用次第では高収益が期待できますが、[[反面元本割れの危険性も大きい]]といえる。', //p113
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
                    questionTitle="確定拠出年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '加入者自身が掛金の運用方法を選択し、[[運用実績次第で受け取る年金額が変動する]]。', //p132
                        '正しい',
                        '株式などのリスクの高い商品を選択すると、運用結果によっては元本割れの可能性があるが、企業は掛金の負担だけで[[元本を補てんする義務はない]]。', //p133
                        '全額益金算入 → 全額損金算入', //p133
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        'ライフプラン → ライフサイクル', //p159
                        '作成販売 → 設計販売', //p160
                        '２つの機能をもたせた場合、「突然のできごと」と「予測できるできごと」の[[どちらにも備えることができる]]。', //p161
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
                    questionTitle="コンプライアンスと基本的姿勢"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        'コンプライアンスとは、一般に「法令等の遵守」と訳されており、多くの企業では、法令や社内ルールだけでなく、[[社会的規範や企業倫理を守るということも含めて]]用いられている。', //p71
                        '正しい',
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
                        '保険契約の解除の取り扱いについて[[規定されている]]。', //p82-83
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービスの提供に関する法律（金融サービス提供法）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '金融商品販売にあたってそのリスク（市場リスク・信用リスク）に関する重要な事項の説明を怠ったことによりお客さまが損害を被った場合には、[[金融商品販売業者が損害賠償責任を負う]]ことを定めている。', //p77-78
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
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
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の情報提供と正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[契約締結前の段階]]において、お客さまの最終的な意向と契約の申込みを行おうとする保険契約の内容が合致しているかどうかを確認（＝意向確認）する。', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '第Ⅰ種から[[第Ⅳ種]]の[[４種類]]に区分されている。', //p129
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
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
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '相続税の基礎控除額 = [[3,000万円]] + （[[600万円]] × 法定相続人の数）', //p156
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '生命保険募集人がお客さまから口頭で告知を受けても、[[生命保険会社が告知を受けたことにはならない]]ため、告知書に告知義務者自身で記入いただくことが重要。', //p47
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="信託銀行の業務・商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '不動産の管理を目的とした不動産管理信託や、土地所有者が土地を信託し収益を信託配当として受け取る土地信託などの不動産の信託の他、[[不動産の売買・仲介、不動産の鑑定評価、不動産のコンサルティングサービスなどの不動産業務を取り扱っている]]。', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険料の払い込みが困難になった場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '保険期間',
                        '養老保険',
                        'なくなります',
                        '保険金額',
                        '生命保険会社', // 問25〜29
                    ]"
                    :labels="[
                        'キ', //25
                        'エ', //26
                        'イ', //27
                        'カ', //28
                        'コ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="国民年金と厚生年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '国民皆年金',
                        '障害',
                        '報酬比例',
                        '60歳',
                        '第1号', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'イ', //31
                        'エ', //32
                        'オ', //33
                        'ケ', //34
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
                        '5,712',
                        '8,880',
                        '8,064',
                        '3,120',
                        '11,184', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'キ', //36
                        'カ', //37
                        'ア', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-03 確認済み
                            questionTitle: '生命保険の現状',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '個人情報保護法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '保全・アフターサービスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '金融商品取引法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '契約内容登録制度',
                            relatedProblems: [],
                            content: '金融庁 → 生命保険協会', //p69-70
                        }, //46
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '後期高齢者医療制度',
                            relatedProblems: [],
                            content: '医療費の負担額は、[[その費用の原則1割、所定水準以上の所得者の場合は2割（そのうち現役並み所得者は3割）]]となっている。', //p119
                        }, //47
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '死亡保険金の非課税限度額',
                            relatedProblems: [],
                            content: '死亡保険金の非課税限度額 = [[500万円 × 法定相続人の数]]', //p143
                        }, //48
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '複利と期間',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2023-h2-a" next-href="/senmon/2023-h2-c" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
