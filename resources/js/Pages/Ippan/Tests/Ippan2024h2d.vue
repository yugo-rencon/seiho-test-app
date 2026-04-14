<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年7月〜12月実施 フォームD";
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
                    questionTitle="資産の運用-①"
                    :contents="[
                        '公共性',
                        '長期', // 問1〜2
                    ]"
                    :labels="[
                        'ウ', //1
                        'イ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '公社債',
                        '住宅ローン',
                        '投資', // 問3〜5
                    ]"
                    :labels="[
                        'オ', //3
                        'エ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '内閣総理大臣',
                        '「媒介」', // 問6〜7
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '告知義務違反',
                        '特別の利益の提供',
                        '行政処分', // 問8〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'ウ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '解約',
                        '健康状態', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'ウ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        'ニーズ',
                        '「契約転換制度」',
                        '中途付加', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'ウ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="保険料の税法上の取り扱い-①"
                    :contents="[
                        '契約者（保険料負担者）',
                        '課税所得', // 問16〜17
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
                    questionTitle="保険料の税法上の取り扱い-②"
                    :contents="[
                        '35000円',
                        '「介護医療保険料」',
                        '28000円', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'エ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="お客さまニーズへの対応-①"
                    :contents="[
                        'ライフサイクル',
                        '資金', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'ウ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="お客さまニーズへの対応-②"
                    :contents="[
                        '経済準備',
                        '保険設計書',
                        '設計', // 問23〜25
                    ]"
                    :labels="[
                        'ア', //23
                        'ウ', //24
                        'カ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :contents="[
                        '2',
                        '4000',
                        '1000',
                        '4',
                        '4000', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ク', //27
                        'オ', //28
                        'ウ', //29
                        'ク', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約申込みの撤回ができる → 撤回はできない', //p47
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
                        '全て切り上げ → 6ヶ月以下は切り捨て、6ヶ月超は切り上げ', //p41
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
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //41
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //47
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '',
                        }, //50
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '剰余金と配当金',
                            content: '保険業法の定める利率 → 生命保険会社の定める利率', //p29
                        }, //57
                        {
                            questionTitle: '保険料の払い込み',
                            content: '払い込む保険料の割り引きはない → 生命保険会社の定める利率で割り引かれる', //p50
                        }, //58
                        {
                            questionTitle: '保険料の払い込み',
                            content: '保険金受取人 → 契約者', //p50
                        }, //59
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                        }, //64
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                        }, //65
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '募集時の正しい説明',
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
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //68
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //69
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //70
                        { questionTitle: '社会保障制度', label: 'イ', content: '報酬比例' }, //71
                        { questionTitle: '社会保障制度', label: 'イ', content: '強制加入' }, //72
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '200％' }, //73
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //74
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //75
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者本位' }, //76
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '子会社形態' }, //77
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '「注意喚起情報」' }, //78
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '個人情報' }, //79
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //80
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '復活日' }, //81
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
