<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2025年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="近年の商品対応と今後の方向性①"
                    :relatedProblems="['2025b1']"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '5年ごと配当',
                        '契約者',
                        '引受基準緩和',
                        '生前給付',
                        '就業不能', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'キ', //2
                        'ケ', //3
                        'カ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="近年の商品対応と今後の方向性②"
                    :relatedProblems="['2025b6']"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '重要な事項を説明した書面',
                        '受領確認',
                        'ユニバーサル保険',
                        '銀行窓販',
                        '為替', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'オ', //7
                        'コ', //8
                        'エ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービス提供法①"
                    :relatedProblems="['2025a11', '2025b11', '2025c11']"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '事業者',
                        '困惑',
                        '取り消す',
                        '重要事項',
                        '断定的', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                        'オ', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービス提供法②"
                    :relatedProblems="['2025a16', '2025b16', '2025c16']"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '金融商品販売業者等',
                        '市場リスク',
                        '信用リスク',
                        '元本欠損額の賠償責任',
                        '勧誘方針', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'カ', //17
                        'キ', //18
                        'ア', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の給付"
                    :relatedProblems="['2025b21']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '障害基礎年金 ↔︎ 障害厚生年金', //p26
                        '遺族基礎年金 ↔︎ 遺族厚生年金', //p26
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="貯蓄を主たる目的とした保険"
                    :relatedProblems="['2025b22']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '貯蓄機能を重視するため[[死亡保障部分が小さい]]のが特徴的である。', //p56
                        '正しい',
                        '契約者が死亡または所定の障害状態になったときに[[以後の保険料の払込を免除する]]仕組みが加わった保険である。', //p58
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険"
                    :relatedProblems="['2025b23']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '確定拠出年金保険 → 新企業年金保険', //p91
                        '拠出型企業年金保険は、[[企業や団体で運営される自助努力型年金制度を運営するための保険商品]]で、保険料額・年金額の自在性があるのが特徴であり、「[[Ｂ（型）年金]]」とも称される。', //p91
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体信用生命保険"
                    :relatedProblems="['2025a24', '2025b24', '2025c24']"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '団体信用生命保険 → 消費者信用団体生命保険', //p87
                        '債権者である信用供与機関（銀行等）または信用保証機関を[[保険契約者および保険金受取人]]、債務者を[[被保険者]]、未返済債務額を保険金額とする商品である。', //p86
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）"
                    :relatedProblems="['2025b25']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '規模の大きい企業や団体向けの法人営業組織は、専門的かつ広範なスキルが要求されるため、[[内務職員で構成]]され、[[「法人営業第○部」といった名称]]とし、企業グループや業種、官公庁等のマーケットごとに設置されていることが一般的である。', //p145
                        '企業保険の販売を中心とした活動を行いつつ、[[個人保険販売の支援のため担当企業やその関連企業の基盤化を推進している法人営業組織もある]]。', //p145
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="長い老後生活を見据えたライフ・プランニング"
                    :relatedProblems="['2025a26', '2025b26', '2025c26']"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '生活習慣病罹患率 → 乳児死亡率', //p20
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の特約"
                    :relatedProblems="['2025b27']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '「特別条件特約」は、[[健康状態が一定の危険の範囲を超えているが危険の度合いに応じて]]「保険料の割増」などの特別の条件を付けて引き受けるなどの取扱を定めたものである。', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形貯蓄制度"
                    :relatedProblems="['2025a28', '2025b28', '2025c28']"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '正しい',
                        '一般財形は目的を問わない使途自由な貯蓄であり、[[一般の預貯金と同じく利子（生命保険の場合は差益）に対して20％課税]]（源泉徴収の際には復興特別所得税も加算）される。', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="今後の顧客サービス"
                    :relatedProblems="['2025b29']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '企業が「どれだけのサービスを提供してきたか」ではなく、顧客がサービスの質について、「良いサービス」「悪いサービス」を判断し、企業を選択する時代になったと言える。', //p107
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員採用・育成の意義"
                    :relatedProblems="['2025b30']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '正しい',
                        '採用・育成の意義は、退社する営業職員の補充、販売組織の維持にとどまらず、顧客サービスの充実、市場競争力の強化をめざした販売組織の拡充にあるといえる。', //p115
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-09-03 確認済み
                            questionTitle: 'マイナンバー法（行政手続における特定の個人を識別するための番号の利用等に関する法律）',
                            relatedProblems: ['2025a22', '2025b31'],
                            content: '未成年者を除くすべての人 → 住民票を有するすべての人', //p41
                        }, //31
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '福利厚生費',
                            relatedProblems: ['2025a32', '2025b32', '2025c32'],
                            content: '福利厚生費は、[[厚生年金保険・健康保険・雇用保険等の社会保険料からなる法定福利費]]と、[[企業が任意に実施する制度の費用である法定外福利費]]に分けられる。このうち[[法定福利費]]については、高齢化に伴い、賃金を上回る増加を示している。', //p33
                        }, //32
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '継続教育制度',
                            relatedProblems: ['2025a33', '2025b33', '2025c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '保険料払込方法',
                            relatedProblems: ['2025b34'],
                            content: '一時払 → 前納', //p50
                        }, //34
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '確定拠出年金制度',
                            relatedProblems: ['2025b35'],
                            content: '運用実績にかかわらず[[企業が追加拠出をする必要がない]]。', //p89
                        }, //35
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '心身障害者扶養者生命保険',
                            relatedProblems: ['2025b36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '特別勘定特約',
                            relatedProblems: ['2025a37', '2025b37', '2025c37'],
                            content: '現在のところ、[[新企業年金保険]]、確定給付企業年金保険、国民年金基金保険、[[団体生存保険]]に付加する特別勘定特約が販売されている。', //p91-92
                        }, //37
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '個人顧客システム',
                            relatedProblems: ['2025b38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '営業職員の給与体系',
                            relatedProblems: ['2025b39', '2025c49'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '支社の配置',
                            relatedProblems: ['2025b40'],
                            content: 'これまで支社の配置は管理スパン上の問題や地域社会における店舗サービス機能の発揮ならびにPR効果の観点から、組織がある一定規模までに達すれば支社を分割するのが一般的であった。しかし、近年ではコスト、効率化のため事務面の集約化や規模の大型化に向かう傾向も見られる。', //p140
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '種類別貯蓄現在高',
                            relatedProblems: ['2025b41'],
                            label: 'ウ',
                            content: '定期性預貯金',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '年金改革',
                            relatedProblems: ['2025a42', '2025b42', '2025c42'],
                            label: 'イ',
                            content: '第3号',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '公的介護保険制度のしくみ',
                            relatedProblems: ['2025b43'],
                            label: 'ア',
                            content: '40歳',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '変額保険',
                            relatedProblems: ['2025b44', '2025c29'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '危険選択の方法',
                            relatedProblems: ['2025a45', '2025b45', '2025c45'],
                            label: 'イ',
                            content: '生命保険協会',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '加入後の自在性（1990年代）',
                            relatedProblems: ['2025b46'],
                            label: 'イ',
                            content: '移行',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: ['2025b47', '2025c36'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '通信販売',
                            relatedProblems: ['2025b48'],
                            label: 'エ',
                            content: '加入保険金額',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '変額保険販売資格要件',
                            relatedProblems: ['2025b49'],
                            label: 'ア',
                            content: '専門課程',
                        }, //49
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '代理店',
                            relatedProblems: ['2025a50', '2025b50', '2025c50'],
                            label: 'ア',
                            content: '募集代理店',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="eigyo2025a" next-route="eigyo2025c" />
        </section>
    </SeihoTestLayout>
</template>
