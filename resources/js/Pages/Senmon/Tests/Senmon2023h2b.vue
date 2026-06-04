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
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
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
                        '', //p
                        '', //p
                        '正しい',
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
                    questionTitle="確定拠出年金"
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
                    questionTitle="コンプライアンスと基本的姿勢"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
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
                        '正しい',
                        '', //p
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
                        '正しい',
                        '', //p
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
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
                        '5712',
                        '8880',
                        '8064',
                        '3120',
                        '11184', // 問35〜39
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
                            questionTitle: '保全・アフターサービスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '金融商品取引法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '契約内容登録制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '後期高齢者医療制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '死亡保険金の非課税限度額',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
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
