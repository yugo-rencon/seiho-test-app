<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年7月〜12月実施 フォーム④";
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
                    questionRange="1〜3"
                    questionTitle="隣接業界-①"
                    :contents="[
                        '終身共済',
                        '厚生労働省',
                        '小口', // 問1〜3
                    ]"
                    :labels="[
                        'イ', //1
                        'エ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="隣接業界-②"
                    :contents="[
                        '1年',
                        '1000万円', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '契約者',
                        '内閣総理大臣',
                        '告知義務違反', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                        'カ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '1年',
                        '5年', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        'ニーズ',
                        '契約転換制度',
                        '中途付加', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                        'オ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '継続',
                        'とは別に', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '解約返戻金',
                        '有効に',
                        '（自動）振替貸付', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'ウ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '3年',
                        '復活', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '終身',
                        '確定給付型の企業年金', // 問21〜22
                    ]"
                    :labels="[
                        'ウ', //21
                        'ア', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
                        'カ', //24
                        'ウ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '5',
                        '34',
                        '51',
                        '38',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ウ', //27
                        'ク', //28
                        'カ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '大正時代 → 明治時代', //p1
                        '正しい',
                        '平均寿命 → 平均余命', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        '実際の死亡者数が多い場合 → 実際の死亡者数が少ない場合', //p26
                        '正しい',
                        '正しい',
                        '保険業法の定める利率 → 生命保険会社の定める利率', //p29
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :contents="[
                        '職業上の危険、遺伝上の危険、道徳上の危険 → 身体上の危険、環境上の危険、道徳上の危険', //p52
                        '正しい',
                        '正しい',
                        '保険金受取人 → 被保険者（または契約者）', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '正しい',
                        '割賦販売法等 → 保険業法等', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の仕組み"
                    :contents="[
                        '正しい',
                        '公平の法則 → 大数の法則', //p14
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '保険業法の定める利率 → 生命保険会社の定める利率', //p50
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        '正しい',
                        '資産管理 → 経済準備', //p134
                        '正しい',
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
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '契約者本人のものに限る → 契約者本人またはその配偶者もしくはその他の親族', //p122
                        }, //39
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '35000円 → 40000円', //p124
                        }, //42
                        {
                            questionTitle: '相続の法律',
                            content: '配偶者2/3、兄弟姉妹1/3 → 兄弟姉妹3/4、親1/4', //p
                        }, //43
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '結婚しているか否かに関わらず → 結婚している場合不要となるケースもある', //不明
                        }, //49
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '平均年齢 → 満年齢', //p41
                        }, //50
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '30000円以上 → 50000円以上<br>100円の収入印紙 → 200円の収入印紙', //p43
                        }, //52
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '申込みがあった日にさかのぼって → 払い込みのあった日にさかのぼって', //p45
                        }, //55
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '承諾のあった日 → 診査（告知）のあった日にさかのぼって', //p46
                        }, //56
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        }, //59
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: 'すでに払い込んだ保険料は返還される → すでに払い込んだ保険料は返還されない', //p87
                        }, //62
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: 'お客さまの生活環境、家族構成等に変化がないかどうか等の情報収集を行うことも大切', //p89
                        }, //65
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
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
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '200%' }, //68
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //69
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //70
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //71
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //72
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: 'と同額' }, //74
                        { questionTitle: '生命保険の種類', label: 'ア', content: '大きくする' }, //75
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保証されています' }, //77
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //78
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //79
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //80
                        { questionTitle: '社会保障制度', label: 'ア', content: '障害' }, //81
                        { questionTitle: '社会保障制度', label: 'イ', content: '除く' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
