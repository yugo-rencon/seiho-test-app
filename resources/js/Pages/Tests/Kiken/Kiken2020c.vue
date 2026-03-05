<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "危険選択";
const subject = "2020年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段-①"
                    :contents="[
                        '医師による診査',
                        '簡便性',
                        '職員',
                        '社医',
                        '観察', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'カ', //2
                        'ア', //3
                        'コ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="報状扱契約における選択手段-②"
                    :contents="[
                        '定期健康診断',
                        '衛生管理者',
                        '20名',
                        '出勤簿',
                        'と一緒', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ク', //7
                        'ウ', //8
                        'ア', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」-①"
                    :contents="[
                        '心理',
                        '抵抗力',
                        '触診',
                        '生命予後',
                        '分離', //問11〜15
                    ]"
                    :labels="[
                        'イ', //11
                        'キ', //12
                        'オ', //13
                        'ク', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院・手術保障における「選択」-②"
                    :contents="[
                        '生活習慣病',
                        '限局',
                        '高い',
                        '逓減性',
                        '超過危険', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'ク', //17
                        'オ', //18
                        'エ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡率と死亡指数"
                    :contents="[
                        '経験生命表 → 国民生命表<br>簡易生命表 → 経験生命表', //p5
                        '正しい',
                        '「予定死亡率 ÷ 実際死亡率 × 100（%)」 → 「実際死亡率 ÷ 予定死亡率 × 100（%)」', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知"
                    :contents="[
                        '正しい',
                        '保険法に規定があり → 保険法に規定はない', //p15
                        '過失によって知らなかった場合は解除できる → 解除できない', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="職業危険"
                    :contents="[
                        'アルコール中毒や不摂生生活のような職業に随伴する危険は含まれない → 含まれる', //p69
                        '正しい',
                        '職業と入院率については全く関連がない → 相当の関連がある', //p70
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の危険選択"
                    :contents="[
                        '団体定期保険も一括告知 → 団体定期保険は各被保険者の告知を求める', //p171
                        '職業上の危険選択は行わない → 職業上の危険選択行っている', //p171
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="プライバシーと個人情報"
                    :contents="[
                        '紙面に出力されたものは含まない → 含まれる', //p127
                        '正しい',
                        'いかなる場合であっても本人の同意を得なければならない → 本人に通知または公表すれば足りる', //p131-132
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険保険料と危険保険金"
                    :contents="[
                        '正しい',
                        '養老保険 → 定期保険', //p24
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="医学的選択上の課題"
                    :contents="[
                        '脳内出血の増加傾向 → 低下傾向<br>塩分過剰摂取が是正されていない → 是正されている', //p43-44
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="逆選択の傾向と態様"
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
                    questionTitle="保険金確認・給付金確認の意義と目的"
                    :contents="[
                        '正しい',
                        '簡略化 → かなり広範囲かつ綿密', //p119
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="再保険の契約形態"
                    :contents="[
                        '正しい',
                        '正しい',
                        '任意再保険 → 自動再保険', //p178
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '危険選択', content: '正しい' }, //31
                        { questionTitle: '高血圧', content: '正しい' }, //32
                        { questionTitle: '体格', content: '体重 × 身長の二乗 → 体重 ÷ 身長の二乗' }, //33 p63
                        { questionTitle: '条件体契約', content: '体重別・性別 → 年齢別' }, //34 p72
                        { questionTitle: '数字査定法', content: '50％の超過死亡 → 50％改善' }, //35 p111-112
                        { questionTitle: '契約確認制度の運用', content: '正しい' }, //36
                        { questionTitle: '契約内容の相互照会', content: '厚生労働省ならびに農林水産省 → 全国共済農業協同組合連合会<br>生命共済 → 全国共済農業協同組合連合会' }, //37
                        { questionTitle: '入院保障における料率', content: '正しい' }, //38
                        { questionTitle: '保険金額と限度額', content: '超過限度額 → 保有限度額' }, //39 p181-182
                        { questionTitle: '金額別死亡率', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '被保険者の危険', label: 'イ', content: '実体的危険' }, //41
                        { questionTitle: '解除権の消滅', label: 'オ', content: '' }, //42
                        { questionTitle: '被保険者集団の具備すべき条件', label: 'イ', content: '倫理' }, //43
                        { questionTitle: '習慣による選択', label: 'ウ', content: '死亡率' }, //44
                        { questionTitle: 'エイズ', label: 'ウ', content: 'リンパ球' }, //45
                        { questionTitle: '契約の制限', label: 'エ', content: '加入保険金額' }, //46
                        { questionTitle: '第1次選択', label: 'オ', content: '' }, //47
                        { questionTitle: '医学的査定', label: 'ア', content: '恒常性危険' }, //48
                        { questionTitle: '復活', label: 'ウ', content: '長い' }, //49
                        { questionTitle: '契約確認後の処理', label: 'エ', content: '不実の告知' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kiken2020b" />
        </section>
    </SeihoTestLayout>
</template>
