<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年1月〜6月実施 フォームA";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title" brand-name="生命保険一般課程 過去問解説">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="1〜2"
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '相互扶助',
                        '準備財産', // 問1〜2
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="生命保険の仕組み-②"
                    :contents="[
                        '大数の法則',
                        '生命表',
                        '死亡率', // 問3〜5
                    ]"
                    :labels="[
                        'イ', //3
                        'ウ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '継続',
                        '保険業法',
                        '所属生命保険会社', // 問6〜8
                    ]"
                    :labels="[
                        'オ', //6
                        'ア', //7
                        'エ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '適切な情報提供',
                        '社会的', // 問9〜10
                    ]"
                    :labels="[
                        'エ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="契約申込み時の実務-①"
                    :contents="[
                        '承諾',
                        '責任開始期', // 問11〜12
                    ]"
                    :labels="[
                        'エ', //11
                        'ア', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        '8日',
                        'クーリング・オフ',
                        '既払込金額', // 問13〜15
                    ]"
                    :labels="[
                        'ウ', //13
                        'オ', //14
                        'ア', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '環境',
                        '契約内容登録制度',
                        '面接', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'オ', //17
                        'ウ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '保険金削減',
                        '特別条件', // 問19〜20
                    ]"
                    :labels="[
                        'ウ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '2/3',
                        '3/4',
                        '相続の放棄', // 問21〜23
                    ]"
                    :labels="[
                        'ウ', //21
                        'エ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="相続の法律-②"
                    :contents="[
                        '限定',
                        'みなし', // 問24〜25
                    ]"
                    :labels="[
                        'エ', //24
                        'ア', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :contents="[
                        '2',
                        '4,000',
                        '1,000',
                        '4',
                        '4,000', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'ケ', //27
                        'カ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '正しい',
                        '雑所得 → 一時所得', //p126
                        '700万円 → 500万円', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険業法の定める利率 → 生命保険会社の定める利率', //p50
                        '途中で変更することはできない → 途中で変更することができる', //p51
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険契約は対象外 → 保険契約も対象に含まれる', //p69
                        '質問応答義務から自発的申告義務に変更 → 自発的申告義務から質問応答義務に変更', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :contents="[
                        '正しい',
                        '死亡した被保険者の数に関わらず死亡保険金は支払われない → 死亡した被保険者の数によって死亡保険金を全額または削減して支払う', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的な資産運用をしなければならず、安全性に配慮して運用する必要はない → 効率的で安定した資産運用をしなければならない', //p34
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '正しい',
                        '転換後の契約に関する事項のみを記載した書面を交付 → 転換前と転換後の契約に関する事項を対比して記載した書面を交付', //p92
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい',
                        '正しい',
                        '解約返戻金は必ずある → 解約返戻金が全くない場合もある', //p99
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="38"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        // 問38〜67
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の役割',
                            content: '男性・女性の平均寿命はともに90歳を超えている → 男性は約81歳、女性は約87歳（令和6年簡易生命表）', //p3
                        }, //40
                        {
                            questionTitle: '生命保険の役割',
                            content: '平均寿命 → 平均余命', //p4
                        }, //41
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '剰余金と配当金',
                            content: '保険業法の定める利率 → 生命保険会社の定める利率', //p29
                        }, //47
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '株式会社 → 相互会社', //p32
                        }, //51
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '他の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                        }, //52
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '単に会社員とか、あるいは会社名を記入していただければ良い → 現在の仕事の内容を具体的に記入していただく必要がある', //p40
                        }, //54
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '5ヶ月 → 6ヶ月', //p41
                        }, //55
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        }, //58
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: 'すでに払い込んだ保険料は返還される → すでに払い込んだ保険料は返還されない', //p87
                        }, //61
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '企業向け商品',
                            content: '受取人が役員・幹部従業員の遺族 → 受取人が企業（団体）', //p
                        }, //65
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '企業向け商品',
                            content: '労災保険 → 健康保険<br>公的介護保険制度 → 公的医療保険制度', //p119
                        }, //67
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="68"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        // 問68〜82
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //68
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //69
                        { questionTitle: '隣接業界', label: 'イ', content: '1,000万円' }, //70
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //71
                        { questionTitle: '隣接業界', label: 'ア', content: '定期年金' }, //72
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //74
                        { questionTitle: '生命保険の種類', label: 'イ', content: '大きくする' }, //75
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保証されています' }, //77
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //78
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //79
                        { questionTitle: '社会保障制度', label: 'イ', content: '強制加入' }, //80
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //81
                        { questionTitle: '社会保障制度', label: 'イ', content: '障害' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
