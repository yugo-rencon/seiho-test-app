<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2024年度 4月〜8月実施 フォームB";
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
                        '保有契約の保険金額（個人保険・個人年金保険・団体保険の合計）は､2024年度末で[[約1,304兆円]]になっている｡', //p18
                        '正しい',
                        '年齢別の死因をみると、20歳代・30歳代では[[自殺や不慮の事故および悪性新生物（ガン）]]が、40歳代以上の中高齢者層では[[悪性新生物（ガン）や心疾患]]などが上位を占めている。', //p24
                        '生命保険会社の最も重要な役割である保険金・給付金の確実な支払いに支障をきたすことがないよう、保険商品や特約の内容をしっかりお客さまに理解していただき、かつ[[責任をもって私たちがフォローしていく体制の充実も社会的な強い要請となっている]]。', //p19
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
                    questionTitle="告知義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-03 確認済み
                        '正しい',
                        '支払事由等と解除の原因となった事実との間に全く因果関係がないことを証明した場合は、[[保険金等を支払う]]。', //p48
                        '1年 → 2年', //p48
                        '告知義務違反によって保険契約を解除した場合、生命保険会社は[[解約返戻金があれば、契約者に対してこれを支払う]]。', //p48
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直しに関する諸制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '解約返戻金 → 責任準備金', //p64
                        '長期契約における特別配当の権利は、[[新しい契約にも引き継がれる]]。', //p65
                        '正しい',
                        '「契約転換制度」を利用する際の保険料は、[[転換時]]の契約年齢、保険料率により計算される。', //p65
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
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
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '厚生労働大臣 → 内閣総理大臣', //p72
                        '保険契約締結に関して「媒介」をするのか、「代理」をするのかを[[明示しなければならない]]。', //p73
                        'お客さまから「契約概要」および「注意喚起情報」を記載した書面の記載事項を了知した旨の[[確認をいただく必要がある]]。', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="失効・復活手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
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
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
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
                    questionTitle="保険料の払い込み"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
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
                        '単利 → 複利', //p63
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
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
                    :questionNumber="17"
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
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="法令上の禁止行為（虚偽の説明となる事例）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="「適切な保険金・給付金等の支払い」に関するお客さま対応と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-04 確認済み
                        '正しい',
                        '正しい',
                        '金融庁 → 生命保険会社', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="信託銀行の業務・商品"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行預金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-05 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[為替リスクがあり]]、為替相場の動向次第では、満期時に受け取る外貨建ての受取金額を円に換算した金額が預入額を下回る場合がある。', //p108
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除を受けるための手続き"
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
                    questionTitle="相続の法律"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '正しい',
                        '正しい',
                        '代理相続 → 代襲相続', //p152
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
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-07 確認済み
                        '告知扱',
                        '付加保険料',
                        '損金',
                        '企業（団体）',
                        '福利厚生規程', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //30
                        'イ', //31
                        'ケ', //32
                        'ウ', //33
                        'ク', //34
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
                        '6,840',
                        '6,048',
                        '2,340',
                        '8,388', // 問35〜39
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
                            questionTitle: '死亡保険金を支払わない場合',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '危険選択',
                            relatedProblems: [],
                            content: '', //p
                        }, //41
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '2年 → 1年', //p77
                        }, //43
                        {
                            // rev: 2026-06-04 確認済み
                            questionTitle: '個人情報保護法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '外貨建保険における重要事項の説明',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '銀行窓販',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-06-07 確認済み
                            questionTitle: '経営者保険',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険料控除の対象',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '寄与分制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2024-h1-a" next-href="/senmon/2024-h2-a" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
