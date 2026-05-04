<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年1月〜6月実施 フォームB";
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
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '公序良俗',
                        '約款', // 問1〜2
                    ]"
                    :labels="[
                        'イ', //1
                        'エ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '復活日',
                        '故意',
                        '戦争その他の変乱', // 問3〜5
                    ]"
                    :labels="[
                        'エ', //3
                        'オ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の役割-①"
                    :contents="[
                        '福沢諭吉',
                        '明治',
                        '核家族', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'オ', //7
                        'ウ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の役割-②"
                    :contents="[
                        '平均余命',
                        '388', // 問9〜10
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
                    questionTitle="保険料の税法上の取り扱い-①"
                    :contents="[
                        '課税所得',
                        '所得税', // 問11〜12
                    ]"
                    :labels="[
                        'ウ', //11
                        'ア', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="保険料の税法上の取り扱い-②"
                    :contents="[
                        '35000円',
                        '介護医療',
                        '28000円', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'ウ', //14
                        'ア', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-①"
                    :contents="[
                        '保険金受取人',
                        '一時所得',
                        '110万円', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'エ', //17
                        'カ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-②"
                    :contents="[
                        '被保険者',
                        '非課税', // 問19〜20
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
                    questionTitle="お客さまニーズへの対応-①"
                    :contents="[
                        'ライフサイクル',
                        '心的準備', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'エ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="お客さまニーズへの対応-②"
                    :contents="[
                        '',
                        '',
                        '', // 問23〜25
                    ]"
                    :labels="[
                        'ウ', //23
                        'ア', //24
                        'オ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '4',
                        '37',
                        '55',
                        '34',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'オ', //27
                        'ク', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約取り扱いの手続き"
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
                    questionTitle="企業向け商品"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
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
                    questionTitle="生命保険の募集等に関する法律"
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
                    questionTitle="募集時の正しい説明"
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
                    questionTitle="社会保障制度"
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
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '保全・アフターサービスの重要性',
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
                            content: '', //p
                        }, //50
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '生命保険の仕組み',
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
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '資産の運用',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '資産の運用',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '資産の運用',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '', //p
                        }, //64
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '', //p
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
                        { questionTitle: '相続の法律', label: 'ア', content: '放棄' }, //68
                        { questionTitle: '相続の法律', label: 'イ', content: '限定承認' }, //69
                        { questionTitle: '相続の法律', label: 'イ', content: '単純承認' }, //70
                        { questionTitle: '相続の法律', label: 'ア', content: 'みなし相続財産' }, //71
                        { questionTitle: '相続の法律', label: 'イ', content: '3/4' }, //72
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '200%' }, //73
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '基礎利益' }, //74
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //75
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //76
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //77
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //78
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //79
                        { questionTitle: '隣接業界', label: 'イ', content: '1000万円' }, //80
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //81
                        { questionTitle: '隣接業界', label: 'ア', content: '定期年金' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
