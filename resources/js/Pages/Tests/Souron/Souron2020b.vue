<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2020年度 フォームB";
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
                    questionTitle="危険の選択-①"
                    :relatedProblems="['2020b1']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    questionTitle="危険の選択-②"
                    :relatedProblems="['2020b6']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    questionTitle="資産運用-①"
                    :relatedProblems="['2020a11', '2020b11', '2020c11']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    questionTitle="資産運用-②"
                    :relatedProblems="['2020a16', '2020b16', '2020c16']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    questionTitle="生命保険契約の法的性質"
                    :relatedProblems="['2020b21']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '生命保険契約は、保険法上、一定の要式を要するとはしておらず、[[不要式契約である]]。', //p11
                        '生命保険契約は、大量の定型的取引を行い、またその技術性、専門性ゆえに、[[生命保険会社があらかじめ定めた保険約款をもとに契約を締結している]]わけであり、付合契約である。', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="ギルド"
                    :relatedProblems="['2020a22', '2020b22', '2020c22']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '都市経済では商人とその家族は１つの経済単位であり、彼らが被った経済的損失は、[[貴族も領主も救済してくれず、自らが補塡していかねばならない]]。', //p53
                        '正しい',
                        '太古の共同体や奴隷制度、さらに封建社会における農奴制度などは、社会それ自体が保障制度であったが、[[ギルドは封建社会の中で独立的な経済単位が結合して、自らの力で危険に対処した最初の試み]]である。', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける不没収法の制定"
                    :relatedProblems="['2020b23']"
                    :contents="[
                        // rev: 2026-07-09 確認済み
                        '長期契約に加入した契約者が中途で契約を解約した場合には、[[解約した契約者に所定の額を解約返戻金として返還することは一般的には行われていなかった]]。', //p61
                        '保険料の払込みが困難になった時には以後の保険料の払込みに振り替えて貸し付ける保険料振替制度も[[設けられた]]。', //p62
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="相互会社と株式会社"
                    :relatedProblems="['2020a24', '2020b24', '2020c24']"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '財団法人 → 社団法人', //p161
                        '相互会社には資本金は存在しないが、事業資金や担保資金として、相当額の[[資金]]が必要である。そのため保険業法では、相互会社の設立に際して基金の保有を求め、さらに基金を償却するときは、償却する額に相当する金額を積み立てなければならないとしている。', //p161
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化"
                    :relatedProblems="['2020a50', '2020b25', '2020c40']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '5% → 7%', //p181
                        '合計特殊出生率は年々低下し2005年度（平成17年度）には1.26となり、出生数が死亡数を下回って遂に[[人口が減少するという歴史的転換点を迎えることとなった]]。', //p183
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険と保険"
                    :relatedProblems="['2020b26']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '確率論における大数の法則に基づき、危険を被る対象物（母数）が多いほど危険の発生頻度の変動幅は[[小さく]]なる。', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険商品の基本型"
                    :relatedProblems="['2020b27']"
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
                    questionTitle="狭義の社会保障制度"
                    :relatedProblems="['2020a28', '2020b28', '2020c28']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '社会扶助制度 → 公的扶助制度', //p123
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本における生命保険の発展"
                    :relatedProblems="['2020b29']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '正しい',
                        '従来、全国各地の代理店を通じて、生命保険契約の募集を行っていた多くの会社は、その営業組織を強化するため、代理店に所属していた営業職員を会社直属に改めるとともに会社専属の営業職員制度を採用して、いわゆる[[代理店方式から会社専属の営業職員制度に変更した]]。', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済と保険"
                    :relatedProblems="['2020b30']"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '適合性の原則 → 給付・反対給付均等の原則', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の特殊性',
                            relatedProblems: ['2020a31', '2020b31', '2020c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-09 確認済み
                            questionTitle: '死亡表',
                            relatedProblems: ['2020a32', '2020b32', '2020c32'],
                            content: '国民生命表 → 経験生命表', //p15
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '責任準備金',
                            relatedProblems: ['2020b33', '2020c43'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険事業の革新',
                            relatedProblems: ['2020b34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '長期計画への役割',
                            relatedProblems: ['2020b35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-09 確認済み
                            questionTitle: '戦後混乱期から再建への足どり',
                            relatedProblems: ['2020a36', '2020b36', '2020c36'],
                            content: '第二会社設立に際し、多くの会社が[[株式会社から相互会社]]へと組織変更した。', //p78
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '公的医療保険',
                            relatedProblems: ['2020b37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '保険業法における保険募集',
                            relatedProblems: ['2020b38'],
                            content: '保険エージェント（保険代理人）制度 → 保険ブローカー（保険仲立人）制度',
                        }, //38
                        {
                            questionTitle: '日本の金融制度',
                            relatedProblems: ['2020b39'],
                            content: '今日 → 戦後',
                        }, //39 //p174
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '営業職員以外の販売チャネル',
                            relatedProblems: ['2020b40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険金額',
                            relatedProblems: ['2020b41'],
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険者',
                            relatedProblems: ['2020a42', '2020b42', '2020c42'],
                            label: 'ア',
                            content: '10',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '事業費',
                            relatedProblems: ['2020b43'],
                            label: 'エ',
                            content: '維持費',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '大正時代',
                            relatedProblems: ['2020b44'],
                            label: 'ウ',
                            content: '関東大震災',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険組合の誕生',
                            relatedProblems: ['2020a45', '2020b45', '2020c45'],
                            label: 'エ',
                            content: '賦課式',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '介護保険制度の概要',
                            relatedProblems: ['2020b46'],
                            label: 'ウ',
                            content: '第2号被保険者',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            relatedProblems: ['2020b47'],
                            label: 'イ',
                            content: '実体的監督主義',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '消費者保護',
                            relatedProblems: ['2020a48', '2020b48', '2020c48'],
                            label: 'イ',
                            content: '消費者契約法',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '共済',
                            relatedProblems: ['2020b49'],
                            label: 'エ',
                            content: '消費生活協同組合法(生協法)',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生保業界共通のシステム',
                            relatedProblems: ['2020b50'],
                            label: 'ア',
                            content: '団体定期保険',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2020a" next-route="souron2020c" />
        </section>
    </SeihoTestLayout>
</template>
