<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2025年度 フォームA";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の特殊性-①"
                    :relatedProblems="['2025a1']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '契約自由',
                        '経済的',
                        '保険法',
                        '商法',
                        '共済', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'エ', //2
                        'イ', //3
                        'キ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の特殊性-②"
                    :relatedProblems="['2025a6']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '拘束',
                        '法規範説',
                        '定型的取引',
                        '保険約款',
                        '強行', // 問6〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ア', //7
                        'キ', //8
                        'カ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-①"
                    :relatedProblems="['2025a11', '2025b11', '2025c11']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', // 問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'ウ', //12
                        'キ', //13
                        'カ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-②"
                    :relatedProblems="['2025a16', '2025b16', '2025c16']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '出生数',
                        '労働力率', // 問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'ケ', //17
                        'イ', //18
                        'オ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の対象となる危険の種類"
                    :relatedProblems="['2025a21', '2025b21', '2025c21']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '同様な危険を多数引き受けることにより、危険の発生頻度の変動幅を[[縮小]]させ、[[平均経験率]]を得る必要がある。', //p4
                        '保険料と危険度の積 → 保険金額と危険度の積', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="早期是正措置の導入と保険業法の一部改正"
                    :relatedProblems="['2025a22', '2025c27']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '責任準備金の積立度合 → 保険金の支払い余力', //p99
                        '正しい',
                        '2003年（平成15年）には、既契約の予定利率の[[引き下げ]]に関する保険業法の改正が行われた。', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度"
                    :relatedProblems="['2025a23', '2025c28']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '社会扶助 → 公的扶助', //p121
                        '公的扶助 → 社会扶助', //p121
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業監督の方法"
                    :relatedProblems="['2025a24']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '自由主義経済を[[基調とする]]立場であり、日本では[[実体的監督主義]]が採用されている。', //p148
                        '[[形式的監督主義]]では、公示主義や準則主義に分けられる。', //p148
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行による保険販売"
                    :relatedProblems="['2025a25', '2025c49']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '2001年（平成13年）に、[[住宅ローン関連の信用生命保険と長期火災保険等の販売からスタート]]。', //p175-176
                        '2005年（平成17年）には、[[一時払終身保険、一時払養老保険や期間10年以下の平準払養老保険等]]が販売対象に加えられた。', //p176
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険商品の基本型"
                    :relatedProblems="['2025a26', '2025b43']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '貯蓄保険 → 生存保険', //p31-32
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者へのPR活動等"
                    :relatedProblems="['2025a27']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '正しい',
                        '金融調停審査会制度 → 金融分野における裁判外紛争解決制度（金融ADR制度）', //p84
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要"
                    :relatedProblems="['2025a28']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '正しい',
                        '[[第1号被保険者の保険料]]は、各市町村ごとに基準保険料（所得段階別の定額保険料）が設定され、[[第2号被保険者の保険料]]は、それぞれ加入する医療保険者が制度の算定基準に基づき設定される。', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :relatedProblems="['2025a29', '2025b29', '2025c29']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '一般の多くの人々を対象に保険契約の引受けを行う事業である保険業には、保険業の公共性に鑑み、[[免許制]]（少額短期保険業者については[[登録制]]）が採用されている。', //p150
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保業界におけるシステム動向"
                    :relatedProblems="['2025a30', '2025b30', '2025c30']"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '最初に機械化されたのは最も事務量の多い[[個人保険分野]]である。', //p198
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '保険の始期',
                            content: '正しい',
                            relatedProblems: ['2025a31'],
                        }, //31
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '危険選択の意義',
                            content: '収支相当の原則 → 危険均一性の原則', //p16
                            relatedProblems: ['2025a32', '2025b32', '2025c32'],
                        }, //32
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '1970〜1980年代のアメリカのニューウェーブ商品の開発',
                            content: '[[決済機能こそ持たない]]ものの、死亡保障額に影響を与えることなくいつでもキャッシュ・バリューの引き出しが可能。', //p69
                            relatedProblems: ['2025a33'],
                        }, //33
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '世帯加入状況',
                            content: '正しい',
                            relatedProblems: ['2025a34'],
                        }, //34
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '資産運用の自由化',
                            content: '正しい',
                            relatedProblems: ['2025a35'],
                        }, //35
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '組織変更',
                            content: '100株未満 → 1株未満', //p163
                            relatedProblems: ['2025a36', '2025b36', '2025c36'],
                        }, //36
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '共済と保険',
                            content: '適合性の原則 → 給付・反対給付均等の原則', //p165
                            relatedProblems: ['2025a37', '2025b37', '2025c37'],
                        }, //37
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '少額短期保険業',
                            content: '「少額短期保険業」は、短期（生保・医療保険で1年以内、損害保険で2年以内）かつ少額保険金額（疾病による死亡保険金[[300万円]]以内、疾病・傷害による入院給付金等80万円以内、損害保険金[[1,000万円]]以内等）の保険のみを引き受ける保険業である。', //p177z
                            relatedProblems: ['2025a38', '2025b24'],
                        }, //38
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '営業職員以外の販売チャネル',
                            content: '正しい',
                            relatedProblems: ['2025a39'],
                        }, //39
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '国際化の方向',
                            content: '正しい',
                            relatedProblems: ['2025a40'],
                        }, //40
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '保険事故の発生',
                            label: 'ア',
                            content: '保険金',
                            relatedProblems: ['2025a41'],
                        }, //41
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '死亡表',
                            label: 'オ',
                            content: '',
                            relatedProblems: ['2025a42', '2025b42', '2025c42'],
                        }, //42
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '事業費',
                            label: 'エ',
                            content: '維持費',
                            relatedProblems: ['2025a43'],
                        }, //43
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '保険の歴史的発展',
                            label: 'イ',
                            content: 'ギルド',
                            relatedProblems: ['2025a44'],
                        }, //44
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: 'アメリカにおけるアームストロング調査',
                            label: 'ア',
                            content: '新契約費',
                            relatedProblems: ['2025a45'],
                        }, //45
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '生保資産運用の基本原則',
                            label: 'ウ',
                            content: '公共性',
                            relatedProblems: ['2025a46', '2025b46', '2025c46'],
                        }, //46
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '公的医療保険',
                            label: 'エ',
                            content: '各種共済組合',
                            relatedProblems: ['2025a47'],
                        }, //47
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: 'JA共済',
                            label: 'オ',
                            content: '',
                            relatedProblems: ['2025a48', '2025c24'],
                        }, //48
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '共同ネットワークシステム',
                            label: 'イ',
                            content: 'LINC（Life Insurance Network Center）',
                            relatedProblems: ['2025a49'],
                        }, //49
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: '年金型商品の開発',
                            label: 'ウ',
                            content: '変額年金',
                            relatedProblems: ['2025a50', '2025b50', '2025c50'],
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="souron2025b" />
        </section>
    </SeihoTestLayout>
</template>
