<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2020年度 フォームB";
const SAME = "※2020年度フォームA/B/Cで同一問題";
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
                    :contents="[
                        '危険均一性', //1
                        '高額', //2
                        '健康', //3
                        '診査医', //4
                        '生命保険面接士', //5
                    ]"
                    :labels="[
                        'カ', //1
                        'イ', //2
                        'ク', //3
                        'エ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '契約確認', //6
                        '公平性', //7
                        '評価', //8
                        '高危険', //9
                        '特別', //10
                    ]"
                    :labels="[
                        'キ', //6
                        'ア', //7
                        'オ', //8
                        'イ', //9
                        'ク', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '予定利率', //11
                        '逆ざや', //12
                        'ALM（資産負債統合管理）', //13
                        '法令等の遵守（コンプライアンス）', //14
                        '負債特性', //15
                    ]"
                    :labels="[
                        'ウ', //11
                        'オ', //12
                        'コ', //13
                        'カ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '法定他業', //16
                        '規制緩和', //17
                        '金融システム改革法', //18
                        '50', //19
                        'デリバティブ', //20
                    ]"
                    :labels="[
                        'コ', //16
                        'エ', //17
                        'キ', //18
                        'オ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //21-ア
                        '生命保険契約は要式契約でない', //21-イ p11
                        '契約当事者がお互い協議 → 契約当事者の一方があらかじめ定めた契約条項を相手方が包括的に承認', //21-ウ p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '救済してくれた → 救済はなく、自らが補塡', //22-ア p53
                        '正しい', //22-イ
                        'ギルドは保障制度ではない', //22-ウ p54
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '返還することが一般的 → 返還は一般的に行われていなかった', //23-ア p61
                        '導入できなかった → 導入された', //23-イ p62
                        '正しい', //23-ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '財団法人 → 社団法人', //24-ア p160
                        '資本金 → 資金', //24-イ p160
                        '正しい', //24-ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '5% → 7%', //25-ア p180
                        '人口減少にいたっていない → 出生数が死亡数を下回って人口が減少している', //25-イ p182
                        '正しい', //25-ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //26-ア
                        '変動幅は大きくなる → 小さくなる', //26-イ p4
                        '正しい', //26-ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //27-ア
                        '途中で死亡した場合は保険金は支払われず、掛け捨てとなるため、貯蓄保険ではない', //27-イ p31-32
                        '正しい', //27-ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '正しい', //28-ア
                        '正しい', //28-イ
                        '社会扶助制度 → 公的扶助制度', //28-ウ p123
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //29-ア
                        '正しい', //29-イ
                        '会社専属の営業職員制度から代理店方式 → 代理店方式から会社専属の営業職員制度', //29-ウ p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //30-ア
                        '適合性の原則 → 給付・反対給付均等の原則', //30-イ p164
                        '正しい', //30-ウ
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40（解）
                        { label: '解', content: '正しい', note: SAME }, //31
                        { label: '解', content: '国民生命表 → 経験生命表', note: SAME }, //32 p15
                        { label: '解', content: '正しい' }, //33
                        { label: '解', content: '正しい' }, //34
                        { label: '解', content: '正しい' }, //35
                        { label: '解', content: '相互会社から株式会社 → 株式会社から相互会社', note: SAME }, //36 p78
                        { label: '解', content: '正しい' }, //37
                        { label: '解', content: '保険エージェント（保険代理人）制度 → 保険ブローカー（保険仲立人）制度' }, //38
                        { label: '解', content: '今日 → 戦後' }, //39
                        { label: '解', content: '正しい' }, //40
                        // 問41〜50（ア〜オ）
                        { label: 'オ', content: '' }, //41
                        { label: 'ア', content: '10', note: SAME }, //42
                        { label: 'エ', content: '維持費' }, //43
                        { label: 'ウ', content: '関東大震災' }, //44
                        { label: 'エ', content: '賦課式', note: SAME }, //45
                        { label: 'ウ', content: '第2号被保険者' }, //46
                        { label: 'イ', content: '実体的監督主義' }, //47
                        { label: 'イ', content: '消費者契約法', note: SAME }, //48
                        { label: 'エ', content: '消費生活協同組合法(生協法)' }, //49
                        { label: 'ア', content: '団体定期保険' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2020a" next-route="souron2020c" />
        </section>
    </SeihoTestLayout>
</template>
