<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームE";
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
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '',
                        '',
                        '', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '',
                        '', // 問4〜5
                    ]"
                    :labels="[
                        'イ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '',
                        '', // 問6〜7
                    ]"
                    :labels="[
                        'イ', //6
                        'エ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="契約の選択-②"
                    :contents="[
                        '',
                        '',
                        '', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //8
                        'ウ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '',
                        '', // 問11〜12
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '',
                        '',
                        '', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'ウ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '',
                        '', // 問16〜17
                    ]"
                    :labels="[
                        'イ', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '',
                        '',
                        '', // 問18〜20
                    ]"
                    :labels="[
                        'イ', //18
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '',
                        '',
                        '', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'ウ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="相続の法律-②"
                    :contents="[
                        '',
                        '', // 問24〜25
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問26〜30
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
                    questionTitle="資産の運用"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
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
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '既払込保険料総額 → 解約返戻金', //p93
                        '正しい',
                        '正しい',
                        '払い戻されない → 払い戻す', //p96
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
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
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の仕組み"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="正しい告知の取り扱い"
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
                    questionTitle="お客さまニーズへの対応"
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                        }, //38
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                        }, //39
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                        }, //44
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                        }, //52
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険事業と銀行業 → 保険事業だけ',
                        }, //56 p32
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '生命保険以外の事業を自由にできる → 他の事業を営むことを制限されている',
                        }, //57 p33
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '',
                        }, //59
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                        }, //63
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                        }, //65
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '社会保障制度',
                            content: '',
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
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '承諾' }, //68
                        { questionTitle: '契約申込み時の実務', label: 'イ', content: '責任開始期' }, //69
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '8日' }, //70
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'クーリング・オフ' }, //71
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'お返しします' }, //72
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //73
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //74
                        { questionTitle: '隣接業界', label: 'ア', content: '1年' }, //75
                        { questionTitle: '隣接業界', label: 'ア', content: '1000万円以下' }, //76
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //77
                        { questionTitle: '企業向け商品', label: 'ア', content: '1年' }, //78
                        { questionTitle: '企業向け商品', label: 'ア', content: '確定拠出年金' }, //79
                        { questionTitle: '企業向け商品', label: 'ア', content: '企業（団体）' }, //80
                        { questionTitle: '企業向け商品', label: 'イ', content: '財形貯蓄積立保険' }, //81
                        { questionTitle: '企業向け商品', label: 'イ', content: '公的医療保険' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
