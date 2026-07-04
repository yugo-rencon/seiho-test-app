<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2025年度 フォームC";
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
                    questionTitle="危険選択の必要性-①"
                    :relatedProblems="['2025a1', '2025b1', '2025c1']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '安定性',
                        '標準的',
                        '増加',
                        '収入',
                        '危険保険料', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'キ', //3
                        'コ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の必要性-②"
                    :relatedProblems="['2025a6', '2025b6', '2025c6']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '実際死亡率',
                        '医学的',
                        '高危険率',
                        '危険の公平性',
                        '相互扶助', // 問6〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'ケ', //8
                        'エ', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段-①"
                    :relatedProblems="['2025c11']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '医師による診査',
                        '職員',
                        '社医',
                        '告知',
                        '観察', // 問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'カ', //12
                        'ア', //13
                        'コ', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段-②"
                    :relatedProblems="['2025c16']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '定期健康診断',
                        '衛生管理者',
                        '20名',
                        '出勤簿',
                        'と一緒', // 問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'ク', //17
                        'ウ', //18
                        'ア', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数"
                    :relatedProblems="['2025a21', '2025b21', '2025c21']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '正しい',
                        '容易 → 困難', //p12
                        '簡易生命表 → 保険料計算に使用する予定の死亡率', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院保険（特約）"
                    :relatedProblems="['2025c22']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '国民の平均入院日数よりも短期 → 国民の平均入院日数よりも長期', //p51
                        '生活習慣病特約での糖尿病入院発生率が[[著しく高い]]。', //p51-52
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2025b24', '2025c23']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '正しい',
                        '「保険会社向けの総合的な監督指針」では、[[法人等の財テクなどを主たる目的とした契約や、当初から短期の中途解約を前提とした契約等の保険本来の趣旨を逸脱するような募集活動を行わないこと]]が求められている。', //p76
                        '役員を被保険者とする場合も[[被保険者の書面による加入同意が必要]]である。', //p75
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的査定の対象となる危険"
                    :relatedProblems="['2025c24']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '保険金削減法 → 特別保険料領収法', //p105
                        '保険金削減法 → 特別保険料領収法', //p105
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険"
                    :relatedProblems="['2025b50', '2025c25']"
                    :contents="[
                        '正しい',
                        '共同保険式再保険 → 危険保険料式再保険', //p178
                        '危険保険料式再保険 → 共同保険式再保険', //p179
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="体格"
                    :relatedProblems="['2025b33', '2025c26']"
                    :contents="[
                        '正しい',
                        '2種 → 3種（普通体・過重体・過軽体）', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金確認・給付金確認の意義と目的"
                    :relatedProblems="['2025c27']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '正しい',
                        '確認する項目は契約確認と比較して[[かなり広範囲かつ綿密なもの]]となる。', //p119
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険業における個人情報保護のための取扱指針"
                    :relatedProblems="['2025c28']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '本人の同意を得なければならない → 本人に通知又は公表しなければならない', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="復活"
                    :relatedProblems="['2025a29', '2025b29', '2025c29']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '復活時に求める告知事項の時間的範囲を、過去全体にすべきか、契約後とすべきかについては、理論的には、契約時までのものは告知済みであるから、[[復活時には契約後の健康歴その他の告知を求めるのが普通である]]。', //p173
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率比較"
                    :relatedProblems="['2025a30', '2025b30', '2025c30']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '正しい',
                        '正しい',
                        '保険体の範囲が広くなる → 保険体の範囲が狭くなる', //p186
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '生命表',
                            relatedProblems: ['2025a31', '2025b31', '2025c31'],
                            content: '生命表には国民全体を対象とした[[国民生命表]]と、それよりは小さな特定集団（たとえば生命保険の被保険者集団）を対象とする[[経験生命表]]とがある。', //p5
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '危険選択の厳格度',
                            relatedProblems: ['2025a32', '2025b32', '2025c32'],
                            content: '期待死亡率についての目標値（実際死亡率） → 実際死亡率についての目標値（期待死亡率）', //p35
                        }, //32
                        {
                            questionTitle: '医学的選択',
                            relatedProblems: ['2025c33'],
                            content: '第1段階ではなく第2段階の説明', //p37
                        }, //33
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2025a23', '2025b45', '2025c34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '診査実施上の制限',
                            relatedProblems: ['2025c35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '危険選択の段階',
                            relatedProblems: ['2025c36'],
                            content: '査定 ↔︎ 決定', //p86-87
                        }, //36
                        {
                            questionTitle: '数字査定法',
                            relatedProblems: ['2025c37'],
                            content: '50%の超過死亡 → 50%の改善', //p112
                        }, //37
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '入院・手術保障における選択',
                            relatedProblems: ['2025c38'],
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '最高保険金額',
                            relatedProblems: ['2025c39'],
                            content: '年齢・職業・既往歴に関わらず一定 → 年齢・職業・既往歴などによって異なる', //p181
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死因別死亡率',
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '告知義務',
                            relatedProblems: ['2025c41'],
                            label: 'エ',
                            content: '質問応答義務',
                        }, //41
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '解除',
                            relatedProblems: ['2025a42', '2025b42', '2025c42'],
                            label: 'ウ',
                            content: '解約返戻金',
                        }, //42
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険料の仕組みと危険選択',
                            relatedProblems: ['2025a43', '2025b43', '2025c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '選択の有効期間',
                            relatedProblems: ['2025c44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '心疾患',
                            relatedProblems: ['2025c45'],
                            label: 'ア',
                            content: '先天性',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '道徳的危険排除のためのポイント',
                            relatedProblems: ['2025c46'],
                            label: 'ウ',
                            content: '被保険利益',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定・決定の種類',
                            relatedProblems: ['2025c47'],
                            label: 'エ',
                            content: '再診',
                        }, //47
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '第1次選択',
                            relatedProblems: ['2025a47', '2025c48'],
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '個人データの安全管理措置',
                            relatedProblems: ['2025a49', '2025b49', '2025c49'],
                            label: 'イ',
                            content: 'き損',
                        }, //49
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '高度障害状態',
                            relatedProblems: ['2025c50'],
                            label: 'ア',
                            content: '第1級',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="kiken2025b" next-route="kiken2024a" />
        </section>
    </SeihoTestLayout>
</template>
