<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2023年度 4月〜8月実施 フォームB";
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
                    questionTitle="法令上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '断定的な予想配当等の表示・説明 → 虚偽の説明', //p84
                        '正しい',
                        '特別の利益の提供 → 虚偽の説明', //p84
                        '虚偽の説明 → 誤解されるおそれのある比較', //p85
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '特約は、[[もとになる契約（主契約）なしで単独で契約することはできず]]、また、特約の種類によっては、他の特約とあわせて契約しなければならないものもある。', //p66
                        'これらの特約商品は、主契約を契約するときに付加しますが、[[特約商品によっては保険期間の途中で付加することもできる]]。', //p66
                        '定款 → 約款', //p66
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '保険契約締結に関して「媒介」をするのか、「代理」をするのかを[[明示しなければならない]]。', //p73
                        '媒介 → 代理', //p73
                        '代理 → 媒介', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '復活しても失効期間中の支払事由に相当する事故は[[保障の対象にならない]]。', //p97
                        '正しい',
                        '復活の手続き時には、[[復活に関する重要事項の説明をして、お客さまの納得のもと必要書類の自署・押印をいただくこと]]が必要。', //p97
                        '復活の意思がない場合は、[[すみやかに解約の請求について案内することが必要]]。', //p97
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
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
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険業界とその主な商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '損害保険には、火災保険や[[地震保険]]のように物に関する保険の他、[[所得補償保険]]や傷害保険、介護保険のように人に関する保険や、個人賠償責任保険のように賠償責任に関する保険もある。', //p105
                        '損害保険は通常、[[事故による現実の損害額だけが、契約金額の範囲内で支払われるのが特徴]]である。', //p105
                        '死亡保険金の支払事由や、後遺障害保険金の支払割合、入院保険金の免責期間など[[異なっている点もある]]。', //p106
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
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
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、医療保障保険（団体型）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '経営者保険の保険種類は、一般の個人保険（財形商品を除く）と[[同じ]]で養老保険、定期保険特約付養老保険、定期保険、終身保険、定期保険特約付終身保険、個人年金保険など。', //p130
                        '受取人 = [[企業（団体）]]', //p131
                        '半額負担制 → 一部負担制', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="「死亡保険金」を支払わない場合"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '被保険者が[[契約日または復活日から所定期間以内]]に自殺したとき、「死亡保険金」は支払われない。', //p54
                        '正しい',
                        '契約者が過失によって被保険者を死亡させたとき、「死亡保険金」を[[支払う場合もある]]。', //p55の（注）
                        '保険の計算基礎に及ぼす影響が少ないと生命保険会社が認めた場合には、[[保険金を全額または削減して支払うことがある]]。', //p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人を対象とした主な保険種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '死亡または高度障害時には、[[養老保険と定期保険特約を合わせた保険金]]が支払われ、満期のときには、[[満期保険金]]が支払われる（[[死亡保険金と満期保険金は同額ではない]]）。', //p31
                        '保険期間内に契約者が死亡したときには、それ以降の保険料払い込みは[[免除される]]。', //p32
                        '正しい',
                        'がん・急性心筋梗塞・脳卒中の三大生活習慣病にかかった場合に、死亡保険金と同額の特定疾病保険金が生存中に支払われ、[[その時点で契約は消滅する]]。', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直しに関する諸制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '長期契約における特別配当の権利は、[[新しい契約にも引き継がれる]]。', //p65
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約を有効に続けるための方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '正しい',
                        '定期保険 → 養老保険', //p60
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '2年 → 1年', //p104
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）による取引時確認"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '100万円 → 200万円', //p81
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="適切な保険金・給付金等の支払いと留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '保険業法 → 生命保険会社', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '株式投資は、[[ハイリスク・ハイリターン]]の運用が特徴となっているため、あくまでも[[余裕資金の利殖を目的]]として行うべきであるといわれている。', //p112
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスと基本的姿勢"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '保険法 ↔︎ 保険業法', //p71
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '435万円 → 385万円', //p134
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
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
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '通常体契約 → 標準体契約', //p68-69
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・年金・給付金と税金（個人契約の場合）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '身体の傷害などを原因として支払いを受ける高度障害保険金（給付金）、障害給付金、入院給付金などは、[[被保険者本人が受け取る場合はもちろん、被保険者の配偶者や直系血族あるいは生計を一にするその他の親族が受け取る場合も非課税とる]]。', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
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
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="労働者共済"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '厚生労働省',
                        '関係なく',
                        '1年更新',
                        '割戻金',
                        '口座振替', // 問25〜29
                    ]"
                    :labels="[
                        'キ', //25
                        'ク', //26
                        'ウ', //27
                        'イ', //28
                        'カ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-08 確認済み
                        '経済準備',
                        '自助努力',
                        '失業',
                        '国',
                        '公的扶助', // 問30〜34
                    ]"
                    :labels="[
                        'ウ', //30
                        'コ', //31
                        'ア', //32
                        'カ', //33
                        'キ', //34
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
                        '3,528',
                        '7,980',
                        '7,056',
                        '2,940',
                        '9,996', // 問35〜39
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
                        // 問40〜49
                        {
                            questionTitle: '保険料の払込猶予期間',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '重要事項の説明',
                            relatedProblems: [],
                            content: '', //p
                        }, //41
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '個人情報保護法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '2年 → 1年', //p77
                        }, //43
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '確定拠出年金制度',
                            relatedProblems: [],
                            content: '[[加入者自身]]が掛金の運用方法を選択し、運用実績次第で受け取る年金額が変動する。', //p132
                        }, //44
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '複利と期間',
                            relatedProblems: [],
                            content: '同じ利率の複利商品であれば[[１年複利より半年複利、半年複利より１カ月複利]]のほうがお金の増え方は大きくなる。', //p114
                        }, //45
                        {
                            questionTitle: '規約型企業年金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '復活',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '各都道府県民共済',
                            relatedProblems: [],
                            content: '掛金は、[[選択する型や特約コースの付加により異なる]]が、それぞれの商品、特約コースごとに[[年齢・性別にかかわらず一律]]となっている。', //p103
                        }, //48
                        {
                            // rev: 2026-06-08 確認済み
                            questionTitle: '保全・アフターサービスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2023-h1-a" next-href="/senmon/2023-h2-a" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
