<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームC";
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
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '',
                        '', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '',
                        '',
                        '', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="正しい告知の取り扱い-①"
                    :contents="[
                        '',
                        '', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="正しい告知の取り扱い-②"
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
                    questionTitle="隣接業界-①"
                    :contents="[
                        '',
                        '',
                        '', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="隣接業界-②"
                    :contents="[
                        '',
                        '', // 問24〜25
                    ]"
                    :labels="[
                        'ア', //24
                        'ウ', //25
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
                <QuestionTemp1 :questionNumber="31" :title="title" :subject="subject" questionTitle="資産の運用" :contents="['', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="32" :title="title" :subject="subject" questionTitle="相続の法律" :contents="['', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="33" :title="title" :subject="subject" questionTitle="お客さまニーズへの対応" :contents="['', '', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="34" :title="title" :subject="subject" questionTitle="生命保険の種類" :contents="['正しい', '正しい', '']" />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '正しい',
                        '正しい',
                        '平均寿命 → 平均余命', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '正しい',
                        '預金保険法等 → 保険業法等', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '生命保険以外の事業を自由にできる → 他の事業を営むことを制限されている', //p33
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
                            content: '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        }, //38
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '契約者 → 被保険者', //p40
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
                            content: '保険料が30000円以上 → 50000円以上', //p43
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '割り引きはない → 生命保険会社の定めた利率で割り引かれる', //p50
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '保険金受取人 → 契約者', //p50
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
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '',
                        }, //50
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '',
                        }, //51
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '',
                        }, //55
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料総額の範囲内 → 解約返戻金の一定範囲内',
                        }, //58 p93
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '配当金が少なくなる → 同様の配当金が支払われる',
                        }, //59 p93
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
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
                            content: '',
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
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '費差益' }, //73
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '割安' }, //74
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '生命保険会社' }, //75
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '一定割合' }, //76
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '相殺' }, //77
                        { questionTitle: '企業向け商品', label: 'ア', content: '1年' }, //78
                        { questionTitle: '企業向け商品', label: 'イ', content: '確定拠出年金' }, //79
                        { questionTitle: '企業向け商品', label: 'ア', content: '企業（団体）' }, //80
                        { questionTitle: '企業向け商品', label: 'ア', content: '財形貯蓄積立保険' }, //81
                        { questionTitle: '企業向け商品', label: 'イ', content: '公的医療保険' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
