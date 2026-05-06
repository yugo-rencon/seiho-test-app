<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年1月〜6月実施 フォームC";
const isDraft = true;
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
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '終身',
                        '確定給付型の企業年金', // 問1〜2
                    ]"
                    :labels="[
                        'ウ', //1
                        'ア', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問3〜5
                    ]"
                    :labels="[
                        'イ', //3
                        'カ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '保全', // 問6〜8
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
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '所属生命保険会社', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        '死差益',
                        '予定事業費率', // 問11〜12
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
                questionTitle="剰余金と配当金-②"
                :contents="[
                    '契約者',
                    '生命保険会社',
                    '複利', // 問13〜15
                ]"
                    :labels="[
                        'イ', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '死亡保障',
                        '追加', // 問16〜18
                    ]"
                    :labels="[
                        'ウ', //16
                        'オ', //17
                        'ア', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '契約者',
                        '意向確認書面', // 問19〜20
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
                    questionTitle="保険料の税法上の取り扱い-①"
                    :contents="[
                        '契約者',
                        '所得税', // 問21〜22
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
                    questionTitle="保険料の税法上の取り扱い-②"
                    :contents="[
                        '35000円',
                        '介護医療',
                        '28000円', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
                        'カ', //24
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
                        '3000',
                        '1000',
                        '3',
                        '3000', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ケ', //27
                        'カ', //28
                        'イ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的な資産運用をしなければならず、安全性に配慮する必要はない → 効率的で安定した資産運用をしなければならない', //p34
                        '正しい',
                        '正しい',
                        '資産運用の対象に貸付金も含まれる', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="正しい告知の取り扱い"
                    :contents="[
                        '正しい',
                        '', //p
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
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //39
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //60
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //63
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '相続の法律',
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
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '贈与税' }, //68
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '保険金受取人' }, //69
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '50万円' }, //70
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '500万円' }, //71
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '基礎控除額' }, //72
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: '被保険者' }, //73
                        { questionTitle: '契約取り扱いの手続き', label: 'ア', content: '保険年齢' }, //74
                        { questionTitle: '契約取り扱いの手続き', label: 'ア', content: '正確なものを新しく発行すること' }, //75
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: '50000円' }, //76
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: 'なります' }, //77
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '解約返戻金' }, //78
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '同様の' }, //79
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '生命保険会社' }, //80
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '消滅' }, //81
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: 'あれば払い戻されます' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
