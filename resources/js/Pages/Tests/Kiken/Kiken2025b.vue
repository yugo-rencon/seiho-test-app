<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
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
                    questionTitle="団体保険の危険選択-①"
                    :relatedProblems="['2025b11']"
                    :contents="[
                        // rev: 2026-07-03 確認済み
                        '被用者団体',
                        '団体性',
                        '相似する',
                        '保険加入',
                        '加入率', // 問11〜15
                    ]"
                    :labels="[
                        'ケ', //11
                        'ウ', //12
                        'コ', //13
                        'ア', //14
                        'キ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択-②"
                    :relatedProblems="['2025b16']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '総合福祉団体的保険',
                        '権利',
                        '保険契約者による',
                        '一括告知',
                        '平準化', // 問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'キ', //17
                        'オ', //18
                        'ウ', //19
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
                    questionTitle="選択効果"
                    :relatedProblems="['2025a27', '2025b22']"
                    :contents="[
                        // rev: 2026-07-04 確認済み
                        '診査による選択有効期間は３〜５年と考えられているが、[[国民生命表との比較では、かなり長期に及ぶ]]ことが明らかになっている。', //p32
                        '正しい',
                        '被保険者を契約年齢別に観察すると，若年齢層は健康体も多く、安い保険料で加入することができるが、その死因では，不慮の事故が上位を占めているので、[[診査の効果は顕著ではない]]。他方，高年齢層では、保険料は高いが、診査によって契約を延期されたり、条件体になる率も高い。しかしながら，診査自体に加えて心電図・血液検査などの補助診断法を併用することによって[[選択効果を期待することができる]]。', //p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="現病歴・既往歴"
                    :relatedProblems="['2025b23']"
                    :contents="[
                        '若年層：高血圧性、虚血性が多い → 先天性のものが多い<br>中年および高年齢：先天性のものが多い → 高血圧性、虚血性が多い', //p65
                        'ネフローゼ → インシュリン', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約制限"
                    :relatedProblems="['2025b24', '2025c23']"
                    :contents="[
                        '正しい',
                        '短期 ↔︎ 長期', //p73
                        '役員を被保険者とする場合には必要ない → 役員を被保険者とする場合も被保険者の書面による加入同意が必要', //p75
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」"
                    :relatedProblems="['2025b25']"
                    :contents="[
                        '影響が小さいという特性がある → 大きく影響される特性がある', //p149
                        '正しい',
                        '給付金削減法 → 特別保険料領収法', //p152
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :relatedProblems="['2025b26']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '告知義務がある旨定めている → 告知義務はないとしている', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の制約条件"
                    :relatedProblems="['2025a22', '2025b27']"
                    :contents="[
                        // rev: 2026-07-02 確認済み
                        '純保険料の範囲内 → 付加保険料の範囲内', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
                    :relatedProblems="['2025b28']"
                    :contents="[
                        '顕在的傾向から潜在化への傾向 → 潜在的傾向から顕在化への傾向', //p76
                        '正しい',
                        '正しい',
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
                            questionTitle: '生命表',
                            relatedProblems: ['2025a31', '2025b31', '2025c31'],
                            content: '標準生命表 → 国民生命表<br>簡易生命表 → 経験生命表', //p5
                        }, //31
                        {
                            questionTitle: '危険選択の厳格度',
                            relatedProblems: ['2025a32', '2025b32', '2025c32'],
                            content: '期待死亡率についての目標値（実際死亡率） → 実際死亡率についての目標値（期待死亡率）', //p35
                        }, //32
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '体格',
                            relatedProblems: ['2025b33', '2025c26'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '保険診査',
                            relatedProblems: ['2025b34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '契約確認制度の運用',
                            relatedProblems: ['2025b35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '保険金確認後の契約の処理',
                            relatedProblems: ['2025b36'],
                            content: '因果関係の有無にかかわらず契約を解除できる → 因果関係がなければ契約を解除できない', //p120
                        }, //36
                        {
                            questionTitle: '機微（センシティブ）情報',
                            relatedProblems: ['2025b37'],
                            content: '機微（センシティブ）情報に該当する → 該当しない', //p132
                        }, //37
                        {
                            questionTitle: '元受保有額と出再額',
                            relatedProblems: ['2025b38'],
                            content: '群団再保険 → 個別再保険', //p180
                        }, //38
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '金額別死亡率',
                            relatedProblems: ['2025b39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '死因別死亡率',
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '被保険者の危険',
                            relatedProblems: ['2025b41'],
                            label: 'ウ',
                            content: '環境的危険',
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
                            questionTitle: '販売政策と選択政策',
                            relatedProblems: ['2025b44'],
                            label: 'ア',
                            content: '加入申込者群',
                        }, //44
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '職業危険',
                            relatedProblems: ['2025a23', '2025b45', '2025c34'],
                            label: 'エ',
                            content: '最高保険金額',
                        }, //45
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '人間ドック扱',
                            relatedProblems: ['2025a45', '2025b46'],
                            label: 'イ',
                            content: '告知書',
                        }, //46
                        {
                            // rev: 2026-07-04 確認済み
                            questionTitle: '査定法',
                            relatedProblems: ['2025b47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-02 確認済み
                            questionTitle: '保険金確認・給付金確認',
                            relatedProblems: ['2025a24', '2025b48'],
                            label: 'ア',
                            content: '発生後',
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
                            questionTitle: '再保険',
                            relatedProblems: ['2025b50', '2025c25'],
                            label: 'エ',
                            content: 'より低く',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="kiken2025a" next-route="kiken2025c" />
        </section>
    </SeihoTestLayout>
</template>
