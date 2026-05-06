<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年7月〜12月実施 フォームB";
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
                    questionRange="1〜3"
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                        'エ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="保険料の払い込み-①"
                    :contents="[
                        '契約者',
                        '給与引去り', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="保険料の払い込み-②"
                    :contents="[
                        '集金',
                        '生命保険会社',
                        '保険料（現金）', // 問8〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'ウ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '死亡保障',
                        '追加', // 問11〜13
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
                        '契約者',
                        '転換時', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
                        '終身', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問18〜20
                    ]"
                    :labels="[
                        'ウ', //18
                        'ア', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '1/2',
                        '3/4',
                        '放棄', // 問21〜23
                    ]"
                    :labels="[
                        'イ', //21
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
                        '単純',
                        'みなし', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
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
                    questionTitle="社会保障制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的で投機的な資産運用をしなければならない → 効率的で安定した資産運用をしなければならない', //p34
                        '正しい',
                        '資産運用の対象に貸付金も含まれる', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約取り扱いの手続き"
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
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :contents="[
                        '', //p
                        '正しい',
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
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '', //p
                        }, //46
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //54
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //55
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '', //p
                        }, //63
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
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
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //68
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '性別' }, //69
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '大数の法則' }, //70
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //71
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '保険契約者' }, //72
                        { questionTitle: '生命保険の役割', label: 'ア', content: '明治' }, //73
                        { questionTitle: '生命保険の役割', label: 'イ', content: '自己' }, //74
                        { questionTitle: '生命保険の役割', label: 'イ', content: '平均余命' }, //75
                        { questionTitle: '生命保険の役割', label: 'ア', content: '弔慰金制度' }, //76
                        { questionTitle: '生命保険の役割', label: 'ア', content: '多様化' }, //77
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //78
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //79
                        { questionTitle: '隣接業界', label: 'ア', content: '1年' }, //80
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //81
                        { questionTitle: '隣接業界', label: 'イ', content: '定期年金' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
